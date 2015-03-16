<?php
/**
 * Class that operate on table 'tbl_journal_entry'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblJournalEntryMySqlDAO implements TblJournalEntryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblJournalEntryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_journal_entry WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_journal_entry';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_journal_entry ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblJournalEntry primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_journal_entry WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblJournalEntryMySql tblJournalEntry
 	 */
	public function insert($tblJournalEntry){
		$sql = 'INSERT INTO tbl_journal_entry (org_id, journal_number, trans_date, amount) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblJournalEntry->orgId);
		$sqlQuery->set($tblJournalEntry->journalNumber);
		$sqlQuery->set($tblJournalEntry->transDate);
		$sqlQuery->set($tblJournalEntry->amount);

		$id = $this->executeInsert($sqlQuery);	
		$tblJournalEntry->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblJournalEntryMySql tblJournalEntry
 	 */
	public function update($tblJournalEntry){
		$sql = 'UPDATE tbl_journal_entry SET org_id = ?, journal_number = ?, trans_date = ?, amount = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblJournalEntry->orgId);
		$sqlQuery->set($tblJournalEntry->journalNumber);
		$sqlQuery->set($tblJournalEntry->transDate);
		$sqlQuery->set($tblJournalEntry->amount);

		$sqlQuery->setNumber($tblJournalEntry->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_journal_entry';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_journal_entry WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByJournalNumber($value){
		$sql = 'SELECT * FROM tbl_journal_entry WHERE journal_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTransDate($value){
		$sql = 'SELECT * FROM tbl_journal_entry WHERE trans_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAmount($value){
		$sql = 'SELECT * FROM tbl_journal_entry WHERE amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_journal_entry WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByJournalNumber($value){
		$sql = 'DELETE FROM tbl_journal_entry WHERE journal_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTransDate($value){
		$sql = 'DELETE FROM tbl_journal_entry WHERE trans_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAmount($value){
		$sql = 'DELETE FROM tbl_journal_entry WHERE amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblJournalEntryMySql 
	 */
	protected function readRow($row){
		$tblJournalEntry = new TblJournalEntry();
		
		$tblJournalEntry->id = $row['id'];
		$tblJournalEntry->orgId = $row['org_id'];
		$tblJournalEntry->journalNumber = $row['journal_number'];
		$tblJournalEntry->transDate = $row['trans_date'];
		$tblJournalEntry->amount = $row['amount'];

		return $tblJournalEntry;
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
	 * @return TblJournalEntryMySql 
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