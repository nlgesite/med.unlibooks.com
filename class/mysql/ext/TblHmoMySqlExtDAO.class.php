<?php

/**
 * Class that operate on table 'tbl_hmo'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-11-15 09:23
 */
class TblHmoMySqlExtDAO extends TblHmoMySqlDAO {

    static function getData($limit, $limitstart = 0) {
        $txt = 'SELECT hmo.*,';
        $txt .= '(SELECT sum(ia.grand_total) FROM tbl_invoice_amount ia
                INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id
                INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id 
                 WHERE ni.hmo_id = hmo.id && ia.id NOT IN
                 (SELECT ac.invoiced_amount_id FROM tbl_all_collection ac
                  INNER JOIN tbl_invoice_amount ia ON ia.id = ac.invoiced_amount_id
                  INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id
                  INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id 
                  WHERE ni.hmo_id = hmo.id
                 )
                ) as balance';
        $txt .=' FROM tbl_hmo hmo WHERE hmo.org_id = ? ';


        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= " && hmo_account like '%" . $_POST['search'] . "%'";
                    break;
                case 2:
                    $txt .= " && hmo_name like '%" . $_POST['search'] . "%'";
                    break;
                default:
                    break;
            }
            // $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
            $txt .= ' ORDER BY id desc';
        } else {
            $txt .= ' ORDER BY id desc';
        }

        if (is_numeric($limitstart) && $limit > 0) {
            $txt .= ' limit ' . $limitstart;
        }

        if ($limitstart == '' && $limit == 0 && $_GET['ipp'] != 'All') {
            $txt .= ' limit 0, 25';
        } elseif ($limit != "All" && is_numeric($limit)) {
            $txt .= ',' . $limit;
        }

        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));

        return self::getTblHmo($sqlQuery);
    }

    static function hmoTransaction() {
//        $txt = "SELECT hmo.* FROM tbl_hmo hmo WHERE hmo.id IN".
//               "(SELECT ni.hmo_id FROM tbl_new_invoice ni "
//                . "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id= ni.id "
//                . "INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id = ai.id "
//                . "LEFT JOIN tbl_all_collection ac ON ac.invoiced_amount_id = ia.id "
//                . "LEFT JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id "
//                . "WHERE ep.status <> 'posted' || ia.grand_total >".
//                "(SELECT SUM(applied_amount + wht_amount)FROM tbl_all_collection WHERE invoiced_amount_id = ia.id) || " .
//                "ac.applied_amount IS NULL && ni.status='posted')"
//                . " && hmo.org_id = ?";

        $txt = "SELECT hmo.* FROM tbl_hmo hmo WHERE hmo.id IN
                (SELECT ni.hmo_id from tbl_new_invoice ni
                        INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = ni.id
                        INNER JOIN tbl_invoice_amount ia ON ia.all_invoice_id = ai.id
                        LEFT JOIN tbl_all_collection ac ON ac.invoiced_amount_id = ia.id
                        LEFT JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id
                 where 
                 (SELECT status from tbl_new_invoice where invoice_number = ni.invoice_number order by id desc limit 0,1) = 'posted'
                 && 
                 ((SELECT e.status FROM tbl_enter_payment e
                  INNER JOIN tbl_all_collection ON enter_payment_id = e.id WHERE invoiced_amount_id = ia.id ORDER BY e.id desc limit 0,1) ='reversed'
                 || (SELECT COUNT(*) FROM tbl_all_collection 
                     WHERE invoiced_amount_id = ia.id ) = 0
                 ) && ni.hmo_id <> 0
                )

                && hmo.org_id = ?";
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber(Session::getSession('medorgid'));
//        echo $txt;
        return self::getTblHmo($sqlQuery);
    }

    protected static function getTblHmo($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $hmos = array();
        foreach ($tab as $each) {
            $hmo = new TblHmo();

            $hmo->id = $each['id'];
            $hmo->hmoAccount = $each['hmo_account'];
            $hmo->hmoName = $each['hmo_name'];
            $hmo->dateCreated = $each['date_created'];
            $hmo->balance = isset($each['balance']) ? $each['balance'] : '';

            $hmos[] = $hmo;
        }

        return $hmos;
    }

    static function getMaxNumId() {
        $txt = "SELECT h.hmo_account FROM tbl_hmo h " .
                "WHERE h.org_id = " . Session::getSession('medorgid') . " ORDER BY h.id desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return ++$result[0]['hmo_account'];
        } else {
            return 'H000001';
        }
    }

    static function checkHMONumber() {
        $total = 0;
        if (isset($_POST['hmoAccount'])) {
            $txt = 'SELECT * from tbl_hmo ' .
                    'WHERE hmo_account = "' . $_POST['hmoAccount'] . '" ' .
                    '&& org_id = ' . Session::getSession('medorgid');
            if (Session::getSession('hmoid') != '') {
                $txt .= ' && id <> ' . Session::getSession('hmoid');
            }
            // echo $txt;
//                '&& (SELECT count(ni.client_id) FROM tbl_new_invoice ni WHERE ni.client_id = id) = 0';
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);
//            echo $txt;
            $total += count($result);
        }

        if (Session::getSession('hmoid') != '') {
            $txt = 'SELECT count(hmo_id) as total FROM tbl_new_invoice  WHERE hmo_id = ' . Session::getSession('hmoid');
//                  
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);


//            echo $result->total;
//            echo $total +'test';
            if ($result[0]['total'] > 0) {
                $global = new GlobalClass();
                $global->setActiveStatus('hmo');
//                Session::setSession('hmoid', '');
            }
        }
        return $total;
    }

    static function getTotalHmoAddedToday() {
        $txt = "SELECT COUNT(*) as total FROM tbl_hmo WHERE "
                . "date_created = '" . date('Y-m-d') . "' "
                . "&& org_id = " . Session::getSession('medorgid');
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        return $result[0]['total'];
    }

}

?>