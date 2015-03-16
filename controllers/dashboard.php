<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
		/* $this->view->collectedAmount = $this->model->getCollectedAmount(); */
		/* $this->view->orgId = Session::getSession('orgid'); */
		$this->view->expenses = $this->model->getExpenses();
		$this->view->collectedAmount = $this->model->getCollectedAmount();
		$this->view->invoiceTotal = $this->model->getServiceInvoice();
        $this->view->css = array('/index/css/template.css');
		/* if($this->view->collectedAmount){ */
			$this->view->render('views/dashboard/index.php');
		/* } */
    }

    function getExpenses(){
		$this->view->expenses = $this->model->getExpenses();
		$this->view->orgId = Session::getSession('medorgid');
		if($this->view->expenses){
			$this->view->render('views/dashboard/ajax/expense.php', true);
		}
	}
	
	function getCollectedAmount(){
		$this->view->collectedAmount = $this->model->getCollectedAmount();
		$this->view->orgId = Session::getSession('medorgid');
		if($this->view->collectedAmount){
			$this->view->render('views/dashboard/ajax/collected_amount.php',true);
		}
	}
	
	 function getServiceInvoice(){
		$this->view->invoiceTotal = $this->model->getServiceInvoice();
		$this->view->orgId = Session::getSession('medorgid');
		if($this->view->invoiceTotal){
			$this->view->render('views/dashboard/ajax/service_invoice.php',true);
		}
	} 
	
	/*  function getAmount(){
		$this->view->collectedAmount = $this->model->getExpenses();
		$this->view->orgId = Session::getSession('orgid');
		if($this->view->collectedAmount){
			$this->view->render('views/dashboard/index.php', true);
		}
	} */

}