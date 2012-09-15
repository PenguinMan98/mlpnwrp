<?php
spl_autoload_register(function ($className){
	$className = str_replace("_","/",$className);
	if(strpos($className, "Controller") !== false){
		if(file_exists(CONTROLLER_ROOT.$className.".php")){
			include CONTROLLER_ROOT . $className . ".php";
		}
	}
});

//fetch the passed request
$uriSplit = explode("?",$_SERVER['REQUEST_URI']);

if(count($uriSplit) == 0){
	error404("Error! No URI.<br>");
}

$URI = $uriSplit[0];
$GET = (count($uriSplit) > 1) ? $uriSplit[1] : null;

// Variable separation
$routeSplit = explode("/", $URI);

if(count($routeSplit) == 4){ // action only
	$MODULE = "Index";
	$CONTROLLER = "Index";
	$ACTION = (!empty($routeSplit[3])) ? $routeSplit[3] : "Index";
	$URI_PARAMS = array();
}elseif(count($routeSplit) == 5){ // controller / action
	$MODULE = "Index";
	$CONTROLLER = $routeSplit[3];
	$ACTION = $routeSplit[4];
	$URI_PARAMS = array();
}elseif(count($routeSplit) == 6){ // module / controller / action
	$MODULE = $routeSplit[3];
	$CONTROLLER = $routeSplit[4];
	$ACTION = $routeSplit[5];
	$URI_PARAMS = array();
}elseif(count($routeSplit) > 6){ // module / controller / action / params
	$MODULE = $routeSplit[3];
	$CONTROLLER = $routeSplit[4];
	$ACTION = $routeSplit[5];
	
	$URI_PARAMS = array();
	$params = array_slice($routeSplit, 6); // get the params
	if(count($params)%2 == 1) array_pop($params); // ensure an even count
	while(count($params) > 1){
		$URI_PARAMS[$params[0]] = $params[1];
		$params = array_slice($params,2);
	}
}

// variable sanitization
$varPattern = "/^(\D(\w|\d)*)$/i";
$filePattern = "/^(\D(\w|\d|-|_|\.)*)$/i";

if(!preg_match($varPattern,$MODULE)){
	error404("Error! Invalid Module Name<br>");
}
$MODULE = ucfirst($MODULE);

if(!preg_match($varPattern,$CONTROLLER)){
	error404("Error! Invalid Controller Name<br>");
}
$CONTROLLER = ucfirst($CONTROLLER);

if(!preg_match($varPattern,$ACTION)){
	error404("Error! Invalid Action Name<br>");
}
$ACTION = ucfirst($ACTION);

$temp = array();
foreach($URI_PARAMS as $name=>$value){
	if(preg_match($varPattern, $name)){
		$temp[$name] = $value;
	}
}
$URI_PARAMS = $temp;

// ROUTE!


if(file_exists(CONTROLLER_ROOT . $MODULE . "/")){ // Does the module directory exist?
	$CONTROLLER_PATH = CONTROLLER_ROOT . $MODULE . "/" . $CONTROLLER . "Controller.php";
	if(file_exists($CONTROLLER_PATH)){ // Does the controller file exist?
		require_once($CONTROLLER_PATH); // include the controller file
		$CONTROLLER_CLASS_NAME = $MODULE."_".$CONTROLLER."Controller";
		if(class_exists($CONTROLLER_CLASS_NAME)){ // Does the chosen controller class exist?
			$_controller = new $CONTROLLER_CLASS_NAME(); // create the controller class
			$ACTION_NAME = $ACTION . "Action";
			if(is_object($_controller) && method_exists($_controller, $ACTION_NAME)){ // does the controller class have the right action?
				$_controller->$ACTION_NAME(); // execute it!
				$VIEW_PATH = VIEW_ROOT . $_controller->getView();
				if(file_exists($VIEW_PATH)){
					include($VIEW_PATH);
				}else{
					error404("The specified view ".$_controller->getView()." does not exist!");
				}
			}else{
				error404("The specified action $ACTION_NAME does not exist!");
			}
		}else{
			error404("The specified class $CONTROLLER_CLASS_NAME does not exist!");
		}
	}else{
		error404("The specified controller $CONTROLLER does not exist!");
	}
}else{
	error404("The specified module $MODULE does not exist!");
}


function error404($errMessage){
	$_SESSION['SYSTEM_MESSAGE'] = $errMessage;
	header("Location: http://" . SITE_ROOT . "/oops404.php");
}

