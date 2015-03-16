<?php
/**
 * Class that operate on table 'tbl_enter_payment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblEnterPaymentMySqlDAO implements TblEnterPaymentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblEnterPaymentMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_enter_payment';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_enter_payment ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblEnterPayment primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_enter_payment WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEnterPaymentMySql tblEnterPayment
 	 */
	public function insert($tblEnterPayment){
		$sql = 'INSERT INTO tbl_enter_payment (col_num, hmo_id, time_tracking_id, amount_received, date_received, date_reversed, ref_num, mop_id, gl_posting, wht_tax, check_date, Status, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblEnterPayment->colNum);
		$sqlQuery->setNumber($tblEnterPayment->hmoId);
		$sqlQuery->setNumber($tblEnterPayment->timeTrackingId);
		$sqlQuery->set($tblEnterPayment->amountReceived);
		$sqlQuery->set($tblEnterPayment->dateReceived);
		$sqlQuery->set($tblEnterPayment->dateReversed);
		$sqlQuery->set($tblEnterPayment->refNum);
		$sqlQuery->setNumber($tblEnterPayment->mopId);
		$sqlQuery->setNumber($tblEnterPayment->glPosting);
		$sqlQuery->set($tblEnterPayment->whtTax);
		$sqlQuery->set($tblEnterPayment->checkDate);
		$sqlQuery->set($tblEnterPayment->status);
		$sqlQuery->set($tblEnterPayment->notes);

		$id = $this->executeInsert($sqlQuery);	
		$tblEnterPayment->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEnterPaymentMySql tblEnterPayment
 	 */
	public function update($tblEnterPayment){
		$sql = 'UPDATE tbl_enter_payment SET col_num = ?, hmo_id = ?, time_tracking_id = ?, amount_received = ?, date_received = ?, date_reversed = ?, ref_num = ?, mop_id = ?, gl_posting = ?, wht_tax = ?, check_date = ?, Status = ?, notes = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblEnterPayment->colNum);
		$sqlQuery->setNumber($tblEnterPayment->hmoId);
		$sqlQuery->setNumber($tblEnterPayment->timeTrackingId);
		$sqlQuery->set($tblEnterPayment->amountReceived);
		$sqlQuery->set($tblEnterPayment->dateReceived);
		$sqlQuery->set($tblEnterPayment->dateReversed);
		$sqlQuery->set($tblEnterPayment->refNum);
		$sqlQuery->setNumber($tblEnterPayment->mopId);
		$sqlQuery->setNumber($tblEnterPayment->glPosting);
		$sqlQuery->set($tblEnterPayment->whtTax);
		$sqlQuery->set($tblEnterPayment->checkDate);
		$sqlQuery->set($tblEnterPayment->status);
		$sqlQuery->set($tblEnterPayment->notes);

		$sqlQuery->setNumber($tblEnterPayment->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_enter_payment';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByColNum($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE col_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHmoId($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE hmo_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTimeTrackingId($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE time_tracking_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAmountReceived($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE amount_received = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateReceived($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE date_received = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateReversed($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE date_reversed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRefNum($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE ref_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMopId($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE mop_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGlPosting($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE gl_posting = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWhtTax($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE wht_tax = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCheckDate($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE check_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE Status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNotes($value){
		$sql = 'SELECT * FROM tbl_enter_payment WHERE notes = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByColNum($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE col_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHmoId($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE hmo_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTimeTrackingId($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE time_tracking_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAmountReceived($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE amount_received = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateReceived($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE date_received = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateReversed($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE date_reversed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRefNum($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE ref_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMopId($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE mop_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGlPosting($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE gl_posting = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWhtTax($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE wht_tax = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCheckDate($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE check_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE Status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNotes($value){
		$sql = 'DELETE FROM tbl_enter_payment WHERE notes = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblEnterPaymentMySql 
	 */
	protected function readRow($row){
		$tblEnterPayment = new TblEnterPayment();
		
		$tblEnterPayment->id = $row['id'];
		$tblEnterPayment->colNum = $row['col_num'];
		$tblEnterPayment->hmoId = $row['hmo_id'];
		$tblEnterPayment->timeTrackingId = $row['time_tracking_id'];
		$tblEnterPayment->amountReceived = $row['amount_received'];
		$tblEnterPayment->dateReceived = $row['date_received'];
		$tblEnterPayment->dateReversed = $row['date_reversed'];
		$tblEnterPayment->refNum = $row['ref_num'];
		$tblEnterPayment->mopId = $row['mop_id'];
		$tblEnterPayment->glPosting = $row['gl_posting'];
		$tblEnterPayment->whtTax = $row['wht_tax'];
		$tblEnterPayment->checkDate = $row['check_date'];
		$tblEnterPayment->status = $row['Status'];
		$tblEnterPayment->notes = $row['notes'];

		return $tblEnterPayment;
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
	 * @return TblEnterPaymentMySql 
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