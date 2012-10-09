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
		
		echo "Database Test<br>";
		//$result = $this->_DB->query("SHOW TABLES;");
		
		echo "<pre>";
		//print_r($result);
		foreach($this->_DB->query('SELECT * FROM author') as $row) {
			print_r($row);
		}
		echo "</pre>";
	}
}