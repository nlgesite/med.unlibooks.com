<?php

class Login extends Controller {

    function __construct() {
        parent::__construct(); 
    }

   public function index() {
        
         if (Session::getSession('meduser') == '') {
            $this->view->render('views/user/log_in.php', true);
        } else {
            header('Location:' .URL .'coa');
        }
        
    } 
	
    /* public function reset() {
        $this->view->render('views/user/reset.php', true);
    } */

    public function userLogin() {
        $this->model->login();
    }
	
	/*  public function landing() {
        $this->view->render('views/user/landing.php', true);
    } */

}

?>