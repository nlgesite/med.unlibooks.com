<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{

	private static $host = 'localhost';
	private static $user = 'root';
	private static $password = 'scp123';
	private static $database = 'unlibooks_for_doctors';

/* 	private static $host = 'localhost';
	private static $user = 'unlibooks';
	private static $password = 'sjc-123';
	private static $database = 'unlibook_for_doctor'; */
	
	public static function getHost(){
		return ConnectionProperty::$host;
	}

	public static function getUser(){
		return defined("DATABASE_USER") ? DATABASE_USER : ConnectionProperty::$user;
	}

	public static function getPassword(){
		return ConnectionProperty::$password;
	}

	public static function getDatabase(){
		return defined("DATABASE_NAME") ? DATABASE_NAME : ConnectionProperty::$database;
	}
	
	public static function getConnection(){
		return mysqli_connect(
			ConnectionProperty::$host,
			defined("DATABASE_USER") ? DATABASE_USER : ConnectionProperty::$user,
			ConnectionProperty::$password,
			defined("DATABASE_NAME") ? DATABASE_NAME : ConnectionProperty::$database
		);
	}
}
?>