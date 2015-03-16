<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblMopDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblMop 
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
 	 * @param tblMop primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblMop tblMop
 	 */
	public function insert($tblMop);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblMop tblMop
 	 */
	public function update($tblMop);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCode($value);

	public function queryByDescription($value);


	public function deleteByCode($value);

	public function deleteByDescription($value);


}
?>