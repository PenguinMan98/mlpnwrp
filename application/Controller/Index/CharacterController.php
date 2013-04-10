<?php

class Index_CharacterController extends Index_BaseController{
	public function __construct(){
		parent::__construct();
	}
	
	public function IndexAction(){
	}
	
	public function ViewAction(){
		$this->view = "Character/view.phtml";
		$charName = $this->URI_PARAMS['c'];
		$characterProvider = new Model_Data_CharacterProvider();
		$character = $characterProvider->getDetailsByCharacterName($charName);
		if(empty($character)) {
			// redirect to the character search page
			die("I don't know anypony named $charName!  Sorry! Maybe one will fall from the sky tomorrow?");
		}
		
		$this->vars->character = $character;
	}
	
	public function CreateAction(){
		$this->view = "Character/create.phtml";
		$characterRaceProvider = new Model_Data_CharacterRaceProvider();
		$characterAgeProvider = new Model_Data_CharacterAgeProvider();
		
		$this->vars->raceList = $characterRaceProvider->getRaceList();
		$this->vars->ageList = $characterAgeProvider->getAgeList();
		/*echo "<pre>";
		print_r($this->vars->raceList);
		print_r($this->vars->ageList);
		echo "</pre>";*/
	}
	
	public function saveAction(){
		$this->view = false;  // no view.
		
		// this operation requires the user to be logged in
		if($this->user->data['username_clean'] == 'anonymous'){
			header('Location: ' . SITE_ROOT . '/forum');
		}
		$allowedTags = '<br><p><img><h1><h2><h3><h4><div><span><u><i><strike><strong><b>';
		
		$character_name = str_replace(' ','_',str_replace('  ',' ',trim(filter_var($_REQUEST['character_name'], FILTER_SANITIZE_STRING))));
		$birth_gender = filter_var($_REQUEST['birth_gender'], FILTER_SANITIZE_STRING);
		$race = filter_var($_REQUEST['race'], FILTER_SANITIZE_NUMBER_INT);
		$age = filter_var($_REQUEST['age'], FILTER_SANITIZE_NUMBER_INT);
		$chat_name_color = filter_var($_REQUEST['chat_name_color'], FILTER_SANITIZE_STRING);
		$chat_text_color = filter_var($_REQUEST['chat_text_color'], FILTER_SANITIZE_STRING);
		$status = strip_tags($_REQUEST['status'], $allowedTags);
		$bio = strip_tags($_REQUEST['bio'], $allowedTags);
		$player_notes = strip_tags($_REQUEST['player_notes'], $allowedTags);
		$player_private_notes = strip_tags($_REQUEST['player_private_notes'], $allowedTags);
		
		// set some defaults
		$chat_name_color = ( $chat_name_color != "" ) ? "#" . $chat_name_color : "#ffffff" ;
		$chat_text_color = ( $chat_text_color != "" ) ? "#" . $chat_text_color : "#ffffff" ;
		
		try{
			Dao::startTransaction();
			$characterProvider = new Model_Data_CharacterProvider();
			$character = $characterProvider->getOneByCharacterName($character_name);
			if(is_object($character)){
				throw new Exception("Character already exists!");
			}
			$character = new Model_Structure_Character();
			$character->setName($character_name);
			$character->setChatNameFormatted($character_name);
			$character->setBornFemale(($birth_gender == 'female'));
			$character->setCurrentlyFemale(($birth_gender == 'female'));
			$character->setCharacterRaceId($race);
			$character->setCharacterAgeId($age);
			$character->setChatNameColor($chat_name_color);
			$character->setChatTextColor($chat_text_color);
			$character->setStatus($status);
			$character->setBio($bio);
			$character->setPlayerNotes($player_notes);
			$character->setPlayerPrivateNotes($player_private_notes);
			$character->setUserId($this->user->data['user_id']); // to be renamed to 'creator_id'
			
			// this is enough to create the character
			$arrErrors = array();
			$characterProvider->insertOne($character, $arrErrors);
			if(!empty($arrErrors)){
				throw new Exception("Error inserting character ".$character->getName().": " . implode('|', $arrErrors));
			}
			
			// now create the relationship between the character and the user.
			$characterUserProvider = new Model_Data_CharacterUserProvider();
			$characterUser = new Model_Structure_CharacterUser();
			$characterUser->setCharacterId($character->getCharacterId());
			$characterUser->setUserId($this->user->data['user_id']);
			$characterUserProvider->insertOne($characterUser, $arrErrors);
			if(!empty($arrErrors)){
				throw new Exception("Error creating a relationship between character ".$character->getName()." and user ".$this->user->data['username']." : " . implode('|', $arrErrors));
			}
			
			Dao::commit();
		}catch(Exception $e){
			Dao::rollback();
			$this->errors[] = $e->getMessage();
		}
		header('Location: ' . SITE_ROOT . '/character/view/' . $character_name);
	}
}
