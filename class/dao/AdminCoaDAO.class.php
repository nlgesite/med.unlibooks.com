<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface AdminCoaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AdminCoa 
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
 	 * @param adminCoa primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminCoa adminCoa
 	 */
	public function insert($adminCoa);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminCoa adminCoa
 	 */
	public function update($adminCoa);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAccountNum($value);

	public function queryByAccountType($value);

	public function queryByIncomeBalanceSheet($value);

	public function queryByAccountName($value);

	public function queryByDescription($value);

	public function queryBySubAccount($value);


	public function deleteByAccountNum($value);

	public function deleteByAccountType($value);

	public function deleteByIncomeBalanceSheet($value);

	public function deleteByAccountName($value);

	public function deleteByDescription($value);

	public function deleteBySubAccount($value);


}
?>