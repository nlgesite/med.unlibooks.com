<?php
/**
 * Class that operate on table 'tbl_organization_info'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblOrganizationInfoMySqlDAO implements TblOrganizationInfoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblOrganizationInfoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_organization_info WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_organization_info';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_organization_info ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblOrganizationInfo primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_organization_info WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblOrganizationInfoMySql tblOrganizationInfo
 	 */
	public function insert($tblOrganizationInfo){
		$sql = 'INSERT INTO tbl_organization_info (org_id, org_account, address, tin_num, email_address, phone_num, fax_num, rdo_code, zip_code, line_of_business, mode_of_payment, type_of_tax, logo_name, date_created, date_modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblOrganizationInfo->orgId);
		$sqlQuery->set($tblOrganizationInfo->orgAccount);
		$sqlQuery->set($tblOrganizationInfo->address);
		$sqlQuery->set($tblOrganizationInfo->tinNum);
		$sqlQuery->set($tblOrganizationInfo->emailAddress);
		$sqlQuery->set($tblOrganizationInfo->phoneNum);
		$sqlQuery->set($tblOrganizationInfo->faxNum);
		$sqlQuery->set($tblOrganizationInfo->rdoCode);
		$sqlQuery->set($tblOrganizationInfo->zipCode);
		$sqlQuery->set($tblOrganizationInfo->lineOfBusiness);
		$sqlQuery->set($tblOrganizationInfo->modeOfPayment);
		$sqlQuery->set($tblOrganizationInfo->typeOfTax);
		$sqlQuery->set($tblOrganizationInfo->logoName);
		$sqlQuery->set($tblOrganizationInfo->dateCreated);
		$sqlQuery->set($tblOrganizationInfo->dateModified);

		$id = $this->executeInsert($sqlQuery);	
		$tblOrganizationInfo->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblOrganizationInfoMySql tblOrganizationInfo
 	 */
	public function update($tblOrganizationInfo){
		$sql = 'UPDATE tbl_organization_info SET org_id = ?, org_account = ?, address = ?, tin_num = ?, email_address = ?, phone_num = ?, fax_num = ?, rdo_code = ?, zip_code = ?, line_of_business = ?, mode_of_payment = ?, type_of_tax = ?, logo_name = ?, date_created = ?, date_modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblOrganizationInfo->orgId);
		$sqlQuery->set($tblOrganizationInfo->orgAccount);
		$sqlQuery->set($tblOrganizationInfo->address);
		$sqlQuery->set($tblOrganizationInfo->tinNum);
		$sqlQuery->set($tblOrganizationInfo->emailAddress);
		$sqlQuery->set($tblOrganizationInfo->phoneNum);
		$sqlQuery->set($tblOrganizationInfo->faxNum);
		$sqlQuery->set($tblOrganizationInfo->rdoCode);
		$sqlQuery->set($tblOrganizationInfo->zipCode);
		$sqlQuery->set($tblOrganizationInfo->lineOfBusiness);
		$sqlQuery->set($tblOrganizationInfo->modeOfPayment);
		$sqlQuery->set($tblOrganizationInfo->typeOfTax);
		$sqlQuery->set($tblOrganizationInfo->logoName);
		$sqlQuery->set($tblOrganizationInfo->dateCreated);
		$sqlQuery->set($tblOrganizationInfo->dateModified);

		$sqlQuery->setNumber($tblOrganizationInfo->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_organization_info';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrgAccount($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE org_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddress($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTinNum($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE tin_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailAddress($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhoneNum($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE phone_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFaxNum($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE fax_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRdoCode($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE rdo_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByZipCode($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE zip_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLineOfBusiness($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE line_of_business = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModeOfPayment($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE mode_of_payment = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeOfTax($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE type_of_tax = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLogoName($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE logo_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateModified($value){
		$sql = 'SELECT * FROM tbl_organization_info WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrgAccount($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE org_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddress($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTinNum($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE tin_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailAddress($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhoneNum($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE phone_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFaxNum($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE fax_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRdoCode($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE rdo_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByZipCode($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE zip_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLineOfBusiness($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE line_of_business = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModeOfPayment($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE mode_of_payment = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeOfTax($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE type_of_tax = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLogoName($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE logo_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateModified($value){
		$sql = 'DELETE FROM tbl_organization_info WHERE date_modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblOrganizationInfoMySql 
	 */
	protected function readRow($row){
		$tblOrganizationInfo = new TblOrganizationInfo();
		
		$tblOrganizationInfo->id = $row['id'];
		$tblOrganizationInfo->orgId = $row['org_id'];
		$tblOrganizationInfo->orgAccount = $row['org_account'];
		$tblOrganizationInfo->address = $row['address'];
		$tblOrganizationInfo->tinNum = $row['tin_num'];
		$tblOrganizationInfo->emailAddress = $row['email_address'];
		$tblOrganizationInfo->phoneNum = $row['phone_num'];
		$tblOrganizationInfo->faxNum = $row['fax_num'];
		$tblOrganizationInfo->rdoCode = $row['rdo_code'];
		$tblOrganizationInfo->zipCode = $row['zip_code'];
		$tblOrganizationInfo->lineOfBusiness = $row['line_of_business'];
		$tblOrganizationInfo->modeOfPayment = $row['mode_of_payment'];
		$tblOrganizationInfo->typeOfTax = $row['type_of_tax'];
		$tblOrganizationInfo->logoName = $row['logo_name'];
		$tblOrganizationInfo->dateCreated = $row['date_created'];
		$tblOrganizationInfo->dateModified = $row['date_modified'];

		return $tblOrganizationInfo;
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
	 * @return TblOrganizationInfoMySql 
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