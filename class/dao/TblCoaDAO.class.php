<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblCoaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblCoa 
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
 	 * @param tblCoa primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCoa tblCoa
 	 */
	public function insert($tblCoa);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCoa tblCoa
 	 */
	public function update($tblCoa);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByAccountNum($value);

	public function queryByAccountType($value);

	public function queryByAccontName($value);

	public function queryBySubAccount($value);

	public function queryByOpeningBal($value);

	public function queryByActiveAccount($value);


	public function deleteByOrgId($value);

	public function deleteByAccountNum($value);

	public function deleteByAccountType($value);

	public function deleteByAccontName($value);

	public function deleteBySubAccount($value);

	public function deleteByOpeningBal($value);

	public function deleteByActiveAccount($value);


}
?>