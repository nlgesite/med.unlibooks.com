<?php
    class Create_Account extends Controller{
        public function __construct() {
            parent::__construct();
        }
		
		function index(){
			$this->view->render('views/user/create_account.php',true);
		}
		
		public function create_account() {
		   $this->model->create_account();
		   header('Location:' . URL . 'dashboard/index');
		}
		
		
    }
?>