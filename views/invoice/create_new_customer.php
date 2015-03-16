<style>
    .img2 {
        position: absolute;
        margin-left: 25px;
        height: 17px;
        z-index: -1;
        top: 186px;
    }
    body{
        /*overflow:hidden;*/
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
    .invoiceHolderCNWClient{
        width: 100%;
        margin-top: 30px;
    }	
    .nif1Client{
        width: 810px;
        background-color: white;
        margin: auto;
    }
    #new1Client{

    }
    .close1Client{
        margin-left:750px;
        border: none;
        border-radius: 2px;
        font-family: Cambria;
        font-weight: bold;
        font-size: 13px;
        height: 18px;
        width: 22px;
        margin-top: 10px;
    }
    .ni1Client{

    }
    .hrCNCClient{
        width:808px;
        border:  solid 2px gray;
        margin-left: -21px;
        margin-top: -20px;
        border-radius: 3px;
        height: 4px;
        background-color: gray;

    }
    .customerNCNCClientNew1{
        margin-top: 2px;
        margin-left: 5px;
        width: 208px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding:5px;
    }
    .tnumberCNCClient{
        margin-top: 73px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .tinNCNCClient{
        margin-top: 73px;
        margin-left: 154px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .eMailCNCClient{
        margin-top: 105px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .mailCNCClient{
        margin-top: 106px;
        margin-left: 154px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .addSCNCClient{
        margin-top: 138px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .addressCNCClientClient{
        margin-top: 3px !important; 
        font-family: Calibri;
        font-size: 14px;
        width:208px;
        height: 90px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 11px;
        font-family: verdana;
        max-width: 208px;
        max-height: 90px;
        float: left;
        margin-left: 5px;
        padding:5px;
    }
    .phoneNCNCClient{
        margin-top: 218px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .pNoCNCClient{
        width: 128px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .faxNCNCClient{
        margin-top: 250px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .fNoCNCClient{
        margin-top: 251px;
        margin-left: 154px;
        width: 100px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .cAccountCNCClient{
        margin-top: 12px;
        margin-left: 14px;
        color: #000000;
        font-family: verdana;
        /* font-weight: bold; */
        font-size: 12px;
        padding-left: 15px;
    }
    .customerACNCClient{
        margin-left: 5px;
        height: 27px;
        width: 128px;
        font-size: 12px;
        font-family: verdana;
        padding: 5px;
    }
    .cNameCNCClient{
        padding-top: 5px;
        padding-left: 16px;
        color:#000000;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
    }
    .ccc_tableClient{
        float: right;
        margin-top: -326px;
        margin-right:7px;
    }
    .ccc_tableClient td{

    }
    .ccpCNCClientpatient{
        font-family:verdana;
        font-style:italic;
        font-size:12px;
        font-weight:bold;
        color:#000;
    }
    .contactNaCNCClient{
        color:#000000;
        font-family: verdana;
        font-weight:normal;
        font-size: 12px;
        padding-top: 22px;
    }
    .cusNameCNCClient{
        margin-top: 20px;
        width: 208px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding:5px;
    }
    .contactNoCNCClient{
        color:#000000;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
        padding-top: 5px;
        padding-right: 25px;
    }
    .cNoCNCClient{
        margin-top: 2px;
        margin-right: 25px;
        width: 208px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding:5px;
    }
    .acu_tableClient{

    }
    .asuCNCClient{
        padding-top: 20px;
        padding-left: 14px;
        font-family:verdana;
        font-style:italic;
        font-size:12px;
        color:#008B8B;
        font-weight:bold;
    }
    .moptable2Client{
        color:#000000;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
        padding-left: 14px;
    }
    .table2mopClient{
        width: 155px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        margin-left: 0px;
        margin-top: 2px;
    }
    .moptable2aClient{
        color:#000000;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
        padding-top: 5px;
        padding-left: 14px;
    }
    .table2mop2Client{
        margin-top: 2px;
        margin-left: 0px;
        width: 155px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
    }
    .InclusiveOfVatClientcheckClient{
        padding-top: 5px;
        margin-left:10px;
        background-color: gray;
        border-radius: 5px;
        border-color: #C8C8C8;
    }
    .InclusiveOfVatClientTextClient{
        margin-top: -53px; 
        color: #000000;
        font-family: verdana;
        font-size: 12px;
        font-style: italic;
        /* float: left; */
        /* margin-left: 10; */
    }
    .termsTaCNCClient{
        margin-top: 2px;
        margin-left:0px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
    }
    .moptable2bClientNew3{
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
        padding-top: 2px;
        padding-left: 14px;
        margin-top: 2px;
        margin-right: 9px;
        /* position: relative; */
        float: right;
    }
    .moptable2acClient{
        float: right;
        color: #000000;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
    }
    .table2bankClient{
        float: right;
        width: 128px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
        margin-left:30px;
    }
    .moptable2acDivClient{
        float: right;
        color:#000000;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
    }
    .table2bankDivClient{
        float: right;
        width: 128px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
        margin-top: -3px;
    }
    .divCNCBelowClient{
        /*background-color: #E1F1CE;*/
        /*width: 810px;*/
        /*height: 50px;*/
        margin-top: 15px;
        /*margin-left: 513px;*/
        float:right;
        margin-bottom:15px;
        margin-right:15px;
    }
    .saveBCNCClient{
        width: 99px;
        height:31px;
        border-radius: 2px;
        font-family: verdana;
        font-size: 13px;
        color: white;
        border: none;
        cursor: pointer;
    }

    .saanBCNCClient{
        width: 149px;
        height:31px;
        border-radius: 2px;
        font-family: verdana;
        font-size: 13px;
        color: white;
        border: none;
        cursor: pointer;
    }
    .clientsIOV{
        color:#003366;
        font-family: Calibri;
        font-size: 12px;
        font-style: italic;
        margin-top: -160px;
        margin-left: 33px;
    }
    .table2trtd{
        margin-left: 40px;
    }
    .tble3clients{
        float: right;
        margin-top: -212px;
        margin-right: 25px;
        color:#000000;
        font-weight:normal;
    }
    .tble3clients input[type="text"], select{
        margin-top: 2px;
        margin-right: 25px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding:5px;
    }
    .IOVClientNew{
        margin-top: -20px;
        float: left;
        margin-left: 28px;
    }
    .checkAdd{
        background-color:yellow;
    }
    .bank{
        width:155px;
        font-family:verdana;
        font-size:12px;
        height:27px;
    }
    .hrclassClient{
        width: 99%;
        margin: auto;
        margin-top: 15px;
        border-top: none;
        border-bottom: solid 1px #c8c8c8;
        border-left:none;
        border-right:none;
    }
    .banknamespan{
        border: solid 1px #C8C8C8;
        width: 146px;
        font-family: verdana;
        font-size: 12px;
        height: 17px;
        padding: 5px 2px 5px 5px;	}
    </style>

    <script>
        $(function() {
            returnurl = '';
            var $htmltax;
            var $htmlbank;
            $.ajaxSetup({async: false});
            $.when(
                    $.get(URL + 'accounting/tax', {
                        returnurl: 'client'
                    }),
                    $.get(URL + 'accounting/new_bank', {
                        returnurl: 'client'
                    })).then(function(res1, res2) {
                $htmltax = res1[0];
                $htmlbank = res2[0];
            });
            $('.taxId').change(function() {
                if ($(this).val() == 'addtax') {
                    $('.popup').html($htmltax);
                    $('.popup').removeClass('hidden');
                    $('.closeNTaxes').click(function() {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                    });
                }
            });
            $('.bank').change(function() {
                if ($(this).val() == 'addbank') {
                    $('.popup').html($htmlbank);
                    $('.popup').removeClass('hidden');
                    $('.closeNNBank').click(function() {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                    });
                } else {
                    $.post("<?= URL ?>invoice/bankname", {bankid: $(this).val()},
                    function(result) { //alert(result);
                        $('#bankname').text(result);
                    });
                }
            });

            /*   $('#saveAddNew').click(function() {
             confirmPost = confirm('Do you want to add new Patient?');
             if(!confirmPost){
             return false;
             } else {
             returnurl = 'savenew';
             $('#newcustomerform input[name="task"]').val('addclient');
             saveCustomer();
             }
             });
             
             */
            $('#saveAddNew').click(function() {
                returnurl = 'savenew';
            });

            /* 	$('#saveclient').click(function() {
             confirmPost = confirm('Do you want to add new Patient?');
             if(!confirmPost){
             return false;
             } else {
             returnurl = '';
             
             }
             }); */

            $('#newcustomerform').submit(function() {
                confirmPost = confirm('Do you want to add new Patient?');
                if (!confirmPost) {
                    return false;
                } else {

                    if (typeof (newrecord) == "undefined") {
                        newrecord = '';
                    }
//                alert('dfd');
//                if (returnurl == "savenew" || newrecord=='new') { 
                    $.ajax({
                        url: URL + "invoice/customers",
                        type: "POST",
                        data: //$('#newcustomerform').serialized() + "&returnurl=addoption"
                                {
                                    clientAccount: $('input[name="clientAccount"]').val(),
                                    clientName: $('input[name="clientName"]').val(),
                                    address: $('#caddress').val(),
                                    tinNum: $('input[name="tinNum"]').val(),
                                    emailAddress: $('input[name="emailAddress"]').val(),
                                    phoneNumber: $('input[name="phoneNumber"]').val(),
                                    faxNumber: $('input[name="faxNumber"]').val(),
                                    contactName: $('input[name="contactName"]').val(),
                                    contactNum: $('input[name="contactNum"]').val(),
                                    contactEmailAddress: $('input[name="contactEmailAddress"]').val(),
                                    hmo: $('input[name="hmo"]').val(),
                                    hmoNum: $('input[name="hmoNum"]').val(),
                                    taxId: $('#taxId').val(),
                                    bankId: $('#bank').val(),
                                    mopId: $('#mopId').val(),
                                    termId: 0,
                                    currencyId: $('#ccurrencyId').val(),
                                    vatInclusive: $('input[name="vatInclusive"]').val(),
                                    task: $('#newcustomerform input[name="task"]').val(),
                                    returnurl: 'addoption',
                                    glPosting: $('#newcustomerform #glPosting').val(),
                                    active: $('#newcustomerform #active').is(':checked') ? 'yes' : 'no'
                                }
                        ,
                        dataType: "JSON",
                        success: function(jsonStr) {
                            if (jsonStr.value == 'error') {
                                alert(jsonStr.text);
                                return false;
                            } else {
//                                $("#newcustomerform").trigger('reset');
//                                $("input[type='text']").val('');
                                if (newrecord == "new") {
                                    $('#client option:last').before($('<option/>', {
                                        value: jsonStr.value,
                                        text: jsonStr.clientAccount + ' - ' + jsonStr.text
                                    }));
                                    $('#client option').removeAttr('selected')
                                            .filter('[value="' + jsonStr.value + '"]')
                                            .attr('selected', true);
                                    //                        alert(jsonStr.address);
                                    $('#address').val(jsonStr.address);

                                    $("#newcustomerform input[type='text']").val('');
//                                    if (newrecord == 'new') {
                                    $('.popBack').addClass("hidden");
//                                    $('.clientfrm').addClass('hidden');
                                    $('body').css('overflow', 'auto');
//                                    }
                                    return false;
                                } else if (returnurl == 'savenew') {
                                    $('.createNc').click();
                                    return false;
                                }
//                                return false;
                            }

                            window.location = URL + "invoice/customers";
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
    $client = new TblClient();
    $task = "addclient";
    Session::setSession('clientid', '');
    if (isset($_POST['clientid'])) {
        $clientid = $_POST['clientid'][0];
        $client = DAOFactory::getTblClientDAO()->load($clientid);
        Session::setSession('clientid', $clientid);
        $task = "updateclient";
    }

    if (isset($_GET['returnurl'])) {
        Session::setSession('returnurl', $_GET['returnurl']);
    }
    ?>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
    <div class="invoiceHolderCNWClient">
    <form class="nif1Client boxshadow"  id="newcustomerform">
        <div id="new1Client">
            <input type="button" class="close1Client popx" value="">
            <p class="ni1Client" STYLE="margin-top:-10px;"><?php echo ($task == 'addclient') ? 'ADD NEW' : 'UPDATE' ?> PATIENT:</p>

        </div>
        <div id="container_ccpClient" style="margin-top: 35px;padding-left: 31px;">
            <table class="ca_tableClient">
                <?php
//				if($task == 'addclient'){
                ?>
<!--                <tr class="customer_accountClient">
                    <td class="cAccountCNCClient">Patient ID No.</td>
                    <td><input type="text" placeholder="" class="customerACNCClient" name="clientAccount" value="<?php echo $client->clientAccount ?>" required></td>
                </tr>
                <tr>
                    <td class="cNameCNCClient">Patient Name:</td>
                    <td><input type="text" class="customerNCNCClientNew1" name="clientName" value="<?php echo $client->clientName ?>" required maxlength="50"></td>
                </tr>-->
                <?php
//				} else if($task == 'updateclient'){
                ?>
                <tr class="customer_accountClient">
                    <td class="cAccountCNCClient">Patient ID No.</td>
                    <td><input type="text" placeholder="" class="customerACNCClient" name="clientAccount" value=
                               "<?php echo ($task == 'addclient')? TblClientMySqlExtDAO::getMaxNumId(): $client->clientAccount; ?>" maxlength="50" required></td>
                </tr>
                <tr>
                    <td class="cNameCNCClient">Patient Name:</td>
                    <td><input type="text" class="customerNCNCClientNew1" name="clientName" value="<?php echo ucwords($client->clientName) ?>"  maxlength="50" required></td>
                </tr>
                <?php
//				}
                ?>
                <tr>	
                    <td class="cNameCNCClient">TIN:</td>
                    <td><input type="text" placeholder="" class="customerNCNCClientNew1" name="tinNum" value="<?php echo $client->tinNum ?>" maxlength="20"></td>
                </tr>
                <tr>		
                    <td class="cNameCNCClient">E-Mail:</td>
                    <td><input type="email" class="customerNCNCClientNew1" name="emailAddress" value="<?php echo $client->emailAddress ?>" maxlength="50"></td>
                </tr>
                <tr>		
                    <td class="cNameCNCClient"><div style="margin-top:-30px;">Address:</div></td>
                    <td><textarea class="addressCNCClientClient" name="address" id="caddress" maxlength="50"><?php echo ucwords($client->address) ?></textarea></td>
                </tr>
                <tr>		
                    <td class="cNameCNCClient">Phone No.:</td>
                    <td><input type="text" class="pNoCNC customerNCNCClientNew1" name="phoneNumber" value="<?php echo $client->phoneNumber ?>" maxlength="20"></td>
                </tr>
                <tr>		
                    <td class="cNameCNCClient">HMO:</td>
                    <td><input type="text" class="pNoCNC customerNCNCClientNew1" name="hmo" value="<?php echo $client->hmo ?>" maxlength="50"><td>
                </tr>
                <tr>		
                    <td class="cNameCNCClient">HMO Id No.:</td>
                    <td><input type="text" class="pNoCNC customerNCNCClientNew1" name="hmoNum" value="<?php echo $client->hmoNum ?>" maxlength="50"><td>
                </tr>
            </table>

            <table class="ccc_tableClient">
                <tr>
                    <td colspan="2" class="ccpCNCClientpatient">Contact Person  in case of Emergency:</td>
                </tr>
                <tr>		
                    <td class="contactNaCNCClient">Contact Name:</td>
                    <td><input type="text" class="cusNameCNCClient" name="contactName" value="<?php echo ucwords($client->contactName) ?>" maxlength="50"></td>
                </tr>
                <tr>		
                    <td class="contactNoCNCClient">Contact No.:</td>
                    <td><input type="text" class="cNoCNCClient" name="contactNum" value="<?php echo $client->contactNum ?>" maxlength="20"></td>
                </tr>
                <tr>		
                    <td class="contactNoCNCClient">E-Mail:</td>
                    <td><input type="email" class="cNoCNCClient" name="contactEmailAddress" value="<?php echo $client->contactEmailAddress ?>" maxlength="50"></td>
                </tr>
            </table>
            <table class="acu_tableClient">
                <tr>		
                    <td class="moptable2aClient">Active Account<input type="checkbox" class="moptable2bClientNew3" name="active" id="active" value="<?php echo $client->active ?>" <?php echo ($client->active == 'yes') ? 'checked' : '' ?> <?php echo (!isset($_POST['clientid'])) ? 'checked' : '' ?>></td>
                </tr>

            </table>

            <div class="divCNCBelowClient">	
                <input type="submit" value="Save" class="saveBCNCClient addsavebutton" id="saveclient">
                <?php if (!isset($_POST['view'])) { ?>
                    <input type="submit" value="Save and Add New" class="saanBCNCClient addsavebutton" id="saveAddNew" >
                <?php } ?>
                <input type="hidden" name="task" value="<?php echo $task; ?>" />
            </div>
            <div style="clear:both"></div>

        </div>
    </form>
</div>
<div class="hidden popup"></div>