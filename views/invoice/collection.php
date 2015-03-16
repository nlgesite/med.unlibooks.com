<style>

</style>
<?php
/* 	$searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; */
require_once ('public/paginator.php');
$pages = new Paginator;
?>
<script>
    $(function() {
        $('#searchby').change(function() {
            if ($(this).val() == 3 || $(this).val()==5) {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
                $('.search2').removeClass('hidden');
                $('.search2Col').addClass('hidden');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
                $('.search2').addClass('hidden');
                $('.search2Col').removeClass('hidden');

            }
        });
        $('#searchby').change();
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });

        $('#reversecol').click(function() {
            if ($("input[name='chk[]']").is(':checked')) {
                var checked = [];
                if (confirm("Are you sure, you want to reverse this invoice?")) {
                    $("input[name='chk[]']:checked").each(function()
                    {
                        checked.push(parseInt($(this).val()));
                    });

                    $.ajaxSetup({async: false});
                    $.post(URL + 'invoice/reverseCollection', {paymentids: checked})
                            .done(function(returnData) {
                                status = returnData;
                            })
                            .fail(function() {
                                alert('Connection Error!');
                            });

                    if (status == 'reversed') {
                        alert('Selected record(s) status already reversed');
                    } else {
                        alert('Selected record reversed');
                        location.reload();
                    }

                    $("input[name='chk[]']").removeAttr('checked');
                    return false;
                }
            } else {
                alert('Please select record.');
            }
        });



    })

</script>
<style>
    .cnitableCollection th, td{
        width :10%;
        padding:5px;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyInvoice bodysize">
    <form method="post" action="<?php echo URL ?>invoice/collection" style="margin-bottom: -4px;" class="formcollectionNew">
        <div class="invoiceHolderInvoice">
            <div id="newInvoice">
                <p class="headText">ALL COLLECTION</p>
                <a href="<?php echo URL ?>invoice/newRecurring">	
                    <input type="button" class="createNPAyment">
                </a>
            </div>	
            <div class="center2">
                <div id="search3">
                    <div style="float:left; margin-left: 24px;">
                        <input type="button"  name="sendinvoice" value="REVERSE" class="reversecol buttoninvoices" id="reversecol">
						 <input type="button"  name="printinvoice" value="PRINT PREVIEW" class="printbutton buttoninvoices" id="printbutton">
                    </div>
                    <div style="float:right;margin-right: 67px;">
                        <div class="invoiceselect invoiceselect2" id="invoiceselect">
                            <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
                            <select class="inumber" name="searchby" id="searchby">
                                <option style="color:black;" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>INVOICE NUMBER</option>
                                <option style="color:black;" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>HMO PARTNER</option>
                                <option style="color:black;" value="3" <?php echo ($searchby == 3) ? 'selected' : '' ?>>PAYMENT DATE</option>
                                <option style="color:black;" value="4" <?php echo ($searchby == 4) ? 'selected' : '' ?>>MODE OF PAYMENT</option>
				<option style="color:black;" value="5" <?php echo ($searchby == 5) ? 'selected' : '' ?>>DATE REVERSED</option>
                            </select>

                            <input type="search" name="search" placeholder="SEARCH" class="searchindex searchindex22
                                   <?php echo ($searchby == 3 || $searchby == 5) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 
                            <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>"
                                   placeholder="From Date" class="date dateInputText <?php echo ($searchby != 3 || $searchby != 5) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>
                            
                            <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                                   placeholder="To Date" class="date dateInputText <?php echo ($searchby != 3 || $searchby != 5) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                            <input type="submit" name="search2" value="Search" class="search2 <?php echo ($searchby != 3 || $searchby != 5) ? 'hidden' : '' ?>">


                            <input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''       ?>">
                        </div>
                    </div>	
                </div>
            </div>
        </div>
        <div>
            <table class="cnitableCollection" style="margin:auto;margin-top: -52px; width:98%;">
                <tr class="headinvoiceCollection">
                    <th style="padding:5px; width: 2%"><input type="checkbox"></th>
                    <th>Payment No.</th>
                    <th>Payment Date</th>
                    <th>Invoice No.</th>
                    <th>HMO Partner</th>
                    <th style="text-align:right;">Total Amount</th>
<!--                    <th width="10%" style="padding:5px;">Reference No.</th>
<th width="10%" style="padding:5px;">Mode of payment</th>-->
                    <th  style="text-align: center">Status</th>
                    <th  >Date Reversed</th>


                </tr>
                <?php
                $items = TblEnterPaymentMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
                $pages->items_total = count(TblEnterPaymentMySqlExtDAO::getData('', -1));
                $pages->mid_range = 9;
                $pages->paginate();
                $total = 0;
                if (count($items) > 0 && isset($items) && !empty($items)) {
                    $i = count($items);
                    foreach ($items as $item) {
                        ?>
                        <tr class="row-recurring tablecni">
                            <td style="padding:5px; width: 2%"><input type="checkbox" name='chk[]' class='chk' value='<?php echo $item->epid ?>'></td>
                            <td><a href="#" onclick="view(<?php echo $item->id ?>)"><?php echo $item->colNum; //'Col-' . sprintf('%1$07d', $i--)    ?></a>
                                <input type="hidden" class="colid" value="<?php echo $item->id ?>" />
                            </td>
                            <td class=""><?php echo date('m / d / Y', strtotime($item->dateReceived)) ?></td>
                            <td class=""><?php echo $item->invoiceNumber ?></td>
                            <td class=""><?php echo ucwords($item->clientName) ?></td>
                            <td style="text-align: right" class="">
                                <?php echo ($item->status == 'reversed') ? '(' . number_format((float) $item->appliedAmount * -1, 2) . ')' : number_format((float) $item->appliedAmount, 2); ?>
                            </td>
        <!--                            <td class=""><?php //echo $item->refNum     ?></td>
        <td class=""><?php //echo $item->mop     ?></td>-->
                            <td style="text-align: center"><?php echo $item->status ?></td>
                            <td><?php echo ($item->dateReversed == '0000-00-00') ? '' : date('m / d / Y', strtotime($item->dateReversed)) ?></td>

                        </tr>
                        <?php
                        if ($item->status == 'posted') {
                            $total += $item->appliedAmount;
                        }
                    }
                }
                ?>
                <tr >
                    <td colspan="8" style="padding-top:70px;"></td>
                </tr>
                <tr class="tcollect2 ttt">
                    <td colspan="4" ></td>
                    <td style="color:#fff;">Total Collections:</td>
                    <td style="text-align: right;color:#fff;"><?php echo number_format($total, 2); ?></td>
                    <td colspan="2"></td>
                </tr>
            </table>
            <div class="tfootTable" style="text-align:center; padding:6px 0 6px 0">
                <?php
                echo $pages->display_pages();
                echo "<span style=\"margin-left:25px\width:120px;color:#fff;font-family:verdana; font-size:12px;\"> " . $pages->display_jump_menu()
                . $pages->display_items_per_page() . "</span>";

                echo "Page $pages->current_page of $pages->num_pages";
                ?>
            </div>
        </div>

</div>

<input type='hidden' name='task' value=''/>
<input type="hidden" name="sortorder" value=""/>	
<input type="hidden" name="sortdirection" value=""/>	
</form>
<div class="popBack hidden">

</div>

<script>
    $(function() {
        $('.createNPAyment').click(function() {
            $.post(URL + 'invoice/enterpayment')
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


                    $('.close').click(function() {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
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
        $('#printbutton').click(function() {
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
                        checked = parseInt($(this).parents('tr').find('.colid').val());
                        return false;
                    });
                    $.post(URL + 'invoice/printPreviewCollection', {paymentid: checked})
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
       
    })
</script>