<?php

class Index extends Controller{

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->css = array('/user/css/template.css');	
		$this->view->render('views/user/login.php',true);
		
	}
      
}