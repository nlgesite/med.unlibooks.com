<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblExpenseAmountDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblExpenseAmount 
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
 	 * @param tblExpenseAmount primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblExpenseAmount tblExpenseAmount
 	 */
	public function insert($tblExpenseAmount);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblExpenseAmount tblExpenseAmount
 	 */
	public function update($tblExpenseAmount);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNewExpenseId($value);

	public function queryBySubTotalAmount($value);

	public function queryByVatAmount($value);

	public function queryByEWTAmount($value);

	public function queryByGrandTotal($value);


	public function deleteByNewExpenseId($value);

	public function deleteBySubTotalAmount($value);

	public function deleteByVatAmount($value);

	public function deleteByEWTAmount($value);

	public function deleteByGrandTotal($value);


}
?>