<?php
/**
 * Class that operate on table 'tbl_task'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblTaskMySqlDAO implements TblTaskDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblTaskMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_task WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_task';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_task ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblTask primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_task WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTaskMySql tblTask
 	 */
	public function insert($tblTask){
		$sql = 'INSERT INTO tbl_task (org_id, task_code, description, rate_per_hour, gl_posting, active, date_created, date_modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTask->orgId);
		$sqlQuery->set($tblTask->taskCode);
		$sqlQuery->set($tblTask->description);
		$sqlQuery->set($tblTask->ratePerHour);
		$sqlQuery->setNumber($tblTask->glPosting);
		$sqlQuery->set($tblTask->active);
		$sqlQuery->set($tblTask->dateCreated);
		$sqlQuery->set($tblTask->dateModified);

		$id = $this->executeInsert($sqlQuery);	
		$tblTask->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTaskMySql tblTask
 	 */
	public function update($tblTask){
		$sql = 'UPDATE tbl_task SET org_id = ?, task_code = ?, description = ?, rate_per_hour = ?, gl_posting = ?, active = ?, date_created = ?, date_modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblTask->orgId);
		$sqlQuery->set($tblTask->taskCode);
		$sqlQuery->set($tblTask->description);
		$sqlQuery->set($tblTask->ratePerHour);
		$sqlQuery->setNumber($tblTask->glPosting);
		$sqlQuery->set($tblTask->active);
		$sqlQuery->set($tblTask->dateCreated);
		$sqlQuery->set($tblTask->dateModified);

		$sqlQuery->setNumber($tblTask->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_task';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_task WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskCode($value){
		$sql = 'SELECT * FROM tbl_task WHERE task_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM tbl_task WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRatePerHour($value){
		$sql = 'SELECT * FROM tbl_task WHERE rate_per_hour = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGlPosting($value){
		$sql = 'SELECT * FROM tbl_task WHERE gl_posting = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM tbl_task WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_task WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateModified($value){
		$sql = 'SELECT * FROM tbl_task WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_task WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskCode($value){
		$sql = 'DELETE FROM tbl_task WHERE task_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM tbl_task WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRatePerHour($value){
		$sql = 'DELETE FROM tbl_task WHERE rate_per_hour = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGlPosting($value){
		$sql = 'DELETE FROM tbl_task WHERE gl_posting = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM tbl_task WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_task WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateModified($value){
		$sql = 'DELETE FROM tbl_task WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblTaskMySql 
	 */
	protected function readRow($row){
		$tblTask = new TblTask();
		
		$tblTask->id = $row['id'];
		$tblTask->orgId = $row['org_id'];
		$tblTask->taskCode = $row['task_code'];
		$tblTask->description = $row['description'];
		$tblTask->ratePerHour = $row['rate_per_hour'];
		$tblTask->glPosting = $row['gl_posting'];
		$tblTask->active = $row['active'];
		$tblTask->dateCreated = $row['date_created'];
		$tblTask->dateModified = $row['date_modified'];

		return $tblTask;
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
	 * @return TblTaskMySql 
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