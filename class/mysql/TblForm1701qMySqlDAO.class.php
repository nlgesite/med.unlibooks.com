<?php
/**
 * Class that operate on table 'tbl_form_1701q'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm1701qMySqlDAO implements TblForm1701qDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm1701qMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_1701q';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_1701q ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm1701q primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_1701q WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1701qMySql tblForm1701q
 	 */
	public function insert($tblForm1701q){
		$sql = 'INSERT INTO tbl_form_1701q (taxable_peroid_id, status, item_1, item_2, item_3, item_4, item_5, item_6, item_7, item_8, item_9, item_10, item_11, item_12, item_13, item_14, item_15, item_16, item_17, item_18, item_19, item_20_atc_1, item_20_atc_2, item_20_atc_3, item_20_compensation, item_20_business, item_20_mixed_income, item_21, item_22_atc_1, item_22_atc_2, item_22_atc_3, item_22_compensation, item_22_business, item_22_mixed_income, item_23_itemized, item_23_osd, item_24_itemized, item_24_osd, item_25, item_25_specify, ITR_1701Q_26A, ITR_1701Q_27A, ITR_1701Q_28A, ITR_1701Q_29A, ITR_1701Q_30A, ITR_1701Q_31A, ITR_1701Q_32A, ITR_1701Q_33A, ITR_1701Q_34A, ITR_1701Q_35A, ITR_1701Q_36A, ITR_1701Q_37A, ITR_1701Q_26B, ITR_1701Q_27B, ITR_1701Q_28B, ITR_1701Q_29B, ITR_1701Q_30B, ITR_1701Q_31B, ITR_1701Q_32B, ITR_1701Q_33B, ITR_1701Q_34B, ITR_1701Q_35B, ITR_1701Q_36B, ITR_1701Q_37B, ITR_1701Q_38A, ITR_1701Q_38B, ITR_1701Q_38C, ITR_1701Q_38D, ITR_1701Q_38E, ITR_1701Q_38F, ITR_1701Q_38G, ITR_1701Q_38H, ITR_1701Q_38I, ITR_1701Q_38J, ITR_1701Q_38K, ITR_1701Q_38L, ITR_1701Q_38M, ITR_1701Q_38N, ITR_1701Q_39A, ITR_1701Q_39B, ITR_1701Q_40A, ITR_1701Q_40B, ITR_1701Q_40C, ITR_1701Q_40D, ITR_1701Q_40E, ITR_1701Q_40F, ITR_1701Q_40G, ITR_1701Q_40H, ITR_1701Q_41A, ITR_1701Q_41B, ITR_1701Q_41C) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1701q->taxablePeroidId);
		$sqlQuery->set($tblForm1701q->status);
		$sqlQuery->set($tblForm1701q->item1);
		$sqlQuery->set($tblForm1701q->item2);
		$sqlQuery->set($tblForm1701q->item3);
		$sqlQuery->set($tblForm1701q->item4);
		$sqlQuery->set($tblForm1701q->item5);
		$sqlQuery->set($tblForm1701q->item6);
		$sqlQuery->set($tblForm1701q->item7);
		$sqlQuery->set($tblForm1701q->item8);
		$sqlQuery->set($tblForm1701q->item9);
		$sqlQuery->set($tblForm1701q->item10);
		$sqlQuery->set($tblForm1701q->item11);
		$sqlQuery->set($tblForm1701q->item12);
		$sqlQuery->set($tblForm1701q->item13);
		$sqlQuery->set($tblForm1701q->item14);
		$sqlQuery->set($tblForm1701q->item15);
		$sqlQuery->set($tblForm1701q->item16);
		$sqlQuery->set($tblForm1701q->item17);
		$sqlQuery->set($tblForm1701q->item18);
		$sqlQuery->set($tblForm1701q->item19);
		$sqlQuery->set($tblForm1701q->item20Atc1);
		$sqlQuery->set($tblForm1701q->item20Atc2);
		$sqlQuery->set($tblForm1701q->item20Atc3);
		$sqlQuery->set($tblForm1701q->item20Compensation);
		$sqlQuery->set($tblForm1701q->item20Business);
		$sqlQuery->set($tblForm1701q->item20MixedIncome);
		$sqlQuery->set($tblForm1701q->item21);
		$sqlQuery->set($tblForm1701q->item22Atc1);
		$sqlQuery->set($tblForm1701q->item22Atc2);
		$sqlQuery->set($tblForm1701q->item22Atc3);
		$sqlQuery->set($tblForm1701q->item22Compensation);
		$sqlQuery->set($tblForm1701q->item22Business);
		$sqlQuery->set($tblForm1701q->item22MixedIncome);
		$sqlQuery->set($tblForm1701q->item23Itemized);
		$sqlQuery->set($tblForm1701q->item23Osd);
		$sqlQuery->set($tblForm1701q->item24Itemized);
		$sqlQuery->set($tblForm1701q->item24Osd);
		$sqlQuery->set($tblForm1701q->item25);
		$sqlQuery->set($tblForm1701q->item25Specify);
		$sqlQuery->set($tblForm1701q->iTR1701Q26A);
		$sqlQuery->set($tblForm1701q->iTR1701Q27A);
		$sqlQuery->set($tblForm1701q->iTR1701Q28A);
		$sqlQuery->set($tblForm1701q->iTR1701Q29A);
		$sqlQuery->set($tblForm1701q->iTR1701Q30A);
		$sqlQuery->set($tblForm1701q->iTR1701Q31A);
		$sqlQuery->set($tblForm1701q->iTR1701Q32A);
		$sqlQuery->set($tblForm1701q->iTR1701Q33A);
		$sqlQuery->set($tblForm1701q->iTR1701Q34A);
		$sqlQuery->set($tblForm1701q->iTR1701Q35A);
		$sqlQuery->set($tblForm1701q->iTR1701Q36A);
		$sqlQuery->set($tblForm1701q->iTR1701Q37A);
		$sqlQuery->set($tblForm1701q->iTR1701Q26B);
		$sqlQuery->set($tblForm1701q->iTR1701Q27B);
		$sqlQuery->set($tblForm1701q->iTR1701Q28B);
		$sqlQuery->set($tblForm1701q->iTR1701Q29B);
		$sqlQuery->set($tblForm1701q->iTR1701Q30B);
		$sqlQuery->set($tblForm1701q->iTR1701Q31B);
		$sqlQuery->set($tblForm1701q->iTR1701Q32B);
		$sqlQuery->set($tblForm1701q->iTR1701Q33B);
		$sqlQuery->set($tblForm1701q->iTR1701Q34B);
		$sqlQuery->set($tblForm1701q->iTR1701Q35B);
		$sqlQuery->set($tblForm1701q->iTR1701Q36B);
		$sqlQuery->set($tblForm1701q->iTR1701Q37B);
		$sqlQuery->set($tblForm1701q->iTR1701Q38A);
		$sqlQuery->set($tblForm1701q->iTR1701Q38B);
		$sqlQuery->set($tblForm1701q->iTR1701Q38C);
		$sqlQuery->set($tblForm1701q->iTR1701Q38D);
		$sqlQuery->set($tblForm1701q->iTR1701Q38E);
		$sqlQuery->set($tblForm1701q->iTR1701Q38F);
		$sqlQuery->set($tblForm1701q->iTR1701Q38G);
		$sqlQuery->set($tblForm1701q->iTR1701Q38H);
		$sqlQuery->set($tblForm1701q->iTR1701Q38I);
		$sqlQuery->set($tblForm1701q->iTR1701Q38J);
		$sqlQuery->set($tblForm1701q->iTR1701Q38K);
		$sqlQuery->set($tblForm1701q->iTR1701Q38L);
		$sqlQuery->set($tblForm1701q->iTR1701Q38M);
		$sqlQuery->set($tblForm1701q->iTR1701Q38N);
		$sqlQuery->set($tblForm1701q->iTR1701Q39A);
		$sqlQuery->set($tblForm1701q->iTR1701Q39B);
		$sqlQuery->set($tblForm1701q->iTR1701Q40A);
		$sqlQuery->set($tblForm1701q->iTR1701Q40B);
		$sqlQuery->set($tblForm1701q->iTR1701Q40C);
		$sqlQuery->set($tblForm1701q->iTR1701Q40D);
		$sqlQuery->set($tblForm1701q->iTR1701Q40E);
		$sqlQuery->set($tblForm1701q->iTR1701Q40F);
		$sqlQuery->set($tblForm1701q->iTR1701Q40G);
		$sqlQuery->set($tblForm1701q->iTR1701Q40H);
		$sqlQuery->set($tblForm1701q->iTR1701Q41A);
		$sqlQuery->set($tblForm1701q->iTR1701Q41B);
		$sqlQuery->set($tblForm1701q->iTR1701Q41C);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm1701q->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1701qMySql tblForm1701q
 	 */
	public function update($tblForm1701q){
		$sql = 'UPDATE tbl_form_1701q SET taxable_peroid_id = ?, status = ?, item_1 = ?, item_2 = ?, item_3 = ?, item_4 = ?, item_5 = ?, item_6 = ?, item_7 = ?, item_8 = ?, item_9 = ?, item_10 = ?, item_11 = ?, item_12 = ?, item_13 = ?, item_14 = ?, item_15 = ?, item_16 = ?, item_17 = ?, item_18 = ?, item_19 = ?, item_20_atc_1 = ?, item_20_atc_2 = ?, item_20_atc_3 = ?, item_20_compensation = ?, item_20_business = ?, item_20_mixed_income = ?, item_21 = ?, item_22_atc_1 = ?, item_22_atc_2 = ?, item_22_atc_3 = ?, item_22_compensation = ?, item_22_business = ?, item_22_mixed_income = ?, item_23_itemized = ?, item_23_osd = ?, item_24_itemized = ?, item_24_osd = ?, item_25 = ?, item_25_specify = ?, ITR_1701Q_26A = ?, ITR_1701Q_27A = ?, ITR_1701Q_28A = ?, ITR_1701Q_29A = ?, ITR_1701Q_30A = ?, ITR_1701Q_31A = ?, ITR_1701Q_32A = ?, ITR_1701Q_33A = ?, ITR_1701Q_34A = ?, ITR_1701Q_35A = ?, ITR_1701Q_36A = ?, ITR_1701Q_37A = ?, ITR_1701Q_26B = ?, ITR_1701Q_27B = ?, ITR_1701Q_28B = ?, ITR_1701Q_29B = ?, ITR_1701Q_30B = ?, ITR_1701Q_31B = ?, ITR_1701Q_32B = ?, ITR_1701Q_33B = ?, ITR_1701Q_34B = ?, ITR_1701Q_35B = ?, ITR_1701Q_36B = ?, ITR_1701Q_37B = ?, ITR_1701Q_38A = ?, ITR_1701Q_38B = ?, ITR_1701Q_38C = ?, ITR_1701Q_38D = ?, ITR_1701Q_38E = ?, ITR_1701Q_38F = ?, ITR_1701Q_38G = ?, ITR_1701Q_38H = ?, ITR_1701Q_38I = ?, ITR_1701Q_38J = ?, ITR_1701Q_38K = ?, ITR_1701Q_38L = ?, ITR_1701Q_38M = ?, ITR_1701Q_38N = ?, ITR_1701Q_39A = ?, ITR_1701Q_39B = ?, ITR_1701Q_40A = ?, ITR_1701Q_40B = ?, ITR_1701Q_40C = ?, ITR_1701Q_40D = ?, ITR_1701Q_40E = ?, ITR_1701Q_40F = ?, ITR_1701Q_40G = ?, ITR_1701Q_40H = ?, ITR_1701Q_41A = ?, ITR_1701Q_41B = ?, ITR_1701Q_41C = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1701q->taxablePeroidId);
		$sqlQuery->set($tblForm1701q->status);
		$sqlQuery->set($tblForm1701q->item1);
		$sqlQuery->set($tblForm1701q->item2);
		$sqlQuery->set($tblForm1701q->item3);
		$sqlQuery->set($tblForm1701q->item4);
		$sqlQuery->set($tblForm1701q->item5);
		$sqlQuery->set($tblForm1701q->item6);
		$sqlQuery->set($tblForm1701q->item7);
		$sqlQuery->set($tblForm1701q->item8);
		$sqlQuery->set($tblForm1701q->item9);
		$sqlQuery->set($tblForm1701q->item10);
		$sqlQuery->set($tblForm1701q->item11);
		$sqlQuery->set($tblForm1701q->item12);
		$sqlQuery->set($tblForm1701q->item13);
		$sqlQuery->set($tblForm1701q->item14);
		$sqlQuery->set($tblForm1701q->item15);
		$sqlQuery->set($tblForm1701q->item16);
		$sqlQuery->set($tblForm1701q->item17);
		$sqlQuery->set($tblForm1701q->item18);
		$sqlQuery->set($tblForm1701q->item19);
		$sqlQuery->set($tblForm1701q->item20Atc1);
		$sqlQuery->set($tblForm1701q->item20Atc2);
		$sqlQuery->set($tblForm1701q->item20Atc3);
		$sqlQuery->set($tblForm1701q->item20Compensation);
		$sqlQuery->set($tblForm1701q->item20Business);
		$sqlQuery->set($tblForm1701q->item20MixedIncome);
		$sqlQuery->set($tblForm1701q->item21);
		$sqlQuery->set($tblForm1701q->item22Atc1);
		$sqlQuery->set($tblForm1701q->item22Atc2);
		$sqlQuery->set($tblForm1701q->item22Atc3);
		$sqlQuery->set($tblForm1701q->item22Compensation);
		$sqlQuery->set($tblForm1701q->item22Business);
		$sqlQuery->set($tblForm1701q->item22MixedIncome);
		$sqlQuery->set($tblForm1701q->item23Itemized);
		$sqlQuery->set($tblForm1701q->item23Osd);
		$sqlQuery->set($tblForm1701q->item24Itemized);
		$sqlQuery->set($tblForm1701q->item24Osd);
		$sqlQuery->set($tblForm1701q->item25);
		$sqlQuery->set($tblForm1701q->item25Specify);
		$sqlQuery->set($tblForm1701q->iTR1701Q26A);
		$sqlQuery->set($tblForm1701q->iTR1701Q27A);
		$sqlQuery->set($tblForm1701q->iTR1701Q28A);
		$sqlQuery->set($tblForm1701q->iTR1701Q29A);
		$sqlQuery->set($tblForm1701q->iTR1701Q30A);
		$sqlQuery->set($tblForm1701q->iTR1701Q31A);
		$sqlQuery->set($tblForm1701q->iTR1701Q32A);
		$sqlQuery->set($tblForm1701q->iTR1701Q33A);
		$sqlQuery->set($tblForm1701q->iTR1701Q34A);
		$sqlQuery->set($tblForm1701q->iTR1701Q35A);
		$sqlQuery->set($tblForm1701q->iTR1701Q36A);
		$sqlQuery->set($tblForm1701q->iTR1701Q37A);
		$sqlQuery->set($tblForm1701q->iTR1701Q26B);
		$sqlQuery->set($tblForm1701q->iTR1701Q27B);
		$sqlQuery->set($tblForm1701q->iTR1701Q28B);
		$sqlQuery->set($tblForm1701q->iTR1701Q29B);
		$sqlQuery->set($tblForm1701q->iTR1701Q30B);
		$sqlQuery->set($tblForm1701q->iTR1701Q31B);
		$sqlQuery->set($tblForm1701q->iTR1701Q32B);
		$sqlQuery->set($tblForm1701q->iTR1701Q33B);
		$sqlQuery->set($tblForm1701q->iTR1701Q34B);
		$sqlQuery->set($tblForm1701q->iTR1701Q35B);
		$sqlQuery->set($tblForm1701q->iTR1701Q36B);
		$sqlQuery->set($tblForm1701q->iTR1701Q37B);
		$sqlQuery->set($tblForm1701q->iTR1701Q38A);
		$sqlQuery->set($tblForm1701q->iTR1701Q38B);
		$sqlQuery->set($tblForm1701q->iTR1701Q38C);
		$sqlQuery->set($tblForm1701q->iTR1701Q38D);
		$sqlQuery->set($tblForm1701q->iTR1701Q38E);
		$sqlQuery->set($tblForm1701q->iTR1701Q38F);
		$sqlQuery->set($tblForm1701q->iTR1701Q38G);
		$sqlQuery->set($tblForm1701q->iTR1701Q38H);
		$sqlQuery->set($tblForm1701q->iTR1701Q38I);
		$sqlQuery->set($tblForm1701q->iTR1701Q38J);
		$sqlQuery->set($tblForm1701q->iTR1701Q38K);
		$sqlQuery->set($tblForm1701q->iTR1701Q38L);
		$sqlQuery->set($tblForm1701q->iTR1701Q38M);
		$sqlQuery->set($tblForm1701q->iTR1701Q38N);
		$sqlQuery->set($tblForm1701q->iTR1701Q39A);
		$sqlQuery->set($tblForm1701q->iTR1701Q39B);
		$sqlQuery->set($tblForm1701q->iTR1701Q40A);
		$sqlQuery->set($tblForm1701q->iTR1701Q40B);
		$sqlQuery->set($tblForm1701q->iTR1701Q40C);
		$sqlQuery->set($tblForm1701q->iTR1701Q40D);
		$sqlQuery->set($tblForm1701q->iTR1701Q40E);
		$sqlQuery->set($tblForm1701q->iTR1701Q40F);
		$sqlQuery->set($tblForm1701q->iTR1701Q40G);
		$sqlQuery->set($tblForm1701q->iTR1701Q40H);
		$sqlQuery->set($tblForm1701q->iTR1701Q41A);
		$sqlQuery->set($tblForm1701q->iTR1701Q41B);
		$sqlQuery->set($tblForm1701q->iTR1701Q41C);

		$sqlQuery->setNumber($tblForm1701q->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_1701q';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem2($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem4($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem5($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem6($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem7($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem8($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem9($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem10($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem12($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem14($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem15($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem16($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_16 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem17($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem18($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem19($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20Atc1($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_20_atc_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20Atc2($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_20_atc_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20Atc3($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_20_atc_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20Compensation($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_20_compensation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20Business($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_20_business = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20MixedIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_20_mixed_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem21($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22Atc1($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_22_atc_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22Atc2($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_22_atc_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22Atc3($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_22_atc_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22Compensation($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_22_compensation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22Business($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_22_business = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22MixedIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_22_mixed_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem23Itemized($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_23_itemized = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem23Osd($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_23_osd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem24Itemized($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_24_itemized = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem24Osd($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_24_osd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem25($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem25Specify($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE item_25_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q26A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_26A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q27A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_27A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q28A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_28A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q29A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_29A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q30A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_30A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q31A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_31A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q32A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_32A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q33A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_33A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q34A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_34A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q35A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_35A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q36A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_36A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q37A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_37A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q26B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_26B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q27B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_27B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q28B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_28B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q29B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_29B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q30B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_30B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q31B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_31B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q32B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_32B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q33B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_33B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q34B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_34B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q35B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_35B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q36B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_36B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q37B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_37B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38C($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38D($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38E($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38F($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38G($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38H($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38I($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38I = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38J($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38J = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38K($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38K = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38L($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38L = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38M($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38M = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q38N($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_38N = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q39A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_39A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q39B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_39B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40C($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40D($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40E($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40F($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40G($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q40H($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_40H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q41A($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_41A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q41B($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_41B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByITR1701Q41C($value){
		$sql = 'SELECT * FROM tbl_form_1701q WHERE ITR_1701Q_41C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem2($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem4($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem5($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem6($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem7($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem8($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem9($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem10($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem12($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem14($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem15($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem16($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_16 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem17($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem18($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem19($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20Atc1($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_20_atc_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20Atc2($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_20_atc_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20Atc3($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_20_atc_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20Compensation($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_20_compensation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20Business($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_20_business = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20MixedIncome($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_20_mixed_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem21($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22Atc1($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_22_atc_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22Atc2($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_22_atc_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22Atc3($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_22_atc_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22Compensation($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_22_compensation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22Business($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_22_business = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22MixedIncome($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_22_mixed_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem23Itemized($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_23_itemized = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem23Osd($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_23_osd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem24Itemized($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_24_itemized = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem24Osd($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_24_osd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem25($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem25Specify($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE item_25_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q26A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_26A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q27A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_27A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q28A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_28A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q29A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_29A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q30A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_30A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q31A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_31A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q32A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_32A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q33A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_33A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q34A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_34A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q35A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_35A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q36A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_36A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q37A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_37A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q26B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_26B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q27B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_27B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q28B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_28B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q29B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_29B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q30B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_30B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q31B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_31B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q32B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_32B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q33B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_33B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q34B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_34B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q35B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_35B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q36B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_36B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q37B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_37B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38C($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38D($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38E($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38F($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38G($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38H($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38I($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38I = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38J($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38J = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38K($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38K = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38L($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38L = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38M($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38M = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q38N($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_38N = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q39A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_39A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q39B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_39B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40C($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40D($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40E($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40F($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40G($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q40H($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_40H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q41A($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_41A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q41B($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_41B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByITR1701Q41C($value){
		$sql = 'DELETE FROM tbl_form_1701q WHERE ITR_1701Q_41C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm1701qMySql 
	 */
	protected function readRow($row){
		$tblForm1701q = new TblForm1701q();
		
		$tblForm1701q->id = $row['id'];
		$tblForm1701q->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm1701q->status = $row['status'];
		$tblForm1701q->item1 = $row['item_1'];
		$tblForm1701q->item2 = $row['item_2'];
		$tblForm1701q->item3 = $row['item_3'];
		$tblForm1701q->item4 = $row['item_4'];
		$tblForm1701q->item5 = $row['item_5'];
		$tblForm1701q->item6 = $row['item_6'];
		$tblForm1701q->item7 = $row['item_7'];
		$tblForm1701q->item8 = $row['item_8'];
		$tblForm1701q->item9 = $row['item_9'];
		$tblForm1701q->item10 = $row['item_10'];
		$tblForm1701q->item11 = $row['item_11'];
		$tblForm1701q->item12 = $row['item_12'];
		$tblForm1701q->item13 = $row['item_13'];
		$tblForm1701q->item14 = $row['item_14'];
		$tblForm1701q->item15 = $row['item_15'];
		$tblForm1701q->item16 = $row['item_16'];
		$tblForm1701q->item17 = $row['item_17'];
		$tblForm1701q->item18 = $row['item_18'];
		$tblForm1701q->item19 = $row['item_19'];
		$tblForm1701q->item20Atc1 = $row['item_20_atc_1'];
		$tblForm1701q->item20Atc2 = $row['item_20_atc_2'];
		$tblForm1701q->item20Atc3 = $row['item_20_atc_3'];
		$tblForm1701q->item20Compensation = $row['item_20_compensation'];
		$tblForm1701q->item20Business = $row['item_20_business'];
		$tblForm1701q->item20MixedIncome = $row['item_20_mixed_income'];
		$tblForm1701q->item21 = $row['item_21'];
		$tblForm1701q->item22Atc1 = $row['item_22_atc_1'];
		$tblForm1701q->item22Atc2 = $row['item_22_atc_2'];
		$tblForm1701q->item22Atc3 = $row['item_22_atc_3'];
		$tblForm1701q->item22Compensation = $row['item_22_compensation'];
		$tblForm1701q->item22Business = $row['item_22_business'];
		$tblForm1701q->item22MixedIncome = $row['item_22_mixed_income'];
		$tblForm1701q->item23Itemized = $row['item_23_itemized'];
		$tblForm1701q->item23Osd = $row['item_23_osd'];
		$tblForm1701q->item24Itemized = $row['item_24_itemized'];
		$tblForm1701q->item24Osd = $row['item_24_osd'];
		$tblForm1701q->item25 = $row['item_25'];
		$tblForm1701q->item25Specify = $row['item_25_specify'];
		$tblForm1701q->iTR1701Q26A = $row['ITR_1701Q_26A'];
		$tblForm1701q->iTR1701Q27A = $row['ITR_1701Q_27A'];
		$tblForm1701q->iTR1701Q28A = $row['ITR_1701Q_28A'];
		$tblForm1701q->iTR1701Q29A = $row['ITR_1701Q_29A'];
		$tblForm1701q->iTR1701Q30A = $row['ITR_1701Q_30A'];
		$tblForm1701q->iTR1701Q31A = $row['ITR_1701Q_31A'];
		$tblForm1701q->iTR1701Q32A = $row['ITR_1701Q_32A'];
		$tblForm1701q->iTR1701Q33A = $row['ITR_1701Q_33A'];
		$tblForm1701q->iTR1701Q34A = $row['ITR_1701Q_34A'];
		$tblForm1701q->iTR1701Q35A = $row['ITR_1701Q_35A'];
		$tblForm1701q->iTR1701Q36A = $row['ITR_1701Q_36A'];
		$tblForm1701q->iTR1701Q37A = $row['ITR_1701Q_37A'];
		$tblForm1701q->iTR1701Q26B = $row['ITR_1701Q_26B'];
		$tblForm1701q->iTR1701Q27B = $row['ITR_1701Q_27B'];
		$tblForm1701q->iTR1701Q28B = $row['ITR_1701Q_28B'];
		$tblForm1701q->iTR1701Q29B = $row['ITR_1701Q_29B'];
		$tblForm1701q->iTR1701Q30B = $row['ITR_1701Q_30B'];
		$tblForm1701q->iTR1701Q31B = $row['ITR_1701Q_31B'];
		$tblForm1701q->iTR1701Q32B = $row['ITR_1701Q_32B'];
		$tblForm1701q->iTR1701Q33B = $row['ITR_1701Q_33B'];
		$tblForm1701q->iTR1701Q34B = $row['ITR_1701Q_34B'];
		$tblForm1701q->iTR1701Q35B = $row['ITR_1701Q_35B'];
		$tblForm1701q->iTR1701Q36B = $row['ITR_1701Q_36B'];
		$tblForm1701q->iTR1701Q37B = $row['ITR_1701Q_37B'];
		$tblForm1701q->iTR1701Q38A = $row['ITR_1701Q_38A'];
		$tblForm1701q->iTR1701Q38B = $row['ITR_1701Q_38B'];
		$tblForm1701q->iTR1701Q38C = $row['ITR_1701Q_38C'];
		$tblForm1701q->iTR1701Q38D = $row['ITR_1701Q_38D'];
		$tblForm1701q->iTR1701Q38E = $row['ITR_1701Q_38E'];
		$tblForm1701q->iTR1701Q38F = $row['ITR_1701Q_38F'];
		$tblForm1701q->iTR1701Q38G = $row['ITR_1701Q_38G'];
		$tblForm1701q->iTR1701Q38H = $row['ITR_1701Q_38H'];
		$tblForm1701q->iTR1701Q38I = $row['ITR_1701Q_38I'];
		$tblForm1701q->iTR1701Q38J = $row['ITR_1701Q_38J'];
		$tblForm1701q->iTR1701Q38K = $row['ITR_1701Q_38K'];
		$tblForm1701q->iTR1701Q38L = $row['ITR_1701Q_38L'];
		$tblForm1701q->iTR1701Q38M = $row['ITR_1701Q_38M'];
		$tblForm1701q->iTR1701Q38N = $row['ITR_1701Q_38N'];
		$tblForm1701q->iTR1701Q39A = $row['ITR_1701Q_39A'];
		$tblForm1701q->iTR1701Q39B = $row['ITR_1701Q_39B'];
		$tblForm1701q->iTR1701Q40A = $row['ITR_1701Q_40A'];
		$tblForm1701q->iTR1701Q40B = $row['ITR_1701Q_40B'];
		$tblForm1701q->iTR1701Q40C = $row['ITR_1701Q_40C'];
		$tblForm1701q->iTR1701Q40D = $row['ITR_1701Q_40D'];
		$tblForm1701q->iTR1701Q40E = $row['ITR_1701Q_40E'];
		$tblForm1701q->iTR1701Q40F = $row['ITR_1701Q_40F'];
		$tblForm1701q->iTR1701Q40G = $row['ITR_1701Q_40G'];
		$tblForm1701q->iTR1701Q40H = $row['ITR_1701Q_40H'];
		$tblForm1701q->iTR1701Q41A = $row['ITR_1701Q_41A'];
		$tblForm1701q->iTR1701Q41B = $row['ITR_1701Q_41B'];
		$tblForm1701q->iTR1701Q41C = $row['ITR_1701Q_41C'];

		return $tblForm1701q;
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
	 * @return TblForm1701qMySql 
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