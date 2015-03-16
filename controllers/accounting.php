<?php

class Accounting extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->css = array('/accounting/css/template.css');
        $this->view->menu = 'views/accounting/menu.php';
        $this->view->render('views/accounting/chart.php');
    }

    //remove taxes.php
    public function taxes() {
        $this->view->css = array('/accounting/css/template.css');
        $this->view->menu = 'views/accounting/menu.php';
        $this->view->render('views/accounting/taxes.php');
    }

    function bank() {
        $this->view->css = array('/accounting/css/template.css');
        $this->view->menu = 'views/accounting/menu.php';
        $this->view->render('views/accounting/bank.php');
    }

    function journal_entry() {
		
        $this->view->css = array('/accounting/css/template.css');
        $this->view->menu = 'views/accounting/menu.php';
        $this->view->render('views/accounting/journal_entry.php');
    }

    function journal() {
        return require('views/accounting/journal.php');
    }

    function chart() {
        $this->view->menu = 'views/accounting/menu.php';
        $this->view->render('views/accounting/chart.php');
    }

    function new_bank() {
        return require('views/accounting/new_bank.php');
    }

    function new_charts_account() {
        return require('views/accounting/new_charts_account.php');
    }

    public function tax() {
        include('views/accounting/new_taxes.php');
    }

    function updateCompany() {

        if ($this->model->updateCompany()) {
//                header('Location:' . URL .'setting/company.php');
//                $this->view->render('views/setting/company.php');

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
        $this->model->addTax();
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
        if ($_POST['task'] == 'addtax' && Session::getSession('taxid') == '') {
            $this->model->addTax();
        } else if ($_POST['task'] == 'updatetax' || ($_POST['task'] == 'addtax' && Session::getSession('taxid') != '')) {
            $this->model->updateTax();
        }
    }

    function addbankOption() {
        if ($_POST['task'] == 'addbank' && Session::getSession('bankid') == '') {
            $this->model->newBank();
        } else if ($_POST['task'] == 'updatebank' || ($_POST['task'] == 'addbank' && Session::getSession('bankid') != '')) {
            $this->model->updateBank();
        }
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

    function checkDuplicate() {
        $global = new GlobalClass();

        echo $global->checkDuplicate();
    }

    function checkchart() {
//        echo count(DAOFactory::getTblCoaDAO()->queryByAccountNum($_POST['accountcode']));
        if (TblCoaMySqlExtDAO::checkChart()) {
            echo true;
        } else {
            echo false;
        }
    }

    function saveAddBank() {
        $this->model->saveBankAddNew();
    }

    function getCoaData() {
        $itms = TblCoaMySqlExtDAO::getCoaData($_POST['accountTypeSub']);

        $returns = array();
        foreach ($itms as $i => $itm) {
            $value = $itm->id . $itm->accountNum . $itm->accontName;

            $arr = array('id' => $itm->id, 'b' => $itm->accountNum, 'c' => $itm->accontName);


            $returns[] = $arr;
        }
        echo json_encode($returns);
    }

    function setCoa() {
        if ($_POST['task'] == "addcoa") {
            $this->model->addCoa();
        } elseif ($_POST['task'] == "updatecoa") {
            $this->model->updateCoa();
        }
    }

    function journalType() {
//        $result = TblCoaMySqlExtDAO::getcoaData(''); //DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
        $result = TblCoaMySqlExtDAO::hideCoaData('');
        if (count($result) > 0) {
//            $value = '<select name="accountCode[]" class="accountcode" required>';
            $value .='<option></option>';
            foreach ($result as $item) {
//                $value .='<option></option>';
                    $value .= '<option value="' . $item->accountNum . '">';
                    $value .= $item->accountNum . '-' . $item->accontName;
                    $value .= '</option>';
            }
//            $value .= '</select>';

            echo $value;
        }
    }

    function setJournal() {
        if ($_POST['task'] == 'addjournal') {
            $this->model->addjournal();
        } elseif ($_POST['task'] == 'updatejournal') {
            $this->model->updatejournal();
        }
        header('Location:' . URL . 'accounting/journal_entry');
    }

}
