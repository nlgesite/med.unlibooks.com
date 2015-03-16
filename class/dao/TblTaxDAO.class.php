<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblTaxDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTax 
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
 	 * @param tblTax primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTax tblTax
 	 */
	public function insert($tblTax);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTax tblTax
 	 */
	public function update($tblTax);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTaxCode($value);

	public function queryByDescription($value);

	public function queryByRate($value);

	public function queryByActive($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteByTaxCode($value);

	public function deleteByDescription($value);

	public function deleteByRate($value);

	public function deleteByActive($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>