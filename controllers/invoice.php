<?php

class Invoice extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/index.php');
    }

    public function customers() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/customers.php');
    }

    function invoices() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/index.php');
    }

    public function add() {
        $this->view->css = array('/invoice/css/template.css');
        if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax == '') {
            require_once('views/invoice/mod.php');
        }
//        else {
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/new.php');
//        }
    }

    function recurring() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/recurring.php');
    }

    function newRecurring() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/newRecurring.php');
    }

    function collection() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/collection.php');
    }

    function hmo() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/hmo.php');
    }

    public function services() {
        $this->view->css = array('/time/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/tasks.php');
    }

    function newCustomer() {
        return require_once('views/invoice/create_new_customer.php');
    }

//    function addClientOption() {
//        if ($_POST['task'] == 'addclient' && Session::getSession('clientid') == '') {
//            $this->model->addCustomer();
//        } else if ($_POST['task'] == 'updateclient' || ($_POST['task'] == 'addclient' && Session::getSession('clientid') != '')) {
//            $this->model->updateCustomer();
//        }
//    }
//    function addHmoOption() {
//        if ($_POST['task'] == 'addHmo' && Session::getSession('hmoid') == '') {
//            $this->model->addHMO();
//            $this->hmo();
//        } else if ($_POST['task'] == 'updatehmo' && Session::getSession('hmoid') != '') {
//
//            $this->model->updateHMO();
//            $this->hmo();
//        }
//    }

    function items() {
        $this->view->css = array('/invoice/css/template.css');
        $this->view->menu = 'views/invoice/menu.php';
        $this->view->render('views/invoice/items.php');
    }

    function item() {
        return require_once('views/invoice/new_item.php');
    }

    function enterPayment() {
        return require('views/invoice/enter_payment_new.php');
    }

    function paymentView() {
        return require('views/invoice/paymentview.php');
    }

    function printPreview() {
        return require('views/invoice/print_invoice.php');
    }

    function addInvoice() {
        $this->model->addInvoice();
    }

    function addRecurring() {
        $this->model->addRecurring();
        $this->recurring();
    }

    function addCustomer() {
        $this->model->addCustomer();
        $this->customers();
    }

    function addItem() {
        $this->model->addItem();
    }

    function invoiceItems() {
        $this->model->invoiceItems();
    }

    function invoiceTask() {
        $this->model->invoiceTask();
    }

    function getTaskDescription() {
        $this->model->getTaskDescription();
    }

    function getItemDescription() {
        $this->model->getItemDescription();
    }

    function calcVat() {
        $this->model->calcVat();
    }

    function getAddress() {
        $this->model->getAddress();
    }

    function bankname() {
        $this->model->bankName();
    }

    function enterNewPpayment() {
        return require('views/invoice/enter_new_payment.php');
    }

    function clientInvoice() {
        echo TblEnterPaymentMySqlExtDAO::clientInvoice();
    }

    function checktrans() {
        echo TblNewInvoiceMySqlExtDAO::checkClientTransaction();
    }

    function checkHMOtrans() {
        echo TblNewInvoiceMySqlExtDAO::checkHmoTransaction();
    }

    function checkitem() {
        if (TblInvoiceLinesMySqlExtDAO::checkItem() || TblRecurringLinesMySqlExtDAO::checkItem()) {
            echo true;
        } else {
            echo false;
        }
    }

    function addclient() {
        $this->model->setCustomer(new TblClient());
    }

    function additemOption() {
        if ($_POST['task'] == 'additem' && Session::getSession('itemid') == '') {
            $this->model->addItem();
        } else if ($_POST['task'] == 'updateitem' || ($_POST['task'] == 'additem' && Session::getSession('itemid') != '')) {
            $this->model->updateItem();
        }
    }

    function totalPayment() {
        $data = TblEnterPaymentMySqlExtDAO::getTotalBalance();

        echo json_encode($data);
    }

//    function getMaxClientNumber(){
//        echo TblClientMySqlExtDAO::getMaxNumId();
//    }
//    function getMaxHmoNumber(){
//        echo TblHmoMySqlExtDAO::getMaxNumId();
//    }
//    
//    function getMaxServiceNumber(){
//        echo TblTaskMySqlExtDAO::getMaxNumId();
//    }
//    function checkDuplicate() {
//        $global = new GlobalClass();
//
//        echo $global->checkDuplicate();
//    }
//    function checkClientNum() {
//        $result = TblClientMySqlExtDAO::checkClientNumber();
//
//        echo $result;
//    }
//    function checkhmoNum() {
//        // $_POST['hmo_account'] = $_POST['hmoAccount'];
//
//        $result = TblHmoMySqlExtDAO::checkHMONumber();
//
//        echo $result;
//    }

    function getRate() {
        echo DAOFactory::getTblTaxDAO()->load($_POST['taxid'])->rate;
    }

    function getStatus() {
        echo DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid'])->status;
    }

    function pdfview() {
        $this->view->render('views/invoice/pdfview.php', true);
    }

    function setinvoice() {
        if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->tinNum == '') {
            require_once ('views/setting/company.php');
            exit;
        }

        if ($_POST['task'] == 'addinvoice') {
            $this->model->addInvoice();
        } elseif ($_POST['task'] == 'updateinvoice') {
            $this->model->updateInvoice();
        } elseif ($_POST['task'] == 'delinvoice') {
            $this->model->deleteInvoice();
        }

//        if ($_POST['status'] == '') {
//            header('Location:' . URL . 'invoice');
//        }
    }

    function newHmo() {
        return require_once('views/invoice/create_new_hmo.php');
    }

    public function addTask() {
        $this->model->addTask();
    }

    function task() {
        return require_once('views/invoice/create_new_tasks.php');
    }

    function checktask() {
        if (TblInvoiceLinesMySqlExtDAO::checkTask()) {
            echo true;
        } else {
            echo false;
        }
    }

//    function addtaskOption() {
//        if ($_POST['task'] == 'addtask' && Session::getSession('taskid') == '') {
//            $this->model->addTask();
//        } else if ($_POST['task'] == 'updatetask' || ($_POST['task'] == 'addtask' && Session::getSession('taskid') != '')) {
//            $this->model->updateTask();
//        }
//    }

    function reverseCollection() {
        $this->model->reverseCollection();
        header('Location:' . URL . 'invoice/collection');
    }

    function reverseInvoice() {
        $this->model->reverseInvoice();
//        header('Location:' . URL . 'invoice');
    }

    function taxtype() {
        $orginfo = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medorgid'));
        $orginfo->typeOfTax = $_POST['typeOfTax'];

        DAOFactory::getTblOrganizationInfoDAO()->update($orginfo);

        header('Location:' . URL . 'invoice/add');
    }

    function printPreviewCollection() {
        /* $this->view->orgInfo = $this->model->getOrgInfo();
          $this->view->org = $this->model->getOrg();
         */
        return require('views/invoice/preview_collection.php');
    }

}
