<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblInvoiceLinesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblInvoiceLines 
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
 	 * @param tblInvoiceLine primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblInvoiceLines tblInvoiceLine
 	 */
	public function insert($tblInvoiceLine);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblInvoiceLines tblInvoiceLine
 	 */
	public function update($tblInvoiceLine);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNewInvoiceId($value);

	public function queryByItemId($value);

	public function queryByTaskId($value);

	public function queryByDescription($value);

	public function queryByVat($value);

	public function queryByRate($value);

	public function queryByUnitCost($value);

	public function queryByHour($value);

	public function queryByQuantity($value);

	public function queryByNetAmount($value);


	public function deleteByNewInvoiceId($value);

	public function deleteByItemId($value);

	public function deleteByTaskId($value);

	public function deleteByDescription($value);

	public function deleteByVat($value);

	public function deleteByRate($value);

	public function deleteByUnitCost($value);

	public function deleteByHour($value);

	public function deleteByQuantity($value);

	public function deleteByNetAmount($value);


}
?>