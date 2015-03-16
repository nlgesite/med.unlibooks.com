<?php

class Expenses extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/expenses/css/template.css');
        $this->view->menu = 'views/expenses/menu.php';
        $this->view->render('views/expenses/index.php');
    }

    public function suppliers() {
        $this->view->css = array('/expenses/css/template.css');
        $this->view->menu = 'views/expenses/menu.php';
        $this->view->render('views/expenses/suppliers.php');
    }

    public function add() {

        $this->view->css = array('/expenses/css/template.css');

        if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->modeOfPayment == '') {
            require_once('views/expenses/mop.php');
        }
//        else {
        $this->view->userCoa = $this->model->getUserCoa();
        $this->view->getVat = $this->model->getVat();
        $this->view->getExpense = $this->model->getExpense();
        $this->view->getExpenseLine = $this->model->getExpenseLine();
        $this->view->getExpenseAmount = $this->model->getExpenseAmount();
        $this->view->info = $this->model->getOrganizationInfo();
        $this->view->menu = 'views/expenses/menu.php';
        $this->view->render('views/expenses/new.php');
//        }
    }

    public function edit() {
        $this->view->userCoa = $this->model->getUserCoa();
        $this->view->getVat = $this->model->getVat();
        $this->view->getExpense = $this->model->getExpense();
        $this->view->getExpenseLine = $this->model->getExpenseLine();
        $this->view->getExpenseAmount = $this->model->getExpenseAmount();

        // $this->view->css = array('/expenses/css/template.css');
        // $this->view->menu = 'views/expenses/menu.php';
        $this->view->render('views/expenses/new.php', true);
    }

    public function copy() {
        $this->view->userCoa = $this->model->getUserCoa();
        $this->view->getVat = $this->model->getVat();
        $this->view->getExpense = $this->model->getExpenseCopy();

        $this->view->getExpenseLine = $this->model->getExpenseLine();
        $this->view->getExpenseAmount = $this->model->getExpenseAmount();

        $this->view->getExpense->id = '';
        $this->view->getExpense->dateIssued = date('Y-m-d');

        // $this->view->css = array('/expenses/css/template.css');
        // $this->view->menu = 'views/expenses/menu.php';
        $this->view->render('views/expenses/new.php', true);
    }

    function newvendor() {
        $this->view->supplier = $this->model->getSupplier();

        $this->view->render('views/expenses/new_vendor.php', true);
    }

    function expenseLine() {
        $this->model->expenseLine();
    }

    function setSupplier() {
        if ($_GET['id'] == '') {
            $this->model->addSupplier();
        } else {
            $this->model->updateSupplier($_GET['id']);
        }
    }

    // von codes

    function getSuppliers() {
        $this->view->suppliers = $this->model->search();

        $this->view->render('views/expenses/ajax/getDatas.php', true);
    }

    function addexpense() {
        if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->tinNum == '') {
            require_once ('views/setting/company.php');
            exit;
        }
        $this->model->addexpense();
    }

    function editexpense() {
        $this->model->editexpense();
    }

    function loadList() {
        $this->view->getData = $this->model->searchData();
        $this->view->getSuppliers = $this->model->getMySuppliers();
        $this->view->getExpenseAmount = $this->model->getOrgExpenseAmount();
        $this->view->render('views/expenses/ajax/expenseList.php', true);
    }

    function delete() {
        $this->model->delete();
    }

    function checksuppliers() {
        if (TblSupplierMySqlExtDAO::checkSupplier()) {
            echo true;
        } else {
            echo false;
        }
    }

    function expensePagenation() {
        $this->view->pages = $this->model->getExpensePages();
        $this->view->render('views/expenses/ajax/expenseFilter.php', true);
    }

    function setReverse() {
        $this->model->setReverse();
    }

    public function newreceiptExpenses() {
        $this->view->css = array('/expenses/css/template.css');
        $this->view->render('views/expenses/new_receipt_expense.php');
    }

    function moptype() {
        $orginfo = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));
        $orginfo->modeOfPayment = $_POST['modeOfPayment'];
//        print_r($orginfo);exit;
        DAOFactory::getTblOrganizationInfoDAO()->update($orginfo);

        header('Location:' . URL . 'expenses/add');
    }

    function printPreview() {
        $this->view->getExpense = $this->model->getExpenseInfo();
        $this->view->getTrialBalance = $this->model->getTrialBalanceExpenseInfo($this->view->getExpense->id);
        $this->view->getVendor = $this->model->getExpenseVendor($this->view->getExpense->supplierId);
        $this->view->orgInfo = $this->model->getOrgInfo();
        $this->view->org = $this->model->getOrg();
        $this->importCss();

        $this->view->render('views/expenses/ajax/expense_voucher.php', true);
    }

    function importCss() {
        $this->view->render('views/report/css.php', true);
    }

}
