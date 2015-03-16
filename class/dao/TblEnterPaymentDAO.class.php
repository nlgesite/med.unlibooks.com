<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblEnterPaymentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblEnterPayment 
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
 	 * @param tblEnterPayment primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEnterPayment tblEnterPayment
 	 */
	public function insert($tblEnterPayment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEnterPayment tblEnterPayment
 	 */
	public function update($tblEnterPayment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByColNum($value);

	public function queryByHmoId($value);

	public function queryByTimeTrackingId($value);

	public function queryByAmountReceived($value);

	public function queryByDateReceived($value);

	public function queryByDateReversed($value);

	public function queryByRefNum($value);

	public function queryByMopId($value);

	public function queryByGlPosting($value);

	public function queryByWhtTax($value);

	public function queryByCheckDate($value);

	public function queryByStatus($value);

	public function queryByNotes($value);


	public function deleteByColNum($value);

	public function deleteByHmoId($value);

	public function deleteByTimeTrackingId($value);

	public function deleteByAmountReceived($value);

	public function deleteByDateReceived($value);

	public function deleteByDateReversed($value);

	public function deleteByRefNum($value);

	public function deleteByMopId($value);

	public function deleteByGlPosting($value);

	public function deleteByWhtTax($value);

	public function deleteByCheckDate($value);

	public function deleteByStatus($value);

	public function deleteByNotes($value);


}
?>