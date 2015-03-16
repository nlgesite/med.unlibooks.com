<?php
/**
 * Class that operate on table 'tbl_form_2550m'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm2550mMySqlDAO implements TblForm2550mDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm2550mMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_2550m';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_2550m ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm2550m primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_2550m WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm2550mMySql tblForm2550m
 	 */
	public function insert($tblForm2550m){
		$sql = 'INSERT INTO tbl_form_2550m (taxable_peroid_id, status, item_1, item_2, item_3, item_4, item_5, item_6, item_7, item_8, item_9, item_10, item_11, item_11_specify, part_2_item_12A, part_2_item_12B, part_2_item_13A, part_2_item_13B, part_2_item_14, part_2_item_15, part_2_item_16A, part_2_item_16B, part_2_item_17A, part_2_item_17B, part_2_item_17C, part_2_item_17D, part_2_item_17E, part_2_item_17F, part_2_item_18A, part_2_item_18B, part_2_item_18C, part_2_item_18D, part_2_item_18E, part_2_item_18F, part_2_item_18G, part_2_item_18H, part_2_item_18I, part_2_item_18J, part_2_item_18K, part_2_item_18L, part_2_item_18M, part_2_item_18N, part_2_item_18O, part_2_item_18P, part_2_item_19, part_2_item_20A, part_2_item_20B, part_2_item_20C, part_2_item_20D, part_2_item_20E, part_2_item_20F, part_2_item_20G, part_2_item_21, part_2_item_22, part_2_item_23A, part_2_item_23B, part_2_item_23C, part_2_item_23D, part_2_item_23E, part_2_item_23F, part_2_item_23G, part_2_item_24, part_2_item_25A, part_2_item_25B, part_2_item_25C, part_2_item_25D, part_2_item_26) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm2550m->taxablePeroidId);
		$sqlQuery->set($tblForm2550m->status);
		$sqlQuery->set($tblForm2550m->item1);
		$sqlQuery->set($tblForm2550m->item2);
		$sqlQuery->set($tblForm2550m->item3);
		$sqlQuery->set($tblForm2550m->item4);
		$sqlQuery->set($tblForm2550m->item5);
		$sqlQuery->set($tblForm2550m->item6);
		$sqlQuery->set($tblForm2550m->item7);
		$sqlQuery->set($tblForm2550m->item8);
		$sqlQuery->set($tblForm2550m->item9);
		$sqlQuery->set($tblForm2550m->item10);
		$sqlQuery->set($tblForm2550m->item11);
		$sqlQuery->set($tblForm2550m->item11Specify);
		$sqlQuery->set($tblForm2550m->part2Item12A);
		$sqlQuery->set($tblForm2550m->part2Item12B);
		$sqlQuery->set($tblForm2550m->part2Item13A);
		$sqlQuery->set($tblForm2550m->part2Item13B);
		$sqlQuery->set($tblForm2550m->part2Item14);
		$sqlQuery->set($tblForm2550m->part2Item15);
		$sqlQuery->set($tblForm2550m->part2Item16A);
		$sqlQuery->set($tblForm2550m->part2Item16B);
		$sqlQuery->set($tblForm2550m->part2Item17A);
		$sqlQuery->set($tblForm2550m->part2Item17B);
		$sqlQuery->set($tblForm2550m->part2Item17C);
		$sqlQuery->set($tblForm2550m->part2Item17D);
		$sqlQuery->set($tblForm2550m->part2Item17E);
		$sqlQuery->set($tblForm2550m->part2Item17F);
		$sqlQuery->set($tblForm2550m->part2Item18A);
		$sqlQuery->set($tblForm2550m->part2Item18B);
		$sqlQuery->set($tblForm2550m->part2Item18C);
		$sqlQuery->set($tblForm2550m->part2Item18D);
		$sqlQuery->set($tblForm2550m->part2Item18E);
		$sqlQuery->set($tblForm2550m->part2Item18F);
		$sqlQuery->set($tblForm2550m->part2Item18G);
		$sqlQuery->set($tblForm2550m->part2Item18H);
		$sqlQuery->set($tblForm2550m->part2Item18I);
		$sqlQuery->set($tblForm2550m->part2Item18J);
		$sqlQuery->set($tblForm2550m->part2Item18K);
		$sqlQuery->set($tblForm2550m->part2Item18L);
		$sqlQuery->set($tblForm2550m->part2Item18M);
		$sqlQuery->set($tblForm2550m->part2Item18N);
		$sqlQuery->set($tblForm2550m->part2Item18O);
		$sqlQuery->set($tblForm2550m->part2Item18P);
		$sqlQuery->set($tblForm2550m->part2Item19);
		$sqlQuery->set($tblForm2550m->part2Item20A);
		$sqlQuery->set($tblForm2550m->part2Item20B);
		$sqlQuery->set($tblForm2550m->part2Item20C);
		$sqlQuery->set($tblForm2550m->part2Item20D);
		$sqlQuery->set($tblForm2550m->part2Item20E);
		$sqlQuery->set($tblForm2550m->part2Item20F);
		$sqlQuery->set($tblForm2550m->part2Item20G);
		$sqlQuery->set($tblForm2550m->part2Item21);
		$sqlQuery->set($tblForm2550m->part2Item22);
		$sqlQuery->set($tblForm2550m->part2Item23A);
		$sqlQuery->set($tblForm2550m->part2Item23B);
		$sqlQuery->set($tblForm2550m->part2Item23C);
		$sqlQuery->set($tblForm2550m->part2Item23D);
		$sqlQuery->set($tblForm2550m->part2Item23E);
		$sqlQuery->set($tblForm2550m->part2Item23F);
		$sqlQuery->set($tblForm2550m->part2Item23G);
		$sqlQuery->set($tblForm2550m->part2Item24);
		$sqlQuery->set($tblForm2550m->part2Item25A);
		$sqlQuery->set($tblForm2550m->part2Item25B);
		$sqlQuery->set($tblForm2550m->part2Item25C);
		$sqlQuery->set($tblForm2550m->part2Item25D);
		$sqlQuery->set($tblForm2550m->part2Item26);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm2550m->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm2550mMySql tblForm2550m
 	 */
	public function update($tblForm2550m){
		$sql = 'UPDATE tbl_form_2550m SET taxable_peroid_id = ?, status = ?, item_1 = ?, item_2 = ?, item_3 = ?, item_4 = ?, item_5 = ?, item_6 = ?, item_7 = ?, item_8 = ?, item_9 = ?, item_10 = ?, item_11 = ?, item_11_specify = ?, part_2_item_12A = ?, part_2_item_12B = ?, part_2_item_13A = ?, part_2_item_13B = ?, part_2_item_14 = ?, part_2_item_15 = ?, part_2_item_16A = ?, part_2_item_16B = ?, part_2_item_17A = ?, part_2_item_17B = ?, part_2_item_17C = ?, part_2_item_17D = ?, part_2_item_17E = ?, part_2_item_17F = ?, part_2_item_18A = ?, part_2_item_18B = ?, part_2_item_18C = ?, part_2_item_18D = ?, part_2_item_18E = ?, part_2_item_18F = ?, part_2_item_18G = ?, part_2_item_18H = ?, part_2_item_18I = ?, part_2_item_18J = ?, part_2_item_18K = ?, part_2_item_18L = ?, part_2_item_18M = ?, part_2_item_18N = ?, part_2_item_18O = ?, part_2_item_18P = ?, part_2_item_19 = ?, part_2_item_20A = ?, part_2_item_20B = ?, part_2_item_20C = ?, part_2_item_20D = ?, part_2_item_20E = ?, part_2_item_20F = ?, part_2_item_20G = ?, part_2_item_21 = ?, part_2_item_22 = ?, part_2_item_23A = ?, part_2_item_23B = ?, part_2_item_23C = ?, part_2_item_23D = ?, part_2_item_23E = ?, part_2_item_23F = ?, part_2_item_23G = ?, part_2_item_24 = ?, part_2_item_25A = ?, part_2_item_25B = ?, part_2_item_25C = ?, part_2_item_25D = ?, part_2_item_26 = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm2550m->taxablePeroidId);
		$sqlQuery->set($tblForm2550m->status);
		$sqlQuery->set($tblForm2550m->item1);
		$sqlQuery->set($tblForm2550m->item2);
		$sqlQuery->set($tblForm2550m->item3);
		$sqlQuery->set($tblForm2550m->item4);
		$sqlQuery->set($tblForm2550m->item5);
		$sqlQuery->set($tblForm2550m->item6);
		$sqlQuery->set($tblForm2550m->item7);
		$sqlQuery->set($tblForm2550m->item8);
		$sqlQuery->set($tblForm2550m->item9);
		$sqlQuery->set($tblForm2550m->item10);
		$sqlQuery->set($tblForm2550m->item11);
		$sqlQuery->set($tblForm2550m->item11Specify);
		$sqlQuery->set($tblForm2550m->part2Item12A);
		$sqlQuery->set($tblForm2550m->part2Item12B);
		$sqlQuery->set($tblForm2550m->part2Item13A);
		$sqlQuery->set($tblForm2550m->part2Item13B);
		$sqlQuery->set($tblForm2550m->part2Item14);
		$sqlQuery->set($tblForm2550m->part2Item15);
		$sqlQuery->set($tblForm2550m->part2Item16A);
		$sqlQuery->set($tblForm2550m->part2Item16B);
		$sqlQuery->set($tblForm2550m->part2Item17A);
		$sqlQuery->set($tblForm2550m->part2Item17B);
		$sqlQuery->set($tblForm2550m->part2Item17C);
		$sqlQuery->set($tblForm2550m->part2Item17D);
		$sqlQuery->set($tblForm2550m->part2Item17E);
		$sqlQuery->set($tblForm2550m->part2Item17F);
		$sqlQuery->set($tblForm2550m->part2Item18A);
		$sqlQuery->set($tblForm2550m->part2Item18B);
		$sqlQuery->set($tblForm2550m->part2Item18C);
		$sqlQuery->set($tblForm2550m->part2Item18D);
		$sqlQuery->set($tblForm2550m->part2Item18E);
		$sqlQuery->set($tblForm2550m->part2Item18F);
		$sqlQuery->set($tblForm2550m->part2Item18G);
		$sqlQuery->set($tblForm2550m->part2Item18H);
		$sqlQuery->set($tblForm2550m->part2Item18I);
		$sqlQuery->set($tblForm2550m->part2Item18J);
		$sqlQuery->set($tblForm2550m->part2Item18K);
		$sqlQuery->set($tblForm2550m->part2Item18L);
		$sqlQuery->set($tblForm2550m->part2Item18M);
		$sqlQuery->set($tblForm2550m->part2Item18N);
		$sqlQuery->set($tblForm2550m->part2Item18O);
		$sqlQuery->set($tblForm2550m->part2Item18P);
		$sqlQuery->set($tblForm2550m->part2Item19);
		$sqlQuery->set($tblForm2550m->part2Item20A);
		$sqlQuery->set($tblForm2550m->part2Item20B);
		$sqlQuery->set($tblForm2550m->part2Item20C);
		$sqlQuery->set($tblForm2550m->part2Item20D);
		$sqlQuery->set($tblForm2550m->part2Item20E);
		$sqlQuery->set($tblForm2550m->part2Item20F);
		$sqlQuery->set($tblForm2550m->part2Item20G);
		$sqlQuery->set($tblForm2550m->part2Item21);
		$sqlQuery->set($tblForm2550m->part2Item22);
		$sqlQuery->set($tblForm2550m->part2Item23A);
		$sqlQuery->set($tblForm2550m->part2Item23B);
		$sqlQuery->set($tblForm2550m->part2Item23C);
		$sqlQuery->set($tblForm2550m->part2Item23D);
		$sqlQuery->set($tblForm2550m->part2Item23E);
		$sqlQuery->set($tblForm2550m->part2Item23F);
		$sqlQuery->set($tblForm2550m->part2Item23G);
		$sqlQuery->set($tblForm2550m->part2Item24);
		$sqlQuery->set($tblForm2550m->part2Item25A);
		$sqlQuery->set($tblForm2550m->part2Item25B);
		$sqlQuery->set($tblForm2550m->part2Item25C);
		$sqlQuery->set($tblForm2550m->part2Item25D);
		$sqlQuery->set($tblForm2550m->part2Item26);

		$sqlQuery->setNumber($tblForm2550m->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_2550m';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem2($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem4($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem5($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem6($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem7($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem8($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem9($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem10($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11Specify($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE item_11_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item12A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_12A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item12B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_12B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item13A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_13A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item13B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_13B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item14($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item15($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_17A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_17B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17C($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_17C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17D($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_17D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17E($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_17E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17F($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_17F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18C($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18D($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18E($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18F($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18G($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18H($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18I($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18I = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18J($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18J = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18K($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18K = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18L($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18L = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18M($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18M = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18N($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18N = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18O($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18O = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18P($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_18P = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item19($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20C($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20D($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20E($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20F($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20G($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_20G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item22($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23C($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23D($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23E($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23F($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23G($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_23G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item24($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item25A($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_25A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item25B($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_25B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item25C($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_25C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item25D($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_25D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item26($value){
		$sql = 'SELECT * FROM tbl_form_2550m WHERE part_2_item_26 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem2($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem4($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem5($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem6($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem7($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem8($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem9($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem10($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11Specify($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE item_11_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item12A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_12A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item12B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_12B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item13A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_13A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item13B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_13B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item14($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item15($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_17A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_17B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17C($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_17C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17D($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_17D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17E($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_17E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17F($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_17F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18C($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18D($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18E($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18F($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18G($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18H($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18H = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18I($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18I = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18J($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18J = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18K($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18K = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18L($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18L = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18M($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18M = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18N($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18N = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18O($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18O = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18P($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_18P = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item19($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20C($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20D($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20E($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20F($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20G($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_20G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item22($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23C($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23D($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23E($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23E = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23F($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23F = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23G($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_23G = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item24($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item25A($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_25A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item25B($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_25B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item25C($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_25C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item25D($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_25D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item26($value){
		$sql = 'DELETE FROM tbl_form_2550m WHERE part_2_item_26 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm2550mMySql 
	 */
	protected function readRow($row){
		$tblForm2550m = new TblForm2550m();
		
		$tblForm2550m->id = $row['id'];
		$tblForm2550m->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm2550m->status = $row['status'];
		$tblForm2550m->item1 = $row['item_1'];
		$tblForm2550m->item2 = $row['item_2'];
		$tblForm2550m->item3 = $row['item_3'];
		$tblForm2550m->item4 = $row['item_4'];
		$tblForm2550m->item5 = $row['item_5'];
		$tblForm2550m->item6 = $row['item_6'];
		$tblForm2550m->item7 = $row['item_7'];
		$tblForm2550m->item8 = $row['item_8'];
		$tblForm2550m->item9 = $row['item_9'];
		$tblForm2550m->item10 = $row['item_10'];
		$tblForm2550m->item11 = $row['item_11'];
		$tblForm2550m->item11Specify = $row['item_11_specify'];
		$tblForm2550m->part2Item12A = $row['part_2_item_12A'];
		$tblForm2550m->part2Item12B = $row['part_2_item_12B'];
		$tblForm2550m->part2Item13A = $row['part_2_item_13A'];
		$tblForm2550m->part2Item13B = $row['part_2_item_13B'];
		$tblForm2550m->part2Item14 = $row['part_2_item_14'];
		$tblForm2550m->part2Item15 = $row['part_2_item_15'];
		$tblForm2550m->part2Item16A = $row['part_2_item_16A'];
		$tblForm2550m->part2Item16B = $row['part_2_item_16B'];
		$tblForm2550m->part2Item17A = $row['part_2_item_17A'];
		$tblForm2550m->part2Item17B = $row['part_2_item_17B'];
		$tblForm2550m->part2Item17C = $row['part_2_item_17C'];
		$tblForm2550m->part2Item17D = $row['part_2_item_17D'];
		$tblForm2550m->part2Item17E = $row['part_2_item_17E'];
		$tblForm2550m->part2Item17F = $row['part_2_item_17F'];
		$tblForm2550m->part2Item18A = $row['part_2_item_18A'];
		$tblForm2550m->part2Item18B = $row['part_2_item_18B'];
		$tblForm2550m->part2Item18C = $row['part_2_item_18C'];
		$tblForm2550m->part2Item18D = $row['part_2_item_18D'];
		$tblForm2550m->part2Item18E = $row['part_2_item_18E'];
		$tblForm2550m->part2Item18F = $row['part_2_item_18F'];
		$tblForm2550m->part2Item18G = $row['part_2_item_18G'];
		$tblForm2550m->part2Item18H = $row['part_2_item_18H'];
		$tblForm2550m->part2Item18I = $row['part_2_item_18I'];
		$tblForm2550m->part2Item18J = $row['part_2_item_18J'];
		$tblForm2550m->part2Item18K = $row['part_2_item_18K'];
		$tblForm2550m->part2Item18L = $row['part_2_item_18L'];
		$tblForm2550m->part2Item18M = $row['part_2_item_18M'];
		$tblForm2550m->part2Item18N = $row['part_2_item_18N'];
		$tblForm2550m->part2Item18O = $row['part_2_item_18O'];
		$tblForm2550m->part2Item18P = $row['part_2_item_18P'];
		$tblForm2550m->part2Item19 = $row['part_2_item_19'];
		$tblForm2550m->part2Item20A = $row['part_2_item_20A'];
		$tblForm2550m->part2Item20B = $row['part_2_item_20B'];
		$tblForm2550m->part2Item20C = $row['part_2_item_20C'];
		$tblForm2550m->part2Item20D = $row['part_2_item_20D'];
		$tblForm2550m->part2Item20E = $row['part_2_item_20E'];
		$tblForm2550m->part2Item20F = $row['part_2_item_20F'];
		$tblForm2550m->part2Item20G = $row['part_2_item_20G'];
		$tblForm2550m->part2Item21 = $row['part_2_item_21'];
		$tblForm2550m->part2Item22 = $row['part_2_item_22'];
		$tblForm2550m->part2Item23A = $row['part_2_item_23A'];
		$tblForm2550m->part2Item23B = $row['part_2_item_23B'];
		$tblForm2550m->part2Item23C = $row['part_2_item_23C'];
		$tblForm2550m->part2Item23D = $row['part_2_item_23D'];
		$tblForm2550m->part2Item23E = $row['part_2_item_23E'];
		$tblForm2550m->part2Item23F = $row['part_2_item_23F'];
		$tblForm2550m->part2Item23G = $row['part_2_item_23G'];
		$tblForm2550m->part2Item24 = $row['part_2_item_24'];
		$tblForm2550m->part2Item25A = $row['part_2_item_25A'];
		$tblForm2550m->part2Item25B = $row['part_2_item_25B'];
		$tblForm2550m->part2Item25C = $row['part_2_item_25C'];
		$tblForm2550m->part2Item25D = $row['part_2_item_25D'];
		$tblForm2550m->part2Item26 = $row['part_2_item_26'];

		return $tblForm2550m;
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
	 * @return TblForm2550mMySql 
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