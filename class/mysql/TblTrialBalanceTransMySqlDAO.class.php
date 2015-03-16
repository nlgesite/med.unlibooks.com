<?php
/**
 * Class that operate on table 'tbl_trial_balance_trans'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblTrialBalanceTransMySqlDAO implements TblTrialBalanceTransDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblTrialBalanceTransMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_trial_balance_trans WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_trial_balance_trans';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_trial_balance_trans ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblTrialBalanceTran primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_trial_balance_trans WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTrialBalanceTransMySql tblTrialBalanceTran
 	 */
	public function insert($tblTrialBalanceTran){
		$sql = 'INSERT INTO tbl_trial_balance_trans (trial_balance_id, ref_no, date, type_of_transaction) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTrialBalanceTran->trialBalanceId);
		$sqlQuery->set($tblTrialBalanceTran->refNo);
		$sqlQuery->set($tblTrialBalanceTran->date);
		$sqlQuery->set($tblTrialBalanceTran->typeOfTransaction);

		$id = $this->executeInsert($sqlQuery);	
		$tblTrialBalanceTran->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTrialBalanceTransMySql tblTrialBalanceTran
 	 */
	public function update($tblTrialBalanceTran){
		$sql = 'UPDATE tbl_trial_balance_trans SET trial_balance_id = ?, ref_no = ?, date = ?, type_of_transaction = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTrialBalanceTran->trialBalanceId);
		$sqlQuery->set($tblTrialBalanceTran->refNo);
		$sqlQuery->set($tblTrialBalanceTran->date);
		$sqlQuery->set($tblTrialBalanceTran->typeOfTransaction);

		$sqlQuery->setNumber($tblTrialBalanceTran->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_trial_balance_trans';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTrialBalanceId($value){
		$sql = 'SELECT * FROM tbl_trial_balance_trans WHERE trial_balance_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRefNo($value){
		$sql = 'SELECT * FROM tbl_trial_balance_trans WHERE ref_no = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDate($value){
		$sql = 'SELECT * FROM tbl_trial_balance_trans WHERE date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeOfTransaction($value){
		$sql = 'SELECT * FROM tbl_trial_balance_trans WHERE type_of_transaction = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTrialBalanceId($value){
		$sql = 'DELETE FROM tbl_trial_balance_trans WHERE trial_balance_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRefNo($value){
		$sql = 'DELETE FROM tbl_trial_balance_trans WHERE ref_no = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDate($value){
		$sql = 'DELETE FROM tbl_trial_balance_trans WHERE date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeOfTransaction($value){
		$sql = 'DELETE FROM tbl_trial_balance_trans WHERE type_of_transaction = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblTrialBalanceTransMySql 
	 */
	protected function readRow($row){
		$tblTrialBalanceTran = new TblTrialBalanceTran();
		
		$tblTrialBalanceTran->id = $row['id'];
		$tblTrialBalanceTran->trialBalanceId = $row['trial_balance_id'];
		$tblTrialBalanceTran->refNo = $row['ref_no'];
		$tblTrialBalanceTran->date = $row['date'];
		$tblTrialBalanceTran->typeOfTransaction = $row['type_of_transaction'];

		return $tblTrialBalanceTran;
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
	 * @return TblTrialBalanceTransMySql 
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