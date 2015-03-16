<?php
/**
 * Class that operate on table 'med_accounts'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-16 07:06
 */
class MedAccountsMySqlDAO implements MedAccountsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MedAccountsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM med_accounts WHERE id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($id);
		return $this->getRow($SqlQuery2);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM med_accounts';
		$SqlQuery2 = new SqlQuery2($sql);
		return $this->getList($SqlQuery2);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM med_accounts ORDER BY '.$orderColumn;
		$SqlQuery2 = new SqlQuery2($sql);
		return $this->getList($SqlQuery2);
	}
	
	/**
 	 * Delete record from table
 	 * @param medAccount primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM med_accounts WHERE id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($id);
		return $this->executeUpdate($SqlQuery2);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MedAccountsMySql medAccount
 	 */
	public function insert($medAccount){
		$sql = 'INSERT INTO med_accounts (subdomain, database_name, database_user, date_registered, account_name, suffix, email, verified) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$SqlQuery2 = new SqlQuery2($sql);
		
		$SqlQuery2->set($medAccount->subdomain);
		$SqlQuery2->set($medAccount->databaseName);
		$SqlQuery2->set($medAccount->databaseUser);
		$SqlQuery2->set($medAccount->dateRegistered);
		$SqlQuery2->set($medAccount->accountName);
		$SqlQuery2->set($medAccount->suffix);
		$SqlQuery2->set($medAccount->email);
		$SqlQuery2->setNumber($medAccount->verified);

		$id = $this->executeInsert($SqlQuery2);	
		$medAccount->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MedAccountsMySql medAccount
 	 */
	public function update($medAccount){
		$sql = 'UPDATE med_accounts SET subdomain = ?, database_name = ?, database_user = ?, date_registered = ?, account_name = ?, suffix = ?, email = ?, verified = ? WHERE id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		
		$SqlQuery2->set($medAccount->subdomain);
		$SqlQuery2->set($medAccount->databaseName);
		$SqlQuery2->set($medAccount->databaseUser);
		$SqlQuery2->set($medAccount->dateRegistered);
		$SqlQuery2->set($medAccount->accountName);
		$SqlQuery2->set($medAccount->suffix);
		$SqlQuery2->set($medAccount->email);
		$SqlQuery2->setNumber($medAccount->verified);

		$SqlQuery2->setNumber($medAccount->id);
		return $this->executeUpdate($SqlQuery2);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM med_accounts';
		$SqlQuery2 = new SqlQuery2($sql);
		return $this->executeUpdate($SqlQuery2);
	}

	public function queryBySubdomain($value){
		$sql = 'SELECT * FROM med_accounts WHERE subdomain = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByDatabaseName($value){
		$sql = 'SELECT * FROM med_accounts WHERE database_name = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByDatabaseUser($value){
		$sql = 'SELECT * FROM med_accounts WHERE database_user = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByDateRegistered($value){
		$sql = 'SELECT * FROM med_accounts WHERE date_registered = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByAccountName($value){
		$sql = 'SELECT * FROM med_accounts WHERE account_name = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryBySuffix($value){
		$sql = 'SELECT * FROM med_accounts WHERE suffix = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM med_accounts WHERE email = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByVerified($value){
		$sql = 'SELECT * FROM med_accounts WHERE verified = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->getList($SqlQuery2);
	}


	public function deleteBySubdomain($value){
		$sql = 'DELETE FROM med_accounts WHERE subdomain = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByDatabaseName($value){
		$sql = 'DELETE FROM med_accounts WHERE database_name = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByDatabaseUser($value){
		$sql = 'DELETE FROM med_accounts WHERE database_user = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByDateRegistered($value){
		$sql = 'DELETE FROM med_accounts WHERE date_registered = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByAccountName($value){
		$sql = 'DELETE FROM med_accounts WHERE account_name = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteBySuffix($value){
		$sql = 'DELETE FROM med_accounts WHERE suffix = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM med_accounts WHERE email = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByVerified($value){
		$sql = 'DELETE FROM med_accounts WHERE verified = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->executeUpdate($SqlQuery2);
	}


	
	/**
	 * Read row
	 *
	 * @return MedAccountsMySql 
	 */
	protected function readRow($row){
		$medAccount = new MedAccount();
		
		$medAccount->id = $row['id'];
		$medAccount->subdomain = $row['subdomain'];
		$medAccount->databaseName = $row['database_name'];
		$medAccount->databaseUser = $row['database_user'];
		$medAccount->dateRegistered = $row['date_registered'];
		$medAccount->accountName = $row['account_name'];
		$medAccount->suffix = $row['suffix'];
		$medAccount->email = $row['email'];
		$medAccount->verified = $row['verified'];

		return $medAccount;
	}
	
	protected function getList($SqlQuery2){
		$tab = QueryExecutor2::execute($SqlQuery2);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return MedAccountsMySql 
	 */
	protected function getRow($SqlQuery2){
		$tab = QueryExecutor2::execute($SqlQuery2);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($SqlQuery2){
		return QueryExecutor2::execute($SqlQuery2);
	}
	
	
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($SqlQuery2){
		return QueryExecutor2::executeUpdate($SqlQuery2);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($SqlQuery2){
		return QueryExecutor2::queryForString($SqlQuery2);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($SqlQuery2){
		return QueryExecutor2::executeInsert($SqlQuery2);
	}
}
?>