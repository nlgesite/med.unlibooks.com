<?php

class Coa extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('index/css/template.css');
        $this->view->render('views/coa/coa.php', false);
    }

    function new_charts_account() {
        return require('views/coa/new_charts_account.php');
    }
    
    function add(){
        $this->model->add();
        header('Location:' . URL .'coa');
    }
    
    function update(){ 
        $this->model->update();
        header('Location:' . URL .'coa');
    }
	
	 function getCoaData() {
        //$itms = (DAOFactory::getTblCoaDAO()->queryByAccountType($_POST['accountTypeSub']));
        //$itms = TblCoaMySqlExtDAO::getCoaData()->queryByAccountType($_POST['accountTypeSub']);
        //$itms = (DAOFactory::getTblCoaDAO()->queryByAccountType($_POST['accountTypeSub']));
        $itms = AdminCoaMySqlExtDAO::getCoa($_POST['accountTypeSub']);
		
        $returns = array();
		
        foreach ($itms as $i => $itm) {
            $value = $itm->id . $itm->accountNum . $itm->accountName;

            $arr = array('id' => $itm->id, 'b' => $itm->accountNum, 'c' => $itm->accountName);

            $returns[] = $arr;
        }
        echo json_encode($returns);
	}
}
