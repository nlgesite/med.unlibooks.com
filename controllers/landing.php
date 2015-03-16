<?php

class Landing extends Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('views/user/create_account.php', true);
    }

    public function landing() {
		   header('Location:' . URL . 'user/create_account',true);
    }

}

?>