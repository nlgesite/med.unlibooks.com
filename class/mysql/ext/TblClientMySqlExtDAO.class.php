<?php

/**
 * Class that operate on table 'tbl_client'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblClientMySqlExtDAO extends TblClientMySqlDAO {

    static function getData($limit, $limitstart = 0) {
        $txt = 'SELECT * FROM tbl_client WHERE org_id = ?';

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= " && client_account like '%" . $_POST['search'] . "%'";

                    break;
                case 2:
                    $txt .= " && client_name like '%" . $_POST['search'] . "%'";
                    break;
                default:
                    break;
            }
            //  $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
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

        return self::getTblClient($sqlQuery);
    }

    protected static function getTblClient($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $clients = array();
        foreach ($tab as $each) {
            $client = new TblClient();

            $client->id = $each['id'];
            $client->clientAccount = $each['client_account'];
            $client->clientName = $each['client_name'];
            $client->dateCreated = $each['date_created'];
            $clients[] = $client;
        }

        return $clients;
    }

    static function getMaxNumId() {
        $txt = "SELECT c.client_account FROM tbl_client c " .
                "WHERE c.org_id = " . Session::getSession('medorgid') . " ORDER BY c.id desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (count($result) > 0) {
            return ++$result[0]['client_account'];
        } else {
            return 'P000001';
        }
    }

    static function checkClientNumber() {
        $total = 0;
        if (isset($_POST['clientAccount'])) {
            $txt = 'SELECT * from tbl_client ' .
                    'WHERE client_account = "' . $_POST['clientAccount'] . '" ' .
                    '&& org_id = ' . Session::getSession('medorgid');
            if (Session::getSession('clientid') != '') {
                $txt .= ' && id <> ' . Session::getSession('clientid');
            }

//                '&& (SELECT count(ni.client_id) FROM tbl_new_invoice ni WHERE ni.client_id = id) = 0';
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);
//            echo $txt;
            $total += count($result);
        }

        if (Session::getSession('clientid') != '') {
            $txt = 'SELECT (SELECT count(client_id) FROM tbl_new_invoice  WHERE client_id = ' . Session::getSession('clientid') . ') ' .
//                    '+' . '(SELECT count(client_id) FROM tbl_new_recurring  WHERE client_id = ' . Session::getSession('clientid') . ')'.
                    ' as total';

            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);


//            echo $result->total;
//            echo $total +'test';
            if ($result) {
                $total += $result[0]['total'];
                $global = new GlobalClass();
                $global->setActiveStatus('client');
//                Session::setSession('clientid', '');
            }
        }
        return $total;
    }

    static function getClientlist() {
        $txt = "SELECT *
			FROM tbl_client c " .
                "Where c.org_id = " . Session::getSession('medorgid');

        if (isset($_POST['startdate'])) {
            $txt .= ' && c.date_created >= "' . date_format(date_create($_POST['startdate']), 'Y-m-d') . '" && c.date_created <= "' . date_format(date_create($_POST['enddate']), 'Y-m-d') . '"';
            /*   $txt .=" && ni.date_created like '%" . $_POST['startdate'] . "%' && ni.date_created like '%" . $_POST['enddate'] . "%'"; */
        }

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        /* print_r($result); exit; */
        return $result;
    }

    static function getClientlistReport($from, $to) {
        $txt = "SELECT c.date_created,
					c.client_account,
					c.client_name,
					c.tin_num,
					c.address,
					c.email_address,
					c.phone_number,
					c.active
			FROM tbl_client c " .
                "Where c.org_id = " . Session::getSession('medorgid');

        if (isset($from) && isset($to)) {
            $txt .= ' && c.date_created >= "' . date_format(date_create($from), 'Y-m-d') . '" && c.date_created <= "' . date_format(date_create($to), 'Y-m-d') . '"';
            /*   $txt .=" && ni.date_created like '%" . $_POST['startdate'] . "%' && ni.date_created like '%" . $_POST['enddate'] . "%'"; */
        }

        $sqlQuery = new SqlQuery($txt);

        return self::getTblClientList($sqlQuery);
    }

    protected static function getTblClientList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $clients = array();
        foreach ($tab as $each) {
            $client = new TblClient();

            $client->dateCreated = $each['date_created'];
            $client->clientAccount = $each['client_account'];
            $client->clientName = $each['client_name'];
            $client->tinNum = $each['tin_num'];
            $client->address = $each['address'];
            $client->emailAddress = $each['email_address'];
            $client->phoneNumber = $each['phone_number'];
            $client->active = $each['active'];
            $clients[] = $client;
        }

        return $clients;
    }

    static function getTotalClientAddedToday() {
        $txt = "SELECT COUNT(*) as total FROM tbl_client WHERE "
                . "date_created = '%" . date('Y-m-d') . "%' "
                . "&& org_id = " . Session::getSession('medorgid');
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        return $result[0]['total'];
    }

}
