<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm1701qDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm1701q 
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
 	 * @param tblForm1701q primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1701q tblForm1701q
 	 */
	public function insert($tblForm1701q);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1701q tblForm1701q
 	 */
	public function update($tblForm1701q);	

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

	public function queryByItem14($value);

	public function queryByItem15($value);

	public function queryByItem16($value);

	public function queryByItem17($value);

	public function queryByItem18($value);

	public function queryByItem19($value);

	public function queryByItem20Atc1($value);

	public function queryByItem20Atc2($value);

	public function queryByItem20Atc3($value);

	public function queryByItem20Compensation($value);

	public function queryByItem20Business($value);

	public function queryByItem20MixedIncome($value);

	public function queryByItem21($value);

	public function queryByItem22Atc1($value);

	public function queryByItem22Atc2($value);

	public function queryByItem22Atc3($value);

	public function queryByItem22Compensation($value);

	public function queryByItem22Business($value);

	public function queryByItem22MixedIncome($value);

	public function queryByItem23Itemized($value);

	public function queryByItem23Osd($value);

	public function queryByItem24Itemized($value);

	public function queryByItem24Osd($value);

	public function queryByItem25($value);

	public function queryByItem25Specify($value);

	public function queryByITR1701Q26A($value);

	public function queryByITR1701Q27A($value);

	public function queryByITR1701Q28A($value);

	public function queryByITR1701Q29A($value);

	public function queryByITR1701Q30A($value);

	public function queryByITR1701Q31A($value);

	public function queryByITR1701Q32A($value);

	public function queryByITR1701Q33A($value);

	public function queryByITR1701Q34A($value);

	public function queryByITR1701Q35A($value);

	public function queryByITR1701Q36A($value);

	public function queryByITR1701Q37A($value);

	public function queryByITR1701Q26B($value);

	public function queryByITR1701Q27B($value);

	public function queryByITR1701Q28B($value);

	public function queryByITR1701Q29B($value);

	public function queryByITR1701Q30B($value);

	public function queryByITR1701Q31B($value);

	public function queryByITR1701Q32B($value);

	public function queryByITR1701Q33B($value);

	public function queryByITR1701Q34B($value);

	public function queryByITR1701Q35B($value);

	public function queryByITR1701Q36B($value);

	public function queryByITR1701Q37B($value);

	public function queryByITR1701Q38A($value);

	public function queryByITR1701Q38B($value);

	public function queryByITR1701Q38C($value);

	public function queryByITR1701Q38D($value);

	public function queryByITR1701Q38E($value);

	public function queryByITR1701Q38F($value);

	public function queryByITR1701Q38G($value);

	public function queryByITR1701Q38H($value);

	public function queryByITR1701Q38I($value);

	public function queryByITR1701Q38J($value);

	public function queryByITR1701Q38K($value);

	public function queryByITR1701Q38L($value);

	public function queryByITR1701Q38M($value);

	public function queryByITR1701Q38N($value);

	public function queryByITR1701Q39A($value);

	public function queryByITR1701Q39B($value);

	public function queryByITR1701Q40A($value);

	public function queryByITR1701Q40B($value);

	public function queryByITR1701Q40C($value);

	public function queryByITR1701Q40D($value);

	public function queryByITR1701Q40E($value);

	public function queryByITR1701Q40F($value);

	public function queryByITR1701Q40G($value);

	public function queryByITR1701Q40H($value);

	public function queryByITR1701Q41A($value);

	public function queryByITR1701Q41B($value);

	public function queryByITR1701Q41C($value);


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

	public function deleteByItem14($value);

	public function deleteByItem15($value);

	public function deleteByItem16($value);

	public function deleteByItem17($value);

	public function deleteByItem18($value);

	public function deleteByItem19($value);

	public function deleteByItem20Atc1($value);

	public function deleteByItem20Atc2($value);

	public function deleteByItem20Atc3($value);

	public function deleteByItem20Compensation($value);

	public function deleteByItem20Business($value);

	public function deleteByItem20MixedIncome($value);

	public function deleteByItem21($value);

	public function deleteByItem22Atc1($value);

	public function deleteByItem22Atc2($value);

	public function deleteByItem22Atc3($value);

	public function deleteByItem22Compensation($value);

	public function deleteByItem22Business($value);

	public function deleteByItem22MixedIncome($value);

	public function deleteByItem23Itemized($value);

	public function deleteByItem23Osd($value);

	public function deleteByItem24Itemized($value);

	public function deleteByItem24Osd($value);

	public function deleteByItem25($value);

	public function deleteByItem25Specify($value);

	public function deleteByITR1701Q26A($value);

	public function deleteByITR1701Q27A($value);

	public function deleteByITR1701Q28A($value);

	public function deleteByITR1701Q29A($value);

	public function deleteByITR1701Q30A($value);

	public function deleteByITR1701Q31A($value);

	public function deleteByITR1701Q32A($value);

	public function deleteByITR1701Q33A($value);

	public function deleteByITR1701Q34A($value);

	public function deleteByITR1701Q35A($value);

	public function deleteByITR1701Q36A($value);

	public function deleteByITR1701Q37A($value);

	public function deleteByITR1701Q26B($value);

	public function deleteByITR1701Q27B($value);

	public function deleteByITR1701Q28B($value);

	public function deleteByITR1701Q29B($value);

	public function deleteByITR1701Q30B($value);

	public function deleteByITR1701Q31B($value);

	public function deleteByITR1701Q32B($value);

	public function deleteByITR1701Q33B($value);

	public function deleteByITR1701Q34B($value);

	public function deleteByITR1701Q35B($value);

	public function deleteByITR1701Q36B($value);

	public function deleteByITR1701Q37B($value);

	public function deleteByITR1701Q38A($value);

	public function deleteByITR1701Q38B($value);

	public function deleteByITR1701Q38C($value);

	public function deleteByITR1701Q38D($value);

	public function deleteByITR1701Q38E($value);

	public function deleteByITR1701Q38F($value);

	public function deleteByITR1701Q38G($value);

	public function deleteByITR1701Q38H($value);

	public function deleteByITR1701Q38I($value);

	public function deleteByITR1701Q38J($value);

	public function deleteByITR1701Q38K($value);

	public function deleteByITR1701Q38L($value);

	public function deleteByITR1701Q38M($value);

	public function deleteByITR1701Q38N($value);

	public function deleteByITR1701Q39A($value);

	public function deleteByITR1701Q39B($value);

	public function deleteByITR1701Q40A($value);

	public function deleteByITR1701Q40B($value);

	public function deleteByITR1701Q40C($value);

	public function deleteByITR1701Q40D($value);

	public function deleteByITR1701Q40E($value);

	public function deleteByITR1701Q40F($value);

	public function deleteByITR1701Q40G($value);

	public function deleteByITR1701Q40H($value);

	public function deleteByITR1701Q41A($value);

	public function deleteByITR1701Q41B($value);

	public function deleteByITR1701Q41C($value);


}
?>