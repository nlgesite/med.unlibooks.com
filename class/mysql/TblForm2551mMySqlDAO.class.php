<?php
/**
 * Class that operate on table 'tbl_form_2551m'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm2551mMySqlDAO implements TblForm2551mDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm2551mMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_2551m';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_2551m ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm2551m primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_2551m WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm2551mMySql tblForm2551m
 	 */
	public function insert($tblForm2551m){
		$sql = 'INSERT INTO tbl_form_2551m (taxable_peroid_id, status, item_1, item_2, item_3, item_4, item_5, item_6, item_7, item_8, item_9, item_10, item_11, item_12, item_13, item_13_specify, ITR_2551M_14A, ITR_2551M_14B, ITR_2551M_14C, ITR_2551M_14D, ITR_2551M_14E, ITR_2551M_15A, ITR_2551M_15B, ITR_2551M_15C, ITR_2551M_15D, ITR_2551M_15E, ITR_2551M_16A, ITR_2551M_16B, ITR_2551M_16C, ITR_2551M_16D, ITR_2551M_16E, ITR_2551M_17A, ITR_2551M_17B, ITR_2551M_17C, ITR_2551M_17D, ITR_2551M_17E, ITR_2551M_18A, ITR_2551M_18B, ITR_2551M_18C, ITR_2551M_18D, ITR_2551M_18E, ITR_2551M_19, ITR_2551M_20A, ITR_2551M_20B, ITR_2551M_21, ITR_2551M_22, ITR_2551M_23A, ITR_2551M_23B, ITR_2551M_23C, ITR_2551M_23D, ITR_2551M_24, ITR_2551M_to_be_refunded, ITR_2551M_to_be_issued) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm2551m->taxablePeroidId);
		$sqlQuery->set($tblForm2551m->status);
		$sqlQuery->set($tblForm2551m->item1);
		$sqlQuery->set($tblForm2551m->item2);
		$sqlQuery->set($tblForm2551m->item3);
		$sqlQuery->set($tblForm2551m->item4);
		$sqlQuery->set($tblForm2551m->item5);
		$sqlQuery->set($tblForm2551m->item6);
		$sqlQuery->set($tblForm2551m->item7);
		$sqlQuery->set($tblForm2551m->item8);
		$sqlQuery->set($tblForm2551m->item9);
		$sqlQuery->set($tblForm2551m->item10);
		$sqlQuery->set($tblForm2551m->item11);
		$sqlQuery->set($tblForm2551m->item12);
		$sqlQuery->set($tblForm2551m->item13);
		$sqlQuery->set($tblForm2551m->item13Specify);
		$sqlQuery->set($tblForm2551m->iTR2551M14A);
		$sqlQuery->set($tblForm2551m->iTR2551M14B);
		$sqlQuery->set($tblForm2551m->iTR2551M14C);
		$sqlQuery->set($tblForm2551m->iTR2551M14D);
		$sqlQuery->set($tblForm2551m->iTR2551M14E);
		$sqlQuery->set($tblForm2551m->iTR2551M15A);
		$sqlQuery->set($tblForm2551m->iTR2551M15B);
		$sqlQuery->set($tblForm2551m->iTR2551M15C);
		$sqlQuery->set($tblForm2551m->iTR2551M15D);
		$sqlQuery->set($tblForm2551m->iTR2551M15E);
		$sqlQuery->set($tblForm2551m->iTR2551M16A);
		$sqlQuery->set($tblForm2551m->iTR2551M16B);
		$sqlQuery->set($tblForm2551m->iTR2551M16C);
		$sqlQuery->set($tblForm2551m->iTR2551M16D);
		$sqlQuery->set($tblForm2551m->iTR2551M16E);
		$sqlQuery->set($tblForm2551m->iTR2551M17A);
		$sqlQuery->set($tblForm2551m->iTR2551M17B);
		$sqlQuery->set($tblForm2551m->iTR2551M17C);
		$sqlQuery->set($tblForm2551m->iTR2551M17D);
		$sqlQuery->set($tblForm2551m->iTR2551M17E);
		$sqlQuery->set($tblForm2551m->iTR2551M18A);
		$sqlQuery->set($tblForm2551m->iTR2551M18B);
		$sqlQuery->set($tblForm2551m->iTR2551M18C);
		$sqlQuery->set($tblForm2551m->iTR2551M18D);
		$sqlQuery->set($tblForm2551m->iTR2551M18E);
		$sqlQuery->set($tblForm2551m->iTR2551M19);
		$sqlQuery->set($tblForm2551m->iTR2551M20A);
		$sqlQuery->set($tblForm2551m->iTR2551M20B);
		$sqlQuery->set($tblForm2551m->iTR2551M21);
		$sqlQuery->set($tblForm2551m->iTR2551M22);
		$sqlQuery->set($tblForm2551m->iTR2551M23A);
		$sqlQuery->set($tblForm2551m->iTR2551M23B);
		$sqlQuery->set($tblForm2551m->iTR2551M23C);
		$sqlQuery->set($tblForm2551m->iTR2551M23D);
		$sqlQuery->set($tblForm2551m->iTR2551M24);
		$sqlQuery->set($tblForm2551m->iTR2551MToBeRefunded);
		$sqlQuery->set($tblForm2551m->iTR2551MToBeIssued);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm2551m->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm2551mMySql tblForm2551m
 	 */
	public function update($tblForm2551m){
		$sql = 'UPDATE tbl_form_2551m SET taxable_peroid_id = ?, status = ?, item_1 = ?, item_2 = ?, item_3 = ?, item_4 = ?, item_5 = ?, item_6 = ?, item_7 = ?, item_8 = ?, item_9 = ?, item_10 = ?, item_11 = ?, item_12 = ?, item_13 = ?, item_13_specify = ?, ITR_2551M_14A = ?, ITR_2551M_14B = ?, ITR_2551M_14C = ?, ITR_2551M_14D = ?, ITR_2551M_14E = ?, ITR_2551M_15A = ?, ITR_2551M_15B = ?, ITR_2551M_15C = ?, ITR_2551M_15D = ?, ITR_2551M_15E = ?, ITR_2551M_16A = ?, ITR_2551M_16B = ?, ITR_2551M_16C = ?, ITR_2551M_16D = ?, ITR_2551M_16E = ?, ITR_2551M_17A = ?, ITR_2551M_17B = ?, ITR_2551M_17C = ?, ITR_2551M_17D = ?, ITR_2551M_17E = ?, ITR_2551M_18A = ?, ITR_2551M_18B = ?, ITR_2551M_18C = ?, ITR_2551M_18D = ?, ITR_2551M_18E = ?, ITR_2551M_19 = ?, ITR_2551M_20A = ?, ITR_2551M_20B = ?, ITR_2551M_21 = ?, ITR_2551M_22 = ?, ITR_2551M_23A = ?, ITR_2551M_23B = ?, ITR_2551M_23C = ?, ITR_2551M_23D = ?, ITR_2551M_24 = ?, ITR_2551M_to_be_refunded = ?, ITR_2551M_to_be_issued = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm2551m->taxablePeroidId);
		$sqlQuery->set($tblForm2551m->status);
		$sqlQuery->set($tblForm2551m->item1);
		$sqlQuery->set($tblForm2551m->item2);
		$sqlQuery->set($tblForm2551m->item3);
		$sqlQuery->set($tblForm2551m->item4);
		$sqlQuery->set($tblForm2551m->item5);
		$sqlQuery->set($tblForm2551m->item6);
		$sqlQuery->set($tblForm2551m->item7);
		$sqlQuery->set($tblForm2551m->item8);
		$sqlQuery->set($tblForm2551m->item9);
		$sqlQuery->set($tblForm2551m->item10);
		$sqlQuery->set($tblForm2551m->item11);
		$sqlQuery->set($tblForm2551m->item12);
		$sqlQuery->set($tblForm2551m->item13);
		$sqlQuery->set($tblForm2551m->item13Specify);
		$sqlQuery->set($tblForm2551m->iTR2551M14A);
		$sqlQuery->set($tblForm2551m->iTR2551M14B);
		$sqlQuery->set($tblForm2551m->iTR2551M14C);
		$sqlQuery->set($tblForm2551m->iTR2551M14D);
		$sqlQuery->set($tblForm2551m->iTR2551M14E);
		$sqlQuery->set($tblForm2551m->iTR2551M15A);
		$sqlQuery->set($tblForm2551m->iTR2551M15B);
		$sqlQuery->set($tblForm2551m->iTR2551M15C);
		$sqlQuery->set($tblForm2551m->iTR2551M15D);
		$sqlQuery->set($tblForm2551m->iTR2551M15E);
		$sqlQuery->set($tblForm2551m->iTR2551M16A);
		$sqlQuery->set($tblForm2551m->iTR2551M16B);
		$sqlQuery->set($tblForm2551m->iTR2551M16C);
		$sqlQuery->set($tblForm2551m->iTR2551M16D);
		$sqlQuery->set($tblForm2551m->iTR2551M16E);
		$sqlQuery->set($tblForm2551m->iTR2551M17A);
		$sqlQuery->set($tblForm2551m->iTR2551M17B);
		$sqlQuery->set($tblForm2551m->iTR2551M17C);
		$sqlQuery->set($tblForm2551m->iTR2551M17D);
		$sqlQuery->set($tblForm2551m->iTR2551M17E);
		$sqlQuery->set($tblForm2551m->iTR2551M18A);
		$sqlQuery->set($tblForm2551m->iTR2551M18B);
		$sqlQuery->set($tblForm2551m->iTR2551M18C);
		$sqlQuery->set($tblForm2551m->iTR2551M18D);
		$sqlQuery->set($tblForm2551m->iTR2551M18E);
		$sqlQuery->set($tblForm2551m->iTR2551M19);
		$sqlQuery->set($tblForm2551m->iTR2551M20A);
		$sqlQuery->set($tblForm2551m->iTR2551M20B);
		$sqlQuery->set($tblForm2551m->iTR2551M21);
		$sqlQuery->set($tblForm2551m->iTR2551M22);
		$sqlQuery->set($tblForm2551m->iTR2551M23A);
		$sqlQuery->set($tblForm2551m->iTR2551M23B);
		$sqlQuery->set($tblForm2551m->iTR2551M23C);
		$sqlQuery->set($tblForm2551m->iTR2551M23D);
		$sqlQuery->set($tblForm2551m->iTR2551M24);
		$sqlQuery->set($tblForm2551m->iTR2551MToBeRefunded);
		$sqlQuery->set($tblForm2551m->iTR2551MToBeIssued);

		$sqlQuery->setNumber($tblForm2551m->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_2551m';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem2($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem4($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem5($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem6($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem7($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem8($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem9($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem10($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem12($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13Specify($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE item_13_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M14A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_14A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M14B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_14B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M14C($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_14C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M14D($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_14D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M14E($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_14E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M15A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_15A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M15B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_15B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M15C($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_15C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M15D($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_15D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M15E($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_15E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M16A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M16B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M16C($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_16C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M16D($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_16D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M16E($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_16E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M17A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_17A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M17B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_17B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M17C($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_17C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M17D($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_17D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M17E($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_17E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M18A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_18A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M18B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_18B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M18C($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_18C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M18D($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_18D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M18E($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_18E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M19($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M20A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_20A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M20B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_20B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M21($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M22($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M23A($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_23A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M23B($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_23B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M23C($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_23C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M23D($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_23D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551M24($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551MToBeRefunded($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_to_be_refunded = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR2551MToBeIssued($value){
		$sql = 'SELECT * FROM tbl_form_2551m WHERE ITR_2551M_to_be_issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem2($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem4($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem5($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem6($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem7($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem8($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem9($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem10($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem12($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13Specify($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE item_13_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M14A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_14A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M14B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_14B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M14C($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_14C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M14D($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_14D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M14E($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_14E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M15A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_15A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M15B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_15B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M15C($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_15C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M15D($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_15D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M15E($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_15E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M16A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M16B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M16C($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_16C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M16D($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_16D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M16E($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_16E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M17A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_17A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M17B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_17B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M17C($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_17C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M17D($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_17D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M17E($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_17E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M18A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_18A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M18B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_18B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M18C($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_18C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M18D($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_18D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M18E($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_18E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M19($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M20A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_20A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M20B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_20B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M21($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M22($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M23A($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_23A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M23B($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_23B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M23C($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_23C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M23D($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_23D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551M24($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551MToBeRefunded($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_to_be_refunded = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR2551MToBeIssued($value){
		$sql = 'DELETE FROM tbl_form_2551m WHERE ITR_2551M_to_be_issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm2551mMySql 
	 */
	protected function readRow($row){
		$tblForm2551m = new TblForm2551m();
		
		$tblForm2551m->id = $row['id'];
		$tblForm2551m->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm2551m->status = $row['status'];
		$tblForm2551m->item1 = $row['item_1'];
		$tblForm2551m->item2 = $row['item_2'];
		$tblForm2551m->item3 = $row['item_3'];
		$tblForm2551m->item4 = $row['item_4'];
		$tblForm2551m->item5 = $row['item_5'];
		$tblForm2551m->item6 = $row['item_6'];
		$tblForm2551m->item7 = $row['item_7'];
		$tblForm2551m->item8 = $row['item_8'];
		$tblForm2551m->item9 = $row['item_9'];
		$tblForm2551m->item10 = $row['item_10'];
		$tblForm2551m->item11 = $row['item_11'];
		$tblForm2551m->item12 = $row['item_12'];
		$tblForm2551m->item13 = $row['item_13'];
		$tblForm2551m->item13Specify = $row['item_13_specify'];
		$tblForm2551m->iTR2551M14A = $row['ITR_2551M_14A'];
		$tblForm2551m->iTR2551M14B = $row['ITR_2551M_14B'];
		$tblForm2551m->iTR2551M14C = $row['ITR_2551M_14C'];
		$tblForm2551m->iTR2551M14D = $row['ITR_2551M_14D'];
		$tblForm2551m->iTR2551M14E = $row['ITR_2551M_14E'];
		$tblForm2551m->iTR2551M15A = $row['ITR_2551M_15A'];
		$tblForm2551m->iTR2551M15B = $row['ITR_2551M_15B'];
		$tblForm2551m->iTR2551M15C = $row['ITR_2551M_15C'];
		$tblForm2551m->iTR2551M15D = $row['ITR_2551M_15D'];
		$tblForm2551m->iTR2551M15E = $row['ITR_2551M_15E'];
		$tblForm2551m->iTR2551M16A = $row['ITR_2551M_16A'];
		$tblForm2551m->iTR2551M16B = $row['ITR_2551M_16B'];
		$tblForm2551m->iTR2551M16C = $row['ITR_2551M_16C'];
		$tblForm2551m->iTR2551M16D = $row['ITR_2551M_16D'];
		$tblForm2551m->iTR2551M16E = $row['ITR_2551M_16E'];
		$tblForm2551m->iTR2551M17A = $row['ITR_2551M_17A'];
		$tblForm2551m->iTR2551M17B = $row['ITR_2551M_17B'];
		$tblForm2551m->iTR2551M17C = $row['ITR_2551M_17C'];
		$tblForm2551m->iTR2551M17D = $row['ITR_2551M_17D'];
		$tblForm2551m->iTR2551M17E = $row['ITR_2551M_17E'];
		$tblForm2551m->iTR2551M18A = $row['ITR_2551M_18A'];
		$tblForm2551m->iTR2551M18B = $row['ITR_2551M_18B'];
		$tblForm2551m->iTR2551M18C = $row['ITR_2551M_18C'];
		$tblForm2551m->iTR2551M18D = $row['ITR_2551M_18D'];
		$tblForm2551m->iTR2551M18E = $row['ITR_2551M_18E'];
		$tblForm2551m->iTR2551M19 = $row['ITR_2551M_19'];
		$tblForm2551m->iTR2551M20A = $row['ITR_2551M_20A'];
		$tblForm2551m->iTR2551M20B = $row['ITR_2551M_20B'];
		$tblForm2551m->iTR2551M21 = $row['ITR_2551M_21'];
		$tblForm2551m->iTR2551M22 = $row['ITR_2551M_22'];
		$tblForm2551m->iTR2551M23A = $row['ITR_2551M_23A'];
		$tblForm2551m->iTR2551M23B = $row['ITR_2551M_23B'];
		$tblForm2551m->iTR2551M23C = $row['ITR_2551M_23C'];
		$tblForm2551m->iTR2551M23D = $row['ITR_2551M_23D'];
		$tblForm2551m->iTR2551M24 = $row['ITR_2551M_24'];
		$tblForm2551m->iTR2551MToBeRefunded = $row['ITR_2551M_to_be_refunded'];
		$tblForm2551m->iTR2551MToBeIssued = $row['ITR_2551M_to_be_issued'];

		return $tblForm2551m;
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
	 * @return TblForm2551mMySql 
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