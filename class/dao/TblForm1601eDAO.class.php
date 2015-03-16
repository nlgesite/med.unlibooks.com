<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm1601eDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm1601e 
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
 	 * @param tblForm1601e primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1601e tblForm1601e
 	 */
	public function insert($tblForm1601e);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1601e tblForm1601e
 	 */
	public function update($tblForm1601e);	

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

	public function queryByItem14($value);

	public function queryByItem15A($value);

	public function queryByItem15B($value);

	public function queryByItem15C($value);

	public function queryByItem16($value);

	public function queryByItem17A($value);

	public function queryByItem17B($value);

	public function queryByItem17C($value);

	public function queryByItem17D($value);

	public function queryByItem18($value);

	public function queryByItem18OverRemittance($value);


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

	public function deleteByItem14($value);

	public function deleteByItem15A($value);

	public function deleteByItem15B($value);

	public function deleteByItem15C($value);

	public function deleteByItem16($value);

	public function deleteByItem17A($value);

	public function deleteByItem17B($value);

	public function deleteByItem17C($value);

	public function deleteByItem17D($value);

	public function deleteByItem18($value);

	public function deleteByItem18OverRemittance($value);


}
?>