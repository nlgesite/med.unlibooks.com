<?php

class Other extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/other/css/template.css');
        $this->view->render('views/other/link_fb.php');
    }

}