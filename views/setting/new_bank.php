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
if (isset($_POST['bankid'][0])) {
    $bankid = $_POST['bankid'][0];

    $bank = DAOFactory::getTblBankDAO()->load($bankid);
    Session::setSession('bankid', $bankid);
    $task = 'updatebank';
}
?>
<link href="<?= URL ?>views/setting/css/ajax.css" rel="stylesheet" type="text/css">

<script>
    returnurl = "<?php echo (isset($_GET['returnurl'])) ? $_GET['returnurl'] : '' ?>";
</script>

<script>
    $(function() {
        $('#frmbank').submit(function() {
            if (returnurl == "client") {
                $.ajax({
                    url: "<?= URL ?>setting/addbankOption",
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
                        $('#bank option:last').before($('<option/>', {
                            value: jsonStr.value,
                            text: jsonStr.text
                        }));

                        $('#bank option').removeAttr('selected')
                                .filter('[value="' + jsonStr.value + '"]')
                                .attr('selected', true);

                        $('.popup').addClass("hidden");
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
    <form method="post" action="<?php echo URL ?>setting/bank" class="cnt-formNNBank" id="frmbank">
        <div id="newNNBank">
            <input type="button" class="closeNNBank" value="X">
            <p class="cnt-headNNBank">New Bank</p>
            <hr class="hrNNBank">
        </div>

        <div>
            <table>	
                <tr>
                    <td class="taskANNBank">Bank Code:</td>
                    <td><input type="text" class="tAccountNNBank" name="bankCode" required value="<?php echo $bank->bankCode ?>"></td>
                </tr>
                <tr>
                    <td class="taskANNBankName">Bank Name:</td>
                    <td><input type="text" class="tAccountNNBankName2" name="bankName" required value="<?php echo $bank->bankName ?>"></td>
                </tr>
                <tr>
                    <td class="taskANNBankName">Bank Number:</td>
                    <td><input type="text" class="tAccountNNBankName2" name="bankAccountNumber" required value="<?php echo $bank->bankAccountNumber ?>"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked class="taskANNBankName2" name="active" value="yes" <?php echo ($bank->active == 'yes') ? 'checked' : '' ?>></td>

                </tr>
            </table>
            <div class="vatNNBank">Active Account</div>
            <table class="NewBanktbl">	
                <tr>
                    <td></td>
                    <td><textarea class="itemINNBank" id="note"></textarea></td>
                </tr>	
            </table>
            <div class="descTNNBank">Note:</div>
        </div>
        <div class="buttonNBankBelow">	
            <input type="submit" value="Save" class="saveBNNBank">
            <input type="button" value="Save and Add New" class="saanBNNBank">
        </div>
        <input type="hidden" name="task" value="<?php echo $task ?>"/>
    </form>
</div>
