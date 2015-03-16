<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-04 03:47
 */
interface AmApiProductDAO2{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AmApiProduct 
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
 	 * @param amApiProduct primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AmApiProduct amApiProduct
 	 */
	public function insert($amApiProduct);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AmApiProduct amApiProduct
 	 */
	public function update($amApiProduct);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByPackage($value);

	public function queryByType($value);

	public function queryByDescription($value);


	public function deleteByTitle($value);

	public function deleteByPackage($value);

	public function deleteByType($value);

	public function deleteByDescription($value);


}
?>