<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-04 03:47
 */
interface MedAccountsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MedAccounts 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param medAccount primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MedAccounts medAccount
 	 */
	public function insert($medAccount);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MedAccounts medAccount
 	 */
	public function update($medAccount);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubdomain($value);

	public function queryByDatabaseName($value);

	public function queryByDatabaseUser($value);

	public function queryByDateRegistered($value);

	public function queryByAccountName($value);

	public function queryBySuffix($value);

	public function queryByEmail($value);


	public function deleteBySubdomain($value);

	public function deleteByDatabaseName($value);

	public function deleteByDatabaseUser($value);

	public function deleteByDateRegistered($value);

	public function deleteByAccountName($value);

	public function deleteBySuffix($value);

	public function deleteByEmail($value);


}
?>