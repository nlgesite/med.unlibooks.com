<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblOrganizationInfoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblOrganizationInfo 
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
 	 * @param tblOrganizationInfo primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblOrganizationInfo tblOrganizationInfo
 	 */
	public function insert($tblOrganizationInfo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblOrganizationInfo tblOrganizationInfo
 	 */
	public function update($tblOrganizationInfo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByOrgAccount($value);

	public function queryByAddress($value);

	public function queryByTinNum($value);

	public function queryByEmailAddress($value);

	public function queryByPhoneNum($value);

	public function queryByFaxNum($value);

	public function queryByRdoCode($value);

	public function queryByZipCode($value);

	public function queryByLineOfBusiness($value);

	public function queryByModeOfPayment($value);

	public function queryByTypeOfTax($value);

	public function queryByLogoName($value);

	public function queryByDateCreated($value);

	public function queryByDateModified($value);


	public function deleteByOrgId($value);

	public function deleteByOrgAccount($value);

	public function deleteByAddress($value);

	public function deleteByTinNum($value);

	public function deleteByEmailAddress($value);

	public function deleteByPhoneNum($value);

	public function deleteByFaxNum($value);

	public function deleteByRdoCode($value);

	public function deleteByZipCode($value);

	public function deleteByLineOfBusiness($value);

	public function deleteByModeOfPayment($value);

	public function deleteByTypeOfTax($value);

	public function deleteByLogoName($value);

	public function deleteByDateCreated($value);

	public function deleteByDateModified($value);


}
?>