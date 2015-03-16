<style>
    .createNewbank{
        margin-left: 747px;
        margin-top: -75px;
        width: 212px;
        height: 47px;
        border: none;
        background-image:url('<?=URL?>public/images/createNewBank.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;

    }


    .collect_tableBANK{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 15px;
    }
    .collect_tableBANK, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family:  Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .collect_tableBANK, td{
        font-size: 12px;
        color:black;
        font-family:  Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .collect_tableBANK a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
    }
    .collect_tableBANK tr:HOVER{
        background-color: #E8E8E8;
    }	
    .balBank{
        text-align:right;
        font-size: 12px;
        color:black;
        font-family:  Arial, Helvetica, verdana, sans-serif, tahoma;
        padding: 2px 5px 2px 5px;
        border:none;
        background:none;
    }
    .balBankHead{
        text-align:right;
        padding:2px 15px 2px 5px;
    }
</style>
<?php
$pages = new Paginator;
?>
<div class="invoiceHolderBANK">
    <div id="newBANK">
        <p class="headTextBANK">All Bank</p>
        <a href="<?=URL?>invoice/newRecurring">
            <input type="button"  class="createNewbank">
        </a>
        <div class="hrClass4BANK"></div>
    </div>
    <?php // echo Session::getSession('orgid');exit;?>
    <form method="post" action="<?php echo URL ?>accounting/Bank" id="form">
        <div class="div2BANK">
            <div id="button_containerBANK">
                <input type="button" value="Edit" class="printBANK addpaymentBANK" onclick="editrec()">
                <input type="button" value="Delete" class="edit1BANK" onclick="deleterec()">
            </div>
        </div>

        <div>
            <table class="collect_tableBANK">
                <tr class="head_collectBANK">
                    <th style="width: 3%;"><input type="checkbox"></th>
                    <th width="15%">Bank Code</th>
                    <th width="30%">Bank Name</th>
                    <th width="15%">Bank Number</th>
                    <th width="15%" class="balBankHead">Balance</th>
                    <th width="15%">Active</th>
                </tr>
                <?php
//                $banks = DAOFactory::getTblBankDAO()->queryByOrgId(Session::getSession('orgid'));
                $banks = TblBankMySqlExtDAO::getData(isset($_GET['ipp']) ? $_GET['ipp'] : '25');
                $pages->items_total = count($banks);
                $pages->mid_range = 9;
                $pages->paginate();
                foreach ($banks as $item) {
                    ?>
                    <tr class="table_collectionBANK">
                        <td class=""><input type="checkbox" name='chk[]' class='chk' value="<?php echo $item->id ?>"></td>
                        <td class=""><?php echo $item->bankCode ?></td>
                        <td class=""><?php echo $item->bankName ?></td>
                        <td class=""><?php echo $item->bankAccountNumber ?></td>
                        <td><input type="text" class="isNumeric balBank" value="0.00" readonly></td>
                        <td class=""><?php echo ucfirst($item->active) ?></td>
                    </tr>
                    <?php
                }
                ?>
                <tfoot>
                    <tr>
                        <td colspan="5" style="text-align: center">
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
        </div>
        <input type="hidden" name="task" value="<?php echo $task ?>"/>
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
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });
            $.post(URL + 'accounting/checkbank', {bankids: checked})
                    .done(function(returnData) {
//                                alert(returnData); return false;
                        if (returnData == 1) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('delbank');
                                $('#form').submit();
                            }
                        }

                    });

        } else {
            alert('Please select record to delete');
        }
    }

    function editrec() {
        if ($('.chk').is(':checked')) {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                return false;
            });

            $.post(URL + 'accounting/new_bank', {bankid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNNBank').click(function() {
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
<script>
    $(function() {
        $('.createNewbank').click(function() {
            $.post(URL + 'accounting/new_bank')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNNBank').click(function() {
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
        });

    })
</script>
