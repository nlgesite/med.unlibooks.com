<?php

/**
 * Class that operate on table 'tbl_enter_payment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblEnterPaymentMySqlExtDAO extends TblEnterPaymentMySqlDAO {

    static function getData($limit, $limitstart = 0) {
        $txt = "SELECT ep.id as epid, ep.status, ep.ref_num,ep.date_received,ep.date_reversed, ep.col_num, ac.*, h.hmo_name, ni.invoice_number, mop.description as mopdesc " .
                "FROM tbl_enter_payment ep INNER JOIN tbl_all_collection ac ON " .
                "ac.enter_payment_id=ep.id INNER JOIN tbl_invoice_amount ia ON " .
                "ia.id = ac.invoiced_amount_id INNER JOIN tbl_all_invoice ai ON " .
                "ai.id=ia.all_invoice_id INNER JOIN tbl_new_invoice ni ON " .
                "ni.id = ai.new_invoice_id "
//                . "INNER JOIN tbl_client c ON " .
//                "c.id=ni.client_id "
                . "INNER JOIN tbl_mop mop ON mop.id = ep.mop_id  " .
                "INNER JOIN tbl_hmo h ON h.id = ep.hmo_id ";
        $txt .= "WHERE h.org_id = ? && ep.id=(SELECT MAX(id) FROM tbl_enter_payment WHERE col_num = ep.col_num && hmo_id = h.id)";

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= " && ni.invoice_number like '%" . $_POST['search'] . "%'";
                    break;
                case 2:
                    $txt .= " && h.hmo_name like '%" . $_POST['search'] . "%'";
                    break;
                case 3:
                    if ($_POST['startdate'] != '' && $_POST['enddate'] != '') {
                        $txt .= ' && ep.date_received >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && ep.date_received <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"';
                        break;
                    }
                case 4:
                    $txt .= " && mop.description like '%" . $_POST['search'] . "%'";
                    break;
                case 5:
                    if ($_POST['startdate'] != '' && $_POST['enddate'] != '') {
                        $txt .= ' && ep.date_reversed >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && ep.date_reversed <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"';
                        break;
                    }
                default:
                    break;
            }
        }

        /*  if (isset($_POST['task'])) {
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
          }
          $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
          } else {
          $txt .= ' ORDER BY ni.id desc';
          }
          } else {
          $txt .= ' ORDER BY ni.id desc ';
          }
         */


//        $txt .= " GROUP BY ac.invoiced_amount_id" ;
//        $txt .= " GROUP BY ep.col_num" ;
        $txt .= " ORDER BY ep.id desc ";
//      echo $txt;
        if (is_numeric($limitstart) && $limit > 0) {
            $txt .= ' limit ' . $limitstart;
        }

        if ($limitstart == '' && $limit == 0 && $_GET['ipp'] != 'All') {
            $txt .= ' limit 0, 25';
        } elseif ($limit != "All" && is_numeric($limit)) {
            $txt .= ',' . $limit;
        }
//echo $txt;

        $sqlquery = new SqlQuery($txt);
        $sqlquery->setNumber(Session::getSession('medorgid'));
//        echo Session::getSession('orgid');
//        echo print_r(self::tblPayment($sqlquery).'dsdd');
        return self::tblPayment($sqlquery);
    }

    protected static function tblPayment($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!$tab)
            return false;

        $returns = array();

        foreach ($tab as $each) {
            $payment = new stdClass();

            $payment->id = $each['id'];
            $payment->dateReceived = $each['date_received'];
            $payment->invoiceNumber = $each['invoice_number'];
            $payment->clientName = $each['hmo_name'];
            $payment->appliedAmount = $each['applied_amount'];
            $payment->refNum = $each['ref_num'];
            $payment->mop = $each['mopdesc'];
            $payment->epid = $each['epid'];
            $payment->status = $each['status'];
            $payment->dateReversed = $each['date_reversed'];
            $payment->colNum = $each['col_num'];
            $returns[] = $payment;
        }
//        echo count($returns);
        return $returns;
    }

    static function clientInvoice() {
        //        $txt = "SELECT ni.*,sum(ep.applied_amount), ep.total_balance, c.client_name from tbl_new_invoice ni LEFT JOIN ".
//               "tbl_enter_payment ep ON ep.new_invoice_id = ni.id ".
//               "INNER JOIN tbl_client c ON c.id = ni.client_id " .
//               "WHERE ni.client_id = ? GROUP BY ep.id HAVING ni.total_amount_line > SUM(ep.applied_amount) OR " .
//               "SUM(ep.applied_amount) = 0";
//        $txt = "SELECT DISTINCT ni.id,ni.invoice_number,ni.date_issued,ia.grandTotal,".
//                "(SELECT sum(ac.applied_amount) FROM tbl_all_collection ac INNER JOIN ".
//                "tbl_invoice_amount ia on ia.id = ac.invoiced_amount_id INNER JOIN ".
//                "tbl_all_invoice ai ON ai.id = ia.all_invoice_id WHERE ai.new_invoice_id = ni.id ) as totalamountpaid , "
//                . "(SELECT ac.total_balance FROM tbl_all_collection ac INNER JOIN ".
//                "tbl_invoice_amount ia on ia.id = ac.invoiced_amount_id INNER JOIN ".
//                "tbl_all_invoice ai ON ai.id = ia.all_invoice_id WHERE ai.new_invoice_id = ni.id  ORDER BY ac.id desc LIMIT 1 ) as totalbalance, c.client_name from tbl_new_invoice ni " .
//                "INNER JOIN tbl_client c ON c.id = ni.client_id " .
//                "INNER JOIN tbl_all_invoice ai on ai.new_invoice_id = ni.id ".
//                "INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id = ai.id ".
//                "LEFT JOIN tbl_all_collection ac ON ac.invoiced_amount_id = ia.id " .
//                "WHERE ni.status ='posted' && (ia.Grand_total > ac.applied_amount || " .
//                "ac.applied_amount IS NULL)";
//                
//               
        if (isset($_POST['hmoid']) && !empty($_POST['hmoid'])) {
            $txt = "SELECT ni.id, ni.invoice_number, ni.date_issued, c.client_name, " .
                    "(SELECT total_balance from tbl_all_collection WHERE invoiced_amount_id = ia.id ORDER BY id desc limit 1) as balance," .
                    "ia.grand_total, ia.sub_total_amount FROM (SELECT * FROM tbl_new_invoice ORDER BY id desc) ni " .
                    "INNER JOIN tbl_client c ON c.id=ni.client_id " .
                    "INNER JOIN tbl_all_invoice ai on ai.new_invoice_id = ni.id " .
                    "INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id = ai.id " .
                    "LEFT JOIN tbl_all_collection ac ON ac.invoiced_amount_id = ia.id "
                    . "LEFT JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id " .
                    "INNER JOIN tbl_hmo hmo on hmo.id = ni.hmo_id " .
//               "INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id =".
//                "(SELECT id FROM tbl_all_invoice WHERE new_invoice_id = ".$_POST['invoiceid'].")" ;
                    "WHERE  ni.status ='posted' && (select count(*) from tbl_new_invoice where invoice_number = ni.invoice_number && client_id = c.id) = 1 && (ia.grand_total > " .
                    "(SELECT SUM(applied_amount + wht_amount)FROM tbl_all_collection WHERE invoiced_amount_id = ia.id) || " .
                    "ac.applied_amount IS NULL || "
                    . "(SELECT ep.status FROM tbl_enter_payment ep"
                    . " INNER JOIN tbl_all_collection ac ON ac.enter_payment_id = ep.id "
                    . " INNER JOIN tbl_invoice_amount ia ON ia.id = ac.invoiced_amount_id "
                    . " INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id"
                    . " WHERE ai.new_invoice_id = ni.id ORDER BY ep.id desc LIMIT 1))<>'posted'"
                    . " && ni.date_issued <= '" . date_format(date_create($_POST['date']), 'Y-m-d') . "'";
//                "WHERE  ni.status ='posted'  || (ac.applied_amount IS NULL || ep.status = 'reversed')";
//echo date('Y-m-d', strtotime($_POST['date']));
            if (isset($_POST['search']) & !empty($_POST['search'])) {
                $txt .=" && ni.invoice_number like '%" . $_POST['search'] . "%'";
            }
//        
//        if(isset($_POST['clientid']) && !empty($_POST['clientid'])){
//            $txt .=" && ni.client_id =" .$_POST['clientid'];
//        }


            $txt .=" && hmo.id =" . $_POST['hmoid'];


            if (isset($_POST['invoiceid']) && $_POST['invoiceid'] != '') {
                $txt .=" && ni.id =" . $_POST['invoiceid'];
            }

            $txt .= " && c.org_id = " . Session::getSession('medorgid') . " GROUP by ni.invoice_number";
//        echo $txt; exit;
            $sqlquery = new SqlQuery($txt);
//        $sqlquery->setNumber((is_numeric($_POST['clientid'])) ? $_POST['clientid'] : 0);
//        echo $txt;
//        return $_POST['clientid'];
            return self::tblInvoice($sqlquery);
        }
    }

    static function paymentView() {
        $txt = "SELECT ni.*,"
                . "ep.date_received dr, ep.col_num,ep.amount_received ar,ep.mop_id, ep.ref_num,ep.notes, ep.Status epstat, ep.gl_posting epgl,"
                . "ac.*, ia.grand_total from tbl_new_invoice ni " .
                "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = ni.id " .
                "INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id = ai.id " .
                "INNER JOIN tbl_all_collection ac ON ac.invoiced_amount_id = ia.id " .
                "INNER JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id " .
                "WHERE ac.id = ? && ni.status = 'posted'";

        $sqlquery = new SqlQuery($txt);
//        $sqlquery->setNumber((is_numeric($_POST['collectionid'])) ? $_POST['collectionid'] : 0);

        $sqlquery->setNumber((is_numeric($_POST['paymentid'])) ? $_POST['paymentid'] : 0); //        echo $txt;
//        return $_POST['clientid'];
        return self::tblInvoiceView($sqlquery);
    }

    protected static function tblInvoice($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!$tab) {
            return false;
        }
//        print_R($tab);
        $html = '';
        foreach ($tab as $each) {
//            $total = TblNewInvoiceMySqlExtDAO::getTotal($each['id']);
//            if ($each['balance'] <= 0) {
            $html .= '<tr>' .
                    '<td width="5px"><input type="checkbox" name="chkcol[]" class="chkcol" ' . (isset($_POST['invoiceid']) ? 'checked ' : '') . 'value="' . $each['id'] . '"></td>' .
                    '<td>' . $each['invoice_number'] . '</td>' .
                    '<td>' . date('m / d / Y', strtotime($each['date_issued'])) . '</td>' .
                    '<td>' . ucwords($each['client_name']) . '</td>' .
                    '<td><input type="text" class="totalinvoice isNumeric"  value="' . number_format((float) $each['grand_total'], 2) . '" readonly/></td>';
//                    if (isset($_POST['paymentid'])) {
//                       $html .= '<td>' . $each['applied_amount'] . '</td>';
//                   } else {
//            $html .= '<td><input type="text" name="whtax[]" class="whtax isNumeric" value="'.number_format((float) $each['grand_total']*(12/100), 2).'" /></td>';
            $html .= '<td><input type="text" name="whtax[' . $each['id'] . ']" class="whtax isNumeric" value="';
            if (!empty($_POST['whtax'])) {
                $html .= number_format((float) $each['sub_total_amount'] * ($_POST['whtax'] / 100), 2);
            } else {
                echo '';
            }
            $html .= '" /></td>';
            $html .= '<td><input type="text" name="amount[' . $each['id'] . ']" class="amount isNumeric" value="0.00" /></td>';
//                   }
//            $html .= '<td><input type="text" readonly="readonly"  name="balance[]" class="balance isNumeric" value="' . number_format($each['balance'], 2) . '" /></td>' .
            $html .= '<td><input type="text" readonly="readonly"  name="balance[' . $each['id'] . ']"" class="balance isNumeric" value="' . number_format($each['grand_total'] - ($each['sub_total_amount'] * ($_POST['whtax'] / 100)), 2) . '" /></td>' .
                    '</tr>';
//            }
        }

        return $html;
    }

    protected static function tblInvoiceView($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!$tab) {
            return false;
        }

        $returns = array();
        foreach ($tab as $each) {
            $return = new stdClass();
            $return->invoiceNumber = $each['invoice_number'];
            $return->dateIssued = $each['date_issued'];
            $return->hmoId = $each['hmo_id'];
            $return->clientId = $each['client_id'];
            $return->totalAmountLine = $each['total_amount_line'];
            $return->appliedAmount = $each['applied_amount'];
            $return->amountReceived = $each['ar'];
            $return->grandTotal = $each['grand_total'];
            $return->refNum = $each['ref_num'];
            $return->notes = $each['notes'];
            $return->mopId = $each['mop_id'];
//            $return->bankId = $each['bank_id'];
            $return->glPosting = $each['epgl'];
            $return->totalBalance = $each['total_balance'];
            $return->whtAmount = $each['wht_amount'];
            $return->paymentid = $each['enter_payment_id'];
            $return->paymentstatus = $each['epstat'];
            $return->dateReceived = $each['dr'];
            $return->colNum = $each['col_num'];
            $returns[] = $return;
        }
        return $returns;
    }

    static function getTotalBalance() {
//        $result = DAOFactory::getTblEnterPaymentDAO()->queryByNewInvoiceId($_POST['invoiceid']);
        $txt = "SELECT (SELECT total_balance FROM tbl_all_collection WHERE invoiced_amount_id = ia.id limit 0, 1) as total_balance," .
                "sum(ac.applied_amount) as applied_amount, ia.sub_total_amount,  ia.grand_total, ia.discount_amount from tbl_invoice_amount ia " .
                "LEFT JOIN tbl_all_collection ac ON ia.id = ac.invoiced_amount_id " .
                "LEFT JOIN tbl_enter_payment ep ON ep.id=ac.enter_payment_id " .
                "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id " .
                "WHERE ai.new_invoice_id = " . $_POST['invoiceid']; // ." GROUP BY ac.invoiced_amount_id";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        $total = $balance = $subtotal = 0;


//        foreach ($result as $item) {
//            $total += $item->applied_amount;
//            $balance = $item->total_balance;
//        }
        if (count($result) > 0) {
            $grandtotal = $result[0]['grand_total'];
            $total += $result[0]['applied_amount'];
            $balance = $result[0]['total_balance'];
            $subtotal = $result[0]['sub_total_amount'] - $result[0]['discount_amount'];
        }
//            print_r($txt);
        return array("grandtotal" => $grandtotal, "total" => $total, "balance" => $balance, "subtotal" => $subtotal);
    }

    static function reportEnterPayment_Posted($orgId, $startdate, $enddate) {

//        $txt = '
//			select  
//			collected.trans_date, 
//			collected.invoice_number, 
//			collected.col_num,
//			collected.hmo_name, 
//			collected.client_name, 
//			case when collected.mop_id like "%1%" then "Cash" 
//				  when collected.mop_id like "%4%" then "Check" 
//				  when collected.mop_id like "%5%" then "HMO" 
//				  end as mop,
//			collected.mop_id, 
//			collected.ref_num, 
//			sum(collected.amount) as amount, 
//			collected.`status`	
//						
//			from (  select    case when g.date_reversed like "0000-00-00" 
//					then g.date_received
//					else g.date_reversed 
//				end as trans_date,
//			a.invoice_number, 
//			g.col_num,
//			b.hmo_name, 
//			c.client_name, 
//			a.mop_id, 
//			g.ref_num, 
//			f.applied_amount as amount, 
//			g.`status`			
//			from tbl_new_invoice a 
//			inner join tbl_hmo b on a.hmo_id = b.id 
//			inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
//			inner join tbl_all_invoice d on a.id = d.new_invoice_id 
//			inner join tbl_invoice_amount e on d.id = e.all_invoice_id 
//			inner join tbl_all_collection f on e.id = f.invoiced_amount_id 
//			inner join tbl_enter_payment g on f.enter_payment_id = g.id and g.`status` in ("posted","reversed")
//
//			union all
//						
//			select case when a.date_reversed like "0000-00-00" 
//								then a.date_issued 
//								else a.date_reversed 
//							end as trans_date,
//					 a.invoice_number,
//					 "",
//					 "", 
//					 c.client_name,
//					 a.mop_id, 
//					 "", 
//					 e.grand_total as amount, 
//					 case when a.mop_id = 1
//							then "posted"
//							end as "status"
//			from tbl_new_invoice a 
//						
//					inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4) and a.`status` in ("posted","reversed")
//					inner join tbl_all_invoice d on a.id = d.new_invoice_id 
//					inner join tbl_invoice_amount e on d.id = e.all_invoice_id	
//					
//			)collected	
//
//			
//			';
        $txt ='select   collected.trans_date, 
			collected.invoice_number, 
			collected.col_num,
			collected.hmo_name, 
			collected.client_name, 
			case when collected.mop_id like "%1%" then "Cash" 
				  when collected.mop_id like "%4%" then "Check" 
				  when collected.mop_id like "%5%" then "HMO" 
				  end as mop,
			collected.mop_id, 
			collected.ref_num, 
			sum(collected.amount) as amount, 
			collected.`status`	
						
from (  select    case when g.date_reversed like "0000-00-00" 


								then g.date_received
								else g.date_reversed 
						   	end as trans_date,
						a.invoice_number, 
						g.col_num,
						b.hmo_name, 
						c.client_name, 
						a.mop_id, 
						g.ref_num, 
						f.applied_amount as amount, 
						g.`status`			
			from tbl_new_invoice a 
			inner join tbl_hmo b on a.hmo_id = b.id 
			inner join tbl_client c on a.client_id = c.id and c.org_id = '.$orgId.'
			inner join tbl_all_invoice d on a.id = d.new_invoice_id 
			inner join tbl_invoice_amount e on d.id = e.all_invoice_id 
			inner join tbl_all_collection f on e.id = f.invoiced_amount_id 
			inner join tbl_enter_payment g on f.enter_payment_id = g.id and g.`status` in ("posted","reversed")
			
			union all
						
			select case when a.date_reversed like "0000-00-00" 
								then a.date_issued 
								else a.date_reversed 
						   	end as trans_date,
					 a.invoice_number,
					 "",
					 "", 
					 c.client_name,
					 a.mop_id, 
					 "", 
					 e.grand_total as amount, 
					 case when a.mop_id = 1
					 		then "posted"
					 		end as "status"
			from tbl_new_invoice a 
									
					inner join tbl_client c on a.client_id = c.id and c.org_id = '.$orgId.' and a.mop_id in (1,4) and a.`status` in ("posted","reversed")
					inner join tbl_all_invoice d on a.id = d.new_invoice_id 
					inner join tbl_invoice_amount e on d.id = e.all_invoice_id	
		)collected';
        
        if (isset($startdate) && isset($enddate)) {
            $txt .= ' WHERE ( collected.trans_date >="' . date_format(date_create($startdate), 'Y-m-d') . '"' .
                    ' && collected.trans_date <= "' . date_format(date_create($enddate), 'Y-m-d') . '" )';

            if (isset($_POST['hmoname']) && $_POST['hmoname'] != '') {
                $txt .= '&& collected.hmo_name = "' . $_POST['hmoname'] . '"';
            }

            $txt .= ' GROUP BY 
						collected.trans_date, 
						collected.invoice_number, 
						collected.col_num,
						collected.hmo_name, 
						collected.client_name
					ORDER BY collected.invoice_number
					';
        }
        $sqlQuery = new SqlQuery($txt);
//        echo $txt;
        return self::getTblEnterPaymentCollected_final($sqlQuery);
    }


    static function checkEnterPayment_Posted($orgId) {

        $txt = '
			
			select  
			collected.trans_date, 
			collected.invoice_number, 
			collected.col_num,
			collected.hmo_name, 
			collected.hmo_id, 
			collected.client_name, 
			case when collected.mop_id like "%1%" then "Cash" 
				  when collected.mop_id like "%4%" then "Check" 
				  when collected.mop_id like "%5%" then "HMO" 
				  end as mop,
			collected.mop_id, 
			collected.ref_num, 
			sum(collected.amount) as amount, 
			collected.`status`	
						
			from (  select    case when g.date_reversed like "0000-00-00" 
					then g.date_received
					else g.date_reversed 
				end as trans_date,
			a.invoice_number, 
			a.hmo_id, 
			g.col_num,
			b.hmo_name, 
			c.client_name, 
			a.mop_id, 
			g.ref_num, 
			f.applied_amount as amount, 
			g.`status`			
			from tbl_new_invoice a 
			inner join tbl_hmo b on a.hmo_id = b.id 
			inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
			inner join tbl_all_invoice d on a.id = d.new_invoice_id 
			inner join tbl_invoice_amount e on d.id = e.all_invoice_id 
			inner join tbl_all_collection f on e.id = f.invoiced_amount_id 
			inner join tbl_enter_payment g on f.enter_payment_id = g.id and g.`status` in ("posted","reversed")

			union all
						
			select case when a.date_reversed like "0000-00-00" 
								then a.date_issued 
								else a.date_reversed 
							end as trans_date,
					 a.invoice_number,
					 "",
					 "", 
					 "",
					 c.client_name,
					 a.mop_id, 
					 "", 
					 e.grand_total as amount, 
					 case when a.mop_id = 1
							then "posted"
							end as "status"
			from tbl_new_invoice a 
						
					inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4) and a.`status` in ("posted","reversed")
					inner join tbl_all_invoice d on a.id = d.new_invoice_id 
					inner join tbl_invoice_amount e on d.id = e.all_invoice_id	
					
			)collected	
			
			GROUP BY 
				collected.mop_id, collected.hmo_id
			
			ORDER BY collected.hmo_id
			';

        
		
        $sqlQuery = new SqlQuery($txt);
        
        return self::getTblEnterPaymentCollected_final($sqlQuery);
    }

    static function reportEnterPayment_Reversed($orgId) {

        $txt = '
			select 
			collected.date_issued, 
			collected.invoice_number, 
			collected.hmo_name,
			collected.client_name, 
			
			case 
				when collected.mop_id like "%1%" then "Cash" 
				when collected.mop_id like "%4%" then "Check" 
				when collected.mop_id like "%5%" then "HMO" end as mop,
				 
			collected.ref_num, 
			collected.amount, 
			collected.`status`,
			collected.date_reversed
			
			from
				( select 
					g.date_received as date_issued, 
					a.invoice_number, 
					b.hmo_name, 
					c.client_name, 
					a.mop_id, 
					g.ref_num, 
					f.applied_amount as amount, 
					g.`status`,
					g.date_reversed
					
					
					from tbl_new_invoice a 
						inner join tbl_hmo b on a.hmo_id = b.id 
						inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
						inner join tbl_all_invoice d on a.id = d.new_invoice_id 
						inner join tbl_invoice_amount e on d.id = e.all_invoice_id 
						inner join tbl_all_collection f on e.id = f.invoiced_amount_id 
						inner join tbl_enter_payment g on f.enter_payment_id = g.id 
					
					where g.`status` IN ("posted","reversed")
					
					union all select 
						a.date_issued, 
						a.invoice_number, 
						"", 
						c.client_name,
						a.mop_id, 
						"", 
						e.grand_total as amount, 
						"",
						""
						
						from tbl_new_invoice a 
						
						inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4) 
						inner join tbl_all_invoice d on a.id = d.new_invoice_id 
						inner join tbl_invoice_amount e on d.id = e.all_invoice_id
						
					)collected 
		';

        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $txt .= ' WHERE ( date_reversed >="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
                    ' && date_reversed <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )' .
                    'AND collected.date_issued != collected.date_reversed ' .
                    /* ' OR ( date_reversed >="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
                      ' && date_reversed <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )' .
                      'AND collected.date_issued != collected.date_reversed '.
                     */
                    ' order by collected.invoice_number ';
        }
        $sqlQuery = new SqlQuery($txt);

        return self::getTblEnterPaymentCollected($sqlQuery);
    }

    static function getHmoReport($orgId) {

        $txt = '
				select collected.date_issued, collected.invoice_number, collected.hmo_name,collected.client_name, 
				   case when collected.mop_id like "%1%" then "Cash"
					  when collected.mop_id like "%4%" then "Check"
					   when collected.mop_id like "%5%" then "HMO" end as mop, 
				   collected.ref_num, collected.amount
				 from(
				   select g.date_received as date_issued, a.invoice_number, b.hmo_name, c.client_name, a.mop_id, g.ref_num, f.applied_amount as amount
				   from tbl_new_invoice a
				   inner join tbl_hmo b on a.hmo_id = b.id
				   inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
				   inner join tbl_all_invoice d on a.id = d.new_invoice_id
				   inner join tbl_invoice_amount e on d.id = e.all_invoice_id
				   inner join tbl_all_collection f on e.id = f.invoiced_amount_id
				   inner join tbl_enter_payment g on f.enter_payment_id = g.id
				   where a.status like "%posted%"
				  
				  union all
				  
				  select a.date_issued, a.invoice_number, "", c.client_name, a.mop_id, "", e.grand_total as amount
				  from tbl_new_invoice a
				  inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4)
				  inner join tbl_all_invoice d on a.id = d.new_invoice_id
				  inner join tbl_invoice_amount e on d.id = e.all_invoice_id
				  where a.status like "%posted%"
				  
				  )collected
				  
				
				
			';

//        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
//            $txt .= ' WHERE ( date_issued >="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
//                    ' && date_issued <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )' ;
//        }

        $txt .= ' GROUP BY collected.hmo_name ' .
                ' order by collected.invoice_number ';
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblEnterPayment($sqlQuery);
    }

    static function getMOPReport($orgId) {

        $txt = '
				select collected.date_issued, collected.invoice_number, collected.hmo_name,collected.client_name, 
				   case when collected.mop_id like "%1%" then "Cash"
					  when collected.mop_id like "%4%" then "Check"
					   when collected.mop_id like "%5%" then "HMO" end as mop, 
				   collected.ref_num, collected.amount
				 from(
				   select g.date_received as date_issued, a.invoice_number, b.hmo_name, c.client_name, a.mop_id, g.ref_num, f.applied_amount as amount
				   from tbl_new_invoice a
				   inner join tbl_hmo b on a.hmo_id = b.id
				   inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
				   inner join tbl_all_invoice d on a.id = d.new_invoice_id
				   inner join tbl_invoice_amount e on d.id = e.all_invoice_id
				   inner join tbl_all_collection f on e.id = f.invoiced_amount_id
				   inner join tbl_enter_payment g on f.enter_payment_id = g.id
				   where a.status like "%posted%"
				  
				  union all
				  
				  select a.date_issued, a.invoice_number, "", c.client_name, a.mop_id, "", e.grand_total as amount
				  from tbl_new_invoice a
				  inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4)
				  inner join tbl_all_invoice d on a.id = d.new_invoice_id
				  inner join tbl_invoice_amount e on d.id = e.all_invoice_id
				  where a.status like "%posted%"
				  
				  )collected
				  
				
				
			';

//        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
//            $txt .= ' WHERE ( date_issued >="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
//                    ' && date_issued <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )';
//                    
//        }

        $txt .=' GROUP BY collected.mop_id ' .
                ' order by collected.invoice_number ';


        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblEnterPayment($sqlQuery);
    }

    static function reportEnterPaymentFinal($orgId, $from, $to) {

        $txt = '
			select  
			collected.trans_date, 
			collected.invoice_number, 
			collected.col_num,
			collected.hmo_name, 
			collected.client_name, 
			case when collected.mop_id like "%1%" then "Cash" 
				  when collected.mop_id like "%4%" then "Check" 
				  when collected.mop_id like "%5%" then "HMO" 
				  end as mop,
			collected.mop_id, 
			collected.ref_num, 
			sum(collected.amount) as amount, 
			collected.`status`	
						
			from (  select    case when g.date_reversed like "0000-00-00" 
					then g.date_received
					else g.date_reversed 
				end as trans_date,
			a.invoice_number, 
			g.col_num,
			b.hmo_name, 
			c.client_name, 
			a.mop_id, 
			g.ref_num, 
			f.applied_amount as amount, 
			g.`status`			
			from tbl_new_invoice a 
			inner join tbl_hmo b on a.hmo_id = b.id 
			inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
			inner join tbl_all_invoice d on a.id = d.new_invoice_id 
			inner join tbl_invoice_amount e on d.id = e.all_invoice_id 
			inner join tbl_all_collection f on e.id = f.invoiced_amount_id 
			inner join tbl_enter_payment g on f.enter_payment_id = g.id and g.`status` in ("posted","reversed")

			union all
						
			select case when a.date_reversed like "0000-00-00" 
								then a.date_issued 
								else a.date_reversed 
							end as trans_date,
					 a.invoice_number,
					 "",
					 "", 
					 c.client_name,
					 a.mop_id, 
					 "", 
					 e.grand_total as amount, 
					 case when a.mop_id = 1
							then "posted"
							end as "status"
			from tbl_new_invoice a 
						
					inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4) and a.`status` in ("posted","reversed")
					inner join tbl_all_invoice d on a.id = d.new_invoice_id 
					inner join tbl_invoice_amount e on d.id = e.all_invoice_id	
					
			)collected	
				
			';

        if (isset($from) && isset($to)) {
            $txt .=
                    ' WHERE ( collected.trans_date >="' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && collected.trans_date <= "' . date_format(date_create($to), 'Y-m-d') . '" )' .
                    '	GROUP BY 
							collected.trans_date, 
							/* collected.invoice_number, 
							collected.col_num, */
							collected.hmo_name, 
							collected.client_name
						ORDER BY collected.invoice_number
					';
        }

        $sqlQuery = new SqlQuery($txt);

        return self::getTblEnterPaymentCollected_final($sqlQuery);
    }

    static function reportEnterPaymentFinal_reversed($orgId, $from, $to) {

        $txt = '
			select 
			collected.date_issued, 
			collected.invoice_number, 
			collected.hmo_name,
			collected.client_name, 
			
			case 
				when collected.mop_id like "%1%" then "Cash" 
				when collected.mop_id like "%4%" then "Check" 
				when collected.mop_id like "%5%" then "HMO" end as mop,
				 
			collected.ref_num, 
			collected.amount, 
			collected.`status`,
			collected.date_reversed
			
			from
				( select 
					g.date_received as date_issued, 
					a.invoice_number, 
					b.hmo_name, 
					c.client_name, 
					a.mop_id, 
					g.ref_num, 
					f.applied_amount as amount, 
					g.`status`,
					g.date_reversed
					
					
					from tbl_new_invoice a 
						inner join tbl_hmo b on a.hmo_id = b.id 
						inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . '
						inner join tbl_all_invoice d on a.id = d.new_invoice_id 
						inner join tbl_invoice_amount e on d.id = e.all_invoice_id 
						inner join tbl_all_collection f on e.id = f.invoiced_amount_id 
						inner join tbl_enter_payment g on f.enter_payment_id = g.id 
					
					where g.`status` IN ("posted","reversed")
					
					union all select 
						a.date_issued, 
						a.invoice_number, 
						"", 
						c.client_name,
						a.mop_id, 
						"", 
						e.grand_total as amount, 
						"",
						""
						
						from tbl_new_invoice a 
						
						inner join tbl_client c on a.client_id = c.id and c.org_id = ' . $orgId . ' and a.mop_id in (1,4) 
						inner join tbl_all_invoice d on a.id = d.new_invoice_id 
						inner join tbl_invoice_amount e on d.id = e.all_invoice_id
						
					)collected 
			';

        if (isset($from) && isset($to)) {
            $txt .=
                    ' WHERE ( date_reversed >="' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && date_reversed <= "' . date_format(date_create($to), 'Y-m-d') . '" )' .
                    'AND collected.date_issued != collected.date_reversed ' .
                    ' order by collected.invoice_number ';
        }

        $sqlQuery = new SqlQuery($txt);

        return self::getTblEnterPaymentCollected($sqlQuery);
    }

    protected static function getTblEnterPayment($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblEnterPayment();

            // $sagot->id = $each['id'];
            $sagot->date_issued = $each['date_issued'];
            // $sagot->date_reversed = $each['date_reversed'];
            $sagot->invoiceNumber = $each['invoice_number'];
            $sagot->hmoName = $each['hmo_name'];
            // $sagot->orgId = $each['org_id'];
            $sagot->clientName = $each['client_name'];
            $sagot->mop = $each['mop'];
            $sagot->refNum = $each['ref_num'];
            // $sagot->status = $each['status'];
            $sagot->amount = $each['amount'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    protected static function getTblEnterPaymentCollected($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblEnterPayment();

            // $sagot->id = $each['id'];
            $sagot->date_issued = $each['date_issued'];
            $sagot->date_reversed = $each['date_reversed'];
            $sagot->invoiceNumber = $each['invoice_number'];
            $sagot->hmoName = $each['hmo_name'];
            // $sagot->orgId = $each['org_id'];
            $sagot->clientName = $each['client_name'];
            $sagot->mop = $each['mop'];
            $sagot->refNum = $each['ref_num'];
            $sagot->status = $each['status'];
            $sagot->amount = $each['amount'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    protected static function getTblEnterPaymentCollected_final($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblEnterPayment();

            // $sagot->id = $each['id'];
            $sagot->trans_date = $each['trans_date'];
            // $sagot->date_reversed = $each['date_reversed'];
            $sagot->invoiceNumber = $each['invoice_number'];
            $sagot->col_num = $each['col_num'];
            $sagot->hmoName = $each['hmo_name'];
            // $sagot->orgId = $each['org_id'];
            $sagot->clientName = $each['client_name'];
            $sagot->mop = $each['mop'];
            $sagot->refNum = $each['ref_num'];
            $sagot->status = $each['status'];
            $sagot->amount = $each['amount'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    static function checkCollection() {
        $txt = 'SELECT ep.status FROM tbl_enter_payment ep ' .
                'INNER JOIN tbl_all_collection c ON c.enter_payment_id = ep.id ' .
                'INNER JOIN tbl_invoice_amount ia ON ia.id = c.invoiced_amount_id ' .
                'INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id ' .
                'INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id ' .
                'WHERE ai.new_invoice_id = ? ORDER BY ep.id desc limit 0,1';
        $sqlQuery = new sqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('invoiceid'));

        $result = QueryExecutor::execute($sqlQuery);

        if ($result) {
            return $result[0]['status'];
        }
    }

    static function getMaxNumId() {
        $txt = "SELECT ep.col_num as colnum FROM tbl_enter_payment ep " .
                "INNER JOIN tbl_hmo hmo ON hmo.id = ep.hmo_id " .
                "INNER JOIN tbl_organization o on o.id = hmo.org_id " .
                "WHERE hmo.org_id = " . Session::getSession('medorgid') . " ORDER BY ep.col_num desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            $result = explode('-', $result[0]['colnum']);
            return (int) $result[1] + 1;
        } else {
            return 1;
        }
        //return (count($result) > 0) ? $result[0]['invoice_number'] + 1 : 1;
    }

    static function getTotalYesterdayCollection() {
        $txt = "Select sum(d.total) as total from(SELECT sum(ia.grand_total) as total from tbl_invoice_amount ia " .
                "INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id " .
                "INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id " .
                "INNER JOIN tbl_client c ON c.id = ni.client_id " .
                "INNER JOIN tbl_mop mop ON mop.id = ni.mop_id " .
                "WHERE (SELECT status FROM tbl_new_invoice WHERE invoice_number = ni.invoice_number && client_id = c.id ORDER BY id desc limit 0,1) = 'posted' " .
                "&& c.org_id = ? && mop.description='Cash' " .
                "&& ni.date_issued ='" . date('Y-m-d', strtotime('-1 days')) . "'" .
                " UNION " .
                "SELECT sum(ac.applied_amount) as total " .
                "FROM tbl_enter_payment ep INNER JOIN tbl_all_collection ac ON " .
                "ac.enter_payment_id=ep.id INNER JOIN tbl_invoice_amount ia ON " .
                "ia.id = ac.invoiced_amount_id " .
//                "INNER JOIN tbl_all_invoice ai ON " .
//                "ai.id=ia.all_invoice_id INNER JOIN tbl_new_invoice ni ON " .
//                "ni.id = ai.new_invoice_id "
//                . "INNER JOIN tbl_mop mop ON mop.id = ep.mop_id  " .
                "INNER JOIN tbl_hmo h ON h.id = ep.hmo_id ";
        $txt .= "WHERE h.org_id = ? && (SELECT status FROM tbl_enter_payment WHERE col_num = ep.col_num && hmo_id = h.id ORDER BY id limit 0,1)='posted'";
        $txt .= ' && ep.date_received = "' . date('Y-m-d', strtotime('-1 days')) . '") d';

        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));
        $sqlQuery->setNumber(Session::getSession('medorgid'));
        $result = QueryExecutor::execute($sqlQuery);

        return $result[0]['total'];

//        return date('Y-m-d', strtotime('-1 days'));
    }

	static function checkCashReceiptsBook($orgId){
		$txt = "
				
select cashreceipt.trans_date,
			cashreceipt.billing_no,
			cashreceipt.client_name,
			cashreceipt.particular,
			sum(cashreceipt.coh) as coh,
			sum(cashreceipt.ar) as ar,
			sum(cashreceipt.prof) as prof,
			sum(cashreceipt.output_vat) as output_vat,
			sum(cashreceipt.disc) as disc
from ( 	select bill.trans_date, 
			bill.billing_no, 
			bill.client_name,
			bill.description as particular,
			case when bill.sta = 'reversed' 
					then ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))*-1
					else ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))
					end as coh,
					'ar',
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
			inner join tbl_client client on newcash.client_id = client.id and client.org_id = ".$orgId." and newcash.`status` in ('posted','reversed')
			inner join tbl_invoice_lines newlines on newcash.id = newlines.new_invoice_id 
			where newcash.mop_id in (1,4)
		)bill
	group by bill.trans_date, 
				bill.billing_no, 
				bill.client_name,
				bill.description
	
union all 

	select col.trans_date, 
				col.col_num, 
				col.hmo_name, 
				col.notes as particular , 
				sum(col.coh) as coh, 
				sum(col.ar) as ar, 
				sum(col.prof) as prof, 
				sum(col.output_vat) as output_vat, 
				sum(col.disc) as disc
	from(	select case when a.date_reversed like '0000-00-00' 
						    then a.date_received
					       else a.date_reversed 
					       end as trans_date,
			       'mop_id',
			       'sta',
					 a.col_num,    
			       c.hmo_name,
			       a.notes,
			       case when a.`status` like 'reversed' then a.amount_received *-1 else a.amount_received end as coh,
			       b.applied_amount as AR,
			       'prof',
			      'output_vat',                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
			      'disc'    
			from tbl_enter_payment a 
			inner join tbl_all_collection b on a.id = b.enter_payment_id and a.`status` in ('posted','reversed')
			inner join tbl_hmo c on a.hmo_id = c.id and c.org_id = ".$orgId."
		)col	
	group by col.trans_date, 
				col.col_num, 
				col.hmo_name, 
				col.notes			
					
) cashreceipt
group by cashreceipt.trans_date,
			cashreceipt.client_name,
			cashreceipt.billing_no

		";
		
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){
			return false;
		}
		return $tab;
	}
	
	static function getCashReceiptsBook($orgId, $from, $to){
		$txt = "
				
			select cashreceipt.trans_date,
						cashreceipt.billing_no invoice_number ,
						cashreceipt.client_name,
						cashreceipt.particular,
						sum(cashreceipt.coh) as coh,
						sum(cashreceipt.ar) as ar,
						sum(cashreceipt.prof) as prof,
						sum(cashreceipt.output_vat) as output_vat,
						sum(cashreceipt.disc) as disc
			from ( 	select bill.trans_date, 
						bill.billing_no, 
						bill.client_name,
						bill.description as particular,
						case when bill.sta = 'reversed' 
								then ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))*-1
								else ((sum(bill.prof) + ((sum(bill.prof) - sum(bill.disc)) * 0.12)) - sum(bill.disc))
								end as coh,
								'ar',
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
								case when newlines.vat like 'Vatable'  then newlines.net_amount /1.12 else newlines.net_amount end as prof,
								(case when newlines.vat like 'Vatable' then newlines.net_amount /1.12 else newlines.net_amount end) * (newcash.discount/100) as disc
					from tbl_new_invoice newcash
						inner join tbl_client client on newcash.client_id = client.id and client.org_id = ".$orgId." and newcash.`status` in ('posted','reversed')
						inner join tbl_invoice_lines newlines on newcash.id = newlines.new_invoice_id 
						where newcash.mop_id in (1,4)
					)bill
				group by bill.trans_date, 
							bill.billing_no, 
							bill.client_name,
							bill.description
				
			union all 

				select col.trans_date, 
							col.col_num, 
							col.hmo_name, 
							col.notes as particular , 
							sum(col.coh) as coh, 
							sum(col.ar) as ar, 
							sum(col.prof) as prof, 
							sum(col.output_vat) as output_vat, 
							sum(col.disc) as disc
				from(	select case when a.date_reversed like '0000-00-00' 
										then a.date_received
									   else a.date_reversed 
									   end as trans_date,
							   'mop_id',
							   'sta',
								 a.col_num,    
							   c.hmo_name,
							   a.notes,
							   case when a.`status` like 'reversed' then a.amount_received *-1 else a.amount_received end as coh,
							   b.applied_amount as AR,
							   'prof',
							  'output_vat',                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
							  'disc'    
						from tbl_enter_payment a 
						inner join tbl_all_collection b on a.id = b.enter_payment_id and a.`status` in ('posted','reversed')
						inner join tbl_hmo c on a.hmo_id = c.id and c.org_id = ".$orgId."
					)col	
				group by col.trans_date, 
							col.col_num, 
							col.hmo_name, 
							col.notes			
								
			) cashreceipt
			
			WHERE cashreceipt.trans_date >= '".$from."' AND 
			cashreceipt.trans_date <= '".$to."'
			
			group by cashreceipt.trans_date,
						cashreceipt.client_name,
						cashreceipt.billing_no
						

		";
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){
			return false;
		}
		return $tab;
	}
	
	
}

?>