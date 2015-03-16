<?php
/**
 * Class that operate on table 'tbl_journal_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblJournalLinesMySqlDAO implements TblJournalLinesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblJournalLinesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_journal_lines';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_journal_lines ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblJournalLine primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_journal_lines WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblJournalLinesMySql tblJournalLine
 	 */
	public function insert($tblJournalLine){
		$sql = 'INSERT INTO tbl_journal_lines (journal_entry_id, type, account_code, particulars, debit, credit) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblJournalLine->journalEntryId);
		$sqlQuery->set($tblJournalLine->type);
		$sqlQuery->set($tblJournalLine->accountCode);
		$sqlQuery->set($tblJournalLine->particulars);
		$sqlQuery->set($tblJournalLine->debit);
		$sqlQuery->set($tblJournalLine->credit);

		$id = $this->executeInsert($sqlQuery);	
		$tblJournalLine->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblJournalLinesMySql tblJournalLine
 	 */
	public function update($tblJournalLine){
		$sql = 'UPDATE tbl_journal_lines SET journal_entry_id = ?, type = ?, account_code = ?, particulars = ?, debit = ?, credit = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblJournalLine->journalEntryId);
		$sqlQuery->set($tblJournalLine->type);
		$sqlQuery->set($tblJournalLine->accountCode);
		$sqlQuery->set($tblJournalLine->particulars);
		$sqlQuery->set($tblJournalLine->debit);
		$sqlQuery->set($tblJournalLine->credit);

		$sqlQuery->setNumber($tblJournalLine->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_journal_lines';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByJournalEntryId($value){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE journal_entry_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountCode($value){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE account_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByParticulars($value){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE particulars = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDebit($value){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE debit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCredit($value){
		$sql = 'SELECT * FROM tbl_journal_lines WHERE credit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByJournalEntryId($value){
		$sql = 'DELETE FROM tbl_journal_lines WHERE journal_entry_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM tbl_journal_lines WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountCode($value){
		$sql = 'DELETE FROM tbl_journal_lines WHERE account_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByParticulars($value){
		$sql = 'DELETE FROM tbl_journal_lines WHERE particulars = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDebit($value){
		$sql = 'DELETE FROM tbl_journal_lines WHERE debit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCredit($value){
		$sql = 'DELETE FROM tbl_journal_lines WHERE credit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblJournalLinesMySql 
	 */
	protected function readRow($row){
		$tblJournalLine = new TblJournalLine();
		
		$tblJournalLine->id = $row['id'];
		$tblJournalLine->journalEntryId = $row['journal_entry_id'];
		$tblJournalLine->type = $row['type'];
		$tblJournalLine->accountCode = $row['account_code'];
		$tblJournalLine->particulars = $row['particulars'];
		$tblJournalLine->debit = $row['debit'];
		$tblJournalLine->credit = $row['credit'];

		return $tblJournalLine;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TblJournalLinesMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>