<?php
/**
 * Class that operate on table 'tbl_expense_amount'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-10-27 10:35
 */
class TblExpenseAmountMySqlExtDAO extends TblExpenseAmountMySqlDAO{
	

	static function searchExpenseByOrg($orgId){
		// $additional = $type != '' ? ' AND '.$type.' LIKE "%'.$search.'%"' : '';
		$txt = '
				SELECT amount.* 
					FROM 
					tbl_new_expense expense
					INNER JOIN tbl_expense_amount amount ON amount.new_expense_id = expense.id
					INNER JOIN tbl_supplier supplier ON supplier.id = expense.supplier_id 
					
					WHERE
						supplier.org_id = '.$orgId.' 
			';
			
		
		
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblExpenseAmount($sqlQuery);
	}
	
		
 static function getExpensesYesterday(){
	$orgId = Session::getSession('medorgid'); 
		$txt='
			SELECT 
				sum(ea.grand_total) as totalExpenses

			FROM
				tbl_expense_amount ea
			INNER JOIN
				tbl_new_expense ne ON ea.new_expense_id = ne.id
			INNER JOIN
				tbl_expense_lines el ON ne.id = el.new_expense_id
			INNER JOIN
				tbl_supplier s ON ne.supplier_id = s.id
			INNER JOIN
				tbl_organization org ON s.org_id = org.id
			WHERE
				org.id = ? AND
				ne.date_issued = DATE_FORMAT(subdate(NOW(),INTERVAL 1 DAY),"%Y-%m-%d") AND
				ne.`status` = "posted"
			GROUP BY
				day(ne.date_issued)
		';
		
		$sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));
        $result = QueryExecutor::execute($sqlQuery);     //   print_r($result);
        if(!empty($result) && isset($result)){
				return $result[0]['totalExpenses'];
			}
		return 0;
	}
	
	
	protected static function getTblExpenseAmount($sqlQuery){
		$answer = QueryExecutor::execute($sqlQuery);
		
		if(empty($answer)){ return false; }
		
		$returns = array();
		
		foreach($answer as $each){
			$sagot =  new TblExpenseAmount();
			
			$sagot->id = $each['id'];
			$sagot->newExpenseId = $each['new_expense_id'];
			$sagot->subTotalAmount = $each['sub_total_amount'];
			$sagot->vatAmount = $each['vat_amount'];
			$sagot->eWTAmount = $each['EWT_amount'];
			$sagot->grandTotal = $each['grand_total'];
			
			$returns[] = $sagot;
		}
		
		return $returns;
	}	
	
	
}
?>