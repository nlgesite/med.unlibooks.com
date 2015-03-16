<?php
/**
 * Class that operate on table 'admin_coa'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-10-27 02:57
 */
class AdminCoaMySqlExtDAO extends AdminCoaMySqlDAO{
    static function getCoa($coatype){
        $txt = "SELECT * FROM admin_coa WHERE account_type ='" .$coatype."' && sub_account =''";
       
        $sqlQuery = new SqlQuery($txt);

        return self::getData($sqlQuery);
    }
    
    protected static function getData($sqlQuery){
        $tab = QueryExecutor::execute($sqlQuery);
        if (!isset($tab))
            return false;

        $returns = array();
        
        foreach ($tab as $each){
            $coa = new AdminCoa();
            
            $coa->id = $each['id'];
            $coa->accountName = $each['account_name'];
            $coa->accountNum = $each['account_num'];
            $coa->accountType = $each['account_type'];
            $coa->description = $each['description'];
            $coa->incomeBalanceSheet = $each['income_balance_sheet'];
            $coa->subAccount = $each['sub_account'];
            
            $returns[] = $coa;
        }
        
        return $returns;
    }
	/* static function hideAccounts(){
		$txt = ' 
			SELECT
				*
			FROM
				admin_coa

			WHERE 
				account_num NOT IN ('1000','1001','1001-001','1002-001','1002-002','1003','3003','4000','4001','6000','6000-002','6000-003',
				'6000-004','6000-005','6000-006','6000-007','6000-008','6000-009','6000-010','6000-011','6000-013','6000-014','6000-015','6000-016',
				'6000-017','6000-018','6000-019','6001','6001-001','6000-002')
		';
		
		$sqlQuery = new SqlQuery($txt);

        return self::getAdminCoa($sqlQuery);	
	} */
}
?>