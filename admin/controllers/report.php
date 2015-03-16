<?php

class Report extends Controller{

	function __construct(){
	
		parent::__construct();
	}
	
	public function index(){
		$this->view->css = array('/report/css/template.css');	
		$this->view->render('views/report/report.php',false);
	}
        
     
}