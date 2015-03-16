<?php
	//  libs
	require 'libs/Session.php';	
	require 'libs/Server.php';
	
	Session::init();
	
	require 'libs/Bootstrap.php';
	require 'libs/Controller.php';
	require 'libs/Model.php';
	require 'libs/Views.php';
//	require ('public/global.class.php');
	//autoloader
	
	$app = new Bootstrap();
	exit;
	
?>