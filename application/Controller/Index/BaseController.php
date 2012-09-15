<?php

class Index_BaseController{
	var $view = "defaultView.phtml";
	
	public function __construct(){
		
	}
	
	public function getView(){
		return $this->view;
	}
}