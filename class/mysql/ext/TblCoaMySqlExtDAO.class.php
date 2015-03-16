<?php

/**
 * Class that operate on table 'tbl_coa'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblCoaMySqlExtDAO extends TblCoaMySqlDAO {

    static function getcoaData($type) {
        $txt = '
		SELECT * 
			FROM tbl_coa WHERE org_id = ? ';

        if ($type !='') {
            $txt .= "&& sub_account='' && account_type = '" . $type . "' ";
        }
       
        $txt .= 'ORDER BY account_num ASC';
        

        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));

        return self::getTblCoa($sqlQuery);
    }
	
	static function getUserCoaExpense($id,$array){
		array_walk($array, function(&$value, $key) { $value = '"'.$value.'"'; });
		$txt = '
				SELECT * FROM tbl_coa WHERE org_id='.$id.' 
					AND account_num IN ('.implode(",",$array).')
			';
			
			$sqlQuery = new SqlQuery($txt);
			 return self::getTblCoa($sqlQuery);
	}
	
    static function hideCoaData($type) {
        $txt = '
		SELECT * 
			FROM tbl_coa WHERE org_id = ? AND
			account_num NOT IN ("1000","1001","1002","1003","1004","1005","1006","1007","2000","2001","2002","2003","3003","4000","4001","4000-001","4000-002","6000","6000-003","6000-006","6000-007","6000-008","6000-009",
			"6000-010","6000-011","6000-013","6000-014","6000-015","6000-016","6000-017","6000-018","6000-019","6001","6001-001","6001-005","6001-006","6001-009","6001-011","6001-014","6001-016","6001-017","6001-018","6001-019",
			"6001-020","6001-022","6001-023","6001-024","6001-025","6001-026","6001-029","6001-032","6001-033","6001-034","6001-035","6002")
			';

        if ($type !='') {
            $txt .= "&& sub_account='' && account_type = '" . $type . "' ";
        }
       
        $txt .= 'ORDER BY account_num ASC';
        

        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));

        return self::getTblCoa($sqlQuery);
    }
	
	

    protected static function getTblCoa($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $coas = array();
        foreach ($tab as $each) {
            $coa = new TblCoa();

            $coa->id = $each['id'];
            $coa->accountNum = $each['account_num'];
            $coa->accountType = $each['account_type'];
            $coa->accontName = $each['accont_name'];
            $coa->openingBal = $each['opening_bal'];
            $coas[] = $coa;
        }

        return $coas;
    }

    static function checkChart() {
        $txt = 'SELECT * FROM tbl_coa WHERE account_num="' . $_POST['accountnum'] . '" &&' .
                ' org_id = ' . Session::getSession('medorgid') . ' && id <>' . Session::getSession('coaid');

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
        if($result){
            return true;
        }
    }
    
    static function getCoaId($coaid,$orgid){
        $txt = 'SELECT id FROM tbl_coa WHERE account_num ='.
               '(SELECT account_num FROM admin_coa WHERE id ='.$coaid.') '.
               '&& org_id = '. $orgid;   
        
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
        return $result[0]['id'];
    }

}

?>