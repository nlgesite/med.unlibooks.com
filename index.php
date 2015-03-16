<?php

	$domain = explode(".",$_SERVER['HTTP_HOST']);
	$subdomain = isset($domain[1]) && $domain[1] == 'med' ? ($domain[0] == "www" ? '' : $domain[0]) : '';

	if($subdomain != ''){
		define("SUBDOMAIN",$subdomain);
		define("DATABASE_NAME","unlibook_med_for_".$subdomain);
		define("DATABASE_USER","unlibook_clients");
	}

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

