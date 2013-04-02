 <?php

session_start();

define('INCLUDE_PATH' , 'd:/wamp/www/mlpnwrp/application/Core/');

// remove the trailing slash on the URI
if($_SERVER['REQUEST_URI'][strlen($_SERVER['REQUEST_URI'])-1] == '/'){
	$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'],0,strlen($_SERVER['REQUEST_URI'])-1);
}

require_once INCLUDE_PATH . 'Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

require_once INCLUDE_PATH . 'router.php';
?>