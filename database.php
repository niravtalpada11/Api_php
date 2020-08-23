<?php
// print_r(Config::DatabaseConfig());die;
class Database 
{
	private static $cont  = null;
	
	public static function connect() {
		// One connection through whole application
		if ( null == self::$cont ) {      
			try {
				$db = Config::DatabaseConfig();
				// print_r($db);
				$dbName =  $db['database'];
				$dbHost =  $db['hostname'];
				$dbUsername =  $db['username'];
				$dbUserPassword =  $db['password'];
				self::$cont =  new PDO("mysql:host=".$dbHost.";"."dbname=".$dbName, $dbUsername, $dbUserPassword);  
			} catch(PDOException $e) {
				die($e->getMessage());  
			}
		} 
		return self::$cont;
	}
	
	public static function disconnect() {
		self::$cont = null;
	}
}
?>