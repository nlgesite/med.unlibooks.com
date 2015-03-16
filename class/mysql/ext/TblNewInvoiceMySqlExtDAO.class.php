<?php

/**
 * Class that operate on table 'tbl_new_invoice'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblNewInvoiceMySqlExtDAO extends TblNewInvoiceMySqlDAO {

    static function getHmoOutStanding($orgId, $startdate,$enddate) {
//        $txt = "
//			SELECT
//				ni.id,
//				ia.all_invoice_id,
//				ni.invoice_number,
//				hmo.hmo_name,
//				client.client_name,
//				'posted' status,
//				ni.date_issued,
//				ni.date_reversed,
//				IF(ac.total_balance IS NULL ,  ia.grand_total, SUM(ac.total_balance)) grand_total
//				
//			FROM
//				tbl_new_invoice ni
//			INNER JOIN
//				tbl_hmo hmo ON ni.hmo_id = hmo.id
//			INNER JOIN
//				tbl_all_invoice ai ON ni.id = ai.new_invoice_id
//			INNER JOIN
//				tbl_client client ON ni.client_id = client.id
//			INNER JOIN
//				tbl_invoice_amount ia ON ai.id = ia.all_invoice_id
//			LEFT JOIN
//				tbl_all_collection ac ON ia.id = ac.invoiced_amount_id
//			WHERE
//				ni.`status` IN ('posted','reversed') AND
//				hmo.org_id = ".$orgId."
//			
//			";
//
//        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
//            $txt .= ' AND ( ni.date_issued>="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
//                    ' && ni.date_issued <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '")'.
//					'AND ni.date_issued != ni.date_reversed';
//        }
//        $txt .= '
//			GROUP BY ni.id,ia.id';
        if (isset($startdate) && isset($enddate)) {
            $txt = "
				select rec.id, rec.date_issued, rec.trans_date, rec.invoice_number, rec.hmo_name, rec.client_name, rec.`status`, sum(rec.grand_total) as grand_total
                from  (  select tbl_new_invoice.id,tbl_new_invoice.date_issued, case when tbl_new_invoice.date_reversed like '0000-00-00'
                            then tbl_new_invoice.date_issued 
                            else tbl_new_invoice.date_reversed
                      end as trans_date,
                    tbl_new_invoice.invoice_number,
                    tbl_hmo.hmo_name,
                    tbl_client.client_name,
                    tbl_new_invoice.`status`,
                    tbl_invoice_amount.grand_total
                 from tbl_new_invoice

                 left join tbl_hmo on tbl_new_invoice.hmo_id = tbl_hmo.id and tbl_new_invoice.`status` in ('posted','reversed')
                 left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
                 left join tbl_all_invoice on tbl_new_invoice.id = tbl_all_invoice.new_invoice_id
                 left join tbl_invoice_amount on tbl_all_invoice.id = tbl_invoice_amount.all_invoice_id
                 where tbl_hmo.org_id = " . $orgId . " 
                     
                 union all

                 select  d.id, d.date_issued, d.trans_date, 
                    d.invoice_number,
                    d.hmo_name,
                    d.client_name,
                    d.`status`,
                    case when d.`Status` like '%posted%' 
                      then sum(d.amount*-1) 
                      else sum(d.amount*-1) 
                      end as amount
                 from ( select tbl_new_invoice.id, tbl_new_invoice.date_issued, case when tbl_enter_payment.date_reversed like '0000-00-00'
                               then tbl_enter_payment.date_received 
                              else tbl_enter_payment.date_reversed
                        end as trans_date,
                        tbl_new_invoice.invoice_number,
                        tbl_hmo.hmo_name,
                        tbl_client.client_name,
                        tbl_enter_payment.`status`,
                                (tbl_all_collection.applied_amount + tbl_all_collection.wht_amount) as amount
                    from tbl_enter_payment
                    left join tbl_hmo on tbl_enter_payment.hmo_id = tbl_hmo.id
                    left join tbl_all_collection on tbl_enter_payment.id = tbl_all_collection.enter_payment_id
                    left join tbl_invoice_amount on tbl_all_collection.invoiced_amount_id = tbl_invoice_amount.id
                          left join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
                          left join  tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
                          left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
                          where tbl_hmo.org_id = " . $orgId . " 
                   )d
                 group by d.trans_date, d.invoice_number
                ) rec
                where rec.trans_date >= '" . date_format(date_create($startdate), 'Y-m-d') . "' && " .
                    "rec.trans_date <= '" . date_format(date_create($enddate), 'Y-m-d') . "'  
               group by rec.trans_date, rec.invoice_number";
            $sqlQuery = new SqlQuery($txt); //echo $txt;
            return self::getTblNewInvoice($sqlQuery);
        }
    }


    static function checkHmoOutStanding($orgId) {

		$txt = "
			SELECT * FROM (
		select rec.id, rec.date_issued, rec.trans_date, rec.invoice_number, rec.hmo_id, rec.hmo_name, rec.client_name, rec.`status`, sum(rec.grand_total) as grand_total
			from  (  select tbl_new_invoice.id,tbl_new_invoice.date_issued, case when tbl_new_invoice.date_reversed like '0000-00-00'
						then tbl_new_invoice.date_issued 
						else tbl_new_invoice.date_reversed
				  end as trans_date,
				tbl_new_invoice.invoice_number,
				tbl_hmo.hmo_name,
				tbl_client.client_name,
				tbl_new_invoice.`status`,
				tbl_new_invoice.hmo_id,
				tbl_invoice_amount.grand_total
			 from tbl_new_invoice

			 left join tbl_hmo on tbl_new_invoice.hmo_id = tbl_hmo.id and tbl_new_invoice.`status` in ('posted','reversed')
			 left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
			 left join tbl_all_invoice on tbl_new_invoice.id = tbl_all_invoice.new_invoice_id
			 left join tbl_invoice_amount on tbl_all_invoice.id = tbl_invoice_amount.all_invoice_id
			 where tbl_hmo.org_id = " . $orgId . " 
				 
			 union all

			 select  d.id, d.date_issued, d.trans_date, 
				d.invoice_number,
				d.hmo_name,
				d.client_name,
				d.`status`,
				d.hmo_id,
				case when d.`Status` like '%posted%' 
				  then sum(d.amount*-1) 
				  else sum(d.amount*-1) 
				  end as amount
			 from ( select tbl_new_invoice.id, tbl_new_invoice.date_issued, case when tbl_enter_payment.date_reversed like '0000-00-00'
						   then tbl_enter_payment.date_received 
						  else tbl_enter_payment.date_reversed
					end as trans_date,
					tbl_new_invoice.invoice_number,
					tbl_hmo.hmo_name,
					tbl_client.client_name,
					tbl_enter_payment.`status`,
					tbl_enter_payment.hmo_id,
							(tbl_all_collection.applied_amount + tbl_all_collection.wht_amount) as amount
				from tbl_enter_payment
				left join tbl_hmo on tbl_enter_payment.hmo_id = tbl_hmo.id
				left join tbl_all_collection on tbl_enter_payment.id = tbl_all_collection.enter_payment_id
				left join tbl_invoice_amount on tbl_all_collection.invoiced_amount_id = tbl_invoice_amount.id
					  left join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
					  left join  tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
					  left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
					  where tbl_hmo.org_id = " . $orgId . " 
			   )d
			 group by d.trans_date, d.invoice_number
			)rec
			
		   group by rec.hmo_id 
		   )rec2
		   WHERE rec2.grand_total != 0 
		   ";
		$sqlQuery = new SqlQuery($txt); //echo $txt;
		return self::getTblNewInvoice($sqlQuery);
    }

    static function getReversedInvoiceBalance($orgId) {
        $txt = "
			SELECT
				ni.id,
				ia.all_invoice_id,
				ni.invoice_number,
				hmo.hmo_name,
				client.client_name,
				ni.`status`,
				ni.date_issued,
				ni.date_reversed,
				IF(ac.total_balance IS NULL ,  ia.grand_total, SUM(ac.total_balance)) grand_total
				
			FROM
				tbl_new_invoice ni
			INNER JOIN
				tbl_hmo hmo ON ni.hmo_id = hmo.id
			INNER JOIN
				tbl_all_invoice ai ON ni.id = ai.new_invoice_id
			INNER JOIN
				tbl_client client ON ni.client_id = client.id
			INNER JOIN
				tbl_invoice_amount ia ON ai.id = ia.all_invoice_id
			LEFT JOIN
				tbl_all_collection ac ON ia.id = ac.invoiced_amount_id
			WHERE
				ni.`status` LIKE 'reversed' AND
				hmo.org_id = " . $orgId . "
			
			";

        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $txt .= ' AND ( ni.date_reversed >="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
                    ' && ni.date_reversed <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '")' .
                    'AND ni.date_issued != ni.date_reversed';
        }
        $txt .= '
			GROUP BY ni.id,ia.id';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewInvoice($sqlQuery);
    }

    static function getHmoReport_outstanding($orgId) {
//        $txt = "
//			SELECT 
//				 new_invoice.id,
//				 invoice_amount.all_invoice_id,
//				 new_invoice.date_issued,
//				 new_invoice.invoice_number,
//				 hmo.hmo_name,
//				 hmo.org_id,
//				 client.client_name,
//				 new_invoice.status,
//				 /*
//				 invoice_amount.grand_total
//				*/
//				IF(col.total_balance IS NULL ,  invoice_amount.grand_total, SUM(col.total_balance)) grand_total
//				
//				
//			FROM tbl_new_invoice new_invoice
//
//			INNER JOIN
//				 tbl_hmo hmo
//				 ON hmo.id = new_invoice.hmo_id
//
//			INNER JOIN
//				 tbl_client client
//				 ON client.id = new_invoice.client_id
//				 
//			INNER JOIN
//				 tbl_all_invoice all_invoice
//				 ON all_invoice.new_invoice_id = new_invoice.id
//				 
//			INNER JOIN
//				 tbl_invoice_amount invoice_amount
//				  ON invoice_amount.all_invoice_id = all_invoice.id
//				  
//				  
//			LEFT JOIN tbl_all_collection col 
//				  ON invoice_amount.id = col.invoiced_amount_id
//				  
//			WHERE new_invoice.status LIKE 'posted'
//
//			AND hmo.org_id = " . $orgId . "
//			
//			";

//        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
//            $txt .= ' AND ( new_invoice.date_created >="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
//                    ' && new_invoice.date_created <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )';
//        }
//        $txt .= '
//			GROUP BY hmo.id';
if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $txt = "select rec.id, rec.date_issued, rec.trans_date, rec.invoice_number, rec.hmo_name, rec.client_name, rec.`status`, sum(rec.grand_total) as grand_total
                from  (  select tbl_new_invoice.id,tbl_new_invoice.date_issued, case when tbl_new_invoice.date_reversed like '0000-00-00'
                            then tbl_new_invoice.date_issued 
                            else tbl_new_invoice.date_reversed
                      end as trans_date,
                    tbl_new_invoice.invoice_number,
                    tbl_hmo.hmo_name,
                    tbl_client.client_name,
                    tbl_new_invoice.`status`,
                    tbl_invoice_amount.grand_total
                 from tbl_new_invoice

                 left join tbl_hmo on tbl_new_invoice.hmo_id = tbl_hmo.id and tbl_new_invoice.`status` in ('posted','reversed')
                 left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
                 left join tbl_all_invoice on tbl_new_invoice.id = tbl_all_invoice.new_invoice_id
                 left join tbl_invoice_amount on tbl_all_invoice.id = tbl_invoice_amount.all_invoice_id
                 where tbl_hmo.org_id = " . $orgId . " 
                     
                 union all

                 select  d.id, d.date_issued, d.trans_date, 
                    d.invoice_number,
                    d.hmo_name,
                    d.client_name,
                    d.`status`,
                    case when d.`Status` like '%posted%' 
                      then sum(d.amount*-1) 
                      else sum(d.amount*-1) 
                      end as amount
                 from ( select tbl_new_invoice.id, tbl_new_invoice.date_issued, case when tbl_enter_payment.date_reversed like '0000-00-00'
                               then tbl_enter_payment.date_received 
                              else tbl_enter_payment.date_reversed
                        end as trans_date,
                        tbl_new_invoice.invoice_number,
                        tbl_hmo.hmo_name,
                        tbl_client.client_name,
                        tbl_enter_payment.`status`,
                                (tbl_all_collection.applied_amount + tbl_all_collection.wht_amount) as amount
                    from tbl_enter_payment
                    left join tbl_hmo on tbl_enter_payment.hmo_id = tbl_hmo.id
                    left join tbl_all_collection on tbl_enter_payment.id = tbl_all_collection.enter_payment_id
                    left join tbl_invoice_amount on tbl_all_collection.invoiced_amount_id = tbl_invoice_amount.id
                          left join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
                          left join  tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
                          left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
                          where tbl_hmo.org_id = " . $orgId . " 
                   )d
                 group by d.trans_date, d.invoice_number
                ) rec
                where rec.trans_date >= '" . date_format(date_create($_POST['startdate']), 'Y-m-d') . "' && " .
                    "rec.trans_date <= '" . date_format(date_create($_POST['enddate']), 'Y-m-d') . "'  
               group by rec.trans_date, rec.invoice_number";
            $sqlQuery = new SqlQuery($txt); //echo $txt;
            return self::getTblNewInvoice($sqlQuery);
        }
//        $sqlQuery = new SqlQuery($txt);
//
//        return self::getTblNewInvoice($sqlQuery);
    }

    static function export_getHmoOutStanding($orgId, $from, $to) {
        $txt = "
			SELECT
				ni.id,
				ia.all_invoice_id,
				ni.invoice_number,
				hmo.hmo_name,
				client.client_name,
				'posted' status,
				ni.date_issued,
				ni.date_reversed,
				IF(ac.total_balance IS NULL ,  ia.grand_total, SUM(ac.total_balance)) grand_total
				
			FROM
				tbl_new_invoice ni
			INNER JOIN
				tbl_hmo hmo ON ni.hmo_id = hmo.id
			INNER JOIN
				tbl_all_invoice ai ON ni.id = ai.new_invoice_id
			INNER JOIN
				tbl_client client ON ni.client_id = client.id
			INNER JOIN
				tbl_invoice_amount ia ON ai.id = ia.all_invoice_id
			LEFT JOIN
				tbl_all_collection ac ON ia.id = ac.invoiced_amount_id
			WHERE
				ni.`status` IN ('posted','reversed') AND
				hmo.org_id = " . $orgId . "
			";

        if (isset($from) && isset($to)) {
            $txt .= ' AND ( ni.date_issued>="' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && ni.date_issued <= "' . date_format(date_create($to), 'Y-m-d') . '")' .
                    'AND ni.date_issued != ni.date_reversed';
        }
        $txt .=
                ' GROUP BY ni.id,ia.id ';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewInvoice($sqlQuery);
    }

    static function export_getHmoOutStanding_reversed($orgId, $from, $to) {
        $txt = "
			SELECT
				ni.id,
				ia.all_invoice_id,
				ni.invoice_number,
				hmo.hmo_name,
				client.client_name,
				ni.`status`,
				ni.date_issued,
				ni.date_reversed,
				IF(ac.total_balance IS NULL ,  ia.grand_total, SUM(ac.total_balance)) grand_total
				
			FROM
				tbl_new_invoice ni
			INNER JOIN
				tbl_hmo hmo ON ni.hmo_id = hmo.id
			INNER JOIN
				tbl_all_invoice ai ON ni.id = ai.new_invoice_id
			INNER JOIN
				tbl_client client ON ni.client_id = client.id
			INNER JOIN
				tbl_invoice_amount ia ON ai.id = ia.all_invoice_id
			LEFT JOIN
				tbl_all_collection ac ON ia.id = ac.invoiced_amount_id
			WHERE
				ni.`status` LIKE 'reversed' AND
				hmo.org_id = " . $orgId . "
			";

        if (isset($from) && isset($to)) {
            $txt .= ' AND ( ni.date_reversed >="' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && ni.date_reversed <= "' . date_format(date_create($to), 'Y-m-d') . '")' .
                    'AND ni.date_issued != ni.date_reversed';
        }
        $txt .=
                ' GROUP BY ni.id,ia.id ';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewInvoice($sqlQuery);
    }

    protected static function getTblNewInvoice($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();
//        print_r($answer);
        foreach ($answer as $each) {
            $sagot = new TblNewInvoice();
            $sagot->id = $each['id'];
            $sagot->dateIssued = $each['date_issued'];

            if (isset($each['trans_date'])) {
                $sagot->transDate = $each['trans_date'];
            }
            $sagot->invoiceNumber = $each['invoice_number'];
            $sagot->hmoName = $each['hmo_name'];
            $sagot->clientName = $each['client_name'];
            $sagot->status = $each['status'];
            $sagot->grandTotal = $each['grand_total'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    static function getMaxNumId() {
        $txt = "SELECT ni.invoice_number FROM tbl_new_invoice ni " .
                "INNER JOIN tbl_client c ON c.id = ni.client_id " .
                "INNER JOIN tbl_organization o on o.id = c.org_id " .
                "WHERE c.org_id = " . Session::getSession('medorgid') . " ORDER BY ni.invoice_number desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            $result = explode('-', $result[0]['invoice_number']);
            return (int) $result[1] + 1;
        } else {
            return 1;
        }
        //return (count($result) > 0) ? $result[0]['invoice_number'] + 1 : 1;
    }

    static function getData($limit, $limitstart = 0) {
//        $txt = "SELECT ni.*, c.client_name, c.address," .
//                "(SELECT IFNULL(ac.total_balance,0) FROM tbl_all_collection ac ".
//                "INNER JOIN tbl_invoice_amount ia ON ia.id = ac.invoiced_amount_id ".
//                "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id ".
//                "WHERE ai.new_invoice_id=ni.id  ORDER BY ac.id DESC LIMIT 1) as balance " .
//                "FROM tbl_new_invoice ni INNER JOIN tbl_client c " .
//                "ON ni.client_id = c.id WHERE c.org_id = " . Session::getSession('orgid');

        $txt = "SELECT ni.*, c.client_name, c.address,ia.grand_total,mop.description as mopdesc," .
                "if((SELECT ac.total_balance FROM tbl_all_collection ac " .
                "INNER JOIN tbl_invoice_amount ia ON ia.id = ac.invoiced_amount_id " .
                "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id " .
                "INNER JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id " .
                "WHERE ai.new_invoice_id=ni.id && status <>'reversed' ORDER BY ac.id DESC LIMIT 1)is null && ni.hmo_id<>0, " .
                "ia.grand_total, (SELECT ac.total_balance FROM tbl_all_collection ac " .
                "INNER JOIN tbl_invoice_amount ia ON ia.id = ac.invoiced_amount_id " .
                "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id " .
                "WHERE ai.new_invoice_id=ni.id  ORDER BY ac.id DESC LIMIT 1)) as balance " .
                "FROM tbl_new_invoice ni INNER JOIN tbl_client c " .
                "ON ni.client_id = c.id " .
                "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = ni.id " .
                "INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id = ai.id " .
                "INNER JOIN tbl_mop mop ON mop.id = ni.mop_id " .
//                "LEFT JOIN tbl_new_recurring nr ON nr.id=ai.new_recurring_id " .
                "WHERE c.org_id = " . Session::getSession('medorgid') . " " .
                "&& ni.id = "
                . "(SELECT MAX(id) FROM tbl_new_invoice where invoice_number = ni.invoice_number && client_id = c.id)";

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= ' && ni.invoice_number like "%' . $_POST['search'] . '%"';
                    break;
                case 2:
                    $txt .= ' && c.client_name like "%' . $_POST['search'] . '%"';
                    break;
                case 3:
                    if ($_POST['startdate'] != '' && $_POST['enddate'] != '') {
                        $txt .= ' && ni.date_issued >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && ni.date_issued <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"';
//                    echo $txt;break;
                    }
                case 4:
                    $txt .= ' && ni.status like "%' . $_POST['search'] . '%"';
                    break;
                case 5:
                    $txt .= ' && mop.description like "%' . $_POST['search'] . '%"';
                    break;
                default:
                    break;
            }
        }

//        $txt .= ' GROUP BY ni.invoice_number ';
//        $sortby = '';
        if (isset($_POST['task'])) {
            if ($_POST['task'] == 'sort') {
                switch ($_POST['sortorder']) {
                    case 'invoice':
                        $sortby = 'ni.invoice_number';
                        break;
                    case 'date':
                        $sortby = 'ni.date_issued';
                        break;
                    case 'client':
                        $sortby = 'c.client_name';
                        break;

                    default:
                        break;
                } //echo $_POST['sortdirection'];
                $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
            } else {
                $txt .= ' ORDER BY ni.invoice_number desc';
            }
        } else {
            $txt .= ' ORDER BY ni.invoice_number desc ';
        }


        if (is_numeric($limitstart) && $limit > 0) {
            $txt .= ' limit ' . $limitstart;
        }

        if ($limitstart == '' && $limit == 0 && $_GET['ipp'] != 'All') {
            $txt .= ' limit 0, 25';
        } elseif ($limit != "All" && is_numeric($limit)) {
            $txt .= ',' . $limit;
        }
//	echo $txt;	
        $sqlQuery = new SqlQuery($txt);

        return self::getTblInvoice($sqlQuery);
    }

    protected static function getTblInvoice($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;
//        print_r($tab);
        $returns = array();

        foreach ($tab as $each) {
            $invoice = new stdClass();
            $invoice->id = $each['id'];
            $invoice->invoiceNumber = $each['invoice_number'];
            $invoice->dateIssued = $each['date_issued'];
            $invoice->dueDate = $each['due_date'];
//            $invoice->pOSO = $each['PO_SO'];
            $invoice->discount = $each['discount'];
            $invoice->particular = $each['particular'];
            $invoice->remarks = $each['remarks'];
            $invoice->clientName = $each['client_name'];
            $invoice->clientId = $each['client_id'];
            $invoice->address = $each['address'];
            $invoice->status = $each['status'];
//            $invoice->currencyId = $each['currency_id'];
            //$invoice->recurringNumber = $each['recurring_number'];
//            $invoice->recid = $each['recid'];
            $invoice->hmoId = $each['hmo_id'];
            $invoice->mopId = $each['mop_id'];
            
            $invoice->dateReversed = $each['date_reversed'];
            if (isset($each['grand_total'])) {
                $invoice->total = $each['grand_total'];
            }
            
            if(isset($each['mopdesc'])){
                $invoice->mopdescription = $each['mopdesc'];
            }

//            $invoice->vatInclusive = $each['vat_inclusive'];
            if (isset($each['balance'])) {
                $invoice->balance = $each['balance'];
            } else {
                $invoice->balance = 0;
            }
//           if(isset($each['balance'])) {
//            $invoice->balance = isset($each['balance']) ? $each['balance'] : $each['grand_total']; //($each['balance'] != null)? $each['balance']:0;
            // echo $each['balance']; exit;
//           }
//            if (array_key_exists('recurring_number', $each)) {
//                $invoice->recurringNumber = $each['recurring_number'];
//                $invoice->recid = $each['recid'];
//            }
//            $invoice->frequency = $each['frequency'];

            $returns[] = $invoice;
        }
//        print_r($returns); exit;
        return $returns;
    }

    static function getRowInvoice($id) {
        $sql = "SELECT ni.*, c.client_name,c.address  FROM tbl_new_invoice ni INNER JOIN tbl_client c " .
                "ON ni.client_id = c.id " .
                "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = ni.id " .
                "WHERE c.org_id = " . Session::getSession('medorgid') . " " .
                "&& ni.id= ?";

        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($id);
        $result = self::getTblInvoice($sqlQuery);
        return $result[0];
    }

    static function getTotal($invoiceid) {
//        $txt = "SELECT sum(net_amount) as total from tbl_invoice_lines " .
//                "WHERE new_invoice_id = " . $invoiceid;
//        $sqlQuery = new SqlQuery($txt);
//        $result = QueryExecutor::execute($sqlQuery);
//        return $result[0]['total'];
        $invoicetasklines = TblInvoiceLinesMySqlExtDAO::getTasks($invoiceid == '' ? 0 : $invoiceid);
        $subtotal = $discounttotal = $vattotal = $discounttotal = 0;

        $newinvoice = DAOFactory::getTblNewInvoiceDAO()->load($invoiceid);
        $client = DAOFactory::getTblClientDAO()->load($newinvoice->clientId);
        foreach ($invoicetasklines as $i => $invoiceline) {

            $tbltask = DAOFactory::getTblTaskDAO()->load($invoiceline->taskId);

            $discountamt = $invoiceline->netAmount * $newinvoice->discount / 100;
            $discount = $invoiceline->netAmount - $discountamt;
            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

            if ($client->vatInclusive == 'yes') {
                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                $subtotal += $invoiceline->netAmount - $vat;
                $vattotal += $vat;
            } else {
                $subtotal += $invoiceline->netAmount;
            }
        }
        $invoiceitemlines = TblInvoiceLinesMySqlExtDAO::getItem($invoiceid == '' ? 0 : $invoiceid);
        foreach ($invoiceitemlines as $invoiceline) {

            $tblitem = DAOFactory::getTblItemDAO()->load($invoiceline->itemId);

            $discountamt = $invoiceline->netAmount * $newinvoice->discount / 100;
            $discount = $invoiceline->netAmount - $discountamt;
            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

            if ($client->vatInclusive == 'yes') {
                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                $vattotal += $vat;
                $subtotal += $invoiceline->netAmount - $vat;
            } else {
                $subtotal += $invoiceline->netAmount;
            }
        }

        return $subtotal + $vattotal - $discounttotal;
    }

    static function checkClientTransaction() {
        $txt = "SELECT * FROM tbl_new_invoice WHERE client_id IN (" .
                implode(',', $_POST['clientid']) . ")";

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    static function checkHmoTransaction() {
        $txt = "SELECT * FROM tbl_new_invoice WHERE hmo_id IN (" .
                implode(',', $_POST['hmoid']) . ")";

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    static function getAllServiceInvoice($orgId, $month, $year) {
        $txt = '
			SELECT
				c.date_issued,
				sum(a.grand_total) as p_cash
			FROM
				 tbl_invoice_amount a
			INNER JOIN
				 tbl_all_invoice b on a.all_invoice_id = b.id
			INNER JOIN
				 tbl_new_invoice c on b.new_invoice_id = c.id 
			INNER JOIN
				 tbl_client d on c.client_id = d.id 
			WHERE
				year(c.date_issued) = "' . $year . '" AND 
				c.`status` = "posted" AND
				d.org_id = "' . $orgId . '"
			
			GROUP BY
				 month(c.date_issued)
				';
			$txt = "
			SELECT * FROM (
				select 
					rec.id, 
					rec.trans_date date_issued,
					rec.invoice_number,
					rec.hmo_name,
					rec.client_name,
					rec.`status`,
					sum(rec.grand_total) as p_cash
                from  (  select tbl_new_invoice.id,tbl_new_invoice.date_issued, case when tbl_new_invoice.date_reversed like '0000-00-00'
                            then tbl_new_invoice.date_issued 
                            else tbl_new_invoice.date_reversed
                      end as trans_date,
                    tbl_new_invoice.invoice_number,
                    tbl_hmo.hmo_name,
                    tbl_client.client_name,
                    tbl_new_invoice.`status`,
                    tbl_invoice_amount.grand_total
                 from tbl_new_invoice

                 left join tbl_hmo on tbl_new_invoice.hmo_id = tbl_hmo.id and tbl_new_invoice.`status` in ('posted','reversed')
                 left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
                 left join tbl_all_invoice on tbl_new_invoice.id = tbl_all_invoice.new_invoice_id
                 left join tbl_invoice_amount on tbl_all_invoice.id = tbl_invoice_amount.all_invoice_id
                 where tbl_hmo.org_id = " . $orgId . " 
                     
                 union all

                 select  d.id, d.date_issued, d.trans_date, 
                    d.invoice_number,
                    d.hmo_name,
                    d.client_name,
                    d.`status`,
                    case when d.`Status` like '%posted%' 
                      then sum(d.amount*-1) 
                      else sum(d.amount*-1) 
                      end as amount
                 from ( select tbl_new_invoice.id, tbl_new_invoice.date_issued, case when tbl_enter_payment.date_reversed like '0000-00-00'
                               then tbl_enter_payment.date_received 
                              else tbl_enter_payment.date_reversed
                        end as trans_date,
                        tbl_new_invoice.invoice_number,
                        tbl_hmo.hmo_name,
                        tbl_client.client_name,
                        tbl_enter_payment.`status`,
                                (tbl_all_collection.applied_amount + tbl_all_collection.wht_amount) as amount
                    from tbl_enter_payment
                    left join tbl_hmo on tbl_enter_payment.hmo_id = tbl_hmo.id
                    left join tbl_all_collection on tbl_enter_payment.id = tbl_all_collection.enter_payment_id
                    left join tbl_invoice_amount on tbl_all_collection.invoiced_amount_id = tbl_invoice_amount.id
                          left join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
                          left join  tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
                          left join tbl_client on tbl_new_invoice.client_id = tbl_client.id
                          where tbl_hmo.org_id = " . $orgId . " 
                   )d
                 group by d.trans_date, d.invoice_number
                ) rec
                where 
					year(rec.trans_date) = '".$year."'
               
			GROUP BY
				 month(rec.trans_date)
		)inv ORDER BY inv.p_cash DESC ";
        $sqlQuery = new SqlQuery($txt);

        return self::getInvoicePosted($sqlQuery);
    }

    protected static function getInvoicePosted($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (empty($tab)) {
            return false;
        }

        $array = array();

        foreach ($tab as $each) {
            $invoiceAmount = new TblNewInvoice();

            $invoiceAmount->dateIssued = $each['date_issued'];
            $invoiceAmount->pCash = $each['p_cash'];

            $array[] = $invoiceAmount;
        }

        return $array;
    }

    static function getCoaCodeId($coacode) {
        $txt = 'SELECT id FROM tbl_coa WHERE account_num=? && org_id =? ';

        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->set($coacode);
        $sqlQuery->setNumber(Session::getSession('medorgid'));

        $result = QueryExecutor::execute($sqlQuery);

        if($result){
            return $result[0]['id'];
        }
    }
    
    static function gettotalInvoicePostedYesterday(){
        $txt= "SELECT count(*) as total FROM tbl_new_invoice ni "
              . "INNER JOIN tbl_client c ON c.id = ni.client_id "
              . "WHERE (SELECT status from tbl_new_invoice where invoice_number = ni.invoice_number && client_id=c.id ORDER BY id desc LIMIT 0,1) = 'posted' "
              . "&& ni.date_modified = '%".date('Y-m-d', strtotime('-1 days')) ."%' "
              . "&& c.org_id = " .Session::getSession('medorgid');
        
        $sqlQuery = new SqlQuery($txt);
        
        $result = QueryExecutor::execute($sqlQuery);
        
        return $result[0]['total'];
                
    }
    
    static function getOpenInvoice(){
        $txt = "SELECT COUNT(*) as total FROM tbl_new_invoice ni ".
               "INNER JOIN tbl_client c ON c.id = ni.client_id WHERE ".
               "c.org_id =? && ni.status='open'";
        
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));
        
        $result = QueryExecutor::execute($sqlQuery);
        
        echo $result[0]['total'];
    }

    static function getTotalAmountReceivable(){
        $orgid = Session::getSession('medorgid'); 
//        $txt = "SELECT sum(ia.grand_total) as total FROM tbl_invoice_amount ia "
//                . "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id "
//                . "INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id "
//                . "INNER JOIN tbl_client c ON c.id = ni.client_id "
//                . "WHERE "
//                . "(SELECT status from tbl_new_invoice where invoice_number = ni.invoice_number && client_id=c.id ORDER BY id desc LIMIT 0,1) = 'posted' "
//                . "&&"
//                . " ("
//                . "(SELECT ep.status FROM tbl_enter_payment ep "
//                . "INNER JOIN tbl_all_collection ac ON ac.enter_payment_id = ep.id "
//                . "INNER JOIN tbl_hmo h ON h.id = ep.hmo_id "
//                . "WHERE ac.invoiced_amount_id = ia.id && h.org_id=".$orgid." ORDER BY ep.id desc LIMIT 0,1) <>'posted' "
//                . "|| "
//                . "ia.id NOT IN(SELECT invoiced_amount_id FROM tbl_all_collection)"
//                . ")"
//                . "&& c.org_id = " .$orgid . " && ni.date_issued  = '".date('Y-m-d', strtotime('-1 days')) ."'";
        
        $txt = "SELECT sum(ia.grand_total) as total FROM tbl_invoice_amount ia "
                . "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id "
                . "INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id "
                . "INNER JOIN tbl_client c ON c.id = ni.client_id "
                . "WHERE "
                . "(SELECT status from tbl_new_invoice where invoice_number = ni.invoice_number && client_id=c.id ORDER BY id desc LIMIT 0,1) = 'posted' "
                . "&& c.org_id = " .$orgid . " && ni.hmo_id<>0 && ni.date_issued  = '".date('Y-m-d', strtotime('-1 days')) ."'";
                
        $sqlQuery = new SqlQuery($txt);
//        echo $txt;
        $result = QueryExecutor::execute($sqlQuery);     //   print_r($result);
        return $result[0]['total'];
    }
	
	static function getSummaryBilling($orgId,$from,$to){
	
		$txt = "
			
			select bill.trans_date, 
					bill.billing_no, 
					bill.client_name,
					bill.description,
					case when bill.sta = 'reversed' 
							then ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))*-1
							else ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))
							end as tr,
					case when bill.sta = 'reversed' 
							then ((sum(bill.prof) - sum(bill.disc)) * 0.12)*-1
							else ((sum(bill.prof) - sum(bill.disc)) * 0.12)
							end as output_vat,
					case when bill.sta = 'reversed' 
							then (sum(bill.prof))*-1
							else (sum(bill.prof))
							end as prof,
				   case when bill.sta = 'reversed'
							then (sum(bill.disc))*-1 
							else (sum(bill.disc))
							end as disc 				
			from(	select case when newcash.date_reversed like '0000-00-00' 
								then newcash.date_issued
								else newcash.date_reversed 
							end as trans_date,
							newcash.mop_id,
						   newcash.`status` as sta,	
						   newcash.invoice_number as billing_no,	
							client.client_name, 
							newlines.description, 
							case when newlines.vat like 'Vatable' then newlines.net_amount /1.12 else newlines.net_amount end as prof,
							(case when newlines.vat like 'Vatable' then newlines.net_amount /1.12 else newlines.net_amount end) * (newcash.discount/100) as disc
				from tbl_new_invoice newcash
					inner join tbl_client client on newcash.client_id = client.id and client.org_id = '".$orgId."' and newcash.`status` in ('posted','reversed')
					inner join tbl_invoice_lines newlines on newcash.id = newlines.new_invoice_id 
					where newcash.mop_id = 5
				)bill
				
			WHERE bill.trans_date >= '".$from."' AND 
			bill.trans_date <= '".$to."'
				
			group by bill.trans_date, 
						bill.billing_no, 
						bill.client_name

		";
		
		
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		
		return $tab;
	}
	
	static function checkSummaryBilling($orgId){
		$txt = "
			
			select bill.trans_date, 
					bill.billing_no, 
					bill.client_name,
					bill.description,
					case when bill.sta = 'reversed' 
							then ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))*-1
							else ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))
							end as tr,
					case when bill.sta = 'reversed' 
							then ((sum(bill.prof) - sum(bill.disc)) * 0.12)*-1
							else ((sum(bill.prof) - sum(bill.disc)) * 0.12)
							end as output_vat,
					case when bill.sta = 'reversed' 
							then (sum(bill.prof))*-1
							else (sum(bill.prof))
							end as prof,
				   case when bill.sta = 'reversed'
							then (sum(bill.disc))*-1 
							else (sum(bill.disc))
							end as disc 				
			from(	select case when newcash.date_reversed like '0000-00-00' 
								then newcash.date_issued
								else newcash.date_reversed 
							end as trans_date,
							newcash.mop_id,
						   newcash.`status` as sta,	
						   newcash.invoice_number as billing_no,	
							client.client_name, 
							newlines.description, 
							case when newlines.vat like 'Vatable' and newcash.vat_inclusive = 'yes' then newlines.net_amount /1.12 else newlines.net_amount end as prof,
							(case when newlines.vat like 'Vatable' and newcash.vat_inclusive = 'yes' then newlines.net_amount /1.12 else newlines.net_amount end) * (newcash.discount/100) as disc
				from tbl_new_invoice newcash
					inner join tbl_client client on newcash.client_id = client.id and client.org_id = '".$orgId."' and newcash.`status` in ('posted','reversed')
					inner join tbl_invoice_lines newlines on newcash.id = newlines.new_invoice_id 
					where newcash.mop_id = 5
				)bill
			group by bill.trans_date, 
						bill.billing_no, 
						bill.client_name,
						bill.description
			
		";
		
		
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		
		return $tab;
	}
}

?>