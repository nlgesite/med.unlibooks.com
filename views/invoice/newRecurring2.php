<?php // Session::setSession('orgid', '46'); ?>
<style>
    a:hover{
        color: black;
    }
	.taskid{
		width: 100%;
		height: 100%;
		border: none;
	}
	.table1-newRecur tr:hover{
		background-color: c8c8c8;
	}
	.table2-new tr:hover{
		background-color: c8c8c8;
	}
	table1-newRecur td{
		spacing: 0
	}
</style>
<script>
    $(function() {
        $(document).on("click", "#additem", function() {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceItems",
                    function(result) {
                        $('.table2-new > tbody:last').append(result);
                    });
            $.ajaxSetup({async: true});
            $(this).parents('tr').find('.adddel').html('<input type="button" name="delete"  class="del delitem">');
            $(this).parents('tr').find('.slash').remove();
            $(this).parents('tr').find('.additem').remove();
        });


        $(document).on("click", "#addtask", function() {
//    alert( "You clicked on " + this.src );
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceTask",
                    function(result) {
                        $('.table1-newRecur > tbody:last').append(result);

                    });
            $.ajaxSetup({async: true});

            $(this).parents('tr').find('.adel').html('<input type="button" name="delete"  class="del deltask">');
            $(this).parents('tr').find('.slash').remove();
            $(this).parents('tr').find('.addtask').remove();

        });

        $(document).on("keyup", ".rate", function() {
            $(this).parents('tr').find('.tasknet').text($(this).val() * $(this).parents('tr').find('.hour').val());
            subTotal();
        });

        $(document).on("keyup", ".hour", function() {
            $(this).parents('tr').find('.tasknet').text($(this).val() * $(this).parents('tr').find('.rate').val());
            subTotal();
        });

        $(document).on("keyup", ".unitCost", function() {
            $(this).parents('tr').find('.itemnet').text($(this).val() * $(this).parents('tr').find('.quantity').val());
            subTotal();
        });

        $(document).on("keyup", ".quantity", function() {
            $(this).parents('tr').find('.itemnet').text($(this).val() * $(this).parents('tr').find('.unitCost').val());
            subTotal();
        });

        $(document).on("change", "#client", function() {
            subTotal();
        });

        $(document).on("keyup", "input[name='discount']", function() {
            subTotal();
        });

        $(document).on("click", ".deltask", function() {
            $(this).parents('tr').remove();
            subTotal();
        });

        $(document).on("click", ".delitem", function() {
            $(this).parents('tr').remove();
            subTotal();
        });

        function subTotal() {
            subtotal = 0;
            discounttotal = 0;
            rate = 0;
            vattotal = 0;

            $('.taskid').each(function(i) {
                object = $(this);
                $.ajaxSetup({async: false});
                $.ajax({
                    url: "<?= URL ?>invoice/calcVat",
                    type: "POST",
                    data: {
                        clientId: $('#client').val(), type: 'task'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        isvatable = jsonStr.vatable;
                        rate = jsonStr.rate;
                        discountamt = parseFloat($(object).parents('tr').find('.tasknet').text()) * $('input[name="discount"]').val() / 100;
                        discount = parseFloat($(object).parents('tr').find('.tasknet').text()) - discountamt;
                        discounttotal += discountamt; 
                        vat = discount * rate / 100;
                        vattotal += vat;
//                        vat += parseFloat($(object).parents('tr').find('.tasknet').text()) * result / 100;
                        if (isvatable == 'yes') {
                            subtotal += parseFloat($(object).parents('tr').find('.tasknet').text()) - vat;
                        } else {
                            subtotal += parseFloat($(object).parents('tr').find('.tasknet').text());
                        }
//                        alert(parseFloat($(object).parents('tr').find('.tasknet').text()));    
                    }
                });
                $.ajaxSetup({async: true});
            });


            $('.items').each(function(i) {
                object = $(this);
                $.ajaxSetup({async: false});
                $.ajax({
                    url: "<?= URL ?>invoice/calcVat",
                    type: "POST",
                    data: {
                        clientId: $('#client').val(), type: 'item'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        isvatable = jsonStr.vatable;
                        rate = jsonStr.rate;
                        discountamt = parseFloat($(object).parents('tr').find('.itemnet').text()) * $('input[name="discount"]').val() / 100;
                        discount = parseFloat($(object).parents('tr').find('.itemnet').text()) - discountamt;
                        discounttotal += discountamt;
                        vat = discount * rate / 100;
                        vattotal += vat;

                        if (isvatable == 'yes') {
                            subtotal += parseFloat($(object).parents('tr').find('.itemnet').text()) - vat;
                        } else {
                            subtotal += parseFloat($(object).parents('tr').find('.itemnet').text());
                        }

                    }
                });
                $.ajaxSetup({async: true});
            });

            $('#subtotal').text(subtotal);
            $('#vat').text(vattotal);
            $('#discount').text(discounttotal);
            $('#invoicetotal').text(subtotal + vattotal - discounttotal);
        }
        
        $('#client').click(function() {
                $.post('<?php echo URL ?>invoice/getAddress', {clientId: $(this).val()},
                function(result) {
                    $('#address').text(result);
                });
            });

        $(document).on("click", ".delitem", function() {
            $(this).parents('tr').remove();
        });

        $(document).on("change", ".taskid", function() {
            object = $(this);

            $.ajax({
                url: "<?= URL ?>invoice/getTaskDescription",
                type: "POST",
                data: {
                    taskid: $(this).val()
                },
                dataType: "JSON",
                success: function(jsonStr) {
                    description = jsonStr.description;
                    rate = jsonStr.rate;

                    $(object).parents('tr').find('.description').val(description);
                    $(object).parents('tr').find('.rate').val(rate);
                    subTotal();
                }
            });
        });

        $(document).on("change", ".items", function() {
            object = $(this);
            $.ajax({
                url: "<?= URL ?>invoice/getItemDescription",
                type: "POST",
                data: {
                    itemid: $(this).val()
                },
                dataType: "JSON",
                success: function(jsonStr) {
                    description = jsonStr.description;
                    unitcost = jsonStr.unitcost;

                    $(object).parents('tr').find('.description').val(description);
                    $(object).parents('tr').find('.unitcost').val(unitcost);
                    subTotal();
                }
            });
        });
        
        $('input[name="dueDate"]').change(function() {
            date1 = new Date($('input[name="dateIssued"]').val());
            date2 = new Date($(this).val());
//        $('input[name="dateIssued"]').getTime()
            diff = (Math.floor((date2.getTime() - date1.getTime()) / 86400000)); // ms per day);
            
            if(diff < 7){
                alert('Due date should be 7 days or more ahead from start date');
            }
        });
    });
</script>
<?php
$recurring = new TblNewRecurring();
$recurring->startDate = date('Y-m-d');
$recurring->endDate = date('Y-m-d');
$taskstat = 'addrecurring';
$subtotal = $vattotal = $discounttotal = 0;
if (isset($_POST['recurringid'])) {
    $recurringid = $_POST['recurringid'];
    $recurring = DAOFactory::getTblNewRecurringDAO()->load($recurringid);
    Session::setSession('recurringid', $recurringid);
    $taskstat = 'updaterecurring';
}
?>
<div class="invoiceHolder2">
    <div id="new2">
        <p class="headTextNewRecur">New Recurring</p>
        <div class="hrClass3"></div>
    </div>	

    <form method="post" action="<?= URL ?>invoice/recurring" class="form-nRecurring">
        <div id="containerRecurr" style="float:left">
            <table class="tblNew1">

                <tr class="recurTable">
                    <td class="SdateRecurr">Start Date:</td>
                    <td class=""><input type="date" class="inputboxes" class="datepickerRecurr" name="dateIssued" required value="<?php echo $recurring->startDate ?>"></td>
                </tr>

                <tr class="recurTable">
                    <td class="EdateRecur">End Date:</td>
                    <td><input type="date" class="inputbox2" class="datepicker2Recur" name="dueDate" required value="<?php echo $recurring->endDate ?>"></td>
                </tr>
                <tr  class="recurTable">
                    <td class="EdateRecur">Frequency:</td>
                    <td><select class="inputbox2" name="frequency">
                            <option value="weekly" <?php echo ($recurring->frequency == 'weekly') ? 'selected' : '' ?>>Weekly</option>
                            <option value="monthly" <?php echo ($recurring->frequency == 'monthly') ? 'selected' : '' ?>>Monthly</option>
                        </select>
                    </td>
                </tr>

                <?php
                $customer = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('medorgid'));

                if (count($customer) > 0) {
                    ?>
                    <tr class="recurTable">
                        <td class="EdateRecur">Client:</td>
                        <td><select class="customerInput" name="clientId" id="client" required>
                                <option></option>
                                <?php foreach ($customer as $item) { ?>
                                    <option value="<?php echo $item->id ?>"><?php echo $item->clientName ?></option>
                                <?php } ?>
                            </select> 
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <tr class="recurTable">
                    <td class="email">Send by Email</td>
                    <td><input type="checkbox" class="emailbox"></td>
                </tr>

            </table>
        </div>
        <div class="RecurTable2"style="float:left">
            <table class= "tblNew1">
				<tr class="recurTable22">
                    <td class="poso12">Recurring No:</td>
					<td><input type="text" class="RecuNoNew textNewPad"  value="<?php echo $recurring->recurringNumber ?>" name="recurringNumber"></td>
                </tr>
                <tr class="recurTable22">
                    <td class="poso1New">P.O/S.O:<td>
					<td><input type="text" class="poso2 textNewPad"  value="<?php echo $recurring->pOSO ?>" name="pOSO" required pattern="SO-[0-9]{6}" value="<?php echo $recurring->pOSO ?>"></td>
                </tr>
                <tr class="recurTable22">
                    <td class="discount1">Discount:</td>
					<td><input type="percentage" class="discount2 textNewPad" name="discount" required value="<?php echo $recurring->discount ?>"></td>
                </tr>
                <tr class="recurTable22">
                    <td class="memo1">Particulars:</td>
                </tr>
                <tr class="recurTable22">
                    <td><textarea input type="text"  placeholder="" class="memo2" name="particular" required ><?php echo $recurring->particular ?></textarea></td>
                </tr>

            </table>
        </div>	
        <div><img class="image5Recurring1"  src="<?= URL ?>public/images/line3.png"></div>
        <table class= "table1-newRecur">
            <tr class="t">
                <th class="desc aleft">Task No.</th>
                <th class="desc aleft">Description</th>
                <th class="aright RateTH">Rate</th>
                <th class="aright RateTH">Hour</th>
                <th class="aright RateTH">Net Amount</th>
            </tr>
            <tbody>
                <?php // echo $recurring->id; exit;
                $invoice = TblNewRecurringMySqlExtDAO::getRecurringInvoice(($recurring->id != '' )? $recurring->id : -1 ); 
//               echo $invoice; exit;
                $recurringlines = TblInvoiceLinesMySqlExtDAO::getTasks($invoice == '' ? -1 : $invoice);
//                echo print_r($recurringlines); exit;
                $client = DAOFactory::getTblClientDAO()->load($recurring->clientId);
                if (count($recurringlines) > 0) { 
                    Session::setSession('invoiceid', $invoice);
                    foreach ($recurringlines as $i => $recurringline) {
                        ?>
                        <tr>
                            <td class="tasknoNinvoice">
                                <select name="taskid[]" class="taskid" required>
                                    <option></option>
                                    <?php
                                    $tasks = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('orgid'));
                                    foreach ($tasks as $task) {
                                        ?>
                                        <option value="<?php echo $task->id ?>" <?php echo $recurringline->taskId == $task->id ? 'selected' : '' ?>><?php echo $task->taskCode ?></option>
                                    <?php } ?>
                                </select>                        
                            </td>
                            <?php
                            $tbltask = DAOFactory::getTblTaskDAO()->load($recurringline->taskId);

                            $discountamt = $recurringline->netAmount * $recurring->discount / 100;
                            $discount = $recurringline->netAmount - $discountamt;
                            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

                            if ($client->vatInclusive == 'yes') {
                                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                                $subtotal += $recurringline->netAmount - $vat;
                                $vattotal += $vat;
                            } else {
                                $subtotal += $recurringline->netAmount;
                            }
                            ?>
                            <td class=""><input type="text" name="taskDescription[]" value="<?php echo ($recurringline->taskDescription != '') ? $recurringline->taskDescription : $tbltask->description ?>" class="description"/></td>
                            <td class="cc aright"><input type="text" name="rate[]"  class="rate isNumeric linetext" value="<?php echo ($recurringline->rate > 0) ? $recurringline->rate : $tbltask->ratePerHour ?>"/></td>
                            <td class="cc1 aright"><input type="text" name="hour[]" class="hour linetext" value="<?php echo $recurringline->hour ?>" required/></td>
                            <td class=" aright"><span class="tasknet linetext linetext RateTH recurringLine"><?php echo $recurringline->netAmount ?></span></td>
                            <td>
                                <div class="adel">
                                    <?php if ($i == count($recurringlines) - 1) { ?>
                                        <input type="button" name="add"  class="a addtask" id="addtask">
                                        <span class="slash">/</span>
                                    <?php } ?>
                                    <input type="button" name="delete"  class="del deltask">
                                    <input type="hidden" name="invoicetaskid[]" value="<?php echo $recurringline->id ?>" />
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else {

                    $tasks = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('orgid'));
                    if (count($tasks) > 0) {
                        ?>
                        <tr class="row-item">
                            <td class="tasknoNinvoice">
                                <select name="taskid[]" class="taskid" required>
                                    <option></option>
                                    <?php foreach ($tasks as $task) { ?>
                                        <option value="<?php echo $task->id ?>"><?php echo $task->taskCode ?></option>
                                    <?php } ?>
                                </select>
                                <!--<a href="/unlibooks/000002">000002 </a>-->
                            </td>
                            <td class="tasknoNinvoiceDes"><input type="text" name="taskDescription[]" class="description"/></td>
                            <td class="cc aright tasknoNinvoiceRate"><input type="text" name="rate[]"  class="rate isNumeric linetext"/></td>
                            <td class="cc1 aright tasknoNinvoiceRate"><input type="text" name="hour[]" class="hour linetext" required/></td>
                            <td class="aa aright recurringLine"><span class="tasknet linetext"></span></td>
                            <td>
                                <div class="adel">
                                    <input type="button" name="add"  class="a addtask" id="addtask">
<!--                                    <span class="slash">/</span>
                                    <input type="button" name="delete"  class="del deltask">-->
                                </div>
                            </td>	
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <table class= "table2-new">
            <tr class="t">
                <th class="aleft">Item No.</th>
                <th class="aleft">Description</th>
                <th class="arightNewRecurring">Unit Cost</th>
                <th class="arightNewRecurring">Qty</th>
                <th class="arightNewRecurring">Net Amount</th>
            </tr>
            <tbody>
                <?php
                $recuringlines = TblInvoiceLinesMySqlExtDAO::getItem($invoice == '' ? 0 : $invoice);
                if (count($recuringlines) > 0) {
                    foreach ($recuringlines as $recuringline) {
                        ?>
                        <tr>
                            <td class="tasknoNinvoice inVoiceItemRecur">
                                <select name="itemid[]" class="items" required>
                                    <option></option>
                                    <?php
                                    $itms = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('orgid'));
                                    foreach ($itms as $itm) {
                                        ?>
                                        <option value="<?php echo $itm->id ?>" <?php echo $recurringline->itemId == $itm->id ? 'selected' : '' ?>><?php echo $itm->itemCode ?></option>
                                    <?php } ?>
                                </select>                        
                            </td>
                            <?php
                            $tblitem = DAOFactory::getTblItemDAO()->load($recuringline->itemId);
                            $discountamt = $recuringline->netAmount * $recurring->discount / 100;
                            $discount = $recuringline->netAmount - $discountamt;
                            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

                            if ($client->vatInclusive == 'yes') {
                                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                                $vattotal += $vat;
                                $subtotal += $recuringline->netAmount - $vat;
                            } else {
                                $subtotal += $recuringline->netAmount;
                            }
                            ?>
                            <td class="tasknoNinvoiceDes tasknoNinvoiceDes2Recur"><input type="text" name="itemDescription[]" value="<?php echo ($recuringline->itemDescription != '') ? $recuringline->itemDescription : $tblitem->description ?>" class="description"/></td>
                            <td class="ccc aright2 tasknoNinvoiceRate tasknoNinvoiceRate2"><input type="text" name="unitCost[]"  class="unitCost isNumeric linetext" value="<?php echo ($recuringline->unitCost) ? $recuringline->unitCost : $tblitem->unitCost ?>"/></td>
                            <td class="ccc aright2 tasknoNinvoiceRate tasknoNinvoiceRate2"><input type="text" name="quantity[]" class="quantity linetext" value="<?php echo $recuringline->quantity ?>" required/></td>
                            <td class="ccc aright2 recurringLine"><span class="itemnet "><?php echo $recuringline->netAmount ?></span></td>
                            <td>
                                <div class="adddel">
                                    <input type="button" name="add"  class="a additem" id="additem">
                                    <span class="slash">/</span>
                                    <input type="button" name="delete"  class="del delitem">
                                    <input type="hidden" name="invoiceitemid[]" value="<?php echo $recuringline->id ?>" >
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    $itms = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('orgid'));

                    if (count($itms) > 0) {
                        ?>
                        <tr class="row-item">
                            <td class="tasknoNinvoice inVoiceItemRecur">
                                <select class="items" name="itemid[]" required>
                                    <option></option>
                                    <?php foreach ($itms as $i => $itm) { ?>
                                        <option value="<?php echo $itm->id ?>" ><?php echo $itm->itemCode ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td class="tasknoNinvoiceDes tasknoNinvoiceDes2Recur"><input type="text" name="itemDescription[]" class="description"></td>
                            <td class="ccc aright2 tasknoNinvoiceRate tasknoNinvoiceRate2"><input type="text" name="unitCost[]" class="unitCost isNumeric linetext"  /></td>
                            <td class="ccc aright2 tasknoNinvoiceRate tasknoNinvoiceRate2"><input type="text" name="quantity[]" class="quantity linetext" required /></td>
                            <td class="ccc aright2  recurringLine"><span class="itemnet"></span></td>
                            <td>
                                <div class="adddel">

                                    <input type="button" name="add"  class="a additem" id="additem">
<!--                                    <span class="slash">/</span>

                                    <input type="button" name="delete"  class="del delitem">-->
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?> 
            </tbody>
        </table>
		
		<!--
        <div class="search-box2">
            <div class="size1-container">
                <select name="size" id="size1"> 
                    <option value="Add Line">Add Line</option>
                    <option value="Add Time">Add Time</option>
                    <option value="Add Item">Add Item</option>
                </select>
            </div>

        </div>
		-->

        <table class="table3-new">
            <tr class="sv" >
                <td>Sub Total:</td>
                <td class="saRecur"><span id="subtotal"><?php echo $subtotal ?></span></td>
            </tr>

            <tr class="v">
                <td>Vat:</td>
                <td class="saRecur"><span id="vat"><?php echo $vattotal ?></span></td>
            </tr>
            <tr class="v">
                <td>Discount Total:</td>
                <td class="sa"><span id="discount"><?php echo $discounttotal ?></span></td>
            </tr>

            <tr class="gtotal">
                <td class="gt">Recurring Total:</td>
                <td class="saRecur" id="gt"><span id="invoicetotal"><?php echo $subtotal + $vattotal - $discounttotal ?></span></td>
            </tr>
        </table>

        <div>

            <div><img class="image6"  src="<?= URL ?>public/images/line3.png"></div>
            <div>
                <h4 class="t">Remarks:</h4>
                <textarea class="tm" name="remarks"></textarea>
            </div>
            <div>
                <input class="bn3" type="submit" name="save" value="Save">
                <input type="hidden" name="task" value="<?php echo $taskstat ?>" />
            </div>	


        </div>

    </form>

</div>

