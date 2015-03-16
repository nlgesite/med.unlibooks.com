<?php
/**
 * Class that operate on table 'tbl_hmo'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblHmoMySqlDAO implements TblHmoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblHmoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_hmo WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_hmo';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_hmo ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblHmo primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_hmo WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblHmoMySql tblHmo
 	 */
	public function insert($tblHmo){
		$sql = 'INSERT INTO tbl_hmo (org_id, hmo_account, hmo_name, address, tin, email_address, phone_number, fax_number, gl_posting, active, date_created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblHmo->orgId);
		$sqlQuery->set($tblHmo->hmoAccount);
		$sqlQuery->set($tblHmo->hmoName);
		$sqlQuery->set($tblHmo->address);
		$sqlQuery->set($tblHmo->tin);
		$sqlQuery->set($tblHmo->emailAddress);
		$sqlQuery->set($tblHmo->phoneNumber);
		$sqlQuery->set($tblHmo->faxNumber);
		$sqlQuery->setNumber($tblHmo->glPosting);
		$sqlQuery->set($tblHmo->active);
		$sqlQuery->set($tblHmo->dateCreated);

		$id = $this->executeInsert($sqlQuery);	
		$tblHmo->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblHmoMySql tblHmo
 	 */
	public function update($tblHmo){
		$sql = 'UPDATE tbl_hmo SET org_id = ?, hmo_account = ?, hmo_name = ?, address = ?, tin = ?, email_address = ?, phone_number = ?, fax_number = ?, gl_posting = ?, active = ?, date_created = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblHmo->orgId);
		$sqlQuery->set($tblHmo->hmoAccount);
		$sqlQuery->set($tblHmo->hmoName);
		$sqlQuery->set($tblHmo->address);
		$sqlQuery->set($tblHmo->tin);
		$sqlQuery->set($tblHmo->emailAddress);
		$sqlQuery->set($tblHmo->phoneNumber);
		$sqlQuery->set($tblHmo->faxNumber);
		$sqlQuery->setNumber($tblHmo->glPosting);
		$sqlQuery->set($tblHmo->active);
		$sqlQuery->set($tblHmo->dateCreated);

		$sqlQuery->setNumber($tblHmo->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_hmo';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHmoAccount($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE hmo_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHmoName($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE hmo_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddress($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTin($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE tin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailAddress($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhoneNumber($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE phone_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFaxNumber($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE fax_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGlPosting($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE gl_posting = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_hmo WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_hmo WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHmoAccount($value){
		$sql = 'DELETE FROM tbl_hmo WHERE hmo_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHmoName($value){
		$sql = 'DELETE FROM tbl_hmo WHERE hmo_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddress($value){
		$sql = 'DELETE FROM tbl_hmo WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTin($value){
		$sql = 'DELETE FROM tbl_hmo WHERE tin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailAddress($value){
		$sql = 'DELETE FROM tbl_hmo WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhoneNumber($value){
		$sql = 'DELETE FROM tbl_hmo WHERE phone_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFaxNumber($value){
		$sql = 'DELETE FROM tbl_hmo WHERE fax_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGlPosting($value){
		$sql = 'DELETE FROM tbl_hmo WHERE gl_posting = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM tbl_hmo WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_hmo WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblHmoMySql 
	 */
	protected function readRow($row){
		$tblHmo = new TblHmo();
		
		$tblHmo->id = $row['id'];
		$tblHmo->orgId = $row['org_id'];
		$tblHmo->hmoAccount = $row['hmo_account'];
		$tblHmo->hmoName = $row['hmo_name'];
		$tblHmo->address = $row['address'];
		$tblHmo->tin = $row['tin'];
		$tblHmo->emailAddress = $row['email_address'];
		$tblHmo->phoneNumber = $row['phone_number'];
		$tblHmo->faxNumber = $row['fax_number'];
		$tblHmo->glPosting = $row['gl_posting'];
		$tblHmo->active = $row['active'];
		$tblHmo->dateCreated = $row['date_created'];

		return $tblHmo;
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
	 * @return TblHmoMySql 
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