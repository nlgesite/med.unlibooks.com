<?php
/**
 * Class that operate on table 'tbl_all_collection'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblInvoiceAmountMySqlExtDAO extends TblInvoiceAmountMySqlDAO{
	
	static function getTopCollectedAmount($orgId, $month, $year){
		$txt = '
			
			SELECT
				hmo.hmo_name,
				hmo.hmo_account,
				sum(enter_payment.amount_received) as amount_received,
				enter_payment.Status
				
			FROM
				tbl_all_collection all_collection 
			INNER JOIN
				tbl_enter_payment enter_payment ON all_collection.enter_payment_id = enter_payment.id
			INNER JOIN
				tbl_hmo hmo ON enter_payment.hmo_id = hmo.id
			INNER JOIN
				tbl_invoice_amount invoice_amount ON all_collection.invoiced_amount_id = invoice_amount.id
			INNER JOIN
				tbl_organization org ON hmo.org_id = org.id
			INNER JOIN
				tbl_organization_info org_info ON org.id = org_info.org_id
			INNER JOIN
				tbl_user tbluser ON org_info.id = tbluser.org_info_id 

			WHERE 
				(SELECT status FROM tbl_enter_payment ep WHERE ep.col_num = enter_payment.col_num && ep.hmo_id = hmo.id ORDER BY id desc limit 0,1) NOT LIKE "reversed" AND
				org_info.org_id = '.$orgId.'
				AND year(enter_payment.date_received) = "'.$year.'"
				AND month(enter_payment.date_received) = "'.$month.'"
			GROUP BY
				hmo.id
			ORDER BY
				enter_payment.amount_received desc
				
			/* LIMIT 0,10 */
		';	
                
//                (SELECT status FROM tbl_enter_payment WHERE col_num = enter_payment.col_num && hmo_id = hmo.id ORDER BY id limit 0,1) = "posted" AND
//                enter_payment.`Status` NOT LIKE "reversed" AND
		$sqlQuery = new SqlQuery($txt);
//		echo $txt;
		return self::getTopCollection($sqlQuery);
	}




	static function getSalesReceipts($orgId, $month, $year){
		$txt = '
				SELECT 
				invoice_amount.*
					FROM 
						tbl_invoice_amount invoice_amount
						
						INNER JOIN tbl_all_invoice all_invoice
								ON all_invoice.id = invoice_amount.all_invoice_id
						
						INNER JOIN tbl_new_invoice new_invoice
								ON new_invoice.id = all_invoice.new_invoice_id
								
						INNER JOIN tbl_client client
								ON client.id = new_invoice.client_id
								
						WHERE new_invoice.`status` = "posted"
							AND  client.org_id = '.$orgId.'
							AND month(new_invoice.date_issued) = "'.$month.'"
							AND year(new_invoice.date_issued) = "'.$year.'"
		';
		
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblInvoiceAmount($sqlQuery);
	}

	static function getSalesRevenue($orgId, $month, $year){
		$txt = '
				SELECT 
					invoice_amount.* 
					
					FROM 
					
					tbl_new_invoice new_invoice
					
					INNER JOIN tbl_all_invoice all_invoice
							ON all_invoice.new_invoice_id = new_invoice.id
					
					INNER JOIN tbl_invoice_amount invoice_amount
							ON invoice_amount.all_invoice_id  = all_invoice.id
							
					INNER JOIN tbl_client clients
							ON clients.id = new_invoice.client_id
							
					WHERE 
						new_invoice.hmo_id = 0 AND 
						clients.org_id = "'.$orgId.'" AND 
						MONTHNAME(new_invoice.date_issued) = "'.$month.'" AND 
						YEAR(new_invoice.date_issued) = "'.$year.'" AND 
						new_invoice.status IN ("posted","reversed")
						
		';
		
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblInvoiceAmount($sqlQuery);
	}

	static function getSalesRevenueReversed($orgId, $month, $year){
		$txt = '
				SELECT 
					invoice_amount.* 
					
					FROM 
					
					tbl_new_invoice new_invoice
					
					INNER JOIN tbl_all_invoice all_invoice
							ON all_invoice.new_invoice_id = new_invoice.id
					
					INNER JOIN tbl_invoice_amount invoice_amount
							ON invoice_amount.all_invoice_id  = all_invoice.id
							
					INNER JOIN tbl_client clients
							ON clients.id = new_invoice.client_id
							
					WHERE 
						new_invoice.hmo_id = 0 AND 
						clients.org_id = "'.$orgId.'" AND 
						MONTHNAME(new_invoice.date_reversed) = "'.$month.'" AND 
						YEAR(new_invoice.date_reversed) = "'.$year.'" AND 
						new_invoice.status LIKE "reversed"
						
		';
		
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblInvoiceAmount($sqlQuery);
	}

	protected static function getTblInvoiceAmount($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		
		$array = array();
		
		foreach($tab as $each){
			$invoiceAmount = new TblInvoiceAmount();
			
			$invoiceAmount->id = $each['id'];
			$invoiceAmount->allInvoiceId = $each['all_invoice_id'];
			$invoiceAmount->subTotalAmount = $each['sub_total_amount'];
			$invoiceAmount->vatAmount = $each['vat_amount'];
			$invoiceAmount->discountAmount = $each['discount_amount'];
			$invoiceAmount->grandTotal = $each['grand_total'];
			
			$array[] = $invoiceAmount;
			
		}
		
		return $array;
	}

	protected static function getTopCollection($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		
		$array = array();
		
		foreach($tab as $each){
			$invoiceAmount = new TblInvoiceAmount();
			
			$invoiceAmount->hmoName = $each['hmo_name'];
			$invoiceAmount->hmoAccount = $each['hmo_account'];
			$invoiceAmount->amountReceived = $each['amount_received'];
			
			$array[] = $invoiceAmount;
			
		}
		
		return $array;
	}
}
?>