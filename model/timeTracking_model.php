<?php

class TimeTracking_Model extends Model {

    function __construct() {
        parent::__construct(); 
        if (isset($_POST['task'])) {
            if ($_POST['task'] == 'addtask' && Session::getSession('taskid')=='') {                 
                $this->addTask();
            } elseif ($_POST['task'] == 'updatetask') {
                $this->updateTask();
            } elseif ($_POST['task'] == 'deltask') {
                $this->deleteTask();
            } elseif ($_POST['task'] == 'addproject') {
                $this->addProject();
            } elseif ($_POST['task'] == 'updateproject') {
                $this->updateProject();
            }
        }
    }

    function addTask() {
        $this->setTask(new TblTask());
    }

    function updateTask() {
        $this->setTask(DAOFactory::getTblTaskDAO()->load(Session::getSession('taskid')));
    }

    function setTask($task) {
        $task->taskCode = $_POST['taskCode'];
        $task->description = $_POST['description'];
        $task->ratePerHour = str_replace(',', '', $_POST['ratePerHour']);
        $task->vatInclusive = (isset($_POST['vatInclusive']) == 'yes') ? 'yes' : 'no';
        $task->glPosting = $_POST['glPosting'];
 
        if ($_POST['task'] == 'addtask' &&  Session::getSession('taskid') == '') {
            $task->orgId = Session::getSession('medorgid');
            $task->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblTaskDAO()->insert($task);
           
            if (isset($_POST['returnurl'])) {
                $data = array("id" => $id, "text" => $_POST['taskCode'],
                    "description"=> $_POST['description'],
                    "value"=>str_replace(',', '', $_POST['ratePerHour']));

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updatetask' || ($_POST['task'] == 'addtask' && Session::getSession('taskid') != '')) {
            $task->id = Session::getSession('taskid');
            $task->dateModified = date('Y-m-d');
            DAOFactory::getTblTaskDAO()->update($task);
            Session::setSession('taskid', '');
            
            if (isset($_POST['returnurl'])) {
                $data = array("id" => Session::getSession('taskid'), "text" => $_POST['taskCode'],
                    "description"=> $_POST['description'],
                    "value"=>str_replace(',', '', $_POST['ratePerHour']));

                echo json_encode($data);
                exit;
            }
        }
    }

    function deleteTask() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblTaskDAO()->delete($value);
        }
    }

    function addProject() {
        $this->setProject(new TblProject);
    }

    function updateProject() {
        $this->setProject(DAOFactory::getTblProjectDAO()->load(Session::getSession('projectid')));
    }

    function setProject($project) {
        $project->clientId = $_POST['clientId'];
        $project->projectName = $_POST['projectName'];
        $project->projectNum = $_POST['projectNum'];
        $project->note = $_POST['note'];
        $project->activeAccount = (isset($_POST['activeAccount']) ? 'yes' : 'no');

        if ($_POST['task'] == 'addproject') {
            DAOFactory::getTblProjectDAO()->insert($project);
        } elseif ($_POST['task'] == 'updateproject') {
            $project->id = Session::getSession('projectid');
            DAOFactory::getTblProjectDAO()->update($project);
        }
    }

}

?>
