<?php
/**
 * Class that operate on table 'tbl_client'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblClientMySqlDAO implements TblClientDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblClientMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_client WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_client';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_client ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblClient primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_client WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblClientMySql tblClient
 	 */
	public function insert($tblClient){
		$sql = 'INSERT INTO tbl_client (org_id, client_account, client_name, address, tin_num, email_address, phone_number, contact_name, contact_num, contact_email_address, hmo, hmo_num, active, date_created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblClient->orgId);
		$sqlQuery->set($tblClient->clientAccount);
		$sqlQuery->set($tblClient->clientName);
		$sqlQuery->set($tblClient->address);
		$sqlQuery->set($tblClient->tinNum);
		$sqlQuery->set($tblClient->emailAddress);
		$sqlQuery->set($tblClient->phoneNumber);
		$sqlQuery->set($tblClient->contactName);
		$sqlQuery->set($tblClient->contactNum);
		$sqlQuery->set($tblClient->contactEmailAddress);
		$sqlQuery->set($tblClient->hmo);
		$sqlQuery->set($tblClient->hmoNum);
		$sqlQuery->set($tblClient->active);
		$sqlQuery->set($tblClient->dateCreated);

		$id = $this->executeInsert($sqlQuery);	
		$tblClient->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblClientMySql tblClient
 	 */
	public function update($tblClient){
		$sql = 'UPDATE tbl_client SET org_id = ?, client_account = ?, client_name = ?, address = ?, tin_num = ?, email_address = ?, phone_number = ?, contact_name = ?, contact_num = ?, contact_email_address = ?, hmo = ?, hmo_num = ?, active = ?, date_created = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblClient->orgId);
		$sqlQuery->set($tblClient->clientAccount);
		$sqlQuery->set($tblClient->clientName);
		$sqlQuery->set($tblClient->address);
		$sqlQuery->set($tblClient->tinNum);
		$sqlQuery->set($tblClient->emailAddress);
		$sqlQuery->set($tblClient->phoneNumber);
		$sqlQuery->set($tblClient->contactName);
		$sqlQuery->set($tblClient->contactNum);
		$sqlQuery->set($tblClient->contactEmailAddress);
		$sqlQuery->set($tblClient->hmo);
		$sqlQuery->set($tblClient->hmoNum);
		$sqlQuery->set($tblClient->active);
		$sqlQuery->set($tblClient->dateCreated);

		$sqlQuery->setNumber($tblClient->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_client';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_client WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientAccount($value){
		$sql = 'SELECT * FROM tbl_client WHERE client_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientName($value){
		$sql = 'SELECT * FROM tbl_client WHERE client_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddress($value){
		$sql = 'SELECT * FROM tbl_client WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTinNum($value){
		$sql = 'SELECT * FROM tbl_client WHERE tin_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailAddress($value){
		$sql = 'SELECT * FROM tbl_client WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhoneNumber($value){
		$sql = 'SELECT * FROM tbl_client WHERE phone_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContactName($value){
		$sql = 'SELECT * FROM tbl_client WHERE contact_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContactNum($value){
		$sql = 'SELECT * FROM tbl_client WHERE contact_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContactEmailAddress($value){
		$sql = 'SELECT * FROM tbl_client WHERE contact_email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHmo($value){
		$sql = 'SELECT * FROM tbl_client WHERE hmo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHmoNum($value){
		$sql = 'SELECT * FROM tbl_client WHERE hmo_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM tbl_client WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_client WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_client WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientAccount($value){
		$sql = 'DELETE FROM tbl_client WHERE client_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientName($value){
		$sql = 'DELETE FROM tbl_client WHERE client_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddress($value){
		$sql = 'DELETE FROM tbl_client WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTinNum($value){
		$sql = 'DELETE FROM tbl_client WHERE tin_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailAddress($value){
		$sql = 'DELETE FROM tbl_client WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhoneNumber($value){
		$sql = 'DELETE FROM tbl_client WHERE phone_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContactName($value){
		$sql = 'DELETE FROM tbl_client WHERE contact_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContactNum($value){
		$sql = 'DELETE FROM tbl_client WHERE contact_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContactEmailAddress($value){
		$sql = 'DELETE FROM tbl_client WHERE contact_email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHmo($value){
		$sql = 'DELETE FROM tbl_client WHERE hmo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHmoNum($value){
		$sql = 'DELETE FROM tbl_client WHERE hmo_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM tbl_client WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_client WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblClientMySql 
	 */
	protected function readRow($row){
		$tblClient = new TblClient();
		
		$tblClient->id = $row['id'];
		$tblClient->orgId = $row['org_id'];
		$tblClient->clientAccount = $row['client_account'];
		$tblClient->clientName = $row['client_name'];
		$tblClient->address = $row['address'];
		$tblClient->tinNum = $row['tin_num'];
		$tblClient->emailAddress = $row['email_address'];
		$tblClient->phoneNumber = $row['phone_number'];
		$tblClient->contactName = $row['contact_name'];
		$tblClient->contactNum = $row['contact_num'];
		$tblClient->contactEmailAddress = $row['contact_email_address'];
		$tblClient->hmo = $row['hmo'];
		$tblClient->hmoNum = $row['hmo_num'];
		$tblClient->active = $row['active'];
		$tblClient->dateCreated = $row['date_created'];

		return $tblClient;
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
	 * @return TblClientMySql 
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