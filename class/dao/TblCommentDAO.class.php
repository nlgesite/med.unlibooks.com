<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblCommentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblComment 
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
 	 * @param tblComment primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblComment tblComment
 	 */
	public function insert($tblComment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblComment tblComment
 	 */
	public function update($tblComment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByTitle($value);

	public function queryByMessage($value);


	public function deleteByUserId($value);

	public function deleteByTitle($value);

	public function deleteByMessage($value);


}
?>