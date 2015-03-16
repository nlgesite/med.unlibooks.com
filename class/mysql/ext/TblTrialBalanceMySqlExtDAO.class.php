<?php

/**
 * Class that operate on table 'tbl_trial_balance'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-12-06 03:23
 */
class TblTrialBalanceMySqlExtDAO extends TblTrialBalanceMySqlDAO {

    static function getData() {
        $txt = 'SELECT * FROM tbl_trial_balance WHERE coa_id IN'
                . '(SELECT id from tbl_coa WHERE org_id = ?)';

        $slqQuery = new SqlQuery($txt);
        $slqQuery->setNumber(Session::getSession('org_id'));

        $result = QueryExecutor::execute($sqlQuery);

        return $result;
    }

    function processTrialBalance() {
        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('medorgid'));
        $coaquery = new Coaquery();

        $sources = array('public/coaquery.php', '../public/coaquery.php');
        foreach ($sources as $source) {
            if (file_exists($source)) {
                require_once ($source);
            }
        }

        foreach ($coas as $coa) {
            if ($coa->accountNum == '1000-001') {
                
            }
        }
    }

    static function get26A($orgId, $month, $year) {
        /* $txt = '
          SELECT

          tb.balance,
          sum(tb.balance) as total


          FROM tbl_trial_balance tb

          INNER JOIN tbl_coa coa

          ON tb.coa_id = coa.id

          INNER JOIN tbl_organization org

          ON org.id = coa.org_id

          WHERE coa.org_id = "'.$orgId.'"
          AND coa.account_num IN ("4000-001","4000-003")
          AND month(tb.trans_date) = "'.$month.'"
          AND year(tb.trans_date) = "'.$year.'";
          '; */

        $txt = '
				SELECT 
					tb.balance, 
					sum(tb.balance) as total 
					
				FROM tbl_trial_balance tb 

					INNER JOIN tbl_coa coa ON tb.coa_id = coa.id 
					INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id 

					WHERE coa.org_id = "' . $orgId . '" 
					AND coa.account_num IN ("4000-001", "4000-003")
					AND month(tbtrans.`date`) = "' . $month . '" 
					AND year(tbtrans.`date`) = "' . $year . '"
			';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblTrialBalance($sqlQuery);
    }

    static function get31A($orgId, $month, $year) {
        $txt = '
			SELECT 
				tb.balance, 
				sum(tb.balance) as total 

			FROM tbl_trial_balance tb 
				
				INNER JOIN tbl_coa coa ON tb.coa_id = coa.id 
				INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id 
				
				WHERE coa.org_id = "' . $orgId . '" 
				AND coa.account_num IN ("4001-001","4001-002","4001-003") 
				AND month(tbtrans.`date`) = "' . $month . '" 
				AND year(tbtrans.`date`) = "' . $year . '"
		';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblTrialBalance($sqlQuery);
    }

    static function get33A($orgId, $month, $year) {
        $txt = '
			SELECT 
				tb.balance,
				sum(tb.balance) as total 

			FROM tbl_trial_balance tb 

				INNER JOIN tbl_coa coa ON tb.coa_id = coa.id 
				INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id 
				
				WHERE coa.org_id = "' . $orgId . '" 
				AND coa.account_num IN ("6000-001", "6000-002", "6000-003", "6000-004", "6000-005", 
										"6000-006", "6000-007", "6000-008", "6000-009", "6000-010", 
										"6000-011", "6000-012", "6000-013", "6000-014", "6000-015", 
										"6000-016", "6000-017", "6000-018", "6000-019") 
				AND month(tbtrans.`date`) = "' . $month . '" 
				AND year(tbtrans.`date`) = "' . $year . '"
		';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblTrialBalance($sqlQuery);
    }

    static function get37A($orgId, $month, $year) {
        $txt = '
			SELECT 
				tb.balance, 
				sum(tb.balance) as total 

			FROM tbl_trial_balance tb 
				
				INNER JOIN tbl_coa coa ON tb.coa_id = coa.id 
				INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id 
				
				WHERE coa.org_id = "' . $orgId . '" 
				AND coa.account_num IN ("6001-001") 
				AND month(tbtrans.`date`) = "' . $month . '" 
				AND year(tbtrans.`date`) = "' . $year . '"
		';

        $sqlQuery = new SqlQuery($txt);

        return self::getTblTrialBalance($sqlQuery);
    }

    /* static function get38G($orgId, $month, $year){
      $txt = '
      SELECT
      tb.balance,
      sum(tb.balance) as total

      FROM tbl_trial_balance tb

      INNER JOIN tbl_coa coa ON tb.coa_id = coa.id
      INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id

      WHERE coa.org_id = "'.$orgId.'"
      AND coa.account_num IN ("6001-001")
      AND month(tbtrans.`date`) = "'.$month.'"
      AND year(tbtrans.`date`) = "'.$year.'"
      ';

      $sqlQuery = new SqlQuery($txt);

      return self::getTblTrialBalance($sqlQuery);
      } */

    protected static function getTblTrialBalance($sqlQuery) {
        $answer = QueryExecutor::execute($sqlQuery);

        if (empty($answer)) {
            return false;
        }

        $returns = array();

        foreach ($answer as $each) {
            $sagot = new TblTrialBalance();

            $sagot->balance = $each['balance'];
            $sagot->total = $each['total'];

            $returns[] = $sagot;
        }

        return $returns;
    }

    static function trialBalance($orgid, $date, $searchtype) {
        $nedateissued = $jetransdate = '';
        $dates = $result = array(); 
        if (isset($searchtype) && $searchtype == 'monthly') {

//            echo date('Y-m', strtotime($_POST['date'].' -1 month')); 
            $dates[] = "Year(tbtrans.date) = " . date('Y', strtotime($date))
                    . " && Month(tbtrans.date)=" . date('m', strtotime($date));
            if (date('m', strtotime($date)) > 1) {
                $dates[] = " tbtrans.date >= '" . date('Y-01-01', strtotime($date)) . "' "
                        . "&& tbtrans.date <='" . date('Y-m-31', strtotime($date . ' -1 month')) . "'";
            }
//            $date = date('F', strtotime($_POST['date'])) . ' - ' . date('Y', strtotime($_POST['date']));
        } elseif (isset($searchtype) && $searchtype == 'annual') {
//            $date = $_POST['year'];
            $dates[] = "Year(tbtrans.date) = " . $date;
            $dates[] = "Year(tbtrans.date) = " . ($date - 1);
        }
//        print_r($dates);exit;
        if (!empty($dates)) {
            $orgid = Session::getSession('medorgid');
            foreach ($dates as $date) {
//                $txt = "SELECT coa.account_num, coa.accont_name, sum(coa.debit) as debit, sum(coa.credit) as credit, sum(coa.balance) as balance
//                    FROM (
//                    SELECT c . * , SUM( tb.debit ) AS debit, SUM( tb.credit ) AS credit, SUM( tb.balance ) AS balance
//                    FROM tbl_coa c
//                    LEFT JOIN (
//                    SELECT tb. * 
//                    FROM tbl_trial_balance tb
//                    INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
//                    INNER JOIN tbl_all_invoice ai ON ai.id = tbtrans.ref_no
//                    INNER JOIN tbl_new_invoice ni ON ni.id=ai.new_invoice_id    
//                    WHERE tbtrans.type_of_transaction =  'invoice' &&
//                        (SELECT n.status FROM tbl_new_invoice n
//                        INNER JOIN tbl_client c ON c.id = n.client_id
//                        WHERE n.invoice_number = ni.invoice_number && c.org_id = " . $orgid . " 
//                          ORDER BY n.id desc LIMIT 0,1) ='posted'
//                    && " . $date . "
//                    )tb ON tb.coa_id = c.id WHERE c.org_id =" . $orgid . " 
//                    GROUP BY c.id
//                    UNION    
//                    SELECT c . * , SUM( tb.debit ) AS debit, SUM( tb.credit ) AS credit, SUM( tb.balance ) AS balance
//                    FROM tbl_coa c
//                    LEFT JOIN (
//                    SELECT tb. * 
//                    FROM tbl_trial_balance tb
//                    INNER JOIN tbl_trial_balance_trans tbtrans 
//                        ON tbtrans.trial_balance_id = tb.id
//                    INNER JOIN tbl_all_collection ac ON ac.id = tbtrans.ref_no
//                    INNER JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id   
//                    WHERE tbtrans.type_of_transaction =  'collection' && 
//                        (SELECT e.status FROM tbl_enter_payment e
//                         INNER JOIN tbl_hmo h ON h.id = e.hmo_id
//                    WHERE e.col_num=ep.col_num && h.org_id =" . $orgid . " ORDER BY e.id desc LIMIT 0,1)='posted' 
//                        && " . $date . "
//                    )tb ON tb.coa_id = c.id
//                    WHERE c.org_id =" . $orgid . " GROUP BY c.id
//                    UNION
//                    SELECT c . * , SUM( tb.debit ) AS debit, SUM( tb.credit ) AS credit, SUM( tb.balance ) AS balance
//                    FROM tbl_coa c
//                    LEFT JOIN (
//                    SELECT tb. * 
//                    FROM tbl_trial_balance tb
//                    INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
//                    INNER JOIN tbl_new_expense ne ON ne.id = tbtrans.ref_no 
//                    WHERE tbtrans.type_of_transaction =  'expense'  &&
//                      (SELECT x.status FROM tbl_new_expense x 
//                       INNER JOIN tbl_supplier s ON s.id = x.supplier_id 
//                    WHERE x.expense_number= ne.expense_number && s.org_id = " . $orgid . " 
//                    ORDER by x.id desc LIMIT 0, 1 )='posted' 
//                        && " . $date . "
//                    )tb ON tb.coa_id = c.id
//                    WHERE c.org_id =" . $orgid . " GROUP BY c.id   
//                    
//                    )coa
//                    GROUP BY coa.id ORDER BY coa.account_num
//                ";

                $txt = "SELECT c . * , SUM( tb.debit ) AS debit, SUM( tb.credit ) AS credit, SUM( tb.balance ) AS balance
                        FROM tbl_coa c
                        LEFT JOIN (
                        SELECT tb. * 
                        FROM tbl_trial_balance tb
                        INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id    
                        WHERE " . $date . "
                        )tb ON tb.coa_id = c.id WHERE c.org_id =? 
                        GROUP BY c.id ORDER BY c.account_num

                ";
//                echo  .'<br/>'; 
//                echo $date;
                $sqlQuery = new SqlQuery($txt);
                $sqlQuery->setNumber($orgid); 
//                echo $txt;
//        $sqlQuery->setNumber(Session::getSession('orgid'));
//                echo $txt . '<br /><br />'; //exit;
                $result[] = self::getAllTb($sqlQuery);
            }
            
            return $result;
        }
    }

    protected static function getAllTb($sqlQuery) {
        $result = QueryExecutor::execute($sqlQuery);

        if (empty($result)) {
            return false;
        }

        $returns = array();

        foreach ($result as $item) {
            $return = new stdClass();

            if (isset($item['account_num'])) {
                $return->code = $item['account_num'];
            }
            if (isset($item['accont_name'])) {
                $return->name = $item['accont_name'];
            }
            if (isset($item['coa_id'])) {
                $return->coaid = $item['coa_id'];
            }
            $return->debit = $item['debit'];
            $return->credit = $item['credit'];
            
//            if (isset($item['balance'])) {
            $return->balance = $item['balance'];
//            }
            $returns[] = $return;
//            print_r($return);
        }
        return $returns;
    }

    static function incomeStatement_1701($orgId, $year) {
        $txt = "

          SELECT
          _1701.totalAmount,
          _1701.itr_item

          FROM (SELECT s2Item1A.balance, s2Item1A.total as totalAmount, s2Item1A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%4000-001%' THEN 'sched2Item1A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%4000-001%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('4000-001', '4000-003')

          )s2Item1A

          UNION ALL

          SELECT s2Item4A.balance, s2Item4A.total as totalAmount, s2Item4A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%4000-003%' THEN 'sched2Item4A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%4000-003%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('4000-003')

          )s2Item4A

          UNION ALL

          SELECT s3A.balance, s3A.total as totalAmount, s3A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%4001-001%' THEN 'sched3A'
          WHEN coa.account_num LIKE '%4001-002%' THEN 'sched3A'
          WHEN coa.account_num LIKE '%4001-003%' THEN 'sched3A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%4001-001%' THEN tb.balance
          WHEN coa.account_num LIKE '%4001-002%' THEN tb.balance
          WHEN coa.account_num LIKE '%4001-003%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('4001-001', '4001-002', '4001-003')

          )s3A

          UNION ALL

          SELECT _23A.balance, _23A.total as totalAmount, _23A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-001%' THEN '23A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-001%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-001')
          )_23A

          UNION ALL

          SELECT _29A.balance, _29A.total as totalAmount, _29A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-002%' THEN '29A'
          WHEN coa.account_num LIKE '%6000-003%' THEN '29A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-002%' THEN tb.balance
          WHEN coa.account_num LIKE '%6000-003%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-002', '6000-003')
          )_29A

          UNION ALL

          SELECT _22A.balance, _22A.total as totalAmount, _22A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-004%' THEN '22A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-004%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-004')
          )_22A


          UNION ALL

          SELECT _18A.balance, _18A.total as totalAmount, _18A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-005%' THEN '18A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-005%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-005')
          )_18A

          UNION ALL

          SELECT _8A.balance, _8A.total as totalAmount, _8A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-006%' THEN '8A'
          WHEN coa.account_num LIKE '%6000-007%' THEN '8A'
          WHEN coa.account_num LIKE '%6000-008%' THEN '8A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-006%' THEN tb.balance
          WHEN coa.account_num LIKE '%6000-007%' THEN tb.balance
          WHEN coa.account_num LIKE '%6000-008%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-006', '6000-007', '6000-008')
          )_8A

          UNION ALL

          SELECT _20A.balance, _20A.total as totalAmount, _20A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-009%' THEN '20A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-009%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-009')
          )_20A

          UNION ALL

          SELECT _14A.balance, _14A.total as totalAmount, _14A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-010%' THEN '14A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-010%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-010')
          )_14A

          UNION ALL

          SELECT _13A.balance, _13A.total as totalAmount, _13A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-011%' THEN '13A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-011%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-011')
          )_13A

          UNION ALL

          SELECT _10A.balance, _10A.total as totalAmount, _10A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-012%' THEN '10A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-012%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-012')
          )_10A

          UNION ALL

          SELECT _24A.balance, _24A.total as totalAmount, _24A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-013%' THEN '24A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-013%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-013')
          )_24A

          UNION ALL

          SELECT _25A.balance, _25A.total as totalAmount, _25A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-014%' THEN '25A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-014%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-014')
          )_25A

          UNION ALL

          SELECT _34A.balance, _34A.total as totalAmount, _34A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-015%' THEN '34A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-015%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-015')
          )_34A

          UNION ALL

          SELECT _35A.balance, _35A.total as totalAmount, _35A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-016%' THEN '35A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-016%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-016')
          )_35A

          UNION ALL

          SELECT _31A.balance, _31A.total as totalAmount, _31A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-017%' THEN '31A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-017%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-017')
          )_31A

          UNION ALL

          SELECT _26A.balance, _26A.total as totalAmount, _26A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-018%' THEN '26A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-018%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-018')
          )_26A

          UNION ALL

          SELECT _32A.balance, _32A.total as totalAmount, _32A.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6000-019%' THEN '32A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6000-019%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6000-019')
          )_32A

          UNION ALL

          SELECT _pIV67a.balance, _pIV67a.total as totalAmount, _pIV67a.itr_item as itr_item

          FROM (SELECT tb.balance, sum(tb.balance) as total,
          CASE
          WHEN coa.account_num LIKE '%6001-001%' THEN 'partIV67A'
          END AS 'itr_item',

          CASE
          WHEN coa.account_num LIKE '%6001-001%' THEN tb.balance
          END AS 'amount'

          FROM tbl_trial_balance tb

          INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
          INNER JOIN tbl_coa coa ON coa.id = tb.coa_id

          WHERE coa.org_id = '" . $orgId . "'
		  AND YEAR(tbtrans.`date`) = '" . $year . "'
          AND coa.account_num IN ('6001-001')
          )_pIV67a

          )_1701
          ";

        $sqlQuery = new SqlQuery($txt);

        return self::Tbl1701IS($sqlQuery);
    }

    static function balanceSheet_1701($orgId, $year) {
        $txt = "
			SELECT 
			_1701.totalAmount,
			_1701.itr_item

			FROM (SELECT s10i1a.balance, s10i1a.total as totalAmount, s10i1a.itr_item as itr_item
				
				FROM (SELECT tb.balance, sum(tb.balance) as total,
						CASE 
							WHEN coa.account_num LIKE '%1000-001%' THEN 'sched10Item1A'
							WHEN coa.account_num LIKE '%1000-002%' THEN 'sched10Item1A'
							WHEN coa.account_num LIKE '%1001-001%' THEN 'sched10Item1A'
							WHEN coa.account_num LIKE '%1002-001%' THEN 'sched10Item1A'
							WHEN coa.account_num LIKE '%1002-002%' THEN 'sched10Item1A'
							WHEN coa.account_num LIKE '%1002-003%' THEN 'sched10Item1A'
							WHEN coa.account_num LIKE '%1002-004%' THEN 'sched10Item1A'
						END AS 'itr_item',
						
						CASE 
							WHEN coa.account_num LIKE '%1000-001%' THEN tb.balance
							WHEN coa.account_num LIKE '%1000-002%' THEN tb.balance
							WHEN coa.account_num LIKE '%1001-001%' THEN tb.balance
							WHEN coa.account_num LIKE '%1002-001%' THEN tb.balance
							WHEN coa.account_num LIKE '%1002-002%' THEN tb.balance
							WHEN coa.account_num LIKE '%1002-003%' THEN tb.balance
							WHEN coa.account_num LIKE '%1002-004%' THEN tb.balance
						END AS 'amount'
						
						FROM tbl_trial_balance tb
						
						INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
						INNER JOIN tbl_coa coa ON coa.id = tb.coa_id
				
						WHERE coa.org_id = '" . $orgId . "'
						AND YEAR(tbtrans.`date`) = '" . $year . "'
						AND coa.account_num IN ('1000-001', '1000-002', '1001-001', '1002-001', '1002-002', '1002-003', '1002-004')
						
					)s10i1a
			
			UNION ALL
					
				SELECT s10i8a.balance, s10i8a.total as totalAmount, s10i8a.itr_item as itr_item
				
				FROM (SELECT tb.balance, sum(tb.balance) as total,
						CASE 
							WHEN coa.account_num LIKE '%2000%' THEN 'sched10Item8A'
							WHEN coa.account_num LIKE '%2001%' THEN 'sched10Item8A'
						END AS 'itr_item',
						
						CASE 
							WHEN coa.account_num LIKE '%2000%' THEN tb.balance
							WHEN coa.account_num LIKE '%2001%' THEN tb.balance
						END AS 'amount'
						
						FROM tbl_trial_balance tb
						
						INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
						INNER JOIN tbl_coa coa ON coa.id = tb.coa_id
				
						WHERE coa.org_id = '" . $orgId . "'
						AND YEAR(tbtrans.`date`) = '" . $year . "'
						AND coa.account_num IN ('2000', '2001')
						
					)s10i8a
					
			UNION ALL
					
				SELECT s10i3a.balance, s10i3a.total as totalAmount, s10i3a.itr_item as itr_item
				
				FROM (SELECT tb.balance, sum(tb.balance) as total,
						CASE 
							WHEN coa.account_num LIKE '%1003-001%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-002%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-003%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-004%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-005%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-006%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-007%' THEN 'sched10Item3A'
							WHEN coa.account_num LIKE '%1003-008%' THEN 'sched10Item3A'
						END AS 'itr_item',
						
						CASE 
							WHEN coa.account_num LIKE '%1003-001%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-002%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-003%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-004%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-005%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-006%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-007%' THEN tb.balance
							WHEN coa.account_num LIKE '%1003-008%' THEN tb.balance
						END AS 'amount'
						
						FROM tbl_trial_balance tb
						
						INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
						INNER JOIN tbl_coa coa ON coa.id = tb.coa_id
				
						WHERE coa.org_id = '" . $orgId . "'
						AND YEAR(tbtrans.`date`) = '" . $year . "'
						AND coa.account_num IN ('1003-001', '1003-002', '1003-003', '1003-004', '1003-005', '1003-006', '1003-007', '1003-008')
						
					)s10i3a
					
			UNION ALL
					
				SELECT s10i13a.balance, s10i13a.total as totalAmount, s10i13a.itr_item as itr_item
				
				FROM (SELECT tb.balance, sum(tb.balance) as total,
						CASE 
							WHEN coa.account_num LIKE '%3000%' THEN 'sched10Item13A'
							WHEN coa.account_num LIKE '%3001%' THEN 'sched10Item13A'
						END AS 'itr_item',
						
						CASE 
							WHEN coa.account_num LIKE '%3000%' THEN tb.balance
							WHEN coa.account_num LIKE '%3001%' THEN tb.balance
						END AS 'amount'
						
						FROM tbl_trial_balance tb
						
						INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
						INNER JOIN tbl_coa coa ON coa.id = tb.coa_id
				
						WHERE coa.org_id = '" . $orgId . "'
						AND YEAR(tbtrans.`date`) = '" . $year . "'
						AND coa.account_num IN ('3000', '3001')
						
					)s10i13a
					
			UNION ALL
					
				SELECT s10i15a.balance, s10i15a.total as totalAmount, s10i15a.itr_item as itr_item
				
				FROM (SELECT tb.balance, sum(tb.balance) as total,
						CASE 
							WHEN coa.account_num LIKE '%3002%' THEN 'sched10Item15A'
						END AS 'itr_item',
						
						CASE 
							WHEN coa.account_num LIKE '%3002%' THEN tb.balance
						END AS 'amount'
						
						FROM tbl_trial_balance tb
						
						INNER JOIN tbl_trial_balance_trans tbtrans ON tbtrans.trial_balance_id = tb.id
						INNER JOIN tbl_coa coa ON coa.id = tb.coa_id
				
						WHERE coa.org_id = '" . $orgId . "'
						AND YEAR(tbtrans.`date`) = '" . $year . "'
						AND coa.account_num IN ('3002')
						
					)s10i15a
			)_1701
          ";


        $sqlQuery = new SqlQuery($txt);

        return self::Tbl1701IS($sqlQuery);
    }

    protected static function Tbl1701IS($sqlQuery) {
        $result = QueryExecutor::execute($sqlQuery);

        if (empty($result)) {
            return false;
        }

        $returns = array();

        foreach ($result as $item) {
            $return = new stdClass();

            $return->totalAmount = $item['totalAmount'];
            $return->itrItem = $item['itr_item'];

            $returns[] = $return;
        }
        return $returns;
    }

    static function getTrialBalanceCode($code) {
        if (isset($_POST['date']) || isset($_POST['year'])) {
            if (isset($_POST['date'])) {
                $date = " Year(tbtrans.date) = " . date('Y', strtotime($_POST['date']))
                        . " && Month(tbtrans.date)=" . date('m', strtotime($_POST['date']));
            } elseif (isset($_POST['year'])) {
                $date = " Year(tbtrans.date) = " . date('Y', strtotime($_POST['year']));
            }

            $txt = "SELECT tb.* FROM tbl_trial_balance tb "
                    . "INNER JOIN tbl_trial_balance_trans tbtrans "
                    . "INNER JOIN tbl_coa coa ON coa.id = tb.coa_id "
                    . "WHERE coa.org_id=" . Session::getSession('medorgid')
                    . " && coa.account_num='" . $code . "' &&" . $date
                    . " Order by id desc LIMIT 0,1";
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            if (empty($result)) {
                return false;
            }

            return $result[0];
        }
    }

    static function get1701q($orgId, $months, $year) {
        $txt = "select 	IncomeTax_Q.date, 
                IncomeTax_Q.account_num,
                sum(IncomeTax_Q.PSI) as PSI, 
                sum(IncomeTax_Q.Sales_Disc) as Sales_Disc, 
                sum(IncomeTax_Q.29A) as 29A, 
                sum(IncomeTax_Q.31A) as 31A, 
                sum(IncomeTax_Q.33A) as 33A,
                sum(IncomeTax_Q.38G) as 38G

                from (	select 	tbl_trial_balance_trans.date, 
                                        case when tbl_coa.account_num like '%4000-001%' then tbl_trial_balance.balance *-1 end as 'PSI',
                                        case when tbl_coa.account_num like '%4000-002%' then tbl_trial_balance.balance end as 'Sales_Disc',
                                        case when tbl_coa.account_num like '%6000%' then tbl_trial_balance.balance end as '29A',
                                        case when tbl_coa.account_num like '%4001%' then tbl_trial_balance.balance end as '31A',
                                        case when tbl_coa.account_num like '%6001%' then tbl_trial_balance.balance end as '33A',
                                        case when tbl_coa.account_num like '%1002-005%' then tbl_trial_balance.balance  end as '38G',
                                        case when tbl_coa.account_num like '%4000-001%' then '4000-001'
                                                  when tbl_coa.account_num like '%4000-002%' then '4000-002' 
                                             when tbl_coa.account_num like '%6000%' then '6000'
                                             when tbl_coa.account_num like '%4001%' then '4001'
                                             when tbl_coa.account_num like '%6001%' then '6001'
                                             when tbl_coa.account_num like '%1002-005%' then '1002-005'
                                        end as account_num

                from tbl_trial_balance

                inner join tbl_coa on tbl_trial_balance.coa_id = tbl_coa.id
                inner join tbl_trial_balance_trans on tbl_trial_balance.id = tbl_trial_balance_trans.trial_balance_id

                where tbl_coa.org_id = ? and tbl_coa.account_num in ('4000-001', '4000-002','1002-005', 6000, 4001, 6001) " .
                "&& month(tbl_trial_balance_trans.date) IN (" . implode(',', $months) . ") && year(tbl_trial_balance_trans.date) = " . $year .
                ")IncomeTax_Q

        group by year(IncomeTax_Q.date)";

        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber($orgId);

        $result = QueryExecutor::execute($sqlQuery);
//        echo $txt;
        return $result;
    }

    static function getTbTrans($orgid, $refnumber, $transactiontype) {
        $txt = "SELECT tbtrans.*,tb.debit as debit, tb.credit as credit, tb.balance as balance, tb.coa_id FROM tbl_trial_balance_trans tbtrans " .
                "INNER JOIN tbl_trial_balance tb ON tb.id = tbtrans.trial_balance_id " .
                "INNER JOIN tbl_coa c ON c.id = tb.coa_id " .
                "WHERE c.org_id = " . $orgid .
                " && tbtrans.ref_no='" . $refnumber . "' && type_of_transaction='" . $transactiontype . "'";
        $sqlQuery = new SqlQuery($txt);
        
        return self::getAllTb($sqlQuery);
        
    }

//    static function deleteTb($orgid, $refno, $transactiontype){
//            $txt = "DELETE FROM tbl_trial_balance tb "
//                    . "INNER JOIN tbl_trial_balance_trans tbtrans "
//                    . "ON tbtrans.trial_balance_id = tb.id "
//                    . "INNER JOIN tbl_coa c ON c.id = tb.coa_id "
//                    . "WHERE tbtrans.ref_no=? && tb_trans.type_of_transaction =? "
//                    . "&& c.orgid = ?";
//            
//            $sqlQuery = new SqlQuery($txt);
//            $sqlQuery->setNumber($refno);
//            $sqlQuery->setString($transactiontype);
//            $sqlQuery->setString($orgid);
//            
//            QueryExecutor::executeUpdate($sqlQuery);
//    }
	
	static function getTrialBalanceByType($id, $type){
		
		$txt = '
				SELECT 
					coa.account_num,
					coa.accont_name,
					trial_balance.debit,
					trial_balance.credit,
					trial_balance.balance,
					tb_trans.date,
					tb_trans.type_of_transaction,
					tb_trans.ref_no

					FROM 

					tbl_trial_balance trial_balance

					INNER JOIN tbl_trial_balance_trans tb_trans
						ON tb_trans.trial_balance_id = trial_balance.id
					
					INNER JOIN tbl_coa coa
						ON coa.id = trial_balance.coa_id
						
					WHERE 
						tb_trans.type_of_transaction LIKE "'.$type.'"
						
						AND 
						
						tb_trans.ref_no = '.$id.'
					ORDER BY trial_balance.balance DESC
			';
			
		$sqlQuery = new SqlQuery($txt);
		
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		
		return $tab;
	
	}



	
}

?>