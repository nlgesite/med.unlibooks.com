<?php

/**
 * Class that operate on table 'tbl_recurring_lines'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblRecurringLinesMySqlExtDAO extends TblRecurringLinesMySqlDAO {

    static function getTasks($recurringid) {
        $txt = "SELECT rl.* from tbl_recurring_lines rl " .
                "INNER JOIN tbl_task t ON t.id = rl.task_id " .
                "WHERE rl.new_recurring_id = " . $recurringid;
        $sqlQuery = new SqlQuery($txt);

        return self::getData($sqlQuery);
    }

    static function getItem($recurringid) {
        $txt = "SELECT rl.* from tbl_recurring_lines rl " .
                "INNER JOIN tbl_item i ON i.id = rl.item_id " .
                "WHERE rl.new_recurring_id = " . $recurringid;
        $sqlQuery = new SqlQuery($txt);

        return self::getData($sqlQuery);
    }

    static function deleteRecurringLine($data) {
//        echo $data; exit;
        $txt = "DELETE FROM  tbl_recurring_lines WHERE id NOT IN(" . $data . ") " .
                "&& new_recurring_id = " . Session::getSession('recurringid');
        $sqlQuery = new SqlQuery($txt);

//        echo $txt; exit;
        QueryExecutor::executeUpdate($sqlQuery);
    }

    protected static function getData($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $returns = array();

        foreach ($tab as $each) {
            $invoice = new stdClass();
            $invoice->id = $each['id'];
            $invoice->newRecurringId = $each['new_recurring_id'];
            $invoice->itemId = $each['item_id'];
            $invoice->taskId = $each['task_id'];
            $invoice->description = $each['description'];
//            $invoice->taskDescription = $each['task_description'];
            $invoice->rate = $each['rate'];
            $invoice->unitCost = $each['unit_cost'];
            $invoice->hour = $each['hour'];
            $invoice->quantity = $each['quantity'];
            $invoice->netAmount = $each['net_amount'];
            $invoice->taxId = $each['tax_id'];
//            $invoice->frequency = $each['frequency'];

            $returns[] = $invoice;
        }

        return $returns;
    }
    
    static function checkItem(){
        $txt = "SELECT * FROM tbl_recurring_lines WHERE item_id IN (" .implode(',',$_POST['itemids']). ")";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
         if(count($result)>0){
            return true;
        }else{
            return false;
        }
    }
    
    static function checkTask(){
        $txt = "SELECT * FROM tbl_recurring_lines WHERE task_id IN (" .implode(',',$_POST['taskids']). ")";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
         if(count($result)>0){
            return true;
        }else{
            return false;
        }
    }

}

?>