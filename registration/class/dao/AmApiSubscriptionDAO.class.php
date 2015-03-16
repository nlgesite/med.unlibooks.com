<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-04 03:47
 */
interface AmApiSubscriptionDAO2{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AmApiSubscription 
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
 	 * @param amApiSubscription primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AmApiSubscription amApiSubscription
 	 */
	public function insert($amApiSubscription);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AmApiSubscription amApiSubscription
 	 */
	public function update($amApiSubscription);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUbUserId($value);

	public function queryByAmUserId($value);

	public function queryByProductId($value);

	public function queryByDateStart($value);

	public function queryByExpiration($value);

	public function queryByReceiptId($value);

	public function queryByStatus($value);


	public function deleteByUbUserId($value);

	public function deleteByAmUserId($value);

	public function deleteByProductId($value);

	public function deleteByDateStart($value);

	public function deleteByExpiration($value);

	public function deleteByReceiptId($value);

	public function deleteByStatus($value);


}
?>