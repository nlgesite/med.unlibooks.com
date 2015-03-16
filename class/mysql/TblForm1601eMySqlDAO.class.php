<?php
/**
 * Class that operate on table 'tbl_form_1601e'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm1601eMySqlDAO implements TblForm1601eDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm1601eMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_1601e';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_1601e ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm1601e primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_1601e WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1601eMySql tblForm1601e
 	 */
	public function insert($tblForm1601e){
		$sql = 'INSERT INTO tbl_form_1601e (taxable_peroid_id, status, item_1, item_2, item_3, item_4, item_5, item_6, item_7, item_8, item_9, item_10, item_11, item_12, item_13, item_13_specify, item_14, item_15A, item_15B, item_15C, item_16, item_17A, item_17B, item_17C, item_17D, item_18, item_18_over_remittance) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1601e->taxablePeroidId);
		$sqlQuery->set($tblForm1601e->status);
		$sqlQuery->set($tblForm1601e->item1);
		$sqlQuery->set($tblForm1601e->item2);
		$sqlQuery->set($tblForm1601e->item3);
		$sqlQuery->set($tblForm1601e->item4);
		$sqlQuery->set($tblForm1601e->item5);
		$sqlQuery->set($tblForm1601e->item6);
		$sqlQuery->set($tblForm1601e->item7);
		$sqlQuery->set($tblForm1601e->item8);
		$sqlQuery->set($tblForm1601e->item9);
		$sqlQuery->set($tblForm1601e->item10);
		$sqlQuery->set($tblForm1601e->item11);
		$sqlQuery->set($tblForm1601e->item12);
		$sqlQuery->set($tblForm1601e->item13);
		$sqlQuery->set($tblForm1601e->item13Specify);
		$sqlQuery->set($tblForm1601e->item14);
		$sqlQuery->set($tblForm1601e->item15A);
		$sqlQuery->setNumber($tblForm1601e->item15B);
		$sqlQuery->setNumber($tblForm1601e->item15C);
		$sqlQuery->set($tblForm1601e->item16);
		$sqlQuery->set($tblForm1601e->item17A);
		$sqlQuery->set($tblForm1601e->item17B);
		$sqlQuery->set($tblForm1601e->item17C);
		$sqlQuery->setNumber($tblForm1601e->item17D);
		$sqlQuery->set($tblForm1601e->item18);
		$sqlQuery->set($tblForm1601e->item18OverRemittance);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm1601e->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1601eMySql tblForm1601e
 	 */
	public function update($tblForm1601e){
		$sql = 'UPDATE tbl_form_1601e SET taxable_peroid_id = ?, status = ?, item_1 = ?, item_2 = ?, item_3 = ?, item_4 = ?, item_5 = ?, item_6 = ?, item_7 = ?, item_8 = ?, item_9 = ?, item_10 = ?, item_11 = ?, item_12 = ?, item_13 = ?, item_13_specify = ?, item_14 = ?, item_15A = ?, item_15B = ?, item_15C = ?, item_16 = ?, item_17A = ?, item_17B = ?, item_17C = ?, item_17D = ?, item_18 = ?, item_18_over_remittance = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1601e->taxablePeroidId);
		$sqlQuery->set($tblForm1601e->status);
		$sqlQuery->set($tblForm1601e->item1);
		$sqlQuery->set($tblForm1601e->item2);
		$sqlQuery->set($tblForm1601e->item3);
		$sqlQuery->set($tblForm1601e->item4);
		$sqlQuery->set($tblForm1601e->item5);
		$sqlQuery->set($tblForm1601e->item6);
		$sqlQuery->set($tblForm1601e->item7);
		$sqlQuery->set($tblForm1601e->item8);
		$sqlQuery->set($tblForm1601e->item9);
		$sqlQuery->set($tblForm1601e->item10);
		$sqlQuery->set($tblForm1601e->item11);
		$sqlQuery->set($tblForm1601e->item12);
		$sqlQuery->set($tblForm1601e->item13);
		$sqlQuery->set($tblForm1601e->item13Specify);
		$sqlQuery->set($tblForm1601e->item14);
		$sqlQuery->set($tblForm1601e->item15A);
		$sqlQuery->setNumber($tblForm1601e->item15B);
		$sqlQuery->setNumber($tblForm1601e->item15C);
		$sqlQuery->set($tblForm1601e->item16);
		$sqlQuery->set($tblForm1601e->item17A);
		$sqlQuery->set($tblForm1601e->item17B);
		$sqlQuery->set($tblForm1601e->item17C);
		$sqlQuery->setNumber($tblForm1601e->item17D);
		$sqlQuery->set($tblForm1601e->item18);
		$sqlQuery->set($tblForm1601e->item18OverRemittance);

		$sqlQuery->setNumber($tblForm1601e->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_1601e';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem2($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem3($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem4($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem5($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem6($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem7($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem8($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem9($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem10($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem11($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem12($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem13Specify($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_13_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem14($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem15A($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_15A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem15B($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_15B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem15C($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_15C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem16($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_16 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem17A($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_17A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem17B($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_17B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem17C($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_17C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem17D($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_17D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem18($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem18OverRemittance($value){
		$sql = 'SELECT * FROM tbl_form_1601e WHERE item_18_over_remittance = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem2($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem3($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem4($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_4 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem5($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_5 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem6($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_6 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem7($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_7 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem8($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_8 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem9($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_9 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem10($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem11($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_11 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem12($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_12 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem13Specify($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_13_specify = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem14($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_14 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem15A($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_15A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem15B($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_15B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem15C($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_15C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem16($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_16 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem17A($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_17A = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem17B($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_17B = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem17C($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_17C = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem17D($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_17D = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem18($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem18OverRemittance($value){
		$sql = 'DELETE FROM tbl_form_1601e WHERE item_18_over_remittance = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm1601eMySql 
	 */
	protected function readRow($row){
		$tblForm1601e = new TblForm1601e();
		
		$tblForm1601e->id = $row['id'];
		$tblForm1601e->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm1601e->status = $row['status'];
		$tblForm1601e->item1 = $row['item_1'];
		$tblForm1601e->item2 = $row['item_2'];
		$tblForm1601e->item3 = $row['item_3'];
		$tblForm1601e->item4 = $row['item_4'];
		$tblForm1601e->item5 = $row['item_5'];
		$tblForm1601e->item6 = $row['item_6'];
		$tblForm1601e->item7 = $row['item_7'];
		$tblForm1601e->item8 = $row['item_8'];
		$tblForm1601e->item9 = $row['item_9'];
		$tblForm1601e->item10 = $row['item_10'];
		$tblForm1601e->item11 = $row['item_11'];
		$tblForm1601e->item12 = $row['item_12'];
		$tblForm1601e->item13 = $row['item_13'];
		$tblForm1601e->item13Specify = $row['item_13_specify'];
		$tblForm1601e->item14 = $row['item_14'];
		$tblForm1601e->item15A = $row['item_15A'];
		$tblForm1601e->item15B = $row['item_15B'];
		$tblForm1601e->item15C = $row['item_15C'];
		$tblForm1601e->item16 = $row['item_16'];
		$tblForm1601e->item17A = $row['item_17A'];
		$tblForm1601e->item17B = $row['item_17B'];
		$tblForm1601e->item17C = $row['item_17C'];
		$tblForm1601e->item17D = $row['item_17D'];
		$tblForm1601e->item18 = $row['item_18'];
		$tblForm1601e->item18OverRemittance = $row['item_18_over_remittance'];

		return $tblForm1601e;
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
	 * @return TblForm1601eMySql 
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