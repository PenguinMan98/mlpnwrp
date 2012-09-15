<?php

class Index_IndexController extends Index_BaseController{
	public function __construct(){
		parent::__construct();
	}
	
	public function IndexAction(){
		echo "This is the default page!<br>";
		$this->vars->someVariable = true;
	}
	
	public function TestAction(){
		echo "Test Action called correctly!<br>";
		$this->vars->someVariable = false;
	}
}