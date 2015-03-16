<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblInvoiceAmountDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblInvoiceAmount 
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
 	 * @param tblInvoiceAmount primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblInvoiceAmount tblInvoiceAmount
 	 */
	public function insert($tblInvoiceAmount);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblInvoiceAmount tblInvoiceAmount
 	 */
	public function update($tblInvoiceAmount);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAllInvoiceId($value);

	public function queryBySubTotalAmount($value);

	public function queryByVatAmount($value);

	public function queryByDiscountAmount($value);

	public function queryByGrandTotal($value);


	public function deleteByAllInvoiceId($value);

	public function deleteBySubTotalAmount($value);

	public function deleteByVatAmount($value);

	public function deleteByDiscountAmount($value);

	public function deleteByGrandTotal($value);


}
?>