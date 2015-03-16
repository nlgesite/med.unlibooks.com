<style>
    .buttonExpenses{
        margin-left: 40px;
    }
    .buttonReverse{
        margin-left: 40px;
    }

    .table1NewExpensesNew{
        width: 99%;
        border-collapse: collapse;
        margin: auto;
        margin-top: 5px;
    }
    .table1NewExpensesNew{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 13px;
        font-weight: bold;
        color: white;
        text-align: left;
    }
    .table1NewExpensesNew, th{
        text-align: left;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        color: white;
        padding-left: 10px;
    }
    .table1NewExpensesNew,td{
        text-align: left;
        padding: 5px;
        font-size: 12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: normal;
        padding: 0px 2px 0px 2px;
        color: black;
    }
    .table1NewExpensesNew input[type="text"]{
        width:100%;
        height:25px;
        border:none;
        font-size: 12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        padding:10px;
    }
    .table1NewExpensesNew,tr{
        border-bottom: solid 1px solid;
    }

    .table1NewExpensesNew tr th:nth-child(4){
        text-align: left;
    }

    .table1NewExpensesNew tr td:nth-child(4){
        text-align: left;
    }

    .table1NewExpensesNew tr td:nth-child(4){
        text-align: right;
    }
    .table1NewExpensesNew tr td:nth-child(5){
        text-align: right;
    }

    .table1NewExpensesNew tr th:nth-child(5){
        text-align: right;
    }
    .table1NewExpensesNew a{
        text-align: left;
        font-size: 12px;
        font-family: calibri;
        color: blue;
        font-weight: normal;
        text-decoration: none;
    }
    .table1NewExpensesNew a:hover{
        text-align: left;
        font-size: 12px;
        font-family: calibri;
        color: blue;
        font-weight: normal;
        text-decoration: underline;
    }
    .table1NewExpensesNew tr:HOVER{
        background-color:#E8E8E8;
    }	
    .no-bg{
        border-bottom: 1px solid c8c8c8;
    }
    .expensetableNewNew{
        margin-left: 605px;
        margin-top: -138px;
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
        color: #000000;
    }
    .expensetableNewNew tr td{
        margin-left: 520px;
        margin-top: 10px;
        font-family:verdana;
        font-weight: normal;
        font-size: 12px;
        color: #000000;
    }
    .particularBox{
        /* position: absolute; */
        width: 207px;
        height: 90px;
        margin-left: 16px;
        background-color: white;
        border-color: #C8C8C8;
        font-size: 12px;
        font-family: verdana;
        padding-left: 5px;
        padding-top: 5px;
        border: 1px solid #C8C8C8;
        max-width: 230px;
        max-height: 90px;
        margin-top:8px;
    }
    .expensetableNewNew input [type="text"]{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 23px;
        width: 270px;
        height: 25px;
        background-color: white;
        border: 1px solid #C8C8C8;
    }
    .expenseText{
        margin-left: 15px;
        width: 208px;
        padding: 5px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        margin-top:8px;
    }
    .expenseText2{
        margin-left: 15px;
        width: 100px;
        padding: 5px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        margin-top:8px;
    }
    .a{
        background-image: url('<?= URL ?>public/images/add1a.png');
        background-repeat: no-repeat;
        width: 23px;
        height: 22px;
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border: none;
        background:white;
    }

    .a:hover, .a-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/addhover.png');
        background-size: 72% 77%;
        width: 23px;
        height: 25px;
        background-repeat: no-repeat;
        background-position: 4px;
    } 
    .del{
        background-repeat: no-repeat;
        width: 23px;
        height: 25px;
        /* margin-left:-38px;	 */
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border:  none;
        background:white;
    }
    .del:hover, .del-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/del1a.png'); 
        background-size: 72% 77%;
        width: 23px;
        height: 25px;
        background-repeat: no-repeat;
        background-position: 4px;
    }
    .selectNewExp{
        width: 100%;
        border: none;
        height: 100%;
    }
    .neg{
        border-bottom:none;
    }
    .table1NewExpensesNew select{
        width:100%;
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        height:100%;
        border:none;
    }
    input[name="amount[]"]{
        text-align: right;
    }
    .reverseExpense{
        margin-top: 15px;
        margin-left: 5px;
        color: white;
        font-family: Calibri(Body);
        font-size: 14px;
        font-style: bold;
        text-decoration: none;
        background-color: rgb(97, 93, 93);
        border: none;
        width: 87px;
        height: 28px;
    }

    .addlinediv{
        margin-top: 18px;
        margin-left: 10px;
    }
    .vatcheck{
        position: absolute;
        margin-top: 2px;
        margin-left: 7px;
    }

    .inputAddline{
        padding: 5px 10px 5px 10px;
        cursor: pointer;
        /* width: 67px; 
        border-radius: 5px;
        font-family: verdana;
        font-size: 12px;
        color: white;
        border: none;
        /*  background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%); */
        background-image: url('<?= URL ?>public/images/addline.png'); 
        background-size:100% 100%;
        width: 75px;
    }



    .addsavebutton{
        background-image:url('<?= URL ?>public/images/addsave.png');
        background-size:100% 100%;
        font-family: tahoma;
        font-size: 14px;
        font-weight: bold;
    }
    .borderbottom{
        border-bottom:solid 1px #c8c8c8;
    }
</style>

<script>
    newrecord = "new";
</script>
<?php // $task = "addexpense";
?>
<?php
$getExpense = $this->getExpense;
$task = "addexpense";
if ($getExpense->status == 'open' && $getExpense->id != '') {
    $task = 'updateReceipt';
} elseif ($getExpense->status == 'posted') {
    $task = 'reverseReceipt';
} elseif ($getExpense->status == 'reversed') {
    $task = 'reversedReceipt';
}
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
    <div class="invoiceHolderExpense">
        <div id="newInvoice">
            <p class="headTextExpense headText"><?php
                if ($task == 'updateReceipt') {
                    echo 'UPDATE';
                } elseif ($task == 'reversedReceipt') {
                    echo 'REVERSED';
                } elseif ($task == 'reverseReceipt') {
                    echo 'POSTED';
                } else {
                    echo 'NEW';
                }
                ?> EXPENSES</label>
        </div>	
        <form method="post" action="" class="form1NExpense" id="form">
            <div id="containerNExp">
                <table class="tbleExpense">

                    <tr class="cus">
                        <td class = "vendor">Vendor Name:</td>
                        <td>
                            <select class="sc supplierId" name="supplierId" id="supplierId" required>
                                <option  value="" address=""></option>
                                <option value="addsupplier">[Add Vendor]</option>
                                <?php
                                $vendor = DAOFactory::getTblSupplierDAO()->queryByOrgId(Session::getSession('medorgid'));

                                foreach ($vendor as $item) {
                                    if ($item->activeAccount == 'yes') {
                                        ?>
                                        <option value="<?php echo $item->id ?>" address="<?= ucwords($item->address) ?>"
                                        <?= $item->id == $this->getExpense->supplierId ? 'selected="selected"' : ''; ?> 
                                        <?php
                                        if (Session::getSession('vendorSessionId') == $item->id) {
                                            echo ' selected="selected" ';
                                            Session::setSession('vendorSessionId', false);
                                        }
                                        ?>
                                                >
                                                    <?php echo ucwords($item->name) ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                        </td>
                    </tr>
                    <tr class="cus">
                        <td class="addSample"><div style="margin-top:-30px;">Address:</div></td>
                        <td>
                            <textarea class="add" name="address" id="address" readonly tabindex="-1"></textarea>
                        </td>
                    </tr>
                    <tr class="wtHolder 
                    <?= $this->getExpense->eWT == 0 || $this->getExpense->eWT == '' ? 'hidden' : '' ?>
                        ">
                        <td class="addSample">Withholding Tax:</td>
                        <td>
                            <select name="eWT" class="sc" STYLE="margin-top:5px;">
                                <option value="5" class="forRental" <?= $this->getExpense->eWT == '5' ? ' selected="selected" ' : '' ?>>5%</option>
                                <option value="10" class="notForRental" <?= $this->getExpense->eWT == '10' ? ' selected="selected" ' : '' ?>>10%</option>
                                <option value="15" class="notForRental" <?= $this->getExpense->eWT == '15' ? ' selected="selected" ' : '' ?>>15%</option>
                                <option value="0" class="hidden" 
                                        <?= $this->getExpense->eWT == '0' || $this->getExpense->eWT == '' ? ' selected="selected" ' : '' ?>>0</option>
                            </select>
                        </td>
                    </tr>
                </table>	
                <table class="expensetableNewNew">		
                    <tr class="cus">
                        <td>Expense Number:</td>	
                        <td>
                            <input type="text" placeholder="" class="expenseText" name="expenseNumber" required readonly
                                   value="<?= $this->getExpense->expenseNumber ?>">
                        </td>
                    </tr>

                    <tr class="cus">
                        <td>Date:</td>
                        <td><input type="text" class="expenseText" name="dateIssued" id="di" required
                                   value="<?= $this->getExpense->dateIssued == '' ? '' : date('m/d/Y', strtotime($this->getExpense->dateIssued)) ?>"  pattern="\d{2}\/\d{2}\/\d{4}" placeholder="mm/dd/yyyy">
                        </td>
                    </tr>

                    <tr class="cus">
                        <td>Reference No.</td>
                        <td><input type="text" class="expenseText" name="referenceNumber" 
                                   value="<?= $this->getExpense->referenceNumber ?>" maxlength="11" ></td>
                    </tr>

                    <tr class="cus hidden">
                        <td>Discount:</td>
                        <td><input type="percentage" class="expenseText2 isNumeric" name="discount"
                                   value="<?= $this->getExpense->discount ?>">%</td>
                    </tr>

                    <tr class="cus">
                        <td><div style="margin-top:-38px;">Remarks:</div></td>
                        <td><textarea class="particularBox" name="particular"><?= $this->getExpense->particular ?></textarea></td>
                    </tr>

                </table>

            </div>	
            <div style="margin-left:20px;margin-top:-10px;font-family:Arial;font-size:12px;">
                <label for="inclusiveOfVat"><i>Inclusive of Vat</i></label>
                <input type="checkbox" id="inclusiveOfVat" name="inclusiveOfVat" class=" vatcheck"
                       <?= $this->getExpense->inclusiveOfVat == 'yes' || $this->getExpense->inclusiveOfVat == '' ? 'checked' : '' ?>>

            </div>

            <div id="container1">
                <table class="table1NewExpensesNew">

                    <tr class="tablet">
                        <th style="width: 1%;" class="neg"></th>
                        <th width= "30%">Account Name</th>
                        <th width="31%">Particulars	</th>
                        <th width="12%">Vat</th>
                        <th width="14%">Amount</th>
                        <th style="width: 1%;" class="neg"></th>
                    </tr>
                    <tbody>
                        <?php if (!$this->getExpenseLine) { ?>
                            <tr class="no-bg borderbottom">
                                <td class="neg" style="padding: 0px 1px 0px 1px;"><input type="button" name="delete"  class="del delitem" onclick="deleteRow(this)"></td>
                                <td class=""style="padding: 0px 1px 0px 1px;">
                                    <select name="coaId[]" class="selectNewExp" required>
                                        <option value="">--Select--</option>
                                        <?php
                                        $userCoa = $this->userCoa;
                                        if (isset($userCoa) && !empty($userCoa)) {
                                            foreach ($userCoa as $each) {
                                                // if ($each->accountType == 'Expense') {
                                                echo '<option value="' . $each->id . '"
												 accountNum="' . $each->accountNum . '" >
												' . $each->accountNum . ' - ' . $each->accontName . '</option>';
                                                // }
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class=""style="padding: 0px 1px 0px 1px;"><input type="text" name="memo[]" required maxlength="50"/></td>
                                <td style="padding: 0px 1px 0px 1px;">
                                    <select name="vat[]" required>
                                        <?php
                                        $vat = $this->getVat;
                                        if (isset($vat) && !empty($vat)) {
                                            if ($this->info->typeOfTax == 'vat') {
                                                foreach ($vat as $each) {
                                                    echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
												title="' . $each->description . '" >
												' . $each->taxCode . '</option>';
                                                }
                                            } else {
//											echo '<option value="2" rate="0" 
//												title="Vat Exempt" >
//												VAT-EXEMPT</option>';
                                                foreach ($vat as $each) {
                                                    echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
												title="' . $each->description . '" >
												' . $each->taxCode . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class=""style="padding: 0px 1px 0px 1px;"><input type="text" name="amount[]"
                                                                                     class="isNumeric" required></td>

                                <td class="neg"style="padding: 0px 1px 0px 1px;">
                                    <div class="adel">
                                        <input type="button" name="add"  class="a addtask" id="addtask">
                                    </div>
                                </td>
                            </tr>
                            <?php
                        } else {
                            foreach ($this->getExpenseLine as $ln) {
                                ?>

                                <tr class="no-bg borderbottom">
                                    <td class="neg"style="padding: 0px 1px 0px 1px;">
                                        <input type="button" name="delete"  class="del delitem" onclick="deleteRow(this)">
                                    </td>
                                    <td class=""style="padding: 0px 1px 0px 1px;">
                                        <select name="coaId[]" class="selectNewExp" required>
                                            <?php
                                            $userCoa = $this->userCoa;
                                            if (isset($userCoa) && !empty($userCoa)) {
                                                foreach ($userCoa as $each) {
                                                    // if ($each->accountType == 'Expense') {
                                                    echo '<option value="' . $each->id . '"
												' . ($each->id == $ln->coaId ? 'selected="selected"' : '') . '
											accountNum="' . $each->accountNum . '" >
												' . $each->accountNum . ' - ' . $each->accontName . '</option>';
                                                    // }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class=""style="padding: 0px 1px 0px 1px;"><input type="text" name="memo[]" value="<?= $ln->descriptionMemo ?>"/></td>
                                    <td style="padding: 0px 1px 0px 1px;">
                                        <select name="vat[]" required>
                                            <?php
                                            $vat = $this->getVat;
                                            if (isset($vat) && !empty($vat)) {
                                                foreach ($vat as $each) {
                                                    echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
											' . ($each->id == $ln->vatId ? 'selected="selected"' : '') . ' 
											title="' . $each->description . '" >
											' . $each->taxCode . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class=""style="padding: 0px 1px 0px 1px;"><input type="text" value="<?= Controller::getFloat($ln->netAmount) ?>" 
                                                                                         name="amount[]" class="isNumeric" required></td>
                                    <td class="neg"style="padding: 0px 1px 0px 1px;">
                                        <div class="adel">
                                            <input type="button" name="add"  class="a addtask" id="addtask">
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <?php if ($this->getExpense->status == 'open' || $this->getExpense->status == '') { ?>
                    <div class="addlinediv">
                        <input type="button" name="size" class="inputAddline inputAddlineex inputAddline2" id="addtask" <?php //echo $invoicestat2   ?> value=""> 
                    </div>
                <?php } ?>
            </div>

            <div>
                <table class="table3Expense">
                    <tr class="expensesAmount">
                        <td style="padding:5px;">Purchase Amount:</td>
                        <td class="amountNewExpense ">
                            <input type="text" class="isFloat totalAmount" name="totalAmount" readonly
                                   value="<?= Controller::getFloat($this->getExpenseAmount->subTotalAmount) ?>"/>
                        </td>
                    </tr>

                    <tr class="vtr" style="border-bottom:none;">
                        <td style="padding:5px;">VAT:</td>
                        <td class="amountNewExpense ">
                            <input type="text" class="isFloat vatAmount" name="vatAmount" readonly
                                   value="<?= Controller::getFloat($this->getExpenseAmount->vatAmount) ?>"/>
                        </td>
                    </tr>
                    <?php
                    $totalVATPurchase = $this->getExpenseAmount->vatAmount + $this->getExpenseAmount->subTotalAmount;
                    ?>
                    <tr class="vtr" style="border-bottom:none;">
                        <td style="padding:5px;">Total VAT Purchase:</td>
                        <td class="amountNewExpense ">
                            <input type="text" class="isFloat discountAmount" name="discountAmount" readonly
                                   value="<?= Controller::getFloat($totalVATPurchase) ?>"/>
                        </td>
                    </tr>
                    <tr class="vtr">
                        <td style="padding:5px;">EWT:</td>
                        <td class="amountNewExpense ">
                            <input type="text" class="isFloat discountAmount" name="eWTAmount" readonly
                                   value="<?= Controller::getFloat($this->getExpenseAmount->eWTAmount) ?>"/>
                        </td>
                    </tr>

                    <tr class="gtotal">
                        <td style="padding:5px;color:#fff;" class="gt">Total Payable:</td>
                        <td class="amountNewExpense " id="gt">
                            <input type="text" class="isFloat vatTotalAmount" name="vatTotalAmount" readonly
                                   value="<?= Controller::getFloat($this->getExpenseAmount->grandTotal) ?>" style="background:none;color:#fff;font-weight:bold;"/>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <img class="image8"  src="<?= URL ?>public/images/line3.png">
            </div>

            <div class="buttonExpenses">
                <input class="bn bnexpense" type="submit" name="save" value="">
                <input class="bn postExpense" type="button" name="post" value="">
                <input type="hidden" name="task" value="<?php echo $task ?>" />
            </div>
            <div class="buttonReverse hidden">
                <input type="button" name="reverse" value="Reverse" class="reverseExpense addsavebutton">
            </div>
        </form>


    </div>
</div>
<div class="popBack hidden"></div>
<script>

    codeRental = '6000-005';
    codeRental2 = '6001-021';
    codeProfessionalFee = '6001-020';
    codeMngtCF = '6001-016';

    eventLoader();
    var returnurl = "expense";
    var allowWithHolding = false;
    var allowWithHoldingSelect = true;

    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

    function eventLoader()
    {
        $('.table1NewExpensesNew').find('tr').mouseover(function() {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.delitem').addClass('del-hover');
        });

        $('.table1NewExpensesNew').find('tr').mouseout(function() {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.delitem').removeClass('del-hover');
        });

    }



    $(function() {
        $('#supplierId').change(function() {
            if ($(this).val() == 'addsupplier') {
                $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');

                            $('.closeNewVendor').click(function() {
                                if (confirm('Are you sure, you want to leave this page without saving?')) {
                                    $('#supplierId').val('');
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                }
                            });
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
            } else if ($(this).val() != '') {
                address = $('select[name="supplierId"] option:selected').attr('address');
                $('textarea[name="address"]').val(address);
            }
        });

        $('.sc').change(function() {
            computeAmount();
        });

        $(document).on("click", "#addtask", function() {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>expenses/expenseLine",
                    function(result) {
                        $('.table1NewExpensesNew > tbody:last').append(result);
                        eventLoader();
                        computeAmount();

                        $('#inclusiveOfVat, select[name="vat[]"]').change(function() {
                            computeAmount();
                        });

                        $('input[name="discount"], input[name="amount[]"]').keyup(function() {
                            computeAmount();
                        });

                    });
            $.ajaxSetup({async: true});

            $(".selectNewExp").change(function() {
                value = $(this).val();
                code = $(this).find('option:selected').attr('accountNum');
                allowWithHolding = false;
                $('.wtHolder').addClass('hidden');
                $('select[name="eWT"]').val(0);
                // if(allowWithHoldingSelect){
                if (code == codeRental || code == codeRental2) {
                    $('.wtHolder').removeClass('hidden');
                    $('select[name="eWT"]').val(5);
                    $('.forRental').removeClass('hidden');
                    $('.notForRental').addClass('hidden');
                    allowWithHolding = true;
                } else if (code == codeProfessionalFee) {
                    $('.wtHolder').removeClass('hidden');
                    $('select[name="eWT"]').val(10);
                    allowWithHolding = true;
                    $('.forRental').addClass('hidden');
                    $('.notForRental').removeClass('hidden');
                } else if (code == codeMngtCF) {
                    $('.wtHolder').removeClass('hidden');
                    $('select[name="eWT"]').val(10);
                    allowWithHolding = true;
                    $('.forRental').addClass('hidden');
                    $('.notForRental').removeClass('hidden');
                }
                computeAmount();
                // }
            });
        });

        $('#inclusiveOfVat, select[name="vat[]"]').change(function() {
            computeAmount();
        });

        $('input[name="discount"], input[name="amount[]"]').keyup(function() {
            computeAmount();
        });
        var type = false;
        $('.postExpense').click(function() {

////////////////////////////////////////////////////////////////////////	

            allowWithHolding = false;
            obj = false;
            count = 0;
            $('.selectNewExp').each(function() {
                code = $(this).find('option:selected').attr('accountNum');

                if (code == codeRental || code == codeRental2) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeProfessionalFee) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeMngtCF) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                }
            });

            if (obj && count > 1) {
                alert('Account is not allowed for multiple selection.');
                return false;
            }
            type = true;
            count = 0;
            myThis = '';
            $('input[required]').each(function() {
                if ($(this).val() == '') {
                    myThis = $(this);
                    count++;
                }
            })
            $('select[required]').each(function() {
                if ($(this).val() == '') {
                    myThis = $(this);
                    count++;
                }
            })
            if (count == 0) {
                confirmation = confirm('Are you sure you want to post this expense?');
                if (confirmation) {
                    save(true);
                }
            } else {
                alert('Unable to save, please fill-up required items');
                $(myThis).focus();
            }
        });
        var type = false;

        $('#form').submit(function() {
            confirmDoyou = confirm('Do you want to record the Expenses?');
            if (confirmDoyou) {
                save(false);
                return false;
            }
        });

        // $('.wtHolder').addClass('hidden');

        // $('.selectNewExp').change(function(){
        $(document).on("change", ".selectNewExp", function() {
            value = $(this).val();
            code = $(this).find('option:selected').attr('accountNum');
            allowWithHolding = false;
            $('.wtHolder').addClass('hidden');
            $('select[name="eWT"]').val(0);
            // if(allowWithHoldingSelect){
            // alert('sdf');
            if (code == codeRental || code == codeRental2) {
                $('.wtHolder').removeClass('hidden');
                $('select[name="eWT"]').val(5);
                // alert('1');
                $('.forRental').removeClass('hidden');
                $('.notForRental').addClass('hidden');
                allowWithHolding = true;
            } else if (code == codeProfessionalFee) {
                $('.wtHolder').removeClass('hidden');
                $('select[name="eWT"]').val(10);
                // alert('2');
                allowWithHolding = true;
                $('.forRental').addClass('hidden');
                $('.notForRental').removeClass('hidden');
            } else if (code == codeMngtCF) {
                $('.wtHolder').removeClass('hidden');
                $('select[name="eWT"]').val(10);
                // alert('3');
                allowWithHolding = true;
                $('.forRental').addClass('hidden');
                $('.notForRental').removeClass('hidden');
            }
            computeAmount();
            // }
        });


        /* $('#form').submit(function(){
         confirmDoyou = confirm('Do you want to record the Expenses?');
         if(confirmDoyou){
         return true;
         }
         return false;
         }) */

        function save(type) {
            allowWithHolding = false;
            obj = false;
            count = 0;
            $('.selectNewExp').each(function() {
                code = $(this).find('option:selected').attr('accountNum');

                if (code == codeRental || code == codeRental2) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeProfessionalFee) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeMngtCF) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                }
                count++;
            });

            if (obj && count > 1) {
                alert('Account is not allowed for multiple selection.');
                return false;
            }
            ext = '';
            if (type) {
                ext = '?type=posted';
            }
            $.post(URL + 'expenses/addexpense' + ext, $('form').serialize())
                    .done(function(returnData) {
                        if (returnData == 0) {
                            location = URL + 'expenses';
                            // location.reload();
                        } else {
//                            alert(returnData);
                            $('.popBack').html($('.popBack').html() + returnData);
                            $('.popBack').removeClass('hidden');
                            return false;
                        }
                    });
        }

        $('#supplierId').change();


        function computeAmount() {
            total = 0;
            vat = 0;
            discountAmount = 0;

            ewtPercent = 0;
            ewtAmount = 0;

            $('.selectNewExp').each(function() {
                code = $(this).find('option:selected').attr('accountNum');
                if (code == codeRental || code == codeRental2 || code == codeProfessionalFee || code == codeMngtCF) {
                    ewtPercent = $('select[name="eWT"]').val();
                }
            });

            $('select[name="eWT"]').val('0');

            if (ewtPercent != 0) {
                $('select[name="eWT"]').val(ewtPercent);
                ewtPercent = getInt($('select[name="eWT"]').val()) / 100;
            }

            if ($('#inclusiveOfVat').is(':checked')) {
                $('input[name="amount[]"]').each(function() {
                    rate = getInt($(this).parent('td').prev('td').find('select option:selected').attr('rate'));
                    value = getInt($(this).val());

                    value = value / (1 + (rate / 100));
                    total += value;
                    vat += (value * (rate / 100));
                });
            } else {
                $('input[name="amount[]"]').each(function() {
                    rate = getInt($(this).parent('td').prev('td').find('select option:selected').attr('rate'));
                    value = getInt($(this).val());
                    total += value;
                    vat += (value * ((rate / 100)));
                });
            }
            discountAmount = ($('select[name="eWT"]').val() / 100) * total;
            // alert(discountAmount);
            $('.totalAmount').val(roundFloat(total));
            $('.vatAmount').val(roundFloat(vat));
            $('input[name="eWTAmount"]').val(roundFloat(discountAmount));
            $('input[name="discountAmount"]').val(roundFloat(total + vat));
            $('.vatTotalAmount').val(roundFloat((total + vat) - discountAmount));
        }

        checkAllowWithHoldingSelect();

        function checkAllowWithHoldingSelect() {
            count = $('.table1NewExpensesNew tr').length;
            allowWithHoldingSelect = true;
            if (count > 2) {
                allowWithHoldingSelect = false;
            }


        }

        function roundFloat(intVal) {
            intVal = parseFloat(intVal);
            intVal = Number((intVal).toFixed(2));

            array = intVal.toString().split('.');

            if (array[1]) {
                if (array[1].length == 1) {
                    array[1] += '0';
                }
            } else {
                array[1] = '00';
            }

            intVal = array.join('.');

            hasComma = commafy(intVal);

            if (hasComma[0] == '-') {
                hasComma = hasComma.toString().replace(/-/g, '');
                hasComma = '(' + hasComma + ')';
            }
            return hasComma;
        }

        function commafy(num) {
            var n = num.toString().split(".");
            n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return n.join(".");
        }

        function getInt(intVal) {
            if (intVal != '') {
                intVal = intVal.toString().replace(/,/g, '');
            }
            if (intVal[0] == '(') {
                intVal = intVal.toString().replace(/\(/g, '');
                intVal = intVal.toString().replace(/\)/g, '');
                intVal *= -1;
            }
            intVal = parseFloat(intVal);
            if (isNaN(intVal)) {
                return 0;
            }
            return intVal;
        }
<?PHP
if ($this->getExpense->status == 'posted') {
    ?>
            $('form').submit(function() {
                return false;
            });
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            $('.buttonExpenses').remove();
            $('.buttonReverse').removeClass('hidden');

            $('.reverseExpense').click(function() {
                confirmReverse = confirm('Are you sure you want to reverse this expense?');
                if (confirmReverse) {
                    $.post(URL + 'expenses/setReverse', {'id': '<?= $this->getExpense->id ?>'})
                            .done(function(returnData) {
                                if (returnData == 0) {
                                    location.reload();
                                } else {
                                    alert(returnData);
                                }
                            });
                }
                return false;
            });

<?php } ?>

<?PHP
if ($this->getExpense->status == 'reversed') {
    ?>
            $('form').submit(function() {
                return false;
            });
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            $('.buttonExpenses').remove();
<?php } ?>
    });
</script>

<script>
    $(function() {
        if (status == 'posted') {
            $.post(URL + 'expenses/newreceiptExpenses')

                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closePrint').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
        }

    });
</script>