<?php
/**
 * Object executes sql queries
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class QueryExecutor2{

	/**
	 * Wykonaniew zapytania do bazy
	 *
	 * @param sqlQuery obiekt typu SqlQuery
	 * @return wynik zapytania 
	 */
	public static function execute($sqlQuery){
		$transaction = Transaction2::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection2();
		}else{
			$connection = $transaction->getConnection();
		}		
		$query = $sqlQuery->getQuery();
		$result = $connection->executeQuery($query);
		if(!$result){
			throw new Exception(mysqli_error($connection->connection));
		}
		$i=0;
		$tab = array();
		while ($row = mysqli_fetch_array($result)){
			$tab[$i++] = $row;
		}
		mysqli_free_result($result);
		if(!$transaction){
			$connection->close();
		}
		// exit;
		return $tab;
	}
	
	
	public static function executeUpdate($sqlQuery){
		$transaction = Transaction2::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection2();
		}else{
			$connection = $transaction->getConnection();
		}		
		$query = $sqlQuery->getQuery();
		$result = $connection->executeQuery($query);
		if(!$result){
			throw new Exception(mysqli_error($connection->connection));
		}

		// mysqli_affected_rows($connection->connection);		
		return mysqli_affected_rows($connection->connection);		
	}

	public static function executeInsert($sqlQuery){
		// QueryExecutor::executeUpdate($sqlQuery);
		$transaction = Transaction2::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection2();
		}else{
			$connection = $transaction->getConnection();
		}		
		$query = $sqlQuery->getQuery();
		$result = $connection->executeQuery($query);
		if(!$result){
			throw new Exception(mysqli_error($connection->connection));
		}
		return mysqli_insert_id($connection->connection);
	}
	
	/**
	 * Wykonaniew zapytania do bazy
	 *
	 * @param sqlQuery obiekt typu SqlQuery
	 * @return wynik zapytania 
	 */
	public static function queryForString($sqlQuery){
		$transaction = Transaction2::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection2();
		}else{
			$connection = $transaction->getConnection();
		}
		$result = $connection->executeQuery($sqlQuery->getQuery());
		if(!$result){
			throw new Exception(mysqli_error($connection->connection));
		}
		$row = mysqli_fetch_array($connection->connection);		
		return $row[0];
	}

}
?>