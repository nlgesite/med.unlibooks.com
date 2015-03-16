<?php
/**
 * Class that operate on table 'tbl_all_collection'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblAllCollectionMySqlDAO implements TblAllCollectionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblAllCollectionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_all_collection WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_all_collection';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_all_collection ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblAllCollection primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_all_collection WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAllCollectionMySql tblAllCollection
 	 */
	public function insert($tblAllCollection){
		$sql = 'INSERT INTO tbl_all_collection (invoiced_amount_id, applied_amount, total_balance, wht_amount, enter_payment_id) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblAllCollection->invoicedAmountId);
		$sqlQuery->set($tblAllCollection->appliedAmount);
		$sqlQuery->set($tblAllCollection->totalBalance);
		$sqlQuery->set($tblAllCollection->whtAmount);
		$sqlQuery->setNumber($tblAllCollection->enterPaymentId);

		$id = $this->executeInsert($sqlQuery);	
		$tblAllCollection->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAllCollectionMySql tblAllCollection
 	 */
	public function update($tblAllCollection){
		$sql = 'UPDATE tbl_all_collection SET invoiced_amount_id = ?, applied_amount = ?, total_balance = ?, wht_amount = ?, enter_payment_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblAllCollection->invoicedAmountId);
		$sqlQuery->set($tblAllCollection->appliedAmount);
		$sqlQuery->set($tblAllCollection->totalBalance);
		$sqlQuery->set($tblAllCollection->whtAmount);
		$sqlQuery->setNumber($tblAllCollection->enterPaymentId);

		$sqlQuery->setNumber($tblAllCollection->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_all_collection';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByInvoicedAmountId($value){
		$sql = 'SELECT * FROM tbl_all_collection WHERE invoiced_amount_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAppliedAmount($value){
		$sql = 'SELECT * FROM tbl_all_collection WHERE applied_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTotalBalance($value){
		$sql = 'SELECT * FROM tbl_all_collection WHERE total_balance = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWhtAmount($value){
		$sql = 'SELECT * FROM tbl_all_collection WHERE wht_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnterPaymentId($value){
		$sql = 'SELECT * FROM tbl_all_collection WHERE enter_payment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByInvoicedAmountId($value){
		$sql = 'DELETE FROM tbl_all_collection WHERE invoiced_amount_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAppliedAmount($value){
		$sql = 'DELETE FROM tbl_all_collection WHERE applied_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTotalBalance($value){
		$sql = 'DELETE FROM tbl_all_collection WHERE total_balance = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWhtAmount($value){
		$sql = 'DELETE FROM tbl_all_collection WHERE wht_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnterPaymentId($value){
		$sql = 'DELETE FROM tbl_all_collection WHERE enter_payment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblAllCollectionMySql 
	 */
	protected function readRow($row){
		$tblAllCollection = new TblAllCollection();
		
		$tblAllCollection->id = $row['id'];
		$tblAllCollection->invoicedAmountId = $row['invoiced_amount_id'];
		$tblAllCollection->appliedAmount = $row['applied_amount'];
		$tblAllCollection->totalBalance = $row['total_balance'];
		$tblAllCollection->whtAmount = $row['wht_amount'];
		$tblAllCollection->enterPaymentId = $row['enter_payment_id'];

		return $tblAllCollection;
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
	 * @return TblAllCollectionMySql 
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