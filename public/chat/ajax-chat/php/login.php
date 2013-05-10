<?php
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();
/*
 * A character information retrieval ajax script.
* */
$username = htmlentities(preg_replace("/\\s+/iX", " ", $_REQUEST['username']), ENT_QUOTES);
$password = htmlentities(preg_replace("/\\s+/iX", " ", $_REQUEST['password']), ENT_QUOTES);

$response = new stdClass();

if ($user->data['user_id'] == ANONYMOUS)
{
	$remember = true;
	$showOnline = true;
	$isAdmin = false;
	$auth->login($username, $password, $remember, $showOnline, $isAdmin); // do the login
	
	if ($user->data['user_id'] == ANONYMOUS){
		$response->success = false;
		$response->message = "Invalid login!";
	}else{
		$response->success = true;
	}
} else{ // already logged in
	$response->success = true;
}

if($response->success){ // if this is a valid login, get characters
	$characterHelper = new Model_Data_CharacterProvider();
	$characterList = $characterHelper->getAllByUserId($user->data['user_id']);
	$response->characterList = array();
	foreach($characterList as $char){
		$charArray = $char->getAsArray();
		unset($charArray['bio']);
		unset($charArray['player_notes']);
		unset($charArray['player_private_notes']);
		$response->characterList[] = $charArray;
	}
}

echo json_encode($response);