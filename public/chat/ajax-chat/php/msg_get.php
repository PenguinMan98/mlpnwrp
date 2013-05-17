<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.

// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$response = new stdClass();

// verify login
$handle = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['user']), ENT_QUOTES);
if($user->data['user_id'] != "ANONYMOUS") { // logged in
	$characterHelper = new Model_Data_CharacterProvider();
	$character = $characterHelper->getOneByCharacterName($handle);
}
if($user->data['user_id'] == "ANONYMOUS" || !is_object($character)){ // guest
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = $guestUserHelper->getOneByPk($handle);
}
if((!is_object($character) && !is_object($guestUser)) || // no character match or
		(is_object($character) && !$character->getLoggedIn()) ){ // registered character isn't logged in
	$response->success = false;
	$response->error = "Character Not Logged In";
	echo json_encode($response);
	die();
}

$response->success = true;
$response->text = "";
$response->lines = array();

if (isset($_GET['room']) &&
    isset($_GET['user']) &&
    /*isset($_GET['pass']) &&*/
    isset($_GET['mptr']))
{ /* to get messages, you must be logged in and in a room and tell me the last message you got */
  include_once 'init.php'; /*Get the INIT*/
  
  $requestId = $_GET['rand'];
  $roomId = $_GET['room'];
  $handle = $_GET['user'];
  $lastPostId = $_GET['mptr'];
  
  // log all calls to this file
  $logProvider = new Model_Data_LogProvider();
  $log = new Model_Structure_Log(array(
  		'file'=>__FILE__,
  		'log_entry'=>serialize($_REQUEST),
  		'severity'=>'notice'
  ));
  $arrErrors = array();
  $logProvider->insertOne($log, $arrErrors);
  
  $modified = unlog_users(); /* refresh the user list and note if we changed it */

  try{
  	
	  if ($chat_data['kick'][$_GET['user']] ||
	      $chat_data['kick'][$_SERVER['REMOTE_ADDR']]) /* If this user is kicked */
	  {
	  	throw new Exception("This user is kicked");
	  }
	
	  $response->operator .= "+"; // this routine won't be called without users being logged in.
	  /*if (isset($chat_data['user'][$_GET['user']]) &&
	      isset($chat_data['pass'][$_GET['user']]) &&
	           ($chat_data['pass'][$_GET['user']]) == $_GET['pass']) { // If the user is logged in, 
	  	$response->operator .= "+"; // print a + 
	  }
	  else {
	  	$response->operator .= "-";
	  	//throw new Exception("This user is not logged in!");
	  }*/
	  
	  $chatLogHelper = new Model_Data_ChatLogProvider();
	  $response->lines = $chatLogHelper->getPosts($roomId, $handle, $lastPostId, $chat_histlen, $registered);
	  
	  foreach($response->lines as &$line){
	  	$postDate = new DateTime($line['timestamp']);
	  	$line['interval'] = (time()-$postDate->format('U'));
	  }
  }catch(Exception $e){
  	$response->operator = "-"; /*return a - */
  	$response->success = false;
  	$response->error = $e->getMessage();
  }
}
$encodedResponse = json_encode($response);
echo $encodedResponse;

?>