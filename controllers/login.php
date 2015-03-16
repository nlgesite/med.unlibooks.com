<?php

class Login extends Controller {

    function __construct() {
        parent::__construct(); 
    }

    public function index() {
        
         if (Session::getSession('meduser') == '') {
            $this->view->render('views/user/log_in.php', true);
        } else {
            header('Location:' .URL .'dashboard');
        }
        
    }
	
    public function register() {
        if (Session::getSession('meduser') == '') {
            $this->view->render('views/user/get_started.php', true);
        } else {
            $this->view->css = array('/index/css/template.css');
            $this->view->render('views/index/index.php');
        }
    }

    public function reset() {
        $this->view->render('views/user/reset.php', true);
    }

    public function userLogin() {
        $this->model->login();
    }
	
	 public function landing() {
        $this->view->render('views/user/landing.php', true);
    }

}

?>