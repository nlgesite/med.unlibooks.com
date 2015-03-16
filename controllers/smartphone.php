<?php
    class Smartphone extends Controller{
        public function __construct() {
            parent::__construct();
        }
		
		function index(){
			$this->view->render('views/user/smartphone.php',true);
		}
    }
?>