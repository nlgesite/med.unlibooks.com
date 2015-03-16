<?php
/**
 * Class that operate on table 'tbl_form_2550q'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm2550qMySqlDAO implements TblForm2550qDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm2550qMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_2550q';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_2550q ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm2550q primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_2550q WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm2550qMySql tblForm2550q
 	 */
	public function insert($tblForm2550q){
		$sql = 'INSERT INTO tbl_form_2550q (taxable_peroid_id, status, year_ended, month, year, item_2, item_3_from, item_3_to, item_4, item_5, item_6, item_7, item_8, item_9, item_10, item_11, item_12, item_13, item_14, item_14_specify, part_2_item_15A, part_2_item_15B, part_2_item_16A, part_2_item_16B, part_2_item_17, part_2_item_18, part_2_item_19A, part_2_item_19B, part_2_item_20A, part_2_item_20B, part_2_item_20C, part_2_item_20D, part_2_item_20E, part_2_item_20F, part_2_item_21A, part_2_item_21B, part_2_item_21C, part_2_item_21D, part_2_item_21E, part_2_item_21F, part_2_item_21G, part_2_item_21H, part_2_item_21I, part_2_item_21J, part_2_item_21K, part_2_item_21L, part_2_item_21M, part_2_item_21N, part_2_item_21O, part_2_item_21P, part_2_item_22, part_2_item_23A, part_2_item_23B, part_2_item_23C, part_2_item_23D, part_2_item_23E, part_2_item_23F, part_2_item_24, part_2_item_25, part_2_item_26A, part_2_item_26B, part_2_item_26C, part_2_item_26D, part_2_item_26E, part_2_item_26F, part_2_item_26G, part_2_item_26H, part_2_item_27, part_2_item_28A, part_2_item_28B, part_2_item_28C, part_2_item_28D, part_2_item_29) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm2550q->taxablePeroidId);
		$sqlQuery->set($tblForm2550q->status);
		$sqlQuery->set($tblForm2550q->yearEnded);
		$sqlQuery->set($tblForm2550q->month);
		$sqlQuery->set($tblForm2550q->year);
		$sqlQuery->set($tblForm2550q->item2);
		$sqlQuery->set($tblForm2550q->item3From);
		$sqlQuery->set($tblForm2550q->item3To);
		$sqlQuery->set($tblForm2550q->item4);
		$sqlQuery->set($tblForm2550q->item5);
		$sqlQuery->set($tblForm2550q->item6);
		$sqlQuery->set($tblForm2550q->item7);
		$sqlQuery->set($tblForm2550q->item8);
		$sqlQuery->set($tblForm2550q->item9);
		$sqlQuery->set($tblForm2550q->item10);
		$sqlQuery->set($tblForm2550q->item11);
		$sqlQuery->set($tblForm2550q->item12);
		$sqlQuery->set($tblForm2550q->item13);
		$sqlQuery->set($tblForm2550q->item14);
		$sqlQuery->set($tblForm2550q->item14Specify);
		$sqlQuery->set($tblForm2550q->part2Item15A);
		$sqlQuery->set($tblForm2550q->part2Item15B);
		$sqlQuery->set($tblForm2550q->part2Item16A);
		$sqlQuery->set($tblForm2550q->part2Item16B);
		$sqlQuery->set($tblForm2550q->part2Item17);
		$sqlQuery->set($tblForm2550q->part2Item18);
		$sqlQuery->set($tblForm2550q->part2Item19A);
		$sqlQuery->set($tblForm2550q->part2Item19B);
		$sqlQuery->set($tblForm2550q->part2Item20A);
		$sqlQuery->set($tblForm2550q->part2Item20B);
		$sqlQuery->set($tblForm2550q->part2Item20C);
		$sqlQuery->set($tblForm2550q->part2Item20D);
		$sqlQuery->set($tblForm2550q->part2Item20E);
		$sqlQuery->set($tblForm2550q->part2Item20F);
		$sqlQuery->set($tblForm2550q->part2Item21A);
		$sqlQuery->set($tblForm2550q->part2Item21B);
		$sqlQuery->set($tblForm2550q->part2Item21C);
		$sqlQuery->set($tblForm2550q->part2Item21D);
		$sqlQuery->set($tblForm2550q->part2Item21E);
		$sqlQuery->set($tblForm2550q->part2Item21F);
		$sqlQuery->set($tblForm2550q->part2Item21G);
		$sqlQuery->set($tblForm2550q->part2Item21H);
		$sqlQuery->set($tblForm2550q->part2Item21I);
		$sqlQuery->set($tblForm2550q->part2Item21J);
		$sqlQuery->set($tblForm2550q->part2Item21K);
		$sqlQuery->set($tblForm2550q->part2Item21L);
		$sqlQuery->set($tblForm2550q->part2Item21M);
		$sqlQuery->set($tblForm2550q->part2Item21N);
		$sqlQuery->set($tblForm2550q->part2Item21O);
		$sqlQuery->set($tblForm2550q->part2Item21P);
		$sqlQuery->set($tblForm2550q->part2Item22);
		$sqlQuery->set($tblForm2550q->part2Item23A);
		$sqlQuery->set($tblForm2550q->part2Item23B);
		$sqlQuery->set($tblForm2550q->part2Item23C);
		$sqlQuery->set($tblForm2550q->part2Item23D);
		$sqlQuery->set($tblForm2550q->part2Item23E);
		$sqlQuery->set($tblForm2550q->part2Item23F);
		$sqlQuery->set($tblForm2550q->part2Item24);
		$sqlQuery->set($tblForm2550q->part2Item25);
		$sqlQuery->set($tblForm2550q->part2Item26A);
		$sqlQuery->set($tblForm2550q->part2Item26B);
		$sqlQuery->set($tblForm2550q->part2Item26C);
		$sqlQuery->set($tblForm2550q->part2Item26D);
		$sqlQuery->set($tblForm2550q->part2Item26E);
		$sqlQuery->set($tblForm2550q->part2Item26F);
		$sqlQuery->set($tblForm2550q->part2Item26G);
		$sqlQuery->set($tblForm2550q->part2Item26H);
		$sqlQuery->set($tblForm2550q->part2Item27);
		$sqlQuery->set($tblForm2550q->part2Item28A);
		$sqlQuery->set($tblForm2550q->part2Item28B);
		$sqlQuery->set($tblForm2550q->part2Item28C);
		$sqlQuery->set($tblForm2550q->part2Item28D);
		$sqlQuery->set($tblForm2550q->part2Item29);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm2550q->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm2550qMySql tblForm2550q
 	 */
	public function update($tblForm2550q){
		$sql = 'UPDATE tbl_form_2550q SET taxable_peroid_id = ?, status = ?, year_ended = ?, month = ?, year = ?, item_2 = ?, item_3_from = ?, item_3_to = ?, item_4 = ?, item_5 = ?, item_6 = ?, item_7 = ?, item_8 = ?, item_9 = ?, item_10 = ?, item_11 = ?, item_12 = ?, item_13 = ?, item_14 = ?, item_14_specify = ?, part_2_item_15A = ?, part_2_item_15B = ?, part_2_item_16A = ?, part_2_item_16B = ?, part_2_item_17 = ?, part_2_item_18 = ?, part_2_item_19A = ?, part_2_item_19B = ?, part_2_item_20A = ?, part_2_item_20B = ?, part_2_item_20C = ?, part_2_item_20D = ?, part_2_item_20E = ?, part_2_item_20F = ?, part_2_item_21A = ?, part_2_item_21B = ?, part_2_item_21C = ?, part_2_item_21D = ?, part_2_item_21E = ?, part_2_item_21F = ?, part_2_item_21G = ?, part_2_item_21H = ?, part_2_item_21I = ?, part_2_item_21J = ?, part_2_item_21K = ?, part_2_item_21L = ?, part_2_item_21M = ?, part_2_item_21N = ?, part_2_item_21O = ?, part_2_item_21P = ?, part_2_item_22 = ?, part_2_item_23A = ?, part_2_item_23B = ?, part_2_item_23C = ?, part_2_item_23D = ?, part_2_item_23E = ?, part_2_item_23F = ?, part_2_item_24 = ?, part_2_item_25 = ?, part_2_item_26A = ?, part_2_item_26B = ?, part_2_item_26C = ?, part_2_item_26D = ?, part_2_item_26E = ?, part_2_item_26F = ?, part_2_item_26G = ?, part_2_item_26H = ?, part_2_item_27 = ?, part_2_item_28A = ?, part_2_item_28B = ?, part_2_item_28C = ?, part_2_item_28D = ?, part_2_item_29 = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm2550q->taxablePeroidId);
		$sqlQuery->set($tblForm2550q->status);
		$sqlQuery->set($tblForm2550q->yearEnded);
		$sqlQuery->set($tblForm2550q->month);
		$sqlQuery->set($tblForm2550q->year);
		$sqlQuery->set($tblForm2550q->item2);
		$sqlQuery->set($tblForm2550q->item3From);
		$sqlQuery->set($tblForm2550q->item3To);
		$sqlQuery->set($tblForm2550q->item4);
		$sqlQuery->set($tblForm2550q->item5);
		$sqlQuery->set($tblForm2550q->item6);
		$sqlQuery->set($tblForm2550q->item7);
		$sqlQuery->set($tblForm2550q->item8);
		$sqlQuery->set($tblForm2550q->item9);
		$sqlQuery->set($tblForm2550q->item10);
		$sqlQuery->set($tblForm2550q->item11);
		$sqlQuery->set($tblForm2550q->item12);
		$sqlQuery->set($tblForm2550q->item13);
		$sqlQuery->set($tblForm2550q->item14);
		$sqlQuery->set($tblForm2550q->item14Specify);
		$sqlQuery->set($tblForm2550q->part2Item15A);
		$sqlQuery->set($tblForm2550q->part2Item15B);
		$sqlQuery->set($tblForm2550q->part2Item16A);
		$sqlQuery->set($tblForm2550q->part2Item16B);
		$sqlQuery->set($tblForm2550q->part2Item17);
		$sqlQuery->set($tblForm2550q->part2Item18);
		$sqlQuery->set($tblForm2550q->part2Item19A);
		$sqlQuery->set($tblForm2550q->part2Item19B);
		$sqlQuery->set($tblForm2550q->part2Item20A);
		$sqlQuery->set($tblForm2550q->part2Item20B);
		$sqlQuery->set($tblForm2550q->part2Item20C);
		$sqlQuery->set($tblForm2550q->part2Item20D);
		$sqlQuery->set($tblForm2550q->part2Item20E);
		$sqlQuery->set($tblForm2550q->part2Item20F);
		$sqlQuery->set($tblForm2550q->part2Item21A);
		$sqlQuery->set($tblForm2550q->part2Item21B);
		$sqlQuery->set($tblForm2550q->part2Item21C);
		$sqlQuery->set($tblForm2550q->part2Item21D);
		$sqlQuery->set($tblForm2550q->part2Item21E);
		$sqlQuery->set($tblForm2550q->part2Item21F);
		$sqlQuery->set($tblForm2550q->part2Item21G);
		$sqlQuery->set($tblForm2550q->part2Item21H);
		$sqlQuery->set($tblForm2550q->part2Item21I);
		$sqlQuery->set($tblForm2550q->part2Item21J);
		$sqlQuery->set($tblForm2550q->part2Item21K);
		$sqlQuery->set($tblForm2550q->part2Item21L);
		$sqlQuery->set($tblForm2550q->part2Item21M);
		$sqlQuery->set($tblForm2550q->part2Item21N);
		$sqlQuery->set($tblForm2550q->part2Item21O);
		$sqlQuery->set($tblForm2550q->part2Item21P);
		$sqlQuery->set($tblForm2550q->part2Item22);
		$sqlQuery->set($tblForm2550q->part2Item23A);
		$sqlQuery->set($tblForm2550q->part2Item23B);
		$sqlQuery->set($tblForm2550q->part2Item23C);
		$sqlQuery->set($tblForm2550q->part2Item23D);
		$sqlQuery->set($tblForm2550q->part2Item23E);
		$sqlQuery->set($tblForm2550q->part2Item23F);
		$sqlQuery->set($tblForm2550q->part2Item24);
		$sqlQuery->set($tblForm2550q->part2Item25);
		$sqlQuery->set($tblForm2550q->part2Item26A);
		$sqlQuery->set($tblForm2550q->part2Item26B);
		$sqlQuery->set($tblForm2550q->part2Item26C);
		$sqlQuery->set($tblForm2550q->part2Item26D);
		$sqlQuery->set($tblForm2550q->part2Item26E);
		$sqlQuery->set($tblForm2550q->part2Item26F);
		$sqlQuery->set($tblForm2550q->part2Item26G);
		$sqlQuery->set($tblForm2550q->part2Item26H);
		$sqlQuery->set($tblForm2550q->part2Item27);
		$sqlQuery->set($tblForm2550q->part2Item28A);
		$sqlQuery->set($tblForm2550q->part2Item28B);
		$sqlQuery->set($tblForm2550q->part2Item28C);
		$sqlQuery->set($tblForm2550q->part2Item28D);
		$sqlQuery->set($tblForm2550q->part2Item29);

		$sqlQuery->setNumber($tblForm2550q->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_2550q';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByYearEnded($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE year_ended = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMonth($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByYear($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem2($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3From($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_3_from = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3To($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_3_to = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem4($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem5($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem6($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem7($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem8($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem9($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem10($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem12($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem14($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem14Specify($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE item_14_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item15A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_15A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item15B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_15B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item19A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_19A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item19B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_19B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_20A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_20B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20C($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_20C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20D($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_20D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20E($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_20E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20F($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_20F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21C($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21D($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21E($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21F($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21G($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21H($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21I($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21I = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21J($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21J = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21K($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21K = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21L($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21L = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21M($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21M = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21N($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21N = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21O($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21O = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21P($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_21P = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item22($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_23A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_23B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23C($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_23C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23D($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_23D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23E($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_23E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23F($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_23F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item24($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item25($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26C($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26D($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26E($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26F($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26G($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26H($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_26H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item27($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_27 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item28A($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_28A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item28B($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_28B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item28C($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_28C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item28D($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_28D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item29($value){
		$sql = 'SELECT * FROM tbl_form_2550q WHERE part_2_item_29 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByYearEnded($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE year_ended = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMonth($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByYear($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem2($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3From($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_3_from = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3To($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_3_to = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem4($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem5($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem6($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem7($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem8($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem9($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem10($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem12($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem14($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem14Specify($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE item_14_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item15A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_15A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item15B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_15B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item19A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_19A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item19B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_19B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_20A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_20B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20C($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_20C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20D($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_20D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20E($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_20E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20F($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_20F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21C($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21D($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21E($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21F($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21G($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21H($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21I($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21I = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21J($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21J = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21K($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21K = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21L($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21L = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21M($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21M = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21N($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21N = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21O($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21O = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21P($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_21P = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item22($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_23A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_23B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23C($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_23C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23D($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_23D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23E($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_23E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23F($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_23F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item24($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item25($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26C($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26D($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26E($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26F($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26G($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26H($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_26H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item27($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_27 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item28A($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_28A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item28B($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_28B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item28C($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_28C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item28D($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_28D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item29($value){
		$sql = 'DELETE FROM tbl_form_2550q WHERE part_2_item_29 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm2550qMySql 
	 */
	protected function readRow($row){
		$tblForm2550q = new TblForm2550q();
		
		$tblForm2550q->id = $row['id'];
		$tblForm2550q->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm2550q->status = $row['status'];
		$tblForm2550q->yearEnded = $row['year_ended'];
		$tblForm2550q->month = $row['month'];
		$tblForm2550q->year = $row['year'];
		$tblForm2550q->item2 = $row['item_2'];
		$tblForm2550q->item3From = $row['item_3_from'];
		$tblForm2550q->item3To = $row['item_3_to'];
		$tblForm2550q->item4 = $row['item_4'];
		$tblForm2550q->item5 = $row['item_5'];
		$tblForm2550q->item6 = $row['item_6'];
		$tblForm2550q->item7 = $row['item_7'];
		$tblForm2550q->item8 = $row['item_8'];
		$tblForm2550q->item9 = $row['item_9'];
		$tblForm2550q->item10 = $row['item_10'];
		$tblForm2550q->item11 = $row['item_11'];
		$tblForm2550q->item12 = $row['item_12'];
		$tblForm2550q->item13 = $row['item_13'];
		$tblForm2550q->item14 = $row['item_14'];
		$tblForm2550q->item14Specify = $row['item_14_specify'];
		$tblForm2550q->part2Item15A = $row['part_2_item_15A'];
		$tblForm2550q->part2Item15B = $row['part_2_item_15B'];
		$tblForm2550q->part2Item16A = $row['part_2_item_16A'];
		$tblForm2550q->part2Item16B = $row['part_2_item_16B'];
		$tblForm2550q->part2Item17 = $row['part_2_item_17'];
		$tblForm2550q->part2Item18 = $row['part_2_item_18'];
		$tblForm2550q->part2Item19A = $row['part_2_item_19A'];
		$tblForm2550q->part2Item19B = $row['part_2_item_19B'];
		$tblForm2550q->part2Item20A = $row['part_2_item_20A'];
		$tblForm2550q->part2Item20B = $row['part_2_item_20B'];
		$tblForm2550q->part2Item20C = $row['part_2_item_20C'];
		$tblForm2550q->part2Item20D = $row['part_2_item_20D'];
		$tblForm2550q->part2Item20E = $row['part_2_item_20E'];
		$tblForm2550q->part2Item20F = $row['part_2_item_20F'];
		$tblForm2550q->part2Item21A = $row['part_2_item_21A'];
		$tblForm2550q->part2Item21B = $row['part_2_item_21B'];
		$tblForm2550q->part2Item21C = $row['part_2_item_21C'];
		$tblForm2550q->part2Item21D = $row['part_2_item_21D'];
		$tblForm2550q->part2Item21E = $row['part_2_item_21E'];
		$tblForm2550q->part2Item21F = $row['part_2_item_21F'];
		$tblForm2550q->part2Item21G = $row['part_2_item_21G'];
		$tblForm2550q->part2Item21H = $row['part_2_item_21H'];
		$tblForm2550q->part2Item21I = $row['part_2_item_21I'];
		$tblForm2550q->part2Item21J = $row['part_2_item_21J'];
		$tblForm2550q->part2Item21K = $row['part_2_item_21K'];
		$tblForm2550q->part2Item21L = $row['part_2_item_21L'];
		$tblForm2550q->part2Item21M = $row['part_2_item_21M'];
		$tblForm2550q->part2Item21N = $row['part_2_item_21N'];
		$tblForm2550q->part2Item21O = $row['part_2_item_21O'];
		$tblForm2550q->part2Item21P = $row['part_2_item_21P'];
		$tblForm2550q->part2Item22 = $row['part_2_item_22'];
		$tblForm2550q->part2Item23A = $row['part_2_item_23A'];
		$tblForm2550q->part2Item23B = $row['part_2_item_23B'];
		$tblForm2550q->part2Item23C = $row['part_2_item_23C'];
		$tblForm2550q->part2Item23D = $row['part_2_item_23D'];
		$tblForm2550q->part2Item23E = $row['part_2_item_23E'];
		$tblForm2550q->part2Item23F = $row['part_2_item_23F'];
		$tblForm2550q->part2Item24 = $row['part_2_item_24'];
		$tblForm2550q->part2Item25 = $row['part_2_item_25'];
		$tblForm2550q->part2Item26A = $row['part_2_item_26A'];
		$tblForm2550q->part2Item26B = $row['part_2_item_26B'];
		$tblForm2550q->part2Item26C = $row['part_2_item_26C'];
		$tblForm2550q->part2Item26D = $row['part_2_item_26D'];
		$tblForm2550q->part2Item26E = $row['part_2_item_26E'];
		$tblForm2550q->part2Item26F = $row['part_2_item_26F'];
		$tblForm2550q->part2Item26G = $row['part_2_item_26G'];
		$tblForm2550q->part2Item26H = $row['part_2_item_26H'];
		$tblForm2550q->part2Item27 = $row['part_2_item_27'];
		$tblForm2550q->part2Item28A = $row['part_2_item_28A'];
		$tblForm2550q->part2Item28B = $row['part_2_item_28B'];
		$tblForm2550q->part2Item28C = $row['part_2_item_28C'];
		$tblForm2550q->part2Item28D = $row['part_2_item_28D'];
		$tblForm2550q->part2Item29 = $row['part_2_item_29'];

		return $tblForm2550q;
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
	 * @return TblForm2550qMySql 
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