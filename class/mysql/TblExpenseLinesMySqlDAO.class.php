<?php
/**
 * Class that operate on table 'tbl_expense_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblExpenseLinesMySqlDAO implements TblExpenseLinesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblExpenseLinesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_expense_lines WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_expense_lines';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_expense_lines ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblExpenseLine primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_expense_lines WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblExpenseLinesMySql tblExpenseLine
 	 */
	public function insert($tblExpenseLine){
		$sql = 'INSERT INTO tbl_expense_lines (new_expense_id, coa_id, description_memo, vat_id, net_amount) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblExpenseLine->newExpenseId);
		$sqlQuery->setNumber($tblExpenseLine->coaId);
		$sqlQuery->set($tblExpenseLine->descriptionMemo);
		$sqlQuery->setNumber($tblExpenseLine->vatId);
		$sqlQuery->set($tblExpenseLine->netAmount);

		$id = $this->executeInsert($sqlQuery);	
		$tblExpenseLine->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblExpenseLinesMySql tblExpenseLine
 	 */
	public function update($tblExpenseLine){
		$sql = 'UPDATE tbl_expense_lines SET new_expense_id = ?, coa_id = ?, description_memo = ?, vat_id = ?, net_amount = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblExpenseLine->newExpenseId);
		$sqlQuery->setNumber($tblExpenseLine->coaId);
		$sqlQuery->set($tblExpenseLine->descriptionMemo);
		$sqlQuery->setNumber($tblExpenseLine->vatId);
		$sqlQuery->set($tblExpenseLine->netAmount);

		$sqlQuery->setNumber($tblExpenseLine->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_expense_lines';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNewExpenseId($value){
		$sql = 'SELECT * FROM tbl_expense_lines WHERE new_expense_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCoaId($value){
		$sql = 'SELECT * FROM tbl_expense_lines WHERE coa_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescriptionMemo($value){
		$sql = 'SELECT * FROM tbl_expense_lines WHERE description_memo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVatId($value){
		$sql = 'SELECT * FROM tbl_expense_lines WHERE vat_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNetAmount($value){
		$sql = 'SELECT * FROM tbl_expense_lines WHERE net_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNewExpenseId($value){
		$sql = 'DELETE FROM tbl_expense_lines WHERE new_expense_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCoaId($value){
		$sql = 'DELETE FROM tbl_expense_lines WHERE coa_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescriptionMemo($value){
		$sql = 'DELETE FROM tbl_expense_lines WHERE description_memo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVatId($value){
		$sql = 'DELETE FROM tbl_expense_lines WHERE vat_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNetAmount($value){
		$sql = 'DELETE FROM tbl_expense_lines WHERE net_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblExpenseLinesMySql 
	 */
	protected function readRow($row){
		$tblExpenseLine = new TblExpenseLine();
		
		$tblExpenseLine->id = $row['id'];
		$tblExpenseLine->newExpenseId = $row['new_expense_id'];
		$tblExpenseLine->coaId = $row['coa_id'];
		$tblExpenseLine->descriptionMemo = $row['description_memo'];
		$tblExpenseLine->vatId = $row['vat_id'];
		$tblExpenseLine->netAmount = $row['net_amount'];

		return $tblExpenseLine;
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
	 * @return TblExpenseLinesMySql 
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