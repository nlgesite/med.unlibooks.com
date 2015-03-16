<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblAllCollectionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblAllCollection 
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
 	 * @param tblAllCollection primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAllCollection tblAllCollection
 	 */
	public function insert($tblAllCollection);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAllCollection tblAllCollection
 	 */
	public function update($tblAllCollection);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByInvoicedAmountId($value);

	public function queryByAppliedAmount($value);

	public function queryByTotalBalance($value);

	public function queryByWhtAmount($value);

	public function queryByEnterPaymentId($value);


	public function deleteByInvoicedAmountId($value);

	public function deleteByAppliedAmount($value);

	public function deleteByTotalBalance($value);

	public function deleteByWhtAmount($value);

	public function deleteByEnterPaymentId($value);


}
?>