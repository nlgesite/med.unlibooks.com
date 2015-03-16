<?php
/**
 * Class that operate on table 'tbl_all_invoice'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblAllInvoiceMySqlDAO implements TblAllInvoiceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblAllInvoiceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_all_invoice WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_all_invoice';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_all_invoice ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblAllInvoice primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_all_invoice WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAllInvoiceMySql tblAllInvoice
 	 */
	public function insert($tblAllInvoice){
		$sql = 'INSERT INTO tbl_all_invoice (new_invoice_id, new_recurring_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblAllInvoice->newInvoiceId);
		$sqlQuery->setNumber($tblAllInvoice->newRecurringId);

		$id = $this->executeInsert($sqlQuery);	
		$tblAllInvoice->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAllInvoiceMySql tblAllInvoice
 	 */
	public function update($tblAllInvoice){
		$sql = 'UPDATE tbl_all_invoice SET new_invoice_id = ?, new_recurring_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblAllInvoice->newInvoiceId);
		$sqlQuery->setNumber($tblAllInvoice->newRecurringId);

		$sqlQuery->setNumber($tblAllInvoice->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_all_invoice';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNewInvoiceId($value){
		$sql = 'SELECT * FROM tbl_all_invoice WHERE new_invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNewRecurringId($value){
		$sql = 'SELECT * FROM tbl_all_invoice WHERE new_recurring_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNewInvoiceId($value){
		$sql = 'DELETE FROM tbl_all_invoice WHERE new_invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNewRecurringId($value){
		$sql = 'DELETE FROM tbl_all_invoice WHERE new_recurring_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblAllInvoiceMySql 
	 */
	protected function readRow($row){
		$tblAllInvoice = new TblAllInvoice();
		
		$tblAllInvoice->id = $row['id'];
		$tblAllInvoice->newInvoiceId = $row['new_invoice_id'];
		$tblAllInvoice->newRecurringId = $row['new_recurring_id'];

		return $tblAllInvoice;
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
	 * @return TblAllInvoiceMySql 
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