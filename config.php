<?php
// Set for send request data in json format.
header('Content-Type: application/json');

class Config
{
	const ITEMS_PER_PAGE = '20';
	public static function DatabaseConfig()
	{
		
		if (strpos($_SERVER['REMOTE_ADDR'],'192.168') !== false || strpos($_SERVER['REMOTE_ADDR'],'172.20') !== false || $_SERVER['REMOTE_ADDR'] == '::1') {
			$db = array(
				'database' => 'talpadasamj',
				'hostname' => 'localhost',
				'username' => 'root',
				'password' => '',
			);
		}
		return $db;
	}
}