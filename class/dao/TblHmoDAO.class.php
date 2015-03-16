<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblHmoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblHmo 
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
 	 * @param tblHmo primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblHmo tblHmo
 	 */
	public function insert($tblHmo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblHmo tblHmo
 	 */
	public function update($tblHmo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByHmoAccount($value);

	public function queryByHmoName($value);

	public function queryByAddress($value);

	public function queryByTin($value);

	public function queryByEmailAddress($value);

	public function queryByPhoneNumber($value);

	public function queryByFaxNumber($value);

	public function queryByGlPosting($value);

	public function queryByActive($value);

	public function queryByDateCreated($value);


	public function deleteByOrgId($value);

	public function deleteByHmoAccount($value);

	public function deleteByHmoName($value);

	public function deleteByAddress($value);

	public function deleteByTin($value);

	public function deleteByEmailAddress($value);

	public function deleteByPhoneNumber($value);

	public function deleteByFaxNumber($value);

	public function deleteByGlPosting($value);

	public function deleteByActive($value);

	public function deleteByDateCreated($value);


}
?>