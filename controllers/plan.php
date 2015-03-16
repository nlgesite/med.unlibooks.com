<?php
    class Plan extends Controller{
        public function __construct() {
            parent::__construct();
        }
		
		function index(){
			$this->view->render('views/user/plan.php',true);
		}
    }
?>