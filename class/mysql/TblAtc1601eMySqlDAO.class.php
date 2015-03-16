<?php
/**
 * Class that operate on table 'tbl_atc_1601e'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblAtc1601eMySqlDAO implements TblAtc1601eDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblAtc1601eMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_atc_1601e';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_atc_1601e ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblAtc1601e primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAtc1601eMySql tblAtc1601e
 	 */
	public function insert($tblAtc1601e){
		$sql = 'INSERT INTO tbl_atc_1601e (form_1601e_id, account_name, atc_code, amount, rate, tax_required) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblAtc1601e->form1601eId);
		$sqlQuery->set($tblAtc1601e->accountName);
		$sqlQuery->set($tblAtc1601e->atcCode);
		$sqlQuery->set($tblAtc1601e->amount);
		$sqlQuery->set($tblAtc1601e->rate);
		$sqlQuery->set($tblAtc1601e->taxRequired);

		$id = $this->executeInsert($sqlQuery);	
		$tblAtc1601e->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAtc1601eMySql tblAtc1601e
 	 */
	public function update($tblAtc1601e){
		$sql = 'UPDATE tbl_atc_1601e SET form_1601e_id = ?, account_name = ?, atc_code = ?, amount = ?, rate = ?, tax_required = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblAtc1601e->form1601eId);
		$sqlQuery->set($tblAtc1601e->accountName);
		$sqlQuery->set($tblAtc1601e->atcCode);
		$sqlQuery->set($tblAtc1601e->amount);
		$sqlQuery->set($tblAtc1601e->rate);
		$sqlQuery->set($tblAtc1601e->taxRequired);

		$sqlQuery->setNumber($tblAtc1601e->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_atc_1601e';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByForm1601eId($value){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE form_1601e_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountName($value){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE account_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAtcCode($value){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE atc_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAmount($value){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRate($value){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE rate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaxRequired($value){
		$sql = 'SELECT * FROM tbl_atc_1601e WHERE tax_required = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByForm1601eId($value){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE form_1601e_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountName($value){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE account_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAtcCode($value){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE atc_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAmount($value){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRate($value){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE rate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaxRequired($value){
		$sql = 'DELETE FROM tbl_atc_1601e WHERE tax_required = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblAtc1601eMySql 
	 */
	protected function readRow($row){
		$tblAtc1601e = new TblAtc1601e();
		
		$tblAtc1601e->id = $row['id'];
		$tblAtc1601e->form1601eId = $row['form_1601e_id'];
		$tblAtc1601e->accountName = $row['account_name'];
		$tblAtc1601e->atcCode = $row['atc_code'];
		$tblAtc1601e->amount = $row['amount'];
		$tblAtc1601e->rate = $row['rate'];
		$tblAtc1601e->taxRequired = $row['tax_required'];

		return $tblAtc1601e;
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
	 * @return TblAtc1601eMySql 
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