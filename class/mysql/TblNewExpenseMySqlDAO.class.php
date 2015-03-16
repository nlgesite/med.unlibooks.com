<?php
/**
 * Class that operate on table 'tbl_new_expense'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblNewExpenseMySqlDAO implements TblNewExpenseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblNewExpenseMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_new_expense WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_new_expense';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_new_expense ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblNewExpense primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_new_expense WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblNewExpenseMySql tblNewExpense
 	 */
	public function insert($tblNewExpense){
		$sql = 'INSERT INTO tbl_new_expense (supplier_id, expense_number, reference_number, inclusive_of_vat, EWT, date_issued, date_reversed, particular, status, date_created, date_modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblNewExpense->supplierId);
		$sqlQuery->set($tblNewExpense->expenseNumber);
		$sqlQuery->set($tblNewExpense->referenceNumber);
		$sqlQuery->set($tblNewExpense->inclusiveOfVat);
		$sqlQuery->set($tblNewExpense->eWT);
		$sqlQuery->set($tblNewExpense->dateIssued);
		$sqlQuery->set($tblNewExpense->dateReversed);
		$sqlQuery->set($tblNewExpense->particular);
		$sqlQuery->set($tblNewExpense->status);
		$sqlQuery->set($tblNewExpense->dateCreated);
		$sqlQuery->set($tblNewExpense->dateModified);

		$id = $this->executeInsert($sqlQuery);	
		$tblNewExpense->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblNewExpenseMySql tblNewExpense
 	 */
	public function update($tblNewExpense){
		$sql = 'UPDATE tbl_new_expense SET supplier_id = ?, expense_number = ?, reference_number = ?, inclusive_of_vat = ?, EWT = ?, date_issued = ?, date_reversed = ?, particular = ?, status = ?, date_created = ?, date_modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblNewExpense->supplierId);
		$sqlQuery->set($tblNewExpense->expenseNumber);
		$sqlQuery->set($tblNewExpense->referenceNumber);
		$sqlQuery->set($tblNewExpense->inclusiveOfVat);
		$sqlQuery->set($tblNewExpense->eWT);
		$sqlQuery->set($tblNewExpense->dateIssued);
		$sqlQuery->set($tblNewExpense->dateReversed);
		$sqlQuery->set($tblNewExpense->particular);
		$sqlQuery->set($tblNewExpense->status);
		$sqlQuery->set($tblNewExpense->dateCreated);
		$sqlQuery->set($tblNewExpense->dateModified);

		$sqlQuery->setNumber($tblNewExpense->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_new_expense';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySupplierId($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE supplier_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpenseNumber($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE expense_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReferenceNumber($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE reference_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInclusiveOfVat($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE inclusive_of_vat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEWT($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE EWT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateIssued($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE date_issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateReversed($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE date_reversed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByParticular($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE particular = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateModified($value){
		$sql = 'SELECT * FROM tbl_new_expense WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySupplierId($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE supplier_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpenseNumber($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE expense_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReferenceNumber($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE reference_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInclusiveOfVat($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE inclusive_of_vat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEWT($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE EWT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateIssued($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE date_issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateReversed($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE date_reversed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByParticular($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE particular = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateModified($value){
		$sql = 'DELETE FROM tbl_new_expense WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblNewExpenseMySql 
	 */
	protected function readRow($row){
		$tblNewExpense = new TblNewExpense();
		
		$tblNewExpense->id = $row['id'];
		$tblNewExpense->supplierId = $row['supplier_id'];
		$tblNewExpense->expenseNumber = $row['expense_number'];
		$tblNewExpense->referenceNumber = $row['reference_number'];
		$tblNewExpense->inclusiveOfVat = $row['inclusive_of_vat'];
		$tblNewExpense->eWT = $row['EWT'];
		$tblNewExpense->dateIssued = $row['date_issued'];
		$tblNewExpense->dateReversed = $row['date_reversed'];
		$tblNewExpense->particular = $row['particular'];
		$tblNewExpense->status = $row['status'];
		$tblNewExpense->dateCreated = $row['date_created'];
		$tblNewExpense->dateModified = $row['date_modified'];

		return $tblNewExpense;
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
	 * @return TblNewExpenseMySql 
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