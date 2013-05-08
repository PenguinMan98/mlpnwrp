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
//$response->messages = array(); // do not initialize this
$response->success = true;
$response->text = "";

if (isset($_GET['rand']) && $_GET['rand'] &&
	isset($_GET['user']) && $_GET['user'] &&
    isset($_GET['pass']) && $_GET['pass'] &&
    isset($_GET['priv']) && $_GET['priv'] &&
    isset($_GET['colr']) && $_GET['colr'] &&
    isset($_GET['data']) && $_GET['data'])
{
  include_once 'init.php';
  
  // log all calls to this file
  $logProvider = new Model_Data_LogProvider();
  $log = new Model_Structure_Log(array(
  		'file'=>__FILE__,
  		'log_entry'=>serialize($_REQUEST),
  		'severity'=>'notice'
  ));
  $arrErrors = array();
  $logProvider->insertOne($log, $arrErrors);
  
  $modified = unlog_users();/* refresh the user list and note if we changed it */

  $time = time(); // declare the variables and grab the input that we need
  $gndr = $chat_data['gndr'][$_GET['user']];
  $stat = $chat_data['stat'][$_GET['user']];
  $response->rand = $rand;
  // all the preg replace does is replace strings of multiple spaces with just one space.
  $room = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['room']), ENT_QUOTES);
  $rand = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['rand']), ENT_QUOTES);
  $handle = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['user']), ENT_QUOTES);
  $priv = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['priv']), ENT_QUOTES);
  $colr = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['colr']), ENT_QUOTES);
  $data = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['data']), ENT_QUOTES, 'utf-8');
  $addr = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['addr']), ENT_QUOTES);
  $guid = $handle.$rand.$handle;
  
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

  	// this strips all < characters out of the chat.  It's to prevent cheating on the dice rolls.
  	// I should find a better solution because I can't give <3 this way.
  $data = str_replace("<", "(", $data);
  $data = str_replace("&lt;", "(", $data);
  $data = str_replace(">", ")", $data);
  $data = str_replace("&gt;", ")", $data);
  
  /*$data = preg_replace("/good/i", "g00d", $data);// this and its companion allows the word 'good' past the filter
  $data = preg_replace("/g+o+d+s+/i", "Princesses", $data);
  $data = preg_replace("/g+o+d+/i", "Princess", $data);*/
  $data = preg_replace("/j+e+s+u+s+\s+c+h+r+i+s+t+/i", "Princess Celestia", $data);
  $data = preg_replace("/j+e+s+u+s+/i", "Princess Celestia", $data);
  //$data = preg_replace("/g00d/i", "good", $data);

  // Joe added Operations
  $input = $data; // save the original input
  try{
  	$messages = array();
  	new TokenOperation($data, $messages);// data goes in and gets changed by reference, messages come out.
  	$response->messages = $messages;
  }catch(Exception $e){
  	$response->error = $e->getMessage(); // if the parser fails, 
  	$data = $input; // just store the original input
  }
  

  if ($chat_data['mute'][$handle] || $chat_data['mute'][$_SERVER['REMOTE_ADDR']] || // if this character is muted or their ip is muted
      $chat_data['kick'][$handle] || $chat_data['kick'][$_SERVER['REMOTE_ADDR']])// if this character is kicked or their ip is kicked
  {
    $response->text = $chat_err_mute; // throw an error
    $response->success = false;
    die;
  }

  if (isset($chat_data['room'][$handle]) &&// verifies that a username and password are stored and the char is in a room
      isset($chat_data['user'][$handle]) &&
      isset($chat_data['pass'][$handle]) &&
           ($chat_data['pass'][$handle]) == $_GET['pass'])
  {
    $modified = true; // set modified to true because we're adding a post.
    $chat_data['time'][$handle] = $time;  // set the time into the chat data

    if ($chat_data['away'][$handle]) // if I'm away,
    	$chat_data['data'][] = "s\r\n$handle\r\n+";// put an s notice into the data stream to make me active again
    $chat_data['away'][$handle] = false; // set my away status to false in the chat data

    if(in_array($_GET['user'], $chat_admins) && // if the user is an admin, 
            preg_match("/^\\s*\\/(kick|mute)\\s*([0-9a-zA-Z_]+)\\s*([0-9]+)\\s*$/", $_GET['data'], $matches)) // and it's a mute or kick command
    {
      $cmd_type = $matches[1]; // kick or mute
      $cmd_user = $matches[2]; // username
      $cmd_time = $matches[3]; // time interval
      if ($cmd_type == 'kick') $chat_data['kick'][$cmd_user] = time()+$cmd_time*24*3600; // set the interval when the kick will expire
      if ($cmd_type == 'mute') $chat_data['mute'][$cmd_user] = time()+$cmd_time*24*3600; // set the interval when the ban will expire
      if ($cmd_type == 'kick') $response->text = "User <b>" . htmlentities($cmd_user) . "</b> is kicked for " . $cmd_time . " day(s)";
      if ($cmd_type == 'mute') $response->text = "User <b>" . htmlentities($cmd_user) . "</b> is  muted for " . $cmd_time . " day(s)";
      $response->success = false; // why not true?
    }
    elseif (in_array($_GET['user'], $chat_admins) && // if the user is an admin
            preg_match("/^\\s*\\/(list)\\s*(kick|mute)\\s*$/", $_GET['data'], $matches)) // and they are asking for a list of kicked or banned users,
    {
      if ($matches[2] == 'kick') $response->text = count($chat_data['kick']) . " user(s) kicked: " . implode(', ', array_keys($chat_data['kick']));
      if ($matches[2] == 'mute') $response->text = count($chat_data['mute']) . " user(s)  muted: " . implode(', ', array_keys($chat_data['mute']));
      $response->success = false; // why not true?
    }
    else
    {
    	$duplicatePost = false; 
    	$flood = false;
    	$ipPosts = array();
    	
    	// loop through the existing lines
    	foreach($chat_data['data'] as $line){
	    	// check for duplicate post
    		if(isset($line['guid']) && $line['guid'] == $guid){
    			$duplicatePost = true;
    		}
    		// store up an array of posts from this IP
    		if(isset($line['addr']) && $line['addr'] == $addr){
    			$ipPosts[] = $line;
    		}
    	}

    	// Joe built better flood protection
    	$FLOODCUTOFFTIME = 5; // can't post more than 3 times in a 5 second period.
    	$FLOODCUTOFFPOSTS = 3; // can't post more than 3 times in a 5 second period.
    	if(count($ipPosts) > $FLOODCUTOFFPOSTS){ // can't flood if you haven't posted enough
    		$timeToCheckAgainst = $ipPosts[count($ipPosts)-$FLOODCUTOFFPOSTS]['time'];// get the time from the post a few back
	    	//$timeDiff = $FLOODCUTOFFTIME+1; // initialize it to something acceptable
	    	if(time() - $timeToCheckAgainst < $FLOODCUTOFFTIME){
	    		$flood = true;
	    	}
    	}
    	 
    	if(!$duplicatePost && !$flood){ // if it's no duplicate, and it's not flood,
   		  $response->text = $data;
   		  
   		  //----------- Store post in the file
    		
	      $chat_data['data'][] = array('time' => $time, // add all this crap to an element of chat_data
	                                   'guid' => $guid,
	      							   'chat_rand' => $rand,
	                                   'room' => $room,
	      							   'user' => $handle,
	                                   'priv' => $priv,
	                                   'addr' => $addr,
	      							   'data' => "m\r\n$colr\r\n$gndr\r\n$stat\r\n$handle\r\n$priv\r\n$data");
	      foreach($chat_data['data'] as $i => $x)
	      {
	        if (count($chat_data['data']) <= $chat_histlen) 
	        	break;
	        unset($chat_data['data'][$i]);
	      }
	      
	      //--------------- Store the post in the DB
	      
	      $arrErrors = array();
	       
	      // create a chatlog record!
	      $chatLogProvider = new Model_Data_ChatLogProvider();
	      $userProvider = new Model_Data_Phpbb_UsersProvider();
	      $chatLog = new Model_Structure_ChatLog();
	       
	      //get the chat room id
	      $chatRoomProvider = new Model_Data_ChatRoomProvider();
	      $chatRoom = $chatRoomProvider->getOneByName($room);
	      $chatLog->setChatRoomId($chatRoom->getChatRoomId());
	       
	      // get the user from the PHPBB
	      /*$userProvider = new Model_Data_Phpbb_UsersProvider();
	       $username = str_replace("GT-","",$handle);
	      $userObj = $userProvider->getOneByName($username);*/
	      $chatLog->setUserId($user->data['user_id']);
	      
	      // handle comes from the input
	      $chatLog->setHandle($handle);
	      
	      // check the handle against the list of valid character names
	      $characterProvider = new Model_Data_CharacterProvider(); // by redeclaring the class, I ensure a fresh pull of the current list.  This may be overdoing it.
	      $character = $characterProvider->getOneByCharacterName($handle);
	      if(is_object($character)){
	      	$chatLog->setCharacterId($character->getCharacterId());
	      }
	       
	      $chatLog->setColor($colr);
	      $chatLog->setText($data);
	      $chatLog->setChatRand($rand);
	       
	      if(!empty($priv) && $priv != '.'){
	      	$recipient = $userProvider->getOneByName(str_replace("GT-","",$priv));
	      	if(is_object($recipient)){ // this is a registered user
	      		$chatLog->setRecipientUserId($recipient->getUserId());
	      	}else{
	      		$chatLog->setRecipientUsername($priv);
	      	}
	      }
	      $chatLog->setTimestamp(date('Y-m-d H:i:s'));
	       
	      try{
	      	$chatLogProvider->insertBlogPost($chatLog);
	      }catch(Exception $e){
	      	$response->text = "I just don't know what went wrong!  But the system says this: " . implode('|',$arrErrors);
	      	$response->success = false;
	      }
	       
        }elseif($flood){
        	$response->text = "Your post \"$data\" was not registered due to flood protection.";
        	$response->success = false;
        }else{ // duplicate
        	$response->success = false;
        }
    }
  }

  if ($modified){
  	file_put_contents('data.txt', serialize($chat_data));
  	
  }
}
echo json_encode($response);
?>