<?php
/**
 * Class that operate on table 'tbl_expense_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblExpenseLinesMySqlExtDAO extends TblExpenseLinesMySqlDAO{


	static function getLessDeduction($orgId, $month, $year){
		$txt = 'SELECT 
				expense_line.*
				
				FROM 
					tbl_expense_lines expense_line
					
				INNER JOIN tbl_new_expense new_expense
						ON new_expense.id = expense_line.new_expense_id
						
				INNER JOIN tbl_supplier supplier
						ON supplier.id = new_expense.supplier_id
						
				INNER JOIN tbl_coa coa
						ON coa.id = expense_line.coa_id
						
				WHERE 
					supplier.org_id = '.$orgId.' 
					
					AND new_expense.`status` = "posted"
					
					AND coa.account_num NOT LIKE "6008"
					
					AND coa.account_num NOT LIKE "6017"
					
					AND month(new_expense.date_issued) = "'.$month.'"
					
					AND year(new_expense.date_issued) = "'.$year.'"
				';
					
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblExpenseAmount($sqlQuery);
	}
	
	static function getCos($orgId, $month, $year){
		$txt = '
			SELECT 
			
			expense_line.*
				FROM 
					tbl_expense_lines expense_line
					
				INNER JOIN tbl_new_expense new_expense
						ON new_expense.id = expense_line.new_expense_id
						
				INNER JOIN tbl_supplier supplier
						ON supplier.id = new_expense.supplier_id
						
				INNER JOIN tbl_coa coa 
						ON coa.id = expense_line.coa_id
						
				WHERE 
					supplier.org_id = '.$orgId.' 
					
					AND new_expense.`status` = "posted"
					
					AND coa.account_num LIKE "6008"

					AND month(new_expense.date_issued) = "'.$month.'"
					
					AND year(new_expense.date_issued) = "'.$year.'"
				';
					
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblExpenseAmount($sqlQuery);
	}
	
	

	static function getTopExpenses($orgId, $month, $year){
		$txt = '
			SELECT 
				expense_lines.id,
				expense_lines.new_expense_id,
				expense_lines.coa_id,
				coa.account_num,
				coa.accont_name description_memo,
				expense_lines.vat_id,
				sum(expense_lines.net_amount) net_amount
				
				FROM 
				
					tbl_new_expense new_expense
					
				INNER JOIN tbl_expense_lines expense_lines
					ON expense_lines.new_expense_id = new_expense.id
					
				INNER JOIN tbl_supplier supplier
					ON supplier.id = new_expense.supplier_id
					
				INNER JOIN tbl_coa coa
					ON expense_lines.coa_id = coa.id
					
				WHERE
					supplier.org_id = '.$orgId.' AND 
					month(new_expense.date_issued) = "'.$month.'" AND 
					year(new_expense.date_issued) = "'.$year.'" AND 
					new_expense.`status` = "posted"
					
					GROUP BY coa.id 
					ORDER BY sum(expense_lines.net_amount) DESC
				';
		 $txt = "
		 SELECT * FROM (
		 select 
			M_Exp.trans_date, 
			M_Exp.account_num, 
			M_Exp.accont_name description_memo, 
			0 vat_id,
			0 new_expense_id,
			0 id,
			0 coa_id,
			sum(M_Exp.expense) as net_amount
	
	from (select case when tbl_new_expense.date_reversed like '0000-00-00' 
							then tbl_new_expense.date_issued 
							else tbl_new_expense.date_reversed 
					 end as trans_date,
					tbl_new_expense.`status`, 
					tbl_coa.account_num, 
					tbl_coa.accont_name, 
					case when tbl_new_expense.`status` like '%reversed%' 
					then (case when tbl_expense_lines.vat_id = 9 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount/1.12 
																				else tbl_expense_lines.net_amount end)*-1
					else (case when tbl_expense_lines.vat_id = 9 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount/1.12 
																				else tbl_expense_lines.net_amount end) end as expense
			from tbl_new_expense
			inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_new_expense.`status` in ('posted','reversed')
			inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id 
			inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id and tbl_coa.org_id = ".$orgId." 
				
	union all
		
			select tbl_journal_entry.trans_date,
					'',
					tbl_coa.account_num, 
					tbl_coa.accont_name,
					(tbl_journal_lines.debit - tbl_journal_lines.credit) as expense
			from tbl_journal_entry
			inner join tbl_journal_lines on tbl_journal_entry.id = tbl_journal_lines.journal_entry_id and tbl_journal_entry.org_id = ".$orgId."  
			inner join tbl_coa on tbl_journal_lines.account_code = tbl_coa.id 
									and tbl_coa.account_num in ('1002-001', '1002-002', '1002-003',	'1002-006',	'1004-001', '1004-002',	'1004-004', '1004-006', 
																				'1004-008', '1004-010',	'1004-012', '1006-001',	'1007-001', '6000-001', '6000-002', '6000-005', '6001-004', '6001-007', '6001-008',
																				 '6001-010', '6001-012' ,'6001-013', '6001-021', '6001-027', '6001-028', '6001-030', '6001-031')
			
		)M_Exp
		
		WHERE 
			year(M_Exp.trans_date) = '".$year."' AND 
			month(M_Exp.trans_date) = '".$month."' AND 
			M_Exp.expense > 0
			
			GROUP BY M_Exp.account_num
			)exp
			
			ORDER BY exp.net_amount DESC
		";

		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblExpenseAmount($sqlQuery);
	}
	
	protected static function getTblExpenseAmount($sqlQuery){
		$answer = QueryExecutor::execute($sqlQuery);
		
		if(empty($answer)){ return false; }
		
		$returns = array();
		
		foreach($answer as $each){
			$sagot =  new TblExpenseLine();
			
			$sagot->id = $each['id'];
			$sagot->newExpenseId = $each['new_expense_id'];
			$sagot->coaId = $each['coa_id'];
			$sagot->descriptionMemo = $each['description_memo'];
			$sagot->vatId = $each['vat_id'];
			$sagot->netAmount = $each['net_amount'];
			$sagot->accountNum = $each['account_num'];
			
			$returns[] = $sagot;
		}
		
		return $returns;
	}
}
?>