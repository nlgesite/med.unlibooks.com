<?php

require_once ('public/report.class.php');

class Report_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function newclientlist() {
        $this->setClientlist(new TblClientlist());
    }

    function newsalesitem() {
        $this->setSalesitem(new TblSalesitem());
    }

    function newsalestask() {
        $this->setSalestask(new TblSalestask());
    }
	function getOrg(){
		$orgId = Session::getSession('medorgid');
		
		$org = DAOFactory::getTblOrganizationDAO()->load($orgId);
		
		return $org;
	}
	
	function getOrgInfo(){
		$org = $this->getOrg();
		
		$orgInfo = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($org->id);
		
		return $orgInfo[0];
	}
//otherReports
    function getNewExpenseReport() {
        $orgId = Session::getSession('medorgid');

        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $NewExpense = TblNewExpenseMySqlExtDAO::reportNewExpensePosted($orgId, $_POST['startdate'], $_POST['enddate']);
            // $NewExpenseReverse = TblNewExpenseMySqlExtDAO::reportNewExpenseReverse($orgId);
            // if($NewExpense && $NewExpenseReverse){
            // $NewExpense = array_merge($NewExpense, $NewExpenseReverse);
            // } elseif($NewExpenseReverse){
            // $NewExpense = $NewExpenseReverse;
            // }

            return $NewExpense;
        }
    }
	
	function getSummaryBilling(){
		$orgId = Session::getSession('medorgid');
		$from = $_POST['startdate'];
		$to = $_POST['enddate'];
		
		$data = TblNewInvoiceMySqlExtDAO::getSummaryBilling($orgId,$from,$to);
		return $data;
	}
	
	function checkSummaryBilling(){
		$orgId = Session::getSession('medorgid');
		
		$data = TblNewInvoiceMySqlExtDAO::checkSummaryBilling($orgId);
		return $data;
	} 
	
	function exportSummaryBilling(){
		$orgId = Session::getSession('medorgid');
		$from = $_GET['from'];
		$to = $_GET['to'];
		
		$data = TblNewInvoiceMySqlExtDAO::getSummaryBilling($orgId,$from,$to);
		return $data;
	} 
	
	function getCashDisbursementBook(){
		$orgId = Session::getSession('medorgid');
		$from = $_POST['from'];
		$to = $_POST['to'];
		
		$data = TblNewExpenseMySqlExtDAO::getCashDisbursementBook($orgId,$from,$to);
		
		return $data;
	}
	/* march 4, 2015
	pag nawala ka ewan ko na lang
	*/
	function checkCashDisbursementBook(){
		$orgId = Session::getSession('medorgid');
		
		$data = TblNewExpenseMySqlExtDAO::checkCashDisbursementBook($orgId);
		
		return $data;
	}
	/*  */
	
	function exportCashDisbursementBook(){
		$orgId = Session::getSession('medorgid');
		$from = $_GET['from'];
		$to = $_GET['to'];
		
		$data = TblNewExpenseMySqlExtDAO::getCashDisbursementBook($orgId,$from,$to);
		
		return $data;
	}
	
	function getSummaryJournal(){
		$orgId = Session::getSession('medorgid');
		$from = $_POST['startdate'];
		$to = $_POST['enddate'];
		
		$data = TblJournalEntryMySqlExtDAO::getSummaryJournal($orgId,$from,$to);
		
		return $data;
	}
	
	function checkSummaryJournal(){
		$orgId = Session::getSession('medorgid');
		
		$data = TblJournalEntryMySqlExtDAO::checkSummaryJournal($orgId);
		
		return $data;
	}
	
	function exportSummaryJournal(){
		$orgId = Session::getSession('medorgid');
		$from = $_GET['from'];
		$to = $_GET['to'];
		
		$data = TblJournalEntryMySqlExtDAO::getSummaryJournal($orgId,$from,$to);
		
		return $data;
	}
	
	function getCashReceiptsBook(){
		$orgId = Session::getSession('medorgid');
		$from = $_POST['startdate'];
		$to = $_POST['enddate'];
		
		$data = TblEnterPaymentMySqlExtDAO::getCashReceiptsBook($orgId,$from,$to);
		
		return $data;
	} 
	
	function checkCashReceiptsBook(){
		$orgId = Session::getSession('medorgid');
		
		$data = TblEnterPaymentMySqlExtDAO::checkCashReceiptsBook($orgId);
		
		return $data;
	} 
	function exportCashReceiptsBook(){
		$orgId = Session::getSession('medorgid');
		$from = $_GET['from'];
		$to = $_GET['to'];
		
		$data = TblEnterPaymentMySqlExtDAO::getCashReceiptsBook($orgId,$from,$to);
		
		return $data;
	} 
//end

    function outstandingReceivable() {
        $orgId = Session::getSession('medorgid');

        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $newOutstanding = TblNewInvoiceMySqlExtDAO::getHmoOutStanding($orgId, $_POST['startdate'], $_POST['enddate']);
//        $newOutstandingReversed = TblNewInvoiceMySqlExtDAO::getReversedInvoiceBalance($orgId);
//
//        if ($newOutstanding && $newOutstandingReversed) {
//            $newOutstanding = array_merge($newOutstanding, $newOutstandingReversed);
//        } elseif ($newOutstandingReversed) {
//            $newOutstanding = $newOutstandingReversed;
//        }

            return $newOutstanding;
        }
    }
    function checkHmoOutStanding() {
        $orgId = Session::getSession('medorgid');
        
		$newOutstanding = TblNewInvoiceMySqlExtDAO::checkHmoOutStanding($orgId);
		return $newOutstanding;
	
    }

    function getHmo_outstandingReceivable() {
        $orgId = Session::getSession('medorgid');
        $newOutstanding = TblNewInvoiceMySqlExtDAO::getHmoReport_outstanding($orgId);
        return $newOutstanding;
    }

    function getEnterPayment() {
        $orgId = Session::getSession('medorgid');

        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $enterPayment = TblEnterPaymentMySqlExtDAO::reportEnterPayment_Posted($orgId, $_POST['startdate'], $_POST['enddate']);
//        $enterPayment_reversed = TblEnterPaymentMySqlExtDAO::reportEnterPayment_Reversed($orgId);
//        if ($enterPayment && $enterPayment_reversed) {
//            $enterPayment = array_merge($enterPayment, $enterPayment_reversed);
//        } elseif ($enterPayment_reversed) {
//            $enterPayment = $enterPayment_reversed;
//        }

            return $enterPayment;
        }
    }

    function checkEnterPayment() {
        $orgId = Session::getSession('medorgid');

		$enterPayment = TblEnterPaymentMySqlExtDAO::checkEnterPayment_Posted($orgId);
		return $enterPayment;
    }

    function getEnterPayment_hmo() {
        $orgId = Session::getSession('medorgid');
        $enterPayment = TblEnterPaymentMySqlExtDAO::getHmoReport($orgId);
        return $enterPayment;
    }

    function getEnterPayment_mop() {
        $orgId = Session::getSession('medorgid');
        $enterPayment = TblEnterPaymentMySqlExtDAO::getMOPReport($orgId);
        return $enterPayment;
    }

    function exportReport() {
        $orgId = Session::getSession('medorgid');
        $from = $_GET['from'];
        $to = $_GET['to'];

//        $getReportFinal = TblNewExpenseMySqlExtDAO::reportNewExpenseFinal($orgId, $from, $to);
        $NewExpense = TblNewExpenseMySqlExtDAO::reportNewExpensePosted($orgId, $from, $to);
        return $NewExpense;
    }

    function exportJournalLine() {
        $orgId = Session::getSession('medorgid');
        $from = $_GET['from'];
        $to = $_GET['to'];

        $getReportFinal = TblJournalLinesMySqlExtDAO::reportJournalLineFinal($orgId, $from, $to);

        return $getReportFinal;
    }

    function exportReport_PaymentCollected() {
        $orgId = Session::getSession('medorgid');
        $from = $_GET['from'];
        $to = $_GET['to'];

//        $getReportFinal = TblEnterPaymentMySqlExtDAO::reportEnterPaymentFinal($orgId, $from, $to);
        $enterPayment = TblEnterPaymentMySqlExtDAO::reportEnterPayment_Posted($orgId, $from, $to);
        return $enterPayment;
    }

    function exportReport_OutstandingReceivable() {
        $orgId = Session::getSession('medorgid');
        $from = $_GET['from'];
        $to = $_GET['to'];

//        $getReportHmoFinal = TblNewInvoiceMySqlExtDAO::export_getHmoOutStanding($orgId, $from, $to);
//        $getReportHmoFinal2 = TblNewInvoiceMySqlExtDAO::export_getHmoOutStanding_reversed($orgId, $from, $to);
//        if ($getReportHmoFinal && $getReportHmoFinal2) {
//            $getReportHmoFinal = array_merge($getReportHmoFinal, $getReportHmoFinal2);
//        } elseif ($getReportHmoFinal2) {
//            $getReportHmoFinal = $getReportHmoFinal2;
//        }
        // print_r($getReportHmoFinal);
        // exit;

        $newOutstanding = TblNewInvoiceMySqlExtDAO::getHmoOutStanding($orgId, $from, $to);
        return $newOutstanding;
    }

    function exportReport_TrialBalance() {
        $orgId = Session::getSession('medorgid');
//        $from = $_GET['from'];
        // $to = $_GET['to'];
//        $getReportHmoFinal = TblNewInvoiceMySqlExtDAO::export_getHmoOutStanding($orgId, $from, $to);
//        $getReportHmoFinal2 = TblNewInvoiceMySqlExtDAO::export_getHmoOutStanding_reversed($orgId, $from, $to);
//        if ($getReportHmoFinal && $getReportHmoFinal2) {
//            $getReportHmoFinal = array_merge($getReportHmoFinal, $getReportHmoFinal2);
//        } elseif ($getReportHmoFinal2) {
//            $getReportHmoFinal = $getReportHmoFinal2;
//        }
        // print_r($getReportHmoFinal);
        // exit;
//        echo $_GET['date'];
        $newtrialbalance = TblTrialBalanceMySqlExtDAO::trialBalance($orgId, (isset($_GET['searchtype']) && $_GET['searchtype'] == 'monthly') ? $_GET['date'] : $_GET['year'], $_GET['searchtype']);
        //$newOutstanding = TblNewInvoiceMySqlExtDAO::getHmoOutStanding($orgId, $from, $to);
        return $newtrialbalance;
    }

    function exportSalesItemReport() {
        $from = $_GET['from'];
        $to = $_GET['to'];

        $getReportSIFinal = TblInvoiceLinesMySqlExtDAO::gettSalesItemReport($from, $to);

        return $getReportSIFinal;
    }

    function exportSalesTaskReport() {
        $from = $_GET['from'];
        $to = $_GET['to'];

//        $getReportSIFinal = TblInvoiceLinesMySqlExtDAO::getExportTaskreport($from, $to);
        $getReportSIFinal = TblInvoiceLinesMySqlExtDAO::gettaskreport(Session::getSession('medorgid'), $from, $to);
        return $getReportSIFinal;
    }

    function exportClientList() {
        $from = $_GET['from'];
        $to = $_GET['to'];

        $getReportClientFinal = TblClientMySqlExtDAO::getClientlistReport($from, $to);

        return $getReportClientFinal;
    }

    function reportJournalLine() {
        $orgId = Session::getSession('medorgid');
        $startDate = $_POST['startdate'];
        $endDate = $_POST['enddate'];
        $getReportJournalLine = TblJournalLinesMySqlExtDAO::reportJournalLine($orgId, $startDate, $endDate);

        return $getReportJournalLine;
    }

    function reportJournalLineExpense() {
        $orgId = Session::getSession('medorgid');
        $startDate = $_POST['startdate'];
        $endDate = $_POST['enddate'];
        $getReportJournalLine = TblJournalLinesMySqlExtDAO::reportJournalLineExpense($orgId, $startDate, $endDate);

        return $getReportJournalLine;
    }

    function getHmoName() {
        $orgId = Session::getSession('medorgid');
        $getHMOPartner = DAOFACTORY::getTblHmoDAO()->queryByOrgId($orgId);

        return $getHMOPartner;
    }

    function getPeriodByMonthYear() {

        $month = $_POST['month'];
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');

        $period = TblTaxablePeriodMySqlExtDAO::getPeriodByMonthYear($orgId, $month, $year);
//        echo $month;

        if ($period) {
            return $period[0];
        }

        return $period;
    }

    function setPeriod() {
        $period = new TblTaxablePeriod();
        $period->month = $_POST['month'];
        $period->year = $_POST['year'];
        $period->orgId = Session::getSession('medorgid');

        $period->id = DAOFACTORY::getTblTaxablePeriodDAO()->insert($period);
//        echo $period->id;
    }

    // 2550m
    function getForm2550m() {

        $period = $this->getPeriodByMonthYear();
        if ($period) {
            $form2550m = DAOFACTORY::getTblForm2550mDAO()->queryByTaxablePeroidId($period->id);
            if (isset($form2550m) && !empty($form2550m)) {
                $form2550m = $form2550m[0];

                $month = date('m', strtotime($form2550m->item1));
                $year = date('Y', strtotime($form2550m->item1));

                $form2550m->item1M = $month;
                $form2550m->item1Y = $year;
            } else {
                $form2550m = $this->genForm2550m2(new TblForm2550m());
            }

            return $form2550m;
        } else {
//            $this->setPeriod();
            return $this->genForm2550m2(new TblForm2550m());
        }
    }

    function genForm2550m2($form2550m) {
        $month = $_POST['month'];
        $month2 = date('m', strtotime($month));
        $month2 = date('m', strtotime('2014-' . $month . '-01'));
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');
// exit;
        $form2550m->item1M = $month2; //date('m', strtotime($month));
        $form2550m->item1Y = $year;

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form2550m->item4 = $each->tinNum;
                $form2550m->item5 = $each->rdoCode;
                $form2550m->item6 = $each->lineOfBusiness;

                $form2550m->item8 = $each->phoneNum;
                $form2550m->item9 = $each->address;
                $form2550m->item10 = $each->zipCode;
            }
        }

        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);

        if ($orgName) {
            $form2550m->item7 = $orgName->orgName;
        }

        $_2550M = TblForm2550mMySqlExtDao::get2550M_data($orgId, $month2, $year);

        if ($_2550M) {
            foreach ($_2550M as $each2) {
                if ($each2->itr_item == "12A") {
                    $form2550m->part2Item12A = $each2->amount;
                } elseif ($each2->itr_item == "18A") {
                    $form2550m->part2Item18A = $each2->amount;
                } else if ($each2->itr_item == "18E") {
                    $form2550m->part2Item18E = $each2->amount;
                } else if ($each2->itr_item == "18I") {
                    $form2550m->part2Item18I = $each2->amount;
                } else if ($each2->itr_item == "18M") {
                    $form2550m->part2Item18M = $each2->amount;
                } else if ($each2->itr_item == "15") {
                    $form2550m->part2Item15 = $each2->amount;
                } else if ($each2->itr_item == "15M") {
                    $form2550m->part2Item15M = $each2->amount;
                }
            }
        }

        $form2550m->part2Item12B = $form2550m->part2Item12A * (0.12);
        $form2550m->part2Item13B = $form2550m->part2Item13B * (0.12);
        $form2550m->part2Item16A = $form2550m->part2Item12A + $form2550m->part2Item13A + $form2550m->part2Item14 + $form2550m->part2Item15;
        $form2550m->part2Item16B = $form2550m->part2Item12B + $form2550m->part2Item13B;
        $form2550m->part2Item17F = $form2550m->part2Item17A + $form2550m->part2Item17B + $form2550m->part2Item17C + $form2550m->part2Item17D + $form2550m->part2Item17E;
        $form2550m->part2Item18B = $form2550m->part2Item18A * (0.12);
        $form2550m->part2Item18D = $form2550m->part2Item18C * (0.12);
        $form2550m->part2Item18F = $form2550m->part2Item18E * (0.12);
        $form2550m->part2Item18H = $form2550m->part2Item18G * (0.12);
        $form2550m->part2Item18J = $form2550m->part2Item18I * (0.12);
        $form2550m->part2Item18L = $form2550m->part2Item18K * (0.12);
        $form2550m->part2Item18O = $form2550m->part2Item18N * (0.12);
        $form2550m->part2Item18P = $form2550m->part2Item18A + $form2550m->part2Item18C + $form2550m->part2Item18E + $form2550m->part2Item18G + $form2550m->part2Item18I + $form2550m->part2Item18K + $form2550m->part2Item18M + $form2550m->part2Item18N;
        $form2550m->part2Item19 = $form2550m->part2Item17F + $form2550m->part2Item18B + $form2550m->part2Item18D + $form2550m->part2Item18F + $form2550m->part2Item18H + $form2550m->part2Item18J + $form2550m->part2Item18L + $form2550m->part2Item18O;
        $form2550m->part2Item20F = $form2550m->part2Item20A + $form2550m->part2Item20B + $form2550m->part2Item20C + $form2550m->part2Item20D + $form2550m->part2Item20E;
        /* january 29, 2014 */
        $form2550m->part2Item21 = $form2550m->part2Item19 - $form2550m->part2Item20F;
        $form2550m->part2Item22 = $form2550m->part2Item16B - $form2550m->part2Item21;
        $form2550m->part2Item23G = $form2550m->part2Item23A + $form2550m->part2Item23B + $form2550m->part2Item23C + $form2550m->part2Item23D + $form2550m->part2Item23E + $form2550m->part2Item23F;
        $form2550m->part2Item24 = $form2550m->part2Item22 - $form2550m->part2Item23G;
        $form2550m->part2Item25D = $form2550m->part2Item25A + $form2550m->part2Item25B + $form2550m->part2Item25C;
        $form2550m->part2Item26 = $form2550m->part2Item24 + $form2550m->part2Item25D;
       
        return $form2550m;
    }

    function genForm2550m($form2550m) {
        $month = $_POST['month'];
        $year = $_POST['year'];

        $orgId = Session::getSession('medorgid');
        $allCollection = TblAllCollectionMySqlExtDAO::getForm2551mReport($orgId, $month, $year);

        if ($allCollection) {
            $allCollection = $allCollection[0];
        }

        return $form2550m;
    }

    function setForm2550m() {
        $period = $this->getPeriodByMonthYear();
        
        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form2550m = DAOFACTORY::getTblForm2550mDAO()->queryByTaxablePeroidId($period->id);
        if (isset($form2550m) && !empty($form2550m)) {
            $form2550m = $form2550m[0];
        } else {
            $form2550m = new TblForm2550m();
        }

        $form2550m = $this->setData($form2550m, $_POST);
        $form2550m->item1 = $_POST['year'] . '-' . date('m', strtotime($_POST['month'])) . '-' . date('d');

        $form2550m->taxablePeroidId = $period->id;

        $form2550m->status = isset($_GET['status']) ? 'posted' : 'open';
        // print_r($form2550m);
        // exit;
        if ($form2550m->id == '') {
            DAOFACTORY::getTblForm2550mDAO()->insert($form2550m);
        } else {
            DAOFACTORY::getTblForm2550mDAO()->update($form2550m);
        }
    }

    // end 2550m
    // 2550q
    function getForm2550q() {

        $period = $this->getPeriodByMonthYear();

        if ($period) {
            $form2550q = DAOFACTORY::getTblForm2550qDAO()->queryByTaxablePeroidId($period->id);
            if (isset($form2550q) && !empty($form2550q)) {
                $form2550q = $form2550q[0];
            } else {
//                $form2550m = new TblForm2550m();
                $form2550q = $this->genForm2550q2(new TblForm2550q());
            }

            return $form2550q;
        } else {
//            $this->setPeriod();
            return $this->genForm2550q2(new TblForm2550q());
        }
    }

    function genForm2550q($form2550q) {
        $month = $_POST['month'];
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');
        $allCollection = TblAllCollectionMySqlExtDAO::getForm2551mReport($orgId, $month, $year);

        if ($allCollection) {
            $allCollection = $allCollection[0];
        }

        return $form2550q;
    }

    function genForm2550q2($form2550q) {
        require_once ('public/report.class.php');
        $formsale = new ReportClass();
        // $_2550Q = $formsale->quarterly();
        $form2550q = $formsale->quarterly();

        $month = $_POST['month'];
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');

        $form2550q->month = date('m', strtotime($month));
        $form2550q->year = $year;

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form2550q->item6 = $each->tinNum;
                $form2550q->item7 = $each->rdoCode;
                $form2550q->item9 = $each->lineOfBusiness;

                $form2550q->item11 = $each->phoneNum;
                $form2550q->item12 = $each->address;
                $form2550q->item13 = $each->zipCode;
            }
        }

        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);

        if ($orgName) {
            $form2550q->item10 = $orgName->orgName;
        }

        $form2550q->part2Item15B = $form2550q->part2Item15A * (0.12);
        $form2550q->part2Item16B = $form2550q->part2Item16B * (0.12);
        $form2550q->part2Item19A = $form2550q->part2Item15A + $form2550q->part2Item16A + $form2550q->part2Item17 + $form2550q->part2Item18;
        $form2550q->part2Item19B = $form2550q->part2Item15B + $form2550q->part2Item16B;
        $form2550q->part2Item120F = $form2550q->part2Item20A + $form2550q->part2Item20B + $form2550q->part2Item20C + $form2550q->part2Item20D + $form2550q->part2Item20E;
        $form2550q->part2Item21B = $form2550q->part2Item21A * (0.12);
        $form2550q->part2Item21D = $form2550q->part2Item21C * (0.12);
        $form2550q->part2Item21F = $form2550q->part2Item21E * (0.12);
        $form2550q->part2Item21H = $form2550q->part2Item21G * (0.12);
        $form2550q->part2Item21J = $form2550q->part2Item21I * (0.12);
        $form2550q->part2Item21L = $form2550q->part2Item21K * (0.12);
        $form2550q->part2Item21O = $form2550q->part2Item21N * (0.12);
        $form2550q->part2Item21P = $form2550q->part2Item21A + $form2550q->part2Item21C + $form2550q->part2Item21E + $form2550q->part2Item21G + $form2550q->part2Item21I + $form2550q->part2Item21K + $form2550q->part2Item21M + $form2550q->part2Item21N;
        $form2550q->part2Item22 = $form2550q->part2Item20F + $form2550q->part2Item21B + $form2550q->part2Item21D + $form2550q->part2Item21F + $form2550q->part2Item21H + $form2550q->part2Item21J + $form2550q->part2Item21L + $form2550q->part2Item21O;
        $form2550q->part2Item23F = $form2550q->part2Item23A + $form2550q->part2Item23B + $form2550q->part2Item23C + $form2550q->part2Item23D + $form2550q->part2Item23E;
        /* january 29, 2014 */
        $form2550q->part2Item24 = $form2550q->part2Item22 - $form2550q->part2Item23F;
        $form2550q->part2Item25 = $form2550q->part2Item19B - $form2550q->part2Item24;
        $form2550q->part2Item26H = $form2550q->part2Item26A + $form2550q->part2Item26B + $form2550q->part2Item26C + $form2550q->part2Item26D + $form2550q->part2Item26E + $form2550q->part2Item26F + $form2550q->part2Item26H;
        $form2550q->part2Item27 = $form2550q->part2Item25 - $form2550q->part2Item26H;
        $form2550q->part2Item28D = $form2550q->part2Item28A + $form2550q->part2Item28B + $form2550q->part2Item28C;
        $form2550q->part2Item29 = $form2550q->part2Item27 + $form2550q->part2Item28D;

        return $form2550q;
    }

    function setForm2550q() {
        $period = $this->getPeriodByMonthYear();

        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form2550q = DAOFACTORY::getTblForm2550qDAO()->queryByTaxablePeroidId($period->id);
        if (isset($form2550q) && !empty($form2550q)) {
            $form2550q = $form2550q[0];
        } else {
            $form2550q = new TblForm2550q();
        }

        $form2550q = $this->setData($form2550q, $_POST);
        $form2550q->month = $_POST['item1_month'];
        $form2550q->year = $_POST['item1_year'] . '-' . $_POST['item1_month'] . '-' . date('d');
        $form2550q->item3From = 20 . $_POST['item3FY'] . '-' . $_POST['item3FM'] . '-' . $_POST['item3FD'];
        $form2550q->item3To = 20 . $_POST['item3TY'] . '-' . $_POST['item3TM'] . '-' . $_POST['item3TD'];
        $form2550q->taxablePeroidId = $period->id;
        // print_r($form2550q);
        // exit;

        $form2550q->status = isset($_GET['status']) ? 'posted' : 'open';
        if ($form2550q->id == '') {
            DAOFACTORY::getTblForm2550qDAO()->insert($form2550q);
        } else {
            DAOFACTORY::getTblForm2550qDAO()->update($form2550q);
        }
    }

    // end 2550q
    // 1601c


    function getForm1601c() {

        $period = $this->getPeriodByMonthYear();
        if ($period) {
            $form1601c = DAOFACTORY::getTblForm1601cDAO()->queryByTaxablePeroidId($period->id);
            if (isset($form1601c) && !empty($form1601c)) {
                $form1601c = $form1601c[0];

                $month = date('m', strtotime($form1601c->item1));
                $year = date('Y', strtotime($form1601c->item1));

                $form1601c->item1M = $month;
                $form1601c->item1Y = $year;
            } else {
                $form1601c = $this->genForm1601c2(new TblForm1601c());
            }

            return $form1601c;
        } else {
//            $this->setPeriod();
            return $this->genForm1601c2(new TblForm1601c());
        }
    }

    //1601C
    function genForm1601c($form1601c) {
        // $monthNum = sprintf("%02s", $_POST["month"]);
        // echo $month = date('m', strtotime($monthNum));
        // echo $_POST["month"];
        // $dateObj   = DateTime::createFromFormat('!m', $_POST["month"]);
        // echo $month = $dateObj->format('F'); // March
        // echo 
        $year = $_POST['year'];
        $month = date('m', strtotime('2014-' . $_POST["month"] . '-01'));
        $orgId = Session::getSession('medorgid');
        //salaries And Wages (Taxable)
        $salariesAndWages = TblJournalLinesMySqlExtDAO::reportJournalLineItr($orgId, $month, $year, '6000-002');
        $form1601c->part2Item15 = '';
        if ($salariesAndWages) {
            $form1601c->part2Item15 = 0;
            foreach ($salariesAndWages as $each) {
                $form1601c->part2Item15 = $each->balance;
            }
        }

        //salaries And Wages (Non Taxable)
        $salariesAndWages = TblJournalLinesMySqlExtDAO::reportJournalLineItr($orgId, $month, $year, '6000-003');
        $form1601c->part2Item16C = '';
        if ($salariesAndWages) {
            $form1601c->part2Item16C = 0;
            foreach ($salariesAndWages as $each) {
                $form1601c->part2Item16C = $each->balance;
            }
        }

        //Withholding Tax Expense – Compensation
        $withholdingTaxExpense = TblJournalLinesMySqlExtDAO::reportJournalLineItr($orgId, $month, $year, '2003');
        $form1601c->part2Item18 = '';
        if ($withholdingTaxExpense) {
            $form1601c->part2Item18 = 0;
            foreach ($withholdingTaxExpense as $each) {
                // $form1601c->part2Item18 = $each->balance;
                $form1601c->part2Item18 = $each->credit - $each->debit;
            }
        }

        $form1601c->item1M = $month;
        $form1601c->item1Y = $year;

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form1601c->item5 = $each->tinNum;
                $form1601c->item6 = $each->rdoCode;
                $form1601c->item7 = $each->lineOfBusiness;

                $form1601c->item9 = $each->phoneNum;
                $form1601c->item10 = $each->address;
                $form1601c->item11 = $each->zipCode;
            }
        }

        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);
        $form1601c->part2Item17 = $form1601c->part2Item15 - $form1601c->part2Item16C;

        $form1601c->part2Item25 = $form1601c->part2Item23 = $form1601c->part2Item20 = $form1601c->part2Item18;

        if ($orgName) {
            $form1601c->item8 = $orgName->orgName;
        }

        // echo '<pre>';
        // print_r($form1601c);
        // echo '</pre>';
        // exit;

        return $form1601c;
    }

    function genForm1601c2($form1601c) {
        $month = date('m', strtotime($_POST['month']));
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');

        $salariesAndWages = TblJournalLinesMySqlExtDAO::reportJournalLineItr2($orgId, $month, $year);
        $form1601c->item1M = $month;
        $form1601c->item1Y = $year;       // print_r($salariesAndWages.'dd');

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form1601c->item5 = $each->tinNum;
                $form1601c->item6 = $each->rdoCode;
                $form1601c->item7 = $each->lineOfBusiness;

                $form1601c->item9 = $each->phoneNum;
                $form1601c->item10 = $each->address;
                $form1601c->item11 = $each->zipCode;
            }
        }/* 
        if ($salariesAndWages) {
            foreach ($salariesAndWages as $item) {
                if ($item['ITR'] == '15') {
                    $form1601c->part2Item15 += $item['amount'];
                } elseif ($item['ITR'] == '16C') {
                    $form1601c->part2Item16C += $item['amount'];
                    // $form1601c->part2Item15 += $item['amount'];
                } elseif ($item['ITR'] == '18') {
                    $form1601c->part2Item18 += $item['amount'];
                }
            }
        } */

		foreach($salariesAndWages as $each){
			if($each['ITR'] == '15'){
				$form1601c->part2Item15 = $each['amount'];
			}else if($each['ITR'] == '18'){
				$form1601c->part2Item18 = $each['amount'];
			}else if($each['ITR'] == '16C'){
				$form1601c->part2Item16C = $each['amount'];
			}
		}
		
		
		$form1601c->part2Item17 = $form1601c->part2Item15 + $form1601c->part2Item16A + $form1601c->part2Item16B + $form1601c->part2Item16C; 
		$form1601c->part2Item20 = $form1601c->part2Item18 + $form1601c->part2Item19; 
		$form1601c->part2Item22 = $form1601c->part2Item21A + $form1601c->part2Item21B; 
		$form1601c->part2Item23 = $form1601c->part2Item20 + $form1601c->part2Item22; 
		$form1601c->part2Item25 = $form1601c->part2Item23 + $form1601c->part2Item24D; 
		
        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);
       

        if ($orgName) {
            $form1601c->item8 = $orgName->orgName;
        }
//        print_r($form1601c);
        return $form1601c;
    }

    function setForm1601c() {
        $period = $this->getPeriodByMonthYear();
        
        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form1601c = DAOFACTORY::getTblForm1601cDAO()->queryByTaxablePeroidId($period->id);
        if (isset($form1601c) && !empty($form1601c)) {
            $form1601c = $form1601c[0];
        } else {
            $form1601c = new TblForm1601c();
        }
//        echo $period .'FDF';
        $form1601c = $this->setData($form1601c, $_POST);
        // $form1601c->item1 = $_POST['year'] . '-' . date('m',strtotime($_POST['month'])) . '-01';
        $form1601c->item1 = $_POST['year'] . '-' . date('m', strtotime($_POST['month'])) . '-' . date('d');

        $form1601c->taxablePeroidId = $period->id;

        $form1601c->status = isset($_GET['status']) ? 'posted' : 'open';
        // print_r($form1601c);
        // exit;
        if ($form1601c->id == '') {
            DAOFACTORY::getTblForm1601cDAO()->insert($form1601c);
        } else {
            DAOFACTORY::getTblForm1601cDAO()->update($form1601c);
        }
    }

//end 1601c
    // 1601eATC
    function getAtc1601e() {

        $form1601e = $this->getForm1601e();

        if ($form1601e->id == '') {
            return $this->genAtc1601e();
        } else {
            return $atc = DAOFactory::getTblAtc1601eDAO()->queryByForm1601eId($form1601e->id);
        }
    }

    function genAtc1601e() {
        // $month = $_POST['month'];
        $month = date('m', strtotime('2014-' . $_POST['month'] . '-01'));
        // echo $month;
        // exit;
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');

        $array = array();

        $query = TblAtc1601eMySqlExtDAO::report1601eExpenseJournal($orgId, $month, $year);

        if ($query) {
            foreach ($query as $each) {
                $atc = new TblAtc1601e();

                $atc->accountName = $each->accountName;
                $atc->atcCode = $each->atcCode;
                $atc->amount = $each->amount;
                $atc->rate = $each->rate;
                $atc->taxRequired = $each->taxRequired;

                $array[] = $atc;
            }
        }

        return $array;
    }

    function setAtc1601e() {
        $form1601e = $this->getForm1601e();
        DAOFactory::getTblAtc1601eDAO()->deleteByForm1601eId($form1601e->id);
        foreach ($_POST['accountName'] as $var => $each) {
            $atc = new TblAtc1601e();

            $atc->form1601eId = $form1601e->id;
            $atc->accountName = $each;
            $atc->atcCode = $_POST['atcCode'][$var];
            $atc->amount = Controller::removeComma($_POST['amount'][$var]);
            $atc->rate = Controller::removeComma($_POST['rate'][$var]);
            $atc->taxRequired = Controller::removeComma($_POST['taxRequired'][$var]);

            DAOFactory::getTblAtc1601eDAO()->insert($atc);
        }
    }

    //form1601e
    function getForm1601e() {

        $period = $this->getPeriodByMonthYear();

        if ($period) {
            $form1601e = DAOFACTORY::getTblForm1601eDAO()->queryByTaxablePeroidId($period->id);
            if (isset($form1601e) && !empty($form1601e)) {
                $form1601e = $form1601e[0];

                $month = date('m', strtotime($form1601e->item1));
                $year = date('Y', strtotime($form1601e->item1));

                $form1601e->item1M = $month;
                $form1601e->item1Y = $year;
            } else {
                $form1601e = $this->genForm1601e(new TblForm1601e());
            }


            return $form1601e;
        } else {
//            $this->setPeriod();
            return $this->genForm1601e(new TblForm1601e());
        }
    }

    function genForm1601e($form1601e) {
        $month = $_POST['month'];
        // $month = date('m', strtotime('2014-'.$_POST["month"].'-01')); 
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');

        $atc = $this->genAtc1601e();
        if ($atc) {
            $form1601e->item14 = 0;
            foreach ($atc as $each) {
                $form1601e->item14 += $each->taxRequired;
            }
        }
		
        $form1601e->item1M = date('m', strtotime('2014-' . $_POST['month'] . '-01'));
        $form1601e->item1Y = $year;

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form1601e->item5 = $each->tinNum;
                $form1601e->item6 = $each->rdoCode;
                $form1601e->item7 = $each->lineOfBusiness;
                // $form1601e->item8 = $each->lineOfBusiness;
                $form1601e->item9 = $each->phoneNum;
                $form1601e->item10 = $each->address;
                $form1601e->item11 = $each->zipCode;
            }
        }

        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);

        if ($orgName) {
            $form1601e->item8 = $orgName->orgName;
        }

		$form1601e->item16 = $form1601e->item14 - $form1601e->item15C;
		$form1601e->item18 = $form1601e->item16 + $form1601e->item17D;
        return $form1601e;
    }

    function setForm1601e() {
        $period = $this->getPeriodByMonthYear();
        
        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form1601e = DAOFACTORY::getTblForm1601eDAO()->queryByTaxablePeroidId($period->id);
        if (isset($form1601e) && !empty($form1601e)) {
            $form1601e = $form1601e[0];
        } else {
            $form1601e = new TblForm1601e();
        }

        $form1601e = $this->setData($form1601e, $_POST);
        $form1601e->item1 = $_POST['year'] . '-' . date('m', strtotime($_POST['month'])) . '-' . date('d');

        $form1601e->taxablePeroidId = $period->id;

        $form1601e->status = isset($_GET['status']) ? 'posted' : 'open';
        // echo '<pre>';
        // print_r($form1601e);
        // echo '</pre>';
        // exit;
        if ($form1601e->id == '') {
            DAOFACTORY::getTblForm1601eDAO()->insert($form1601e);
        } else {
            DAOFACTORY::getTblForm1601eDAO()->update($form1601e);
        }
    }

//end 1601e
    // 2551m
    function getForm2551m() {

        $period = $this->getPeriodByMonthYear();

        if ($period) {
            $form2551m = DAOFACTORY::getTblForm2551mDAO()->queryByTaxablePeroidId($period->id);
            if (isset($form2551m) && !empty($form2551m)) {
                $form2551m = $form2551m[0];

                $month = date('m', strtotime($form2551m->item3));
                $year = date('Y', strtotime($form2551m->item3));

                $form2551m->item3M = $month;
                $form2551m->item3Y = $year;
            } else {
                $form2551m = $this->genForm2551m(new TblForm2551m());
            }

            return $form2551m;
        } else {
//            $this->setPeriod();
            return $this->genForm2551m(new TblForm2551m());
        }
    }

    function genForm2551m($form2551m) {
        $month = $_POST['month'];
        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');
        $allCollection = TblAllCollectionMySqlExtDAO::getForm2551mReport($orgId, $month, $year);

        $form2551m->iTR2551M14A = 'Person exempt from VAT under Sec. 109v (Sec. 116) ';
        $form2551m->iTR2551M14B = 'PT 010';
        $form2551m->iTR2551M14D = 3;

        if ($allCollection) {
            $allCollection = $allCollection[0];
            $form2551m->iTR2551M14C = $allCollection->amount;
        }
//        $invoiceAmount = TblInvoiceAmountMySqlExtDAO::getSalesRevenue($orgId, $month, $year);
//        if ($invoiceAmount) {
        // $invoiceAmount = $invoiceAmount[0];
//            foreach ($invoiceAmount as $each) {
//                $form2551m->iTR2551M14C += $each->subTotalAmount;
//            }
//        }
//        $invoiceAmount = TblInvoiceAmountMySqlExtDAO::getSalesRevenueReversed($orgId, $month, $year);
//        if ($invoiceAmount) {
        // $invoiceAmount = $invoiceAmount[0];
//            foreach ($invoiceAmount as $each) {
//                $form2551m->iTR2551M14C -= $each->subTotalAmount;
//            }
//        }

        $form2551m->item3M = date('m', strtotime($month));
        $form2551m->item3Y = $year;

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form2551m->item6 = $each->tinNum;
                $form2551m->item7 = $each->rdoCode;
                $form2551m->item8 = $each->lineOfBusiness;
                // $form2551m->item8 = $each->lineOfBusiness;
                $form2551m->item10 = $each->phoneNum;
                $form2551m->item11 = $each->address;
                $form2551m->item12 = $each->zipCode;
            }
        }

        $agencyName = DAOFactory::getTblOrganizationDAO()->load($orgId);

        if ($agencyName) {
            $form2551m->item9 = $agencyName->orgName;
        }

        $form2551m->iTR2551M14E = round($form2551m->iTR2551M14C * 0.03, 2);
        $form2551m->iTR2551M19 = $form2551m->iTR2551M14E;
        $form2551m->iTR2551M22 = $form2551m->iTR2551M19 - $form2551m->iTR2551M21;
        $form2551m->iTR2551M24 = $form2551m->iTR2551M22 + $form2551m->iTR2551M23D;

        return $form2551m;
    }

    function setForm2551m() {
        $period = $this->getPeriodByMonthYear();
        
        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form2551m = DAOFACTORY::getTblForm2551mDAO()->queryByTaxablePeroidId($period->id);
        if (isset($form2551m) && !empty($form2551m)) {
            $form2551m = $form2551m[0];
        } else {
            $form2551m = new TblForm2551m();
        }

        $form2551m = $this->setData($form2551m, $_POST);
        $form2551m->item3 = $_POST['year'] . '-' . date('m', strtotime($_POST['month'])) . '-' . date('d');

        $form2551m->taxablePeroidId = $period->id;

        $form2551m->status = isset($_GET['status']) ? 'posted' : 'open';

        if ($form2551m->id == '') {
            DAOFACTORY::getTblForm2551mDAO()->insert($form2551m);
        } else {
            DAOFACTORY::getTblForm2551mDAO()->update($form2551m);
        }
    }

//end 2551m
// form 1701
    function getForm1701() {
        $period = $this->getPeriodByMonthYear();

        $form1701 = new TblForm1701();

        if ($period) {

            $form1701 = DAOFactory::getTblForm1701DAO()->queryByTaxablePeroidId($period->id);
            if (isset($form1701) && !empty($form1701)) {
                $form1701 = $form1701[0];
            } else {
                $form1701 = $this->genForm1701(new TblForm1701);
            }
        } else {
//            $this->setPeriod();
            $form1701 = $this->genForm1701(new TblForm1701);
        }
        return $form1701;
    }

    function genForm1701($form1701) {

        $year = $_POST['year'];
        $orgId = Session::getSession('medorgid');

        $gen1701IS = TblTrialBalanceMySqlExtDAO::incomeStatement_1701($orgId, $year);
        $gen1701BS = TblTrialBalanceMySqlExtDAO::balanceSheet_1701($orgId, $year);
        // echo '<pre style="font-size:30px !important;">';
        // print_r($gen1701BS);
        // echo '</pre>';
        // exit;

        $form1701->item1Year = date('y', strtotime($year));
        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form1701->taxpayerTin = $each->tinNum;
                $form1701->rdo = $each->rdoCode;
                $form1701->item17 = $each->lineOfBusiness;
                $form1701->email = $each->emailAddress;
                $form1701->contactNum = $each->phoneNum;
                $form1701->regAddress = $each->address;
//                $form1701->item20 = $each->modeOfPayment;
            }
        }

        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);

        if ($orgName) {
            $form1701->taxFilerName = $orgName->orgName;
        }

        if ($gen1701IS) {
            foreach ($gen1701IS as $each) {
                if ($each->itrItem == 'sched2Item1A') {
                    $form1701->pg5Sched2Item1Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == 'sched2Item4A') {
                    $form1701->pg5Sched2Item4Taxpayer = $each->totalAmount;
                    // }else if($each->itrItem == 'sched3A'){
                    // $form1701['pg5Sched3Item1Taxpayer'] = $each->totalAmount;
                } else if ($each->itrItem == '23A') {
                    $form1701->pg7Sched6Item23Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '29A') {
                    $form1701->pg7Sched6Item29Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '22A') {
                    $form1701->pg7Sched6Item22Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '18A') {
                    $form1701->pg7Sched6Item18Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '8A') {
                    $form1701->pg7Sched6Item8Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '20A') {
                    $form1701->pg7Sched6Item20Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '14A') {
                    $form1701->pg7Sched6Item14Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '13A') {
                    $form1701->pg7Sched6Item13Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '10A') {
                    $form1701->pg7Sched6Item10Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '24A') {
                    $form1701->pg7Sched6Item24Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '25A') {
                    $form1701->pg7Sched6Item25Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '34A') {
                    $form1701->pg7Sched6Item34Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '35A') {
                    $form1701->pg7Sched6Item35Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '31A') {
                    $form1701->pg7Sched6Item31Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '26A') {
                    $form1701->pg7Sched6Item26Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == '32A') {
                    $form1701->pg7Sched6Item32Taxpayer = $each->totalAmount;
                } else if ($each->itrItem == 'partIV67A') {
                    $form1701->pg2Item67Taxpayer = $each->totalAmount;
                }
            }
        }

        if ($gen1701BS) {
            foreach ($gen1701BS as $each2) {
                if ($each2->itrItem == 'sched10Item1A') {
                    $form1701->pg9Sched10Item1Taxpayer = $each2->totalAmount;
                } else if ($each2->itrItem == 'sched10Item8A') {
                    $form1701->pg9Sched10Item8Taxpayer = $each2->totalAmount;
                } else if ($each2->itrItem == 'sched10Item3A') {
                    $form1701->pg9Sched10Item3Taxpayer = $each2->totalAmount;
                } else if ($each2->itrItem == 'sched10Item13A') {
                    $form1701->pg9Sched10Item13Taxpayer = $each2->totalAmount;
                } else if ($each2->itrItem == 'sched10Item15A') {
                    $form1701->pg9Sched10Item15Taxpayer = $each2->totalAmount;
                }
            }
        }

        $form1701->pg2Item45Taxpayer = 50000;

        return $form1701;
    }

    function setForm1701() {
        $period = $this->getPeriodByMonthYear();
        
        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form1701 = DAOFACTORY::getTblForm1701DAO()->queryByTaxablePeroidId($period->id);
        if (isset($form1701) && !empty($form1701)) {
            $form1701 = $form1701[0];
        } else {
            $form1701 = new TblForm1701();
        }

        $form1701 = $this->setData($form1701, $_POST);
        $form1701->taxablePeroidId = $period->id;

        $form1701->status = isset($_GET['status']) ? 'posted' : 'open';

        if ($form1701->id == '') {
            DAOFACTORY::getTblForm1701DAO()->insert($form1701);
        } else {
            DAOFACTORY::getTblForm1701DAO()->update($form1701);
        }
    }

    //form 1701q
    function getForm1701q() {
        $period = $this->getPeriodByMonthYear();

        $form1701q = new TblForm1701q();

        if ($period) {
            $form1701q = DAOFactory::getTblForm1701qDAO()->queryByTaxablePeroidId($period->id);
            if (isset($form1701q) && !empty($form1701q)) {
//                $form1701q = $form1701q[0];

                $result = $this->genForm1701q(new TblForm1701q());

//                if ($result) {
//                    $fields = array('iTR1701Q26A', 'iTR1701Q28A', 'iTR1701Q29A', 'iTR1701Q30A', 'iTR1701Q31A', 'iTR1701Q32A',
//                        'iTR1701Q33A', 'iTR1701Q34A', 'iTR1701Q36A', 'iTR1701Q37A', 'iTR1701Q38G', 'iTR1701Q38M',
//                        'iTR1701Q39A', 'iTR1701Q40G', 'iTR1701Q41A', 'iTR1701Q41C');
                
                $fields = array('iTR1701Q26A', 'iTR1701Q29A', 'iTR1701Q31A');
                    $result2 = $this->setArrayData($fields, $result);
                    $form1701q = $this->setData($form1701q[0], (array) $result2);
                    DAOFACTORY::getTblForm1701qDAO()->update($form1701q);
//                }
            } else {
                $form1701q = $this->genForm1701q(new TblForm1701q());
            }
        } else {
//            $this->setPeriod();
            $form1701q = $this->genForm1701q(new TblForm1701q());
        }

        return $form1701q;
    }

    function genForm1701q($form1701q) {
        $orgId = Session::getSession('medorgid');
        $year = $_POST['year'];

        //26A
        $month = date_parse($_POST['month']);
        $month = intval($month['month']);

        switch ($month) {
            case 3:
                $months = array(01, 02, 03);
                break;
            case 6:
                $months = array(04, 05, 06);
                break;
            case 9:
                $months = array(07, 08, 09);
                break;
            case 12:
                $months = array(10, 11, 12);
                break;
        }

        $result = TblTrialBalanceMySqlExtDAO::get1701q($orgId, $months, $year);
//
//        $salesRevenue = TblTrialBalanceMySqlExtDAO::get26A($orgId, $month, $year);
//        $salesRevenue = $salesRevenue ? $salesRevenue : array();
//
//        $month = $month - 1;
//        $salesRevenue2 = TblTrialBalanceMySqlExtDAO::get26A($orgId, $month, $year);
//        $salesRevenue = $salesRevenue2 ? array_merge($salesRevenue, $salesRevenue2) : array();
//        $month = --$month;
//        $salesRevenue2 = TblTrialBalanceMySqlExtDAO::get26A($orgId, $month, $year);
//        $salesRevenue = $salesRevenue2 ? array_merge($salesRevenue, $salesRevenue2) : array();
//
//        $salesReceipts = 0;
//        if (isset($salesRevenue) && !empty($salesRevenue)) {
//            foreach ($salesRevenue as $each) {
//                $salesReceipts += $each->total;
//            }
//        }
        //31A
//        $month = date_parse($_POST['month']);
//        $month = intval($month['month']);
//
//        $otherIncome = TblTrialBalanceMySqlExtDAO::get31A($orgId, $month, $year);
//        $otherIncome = $otherIncome ? $otherIncome : array();
//
//        $month = $month - 1;
//        $otherIncome2 = TblTrialBalanceMySqlExtDAO::get31A($orgId, $month, $year);
//        $otherIncome = $otherIncome2 ? array_merge($otherIncome, $otherIncome2) : array();
//        $month = --$month;
//        $otherIncome2 = TblTrialBalanceMySqlExtDAO::get31A($orgId, $month, $year);
//        $otherIncome = $otherIncome2 ? array_merge($otherIncome, $otherIncome2) : array();
//
//        $otherIncomes = 0;
//        if (isset($otherIncome) && !empty($otherIncome)) {
//            foreach ($otherIncome as $each) {
//                $otherIncomes += $each->total;
//            }
//        }
        //get33A
//        $month = date_parse($_POST['month']);
//        $month = intval($month['month']);
//
//        $generalAndAdmin = TblTrialBalanceMySqlExtDAO::get33A($orgId, $month, $year);
//        $generalAndAdmin = $generalAndAdmin ? $generalAndAdmin : array();
//
//        $month = $month - 1;
//        $generalAndAdmin2 = TblTrialBalanceMySqlExtDAO::get33A($orgId, $month, $year);
//        $generalAndAdmin = $generalAndAdmin2 ? array_merge($generalAndAdmin, $generalAndAdmin2) : array();
//        $month = --$month;
//        $generalAndAdmin2 = TblTrialBalanceMySqlExtDAO::get33A($orgId, $month, $year);
//        $generalAndAdmin = $generalAndAdmin2 ? array_merge($generalAndAdmin, $generalAndAdmin2) : array();
//
//        $generalAndAdmins = 0;
//        if (isset($generalAndAdmin) && !empty($generalAndAdmin)) {
//            foreach ($generalAndAdmin as $each) {
//                $generalAndAdmins += $each->total;
//            }
//        }
        //get37A
//        $month = date_parse($_POST['month']);
//        $month = intval($month['month']);
//
//        $regularIncomeTax = TblTrialBalanceMySqlExtDAO::get37A($orgId, $month, $year);
//        $regularIncomeTax = $regularIncomeTax ? $regularIncomeTax : array();
//
//        $month = $month - 1;
//        $regularIncomeTax2 = TblTrialBalanceMySqlExtDAO::get37A($orgId, $month, $year);
//        $regularIncomeTax = $regularIncomeTax2 ? array_merge($regularIncomeTax, $regularIncomeTax2) : array();
//        $month = --$month;
//        $regularIncomeTax2 = TblTrialBalanceMySqlExtDAO::get37A($orgId, $month, $year);
//        $regularIncomeTax = $regularIncomeTax2 ? array_merge($regularIncomeTax, $regularIncomeTax2) : array();
//
//        $regularIncomeTaxs = 0;
//        if (isset($regularIncomeTax) && !empty($regularIncomeTax)) {
//            foreach ($regularIncomeTax as $each) {
//                $regularIncomeTaxs += $each->total;
//            }
//        }
//        $form1701q = new TblForm1701q();
        $paymentmode = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->modeOfPayment;

        if ($result) {
            $result = $result[0];
            $form1701q->iTR1701Q26A = $result['PSI'] - $result['Sales_Disc'];
            $form1701q->iTR1701Q28A = $form1701q->iTR1701Q26A + $form1701q->iTR1701Q27A;
            $form1701q->iTR1701Q29A = $result['29A'];
            $form1701q->iTR1701Q30A = $form1701q->iTR1701Q28A + $form1701q->iTR1701Q29A;
            $form1701q->iTR1701Q31A = $result['31A'];
            $form1701q->iTR1701Q32A = $form1701q->iTR1701Q30A + $form1701q->iTR1701Q31A;
            $form1701q->iTR1701Q33A = ($paymentmode == 'osd') ? $form1701q->iTR1701Q32A * (40 / 100) : $result['33A'];
            $form1701q->iTR1701Q34A = $form1701q->iTR1701Q32A - $form1701q->iTR1701Q33A;
            $form1701q->iTR1701Q36A = $form1701q->iTR1701Q34A + $form1701q->iTR1701Q35A;
            $form1701q->iTR1701Q37A = ReportClass::provisionaryIncomeTax($form1701q->iTR1701Q36A);
            $form1701q->iTR1701Q38G = $result['38G'];
            $form1701q->iTR1701Q38M = $result['38G'];
            $form1701q->iTR1701Q39A = $form1701q->iTR1701Q37A - $form1701q->iTR1701Q38M;
            $form1701q->iTR1701Q40G = $form1701q->iTR1701Q40A + $form1701q->iTR1701Q40C + $form1701q->iTR1701Q40E;
            $form1701q->iTR1701Q41A = $form1701q->iTR1701Q39A + $form1701q->iTR1701Q40G;
            $form1701q->iTR1701Q41C = number_format($form1701q->iTR1701Q41A + $form1701q->iTR1701Q41C, 2);
        }

        $form1701q->item1 = $year;

        $profile = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        if ($profile) {
            foreach ($profile as $each) {
                $form1701q->item5 = $each->tinNum;
                $form1701q->item6 = $each->rdoCode;
                $form1701q->item19 = $each->lineOfBusiness;
                $form1701q->item11 = $each->address;
                $form1701q->item14 = $each->zipCode;
                $form1701q->item15 = $each->phoneNum;
            }
        }

        $orgName = DAOFactory::getTblOrganizationDAO()->load($orgId);

        if ($orgName) {
            $form1701q->item9 = $orgName->orgName;
        }

//        $form1701q->iTR1701Q26A = $salesReceipts;
//        $form1701q->iTR1701Q31A = $otherIncomes;
//        $form1701q->iTR1701Q33A = $generalAndAdmins;
//        $form1701q->iTR1701Q37A = $regularIncomeTaxs;
//        print_r($form1701q);
        return $form1701q;
    }

    function setForm1701q() {
        $period = $this->getPeriodByMonthYear();
        
        if(!$period){
            $this->setPeriod();
            $period = $this->getPeriodByMonthYear();
        }
        
        $form1701q = DAOFACTORY::getTblForm1701qDAO()->queryByTaxablePeroidId($period->id);
        if (isset($form1701q) && !empty($form1701q)) {
            $form1701q = $form1701q[0];
        } else {
            $form1701q = new TblForm1701q();
        }

        $form1701q = $this->setData($form1701q, $_POST);
        // $form1601c->item1 = $_POST['year'] . '-' . date('m',strtotime($_POST['month'])) . '-01';

        $form1701q->taxablePeroidId = $period->id;

        $form1701q->status = isset($_GET['status']) ? 'posted' : 'open';

        if ($form1701q->id == '') {
            DAOFACTORY::getTblForm1701qDAO()->insert($form1701q);
        } else {
            DAOFACTORY::getTblForm1701qDAO()->update($form1701q);
        }
    }

    function setData($obj, $array) {

        foreach ($obj as $var => $each) {
            if (isset($array[$var])) {
                $obj->$var = $this->removeComma($array[$var]);
            }
        }

        return $obj;
    }

    function setArrayData($fields, $data) {
        $obj = new stdClass();
        foreach ($fields as $field) {
            $obj->$field = $data->$field;
        }
        return $obj;
    }

    function removeComma($string) {
        $pattern = '/^\(/';

        $matches = array();

        preg_match($pattern, $string, $matches);

        if (substr($string, 0, 1) == '(') {
            $string = strtr($string, array('(' => '', ')' => ''));

            $string = '-' . $string;
        }

        $string = str_replace(',', '', $string);

        return $string;
    }

    function getInfo() {
        $orgId = Session::getSession('medorgid');

        $info = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        return $info[0];
    }

    function incomeTaxPayable() {
        require_once 'public/report.class.php';

        $incomestatement = ReportClass::incomeStatement();

        $code = TblTrialBalanceMySqlExtDAO::getTrialBalanceCode('2005');
        $regtax = TblTrialBalanceMySqlExtDAO::getTrialBalanceCode('6001-001');

        if ($incomestatement && isset($_POST['date'])) {
            if ($code && $incomestatement->provincome > 0) {
                $tb = DAOFactory::getTblTrialBalanceDAO()->load($code['id']);
                $tb->credit = $incomestatement->provincome;
                $tb->balance = $tb->debit - $tb->credit;
                DAOFactory::getTblTrialBalanceDAO()->update($tb);

                if (!empty($regtax)) {
                    $tbreg = DAOFactory::getTblTrialBalanceDAO()->load($regtax['id']);
                    $tbreg->debit = $incomestatement->provincome;

                    $tbreg->balance = $tbreg->debit - $tbreg->credit;
                    DAOFactory::getTblTrialBalanceDAO()->update($tbreg);
                } else {
                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('6001-001'), $incomestatement->provincome, 0, '', date('Y-m-d', strtotime($_POST['date'])), '', 'dc');
                }
            } elseif ($incomestatement->provincome > 0) {
                
            }
        }
    }

}

?>