<?php
/**
 * Class that operate on table 'tbl_coa'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblCoaMySqlDAO implements TblCoaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblCoaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_coa WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_coa';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_coa ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblCoa primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_coa WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCoaMySql tblCoa
 	 */
	public function insert($tblCoa){
		$sql = 'INSERT INTO tbl_coa (org_id, account_num, account_type, accont_name, sub_account, opening_bal, active_account) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblCoa->orgId);
		$sqlQuery->set($tblCoa->accountNum);
		$sqlQuery->set($tblCoa->accountType);
		$sqlQuery->set($tblCoa->accontName);
		$sqlQuery->set($tblCoa->subAccount);
		$sqlQuery->set($tblCoa->openingBal);
		$sqlQuery->set($tblCoa->activeAccount);

		$id = $this->executeInsert($sqlQuery);	
		$tblCoa->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCoaMySql tblCoa
 	 */
	public function update($tblCoa){
		$sql = 'UPDATE tbl_coa SET org_id = ?, account_num = ?, account_type = ?, accont_name = ?, sub_account = ?, opening_bal = ?, active_account = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblCoa->orgId);
		$sqlQuery->set($tblCoa->accountNum);
		$sqlQuery->set($tblCoa->accountType);
		$sqlQuery->set($tblCoa->accontName);
		$sqlQuery->set($tblCoa->subAccount);
		$sqlQuery->set($tblCoa->openingBal);
		$sqlQuery->set($tblCoa->activeAccount);

		$sqlQuery->setNumber($tblCoa->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_coa';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_coa WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountNum($value){
		$sql = 'SELECT * FROM tbl_coa WHERE account_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountType($value){
		$sql = 'SELECT * FROM tbl_coa WHERE account_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccontName($value){
		$sql = 'SELECT * FROM tbl_coa WHERE accont_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubAccount($value){
		$sql = 'SELECT * FROM tbl_coa WHERE sub_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOpeningBal($value){
		$sql = 'SELECT * FROM tbl_coa WHERE opening_bal = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActiveAccount($value){
		$sql = 'SELECT * FROM tbl_coa WHERE active_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_coa WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountNum($value){
		$sql = 'DELETE FROM tbl_coa WHERE account_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountType($value){
		$sql = 'DELETE FROM tbl_coa WHERE account_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccontName($value){
		$sql = 'DELETE FROM tbl_coa WHERE accont_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubAccount($value){
		$sql = 'DELETE FROM tbl_coa WHERE sub_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOpeningBal($value){
		$sql = 'DELETE FROM tbl_coa WHERE opening_bal = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActiveAccount($value){
		$sql = 'DELETE FROM tbl_coa WHERE active_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblCoaMySql 
	 */
	protected function readRow($row){
		$tblCoa = new TblCoa();
		
		$tblCoa->id = $row['id'];
		$tblCoa->orgId = $row['org_id'];
		$tblCoa->accountNum = $row['account_num'];
		$tblCoa->accountType = $row['account_type'];
		$tblCoa->accontName = $row['accont_name'];
		$tblCoa->subAccount = $row['sub_account'];
		$tblCoa->openingBal = $row['opening_bal'];
		$tblCoa->activeAccount = $row['active_account'];

		return $tblCoa;
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
	 * @return TblCoaMySql 
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