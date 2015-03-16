<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblSupplierDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblSupplier 
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
 	 * @param tblSupplier primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSupplier tblSupplier
 	 */
	public function insert($tblSupplier);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSupplier tblSupplier
 	 */
	public function update($tblSupplier);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryBySupplierAccount($value);

	public function queryByName($value);

	public function queryByDateCreated($value);

	public function queryByAddress($value);

	public function queryByEmailAddress($value);

	public function queryByPhoneNum($value);

	public function queryByFaxNum($value);

	public function queryByActiveAccount($value);


	public function deleteByOrgId($value);

	public function deleteBySupplierAccount($value);

	public function deleteByName($value);

	public function deleteByDateCreated($value);

	public function deleteByAddress($value);

	public function deleteByEmailAddress($value);

	public function deleteByPhoneNum($value);

	public function deleteByFaxNum($value);

	public function deleteByActiveAccount($value);


}
?>