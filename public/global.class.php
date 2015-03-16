<?php

class GlobalClass {

    function recurringInvoice() {
        foreach ($this->getRecurringData() as $item) {
            
        }
    }
    
    function setActiveStatus($tbl){
        switch ($tbl) {
            case 'client':
                $item = DAOFactory::getTblClientDAO()->load(Session::getSession('clientid'));
                $item->active = $_POST['active']=='yes' ? 'yes':'no';
                DAOFactory::getTblClientDAO()->update($item);
                break;
            case 'task':
                $item = DAOFactory::getTblTaskDAO()->load(Session::getSession('taskid'));
                $item->active = $_POST['active']=='yes'? 'yes':'no';
                DAOFactory::getTblTaskDAO()->update($item); 
                break;
            case 'hmo':
                $item = DAOFactory::getTblHmoDAO()->load(Session::getSession('hmoid'));
                $item->active = $_POST['active']=='yes' ? 'yes':'no';
                DAOFactory::getTblHmoDAO()->update($item); 
                break;
//            case 'item':
//                $item = DAOFactory::getTblItemDAO()->load(Session::getSession('itemid'));
//                $item->active = isset($_POST['active'])? 'yes':'no';
//                DAOFactory::getTblItemDAO()->update($item);
//                break;
            default:
                break;
        }
    }

    function weeklyRecurring() {
        $weekly_date = date('Y-m-d', strtotime('-7 days'));

        $txt = "SELECT nr.id FROM tbl_new_recurring nr WHERE " .
                "nr.last_date_sent ='" . $weekly_date . "' " .
                " && nr.due_date >= '" . $weekly_date . "' " .
                "&& nr.frequency = 'weekly'";

        $this->getRecurringData($txt);
    }

    function monthlyRecurring() {
        $weekly_date = date('Y-m-d', strtotime('-30 days'));

        $txt = "SELECT nr.id FROM tbl_new_recurring nr WHERE " .
                "nr.last_date_sent ='" . $weekly_date . "' " .
                " && nr.due_date >= '" . $weekly_date . "' " .
                "&& nr.frequency = 'weekly'";

        $this->getRecurringData($txt);
    }

    function getRecurringData($txt) {


//              $txt = "SELECT nr.id FROM tbl_new_recurring nr " .
//                      "INNER JOIN tbl_client c ON c.id = nr.client_id " .
//                      "WHERE c.orgid = " . Session::getSession('orgid');

        $sqlQuery = new SqlQuery($txt);
        $items = QueryExecutor::execute($sqlQuery);

        if (!isset($items))
            return false;

        $returns = array();

        foreach ($items as $item) {
//            $txt = "SELECT ni.id FROM tbl_new_invoice ni " .
//                    "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = ni.id" .
//                    "WHERE ai.new_recurring_id = " . $item->id .
//                    " ORDER BY ni.id DESC LIMIT 0, 1";
//            $sqlQuery = new SqlQuery($txt);
//            $new_invoice = QueryExecutor::execute($sqlQuery);
//
//            $new_invoice = DAOFactory::getTblNewInvoiceDAO()->load($new_invoice[0]['id']);
//            $currentinvoice_id = $new_invoice->id;
//            $new_invoice->id = '';
//            $new_invoice->dateCreated = $new_invoice->dateIssued = date('Y-m-d');
////                  $new_invoice->
//            $new_invoice_id = DAOFactory::getTblNewInvoiceDAO()->insert($new_invoice);
//
//            $new_invoice = DAOFactory::getTblNewInvoiceDAO()->load($new_invoice_id);
//            $new_invoice->invoiceNumber = sprintf('%1$04d', $new_invoice->id);
//            DAOFactory::getTblNewInvoiceDAO()->update($new_invoice);
//
//            $all_invoice = new TblAllInvoice();
//            $all_invoice->newInvoiceId = $new_invoice_id;
//            $all_invoice->newRecurringId = $item->id;
//
//            $this->saveInvoiceLine($new_invoice_id, $currentinvoice_id);
            
            $recurring = DAOFactory::getTblNewRecurringDAO()->load($item->id);
                $oldrecurring = $recurring->id;
                $recurring->id = '';
                $recurring->dateCreated = $recurring->dateIssued = date('Y-m-d');
                $recurring->recurringNumber = '';

                $recurringid = DAOFactory::getTblNewRecurringDAO()->insert($recurring);
                $recurring = DAOFactory::getTblNewRecurringDAO()->load($recurringid);
                $recurring->recurringNumber = sprintf('%1$07d', $recurring->id);
                DAOFactory::getTblNewRecurringDAO()->update($recurring);

                $recurringlines = DAOFactory::getTblRecurringLinesDAO()->queryByNewRecurringId($oldrecurring);

                $allinvoice = DAOFactory::getTblAllInvoiceDAO()->queryByNewRecurringId($oldrecurring);
                $oldinvoice = $allinvoice->newInvoiceId;

                $invoice = DAOFactory::getTblNewInvoiceDAO()->load($oldinvoice);

                $invoice->id = '';
                $invoice->dateCreated = date('Y-m-d');
                $invoiceid = DAOFactory::getTblNewInvoiceDAO()->insert($invoice);

                $invoice = DAOFactory::getTblNewInvoiceDAO()->load($invoiceid);
                $invoice->invoiceNumber = sprintf('%1$07d', $invoiceid);
                DAOFactory::getTblNewInvoiceDAO()->update($invoice);

                foreach ($recurringlines as $recurringline) {
                    $recurringline->newRecurringId = $recurring->id;
                    $recurringline->id = '';
                    DAOFactory::getTblRecurringLinesDAO()->insert($recurringline);

                    $recurringline->newInvoiceId = $invoiceid;
                    DAOFactory::getTblInvoiceLinesDAO()->insert($recurringline);
                }

//                foreach ($allinvoice as $item) {
                    $oldallinvoice = $allinvoice->id;
                    $allinvoice->id = '';
                    $allinvoice->newInvoiceId = $invoiceid;
                    $allinvoice->newRecurringId = $recurringid;

                    DAOFactory::getTblAllInvoiceDAO()->insert($allinvoice);
//                }
                    
                $recurringamount = DAOFactory::getTblRecurringAmountDAO()->queryByNewRecurringId($oldrecurring);
                $recurringamount->id ='';
                DAOFactory::getTblRecurringAmountDAO()->insert($recurringamount);
        }

        return $returns;
    }

    function saveInvoiceLine($newinvoiceid, $currentinvoice_id) {
        $invoice_lines = DAOFactory::getTblInvoiceLinesDAO()->queryByNewInvoiceId($currentinvoice_id);

        foreach ($invoice_lines as $invoice_line) {
            $invoice_line->newInvoiceId = $newinvoiceid;
            DAOFactory::getTblInvoiceLinesDAO()->insert($invoice_line);
        }
    }

    function checkDuplicate() {
        switch ($_POST['checkitem']) {
            case 'item':
                $result = TblItemMySqlExtDAO::checkItem();
                break;
            case 'task':
                $result = TblTaskMySqlExtDAO::checkTask();
                break;
            case 'tax':
                $result = TblTaxMySqlExtDAO::checkTax();
                break;
            case 'bank':
                $result = TblBankMySqlExtDAO::checkBank();
                break;
        }
        
        return $result;
    }

}

?>
