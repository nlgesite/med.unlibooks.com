<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm1601cDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm1601c 
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
 	 * @param tblForm1601c primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1601c tblForm1601c
 	 */
	public function insert($tblForm1601c);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1601c tblForm1601c
 	 */
	public function update($tblForm1601c);	

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

	public function queryByPart2Item15($value);

	public function queryByPart2Item16A($value);

	public function queryByPart2Item16B($value);

	public function queryByPart2Item16C($value);

	public function queryByPart2Item17($value);

	public function queryByPart2Item18($value);

	public function queryByPart2Item19($value);

	public function queryByPart2Item20($value);

	public function queryByPart2Item21A($value);

	public function queryByPart2Item21B($value);

	public function queryByPart2Item22($value);

	public function queryByPart2Item23($value);

	public function queryByPart2Item24A($value);

	public function queryByPart2Item24B($value);

	public function queryByPart2Item24C($value);

	public function queryByPart2Item24D($value);

	public function queryByPart2Item25($value);


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

	public function deleteByPart2Item15($value);

	public function deleteByPart2Item16A($value);

	public function deleteByPart2Item16B($value);

	public function deleteByPart2Item16C($value);

	public function deleteByPart2Item17($value);

	public function deleteByPart2Item18($value);

	public function deleteByPart2Item19($value);

	public function deleteByPart2Item20($value);

	public function deleteByPart2Item21A($value);

	public function deleteByPart2Item21B($value);

	public function deleteByPart2Item22($value);

	public function deleteByPart2Item23($value);

	public function deleteByPart2Item24A($value);

	public function deleteByPart2Item24B($value);

	public function deleteByPart2Item24C($value);

	public function deleteByPart2Item24D($value);

	public function deleteByPart2Item25($value);


}
?>