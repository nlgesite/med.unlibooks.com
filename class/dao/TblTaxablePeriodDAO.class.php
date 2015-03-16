<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblTaxablePeriodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTaxablePeriod 
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
 	 * @param tblTaxablePeriod primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTaxablePeriod tblTaxablePeriod
 	 */
	public function insert($tblTaxablePeriod);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTaxablePeriod tblTaxablePeriod
 	 */
	public function update($tblTaxablePeriod);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByMonth($value);

	public function queryByYear($value);


	public function deleteByOrgId($value);

	public function deleteByMonth($value);

	public function deleteByYear($value);


}
?>