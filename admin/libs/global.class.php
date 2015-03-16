<?php
/*

	

*/
class GlobalVar{
	
	var $global_exposureFromCompensation_rate = 0.32; //must be float
	var $global_exposureFromOutputVat_rate = 0.12; //must be float
	var $global_exposureFromInputVat_rate = 0.12; //must be float
	
	var $global_exposureFromAlienFB_rate = 0.15; //must be float
	var $global_exposureFromNonResidentFB_rate = 0.25; //must be float
	var $global_exposureFromFBOther_rate = 0.32; //must be float
	
	
	var $global_thresholdCharCon = 4; //Non-deductible Charitable Contribution
	var $global_thresholdIntEx = 14; //Non-deductible Interest Expense
	var $global_thresholdRepEx = 25; //Non-deductible Representation Expense
}
	