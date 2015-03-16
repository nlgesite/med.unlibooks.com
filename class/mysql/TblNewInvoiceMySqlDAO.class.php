<?php
/**
 * Class that operate on table 'tbl_new_invoice'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblNewInvoiceMySqlDAO implements TblNewInvoiceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblNewInvoiceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_new_invoice';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_new_invoice ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblNewInvoice primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_new_invoice WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblNewInvoiceMySql tblNewInvoice
 	 */
	public function insert($tblNewInvoice){
		$sql = 'INSERT INTO tbl_new_invoice (client_id, hmo_id, mop_id, client_account, send_by_email, vat_inclusive, invoice_number, date_issued, date_reversed, due_date, PO_SO, discount, particular, remarks, status, total_amount_line, date_created, date_modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblNewInvoice->clientId);
		$sqlQuery->setNumber($tblNewInvoice->hmoId);
		$sqlQuery->setNumber($tblNewInvoice->mopId);
		$sqlQuery->set($tblNewInvoice->clientAccount);
		$sqlQuery->set($tblNewInvoice->sendByEmail);
		$sqlQuery->set($tblNewInvoice->vatInclusive);
		$sqlQuery->set($tblNewInvoice->invoiceNumber);
		$sqlQuery->set($tblNewInvoice->dateIssued);
		$sqlQuery->set($tblNewInvoice->dateReversed);
		$sqlQuery->set($tblNewInvoice->dueDate);
		$sqlQuery->set($tblNewInvoice->pOSO);
		$sqlQuery->set($tblNewInvoice->discount);
		$sqlQuery->set($tblNewInvoice->particular);
		$sqlQuery->set($tblNewInvoice->remarks);
		$sqlQuery->set($tblNewInvoice->status);
		$sqlQuery->set($tblNewInvoice->totalAmountLine);
		$sqlQuery->set($tblNewInvoice->dateCreated);
		$sqlQuery->set($tblNewInvoice->dateModified);

		$id = $this->executeInsert($sqlQuery);	
		$tblNewInvoice->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblNewInvoiceMySql tblNewInvoice
 	 */
	public function update($tblNewInvoice){
		$sql = 'UPDATE tbl_new_invoice SET client_id = ?, hmo_id = ?, mop_id = ?, client_account = ?, send_by_email = ?, vat_inclusive = ?, invoice_number = ?, date_issued = ?, date_reversed = ?, due_date = ?, PO_SO = ?, discount = ?, particular = ?, remarks = ?, status = ?, total_amount_line = ?, date_created = ?, date_modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblNewInvoice->clientId);
		$sqlQuery->setNumber($tblNewInvoice->hmoId);
		$sqlQuery->setNumber($tblNewInvoice->mopId);
		$sqlQuery->set($tblNewInvoice->clientAccount);
		$sqlQuery->set($tblNewInvoice->sendByEmail);
		$sqlQuery->set($tblNewInvoice->vatInclusive);
		$sqlQuery->set($tblNewInvoice->invoiceNumber);
		$sqlQuery->set($tblNewInvoice->dateIssued);
		$sqlQuery->set($tblNewInvoice->dateReversed);
		$sqlQuery->set($tblNewInvoice->dueDate);
		$sqlQuery->set($tblNewInvoice->pOSO);
		$sqlQuery->set($tblNewInvoice->discount);
		$sqlQuery->set($tblNewInvoice->particular);
		$sqlQuery->set($tblNewInvoice->remarks);
		$sqlQuery->set($tblNewInvoice->status);
		$sqlQuery->set($tblNewInvoice->totalAmountLine);
		$sqlQuery->set($tblNewInvoice->dateCreated);
		$sqlQuery->set($tblNewInvoice->dateModified);

		$sqlQuery->setNumber($tblNewInvoice->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_new_invoice';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByClientId($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHmoId($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE hmo_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMopId($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE mop_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientAccount($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE client_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySendByEmail($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE send_by_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVatInclusive($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE vat_inclusive = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceNumber($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE invoice_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateIssued($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE date_issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateReversed($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE date_reversed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDueDate($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE due_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPOSO($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE PO_SO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiscount($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE discount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByParticular($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE particular = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRemarks($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE remarks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTotalAmountLine($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE total_amount_line = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateModified($value){
		$sql = 'SELECT * FROM tbl_new_invoice WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByClientId($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHmoId($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE hmo_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMopId($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE mop_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientAccount($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE client_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySendByEmail($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE send_by_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVatInclusive($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE vat_inclusive = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceNumber($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE invoice_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateIssued($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE date_issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateReversed($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE date_reversed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDueDate($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE due_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPOSO($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE PO_SO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiscount($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE discount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByParticular($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE particular = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRemarks($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE remarks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTotalAmountLine($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE total_amount_line = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateModified($value){
		$sql = 'DELETE FROM tbl_new_invoice WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblNewInvoiceMySql 
	 */
	protected function readRow($row){
		$tblNewInvoice = new TblNewInvoice();
		
		$tblNewInvoice->id = $row['id'];
		$tblNewInvoice->clientId = $row['client_id'];
		$tblNewInvoice->hmoId = $row['hmo_id'];
		$tblNewInvoice->mopId = $row['mop_id'];
		$tblNewInvoice->clientAccount = $row['client_account'];
		$tblNewInvoice->sendByEmail = $row['send_by_email'];
		$tblNewInvoice->vatInclusive = $row['vat_inclusive'];
		$tblNewInvoice->invoiceNumber = $row['invoice_number'];
		$tblNewInvoice->dateIssued = $row['date_issued'];
		$tblNewInvoice->dateReversed = $row['date_reversed'];
		$tblNewInvoice->dueDate = $row['due_date'];
		$tblNewInvoice->pOSO = $row['PO_SO'];
		$tblNewInvoice->discount = $row['discount'];
		$tblNewInvoice->particular = $row['particular'];
		$tblNewInvoice->remarks = $row['remarks'];
		$tblNewInvoice->status = $row['status'];
		$tblNewInvoice->totalAmountLine = $row['total_amount_line'];
		$tblNewInvoice->dateCreated = $row['date_created'];
		$tblNewInvoice->dateModified = $row['date_modified'];

		return $tblNewInvoice;
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
	 * @return TblNewInvoiceMySql 
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