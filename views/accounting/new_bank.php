<style>
    .popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
</style>

<?php
$bank = new TblBank();
$task = 'addbank';
Session::setSession('bankid', '');
if (isset($_POST['bankid'])) {
    $bankid = $_POST['bankid'];

    $bank = DAOFactory::getTblBankDAO()->load($bankid);
    Session::setSession('bankid', $bankid);
    $task = 'updatebank';
}
?>
<link href="<?=URL?>views/accounting/css/ajax.css" rel="stylesheet" type="text/css">

<script>
    returnurl = "<?php
if (isset($_GET['returnurl'])) {
    $returnurl = $_GET['returnurl'];
    echo $_GET['returnurl'];
} elseif (isset($_POST['returnurl'])) {
    $returnurl = $_POST['returnurl'];
    echo $_POST['returnurl'];
} else {
    $returnurl = '';
    echo '';
}
?>";
</script>

<script>
    $(function() {
        $('#saveAddNew').click(function() {
            returnurl = 'savenew';
            $('#frmbank input[name="task"]').val('addbank');
        });

        $('#frmbank').submit(function() {
            checkresult = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>accounting/checkDuplicate", {checkitem: 'bank', text: $('input[name="bankCode"]').val()},
            function(result) {
                checkresult = result;
            });

            if (checkresult >= 1) {
                alert('Bank code already exist/record already in used in transaction(s)');
                return false;
            }

            if (returnurl == "client" || returnurl == "savenew") { 
                $.ajax({
                    url: "<?= URL ?>accounting/addbankOption",
                    type: "POST",
                    data: {
                        bankCode: $('input[name="bankCode"]').val(),
                        bankName: $('input[name="bankName"]').val(),
                        bankAccountNumber: $('input[name="bankAccountNumber"]').val(),
                        note: $('#frmbank #note').val(),
                        active: $('#frmbank input[name="active"]').val(),
                        task: $('#frmbank input[name="task"]').val(),
                        returnurl: 'addoption'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        $("#frmbank").trigger('reset');
                        $('#frmbank input[type="text"]').val('');
                        if (returnurl != 'savenew') {
                             $('#bank option:last').before($('<option/>', {
                                value: jsonStr.value,
                                text: jsonStr.text
                            }));

                            $('#bank option').removeAttr('selected')
                                    .filter('[value="' + jsonStr.value + '"]')
                                    .attr('selected', true);

                            $('#bankname').text(jsonStr.accntnumber);
                            
                            $('.popup').addClass("hidden");
                        }
                        returnurl ='';
                        return false;
                    }, error: function(xhr, textStatus, errorThrown) {
                        alert(xhr.responseText);
                    }
                });
                return false;
            }

        });
    })
</script>

<div class="invoiceHolderNNBank">
    <form method="post" action="<?php echo URL ?>accounting/bank" class="cnt-formNNBank" id="frmbank">
        <div id="newNNBank">
            <input type="button" class="closeNNBank" value="X">
            <p class="cnt-headNNBank"><?php echo ($task == 'addbank') ? 'Create New' : 'Update' ?> Bank</p>
            <hr class="hrNNBank">
        </div>

        <div>
            <table class="bankTable1">	
                <tr>
                    <td class="">Bank Code:</td>
                    <td><input type="text" class="tAccountNNBank" name="bankCode" required value="<?php echo $bank->bankCode ?>"></td>
                </tr>
                <tr>
                    <td class="">Bank Name:</td>
                    <td><input type="text" class="tAccountNNBankName2" name="bankName" required value="<?php echo $bank->bankName ?>"></td>
                </tr>
                <tr>
                    <td class="">Bank Number:</td>
                    <td><input type="text" class="tAccountNNBankName2" name="bankAccountNumber" required value="<?php echo $bank->bankAccountNumber ?>"></td>
                </tr>
                <tr>
                    <td><div class="vatNNBank">Active Account</div></td>
                    <td><input type="checkbox" checked class="taskANNBankName2" name="active" value="yes" <?php echo ($bank->active == 'yes') ? 'checked' : '' ?>></td>

                </tr>
            </table>

            <table class="NewBanktbl">	
                <tr>
                    <td></td>
                    <td><textarea class="itemINNBank" id="note"></textarea></td>
                </tr>	
            </table>
            <div class="descTNNBank">Note:</div>
        </div>
        <div class="bankHRNew"></div>

        <div class="buttonNBankBelow">	
            <input type="submit" value="Save" class="saveBNNBank">
<?php if ($returnurl !== 'client') { ?>
                <input type="submit" value="Save and Add New <?php echo $returnurl ?>" class="saanBNNBank" id="saveAddNew">
<?php } ?>
            <input type="hidden" name="task" value="<?php echo $task ?>"/>
        </div>

        <div style="clear:both"></div>
    </form>

</div>
