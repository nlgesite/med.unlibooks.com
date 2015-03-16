<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm2550mDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm2550m 
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
 	 * @param tblForm2550m primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm2550m tblForm2550m
 	 */
	public function insert($tblForm2550m);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm2550m tblForm2550m
 	 */
	public function update($tblForm2550m);	

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

	public function queryByItem11Specify($value);

	public function queryByPart2Item12A($value);

	public function queryByPart2Item12B($value);

	public function queryByPart2Item13A($value);

	public function queryByPart2Item13B($value);

	public function queryByPart2Item14($value);

	public function queryByPart2Item15($value);

	public function queryByPart2Item16A($value);

	public function queryByPart2Item16B($value);

	public function queryByPart2Item17A($value);

	public function queryByPart2Item17B($value);

	public function queryByPart2Item17C($value);

	public function queryByPart2Item17D($value);

	public function queryByPart2Item17E($value);

	public function queryByPart2Item17F($value);

	public function queryByPart2Item18A($value);

	public function queryByPart2Item18B($value);

	public function queryByPart2Item18C($value);

	public function queryByPart2Item18D($value);

	public function queryByPart2Item18E($value);

	public function queryByPart2Item18F($value);

	public function queryByPart2Item18G($value);

	public function queryByPart2Item18H($value);

	public function queryByPart2Item18I($value);

	public function queryByPart2Item18J($value);

	public function queryByPart2Item18K($value);

	public function queryByPart2Item18L($value);

	public function queryByPart2Item18M($value);

	public function queryByPart2Item18N($value);

	public function queryByPart2Item18O($value);

	public function queryByPart2Item18P($value);

	public function queryByPart2Item19($value);

	public function queryByPart2Item20A($value);

	public function queryByPart2Item20B($value);

	public function queryByPart2Item20C($value);

	public function queryByPart2Item20D($value);

	public function queryByPart2Item20E($value);

	public function queryByPart2Item20F($value);

	public function queryByPart2Item20G($value);

	public function queryByPart2Item21($value);

	public function queryByPart2Item22($value);

	public function queryByPart2Item23A($value);

	public function queryByPart2Item23B($value);

	public function queryByPart2Item23C($value);

	public function queryByPart2Item23D($value);

	public function queryByPart2Item23E($value);

	public function queryByPart2Item23F($value);

	public function queryByPart2Item23G($value);

	public function queryByPart2Item24($value);

	public function queryByPart2Item25A($value);

	public function queryByPart2Item25B($value);

	public function queryByPart2Item25C($value);

	public function queryByPart2Item25D($value);

	public function queryByPart2Item26($value);


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

	public function deleteByItem11Specify($value);

	public function deleteByPart2Item12A($value);

	public function deleteByPart2Item12B($value);

	public function deleteByPart2Item13A($value);

	public function deleteByPart2Item13B($value);

	public function deleteByPart2Item14($value);

	public function deleteByPart2Item15($value);

	public function deleteByPart2Item16A($value);

	public function deleteByPart2Item16B($value);

	public function deleteByPart2Item17A($value);

	public function deleteByPart2Item17B($value);

	public function deleteByPart2Item17C($value);

	public function deleteByPart2Item17D($value);

	public function deleteByPart2Item17E($value);

	public function deleteByPart2Item17F($value);

	public function deleteByPart2Item18A($value);

	public function deleteByPart2Item18B($value);

	public function deleteByPart2Item18C($value);

	public function deleteByPart2Item18D($value);

	public function deleteByPart2Item18E($value);

	public function deleteByPart2Item18F($value);

	public function deleteByPart2Item18G($value);

	public function deleteByPart2Item18H($value);

	public function deleteByPart2Item18I($value);

	public function deleteByPart2Item18J($value);

	public function deleteByPart2Item18K($value);

	public function deleteByPart2Item18L($value);

	public function deleteByPart2Item18M($value);

	public function deleteByPart2Item18N($value);

	public function deleteByPart2Item18O($value);

	public function deleteByPart2Item18P($value);

	public function deleteByPart2Item19($value);

	public function deleteByPart2Item20A($value);

	public function deleteByPart2Item20B($value);

	public function deleteByPart2Item20C($value);

	public function deleteByPart2Item20D($value);

	public function deleteByPart2Item20E($value);

	public function deleteByPart2Item20F($value);

	public function deleteByPart2Item20G($value);

	public function deleteByPart2Item21($value);

	public function deleteByPart2Item22($value);

	public function deleteByPart2Item23A($value);

	public function deleteByPart2Item23B($value);

	public function deleteByPart2Item23C($value);

	public function deleteByPart2Item23D($value);

	public function deleteByPart2Item23E($value);

	public function deleteByPart2Item23F($value);

	public function deleteByPart2Item23G($value);

	public function deleteByPart2Item24($value);

	public function deleteByPart2Item25A($value);

	public function deleteByPart2Item25B($value);

	public function deleteByPart2Item25C($value);

	public function deleteByPart2Item25D($value);

	public function deleteByPart2Item26($value);


}
?>