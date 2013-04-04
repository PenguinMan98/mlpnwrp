<?php
include("TokenOperation.php");

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

if (isset($_GET['user']) && $_GET['user'] &&
    isset($_GET['pass']) && $_GET['pass'] &&
    isset($_GET['priv']) && $_GET['priv'] &&
    isset($_GET['colr']) && $_GET['colr'] &&
    isset($_GET['data']) && $_GET['data'])
{
  include_once 'init.php';
  $modified = unlog_users();

  $time = time();
  $gndr = $chat_data['gndr'][$_GET['user']];
  $stat = $chat_data['stat'][$_GET['user']];
  $room = $chat_data['room'][$_GET['user']];
  $rand = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['rand']), ENT_QUOTES);
  //$time = microtime();// rand changed by joe to timestamp.  Works a lot better.
  $user = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['user']), ENT_QUOTES);
  $priv = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['priv']), ENT_QUOTES);
  $colr = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['colr']), ENT_QUOTES);
  $data = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['data']), ENT_QUOTES, 'utf-8');
  $addr = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['addr']), ENT_QUOTES);
  $guid = $user.$rand.$user;

  // Joe added a word filter
  $badWords = array("/fuck\S*/i",
  					"/bitch\S*/i",
			  		"/shit\S*/i",
			  		/*"/\bass\S*//*i", */
			  		"/\bcunt\S*/i",
			  		"/penis\S*/i",
			  		"/pussy\S*/i",
			  		"/\bdick\S*/i",
			  		"/vagina\S*/i");
  foreach($badWords as $regex){
  	$data = preg_replace($regex, '****', $data);
  }

  $data = str_replace("<", "(", $data);
  $data = str_replace("&lt;", "(", $data);
  $data = str_replace(">", ")", $data);
  $data = str_replace("&gt;", ")", $data);
  
  /*$data = preg_replace("/good/i", "g00d", $data);// this and its companion allows the word 'good' past the filter
  $data = preg_replace("/g+o+d+s+/i", "Princesses", $data);
  $data = preg_replace("/g+o+d+/i", "Princess", $data);
  $data = preg_replace("/j+e+s+u+s+\s+c+h+r+i+s+t+/i", "Princess Celestia", $data);
  $data = preg_replace("/j+e+s+u+s+/i", "Princess Celestia", $data);
  $data = preg_replace("/g00d/i", "good", $data);*/
/*	text=text.replace(/gods/gi, 'Princesses');
	text=text.replace(/god/gi, 'Princess');
*/
  // Joe added Operations
  $data = new TokenOperation($data);

  if ($chat_data['mute'][$user] || $chat_data['mute'][$_SERVER['REMOTE_ADDR']] ||
      $chat_data['kick'][$user] || $chat_data['kick'][$_SERVER['REMOTE_ADDR']])
  {
    $response->text = $chat_err_mute;
    $response->success = false;
    die;
  }

  if (isset($chat_data['room'][$user]) &&
      isset($chat_data['user'][$user]) &&
      isset($chat_data['pass'][$user]) &&
           ($chat_data['pass'][$user]) == $_GET['pass'])
  {
    $modified = true;

        $chat_data['time'][$user] = time();
    if ($chat_data['away'][$user]) $chat_data['data'][] = "s\r\n$user\r\n+";
        $chat_data['away'][$user] = false;

    if     (in_array($_GET['user'], $chat_admins) &&
            preg_match("/^\\s*\\/(kick|mute)\\s*([0-9a-zA-Z_]+)\\s*([0-9]+)\\s*$/", $_GET['data'], $matches))
    {
      $cmd_type = $matches[1];
      $cmd_user = $matches[2];
      $cmd_time = $matches[3];
      if ($cmd_type == 'kick') $chat_data['kick'][$cmd_user] = time()+$cmd_time*24*3600;
      if ($cmd_type == 'mute') $chat_data['mute'][$cmd_user] = time()+$cmd_time*24*3600;
      if ($cmd_type == 'kick') $response->text = "User <b>" . htmlentities($cmd_user) . "</b> is kicked for " . $cmd_time . " day(s)";
      if ($cmd_type == 'mute') $response->text = "User <b>" . htmlentities($cmd_user) . "</b> is  muted for " . $cmd_time . " day(s)";
      $response->success = false;
    }
    elseif (in_array($_GET['user'], $chat_admins) &&
            preg_match("/^\\s*\\/(list)\\s*(kick|mute)\\s*$/", $_GET['data'], $matches))
    {
      if ($matches[2] == 'kick') $response->text = count($chat_data['kick']) . " user(s) kicked: " . implode(', ', array_keys($chat_data['kick']));
      if ($matches[2] == 'mute') $response->text = count($chat_data['mute']) . " user(s)  muted: " . implode(', ', array_keys($chat_data['mute']));
      $response->success = false;
    }
    else
    {
    	// check for duplicate post
    	$contents = file("data.txt");
    	$duplicatePost = preg_grep("/$guid/i",$contents);

    	// Joe added flood protection
    	$FLOODCUTOFFTIME = 5; // can't post more than 3 times in a 5 second period.
    	$FLOODCUTOFFPOSTS = 3; // can't post more than 3 times in a 5 second period.
    	$ipPosts = array_values(preg_grep("/".str_replace(".","\.",$addr)."/i",$contents));
    	$matches = array();
    	$result = preg_match("/\"time\";i:(\d*);/i",$ipPosts[count($ipPosts)-$FLOODCUTOFFPOSTS],$matches);
    	$timeDiff = $FLOODCUTOFFTIME+1;
    	if($result > 0){
    		$timeDiff = time() - $matches[1];
    	}

    	if($addr == "127.0.0.1"){
    		/*echo "debug mode on.<br>";
			echo "<pre>";
	    	print_r();
	    	echo "</pre>";*/
    	}

    	if(count($duplicatePost) == 0 && $timeDiff > $FLOODCUTOFFTIME){ //

	      $chat_data['data'][] = array('time' => $time,
	                                   'guid' => $guid,
	                                   'room' => $room,
	      							   'user' => $user,
	                                   'priv' => $priv,
	                                   'addr' => $addr,
	      							   'data' => "m\r\n$colr\r\n$gndr\r\n$stat\r\n$user\r\n$priv\r\n$data");
	      foreach($chat_data['data'] as $i => $x)
	      {
	        if (count($chat_data['data']) <= $chat_histlen) break;
	        unset($chat_data['data'][$i]);
	      }
        }elseif($timeDiff <= $FLOODCUTOFFTIME){
        	$response->text = "Your post \"$data\" was not registered due to flood protection.";
        	$response->success = false;
        }
    }
  }

  if ($modified){
  	file_put_contents('data.txt', serialize($chat_data));
  	
  	$arrErrors = array();
  	
  	//get the chat room id
  	$chatRoomProvider = new Model_Data_ChatRoomProvider();
  	$chatRoom = $chatRoomProvider->getOneByName($room);
  	
  	// get the username
  	$userProvider = new Model_Data_Phpbb_UsersProvider();
  	$username = str_replace("GT-","",$user);
  	$userObj = $userProvider->getOneByName($username);
  	
  	$chatLogProvider = new Model_Data_ChatLogProvider();
  	$chatLog = new Model_Structure_ChatLog();
  	$chatLog->setChatRoomId($chatRoom->getChatRoomId());
  	if(is_object($userObj)) { // this is a registered user
  		$chatLog->setUserId($userObj->getUserId());
  	}else{
  		$chatLog->setUsername($user);
  	}
  	
  	$chatLog->setColor($colr);
  	$chatLog->setText($data);
  	
  	if(!empty($priv) && $priv != '.'){
  		$recipient = $userProvider->getOneByName(str_replace("GT-","",$priv));
  		if(is_object($recipient)){ // this is a registered user
  			$chatLog->setRecipientUserId($recipient->getUserId());
  		}else{
  			$chatLog->setRecipientUsername($priv);
  		}
  	}
  	$chatLog->setTimestamp(date('Y-m-d H:i:s'));
  	
  	/*if($addr == "127.0.0.1"){
  		echo "debug mode on.<br>";
  		 echo "<pre>";
  		print_r($chatLog);
  		echo "</pre>";
  	}*/
  	
  	$chatLogProvider->insertOne($chatLog, $arrErrors);
  	if(!empty($arrErrors)){
  		$response->success = false;
  		$response->text = "I just don't know what went wrong!  But the system says this: " . implode('|',$arrErrors);
  	}
  }
}
echo json_encode($response);
?>