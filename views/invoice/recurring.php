<?php // Session::setSession('orgid', '46');   ?>
<style>
    .recur1{
        text-align:left;
    }
    .widthRecur1{
        width: 17%;
    }
    .widthRecur2{
        width: 4%;
    }

    .cnitableAllRecurring{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .cnitableAllRecurring, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableAllRecurring a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
    }

    .cnitableAllRecurring tr th:nth-child(5){
        text-align: right;
    }
    .cnitableAllRecurring tr th:nth-child(6){
        text-align: center;
    }
    .cnitableAllRecurring tr td:nth-child(5){
        text-align: right;
    }
    .cnitableAllRecurring tr td:nth-child(6){
        text-align: center;
    }
    .cnitableAllRecurring tr:HOVER{
        background-color: #E8E8E8;
    }	
    .table2-new tr nth-child(6):hover {
        background-color: white;
    }
    .bodyTableRecurring{
        padding-bottom: 250px;
    }
    .row-recurring a{
        text-decoration: none;
    }
    .row-recurring a:hover{
        text-decoration:underline;
    }
    .headinvoice a{
        text-decoration:none;
        color: white;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
    }
    .headinvoice a:hover{
        text-decoration:none;
        color: white;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
    }
    .date{
        width: 104px;
        height: 29;
        margin-left: 5px;
        margin-top: 8px;
        padding: 5px;
		font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
		font-size:12px;
		border: 1px solid rgba(0, 0, 0, 0.27);
    }
	.RecurTextNew{
		width: 150px;
		text-align: right;
		border: none;
		height: 100%;
		background: none;
	}
	.createNR{
		margin-left: 747px;
		margin-top: -76px;
		width: 212px;
		height: 46px;
		border: none;
		background-image:url('<?=URL?>public/images/create_new_recurring.png');
		background-repeat:no-repeat;
		background-position:left;
		border-radius: 10px;
		cursor: pointer;
	
	}
	.searchindexRec{
		margin-left: 10px;
		margin-top: 6px;
		width: 42.6%;
		height: 33px;
		border: 1px solid #C0C0C0;
		background-image:url('<?=URL?>public/images/imagesearch1.png');
		background-repeat:no-repeat;
		padding-left: 25px; 
		text-align: left;
		font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
	}
</style>
<script>
    $(function() {
        $('#searchby').change(function() {
            if ($(this).val() == 3) {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
            }
        });

        $(".date").datepicker();
    })
</script>

<form method='post' action='<?php echo URL ?>invoice/recurring' id='form' style="margin:0">
    <div class="invoiceHolderRecur1">
        <div id="new">
            <p class="headTextRecur1">All Recurring</p>
            <a href="<?=URL?>invoice/newRecurring">
                <input type="button"  class="createNR">
            </a>	
            <div class="hrClass2"></div>
        </div>	
        <div class="center2">
            <div id="search3">
                <input type="button" class="buttonRecurr1" value="Edit" >
                <input type="button" class="buttonRecurr1New" value="Copy" onclick="editrec('', 'copy')">
                <input type="button" class="buttonRecurr1New" value="Stop">
                <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
                <input type="search" name="search" placeholder="Search" class="searchindexRec <?php echo ($searchby == 3) ? 'hidden' : '' ?>" > 	
                <input type="text" name="startdate" class="date <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px; height:29px"/>
                <input type="text" name="enddate" class="date <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px; height:29px"/>
                &nbsp &nbsp	By:
                <select class="selectRecur" name="searchby" id="searchby">
                    <option value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>Recurring Number</option>
                    <option value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>Client Name</option>
                    <option value="3" <?php echo ($searchby == 3) ? 'selected' : '' ?>>Last Date Sent</option>
                </select>
                <input type="submit" name="search2" value="Search" class="search2">
            </div>
        </div>


        <div class="bodyTableRecurring">	
            <?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : '' ?>
            <table class="cnitableAllRecurring">
                <tr class="headinvoice">
                    <th width="1%"><input type="checkbox" class='toggle'></th>
                    <th width="15%"><a onclick="sort('recurring', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Recurring No.</a></th>
                    <th width="15%"><a onclick="sort('date', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Date Last Sent</a></th>
                    <th width="35%"><a onclick="sort('client', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Client</a></th>
                    <th width="15%">Total Amount</th>
                    <th width="15%">Frequency</th>
                </tr>
                <?php
                $recurring = TblNewRecurringMySqlExtDAO::getData();
                $recurringtotal = 0;
                if (count($recurring) > 0) {
                    foreach ($recurring as $item) {
                        ?>
                        <tr class="row-recurring">
                            <td class=""><input type="checkbox" name='chk[]' class='chk' value='<?php echo $item->id ?>'></td>
                            <td class=""><a onclick="editrec(<?php echo $item->id ?>, '')"><?php echo $item->recurringNumber ?></a></td>
                            <td class=""><?php echo $item->lastDateSent ?></td>
                            <td class="" onclick="editrec(<?php echo $item->id ?>, '')"><?php echo $item->client_name ?></td>
                            <td class=""><?php
//                                $total = TblNewRecurringMySqlExtDAO::getTotal($item->id);
                               
                                ?>
								<input type="text" class="RecurTextNew numeric" readonly="readonly" value="<?php  echo $item->total; ?>">
							</td>
                            <td  class=""><?php echo $item->frequency ?></td>
                        </tr>
                        <?php
                        $recurringtotal += $item->total;
                    }
                }
                ?>
            </table>
        </div>
        <input type='hidden' name='task' value='' />
        <input type="hidden" name="sortorder" value=""/>	
        <input type="hidden" name="sortdirection" value=""/>	
</form>
</div>
<div class="popBack hidden">

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


    })

    function deleterec() {
        if ($('.chk').is(':checked')) {
            if (confirm('Are you sure you want to delete the following record(s)?')) {
                $('input[name="task"]').val('delrecurring');
                $('#form').submit();
            }
        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(recurringid, stat) {
        if ($('.chk').is(':checked') || recurringid != '') {
            var checked = "";
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                return false;
            });

            if (recurringid != '') {
                checked = parseInt(recurringid);
            }

            $().redirect(URL + 'invoice/newRecurring', {recurringid: checked, status: stat})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.closeNewItem').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
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

    function copy() {
        if ($('.chk').is(':checked')) {
            $('input[name="task"]').val('copyrecurring');
            $('#form').submit();
        } else {
            alert('Please select record to copy');
        }
    }

    function sort(sortby, sortdirection) {
        $('input[name="task"]').val('sort');
        $('input[name="sortorder"]').val(sortby);
        $('input[name="sortdirection"]').val(sortdirection);
        $('#form').submit();
    }

</script>
