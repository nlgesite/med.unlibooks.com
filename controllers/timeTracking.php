<?php

class TimeTracking extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/time/css/template.css');
        $this->view->menu = 'views/time/menu.php';
        $this->view->render('views/time/index.php');
    }

    public function tasks() {
        $this->view->css = array('/time/css/template.css');
        $this->view->menu = 'views/time/menu.php';
        $this->view->render('views/time/tasks.php');
    }

    public function projects() {
        $this->view->css = array('/time/css/template.css');
        $this->view->menu = 'views/time/menu.php';
        $this->view->render('views/time/projects.php');
    }

    public function addTask() {
        $this->model->addTask();
    }
    
    function task(){
        echo require_once('views/time/create_new_tasks.php');
    }

    function checktask() {
        if (TblInvoiceLinesMySqlExtDAO::checkTask() || TblRecurringLinesMySqlExtDAO::checkTask()) {
            echo true;
        } else {
            echo false;
        }
    }
    
    function addtaskOption(){
         if ($_POST['task'] == 'addtask' && Session::getSession('taskid')=='') {
            $this->model->addTask();
        } else if ($_POST['task'] == 'updatetask' || ($_POST['task'] == 'addtask' && Session::getSession('taskid') != '')) {
            $this->model->updateTask();
        }
    }
    
    function checkDuplicate() {
        $global = new GlobalClass();
        
        echo $global->checkDuplicate();
    }

}