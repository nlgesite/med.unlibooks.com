<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm2551mDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm2551m 
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
 	 * @param tblForm2551m primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm2551m tblForm2551m
 	 */
	public function insert($tblForm2551m);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm2551m tblForm2551m
 	 */
	public function update($tblForm2551m);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTaxablePeroidId($value);

	public function queryByStatus($value);

	public function queryByItem1($value);

	public function queryByItem2($value);

	public function queryByItem3($value);

	public function queryByItem4($value);

	public function queryByItem5($value);

	public function queryByItem6($value);

	public function queryByItem7($value);

	public function queryByItem8($value);

	public function queryByItem9($value);

	public function queryByItem10($value);

	public function queryByItem11($value);

	public function queryByItem12($value);

	public function queryByItem13($value);

	public function queryByItem13Specify($value);

	public function queryByITR2551M14A($value);

	public function queryByITR2551M14B($value);

	public function queryByITR2551M14C($value);

	public function queryByITR2551M14D($value);

	public function queryByITR2551M14E($value);

	public function queryByITR2551M15A($value);

	public function queryByITR2551M15B($value);

	public function queryByITR2551M15C($value);

	public function queryByITR2551M15D($value);

	public function queryByITR2551M15E($value);

	public function queryByITR2551M16A($value);

	public function queryByITR2551M16B($value);

	public function queryByITR2551M16C($value);

	public function queryByITR2551M16D($value);

	public function queryByITR2551M16E($value);

	public function queryByITR2551M17A($value);

	public function queryByITR2551M17B($value);

	public function queryByITR2551M17C($value);

	public function queryByITR2551M17D($value);

	public function queryByITR2551M17E($value);

	public function queryByITR2551M18A($value);

	public function queryByITR2551M18B($value);

	public function queryByITR2551M18C($value);

	public function queryByITR2551M18D($value);

	public function queryByITR2551M18E($value);

	public function queryByITR2551M19($value);

	public function queryByITR2551M20A($value);

	public function queryByITR2551M20B($value);

	public function queryByITR2551M21($value);

	public function queryByITR2551M22($value);

	public function queryByITR2551M23A($value);

	public function queryByITR2551M23B($value);

	public function queryByITR2551M23C($value);

	public function queryByITR2551M23D($value);

	public function queryByITR2551M24($value);

	public function queryByITR2551MToBeRefunded($value);

	public function queryByITR2551MToBeIssued($value);


	public function deleteByTaxablePeroidId($value);

	public function deleteByStatus($value);

	public function deleteByItem1($value);

	public function deleteByItem2($value);

	public function deleteByItem3($value);

	public function deleteByItem4($value);

	public function deleteByItem5($value);

	public function deleteByItem6($value);

	public function deleteByItem7($value);

	public function deleteByItem8($value);

	public function deleteByItem9($value);

	public function deleteByItem10($value);

	public function deleteByItem11($value);

	public function deleteByItem12($value);

	public function deleteByItem13($value);

	public function deleteByItem13Specify($value);

	public function deleteByITR2551M14A($value);

	public function deleteByITR2551M14B($value);

	public function deleteByITR2551M14C($value);

	public function deleteByITR2551M14D($value);

	public function deleteByITR2551M14E($value);

	public function deleteByITR2551M15A($value);

	public function deleteByITR2551M15B($value);

	public function deleteByITR2551M15C($value);

	public function deleteByITR2551M15D($value);

	public function deleteByITR2551M15E($value);

	public function deleteByITR2551M16A($value);

	public function deleteByITR2551M16B($value);

	public function deleteByITR2551M16C($value);

	public function deleteByITR2551M16D($value);

	public function deleteByITR2551M16E($value);

	public function deleteByITR2551M17A($value);

	public function deleteByITR2551M17B($value);

	public function deleteByITR2551M17C($value);

	public function deleteByITR2551M17D($value);

	public function deleteByITR2551M17E($value);

	public function deleteByITR2551M18A($value);

	public function deleteByITR2551M18B($value);

	public function deleteByITR2551M18C($value);

	public function deleteByITR2551M18D($value);

	public function deleteByITR2551M18E($value);

	public function deleteByITR2551M19($value);

	public function deleteByITR2551M20A($value);

	public function deleteByITR2551M20B($value);

	public function deleteByITR2551M21($value);

	public function deleteByITR2551M22($value);

	public function deleteByITR2551M23A($value);

	public function deleteByITR2551M23B($value);

	public function deleteByITR2551M23C($value);

	public function deleteByITR2551M23D($value);

	public function deleteByITR2551M24($value);

	public function deleteByITR2551MToBeRefunded($value);

	public function deleteByITR2551MToBeIssued($value);


}
?>