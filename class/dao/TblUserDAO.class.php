<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblUserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblUser 
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
 	 * @param tblUser primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblUser tblUser
 	 */
	public function insert($tblUser);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblUser tblUser
 	 */
	public function update($tblUser);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgInfoId($value);

	public function queryByUserNo($value);

	public function queryByFullName($value);

	public function queryByEmailAddress($value);

	public function queryByPassword($value);

	public function queryByType($value);

	public function queryByActive($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteByOrgInfoId($value);

	public function deleteByUserNo($value);

	public function deleteByFullName($value);

	public function deleteByEmailAddress($value);

	public function deleteByPassword($value);

	public function deleteByType($value);

	public function deleteByActive($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>