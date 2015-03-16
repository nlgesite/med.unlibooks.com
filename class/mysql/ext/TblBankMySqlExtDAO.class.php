<?php

/**
 * Class that operate on table 'tbl_bank'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblBankMySqlExtDAO extends TblBankMySqlDAO {

    static function getData($limit){
        $txt = "SELECT * FROM tbl_bank WHERE org_id = ". Session::getSession('medorgid');
        
        if ($limit != 'All') {
            $txt .= " limit " . $limit;
        }
        $sqlQuery = new SqlQuery($txt);
        return self::getBankData($sqlQuery);
    }
    
    function getBankData($sqlQuery){
        $tab = QueryExecutor::execute($sqlQuery);
         
         if (!isset($tab))
            return false;

        $returns = array();
        
        foreach ($tab as $each){
            $bank = new TblBank();
            
            $bank->id = $each['id'];
            $bank->bankCode = $each['bank_code'];
            $bank->bankAccountNumber = $each['bank_account_number'];
            $bank->active = $each['active'];
            
            $returns[] = $bank;
        }
        
        return $returns;
    }

    static function checkBank() {
        $total = 0;

        if (isset($_POST['bankids'])) {
//            $txt = "SELECT * from tbl_bank WHERE id IN(" . implode(',', $_POST['bankids']) . ")";
            $txt = 'SELECT bank_id as total FROM tbl_client WHERE bank_id IN ' . implode(',', $_POST['bankids']) .')';
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            if (count($result) > 0) {
                return true;
            } else {
                return false;
            }
        } elseif (isset($_POST['text'])) {
            $txt = "SELECT * from tbl_bank WHERE bank_code = '" . $_POST['text'] . "' && org_id = " . Session::getSession('medorgid');
            
            if (Session::getSession('bankid') != '') {
                $txt .= " && id <> " . Session::getSession('bankid');
            }
            
            if (Session::getSession('bankid') != '') {
                $txt = 'SELECT count(bank_id) as total FROM tbl_client WHERE bank_id = ' . Session::getSession('bankid');

                $sqlQuery = new SqlQuery($txt);
                $result = QueryExecutor::execute($sqlQuery);

                $total += $result[0]['total'];
            }else{
                $sqlQuery = new SqlQuery($txt);
                $result = QueryExecutor::execute($sqlQuery);
                $total += count($result);
            }

            return $total;
        }
    }

}

?>