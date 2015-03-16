<?php
/**
 * Class that operate on table 'tbl_form_1601c'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm1601cMySqlDAO implements TblForm1601cDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm1601cMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_1601c';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_1601c ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm1601c primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_1601c WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1601cMySql tblForm1601c
 	 */
	public function insert($tblForm1601c){
		$sql = 'INSERT INTO tbl_form_1601c (taxable_peroid_id, status, item_1, item_2, item_3, item_4, item_5, item_6, item_7, item_8, item_9, item_10, item_11, item_12, item_13, item_13_specify, item_14, part_2_item_15, part_2_item_16A, part_2_item_16B, part_2_item_16C, part_2_item_17, part_2_item_18, part_2_item_19, part_2_item_20, part_2_item_21A, part_2_item_21B, part_2_item_22, part_2_item_23, part_2_item_24A, part_2_item_24B, part_2_item_24C, part_2_item_24D, part_2_item_25) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1601c->taxablePeroidId);
		$sqlQuery->set($tblForm1601c->status);
		$sqlQuery->set($tblForm1601c->item1);
		$sqlQuery->set($tblForm1601c->item2);
		$sqlQuery->set($tblForm1601c->item3);
		$sqlQuery->set($tblForm1601c->item4);
		$sqlQuery->set($tblForm1601c->item5);
		$sqlQuery->set($tblForm1601c->item6);
		$sqlQuery->set($tblForm1601c->item7);
		$sqlQuery->set($tblForm1601c->item8);
		$sqlQuery->set($tblForm1601c->item9);
		$sqlQuery->set($tblForm1601c->item10);
		$sqlQuery->set($tblForm1601c->item11);
		$sqlQuery->set($tblForm1601c->item12);
		$sqlQuery->set($tblForm1601c->item13);
		$sqlQuery->set($tblForm1601c->item13Specify);
		$sqlQuery->set($tblForm1601c->item14);
		$sqlQuery->set($tblForm1601c->part2Item15);
		$sqlQuery->set($tblForm1601c->part2Item16A);
		$sqlQuery->set($tblForm1601c->part2Item16B);
		$sqlQuery->set($tblForm1601c->part2Item16C);
		$sqlQuery->set($tblForm1601c->part2Item17);
		$sqlQuery->set($tblForm1601c->part2Item18);
		$sqlQuery->set($tblForm1601c->part2Item19);
		$sqlQuery->set($tblForm1601c->part2Item20);
		$sqlQuery->set($tblForm1601c->part2Item21A);
		$sqlQuery->set($tblForm1601c->part2Item21B);
		$sqlQuery->set($tblForm1601c->part2Item22);
		$sqlQuery->set($tblForm1601c->part2Item23);
		$sqlQuery->set($tblForm1601c->part2Item24A);
		$sqlQuery->set($tblForm1601c->part2Item24B);
		$sqlQuery->set($tblForm1601c->part2Item24C);
		$sqlQuery->set($tblForm1601c->part2Item24D);
		$sqlQuery->set($tblForm1601c->part2Item25);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm1601c->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1601cMySql tblForm1601c
 	 */
	public function update($tblForm1601c){
		$sql = 'UPDATE tbl_form_1601c SET taxable_peroid_id = ?, status = ?, item_1 = ?, item_2 = ?, item_3 = ?, item_4 = ?, item_5 = ?, item_6 = ?, item_7 = ?, item_8 = ?, item_9 = ?, item_10 = ?, item_11 = ?, item_12 = ?, item_13 = ?, item_13_specify = ?, item_14 = ?, part_2_item_15 = ?, part_2_item_16A = ?, part_2_item_16B = ?, part_2_item_16C = ?, part_2_item_17 = ?, part_2_item_18 = ?, part_2_item_19 = ?, part_2_item_20 = ?, part_2_item_21A = ?, part_2_item_21B = ?, part_2_item_22 = ?, part_2_item_23 = ?, part_2_item_24A = ?, part_2_item_24B = ?, part_2_item_24C = ?, part_2_item_24D = ?, part_2_item_25 = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1601c->taxablePeroidId);
		$sqlQuery->set($tblForm1601c->status);
		$sqlQuery->set($tblForm1601c->item1);
		$sqlQuery->set($tblForm1601c->item2);
		$sqlQuery->set($tblForm1601c->item3);
		$sqlQuery->set($tblForm1601c->item4);
		$sqlQuery->set($tblForm1601c->item5);
		$sqlQuery->set($tblForm1601c->item6);
		$sqlQuery->set($tblForm1601c->item7);
		$sqlQuery->set($tblForm1601c->item8);
		$sqlQuery->set($tblForm1601c->item9);
		$sqlQuery->set($tblForm1601c->item10);
		$sqlQuery->set($tblForm1601c->item11);
		$sqlQuery->set($tblForm1601c->item12);
		$sqlQuery->set($tblForm1601c->item13);
		$sqlQuery->set($tblForm1601c->item13Specify);
		$sqlQuery->set($tblForm1601c->item14);
		$sqlQuery->set($tblForm1601c->part2Item15);
		$sqlQuery->set($tblForm1601c->part2Item16A);
		$sqlQuery->set($tblForm1601c->part2Item16B);
		$sqlQuery->set($tblForm1601c->part2Item16C);
		$sqlQuery->set($tblForm1601c->part2Item17);
		$sqlQuery->set($tblForm1601c->part2Item18);
		$sqlQuery->set($tblForm1601c->part2Item19);
		$sqlQuery->set($tblForm1601c->part2Item20);
		$sqlQuery->set($tblForm1601c->part2Item21A);
		$sqlQuery->set($tblForm1601c->part2Item21B);
		$sqlQuery->set($tblForm1601c->part2Item22);
		$sqlQuery->set($tblForm1601c->part2Item23);
		$sqlQuery->set($tblForm1601c->part2Item24A);
		$sqlQuery->set($tblForm1601c->part2Item24B);
		$sqlQuery->set($tblForm1601c->part2Item24C);
		$sqlQuery->set($tblForm1601c->part2Item24D);
		$sqlQuery->set($tblForm1601c->part2Item25);

		$sqlQuery->setNumber($tblForm1601c->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_1601c';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem2($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem4($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem5($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem6($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem7($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem8($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem9($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem10($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem12($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13Specify($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_13_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem14($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item15($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16A($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16B($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item16C($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_16C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item17($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item18($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item19($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item20($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_20 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21A($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_21A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item21B($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_21B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item22($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item23($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_23 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item24A($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_24A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item24B($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_24B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item24C($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_24C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item24D($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_24D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPart2Item25($value){
		$sql = 'SELECT * FROM tbl_form_1601c WHERE part_2_item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem2($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem4($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem5($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem6($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem7($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem8($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem9($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem10($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem12($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13Specify($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_13_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem14($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item15($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16A($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_16A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16B($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_16B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item16C($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_16C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item17($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item18($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item19($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item20($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_20 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21A($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_21A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item21B($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_21B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item22($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item23($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_23 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item24A($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_24A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item24B($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_24B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item24C($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_24C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item24D($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_24D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPart2Item25($value){
		$sql = 'DELETE FROM tbl_form_1601c WHERE part_2_item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm1601cMySql 
	 */
	protected function readRow($row){
		$tblForm1601c = new TblForm1601c();
		
		$tblForm1601c->id = $row['id'];
		$tblForm1601c->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm1601c->status = $row['status'];
		$tblForm1601c->item1 = $row['item_1'];
		$tblForm1601c->item2 = $row['item_2'];
		$tblForm1601c->item3 = $row['item_3'];
		$tblForm1601c->item4 = $row['item_4'];
		$tblForm1601c->item5 = $row['item_5'];
		$tblForm1601c->item6 = $row['item_6'];
		$tblForm1601c->item7 = $row['item_7'];
		$tblForm1601c->item8 = $row['item_8'];
		$tblForm1601c->item9 = $row['item_9'];
		$tblForm1601c->item10 = $row['item_10'];
		$tblForm1601c->item11 = $row['item_11'];
		$tblForm1601c->item12 = $row['item_12'];
		$tblForm1601c->item13 = $row['item_13'];
		$tblForm1601c->item13Specify = $row['item_13_specify'];
		$tblForm1601c->item14 = $row['item_14'];
		$tblForm1601c->part2Item15 = $row['part_2_item_15'];
		$tblForm1601c->part2Item16A = $row['part_2_item_16A'];
		$tblForm1601c->part2Item16B = $row['part_2_item_16B'];
		$tblForm1601c->part2Item16C = $row['part_2_item_16C'];
		$tblForm1601c->part2Item17 = $row['part_2_item_17'];
		$tblForm1601c->part2Item18 = $row['part_2_item_18'];
		$tblForm1601c->part2Item19 = $row['part_2_item_19'];
		$tblForm1601c->part2Item20 = $row['part_2_item_20'];
		$tblForm1601c->part2Item21A = $row['part_2_item_21A'];
		$tblForm1601c->part2Item21B = $row['part_2_item_21B'];
		$tblForm1601c->part2Item22 = $row['part_2_item_22'];
		$tblForm1601c->part2Item23 = $row['part_2_item_23'];
		$tblForm1601c->part2Item24A = $row['part_2_item_24A'];
		$tblForm1601c->part2Item24B = $row['part_2_item_24B'];
		$tblForm1601c->part2Item24C = $row['part_2_item_24C'];
		$tblForm1601c->part2Item24D = $row['part_2_item_24D'];
		$tblForm1601c->part2Item25 = $row['part_2_item_25'];

		return $tblForm1601c;
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
	 * @return TblForm1601cMySql 
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