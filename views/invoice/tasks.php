<style>
    .cnitableTasks{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 49px;
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
		border-bottom:solid 1px #c8c8c8;
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
    .rphNew{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 12px;
        background:none;
        border:none;
    }


    .createNewTask{
        margin-left: 760px;
        margin-top: -75px;
        width: 200px;
        height: 47px;
        border: none;
        background-image: url('<?= URL ?>public/images/create new service2.png');
        background-repeat: no-repeat;
        background-position: left;
        border-radius: 10px;
        cursor: pointer;
    }
    .SearchTasks{
        
    }
	.tasknewform{
		box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
		margin-bottom:-25px;
		margin-top:49px;
	}
	.taskformsNew{
		background-color: white;
		padding-top: 1px;
		padding-bottom: 500px;
		
}
 .TaskHolder{
	width: 100%;
	/* margin-top: 209px; */
	background-color: white;
}
#newTask{
	font-family: calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
	text-shadow: 1px 1px 5px gray;
}
.textHeadTasks{
	/* margin-top: -124px; */
	font-size: 30px;
	text-shadow: none;
	padding-top: 25px;
	font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
}

.centerTasks {
	right: 50%;
	margin-left: 5px;
	width: 990px;
	height: 45px;
	margin-top: 5px;
	background-color: E5F1CE;
	border-radius:5px 5px 0px 0px;
	color: black;
	font-size: 13px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
}
.buttonTasks{
	background-color:#5e5353;
	width: 120px;
	height: 29px;
	border-radius: 2px 2px 2px 2px;
	margin-left: -5px;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	cursor: pointer;
	margin-left: 5px;
	border: none;
	color: whitesmoke;
}
.searchindexTasks{
	
}


.deleteTasks{
	
}
.deleteTasks2{
	
}

.sendTasks{
	background-color:#C8C8C8 ;
	width: 115px;
	height: 29px;
	border-radius: 5px 0px 7px 0px;
	margin-left: -4px;
	font-size: 14px;
	font-family: calibri;
	cursor: pointer;
}	
.hrTasks{
	width: 985px;
	border: 2px solid gray;
	margin-left: -15px;
	margin-top: -11px;
}
.inumberTasks{
	
}
.tableTasks{
	background-color: #fff;
}
</style>
<?php
$pages = new Paginator;
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
<form method="post" action ="<?php echo URL ?>invoice/services" id="form" class="tasknewform">
    <div class="TaskHolder">
       <div id="newInvoice">
			<p class="headText">ALL SERVICE ITEMS</p>
				<a href="<?=URL?>invoice/customers">	
					<input type="button" class="createNewTask">
				</a>
		</div>	
				<?php
					echo (Session::getSession('error') != '') ? Session::getSession('error') : '';
					Session::setSession('error', '');
				?>	
        <div class="center2">
            <div id="search3">
				<div style="float:left; margin-left: 24px;">
					<input type="button" name="del" value="EDIT" class="deleteTasks2 buttoninvoices" onclick="editrec('');">
					<input type="button" name="del" value="DELETE" class="deleteTasks buttoninvoices" onclick="deleterec();">
				</div>
				<div style="float:right;margin-right: 67px;">
					<div class="invoiceselect invoiceselect2" id="invoiceselect">
						<select class="inumberTasks inumber" name="searchby">
							<option style="color:#000;" value="1">SERVICE ITEM NO.</option>
							<option style="color:#000;" value="2">DESCRIPTION</option>
						</select>
						<input type="text" name="search" placeholder="SEARCH" class="searchindexTasks searchindex" >
						<input type="submit" name="del" value="" class="SearchTasks search2Col">
					</div>
				</div>
			</div>
        </div>
    </div>

    <div class="taskformsNew">
        <table class="cnitableTasks">
            <tr class="headinvoiceItem">
                <th width="2%"><input type="checkbox" class="toggle"></th>
                <th width="24%">Service Item No.</th>
                <th width="24%">Date Created</th>
                <th width="26%">Description</th>
                <th width="24%" style="text-align:right;padding-right:20px;">Rate</th>
            </tr>
            <?php
            $tasks = TblTaskMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
            $pages->items_total = count(TblTaskMySqlExtDAO::getData('', -1));
            $pages->mid_range = 9;
            $pages->paginate();
            if (count($tasks) > 0) {
                foreach ($tasks as $task) {
                    ?>

                    <tr class="tableTasks">
                        <td id="tDTasks" class=""><input type="checkbox" name="chk[]" class="chk" value="<?php echo $task->id ?>"></td>
                        <td id="tDTasks" class=""><a onclick="editrec(<?php echo $task->id ?>)" style="color: blue"><?php echo $task->taskCode ?></a></td>
                        <td id="tDTasks" class=""><?php echo date('m / d / Y', strtotime($task->dateCreated)) ?></td>
                        <td id="tDTasks" class=""><?php echo ucwords($task->description) ?></td>
                        <td id="tDTasks" style="text-align:right"><input type="text" class="nodecimal rphNew" readonly value="<?php echo
            Controller::getFloat($task->ratePerHour)
                    ?>" style="text-align:right;padding-right:15px;"></td>           
                    </tr>
                    <?php
                }
            }
            ?>

        </table>
        <table class="tblFootTask tfootTable">
            <tfoot>
                <tr class="tfootTask under">
                    <td colspan="5" style="text-align: center;color:#fff;font-family:verdana; font-size:12px;" class="under">
                        <?php
                        echo $pages->display_pages();
                        echo "<span style=\"margin-left:25px\"> " . $pages->display_jump_menu()
                        . $pages->display_items_per_page() . "</span>";

                        echo "Page $pages->current_page of $pages->num_pages";
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>

        <div class="popBack hidden">

        </div>
        <input type="hidden" name="task" />
    </div>
</form>
</div>
<script>
    $(function() {
        $('.toggle').click(function() {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').prop('checked', true);
            } else {
                $('input[type="checkbox"]').prop('checked', false);
            }
        });

        $('.createNewTask').click(function() {
            $.post(URL + 'invoice/task')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeCNTs').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                location = URL + 'invoice/services';
                            }
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

            $.post(URL + 'invoice/checktask', {taskids: checked})
                    .done(function(returnData) { alert(returnData);
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

        if ($('.chk').is(':checked') || taskid != '') {
            var checked = [];
            count = 0;
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                count++;
            });

            if (count > 1) {
                alert('Please select only one item');
                return false;
            }

            if (taskid != '') {
                checked = taskid;
            }

            $.post(URL + 'invoice/task', {taskid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeCNTs').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
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