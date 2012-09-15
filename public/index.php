 <?php

session_start();
 
/**
 * WEB_ROOT_FOLDER is the name of the parent folder you created these 
 * documents in.
 */
define('SERVER_ROOT' , 'c:/wamp/www/myframework');
define('APP_ROOT' , SERVER_ROOT . '/application/'); 
define('CORE_ROOT' , APP_ROOT . 'Core/'); 
define('MODEL_ROOT' , APP_ROOT . 'Model/');
define('VIEW_ROOT' , APP_ROOT . 'View/');
define('CONTROLLER_ROOT' , APP_ROOT . 'Controller/');

//yoursite.com is your webserver
define('SITE_ROOT' , 'localhost/myframework/public'); 

require_once CORE_ROOT . 'router.php';
?>