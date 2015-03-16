<style>
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .container{
        margin: auto;
    }
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto;
        margin-top: 70px;
        padding-bottom: 20px;
    }
    .titleEnterPayment{
        margin-top: 16px;
        margin-left: 10px;
        width: 869px;
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-family: agency fb2;
        margin-left: 20px;
        font-size:28.4px;
        color:#04805c;
    }
    .table1Enter{
        margin-left: -20px;
        margin-top: 32px;
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
        text-align: right;
        font-size: 12px;
        font-family: verdana;
        width: 176px;
        color: #000000;
        font-weight: normal;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width: 248px;
        margin-left: 5px;
        height: 27px;
        font-family:verdana;
        font-size:12px;
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
        font-family:calibri;
        font-size:12px;
    }	

    .table2Enter{
        border-spacing: 1px;
        margin-top: -147px;
        margin-left: 424px;
    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        text-align: right;
        font-size: 12px;
        font-family: verdana;
        width: 176px;
        color: #000000;
        font-weight: normal;
    }

    .textEnterPaymentnew{
        height: 27px;
        width:248px;
        padding-left: 5px;
        font-family:verdana;
        font-size:12px;
        margin-left:5px;
    }
    .textarea{
        margin-left: 6px;
        width: 248px;
        height: 90px;
        max-height: 90px;
        max-width: 270px;
        padding-left: 5px;
        font-family:verdana;
        font-size:12px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-top: -12px;
        margin-left: 10px;
    }
    .txtsearch2{

    }
    .searchbutton{
        /* width: 29px;
        height: 33px;
        border-radius: 2px 2px 2px 2px;
        margin-left: -11px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        border: none;
        color: whitesmoke;
        background-image: url('<?= URL ?>public/images/za.png');
        border: solid 1px #c8c8c8;
        background-color: rgb(230, 250, 222);
        background-repeat: no-repeat;
        background-position: 3px;
        margin-top: -33px;
        margin-left: 209px; */
    }
    .mainTable{
        border-collapse: collapse;
        width: 98%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        color: white;
        font-weight: bold;
        font-size: 13px;
        font-family: verdana;
        text-align: left;
        padding:5px;
        background-color: rgb(19, 175, 239);
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size: 12px;
        font-family:verdana;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }

    .tableDiv{
        margin-top: 5px;
        height:150px;
    }
    .mainTable tr th:nth-child(6){
        text-align: right;
    }
    .mainTable tr th:nth-child(5){
        text-align: right;
    }
    .mainTable tr th:nth-child(7){
        text-align: right;
    }
    .mainTable tr td:nth-child(6){
        text-align: right;
    }
    .mainTable tr td:nth-child(5){
        text-align: right;
    }
    .mainTable tr td:nth-child(7){
        text-align: right;
    }
    .mainTable a{
        color: blue;
    }
    .mainTable input[type=text]{
        width: 120px;
        height: 25px;
        text-align: right;
        margin-top: 1px;
        font-size: 12px;
        color: black;
        font-family: verdana;


    }
    .hrclass{
        width: 99%;
        margin: auto;
        margin-top: 15px;
        border-top: none;
        border-bottom: 1px solid c8c8c8;
    }

    .mainTable tr:hover{
        background-color: c8c8c8;
    }
    .buttons{
        width: 77px;
        height: 24px;
        border-radius: 2px;
        color:white;
        cursor: pointer;
        font-family:verdana;
        font-size:14px;
        border:none;
        cursor:pointer;
    }
    .buttonscontainer{
        margin-left: 723px;
        margin-top: 15px;
    }
    .selectPay{
        height: 27px;
        width: 248px;
        font-size: 12px;
        font-family: verdana;
    }
    .mainTable input[type="text"]{
        background:none;
        border:none;
    }
    .bank{
        height: 27px;
        width: 190px;
        font-size: 12px;
        font-family: verdana;
    }
    div.scroll {
        overflow: scroll;
        margin-left: 4px;
        margin-top: 11px;
    }
    .GLPOST{
        margin-top:10px;
        margin-left: 10px;
    }
    .GLPOST select{
        height: 27px;
        width: 190px;
        font-size: 12px;
        font-family: verdana;
    }

    .img2 {
        position: absolute;
        margin-left: 25px;
        height: 17px;
        z-index: -1;
        top: 186px;
    }

</style>
<?php $taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax ?>
<script>
    taxtype = "<?php echo $taxtype ?>";
</script>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm boxshadow" id="form">
        <div class="titleEnterPayment new1Client">COLLECTION</div>
        <table class="table1Enter">
            <tr>
                <td>Date:</td>
                <td><input type="text" name="dateReceived" id="dateReceived" class="textEnterPaymentnew" value="<?php //echo date('Y-m-d') ?>" required ></td>
            </tr>
            <tr>
                <td>Amount Received:</td>
                <td><input type="text" name="amountReceived" id="amountReceived" class="textEnterPaymentnew isNumeric" id="amountReceived" style="border: 1px solid rgb(187, 185, 185);" maxlength="15" ></td>
            </tr>
            <tr>
                <td>HMO Partner:</td>
                <td colspan="3">
                    <?php
                    if (isset($_POST['stat'])) {
                        $invoice = DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid']);
                        ?>
                        <input type="text" class="textEnterPaymentnew" value="<?php echo ucwords(DAOFactory::getTblClientDAO()->load($invoice->clientId)->clientName) ?>" />
                        <!--<select></select>-->
                        <?php
                    } else {
                        $hmos = TblHmoMySqlExtDAO::hmoTransaction(); //DAOFactory::getTblHmoDAO()->queryByOrgId(Session::getSession('orgid'));
                        if (count($hmos) > 0) {//
                            ?>
                            <select class="table1Enterselect client" name="hmoId" required>
                                <option value="">--Select--</option>
                                <?php foreach ($hmos as $item) { ?>
                                    <option value='<?php echo $item->id ?>'><?php echo ucwords($item->hmoName) ?></option>
                                <?php } ?>
                            </select>

                            <?php
                        } else {
                            ?>
                            <select></select>

                            <?php
                        }
                    }
                    ?>

                </td>
            </tr>
            <tr>
                <td>Withholding Tax:</td>
                <td>
                    <select class="wtax" name="whtTax" id="whtax" required>
                        <option value="">--Select--</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                    </select>
                </td>
            </tr>
        </table>

        <table class="table2Enter">
            <thead>
                <tr>
                    <td>Mode of Payment:</td>
                    <td>
                        <select class="selectPay" name="mopId" id="mopId" required>
                            <option value="">--Select--</option>
                            <?php
                            $mop = DAOFactory::getTblMopDAO()->queryAll();
                            foreach ($mop as $item) {
                                if (!in_array($item->code, array('Credit', 'HMO'))) {
                                    ?>
                                    <option value="<?php echo $item->id ?>"><?php echo $item->code ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Reference No.:</td>
                    <td><input type="text" name="refNum" class="textEnterPaymentnew"></td>
                </tr>
                <tr>
                    <td class="note">Notes:</td>
                    <td colspan="3"><textarea class="textarea" name="notes"></textarea></td>
                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>

        <div class="search">
            <input type="search" placeholder="Search Invoice No. Here" class="txtsearch2 searchindexpayment" style="width: 221px;margin-left: 3px;" name="search" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 
            <input type="button" class="searchbutton search2222" value="Search" id="search" > 
        </div>

        <div class="tableDiv scroll" >

            <table class="mainTable">
                <thead>
                    <tr>
                        <th width=""></th>
                        <th width="20%">Invoice No.</th>
                        <th width="25%">Invoice Date</th>
                        <th width="29%">Patient Name</th>
                        <th width="7%" style="text-align:center;">Total Invoice<br/> Amount</th>
                        <th width="7%" style="text-align:center;">WHT<br/> Amount</th>
                        <th width="7%" style="text-align:center;">Amount<br/> Paid</th>
                        <th width="7%" style="text-align:center;">Amount<br/> Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['paymentid'])) {
                        echo print_r(TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid']));
                    } elseif (isset($_POST['invoiceid'])) {
                        print_r(TblEnterPaymentMySqlExtDAO::clientInvoice());
                        ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <table class="GLPOST">
            <tr>	
                <td class="item-ANewItem" style="width: 73px">GL Posting:</td>
                <td style="width: 52px"><select class="item-text2NewItem item-textNewItem" name="glPosting2" id="glPosting2" required disabled>
                        <?php
                        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('medorgid'));
                        foreach ($coas as $coa) {
                            if ($coa->accountNum == '1000-002') {
                                $glid = $coa->id;
                            }
                            ?>
                            <option value="<?php echo $coa->id ?>" <?php echo ($coa->accountNum == '1000-002') ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                        <?php } ?> 
                    </select>
                    <input type="hidden" value="<?php echo $glid ?>" name="glPosting" id="glPosting" />
                </td>
            </tr>
        </table>
        <hr class="hrclass">
        <div class="buttonscontainer">
            <input type="submit" value="Post" class="buttons addsavebutton" id="post"/>
            <input type="button" value="Cancel" class="buttons cancel addsavebutton" />
            <input type="hidden" name="task" value="payment" />
        </div>

    </form>

</div><div class="hidden popup"></div>
<script>

    $(function() {
        clientid = 0;
        amount = 0;
        search = '';
        $('.client, input[name="dateReceived"]').change(function() {
            invoicePayment($('.client').val(), '');
            clientid = $('.client').val();
        });

//        $('input[name="dateReceived"]').click(function() {
//            invoicePayment($(this).val(), '');
//        });


        $(document).on('keyup', 'input[name="search"]', function() {
            search = $(this).val();
        });

        $(document).on('click', '#search', function() {
            invoicePayment(clientid, search);
        });
        $(document).on('keyup', '.amount', function() {
            invoiceAmount();
        })

        function invoicePayment(hmoid, search) {
            $('.mainTable > tbody > tr').remove();
            $.post(URL + 'invoice/clientInvoice', {hmoid: hmoid, search: search, whtax: $('#whtax').val().replace(/%/g, ''), date: $('input[name="dateReceived"]').val()})
                    .done(function(returnData) {
                        $('.mainTable > tbody').append(returnData);
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        }




        $('#form').submit(function() {
            confirmDoyou = confirm('Do you want to record the payment?');
            if (!confirmDoyou) {
                return false;
            }

            amountreceived = parseFloat(amount);
            if ($('input[name="chkcol[]"]:checked').length == 0) {
                alert('Please select invoice(s) from the list');
                return false;
            } else {
                if (amount == 0) {
                    alert("Please enter amount received.");
                    $('input[name="amountReceived"]').css('border-color', 'red').focus();
                } else {
                    $("input[name='chkcol[]']:checked").each(function()
                    {
                        if (amountreceived >= $(this).parents('tr').find('.amount').val().replace(/,/g, '')) {
                            amountreceived -= $(this).parents('tr').find('.amount').val().replace(/,/g, '');
                        } else {
                            $(this).parents('tr').find('.balance').val($(this).parents('tr').find('.amount').val());
                            $(this).parents('tr').find('.amount').val("0.00");
                            alert('Insufficient amount.');
                            return false;
                        }
//                        return false;
                    });
                }
            }
//            return false;
            $('#form #post').attr('disabled', 'disabled');
        });



        $('input[name="amountReceived"]').change(function() {
            amount = $(this).val().replace(/,/g, '');
            invoiceAmount();
        });

        $(document).on("click", ".chkcol", function() {
            if (amount == 0) {
                alert("Please enter amount received.");
                $('input[name="amountReceived"]').css('border-color', 'red').focus();
            }
            if (!$(this).is(':checked')) {
                $(this).parents('tr').find('.balance').val($(this).parents('tr').find('.amount').val());
                $(this).parents('tr').find('.amount').val("0.00");
            }
            invoiceAmount();
        });

        $('#whtax').change(function() {
            $('.chkcol').each(function() {
                $object = $(this);
                whtax = $('#whtax').val().replace(/%/g, '');
                $.ajax({
                    url: "<?php echo URL ?>invoice/totalPayment",
                    type: "POST",
                    data: {
                        invoiceid: $($object).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        subtotal = parseFloat(jsonStr.subtotal);
                        grandtotal = parseFloat(jsonStr.grandtotal);
                        $($object).parents('tr').find('.whtax').val($.number(subtotal * (whtax / 100), 2));
                        $($object).parents('tr').find('.balance').val($.number(grandtotal - (subtotal * (whtax / 100)), 2));
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert(XMLHttpRequest.responseText);
                    }
                });
            });

            invoiceAmount();
        });

        $("#dateReceived").datepicker(
                {beforeShowDay: function(date) {
                        //getMonth()  is 0 based
                        if ($.inArray(date.getFullYear() + '-' + date.getMonth(), taxyears) > -1) {
                            return [false, ''];
                        }
                        return [true, ''];
                    },
                    dateFormat: 'mm/dd/yy'
                }

        );

        function invoiceAmount() {
            amountreceived = parseFloat(amount);
            whtax = $('#whtax').val().replace(/%/g, '');
            sign = '';

            if (amountreceived == '') {
                amountreceived = 0;
            }

            count = 0;
            $chkchecked = $('.chkcol:checked').length; //alert($chkchecked);
            $("input[name='chkcol[]']:checked").each(function()
            {
                count++;
                $object = $(this);

                $.ajax({
                    url: "<?php echo URL ?>invoice/totalPayment",
                    type: "POST",
                    data: {
                        invoiceid: $($object).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        subtotal = parseFloat(jsonStr.subtotal);
                        grandtotal = parseFloat(jsonStr.grandtotal);
                        balance = jsonStr.balance;
                        invoicetotal = parseFloat(grandtotal - (subtotal * (whtax / 100))).toFixed(2);

                        if (amountreceived >= invoicetotal) {
                            amountreceived -= invoicetotal;
                            $($object).parents('tr').find('.amount').val($.number(invoicetotal, 2));
                            if (amountreceived > 0) {
                                sign = '-';
                            }
                            $($object).parents('tr').find('.balance').val(sign + $.number(amountreceived, 2));

                            if ($($object).parents('tr').prev('tr').find('.chkcol').is(':checked')) {
                                $($object).parents('tr').prev('tr').find('.balance').val($.number(0, 2));
                            }

                        } else {
                            $($object).parents('tr').find('.amount').val($.number(0, 2));
                            $($object).parents('tr').find('.chkcol').removeAttr('checked');
                            alert('Insufficient payment');
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert(XMLHttpRequest.responseText);
                    }
                });
            });
            return false;
        }

        $('#bank').change(function() {
            if ($(this).val() == 'addbank') {
                $.post(URL + 'accounting/new_bank', {returnurl: "client"})
                        .done(function(returnData) {
                            $('.popup').html(returnData);
                            $('.popup').removeClass('hidden');
                            $('body').css('overflow', 'hidden');

                            $('.closeNNBank').click(function() {
                                if (confirm('Are you sure, you want to leave this page without saving?')) {
                                    $('.popup').addClass('hidden');
                                    $('.popup').html('');
                                    $('body').css('overflow', 'auto');
                                }
                            });
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            }
        });
    })
</script>