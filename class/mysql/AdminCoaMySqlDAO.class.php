<?php
/**
 * Class that operate on table 'admin_coa'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class AdminCoaMySqlDAO implements AdminCoaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AdminCoaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM admin_coa WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM admin_coa';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM admin_coa ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param adminCoa primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM admin_coa WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminCoaMySql adminCoa
 	 */
	public function insert($adminCoa){
		$sql = 'INSERT INTO admin_coa (account_num, account_type, income_balance_sheet, account_name, description, sub_account) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($adminCoa->accountNum);
		$sqlQuery->set($adminCoa->accountType);
		$sqlQuery->set($adminCoa->incomeBalanceSheet);
		$sqlQuery->set($adminCoa->accountName);
		$sqlQuery->set($adminCoa->description);
		$sqlQuery->set($adminCoa->subAccount);

		$id = $this->executeInsert($sqlQuery);	
		$adminCoa->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminCoaMySql adminCoa
 	 */
	public function update($adminCoa){
		$sql = 'UPDATE admin_coa SET account_num = ?, account_type = ?, income_balance_sheet = ?, account_name = ?, description = ?, sub_account = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($adminCoa->accountNum);
		$sqlQuery->set($adminCoa->accountType);
		$sqlQuery->set($adminCoa->incomeBalanceSheet);
		$sqlQuery->set($adminCoa->accountName);
		$sqlQuery->set($adminCoa->description);
		$sqlQuery->set($adminCoa->subAccount);

		$sqlQuery->setNumber($adminCoa->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM admin_coa';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAccountNum($value){
		$sql = 'SELECT * FROM admin_coa WHERE account_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountType($value){
		$sql = 'SELECT * FROM admin_coa WHERE account_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIncomeBalanceSheet($value){
		$sql = 'SELECT * FROM admin_coa WHERE income_balance_sheet = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountName($value){
		$sql = 'SELECT * FROM admin_coa WHERE account_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM admin_coa WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubAccount($value){
		$sql = 'SELECT * FROM admin_coa WHERE sub_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAccountNum($value){
		$sql = 'DELETE FROM admin_coa WHERE account_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountType($value){
		$sql = 'DELETE FROM admin_coa WHERE account_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIncomeBalanceSheet($value){
		$sql = 'DELETE FROM admin_coa WHERE income_balance_sheet = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountName($value){
		$sql = 'DELETE FROM admin_coa WHERE account_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM admin_coa WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubAccount($value){
		$sql = 'DELETE FROM admin_coa WHERE sub_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AdminCoaMySql 
	 */
	protected function readRow($row){
		$adminCoa = new AdminCoa();
		
		$adminCoa->id = $row['id'];
		$adminCoa->accountNum = $row['account_num'];
		$adminCoa->accountType = $row['account_type'];
		$adminCoa->incomeBalanceSheet = $row['income_balance_sheet'];
		$adminCoa->accountName = $row['account_name'];
		$adminCoa->description = $row['description'];
		$adminCoa->subAccount = $row['sub_account'];

		return $adminCoa;
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
	 * @return AdminCoaMySql 
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