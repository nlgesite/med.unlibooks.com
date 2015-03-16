<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblNewExpenseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblNewExpense 
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
 	 * @param tblNewExpense primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblNewExpense tblNewExpense
 	 */
	public function insert($tblNewExpense);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblNewExpense tblNewExpense
 	 */
	public function update($tblNewExpense);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySupplierId($value);

	public function queryByExpenseNumber($value);

	public function queryByReferenceNumber($value);

	public function queryByInclusiveOfVat($value);

	public function queryByEWT($value);

	public function queryByDateIssued($value);

	public function queryByDateReversed($value);

	public function queryByParticular($value);

	public function queryByStatus($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteBySupplierId($value);

	public function deleteByExpenseNumber($value);

	public function deleteByReferenceNumber($value);

	public function deleteByInclusiveOfVat($value);

	public function deleteByEWT($value);

	public function deleteByDateIssued($value);

	public function deleteByDateReversed($value);

	public function deleteByParticular($value);

	public function deleteByStatus($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>