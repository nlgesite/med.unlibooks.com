<?php
    class Contact_Us extends Controller{
        public function __construct() {
            parent::__construct();
        }
		
		function index(){
			$this->view->render('views/user/contact_us.php',true);
		}
    }
?>