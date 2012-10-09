<?php

class Index_BaseController{
	var $view = "defaultView.phtml";
	var $vars = null;
	var $_DB = null;
	
	public function __construct(){
		$this->vars = new stdClass();
		$this->_DB = DbCn::getInstance();
	}
	
	public function getView(){
		return $this->view;
	}
	public function getVars(){
		return $this->vars;
	}
}