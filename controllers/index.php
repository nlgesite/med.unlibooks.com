<?php

class Index extends Controller{

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->css = array('/index/css/template.css');	
		$this->view->render('views/index/index.php',true);
	}
        
        public function createaccount(){
            Session::setSession('companyName', $_POST['companyName']);
            Session::setSession('email', $_POST['email']);
            header('Location:' .URL .'landing');
        }
}