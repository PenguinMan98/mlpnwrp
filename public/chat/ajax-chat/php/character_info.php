<?php
/*
 * A character information retrieval ajax script.
 * */

$response = new stdClass();

$characterName = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['charName']), ENT_QUOTES);

$characterProvider = new Model_Data_CharacterProvider();
$character = $characterProvider->getOneByCharacterName($characterName);

if(!is_object($character)){
	$response->success = false;
}else{
	$response->characterInfo = $character->getAsArray();
	$response->success = true;
}

echo json_encode($response);