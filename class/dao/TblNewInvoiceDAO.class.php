<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblNewInvoiceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblNewInvoice 
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
 	 * @param tblNewInvoice primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblNewInvoice tblNewInvoice
 	 */
	public function insert($tblNewInvoice);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblNewInvoice tblNewInvoice
 	 */
	public function update($tblNewInvoice);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByClientId($value);

	public function queryByHmoId($value);

	public function queryByMopId($value);

	public function queryByClientAccount($value);

	public function queryBySendByEmail($value);

	public function queryByVatInclusive($value);

	public function queryByInvoiceNumber($value);

	public function queryByDateIssued($value);

	public function queryByDateReversed($value);

	public function queryByDueDate($value);

	public function queryByPOSO($value);

	public function queryByDiscount($value);

	public function queryByParticular($value);

	public function queryByRemarks($value);

	public function queryByStatus($value);

	public function queryByTotalAmountLine($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteByClientId($value);

	public function deleteByHmoId($value);

	public function deleteByMopId($value);

	public function deleteByClientAccount($value);

	public function deleteBySendByEmail($value);

	public function deleteByVatInclusive($value);

	public function deleteByInvoiceNumber($value);

	public function deleteByDateIssued($value);

	public function deleteByDateReversed($value);

	public function deleteByDueDate($value);

	public function deleteByPOSO($value);

	public function deleteByDiscount($value);

	public function deleteByParticular($value);

	public function deleteByRemarks($value);

	public function deleteByStatus($value);

	public function deleteByTotalAmountLine($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>