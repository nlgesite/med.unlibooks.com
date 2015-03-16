<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblExpenseLinesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblExpenseLines 
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
 	 * @param tblExpenseLine primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblExpenseLines tblExpenseLine
 	 */
	public function insert($tblExpenseLine);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblExpenseLines tblExpenseLine
 	 */
	public function update($tblExpenseLine);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNewExpenseId($value);

	public function queryByCoaId($value);

	public function queryByDescriptionMemo($value);

	public function queryByVatId($value);

	public function queryByNetAmount($value);


	public function deleteByNewExpenseId($value);

	public function deleteByCoaId($value);

	public function deleteByDescriptionMemo($value);

	public function deleteByVatId($value);

	public function deleteByNetAmount($value);


}
?>