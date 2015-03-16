<?php

/**
 * Class that operate on table 'tbl_journal_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-11-15 07:53
 */
class TblJournalLinesMySqlExtDAO extends TblJournalLinesMySqlDAO {

    static function reportJournalLine($orgId, $startDate, $endDate) {
        $txt = "
			SELECT 
				
				coa.account_num,
				coa.accont_name,
				sum(journal_lines.debit) as total
			 
				FROM 
					tbl_journal_lines journal_lines
				INNER JOIN tbl_coa coa ON coa.id = journal_lines.account_code
				INNER JOIN tbl_journal_entry journal_entry ON journal_entry.id = journal_lines.journal_entry_id
			  
				
				WHERE journal_entry.org_id = " . $orgId . "
			  
				AND coa.account_num IN ('1003-02','1003-04','1003-06','1003-08') 
				
				
				
				
		";

        if (isset($startDate) && isset($endDate)) {
            $txt .= ' AND ( journal_entry.trans_date>="' . date_format(date_create($startDate), 'Y-m-d') . '"' .
                    ' && journal_entry.trans_date <= "' . date_format(date_create($endDate), 'Y-m-d') . '" )';
        }

        $txt .= ' GROUP BY coa.account_num';
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblJournalLine($sqlQuery);
    }

    static function reportJournalLineExpense($orgId, $startDate, $endDate) {
        $txt = "
			SELECT 
				
				coa.account_num,
				coa.accont_name,
				sum(journal_lines.debit) as total
			 
				FROM 
					tbl_journal_lines journal_lines
				INNER JOIN tbl_coa coa ON coa.id = journal_lines.account_code
				INNER JOIN tbl_journal_entry journal_entry ON journal_entry.id = journal_lines.journal_entry_id
			  
				
				WHERE journal_entry.org_id = " . $orgId . "
			  
				AND coa.account_num IN ('6000-002','6000-003','6000-012') 
				
				
				
				
		";

        if (isset($startDate) && isset($endDate)) {
            $txt .= ' AND ( journal_entry.trans_date>="' . date_format(date_create($startDate), 'Y-m-d') . '"' .
                    ' && journal_entry.trans_date <= "' . date_format(date_create($endDate), 'Y-m-d') . '" )';
        }

        $txt .= ' GROUP BY coa.account_num';
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblJournalLine($sqlQuery);
    }

    static function reportJournalLineFinal($orgId, $from, $to) {
        $txt = "
			SELECT 
				coa.account_num,
				coa.accont_name,
				journal_lines.debit
			 
				FROM 
					tbl_journal_lines journal_lines
				INNER JOIN tbl_coa coa ON coa.id = journal_lines.account_code
				INNER JOIN tbl_journal_entry journal_entry ON journal_entry.id = journal_lines.journal_entry_id
			  
			  
				WHERE journal_entry.org_id = " . $orgId . "
			  
				AND coa.account_num IN ('1003-02','1003-04','1003-06','1003-08') 
		";

        if (isset($from) && isset($from)) {
            $txt .= ' AND ( journal_entry.trans_date>="' . date_format(date_create($from), 'Y-m-d') . '"' .
                    ' && journal_entry.trans_date <= "' . date_format(date_create($to), 'Y-m-d') . '" )';
        }
        $txt .= ' GROUP BY coa.account_num';
        // echo $txt;
        $sqlQuery = new SqlQuery($txt);

        return self::getTblJournalLine($sqlQuery);
    }

    static function reportJournalLineItr($orgId, $month, $year, $code) {

        $txt = '
			SELECT  tbl_journal_entry.trans_date,
				tbl_coa.accont_name,
				tbl_coa.account_num, 
				sum(tbl_journal_lines.debit) as debit, 
				sum(tbl_journal_lines.credit) as credit,
				sum(tbl_journal_lines.debit) - sum(tbl_journal_lines.credit) as balance

			 FROM tbl_journal_lines

			 INNER JOIN tbl_journal_entry 
				ON tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
			 INNER JOIN tbl_coa 
				ON tbl_journal_lines.account_code = tbl_coa.id
			 
			 WHERE tbl_journal_entry.org_id = "' . $orgId . '" 
				AND tbl_coa.account_num = "' . $code . '"
				AND month(tbl_journal_entry.trans_date) = "' . $month . '"
				AND year(tbl_journal_entry.trans_date) = "' . $year . '"
			 
			 GROUP BY tbl_journal_entry.trans_date,
						 tbl_coa.account_num
		';

        // echo $txt;

        $sqlQuery = new SqlQuery($txt);

        return self::getTblJournalLines_2($sqlQuery);
    }

    static function reportJournalLineItr2($orgId, $month, $year) {

             $txt = "select Comp.date,
							 Comp.ITR,
							 sum(Comp.amount) as 'amount'
					from(
							select 	tbl_trial_balance_trans.date, 
										tbl_coa.account_num,
										case when tbl_coa.account_num like '%6000-001%' then '15'
											  when tbl_coa.account_num like '%6001-027%' then '15'
											  when tbl_coa.account_num like '%6000-002%' then '16C'
											  when tbl_coa.account_num like '%6001-028%' then '16C'
											  when tbl_coa.account_num like '%2000-008%' then '18'
										end as ITR,
										case when tbl_coa.account_num like '%6000-001%' then tbl_trial_balance.balance 
											  when tbl_coa.account_num like '%6001-027%' then tbl_trial_balance.balance 
											 when tbl_coa.account_num like '%6000-002%' then tbl_trial_balance.balance 
											 when tbl_coa.account_num like '%6001-028%' then tbl_trial_balance.balance 
											 when tbl_coa.account_num like '%2000-008%' then tbl_trial_balance.balance *-1 
										end as 'amount'
												
							from tbl_trial_balance
							
							inner join tbl_coa on tbl_trial_balance.coa_id = tbl_coa.id
							inner join tbl_trial_balance_trans on tbl_trial_balance.id = tbl_trial_balance_trans.trial_balance_id
							
							where tbl_coa.org_id = ".$orgId." and tbl_coa.account_num in ('6000-001', '6001-027', '6000-002', '6001-028', '2000-008') ".
									 "&& month(tbl_trial_balance_trans.date) = ". $month . " && year(tbl_trial_balance_trans.date) = ". $year ."
					)Comp
						
				group by Comp.date,
							Comp.ITR";

        $sqlQuery = new SqlQuery($txt);
        return QueryExecutor::execute($sqlQuery);
//        return self::getTblJournalLines_2($sqlQuery);
    }

    static function getCosSales($orgId, $month, $year) {
        $txt = '
			SELECT 
				journal_line.*
					FROM 
						tbl_journal_lines journal_line
						
					INNER JOIN tbl_journal_entry journal_entry
							ON journal_entry.id = journal_line.journal_entry_id
							
					INNER JOIN tbl_coa coa
							ON coa.id = journal_line.account_code
							
					WHERE 
					
						coa.account_num = 6017
						
						AND journal_entry.org_id = ' . $orgId . '
						
						AND month(journal_entry.trans_date) = "' . $month . '"
						
						AND year(journal_entry.trans_date) = "' . $year . '"
			';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblJournalLines($sqlQuery);
    }

    protected static function getTblJournalLine($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblJournalLine();

            $sagot->accountNum = $each['account_num'];
            $sagot->accontName = $each['accont_name'];
            $sagot->total = $each['total'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    protected static function getTblJournalLines($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblJournalLine();

            $sagot->id = $each['id'];
            $sagot->journalEntryId = $each['journal_entry_id'];
            $sagot->type = $each['type'];
            $sagot->accountCode = $each['account_code'];
            $sagot->particulars = $each['particulars'];
            $sagot->debit = $each['debit'];
            $sagot->credit = $each['credit'];


            $returns[] = $sagot;
        }

        return $returns;
    }

    protected static function getTblJournalLines_2($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblJournalLine();

            $sagot->transDate = $each['trans_date'];
            $sagot->accontName = $each['accont_name'];
            $sagot->accountNum = $each['account_num'];
            $sagot->debit = $each['debit'];
            $sagot->credit = $each['credit'];
            $sagot->balance = $each['balance'];


            $returns[] = $sagot;
        }

        return $returns;
    }

}

?>