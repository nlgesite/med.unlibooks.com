<style>
    .createNewbank{
        margin-left: 750px;
        margin-top: -77px;
        width: 212px;
        height: 42px;
        border: none;
        background-image:url('<?= URL ?>public/images/createNewBank.png');
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
        font-family: calibri;
        text-align: left;
        padding: 5px;
    }
    .collect_tableBANK, td{
        font-size: 12px;
        color:black;
        font-family: calibri;
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
</style>
<div class="invoiceHolderBANK">
    <div id="newBANK">
        <p class="headTextBANK">All Bank</p>
        <a href="<?= URL ?>invoice/newRecurring">
            <input type="button"  class="createNewbank">
        </a>
        <div class="hrClass4BANK"></div>
    </div>
    <form method="post" action="<?php echo URL ?>setting/Bank" id="form">
        <div class="div2BANK">
            <div id="button_containerBANK">
                <input type="button" value="Edit" class="printBANK addpaymentBANK" onclick="editrec()">
                <input type="button" value="Delete" class="edit1BANK" onclick="deleterec()">
            </div>
        </div>

        <div>
            <table class="collect_tableBANK">
                <tr class="head_collectBANK">
                    <th><input type="checkbox"></th>
                    <th>Bank Code</th>
                    <th>Bank Name</th>
                    <th>Bank Number</th>
                    <th>Active</th>
                </tr>
                <?php
                $banks = DAOFactory::getTblBankDAO()->queryByOrgId(Session::getSession('medorgid'));

                foreach ($banks as $item) {
                    ?>
                    <tr class="table_collectionBANK">
                        <td class=""><input type="checkbox" name='chk[]' class='chk' value="<?php echo $item->id ?>"></td>
                        <td class=""><?php echo $item->bankCode ?></td>
                        <td class=""><?php echo $item->bankName ?></td>
                        <td class=""><?php echo $item->bankAccountNumber ?></td>
                        <td class=""><?php echo ucfirst($item->active) ?></td>
                    </tr>
                    <?php
                }
                ?>
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
            $.post(URL + 'invoice/checkbank', {bankids: checked})
                    .done(function(returnData) {
//                                alert(returnData); return false;
                        if (returnData) {
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

            $.post(URL + 'setting/new_bank', {bankid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNNBank').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
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
            $.post(URL + 'setting/new_bank')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');
                        $('.closeNNBank').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });

    })
</script>
