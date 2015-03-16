<?php

class Vat extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/vat/css/template.css');
        $this->view->render('views/vat/vat.php', false);
    }

    function new_tax() {
        return require('views/vat/new_tax.php');
    }
    
    function add(){
        $this->model->add();
        header('Location:' . URL .'vat');
    }
    
    function update(){
        $this->model->update();
        header('Location:' . URL .'vat');
    }

}
