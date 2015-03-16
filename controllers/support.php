<?php
    class Support extends Controller{
        public function __construct() {
            parent::__construct();
        }
		
	public function index() {
       
    }
	
    public function supports() {
        include('views/support/supports.php');
    }
	 public function referral() {
        include('views/support/referral.php');
    }
	 public function comments() {
        include('views/support/comments.php');
    }
	
	function sendMessage() {
       $this->model->sendMessage();
	   header('Location:' . URL . 'supports'); 
    }
	
	function sendComments() {
       $this->model->sendComments();
	   header('Location:' . URL . 'comments'); 
    }
	
	function sendReferrals() {
       $this->model->sendReferrals();
	   header('Location:' . URL . 'dashboard'); 
    }
}
	
?>