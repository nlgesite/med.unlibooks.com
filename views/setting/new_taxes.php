<style>
    input[type="checkbox checked"]{

    }
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
<link href="<?= URL ?>views/setting/css/ajax.css" rel="stylesheet" type="text/css">

<script>
    returnurl = "<?php echo (isset($_GET['returnurl'])) ? $_GET['returnurl'] : '' ?>";
</script>

<script>
    $(function() {
        $('#frmtax').submit(function() {
            if (returnurl == "client") {
                $.ajax({
                    url: "<?= URL ?>setting/addtaxOption",
                    type: "POST",
                    data: {
                        taxCode: $('input[name="taxCode"]').val(),
                        description: $('#frmtax #description').val(),
                        taxName: $('input[name="taxName"]').val(),
                        rate: $('#frmtax input[name="rate"]').val(),
                        active: $('#frmtax input[name="active"]').val(),
                        returnurl: 'addoption'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        $('#taxId option:last').before($('<option/>', {
                            value: jsonStr.value,
                            text: jsonStr.text
                        }));

                        $('#taxId option').removeAttr('selected')
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

<?php
$tax = new TblTax();
$task = 'addtax';
if (isset($_POST['taxid'][0])) {
    $taxid = $_POST['taxid'][0];

    $tax = DAOFactory::getTblTaxDAO()->load($taxid);
    Session::setSession('taxid', $taxid);
    $task = 'updatetax';
}
?>
<div class="invoiceHolderNTaxes">
    <form method="post" action="<?php echo URL ?>setting" class="cnt-formNTaxes" id="frmtax">
        <div id="newNTaxes">
            <input type="button" class="closeNTaxes" value="X">
            <p class="cnt-headNTaxes">New Taxes</p>
            <hr class="hrNTaxes">
        </div>

        <div>
            <table>	
                <tr>
                    <td class="taskANTaxes">Tax Code:</td>
                    <td><input type="text" class="tAccountNTaxes" name="taxCode" required value="<?php echo $tax->taxCode ?>"></td>
                </tr>
                <tr>
                    <td class="taskANTaxes">Tax Name:</td>
                    <td><input type="text" class="tAccountNTaxesName2" name="taxName" value="<?php echo $tax->description ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><textarea class="itemINTaxes" id="description" ><?php echo $tax->description ?></textarea></td>
                </tr>	

            </table>
            <div class="taskANTaxesDesc" >Description:</div>
            <table class="tblaTaxesNew">
                <tr>	
                    <td class="rphNTaxes">Rate:</td>
                    <td><input type="text" class="rphINTaxes" placeholder="%" name="rate" value="<?php echo $tax->rate ?>" required></td>
                </tr>	
                <tr>
                    <td class="rphNTaxes2" ><input type="checkbox" checked  value="yes" name="active"></td>
                    <td><div style="margin-top: 10px; color: #003366; font-size:12px;">Active Account</div></td>	
                </tr>
            </table>
        </div>
        <div class="buttonTaxes">	
            <input type="submit" value="Save" class="saveBNTaxes">
            <?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?>
                <input type="button" value="Save and Add New" <?php echo Session::getSession('function') ?> class="saanBNTaxes">
            <?php } ?>
        </div>
    </form>
</div>
