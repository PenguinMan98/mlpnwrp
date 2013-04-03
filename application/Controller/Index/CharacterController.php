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
		
		$this->vars->content = <<<CHAR
<table class="content">
	<tr>
		<th>Create your Character!</th>
	</tr>
</table>
CHAR;
	}
}
