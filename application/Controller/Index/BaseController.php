<?php

class Index_BaseController{
	var $view = "defaultView.phtml";
	var $vars = null;
	
	public function __construct(){
		$this->vars = new stdClass();
	}
	
	public function getView(){
		return $this->view;
	}
	public function getVars(){
		return $this->vars;
	}
}