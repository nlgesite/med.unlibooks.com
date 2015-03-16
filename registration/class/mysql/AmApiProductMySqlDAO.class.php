<?php
/**
 * Class that operate on table 'am_api_product'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-04 03:47
 */
class AmApiProductMySqlDAO2 implements AmApiProductDAO2{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AmApiProductMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM am_api_product WHERE id = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM am_api_product';
		$sqlQuery = new SqlQuery2($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM am_api_product ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery2($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param amApiProduct primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM am_api_product WHERE id = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AmApiProductMySql amApiProduct
 	 */
	public function insert($amApiProduct){
		$sql = 'INSERT INTO am_api_product (title, package, type, description) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery2($sql);
		
		$sqlQuery->set($amApiProduct->title);
		$sqlQuery->set($amApiProduct->package);
		$sqlQuery->set($amApiProduct->type);
		$sqlQuery->set($amApiProduct->description);

		$id = $this->executeInsert($sqlQuery);	
		$amApiProduct->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AmApiProductMySql amApiProduct
 	 */
	public function update($amApiProduct){
		$sql = 'UPDATE am_api_product SET title = ?, package = ?, type = ?, description = ? WHERE id = ?';
		$sqlQuery = new SqlQuery2($sql);
		
		$sqlQuery->set($amApiProduct->title);
		$sqlQuery->set($amApiProduct->package);
		$sqlQuery->set($amApiProduct->type);
		$sqlQuery->set($amApiProduct->description);

		$sqlQuery->setNumber($amApiProduct->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM am_api_product';
		$sqlQuery = new SqlQuery2($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTitle($value){
		$sql = 'SELECT * FROM am_api_product WHERE title = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPackage($value){
		$sql = 'SELECT * FROM am_api_product WHERE package = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM am_api_product WHERE type = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM am_api_product WHERE description = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTitle($value){
		$sql = 'DELETE FROM am_api_product WHERE title = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPackage($value){
		$sql = 'DELETE FROM am_api_product WHERE package = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM am_api_product WHERE type = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM am_api_product WHERE description = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AmApiProductMySql 
	 */
	protected function readRow($row){
		$amApiProduct = new AmApiProduct2();
		
		$amApiProduct->id = $row['id'];
		$amApiProduct->title = $row['title'];
		$amApiProduct->package = $row['package'];
		$amApiProduct->type = $row['type'];
		$amApiProduct->description = $row['description'];

		return $amApiProduct;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor2::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return AmApiProductMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor2::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor2::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor2::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor2::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor2::executeInsert($sqlQuery);
	}
}
?>