<?php

// Copyright (C) 2008 Ilya S. Lyubinskiy. All rights reserved.
// Technical support: http://www.php-development.ru/
//
// YOU MAY NOT
// (1) Remove or modify this copyright notice.
// (2) Re-distribute this code or any part of it.
//     Instead, you may link to the homepage of this code:
//     http://www.php-development.ru/javascripts/ajax-chat.php
// (3) Use this code or any part of it as part of another product.
//
// YOU MAY
// (1) Use this code on your website.
//
// NO WARRANTY
// This code is provided "as is" without warranty of any kind.
// You expressly acknowledge and agree that use of this code is at your own risk.

$response = new stdClass();
$response->success = true;
$response->text = "";
$response->lines = array();

if (isset($_GET['room']) &&
    isset($_GET['user']) &&
    isset($_GET['pass']) &&
    isset($_GET['mptr']))
{ /* to get messages, you must be logged in and in a room and tell me the last message you got */
  include_once 'init.php'; /*Get the INIT*/
  $modified = unlog_users(); /* refresh the user list and note if we changed it */

  try{
  	  /*echo "<pre>";
  	  print_r($chat_data);
  	  echo "</pre>";*/
  	
	  if ($chat_data['kick'][$_GET['user']] ||
	      $chat_data['kick'][$_SERVER['REMOTE_ADDR']]) /* If this user is kicked */
	  {
	  	throw new Exception("This user is kicked");
	  }
	
	  if (isset($chat_data['user'][$_GET['user']]) &&
	      isset($chat_data['pass'][$_GET['user']]) &&
	           ($chat_data['pass'][$_GET['user']]) == $_GET['pass']) { /* If the user is logged in, */
	  	$response->operator .= "+"; /* print a + */
	  }
	  else {
	  	$response->operator .= "-";
	  	//throw new Exception("This user is not logged in!");
	  }
	   
	  foreach ($chat_data['data'] as $i => $x){  /* foreach post in the data array, */
	    if ($i > $_GET['mptr']){ /* if the message is newer than the last one we got, */
	  	  $temp = array();
	  	  $temp['lineId'] = $i;
	      if (!is_array($x)){ /* if the post is just text, then it's a log entry, not a chat line */
	      	//$temp['rawtext'] = "$x"; /* print it with its id */
	      	$lineSplit = preg_split('/\n|\r\n?/', $x);
	  		if($lineSplit[0] == '+'){ // entering room
	  			$temp['operation'] = 'add';
	  			$temp['type'] = "room";
	  			$temp['roomname'] = $lineSplit[1];
	  			$temp['handle'] = $lineSplit[2];
	  			$temp['gender'] = $lineSplit[3];
	  			$temp['status'] = $lineSplit[4];
	      	}elseif($lineSplit[0] == '-'){ // leaving room
	      		$temp['operation'] = 'remove';
	      		$temp['type'] = "room";
	      		$temp['roomname'] = $lineSplit[1];
	      		$temp['handle'] = $lineSplit[2];
	      	}elseif($lineSplit[0] == 's'){ // away
	      		$temp['type'] = "away";
	      		$temp['handle'] = $lineSplit[1];
	      		$temp['operation'] = ($lineSplit[2] == '+') ? 'activate' : 'deactivate';
	      	}
	      	$response->lines[] = $temp; // Add it to the response 
	  	  }
	      else if ($x['priv'] == '.' && $x['room'] == $_GET['room'] || /* If it's in my room, */
	               $x['priv'] != '.' && $x['user'] == $_GET['user'] || /* If it's a priv for me */
	               $x['priv'] != '.' && $x['priv'] == $_GET['user']){  /* If it's a priv from me */
	      	// build a line item  (Redundant? No.  We will get them from the DB with these objects later.)
	      	$line = new Model_Structure_ChatLog();
	      	$line->setFromFile($x['data']);
	      	
	      	$roomProvider = new Model_Data_ChatRoomProvider();
	      	$room = $roomProvider->getOneByName($_GET['room']);
	      	if(is_object($room)){
	      		$line->setChatRoomId($room->getChatRoomId());
	      	}
	      	$line->setTimestamp($x['time']);
	      	
	      	$temp['roomname'] = $_GET['room'];
	      	$temp['type'] = 'line';
	      	$temp['rawtext'] = "{$x['data']}";
	      	$temp = array_merge($temp, $line->getAsArray()); // store the line as an array
	      	$temp['interval'] = (time()-$x['time']); 
	      	$response->lines[] = $temp; // Add it to the response 
	      }
	   }
	 }
	if ($modified) file_put_contents('data.txt', serialize($chat_data));  /* If I made changes, add the modified contents to the file */
  }catch(Exception $e){
  	$response->operator = "-"; /*return a - */
  	$response->success = false;
  	$response->error = $e->getMessage();
  }
}
/*echo "<pre>";
print_r($response);
echo "</pre>";*/
$encodedResponse = json_encode($response);
echo $encodedResponse;
/*echo "<pre>";
print_r(json_decode($encodedResponse));
echo "</pre>";*/

?>