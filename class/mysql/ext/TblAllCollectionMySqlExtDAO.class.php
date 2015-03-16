<?php

/**
 * Class that operate on table 'tbl_all_collection'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblAllCollectionMySqlExtDAO extends TblAllCollectionMySqlDAO {

    //DO NOT ERASE BELOW CODES IN COMMENT MODE//

    /* static function getForm2551mReport($orgId,$month,$year){
      $txt = '

      SELECT

     * 

      FROM tbl_all_collection ac

      INNER JOIN tbl_invoice_amount ia

      ON ia.id = ac.invoiced_amount_id

      INNER JOIN tbl_all_invoice al

      ON al.id = ia.all_invoice_id

      INNER JOIN tbl_new_invoice ni

      ON ni.id = al.new_invoice_id

      INNER JOIN tbl_client c

      ON c.id = ni.client_id

      INNER JOIN tbl_organization org

      ON org.id = c.org_id

      WHERE org.id = 240
      AND ni.id = 574
      ';

      $sqlQuery = new SqlQuery($txt);

      return self::getTblAllCollection($sqlQuery);
      } */

    static function getForm2551mReport($orgId, $month, $year) {
//		$txt = '
//			
//			SELECT 
//				all_collection.id , 
//				all_collection.invoiced_amount_id , 
//				sum( all_collection.applied_amount ) applied_amount, 
//				all_collection.total_balance , 
//				all_collection.wht_amount ,   
//				all_collection.enter_payment_id
//				
//				
//				FROM tbl_enter_payment enter_payment
//				
//				INNER JOIN tbl_all_collection all_collection 
//						ON all_collection.enter_payment_id = enter_payment.id
//				
//				INNER JOIN tbl_invoice_amount invoice_amount
//						ON invoice_amount.id = all_collection.invoiced_amount_id
//						
//				INNER JOIN tbl_all_invoice all_invoice
//						ON all_invoice.id = invoice_amount.all_invoice_id
//						
//				INNER JOIN tbl_new_invoice new_invoice
//						ON new_invoice.id = all_invoice.new_invoice_id
//						
//				INNER JOIN tbl_client client
//						ON client.id = new_invoice.client_id
//						
//				WHERE 
//				
//					MONTHNAME(enter_payment.date_received) LIKE "'.$month.'" AND 
//					
//					year(enter_payment.date_received) = "'.$year.'" AND 
//					
//					client.org_id = '.$orgId.'
//		';
        $txt = "  
        
   select percentage.trans_date, 
     'PT 010' as atc, 
     3 as rate, 
     sum(percentage.amount) as amount
     
   from(      
      select case when a.date_reversed like '0000-00-00' 
              then a.date_received
              else a.date_reversed 
           end as trans_date,
           case when a.`Status` like '%reversed%' then tbl_invoice_amount.grand_total *-1 else tbl_invoice_amount.grand_total end as amount
     from tbl_enter_payment a
     inner join tbl_all_collection b on a.id = b.enter_payment_id 
     inner join tbl_invoice_amount on b.invoiced_amount_id = tbl_invoice_amount.id
     inner join tbl_hmo c on a.hmo_id = c.id and c.org_id =  ".$orgId." 
     where a.`status` in ('posted','reversed')
     
     union all
     
     select case when a.date_reversed like '0000-00-00' 
           then a.date_issued 
           else a.date_reversed 
          end as trans_date,
            e.grand_total as amount
     from tbl_new_invoice a 
     inner join tbl_client c on a.client_id = c.id and c.org_id =  ".$orgId."  and a.mop_id in (1,4) and a.`status` in ('posted','reversed')
     inner join tbl_all_invoice d on a.id = d.new_invoice_id 
     inner join tbl_invoice_amount e on d.id = e.all_invoice_id
  
           union all
           
           select tbl_journal_entry.trans_date,
          case when tbl_coa.account_num like '%4001%' 
             then (tbl_journal_lines.credit - tbl_journal_lines.debit)
        end as amount
     from tbl_journal_lines
     inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
     inner join tbl_coa on tbl_journal_lines.account_code = tbl_coa.id
     where tbl_journal_entry.org_id = ".$orgId." and tbl_coa.account_num = 4001
   )percentage 
   where month(percentage.trans_date)=" . date('m', strtotime($month)) . " && year(percentage.trans_date)=" . $year . "
   group by percentage.trans_date";
        $sqlQuery = new SqlQuery($txt);
//        echo $txt;
        return self::getTbl2551m($sqlQuery);
//		return self::getTblAllCollection($sqlQuery);
    }

    static function getFormWht($orgId, $month, $year) {
        $txt = '
			SELECT all_collection.* 
				FROM tbl_all_collection all_collection
				
				INNER JOIN tbl_invoice_amount invoice_amount
					ON invoice_amount.id = all_collection.invoiced_amount_id
				
				INNER JOIN tbl_all_invoice all_invoice
						ON all_invoice.id = invoice_amount.all_invoice_id
				
				INNER JOIN tbl_new_invoice new_invoice
						ON new_invoice.id = all_invoice.new_invoice_id
						
				INNER JOIN tbl_client client
						ON client.id = new_invoice.client_id
						
				WHERE 
					
					new_invoice.`status` = "posted"
					AND  client.org_id = 139
					AND month(new_invoice.date_issued) = "' . $month . '"
					AND year(new_invoice.date_issued) = "' . $year . '"
		';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblAllCollection($sqlQuery);
    }

    protected static function getTblAllCollection($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (empty($tab)) {
            return false;
        }

        $return = array();

        foreach ($tab as $each) {
            $collection = new TblAllCollection();

            $collection->id = $each['id'];
            $collection->invoicedAmountId = $each['invoiced_amount_id'];
            $collection->appliedAmount = $each['applied_amount'];
            $collection->totalBalance = $each['total_balance'];
            $collection->whtAmount = $each['wht_amount'];
            $collection->enterPaymentId = $each['enter_payment_id'];

            $return[] = $collection;
        }

        return $return;
    }

    protected static function getTbl2551m($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (empty($tab)) {
            return false;
        }

        $return = array();
        $collection = (Object) array('transDate'=>'','atc'=>'','rate'=>'','amount'=>0);
        foreach ($tab as $each) {
            $collection->transDate = $each['trans_date'];
            $collection->atc = $each['atc'];
            $collection->rate = $each['rate'];
            $collection->amount += $each['amount'];

            $return[] = $collection;
        }
//print_r($return);
        return $return;
    }

}

?>