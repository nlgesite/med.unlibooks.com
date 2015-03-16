<?php
/**
 * Class that operate on table 'tbl_supplier'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblSupplierMySqlDAO implements TblSupplierDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblSupplierMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_supplier WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_supplier';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_supplier ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblSupplier primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_supplier WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSupplierMySql tblSupplier
 	 */
	public function insert($tblSupplier){
		$sql = 'INSERT INTO tbl_supplier (org_id, supplier_account, name, date_created, address, email_address, phone_num, fax_num, active_account) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblSupplier->orgId);
		$sqlQuery->set($tblSupplier->supplierAccount);
		$sqlQuery->set($tblSupplier->name);
		$sqlQuery->set($tblSupplier->dateCreated);
		$sqlQuery->set($tblSupplier->address);
		$sqlQuery->set($tblSupplier->emailAddress);
		$sqlQuery->set($tblSupplier->phoneNum);
		$sqlQuery->set($tblSupplier->faxNum);
		$sqlQuery->set($tblSupplier->activeAccount);

		$id = $this->executeInsert($sqlQuery);	
		$tblSupplier->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSupplierMySql tblSupplier
 	 */
	public function update($tblSupplier){
		$sql = 'UPDATE tbl_supplier SET org_id = ?, supplier_account = ?, name = ?, date_created = ?, address = ?, email_address = ?, phone_num = ?, fax_num = ?, active_account = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblSupplier->orgId);
		$sqlQuery->set($tblSupplier->supplierAccount);
		$sqlQuery->set($tblSupplier->name);
		$sqlQuery->set($tblSupplier->dateCreated);
		$sqlQuery->set($tblSupplier->address);
		$sqlQuery->set($tblSupplier->emailAddress);
		$sqlQuery->set($tblSupplier->phoneNum);
		$sqlQuery->set($tblSupplier->faxNum);
		$sqlQuery->set($tblSupplier->activeAccount);

		$sqlQuery->setNumber($tblSupplier->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_supplier';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrgId($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySupplierAccount($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE supplier_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateCreated($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddress($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailAddress($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhoneNum($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE phone_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFaxNum($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE fax_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActiveAccount($value){
		$sql = 'SELECT * FROM tbl_supplier WHERE active_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrgId($value){
		$sql = 'DELETE FROM tbl_supplier WHERE org_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySupplierAccount($value){
		$sql = 'DELETE FROM tbl_supplier WHERE supplier_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM tbl_supplier WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateCreated($value){
		$sql = 'DELETE FROM tbl_supplier WHERE date_created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddress($value){
		$sql = 'DELETE FROM tbl_supplier WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailAddress($value){
		$sql = 'DELETE FROM tbl_supplier WHERE email_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhoneNum($value){
		$sql = 'DELETE FROM tbl_supplier WHERE phone_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFaxNum($value){
		$sql = 'DELETE FROM tbl_supplier WHERE fax_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActiveAccount($value){
		$sql = 'DELETE FROM tbl_supplier WHERE active_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblSupplierMySql 
	 */
	protected function readRow($row){
		$tblSupplier = new TblSupplier();
		
		$tblSupplier->id = $row['id'];
		$tblSupplier->orgId = $row['org_id'];
		$tblSupplier->supplierAccount = $row['supplier_account'];
		$tblSupplier->name = $row['name'];
		$tblSupplier->dateCreated = $row['date_created'];
		$tblSupplier->address = $row['address'];
		$tblSupplier->emailAddress = $row['email_address'];
		$tblSupplier->phoneNum = $row['phone_num'];
		$tblSupplier->faxNum = $row['fax_num'];
		$tblSupplier->activeAccount = $row['active_account'];

		return $tblSupplier;
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
	 * @return TblSupplierMySql 
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