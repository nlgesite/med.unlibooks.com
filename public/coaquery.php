<?php

class Coaquery {

    function cashOnHand($coaid) {
        $txt = 'UPDATE tbl_trial_balance SET debit=?';
        $txt .= 'credit=?';
        $txt .= 'WHERE coa_id = ?';
        
        $data = $this->cashOnHandData($coaid);
        
        $sqlQuery = new SqlQuery($txt);
        $sqlQuery->setNumber($data[0]->debit);
        $sqlQuery->setNumber($data[0]->credit);
        $sqlQuery->setNumber($coaid);
        
        QueryExecutor::executeUpdate($sqlQuery);
    }

    function cashOnHandData($coaid) {
        $txt = 'SELECT debit, credit, debit-credit as balance FROM 
                (
                    SELECT((SELECT SUM(ia.grand_total) FROM tbl_invoice_amount ia 
                    INNER JOIN tbl_all_invoice ai ON ai.id = ia.all_invoice_id
                    INNER JOIN tbl_new_invoice ni ON ni.id = ai.new_invoice_id 
                    INNER JOIN tbl_client c ON c.id = ni.client_id
                    INNER JOIN tbl_mop mop ON mop.id = ni.mop_id 
                    WHERE c.org_id = 220 && mop.description <>"HMO")+ 
                    (SELECT SUM( ac.applied_amount ) FROM tbl_all_collection ac 
                    INNER JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id 
                    INNER JOIN tbl_hmo hmo ON hmo.id = ep.hmo_id WHERE hmo.org_id =209) + 
                    (SELECT SUM(jl.debit) FROM tbl_journal_lines jl 
                    INNER JOIN tbl_journal_entry je ON je.id = jl.journal_entry_id 
                    INNER JOIN tbl_coa coa ON coa.id = jl.account_code 
                    WHERE je.org_id = 220 && coa.account_num = "1000-001") ) AS debit, 0 as credit 
                    UNION
                    SELECT ( (SELECT SUM(jl.credit) FROM tbl_journal_lines jl 
                    INNER JOIN tbl_journal_entry je ON je.id = jl.journal_entry_id 
                    INNER JOIN tbl_coa coa ON coa.id = jl.account_code 
                    WHERE coa.org_id = 220 && jl.account_code >= 1)+ 
                    (SELECT SUM(ea.grand_total)-SUM(ea.EWT_amount) FROM tbl_expense_amount ea 
                    INNER JOIN tbl_new_expense ne ON ne.id = ea.new_expense_id 
                    INNER JOIN tbl_supplier s ON s.id = ne.supplier_id WHERE s.org_id = 220)) AS credit, 0 as debit
                ) AS data';



        $sqlQuery = new SqlQuery($txt);
//        $sqlQuery->setNumber(Session::getSession('orgid'));
        $result = QueryExecutor::execute($sqlQuery);

        return $result;
    }

    function hmoReceivable($coaid) {
        $txt = 'UPDATE tbl_trial_balance set debit='
                . '(SELECT SUM(ia.grand_total) FROM tbl_invoice_amount ia 
                    INNER JOIN tbl_all_invoice ai 
                    ON ai.id = ia.all_invoice_id
                    INNER JOIN tbl_new_invoice ni 
                    ON ni.id = ai.new_invoice_id 
                    INNER JOIN tbl_client c 
                    ON c.id = ni.client_id 
                    INNER JOIN tbl_mop mop 
                    ON mop.id = ni.mop_id
                    WHERE c.org_id = 220 && mop.description = "HMO"),credit = 
                    (SELECT SUM( ac.applied_amount ) 
                    FROM tbl_all_collection ac
                    INNER JOIN tbl_enter_payment ep ON ep.id = ac.enter_payment_id
                    INNER JOIN tbl_hmo hmo ON hmo.id = ep.hmo_id
                    WHERE hmo.org_id =220)';
        $txt .= 'WHERE coa_id = ' . $coaid;

        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::executeUpdate($sqlQuery);

        $tb = DAOFactory::getTblTrialBalanceDAO()->queryByCoaId($coaid);
    }

}
