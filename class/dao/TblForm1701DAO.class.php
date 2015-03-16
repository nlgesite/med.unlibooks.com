<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblForm1701DAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblForm1701 
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
 	 * @param tblForm1701 primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1701 tblForm1701
 	 */
	public function insert($tblForm1701);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1701 tblForm1701
 	 */
	public function update($tblForm1701);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTaxablePeroidId($value);

	public function queryByStatus($value);

	public function queryByItem1Month($value);

	public function queryByItem1Year($value);

	public function queryByAmended($value);

	public function queryByShortPeriod($value);

	public function queryByAlpha($value);

	public function queryByTaxpayerTin($value);

	public function queryByRdo($value);

	public function queryByTaxFiler($value);

	public function queryByTaxFilerName($value);

	public function queryByTradeName($value);

	public function queryByRegAddress($value);

	public function queryByDateOfBirth($value);

	public function queryByEmail($value);

	public function queryByContactNum($value);

	public function queryByCivilStatus($value);

	public function queryByItem15($value);

	public function queryByItem16($value);

	public function queryByItem17($value);

	public function queryByItem18($value);

	public function queryByItem19($value);

	public function queryByItem20($value);

	public function queryByItem21($value);

	public function queryByItem22($value);

	public function queryByItem23($value);

	public function queryByItem24($value);

	public function queryByItem25($value);

	public function queryByPg1Item26($value);

	public function queryByPg1Item27($value);

	public function queryByPg1Item28($value);

	public function queryByPg1Item29($value);

	public function queryByPg1Item30($value);

	public function queryByPg1Item31($value);

	public function queryByPg1Item32($value);

	public function queryByOverPaymentType($value);

	public function queryByPg2Item41Taxpayer($value);

	public function queryByPg2Item42Taxpayer($value);

	public function queryByPg2Item43Taxpayer($value);

	public function queryByPg2Item44Taxpayer($value);

	public function queryByPg2Item45Taxpayer($value);

	public function queryByPg2Item46Taxpayer($value);

	public function queryByPg2Item47Taxpayer($value);

	public function queryByPg2Item48Taxpayer($value);

	public function queryByPg2Item49Taxpayer($value);

	public function queryByPg2Item50Taxpayer($value);

	public function queryByPg2Item51Taxpayer($value);

	public function queryByPg2Item52Taxpayer($value);

	public function queryByPg2Item53Taxpayer($value);

	public function queryByPg2Item54Taxpayer($value);

	public function queryByPg2Item55Taxpayer($value);

	public function queryByPg2Item56Taxpayer($value);

	public function queryByPg2Item57Taxpayer($value);

	public function queryByPg2Item58Taxpayer($value);

	public function queryByPg2Item59Taxpayer($value);

	public function queryByPg2Item60Taxpayer($value);

	public function queryByPg2Item61Taxpayer($value);

	public function queryByPg2Item62Taxpayer($value);

	public function queryByPg2Item63Taxpayer($value);

	public function queryByPg2Item64Taxpayer($value);

	public function queryByPg2Item65Taxpayer($value);

	public function queryByPg2Item66Taxpayer($value);

	public function queryByPg2Item67Taxpayer($value);

	public function queryByPg2Item41Spouse($value);

	public function queryByPg2Item42Spouse($value);

	public function queryByPg2Item43Spouse($value);

	public function queryByPg2Item44Spouse($value);

	public function queryByPg2Item45Spouse($value);

	public function queryByPg2Item46Spouse($value);

	public function queryByPg2Item47Spouse($value);

	public function queryByPg2Item48Spouse($value);

	public function queryByPg2Item49Spouse($value);

	public function queryByPg2Item50Spouse($value);

	public function queryByPg2Item51Spouse($value);

	public function queryByPg2Item52Spouse($value);

	public function queryByPg2Item53Spouse($value);

	public function queryByPg2Item54Spouse($value);

	public function queryByPg2Item55Spouse($value);

	public function queryByPg2Item56Spouse($value);

	public function queryByPg2Item57Spouse($value);

	public function queryByPg2Item58Spouse($value);

	public function queryByPg2Item59Spouse($value);

	public function queryByPg2Item60Spouse($value);

	public function queryByPg2Item61Spouse($value);

	public function queryByPg2Item62Spouse($value);

	public function queryByPg2Item63Spouse($value);

	public function queryByPg2Item64Spouse($value);

	public function queryByPg2Item65Spouse($value);

	public function queryByPg2Item66Spouse($value);

	public function queryByPg2Item67Spouse($value);

	public function queryByPg3Item68Taxpayer($value);

	public function queryByPg3Item69Taxpayer($value);

	public function queryByPg3Item70Taxpayer($value);

	public function queryByPg3Item71Taxpayer($value);

	public function queryByPg3Item72Taxpayer($value);

	public function queryByPg3Item73Taxpayer($value);

	public function queryByPg3Item74Taxpayer($value);

	public function queryByPg3Item75Taxpayer($value);

	public function queryByPg3Item76Taxpayer($value);

	public function queryByPg3Item77Taxpayer($value);

	public function queryByPg3Item86Taxpayer($value);

	public function queryByPg3Item87Taxpayer($value);

	public function queryByPg3Item88Taxpayer($value);

	public function queryByPg3Item89Taxpayer($value);

	public function queryByPg3Item90Taxpayer($value);

	public function queryByPg3Item91Taxpayer($value);

	public function queryByPg3Item92Taxpayer($value);

	public function queryByPg3Item93Taxpayer($value);

	public function queryByPg3Item68Spouse($value);

	public function queryByPg3Item69Spouse($value);

	public function queryByPg3Item70Spouse($value);

	public function queryByPg3Item71Spouse($value);

	public function queryByPg3Item72Spouse($value);

	public function queryByPg3Item73Spouse($value);

	public function queryByPg3Item74Spouse($value);

	public function queryByPg3Item75Spouse($value);

	public function queryByPg3Item76Spouse($value);

	public function queryByPg3Item77Spouse($value);

	public function queryByPg3Item78Spouse($value);

	public function queryByPg3Item79Spouse($value);

	public function queryByPg3Item80Spouse($value);

	public function queryByPg3Item81Spouse($value);

	public function queryByPg3Item82Spouse($value);

	public function queryByPg3Item83Spouse($value);

	public function queryByPg3Item84Spouse($value);

	public function queryByPg3Item85Spouse($value);

	public function queryByPg3Item86Spouse($value);

	public function queryByPg3Item87Spouse($value);

	public function queryByPg3Item88Spouse($value);

	public function queryByPg3Item89Spouse($value);

	public function queryByPg3Item90Spouse($value);

	public function queryByPg3Item91Spouse($value);

	public function queryByPg3Item92Spouse($value);

	public function queryByPg3Item93Spouse($value);

	public function queryByPg3Item94Spouse($value);

	public function queryByPg5Sched2Item1Taxpayer($value);

	public function queryByPg5Sched2Item2Taxpayer($value);

	public function queryByPg5Sched2Item3Taxpayer($value);

	public function queryByPg5Sched2Item4Taxpayer($value);

	public function queryByPg5Sched2Item5Taxpayer($value);

	public function queryByPg5Sched2Item1Spouse($value);

	public function queryByPg5Sched2Item2Spouse($value);

	public function queryByPg5Sched2Item3Spouse($value);

	public function queryByPg5Sched2Item4Spouse($value);

	public function queryByPg5Sched2Item5Spouse($value);

	public function queryByPg5Sched3Item1Taxpayer($value);

	public function queryByPg5Sched3Item2Taxpayer($value);

	public function queryByPg5Sched3Item3Taxpayer($value);

	public function queryByPg5Sched3Item1Spouse($value);

	public function queryByPg5Sched3Item2Spouse($value);

	public function queryByPg5Sched3Item3Spouse($value);

	public function queryByPg5Sched3Item1Description($value);

	public function queryByPg5Sched3Item2Description($value);

	public function queryByPg5Sched4Item1Taxpayer($value);

	public function queryByPg5Sched4Item2Taxpayer($value);

	public function queryByPg5Sched4Item3Taxpayer($value);

	public function queryByPg5Sched4Item4Taxpayer($value);

	public function queryByPg5Sched4Item5Taxpayer($value);

	public function queryByPg5Sched4Item1Spouse($value);

	public function queryByPg5Sched4Item2Spouse($value);

	public function queryByPg5Sched4Item3Spouse($value);

	public function queryByPg5Sched4Item4Spouse($value);

	public function queryByPg5Sched4Item5Spouse($value);

	public function queryByPg6Sched4bItem6Taxpayer($value);

	public function queryByPg6Sched4bItem7Taxpayer($value);

	public function queryByPg6Sched4bItem8Taxpayer($value);

	public function queryByPg6Sched4bItem9Taxpayer($value);

	public function queryByPg6Sched4bItem10Taxpayer($value);

	public function queryByPg6Sched4bItem11Taxpayer($value);

	public function queryByPg6Sched4bItem12Taxpayer($value);

	public function queryByPg6Sched4bItem13Taxpayer($value);

	public function queryByPg6Sched4bItem14Taxpayer($value);

	public function queryByPg6Sched4bItem15Taxpayer($value);

	public function queryByPg6Sched4bItem16Taxpayer($value);

	public function queryByPg6Sched4bItem17Taxpayer($value);

	public function queryByPg6Sched4bItem18Taxpayer($value);

	public function queryByPg6Sched4bItem19Taxpayer($value);

	public function queryByPg6Sched4bItem6Spouse($value);

	public function queryByPg6Sched4bItem7Spouse($value);

	public function queryByPg6Sched4bItem8Spouse($value);

	public function queryByPg6Sched4bItem9Spouse($value);

	public function queryByPg6Sched4bItem10Spouse($value);

	public function queryByPg6Sched4bItem11Spouse($value);

	public function queryByPg6Sched4bItem12Spouse($value);

	public function queryByPg6Sched4bItem13Spouse($value);

	public function queryByPg6Sched4bItem14Spouse($value);

	public function queryByPg6Sched4bItem15Spouse($value);

	public function queryByPg6Sched4bItem16Spouse($value);

	public function queryByPg6Sched4bItem17Spouse($value);

	public function queryByPg6Sched4bItem18Spouse($value);

	public function queryByPg6Sched4bItem19Spouse($value);

	public function queryByPg6Sched4cItem20Taxpayer($value);

	public function queryByPg6Sched4cItem21Taxpayer($value);

	public function queryByPg6Sched4cItem22Taxpayer($value);

	public function queryByPg6Sched4cItem23Taxpayer($value);

	public function queryByPg6Sched4cItem24Taxpayer($value);

	public function queryByPg6Sched4cItem25Taxpayer($value);

	public function queryByPg6Sched4cItem26Taxpayer($value);

	public function queryByPg6Sched4cItem27Taxpayer($value);

	public function queryByPg6Sched4cItem20Spouse($value);

	public function queryByPg6Sched4cItem21Spouse($value);

	public function queryByPg6Sched4cItem22Spouse($value);

	public function queryByPg6Sched4cItem23Spouse($value);

	public function queryByPg6Sched4cItem24Spouse($value);

	public function queryByPg6Sched4cItem25Spouse($value);

	public function queryByPg6Sched4cItem26Spouse($value);

	public function queryByPg6Sched4cItem27Spouse($value);

	public function queryByPg6Sched5Item1Taxpayer($value);

	public function queryByPg6Sched5Item2Taxpayer($value);

	public function queryByPg6Sched5Item3Taxpayer($value);

	public function queryByPg6Sched5Item4Taxpayer($value);

	public function queryByPg6Sched5Item5Taxpayer($value);

	public function queryByPg6Sched5Item6Taxpayer($value);

	public function queryByPg6Sched5Item1Spouse($value);

	public function queryByPg6Sched5Item2Spouse($value);

	public function queryByPg6Sched5Item3Spouse($value);

	public function queryByPg6Sched5Item4Spouse($value);

	public function queryByPg6Sched5Item5Spouse($value);

	public function queryByPg6Sched5Item6Spouse($value);

	public function queryByPg6Sched5Item1NatureOfIncome($value);

	public function queryByPg6Sched5Item2NatureOfIncome($value);

	public function queryByPg6Sched5Item3NatureOfIncome($value);

	public function queryByPg6Sched5Item4NatureOfIncome($value);

	public function queryByPg6Sched5Item5NatureOfIncome($value);

	public function queryByPg6Sched6Item1Taxpayer($value);

	public function queryByPg6Sched6Item2Taxpayer($value);

	public function queryByPg6Sched6Item3Taxpayer($value);

	public function queryByPg6Sched6Item4Taxpayer($value);

	public function queryByPg6Sched6Item1Spouse($value);

	public function queryByPg6Sched6Item2Spouse($value);

	public function queryByPg6Sched6Item3Spouse($value);

	public function queryByPg6Sched6Item4Spouse($value);

	public function queryByPg6Sched6Item1Description($value);

	public function queryByPg6Sched6Item2Description($value);

	public function queryByPg6Sched6Item3Description($value);

	public function queryByPg7Sched6Item5Taxpayer($value);

	public function queryByPg7Sched6Item6Taxpayer($value);

	public function queryByPg7Sched6Item7Taxpayer($value);

	public function queryByPg7Sched6Item8Taxpayer($value);

	public function queryByPg7Sched6Item9Taxpayer($value);

	public function queryByPg7Sched6Item10Taxpayer($value);

	public function queryByPg7Sched6Item11Taxpayer($value);

	public function queryByPg7Sched6Item12Taxpayer($value);

	public function queryByPg7Sched6Item13Taxpayer($value);

	public function queryByPg7Sched6Item14Taxpayer($value);

	public function queryByPg7Sched6Item15Taxpayer($value);

	public function queryByPg7Sched6Item16Taxpayer($value);

	public function queryByPg7Sched6Item17Taxpayer($value);

	public function queryByPg7Sched6Item18Taxpayer($value);

	public function queryByPg7Sched6Item19Taxpayer($value);

	public function queryByPg7Sched6Item20Taxpayer($value);

	public function queryByPg7Sched6Item21Taxpayer($value);

	public function queryByPg7Sched6Item22Taxpayer($value);

	public function queryByPg7Sched6Item23Taxpayer($value);

	public function queryByPg7Sched6Item24Taxpayer($value);

	public function queryByPg7Sched6Item25Taxpayer($value);

	public function queryByPg7Sched6Item26Taxpayer($value);

	public function queryByPg7Sched6Item27Taxpayer($value);

	public function queryByPg7Sched6Item28Taxpayer($value);

	public function queryByPg7Sched6Item29Taxpayer($value);

	public function queryByPg7Sched6Item30Taxpayer($value);

	public function queryByPg7Sched6Item31Taxpayer($value);

	public function queryByPg7Sched6Item32Taxpayer($value);

	public function queryByPg7Sched6Item33Taxpayer($value);

	public function queryByPg7Sched6Item34Taxpayer($value);

	public function queryByPg7Sched6Item35Taxpayer($value);

	public function queryByPg7Sched6Item36Taxpayer($value);

	public function queryByPg7Sched6Item37Taxpayer($value);

	public function queryByPg7Sched6Item38Taxpayer($value);

	public function queryByPg7Sched6Item39Taxpayer($value);

	public function queryByPg7Sched6Item40Taxpayer($value);

	public function queryByPg7Sched6Item5Spouse($value);

	public function queryByPg7Sched6Item6Spouse($value);

	public function queryByPg7Sched6Item7Spouse($value);

	public function queryByPg7Sched6Item8Spouse($value);

	public function queryByPg7Sched6Item9Spouse($value);

	public function queryByPg7Sched6Item10Spouse($value);

	public function queryByPg7Sched6Item11Spouse($value);

	public function queryByPg7Sched6Item12Spouse($value);

	public function queryByPg7Sched6Item13Spouse($value);

	public function queryByPg7Sched6Item14Spouse($value);

	public function queryByPg7Sched6Item15Spouse($value);

	public function queryByPg7Sched6Item16Spouse($value);

	public function queryByPg7Sched6Item17Spouse($value);

	public function queryByPg7Sched6Item18Spouse($value);

	public function queryByPg7Sched6Item19Spouse($value);

	public function queryByPg7Sched6Item20Spouse($value);

	public function queryByPg7Sched6Item21Spouse($value);

	public function queryByPg7Sched6Item22Spouse($value);

	public function queryByPg7Sched6Item23Spouse($value);

	public function queryByPg7Sched6Item24Spouse($value);

	public function queryByPg7Sched6Item25Spouse($value);

	public function queryByPg7Sched6Item26Spouse($value);

	public function queryByPg7Sched6Item27Spouse($value);

	public function queryByPg7Sched6Item28Spouse($value);

	public function queryByPg7Sched6Item29Spouse($value);

	public function queryByPg7Sched6Item30Spouse($value);

	public function queryByPg7Sched6Item31Spouse($value);

	public function queryByPg7Sched6Item32Spouse($value);

	public function queryByPg7Sched6Item33Spouse($value);

	public function queryByPg7Sched6Item34Spouse($value);

	public function queryByPg7Sched6Item35Spouse($value);

	public function queryByPg7Sched6Item36Spouse($value);

	public function queryByPg7Sched6Item37Spouse($value);

	public function queryByPg7Sched6Item38Spouse($value);

	public function queryByPg7Sched6Item39Spouse($value);

	public function queryByPg7Sched6Item40Spouse($value);

	public function queryByPg7Sched6Item36Description($value);

	public function queryByPg7Sched6Item37Description($value);

	public function queryByPg7Sched6Item38Description($value);

	public function queryByPg7Sched6Item39Description($value);

	public function queryByPg8Sched7Item1Taxpayer($value);

	public function queryByPg8Sched7Item2Taxpayer($value);

	public function queryByPg8Sched7Item3Taxpayer($value);

	public function queryByPg8Sched7Item4Taxpayer($value);

	public function queryByPg8Sched7Item5Taxpayer($value);

	public function queryByPg8Sched7Item1Spouse($value);

	public function queryByPg8Sched7Item2Spouse($value);

	public function queryByPg8Sched7Item3Spouse($value);

	public function queryByPg8Sched7Item4Spouse($value);

	public function queryByPg8Sched7Item5Spouse($value);

	public function queryByPg8Sched7Item1Description($value);

	public function queryByPg8Sched7Item2Description($value);

	public function queryByPg8Sched7Item3Description($value);

	public function queryByPg8Sched7Item4Description($value);

	public function queryByPg8Sched7Item1LegalBasis($value);

	public function queryByPg8Sched7Item2LegalBasis($value);

	public function queryByPg8Sched7Item3LegalBasis($value);

	public function queryByPg8Sched7Item4LegalBasis($value);

	public function queryByPg8Sched8aItem1Taxpayer($value);

	public function queryByPg8Sched8aItem2Taxpayer($value);

	public function queryByPg8Sched8aItem3Taxpayer($value);

	public function queryByPg8Sched8aItem1Spouse($value);

	public function queryByPg8Sched8aItem2Spouse($value);

	public function queryByPg8Sched8aItem3Spouse($value);

	public function queryByPg9Sched9Item1Taxpayer($value);

	public function queryByPg9Sched9Item2Taxpayer($value);

	public function queryByPg9Sched9Item3Taxpayer($value);

	public function queryByPg9Sched9Item4Taxpayer($value);

	public function queryByPg9Sched9Item5Taxpayer($value);

	public function queryByPg9Sched9Item6Taxpayer($value);

	public function queryByPg9Sched9Item7Taxpayer($value);

	public function queryByPg9Sched9Item8Taxpayer($value);

	public function queryByPg9Sched9Item9Taxpayer($value);

	public function queryByPg9Sched9Item10Taxpayer($value);

	public function queryByPg9Sched9Item1Spouse($value);

	public function queryByPg9Sched9Item2Spouse($value);

	public function queryByPg9Sched9Item3Spouse($value);

	public function queryByPg9Sched9Item4Spouse($value);

	public function queryByPg9Sched9Item5Spouse($value);

	public function queryByPg9Sched9Item6Spouse($value);

	public function queryByPg9Sched9Item7Spouse($value);

	public function queryByPg9Sched9Item8Spouse($value);

	public function queryByPg9Sched9Item9Spouse($value);

	public function queryByPg9Sched9Item10Spouse($value);

	public function queryByPg9Sched9Item9Other($value);

	public function queryByPg9Sched10Item1Taxpayer($value);

	public function queryByPg9Sched10Item2Taxpayer($value);

	public function queryByPg9Sched10Item3Taxpayer($value);

	public function queryByPg9Sched10Item4Taxpayer($value);

	public function queryByPg9Sched10Item5Taxpayer($value);

	public function queryByPg9Sched10Item6Taxpayer($value);

	public function queryByPg9Sched10Item7Taxpayer($value);

	public function queryByPg9Sched10Item8Taxpayer($value);

	public function queryByPg9Sched10Item9Taxpayer($value);

	public function queryByPg9Sched10Item10Taxpayer($value);

	public function queryByPg9Sched10Item11Taxpayer($value);

	public function queryByPg9Sched10Item12Taxpayer($value);

	public function queryByPg9Sched10Item13Taxpayer($value);

	public function queryByPg9Sched10Item14Taxpayer($value);

	public function queryByPg9Sched10Item15Taxpayer($value);

	public function queryByPg9Sched10Item16Taxpayer($value);

	public function queryByPg9Sched10Item17Taxpayer($value);

	public function queryByPg9Sched10Item1Spouse($value);

	public function queryByPg9Sched10Item2Spouse($value);

	public function queryByPg9Sched10Item3Spouse($value);

	public function queryByPg9Sched10Item4Spouse($value);

	public function queryByPg9Sched10Item5Spouse($value);

	public function queryByPg9Sched10Item6Spouse($value);

	public function queryByPg9Sched10Item7Spouse($value);

	public function queryByPg9Sched10Item8Spouse($value);

	public function queryByPg9Sched10Item9Spouse($value);

	public function queryByPg9Sched10Item10Spouse($value);

	public function queryByPg9Sched10Item11Spouse($value);

	public function queryByPg9Sched10Item12Spouse($value);

	public function queryByPg9Sched10Item13Spouse($value);

	public function queryByPg9Sched10Item14Spouse($value);

	public function queryByPg9Sched10Item15Spouse($value);

	public function queryByPg9Sched10Item16Spouse($value);

	public function queryByPg9Sched10Item17Spouse($value);


	public function deleteByTaxablePeroidId($value);

	public function deleteByStatus($value);

	public function deleteByItem1Month($value);

	public function deleteByItem1Year($value);

	public function deleteByAmended($value);

	public function deleteByShortPeriod($value);

	public function deleteByAlpha($value);

	public function deleteByTaxpayerTin($value);

	public function deleteByRdo($value);

	public function deleteByTaxFiler($value);

	public function deleteByTaxFilerName($value);

	public function deleteByTradeName($value);

	public function deleteByRegAddress($value);

	public function deleteByDateOfBirth($value);

	public function deleteByEmail($value);

	public function deleteByContactNum($value);

	public function deleteByCivilStatus($value);

	public function deleteByItem15($value);

	public function deleteByItem16($value);

	public function deleteByItem17($value);

	public function deleteByItem18($value);

	public function deleteByItem19($value);

	public function deleteByItem20($value);

	public function deleteByItem21($value);

	public function deleteByItem22($value);

	public function deleteByItem23($value);

	public function deleteByItem24($value);

	public function deleteByItem25($value);

	public function deleteByPg1Item26($value);

	public function deleteByPg1Item27($value);

	public function deleteByPg1Item28($value);

	public function deleteByPg1Item29($value);

	public function deleteByPg1Item30($value);

	public function deleteByPg1Item31($value);

	public function deleteByPg1Item32($value);

	public function deleteByOverPaymentType($value);

	public function deleteByPg2Item41Taxpayer($value);

	public function deleteByPg2Item42Taxpayer($value);

	public function deleteByPg2Item43Taxpayer($value);

	public function deleteByPg2Item44Taxpayer($value);

	public function deleteByPg2Item45Taxpayer($value);

	public function deleteByPg2Item46Taxpayer($value);

	public function deleteByPg2Item47Taxpayer($value);

	public function deleteByPg2Item48Taxpayer($value);

	public function deleteByPg2Item49Taxpayer($value);

	public function deleteByPg2Item50Taxpayer($value);

	public function deleteByPg2Item51Taxpayer($value);

	public function deleteByPg2Item52Taxpayer($value);

	public function deleteByPg2Item53Taxpayer($value);

	public function deleteByPg2Item54Taxpayer($value);

	public function deleteByPg2Item55Taxpayer($value);

	public function deleteByPg2Item56Taxpayer($value);

	public function deleteByPg2Item57Taxpayer($value);

	public function deleteByPg2Item58Taxpayer($value);

	public function deleteByPg2Item59Taxpayer($value);

	public function deleteByPg2Item60Taxpayer($value);

	public function deleteByPg2Item61Taxpayer($value);

	public function deleteByPg2Item62Taxpayer($value);

	public function deleteByPg2Item63Taxpayer($value);

	public function deleteByPg2Item64Taxpayer($value);

	public function deleteByPg2Item65Taxpayer($value);

	public function deleteByPg2Item66Taxpayer($value);

	public function deleteByPg2Item67Taxpayer($value);

	public function deleteByPg2Item41Spouse($value);

	public function deleteByPg2Item42Spouse($value);

	public function deleteByPg2Item43Spouse($value);

	public function deleteByPg2Item44Spouse($value);

	public function deleteByPg2Item45Spouse($value);

	public function deleteByPg2Item46Spouse($value);

	public function deleteByPg2Item47Spouse($value);

	public function deleteByPg2Item48Spouse($value);

	public function deleteByPg2Item49Spouse($value);

	public function deleteByPg2Item50Spouse($value);

	public function deleteByPg2Item51Spouse($value);

	public function deleteByPg2Item52Spouse($value);

	public function deleteByPg2Item53Spouse($value);

	public function deleteByPg2Item54Spouse($value);

	public function deleteByPg2Item55Spouse($value);

	public function deleteByPg2Item56Spouse($value);

	public function deleteByPg2Item57Spouse($value);

	public function deleteByPg2Item58Spouse($value);

	public function deleteByPg2Item59Spouse($value);

	public function deleteByPg2Item60Spouse($value);

	public function deleteByPg2Item61Spouse($value);

	public function deleteByPg2Item62Spouse($value);

	public function deleteByPg2Item63Spouse($value);

	public function deleteByPg2Item64Spouse($value);

	public function deleteByPg2Item65Spouse($value);

	public function deleteByPg2Item66Spouse($value);

	public function deleteByPg2Item67Spouse($value);

	public function deleteByPg3Item68Taxpayer($value);

	public function deleteByPg3Item69Taxpayer($value);

	public function deleteByPg3Item70Taxpayer($value);

	public function deleteByPg3Item71Taxpayer($value);

	public function deleteByPg3Item72Taxpayer($value);

	public function deleteByPg3Item73Taxpayer($value);

	public function deleteByPg3Item74Taxpayer($value);

	public function deleteByPg3Item75Taxpayer($value);

	public function deleteByPg3Item76Taxpayer($value);

	public function deleteByPg3Item77Taxpayer($value);

	public function deleteByPg3Item86Taxpayer($value);

	public function deleteByPg3Item87Taxpayer($value);

	public function deleteByPg3Item88Taxpayer($value);

	public function deleteByPg3Item89Taxpayer($value);

	public function deleteByPg3Item90Taxpayer($value);

	public function deleteByPg3Item91Taxpayer($value);

	public function deleteByPg3Item92Taxpayer($value);

	public function deleteByPg3Item93Taxpayer($value);

	public function deleteByPg3Item68Spouse($value);

	public function deleteByPg3Item69Spouse($value);

	public function deleteByPg3Item70Spouse($value);

	public function deleteByPg3Item71Spouse($value);

	public function deleteByPg3Item72Spouse($value);

	public function deleteByPg3Item73Spouse($value);

	public function deleteByPg3Item74Spouse($value);

	public function deleteByPg3Item75Spouse($value);

	public function deleteByPg3Item76Spouse($value);

	public function deleteByPg3Item77Spouse($value);

	public function deleteByPg3Item78Spouse($value);

	public function deleteByPg3Item79Spouse($value);

	public function deleteByPg3Item80Spouse($value);

	public function deleteByPg3Item81Spouse($value);

	public function deleteByPg3Item82Spouse($value);

	public function deleteByPg3Item83Spouse($value);

	public function deleteByPg3Item84Spouse($value);

	public function deleteByPg3Item85Spouse($value);

	public function deleteByPg3Item86Spouse($value);

	public function deleteByPg3Item87Spouse($value);

	public function deleteByPg3Item88Spouse($value);

	public function deleteByPg3Item89Spouse($value);

	public function deleteByPg3Item90Spouse($value);

	public function deleteByPg3Item91Spouse($value);

	public function deleteByPg3Item92Spouse($value);

	public function deleteByPg3Item93Spouse($value);

	public function deleteByPg3Item94Spouse($value);

	public function deleteByPg5Sched2Item1Taxpayer($value);

	public function deleteByPg5Sched2Item2Taxpayer($value);

	public function deleteByPg5Sched2Item3Taxpayer($value);

	public function deleteByPg5Sched2Item4Taxpayer($value);

	public function deleteByPg5Sched2Item5Taxpayer($value);

	public function deleteByPg5Sched2Item1Spouse($value);

	public function deleteByPg5Sched2Item2Spouse($value);

	public function deleteByPg5Sched2Item3Spouse($value);

	public function deleteByPg5Sched2Item4Spouse($value);

	public function deleteByPg5Sched2Item5Spouse($value);

	public function deleteByPg5Sched3Item1Taxpayer($value);

	public function deleteByPg5Sched3Item2Taxpayer($value);

	public function deleteByPg5Sched3Item3Taxpayer($value);

	public function deleteByPg5Sched3Item1Spouse($value);

	public function deleteByPg5Sched3Item2Spouse($value);

	public function deleteByPg5Sched3Item3Spouse($value);

	public function deleteByPg5Sched3Item1Description($value);

	public function deleteByPg5Sched3Item2Description($value);

	public function deleteByPg5Sched4Item1Taxpayer($value);

	public function deleteByPg5Sched4Item2Taxpayer($value);

	public function deleteByPg5Sched4Item3Taxpayer($value);

	public function deleteByPg5Sched4Item4Taxpayer($value);

	public function deleteByPg5Sched4Item5Taxpayer($value);

	public function deleteByPg5Sched4Item1Spouse($value);

	public function deleteByPg5Sched4Item2Spouse($value);

	public function deleteByPg5Sched4Item3Spouse($value);

	public function deleteByPg5Sched4Item4Spouse($value);

	public function deleteByPg5Sched4Item5Spouse($value);

	public function deleteByPg6Sched4bItem6Taxpayer($value);

	public function deleteByPg6Sched4bItem7Taxpayer($value);

	public function deleteByPg6Sched4bItem8Taxpayer($value);

	public function deleteByPg6Sched4bItem9Taxpayer($value);

	public function deleteByPg6Sched4bItem10Taxpayer($value);

	public function deleteByPg6Sched4bItem11Taxpayer($value);

	public function deleteByPg6Sched4bItem12Taxpayer($value);

	public function deleteByPg6Sched4bItem13Taxpayer($value);

	public function deleteByPg6Sched4bItem14Taxpayer($value);

	public function deleteByPg6Sched4bItem15Taxpayer($value);

	public function deleteByPg6Sched4bItem16Taxpayer($value);

	public function deleteByPg6Sched4bItem17Taxpayer($value);

	public function deleteByPg6Sched4bItem18Taxpayer($value);

	public function deleteByPg6Sched4bItem19Taxpayer($value);

	public function deleteByPg6Sched4bItem6Spouse($value);

	public function deleteByPg6Sched4bItem7Spouse($value);

	public function deleteByPg6Sched4bItem8Spouse($value);

	public function deleteByPg6Sched4bItem9Spouse($value);

	public function deleteByPg6Sched4bItem10Spouse($value);

	public function deleteByPg6Sched4bItem11Spouse($value);

	public function deleteByPg6Sched4bItem12Spouse($value);

	public function deleteByPg6Sched4bItem13Spouse($value);

	public function deleteByPg6Sched4bItem14Spouse($value);

	public function deleteByPg6Sched4bItem15Spouse($value);

	public function deleteByPg6Sched4bItem16Spouse($value);

	public function deleteByPg6Sched4bItem17Spouse($value);

	public function deleteByPg6Sched4bItem18Spouse($value);

	public function deleteByPg6Sched4bItem19Spouse($value);

	public function deleteByPg6Sched4cItem20Taxpayer($value);

	public function deleteByPg6Sched4cItem21Taxpayer($value);

	public function deleteByPg6Sched4cItem22Taxpayer($value);

	public function deleteByPg6Sched4cItem23Taxpayer($value);

	public function deleteByPg6Sched4cItem24Taxpayer($value);

	public function deleteByPg6Sched4cItem25Taxpayer($value);

	public function deleteByPg6Sched4cItem26Taxpayer($value);

	public function deleteByPg6Sched4cItem27Taxpayer($value);

	public function deleteByPg6Sched4cItem20Spouse($value);

	public function deleteByPg6Sched4cItem21Spouse($value);

	public function deleteByPg6Sched4cItem22Spouse($value);

	public function deleteByPg6Sched4cItem23Spouse($value);

	public function deleteByPg6Sched4cItem24Spouse($value);

	public function deleteByPg6Sched4cItem25Spouse($value);

	public function deleteByPg6Sched4cItem26Spouse($value);

	public function deleteByPg6Sched4cItem27Spouse($value);

	public function deleteByPg6Sched5Item1Taxpayer($value);

	public function deleteByPg6Sched5Item2Taxpayer($value);

	public function deleteByPg6Sched5Item3Taxpayer($value);

	public function deleteByPg6Sched5Item4Taxpayer($value);

	public function deleteByPg6Sched5Item5Taxpayer($value);

	public function deleteByPg6Sched5Item6Taxpayer($value);

	public function deleteByPg6Sched5Item1Spouse($value);

	public function deleteByPg6Sched5Item2Spouse($value);

	public function deleteByPg6Sched5Item3Spouse($value);

	public function deleteByPg6Sched5Item4Spouse($value);

	public function deleteByPg6Sched5Item5Spouse($value);

	public function deleteByPg6Sched5Item6Spouse($value);

	public function deleteByPg6Sched5Item1NatureOfIncome($value);

	public function deleteByPg6Sched5Item2NatureOfIncome($value);

	public function deleteByPg6Sched5Item3NatureOfIncome($value);

	public function deleteByPg6Sched5Item4NatureOfIncome($value);

	public function deleteByPg6Sched5Item5NatureOfIncome($value);

	public function deleteByPg6Sched6Item1Taxpayer($value);

	public function deleteByPg6Sched6Item2Taxpayer($value);

	public function deleteByPg6Sched6Item3Taxpayer($value);

	public function deleteByPg6Sched6Item4Taxpayer($value);

	public function deleteByPg6Sched6Item1Spouse($value);

	public function deleteByPg6Sched6Item2Spouse($value);

	public function deleteByPg6Sched6Item3Spouse($value);

	public function deleteByPg6Sched6Item4Spouse($value);

	public function deleteByPg6Sched6Item1Description($value);

	public function deleteByPg6Sched6Item2Description($value);

	public function deleteByPg6Sched6Item3Description($value);

	public function deleteByPg7Sched6Item5Taxpayer($value);

	public function deleteByPg7Sched6Item6Taxpayer($value);

	public function deleteByPg7Sched6Item7Taxpayer($value);

	public function deleteByPg7Sched6Item8Taxpayer($value);

	public function deleteByPg7Sched6Item9Taxpayer($value);

	public function deleteByPg7Sched6Item10Taxpayer($value);

	public function deleteByPg7Sched6Item11Taxpayer($value);

	public function deleteByPg7Sched6Item12Taxpayer($value);

	public function deleteByPg7Sched6Item13Taxpayer($value);

	public function deleteByPg7Sched6Item14Taxpayer($value);

	public function deleteByPg7Sched6Item15Taxpayer($value);

	public function deleteByPg7Sched6Item16Taxpayer($value);

	public function deleteByPg7Sched6Item17Taxpayer($value);

	public function deleteByPg7Sched6Item18Taxpayer($value);

	public function deleteByPg7Sched6Item19Taxpayer($value);

	public function deleteByPg7Sched6Item20Taxpayer($value);

	public function deleteByPg7Sched6Item21Taxpayer($value);

	public function deleteByPg7Sched6Item22Taxpayer($value);

	public function deleteByPg7Sched6Item23Taxpayer($value);

	public function deleteByPg7Sched6Item24Taxpayer($value);

	public function deleteByPg7Sched6Item25Taxpayer($value);

	public function deleteByPg7Sched6Item26Taxpayer($value);

	public function deleteByPg7Sched6Item27Taxpayer($value);

	public function deleteByPg7Sched6Item28Taxpayer($value);

	public function deleteByPg7Sched6Item29Taxpayer($value);

	public function deleteByPg7Sched6Item30Taxpayer($value);

	public function deleteByPg7Sched6Item31Taxpayer($value);

	public function deleteByPg7Sched6Item32Taxpayer($value);

	public function deleteByPg7Sched6Item33Taxpayer($value);

	public function deleteByPg7Sched6Item34Taxpayer($value);

	public function deleteByPg7Sched6Item35Taxpayer($value);

	public function deleteByPg7Sched6Item36Taxpayer($value);

	public function deleteByPg7Sched6Item37Taxpayer($value);

	public function deleteByPg7Sched6Item38Taxpayer($value);

	public function deleteByPg7Sched6Item39Taxpayer($value);

	public function deleteByPg7Sched6Item40Taxpayer($value);

	public function deleteByPg7Sched6Item5Spouse($value);

	public function deleteByPg7Sched6Item6Spouse($value);

	public function deleteByPg7Sched6Item7Spouse($value);

	public function deleteByPg7Sched6Item8Spouse($value);

	public function deleteByPg7Sched6Item9Spouse($value);

	public function deleteByPg7Sched6Item10Spouse($value);

	public function deleteByPg7Sched6Item11Spouse($value);

	public function deleteByPg7Sched6Item12Spouse($value);

	public function deleteByPg7Sched6Item13Spouse($value);

	public function deleteByPg7Sched6Item14Spouse($value);

	public function deleteByPg7Sched6Item15Spouse($value);

	public function deleteByPg7Sched6Item16Spouse($value);

	public function deleteByPg7Sched6Item17Spouse($value);

	public function deleteByPg7Sched6Item18Spouse($value);

	public function deleteByPg7Sched6Item19Spouse($value);

	public function deleteByPg7Sched6Item20Spouse($value);

	public function deleteByPg7Sched6Item21Spouse($value);

	public function deleteByPg7Sched6Item22Spouse($value);

	public function deleteByPg7Sched6Item23Spouse($value);

	public function deleteByPg7Sched6Item24Spouse($value);

	public function deleteByPg7Sched6Item25Spouse($value);

	public function deleteByPg7Sched6Item26Spouse($value);

	public function deleteByPg7Sched6Item27Spouse($value);

	public function deleteByPg7Sched6Item28Spouse($value);

	public function deleteByPg7Sched6Item29Spouse($value);

	public function deleteByPg7Sched6Item30Spouse($value);

	public function deleteByPg7Sched6Item31Spouse($value);

	public function deleteByPg7Sched6Item32Spouse($value);

	public function deleteByPg7Sched6Item33Spouse($value);

	public function deleteByPg7Sched6Item34Spouse($value);

	public function deleteByPg7Sched6Item35Spouse($value);

	public function deleteByPg7Sched6Item36Spouse($value);

	public function deleteByPg7Sched6Item37Spouse($value);

	public function deleteByPg7Sched6Item38Spouse($value);

	public function deleteByPg7Sched6Item39Spouse($value);

	public function deleteByPg7Sched6Item40Spouse($value);

	public function deleteByPg7Sched6Item36Description($value);

	public function deleteByPg7Sched6Item37Description($value);

	public function deleteByPg7Sched6Item38Description($value);

	public function deleteByPg7Sched6Item39Description($value);

	public function deleteByPg8Sched7Item1Taxpayer($value);

	public function deleteByPg8Sched7Item2Taxpayer($value);

	public function deleteByPg8Sched7Item3Taxpayer($value);

	public function deleteByPg8Sched7Item4Taxpayer($value);

	public function deleteByPg8Sched7Item5Taxpayer($value);

	public function deleteByPg8Sched7Item1Spouse($value);

	public function deleteByPg8Sched7Item2Spouse($value);

	public function deleteByPg8Sched7Item3Spouse($value);

	public function deleteByPg8Sched7Item4Spouse($value);

	public function deleteByPg8Sched7Item5Spouse($value);

	public function deleteByPg8Sched7Item1Description($value);

	public function deleteByPg8Sched7Item2Description($value);

	public function deleteByPg8Sched7Item3Description($value);

	public function deleteByPg8Sched7Item4Description($value);

	public function deleteByPg8Sched7Item1LegalBasis($value);

	public function deleteByPg8Sched7Item2LegalBasis($value);

	public function deleteByPg8Sched7Item3LegalBasis($value);

	public function deleteByPg8Sched7Item4LegalBasis($value);

	public function deleteByPg8Sched8aItem1Taxpayer($value);

	public function deleteByPg8Sched8aItem2Taxpayer($value);

	public function deleteByPg8Sched8aItem3Taxpayer($value);

	public function deleteByPg8Sched8aItem1Spouse($value);

	public function deleteByPg8Sched8aItem2Spouse($value);

	public function deleteByPg8Sched8aItem3Spouse($value);

	public function deleteByPg9Sched9Item1Taxpayer($value);

	public function deleteByPg9Sched9Item2Taxpayer($value);

	public function deleteByPg9Sched9Item3Taxpayer($value);

	public function deleteByPg9Sched9Item4Taxpayer($value);

	public function deleteByPg9Sched9Item5Taxpayer($value);

	public function deleteByPg9Sched9Item6Taxpayer($value);

	public function deleteByPg9Sched9Item7Taxpayer($value);

	public function deleteByPg9Sched9Item8Taxpayer($value);

	public function deleteByPg9Sched9Item9Taxpayer($value);

	public function deleteByPg9Sched9Item10Taxpayer($value);

	public function deleteByPg9Sched9Item1Spouse($value);

	public function deleteByPg9Sched9Item2Spouse($value);

	public function deleteByPg9Sched9Item3Spouse($value);

	public function deleteByPg9Sched9Item4Spouse($value);

	public function deleteByPg9Sched9Item5Spouse($value);

	public function deleteByPg9Sched9Item6Spouse($value);

	public function deleteByPg9Sched9Item7Spouse($value);

	public function deleteByPg9Sched9Item8Spouse($value);

	public function deleteByPg9Sched9Item9Spouse($value);

	public function deleteByPg9Sched9Item10Spouse($value);

	public function deleteByPg9Sched9Item9Other($value);

	public function deleteByPg9Sched10Item1Taxpayer($value);

	public function deleteByPg9Sched10Item2Taxpayer($value);

	public function deleteByPg9Sched10Item3Taxpayer($value);

	public function deleteByPg9Sched10Item4Taxpayer($value);

	public function deleteByPg9Sched10Item5Taxpayer($value);

	public function deleteByPg9Sched10Item6Taxpayer($value);

	public function deleteByPg9Sched10Item7Taxpayer($value);

	public function deleteByPg9Sched10Item8Taxpayer($value);

	public function deleteByPg9Sched10Item9Taxpayer($value);

	public function deleteByPg9Sched10Item10Taxpayer($value);

	public function deleteByPg9Sched10Item11Taxpayer($value);

	public function deleteByPg9Sched10Item12Taxpayer($value);

	public function deleteByPg9Sched10Item13Taxpayer($value);

	public function deleteByPg9Sched10Item14Taxpayer($value);

	public function deleteByPg9Sched10Item15Taxpayer($value);

	public function deleteByPg9Sched10Item16Taxpayer($value);

	public function deleteByPg9Sched10Item17Taxpayer($value);

	public function deleteByPg9Sched10Item1Spouse($value);

	public function deleteByPg9Sched10Item2Spouse($value);

	public function deleteByPg9Sched10Item3Spouse($value);

	public function deleteByPg9Sched10Item4Spouse($value);

	public function deleteByPg9Sched10Item5Spouse($value);

	public function deleteByPg9Sched10Item6Spouse($value);

	public function deleteByPg9Sched10Item7Spouse($value);

	public function deleteByPg9Sched10Item8Spouse($value);

	public function deleteByPg9Sched10Item9Spouse($value);

	public function deleteByPg9Sched10Item10Spouse($value);

	public function deleteByPg9Sched10Item11Spouse($value);

	public function deleteByPg9Sched10Item12Spouse($value);

	public function deleteByPg9Sched10Item13Spouse($value);

	public function deleteByPg9Sched10Item14Spouse($value);

	public function deleteByPg9Sched10Item15Spouse($value);

	public function deleteByPg9Sched10Item16Spouse($value);

	public function deleteByPg9Sched10Item17Spouse($value);


}
?>