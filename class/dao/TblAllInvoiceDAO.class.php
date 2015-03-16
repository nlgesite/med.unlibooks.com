<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblAllInvoiceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblAllInvoice 
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
 	 * @param tblAllInvoice primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAllInvoice tblAllInvoice
 	 */
	public function insert($tblAllInvoice);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAllInvoice tblAllInvoice
 	 */
	public function update($tblAllInvoice);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNewInvoiceId($value);

	public function queryByNewRecurringId($value);


	public function deleteByNewInvoiceId($value);

	public function deleteByNewRecurringId($value);


}
?>