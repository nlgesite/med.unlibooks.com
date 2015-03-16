<?php

/**
 * Class that operate on table 'tbl_atc_1601e'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-12-09 09:20
 */
class TblAtc1601eMySqlExtDAO extends TblAtc1601eMySqlDAO {

    static function report1601eExpenseJournal($orgId, $month, $year) {
        $txt = "	
select expan.trans_date,expan.account_name,
			 expan.atc, 
			 sum(expan.tax_base) as tax_base, 
			 expan.tax_rate, 
			 sum(expan.tax_required) as tax_required
from(	select tbl_coa.accont_name as account_name, case	when tbl_new_expense.date_reversed like '0000-00-00'
								then tbl_new_expense.date_issued 
								else tbl_new_expense.date_reversed
					   end as trans_date, 
								case when tbl_coa.account_num like '%6000-005%' then 'WI 100'
								when tbl_coa.account_num like '%6001-021%' then 'WI 100'
								when tbl_coa.account_num like '%6001-020%' then 'WC 010'
								when tbl_coa.account_num like '%6001-016%' then 'WC 050'
						end as atc,
						tbl_expense_amount.sub_total_amount as tax_base, 
						tbl_new_expense.EWT as tax_rate,
						tbl_expense_amount.EWT_amount as tax_required
						
			from tbl_new_expense
			inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id and tbl_new_expense.`status` in ('posted','reversed')
			inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id
			inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id
					
			where tbl_coa.org_id = ".$orgId." and tbl_coa.account_num in ('6000-005', '6001-021', '6001-020','6001-016') 
                        
union all

		  select tbl_coa.accont_name as account_name, tbl_journal_entry.trans_date, 
					case when tbl_coa.account_num like '%6000-005%' then 'WI 100'
						  when tbl_coa.account_num like '%6001-021%' then 'WI 100'
						  when tbl_coa.account_num like '%2000-009%' then 'WI 100'		
					end as atc,
					case when tbl_coa.account_num like '%6000-005%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
			  			  when tbl_coa.account_num like '%6001-021%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
		         end as tax_base,
		         '5' as tax_rate,
		         case when tbl_coa.account_num like '%2000-009%' then (tbl_journal_lines.credit - tbl_journal_lines.debit)
			  		end as tax_required 
		  from tbl_journal_lines
		  inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
		  inner join tbl_coa on tbl_journal_lines.account_code = tbl_coa.id
		  where tbl_journal_entry.org_id = ".$orgId." and tbl_coa.account_num in ('6001-021','6000-005','2000-009')
                  
	)expan 
        where month(expan.trans_date)=". $month ." && year(expan.trans_date)=" . $year ."
group by expan.trans_date,
			expan.atc ";
//        $txt = "	
//	
//	select expan.trans_date,expan.account_name,
//			 expan.atc, 
//			 sum(expan.tax_base) as tax_base, 
//			 expan.tax_rate, 
//			 sum(expan.tax_required) as tax_required
//	from(	select  tbl_coa.accont_name as account_name, case	when tbl_new_expense.date_reversed like '0000-00-00'
//								then tbl_new_expense.date_issued 
//								else tbl_new_expense.date_reversed
//					   end as trans_date, 
//								case when tbl_coa.account_num like '%6000-001%' then 'WI 100'
//								when tbl_coa.account_num like '%6000-004%' then 'WC 010'
//								when tbl_coa.account_num like '%6000-005%' then 'WC 050'
//						end as atc,
//						tbl_expense_amount.sub_total_amount as tax_base, 
//						tbl_new_expense.EWT as tax_rate,
//						tbl_expense_amount.EWT_amount as tax_required
//						
//			from tbl_new_expense
//			inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id
//			inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id
//			inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id
//					
//			where tbl_coa.org_id = " . $orgId . " and tbl_coa.account_num in ('6000-001', '6000-004', '6000-005')
//		)expan 
//                where month(expan.trans_date)=" . date('m', strtotime($month)) . " && " . "year(expan.trans_date) = " . $year . " 
//	group by expan.trans_date,
//			 	expan.atc ";
        /* exit; */
        $sqlQuery = new SqlQuery($txt);
//        echo $txt;
        return self::getTblAtc1601e($sqlQuery);
    }

    protected static function getTblAtc1601e($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            if ($each['tax_base'] > 0) {
                $sagot = new TblAtc1601e();

//            $sagot->id = $each['id'];
//            $sagot->form1601eId = $each['form_1601e_id'];

                $sagot->accountName = $each['account_name'];
                $sagot->atcCode = $each['atc'];
                $sagot->amount = $each['tax_base'];
                $sagot->rate = $each['tax_rate'];
                $sagot->taxRequired = $each['tax_required'];

                $returns[] = $sagot;
            }
        }

        return $returns;
    }

}

?>