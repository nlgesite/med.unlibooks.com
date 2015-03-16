<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblAtc1601eDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblAtc1601e 
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
 	 * @param tblAtc1601e primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAtc1601e tblAtc1601e
 	 */
	public function insert($tblAtc1601e);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAtc1601e tblAtc1601e
 	 */
	public function update($tblAtc1601e);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByForm1601eId($value);

	public function queryByAccountName($value);

	public function queryByAtcCode($value);

	public function queryByAmount($value);

	public function queryByRate($value);

	public function queryByTaxRequired($value);


	public function deleteByForm1601eId($value);

	public function deleteByAccountName($value);

	public function deleteByAtcCode($value);

	public function deleteByAmount($value);

	public function deleteByRate($value);

	public function deleteByTaxRequired($value);


}
?>