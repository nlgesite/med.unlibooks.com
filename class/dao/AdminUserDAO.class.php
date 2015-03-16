<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface AdminUserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AdminUser 
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
 	 * @param adminUser primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminUser adminUser
 	 */
	public function insert($adminUser);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminUser adminUser
 	 */
	public function update($adminUser);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByEmailAddress($value);

	public function queryByPassword($value);


	public function deleteByEmailAddress($value);

	public function deleteByPassword($value);


}
?>