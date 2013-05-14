<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.

// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$response = new stdClass();
$response->success = true;
$response->characters = array();

// get registered characters who are logged in
$characterHelper = new Model_Data_CharacterProvider();
$registeredCharsLoggedIn = $characterHelper->getAllLoggedIn();

// get guest characters who are logged in
$guestUserHelper = new Model_Data_GuestUsersProvider();
$guestUsersLoggedIn = $guestUserHelper->getAll();

foreach($registeredCharsLoggedIn as $char){
	$response->characters[] = array(
			'character_id'=>$char->getCharacterId(),
			'name'=>$char->getName(),
			'chat_name_formatted'=>$char->getChatNameFormatted(),
			'status'=>$char->getChatStatusId(),
			'chat_name_color'=>$char->getChatNameColor(),
			'chat_text_color'=>$char->getChatTextColor(),
			'last_activity'=>$char->getLastActivity(),
			'chat_room_id'=>$char->getChatRoomId()
		);
}

foreach($guestUsersLoggedIn as $char){
	$response->characters[] = array(
			'name'=>$char->getHandle(),
			'status'=>$char->getChatStatusId(),
			'chat_name_color'=>$char->getChatNameColor(),
			'chat_text_color'=>$char->getChatTextColor(),
			'last_activity'=>$char->getLastActivity(),
			'chat_room_id'=>$char->getChatRoomId()
		);
}

/*echo "<pre>";
print_r($registeredCharsLoggedIn);
print_r($guestUsersLoggedIn);
print_r($response->characters);
echo "</pre>";*/

echo json_encode($response);