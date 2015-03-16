<style>
    .container{
        margin: auto;
    }
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto;
        margin-top: 40px;
        border: 1px solid gray;
        padding-bottom: 20px;
        box-shadow: 1px 1px 1px 1px gray;
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
		font-size: 28.4px;
		color: #04805c;
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
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width: 223px;
        margin-left: 5px;
        height: 25px;
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
    }

    .table2Enter{
        border-spacing: 1px;
        float: right;
        margin-top: -97px;
        margin-right: 27px;
    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        text-align: right;
        font-size: 12px;
        font-family: verdana;
        width: 176px;
    }

    input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
    }
    .textarea{
        margin-left: 7px;
        height: 80px;
        width: 268;
        max-height: 80px;
        max-width: 268px;
        padding-left: 5px;
        margin-top:-4px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-top: 49px;
        margin-left: 10px;
    }
    .txtsearch2{
        width: 200px;
        height: 30px;
        border: 1px solid #C0C0C0;
        text-align: left;
       /*  background-image:url('<?= URL ?>public/images/imagesearch1.png'); */
        background-repeat:no-repeat;
        background-position:left;
        padding-left: 22px;
    }
    .searchbutton{
        width: 29px;
		height: 32px;
		border-radius: 2px 2px 2px 2px;
		margin-left: -11px;
		font-size: 14px;
		font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
		cursor: pointer;
		border: none;
		color: whitesmoke;
		background-image: url('<?= URL ?>public/images/public/images/za.png');
		border: solid 1px #c8c8c8;
		background-color: rgb(230, 250, 222);
		background-repeat: no-repeat;
		background-position: 3px;
		
	}
    .mainTable{
        border-collapse: collapse;
        width: 99%;
        margin-top: 20px;
        margin:auto;
    }

    .mainTable th{
        background-color: #15B0ED;
        color: white;
        font-weight: bold;
        font-size: 13px;
        font-family: verdana;
        text-align: left;
        padding:5px;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size: 12px;
        font-family: verdana;
        text-align: left;
        padding: 5px 5px 5px 5px;
    }

    .tableDiv{
        margin-top: 62px;
    }
    .mainTable tr th:nth-child(6){
        text-align: right;
    }
    .mainTable tr th:nth-child(4){
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
        width: 100%;
        height: 25px;
        text-align: right;
        margin-top: 1px;
        background:none;
        font-family:verdana;
        font-size:12px;
    }
    .hrclass{
        width: 99%;
        margin: auto;
        margin-top: 40px;
        border-top: none;
        border-bottom: 1px solid c8c8c8;
    }

    .mainTable tr:hover{
        background-color: c8c8c8;
    }
    .buttons{
        width: 60;
        height: 24px;
        border-radius: 2px;
        background-color: rgb(21, 176, 237);
		border:none;
		font-weight:bold;
		color:#fff;
    }
    .buttonscontainer{
        margin-left: 820px;
        margin-top: 15;
    }
    .table1Enter input[type=text] {
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top: -5px;
        font-family: verdana;
        font-size: 12px;
    }
    .table2Enter input[type=text] {
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top: -5px;
        font-family: verdana;
        font-size: 12px;
    }
	.reversePayment{
		margin-top: -33px;
		height: 32px;
		width: 80px;
		margin-left: 302px;
		/* background-color: #5e5353; */
		border-radius: 2px 2px 2px 2px;
		font-size: 14px;
		font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
		cursor: pointer;
		color: whitesmoke;
		border: none;
		background: #B6B1B1;
		background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
		background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
		background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
		background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%);
		background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
	}
	.img2 {
		position: absolute;
		margin-left: 25px;
		height: 17px;
		z-index: -1;
		top: 209px;
		}
</style>

<script>
    $(function() {
        $('.client').change(function() {
            $('.mainTable > tbody > tr').remove();
            $.post(URL + 'invoice/clientInvoice', {clientid: $(this).val()})
                    .done(function(returnData) {
                        $('.mainTable > tbody').append(returnData);
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('#form').submit(function() {

        });

        amountreceived = 0;
        $('input[name="amountReceived"]').keyup(function() {
//          invoiceAmount();
            amountreceived = $(this).val();
        });
        
        $('#reversePayment').click(function(){
            if(confirm('Are you sure you want to reverse this account')){
                window.location.href = URL + 'invoice/reverseCollection';
//                alert('test');
            }
        });

        $(document).on("click", ".chk", function() {
            invoiceAmount();
        });

        function invoiceAmount() {
            if (amountreceived == '') {
                amountreceived = 0;
            }

            $("input[name='chk[]']:checked").each(function()
            {
                invoicetotal = parseFloat($(this).parents('tr').find('.totalinvoice').text());

                if (amountreceived > invoicetotal) {
                    amountreceived -= invoicetotal;
                    $(this).parents('tr').find('.amount').val(invoicetotal);
                } else {
                    $(this).parents('tr').find('.amount').val('');
                }

            });
            return false;
        }


    })
</script>
<?php
if (isset($_POST['paymentid'])) {
    $paymentview = TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid']);
    Session::setSession('paymentid', $paymentview[0]->paymentid);
}
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm" id="form">
        <div class="titleEnterPayment"><?php echo strtoupper($paymentview[0]->paymentstatus) ?> PAYMENT</div>
        <table class="table1Enter">
            <tr>
                <td>Date Received:</td>
                <td><input type="text"  readonly="readonly" name="" value="<?php echo date('m/d/Y', strtotime($paymentview[0]->dateReceived)) ?>"></td>
            </tr>
            <tr>
                <td>Amount Received:</td>
                <td><input type="text" readonly="readonly" name="amountReceived" class="numeric" id="amountReceived" value="<?php echo number_format((float) $paymentview[0]->amountReceived, 2) ?>"></td>
            </tr>
            <tr>
                <td>Received from Client:</td>
                <td colspan="3">
                    <input type="text" readonly="readonly" name="client" value="<?php echo DAOFactory::getTblHmoDAO()->load($paymentview[0]->hmoId)->hmoName ?>"/>
                </td>
            </tr>

        </table>

        <table class="table2Enter">
            <thead>
                <tr>
                    <td>Method of Payment:</td>
                    <td><input type="text" readonly="readonly" value="<?php echo DAOFactory::getTblMopDAO()->load($paymentview[0]->mopId)->description ?>"></td>
                </tr>

                <tr>
                    <td>Reference No.:</td>
                    <td><input type="text" name="refNum" readonly="readonly" value="<?php echo $paymentview[0]->refNum ?>"></td>
                </tr>

                <tr>
                    <td class="note">Notes:</td>
                    <td colspan="3"><textarea class="textarea" readonly="readonly"><?php echo $paymentview[0]->notes ?></textarea></td>
                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>

        <?php //if($paymentview[0]->paymenstatus =='posted'){ ?>
		<!--<input type="button" class="reversePayment" value="Reverse" id="reversePayment" >-->
        <?php //} ?>
        <div class="tableDiv">

            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="100px">Invoice No.</th>
                        <th width="100px">Invoice Date</th>
                        <th>Patient Name</th>
                        <th width="120px" style="text-align:center;">Total Invoice Amount</th>
                        <th  width="120px" style="text-align:center;">Withholding Tax Amount</th>
                        <th>Amount Paid</th>
                        <th  width="120px">Amount Balance</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (count($paymentview) > 0) {
                        foreach ($paymentview as $item) {
                            ?>
                            <tr class="child">
                                <td><?php echo $item->invoiceNumber ?></td>
                                <td><?php echo date('m / d / Y', strtotime($item->dateIssued)) ?></td>
                                <td><?php echo ucwords(DAOFactory::getTblClientDAO()->load($item->clientId)->clientName) ?></td>
                                <td><input class="isNumeric" type="text" value="<?php echo number_format((float) $item->grandTotal, 2) ?>" style="border:none;" readonly="readonly"></td>
                                <td><input type="text" readonly="readonly" value="<?php echo ($item->whtAmount < 0)? '(' .number_format((float) $item->whtAmount*-1, 2).')' : number_format((float) $item->whtAmount, 2) ?>" style="border:none;" readonly="readonly"></td>
                                <td><input type="text" readonly="readonly" value="<?php echo ($item->appliedAmount < 0)? '(' . number_format((float) $item->appliedAmount*-1, 2) .')' :number_format((float) $item->appliedAmount, 2)  ?>" style="border:none;" readonly="readonly"></td>
                                <td><input class="isNumeric" type="text" readonly="readonly" value="<?php echo number_format((float) $item->totalBalance, 2) ?>" style="border:none;" readonly="readonly"></td>
                            </tr>

                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <hr class="hrclass">
        </div>
        <table class="GLPOST">
            <tr>	
                <td class="item-ANewItem">Depository Bank Account:</td>
                <td><input type="text" value="<?php echo DAOFactory::getTblCoaDAO()->load($paymentview[0]->glPosting)->accontName ?>" readonly style="margin-left: -273px;margin-top: 2px;"/></td>
            </tr>
        </table>
        <div class="buttonscontainer">
            <input type="button" value="Close" class="buttons close">
        </div>
    </form>
</div>