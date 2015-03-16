<?php
/**
 * Class that operate on table 'user_permission'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class UserPermissionMySqlDAO implements UserPermissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UserPermissionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM user_permission WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM user_permission';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM user_permission ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param userPermission primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM user_permission WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserPermissionMySql userPermission
 	 */
	public function insert($userPermission){
		$sql = 'INSERT INTO user_permission (user_id, invoice_module, invoice, recurring, collections, customers, items, expenses_module, expense, vendors, time_tracking_module, time_sheet, project, task, setting_module, company, taxes, bank, chart_of_account, user_permision, import_export) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userPermission->userId);
		$sqlQuery->set($userPermission->invoiceModule);
		$sqlQuery->set($userPermission->invoice);
		$sqlQuery->set($userPermission->recurring);
		$sqlQuery->set($userPermission->collections);
		$sqlQuery->set($userPermission->customers);
		$sqlQuery->set($userPermission->items);
		$sqlQuery->set($userPermission->expensesModule);
		$sqlQuery->set($userPermission->expense);
		$sqlQuery->set($userPermission->vendors);
		$sqlQuery->set($userPermission->timeTrackingModule);
		$sqlQuery->set($userPermission->timeSheet);
		$sqlQuery->set($userPermission->project);
		$sqlQuery->set($userPermission->task);
		$sqlQuery->set($userPermission->settingModule);
		$sqlQuery->set($userPermission->company);
		$sqlQuery->set($userPermission->taxes);
		$sqlQuery->set($userPermission->bank);
		$sqlQuery->set($userPermission->chartOfAccount);
		$sqlQuery->set($userPermission->userPermision);
		$sqlQuery->set($userPermission->importExport);

		$id = $this->executeInsert($sqlQuery);	
		$userPermission->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserPermissionMySql userPermission
 	 */
	public function update($userPermission){
		$sql = 'UPDATE user_permission SET user_id = ?, invoice_module = ?, invoice = ?, recurring = ?, collections = ?, customers = ?, items = ?, expenses_module = ?, expense = ?, vendors = ?, time_tracking_module = ?, time_sheet = ?, project = ?, task = ?, setting_module = ?, company = ?, taxes = ?, bank = ?, chart_of_account = ?, user_permision = ?, import_export = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userPermission->userId);
		$sqlQuery->set($userPermission->invoiceModule);
		$sqlQuery->set($userPermission->invoice);
		$sqlQuery->set($userPermission->recurring);
		$sqlQuery->set($userPermission->collections);
		$sqlQuery->set($userPermission->customers);
		$sqlQuery->set($userPermission->items);
		$sqlQuery->set($userPermission->expensesModule);
		$sqlQuery->set($userPermission->expense);
		$sqlQuery->set($userPermission->vendors);
		$sqlQuery->set($userPermission->timeTrackingModule);
		$sqlQuery->set($userPermission->timeSheet);
		$sqlQuery->set($userPermission->project);
		$sqlQuery->set($userPermission->task);
		$sqlQuery->set($userPermission->settingModule);
		$sqlQuery->set($userPermission->company);
		$sqlQuery->set($userPermission->taxes);
		$sqlQuery->set($userPermission->bank);
		$sqlQuery->set($userPermission->chartOfAccount);
		$sqlQuery->set($userPermission->userPermision);
		$sqlQuery->set($userPermission->importExport);

		$sqlQuery->setNumber($userPermission->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM user_permission';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM user_permission WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceModule($value){
		$sql = 'SELECT * FROM user_permission WHERE invoice_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoice($value){
		$sql = 'SELECT * FROM user_permission WHERE invoice = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecurring($value){
		$sql = 'SELECT * FROM user_permission WHERE recurring = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCollections($value){
		$sql = 'SELECT * FROM user_permission WHERE collections = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCustomers($value){
		$sql = 'SELECT * FROM user_permission WHERE customers = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItems($value){
		$sql = 'SELECT * FROM user_permission WHERE items = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpensesModule($value){
		$sql = 'SELECT * FROM user_permission WHERE expenses_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpense($value){
		$sql = 'SELECT * FROM user_permission WHERE expense = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVendors($value){
		$sql = 'SELECT * FROM user_permission WHERE vendors = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTimeTrackingModule($value){
		$sql = 'SELECT * FROM user_permission WHERE time_tracking_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTimeSheet($value){
		$sql = 'SELECT * FROM user_permission WHERE time_sheet = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProject($value){
		$sql = 'SELECT * FROM user_permission WHERE project = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTask($value){
		$sql = 'SELECT * FROM user_permission WHERE task = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySettingModule($value){
		$sql = 'SELECT * FROM user_permission WHERE setting_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompany($value){
		$sql = 'SELECT * FROM user_permission WHERE company = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaxes($value){
		$sql = 'SELECT * FROM user_permission WHERE taxes = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBank($value){
		$sql = 'SELECT * FROM user_permission WHERE bank = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChartOfAccount($value){
		$sql = 'SELECT * FROM user_permission WHERE chart_of_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserPermision($value){
		$sql = 'SELECT * FROM user_permission WHERE user_permision = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByImportExport($value){
		$sql = 'SELECT * FROM user_permission WHERE import_export = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM user_permission WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceModule($value){
		$sql = 'DELETE FROM user_permission WHERE invoice_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoice($value){
		$sql = 'DELETE FROM user_permission WHERE invoice = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecurring($value){
		$sql = 'DELETE FROM user_permission WHERE recurring = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCollections($value){
		$sql = 'DELETE FROM user_permission WHERE collections = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCustomers($value){
		$sql = 'DELETE FROM user_permission WHERE customers = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItems($value){
		$sql = 'DELETE FROM user_permission WHERE items = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpensesModule($value){
		$sql = 'DELETE FROM user_permission WHERE expenses_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpense($value){
		$sql = 'DELETE FROM user_permission WHERE expense = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVendors($value){
		$sql = 'DELETE FROM user_permission WHERE vendors = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTimeTrackingModule($value){
		$sql = 'DELETE FROM user_permission WHERE time_tracking_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTimeSheet($value){
		$sql = 'DELETE FROM user_permission WHERE time_sheet = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProject($value){
		$sql = 'DELETE FROM user_permission WHERE project = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTask($value){
		$sql = 'DELETE FROM user_permission WHERE task = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySettingModule($value){
		$sql = 'DELETE FROM user_permission WHERE setting_module = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompany($value){
		$sql = 'DELETE FROM user_permission WHERE company = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaxes($value){
		$sql = 'DELETE FROM user_permission WHERE taxes = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBank($value){
		$sql = 'DELETE FROM user_permission WHERE bank = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChartOfAccount($value){
		$sql = 'DELETE FROM user_permission WHERE chart_of_account = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserPermision($value){
		$sql = 'DELETE FROM user_permission WHERE user_permision = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByImportExport($value){
		$sql = 'DELETE FROM user_permission WHERE import_export = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UserPermissionMySql 
	 */
	protected function readRow($row){
		$userPermission = new UserPermission();
		
		$userPermission->id = $row['id'];
		$userPermission->userId = $row['user_id'];
		$userPermission->invoiceModule = $row['invoice_module'];
		$userPermission->invoice = $row['invoice'];
		$userPermission->recurring = $row['recurring'];
		$userPermission->collections = $row['collections'];
		$userPermission->customers = $row['customers'];
		$userPermission->items = $row['items'];
		$userPermission->expensesModule = $row['expenses_module'];
		$userPermission->expense = $row['expense'];
		$userPermission->vendors = $row['vendors'];
		$userPermission->timeTrackingModule = $row['time_tracking_module'];
		$userPermission->timeSheet = $row['time_sheet'];
		$userPermission->project = $row['project'];
		$userPermission->task = $row['task'];
		$userPermission->settingModule = $row['setting_module'];
		$userPermission->company = $row['company'];
		$userPermission->taxes = $row['taxes'];
		$userPermission->bank = $row['bank'];
		$userPermission->chartOfAccount = $row['chart_of_account'];
		$userPermission->userPermision = $row['user_permision'];
		$userPermission->importExport = $row['import_export'];

		return $userPermission;
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
	 * @return UserPermissionMySql 
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