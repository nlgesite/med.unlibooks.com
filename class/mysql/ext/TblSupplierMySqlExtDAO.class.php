<?php
/**
 * Class that operate on table 'tbl_supplier'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblSupplierMySqlExtDAO extends TblSupplierMySqlDAO {

    static function getData($limit, $limitstart = 0) {
        $txt = 'SELECT * FROM tbl_supplier WHERE org_id = ?';

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= " && supplier_account like '%" . $_POST['search'] . "%'";
                    break;
//                case 2:
//                    $txt .= " && description like '%" . $_POST['search'] . "%'";
//                    break;
                default:
                    break;
            }
        }else{
			 $txt .= ' ORDER BY id desc';
		}
//        echo $txt;
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

        return self::getTblSupplier($sqlQuery);
    }

    protected static function getTblSupplier($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $suppliers = array();
        foreach ($tab as $each) {
            $supplier = new TblSupplier();

            $supplier->id = $each['id'];
            $supplier->supplierAccount = $each['supplier_account'];
            $supplier->name = $each['name'];
            $supplier->activeAccount = $each['active_account'];
            $supplier->dateCreated = $each['date_created'];
            $suppliers[] = $supplier;
        }

        return $suppliers;
    }

    static function getMaxNumId() {
        $txt = "SELECT s.supplier_account FROM tbl_supplier s " .
                "WHERE s.org_id = " . Session::getSession('medorgid') . " ORDER BY s.id desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
        if (count($result) > 0) {
                return ++$result[0]['supplier_account'];
        } else {
            return 'V000001';
        }
    }
    //von query

    static function hasDuplicate($orgId, $code) {
        $txt = '
				SELECT *
					FROM tbl_supplier
					
					WHERE supplier_account = "' . $code . '" AND 
					org_id = ' . $orgId . '
			';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblSupplier($sqlQuery);
    }

    static function searchByType($orgId, $search, $type) {
        $additional = 'WHERE org_id = ' . $orgId . ' ';
        if ($search != '') {
            if ($type == 3) {
                $additional .= ' AND (supplier_account LIKE "%' . $search . '%" OR name LIKE "%' . $search . '%" )';
            } elseif ($type == 2) {
                $additional .= ' AND (name LIKE "%' . $search . '%" )';
            } else {
                $additional .= ' AND (supplier_account LIKE "%' . $search . '%")';
            }
        }
        $txt = '
				SELECT *
					FROM tbl_supplier
			' . $additional;

        $sqlQuery = new SqlQuery($txt);

        return self::getTblSupplier($sqlQuery);
    }

    static function checkSupplier() {
        $txt = "SELECT * FROM tbl_new_expense WHERE supplier_id IN (" . implode(',', $_POST['supplierids']) . ")";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>