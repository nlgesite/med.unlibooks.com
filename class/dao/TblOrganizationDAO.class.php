<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblOrganizationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblOrganization 
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
 	 * @param tblOrganization primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblOrganization tblOrganization
 	 */
	public function insert($tblOrganization);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblOrganization tblOrganization
 	 */
	public function update($tblOrganization);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgAccount($value);

	public function queryByOrgName($value);

	public function queryByActive($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteByOrgAccount($value);

	public function deleteByOrgName($value);

	public function deleteByActive($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>