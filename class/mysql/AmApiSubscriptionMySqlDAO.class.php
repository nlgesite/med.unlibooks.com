<?php
/**
 * Class that operate on table 'am_api_subscription'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class AmApiSubscriptionMySqlDAO implements AmApiSubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AmApiSubscriptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM am_api_subscription WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM am_api_subscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM am_api_subscription ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param amApiSubscription primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM am_api_subscription WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AmApiSubscriptionMySql amApiSubscription
 	 */
	public function insert($amApiSubscription){
		$sql = 'INSERT INTO am_api_subscription (ub_user_id, am_user_id, product_id, date_start, expiration, receipt_id, status) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($amApiSubscription->ubUserId);
		$sqlQuery->setNumber($amApiSubscription->amUserId);
		$sqlQuery->setNumber($amApiSubscription->productId);
		$sqlQuery->set($amApiSubscription->dateStart);
		$sqlQuery->set($amApiSubscription->expiration);
		$sqlQuery->set($amApiSubscription->receiptId);
		$sqlQuery->set($amApiSubscription->status);

		$id = $this->executeInsert($sqlQuery);	
		$amApiSubscription->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AmApiSubscriptionMySql amApiSubscription
 	 */
	public function update($amApiSubscription){
		$sql = 'UPDATE am_api_subscription SET ub_user_id = ?, am_user_id = ?, product_id = ?, date_start = ?, expiration = ?, receipt_id = ?, status = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($amApiSubscription->ubUserId);
		$sqlQuery->setNumber($amApiSubscription->amUserId);
		$sqlQuery->setNumber($amApiSubscription->productId);
		$sqlQuery->set($amApiSubscription->dateStart);
		$sqlQuery->set($amApiSubscription->expiration);
		$sqlQuery->set($amApiSubscription->receiptId);
		$sqlQuery->set($amApiSubscription->status);

		$sqlQuery->setNumber($amApiSubscription->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM am_api_subscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUbUserId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE ub_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAmUserId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE am_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProductId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE product_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateStart($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE date_start = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpiration($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE expiration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReceiptId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE receipt_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUbUserId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE ub_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAmUserId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE am_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProductId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE product_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateStart($value){
		$sql = 'DELETE FROM am_api_subscription WHERE date_start = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpiration($value){
		$sql = 'DELETE FROM am_api_subscription WHERE expiration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReceiptId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE receipt_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM am_api_subscription WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AmApiSubscriptionMySql 
	 */
	protected function readRow($row){
		$amApiSubscription = new AmApiSubscription();
		
		$amApiSubscription->id = $row['id'];
		$amApiSubscription->ubUserId = $row['ub_user_id'];
		$amApiSubscription->amUserId = $row['am_user_id'];
		$amApiSubscription->productId = $row['product_id'];
		$amApiSubscription->dateStart = $row['date_start'];
		$amApiSubscription->expiration = $row['expiration'];
		$amApiSubscription->receiptId = $row['receipt_id'];
		$amApiSubscription->status = $row['status'];

		return $amApiSubscription;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return AmApiSubscriptionMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>