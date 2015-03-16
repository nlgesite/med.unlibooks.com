<?php // Session::setSession('orgid', 46);    ?>

<style>
    .cnitableTasks{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .cnitableTasks, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableTasks, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableTasks a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
    }
    .cnitableTasks a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
    .cnitableTasks tr:HOVER{
        background-color: #E8E8E8;
    }
</style>

<div class="TaskHolder">
    <div id="newTask">
        <p class="textHeadTasks">All Tasks</p>
        <a href="#">	
            <input type="button" class="createNewTask">
        </a>
        <div class="hrTasks"></div>
    </div>	
    <div class="centerTasks">
        <div id="searchTasks">
            <input type="button" name="del" value="Edit" class="deleteTasks2" onclick="editrec('');">
            <input type="button" name="del" value="Delete" class="deleteTasks" onclick="deleterec();">
            <input type="search" name="search" placeholder="Search" class="searchindexTasks" >
            &nbsp By:
            <select class="inumberTasks">
                <option>Task Number</option>
            </select>
            <input type="button" name="del" value="Search" class="SearchTasks">
            <input type="button" class="buttonTasks" value="Import/Export">	
        </div>
    </div>
</div>

<div class="taskformsNew">	
    <form method="post" action ="<?php echo URL ?>timetracking/tasks" id="form">
        <table class="cnitableTasks">
            <tr class="headinvoiceItem">
                <th width="2%"><input type="checkbox"></th>
                <th class="">Task Number</th>
                <th class="">Description</th>
                <th class="">Date Created</th>
                <th class="">Hour</th>
            </tr>
            <?php
            $task = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('medorgid'));

            if (count($task) > 0) {
                foreach ($task as $item) {
                    ?>

                    <tr class="tableTasks">
                        <td id="tDTasks" class=""><input type="checkbox" name="chk[]" class="chk" value="<?php echo $item->id ?>"></td>
                        <td id="tDTasks" class=""><a onclick="editrec(<?php echo $item->id ?>)" style="color: blue"><?php echo $item->taskCode ?></a></td>
                        <td id="tDTasks" class=""><?php echo $item->description ?></td>
                        <td id="tDTasks" class=""><?php echo $item->dateCreated ?></td>
                        <td id="tDTasks" class=""><?php echo $item->ratePerHour ?></td>           
                    </tr>
                    <?php
                }
            }
            ?>

        </table>
        <div class="popBack hidden">

        </div>
        <input type="hidden" name="task" />
    </form>
</div>
<script>
    $(function() {
        $('.createNewTask').click(function() {
            $.post(URL + 'timetracking/task')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');


                        $('.closeCNTs').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
							$('body').css('overflow','auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });

    })

    function deleterec() {
        if ($('.chk').is(':checked')) {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            $.post(URL + 'timeTracking/checktask', {taskids: checked})
                    .done(function(returnData) {
//                            alert(returnData);
//                            return false;
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).');
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('deltask');
                                $('#form').submit();
                            }
                        }

                    })

        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(taskid) {

        if ($('.chk').is(':checked') || taskid !='') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                return false;
            });
            
            if(taskid != ''){
                checked = taskid;
            }

            $.post(URL + 'timetracking/task', {taskid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');


                        $('.closeCNTs').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
							$('body').css('overflow','auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }
</script>