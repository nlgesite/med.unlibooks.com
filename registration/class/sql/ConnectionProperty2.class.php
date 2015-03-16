<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty2{

	private static $host = 'localhost';
	private static $user = 'unlibook_main';
	private static $password = 'sjc-123';
	private static $database = 'unlibook_for_doctor_main';
	
	public static function getHost(){
		return ConnectionProperty2::$host;
	}

	public static function getUser(){
		return ConnectionProperty2::$user;
	}

	public static function getPassword(){
		return ConnectionProperty2::$password;
	}

	public static function getDatabase(){
		return ConnectionProperty2::$database;
	}
	
	public static function getConnection(){
		return mysqli_connect(ConnectionProperty2::$host,ConnectionProperty2::$user,ConnectionProperty2::$password,ConnectionProperty2::$database);
	}
}
?>