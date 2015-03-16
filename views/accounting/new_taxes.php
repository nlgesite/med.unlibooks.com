<style>
    input[type="checkbox checked"]{
    }
</style>
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
            $('#frmtax input[name="task"]').val('addtax');
        });

        $('#frmtax').submit(function() {

            checkresult = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>accounting/checkDuplicate", {checkitem: 'tax', text: $('input[name="taxCode"]').val()},
            function(result) {
                checkresult = result;
            });

            if (checkresult >= 1) {
                alert('Tax code already exist/record already in used in transaction(s)');
                return false;
            }
            
            if (returnurl == "client" || returnurl == "supplier" || returnurl == "savenew") {
                $.ajax({
                    url: "<?= URL ?>accounting/addtaxOption",
                    type: "POST",
                    data: {
                        taxCode: $('input[name="taxCode"]').val(),
                        description: $('#frmtax #description').val(),
                        taxName: $('input[name="taxName"]').val(),
                        rate: $('#frmtax input[name="rate"]').val(),
                        active: $('#frmtax input[name="active"]').val(),
                        task: $('#frmtax input[name="task"]').val(),
                        returnurl: 'addoption'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {

                        $("#frmtax").trigger('reset');
                        $("#frmtax input[type='text']").val('');
                        if (returnurl != 'savenew') {
                            $('#taxId option:last').before($('<option/>', {
                                value: jsonStr.value,
                                text: jsonStr.text
                            }));

                            $('#taxId option').removeAttr('selected')
                                    .filter('[value="' + jsonStr.value + '"]')
                                    .attr('selected', true);

                            $('.popup').addClass("hidden");
                            $('body').css('overflow', 'auto');
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

<?php
$tax = new TblTax();
$task = 'addtax';
Session::setSession('taxid', '');
if (isset($_POST['taxid'])) {
    $taxid = $_POST['taxid'];

    $tax = DAOFactory::getTblTaxDAO()->load($taxid);
    Session::setSession('taxid', $taxid);
    $task = 'updatetax';
}
?>
<div class="invoiceHolderNTaxes">
    <form method="post" action="<?php echo URL ?>accounting" class="cnt-formNTaxes" id="frmtax">
        <div id="newNTaxes">
            <input type="button" class="closeNTaxes" value="X">
            <p class="cnt-headNTaxes"><?php echo ($task == 'addtax') ? 'Create New' : 'Update' ?> Taxes</p>
            <hr class="hrNTaxes">
        </div>

        <div>
            <table style="margin-top: 20px;" class="taxTable1">	
                <tr>
                    <td class="taskANTaxes">Tax Code:</td>
                    <td><input type="text" class="tAccountNTaxes" name="taxCode" required value="<?php echo $tax->taxCode ?>"></td>
                </tr>
                <tr>
                    <td class="taskANTaxes">Tax Name:</td>
                    <td><input type="text" class="tAccountNTaxesName2" name="taxName" value="<?php echo $tax->description ?>" required></td>
                </tr>
                <tr>
                    <td><div class="taskANTaxesDesc" >Description:</div></td>
                    <td><textarea class="itemINTaxes" id="description" name="description"><?php echo $tax->description ?></textarea></td>
                </tr>	

            </table>

            <table class="tblaTaxesNew">
                <tr>	
                    <td class="rphNTaxes">Rate:</td>
                    <td><input type="text" class="rphINTaxes" placeholder="%" name="rate" value="<?php echo $tax->rate ?>" required></td>
                </tr>	
                <tr>
                    <td class="rphNTaxes2" ><input type="checkbox" checked  value="yes" name="active"></td>
                    <td><div style="margin-top: 10px; color: #000000; font-size:12px;">Active Account</div></td>	
                </tr>
            </table>

        </div>
        <div class="hrclassTaxeNew"></div>
        <div class="buttonTaxes">	
            <input type="submit" value="Save" class="saveBNTaxes">
            <?php if ($returnurl !== 'client') { ?>
                <input type="submit" value="Save and Add New" class="saanBNTaxes" id="saveAddNew">
            <?php } ?>
            <input type="hidden" value="<?php echo $task ?>" name="task"/>
        </div>
        <div style="clear:both"></div>
    </form>

</div>
