<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface UserPermissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserPermission 
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
 	 * @param userPermission primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserPermission userPermission
 	 */
	public function insert($userPermission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserPermission userPermission
 	 */
	public function update($userPermission);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByInvoiceModule($value);

	public function queryByInvoice($value);

	public function queryByRecurring($value);

	public function queryByCollections($value);

	public function queryByCustomers($value);

	public function queryByItems($value);

	public function queryByExpensesModule($value);

	public function queryByExpense($value);

	public function queryByVendors($value);

	public function queryByTimeTrackingModule($value);

	public function queryByTimeSheet($value);

	public function queryByProject($value);

	public function queryByTask($value);

	public function queryBySettingModule($value);

	public function queryByCompany($value);

	public function queryByTaxes($value);

	public function queryByBank($value);

	public function queryByChartOfAccount($value);

	public function queryByUserPermision($value);

	public function queryByImportExport($value);


	public function deleteByUserId($value);

	public function deleteByInvoiceModule($value);

	public function deleteByInvoice($value);

	public function deleteByRecurring($value);

	public function deleteByCollections($value);

	public function deleteByCustomers($value);

	public function deleteByItems($value);

	public function deleteByExpensesModule($value);

	public function deleteByExpense($value);

	public function deleteByVendors($value);

	public function deleteByTimeTrackingModule($value);

	public function deleteByTimeSheet($value);

	public function deleteByProject($value);

	public function deleteByTask($value);

	public function deleteBySettingModule($value);

	public function deleteByCompany($value);

	public function deleteByTaxes($value);

	public function deleteByBank($value);

	public function deleteByChartOfAccount($value);

	public function deleteByUserPermision($value);

	public function deleteByImportExport($value);


}
?>