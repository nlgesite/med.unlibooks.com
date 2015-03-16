<?php

/**
 * Class that operate on table 'tbl_task'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblTaskMySqlExtDAO extends TblTaskMySqlDAO {

    static function getData($limit,$limitstart =0) {
        $txt = "SELECT * FROM tbl_task WHERE org_id = " . Session::getSession('medorgid');

        if (isset($_POST['search'])) {
            switch ($_POST['searchby']) {
                case 1:
                    $txt .= " && task_code like '%" . $_POST['search'] . "%'";
                    break;
                case 2:
                    $txt .= " && description like '%" . $_POST['search'] . "%'";
                    break;
                default:
                    break;
            }
//            $txt .= ' ORDER BY ' . $sortby . ' ' . $_POST['sortdirection'];
        } 
        else {
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
        return self::getTaskData($sqlQuery);
    }
    
    function getTaskData($sqlQuery){
         $tab = QueryExecutor::execute($sqlQuery);
         
         if (!isset($tab))
            return false;

        $returns = array();
        
        foreach ($tab as $each){
            $task = new TblTask();
            $task->id = $each['id'];
            $task->taskCode = $each['task_code'];
            $task->description = $each['description'];
            $task->dateCreated = $each['date_created'];
            $task->ratePerHour = $each['rate_per_hour'];
            $task->active = $each['active'];
            $returns[] = $task;
        }
        
        return $returns;
    }
    
    static function getMaxNumId() {
        $txt = "SELECT t.task_code FROM tbl_task t " .
                "WHERE t.org_id = " . Session::getSession('medorgid') . " ORDER BY t.id desc limit 1";
        $sqlQuery = new SqlQuery($txt);
        $result = QueryExecutor::execute($sqlQuery);
        
        if (count($result) > 0) {
                return ++$result[0]['task_code'];
        } else {
            return 'S000001';
        }
    }

    static function checkTask() {
        $total = 0;
        if (isset($_POST['text'])) {
            $txt = "SELECT * from tbl_task WHERE task_code = '" . $_POST['text'] . "' && org_id = " . Session::getSession('medorgid');

            if (Session::getSession('taskid') != '') {
                $txt .= " && id <> " . Session::getSession('taskid');
            }
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);
            $total += count($result);
        }

        if (Session::getSession('taskid') != '') {
            $txt = 'SELECT count(task_id) as total FROM tbl_invoice_lines WHERE task_id = ' . Session::getSession('taskid');
            $sqlQuery = new SqlQuery($txt);
            $result = QueryExecutor::execute($sqlQuery);
            
            if ($result[0]['total'] > 0) {
                $global = new GlobalClass();
                $global->setActiveStatus('task');
//                Session::setSession('hmoid', '');
            }
        }

        return $total;
    }

}

?>