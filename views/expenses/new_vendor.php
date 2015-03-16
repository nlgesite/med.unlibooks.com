<style>
    .newText{

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
    .hrclasssuppliers{
        width: 99%;
        margin: auto;
        margin-top: 15px;
        border-top: none;
        border-bottom: 1px solid #c8c8c8;
        border-left:none;
        border-right:none;
        margin-top:272px;
    }
    .vendorPop{
        margin-left: 20px;
        font-family:verdana;
        font-size:12px;
        margin-top:10px;
    }	
    .newVendorNameTextA{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 282px;
        background-color: white;
        margin-top: 8px;
        margin-left: 24px;
        height: 90px;
        /* position: absolute; */
        border: 1px solid #C8C8C8;
        max-width: 248px;
        max-height: 70px;
        padding: 5px;
    }
    .img2 {
        position: absolute;
        margin-left: 25px;
        height: 17px;
        z-index: -1;
        top: 186px;
    }
    .invoiceHolderNewVendor{
        margin-top:108px;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link href="<?= URL ?>views/expenses/css/ajax.css" rel="stylesheet" type="text/css">
<?php
$returnurl = '';
if (isset($_POST['returnurl'])) {
    $returnurl = $_POST['returnurl'];
}
?>

<?php
$supplier = $this->supplier;
$task = 'addsupplier';
?>

<div class="invoiceHolderNewVendor">
    <form class="nifNewVendor boxshadow" id="vendorfrm">
        <div id="newNewVendor" class="new1Client22">
            <input type="button" class="closeNewVendor popx" value="">
            <p class="niNewVendor ni1Clienthmo"><?= $supplier->id == '' ? 'ADD NEW' : 'UPDATE' ?> VENDOR</p><p class="venDetails hidden">Vendor Details</p>

        </div>

        <div style="margin: 0 auto; width: 735px; margin-left:25px;">
            <div style="float: left; width: 396px;">
                <table class="vendorPop">
                    <tr>
                        <td style="padding-top: 5px;">Vendor ID No.:</td>
                        <td style="padding-top: 5px;"><input type="text" name="supplierAccount" class="NewInputVendor" value="<?php echo ($task=='addsupplier')? TblSupplierMySqlExtDAO::getMaxNumId():$supplier->supplierAccount ?>" required maxlength="20"></td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px;">Vendor Name:</td><!--value="<--?php echo (Session::getSession('companyName')!='') ? Session::getSession('companyName') : '' ?>"-->
                        <td style="padding-top: 5px;"><input type="text" name="name" class="newVendorNameInput " value="<?php echo $supplier->name ?>" required maxlength="50" /> 
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px;">Address:</td>
                        <td style="padding-top: 5px;"><textarea class="newVendorNameTextA" name="address" ><?php echo $supplier->address ?></textarea></td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px;">E-Mail Address:</td>
                        <td style="padding-top: 5px;"><input type="text" class="newVendorNameInput" name="emailAddress" value="<?php echo $supplier->emailAddress ?>" maxlength="50"></td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px;"><div class="newVendorAccount">Active Account</div></td>
                        <td style="padding-top: 8px;"><input name="isactive" type="checkbox" 
                                                             <?= $supplier->activeAccount == 'no' ? '' : 'checked' ?>></td>
                    </tr>
                </table>

                <div style=" width: 382px; margin-top:87px;margin-left: 343px;">
                    <table class="tblNewVendor">
                        <tr>
                            <td style="padding-top: 8px;">Phone No:</td>
                            <td style="padding-top: 8px;"><input type="text" class="newVendorPhoneInput" name="phoneNum" value="<?php echo $supplier->phoneNum ?>" maxlength="20" ></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 8px;">Fax No:</td>
                            <td style="padding-top: 8px;"><input type="text" class="newVendorPhoneInput" name="faxNum" value="<?php echo $supplier->faxNum ?>" maxlength="20"></td>
                        </tr>
                    </table>
                </div>
            </div>	
        </div>

        <div class="divSaveBBelowNewVendor" style="margin-top: 278px;">
            <div style="float:right;">
                <input type="submit" value="Save" class="saveBNewVendor addsavebutton" id="vendorsave">
                <?php
                if ($returnurl != 'expense') {
                    echo $returnurl
                    ?>
                    <input type="submit" value="Save and Add New" class="saanBNewVendor addsavebutton" id="saanBNewVendor">
                <?php } ?>

            </div>
            <input type="hidden" name="task" value="<?php echo $task ?>"/>
        </div>
    </form>

</div><div class="clear"></div>
<div class="hidden popup"></div>
<script>
    $(function() {
        $('#saanBNewVendor').click(function() {
			confirmSave = confirm('Do you want to add new Vendor?');
			if(confirmSave){
					$.post('<?= URL ?>expenses/setSupplier?id=<?= $supplier->id ?>', $('#vendorfrm').serialize())
                                .done(function(returnData) {
                                    if (returnData == 0 || $.isNumeric(returnData)) {
                                        // alert('Do you want to add this vendor?');
                                        $('.createNSupplier').click();
                                    } else {
                                        alert(returnData);
                                    }
                                });
						}
                        return false;
                    });
					
					
                    $('#vendorfrm').submit(function() {
						/* confirmDoyou = confirm('Do you want to record the Vendor?');
							if(confirmDoyou){
						return true;
						}else  */
						confirmPost = confirm('Do you want to add new Vendor?');
							if (!confirmPost) {
								return false;
							} else {
						
						
                        if (typeof (newrecord) == "undefined") {
                            newrecord = '';
                    }
					
                        $.post('<?= URL ?>expenses/setSupplier?id=<?= $supplier->id ?>', $(this).serialize())
                                            .done(function(returnData) {
                                                if (returnData == 0 || $.isNumeric(returnData)) {
                                                    if (newrecord == 'new') {
                                                        $('.supplierId').each(function(i) {
                                                            $('option:last', $(this)).before($('<option/>', {
                                                                value: returnData,
                                                                text: $('#vendorfrm input[name="name"]').val()
                                                            }));
                                                        });
                                                        $('.supplierId option').removeAttr('selected')
                                                                .filter('[value="' + returnData + '"]')
                                                                .attr('selected', true);

                                                        $('.popBack').addClass("hidden");
//                                                        $('.taskfrm').addClass('hidden');
                                                        $('body').css('overflow', 'auto');
                                                    } else {
                                                        location.reload();
                                                    }
                                                } else {
                                                    alert(returnData);
                                                }
                                            });
                                    return false;
									}
                                });
                            });
</script>