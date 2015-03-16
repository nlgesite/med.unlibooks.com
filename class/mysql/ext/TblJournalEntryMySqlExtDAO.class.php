<?php

/**
 * Class that operate on table 'tbl_journal_entry'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-09-04 03:48
 */
class TblJournalEntryMySqlExtDAO extends TblJournalEntryMySqlDAO {

    static function getData() {
        $txt = "SELECT * FROM tbl_journal_entry WHERE org_id = ? ORDER BY id desc";
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));
        
        return self::generateJournalData($sqlQuery);
    }

    function typeData() {
        
    }

    static function getMaxNumId() {
        $txt = "SELECT je.journal_number FROM tbl_journal_entry je " .
                "WHERE je.org_id = " . Session::getSession('medorgid') . " ORDER BY je.id desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
//JV
//        return '234';
//		 echo count($result);
        if (count($result) > 0) {
            $result = explode('-', $result[0]['journal_number']);
            return (int) $result[1] + 1;
        } else {
            return 1;
        }
    }

    static function dataPerCoa($journalid) {
        $txt = 'SELECT jl.account_code as code, SUM(jl.debit) as debit, sum(jl.credit) as credit FROM tbl_journal_lines jl
                WHERE jl.journal_entry_id = ? GROUP BY jl.account_code';
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber($journalid);
        $result = QueryExecutor::execute($sqlQuery);
        
        return $result;
    }
    
    static protected function generateJournalData($sqlQuery){
        $data = QueryExecutor::execute($sqlQuery);
        
        if(!$data) 
            return false;
        
        $result = array();
        foreach ($data as $item){
            $journal = new TblJournalEntry();
            
            $journal->id = $item['id'];
            $journal->journalNumber = $item['journal_number'];
            $journal->amount = $item['amount'];
            $journal->transDate = $item['trans_date']; 
            $result[] = $journal;
			/* print_r ($item['trans_date']);
			exit; */
        }
        
        return $result;
    }

	 static function getSummaryJournal($orgId,$from,$to) {
        $txt = "
			SELECT tbl_journal_entry.trans_date, 
				tbl_journal_entry.journal_number, 
				tbl_journal_lines.particulars, 
				tbl_coa.accont_name, 
				tbl_journal_lines.debit, 
				tbl_journal_lines.credit

			FROM tbl_coa

			INNER JOIN tbl_journal_lines ON tbl_coa.id = tbl_journal_lines.account_code
			INNER JOIN tbl_journal_entry ON tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
			
			WHERE tbl_journal_entry.org_id = '".$orgId."'
			AND tbl_journal_entry.trans_date >= '".$from."' 
			AND tbl_journal_entry.trans_date <= '".$to."'
		";
				
				
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
		if(empty($result)){ return false; }
		
        return $result;
    }

    static function checkSummaryJournal($orgId) {
        $txt = "
			SELECT tbl_journal_entry.trans_date, 
				tbl_journal_entry.journal_number, 
				tbl_journal_lines.particulars, 
				tbl_coa.accont_name, 
				tbl_journal_lines.debit, 
				tbl_journal_lines.credit

			FROM tbl_coa

			INNER JOIN tbl_journal_lines ON tbl_coa.id = tbl_journal_lines.account_code
			INNER JOIN tbl_journal_entry ON tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
			
			WHERE tbl_journal_entry.org_id = '".$orgId."'
		";
				
				
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
		if(empty($result)){ return false; }
		
        return $result;
    }
}

?>