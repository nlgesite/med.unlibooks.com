<?php
/**
 * Class that operate on table 'tbl_taxable_period'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblTaxablePeriodMySqlDAO implements TblTaxablePeriodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblTaxablePeriodMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_taxable_period WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_taxable_period';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_taxable_period ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblTaxablePeriod primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_taxable_period WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTaxablePeriodMySql tblTaxablePeriod
 	 */
	public function insert($tblTaxablePeriod){
		$sql = 'INSERT INTO tbl_taxable_period (org_id, month, year) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTaxablePeriod->orgId);
		$sqlQuery->set($tblTaxablePeriod->month);
		$sqlQuery->set($tblTaxablePeriod->year);

		$id = $this->executeInsert($sqlQuery);	
		$tblTaxablePeriod->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTaxablePeriodMySql tblTaxablePeriod
 	 */
	public function update($tblTaxablePeriod){
		$sql = 'UPDATE tbl_taxable_period SET org_id = ?, month = ?, year = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTaxablePeriod->orgId);
		$sqlQuery->set($tblTaxablePeriod->month);
		$sqlQuery->set($tblTaxablePeriod->year);

		$sqlQuery->setNumber($tblTaxablePeriod->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_taxable_period';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_taxable_period WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMonth($value){
		$sql = 'SELECT * FROM tbl_taxable_period WHERE month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByYear($value){
		$sql = 'SELECT * FROM tbl_taxable_period WHERE year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_taxable_period WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMonth($value){
		$sql = 'DELETE FROM tbl_taxable_period WHERE month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByYear($value){
		$sql = 'DELETE FROM tbl_taxable_period WHERE year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblTaxablePeriodMySql 
	 */
	protected function readRow($row){
		$tblTaxablePeriod = new TblTaxablePeriod();
		
		$tblTaxablePeriod->id = $row['id'];
		$tblTaxablePeriod->orgId = $row['org_id'];
		$tblTaxablePeriod->month = $row['month'];
		$tblTaxablePeriod->year = $row['year'];

		return $tblTaxablePeriod;
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
	 * @return TblTaxablePeriodMySql 
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