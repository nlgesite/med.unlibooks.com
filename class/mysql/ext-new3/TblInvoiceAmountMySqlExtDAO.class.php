<?php
/**
 * Class that operate on table 'tbl_all_collection'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblInvoiceAmountMySqlExtDAO extends TblInvoiceAmountMySqlDAO{

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

	static function getSalesReceipts($orgId, $month, $year){
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
						clients.org_id = 225 AND 
						MONTHNAME(new_invoice.date_issued) = "'.$month.'" AND 
						YEAR(new_invoice.date_issued) = "'.$year.'"
						
				/*		
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
							*/
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
}
?>