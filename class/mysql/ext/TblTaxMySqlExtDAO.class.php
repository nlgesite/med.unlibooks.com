<?php

/**
 * Class that operate on table 'tbl_tax'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblTaxMySqlExtDAO extends TblTaxMySqlDAO {

    static function checkTax() {
        $total = 0;

        if (isset($_POST['taxids'])) {
//            $txt = "SELECT * from tbl_tax WHERE id IN(" . implode(',', $_POST['taxids']) . ")";
            $txt = 'SELECT tax_id as total FROM tbl_client WHERE tax_id IN (' .  implode(',', $_POST['taxids']) .')';
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            if (count($result) > 0) {
                return true;
            } else {
                return false;
            }
        } elseif (isset($_POST['text'])) {
            $txt = "SELECT * from tbl_tax WHERE tax_code = '" . $_POST['text'] . "' && org_id = " . Session::getSession('medorgid');
                    
            if(Session::getSession('taxid') !=''){
             $txt .=   " && id <> " . Session::getSession('taxid');
            }
            
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            $total += count($result);

            if (Session::getSession('taxid') != '') {
                $txt = 'SELECT count(tax_id) as total FROM tbl_client WHERE tax_id = ' . Session::getSession('taxid');

                $sqlQuery = new SqlQuery($txt);
                $result = QueryExecutor::execute($sqlQuery);

                $total += $result[0]['total'];
            }
            
            return $total;
        }
    }

}

?>