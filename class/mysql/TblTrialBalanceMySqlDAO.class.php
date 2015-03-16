<?php
/**
 * Class that operate on table 'tbl_trial_balance'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblTrialBalanceMySqlDAO implements TblTrialBalanceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblTrialBalanceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_trial_balance WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_trial_balance';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_trial_balance ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblTrialBalance primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_trial_balance WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTrialBalanceMySql tblTrialBalance
 	 */
	public function insert($tblTrialBalance){
		$sql = 'INSERT INTO tbl_trial_balance (coa_id, debit, credit, balance) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTrialBalance->coaId);
		$sqlQuery->set($tblTrialBalance->debit);
		$sqlQuery->set($tblTrialBalance->credit);
		$sqlQuery->set($tblTrialBalance->balance);

		$id = $this->executeInsert($sqlQuery);	
		$tblTrialBalance->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTrialBalanceMySql tblTrialBalance
 	 */
	public function update($tblTrialBalance){
		$sql = 'UPDATE tbl_trial_balance SET coa_id = ?, debit = ?, credit = ?, balance = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTrialBalance->coaId);
		$sqlQuery->set($tblTrialBalance->debit);
		$sqlQuery->set($tblTrialBalance->credit);
		$sqlQuery->set($tblTrialBalance->balance);

		$sqlQuery->setNumber($tblTrialBalance->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_trial_balance';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCoaId($value){
		$sql = 'SELECT * FROM tbl_trial_balance WHERE coa_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDebit($value){
		$sql = 'SELECT * FROM tbl_trial_balance WHERE debit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCredit($value){
		$sql = 'SELECT * FROM tbl_trial_balance WHERE credit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBalance($value){
		$sql = 'SELECT * FROM tbl_trial_balance WHERE balance = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCoaId($value){
		$sql = 'DELETE FROM tbl_trial_balance WHERE coa_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDebit($value){
		$sql = 'DELETE FROM tbl_trial_balance WHERE debit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCredit($value){
		$sql = 'DELETE FROM tbl_trial_balance WHERE credit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBalance($value){
		$sql = 'DELETE FROM tbl_trial_balance WHERE balance = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblTrialBalanceMySql 
	 */
	protected function readRow($row){
		$tblTrialBalance = new TblTrialBalance();
		
		$tblTrialBalance->id = $row['id'];
		$tblTrialBalance->coaId = $row['coa_id'];
		$tblTrialBalance->debit = $row['debit'];
		$tblTrialBalance->credit = $row['credit'];
		$tblTrialBalance->balance = $row['balance'];

		return $tblTrialBalance;
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
	 * @return TblTrialBalanceMySql 
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