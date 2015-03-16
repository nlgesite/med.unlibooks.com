<?php
/**
 * Class that operate on table 'am_api_subscription'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-04 03:47
 */
class AmApiSubscriptionMySqlDAO2 implements AmApiSubscriptionDAO2{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AmApiSubscriptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM am_api_subscription WHERE id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($id);
		return $this->getRow($SqlQuery2);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM am_api_subscription';
		$SqlQuery2 = new SqlQuery2($sql);
		return $this->getList($SqlQuery2);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM am_api_subscription ORDER BY '.$orderColumn;
		$SqlQuery2 = new SqlQuery2($sql);
		return $this->getList($SqlQuery2);
	}
	
	/**
 	 * Delete record from table
 	 * @param amApiSubscription primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM am_api_subscription WHERE id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($id);
		return $this->executeUpdate($SqlQuery2);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AmApiSubscriptionMySql amApiSubscription
 	 */
	public function insert($amApiSubscription){
		$sql = 'INSERT INTO am_api_subscription (ub_user_id, am_user_id, product_id, date_start, expiration, receipt_id, status) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$SqlQuery2 = new SqlQuery2($sql);
		
		$SqlQuery2->setNumber($amApiSubscription->ubUserId);
		$SqlQuery2->setNumber($amApiSubscription->amUserId);
		$SqlQuery2->setNumber($amApiSubscription->productId);
		$SqlQuery2->set($amApiSubscription->dateStart);
		$SqlQuery2->set($amApiSubscription->expiration);
		$SqlQuery2->set($amApiSubscription->receiptId);
		$SqlQuery2->set($amApiSubscription->status);

		$id = $this->executeInsert($SqlQuery2);	
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
		$SqlQuery2 = new SqlQuery2($sql);
		
		$SqlQuery2->setNumber($amApiSubscription->ubUserId);
		$SqlQuery2->setNumber($amApiSubscription->amUserId);
		$SqlQuery2->setNumber($amApiSubscription->productId);
		$SqlQuery2->set($amApiSubscription->dateStart);
		$SqlQuery2->set($amApiSubscription->expiration);
		$SqlQuery2->set($amApiSubscription->receiptId);
		$SqlQuery2->set($amApiSubscription->status);

		$SqlQuery2->setNumber($amApiSubscription->id);
		return $this->executeUpdate($SqlQuery2);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM am_api_subscription';
		$SqlQuery2 = new SqlQuery2($sql);
		return $this->executeUpdate($SqlQuery2);
	}

	public function queryByUbUserId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE ub_user_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByAmUserId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE am_user_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByProductId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE product_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByDateStart($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE date_start = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByExpiration($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE expiration = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByReceiptId($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE receipt_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM am_api_subscription WHERE status = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}


	public function deleteByUbUserId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE ub_user_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByAmUserId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE am_user_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByProductId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE product_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->setNumber($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByDateStart($value){
		$sql = 'DELETE FROM am_api_subscription WHERE date_start = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByExpiration($value){
		$sql = 'DELETE FROM am_api_subscription WHERE expiration = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByReceiptId($value){
		$sql = 'DELETE FROM am_api_subscription WHERE receipt_id = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM am_api_subscription WHERE status = ?';
		$SqlQuery2 = new SqlQuery2($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}


	
	/**
	 * Read row
	 *
	 * @return AmApiSubscriptionMySql 
	 */
	protected function readRow($row){
		$amApiSubscription = new AmApiSubscription2();
		
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
	
	protected function getList($SqlQuery2){
		$tab = QueryExecutor2::execute($SqlQuery2);
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
	protected function getRow($SqlQuery2){
		$tab = QueryExecutor2::execute($SqlQuery2);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($SqlQuery2){
		return QueryExecutor2::execute($SqlQuery2);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($SqlQuery2){
		return QueryExecutor2::executeUpdate($SqlQuery2);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($SqlQuery2){
		return QueryExecutor2::queryForString($SqlQuery2);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($SqlQuery2){
		return QueryExecutor2::executeInsert($SqlQuery2);
	}
}
?>