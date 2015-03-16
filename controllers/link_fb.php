<?php
    class Link_Fb extends Controller{
        public function __construct() {
            parent::__construct();
        }
		
		function index(){
			$this->view->render('views/user/link_fb.php',true);
		}
    }
?>