<?php
/**
 * Class that operate on table 'tbl_expense_amount'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblExpenseAmountMySqlDAO implements TblExpenseAmountDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblExpenseAmountMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_expense_amount WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_expense_amount';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_expense_amount ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblExpenseAmount primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_expense_amount WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblExpenseAmountMySql tblExpenseAmount
 	 */
	public function insert($tblExpenseAmount){
		$sql = 'INSERT INTO tbl_expense_amount (new_expense_id, sub_total_amount, vat_amount, EWT_amount, grand_total) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblExpenseAmount->newExpenseId);
		$sqlQuery->set($tblExpenseAmount->subTotalAmount);
		$sqlQuery->set($tblExpenseAmount->vatAmount);
		$sqlQuery->set($tblExpenseAmount->eWTAmount);
		$sqlQuery->set($tblExpenseAmount->grandTotal);

		$id = $this->executeInsert($sqlQuery);	
		$tblExpenseAmount->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblExpenseAmountMySql tblExpenseAmount
 	 */
	public function update($tblExpenseAmount){
		$sql = 'UPDATE tbl_expense_amount SET new_expense_id = ?, sub_total_amount = ?, vat_amount = ?, EWT_amount = ?, grand_total = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblExpenseAmount->newExpenseId);
		$sqlQuery->set($tblExpenseAmount->subTotalAmount);
		$sqlQuery->set($tblExpenseAmount->vatAmount);
		$sqlQuery->set($tblExpenseAmount->eWTAmount);
		$sqlQuery->set($tblExpenseAmount->grandTotal);

		$sqlQuery->setNumber($tblExpenseAmount->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_expense_amount';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNewExpenseId($value){
		$sql = 'SELECT * FROM tbl_expense_amount WHERE new_expense_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubTotalAmount($value){
		$sql = 'SELECT * FROM tbl_expense_amount WHERE sub_total_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVatAmount($value){
		$sql = 'SELECT * FROM tbl_expense_amount WHERE vat_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEWTAmount($value){
		$sql = 'SELECT * FROM tbl_expense_amount WHERE EWT_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGrandTotal($value){
		$sql = 'SELECT * FROM tbl_expense_amount WHERE grand_total = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNewExpenseId($value){
		$sql = 'DELETE FROM tbl_expense_amount WHERE new_expense_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubTotalAmount($value){
		$sql = 'DELETE FROM tbl_expense_amount WHERE sub_total_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVatAmount($value){
		$sql = 'DELETE FROM tbl_expense_amount WHERE vat_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEWTAmount($value){
		$sql = 'DELETE FROM tbl_expense_amount WHERE EWT_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGrandTotal($value){
		$sql = 'DELETE FROM tbl_expense_amount WHERE grand_total = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblExpenseAmountMySql 
	 */
	protected function readRow($row){
		$tblExpenseAmount = new TblExpenseAmount();
		
		$tblExpenseAmount->id = $row['id'];
		$tblExpenseAmount->newExpenseId = $row['new_expense_id'];
		$tblExpenseAmount->subTotalAmount = $row['sub_total_amount'];
		$tblExpenseAmount->vatAmount = $row['vat_amount'];
		$tblExpenseAmount->eWTAmount = $row['EWT_amount'];
		$tblExpenseAmount->grandTotal = $row['grand_total'];

		return $tblExpenseAmount;
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
	 * @return TblExpenseAmountMySql 
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