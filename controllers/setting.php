<?php

class Setting extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/setting/css/template.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/company.php');
    }

    public function company() {
        $this->view->css = array('/setting/css/template.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/company.php');
    }

    public function taxes() {
        $this->view->css = array('/setting/css/template.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/taxes.php');
    }

    public function tax() {
        include('views/setting/new_taxes.php');
    }

    public function change_password() {
        include('views/setting/change_password.php');
    }

    function bank() {
        $this->view->css = array('/setting/css/template.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/bank.php');
    }

    function new_bank() {
        return require('views/setting/new_bank.php');
    }

    function user() {
        return require('views/setting/new_user_permission.php');
    }

    function chart() {
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/chart.php');
    }

    function permission() {
        $this->view->css = array('/setting/css/template.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/permission.php');
    }

    function import() {
        $this->view->css = array('/setting/css/template.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/import.php');
    }

    function companysetup() {
        $this->view->css = array('/setting/css/ajax/ajax.css');
        $this->view->menu = 'views/setting/menu.php';
        $this->view->render('views/setting/set_up_company.php');
    }

    function updateCompany() {

        if ($this->model->updateCompany()) {
            $this->company();
        }
    }

    function companySetting() {
        $this->model->updateCompany();
        header('Location:' . URL . 'dashboard');
    }

    function newBank() {
        $this->model->newBank();
        $this->bank();
    }

    function newTax() {
        $this->model->newTax();
        $this->taxes();
    }

    function export() {
        $this->model->export();
    }

    function importfile() {
        $result = $this->model->import();
        $url = '';
        switch ($result) {
            case 'client.csv':
                $url = 'invoice/customers';
                break;
            case 'task.csv':
                $url = 'timeTracking/tasks';
                break;
            case 'item.csv':
                $url = 'invoice/items';
                break;
            default:
                break;
        }
        header('location: ' . URL . $url);
    }

    function addtaxOption() {
        $this->model->newTax();
    }

    function addbankOption() {
        $this->model->newBank();
    }

    function checkBank() {
        if (TblBankMySqlExtDAO::checkBank()) {
            echo true;
        } else {
            echo false;
        }
    }

    function checkTax() {
        if (TblTaxMySqlExtDAO::checkTax()) {
            echo true;
        } else {
            echo false;
        }
    }
    
   function adduser(){
       echo $_POST();
       $this->model->addUser();
   }

    function checkpassword() { //echo DAOFactory::getTblUserDAO()->load(Session::getSession('userid'))->password . '-'.$_POST['oldpassword'];
        if (DAOFactory::getTblUserDAO()->load(Session::getSession('userid'))->password != $_POST['oldpassword']) {
            echo true;
        }
    }
	
	

}
