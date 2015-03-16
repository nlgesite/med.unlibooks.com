<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblTrialBalanceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTrialBalance 
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
 	 * @param tblTrialBalance primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTrialBalance tblTrialBalance
 	 */
	public function insert($tblTrialBalance);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTrialBalance tblTrialBalance
 	 */
	public function update($tblTrialBalance);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCoaId($value);

	public function queryByDebit($value);

	public function queryByCredit($value);

	public function queryByBalance($value);


	public function deleteByCoaId($value);

	public function deleteByDebit($value);

	public function deleteByCredit($value);

	public function deleteByBalance($value);


}
?>