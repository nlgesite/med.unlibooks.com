<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm2550qDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm2550q 
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
 	 * @param tblForm2550q primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm2550q tblForm2550q
 	 */
	public function insert($tblForm2550q);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm2550q tblForm2550q
 	 */
	public function update($tblForm2550q);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTaxablePeroidId($value);

	public function queryByStatus($value);

	public function queryByYearEnded($value);

	public function queryByMonth($value);

	public function queryByYear($value);

	public function queryByItem2($value);

	public function queryByItem3From($value);

	public function queryByItem3To($value);

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

	public function queryByItem14($value);

	public function queryByItem14Specify($value);

	public function queryByPart2Item15A($value);

	public function queryByPart2Item15B($value);

	public function queryByPart2Item16A($value);

	public function queryByPart2Item16B($value);

	public function queryByPart2Item17($value);

	public function queryByPart2Item18($value);

	public function queryByPart2Item19A($value);

	public function queryByPart2Item19B($value);

	public function queryByPart2Item20A($value);

	public function queryByPart2Item20B($value);

	public function queryByPart2Item20C($value);

	public function queryByPart2Item20D($value);

	public function queryByPart2Item20E($value);

	public function queryByPart2Item20F($value);

	public function queryByPart2Item21A($value);

	public function queryByPart2Item21B($value);

	public function queryByPart2Item21C($value);

	public function queryByPart2Item21D($value);

	public function queryByPart2Item21E($value);

	public function queryByPart2Item21F($value);

	public function queryByPart2Item21G($value);

	public function queryByPart2Item21H($value);

	public function queryByPart2Item21I($value);

	public function queryByPart2Item21J($value);

	public function queryByPart2Item21K($value);

	public function queryByPart2Item21L($value);

	public function queryByPart2Item21M($value);

	public function queryByPart2Item21N($value);

	public function queryByPart2Item21O($value);

	public function queryByPart2Item21P($value);

	public function queryByPart2Item22($value);

	public function queryByPart2Item23A($value);

	public function queryByPart2Item23B($value);

	public function queryByPart2Item23C($value);

	public function queryByPart2Item23D($value);

	public function queryByPart2Item23E($value);

	public function queryByPart2Item23F($value);

	public function queryByPart2Item24($value);

	public function queryByPart2Item25($value);

	public function queryByPart2Item26A($value);

	public function queryByPart2Item26B($value);

	public function queryByPart2Item26C($value);

	public function queryByPart2Item26D($value);

	public function queryByPart2Item26E($value);

	public function queryByPart2Item26F($value);

	public function queryByPart2Item26G($value);

	public function queryByPart2Item26H($value);

	public function queryByPart2Item27($value);

	public function queryByPart2Item28A($value);

	public function queryByPart2Item28B($value);

	public function queryByPart2Item28C($value);

	public function queryByPart2Item28D($value);

	public function queryByPart2Item29($value);


	public function deleteByTaxablePeroidId($value);

	public function deleteByStatus($value);

	public function deleteByYearEnded($value);

	public function deleteByMonth($value);

	public function deleteByYear($value);

	public function deleteByItem2($value);

	public function deleteByItem3From($value);

	public function deleteByItem3To($value);

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

	public function deleteByItem14($value);

	public function deleteByItem14Specify($value);

	public function deleteByPart2Item15A($value);

	public function deleteByPart2Item15B($value);

	public function deleteByPart2Item16A($value);

	public function deleteByPart2Item16B($value);

	public function deleteByPart2Item17($value);

	public function deleteByPart2Item18($value);

	public function deleteByPart2Item19A($value);

	public function deleteByPart2Item19B($value);

	public function deleteByPart2Item20A($value);

	public function deleteByPart2Item20B($value);

	public function deleteByPart2Item20C($value);

	public function deleteByPart2Item20D($value);

	public function deleteByPart2Item20E($value);

	public function deleteByPart2Item20F($value);

	public function deleteByPart2Item21A($value);

	public function deleteByPart2Item21B($value);

	public function deleteByPart2Item21C($value);

	public function deleteByPart2Item21D($value);

	public function deleteByPart2Item21E($value);

	public function deleteByPart2Item21F($value);

	public function deleteByPart2Item21G($value);

	public function deleteByPart2Item21H($value);

	public function deleteByPart2Item21I($value);

	public function deleteByPart2Item21J($value);

	public function deleteByPart2Item21K($value);

	public function deleteByPart2Item21L($value);

	public function deleteByPart2Item21M($value);

	public function deleteByPart2Item21N($value);

	public function deleteByPart2Item21O($value);

	public function deleteByPart2Item21P($value);

	public function deleteByPart2Item22($value);

	public function deleteByPart2Item23A($value);

	public function deleteByPart2Item23B($value);

	public function deleteByPart2Item23C($value);

	public function deleteByPart2Item23D($value);

	public function deleteByPart2Item23E($value);

	public function deleteByPart2Item23F($value);

	public function deleteByPart2Item24($value);

	public function deleteByPart2Item25($value);

	public function deleteByPart2Item26A($value);

	public function deleteByPart2Item26B($value);

	public function deleteByPart2Item26C($value);

	public function deleteByPart2Item26D($value);

	public function deleteByPart2Item26E($value);

	public function deleteByPart2Item26F($value);

	public function deleteByPart2Item26G($value);

	public function deleteByPart2Item26H($value);

	public function deleteByPart2Item27($value);

	public function deleteByPart2Item28A($value);

	public function deleteByPart2Item28B($value);

	public function deleteByPart2Item28C($value);

	public function deleteByPart2Item28D($value);

	public function deleteByPart2Item29($value);


}
?>