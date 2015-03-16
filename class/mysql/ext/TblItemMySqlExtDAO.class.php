<?php

/**
 * Class that operate on table 'tbl_item'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblItemMySqlExtDAO extends TblItemMySqlDAO {

    static function getData($limit, $limitstart =0) {
        $txt = 'SELECT * FROM tbl_item WHERE org_id = ?';

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= " && item_code like '%" . $_POST['search'] . "%'";
                    break;
                case 2:
                    $txt .= " && description like '%" . $_POST['search'] . "%'";
                    break;
                default:
                    break;
            }
//            $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
        } else {
            $txt .= ' ORDER BY id asc';
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

        return self::getTblItem($sqlQuery);
    }

    protected static function getTblItem($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $items = array();
        foreach ($tab as $each) {
            $item = new TblItem();

            $item->id = $each['id'];
            $item->itemCode = $each['item_code'];
            $item->description = $each['Description'];
            $item->dateCreated = $each['date_created'];
            $item->unitCost = $each['unit_cost'];

            $items[] = $item;
        }

        return $items;
    }

    static function checkItem() {
        $total = 0;
        if (isset($_POST['text'])) {
            $txt = "SELECT * from tbl_item WHERE item_code = '" . $_POST['text'] . "' && org_id = " . Session::getSession('medorgid');
            if (Session::getSession('itemid') != '') {
                $txt .= " && id <> " . Session::getSession('itemid');
            }
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);
            $total += count($result);
        }

        if (Session::getSession('itemid') != '') {
            $txt = 'SELECT (SELECT count(item_id) FROM tbl_invoice_lines WHERE item_id = ' . Session::getSession('itemid') . ') ' .
                    '+' . '(SELECT count(item_id) FROM tbl_recurring_lines  WHERE item_id = ' . Session::getSession('itemid') . ') as total';

            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            $total += $result[0]['total'];
        }

        return $total;
    }

}

?>