<?php

/**
 * Class that operate on table 'tbl_project'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-07-28 18:32
 */
class TblProjectMySqlExtDAO extends TblProjectMySqlDAO {

    static function getData() {
        $txt = "SELECT p.*, c.client_name FROM tbl_project p INNER JOIN tbl_client c " .
                "ON p.client_id = c.id WHERE c.org_id = " . Session::getSession('medorgid');

        $sqlQuery = new SqlQuery($txt);

        return self::getTblProject($sqlQuery);
    }

    protected static function getTblProject($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);

        if (!isset($tab))
            return false;

        $returns = array();

        foreach ($tab as $each) {
            $project = new stdClass();
            $project->id = $each['id'];
            $project->project_num = $each['project_num'];
            $project->project_name = $each['project_name'];
            $project->client_name = $each['client_name'];
            $project->active_account = $each['active_account'];

            $returns[] = $project;
        }

        return $returns;
    }

}

?>