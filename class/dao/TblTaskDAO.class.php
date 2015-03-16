<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblTaskDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTask 
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
 	 * @param tblTask primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTask tblTask
 	 */
	public function insert($tblTask);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTask tblTask
 	 */
	public function update($tblTask);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByTaskCode($value);

	public function queryByDescription($value);

	public function queryByRatePerHour($value);

	public function queryByGlPosting($value);

	public function queryByActive($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteByOrgId($value);

	public function deleteByTaskCode($value);

	public function deleteByDescription($value);

	public function deleteByRatePerHour($value);

	public function deleteByGlPosting($value);

	public function deleteByActive($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>