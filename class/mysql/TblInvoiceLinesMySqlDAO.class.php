<?php
/**
 * Class that operate on table 'tbl_invoice_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblInvoiceLinesMySqlDAO implements TblInvoiceLinesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblInvoiceLinesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_invoice_lines';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_invoice_lines ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblInvoiceLine primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblInvoiceLinesMySql tblInvoiceLine
 	 */
	public function insert($tblInvoiceLine){
		$sql = 'INSERT INTO tbl_invoice_lines (new_invoice_id, item_id, task_id, description, vat, rate, unit_cost, hour, quantity, net_amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblInvoiceLine->newInvoiceId);
		$sqlQuery->setNumber($tblInvoiceLine->itemId);
		$sqlQuery->setNumber($tblInvoiceLine->taskId);
		$sqlQuery->set($tblInvoiceLine->description);
		$sqlQuery->set($tblInvoiceLine->vat);
		$sqlQuery->set($tblInvoiceLine->rate);
		$sqlQuery->set($tblInvoiceLine->unitCost);
		$sqlQuery->set($tblInvoiceLine->hour);
		$sqlQuery->set($tblInvoiceLine->quantity);
		$sqlQuery->set($tblInvoiceLine->netAmount);

		$id = $this->executeInsert($sqlQuery);	
		$tblInvoiceLine->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblInvoiceLinesMySql tblInvoiceLine
 	 */
	public function update($tblInvoiceLine){
		$sql = 'UPDATE tbl_invoice_lines SET new_invoice_id = ?, item_id = ?, task_id = ?, description = ?, vat = ?, rate = ?, unit_cost = ?, hour = ?, quantity = ?, net_amount = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblInvoiceLine->newInvoiceId);
		$sqlQuery->setNumber($tblInvoiceLine->itemId);
		$sqlQuery->setNumber($tblInvoiceLine->taskId);
		$sqlQuery->set($tblInvoiceLine->description);
		$sqlQuery->set($tblInvoiceLine->vat);
		$sqlQuery->set($tblInvoiceLine->rate);
		$sqlQuery->set($tblInvoiceLine->unitCost);
		$sqlQuery->set($tblInvoiceLine->hour);
		$sqlQuery->set($tblInvoiceLine->quantity);
		$sqlQuery->set($tblInvoiceLine->netAmount);

		$sqlQuery->setNumber($tblInvoiceLine->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_invoice_lines';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNewInvoiceId($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE new_invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskId($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVat($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE vat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRate($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE rate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUnitCost($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE unit_cost = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHour($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE hour = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuantity($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE quantity = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNetAmount($value){
		$sql = 'SELECT * FROM tbl_invoice_lines WHERE net_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNewInvoiceId($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE new_invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskId($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVat($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE vat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRate($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE rate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUnitCost($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE unit_cost = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHour($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE hour = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuantity($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE quantity = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNetAmount($value){
		$sql = 'DELETE FROM tbl_invoice_lines WHERE net_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblInvoiceLinesMySql 
	 */
	protected function readRow($row){
		$tblInvoiceLine = new TblInvoiceLine();
		
		$tblInvoiceLine->id = $row['id'];
		$tblInvoiceLine->newInvoiceId = $row['new_invoice_id'];
		$tblInvoiceLine->itemId = $row['item_id'];
		$tblInvoiceLine->taskId = $row['task_id'];
		$tblInvoiceLine->description = $row['description'];
		$tblInvoiceLine->vat = $row['vat'];
		$tblInvoiceLine->rate = $row['rate'];
		$tblInvoiceLine->unitCost = $row['unit_cost'];
		$tblInvoiceLine->hour = $row['hour'];
		$tblInvoiceLine->quantity = $row['quantity'];
		$tblInvoiceLine->netAmount = $row['net_amount'];

		return $tblInvoiceLine;
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
	 * @return TblInvoiceLinesMySql 
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