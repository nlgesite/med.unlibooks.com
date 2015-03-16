<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblClientDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblClient 
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
 	 * @param tblClient primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblClient tblClient
 	 */
	public function insert($tblClient);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblClient tblClient
 	 */
	public function update($tblClient);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByClientAccount($value);

	public function queryByClientName($value);

	public function queryByAddress($value);

	public function queryByTinNum($value);

	public function queryByEmailAddress($value);

	public function queryByPhoneNumber($value);

	public function queryByContactName($value);

	public function queryByContactNum($value);

	public function queryByContactEmailAddress($value);

	public function queryByHmo($value);

	public function queryByHmoNum($value);

	public function queryByActive($value);

	public function queryByDateCreated($value);


	public function deleteByOrgId($value);

	public function deleteByClientAccount($value);

	public function deleteByClientName($value);

	public function deleteByAddress($value);

	public function deleteByTinNum($value);

	public function deleteByEmailAddress($value);

	public function deleteByPhoneNumber($value);

	public function deleteByContactName($value);

	public function deleteByContactNum($value);

	public function deleteByContactEmailAddress($value);

	public function deleteByHmo($value);

	public function deleteByHmoNum($value);

	public function deleteByActive($value);

	public function deleteByDateCreated($value);


}
?>