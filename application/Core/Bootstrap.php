<?php
// start up PHPBB Session
define('IN_PHPBB', true);
$phpbb_root_path = "d:/wamp/www/mlpnwrp/public/forum/";
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


class Bootstrap{
	/**
	 * Call this method to get singleton
	 *
	 * @return UserFactory
	 */
	public static function getInstance()
	{
		static $inst = null;
		if ($inst === null) {
			$inst = new Bootstrap();
		}
		return $inst;
	}
	
	/**
	 * Private ctor so nobody else can instance it
	 *
	 */
	private function __construct()
	{
		$this->setPathing();
		$this->startAutoloader();
		$this->loadDatabase();
	}
	
	public function setPathing(){
		/**
		 * WEB_ROOT_FOLDER is the name of the parent folder you created these
		 * documents in.
		 */
		define('SERVER_ROOT' , 'd:/wamp/www/mlpnwrp');
		define('APP_ROOT' , SERVER_ROOT . '/application/');
		define('CORE_ROOT' , APP_ROOT . 'Core/');
		define('MODEL_ROOT' , APP_ROOT . 'Model/');
		define('VIEW_ROOT' , APP_ROOT . 'View/');
		define('CONTROLLER_ROOT' , APP_ROOT . 'Controller/');
		define('LIBRARY_ROOT' , APP_ROOT . 'Library/');
		
		//yoursite.com is your webserver
		define('SITE_ROOT' , '/mlpnwrp/public');
	}
	
	public function startAutoloader(){
		// start the autoloader
		spl_autoload_register(function ($className){
			$className = str_replace("_", "/", $className);
			if(strpos($className, "Controller") !== false){
				if(file_exists(CONTROLLER_ROOT . $className . ".php")){ // check the controllers
					include CONTROLLER_ROOT . $className . ".php";
				}
			}elseif(file_exists(MODEL_ROOT . $className . ".php")){ // check the models
				include MODEL_ROOT . $className . ".php";
			}elseif(file_exists(LIBRARY_ROOT . $className . ".php")){ // check the library
				include LIBRARY_ROOT . $className . ".php";
			}
		});
	}
	
	public function loadDatabase(){
		// include the databasing stuff
		include(CORE_ROOT . "Config.php");
		include(CORE_ROOT . "DbCn.php");
		DbCn::getInstance(array(
			'dsn'=>'mysql:dbname=' . Core_Config::$DB_DATABASE . ';host=' . Core_Config::$DB_SERVER,
			'user' => Core_Config::$DB_USERNAME,
			'password' => Core_Config::$DB_PASSWORD,
			'driver_options' => array(
			PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8"
				)));
		
	}
}