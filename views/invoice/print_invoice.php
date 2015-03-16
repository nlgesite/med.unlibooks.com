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
    .popback:parent{
        overflow:hidden;
    }
    .invoiceHolderInvoicePrint{
        width: 100%;
        margin-top: 50px;
        margin: auto;
		margin-bottom:30px;
    }
    .PaymentTypeFormInvoice{
        width: 805px;
        margin: auto;
        background-color: white;
        padding-bottom:10px;
        margin-top:30px;
    }
    .newInvoiceprint{
        font-family: Tahoma;
        margin-left: 15px;
        font-weight: bold;
        font-size: 20px;
        margin-top: 55px;
        height: 27px;
        border: 1px solid rgb(139, 138, 138);
        width: 773px;
        text-align: center;
        font-style:normal;
        padding-top:3px;
        padding-bottom:3px;
    }

    .niInvoice{
        font-size: 30px;
    }
    .clogo{
        width: 500px;
        height: 30px;
        margin-top: -10px;
        margin-left: 10px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .clogoup{
        padding-left: 5px;
        width: 500px;
        height: 17px;
        margin-top: -21px;
        margin-left: 5px;
        font-size: 17px;
        font-family: Tahoma;
        font-weight: bold;
        text-shadow: none;
        color: #000000;
    }
    .clogoAdd{
        margin-left: 157px;
        width: 50px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
        font-weight: none;
    }
    .clogoAdd2{
        margin-left: 157px;
        width: 200px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
        font-weight: none;	
    }
    .invoicetr{
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .tbleInvoice{
        margin-top: 15px;
        margin-left: 15px;
        width:96%;
    }
    .tbleInvoice td{
        font-weight:normal;
        padding:3px;
        font-size: 12px;
        font-family: Tahoma;
    }
    .inputboxInvoiceTxt{
        height: 100%;
        margin-top: 0px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        width:100%;
        padding:0px;
    }
    .inputboxInvoiceTxtIN{
        /* height: 20px; */
        margin-top: 0px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        width:100%;
        height:100%;
        padding:0px;
    }
    .inputboxInvoiceTxtID{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -18px;
        border: none;
        margin:70px;
    }
    .inputboxInvoiceTxtDD{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .inputboxInvoiceTxtSO{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .inputboxInvoiceTxtDIS{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .particularInvoice{
        padding-top:35px;
    }
    .inputboxInvoiceTxt2 {
        margin-top: 1px;
        font-family: Tahoma;
        font-size: 12px;
        border: none;
        width:100%;
    }
    .inputboxInvoiceTxtParticular{
        margin-top: 35px;
        font-family: Tahoma;
        font-size: 12px;
        border: none;
        width:100%;
    }
    .tbl2Invoice{
        margin-top: -82px;
        margin-left: 602px;
        border-collapse: collapse;
    }
    .tbl2Invoice td{
        width:164px;
        padding:3px;
        font-family: Tahoma;
        font-size: 12px;	
    }
    .tblInvoice2print{
        border: 1px solid rgb(116, 115, 115);
        margin-top: 15px;
        padding-bottom: 30px;
        margin: auto;
        width: 773px;
    }
    .newTblInv{
        border-spacing: 0px;
    }
    .tblInvoicepaddingbottom td{
        padding-bottom:30px;
    }
    .tblInvoice2print, th{

    }
    .tblInvoice2print th{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        color: black;
        font-size: 12px;
        font-family:tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding: 5px;
        text-align: left;
        border-spacing: 0px;
    }
    .tblInvoice2print td{
        color: black;
        font-size: 12px;
        font-family:tahoma;
        font-weight: normal;
        padding: 5px;
    }
    .thInvoiceNew{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
    }
    .thInvoiceNew2{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        text-align: right;
        padding-right: 5px;
    }
    .thInvoiceNew3{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: center;
        width: 888px;
    }
    .thInvoiceNew5{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: center;
    }
    .thInvoiceNew4{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: right;
        padding-right: 5px;
    }
    .boarderNew{
        background-color: white;
        font-weight: none;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .boarderNew2{
        background-color: white;
        font-weight: none;
        padding-left: 5px;
        text-align: center;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .boarderNew3{
        background-color: white;
        font-weight: none;
        padding-right: 5px;
        text-align: right;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .tbl2Invoice2{
        border: 1px solid black;
        margin-top: 20px;
        margin-left: 15px;
        padding-bottom: 30px;
        font-size: 12px;
        font-family:Tahoma;
        width: 96.1%;
    }
    /* .tbl2Invoice2, tr th{
        text-align: left;
        border-spacing: 0px;
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
        width: 19.3%;
    } */
    .tbl3Invoice2{
        /* border: 1px solid black; */
        margin-top: 20px;
        margin-left: 488px;
        width: 301px;
        border-collapse: collapse;

    }
    .SAInvoice{
        text-align: left;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
    }
    .SAInvoice2{
        text-align: left;
        font-size: 12px;
        font-family: Tahoma;
        padding:5px;
    }
    .SAInvoice3{
        text-align: left;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: -5px;
        font-weight: bold;
    }
    .inputTotalInvoice{
        width: 100%;
        text-align: right;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        padding-right: 3px;
    }
    .inputTotalInvoice2{
        width: 100%;
        text-align: right;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        padding-right: 3px;
    }
    .inputTotalInvoice3{
        width: 100%;
        text-align: right;
        padding-right: 3px;
        font-weight: bold;
        font-size: 12px;
        font-family: Tahoma;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: none;
        box-shadow: none;
        background-color: #c8c8c8;
        margin-top:-1px;
    }
    .trTotalInvoices{
        margin-top: -5px;
    }
    .trTotalInvoicesGr{
        margin-top: -5px;
        background-color: #c8c8c8;
        border-spacing: 0px;

    }
    .RemarksInvoice{
        margin-top: 30px;
        margin-left: 15px;
        font-size: 12px;
        font-weight: bold;
        text-shadow: none;
        font-family: Tahoma;
    }
    .RemarkText{
        margin-left: 15px;
        width: 773px;
        height: 60px;
        margin-bottom: 20px;
        margin-top: 10px;
        font-family:tahoma;
        font-size:12px;
        padding:5px;
    }
    .closePrint{
		  border: none;
		  border-radius: 2px;
		  cursor: pointer;
		  float: right;
		  margin-right: 7px;
		  margin-top: 7px;
		  background: none;
		  height: 25px;
		  width: 28px;
    }
    .tblInvoice2print tr th:nth-child(2){
        text-align: center;
    }
    .tblInvoice2print tr th:nth-child(4){
        text-align: right;
    }
    .tblInvoice2print tr th:nth-child(5){
        text-align: right;
    }
    .tblInvoice2print tr td:nth-child(2){
        text-align: center;
    }
    .tblInvoice2print tr td:nth-child(4){
        text-align: right;
    }
    .tblInvoice2print tr td:nth-child(5){
        text-align: right;
    }

    .tblInvoice2Item{
        border: 1px solid black;
        margin-top: 10px;
        margin-left: 15px;
        padding-bottom: 30px;
        width: 96.1%;
    }
    .newTblInv{
        border-spacing: 0px;
    }

    .tblInvoice2Item, th{
        text-align: left;
        border-spacing: 0px;
        margin: auto;
        margin-top: 15px;
        width: 773px;
    }
    .tblInvoice2Item th{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        color: black;
        font-size: 12px;
        font-family: tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-right: 5px;
        width: 19.3%;
    }
    .tblInvoice2Item td{
        font-family: tahoma;
        font-size: 12px;
        padding: 5px;
    }

    .tblInvoice2Item tr th:nth-child(2){
        text-align: center;
    }
    .tblInvoice2Item tr th:nth-child(4){
        text-align: right;
        padding:5px;
    }
    .tblInvoice2Item tr th:nth-child(5){
        text-align: right;
    }
    .tblInvoice2Item tr td:nth-child(2){
        text-align: center;
    }
    .tblInvoice2Item tr td:nth-child(4){
        text-align: right;
    }
    .tblInvoice2Item tr td:nth-child(5){
        text-align: right;
    }
    .scplogoclass{
        width: 114px;
        height: 63px;
        margin-top:-17px;
    }
    .addressLogo{
        color:#000000;
        font-size:12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight:normal;
       /*  font-weight:bold; */
    }
    .pdf{
        color: white;
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        margin-left: 724px;
        margin-top: 12px;
        font-family: calibri;
        font-weight: bold;
        width: 55px;
        height: 25px;
    }
    .pdf2{
        color: white;
        background-color: rgb(89,89,89);
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        box-shadow: 0px 0px 3px 1px gray;
        font-family: calibri;
        font-weight: bold;
        width: 47px;
        height: 25px;
        margin-left:5px;
    }

    @media print {
        .mainbodyInvoice, #container, .mainBody, #footer, input[type=button] {
            display: none;
        }

        .Main{
            background: none;
        }

        .PaymentTypeFormInvoice{
            width: 100%;
        }
        .PaymentTypeFormInvoice{
            width: 805px;
        }

        .popBack{
            width: 100%;
            overflow: hidden;
            position: static;
            background-color: #fff;
        }

        @page {
            size: portrait;
            margin: 0px;
        }
        thead   {display: table-header-group;   }

        tfoot   {display: table-footer-group;   }
    }

    @media screen{
        thead   {display: table-header-group;   }

        tfoot   {display: table-footer-group;   }
    }
    .rateinvoice{
        font-size: 12px;
        font-family:tahoma;
    }
    .paidInvoice{
        width:295px;
        height:121px;
    }
    .img2 {
        position: absolute;
        margin-left: 28px;
        height: 17px;
        z-index: -1;
        top: 209px;
    }
</style>

<?php
$client = new TblClient();
$invoice = new TblNewInvoice();
$invoiceamount = new TblInvoiceAmount();
$taskline = array();
//$itemline = array();
if (isset($_POST['invoiceid'])) {
    $invoice = DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid']);
    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
    $hmo = DAOFactory::getTblHmoDAO()->load($invoice->hmoId);
    $mopay = DAOFactory::getTblMopDAO()->load($invoice->mopId);
    $taskline = TblInvoiceLinesMySqlExtDAO::getTasks($invoice->id);
//    $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
    Session::setSession('printinvoiceid', $_POST['invoiceid']);
    foreach (DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($_POST['invoiceid']) as $each) {
        $allinvoice = $each;
    }
    foreach (DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allinvoice->id)as $each) {
        $invoiceamount = $each;
    }
}
$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));
?>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="invoiceHolderInvoicePrint">
    <form class="PaymentTypeFormInvoice boxshadow">
        <input type="button" class="closePrint popx" value="">
        <input type="button" class="addsavebutton pdf" value="PDF" onclick="viewpdf(<?php echo $invoice->id ?>)">
<!--<input type="button" class="pdf2" value="Print" onclick="window.print();">-->

        <div class="clogo">
            <div><img class="" <?php echo Session::getSession('medorgid') . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName ?>"></div>
            <div class="clogoup"><?php echo DAOFactory::getTblOrganizationDAO()->load(Session::getSession('medorgid'))->orgName ?><br><span class="addressLogo"><?php echo $company->address ?></span><br>
                <span class="addressLogo"><span style="font-weight:bold;">TIN:</span> <?php echo $company->tinNum ?></span><br />
                <span class="addressLogo"><span style="font-weight:bold;">Phone:</span> <?php echo $company->phoneNum ?> <br/><span><span style="font-weight:bold;"> Fax:</span> <?php echo $company->faxNum ?></span></span></div>
        </div>

        <div id="newInvoice" class="newInvoiceprint"><?php echo ($invoice->status == 'open') ? 'OPEN ' : '' ?>INVOICE</div>
        <?php
        if ($mopay->code == 'Check' || $mopay->code == 'Cash' || $mopay->code == 'Credit') {
            ?>
            <div style="margin-left:245px;position:absolute;margin-top:124px;">
                <img src="<?= URL ?>public/images/paidimg.png" class="paidInvoice">
            </div>
            <?php
        } else if ($mopay->code == 'HMO') {

            $hmoPaid = DAOFactory::getTblAllCollectionDAO()->queryByInvoicedAmountId($invoiceamount->id);

            if (!empty($hmoPaid)) {
                ?>
                <div style="margin-left:263px;position:absolute;margin-top:124px;">
                    <img src="<?= URL ?>public/images/paidimg.png" class="paidInvoice">
                </div>
                <?php
            }
        }
        ?>

        <table class="tbleInvoice">
            <tr class="invoicetr">
                <td>Patient Name: <?php echo ucwords($client->clientName) ?></td>
                <td style="width:25%">Invoice No.: <?php echo $invoice->invoiceNumber ?></td>
            </tr>
            <tr class="invoicetr">
                <td>Address: <?php echo ucwords($client->address) ?></td>
                <td>Invoice Date: <?php echo date('m/d/Y', strtotime($invoice->dateIssued)) ?></td>
            </tr>
            <tr class="invoicetr">
                <td>HMO:
                    <?php if ($mopay->code == 'HMO'): ?>
                        <?php echo ucwords($hmo->hmoName) ?></td>
                <?php endif; ?>
                <td>Due Date: <?php echo date('m/d/Y', strtotime($invoice->dueDate)) ?></td>
            </tr>
            <tr class="invoicetr">
                <td class="particularInvoice">Particulars: <?php echo $invoice->particular ?></td>
                <td>Discount: <?php echo $invoice->discount ?>%</td>
            </tr>
        </table>
       <!-- <table class="tbl2Invoice">
            <tr class="invoicetr">
                <td>Invoice Number: <?php echo $invoice->invoiceNumber ?></td>
            </tr>	
            <tr class="invoicetr">
                <td>Invoice Date: <?php echo $invoice->dateIssued ?></td>
            </tr>	
            <tr class="invoicetr">
                <td>Due Date: <?php echo $invoice->dueDate ?></td>
            </tr>
            <!--<tr class="invoicetr">
                <td>P.O. / S.O:<input type="text" value="<?php echo $invoice->pOSO ?>" class="inputboxInvoiceTxtIN" readonly="readonly" style="margin-left: 64px; margin-top:-14px;"></td>
            </tr>
            <tr class="invoicetr">
                <td>Discount: <?php echo $invoice->discount ?>%</td>
            </tr>
        </table>-->
        <?php
        if (count($taskline) > 0) {
            ?>
            <div style="margin-top:20px; width:805px;">	
                <table class="tblInvoice2print">
                    <thead>
                        <tr class="newTblInv">
                            <th style="width:15%;">Service Item No.</th>
                            <th style="width:15%;">Hour</th>
                            <th style="width:40%;">Description</th>
                            <th style="width:15%;">Rate</th>
                            <th style="width:15%;">Amount</th>
                        </tr>
                    </thead>
                    <?php foreach ($taskline as $i => $task) { ?>
                        <tr class="<?php echo ($i == count($taskline)) ? 'tblInvoicepaddingbottom' : '' ?>">
                            <td class=""><?php echo $task->taskCode ?></td>
                            <td class=""><?php echo $task->hour ?></td>
                            <td class=""><?php echo ucwords($task->description) ?></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $task->rate, 2) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $task->netAmount, 2) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>

            <?php // if (count($itemline) > 0) { ?>
<!--            <table class="tblInvoice2Item">
                <thead>
                    <tr class="newTblInv">
                        <th style="width:15%;">Item No.</th>
                        <th style="width:15%;">Quantity</th>
                        <th style="width:40%;">Description</th>
                        <th style="width:15%;">Unit Cost</th>
                        <th style="width:15%;">Amount</th>
                    </tr>
                </thead>-->
            <?php // foreach ($itemline as $i => $item) {  ?>
<!--                <tr  class="<?php ($i == count($itemline)) ? 'tblInvoicepaddingbottom' : '' ?>">
                    <td class=""><?php echo $item->itemCode ?></td>
                    <td class=""><?php echo $item->quantity ?></td>
                    <td class=""><?php echo $item->description ?></td>
                    <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $item->unitCost, 2) ?>" style="text-align: right;margin-right: 0;width: 100%; border:none;"></td>
                    <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $item->netAmount, 2) ?>" style="text-align: right;margin-right: 0;width: 100%; border:none;"></td>
                </tr>-->
            <?php // }  ?>
            <!--</table>-->


            <?php // } ?>
        </div>
        <table class="tbl3Invoice2">
            <tr>
                <td class="SAInvoice">Service Amount:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $invoiceamount->subTotalAmount, 2); ?>" class="inputTotalInvoice numeric"></td>
            </tr>
            <tr class="trTotalInvoices">
                <td class="SAInvoice2">Vat 12%:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $invoiceamount->vatAmount, 2) ?>" class="inputTotalInvoice2 numeric"></td>
            </tr>
            <tr class="trTotalInvoices">
                <td class="SAInvoice2">Discount:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $invoiceamount->discountAmount, 2) ?>" class="inputTotalInvoice2 numeric"></td>
            </tr>
            <tr class="trTotalInvoicesGr">
                <td class="SAInvoice3">Grand Total:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $invoiceamount->grandTotal, 2) ?>" class="inputTotalInvoice3 numeric"></td>
            </tr>

        </table>

        <div class="RemarksInvoice">Remarks</div>
        <div><textarea class="RemarkText"><?php echo $invoice->remarks ?></textarea></div>
    </form>
</div>

<script>
//    $(function(){
    /* function viewpdf(invoiceid) {
     $().redirect(URL + 'invoice/pdfview') 
     .done(function(returnData) {
     $('.popBack').html(returnData);
     $('.popBack').removeClass('hidden');
     
     
     $('.closeNewItem').click(function() {
     $('.popBack').addClass('hidden');
     $('.popBack').html('');
     });
     })
     .fail(function() {
     alert('Connection Error!');
     });
     return false;
     } */

    function viewpdf(invoiceid) {
        window.open(URL + 'invoice/pdfview')
                .done(function(returnData) {

                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }
//    })
</script>