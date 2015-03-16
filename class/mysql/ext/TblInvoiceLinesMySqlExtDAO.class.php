<?php

/**
 * Class that operate on table 'tbl_invoice_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblInvoiceLinesMySqlExtDAO extends TblInvoiceLinesMySqlDAO {

    static function getTasks($invoiceid) {
        $txt = "SELECT il.*, t.task_code, t.rate_per_hour, t.description as taskdesc from tbl_invoice_lines il " .
                "INNER JOIN tbl_task t ON t.id = il.task_id " .
                "WHERE il.new_invoice_id = " . $invoiceid;
        $sqlQuery = new SqlQuery($txt);
//        echo $txt;
        return self::getData($sqlQuery);
    }

    static function getItem($invoiceid) {
        $txt = "SELECT il.*,i.item_code,i.unit_cost as iunit_cost, i.description from tbl_invoice_lines il " .
                "INNER JOIN tbl_item i ON i.id = il.item_id " .
                "WHERE il.new_invoice_id = " . $invoiceid;
        $sqlQuery = new SqlQuery($txt);

        return self::getData($sqlQuery);
    }

    static function deleteInvoiceLine($data, $invoiceid) {
//        echo $data; exit;
        $txt = "DELETE FROM  tbl_invoice_lines WHERE id NOT IN(" . $data . ") " .
                "&& new_invoice_id = " . $invoiceid; // Session::getSession('invoiceid');
        $sqlQuery = new SqlQuery($txt);

//        echo $txt; exit;
        QueryExecutor::executeUpdate($sqlQuery);
    }

    protected static function getData($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $returns = array();

        foreach ($tab as $each) {
            $invoice = new stdClass();
            $invoice->id = $each['id'];
            $invoice->newInvoiceId = $each['new_invoice_id'];
            $invoice->itemId = $each['item_id'];
            $invoice->taskId = $each['task_id'];
//            $invoice->taxId = $each['tax_id'];
            $invoice->description = $each['description'];
            $invoice->rate = $each['rate'];
            $invoice->taskCode = $each['task_code'];
//            if (isset($each['task_id'])) {
//                $invoice->taskCode = $each['task_code'];
//
//                if ($each['rate'] > 0) {
//                    $invoice->rate = $each['rate'];
//                } elseif (isset($each['rate_per_hour'])) {
//                    $invoice->rate = $each['rate_per_hour'];
//                }
//                if ($each['description'] != null) {
//                    $invoice->description = $each['description'];
//                } else {
//                    $invoice->description = $each['taskdesc'];
//                }
//            } elseif (isset($each['item_id'])) {
//                $invoice->itemCode = $each['item_code'];
//                if ($each['item_description'] != null) {
//                    $invoice->itemDescription = $each['item_description'];
//                } else {
//                    $invoice->itemDescription = $each['description'];
//                }
//                if ($each['unit_cost'] > 0) {
//                    $invoice->unitCost = $each['unit_cost'];
//                } else {
//                    $invoice->unitCost = $each['iunit_cost'];
//                }
//            }
//            $invoice->rate = $each['rate'];
            $invoice->hour = $each['hour'];
            $invoice->quantity = $each['quantity'];
            $invoice->netAmount = $each['net_amount'];
            $invoice->Vat = $each['vat'];

//            $invoice->frequency = $each['frequency'];

            $returns[] = $invoice;
        }

        return $returns;
    }

    static function checkItem() {
        $txt = "SELECT * FROM tbl_invoice_lines WHERE item_id IN (" . implode(',', $_POST['itemids']) . ")";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    static function checkTask() {
        $txt = "SELECT * FROM tbl_invoice_lines "
                . "INNER JOIN tbl_new_invoice ni ON ni.id = new_invoice_id "
                . "INNER JOIN tbl_client c ON c.id = ni.client_id "
                . " WHERE task_id IN (" . implode(',', $_POST['taskids']) . ") "
                . " && c.org_id = ?";
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /*  static function getItem($invoiceid) {
      $txt = "SELECT il.*,i.item_code,i.unit_cost as iunit_cost, i.description from tbl_invoice_lines il " .
      "INNER JOIN tbl_item i ON i.id = il.item_id " .
      "WHERE il.new_invoice_id = " . $invoiceid;
      $sqlQuery = new SqlQuery($txt);

      return self::getData($sqlQuery);
      } */

    static function getInvoiceNo() {
        $txt = "SELECT ni.invoice_number, i.item_code, i.description, i.unit_cost, il.quantity, il.net_amount, 
			ni.date_created From tbl_new_invoice ni  " .
                "INNER JOIN tbl_invoice_lines il ON il.new_invoice_id = ni.id " .
                "INNER JOIN tbl_item i ON il.item_id= i.id " .
                "INNER JOIN tbl_all_invoice ai ON ni.id = ai.new_invoice_id " .
                "INNER JOIN tbl_invoice_amount ia ON ai.id = ia.all_invoice_id " .
                "WHERE ni.status = 'posted' && i.org_id = " . Session::getSession('medorgid'); /* .
          ' && ni.date_created >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && ni.date_created <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"' */

        if (isset($_POST['startdate'])) {
            $txt .= ' && ni.date_created >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && ni.date_created <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"';
            /*   $txt .=" && ni.date_created like '%" . $_POST['startdate'] . "%' && ni.date_created like '%" . $_POST['enddate'] . "%'"; */
        }


        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        /* print_r($result); exit; */
        return $result;
    }

    static function gettSalesItemReport($from, $to) {
        $txt = "SELECT ni.invoice_number, i.item_code, i.description, i.unit_cost, il.quantity, il.net_amount, 
			ni.date_created From tbl_new_invoice ni  " .
                "INNER JOIN tbl_invoice_lines il ON il.new_invoice_id = ni.id " .
                "INNER JOIN tbl_item i ON il.item_id= i.id " .
                "INNER JOIN tbl_all_invoice ai ON ni.id = ai.new_invoice_id " .
                "INNER JOIN tbl_invoice_amount ia ON ai.id = ia.all_invoice_id " .
                "WHERE ni.status = 'posted' && i.org_id = " . Session::getSession('medorgid'); /* .
          ' && ni.date_created >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && ni.date_created <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"' */

        if (isset($from) && isset($to)) {
            $txt .= ' && ni.date_created >= "' . date_format(date_create($from), 'Y-m-d') . '" && ni.date_created <= "' . date_format(date_create($to), 'Y-m-d') . '"';
            /*   $txt .=" && ni.date_created like '%" . $_POST['startdate'] . "%' && ni.date_created like '%" . $_POST['enddate'] . "%'"; */
        }


        $sqlQuery = new SqlQuery($txt);

        return self::getTblInvoiceLine($sqlQuery);
    }

    static function gettaskreport($orgId, $startdate, $enddate) {
//        $txt = "SELECT ni.invoice_number, t.task_code, t.rate_per_hour, t.description, il.hour, il.quantity, sum(il.net_amount) as net_amount , 
//			ni.date_created From tbl_new_invoice ni  " .
//                "INNER JOIN tbl_invoice_lines il ON il.new_invoice_id = ni.id " .
//                "INNER JOIN tbl_task t ON il.task_id= t.id " .
//                "INNER JOIN tbl_all_invoice ai ON ni.id = ai.new_invoice_id " .
//                "INNER JOIN tbl_invoice_amount ia ON ai.id = ia.all_invoice_id " .
//                "WHERE ni.status = 'posted' && t.org_id = " . Session::getSession('orgid')
//				
//				; 

        $txt = "select * from
        (select  case  when tbl_new_invoice.date_reversed like '0000-00-00'
             then tbl_new_invoice.date_issued 
             else tbl_new_invoice.date_reversed
             end as trans_date,
              tbl_new_invoice.invoice_number,
           tbl_task.task_code,
           tbl_invoice_lines.description,
           case  when  tbl_new_invoice.`status` like '%reversed%'
             then tbl_invoice_lines.hour * -1 
             else tbl_invoice_lines.hour
           end as hour,
           case  when  tbl_new_invoice.`status` like '%reversed%'
             then tbl_invoice_lines.rate * -1 
             else tbl_invoice_lines.rate
           end as rate_per_hour,
           case  when  tbl_new_invoice.`status` like '%reversed%'
             then tbl_invoice_lines.net_amount * -1 
             else tbl_invoice_lines.net_amount
           end as net_amount,
           tbl_new_invoice.`status`

        from tbl_new_invoice

        inner join tbl_invoice_lines on tbl_new_invoice.id = tbl_invoice_lines.new_invoice_id
        inner join tbl_task on tbl_invoice_lines.task_id = tbl_task.id
         
        where tbl_task.org_id =  " . $orgId . " and tbl_new_invoice.`status` in ('posted','reversed')
        )service";
        if (isset($startdate) && isset($enddate)) {
            $txt .= ' WHERE service.trans_date >= "' . date_format(date_create($startdate), 'Y-m-d') . '" && service.trans_date <= "' . date_format(date_create($enddate), 'Y-m-d') . '"';
            /*   $txt .=" && ni.date_created like '%" . $_POST['startdate'] . "%' && ni.date_created like '%" . $_POST['enddate'] . "%'"; */
        }
//        $txt .= " group by service.id";
//        $txt .= " ORDER BY service.invoice_number ";
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        /* print_r($result); exit; */
        return $result;
    }

    static function checktaskreport($orgId) {
//        $txt = "SELECT ni.invoice_number, t.task_code, t.rate_per_hour, t.description, il.hour, il.quantity, sum(il.net_amount) as net_amount , 
//			ni.date_created From tbl_new_invoice ni  " .
//                "INNER JOIN tbl_invoice_lines il ON il.new_invoice_id = ni.id " .
//                "INNER JOIN tbl_task t ON il.task_id= t.id " .
//                "INNER JOIN tbl_all_invoice ai ON ni.id = ai.new_invoice_id " .
//                "INNER JOIN tbl_invoice_amount ia ON ai.id = ia.all_invoice_id " .
//                "WHERE ni.status = 'posted' && t.org_id = " . Session::getSession('orgid')
//				
//				; 

        $txt = "select * from
        (select  case  when tbl_new_invoice.date_reversed like '0000-00-00'
             then tbl_new_invoice.date_issued 
             else tbl_new_invoice.date_reversed
             end as trans_date,
              tbl_new_invoice.invoice_number,
           tbl_task.task_code,
           tbl_invoice_lines.description,
           case  when  tbl_new_invoice.`status` like '%reversed%'
             then tbl_invoice_lines.hour * -1 
             else tbl_invoice_lines.hour
           end as hour,
           case  when  tbl_new_invoice.`status` like '%reversed%'
             then tbl_invoice_lines.rate * -1 
             else tbl_invoice_lines.rate
           end as rate_per_hour,
           case  when  tbl_new_invoice.`status` like '%reversed%'
             then tbl_invoice_lines.net_amount * -1 
             else tbl_invoice_lines.net_amount
           end as net_amount,
           tbl_new_invoice.`status`

        from tbl_new_invoice

        inner join tbl_invoice_lines on tbl_new_invoice.id = tbl_invoice_lines.new_invoice_id
        inner join tbl_task on tbl_invoice_lines.task_id = tbl_task.id
         
        where tbl_task.org_id =  " . $orgId . " and tbl_new_invoice.`status` in ('posted','reversed')
        )service";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        /* print_r($result); exit; */
        return $result;
    }

    static function getExportTaskreport($from, $to) {
        $txt = "SELECT ni.invoice_number, t.task_code, t.rate_per_hour, t.description, il.hour, il.quantity, il.net_amount, 
			ni.date_created From tbl_new_invoice ni  " .
                "INNER JOIN tbl_invoice_lines il ON il.new_invoice_id = ni.id " .
                "INNER JOIN tbl_task t ON il.task_id= t.id " .
                "INNER JOIN tbl_all_invoice ai ON ni.id = ai.new_invoice_id " .
                "INNER JOIN tbl_invoice_amount ia ON ai.id = ia.all_invoice_id " .
                "WHERE ni.status = 'posted' && t.org_id = " . Session::getSession('medorgid');


        if (isset($from) && isset($to)) {
            $txt .= ' && ni.date_created >= "' . date_format(date_create($from), 'Y-m-d') . '" && ni.date_created <= "' . date_format(date_create($to), 'Y-m-d') . '"';
            /*   $txt .=" && ni.date_created like '%" . $_POST['startdate'] . "%' && ni.date_created like '%" . $_POST['enddate'] . "%'"; */
        }

        $txt .= " ORDER BY ni.invoice_number ";

        $sqlQuery = new SqlQuery($txt);

        return self::getTblSalesTask($sqlQuery);
    }

    protected static function getTblInvoiceLine($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblInvoiceLine();

            $sagot->dateCreated = $each['date_created'];
            $sagot->invoiceNumber = $each['invoice_number'];
            $sagot->itemCode = $each['item_code'];
            $sagot->description = $each['description'];
            $sagot->quantity = $each['quantity'];
            $sagot->unitCost = $each['unit_cost'];
            $sagot->netAmount = $each['net_amount'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    protected static function getTblSalesTask($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblInvoiceLine();

            $sagot->dateCreated = $each['date_created'];
            $sagot->invoiceNumber = $each['invoice_number'];
            $sagot->taskCode = $each['task_code'];
            $sagot->description = $each['description'];
            $sagot->hour = $each['hour'];
            $sagot->ratePerHour = $each['rate_per_hour'];
            $sagot->netAmount = $each['net_amount'];

            $returns[] = $sagot;
        }

        return $returns;
    }

}

?>