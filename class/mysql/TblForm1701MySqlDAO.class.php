<?php
/**
 * Class that operate on table 'tbl_form_1701'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
class TblForm1701MySqlDAO implements TblForm1701DAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblForm1701MySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_form_1701';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_form_1701 ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblForm1701 primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM tbl_form_1701 WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblForm1701MySql tblForm1701
 	 */
	public function insert($tblForm1701){
		$sql = 'INSERT INTO tbl_form_1701 (taxable_peroid_id, status, item1_month, item1_year, amended, short_period, alpha, taxpayer_tin, rdo, tax_filer, tax_filer_name, trade_name, reg_address, date_of_birth, email, contact_num, civil_status, item_15, item_16, item_17, item_18, item_19, item_20, item_21, item_22, item_23, item_24, item_25, pg1_item_26, pg1_item_27, pg1_item_28, pg1_item_29, pg1_item_30, pg1_item_31, pg1_item_32, over_payment_type, pg2_item_41_taxpayer, pg2_item_42_taxpayer, pg2_item_43_taxpayer, pg2_item_44_taxpayer, pg2_item_45_taxpayer, pg2_item_46_taxpayer, pg2_item_47_taxpayer, pg2_item_48_taxpayer, pg2_item_49_taxpayer, pg2_item_50_taxpayer, pg2_item_51_taxpayer, pg2_item_52_taxpayer, pg2_item_53_taxpayer, pg2_item_54_taxpayer, pg2_item_55_taxpayer, pg2_item_56_taxpayer, pg2_item_57_taxpayer, pg2_item_58_taxpayer, pg2_item_59_taxpayer, pg2_item_60_taxpayer, pg2_item_61_taxpayer, pg2_item_62_taxpayer, pg2_item_63_taxpayer, pg2_item_64_taxpayer, pg2_item_65_taxpayer, pg2_item_66_taxpayer, pg2_item_67_taxpayer, pg2_item_41_spouse, pg2_item_42_spouse, pg2_item_43_spouse, pg2_item_44_spouse, pg2_item_45_spouse, pg2_item_46_spouse, pg2_item_47_spouse, pg2_item_48_spouse, pg2_item_49_spouse, pg2_item_50_spouse, pg2_item_51_spouse, pg2_item_52_spouse, pg2_item_53_spouse, pg2_item_54_spouse, pg2_item_55_spouse, pg2_item_56_spouse, pg2_item_57_spouse, pg2_item_58_spouse, pg2_item_59_spouse, pg2_item_60_spouse, pg2_item_61_spouse, pg2_item_62_spouse, pg2_item_63_spouse, pg2_item_64_spouse, pg2_item_65_spouse, pg2_item_66_spouse, pg2_item_67_spouse, pg3_item_68_taxpayer, pg3_item_69_taxpayer, pg3_item_70_taxpayer, pg3_item_71_taxpayer, pg3_item_72_taxpayer, pg3_item_73_taxpayer, pg3_item_74_taxpayer, pg3_item_75_taxpayer, pg3_item_76_taxpayer, pg3_item_77_taxpayer, pg3_item_86_taxpayer, pg3_item_87_taxpayer, pg3_item_88_taxpayer, pg3_item_89_taxpayer, pg3_item_90_taxpayer, pg3_item_91_taxpayer, pg3_item_92_taxpayer, pg3_item_93_taxpayer, pg3_item_68_spouse, pg3_item_69_spouse, pg3_item_70_spouse, pg3_item_71_spouse, pg3_item_72_spouse, pg3_item_73_spouse, pg3_item_74_spouse, pg3_item_75_spouse, pg3_item_76_spouse, pg3_item_77_spouse, pg3_item_78_spouse, pg3_item_79_spouse, pg3_item_80_spouse, pg3_item_81_spouse, pg3_item_82_spouse, pg3_item_83_spouse, pg3_item_84_spouse, pg3_item_85_spouse, pg3_item_86_spouse, pg3_item_87_spouse, pg3_item_88_spouse, pg3_item_89_spouse, pg3_item_90_spouse, pg3_item_91_spouse, pg3_item_92_spouse, pg3_item_93_spouse, pg3_item_94_spouse, pg5_sched_2_item_1_taxpayer, pg5_sched_2_item_2_taxpayer, pg5_sched_2_item_3_taxpayer, pg5_sched_2_item_4_taxpayer, pg5_sched_2_item_5_taxpayer, pg5_sched_2_item_1_spouse, pg5_sched_2_item_2_spouse, pg5_sched_2_item_3_spouse, pg5_sched_2_item_4_spouse, pg5_sched_2_item_5_spouse, pg5_sched_3_item_1_taxpayer, pg5_sched_3_item_2_taxpayer, pg5_sched_3_item_3_taxpayer, pg5_sched_3_item_1_spouse, pg5_sched_3_item_2_spouse, pg5_sched_3_item_3_spouse, pg5_sched_3_item_1_description, pg5_sched_3_item_2_description, pg5_sched_4_item_1_taxpayer, pg5_sched_4_item_2_taxpayer, pg5_sched_4_item_3_taxpayer, pg5_sched_4_item_4_taxpayer, pg5_sched_4_item_5_taxpayer, pg5_sched_4_item_1_spouse, pg5_sched_4_item_2_spouse, pg5_sched_4_item_3_spouse, pg5_sched_4_item_4_spouse, pg5_sched_4_item_5_spouse, pg6_sched_4b_item_6_taxpayer, pg6_sched_4b_item_7_taxpayer, pg6_sched_4b_item_8_taxpayer, pg6_sched_4b_item_9_taxpayer, pg6_sched_4b_item_10_taxpayer, pg6_sched_4b_item_11_taxpayer, pg6_sched_4b_item_12_taxpayer, pg6_sched_4b_item_13_taxpayer, pg6_sched_4b_item_14_taxpayer, pg6_sched_4b_item_15_taxpayer, pg6_sched_4b_item_16_taxpayer, pg6_sched_4b_item_17_taxpayer, pg6_sched_4b_item_18_taxpayer, pg6_sched_4b_item_19_taxpayer, pg6_sched_4b_item_6_spouse, pg6_sched_4b_item_7_spouse, pg6_sched_4b_item_8_spouse, pg6_sched_4b_item_9_spouse, pg6_sched_4b_item_10_spouse, pg6_sched_4b_item_11_spouse, pg6_sched_4b_item_12_spouse, pg6_sched_4b_item_13_spouse, pg6_sched_4b_item_14_spouse, pg6_sched_4b_item_15_spouse, pg6_sched_4b_item_16_spouse, pg6_sched_4b_item_17_spouse, pg6_sched_4b_item_18_spouse, pg6_sched_4b_item_19_spouse, pg6_sched_4c_item_20_taxpayer, pg6_sched_4c_item_21_taxpayer, pg6_sched_4c_item_22_taxpayer, pg6_sched_4c_item_23_taxpayer, pg6_sched_4c_item_24_taxpayer, pg6_sched_4c_item_25_taxpayer, pg6_sched_4c_item_26_taxpayer, pg6_sched_4c_item_27_taxpayer, pg6_sched_4c_item_20_spouse, pg6_sched_4c_item_21_spouse, pg6_sched_4c_item_22_spouse, pg6_sched_4c_item_23_spouse, pg6_sched_4c_item_24_spouse, pg6_sched_4c_item_25_spouse, pg6_sched_4c_item_26_spouse, pg6_sched_4c_item_27_spouse, pg6_sched_5_item_1_taxpayer, pg6_sched_5_item_2_taxpayer, pg6_sched_5_item_3_taxpayer, pg6_sched_5_item_4_taxpayer, pg6_sched_5_item_5_taxpayer, pg6_sched_5_item_6_taxpayer, pg6_sched_5_item_1_spouse, pg6_sched_5_item_2_spouse, pg6_sched_5_item_3_spouse, pg6_sched_5_item_4_spouse, pg6_sched_5_item_5_spouse, pg6_sched_5_item_6_spouse, pg6_sched_5_item_1_nature_of_income, pg6_sched_5_item_2_nature_of_income, pg6_sched_5_item_3_nature_of_income, pg6_sched_5_item_4_nature_of_income, pg6_sched_5_item_5_nature_of_income, pg6_sched_6_item_1_taxpayer, pg6_sched_6_item_2_taxpayer, pg6_sched_6_item_3_taxpayer, pg6_sched_6_item_4_taxpayer, pg6_sched_6_item_1_spouse, pg6_sched_6_item_2_spouse, pg6_sched_6_item_3_spouse, pg6_sched_6_item_4_spouse, pg6_sched_6_item_1_description, pg6_sched_6_item_2_description, pg6_sched_6_item_3_description, pg7_sched_6_item_5_taxpayer, pg7_sched_6_item_6_taxpayer, pg7_sched_6_item_7_taxpayer, pg7_sched_6_item_8_taxpayer, pg7_sched_6_item_9_taxpayer, pg7_sched_6_item_10_taxpayer, pg7_sched_6_item_11_taxpayer, pg7_sched_6_item_12_taxpayer, pg7_sched_6_item_13_taxpayer, pg7_sched_6_item_14_taxpayer, pg7_sched_6_item_15_taxpayer, pg7_sched_6_item_16_taxpayer, pg7_sched_6_item_17_taxpayer, pg7_sched_6_item_18_taxpayer, pg7_sched_6_item_19_taxpayer, pg7_sched_6_item_20_taxpayer, pg7_sched_6_item_21_taxpayer, pg7_sched_6_item_22_taxpayer, pg7_sched_6_item_23_taxpayer, pg7_sched_6_item_24_taxpayer, pg7_sched_6_item_25_taxpayer, pg7_sched_6_item_26_taxpayer, pg7_sched_6_item_27_taxpayer, pg7_sched_6_item_28_taxpayer, pg7_sched_6_item_29_taxpayer, pg7_sched_6_item_30_taxpayer, pg7_sched_6_item_31_taxpayer, pg7_sched_6_item_32_taxpayer, pg7_sched_6_item_33_taxpayer, pg7_sched_6_item_34_taxpayer, pg7_sched_6_item_35_taxpayer, pg7_sched_6_item_36_taxpayer, pg7_sched_6_item_37_taxpayer, pg7_sched_6_item_38_taxpayer, pg7_sched_6_item_39_taxpayer, pg7_sched_6_item_40_taxpayer, pg7_sched_6_item_5_spouse, pg7_sched_6_item_6_spouse, pg7_sched_6_item_7_spouse, pg7_sched_6_item_8_spouse, pg7_sched_6_item_9_spouse, pg7_sched_6_item_10_spouse, pg7_sched_6_item_11_spouse, pg7_sched_6_item_12_spouse, pg7_sched_6_item_13_spouse, pg7_sched_6_item_14_spouse, pg7_sched_6_item_15_spouse, pg7_sched_6_item_16_spouse, pg7_sched_6_item_17_spouse, pg7_sched_6_item_18_spouse, pg7_sched_6_item_19_spouse, pg7_sched_6_item_20_spouse, pg7_sched_6_item_21_spouse, pg7_sched_6_item_22_spouse, pg7_sched_6_item_23_spouse, pg7_sched_6_item_24_spouse, pg7_sched_6_item_25_spouse, pg7_sched_6_item_26_spouse, pg7_sched_6_item_27_spouse, pg7_sched_6_item_28_spouse, pg7_sched_6_item_29_spouse, pg7_sched_6_item_30_spouse, pg7_sched_6_item_31_spouse, pg7_sched_6_item_32_spouse, pg7_sched_6_item_33_spouse, pg7_sched_6_item_34_spouse, pg7_sched_6_item_35_spouse, pg7_sched_6_item_36_spouse, pg7_sched_6_item_37_spouse, pg7_sched_6_item_38_spouse, pg7_sched_6_item_39_spouse, pg7_sched_6_item_40_spouse, pg7_sched_6_item_36_description, pg7_sched_6_item_37_description, pg7_sched_6_item_38_description, pg7_sched_6_item_39_description, pg8_sched_7_item_1_taxpayer, pg8_sched_7_item_2_taxpayer, pg8_sched_7_item_3_taxpayer, pg8_sched_7_item_4_taxpayer, pg8_sched_7_item_5_taxpayer, pg8_sched_7_item_1_spouse, pg8_sched_7_item_2_spouse, pg8_sched_7_item_3_spouse, pg8_sched_7_item_4_spouse, pg8_sched_7_item_5_spouse, pg8_sched_7_item_1_description, pg8_sched_7_item_2_description, pg8_sched_7_item_3_description, pg8_sched_7_item_4_description, pg8_sched_7_item_1_legal_basis, pg8_sched_7_item_2_legal_basis, pg8_sched_7_item_3_legal_basis, pg8_sched_7_item_4_legal_basis, pg8_sched_8a_item_1_taxpayer, pg8_sched_8a_item_2_taxpayer, pg8_sched_8a_item_3_taxpayer, pg8_sched_8a_item_1_spouse, pg8_sched_8a_item_2_spouse, pg8_sched_8a_item_3_spouse, pg9_sched_9_item_1_taxpayer, pg9_sched_9_item_2_taxpayer, pg9_sched_9_item_3_taxpayer, pg9_sched_9_item_4_taxpayer, pg9_sched_9_item_5_taxpayer, pg9_sched_9_item_6_taxpayer, pg9_sched_9_item_7_taxpayer, pg9_sched_9_item_8_taxpayer, pg9_sched_9_item_9_taxpayer, pg9_sched_9_item_10_taxpayer, pg9_sched_9_item_1_spouse, pg9_sched_9_item_2_spouse, pg9_sched_9_item_3_spouse, pg9_sched_9_item_4_spouse, pg9_sched_9_item_5_spouse, pg9_sched_9_item_6_spouse, pg9_sched_9_item_7_spouse, pg9_sched_9_item_8_spouse, pg9_sched_9_item_9_spouse, pg9_sched_9_item_10_spouse, pg9_sched_9_item_9_other, pg9_sched_10_item_1_taxpayer, pg9_sched_10_item_2_taxpayer, pg9_sched_10_item_3_taxpayer, pg9_sched_10_item_4_taxpayer, pg9_sched_10_item_5_taxpayer, pg9_sched_10_item_6_taxpayer, pg9_sched_10_item_7_taxpayer, pg9_sched_10_item_8_taxpayer, pg9_sched_10_item_9_taxpayer, pg9_sched_10_item_10_taxpayer, pg9_sched_10_item_11_taxpayer, pg9_sched_10_item_12_taxpayer, pg9_sched_10_item_13_taxpayer, pg9_sched_10_item_14_taxpayer, pg9_sched_10_item_15_taxpayer, pg9_sched_10_item_16_taxpayer, pg9_sched_10_item_17_taxpayer, pg9_sched_10_item_1_spouse, pg9_sched_10_item_2_spouse, pg9_sched_10_item_3_spouse, pg9_sched_10_item_4_spouse, pg9_sched_10_item_5_spouse, pg9_sched_10_item_6_spouse, pg9_sched_10_item_7_spouse, pg9_sched_10_item_8_spouse, pg9_sched_10_item_9_spouse, pg9_sched_10_item_10_spouse, pg9_sched_10_item_11_spouse, pg9_sched_10_item_12_spouse, pg9_sched_10_item_13_spouse, pg9_sched_10_item_14_spouse, pg9_sched_10_item_15_spouse, pg9_sched_10_item_16_spouse, pg9_sched_10_item_17_spouse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1701->taxablePeroidId);
		$sqlQuery->set($tblForm1701->status);
		$sqlQuery->set($tblForm1701->item1Month);
		$sqlQuery->set($tblForm1701->item1Year);
		$sqlQuery->set($tblForm1701->amended);
		$sqlQuery->set($tblForm1701->shortPeriod);
		$sqlQuery->set($tblForm1701->alpha);
		$sqlQuery->set($tblForm1701->taxpayerTin);
		$sqlQuery->set($tblForm1701->rdo);
		$sqlQuery->set($tblForm1701->taxFiler);
		$sqlQuery->set($tblForm1701->taxFilerName);
		$sqlQuery->set($tblForm1701->tradeName);
		$sqlQuery->set($tblForm1701->regAddress);
		$sqlQuery->set($tblForm1701->dateOfBirth);
		$sqlQuery->set($tblForm1701->email);
		$sqlQuery->set($tblForm1701->contactNum);
		$sqlQuery->set($tblForm1701->civilStatus);
		$sqlQuery->set($tblForm1701->item15);
		$sqlQuery->set($tblForm1701->item16);
		$sqlQuery->set($tblForm1701->item17);
		$sqlQuery->set($tblForm1701->item18);
		$sqlQuery->set($tblForm1701->item19);
		$sqlQuery->set($tblForm1701->item20);
		$sqlQuery->set($tblForm1701->item21);
		$sqlQuery->set($tblForm1701->item22);
		$sqlQuery->set($tblForm1701->item23);
		$sqlQuery->set($tblForm1701->item24);
		$sqlQuery->set($tblForm1701->item25);
		$sqlQuery->set($tblForm1701->pg1Item26);
		$sqlQuery->set($tblForm1701->pg1Item27);
		$sqlQuery->set($tblForm1701->pg1Item28);
		$sqlQuery->set($tblForm1701->pg1Item29);
		$sqlQuery->set($tblForm1701->pg1Item30);
		$sqlQuery->set($tblForm1701->pg1Item31);
		$sqlQuery->set($tblForm1701->pg1Item32);
		$sqlQuery->set($tblForm1701->overPaymentType);
		$sqlQuery->set($tblForm1701->pg2Item41Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item42Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item43Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item44Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item45Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item46Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item47Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item48Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item49Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item50Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item51Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item52Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item53Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item54Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item55Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item56Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item57Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item58Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item59Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item60Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item61Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item62Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item63Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item64Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item65Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item66Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item67Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item41Spouse);
		$sqlQuery->set($tblForm1701->pg2Item42Spouse);
		$sqlQuery->set($tblForm1701->pg2Item43Spouse);
		$sqlQuery->set($tblForm1701->pg2Item44Spouse);
		$sqlQuery->set($tblForm1701->pg2Item45Spouse);
		$sqlQuery->set($tblForm1701->pg2Item46Spouse);
		$sqlQuery->set($tblForm1701->pg2Item47Spouse);
		$sqlQuery->set($tblForm1701->pg2Item48Spouse);
		$sqlQuery->set($tblForm1701->pg2Item49Spouse);
		$sqlQuery->set($tblForm1701->pg2Item50Spouse);
		$sqlQuery->set($tblForm1701->pg2Item51Spouse);
		$sqlQuery->set($tblForm1701->pg2Item52Spouse);
		$sqlQuery->set($tblForm1701->pg2Item53Spouse);
		$sqlQuery->set($tblForm1701->pg2Item54Spouse);
		$sqlQuery->set($tblForm1701->pg2Item55Spouse);
		$sqlQuery->set($tblForm1701->pg2Item56Spouse);
		$sqlQuery->set($tblForm1701->pg2Item57Spouse);
		$sqlQuery->set($tblForm1701->pg2Item58Spouse);
		$sqlQuery->set($tblForm1701->pg2Item59Spouse);
		$sqlQuery->set($tblForm1701->pg2Item60Spouse);
		$sqlQuery->set($tblForm1701->pg2Item61Spouse);
		$sqlQuery->set($tblForm1701->pg2Item62Spouse);
		$sqlQuery->set($tblForm1701->pg2Item63Spouse);
		$sqlQuery->set($tblForm1701->pg2Item64Spouse);
		$sqlQuery->set($tblForm1701->pg2Item65Spouse);
		$sqlQuery->set($tblForm1701->pg2Item66Spouse);
		$sqlQuery->set($tblForm1701->pg2Item67Spouse);
		$sqlQuery->set($tblForm1701->pg3Item68Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item69Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item70Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item71Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item72Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item73Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item74Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item75Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item76Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item77Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item86Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item87Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item88Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item89Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item90Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item91Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item92Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item93Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item68Spouse);
		$sqlQuery->set($tblForm1701->pg3Item69Spouse);
		$sqlQuery->set($tblForm1701->pg3Item70Spouse);
		$sqlQuery->set($tblForm1701->pg3Item71Spouse);
		$sqlQuery->set($tblForm1701->pg3Item72Spouse);
		$sqlQuery->set($tblForm1701->pg3Item73Spouse);
		$sqlQuery->set($tblForm1701->pg3Item74Spouse);
		$sqlQuery->set($tblForm1701->pg3Item75Spouse);
		$sqlQuery->set($tblForm1701->pg3Item76Spouse);
		$sqlQuery->set($tblForm1701->pg3Item77Spouse);
		$sqlQuery->set($tblForm1701->pg3Item78Spouse);
		$sqlQuery->set($tblForm1701->pg3Item79Spouse);
		$sqlQuery->set($tblForm1701->pg3Item80Spouse);
		$sqlQuery->set($tblForm1701->pg3Item81Spouse);
		$sqlQuery->set($tblForm1701->pg3Item82Spouse);
		$sqlQuery->set($tblForm1701->pg3Item83Spouse);
		$sqlQuery->set($tblForm1701->pg3Item84Spouse);
		$sqlQuery->set($tblForm1701->pg3Item85Spouse);
		$sqlQuery->set($tblForm1701->pg3Item86Spouse);
		$sqlQuery->set($tblForm1701->pg3Item87Spouse);
		$sqlQuery->set($tblForm1701->pg3Item88Spouse);
		$sqlQuery->set($tblForm1701->pg3Item89Spouse);
		$sqlQuery->set($tblForm1701->pg3Item90Spouse);
		$sqlQuery->set($tblForm1701->pg3Item91Spouse);
		$sqlQuery->set($tblForm1701->pg3Item92Spouse);
		$sqlQuery->set($tblForm1701->pg3Item93Spouse);
		$sqlQuery->set($tblForm1701->pg3Item94Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item1Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item2Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item3Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item4Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item5Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched3Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched3Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched3Item1Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item2Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item3Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item1Description);
		$sqlQuery->set($tblForm1701->pg5Sched3Item2Description);
		$sqlQuery->set($tblForm1701->pg5Sched4Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item1Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item2Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item3Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item4Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item5Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem6Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem7Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem8Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem9Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem10Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem11Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem12Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem13Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem14Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem15Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem16Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem17Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem18Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem19Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem6Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem7Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem8Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem9Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem10Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem11Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem12Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem13Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem14Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem15Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem16Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem17Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem18Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem19Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem20Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem21Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem22Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem23Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem24Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem25Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem26Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem27Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem20Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem21Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem22Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem23Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem24Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem25Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem26Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem27Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item1Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item2Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item3Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item4Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item5Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item6Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item1NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item2NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item3NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item4NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item5NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched6Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item1Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item2Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item3Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item4Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item1Description);
		$sqlQuery->set($tblForm1701->pg6Sched6Item2Description);
		$sqlQuery->set($tblForm1701->pg6Sched6Item3Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item7Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item8Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item9Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item10Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item11Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item12Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item13Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item14Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item15Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item16Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item17Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item18Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item19Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item20Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item21Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item22Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item23Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item24Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item25Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item26Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item27Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item28Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item29Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item30Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item31Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item32Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item33Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item34Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item35Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item36Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item37Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item38Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item39Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item40Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item5Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item6Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item7Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item8Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item9Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item10Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item11Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item12Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item13Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item14Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item15Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item16Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item17Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item18Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item19Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item20Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item21Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item22Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item23Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item24Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item25Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item26Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item27Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item28Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item29Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item30Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item31Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item32Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item33Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item34Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item35Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item36Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item37Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item38Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item39Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item40Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item36Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item37Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item38Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item39Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item5Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem1Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem2Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem3Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem1Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem2Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem3Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item7Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item8Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item9Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item10Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item1Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item2Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item3Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item4Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item5Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item6Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item7Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item8Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item9Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item10Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item9Other);
		$sqlQuery->set($tblForm1701->pg9Sched10Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item7Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item8Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item9Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item10Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item11Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item12Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item13Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item14Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item15Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item16Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item17Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item1Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item2Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item3Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item4Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item5Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item6Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item7Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item8Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item9Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item10Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item11Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item12Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item13Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item14Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item15Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item16Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item17Spouse);

		$id = $this->executeInsert($sqlQuery);	
		$tblForm1701->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblForm1701MySql tblForm1701
 	 */
	public function update($tblForm1701){
		$sql = 'UPDATE tbl_form_1701 SET taxable_peroid_id = ?, status = ?, item1_month = ?, item1_year = ?, amended = ?, short_period = ?, alpha = ?, taxpayer_tin = ?, rdo = ?, tax_filer = ?, tax_filer_name = ?, trade_name = ?, reg_address = ?, date_of_birth = ?, email = ?, contact_num = ?, civil_status = ?, item_15 = ?, item_16 = ?, item_17 = ?, item_18 = ?, item_19 = ?, item_20 = ?, item_21 = ?, item_22 = ?, item_23 = ?, item_24 = ?, item_25 = ?, pg1_item_26 = ?, pg1_item_27 = ?, pg1_item_28 = ?, pg1_item_29 = ?, pg1_item_30 = ?, pg1_item_31 = ?, pg1_item_32 = ?, over_payment_type = ?, pg2_item_41_taxpayer = ?, pg2_item_42_taxpayer = ?, pg2_item_43_taxpayer = ?, pg2_item_44_taxpayer = ?, pg2_item_45_taxpayer = ?, pg2_item_46_taxpayer = ?, pg2_item_47_taxpayer = ?, pg2_item_48_taxpayer = ?, pg2_item_49_taxpayer = ?, pg2_item_50_taxpayer = ?, pg2_item_51_taxpayer = ?, pg2_item_52_taxpayer = ?, pg2_item_53_taxpayer = ?, pg2_item_54_taxpayer = ?, pg2_item_55_taxpayer = ?, pg2_item_56_taxpayer = ?, pg2_item_57_taxpayer = ?, pg2_item_58_taxpayer = ?, pg2_item_59_taxpayer = ?, pg2_item_60_taxpayer = ?, pg2_item_61_taxpayer = ?, pg2_item_62_taxpayer = ?, pg2_item_63_taxpayer = ?, pg2_item_64_taxpayer = ?, pg2_item_65_taxpayer = ?, pg2_item_66_taxpayer = ?, pg2_item_67_taxpayer = ?, pg2_item_41_spouse = ?, pg2_item_42_spouse = ?, pg2_item_43_spouse = ?, pg2_item_44_spouse = ?, pg2_item_45_spouse = ?, pg2_item_46_spouse = ?, pg2_item_47_spouse = ?, pg2_item_48_spouse = ?, pg2_item_49_spouse = ?, pg2_item_50_spouse = ?, pg2_item_51_spouse = ?, pg2_item_52_spouse = ?, pg2_item_53_spouse = ?, pg2_item_54_spouse = ?, pg2_item_55_spouse = ?, pg2_item_56_spouse = ?, pg2_item_57_spouse = ?, pg2_item_58_spouse = ?, pg2_item_59_spouse = ?, pg2_item_60_spouse = ?, pg2_item_61_spouse = ?, pg2_item_62_spouse = ?, pg2_item_63_spouse = ?, pg2_item_64_spouse = ?, pg2_item_65_spouse = ?, pg2_item_66_spouse = ?, pg2_item_67_spouse = ?, pg3_item_68_taxpayer = ?, pg3_item_69_taxpayer = ?, pg3_item_70_taxpayer = ?, pg3_item_71_taxpayer = ?, pg3_item_72_taxpayer = ?, pg3_item_73_taxpayer = ?, pg3_item_74_taxpayer = ?, pg3_item_75_taxpayer = ?, pg3_item_76_taxpayer = ?, pg3_item_77_taxpayer = ?, pg3_item_86_taxpayer = ?, pg3_item_87_taxpayer = ?, pg3_item_88_taxpayer = ?, pg3_item_89_taxpayer = ?, pg3_item_90_taxpayer = ?, pg3_item_91_taxpayer = ?, pg3_item_92_taxpayer = ?, pg3_item_93_taxpayer = ?, pg3_item_68_spouse = ?, pg3_item_69_spouse = ?, pg3_item_70_spouse = ?, pg3_item_71_spouse = ?, pg3_item_72_spouse = ?, pg3_item_73_spouse = ?, pg3_item_74_spouse = ?, pg3_item_75_spouse = ?, pg3_item_76_spouse = ?, pg3_item_77_spouse = ?, pg3_item_78_spouse = ?, pg3_item_79_spouse = ?, pg3_item_80_spouse = ?, pg3_item_81_spouse = ?, pg3_item_82_spouse = ?, pg3_item_83_spouse = ?, pg3_item_84_spouse = ?, pg3_item_85_spouse = ?, pg3_item_86_spouse = ?, pg3_item_87_spouse = ?, pg3_item_88_spouse = ?, pg3_item_89_spouse = ?, pg3_item_90_spouse = ?, pg3_item_91_spouse = ?, pg3_item_92_spouse = ?, pg3_item_93_spouse = ?, pg3_item_94_spouse = ?, pg5_sched_2_item_1_taxpayer = ?, pg5_sched_2_item_2_taxpayer = ?, pg5_sched_2_item_3_taxpayer = ?, pg5_sched_2_item_4_taxpayer = ?, pg5_sched_2_item_5_taxpayer = ?, pg5_sched_2_item_1_spouse = ?, pg5_sched_2_item_2_spouse = ?, pg5_sched_2_item_3_spouse = ?, pg5_sched_2_item_4_spouse = ?, pg5_sched_2_item_5_spouse = ?, pg5_sched_3_item_1_taxpayer = ?, pg5_sched_3_item_2_taxpayer = ?, pg5_sched_3_item_3_taxpayer = ?, pg5_sched_3_item_1_spouse = ?, pg5_sched_3_item_2_spouse = ?, pg5_sched_3_item_3_spouse = ?, pg5_sched_3_item_1_description = ?, pg5_sched_3_item_2_description = ?, pg5_sched_4_item_1_taxpayer = ?, pg5_sched_4_item_2_taxpayer = ?, pg5_sched_4_item_3_taxpayer = ?, pg5_sched_4_item_4_taxpayer = ?, pg5_sched_4_item_5_taxpayer = ?, pg5_sched_4_item_1_spouse = ?, pg5_sched_4_item_2_spouse = ?, pg5_sched_4_item_3_spouse = ?, pg5_sched_4_item_4_spouse = ?, pg5_sched_4_item_5_spouse = ?, pg6_sched_4b_item_6_taxpayer = ?, pg6_sched_4b_item_7_taxpayer = ?, pg6_sched_4b_item_8_taxpayer = ?, pg6_sched_4b_item_9_taxpayer = ?, pg6_sched_4b_item_10_taxpayer = ?, pg6_sched_4b_item_11_taxpayer = ?, pg6_sched_4b_item_12_taxpayer = ?, pg6_sched_4b_item_13_taxpayer = ?, pg6_sched_4b_item_14_taxpayer = ?, pg6_sched_4b_item_15_taxpayer = ?, pg6_sched_4b_item_16_taxpayer = ?, pg6_sched_4b_item_17_taxpayer = ?, pg6_sched_4b_item_18_taxpayer = ?, pg6_sched_4b_item_19_taxpayer = ?, pg6_sched_4b_item_6_spouse = ?, pg6_sched_4b_item_7_spouse = ?, pg6_sched_4b_item_8_spouse = ?, pg6_sched_4b_item_9_spouse = ?, pg6_sched_4b_item_10_spouse = ?, pg6_sched_4b_item_11_spouse = ?, pg6_sched_4b_item_12_spouse = ?, pg6_sched_4b_item_13_spouse = ?, pg6_sched_4b_item_14_spouse = ?, pg6_sched_4b_item_15_spouse = ?, pg6_sched_4b_item_16_spouse = ?, pg6_sched_4b_item_17_spouse = ?, pg6_sched_4b_item_18_spouse = ?, pg6_sched_4b_item_19_spouse = ?, pg6_sched_4c_item_20_taxpayer = ?, pg6_sched_4c_item_21_taxpayer = ?, pg6_sched_4c_item_22_taxpayer = ?, pg6_sched_4c_item_23_taxpayer = ?, pg6_sched_4c_item_24_taxpayer = ?, pg6_sched_4c_item_25_taxpayer = ?, pg6_sched_4c_item_26_taxpayer = ?, pg6_sched_4c_item_27_taxpayer = ?, pg6_sched_4c_item_20_spouse = ?, pg6_sched_4c_item_21_spouse = ?, pg6_sched_4c_item_22_spouse = ?, pg6_sched_4c_item_23_spouse = ?, pg6_sched_4c_item_24_spouse = ?, pg6_sched_4c_item_25_spouse = ?, pg6_sched_4c_item_26_spouse = ?, pg6_sched_4c_item_27_spouse = ?, pg6_sched_5_item_1_taxpayer = ?, pg6_sched_5_item_2_taxpayer = ?, pg6_sched_5_item_3_taxpayer = ?, pg6_sched_5_item_4_taxpayer = ?, pg6_sched_5_item_5_taxpayer = ?, pg6_sched_5_item_6_taxpayer = ?, pg6_sched_5_item_1_spouse = ?, pg6_sched_5_item_2_spouse = ?, pg6_sched_5_item_3_spouse = ?, pg6_sched_5_item_4_spouse = ?, pg6_sched_5_item_5_spouse = ?, pg6_sched_5_item_6_spouse = ?, pg6_sched_5_item_1_nature_of_income = ?, pg6_sched_5_item_2_nature_of_income = ?, pg6_sched_5_item_3_nature_of_income = ?, pg6_sched_5_item_4_nature_of_income = ?, pg6_sched_5_item_5_nature_of_income = ?, pg6_sched_6_item_1_taxpayer = ?, pg6_sched_6_item_2_taxpayer = ?, pg6_sched_6_item_3_taxpayer = ?, pg6_sched_6_item_4_taxpayer = ?, pg6_sched_6_item_1_spouse = ?, pg6_sched_6_item_2_spouse = ?, pg6_sched_6_item_3_spouse = ?, pg6_sched_6_item_4_spouse = ?, pg6_sched_6_item_1_description = ?, pg6_sched_6_item_2_description = ?, pg6_sched_6_item_3_description = ?, pg7_sched_6_item_5_taxpayer = ?, pg7_sched_6_item_6_taxpayer = ?, pg7_sched_6_item_7_taxpayer = ?, pg7_sched_6_item_8_taxpayer = ?, pg7_sched_6_item_9_taxpayer = ?, pg7_sched_6_item_10_taxpayer = ?, pg7_sched_6_item_11_taxpayer = ?, pg7_sched_6_item_12_taxpayer = ?, pg7_sched_6_item_13_taxpayer = ?, pg7_sched_6_item_14_taxpayer = ?, pg7_sched_6_item_15_taxpayer = ?, pg7_sched_6_item_16_taxpayer = ?, pg7_sched_6_item_17_taxpayer = ?, pg7_sched_6_item_18_taxpayer = ?, pg7_sched_6_item_19_taxpayer = ?, pg7_sched_6_item_20_taxpayer = ?, pg7_sched_6_item_21_taxpayer = ?, pg7_sched_6_item_22_taxpayer = ?, pg7_sched_6_item_23_taxpayer = ?, pg7_sched_6_item_24_taxpayer = ?, pg7_sched_6_item_25_taxpayer = ?, pg7_sched_6_item_26_taxpayer = ?, pg7_sched_6_item_27_taxpayer = ?, pg7_sched_6_item_28_taxpayer = ?, pg7_sched_6_item_29_taxpayer = ?, pg7_sched_6_item_30_taxpayer = ?, pg7_sched_6_item_31_taxpayer = ?, pg7_sched_6_item_32_taxpayer = ?, pg7_sched_6_item_33_taxpayer = ?, pg7_sched_6_item_34_taxpayer = ?, pg7_sched_6_item_35_taxpayer = ?, pg7_sched_6_item_36_taxpayer = ?, pg7_sched_6_item_37_taxpayer = ?, pg7_sched_6_item_38_taxpayer = ?, pg7_sched_6_item_39_taxpayer = ?, pg7_sched_6_item_40_taxpayer = ?, pg7_sched_6_item_5_spouse = ?, pg7_sched_6_item_6_spouse = ?, pg7_sched_6_item_7_spouse = ?, pg7_sched_6_item_8_spouse = ?, pg7_sched_6_item_9_spouse = ?, pg7_sched_6_item_10_spouse = ?, pg7_sched_6_item_11_spouse = ?, pg7_sched_6_item_12_spouse = ?, pg7_sched_6_item_13_spouse = ?, pg7_sched_6_item_14_spouse = ?, pg7_sched_6_item_15_spouse = ?, pg7_sched_6_item_16_spouse = ?, pg7_sched_6_item_17_spouse = ?, pg7_sched_6_item_18_spouse = ?, pg7_sched_6_item_19_spouse = ?, pg7_sched_6_item_20_spouse = ?, pg7_sched_6_item_21_spouse = ?, pg7_sched_6_item_22_spouse = ?, pg7_sched_6_item_23_spouse = ?, pg7_sched_6_item_24_spouse = ?, pg7_sched_6_item_25_spouse = ?, pg7_sched_6_item_26_spouse = ?, pg7_sched_6_item_27_spouse = ?, pg7_sched_6_item_28_spouse = ?, pg7_sched_6_item_29_spouse = ?, pg7_sched_6_item_30_spouse = ?, pg7_sched_6_item_31_spouse = ?, pg7_sched_6_item_32_spouse = ?, pg7_sched_6_item_33_spouse = ?, pg7_sched_6_item_34_spouse = ?, pg7_sched_6_item_35_spouse = ?, pg7_sched_6_item_36_spouse = ?, pg7_sched_6_item_37_spouse = ?, pg7_sched_6_item_38_spouse = ?, pg7_sched_6_item_39_spouse = ?, pg7_sched_6_item_40_spouse = ?, pg7_sched_6_item_36_description = ?, pg7_sched_6_item_37_description = ?, pg7_sched_6_item_38_description = ?, pg7_sched_6_item_39_description = ?, pg8_sched_7_item_1_taxpayer = ?, pg8_sched_7_item_2_taxpayer = ?, pg8_sched_7_item_3_taxpayer = ?, pg8_sched_7_item_4_taxpayer = ?, pg8_sched_7_item_5_taxpayer = ?, pg8_sched_7_item_1_spouse = ?, pg8_sched_7_item_2_spouse = ?, pg8_sched_7_item_3_spouse = ?, pg8_sched_7_item_4_spouse = ?, pg8_sched_7_item_5_spouse = ?, pg8_sched_7_item_1_description = ?, pg8_sched_7_item_2_description = ?, pg8_sched_7_item_3_description = ?, pg8_sched_7_item_4_description = ?, pg8_sched_7_item_1_legal_basis = ?, pg8_sched_7_item_2_legal_basis = ?, pg8_sched_7_item_3_legal_basis = ?, pg8_sched_7_item_4_legal_basis = ?, pg8_sched_8a_item_1_taxpayer = ?, pg8_sched_8a_item_2_taxpayer = ?, pg8_sched_8a_item_3_taxpayer = ?, pg8_sched_8a_item_1_spouse = ?, pg8_sched_8a_item_2_spouse = ?, pg8_sched_8a_item_3_spouse = ?, pg9_sched_9_item_1_taxpayer = ?, pg9_sched_9_item_2_taxpayer = ?, pg9_sched_9_item_3_taxpayer = ?, pg9_sched_9_item_4_taxpayer = ?, pg9_sched_9_item_5_taxpayer = ?, pg9_sched_9_item_6_taxpayer = ?, pg9_sched_9_item_7_taxpayer = ?, pg9_sched_9_item_8_taxpayer = ?, pg9_sched_9_item_9_taxpayer = ?, pg9_sched_9_item_10_taxpayer = ?, pg9_sched_9_item_1_spouse = ?, pg9_sched_9_item_2_spouse = ?, pg9_sched_9_item_3_spouse = ?, pg9_sched_9_item_4_spouse = ?, pg9_sched_9_item_5_spouse = ?, pg9_sched_9_item_6_spouse = ?, pg9_sched_9_item_7_spouse = ?, pg9_sched_9_item_8_spouse = ?, pg9_sched_9_item_9_spouse = ?, pg9_sched_9_item_10_spouse = ?, pg9_sched_9_item_9_other = ?, pg9_sched_10_item_1_taxpayer = ?, pg9_sched_10_item_2_taxpayer = ?, pg9_sched_10_item_3_taxpayer = ?, pg9_sched_10_item_4_taxpayer = ?, pg9_sched_10_item_5_taxpayer = ?, pg9_sched_10_item_6_taxpayer = ?, pg9_sched_10_item_7_taxpayer = ?, pg9_sched_10_item_8_taxpayer = ?, pg9_sched_10_item_9_taxpayer = ?, pg9_sched_10_item_10_taxpayer = ?, pg9_sched_10_item_11_taxpayer = ?, pg9_sched_10_item_12_taxpayer = ?, pg9_sched_10_item_13_taxpayer = ?, pg9_sched_10_item_14_taxpayer = ?, pg9_sched_10_item_15_taxpayer = ?, pg9_sched_10_item_16_taxpayer = ?, pg9_sched_10_item_17_taxpayer = ?, pg9_sched_10_item_1_spouse = ?, pg9_sched_10_item_2_spouse = ?, pg9_sched_10_item_3_spouse = ?, pg9_sched_10_item_4_spouse = ?, pg9_sched_10_item_5_spouse = ?, pg9_sched_10_item_6_spouse = ?, pg9_sched_10_item_7_spouse = ?, pg9_sched_10_item_8_spouse = ?, pg9_sched_10_item_9_spouse = ?, pg9_sched_10_item_10_spouse = ?, pg9_sched_10_item_11_spouse = ?, pg9_sched_10_item_12_spouse = ?, pg9_sched_10_item_13_spouse = ?, pg9_sched_10_item_14_spouse = ?, pg9_sched_10_item_15_spouse = ?, pg9_sched_10_item_16_spouse = ?, pg9_sched_10_item_17_spouse = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblForm1701->taxablePeroidId);
		$sqlQuery->set($tblForm1701->status);
		$sqlQuery->set($tblForm1701->item1Month);
		$sqlQuery->set($tblForm1701->item1Year);
		$sqlQuery->set($tblForm1701->amended);
		$sqlQuery->set($tblForm1701->shortPeriod);
		$sqlQuery->set($tblForm1701->alpha);
		$sqlQuery->set($tblForm1701->taxpayerTin);
		$sqlQuery->set($tblForm1701->rdo);
		$sqlQuery->set($tblForm1701->taxFiler);
		$sqlQuery->set($tblForm1701->taxFilerName);
		$sqlQuery->set($tblForm1701->tradeName);
		$sqlQuery->set($tblForm1701->regAddress);
		$sqlQuery->set($tblForm1701->dateOfBirth);
		$sqlQuery->set($tblForm1701->email);
		$sqlQuery->set($tblForm1701->contactNum);
		$sqlQuery->set($tblForm1701->civilStatus);
		$sqlQuery->set($tblForm1701->item15);
		$sqlQuery->set($tblForm1701->item16);
		$sqlQuery->set($tblForm1701->item17);
		$sqlQuery->set($tblForm1701->item18);
		$sqlQuery->set($tblForm1701->item19);
		$sqlQuery->set($tblForm1701->item20);
		$sqlQuery->set($tblForm1701->item21);
		$sqlQuery->set($tblForm1701->item22);
		$sqlQuery->set($tblForm1701->item23);
		$sqlQuery->set($tblForm1701->item24);
		$sqlQuery->set($tblForm1701->item25);
		$sqlQuery->set($tblForm1701->pg1Item26);
		$sqlQuery->set($tblForm1701->pg1Item27);
		$sqlQuery->set($tblForm1701->pg1Item28);
		$sqlQuery->set($tblForm1701->pg1Item29);
		$sqlQuery->set($tblForm1701->pg1Item30);
		$sqlQuery->set($tblForm1701->pg1Item31);
		$sqlQuery->set($tblForm1701->pg1Item32);
		$sqlQuery->set($tblForm1701->overPaymentType);
		$sqlQuery->set($tblForm1701->pg2Item41Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item42Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item43Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item44Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item45Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item46Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item47Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item48Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item49Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item50Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item51Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item52Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item53Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item54Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item55Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item56Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item57Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item58Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item59Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item60Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item61Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item62Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item63Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item64Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item65Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item66Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item67Taxpayer);
		$sqlQuery->set($tblForm1701->pg2Item41Spouse);
		$sqlQuery->set($tblForm1701->pg2Item42Spouse);
		$sqlQuery->set($tblForm1701->pg2Item43Spouse);
		$sqlQuery->set($tblForm1701->pg2Item44Spouse);
		$sqlQuery->set($tblForm1701->pg2Item45Spouse);
		$sqlQuery->set($tblForm1701->pg2Item46Spouse);
		$sqlQuery->set($tblForm1701->pg2Item47Spouse);
		$sqlQuery->set($tblForm1701->pg2Item48Spouse);
		$sqlQuery->set($tblForm1701->pg2Item49Spouse);
		$sqlQuery->set($tblForm1701->pg2Item50Spouse);
		$sqlQuery->set($tblForm1701->pg2Item51Spouse);
		$sqlQuery->set($tblForm1701->pg2Item52Spouse);
		$sqlQuery->set($tblForm1701->pg2Item53Spouse);
		$sqlQuery->set($tblForm1701->pg2Item54Spouse);
		$sqlQuery->set($tblForm1701->pg2Item55Spouse);
		$sqlQuery->set($tblForm1701->pg2Item56Spouse);
		$sqlQuery->set($tblForm1701->pg2Item57Spouse);
		$sqlQuery->set($tblForm1701->pg2Item58Spouse);
		$sqlQuery->set($tblForm1701->pg2Item59Spouse);
		$sqlQuery->set($tblForm1701->pg2Item60Spouse);
		$sqlQuery->set($tblForm1701->pg2Item61Spouse);
		$sqlQuery->set($tblForm1701->pg2Item62Spouse);
		$sqlQuery->set($tblForm1701->pg2Item63Spouse);
		$sqlQuery->set($tblForm1701->pg2Item64Spouse);
		$sqlQuery->set($tblForm1701->pg2Item65Spouse);
		$sqlQuery->set($tblForm1701->pg2Item66Spouse);
		$sqlQuery->set($tblForm1701->pg2Item67Spouse);
		$sqlQuery->set($tblForm1701->pg3Item68Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item69Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item70Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item71Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item72Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item73Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item74Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item75Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item76Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item77Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item86Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item87Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item88Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item89Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item90Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item91Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item92Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item93Taxpayer);
		$sqlQuery->set($tblForm1701->pg3Item68Spouse);
		$sqlQuery->set($tblForm1701->pg3Item69Spouse);
		$sqlQuery->set($tblForm1701->pg3Item70Spouse);
		$sqlQuery->set($tblForm1701->pg3Item71Spouse);
		$sqlQuery->set($tblForm1701->pg3Item72Spouse);
		$sqlQuery->set($tblForm1701->pg3Item73Spouse);
		$sqlQuery->set($tblForm1701->pg3Item74Spouse);
		$sqlQuery->set($tblForm1701->pg3Item75Spouse);
		$sqlQuery->set($tblForm1701->pg3Item76Spouse);
		$sqlQuery->set($tblForm1701->pg3Item77Spouse);
		$sqlQuery->set($tblForm1701->pg3Item78Spouse);
		$sqlQuery->set($tblForm1701->pg3Item79Spouse);
		$sqlQuery->set($tblForm1701->pg3Item80Spouse);
		$sqlQuery->set($tblForm1701->pg3Item81Spouse);
		$sqlQuery->set($tblForm1701->pg3Item82Spouse);
		$sqlQuery->set($tblForm1701->pg3Item83Spouse);
		$sqlQuery->set($tblForm1701->pg3Item84Spouse);
		$sqlQuery->set($tblForm1701->pg3Item85Spouse);
		$sqlQuery->set($tblForm1701->pg3Item86Spouse);
		$sqlQuery->set($tblForm1701->pg3Item87Spouse);
		$sqlQuery->set($tblForm1701->pg3Item88Spouse);
		$sqlQuery->set($tblForm1701->pg3Item89Spouse);
		$sqlQuery->set($tblForm1701->pg3Item90Spouse);
		$sqlQuery->set($tblForm1701->pg3Item91Spouse);
		$sqlQuery->set($tblForm1701->pg3Item92Spouse);
		$sqlQuery->set($tblForm1701->pg3Item93Spouse);
		$sqlQuery->set($tblForm1701->pg3Item94Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched2Item1Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item2Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item3Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item4Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched2Item5Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched3Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched3Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched3Item1Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item2Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item3Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched3Item1Description);
		$sqlQuery->set($tblForm1701->pg5Sched3Item2Description);
		$sqlQuery->set($tblForm1701->pg5Sched4Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg5Sched4Item1Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item2Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item3Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item4Spouse);
		$sqlQuery->set($tblForm1701->pg5Sched4Item5Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem6Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem7Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem8Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem9Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem10Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem11Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem12Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem13Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem14Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem15Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem16Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem17Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem18Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem19Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem6Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem7Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem8Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem9Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem10Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem11Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem12Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem13Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem14Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem15Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem16Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem17Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem18Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4bItem19Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem20Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem21Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem22Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem23Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem24Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem25Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem26Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem27Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem20Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem21Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem22Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem23Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem24Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem25Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem26Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched4cItem27Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched5Item1Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item2Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item3Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item4Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item5Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item6Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched5Item1NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item2NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item3NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item4NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched5Item5NatureOfIncome);
		$sqlQuery->set($tblForm1701->pg6Sched6Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg6Sched6Item1Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item2Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item3Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item4Spouse);
		$sqlQuery->set($tblForm1701->pg6Sched6Item1Description);
		$sqlQuery->set($tblForm1701->pg6Sched6Item2Description);
		$sqlQuery->set($tblForm1701->pg6Sched6Item3Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item7Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item8Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item9Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item10Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item11Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item12Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item13Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item14Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item15Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item16Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item17Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item18Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item19Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item20Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item21Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item22Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item23Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item24Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item25Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item26Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item27Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item28Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item29Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item30Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item31Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item32Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item33Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item34Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item35Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item36Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item37Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item38Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item39Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item40Taxpayer);
		$sqlQuery->set($tblForm1701->pg7Sched6Item5Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item6Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item7Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item8Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item9Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item10Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item11Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item12Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item13Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item14Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item15Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item16Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item17Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item18Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item19Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item20Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item21Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item22Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item23Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item24Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item25Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item26Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item27Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item28Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item29Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item30Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item31Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item32Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item33Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item34Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item35Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item36Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item37Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item38Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item39Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item40Spouse);
		$sqlQuery->set($tblForm1701->pg7Sched6Item36Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item37Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item38Description);
		$sqlQuery->set($tblForm1701->pg7Sched6Item39Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item5Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4Description);
		$sqlQuery->set($tblForm1701->pg8Sched7Item1LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched7Item2LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched7Item3LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched7Item4LegalBasis);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem1Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem2Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem3Taxpayer);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem1Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem2Spouse);
		$sqlQuery->set($tblForm1701->pg8Sched8aItem3Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item7Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item8Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item9Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item10Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched9Item1Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item2Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item3Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item4Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item5Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item6Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item7Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item8Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item9Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item10Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched9Item9Other);
		$sqlQuery->set($tblForm1701->pg9Sched10Item1Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item2Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item3Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item4Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item5Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item6Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item7Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item8Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item9Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item10Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item11Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item12Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item13Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item14Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item15Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item16Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item17Taxpayer);
		$sqlQuery->set($tblForm1701->pg9Sched10Item1Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item2Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item3Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item4Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item5Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item6Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item7Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item8Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item9Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item10Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item11Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item12Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item13Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item14Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item15Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item16Spouse);
		$sqlQuery->set($tblForm1701->pg9Sched10Item17Spouse);

		$sqlQuery->setNumber($tblForm1701->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_form_1701';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaxablePeroidId($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1Month($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item1_month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem1Year($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item1_year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAmended($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE amended = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByShortPeriod($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE short_period = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlpha($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE alpha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaxpayerTin($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE taxpayer_tin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRdo($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE rdo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaxFiler($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE tax_filer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaxFilerName($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE tax_filer_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTradeName($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE trade_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRegAddress($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE reg_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateOfBirth($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE date_of_birth = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContactNum($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE contact_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCivilStatus($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE civil_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem15($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem16($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_16 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem17($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem18($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem19($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem20($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_20 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem21($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem22($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem23($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_23 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem24($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItem25($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item26($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_26 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item27($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_27 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item28($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_28 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item29($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_29 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item30($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_30 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item31($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_31 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg1Item32($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg1_item_32 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOverPaymentType($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE over_payment_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item41Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_41_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item42Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_42_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item43Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_43_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item44Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_44_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item45Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_45_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item46Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_46_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item47Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_47_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item48Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_48_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item49Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_49_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item50Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_50_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item51Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_51_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item52Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_52_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item53Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_53_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item54Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_54_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item55Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_55_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item56Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_56_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item57Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_57_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item58Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_58_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item59Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_59_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item60Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_60_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item61Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_61_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item62Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_62_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item63Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_63_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item64Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_64_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item65Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_65_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item66Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_66_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item67Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_67_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item41Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_41_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item42Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_42_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item43Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_43_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item44Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_44_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item45Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_45_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item46Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_46_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item47Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_47_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item48Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_48_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item49Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_49_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item50Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_50_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item51Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_51_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item52Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_52_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item53Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_53_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item54Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_54_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item55Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_55_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item56Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_56_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item57Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_57_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item58Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_58_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item59Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_59_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item60Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_60_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item61Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_61_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item62Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_62_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item63Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_63_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item64Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_64_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item65Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_65_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item66Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_66_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg2Item67Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg2_item_67_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item68Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_68_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item69Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_69_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item70Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_70_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item71Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_71_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item72Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_72_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item73Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_73_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item74Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_74_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item75Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_75_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item76Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_76_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item77Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_77_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item86Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_86_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item87Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_87_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item88Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_88_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item89Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_89_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item90Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_90_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item91Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_91_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item92Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_92_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item93Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_93_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item68Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_68_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item69Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_69_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item70Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_70_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item71Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_71_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item72Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_72_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item73Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_73_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item74Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_74_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item75Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_75_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item76Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_76_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item77Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_77_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item78Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_78_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item79Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_79_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item80Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_80_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item81Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_81_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item82Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_82_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item83Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_83_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item84Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_84_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item85Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_85_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item86Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_86_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item87Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_87_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item88Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_88_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item89Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_89_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item90Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_90_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item91Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_91_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item92Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_92_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item93Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_93_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg3Item94Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg3_item_94_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched2Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_2_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item1Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_1_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched3Item2Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_3_item_2_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg5Sched4Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg5_sched_4_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem6Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem7Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem8Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem9Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem10Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem11Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_11_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem12Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_12_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem13Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_13_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem14Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_14_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem15Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_15_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem16Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_16_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem17Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_17_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem18Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_18_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem19Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_19_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem6Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem7Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem8Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem9Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem10Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem11Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_11_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem12Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_12_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem13Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_13_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem14Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_14_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem15Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_15_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem16Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_16_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem17Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_17_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem18Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_18_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4bItem19Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4b_item_19_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem20Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_20_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem21Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_21_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem22Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_22_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem23Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_23_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem24Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_24_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem25Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_25_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem26Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_26_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem27Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_27_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem20Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_20_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem21Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_21_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem22Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_22_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem23Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_23_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem24Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_24_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem25Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_25_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem26Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_26_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched4cItem27Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_4c_item_27_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item6Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item6Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item1NatureOfIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_1_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item2NatureOfIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_2_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item3NatureOfIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_3_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item4NatureOfIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_4_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched5Item5NatureOfIncome($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_5_item_5_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item1Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_1_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item2Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_2_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg6Sched6Item3Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg6_sched_6_item_3_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item6Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item7Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item8Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item9Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item10Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item11Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_11_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item12Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_12_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item13Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_13_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item14Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_14_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item15Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_15_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item16Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_16_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item17Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_17_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item18Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_18_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item19Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_19_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item20Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_20_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item21Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_21_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item22Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_22_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item23Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_23_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item24Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_24_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item25Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_25_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item26Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_26_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item27Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_27_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item28Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_28_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item29Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_29_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item30Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_30_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item31Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_31_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item32Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_32_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item33Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_33_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item34Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_34_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item35Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_35_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item36Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_36_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item37Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_37_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item38Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_38_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item39Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_39_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item40Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_40_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item6Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item7Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item8Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item9Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item10Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item11Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_11_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item12Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_12_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item13Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_13_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item14Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_14_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item15Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_15_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item16Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_16_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item17Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_17_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item18Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_18_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item19Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_19_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item20Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_20_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item21Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_21_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item22Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_22_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item23Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_23_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item24Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_24_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item25Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_25_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item26Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_26_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item27Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_27_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item28Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_28_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item29Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_29_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item30Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_30_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item31Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_31_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item32Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_32_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item33Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_33_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item34Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_34_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item35Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_35_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item36Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_36_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item37Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_37_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item38Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_38_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item39Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_39_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item40Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_40_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item36Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_36_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item37Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_37_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item38Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_38_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg7Sched6Item39Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg7_sched_6_item_39_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item1Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_1_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item2Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_2_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item3Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_3_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item4Description($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_4_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item1LegalBasis($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_1_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item2LegalBasis($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_2_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item3LegalBasis($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_3_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched7Item4LegalBasis($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_7_item_4_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched8aItem1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_8a_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched8aItem2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_8a_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched8aItem3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_8a_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched8aItem1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_8a_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched8aItem2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_8a_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg8Sched8aItem3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg8_sched_8a_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item6Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item7Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item8Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item9Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item10Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item6Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item7Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item8Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item9Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item10Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched9Item9Other($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_9_item_9_other = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item1Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item2Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item3Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item4Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item5Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item6Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item7Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item8Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item9Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item10Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item11Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_11_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item12Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_12_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item13Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_13_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item14Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_14_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item15Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_15_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item16Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_16_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item17Taxpayer($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_17_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item1Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item2Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item3Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item4Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item5Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item6Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item7Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item8Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item9Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item10Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item11Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_11_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item12Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_12_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item13Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_13_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item14Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_14_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item15Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_15_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item16Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_16_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPg9Sched10Item17Spouse($value){
		$sql = 'SELECT * FROM tbl_form_1701 WHERE pg9_sched_10_item_17_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaxablePeroidId($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE taxable_peroid_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1Month($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item1_month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem1Year($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item1_year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAmended($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE amended = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByShortPeriod($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE short_period = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlpha($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE alpha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaxpayerTin($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE taxpayer_tin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRdo($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE rdo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaxFiler($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE tax_filer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaxFilerName($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE tax_filer_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTradeName($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE trade_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRegAddress($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE reg_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateOfBirth($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE date_of_birth = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContactNum($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE contact_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCivilStatus($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE civil_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem15($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_15 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem16($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_16 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem17($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_17 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem18($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_18 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem19($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_19 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem20($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_20 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem21($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_21 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem22($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_22 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem23($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_23 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem24($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_24 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItem25($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE item_25 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item26($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_26 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item27($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_27 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item28($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_28 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item29($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_29 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item30($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_30 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item31($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_31 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg1Item32($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg1_item_32 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOverPaymentType($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE over_payment_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item41Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_41_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item42Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_42_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item43Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_43_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item44Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_44_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item45Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_45_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item46Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_46_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item47Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_47_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item48Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_48_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item49Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_49_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item50Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_50_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item51Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_51_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item52Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_52_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item53Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_53_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item54Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_54_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item55Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_55_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item56Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_56_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item57Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_57_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item58Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_58_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item59Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_59_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item60Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_60_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item61Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_61_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item62Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_62_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item63Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_63_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item64Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_64_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item65Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_65_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item66Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_66_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item67Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_67_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item41Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_41_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item42Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_42_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item43Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_43_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item44Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_44_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item45Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_45_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item46Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_46_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item47Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_47_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item48Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_48_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item49Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_49_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item50Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_50_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item51Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_51_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item52Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_52_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item53Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_53_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item54Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_54_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item55Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_55_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item56Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_56_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item57Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_57_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item58Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_58_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item59Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_59_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item60Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_60_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item61Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_61_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item62Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_62_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item63Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_63_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item64Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_64_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item65Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_65_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item66Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_66_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg2Item67Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg2_item_67_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item68Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_68_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item69Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_69_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item70Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_70_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item71Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_71_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item72Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_72_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item73Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_73_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item74Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_74_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item75Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_75_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item76Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_76_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item77Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_77_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item86Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_86_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item87Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_87_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item88Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_88_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item89Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_89_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item90Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_90_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item91Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_91_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item92Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_92_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item93Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_93_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item68Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_68_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item69Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_69_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item70Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_70_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item71Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_71_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item72Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_72_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item73Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_73_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item74Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_74_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item75Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_75_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item76Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_76_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item77Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_77_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item78Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_78_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item79Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_79_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item80Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_80_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item81Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_81_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item82Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_82_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item83Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_83_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item84Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_84_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item85Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_85_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item86Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_86_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item87Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_87_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item88Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_88_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item89Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_89_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item90Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_90_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item91Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_91_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item92Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_92_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item93Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_93_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg3Item94Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg3_item_94_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched2Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_2_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item1Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_1_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched3Item2Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_3_item_2_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg5Sched4Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg5_sched_4_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem6Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem7Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem8Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem9Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem10Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem11Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_11_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem12Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_12_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem13Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_13_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem14Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_14_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem15Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_15_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem16Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_16_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem17Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_17_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem18Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_18_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem19Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_19_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem6Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem7Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem8Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem9Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem10Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem11Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_11_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem12Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_12_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem13Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_13_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem14Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_14_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem15Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_15_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem16Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_16_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem17Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_17_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem18Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_18_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4bItem19Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4b_item_19_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem20Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_20_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem21Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_21_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem22Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_22_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem23Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_23_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem24Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_24_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem25Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_25_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem26Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_26_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem27Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_27_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem20Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_20_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem21Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_21_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem22Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_22_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem23Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_23_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem24Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_24_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem25Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_25_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem26Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_26_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched4cItem27Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_4c_item_27_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item6Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item6Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item1NatureOfIncome($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_1_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item2NatureOfIncome($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_2_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item3NatureOfIncome($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_3_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item4NatureOfIncome($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_4_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched5Item5NatureOfIncome($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_5_item_5_nature_of_income = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item1Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_1_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item2Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_2_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg6Sched6Item3Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg6_sched_6_item_3_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item6Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item7Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item8Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item9Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item10Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item11Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_11_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item12Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_12_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item13Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_13_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item14Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_14_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item15Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_15_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item16Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_16_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item17Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_17_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item18Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_18_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item19Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_19_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item20Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_20_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item21Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_21_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item22Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_22_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item23Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_23_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item24Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_24_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item25Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_25_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item26Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_26_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item27Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_27_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item28Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_28_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item29Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_29_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item30Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_30_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item31Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_31_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item32Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_32_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item33Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_33_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item34Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_34_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item35Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_35_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item36Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_36_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item37Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_37_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item38Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_38_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item39Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_39_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item40Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_40_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item6Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item7Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item8Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item9Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item10Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item11Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_11_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item12Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_12_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item13Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_13_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item14Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_14_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item15Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_15_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item16Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_16_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item17Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_17_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item18Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_18_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item19Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_19_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item20Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_20_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item21Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_21_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item22Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_22_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item23Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_23_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item24Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_24_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item25Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_25_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item26Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_26_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item27Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_27_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item28Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_28_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item29Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_29_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item30Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_30_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item31Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_31_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item32Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_32_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item33Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_33_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item34Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_34_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item35Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_35_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item36Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_36_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item37Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_37_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item38Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_38_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item39Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_39_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item40Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_40_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item36Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_36_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item37Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_37_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item38Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_38_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg7Sched6Item39Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg7_sched_6_item_39_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item1Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_1_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item2Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_2_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item3Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_3_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item4Description($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_4_description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item1LegalBasis($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_1_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item2LegalBasis($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_2_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item3LegalBasis($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_3_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched7Item4LegalBasis($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_7_item_4_legal_basis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched8aItem1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_8a_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched8aItem2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_8a_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched8aItem3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_8a_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched8aItem1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_8a_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched8aItem2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_8a_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg8Sched8aItem3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg8_sched_8a_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item6Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item7Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item8Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item9Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item10Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item6Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item7Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item8Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item9Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item10Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched9Item9Other($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_9_item_9_other = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item1Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_1_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item2Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_2_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item3Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_3_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item4Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_4_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item5Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_5_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item6Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_6_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item7Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_7_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item8Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_8_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item9Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_9_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item10Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_10_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item11Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_11_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item12Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_12_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item13Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_13_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item14Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_14_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item15Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_15_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item16Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_16_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item17Taxpayer($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_17_taxpayer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item1Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_1_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item2Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_2_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item3Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_3_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item4Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_4_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item5Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_5_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item6Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_6_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item7Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_7_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item8Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_8_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item9Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_9_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item10Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_10_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item11Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_11_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item12Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_12_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item13Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_13_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item14Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_14_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item15Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_15_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item16Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_16_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPg9Sched10Item17Spouse($value){
		$sql = 'DELETE FROM tbl_form_1701 WHERE pg9_sched_10_item_17_spouse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblForm1701MySql 
	 */
	protected function readRow($row){
		$tblForm1701 = new TblForm1701();
		
		$tblForm1701->id = $row['id'];
		$tblForm1701->taxablePeroidId = $row['taxable_peroid_id'];
		$tblForm1701->status = $row['status'];
		$tblForm1701->item1Month = $row['item1_month'];
		$tblForm1701->item1Year = $row['item1_year'];
		$tblForm1701->amended = $row['amended'];
		$tblForm1701->shortPeriod = $row['short_period'];
		$tblForm1701->alpha = $row['alpha'];
		$tblForm1701->taxpayerTin = $row['taxpayer_tin'];
		$tblForm1701->rdo = $row['rdo'];
		$tblForm1701->taxFiler = $row['tax_filer'];
		$tblForm1701->taxFilerName = $row['tax_filer_name'];
		$tblForm1701->tradeName = $row['trade_name'];
		$tblForm1701->regAddress = $row['reg_address'];
		$tblForm1701->dateOfBirth = $row['date_of_birth'];
		$tblForm1701->email = $row['email'];
		$tblForm1701->contactNum = $row['contact_num'];
		$tblForm1701->civilStatus = $row['civil_status'];
		$tblForm1701->item15 = $row['item_15'];
		$tblForm1701->item16 = $row['item_16'];
		$tblForm1701->item17 = $row['item_17'];
		$tblForm1701->item18 = $row['item_18'];
		$tblForm1701->item19 = $row['item_19'];
		$tblForm1701->item20 = $row['item_20'];
		$tblForm1701->item21 = $row['item_21'];
		$tblForm1701->item22 = $row['item_22'];
		$tblForm1701->item23 = $row['item_23'];
		$tblForm1701->item24 = $row['item_24'];
		$tblForm1701->item25 = $row['item_25'];
		$tblForm1701->pg1Item26 = $row['pg1_item_26'];
		$tblForm1701->pg1Item27 = $row['pg1_item_27'];
		$tblForm1701->pg1Item28 = $row['pg1_item_28'];
		$tblForm1701->pg1Item29 = $row['pg1_item_29'];
		$tblForm1701->pg1Item30 = $row['pg1_item_30'];
		$tblForm1701->pg1Item31 = $row['pg1_item_31'];
		$tblForm1701->pg1Item32 = $row['pg1_item_32'];
		$tblForm1701->overPaymentType = $row['over_payment_type'];
		$tblForm1701->pg2Item41Taxpayer = $row['pg2_item_41_taxpayer'];
		$tblForm1701->pg2Item42Taxpayer = $row['pg2_item_42_taxpayer'];
		$tblForm1701->pg2Item43Taxpayer = $row['pg2_item_43_taxpayer'];
		$tblForm1701->pg2Item44Taxpayer = $row['pg2_item_44_taxpayer'];
		$tblForm1701->pg2Item45Taxpayer = $row['pg2_item_45_taxpayer'];
		$tblForm1701->pg2Item46Taxpayer = $row['pg2_item_46_taxpayer'];
		$tblForm1701->pg2Item47Taxpayer = $row['pg2_item_47_taxpayer'];
		$tblForm1701->pg2Item48Taxpayer = $row['pg2_item_48_taxpayer'];
		$tblForm1701->pg2Item49Taxpayer = $row['pg2_item_49_taxpayer'];
		$tblForm1701->pg2Item50Taxpayer = $row['pg2_item_50_taxpayer'];
		$tblForm1701->pg2Item51Taxpayer = $row['pg2_item_51_taxpayer'];
		$tblForm1701->pg2Item52Taxpayer = $row['pg2_item_52_taxpayer'];
		$tblForm1701->pg2Item53Taxpayer = $row['pg2_item_53_taxpayer'];
		$tblForm1701->pg2Item54Taxpayer = $row['pg2_item_54_taxpayer'];
		$tblForm1701->pg2Item55Taxpayer = $row['pg2_item_55_taxpayer'];
		$tblForm1701->pg2Item56Taxpayer = $row['pg2_item_56_taxpayer'];
		$tblForm1701->pg2Item57Taxpayer = $row['pg2_item_57_taxpayer'];
		$tblForm1701->pg2Item58Taxpayer = $row['pg2_item_58_taxpayer'];
		$tblForm1701->pg2Item59Taxpayer = $row['pg2_item_59_taxpayer'];
		$tblForm1701->pg2Item60Taxpayer = $row['pg2_item_60_taxpayer'];
		$tblForm1701->pg2Item61Taxpayer = $row['pg2_item_61_taxpayer'];
		$tblForm1701->pg2Item62Taxpayer = $row['pg2_item_62_taxpayer'];
		$tblForm1701->pg2Item63Taxpayer = $row['pg2_item_63_taxpayer'];
		$tblForm1701->pg2Item64Taxpayer = $row['pg2_item_64_taxpayer'];
		$tblForm1701->pg2Item65Taxpayer = $row['pg2_item_65_taxpayer'];
		$tblForm1701->pg2Item66Taxpayer = $row['pg2_item_66_taxpayer'];
		$tblForm1701->pg2Item67Taxpayer = $row['pg2_item_67_taxpayer'];
		$tblForm1701->pg2Item41Spouse = $row['pg2_item_41_spouse'];
		$tblForm1701->pg2Item42Spouse = $row['pg2_item_42_spouse'];
		$tblForm1701->pg2Item43Spouse = $row['pg2_item_43_spouse'];
		$tblForm1701->pg2Item44Spouse = $row['pg2_item_44_spouse'];
		$tblForm1701->pg2Item45Spouse = $row['pg2_item_45_spouse'];
		$tblForm1701->pg2Item46Spouse = $row['pg2_item_46_spouse'];
		$tblForm1701->pg2Item47Spouse = $row['pg2_item_47_spouse'];
		$tblForm1701->pg2Item48Spouse = $row['pg2_item_48_spouse'];
		$tblForm1701->pg2Item49Spouse = $row['pg2_item_49_spouse'];
		$tblForm1701->pg2Item50Spouse = $row['pg2_item_50_spouse'];
		$tblForm1701->pg2Item51Spouse = $row['pg2_item_51_spouse'];
		$tblForm1701->pg2Item52Spouse = $row['pg2_item_52_spouse'];
		$tblForm1701->pg2Item53Spouse = $row['pg2_item_53_spouse'];
		$tblForm1701->pg2Item54Spouse = $row['pg2_item_54_spouse'];
		$tblForm1701->pg2Item55Spouse = $row['pg2_item_55_spouse'];
		$tblForm1701->pg2Item56Spouse = $row['pg2_item_56_spouse'];
		$tblForm1701->pg2Item57Spouse = $row['pg2_item_57_spouse'];
		$tblForm1701->pg2Item58Spouse = $row['pg2_item_58_spouse'];
		$tblForm1701->pg2Item59Spouse = $row['pg2_item_59_spouse'];
		$tblForm1701->pg2Item60Spouse = $row['pg2_item_60_spouse'];
		$tblForm1701->pg2Item61Spouse = $row['pg2_item_61_spouse'];
		$tblForm1701->pg2Item62Spouse = $row['pg2_item_62_spouse'];
		$tblForm1701->pg2Item63Spouse = $row['pg2_item_63_spouse'];
		$tblForm1701->pg2Item64Spouse = $row['pg2_item_64_spouse'];
		$tblForm1701->pg2Item65Spouse = $row['pg2_item_65_spouse'];
		$tblForm1701->pg2Item66Spouse = $row['pg2_item_66_spouse'];
		$tblForm1701->pg2Item67Spouse = $row['pg2_item_67_spouse'];
		$tblForm1701->pg3Item68Taxpayer = $row['pg3_item_68_taxpayer'];
		$tblForm1701->pg3Item69Taxpayer = $row['pg3_item_69_taxpayer'];
		$tblForm1701->pg3Item70Taxpayer = $row['pg3_item_70_taxpayer'];
		$tblForm1701->pg3Item71Taxpayer = $row['pg3_item_71_taxpayer'];
		$tblForm1701->pg3Item72Taxpayer = $row['pg3_item_72_taxpayer'];
		$tblForm1701->pg3Item73Taxpayer = $row['pg3_item_73_taxpayer'];
		$tblForm1701->pg3Item74Taxpayer = $row['pg3_item_74_taxpayer'];
		$tblForm1701->pg3Item75Taxpayer = $row['pg3_item_75_taxpayer'];
		$tblForm1701->pg3Item76Taxpayer = $row['pg3_item_76_taxpayer'];
		$tblForm1701->pg3Item77Taxpayer = $row['pg3_item_77_taxpayer'];
		$tblForm1701->pg3Item86Taxpayer = $row['pg3_item_86_taxpayer'];
		$tblForm1701->pg3Item87Taxpayer = $row['pg3_item_87_taxpayer'];
		$tblForm1701->pg3Item88Taxpayer = $row['pg3_item_88_taxpayer'];
		$tblForm1701->pg3Item89Taxpayer = $row['pg3_item_89_taxpayer'];
		$tblForm1701->pg3Item90Taxpayer = $row['pg3_item_90_taxpayer'];
		$tblForm1701->pg3Item91Taxpayer = $row['pg3_item_91_taxpayer'];
		$tblForm1701->pg3Item92Taxpayer = $row['pg3_item_92_taxpayer'];
		$tblForm1701->pg3Item93Taxpayer = $row['pg3_item_93_taxpayer'];
		$tblForm1701->pg3Item68Spouse = $row['pg3_item_68_spouse'];
		$tblForm1701->pg3Item69Spouse = $row['pg3_item_69_spouse'];
		$tblForm1701->pg3Item70Spouse = $row['pg3_item_70_spouse'];
		$tblForm1701->pg3Item71Spouse = $row['pg3_item_71_spouse'];
		$tblForm1701->pg3Item72Spouse = $row['pg3_item_72_spouse'];
		$tblForm1701->pg3Item73Spouse = $row['pg3_item_73_spouse'];
		$tblForm1701->pg3Item74Spouse = $row['pg3_item_74_spouse'];
		$tblForm1701->pg3Item75Spouse = $row['pg3_item_75_spouse'];
		$tblForm1701->pg3Item76Spouse = $row['pg3_item_76_spouse'];
		$tblForm1701->pg3Item77Spouse = $row['pg3_item_77_spouse'];
		$tblForm1701->pg3Item78Spouse = $row['pg3_item_78_spouse'];
		$tblForm1701->pg3Item79Spouse = $row['pg3_item_79_spouse'];
		$tblForm1701->pg3Item80Spouse = $row['pg3_item_80_spouse'];
		$tblForm1701->pg3Item81Spouse = $row['pg3_item_81_spouse'];
		$tblForm1701->pg3Item82Spouse = $row['pg3_item_82_spouse'];
		$tblForm1701->pg3Item83Spouse = $row['pg3_item_83_spouse'];
		$tblForm1701->pg3Item84Spouse = $row['pg3_item_84_spouse'];
		$tblForm1701->pg3Item85Spouse = $row['pg3_item_85_spouse'];
		$tblForm1701->pg3Item86Spouse = $row['pg3_item_86_spouse'];
		$tblForm1701->pg3Item87Spouse = $row['pg3_item_87_spouse'];
		$tblForm1701->pg3Item88Spouse = $row['pg3_item_88_spouse'];
		$tblForm1701->pg3Item89Spouse = $row['pg3_item_89_spouse'];
		$tblForm1701->pg3Item90Spouse = $row['pg3_item_90_spouse'];
		$tblForm1701->pg3Item91Spouse = $row['pg3_item_91_spouse'];
		$tblForm1701->pg3Item92Spouse = $row['pg3_item_92_spouse'];
		$tblForm1701->pg3Item93Spouse = $row['pg3_item_93_spouse'];
		$tblForm1701->pg3Item94Spouse = $row['pg3_item_94_spouse'];
		$tblForm1701->pg5Sched2Item1Taxpayer = $row['pg5_sched_2_item_1_taxpayer'];
		$tblForm1701->pg5Sched2Item2Taxpayer = $row['pg5_sched_2_item_2_taxpayer'];
		$tblForm1701->pg5Sched2Item3Taxpayer = $row['pg5_sched_2_item_3_taxpayer'];
		$tblForm1701->pg5Sched2Item4Taxpayer = $row['pg5_sched_2_item_4_taxpayer'];
		$tblForm1701->pg5Sched2Item5Taxpayer = $row['pg5_sched_2_item_5_taxpayer'];
		$tblForm1701->pg5Sched2Item1Spouse = $row['pg5_sched_2_item_1_spouse'];
		$tblForm1701->pg5Sched2Item2Spouse = $row['pg5_sched_2_item_2_spouse'];
		$tblForm1701->pg5Sched2Item3Spouse = $row['pg5_sched_2_item_3_spouse'];
		$tblForm1701->pg5Sched2Item4Spouse = $row['pg5_sched_2_item_4_spouse'];
		$tblForm1701->pg5Sched2Item5Spouse = $row['pg5_sched_2_item_5_spouse'];
		$tblForm1701->pg5Sched3Item1Taxpayer = $row['pg5_sched_3_item_1_taxpayer'];
		$tblForm1701->pg5Sched3Item2Taxpayer = $row['pg5_sched_3_item_2_taxpayer'];
		$tblForm1701->pg5Sched3Item3Taxpayer = $row['pg5_sched_3_item_3_taxpayer'];
		$tblForm1701->pg5Sched3Item1Spouse = $row['pg5_sched_3_item_1_spouse'];
		$tblForm1701->pg5Sched3Item2Spouse = $row['pg5_sched_3_item_2_spouse'];
		$tblForm1701->pg5Sched3Item3Spouse = $row['pg5_sched_3_item_3_spouse'];
		$tblForm1701->pg5Sched3Item1Description = $row['pg5_sched_3_item_1_description'];
		$tblForm1701->pg5Sched3Item2Description = $row['pg5_sched_3_item_2_description'];
		$tblForm1701->pg5Sched4Item1Taxpayer = $row['pg5_sched_4_item_1_taxpayer'];
		$tblForm1701->pg5Sched4Item2Taxpayer = $row['pg5_sched_4_item_2_taxpayer'];
		$tblForm1701->pg5Sched4Item3Taxpayer = $row['pg5_sched_4_item_3_taxpayer'];
		$tblForm1701->pg5Sched4Item4Taxpayer = $row['pg5_sched_4_item_4_taxpayer'];
		$tblForm1701->pg5Sched4Item5Taxpayer = $row['pg5_sched_4_item_5_taxpayer'];
		$tblForm1701->pg5Sched4Item1Spouse = $row['pg5_sched_4_item_1_spouse'];
		$tblForm1701->pg5Sched4Item2Spouse = $row['pg5_sched_4_item_2_spouse'];
		$tblForm1701->pg5Sched4Item3Spouse = $row['pg5_sched_4_item_3_spouse'];
		$tblForm1701->pg5Sched4Item4Spouse = $row['pg5_sched_4_item_4_spouse'];
		$tblForm1701->pg5Sched4Item5Spouse = $row['pg5_sched_4_item_5_spouse'];
		$tblForm1701->pg6Sched4bItem6Taxpayer = $row['pg6_sched_4b_item_6_taxpayer'];
		$tblForm1701->pg6Sched4bItem7Taxpayer = $row['pg6_sched_4b_item_7_taxpayer'];
		$tblForm1701->pg6Sched4bItem8Taxpayer = $row['pg6_sched_4b_item_8_taxpayer'];
		$tblForm1701->pg6Sched4bItem9Taxpayer = $row['pg6_sched_4b_item_9_taxpayer'];
		$tblForm1701->pg6Sched4bItem10Taxpayer = $row['pg6_sched_4b_item_10_taxpayer'];
		$tblForm1701->pg6Sched4bItem11Taxpayer = $row['pg6_sched_4b_item_11_taxpayer'];
		$tblForm1701->pg6Sched4bItem12Taxpayer = $row['pg6_sched_4b_item_12_taxpayer'];
		$tblForm1701->pg6Sched4bItem13Taxpayer = $row['pg6_sched_4b_item_13_taxpayer'];
		$tblForm1701->pg6Sched4bItem14Taxpayer = $row['pg6_sched_4b_item_14_taxpayer'];
		$tblForm1701->pg6Sched4bItem15Taxpayer = $row['pg6_sched_4b_item_15_taxpayer'];
		$tblForm1701->pg6Sched4bItem16Taxpayer = $row['pg6_sched_4b_item_16_taxpayer'];
		$tblForm1701->pg6Sched4bItem17Taxpayer = $row['pg6_sched_4b_item_17_taxpayer'];
		$tblForm1701->pg6Sched4bItem18Taxpayer = $row['pg6_sched_4b_item_18_taxpayer'];
		$tblForm1701->pg6Sched4bItem19Taxpayer = $row['pg6_sched_4b_item_19_taxpayer'];
		$tblForm1701->pg6Sched4bItem6Spouse = $row['pg6_sched_4b_item_6_spouse'];
		$tblForm1701->pg6Sched4bItem7Spouse = $row['pg6_sched_4b_item_7_spouse'];
		$tblForm1701->pg6Sched4bItem8Spouse = $row['pg6_sched_4b_item_8_spouse'];
		$tblForm1701->pg6Sched4bItem9Spouse = $row['pg6_sched_4b_item_9_spouse'];
		$tblForm1701->pg6Sched4bItem10Spouse = $row['pg6_sched_4b_item_10_spouse'];
		$tblForm1701->pg6Sched4bItem11Spouse = $row['pg6_sched_4b_item_11_spouse'];
		$tblForm1701->pg6Sched4bItem12Spouse = $row['pg6_sched_4b_item_12_spouse'];
		$tblForm1701->pg6Sched4bItem13Spouse = $row['pg6_sched_4b_item_13_spouse'];
		$tblForm1701->pg6Sched4bItem14Spouse = $row['pg6_sched_4b_item_14_spouse'];
		$tblForm1701->pg6Sched4bItem15Spouse = $row['pg6_sched_4b_item_15_spouse'];
		$tblForm1701->pg6Sched4bItem16Spouse = $row['pg6_sched_4b_item_16_spouse'];
		$tblForm1701->pg6Sched4bItem17Spouse = $row['pg6_sched_4b_item_17_spouse'];
		$tblForm1701->pg6Sched4bItem18Spouse = $row['pg6_sched_4b_item_18_spouse'];
		$tblForm1701->pg6Sched4bItem19Spouse = $row['pg6_sched_4b_item_19_spouse'];
		$tblForm1701->pg6Sched4cItem20Taxpayer = $row['pg6_sched_4c_item_20_taxpayer'];
		$tblForm1701->pg6Sched4cItem21Taxpayer = $row['pg6_sched_4c_item_21_taxpayer'];
		$tblForm1701->pg6Sched4cItem22Taxpayer = $row['pg6_sched_4c_item_22_taxpayer'];
		$tblForm1701->pg6Sched4cItem23Taxpayer = $row['pg6_sched_4c_item_23_taxpayer'];
		$tblForm1701->pg6Sched4cItem24Taxpayer = $row['pg6_sched_4c_item_24_taxpayer'];
		$tblForm1701->pg6Sched4cItem25Taxpayer = $row['pg6_sched_4c_item_25_taxpayer'];
		$tblForm1701->pg6Sched4cItem26Taxpayer = $row['pg6_sched_4c_item_26_taxpayer'];
		$tblForm1701->pg6Sched4cItem27Taxpayer = $row['pg6_sched_4c_item_27_taxpayer'];
		$tblForm1701->pg6Sched4cItem20Spouse = $row['pg6_sched_4c_item_20_spouse'];
		$tblForm1701->pg6Sched4cItem21Spouse = $row['pg6_sched_4c_item_21_spouse'];
		$tblForm1701->pg6Sched4cItem22Spouse = $row['pg6_sched_4c_item_22_spouse'];
		$tblForm1701->pg6Sched4cItem23Spouse = $row['pg6_sched_4c_item_23_spouse'];
		$tblForm1701->pg6Sched4cItem24Spouse = $row['pg6_sched_4c_item_24_spouse'];
		$tblForm1701->pg6Sched4cItem25Spouse = $row['pg6_sched_4c_item_25_spouse'];
		$tblForm1701->pg6Sched4cItem26Spouse = $row['pg6_sched_4c_item_26_spouse'];
		$tblForm1701->pg6Sched4cItem27Spouse = $row['pg6_sched_4c_item_27_spouse'];
		$tblForm1701->pg6Sched5Item1Taxpayer = $row['pg6_sched_5_item_1_taxpayer'];
		$tblForm1701->pg6Sched5Item2Taxpayer = $row['pg6_sched_5_item_2_taxpayer'];
		$tblForm1701->pg6Sched5Item3Taxpayer = $row['pg6_sched_5_item_3_taxpayer'];
		$tblForm1701->pg6Sched5Item4Taxpayer = $row['pg6_sched_5_item_4_taxpayer'];
		$tblForm1701->pg6Sched5Item5Taxpayer = $row['pg6_sched_5_item_5_taxpayer'];
		$tblForm1701->pg6Sched5Item6Taxpayer = $row['pg6_sched_5_item_6_taxpayer'];
		$tblForm1701->pg6Sched5Item1Spouse = $row['pg6_sched_5_item_1_spouse'];
		$tblForm1701->pg6Sched5Item2Spouse = $row['pg6_sched_5_item_2_spouse'];
		$tblForm1701->pg6Sched5Item3Spouse = $row['pg6_sched_5_item_3_spouse'];
		$tblForm1701->pg6Sched5Item4Spouse = $row['pg6_sched_5_item_4_spouse'];
		$tblForm1701->pg6Sched5Item5Spouse = $row['pg6_sched_5_item_5_spouse'];
		$tblForm1701->pg6Sched5Item6Spouse = $row['pg6_sched_5_item_6_spouse'];
		$tblForm1701->pg6Sched5Item1NatureOfIncome = $row['pg6_sched_5_item_1_nature_of_income'];
		$tblForm1701->pg6Sched5Item2NatureOfIncome = $row['pg6_sched_5_item_2_nature_of_income'];
		$tblForm1701->pg6Sched5Item3NatureOfIncome = $row['pg6_sched_5_item_3_nature_of_income'];
		$tblForm1701->pg6Sched5Item4NatureOfIncome = $row['pg6_sched_5_item_4_nature_of_income'];
		$tblForm1701->pg6Sched5Item5NatureOfIncome = $row['pg6_sched_5_item_5_nature_of_income'];
		$tblForm1701->pg6Sched6Item1Taxpayer = $row['pg6_sched_6_item_1_taxpayer'];
		$tblForm1701->pg6Sched6Item2Taxpayer = $row['pg6_sched_6_item_2_taxpayer'];
		$tblForm1701->pg6Sched6Item3Taxpayer = $row['pg6_sched_6_item_3_taxpayer'];
		$tblForm1701->pg6Sched6Item4Taxpayer = $row['pg6_sched_6_item_4_taxpayer'];
		$tblForm1701->pg6Sched6Item1Spouse = $row['pg6_sched_6_item_1_spouse'];
		$tblForm1701->pg6Sched6Item2Spouse = $row['pg6_sched_6_item_2_spouse'];
		$tblForm1701->pg6Sched6Item3Spouse = $row['pg6_sched_6_item_3_spouse'];
		$tblForm1701->pg6Sched6Item4Spouse = $row['pg6_sched_6_item_4_spouse'];
		$tblForm1701->pg6Sched6Item1Description = $row['pg6_sched_6_item_1_description'];
		$tblForm1701->pg6Sched6Item2Description = $row['pg6_sched_6_item_2_description'];
		$tblForm1701->pg6Sched6Item3Description = $row['pg6_sched_6_item_3_description'];
		$tblForm1701->pg7Sched6Item5Taxpayer = $row['pg7_sched_6_item_5_taxpayer'];
		$tblForm1701->pg7Sched6Item6Taxpayer = $row['pg7_sched_6_item_6_taxpayer'];
		$tblForm1701->pg7Sched6Item7Taxpayer = $row['pg7_sched_6_item_7_taxpayer'];
		$tblForm1701->pg7Sched6Item8Taxpayer = $row['pg7_sched_6_item_8_taxpayer'];
		$tblForm1701->pg7Sched6Item9Taxpayer = $row['pg7_sched_6_item_9_taxpayer'];
		$tblForm1701->pg7Sched6Item10Taxpayer = $row['pg7_sched_6_item_10_taxpayer'];
		$tblForm1701->pg7Sched6Item11Taxpayer = $row['pg7_sched_6_item_11_taxpayer'];
		$tblForm1701->pg7Sched6Item12Taxpayer = $row['pg7_sched_6_item_12_taxpayer'];
		$tblForm1701->pg7Sched6Item13Taxpayer = $row['pg7_sched_6_item_13_taxpayer'];
		$tblForm1701->pg7Sched6Item14Taxpayer = $row['pg7_sched_6_item_14_taxpayer'];
		$tblForm1701->pg7Sched6Item15Taxpayer = $row['pg7_sched_6_item_15_taxpayer'];
		$tblForm1701->pg7Sched6Item16Taxpayer = $row['pg7_sched_6_item_16_taxpayer'];
		$tblForm1701->pg7Sched6Item17Taxpayer = $row['pg7_sched_6_item_17_taxpayer'];
		$tblForm1701->pg7Sched6Item18Taxpayer = $row['pg7_sched_6_item_18_taxpayer'];
		$tblForm1701->pg7Sched6Item19Taxpayer = $row['pg7_sched_6_item_19_taxpayer'];
		$tblForm1701->pg7Sched6Item20Taxpayer = $row['pg7_sched_6_item_20_taxpayer'];
		$tblForm1701->pg7Sched6Item21Taxpayer = $row['pg7_sched_6_item_21_taxpayer'];
		$tblForm1701->pg7Sched6Item22Taxpayer = $row['pg7_sched_6_item_22_taxpayer'];
		$tblForm1701->pg7Sched6Item23Taxpayer = $row['pg7_sched_6_item_23_taxpayer'];
		$tblForm1701->pg7Sched6Item24Taxpayer = $row['pg7_sched_6_item_24_taxpayer'];
		$tblForm1701->pg7Sched6Item25Taxpayer = $row['pg7_sched_6_item_25_taxpayer'];
		$tblForm1701->pg7Sched6Item26Taxpayer = $row['pg7_sched_6_item_26_taxpayer'];
		$tblForm1701->pg7Sched6Item27Taxpayer = $row['pg7_sched_6_item_27_taxpayer'];
		$tblForm1701->pg7Sched6Item28Taxpayer = $row['pg7_sched_6_item_28_taxpayer'];
		$tblForm1701->pg7Sched6Item29Taxpayer = $row['pg7_sched_6_item_29_taxpayer'];
		$tblForm1701->pg7Sched6Item30Taxpayer = $row['pg7_sched_6_item_30_taxpayer'];
		$tblForm1701->pg7Sched6Item31Taxpayer = $row['pg7_sched_6_item_31_taxpayer'];
		$tblForm1701->pg7Sched6Item32Taxpayer = $row['pg7_sched_6_item_32_taxpayer'];
		$tblForm1701->pg7Sched6Item33Taxpayer = $row['pg7_sched_6_item_33_taxpayer'];
		$tblForm1701->pg7Sched6Item34Taxpayer = $row['pg7_sched_6_item_34_taxpayer'];
		$tblForm1701->pg7Sched6Item35Taxpayer = $row['pg7_sched_6_item_35_taxpayer'];
		$tblForm1701->pg7Sched6Item36Taxpayer = $row['pg7_sched_6_item_36_taxpayer'];
		$tblForm1701->pg7Sched6Item37Taxpayer = $row['pg7_sched_6_item_37_taxpayer'];
		$tblForm1701->pg7Sched6Item38Taxpayer = $row['pg7_sched_6_item_38_taxpayer'];
		$tblForm1701->pg7Sched6Item39Taxpayer = $row['pg7_sched_6_item_39_taxpayer'];
		$tblForm1701->pg7Sched6Item40Taxpayer = $row['pg7_sched_6_item_40_taxpayer'];
		$tblForm1701->pg7Sched6Item5Spouse = $row['pg7_sched_6_item_5_spouse'];
		$tblForm1701->pg7Sched6Item6Spouse = $row['pg7_sched_6_item_6_spouse'];
		$tblForm1701->pg7Sched6Item7Spouse = $row['pg7_sched_6_item_7_spouse'];
		$tblForm1701->pg7Sched6Item8Spouse = $row['pg7_sched_6_item_8_spouse'];
		$tblForm1701->pg7Sched6Item9Spouse = $row['pg7_sched_6_item_9_spouse'];
		$tblForm1701->pg7Sched6Item10Spouse = $row['pg7_sched_6_item_10_spouse'];
		$tblForm1701->pg7Sched6Item11Spouse = $row['pg7_sched_6_item_11_spouse'];
		$tblForm1701->pg7Sched6Item12Spouse = $row['pg7_sched_6_item_12_spouse'];
		$tblForm1701->pg7Sched6Item13Spouse = $row['pg7_sched_6_item_13_spouse'];
		$tblForm1701->pg7Sched6Item14Spouse = $row['pg7_sched_6_item_14_spouse'];
		$tblForm1701->pg7Sched6Item15Spouse = $row['pg7_sched_6_item_15_spouse'];
		$tblForm1701->pg7Sched6Item16Spouse = $row['pg7_sched_6_item_16_spouse'];
		$tblForm1701->pg7Sched6Item17Spouse = $row['pg7_sched_6_item_17_spouse'];
		$tblForm1701->pg7Sched6Item18Spouse = $row['pg7_sched_6_item_18_spouse'];
		$tblForm1701->pg7Sched6Item19Spouse = $row['pg7_sched_6_item_19_spouse'];
		$tblForm1701->pg7Sched6Item20Spouse = $row['pg7_sched_6_item_20_spouse'];
		$tblForm1701->pg7Sched6Item21Spouse = $row['pg7_sched_6_item_21_spouse'];
		$tblForm1701->pg7Sched6Item22Spouse = $row['pg7_sched_6_item_22_spouse'];
		$tblForm1701->pg7Sched6Item23Spouse = $row['pg7_sched_6_item_23_spouse'];
		$tblForm1701->pg7Sched6Item24Spouse = $row['pg7_sched_6_item_24_spouse'];
		$tblForm1701->pg7Sched6Item25Spouse = $row['pg7_sched_6_item_25_spouse'];
		$tblForm1701->pg7Sched6Item26Spouse = $row['pg7_sched_6_item_26_spouse'];
		$tblForm1701->pg7Sched6Item27Spouse = $row['pg7_sched_6_item_27_spouse'];
		$tblForm1701->pg7Sched6Item28Spouse = $row['pg7_sched_6_item_28_spouse'];
		$tblForm1701->pg7Sched6Item29Spouse = $row['pg7_sched_6_item_29_spouse'];
		$tblForm1701->pg7Sched6Item30Spouse = $row['pg7_sched_6_item_30_spouse'];
		$tblForm1701->pg7Sched6Item31Spouse = $row['pg7_sched_6_item_31_spouse'];
		$tblForm1701->pg7Sched6Item32Spouse = $row['pg7_sched_6_item_32_spouse'];
		$tblForm1701->pg7Sched6Item33Spouse = $row['pg7_sched_6_item_33_spouse'];
		$tblForm1701->pg7Sched6Item34Spouse = $row['pg7_sched_6_item_34_spouse'];
		$tblForm1701->pg7Sched6Item35Spouse = $row['pg7_sched_6_item_35_spouse'];
		$tblForm1701->pg7Sched6Item36Spouse = $row['pg7_sched_6_item_36_spouse'];
		$tblForm1701->pg7Sched6Item37Spouse = $row['pg7_sched_6_item_37_spouse'];
		$tblForm1701->pg7Sched6Item38Spouse = $row['pg7_sched_6_item_38_spouse'];
		$tblForm1701->pg7Sched6Item39Spouse = $row['pg7_sched_6_item_39_spouse'];
		$tblForm1701->pg7Sched6Item40Spouse = $row['pg7_sched_6_item_40_spouse'];
		$tblForm1701->pg7Sched6Item36Description = $row['pg7_sched_6_item_36_description'];
		$tblForm1701->pg7Sched6Item37Description = $row['pg7_sched_6_item_37_description'];
		$tblForm1701->pg7Sched6Item38Description = $row['pg7_sched_6_item_38_description'];
		$tblForm1701->pg7Sched6Item39Description = $row['pg7_sched_6_item_39_description'];
		$tblForm1701->pg8Sched7Item1Taxpayer = $row['pg8_sched_7_item_1_taxpayer'];
		$tblForm1701->pg8Sched7Item2Taxpayer = $row['pg8_sched_7_item_2_taxpayer'];
		$tblForm1701->pg8Sched7Item3Taxpayer = $row['pg8_sched_7_item_3_taxpayer'];
		$tblForm1701->pg8Sched7Item4Taxpayer = $row['pg8_sched_7_item_4_taxpayer'];
		$tblForm1701->pg8Sched7Item5Taxpayer = $row['pg8_sched_7_item_5_taxpayer'];
		$tblForm1701->pg8Sched7Item1Spouse = $row['pg8_sched_7_item_1_spouse'];
		$tblForm1701->pg8Sched7Item2Spouse = $row['pg8_sched_7_item_2_spouse'];
		$tblForm1701->pg8Sched7Item3Spouse = $row['pg8_sched_7_item_3_spouse'];
		$tblForm1701->pg8Sched7Item4Spouse = $row['pg8_sched_7_item_4_spouse'];
		$tblForm1701->pg8Sched7Item5Spouse = $row['pg8_sched_7_item_5_spouse'];
		$tblForm1701->pg8Sched7Item1Description = $row['pg8_sched_7_item_1_description'];
		$tblForm1701->pg8Sched7Item2Description = $row['pg8_sched_7_item_2_description'];
		$tblForm1701->pg8Sched7Item3Description = $row['pg8_sched_7_item_3_description'];
		$tblForm1701->pg8Sched7Item4Description = $row['pg8_sched_7_item_4_description'];
		$tblForm1701->pg8Sched7Item1LegalBasis = $row['pg8_sched_7_item_1_legal_basis'];
		$tblForm1701->pg8Sched7Item2LegalBasis = $row['pg8_sched_7_item_2_legal_basis'];
		$tblForm1701->pg8Sched7Item3LegalBasis = $row['pg8_sched_7_item_3_legal_basis'];
		$tblForm1701->pg8Sched7Item4LegalBasis = $row['pg8_sched_7_item_4_legal_basis'];
		$tblForm1701->pg8Sched8aItem1Taxpayer = $row['pg8_sched_8a_item_1_taxpayer'];
		$tblForm1701->pg8Sched8aItem2Taxpayer = $row['pg8_sched_8a_item_2_taxpayer'];
		$tblForm1701->pg8Sched8aItem3Taxpayer = $row['pg8_sched_8a_item_3_taxpayer'];
		$tblForm1701->pg8Sched8aItem1Spouse = $row['pg8_sched_8a_item_1_spouse'];
		$tblForm1701->pg8Sched8aItem2Spouse = $row['pg8_sched_8a_item_2_spouse'];
		$tblForm1701->pg8Sched8aItem3Spouse = $row['pg8_sched_8a_item_3_spouse'];
		$tblForm1701->pg9Sched9Item1Taxpayer = $row['pg9_sched_9_item_1_taxpayer'];
		$tblForm1701->pg9Sched9Item2Taxpayer = $row['pg9_sched_9_item_2_taxpayer'];
		$tblForm1701->pg9Sched9Item3Taxpayer = $row['pg9_sched_9_item_3_taxpayer'];
		$tblForm1701->pg9Sched9Item4Taxpayer = $row['pg9_sched_9_item_4_taxpayer'];
		$tblForm1701->pg9Sched9Item5Taxpayer = $row['pg9_sched_9_item_5_taxpayer'];
		$tblForm1701->pg9Sched9Item6Taxpayer = $row['pg9_sched_9_item_6_taxpayer'];
		$tblForm1701->pg9Sched9Item7Taxpayer = $row['pg9_sched_9_item_7_taxpayer'];
		$tblForm1701->pg9Sched9Item8Taxpayer = $row['pg9_sched_9_item_8_taxpayer'];
		$tblForm1701->pg9Sched9Item9Taxpayer = $row['pg9_sched_9_item_9_taxpayer'];
		$tblForm1701->pg9Sched9Item10Taxpayer = $row['pg9_sched_9_item_10_taxpayer'];
		$tblForm1701->pg9Sched9Item1Spouse = $row['pg9_sched_9_item_1_spouse'];
		$tblForm1701->pg9Sched9Item2Spouse = $row['pg9_sched_9_item_2_spouse'];
		$tblForm1701->pg9Sched9Item3Spouse = $row['pg9_sched_9_item_3_spouse'];
		$tblForm1701->pg9Sched9Item4Spouse = $row['pg9_sched_9_item_4_spouse'];
		$tblForm1701->pg9Sched9Item5Spouse = $row['pg9_sched_9_item_5_spouse'];
		$tblForm1701->pg9Sched9Item6Spouse = $row['pg9_sched_9_item_6_spouse'];
		$tblForm1701->pg9Sched9Item7Spouse = $row['pg9_sched_9_item_7_spouse'];
		$tblForm1701->pg9Sched9Item8Spouse = $row['pg9_sched_9_item_8_spouse'];
		$tblForm1701->pg9Sched9Item9Spouse = $row['pg9_sched_9_item_9_spouse'];
		$tblForm1701->pg9Sched9Item10Spouse = $row['pg9_sched_9_item_10_spouse'];
		$tblForm1701->pg9Sched9Item9Other = $row['pg9_sched_9_item_9_other'];
		$tblForm1701->pg9Sched10Item1Taxpayer = $row['pg9_sched_10_item_1_taxpayer'];
		$tblForm1701->pg9Sched10Item2Taxpayer = $row['pg9_sched_10_item_2_taxpayer'];
		$tblForm1701->pg9Sched10Item3Taxpayer = $row['pg9_sched_10_item_3_taxpayer'];
		$tblForm1701->pg9Sched10Item4Taxpayer = $row['pg9_sched_10_item_4_taxpayer'];
		$tblForm1701->pg9Sched10Item5Taxpayer = $row['pg9_sched_10_item_5_taxpayer'];
		$tblForm1701->pg9Sched10Item6Taxpayer = $row['pg9_sched_10_item_6_taxpayer'];
		$tblForm1701->pg9Sched10Item7Taxpayer = $row['pg9_sched_10_item_7_taxpayer'];
		$tblForm1701->pg9Sched10Item8Taxpayer = $row['pg9_sched_10_item_8_taxpayer'];
		$tblForm1701->pg9Sched10Item9Taxpayer = $row['pg9_sched_10_item_9_taxpayer'];
		$tblForm1701->pg9Sched10Item10Taxpayer = $row['pg9_sched_10_item_10_taxpayer'];
		$tblForm1701->pg9Sched10Item11Taxpayer = $row['pg9_sched_10_item_11_taxpayer'];
		$tblForm1701->pg9Sched10Item12Taxpayer = $row['pg9_sched_10_item_12_taxpayer'];
		$tblForm1701->pg9Sched10Item13Taxpayer = $row['pg9_sched_10_item_13_taxpayer'];
		$tblForm1701->pg9Sched10Item14Taxpayer = $row['pg9_sched_10_item_14_taxpayer'];
		$tblForm1701->pg9Sched10Item15Taxpayer = $row['pg9_sched_10_item_15_taxpayer'];
		$tblForm1701->pg9Sched10Item16Taxpayer = $row['pg9_sched_10_item_16_taxpayer'];
		$tblForm1701->pg9Sched10Item17Taxpayer = $row['pg9_sched_10_item_17_taxpayer'];
		$tblForm1701->pg9Sched10Item1Spouse = $row['pg9_sched_10_item_1_spouse'];
		$tblForm1701->pg9Sched10Item2Spouse = $row['pg9_sched_10_item_2_spouse'];
		$tblForm1701->pg9Sched10Item3Spouse = $row['pg9_sched_10_item_3_spouse'];
		$tblForm1701->pg9Sched10Item4Spouse = $row['pg9_sched_10_item_4_spouse'];
		$tblForm1701->pg9Sched10Item5Spouse = $row['pg9_sched_10_item_5_spouse'];
		$tblForm1701->pg9Sched10Item6Spouse = $row['pg9_sched_10_item_6_spouse'];
		$tblForm1701->pg9Sched10Item7Spouse = $row['pg9_sched_10_item_7_spouse'];
		$tblForm1701->pg9Sched10Item8Spouse = $row['pg9_sched_10_item_8_spouse'];
		$tblForm1701->pg9Sched10Item9Spouse = $row['pg9_sched_10_item_9_spouse'];
		$tblForm1701->pg9Sched10Item10Spouse = $row['pg9_sched_10_item_10_spouse'];
		$tblForm1701->pg9Sched10Item11Spouse = $row['pg9_sched_10_item_11_spouse'];
		$tblForm1701->pg9Sched10Item12Spouse = $row['pg9_sched_10_item_12_spouse'];
		$tblForm1701->pg9Sched10Item13Spouse = $row['pg9_sched_10_item_13_spouse'];
		$tblForm1701->pg9Sched10Item14Spouse = $row['pg9_sched_10_item_14_spouse'];
		$tblForm1701->pg9Sched10Item15Spouse = $row['pg9_sched_10_item_15_spouse'];
		$tblForm1701->pg9Sched10Item16Spouse = $row['pg9_sched_10_item_16_spouse'];
		$tblForm1701->pg9Sched10Item17Spouse = $row['pg9_sched_10_item_17_spouse'];

		return $tblForm1701;
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
	 * @return TblForm1701MySql 
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