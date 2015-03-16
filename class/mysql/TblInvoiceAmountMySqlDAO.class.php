<?php
/**
 * Class that operate on table 'tbl_invoice_amount'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblInvoiceAmountMySqlDAO implements TblInvoiceAmountDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblInvoiceAmountMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_invoice_amount WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_invoice_amount';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_invoice_amount ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblInvoiceAmount primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_invoice_amount WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblInvoiceAmountMySql tblInvoiceAmount
 	 */
	public function insert($tblInvoiceAmount){
		$sql = 'INSERT INTO tbl_invoice_amount (all_invoice_id, sub_total_amount, vat_amount, discount_amount, grand_total) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblInvoiceAmount->allInvoiceId);
		$sqlQuery->set($tblInvoiceAmount->subTotalAmount);
		$sqlQuery->set($tblInvoiceAmount->vatAmount);
		$sqlQuery->set($tblInvoiceAmount->discountAmount);
		$sqlQuery->set($tblInvoiceAmount->grandTotal);

		$id = $this->executeInsert($sqlQuery);	
		$tblInvoiceAmount->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblInvoiceAmountMySql tblInvoiceAmount
 	 */
	public function update($tblInvoiceAmount){
		$sql = 'UPDATE tbl_invoice_amount SET all_invoice_id = ?, sub_total_amount = ?, vat_amount = ?, discount_amount = ?, grand_total = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblInvoiceAmount->allInvoiceId);
		$sqlQuery->set($tblInvoiceAmount->subTotalAmount);
		$sqlQuery->set($tblInvoiceAmount->vatAmount);
		$sqlQuery->set($tblInvoiceAmount->discountAmount);
		$sqlQuery->set($tblInvoiceAmount->grandTotal);

		$sqlQuery->setNumber($tblInvoiceAmount->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_invoice_amount';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAllInvoiceId($value){
		$sql = 'SELECT * FROM tbl_invoice_amount WHERE all_invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubTotalAmount($value){
		$sql = 'SELECT * FROM tbl_invoice_amount WHERE sub_total_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVatAmount($value){
		$sql = 'SELECT * FROM tbl_invoice_amount WHERE vat_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiscountAmount($value){
		$sql = 'SELECT * FROM tbl_invoice_amount WHERE discount_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGrandTotal($value){
		$sql = 'SELECT * FROM tbl_invoice_amount WHERE grand_total = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAllInvoiceId($value){
		$sql = 'DELETE FROM tbl_invoice_amount WHERE all_invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubTotalAmount($value){
		$sql = 'DELETE FROM tbl_invoice_amount WHERE sub_total_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVatAmount($value){
		$sql = 'DELETE FROM tbl_invoice_amount WHERE vat_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiscountAmount($value){
		$sql = 'DELETE FROM tbl_invoice_amount WHERE discount_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGrandTotal($value){
		$sql = 'DELETE FROM tbl_invoice_amount WHERE grand_total = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblInvoiceAmountMySql 
	 */
	protected function readRow($row){
		$tblInvoiceAmount = new TblInvoiceAmount();
		
		$tblInvoiceAmount->id = $row['id'];
		$tblInvoiceAmount->allInvoiceId = $row['all_invoice_id'];
		$tblInvoiceAmount->subTotalAmount = $row['sub_total_amount'];
		$tblInvoiceAmount->vatAmount = $row['vat_amount'];
		$tblInvoiceAmount->discountAmount = $row['discount_amount'];
		$tblInvoiceAmount->grandTotal = $row['grand_total'];

		return $tblInvoiceAmount;
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
	 * @return TblInvoiceAmountMySql 
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