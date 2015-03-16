<?php

/**
 * Class that operate on table 'tbl_new_recurring'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblNewRecurringMySqlExtDAO extends TblNewRecurringMySqlDAO {
    static function getMaxNumId(){
        $txt = "SELECT nr.recurring_number FROM tbl_new_recurring nr ".
               "INNER JOIN tbl_client c ON c.id = nr.client_id ".
               "INNER JOIN tbl_organization o on o.id = c.org_id ".
               "WHERE c.org_id = ".Session::getSession('medorgid')." ORDER BY nr.id desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        return (count($result)>0)? $result[0]['recurring_number'] + 1: 1; 
    }
    
    static function getData() {
//        $txt = "SELECT nr.*, c.client_name FROM tbl_new_recurring nr INNER JOIN tbl_client c " .
//                "ON nr.client_id = c.id WHERE c.org_id = " . Session::getSession('orgid');
        
        $txt = "SELECT nr.*, c.client_name, ra.grand_total FROM tbl_new_recurring nr ".
                "INNER JOIN tbl_client c ON c.id = nr.client_id ".
                "INNER JOIN tbl_recurring_amount ra ON ra.new_recurring_id = nr.id ".
                "WHERE c.org_id = " . Session::getSession('medorgid');

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= ' && nr.recurring_number like "%' . $_POST['search'] . '%"';
                    break;
                case 2:
                    $txt .= ' && c.client_name like "%' . $_POST['search'] . '%"';
                    break;
                case 3:
                    if ($_POST['startdate'] != '' && $_POST['enddate'] != '') {
                        $txt .= ' && nr.last_date_sent >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && nr.last_date_sent <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"';
//                    echo $txt;break;
                    }
                    break;

                default:
                    break;
            }
        }

        if (isset($_POST['task'])) {
            if ($_POST['task'] == 'sort') {
                switch ($_POST['sortorder']) {
                    case 'recurring':
                        $sortby = 'nr.recurring_number';
                        break;
                    case 'date':
                        $sortby = 'nr.last_date_sent';
                        break;
                    case 'client':
                        $sortby = 'c.client_name';
                        break;

                    default:
                        break;
                }
                $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
            }
			else{
			 $txt .= ' ORDER BY id desc';
			}
        }
			else{
			 $txt .= ' ORDER BY id desc';
			}
        $sqlQuery = new SqlQuery($txt);

        return self::getTblRecurring($sqlQuery);
    }

    protected static function getTblRecurring($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $returns = array();
        
        foreach ($tab as $each) {
            $recurring = new stdClass();

            $recurring->id = $each['id'];
            $recurring->recurringNumber = $each['recurring_number'];
            $recurring->client_name = $each['client_name'];
            $recurring->frequency = $each['frequency'];
            $recurring->lastDateSent = $each['date_last_sent'];
            $recurring->total = $each['grand_total'];

            $returns[] = $recurring;
        }

        return $returns;
    }

    static function getTotal2($recurring_id) {
        $txt = "SELECT sum(il.net_amount) as total from tbl_invoice_lines il " .
                "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = il.new_invoice_id " .
                "WHERE ai.new_recurring_id = " . $recurring_id;
        $sqlQuery = new SqlQuery($txt);

        $result = QueryExecutor::execute($sqlQuery);
        return $result[0]['total'];
    }
	
	 static function getTotal($recurring_id) {
//        $txt = "SELECT sum(net_amount) as total from tbl_invoice_lines " .
//                "WHERE new_invoice_id = " . $invoiceid;
//        $sqlQuery = new SqlQuery($txt);
//        $result = QueryExecutor::execute($sqlQuery);
//        return $result[0]['total'];
        $recurringtasklines = TblRecurringLinesMySqlExtDAO::getTasks($recurring_id == '' ? 0 : $recurring_id);
        $subtotal = $discounttotal = $vattotal = $discounttotal =0;
        
        $newrecurring = DAOFactory::getTblNewRecurringDAO()->load($recurring_id);
        $client = DAOFactory::getTblClientDAO()->load($newrecurring->clientId);
        foreach ($recurringtasklines as $i => $recuringline) {

            $tbltask = DAOFactory::getTblTaskDAO()->load($recuringline->taskId);

            $discountamt = $recuringline->netAmount * $newrecurring->discount / 100;
            $discount = $recuringline->netAmount - $discountamt;
            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

            if ($client->vatInclusive == 'yes') {
                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                $subtotal += $recuringline->netAmount - $vat;
                $vattotal += $vat;
            } else {
                $subtotal += $recuringline->netAmount;
            }
        }
        $recurringitemlines = TblRecurringLinesMySqlExtDAO::getItem($recurring_id == '' ? 0 : $recurring_id);
        foreach ($recurringitemlines as $recuringline) {

            $tblitem = DAOFactory::getTblItemDAO()->load($recuringline->itemId);

            $discountamt = $recuringline->netAmount * $newrecurring->discount / 100;
            $discount = $recuringline->netAmount - $discountamt;
            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

            if ($client->vatInclusive == 'yes') {
                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                $vattotal += $vat;
                $subtotal += $recuringline->netAmount - $vat;
            } else {
                $subtotal += $recuringline->netAmount;
            }
        }
        
        return $subtotal + $vattotal - $discounttotal;
    }
	
	
	
	

    static function getRecurringInvoice($recurring_id) {
        $txt = "SELECT MAX(new_invoice_id) as id from tbl_all_invoice " .
                "WHERE new_recurring_id = " . $recurring_id;
        $sqlQuery = new SqlQuery($txt);

        $result = QueryExecutor::execute($sqlQuery);
//       return $txt;
//        if (count($result) > 0) {
        return $result[0]['id'];
//        }
    }

}

?>