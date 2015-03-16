<style>
    .invoiceHolderNTaxes{
        width: 100%;
        margin-top: 50px;
    }
    #newNTaxes{
        font-family: Calibri;
        margin-left: 20px;
        font-style: italic;
        font-weight: none;

    }
    .cnt-formNTaxes{
        width: 735px;
        margin: auto;
        background-color: white;
    }
    .cnt-headNTaxes{
        margin-top: -15px;
        font-size: 30px;
        font-family:verdana;
    }

    .hrNTaxes{
        width: 733px;
        border: 2px solid gray;
        margin-left: -21px;
        margin-top: -20px;
        border-radius: 3px;
        height: 4px;
        background-color: gray;

    }
    .closeNTaxes{
        background-color: gray;
        color: white;
        border: none;
        border-radius: 2px;
        font-family: Cambria;
        font-style: bold;
        font-size: 16px;
        height: 25px;
        margin-left: 693px;

    }
    .taskANTaxes{
        color: #000000;
        font-family: verdana;
        font-size: 12px;
        padding-left: 20px;
        padding-top: 10px;
    }
    .tAccountNTaxes{
        width: 190px;
        height: 27px;
        background-color: white;
        font-family: verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        padding:5px;
        margin-left:-5px;
    }
    .descTNTaxes{
        position: absolute;
        margin-left: 10px;
        margin-top: 70px;
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .itemINTaxes{
        width: 300px;
        height:120px;
        background-color: white;
        font-family: verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-top: 5px;
        margin-left: -5px;
        max-width: 300px;
        max-height:150px;
        padding:5px;
    }
    .tblaTaxesNew{
        float: right;
        margin-right: 45px;
        margin-top: -195px;
    }
    .taskANTaxesDesc{
        margin-top: -48px;
        font-family: verdana;
        font-size: 12px;
        color: #000000;
    }
    .rphNTaxes{
        color: #000000;
        font-family: verdana;
        font-size: 12px;
    }
    .rphINTaxes{
        width: 130px;
        height: 30px;
        background-color: white;
        font-family: verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        padding-left: 5px;
        margin-left: 20px;
    }
    .rphNTaxes2{
        padding-top: 13px;
    }
    .vatNTaxesnEW2{
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
        font-style: italic;
        float: right;
        margin-top: -51px;
        padding-right: 186px;
    }
    .vatSNTaxes{
        position: absolute;
        margin-top: 42px;
        margin-left: 570px;
        width: 130px;
        height: 30px;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
        border: solid 1px #C8C8C8;
    }
    .saveBNTaxes{
        margin-top: 7px;
        margin-left: 0px;
        width: 105px;
        height:31px;
        border-radius: 5px;
        font-family: verdana;
        font-size: 13px;
        color: white;
        border: none;
        cursor: pointer;
        background: ##B6B1B1;
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%);
        background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
    }
    .saanBNTaxes{
        width: 150px;
        height:31px;
        border-radius: 5px;
        font-family: verdana;
        font-size: 12px;
        color: white;
        border: none;
        cursor: pointer;
        background: ##B6B1B1;
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%);
        background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
    }
    .taxTable1 td{
        padding-left: 25px;
    }
    .tAccountNTaxesName2{
        margin-top: 5px;
        width: 300px;
        height: 27px;
        background-color: white;
        font-family: verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-left: -5px;
        padding:5px;
    }
    .buttonTaxes{
        /*background-color: #E5F1CE;*/
        /* width: 735px; */
        height: 45px;
        margin-top: 5px;
        padding-bottom: 5px;
        float:right;
        margin-right:15px;
    }
    .hrclassTaxeNew{
        width: 99%;
        margin: auto;
        margin-top: 59px;
        border-top: none;
        border-bottom: 1px solid c8c8c8;
        border-left: none;
        border: right:none;
    }
</style>
<?php
$event = 'add';
$vat = new TblTax();
if (isset($_POST['taxid'])) { 
    $event = 'update';
    $vat = DAOFactory::getTblTaxDAO()->load($_POST['taxid']);
    Session::setSession('taxid', $_POST['taxid']);
}
?>

<script>
    evnt = "<?php echo $event; ?>"; 
</script>
<div class="invoiceHolderNTaxes">
    <form method="post" action="<?php echo URL . 'vat/' . $event ?>" class="cnt-formNTaxes" id="frmtax">
        <div id="newNTaxes">
            <input type="button" class="closeNTaxes" value="X">
            <p class="cnt-headNTaxes">Taxes</p>
            <hr class="hrNTaxes">
        </div>

        <div>
            <table style="margin-top: 20px;" class="taxTable1">	
                <tr>
                    <td class="taskANTaxes">Tax Code:</td>
                    <td><input type="text" class="tAccountNTaxes" name="taxCode" required value="<?php echo $vat->taxCode ?>"></td>
                </tr>
                <tr>
                    <td class="taskANTaxes">Tax Name:</td>
                    <td><input type="text" class="tAccountNTaxesName2" name="taxName" value="<?php echo $vat->description ?>" required></td>
                </tr>
                <tr>
                    <td><div class="taskANTaxesDesc" >Description:</div></td>
                    <td><textarea class="itemINTaxes" id="description" name="description"><?php echo $vat->description ?></textarea></td>
                </tr>	

            </table>

            <table class="tblaTaxesNew">
                <tr>	
                    <td class="rphNTaxes">Rate:</td>
                    <td><input type="text" class="rphINTaxes" placeholder="%" name="rate" value="<?php echo $vat->rate ?>" required></td>
                </tr>	
                <tr>
                    <td class="rphNTaxes2" ><input type="checkbox" <?php echo ($vat->active=='yes')? 'checked':'' ?>  value="yes" name="active"></td>
                    <td><div style="margin-top: 10px; color: #000000; font-size:12px;">Active Account</div></td>	
                </tr>
            </table>

        </div>


        <div class="hrclassTaxeNew"></div>
        <div class="buttonTaxes">	
            <input type="submit" value="Save" class="saveBNTaxes">
            <input type="submit" value="Save and Add New" class="saanBNTaxes" id="saveAddNew" onclick="returnurl = 'savenew'">
            <input type="hidden" value="" name="task"/>

        </div>

        <div style="clear:both"></div>


    </form>
</div>

<script>
    $(function() {
        $('#frmtax').submit(function() {
            if (returnurl == "savenew") {
                $.post(URL + 'vat/' + evnt, $(this).serialize())
                        .done(function(returnData) { alert('test');
                            $('#frmtax').trigger('reset');
                            $('input[type="text"]').val('');
                            returnurl = '';
                            evnt = "add";
                            $('#frmtax').attr(URL + 'vat/add');
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            }
        });

    })
</script>