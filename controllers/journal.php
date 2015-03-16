<?php

class Journal extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/index/css/template.css');
        $this->view->render('views/accounting/journal.php');
    }

    

}