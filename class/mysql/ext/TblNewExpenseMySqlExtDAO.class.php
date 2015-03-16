<?php

/**
 * Class that operate on table 'tbl_new_expense'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblNewExpenseMySqlExtDAO extends TblNewExpenseMySqlDAO {

    static function reportNewExpense($orgId) {

        $txt = '
				SELECT
					expense.id,
					coa.account_num,
					coa.accont_name,
					expense.status status,
					sum(expense_amount.grand_total) as total

				FROM tbl_new_expense expense

				INNER JOIN tbl_expense_lines expense_lines
					ON expense_lines.new_expense_id = expense.id 
				INNER JOIN tbl_coa coa
					ON coa.id = expense_lines.coa_id
				INNER JOIN tbl_expense_amount expense_amount
					ON	expense_amount.new_expense_id = expense.id

					WHERE expense.status IN ("posted","reversed") AND coa.org_id = ' . $orgId . '
					
					 AND expense.date_issued != expense.date_reversed
				';
        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $txt .= ' AND ( expense.date_created>="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
                    ' && expense.date_created <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )';
        }

        $txt .= ' GROUP BY coa.account_num,expense.status,expense.date_reversed';
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense($sqlQuery);
    }

    static function reportNewExpensePosted($orgId, $startdate, $enddate) {
//        $txt = "select 
//			M_Exp.trans_date, 
//			M_Exp.account_num, 
//			M_Exp.accont_name, 
//			sum(M_Exp.expense) as expense
//	
//	from (select case when tbl_new_expense.date_reversed like '0000-00-00' 
//							then tbl_new_expense.date_issued 
//							else tbl_new_expense.date_reversed 
//					 end as trans_date,
//					tbl_new_expense.`status`, 
//					tbl_coa.account_num, 
//					tbl_coa.accont_name, 
//					case when tbl_new_expense.`status` like '%reversed%' 
//					then (case when tbl_expense_lines.vat_id = 9 then tbl_expense_lines.net_amount/1.12 
//																				else tbl_expense_lines.net_amount end) *-1
//					else (case when tbl_expense_lines.vat_id = 9 then tbl_expense_lines.net_amount/1.12 
//																				else tbl_expense_lines.net_amount end)
//					end as expense
//			from tbl_new_expense
//			inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_new_expense.`status` in ('posted','reversed')
//			inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id 
//			inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id and tbl_coa.org_id = ".$orgId." 
//				
//	union all
//		
//			select tbl_journal_entry.trans_date,
//					'',
//					tbl_coa.account_num, 
//					tbl_coa.accont_name,
//					(tbl_journal_lines.debit - tbl_journal_lines.credit) as expense
//			from tbl_journal_entry
//			inner join tbl_journal_lines on tbl_journal_entry.id = tbl_journal_lines.journal_entry_id and tbl_journal_entry.org_id = ".$orgId."  
//			inner join tbl_coa on tbl_journal_lines.account_code = tbl_coa.id 
//                        and tbl_coa.account_num in ('1002-001', '1002-002', '1002-003',	'1002-006','1004-001', '1004-002','1004-004','1004-006', 
//																				'1004-008', '1004-010',	'1004-012', '1006-001',	'1007-001',	'6000-005',	'6001-012',	'6001-021')
//			
//		)M_Exp ";
        
        $txt = "select 
			M_Exp.trans_date, 
			M_Exp.account_num, 
			M_Exp.accont_name, 
			sum(M_Exp.expense) as expense
	
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
			
		)M_Exp";

        if (isset($startdate) && isset($enddate)) {
            $txt .= ' WHERE ( M_Exp.trans_date >="' . date_format(date_create($startdate), 'Y-m-d') . '"' .
                    ' && M_Exp.trans_date <= "' . date_format(date_create($enddate), 'Y-m-d') . '" )';
        }

        $txt .= ' group by M_Exp.account_num ' .
                ' ORDER BY M_Exp.account_num ASC';
//        echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense($sqlQuery);
    }

    static function reportNewExpenseReverse($orgId) {

        $txt = '
				SELECT
					expense.id,
					coa.account_num,
					coa.accont_name,
					expense.status status,
					sum(expense_amount.sub_total_amount) as subtotal,
					sum(expense_amount.grand_total) as total

				FROM tbl_new_expense expense

				INNER JOIN tbl_expense_lines expense_lines
					ON expense_lines.new_expense_id = expense.id 
				INNER JOIN tbl_coa coa
					ON coa.id = expense_lines.coa_id
				INNER JOIN tbl_expense_amount expense_amount
					ON	expense_amount.new_expense_id = expense.id

					WHERE expense.status LIKE "reversed" AND coa.org_id = ' . $orgId . '
					
					 AND expense.date_issued != expense.date_reversed
				';
        if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
            $txt .= ' AND ( expense.date_reversed>="' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '"' .
                    ' && expense.date_reversed <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '" )';
        }

        $txt .= ' GROUP BY coa.account_num,expense.status,expense.date_reversed';
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        // echo '<pre>';
        // echo $txt;
        // echo '<pre>';
        return self::getTblNewExpense($sqlQuery);
    }

    static function reportNewExpenseFinal($orgId, $from, $to) {

        $txt = "
				select 
			   M_Exp.trans_date, 
			   M_Exp.account_num, 
			   M_Exp.accont_name, 
			   sum(M_Exp.expense) as expense
			 
			 from (select case when tbl_new_expense.date_reversed like '0000-00-00' 
				  then tbl_new_expense.date_issued 
				  else tbl_new_expense.date_reversed 
				  end as trans_date,
				 tbl_new_expense.`status`, 
				 tbl_new_expense.expense_number, 
				 tbl_coa.account_num, 
				 tbl_coa.accont_name, 
				 tbl_expense_amount.sub_total_amount as expense
			   from tbl_new_expense
			   inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_new_expense.`status` in ('posted','reversed')
			   inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id 
			   inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id and tbl_coa.org_id = " . $orgId . "
				
			 union all
			  
			   select tbl_journal_entry.trans_date,
				 '', '',
				 tbl_coa.account_num, 
				 tbl_coa.accont_name,
				 (tbl_journal_lines.debit - tbl_journal_lines.credit) as expense
			   from tbl_journal_entry
			   inner join tbl_journal_lines on tbl_journal_entry.id = tbl_journal_lines.journal_entry_id and tbl_journal_entry.org_id = " . $orgId . "  
			   inner join tbl_coa on tbl_journal_lines.account_code = tbl_coa.id and tbl_coa.account_num like '%6000%'
			  )M_Exp
			  
					
				";


        if (isset($from) && isset($to)) {
            $txt .= ' WHERE ( M_Exp.trans_date >= "' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && M_Exp.trans_date <= "' . date_format(date_create($to), 'Y-m-d') . '" )';
        }

        $txt .= ' group by M_Exp.account_num ';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense($sqlQuery);
    }

    static function reportNewExpenseFinal_reversed($orgId, $from, $to) {

        $txt = '
				SELECT
					expense.id,
					coa.account_num,
					coa.accont_name,
					expense.status status,
					sum(expense_amount.sub_total_amount) as subtotal,
					sum(expense_amount.grand_total) as total

				FROM tbl_new_expense expense

				INNER JOIN tbl_expense_lines expense_lines
					ON expense_lines.new_expense_id = expense.id 
				INNER JOIN tbl_coa coa
					ON coa.id = expense_lines.coa_id
				INNER JOIN tbl_expense_amount expense_amount
					ON	expense_amount.new_expense_id = expense.id

					WHERE expense.status LIKE "reversed" AND coa.org_id = ' . $orgId . '
					
					 AND expense.date_issued != expense.date_reversed
					
				';
        if (isset($from) && isset($to)) {
            $txt .= ' AND ( expense.date_reversed >= "' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && expense.date_reversed <= "' . date_format(date_create($to), 'Y-m-d') . '" )';
        }

        $txt .= ' GROUP BY coa.account_num,expense.status,expense.date_reversed';
        // echo $txt;

        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense($sqlQuery);
    }

    protected static function getTblNewExpense($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblNewExpense();

            $sagot->transDate = $each['trans_date'];
            $sagot->accountNum = $each['account_num'];
            $sagot->accontName = $each['accont_name'];
            // $sagot->status = $each['status'];
            $sagot->expense = $each['expense'];
            // $sagot->subtotal = $each['subtotal'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    //von code

    static function searchExpense($orgId, $search, $type) {
        $additional = $type != '' ? ' AND ' . $type . ' LIKE "%' . $search . '%"' : '';
        $txt = '
				SELECT expense.* 
					FROM 
					(SELECT * FROM tbl_new_expense ORDER BY id desc) expense
					INNER JOIN tbl_supplier supplier ON supplier.id = expense.supplier_id 
					
					WHERE
						supplier.org_id = ' . $orgId . ' 
						' . $additional . ' GROUP BY expense.expense_number ORDER BY expense.expense_number DESC';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense2($sqlQuery);
    }

    static function searchExpenseNumber($orgId, $search, $type, $limit, $page) {
        $additional = $type != '' ? ' AND ' . $type . ' LIKE "%' . $search . '%"' : '';
        $txt = '
				SELECT expense.* 
					FROM 
					tbl_new_expense expense
					INNER JOIN tbl_supplier supplier ON supplier.id = expense.supplier_id 
					
					WHERE
						supplier.org_id = ' . $orgId .
                '&& expense.id = (SELECT MAX(id) FROM tbl_new_expense WHERE expense_number = expense.expense_number && supplier_id = supplier.id)' . ' 
			' . $additional . ' GROUP BY expense.expense_number  ORDER BY expense.expense_number DESC LIMIT ' . $page . ',' . $limit . '';
        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense2($sqlQuery);
    }

    static function getExpenseByExpenseNumber($orgId, $expenseNumber) {
        $txt = '
				SELECT expense.* 
					FROM 
					tbl_new_expense expense
					INNER JOIN tbl_supplier supplier ON supplier.id = expense.supplier_id 
					
					WHERE
						supplier.org_id = ' . $orgId . ' AND expense.expense_number LIKE "' . $expenseNumber . '"
						ORDER BY expense.expense_number desc
			';
        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense2($sqlQuery);
    }

    static function getExpenseByExpenseNumberAll($orgId, $expenseNumber) {
        $txt = '
				SELECT expense.* 
					FROM 
					tbl_new_expense expense
					INNER JOIN tbl_supplier supplier ON supplier.id = expense.supplier_id 
					
					WHERE
						supplier.org_id = ' . $orgId . ' AND expense.expense_number LIKE "' . $expenseNumber . '"
						ORDER BY expense.expense_number desc
			';
        $sqlQuery = new SqlQuery($txt);

        return self::getTblNewExpense2($sqlQuery);
    }

    protected static function getTblNewExpense2($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblNewExpense();

            $sagot->id = $each['id'];
            $sagot->supplierId = $each['supplier_id'];
            $sagot->expenseNumber = $each['expense_number'];
            $sagot->referenceNumber = $each['reference_number'];
            $sagot->inclusiveOfVat = $each['inclusive_of_vat'];
            $sagot->eWT = $each['EWT'];
            $sagot->dateIssued = $each['date_issued'];
            $sagot->particular = $each['particular'];
            $sagot->status = $each['status'];
            $sagot->dateCreated = $each['date_created'];
            $sagot->dateModified = $each['date_modified'];
            $sagot->dateReversed = $each['date_reversed'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    static function dataPerCoa($expenseid) {
        $txt = 'SELECT el.coa_id as id,el.vat_id as vat_id, coa.account_num as code, sum(el.net_amount) as amount FROM tbl_expense_lines el 
                INNER JOIN tbl_coa coa ON coa.id = el.coa_id 
                WHERE el.new_expense_id = ? GROUP BY el.coa_id';
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber($expenseid);
        $result = QueryExecutor::execute($sqlQuery);

        return $result;
    }

    static function getTotalYesterdayExpense() {
        $txt = "SELECT sum(ea.grand_total) as total FROM tbl_expense_amount ea "
                . "INNER JOIN tbl_new_expense ne ON ne.id = ea.new_expense_id "
                . "INNER JOIN tbl_supplier s ON s.id = ne.supplier_id "
                . "WHERE (SELECT status  FROM tbl_new_expense "
                . "WHERE expense_number = ne.expense_number && supplier_id = s.id ORDER BY id desc LIMIT 0,1)='posted' "
                . "&& s.org_id = " . Session::getSession('medorgid') . " "
                . "&& ne.date_issued  = '%" . date('Y-m-d', strtotime('-1 days')) . "%'";

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        return $result[0]['total'];
    }
	
	static function getCashDisbursementBook($orgId,$from,$to){
		$txt = "
							
		select disb.trans_date, 
					disb.name, 
					disb.reference_number,
					disb.description_memo as particulars, 
					disb.accont_name, 
					sum(disb.amount) as amount, 
					sum(disb.input_vat) as input_vat, 
					sum(disb.coh) as coh
		from ( select case when tbl_new_expense.date_reversed like '0000-00-00' 
									then tbl_new_expense.date_issued 
									else tbl_new_expense.date_reversed 
									end as trans_date,
							tbl_supplier.name,
							tbl_new_expense.reference_number,
							tbl_expense_lines.description_memo,
							tbl_coa.account_num, 
							tbl_coa.accont_name, 
							case when tbl_new_expense.`status` like '%reversed%' 
							then (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount/1.12 
																						else tbl_expense_lines.net_amount end)*-1
							else (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount/1.12 
																						else tbl_expense_lines.net_amount end)
							end as amount,
							case when tbl_new_expense.`status` like '%reversed%' 
							then (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then ((tbl_expense_lines.net_amount/1.12)*.12) 
																						else tbl_expense_lines.net_amount *.12 end)*-1
							else (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then ((tbl_expense_lines.net_amount/1.12)*.12) 
																						else tbl_expense_lines.net_amount *.12 end)
							end as input_vat,
							case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount
																				else tbl_expense_lines.net_amount + (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' 
																																		then ((tbl_expense_lines.net_amount/1.12)*.12) 
																																		else tbl_expense_lines.net_amount *.12 end)
																				end as coh
							
							
					from tbl_new_expense
					inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id
					inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_new_expense.`status` in ('posted','reversed')
					inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id 
					inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id and tbl_coa.org_id = '".$orgId."'
				)disb
				
		WHERE disb.trans_date >= '".$from."' 
		AND disb.trans_date <= '".$to."'
		
		group by disb.trans_date, 
					disb.name, 
					disb.account_num
		"; 
		
		
		
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		return $tab;
	}
	
	static function checkCashDisbursementBook($orgId){
		$txt = "
							
		select disb.trans_date, 
					disb.name, 
					disb.reference_number,
					disb.description_memo as particulars, 
					disb.accont_name, 
					sum(disb.amount) as amount, 
					sum(disb.input_vat) as input_vat, 
					sum(disb.coh) as coh
		from ( select case when tbl_new_expense.date_reversed like '0000-00-00' 
									then tbl_new_expense.date_issued 
									else tbl_new_expense.date_reversed 
									end as trans_date,
							tbl_supplier.name,
							tbl_new_expense.reference_number,
							tbl_expense_lines.description_memo,
							tbl_coa.account_num, 
							tbl_coa.accont_name, 
							case when tbl_new_expense.`status` like '%reversed%' 
							then (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount/1.12 
																						else tbl_expense_lines.net_amount end)*-1
							else (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount/1.12 
																						else tbl_expense_lines.net_amount end)
							end as amount,
							case when tbl_new_expense.`status` like '%reversed%' 
							then (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then ((tbl_expense_lines.net_amount/1.12)*.12) 
																						else tbl_expense_lines.net_amount *.12 end)*-1
							else (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then ((tbl_expense_lines.net_amount/1.12)*.12) 
																						else tbl_expense_lines.net_amount *.12 end)
							end as input_vat,
							case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' then tbl_expense_lines.net_amount
																				else tbl_expense_lines.net_amount + (case when tbl_expense_lines.vat_id = 1 and tbl_new_expense.inclusive_of_vat = 'yes' 
																																		then ((tbl_expense_lines.net_amount/1.12)*.12) 
																																		else tbl_expense_lines.net_amount *.12 end)
																				end as coh
							
							
					from tbl_new_expense
					inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id
					inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_new_expense.`status` in ('posted','reversed')
					inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id 
					inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id and tbl_coa.org_id = '".$orgId."'
				)disb
		
		group by disb.trans_date, 
					disb.name, 
					disb.account_num
		";
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		return $tab;
	}

}

?>