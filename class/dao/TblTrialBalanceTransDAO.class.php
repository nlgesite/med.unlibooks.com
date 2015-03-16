<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblTrialBalanceTransDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTrialBalanceTrans 
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
 	 * @param tblTrialBalanceTran primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTrialBalanceTrans tblTrialBalanceTran
 	 */
	public function insert($tblTrialBalanceTran);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTrialBalanceTrans tblTrialBalanceTran
 	 */
	public function update($tblTrialBalanceTran);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTrialBalanceId($value);

	public function queryByRefNo($value);

	public function queryByDate($value);

	public function queryByTypeOfTransaction($value);


	public function deleteByTrialBalanceId($value);

	public function deleteByRefNo($value);

	public function deleteByDate($value);

	public function deleteByTypeOfTransaction($value);


}
?>