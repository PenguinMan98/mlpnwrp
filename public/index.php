 <?php

//session_start();

// remove the trailing slash on the URI
if($_SERVER['REQUEST_URI'][strlen($_SERVER['REQUEST_URI'])-1] == '/'){
	$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'],0,strlen($_SERVER['REQUEST_URI'])-1);
}

require_once '../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

require_once CORE_ROOT . 'router.php';

?>