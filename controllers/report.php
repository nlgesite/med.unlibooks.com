<?php

class Report extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->available = $this->model->getInfo();
        $this->view->css = array('/report/css/template.css');
        $this->view->render('views/report/index.php');
    }

    function new_clientlist() {
        $this->importCss();
        return require('views/report/clientlist.php');
    }

    function new_salesitem() {
        return require('views/report/salesitem.php');
    }

    function new_salestask() {
        $this->importCss();
        return require('views/report/salestask.php');
    }

    function new_balance_sheet() {
        $this->importCss();
        return require('views/report/balance_sheet.php');
    }

    function new_income_statement() {
        $this->importCss();
        return require('views/report/income_statement.php');
    }

    function trial_balance() {
        $this->importCss();
        return require('views/report/trial_balance.php');
    }
//other reports
    function new_monthlyExpense() {
        $this->view->getMonthlyExpense = $this->model->getNewExpenseReport();
        $this->view->getJournalLine = $this->model->reportJournalLineExpense();

        $this->importCss();
        $this->view->render('views/report/monthly_expenses.php', true);
    }
	
	function summaryBilling(){
		// $this->view->css = array('/report/css/template.css');
		$this->importCss();
		$this->view->summaryBilling = $this->model->checkSummaryBilling();
		$this->view->render('views/report/summary_billing.php',true);
	}
	
	function genSummaryBilling(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->summaryBilling = $this->model->getSummaryBilling();
        $this->importCss();
        $this->view->render('views/report/ajax/summary_billing.php',true);
	}
	
	function exportSummaryBilling(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->summaryBilling = $this->model->exportSummaryBilling();
		
        $this->view->render('views/report/export/summary_billing.php',true);
	}
	
	function cashReceiptsBook(){
		$this->importCss();
		$this->view->cashReceiptsBook = $this->model->checkCashReceiptsBook();
		$this->view->render('views/report/cash_receipts_book.php',true);
	}
	
	function genCashReceiptsBook(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->cashReceiptsBook = $this->model->getCashReceiptsBook();
        $this->importCss();
        $this->view->render('views/report/ajax/cash_receipts_book.php',true);
	}
	
	function exportCashReceiptsBook(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->cashReceiptsBook = $this->model->exportCashReceiptsBook();
        $this->view->render('views/report/export/cash_receipts_book.php',true);
	}
	function cashDisburstmentBook(){
		$this->importCss();
		$this->view->cashDisbursementBook = $this->model->checkCashDisbursementBook();
		$this->view->render('views/report/cash_disbursement_book.php',true);
	}
	
	function genCashDisbursementBook(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->cashDisbursementBook = $this->model->getCashDisbursementBook();
        $this->importCss();
        $this->view->render('views/report/ajax/cash_disbursement_book.php',true);
	}
	function exportCashDisbursementBook(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->cashDisbursementBook = $this->model->exportCashDisbursementBook();
        $this->view->render('views/report/export/cash_disbursement_book.php',true);
	}
	
	function summaryJournal(){
		$this->importCss();
		$this->view->summaryJournal = $this->model->checkSummaryJournal();
		$this->view->render('views/report/summary_journal.php',true);
	}
	
	function genSummaryJournal(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->summaryJournal = $this->model->getSummaryJournal();
        
		$this->importCss();
        $this->view->render('views/report/ajax/summary_journal.php',true);
	}
	function exportSummaryJournal(){
		$this->view->org = $this->model->getOrg();
		$this->view->info = $this->model->getOrgInfo();
		$this->view->summaryJournal = $this->model->exportSummaryJournal();
        $this->view->render('views/report/export/summary_journal.php',true);
	}

    function new_outstanding_receivable() {

        $this->view->getHmoName = $this->model->getHmoName();
        $this->view->getHmo = $this->model->getHmo_outstandingReceivable();

        $this->view->getOutstandingReceivable = $this->model->outstandingReceivable();
        $this->view->checkHmoOutStanding = $this->model->checkHmoOutStanding();
        $this->importCss();
        $this->view->render('views/report/outstanding_receivable_report.php', true);
    }

    /* export Monthly Expense */

    function export() {
        // /* 


        $data = $this->model->exportReport();
        // $journal = $this->model->exportJournalLine();

        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="monthly_expense.xls"');

        $this->view->org = $org;
        $this->view->info = $info;
        $this->view->data = $data;
        // $this->view->journal = $journal;

        $flag = false;
        $this->view->render('views/report/export/monthly_expenses.php', true);
    }

    /* end monthly Expense */

    /* export collected report */

    function export_PaymentCollected() {
        $data = $this->model->exportReport_PaymentCollected();

        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="collected_report.xls"');

        $this->view->data = $data;
        $this->view->info = $info;
        $this->view->org = $org;

        $flag = false;
        $this->view->render('views/report/export/collected.php', true);
        ?>

        <?php

    }

    /* end collected report */

    function exportItem() {

        $data = $this->model->exportSalesItemReport();

        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="sales_per_item_report.xls"');

        $this->view->data = $data;
        $this->view->info = $info;
        $this->view->org = $org;

        $flag = false;
        $this->view->render('views/report/export/sales_per_item.php', true);
        ?>			

        <?php

    }

    function exportTask() {
        $data = $this->model->exportSalesTaskReport();

        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="sales_per_service_report.xls"');

        $this->view->data = $data;
        $this->view->info = $info;
        $this->view->org = $org;

        $flag = false;
        $this->view->render('views/report/export/sales_per_service.php', true);
        ?>


        <?php

    }

    function exportClient() {

        $data = $this->model->exportClientList();

        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="patient_list_report.xls"');

        $this->view->data = $data;
        $this->view->info = $info;
        $this->view->org = $org;

        $flag = false;
        $this->view->render('views/report/export/patient_list.php', true);
        ?>


        <?php

    }

    function export_OutstandingReceivable() {
        $data = $this->model->exportReport_OutstandingReceivable();
        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="outstanding_receivable_report.xls"');

        $this->view->data = $data;
        $this->view->info = $info;
        $this->view->org = $org;

        $flag = false;
        $this->view->render('views/report/export/outstanding_receivable.php', true);
        ?>


        <?php

    }

    function export_BalanceSheet() {

        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        $data = (object) array('incomeTaxPayable' => '', 'propertyAndEquipment' => '', 'proprietorsCapital' => '', 'netOperatingIncomeLoss' => '', 'personalDrawings' => '', 'cash' => '', 'otherAssets' => '', 'outputVat' => '', 'receivable' => '', 'date' => '');

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);
            if (isset($_GET['date']) || isset($_GET['year'])) {
//                require_once ('public/report.class.php');
//                $report = new ReportClass();
//                $data = $report->exportBalanceSheet();
//                $_POST = $_GET;                print_r($_GET);exit;
                $data = ReportClass::balanceSheet(Session::getSession('medorgid'), (isset($_GET['searchtype']) && $_GET['searchtype'] == 'monthly') ? $_GET['date'] : $_GET['year'], $_GET['searchtype']);
//                $data2incomeStatement = ReportClass::incomeStatement();
            }
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="balanceSheet_report.xls"');

        $this->view->info = $info;
        $this->view->org = $org;
        $this->view->data = $data;
//        $this->view->data2 = $data2;


        $this->view->render('views/report/export/balance_sheet.php', true);
        ?>


        <?php

    }

    function export_incomeStatement() {
        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        $data = (object) array('servicefee' => '', 'sales' => '', 'cost_sales' => '', 'cost_except_cost_sales' => '', 'date' => '');

        if (Session::getSession('meduser')) {
            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);

            if (isset($_GET['date'])) {
//                require_once ('public/report.class.php');
//                $report = new ReportClass();
//                $_POST = $_GET;
                // $data = $report->export_incomeStatement();
                $data = ReportClass::incomeStatement(Session::getSession('medorgid'), (isset($_GET['searchtype']) && $_GET['searchtype'] == 'monthly') ? $_GET['date'] : $_GET['year'], $_GET['searchtype']);
            }
        }

        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="income_statement_report.xls"');

        $this->view->info = $info;
        $this->view->org = $org;
        $this->view->data = $data;


        $this->view->render('views/report/export/income_statement.php', true);
        ?>


        <?php

    }

    function export_trialbalance() {
        $info = new TblOrganizationInfo();
        $org = new TblOrganization();

        /* $data = (object) array('servicefee' => '', 'sales' => '', 'cost_sales' => '', 'cost_except_cost_sales' => '', 'date' => ''); */


        if (Session::getSession('meduser')) {
//            $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
//            $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
            Session::setSession('medinfoid', $info->id);

            if (isset($_GET['date']) || isset($_GET['year'])) {
                $data = $this->model->exportReport_TrialBAlance();
                //$data = ReportClass::incomeStatement(Session::getSession('medorgid'), (isset($_GET['searchtype']) && $_GET['searchtype']=='monthly')? $_GET['date']:$_GET['year'], $_GET['searchtype']);
            }
        }

        $daterange = $daterange2 = '';
        if (isset($_GET['date']) && $_GET['searchtype'] == 'monthly') {
            $daterange = date('Y-m', strtotime($_GET['date'] . ' -1 month'));
            $daterange2 = date('Y-m', strtotime($_GET['date']));
        } elseif (isset($_GET['date']) && $_GET['searchtype'] == 'annual') {
            $daterange = $_GET['year'] - 1; //date('Y', strtotime($_POST['date'] . ' -1 year'));
            $daterange2 = $_GET['year']; //date('Y', strtotime($_POST['date']));
        }
//        print_r($data);
        header('Content-type: application/excel');
        header('Content-Disposition: attachment; filename="trial_balance.xls"');

//        $this->view->info = $info;
//        $this->view->org = $org;
        $this->view->data = $data;
        $this->view->searchtype = $_GET['searchtype'];
        $this->view->daterange = $daterange;
        $this->view->daterange2 = $daterange2;
        //echo $this->daterange;  

        $this->view->render('views/report/export/trial_balance.php', true);
        ?>


        <?php

    }

    //start
    function cleanData(&$str) {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"'))
            $str = '"' . str_replace('"', '""', $str) . '"';
    }

    //end

    function new_payment_collected() {
        $this->view->getHmoName = $this->model->getHmoName();
        $this->view->getHmoName_enterpayment = $this->model->getEnterPayment_hmo();
        $this->view->getMOP_enterpayment = $this->model->getEnterPayment_mop();
        $this->view->getEnterPayment = $this->model->getEnterPayment();
        $this->view->checkEnterPayment = $this->model->checkEnterPayment();

        $this->importCss();
        $this->view->render('views/report/payment_collected.php', true);
    }

    function importJs() {
        $this->view->render('views/report/js.php', true);
    }

    // form 1601c
    function form1601c($index) {
        if ($index == 'getReport') {
            $this->getForm1601c();
        } elseif ($index == 'setReport') {
            $this->setForm1601c();
        } else {
            $this->view->render('views/report/forms/form1601c/index.php', true);
        }
    }

    function getForm1601c() {
        $this->importJs();
        $this->importCss();
        $this->view->form1601c = $this->model->getForm1601c();
        $this->view->imageUrl = URL . 'views/report/forms/form1601c/Form1601Cpage01/';
        $this->view->render('views/report/forms/form1601c/Form1601Cpage01/index.php', true);
        $this->additionalScript($this->view->form1601c->status);
    }

    function setForm1601c() {
        $this->model->setForm1601c();
    }

    // end form 1601c
    // form 1601e
    function form1601e($index) {
        if ($index == 'getReport') {
            $this->getForm1601e();
        } elseif ($index == 'setReport') {
            $this->setForm1601e();
        } else {
            $this->view->render('views/report/forms/form1601e/index.php', true);
        }
    }

    function getForm1601e() {
        $this->importJs();
        $this->importCss();
        $this->view->form1601e = $this->model->getForm1601e();
        $this->view->atc_form1601e = $this->model->getAtc1601e();

        $this->view->imageUrl = URL . 'views/report/forms/form1601e/Form1601Epage01/';
        $this->view->render('views/report/forms/form1601e/Form1601Epage01/index.php', true);
        $this->additionalScript($this->view->form1601e->status);
    }

    function setForm1601e() {
        $this->model->setForm1601e();
        $this->model->setAtc1601e();
    }

    // end form 1601e
    // form ATC1601e
    /* function atcform1601e($index){
      if($index == 'getReport'){
      $this->getAtc1601e();
      } elseif($index == 'setReport') {
      $this->setAtc1601e();
      } else {
      $this->view->render('views/report/forms/form1601e/index.php',true);
      }
      }

      function getAtc1601e(){
      $this->importJs();
      $this->importCss();
      $this->view->atcform1601e = $this->model->getAtc1601e();

      $this->view->imageUrl = URL . 'views/report/forms/form1601e/Form1601Epage01/';
      $this->view->render('views/report/forms/form1601e/Form1601Epage01/index.php',true);
      $this->additionalScript($this->view->atcform1601e->status);
      }

      function setAtc1601e(){
      $this->model->setAtc1601e();
      } */
    // end form ATC1601e
    // form 2551m
    function form2551m($index) {
        if ($index == 'getReport') {
            $this->getForm2551m();
        } elseif ($index == 'setReport') {
            $this->setForm2551m();
        } else {
            $this->view->render('views/report/forms/form2551m/index.php', true);
        }
    }

    function getForm2551m() {
        $this->importJs();
        $this->importCss();
        $this->view->form2551m = $this->model->getForm2551m();

        $this->view->imageUrl = URL . 'views/report/forms/form2551m/f2551m/';
        $this->view->render('views/report/forms/form2551m/f2551m/index.php', true);
        $this->additionalScript($this->view->form2551m->status);
    }

    function setForm2551m() {
        $this->model->setForm2551m();
    }

    // end form 2551m
    // form 2550m
    function form2550m($index) {
        if ($index == 'getReport') {
            $this->getForm2550m();
        } elseif ($index == 'setReport') {
            $this->setForm2550m();
        } else {
            $this->view->render('views/report/forms/form2550m/index.php', true);
        }
    }

    function getForm2550m() {
        $this->importJs();
        $this->importCss();
        $this->view->form2550m = $this->model->getForm2550m();
        $this->view->imageUrl = URL . 'views/report/forms/form2550m/f2550m/';
        $this->view->render('views/report/forms/form2550m/f2550m/index.php', true);

        $this->additionalScript($this->view->form2550m->status);
    }

    function setForm2550m() {
        $this->model->setForm2550m();
    }

    // end form 2550m
    // form 2550q
    function form2550q($index) {
        if ($index == 'getReport') {
            $this->getForm2550q();
        } elseif ($index == 'setReport') {
            $this->setForm2550q();
        } else {
            $this->view->render('views/report/forms/form2550q/index.php', true);
        }
    }

    function getForm2550q() {
        $this->importJs();
        $this->importCss();
        $this->view->form2550q = $this->model->getForm2550q();

        $this->view->imageUrl = URL . 'views/report/forms/form2550q/f2550q/';
        $this->view->render('views/report/forms/form2550q/f2550q/index.php', true);

        $this->additionalScript($this->view->form2550q->status);
    }

    function setForm2550q() {
        $this->model->setForm2550q();
    }

    // end form 2550m
    // form 1701
    function form1701($index) {

        if ($index == 'getReport') {
            $this->getForm1701();
        } elseif ($index == 'setReport') {
            $this->setForm1701();
        } else {
            $this->view->render('views/report/forms/form1701/index.php', true);
        }
    }

    function getForm1701() {

        $this->view->form1701 = $this->model->getForm1701();

        $this->view->imageUrl = URL . 'views/report/forms/form1701/Form1701page01/';
        $this->view->render('views/report/forms/form1701/Form1701page01/index.php', true);

        $this->view->imageUrl2 = URL . 'views/report/forms/form1701/Form1701page02/';
        $this->view->render('views/report/forms/form1701/Form1701page02/index.php', true);

        $this->view->imageUrl3 = URL . 'views/report/forms/form1701/Form1701page03/';
        $this->view->render('views/report/forms/form1701/Form1701page03/index.php', true);

        $this->view->imageUrl4 = URL . 'views/report/forms/form1701/Form1701page04/';
        $this->view->render('views/report/forms/form1701/Form1701page04/index.php', true);

        $this->view->imageUrl5 = URL . 'views/report/forms/form1701/Form1701page05/';
        $this->view->render('views/report/forms/form1701/Form1701page05/index.php', true);

        $this->view->imageUrl6 = URL . 'views/report/forms/form1701/Form1701page06/';
        $this->view->render('views/report/forms/form1701/Form1701page06/index.php', true);

        $this->view->imageUrl7 = URL . 'views/report/forms/form1701/Form1701page07/';
        $this->view->render('views/report/forms/form1701/Form1701page07/index.php', true);

        $this->view->imageUrl8 = URL . 'views/report/forms/form1701/Form1701page08/';
        $this->view->render('views/report/forms/form1701/Form1701page08/index.php', true);

        $this->view->imageUrl9 = URL . 'views/report/forms/form1701/Form1701page09/';
        $this->view->render('views/report/forms/form1701/Form1701page09/index.php', true);

        // $this->view->imageUrl10 = URL . 'views/report/forms/form1701/Form1701page10/';
        // $this->view->render('views/report/forms/form1701/Form1701page10/index.php', true);
        // $this->view->imageUrl11 = URL . 'views/report/forms/form1701/Form1701page11/';
        // $this->view->render('views/report/forms/form1701/Form1701page11/index.php',true);
        // $this->view->imageUrl12 = URL . 'views/report/forms/form1701/Form1701page12/';
        // $this->view->render('views/report/forms/form1701/Form1701page12/index.php',true);

        if ($this->view->form1701->status == 'posted') {
            echo '
				<script src="' . URL . 'views/report/forms/disabled.js"> alert("' . $this->view->form1701->status . '"); </script>
			';
        }
    }

    function setForm1701() {
        $this->model->setForm1701();
    }

    // end form 1701
    // form 1701q
    function form1701q($index) {
        if ($index == 'getReport') {
            $this->getForm1701q();
        } elseif ($index == 'setReport') {
            $this->setForm1701q();
        } else {
            $this->view->render('views/report/forms/form1701q/index.php', true);
        }
    }

    function getForm1701q() {
        $this->importCss();
        $this->view->form1701q = $this->model->getForm1701q();

        $this->view->imageUrl = URL . 'views/report/forms/form1701q/';

        $this->view->render('views/report/forms/form1701q/form1701q-001/index.php', true);
        $this->view->render('views/report/forms/form1701q/form1701q-002/index.php', true);
        $this->view->render('views/report/forms/form1701q/form1701q-003/index.php', true);

        $this->additionalScript($this->view->form1701q->status);
    }

    function setForm1701q() {
        $this->model->setForm1701q();
    }

    // end form 1701q


    function importCss() {
        $this->view->render('views/report/css.php', true);
    }

    function additionalScript($status) {

        if ($status == "posted") {
            echo '<script>
					$(function(){
						$(".buttonHolder").addClass("hidden");
						$(\'#background input[type="text"]\').attr("disabled",true);
						$(".printPdf").removeClass("hidden");
					});
			</script>';
        } else {
            echo '<script>
					$(function(){
						$(".buttonHolder").removeClass("hidden");
						$(".printPdf").addClass("hidden");
					})
			</script>';
        }
    }

    function provisionaryIncomeTax() {
        echo ReportClass::provisionaryIncomeTax($_POST['net']);
    }

}
