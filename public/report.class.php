<?php

class ReportClass {

    static function incomeStatement($orgid, $datesearch, $searchtype) {
        $date = $nidateissued = $nedateissued = $jetransdate = '';
        if ((isset($searchtype) && $searchtype == 'monthly')) {
            $date = date('F', strtotime($datesearch)) . ' - ' . date('Y', strtotime($datesearch));
            $transdate = " Year(tbl_trial_balance_trans.date) = " . date('Y', strtotime($datesearch))
                    . " && Month(tbl_trial_balance_trans.date)=" . date('m', strtotime($datesearch));
        } elseif (isset($searchtype) && $searchtype == 'annual') {
            $date = $datesearch;
            $transdate = "Year(tbl_trial_balance_trans.date) = " . $datesearch;
        }
//        }


        if (isset($datesearch)) {
//            $orgid = Session::getSession('medorgid');

            $txt = "
                    select 	I_S.date, 
                                            I_S.account_num,
                                            sum(I_S.PSI) as PSI, 
                                            sum(I_S.Sales_Disc) as Sales_Disc, 
                                            sum(I_S.Cost_of_Service) as Cost_of_Service, 
                                            sum(I_S.Other_Income) as Other_Income, 
                                            sum(I_S.Expenses) as Expenses
                    from (
                                            select 	tbl_trial_balance_trans.date, 
                                                                    case when tbl_coa.account_num like '%4000-001%' then tbl_trial_balance.balance *-1 end as 'PSI',
                                                                    case when tbl_coa.account_num like '%4000-002%' then tbl_trial_balance.balance end as 'Sales_Disc',
                                                                    case when tbl_coa.account_num like '%6000%' then tbl_trial_balance.balance end as 'Cost_of_Service',
                                                                    case when tbl_coa.account_num like '%4001%' then tbl_trial_balance.balance *-1 end as 'Other_Income',
                                                                    case when tbl_coa.account_num like '%6001%' then tbl_trial_balance.balance end as 'Expenses',
                                                                    case when tbl_coa.account_num like '%4000-001%' then '4000-001'
                                                                              when tbl_coa.account_num like '%4000-002%' then '4000-002' 
                                                                         when tbl_coa.account_num like '%6000%' then '6000'
                                                                         when tbl_coa.account_num like '%4001%' then '4001'
                                                                         when tbl_coa.account_num like '%6001%' then '6001' end as account_num

                                            from tbl_trial_balance

                                            inner join tbl_coa on tbl_trial_balance.coa_id = tbl_coa.id
                                            inner join tbl_trial_balance_trans on tbl_trial_balance.id = tbl_trial_balance_trans.trial_balance_id

                                            where tbl_coa.org_id = " . $orgid . " and tbl_coa.account_num in ('4000-001', '4000-002', 6000, 4001, 6001) "
                    . "&& " . $transdate .
                    ")I_S

                    group by month(I_S.date)";
					
					// echo '<pre>'.
					$txt = "
						select 	I_S.date, 
								I_S.account_num,
								case when (sum(I_S.PSI)) IS NULL
									then 0
									else sum(I_S.PSI)
								end as PSI,
								case when (sum(I_S.Sales_Disc)) IS NULL
									then 0
									else sum(I_S.Sales_Disc)
								end as Sales_Disc,
								case when (sum(I_S.Cost_of_Service)) IS NULL
									then 0
									else sum(I_S.Cost_of_Service)
								end as Cost_of_Service,
								case when (sum(I_S.Other_Income)) IS NULL
									then 0
									else sum(I_S.Other_Income)
								end as Other_Income,
								case when (sum(I_S.Expenses)) IS NULL
									then 0
									else sum(I_S.Expenses)
								end as Expenses
								
					from (
								select 	tbl_trial_balance_trans.date, 
											case when tbl_coa.account_num like '%4000-001%' then tbl_trial_balance.balance *-1 end as 'PSI',
											case when tbl_coa.account_num like '%4000-002%' then tbl_trial_balance.balance end as 'Sales_Disc',
											case when tbl_coa.account_num like '%6000%' then tbl_trial_balance.balance end as 'Cost_of_Service',
											case when tbl_coa.account_num like '%4001%' then tbl_trial_balance.balance *-1 end as 'Other_Income',
											case when tbl_coa.account_num like '%6001%' then tbl_trial_balance.balance end as 'Expenses',
											case when tbl_coa.account_num like '%4000-001%' then '4000-001'
												  when tbl_coa.account_num like '%4000-002%' then '4000-002' 
												 when tbl_coa.account_num like '%6000%' then '6000'
												 when tbl_coa.account_num like '%4001%' then '4001'
												 when tbl_coa.account_num like '%6001%' then '6001' end as account_num
								
								from tbl_trial_balance
								
								inner join tbl_coa on tbl_trial_balance.coa_id = tbl_coa.id
								inner join tbl_trial_balance_trans on tbl_trial_balance.id = tbl_trial_balance_trans.trial_balance_id
								
								where tbl_coa.org_id = '".$orgid."' 
								AND  ".$transdate."
								and tbl_coa.account_num in ('4000-001', '4000-002', 6000, 4001, 6001)

							)I_S
							
							 group by month(I_S.date)
					";
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            if (!isset($result))
                return false;

            $value = (object) array('psi' => 0, 'expense' => 0, 'date' => '', 'otherincome' => 0, 'operatingprofit' => 0, 'net' => 0, 'provincome' => 0,
                        'costofservice' => 0, 'saledisc' => 0);
            //echo $value;
            //exit;
//            print_r($result);
            if ($result) {
                foreach ($result as $item) {
//                    $value->trans_date = $item['date'];
                    $value->psi += $item['PSI'] - $item['Sales_Disc'];
                    $value->costofservice += $item['Cost_of_Service'];
                    $value->saledisc += $item['Sales_Disc'];
                    $value->otherincome += $item['Other_Income'];
                    $value->expense += $item['Expenses'];
//                    $value->income += $item['service_income'];
                    //  $value->cost_except_cost_sales = $item['cost_except_cost_sales'];
//                    echo $item['PSI'] + $item['Other_Income']; //- $item['Sales_Disc'] - $item['Cost_of_Service'] - $item['Expenses'];exit;
                    $value->provincome += self::provisionaryIncomeTax($item['PSI'] + $item['Other_Income'] - $item['Sales_Disc'] - $item['Cost_of_Service'] - $item['Expenses']);
                }

                $value->date = $date;
                $value->operatingprofit = ($value->psi - $value->costofservice) + $value->otherincome;
                $value->net = $value->operatingprofit - $value->expense;
            }

            return $value;
        }
    }

    static function provisionaryIncomeTax($net) {
        $taxbase = $fixedtax = $rate = 0;
//        $taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->typeOfTax;
//        if ($taxtype == 'percentage') {
//            $rate = 3;
//            $provincome = $net * ($rate / 100);
//        } else {
        if ($net >= 1 && $net <= 10000) {
            $taxbase = 0;
            $fixedtax = 0;
            $rate = 5;
        } elseif ($net > 10000 && $net < 30000) {
            $taxbase = 10000;
            $fixedtax = 500;
            $rate = 10;
        } elseif ($net > 30000 && $net < 70000) {
            $taxbase = 30000;
            $fixedtax = 2500;
            $rate = 15;
        } elseif ($net > 70000 && $net < 140000) {
            $taxbase = 70000;
            $fixedtax = 8500;
            $rate = 20;
        } elseif ($net > 140000 && $net < 250000) {
            $taxbase = 140000;
            $fixedtax = 22500;
            $rate = 25;
        } elseif ($net > 250000 && $net < 500000) {
            $taxbase = 250000;
            $fixedtax = 50000;
            $rate = 30;
        } elseif ($net > 500000) {
            $taxbase = 500000;
            $fixedtax = 125000;
            $rate = 32;
        }
//            else {
//                $taxbase = 0;
//                $fixedtax = 0;
//                $rate = 0;
//            }
//        echo $net;
        $excess = $net - $taxbase;
        $taxecess = $excess * ($rate / 100);
        $provincome = ($fixedtax + $taxecess < 0) ? 0 : $fixedtax + $taxecess;
//        }
        return $provincome;
    }

    function export_incomeStatement() {
        $date = $nidateissued = $nedateissued = $jetransdate = '';
        if ($_GET['searchtype'] == 'monthly') {
            $date = date('F', strtotime($_GET['date'])) . ' - ' . date('Y', strtotime($_GET['date']));
            $nidateissued = " && Year(ni.date_issued) = " . date('Y', strtotime($_GET['date']))
                    . " && Month(ni.date_issued)=" . date('m', strtotime($_GET['date']));
            $nedateissued = " && Year(ne.date_issued) = " . date('Y', strtotime($_GET['date']))
                    . " && Month(ne.date_issued)=" . date('m', strtotime($_GET['date']));

            $jetransdate = " && Year(je.trans_date) = " . date('Y', strtotime($_GET['date']))
                    . " && Month(je.trans_date)=" . date('m', strtotime($_GET['date']));
        } elseif ($_GET['searchtype'] == 'annual') {
            $date = $_GET['year'];
//            $date=$nidateissued = " && Year(ni.date_issued) = " .date('Y', strtotime($_POST['year']));
            $nedateissued = " && Year(ne.date_issued) = " . date('Y', strtotime($_GET['year']));
            $jetransdate = " && Year(je.trans_date) = " . date('Y', strtotime($_GET['year']));
        }
        if (isset($_GET['date'])) {
            $orgid = Session::getSession('medorgid');
            $txt = "SELECT (SELECT SUM(servicefee) FROM
                (
                SELECT(SELECT SUM( il.net_amount )/1.12 FROM tbl_invoice_lines il 
                INNER JOIN tbl_new_invoice ni ON ni.id = il.new_invoice_id 
                INNER JOIN tbl_client c on c.id = ni.client_id WHERE c.org_id = " . $orgid . " && 
                ni.status = 'posted' && task_id IS NOT NULL " . $nidateissued . ") 
                as servicefee 
                UNION 
                SELECT(SELECT sum(jl.debit + jl.credit) FROM tbl_journal_lines jl 
                INNER JOIN tbl_journal_entry je ON je.id = jl.journal_entry_id 
                INNER JOIN tbl_coa coa ON coa.account_num = jl.account_code 
                WHERE je.org_id = " . $orgid . " && coa.account_num = '6017' && je.trans_date" . $jetransdate . ") as servicefee
                ) as fee) AS servicefee,
		(SELECT  SUM(sales) FROM
         		(
                SELECT( SELECT SUM( il.net_amount ) / 1.12 AS amount FROM tbl_invoice_lines il 
                INNER JOIN tbl_new_invoice ni ON ni.id = il.new_invoice_id 
                INNER JOIN tbl_client c on c.id = ni.client_id WHERE c.org_id = " . $orgid . " && ni.status = 'posted' 
                &&  item_id IS NOT NULL" . $nidateissued . ")  AS sales 
                UNION
                SELECT(SELECT sum(jl.debit + jl.credit) FROM tbl_journal_lines jl 
                INNER JOIN tbl_journal_entry je ON je.id = jl.journal_entry_id 
                INNER JOIN tbl_coa coa ON coa.account_num = jl.account_code 
                WHERE je.org_id = " . $orgid . " && coa.account_num = '4000' && je.trans_date" . $jetransdate . ") as sales
                ) as sale
        )as sales,
		(SELECT  SUM(cost_sale) FROM
         (
              SELECT (SELECT SUM(el.net_amount) / 1.12  FROM tbl_expense_lines el 
              INNER JOIN tbl_new_expense ne ON ne.id = el.new_expense_id 
              INNER JOIN tbl_supplier s ON s.id = ne.supplier_id 
              INNER JOIN tbl_coa coa ON coa.id = el.coa_id WHERE s.org_id=" . $orgid . " && coa.account_num = '6017' 
              && ne.date_issued" . $nedateissued . " && ne.status = 'posted' ) as cost_sale
              UNION
              SELECT(SELECT sum(jl.debit + jl.credit)/1.12 FROM tbl_journal_lines jl 
                INNER JOIN tbl_journal_entry je ON je.id = jl.journal_entry_id 
                INNER JOIN tbl_coa coa ON coa.id = jl.account_code 
                WHERE je.org_id = " . $orgid . " && coa.account_num = '6017' && je.trans_date" . $jetransdate . ") as cost_sale
       ) as cost_sales
         )as cost_sales,
		(SELECT  SUM(cost_except_cost_sale) FROM
         (
              SELECT (SELECT SUM(el.net_amount) / 1.12 as cost_except_cost_sales FROM tbl_expense_lines el 
              INNER JOIN tbl_new_expense ne ON ne.id = el.new_expense_id 
              INNER JOIN tbl_supplier s ON s.id = ne.supplier_id 
              INNER JOIN tbl_coa coa ON coa.id = el.coa_id 
              WHERE s.org_id=" . $orgid . " && coa.account_num NOT IN ('6017','6008')
              && ne.date_issued" . $nedateissued . " && ne.status = 'posted' ) as cost_except_cost_sale
              UNION
              SELECT(SELECT sum(jl.debit + jl.credit)/1.12 FROM tbl_journal_lines jl 
                INNER JOIN tbl_journal_entry je ON je.id = jl.journal_entry_id 
                INNER JOIN tbl_coa coa ON coa.id = jl.account_code 
              WHERE je.org_id = " . $orgid . " && coa.account_type='Expense' 
              && coa.account_num NOT IN ('6017','6008') && je.trans_date" . $jetransdate . ") as cost_except_cost_sale
       ) as cost_except_cost_sales
         )as cost_except_cost_sales
		";
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);

            if (!isset($result))
                return false;

            $value = new stdClass();

            foreach ($result as $item) {
                $value->servicefee = $item['servicefee'];
                $value->sales = $item['sales'];
                $value->cost_sales = $item['cost_sales'];
                $value->cost_except_cost_sales = $item['cost_except_cost_sales'];
                $value->date = $date;
            }

            return $value;
        }
    }

    function sales() {
        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('medorgid'));
        $year = $_POST['year'];
//        $month = '11';
        $month = date('m', strtotime($_POST['month']));
        $array = array();
        if (in_array($month, array(03, 06, 09, 12))) {

            $return = array();
            $months = array();
            $count = 1;
            $months[] = $month;
            while ($count <= 2) {
                $months[] = sprintf('%1$02d', $month - $count);
                $count++;
            }
            foreach ($coas as $coa) {
                $sales = 0;
                $data = new stdClass();
                $result = '';
                foreach ($months as $month) {
                    $sqlQuery = new SqlQuery($this->sqlSales($coa->id, $month, $year));
                    $result = QueryExecutor::execute($sqlQuery);
                    $sales += $result[0]['sales'];
                }

                $data->accountName = $coa->accontName;
                $data->sales = $sales;
                $data->io = $sales * 0.12;

                $return[] = $data;
            }
        } else {
            $sales = 0;
            foreach ($coas as $coa) {
                $data = new stdClass();
                $sqlQuery = new SqlQuery($this->sqlSales($coa->id, $month, $year));
                $result = QueryExecutor::execute($sqlQuery);
                $data->accountName = $coa->accontName;
                $data->sales = $result[0]['sales'];
                $data->io = $result[0]['sales'] * 0.12;
                $return[] = $data;
//                echo $result[0]['sales'];
            }
        }
        return $return;
    }

    function quarterly() {
        $orgId = Session::getSession('medorgid');


        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('medorgid'));
        $year = $_POST['year'];
        $month = date('m', strtotime($_POST['month']));
        $form2550q = new TblForm2550q();
        if (in_array($month, array('03', '06', '09', '12'))) {
            $return = array();
            $months = array();
            $count = 1;
            $months[] = $month;
            while ($count <= 2) {
                $months[] = sprintf('%1$02d', $month - $count);
                $count++;
            }
            // foreach ($coas as $coa) {nn
            // $sales = 0;
            // $data = new stdClass();
            // $result = '';
            foreach ($months as $month) {
                $sqlQuery = new SqlQuery($this->sqlSales($orgId, $month, $year));
                $results = QueryExecutor::execute($sqlQuery);
//                echo $this->sqlSales($orgId, $month, $year).'<br/ >';
                if ($results) {
                    foreach ($results as $result) {
//                        if ($result['itr_item'] == '15') {
//                            $form2550q->part2Item15A += $result['amount'];
//                        }
//                        elseif($result['itr_item'] == '18A'){
//                            $form2550q->part2Item21A += $result['amount'];
//                        }
//                        elseif ($result['itr_item'] == '18I') {
//                            $form2550q->part2Item21I += $result['amount'];
//                        } elseif ($result['itr_item'] == '18E') {
//                            $form2550q->part2Item21E += $result['amount'];
//                        } elseif ($result['itr_item'] == '18M') {
//                            $form2550q->part2Item21M += $result['amount'];
//                        }

                        if ($result['itr_item'] == "12A") {
                            $form2550q->part2Item15A += $result['amount'];
                        } elseif ($result['itr_item'] == "18A") {
                            $form2550q->part2Item21A += $result['amount'];
                        } else if ($result['itr_item'] == "18E") {
                            $form2550q->part2Item21E += $result['amount'];
                        } else if ($result['itr_item'] == "18I") {
                            $form2550q->part2Item21I += $result['amount'];
                        } else if ($result['itr_item'] == "18M") {
                            $form2550q->part2Item21M += $result['amount'];
                        } else if ($result['itr_item'] == "15") {
                            $form2550q->part2Item18 += $result['amount'];
                        }
//                        else if ($result->itr_item == "15M") {
//                            $form2550q->part2Item15B = $result['amount'];
//                        }
                    }
                }
            }
        }
//         print_r($form2550q);
        // exit;
        return $form2550q;
    }

    function sqlSales($orgId, $month, $year) {
        return "select _2550M.date_issued, _2550M.itr_item, sum(_2550M.amount) as amount
                        from (
                        /*EXPENSE*/
                        select expense.date_issued, expense.vat_type, expense.account_num,
                                            case when expense.account_num like ('%1002-001%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%1002-002%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%1002-003%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6000-005%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6000-006%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6000-007%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-001%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-005%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-006%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-009%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-012%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-014%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-016%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-017%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-019%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-020%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-021%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-022%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-024%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-025%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-026%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-029%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-032%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-033%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-034%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-035%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%1007-001%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6000-003%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6001-011%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6001-018%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6001-023%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%1004-001%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-002%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-004%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-006%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-008%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-010%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-012%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1006-001%') and expense.vat_type = 'Vat' then '18A'
                                                                else '18M'
                                                                end as 'itr_item',
                              sum(expense.amount) as amount
                        from ( select tbl_coa.account_num, tbl_coa.accont_name, 
                                                                  case when tbl_new_expense.date_reversed like '0000-00-00' 
                                                                            then tbl_new_expense.date_issued
                                                                  else tbl_new_expense.date_reversed 
                                                                  end as date_issued,
                                                                  case when tbl_expense_lines.vat_id = 9 
                                                                                 then 'Vat' 
                                                                  else 'Exempt' 
                                                                  end as vat_type,	 
                                                                  case when (case when tbl_expense_lines.vat_id = 9 then 'Vat' else 'Exempt' end) = 'Vat' 
                                                                                 then ((case when tbl_new_expense.`status` like '%reversed%' then tbl_expense_lines.net_amount *-1 else tbl_expense_lines.net_amount end)/1.12) 
                                                                  else tbl_expense_lines.net_amount 
                                                                  end as amount
                                          from tbl_new_expense
                                          inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id = " . $orgId . " and tbl_new_expense.`status` in ('posted','reversed')
                                          inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id
                                          inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id
                                          where tbl_coa.account_num in 	('1002-001','1002-002','1002-003','1004-001','1004-002','1004-004','1004-006','1004-008','1004-010','1004-012','1006-001','1007-001','6000-003',
                                                                                                                                 '6000-005','6000-006','6000-007','6001-001','6001-005','6001-006','6001-009','6001-011','6001-012','6001-014','6001-016','6001-017','6001-018',
                                                                                                                                 '6001-019','6001-020','6001-021','6001-022','6001-023','6001-024','6001-025','6001-026','6001-029','6001-032','6001-033','6001-034','6001-035')
                                )expense
                        group by expense.date_issued, expense.vat_type, itr_item, expense.account_num

                        union all

                        /*JOURNAL*/
                        select journal.trans_date, journal.Vat_type, journal.account_num, journal.irt_item, sum(journal.amount) as amount
                           from (  select tbl_journal_entry.trans_date, tbl_coa.account_num, 'Vat'as Vat_type,
                                                                        case when tbl_coa.account_num like ('%1004-001%')  then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-002%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-004%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-006%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-008%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-010%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-012%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1006-001%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1007-001%') then '18E'
                                                                                        when tbl_coa.account_num like ('%6000-005%') then '18I'
                                                                                        when tbl_coa.account_num like ('%4001-003%') then '12A'
                                                                        end as 'irt_item',	
                                                                        case when tbl_coa.account_num like ('%1004-001%')  then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-002%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-004%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-006%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-008%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-010%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-012%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1006-001%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1007-001%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%6000-005%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%4001-003%') then (tbl_journal_lines.credit - tbl_journal_lines.debit)
                                                                        end as 'amount'		
                                                        from tbl_coa
                                                   inner join tbl_journal_lines on tbl_coa.id = tbl_journal_lines.account_code
                                                        inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
                                                        where  tbl_journal_entry.org_id = " . $orgId . " and tbl_coa.account_num in ('1004-001','1004-002','1004-004','1004-006','1004-008','1004-010',
                                                                                                                                                                                                                                                                        '1004-012','1006-001','1007-001','4001-003','6000-005')
                                         )journal
                                                        group by journal.trans_date, journal.irt_item, journal.account_num

                        union all 

                        /*PATIENT*/
                                select patient.date_issued, patient.vat, 'account_num' as account_num, patient.itr_item, 
                                                                (sum(patient.amount) - sum(patient.dis_amount)) as amount
                                        from(	 select case when tbl_new_invoice.date_reversed like '0000-00-00' 
                                                                              then tbl_new_invoice.date_issued
                                                                       else tbl_new_invoice.date_reversed 
                                                                       end as date_issued,
                                                                       tbl_invoice_lines.vat, 
                                                                                 case when tbl_invoice_lines.vat = 'Vatable' then '12A'
                                                                                 else  15
                                                                                 end as itr_item,
                                                                                 case when tbl_new_invoice.`status`like 'reversed' 
                                                                                      then (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)*-1
                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)
                                                                                end as amount,
                                                                                 case when tbl_new_invoice.`status`like 'reversed' 
                                                                                                then (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)*-1
                                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)
                                                                                                end as dis_amount
                                                                from tbl_invoice_lines

                                                                inner join tbl_new_invoice on tbl_invoice_lines.new_invoice_id = tbl_new_invoice.id and tbl_new_invoice.mop_id in (1,4) and tbl_new_invoice.`status` in ('posted','reversed')
                                                                inner join tbl_client on tbl_new_invoice.client_id = tbl_client.id and tbl_client.org_id = " . $orgId . "
                                                )patient

                        union all

                        /*HMO*/
                                                select hmo.date_received, hmo.vat, 'account_num' as account_num, hmo.itr_item, 
                                                      (sum(hmo.amount) - sum(hmo.dis_amount)) as amount
                                                from (
                                                      select case when a.date_reversed like '0000-00-00' 
                                                                            then a.date_received
                                                                       else a.date_reversed 
                                                                       end as date_received,
                                                                                 tbl_invoice_lines.net_amount, 
                                                                                 tbl_invoice_lines.vat,
                                                             case when tbl_invoice_lines.vat = 'Vatable' then '12A'
                                                                                 else  15
                                                                                 end as itr_item,
                                                                                 a.`status`,
                                                                                  case when a.`status`like 'reversed' 
                                                                                      then (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)*-1
                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)
                                                                                end as amount,
                                                                                 case when a.`status`like 'reversed' 
                                                                                                then (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)*-1
                                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)
                                                                                                end as dis_amount
                                                   from tbl_enter_payment a 
                                                                inner join tbl_all_collection b on a.id = b.enter_payment_id
                                                                inner join tbl_invoice_amount on b.invoiced_amount_id = tbl_invoice_amount.id
                                                                inner join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
                                                                inner join tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
                                                                inner join tbl_invoice_lines on tbl_new_invoice.id = tbl_invoice_lines.new_invoice_id
                                                                inner join tbl_hmo c on a.hmo_id = c.id and c.org_id = " . $orgId . "
                                                        )hmo
                                                group by hmo.date_received, hmo.vat
                                )_2550M	
                                WHERE MONTH(_2550M.date_issued) =" . $month . " && YEAR(_2550M.date_issued) =" . $year . "
                        group by month(_2550M.date_issued), _2550M.itr_item";
    }

    static function balanceSheet($orgid, $datesearch, $searchtype) {
//        $orgid = Session::getSession('medorgid');
//        echo $orgid;
        $date = $cdateissued = $nedateissued = $epreceived = $jetransdate = $nidateissued = '';
        if ($searchtype == 'monthly') {
            $date = date('F', strtotime($datesearch)) . ' - ' . date('Y', strtotime($datesearch));
            if (date('m', strtotime($datesearch)) > 1) {
                $cdate = " tbl_trial_balance_trans.date >= '" . date('Y', strtotime($datesearch)) . "-01-01' "
                        . "&& tbl_trial_balance_trans.date <='" . date('Y-m', strtotime($datesearch)) . "-31'";
            } else {
                $cdate = " Year(tbl_trial_balance_trans.date) = " . date('Y', strtotime($datesearch))
                        . " && Month(tbl_trial_balance_trans.date)=" . date('m', strtotime($datesearch));
            }


//            $cdateissued = " Year(c.date_issued) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(c.date_issued)=" . date('m', strtotime($_POST['date']));
//            $nedateissued = " Year(tbl_new_expense.date_issued) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(tbl_new_expense.date_issued)=" . date('m', strtotime($_POST['date']));
//
//            $nidateissued = " Year(a.date_issued) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(a.date_issued)=" . date('m', strtotime($_POST['date']));
//
//            $jetransdate = " && Year(tbl_journal_entry.trans_date) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(tbl_journal_entry.trans_date)=" . date('m', strtotime($_POST['date']));
//            $epreceived = " Year(a.date_received) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(a.date_received)=" . date('m', strtotime($_POST['date']));
//            $rectransdate = " Year(rec.trans_date) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(rec.trans_date)=" . date('m', strtotime($_POST['date']));
//            $dtransdate = " Year(d.trans_date) = " . date('Y', strtotime($_POST['date']))
//                    . " && Month(d.trans_date)=" . date('m', strtotime($_POST['date']));
        } elseif ($searchtype == 'annual') {
//            $date = $date;
            $date = $datesearch;
            $cdate = " Year(tbl_trial_balance_trans.date) = " . $datesearch;
//            $cdateissued = " Year(c.date_issued) = " . $_POST['year'];
//            $nedateissued = " Year(tbl_new_expense.date_issued) = " . $_POST['year'];
//            $nidateissued = " Year(a.date_issued) = " . $_POST['year'];
//            $jetransdate = " && Year(tbl_journal_entry.trans_date) = " . $_POST['year'];
//            $epreceived = " Year(a.date_received) = " . $_POST['year'];
//            $rectransdate = " Year(rec.trans_date) = " . $_POST['year'];
//            $dtransdate = " Year(d.trans_date) = " . $_POST['year'];
        }
//        echo $cdate;
        $txt = "
                select B_S.date, 
                                        B_S.account_code,
                                        sum(B_S.CCE) as CCE,
                                        sum(B_S.AR) as AR,
                                        sum(B_S.OCA) as OCA,
                                        sum(B_S.LTI) as LTI,
                                        sum(B_S.PPE) as PPE,
                                        sum(B_S.LTR) as LTR,
                                        sum(B_S.IA) as IA,
                                        sum(B_S.OA) as OA,
                                        sum(B_S.AP) as AP,
                                        sum(B_S.AE) as AE,
                                        sum(B_S.ITP) as ITP,
                                        sum(B_S.OCL) as OCL,
                                        sum(B_S.LTB) as LTB,
                                        sum(B_S.DC) as DC,
                                        sum(B_S.OL) as OL,
                                        sum(B_S.Capital) as capital,
                                        sum(B_S.NOIL) as NOIL,
                                        sum(B_S.Drawing) as Drawing

                from (	
                                        select 	tbl_trial_balance_trans.date, tbl_coa.account_num,
                                                                case when tbl_coa.account_num like '%1000%' then 1000
                                                                                 when tbl_coa.account_num like '%1001%' then 1001
                                                                                 when tbl_coa.account_num like '%1002%' then 1002
                                                                                 when tbl_coa.account_num like '%1003%' then 1003
                                                                                 when tbl_coa.account_num like '%1004%' then 1004
                                                                                 when tbl_coa.account_num like '%1005%' then 1005
                                                                                 when tbl_coa.account_num like '%1006%' then 1006
                                                                                 when tbl_coa.account_num like '%1007%' then 1007
                                                                                 when tbl_coa.account_num like '%2000-001%' then '2000-001'
                                                                                 when tbl_coa.account_num like '%2000-002%' then '2000-002'
                                                                                 when tbl_coa.account_num like '%2000-010%' then '2000-010'
                                                                                 when tbl_coa.account_num like '%2000-003%' then '2000-003'
                                                                                 when tbl_coa.account_num like '%2000-004%' then '2000'
                                                                                 when tbl_coa.account_num like '%2000-005%' then '2000'
                                                                                 when tbl_coa.account_num like '%2000-006%' then '2000'
                                                                                 when tbl_coa.account_num like '%2000-007%' then '2000'
                                                                                 when tbl_coa.account_num like '%2000-008%' then '2000'
                                                                                 when tbl_coa.account_num like '%2000-009%' then '2000'	
                                                                                 when tbl_coa.account_num like '%2001%' then 2001
                                                                         when tbl_coa.account_num like '%2002%' then 2002
                                                                                 when tbl_coa.account_num like '%2003%' then 2003
                                                                                 when tbl_coa.account_num like '%3000%' then 3000
                                                                                 when tbl_coa.account_num like '%3001%' then 3001
                                                                                 when tbl_coa.account_num like '%3002%' then 3002
                                                                end as account_code,
                                                                case when tbl_coa.account_num like '%1000%' then tbl_trial_balance.balance end as 'CCE',
                                                                case when tbl_coa.account_num like '%1001%' then tbl_trial_balance.balance end as 'AR',
                                                                case when tbl_coa.account_num like '%1002%' then tbl_trial_balance.balance end as 'OCA',
                                                                case when tbl_coa.account_num like '%1003%' then tbl_trial_balance.balance end as 'LTI',
                                                                case when tbl_coa.account_num like '%1004%' then tbl_trial_balance.balance end as 'PPE',
                                                                case when tbl_coa.account_num like '%1005%' then tbl_trial_balance.balance end as 'LTR',
                                                                case when tbl_coa.account_num like '%1006%' then tbl_trial_balance.balance end as 'IA',
                                                                case when tbl_coa.account_num like '%1007%' then tbl_trial_balance.balance end as 'OA',
                                                                case when tbl_coa.account_num like '%2000-001%' then tbl_trial_balance.balance * -1 end as 'AP',
                                                                case when tbl_coa.account_num like '%2000-002%' then tbl_trial_balance.balance * -1 end as 'AE',
                                                                case when tbl_coa.account_num like '%2000-010%' then tbl_trial_balance.balance * -1 end as 'ITP',
                                                                case when tbl_coa.account_num like '%2001%' then tbl_trial_balance.balance * -1 end as 'LTB',
                                                                case when tbl_coa.account_num like '%2002%' then tbl_trial_balance.balance * -1 end as 'DC',
                                                                case when tbl_coa.account_num like '%2003%' then tbl_trial_balance.balance * -1 end as 'OL',
                                                                case when tbl_coa.account_num like '%3000%' then tbl_trial_balance.balance * -1 end as 'Capital',
                                                                case when tbl_coa.account_num like '%3001%' then tbl_trial_balance.balance * -1 end as 'NOIL',
                                                                case when tbl_coa.account_num like '%3002%' then tbl_trial_balance.balance end as 'Drawing',
                                                                case when tbl_coa.account_num like '%2000-003%' then tbl_trial_balance.balance * -1
                                                                                 when tbl_coa.account_num like '%2000-004%' then tbl_trial_balance.balance * -1
                                                                                 when tbl_coa.account_num like '%2000-005%' then tbl_trial_balance.balance * -1
                                                                                 when tbl_coa.account_num like '%2000-006%' then tbl_trial_balance.balance * -1
                                                                                 when tbl_coa.account_num like '%2000-007%' then tbl_trial_balance.balance * -1
                                                                                 when tbl_coa.account_num like '%2000-008%' then tbl_trial_balance.balance * -1
                                                                                 when tbl_coa.account_num like '%2000-009%' then tbl_trial_balance.balance * -1
                                                                end as 'OCL'

                                        from tbl_trial_balance

                                        inner join tbl_coa on tbl_trial_balance.coa_id = tbl_coa.id
                                        inner join tbl_trial_balance_trans on tbl_trial_balance.id = tbl_trial_balance_trans.trial_balance_id

                                        where tbl_coa.org_id = " . $orgid . " and tbl_coa.account_num in (1000, 1001, 1002, 1003, 1004, 1005, 1006, 1007, 2000, 2001, 2002, 2003, 3000, 3001, 3002) 
                                        && " . $cdate . "
                     )B_S	
                group by month(B_S.date), year(B_S.date)
                         

		";
//exit;      
//        echo $txt;//exit;
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (!isset($result))
            return false;

        $value = (object) array("CCE" => 0, "AR" => 0, "OCA" => 0, "LTI" => 0, "PPE" => 0, "LTR" => 0,
                    "IA" => 0, "OA" => 0, "AP" => 0, "AE" => 0, "ITP" => 0, "OCL" => 0, "LTB" => 0,
                    "DC" => 0, "OL" => 0, "capital" => 0, "NOIL" => 0, "Drawing" => 0, "date" => 0,
                    "totalcurrentasset" => 0, "totalnoncurrentasset" => 0, "totalasset" => 0,
                    "totalcurrentliability" => 0, "totalnoncurrentliability" => 0, "totalliability" => 0,
                    "totalcapital" => 0, "net" => 0);
//            print_r($result);
//exit;
        foreach ($result as $item) {
//                $value->incomeTaxPayable = $item['Income_Tax_Payable'];
            $value->CCE += $item['CCE'];
            $value->AR += $item['AR'];
            $value->OCA += $item['OCA'];
            $value->LTI += $item['LTI'];
            $value->PPE += $item['PPE'];
            $value->LTR += $item['LTR'];
            $value->IA += $item['IA'];
            $value->OA += $item['OA'];
//               $value->netOperatingIncomeLoss = $item['Net_Operating_Income_Loss'];
            $value->AP += $item['AP'];
            $value->AE += $item['AE'];
            $value->ITP = $item['ITP'];
//                $value->outputVat = $item['Output_Vat'];
            $value->OCL += $item['OCL'];
            $value->LTB += $item['LTB'];
            $value->DC += $item['DC'];
            $value->OL += $item['OL'];
            $value->capital += $item['capital'];
            $value->NOIL += $item['NOIL'];
            $value->Drawing += $item['Drawing'];
        }
        $value->date = $date;
        $value->totalcurrentasset = $value->CCE + $value->AR + $value->OCA;
        $value->totalnoncurrentasset = $value->LTI + $value->PPE + $value->LTR + $value->IA + $value->OA;
        $value->totalasset = $value->totalcurrentasset + $value->totalnoncurrentasset;

        $value->totalcurrentliability = $value->AP + $value->AE + $value->ITP + $value->OCL;
        $value->totalnoncurrentliability = $value->LTB + $value->DC + $value->OL;
        $value->totalliability = $value->totalcurrentliability + $value->totalnoncurrentliability;

        $net = self::incomeStatement($orgid, $datesearch, $searchtype);
        $value->net = $net->net;

        $value->capital += ($searchtype=='monthly')? self::netIncomeStatement($orgid, $datesearch, $searchtype):0;
        $value->totalcapital = $value->capital + $value->net + $value->Drawing;
//			 print_r($value);
        return $value;
    }

    static function netIncomeStatement($orgid, $datesearch, $searchtype) {
        $netincloss = 0;
        if ($searchtype == 'monthly') {
            $month = date('Y-m', strtotime($datesearch . ' -1 months'));
//        echo date('M', strtotime($month));
            for ($x = (int) date('m', strtotime($month)); $x > 0; $x--) {
//            echo $month;
                $is = self::incomeStatement($orgid, $month, $searchtype);
                $netincloss += $is->net;
                $month = date('Y-m', strtotime($month . ' -1 months'));
//            print_r($is);
            }
        }

        return $netincloss;
    }

    function exportBalanceSheet() {
        /* $orgid = Session::getSession('orgid');
          $date = $cdateissued = $nedateissued = $epreceived = $jetransdate = '';
          if ($_GET['searchtype'] == 'monthly') {
          $date = date('F', strtotime($_GET['date'])) . ' - ' . date('Y', strtotime($_GET['date']));
          $cdateissued = " Year(c.date_issued) = " . date('Y', strtotime($_GET['date']))
          . " && Month(c.date_issued)=" . date('m', strtotime($_GET['date']));
          $nedateissued = " Year(b.date_issued) = " . date('Y', strtotime($_GET['date']))
          . " && Month(b.date_issued)=" . date('m', strtotime($_GET['date']));

          $jetransdate = " && Year(tbl_journal_entry.trans_date) = " . date('Y', strtotime($_GET['date']))
          . " && Month(tbl_journal_entry.trans_date)=" . date('m', strtotime($_GET['date']));
          $epreceived = " Year(a.date_received) = " . date('Y', strtotime($_GET['date']))
          . " && Month(a.date_received)=" . date('m', strtotime($_GET['date']));
          } elseif ($_GET['searchtype'] == 'annual') {
          $date = $_GET['year'];
          $cdateissued = " Year(c.date_issued) = " .date('Y', strtotime($_GET['year']));
          $nedateissued = " Year(b.date_issued) = " . date('Y', strtotime($_GET['year']));
          $jetransdate = " && Year(tbl_journal_entry.trans_date) = " . date('Y', strtotime($_GET['year']));
          $epreceived = " Year(a.date_received) = " . date('Y', strtotime($_GET['year']));
          }

          $txt = "
          select sum(asset.Income_Tax_Payable) as Income_Tax_Payable, sum(asset.Property_and_Equipment) as Property_and_Equipment,
          sum(asset.Proprietors_Capital) as Proprietors_Capital, sum(asset.Net_Operating_Income_Loss) as Net_Operating_Income_Loss,
          sum(asset.Personal_Drawings) as Personal_Drawings, sum(asset.cash) as Cash,
          sum(asset.other_assets) as 'Other_Assets' , sum(asset.output_vat) as Output_Vat , sum(asset.receivable) as Receivable
          from(
          select sum(journal.Income_Tax_Payable) as Income_Tax_Payable,
          sum(journal.Property_and_Equipment) as Property_and_Equipment,
          sum(journal.Proprietors_Capital) as Proprietors_Capital ,
          sum(journal.Net_Operating_Income_Loss) as Net_Operating_Income_Loss,
          sum(journal.Personal_Drawings) as Personal_Drawings ,'cash','other_assets','output_vat','receivable'
          from (
          select case when tbl_coa.account_num like '%2002%' then (tbl_journal_lines.debit + tbl_journal_lines.credit) end as 'Income_Tax_Payable',
          case when tbl_coa.account_num like '%1003%' then (tbl_journal_lines.debit - tbl_journal_lines.credit) end as 'Property_and_Equipment',
          case when tbl_coa.account_num like '%3002%' then (tbl_journal_lines.debit + tbl_journal_lines.credit) end as 'Proprietors_Capital',
          case when tbl_coa.account_num like '%3000%' then (tbl_journal_lines.debit + tbl_journal_lines.credit) end as 'Net_Operating_Income_Loss',
          case when tbl_coa.account_num like '%3001%' then (tbl_journal_lines.debit + tbl_journal_lines.credit) end as 'Personal_Drawings'
          from tbl_coa

          inner join tbl_journal_lines on tbl_coa.id = tbl_journal_lines.account_code
          inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
          where  tbl_journal_entry.org_id = " . $orgid . " and tbl_coa.account_num in (2002, 1003, 3002, 3000, 3001)
          ".$jetransdate."
          )journal

          union all

          select  '','','','','',b.applied_amount as cash, b.wht_amount as 'other_assets','',''
          from tbl_enter_payment a
          inner join tbl_all_collection b on a.id = b.enter_payment_id
          inner join tbl_hmo c on a.hmo_id = c.id and c.org_id = " . $orgid . "
          where ".$epreceived."

          union all

          select '','','','','',sum(a.grand_total) as cash, '',sum(a.vat_amount) as p_vat,''
          from tbl_invoice_amount a
          inner join tbl_all_invoice b on a.all_invoice_id = b.id
          inner join tbl_new_invoice c on b.new_invoice_id = c.id and c.mop_id in (1,4) and c.`status` like '%posted%'
          inner join tbl_client d on c.client_id = d.id and d.org_id = " . $orgid . "
          where ".$cdateissued."

          Union all

          select '','','','','','','', sum(a.vat_amount) as p_vat, ''
          from tbl_invoice_amount a
          inner join tbl_all_invoice b on a.all_invoice_id = b.id
          inner join tbl_new_invoice c on b.new_invoice_id = c.id and c.`status` like '%posted%'
          inner join tbl_hmo d on c.hmo_id = d.id and d.org_id = " . $orgid . "
          where ".$cdateissued."

          Union all

          select '','','','','','','','',a.grand_total as receivable
          from tbl_invoice_amount a
          inner join tbl_all_invoice b on a.all_invoice_id = b.id
          inner join tbl_new_invoice c on b.new_invoice_id = c.id and c.`status` like '%posted%'
          inner join tbl_hmo d on c.hmo_id = d.id and d.org_id = " . $orgid . "
          where a.id not in (select  b.invoiced_amount_id	from tbl_all_collection b)
          and ".$cdateissued."

          union all

          select '','','','','','', sum(a.vat_amount) as 'other_assets','' ,''
          from tbl_expense_amount a
          inner join tbl_new_expense b on a.new_expense_id = b.id and b.`status` like '%posted%'
          inner join tbl_supplier c on b.supplier_id = c.id and c.org_id = " . $orgid . "
          where ".$nedateissued."

          )asset";

          $sqlQuery = new SqlQuery($txt);
          $result = QueryExecutor::execute($sqlQuery);

          if (!isset($result))
          return false;

          $value = new stdClass();

          foreach ($result as $item) {
          $value->incomeTaxPayable = $item['Income_Tax_Payable'];
          $value->propertyAndEquipment = $item['Property_and_Equipment'];
          $value->proprietorsCapital = $item['Proprietors_Capital'];
          $value->netOperatingIncomeLoss = $item['Net_Operating_Income_Loss'];
          $value->personalDrawings = $item['Personal_Drawings'];
          $value->cash = $item['Cash'];
          $value->otherAssets = $item['Other_Assets'];
          $value->outputVat = $item['Output_Vat'];
          $value->receivable = $item['Receivable'];
          $value->date = $date;
          }

          return $value; */

        $orgid = Session::getSession('medorgid');
        $date = $cdateissued = $nedateissued = $epreceived = $jetransdate = $nidateissued = '';
        if ($_POST['searchtype'] == 'monthly') {

            $date = date('F', strtotime($_POST['date'])) . ' - ' . date('Y', strtotime($_POST['date']));
            $cdateissued = " Year(c.date_issued) = " . date('Y', strtotime($_POST['date']))
                    . " && Month(c.date_issued)=" . date('m', strtotime($_POST['date']));
            $nedateissued = " Year(tbl_new_expense.date_issued) = " . date('Y', strtotime($_POST['date']))
                    . " && Month(tbl_new_expense.date_issued)=" . date('m', strtotime($_POST['date']));

            $nidateissued = " Year(a.date_issued) = " . date('Y', strtotime($_POST['date']))
                    . " && Month(a.date_issued)=" . date('m', strtotime($_POST['date']));

            $jetransdate = " && Year(tbl_journal_entry.trans_date) = " . date('Y', strtotime($_POST['date']))
                    . " && Month(tbl_journal_entry.trans_date)=" . date('m', strtotime($_POST['date']));
            $epreceived = " Year(a.date_received) = " . date('Y', strtotime($_POST['date']))
                    . " && Month(a.date_received)=" . date('m', strtotime($_POST['date']));
        } elseif ($_POST['searchtype'] == 'annual') {
            $date = $_POST['year'];
            $cdateissued = " Year(c.date_issued) = " . $_POST['year'];
            $nedateissued = " Year(tbl_new_expense.date_issued) = " . $_POST['year'];
            $nidateissued = " Year(a.date_issued) = " . $_POST['year'];
            $jetransdate = " && Year(tbl_journal_entry.trans_date) = " . $_POST['year'];
            $epreceived = " Year(a.date_received) = " . $_POST['year'];
        }

        $txt = "select bs.trans_date,
                bs.account_num,
                sum(bs.Other_Assets) as Other_Assets,
                sum(bs.Property_and_Equipment) as Property_and_Equipment,
                sum(bs.Proprietors_Capital) as Proprietors_Capital,
                sum(bs.Retained_Earnings) as Retained_Earnings,
                sum(bs.Personal_Drawings) as Personal_Drawings,
                sum(bs.Account_Payable) as Account_Payable,
                sum(bs.Accrued_expense) as Accrued_expense,
                sum(bs.Compensation) as Compensation,
                (sum(bs.j_Expanded) + sum(bs.expanded )) as Expanded,
                (sum(bs.output_vat - bs.input_vat) + sum(bs.VAT_Percentage_Payable)) as VAT_Percentage_Payable,
                ((sum(bs.h_cash) + sum(bs.p_cash) + sum(bs.Cash_on_hand)) - sum(bs.expense)) as Cash,
                sum(bs.receivable) as Receivable,
                sum(bs.wht_amount) as wht

                from(
                select journal.trans_date,
                journal.account_num,
                journal.Other_Assets,
                journal.Property_and_Equipment,
                journal.Proprietors_Capital,
                journal.Retained_Earnings,
                journal.Personal_Drawings,
                journal.Account_Payable,
                journal.Accrued_expense,
                journal.VAT_Percentage_Payable,
                journal.Compensation,
                journal.j_Expanded,
                journal.Cash_on_hand,
                journal.input_vat,
                journal.output_vat,
                journal.expanded,
                journal.h_cash,
                journal.p_cash,
                journal.receivable,
                journal.expense,
                journal.wht_amount


                from (
                select tbl_journal_entry.trans_date, tbl_coa.account_num,
                case when tbl_coa.account_num like '%1002%' then (tbl_journal_lines.debit - tbl_journal_lines.credit) end as 'Other_Assets',
                case when tbl_coa.account_num like '%1003%' then (tbl_journal_lines.debit - tbl_journal_lines.credit) end as 'Property_and_Equipment',
                case when tbl_coa.account_num like '%3000%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'Proprietors_Capital',
                case when tbl_coa.account_num like '%3001%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'Retained_Earnings',
                case when tbl_coa.account_num like '%3002%' then (tbl_journal_lines.debit - tbl_journal_lines.credit) end as 'Personal_Drawings',
                case when tbl_coa.account_num like '%2000%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'Account_Payable',
                case when tbl_coa.account_num like '%2001%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'Accrued_expense',
                case when tbl_coa.account_num like '%2002%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'VAT_Percentage_Payable',
                case when tbl_coa.account_num like '%2003%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'Compensation',
                case when tbl_coa.account_num like '%2004%' then (tbl_journal_lines.credit - tbl_journal_lines.debit) end as 'j_Expanded',
                case when tbl_coa.account_num like '%1000%' then (tbl_journal_lines.debit - tbl_journal_lines.credit) end as 'Cash_on_hand',
                'input_vat',
                'output_vat',
                'expanded',
                'h_cash',
                'p_cash',
                'receivable',
                'expense',
                'wht_amount'

                from tbl_coa

                inner join tbl_journal_lines on tbl_coa.id = tbl_journal_lines.account_code
                inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
                where  tbl_journal_entry.org_id = " . $orgid . " and tbl_coa.account_num in (1002, 1003, 3000, 3001, 3002, 2000, 2001, 2002, 2003, 2004, 1000)
                " . $jetransdate . ")journal

                union all

                /*INPUT*/
                select tbl_new_expense.date_issued as trans_date,'','','','','','','','','','','','',
                sum(tbl_expense_amount.vat_amount) as input_vat,'','','','','','',''
                from tbl_new_expense
                inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id = " . $orgid . " and tbl_new_expense.`status` like '%posted%'
                inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_expense_amount.vat_amount <>0
                where " . $nedateissued . " group by tbl_new_expense.date_issued  

                union all

                /*OITPUT*/
                select a.date_issued as trans_date,'','','','','','','','','','','','','',
                sum(e.vat_amount) as output_vat,'','','','','',''
                from tbl_new_invoice a
                inner join tbl_client c on a.client_id = c.id and c.org_id = " . $orgid . " and a.`status` like '%posted%'
                inner join tbl_all_invoice d on a.id = d.new_invoice_id
                inner join tbl_invoice_amount e on d.id = e.all_invoice_id
                where " . $nidateissued . " group by a.date_issued

                union all

                /*EXPANDED*/
                select tbl_new_expense.date_issued as trans_date,'','','','','','','','','','','','','','',
                sum(tbl_expense_amount.EWT_amount) as expanded,'','','','',''
                from tbl_new_expense
                inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id = " . $orgid . " and tbl_new_expense.`status` like '%posted%'
                inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id and tbl_expense_amount.EWT_amount <>0 
                where " . $nedateissued . "
                group by tbl_new_expense.date_issued

                union all

                /*HMO*/
                select a.date_received,'','','','','','','','','','','','','','','',
                b.applied_amount as h_cash,'','','',b.wht_amount
                from tbl_enter_payment a
                inner join tbl_all_collection b on a.id = b.enter_payment_id
                inner join tbl_hmo c on a.hmo_id = c.id and c.org_id = " . $orgid . " 
                where a.status='posted' && " . $epreceived . "

                union all

                /*PATIENT*/
                select c.date_issued, '','','','','','','','','','','','','','','','',
                sum(a.grand_total) as p_cash, '','',''
                from tbl_invoice_amount a
                inner join tbl_all_invoice b on a.all_invoice_id = b.id
                inner join tbl_new_invoice c on b.new_invoice_id = c.id and c.mop_id in (1,4) and c.`status` like '%posted%'
                inner join tbl_client d on c.client_id = d.id and d.org_id = " . $orgid . " where " . $cdateissued . "

                union all

                select c.date_issued, '','','','','','','','','','','','','','','','','',
                a.grand_total as receivable,'',''
                from tbl_invoice_amount a
                inner join tbl_all_invoice b on a.all_invoice_id = b.id
                inner join tbl_new_invoice c on b.new_invoice_id = c.id and c.`status` like '%posted%'
                inner join tbl_hmo d on c.hmo_id = d.id and d.org_id = " . $orgid . "
                where a.id not in (select  b.invoiced_amount_id	from tbl_all_collection b
                /*additional*/      inner join tbl_enter_payment on b.enter_payment_id = tbl_enter_payment.id and tbl_enter_payment.`Status` = 'posted') && " . $cdateissued . "

                union all
                /*additional*/
                select tbl_new_expense.date_issued as trans_date, '','','','','','','','','','','','','','','','','','',
                tbl_expense_amount.grand_total,''
                from tbl_new_expense
                inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id = " . $orgid . " and tbl_new_expense.`status` like '%posted%'
                inner join tbl_expense_amount on tbl_new_expense.id = tbl_expense_amount.new_expense_id
                where " . $nedateissued . "
                )bs
                group by bs.trans_date,
                bs.account_num";

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);

        if (!isset($result))
            return false;

        $value = (object) array("accountPayable" => 0, "accruedExpense" => 0, "expanded" => 0, "retainedEarnings" => 0, "compensation" => 0, "vatPercentagePayable" => 0,
                    "propertyAndEquipment" => 0, "proprietorsCapital" => 0, "personalDrawings" => 0, "cash" => 0, "otherAssets" => 0, "receivable" => 0, "wht" => 0);

        foreach ($result as $item) {
            $value->accountPayable += $item['Account_Payable'];
            $value->accruedExpense += $item['Accrued_expense'];
            $value->expanded += $item['Expanded'];
            $value->retainedEarnings += $item['Retained_Earnings'];
            $value->compensation += $item['Compensation'];
            $value->vatPercentagePayable += $item['VAT_Percentage_Payable'];
            $value->propertyAndEquipment += $item['Property_and_Equipment'];
            $value->proprietorsCapital += $item['Proprietors_Capital'];
            $value->personalDrawings += $item['Personal_Drawings'];
            $value->cash += $item['Cash'];
            $value->otherAssets = $item['Other_Assets'];
            $value->receivable += $item['Receivable'];
            $value->wht += $item['wht'];
            $value->date = $date;
        }

        return $value;
    }

    // function itr2550m() {
    // $orgid = Session::getSession('orgid');
    // $monthly = date('m', strtotime($_POST['month']));
    // $year = date('Y', strtotime($_POST['year']));
    // $date = $cdateissued = $nedateissued = $epreceived = $jetransdate = $nidateissued = '';
    // $txt = "
    // select _2550M.date_issued, _2550M.vat_type, _2550M.itr_item, sum(_2550M.amount) as amount
    // from (
    // select expense.date_issued, expense.vat_type, 
    // case when expense.account_num like ('%6000-001%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-004%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-005%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-006%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-007%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-008%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-010%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-013%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-015%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-016%') and expense.vat_type = 'Vat' then '18I'
    // when expense.account_num like ('%6000-009%') and expense.vat_type = 'Vat' then '18E'
    // when expense.account_num like ('%6000-011%') and expense.vat_type = 'Vat' then '18E'
    // when expense.account_num like ('%6000-014%') and expense.vat_type = 'Vat' then '18E'
    // when expense.account_num like ('%6000-018%') and expense.vat_type = 'Vat' then '18E'
    // else '18M' 
    // end as 'itr_item',
    // sum(expense.amount) as amount
    // from (
    // select tbl_coa.account_num, tbl_coa.accont_name, tbl_new_expense.date_issued,
    // case when tbl_expense_lines.vat_id = 9 then 'Vat' else 'Exempt' 
    // end as vat_type,
    // case when (case when tbl_expense_lines.vat_id = 9 then 'Vat' else 'Exempt' end) = 'Vat' then (tbl_expense_lines.net_amount/1.12) 
    // else tbl_expense_lines.net_amount 
    // end as amount
    // from tbl_new_expense
    // inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id =  " . $orgid . " and tbl_new_expense.`status` like '%posted%'
    // inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id
    // inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id
    // where tbl_coa.account_num in ('6000-001', '6000-004', '6000-005', '6000-006', '6000-007', '6000-008', '6000-010', '6000-013', '6000-015', '6000-016', '6000-009', '6000-011', '6000-014', '6000-018')
    // )expense
    // group by expense.date_issued, expense.vat_type,itr_item
    // union all
    // select journal.trans_date, journal.Vat_type, journal.irt_item, sum(journal.amount) as amount  
    // from (  select tbl_journal_entry.trans_date, tbl_coa.account_num, 'Exempt'as Vat_type,
    // case when tbl_coa.account_num like '%1002-001%' then '18M'
    // when tbl_coa.account_num like '%1002-002%' then '18M'
    // when tbl_coa.account_num like '%1002-004%' then '18M'
    // when tbl_coa.account_num like '%1003-001%' then '18M'
    // when tbl_coa.account_num like '%1003-003%' then '18M'
    // when tbl_coa.account_num like '%1003-005%' then '18M'
    // when tbl_coa.account_num like '%1003-007%' then '18M'
    // end as 'irt_item',	 
    // case when tbl_coa.account_num like '%1002-001%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // when tbl_coa.account_num like '%1002-002%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // when tbl_coa.account_num like '%1002-004%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // when tbl_coa.account_num like '%1003-001%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // when tbl_coa.account_num like '%1003-003%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // when tbl_coa.account_num like '%1003-005%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // when tbl_coa.account_num like '%1003-007%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
    // end as 'amount'							 	 										 
    // from tbl_coa
    // inner join tbl_journal_lines on tbl_coa.id = tbl_journal_lines.account_code
    // inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
    // where  tbl_journal_entry.org_id =  " . $orgid . " and tbl_coa.account_num in ('1002-001', '1002-002', '1002-004', '1003-001', '1003-003', '1003-005', '1003-007')
    // )journal
    // group by journal.trans_date, journal.irt_item
    // union all									
    // /*PATIENT*/
    // select patient.date_issued, patient.vat, patient.itr_item, 
    // (sum(patient.amount) - sum(patient.dis_amount)) as amount
    // from (
    // select tbl_new_invoice.date_issued, tbl_invoice_lines.vat, tbl_invoice_lines.net_amount, 
    // case when tbl_invoice_lines.vat = 'Vatable' then '12A'
    // else  15
    // end as itr_item,
    // case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12
    // else tbl_invoice_lines.net_amount
    // end as 'amount',
    // case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100))
    // else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)
    // end as dis_amount
    // from tbl_invoice_lines
    // inner join tbl_new_invoice on tbl_invoice_lines.new_invoice_id = tbl_new_invoice.id and tbl_new_invoice.mop_id in (1,4) and tbl_new_invoice.`status` like '%posted%'
    // inner join tbl_client on tbl_new_invoice.client_id = tbl_client.id and tbl_client.org_id =  " . $orgid . "
    // ) patient
    // group by patient.date_issued, patient.vat
    // union all
    // /*HMO*/
    // select hmo.date_received, hmo.vat, hmo.itr_item, 
    // (sum(hmo.amount) - sum(hmo.dis_amount)) as amount
    // from (
    // select a.date_received,tbl_invoice_lines.net_amount, tbl_invoice_lines.vat,
    // case when tbl_invoice_lines.vat = 'Vatable' then '12A'
    // else  15
    // end as itr_item,
    // case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12
    // else tbl_invoice_lines.net_amount
    // end as 'amount',
    // case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100))
    // else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)
    // end as dis_amount
    // from tbl_enter_payment a 
    // inner join tbl_all_collection b on a.id = b.enter_payment_id
    // inner join tbl_invoice_amount on b.invoiced_amount_id = tbl_invoice_amount.id
    // inner join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
    // inner join tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
    // inner join tbl_invoice_lines on tbl_new_invoice.id = tbl_invoice_lines.new_invoice_id
    // inner join tbl_hmo c on a.hmo_id = c.id and c.org_id =  " . $orgid . "
    // )hmo
    // group by hmo.date_received, hmo.vat
    // )_2550M
    // WHERE MONTH(_2550M.date_issued) = " . $monthly . " AND YEAR(_2550M.date_issued) = " . $year . "
    // group by _2550M.date_issued, _2550M.vat_type, _2550M.itr_item";
    // $sqlQuery = new SqlQuery($txt);
    // $result = QueryExecutor::execute($sqlQuery);
    // if (!isset($result))
    // return false;
    // $value = (object) array("report18m" => 0, "report18e" => 0, "report18i" => 0, "report15" => 0, "report12a" => 0);
    // foreach ($result as $item) {
    // $itrItem = (object) array("report18m" => 0, "report18e" => 0, "report18i" => 0, "report15" => 0, "report12a" => 0);
    // if ($item['itr_item'] == "18M") {
    // $value->report18m = $item['amount'];
    // } else if ($item['itr_item'] == "18E") {
    // $value->report18e = $item['amount'];
    // } else if ($item['itr_item'] == "18I") {
    // $value->report18i = $item['amount'];
    // } else if ($item['itr_item'] == "15") {
    // $value->report15 = $item['amount'];
    // } else if ($item['itr_item'] == "12A") {
    // $value->report12a = $item['amount'];
    // }
    // $value->date = $date;
    // }
    // return $value;
    // }
}

?>
