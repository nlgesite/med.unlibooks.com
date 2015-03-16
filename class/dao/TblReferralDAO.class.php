<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblReferralDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblReferral 
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
 	 * @param tblReferral primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblReferral tblReferral
 	 */
	public function insert($tblReferral);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblReferral tblReferral
 	 */
	public function update($tblReferral);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByNameOfFriend($value);

	public function queryByEmailOfFriend($value);

	public function queryBySubject($value);

	public function queryByMessage($value);


	public function deleteByUserId($value);

	public function deleteByNameOfFriend($value);

	public function deleteByEmailOfFriend($value);

	public function deleteBySubject($value);

	public function deleteByMessage($value);


}
?>