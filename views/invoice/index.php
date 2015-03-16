<style>
   
</style>

<script>
    $(function() {
        $('#searchby').change(function() {
            if ($(this).val() == 3) {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
                $('.search2').removeClass('hidden');
                $('.search2Col').addClass('hidden');
//				$('#invoiceselect').removeClass('invoiceselect');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
                $('.search2').addClass('hidden');
                $('.search2Col').removeClass('hidden');
//				$('#invoiceselect').addClass('invoiceselect');
            }
        });
        $('#searchby').change();
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });
    })
</script>
<?php
require_once ('public/paginator.php');
$pages = new Paginator;
//echo $var = TblNewInvoiceMySqlExtDAO::getMaxNumId();
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyInvoice bodysize">
    <form method='post' action='<?php echo URL ?>invoice' id='form'>
        <div class="invoiceHolderInvoice">
            <div id="newInvoice">
                <p class="headText">ALL INVOICES</p>
                <a href="<?php echo URL ?>invoice/add">	
                    <input type="button" class="createNI">
                </a>
            </div>	
            <div class="center2">
                <div id="search3">
                    <div style="float:left; margin-left: 24px;">
						<input type="button"  name="sendinvoice" value="EDIT" class="delete1 buttoninvoices" id="edit" onclick="editrec('', '')">
						<input type="button" name="print" value="COPY" class="copyNew buttoninvoices" onclick="editrec('', 'copy')">
						<input type="button" name="del" value="DELETE" class="copyNew buttoninvoices" id="delete" onclick="deleterec()">
						<!--<input type="button" name="sendinvoice" value="SEND INVOICE" class="sendI buttoninvoices">-->
						<input type="button" name="print" value="PRINT PREVIEW" class="printPrev buttoninvoices" style="word-spacing: 0px;">
						<!--<input type="button" name="addpayment" value="Payment" class="addP" <?php // echo ($status == 'posted')   ?> />-->
					</div>
					<div style="float:right;margin-right: 67px;">
						<div class="invoiceselect invoiceselect2" id="invoiceselect">
							<?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
								<select class="inumber" name="searchby" id="searchby">
									<option style="color:black;" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>INVOICE NUMBER</option>
									<option style="color:black;" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>PATIENT NAME</option>
									<option style="color:black;" value="3" <?php echo ($searchby == 3) ? 'selected' : '' ?>>DATE</option>
									<option style="color:black;" value="4" <?php echo ($searchby == 4) ? 'selected' : '' ?>>STATUS</option>
									<option style="color:black;" value="5" <?php echo ($searchby == 5) ? 'selected' : '' ?>>MODE OF PAYMENT</option>
								</select>
							
							<input type="search" name="search" placeholder="SEARCH" class="searchindex
									   <?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 
							
							<input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
								   placeholder="From Date" class="date dateInputText <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

							<input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
								   placeholder="To Date" class="date dateInputText <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

							<input type="submit" name="search2" value="Search" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">
							
							<input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''    ?>">
						</div>
					</div>	
				</div>
            </div>
        </div>
        <div>
            <?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : '' ?>
            <table class="cnitableAllInvoice">
                <tr class="cnitableAllInvoiceTr">
                    <th style="text-align:center; width:3%"><input type="checkbox" class='toggle' ></th>
                    <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"><a onclick="sort('invoice', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Invoice No.</a></th>
                    <th style="text-align:left;padding-left: 5px;width:11%;"><a onclick="sort('date', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Date</a></th>
                    <th style="text-align:center;padding-left: 5px;width:11%;">Mode of Payment</th>
                    <th style="text-align:left;padding-left: 5px;width:20%;"><a onclick="sort('client', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Patient Name</a></th>
                    <th style="text-align:right;padding-right: 5px;width:11%;">Total Amount</th>
                    <th style="text-align:right;padding-right: 5px;width:11%;">Amount Balance</th>
                    <th style="text-align:center;padding-right:5px;width:11%;">Status</th>
                    <th style="text-align:center;padding-right:5px;width:11%;">Date Reversed</th>
                </tr>
                <?php
                $invoice = TblNewInvoiceMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
                $pages->items_total = count(TblNewInvoiceMySqlExtDAO::getData('', -1));
                $pages->mid_range = 9;
                $pages->paginate();
                $invoicetotal = 0;
                $balancetotal = 0;
				
                if (count($invoice) > 0 && isset($invoice) && !empty($invoice)) {
					 $i = count($invoice);
                    foreach ($invoice as $item) {
                        ?>
                        <tr class="tablecni">
                            <td style="text-align:center;" class=""><input type="checkbox" name='chk[]' class='chk' value="<?php echo $item->id ?>"></td>
                            <td style="text-align:left;padding-left: 5px;" class=""><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->invoiceNumber ?></a></td>
                            <td style="text-align:left;padding-left: 5px;" class=""><?php echo date('m / d / Y', strtotime($item->dateIssued)) ?></td>
                            <td style="text-align:center;padding-left: 5px;" class=""><?php echo $item->mopdescription ?></td>
                            <td style="text-align:left;padding-left: 5px;" class=""><?php echo ucwords($item->clientName) ?></td>
                            <td style="text-align:right;padding-right: 5px;" class="">
                                <!--<input type="text" class="numeric invoiceText" readonly="readonly" value="<?php //echo number_format((float) $item->total, 2, '.', '');  ?>">-->
                                <?php echo ($item->status == 'reversed') ? '(' . number_format((float) $item->total*-1, 2) . ')' : number_format((float) $item->total, 2); ?>
                            </td>
                            <td style="text-align:right;padding-right: 5px;" class=""><?php
                                if ($item->status == 'reversed') {
                                    echo '0.00';
                                } elseif ($item->mopdescription == 'Cash' && $item->status == 'open') {
                                    echo number_format((float) $item->total, 2);
                                    $balancetotal += $item->total;
                                    $invoicetotal += $item->total;
                                } else {
                                    echo number_format((float) $item->balance, 2);
                                    $balancetotal += $item->balance;
                                    $invoicetotal += $item->total;
                                }
                                ?></td>

                            <td class="stat"style="text-align:center;padding-right: 5px;"><?php echo ucfirst($item->status) ?></td>
                            <td style="text-align:left;padding-right: 5px;"><?php echo ($item->dateReversed == '0000-00-00') ? '' : date('m / d / Y', strtotime($item->dateReversed)) ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </table>

            <table class="cnitableAllInvoice2" style="margin-top:40px;">

                <tr class="cnitableAllInvoice2">
                    <td style=" width:3%"></td>
                    <td style=" width:13%"></td>
                    <td style=" width:13%"></td>
                    <td style="text-align: right; width:25%;padding-right: 50px;color:#fff;">Total</td>
                    <td style="text-align: right; padding-right: 50px; font-weight: bold; width:13%;color:#fff;">
						<?= number_format((float) $invoicetotal, 2) ?>
                    </td>
                    <td style="text-align: right; font-weight: bold; width:13%;padding-right: 78px;color:#fff;">
						<?= number_format((float) $balancetotal, 2) ?>
                    </td>
                    <td style=" width:13%;color:#fff;"></td>
                </tr>
            </table>

        </div>
        <div class="tcollect1 hidden">
            <div>Total:<input readonly="readonly" type="text" value="<?= number_format((float) $invoicetotal, 2, '.', '') ?> PHP" class="php1 numeric"></div>
            <div style="margin-top: -25px;margin-left: 180px;"><input readonly="readonly" type="text" class="balTotal" value="0.00"></div>
        </div>

        <div class="tfootTable" style="text-align:center; padding:6px 0 6px 0">
                <?php
                echo $pages->display_pages();
                echo "<span style=\"margin-left:25px\width:120px;color:#fff;font-family:verdana; font-size:12px;\"> " . $pages->display_jump_menu()
                . $pages->display_items_per_page() . "</span>";

                echo "Page $pages->current_page of $pages->num_pages";
                ?>
        </div>

        <input type='hidden' name='task' value=''/>
        <input type="hidden" name="sortorder" value=""/>	
        <input type="hidden" name="sortdirection" value=""/>	




    </form>
</div>



<!--</body>-->
<!--</html>-->
<div class="popBack hidden"></div>

<script>
    function ucfirst(field) {
        field.value = field.value.substr(0, 1).toUpperCase() + field.value.substr(1);
    }
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
        status = '';
        if ($('.chk').is(':checked')) {
            $("input[name='chk[]']:checked").each(function() {
                status = $(this).parent('td').parent('tr').find('td:nth-child(8)').html();
                if (status == 'Posted') {
                    return false;
                }
            });

            if (status == 'Posted' || status == 'Reversed') {
                alert('Invoice(s) may be posted/reversed. You can no longer delete the invoice.');
                return false;
            }

            if (confirm('Are you sure you want to delete the following record(s)?')) {
                $('input[name="task"]').val('delinvoice');
                $('#form').submit();
            }
        } else {
            alert('Please select record to delete');
        }
    }


    function editrec(invoiceid, stat) {
        if ($('.chk').is(':checked') || invoiceid != '') {
            var checked = "";
            count = 0;
            myThis = '';
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                count++;
                myThis = $(this);
                // return false;
            });
            if (invoiceid != '') {
                checked = parseInt(invoiceid);
            }

            if (count > 1) {
                alert('Please select only one item.');
                return false;
            }

            status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();
            if (status == 'posted' && stat != 'copy') {
                alert('Invoice is posted. You can no longer edit the invoice.');
                return false;
            }

            $().redirect(URL + 'invoice/add', {invoiceid: checked, status: stat});
//                    .done(function(returnData) {
//                        $('.popBack').html(returnData);
//                        $('.popBack').removeClass('hidden');
//                        $('.popBack').removeClass('hidden');
//                        $('.closeNewItem').click(function() {
//                            $('.popBack').addClass('hidden');
//                            $('.popBack').html('');
//                            $('body').css('overflow', 'auto');
//                        });
//                    })
//                    .fail(function() {
//                        alert('Connection Error!');
//                    });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }

    function copy() {
        if ($('.chk').is(':checked')) {
            if (confirm('Are you sure you want to copy this transaction?')) {
                $('input[name="task"]').val('copyinvoice');
                $('#form').submit();
            }
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
<script>
    $(function() {
        $('.addP').click(function() {
            if ($('.chk').is(':checked')) {
                var checked = [];
                $("input[name='chk[]']:checked").each(function()
                {
                    checked.push(parseInt($(this).val()));
                    return false;
                });
//            alert(checked[0]);
                $.post(URL + 'invoice/enterpayment', {invoiceid: checked[0], stat: 'invoice'})
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
                            $('body').css('overflow', 'hidden');
                            $('.cancel').click(function() {
                                if (confirm('Are you sure, you want to leave this page without posting?')) {
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
                alert('Select invoice to enter payment');
            }
        });
    })
</script>


<script>
    function view(paymentid) {
        $.post(URL + 'invoice/paymentview', {paymentid: paymentid})
                .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.cancel').click(function() {
                        //	if (confirm('Are you sure, you want to leave this page without posting?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        //}
                    });
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }

</script>

<script>
    $(function() {
        $('.printPrev').click(function() {
            if ($('.chk').is(':checked')) {
                var checked = '';
                if ($('.chk:checked').length > 1) {
                    alert('Please select one(1) record only to view.');
                    $('.chk').removeAttr('checked');
//                    $("input[name='chk[]']:checked").each(function(){ $(this).removeAttr('checked'); });
                    return false;
                } else {
                    $("input[name='chk[]']:checked").each(function()
                    {
                        checked = parseInt($(this).val());
                        return false;
                    });
                    $.post(URL + 'invoice/printPreview', {invoiceid: checked})
                            .done(function(returnData) {
                                $('.popBack').html(returnData);
                                $('.popBack').removeClass('hidden');
                                $('body').css('overflow', 'hidden');
                                $('.closePrint').click(function() {
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                    $('body').css('overflow', 'auto');
                                    $('.chk').removeAttr('checked');
                                });
                            })
                            .fail(function() {
                                alert('Connection Error!');
                            });
                    return false;
                }
            } else {
                alert('Please select record to preview');
            }
        });
        $('.sendI').click(function() {
            alert('Sorry, link unavailable.');
        });
    })
</script>