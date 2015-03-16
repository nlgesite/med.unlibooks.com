<?php
require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>
<?php // Session::setSession('orgid', '46');   ?>
<style>
    body{
        overflow:hidden;
    }
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

</style>
<link href="<?=URL?>views/invoice/css/ajax.css" rel="stylesheet" type="text/css">

<?php
//    DAOFactory::getTblNewInvoiceDAO()->getData();
if (isset($_POST['invoiceid'][0])) {
    $invoiceid = $_POST['invoiceid'][0];
    $invoice = DAOFactory::getTblNewInvoiceDAO()->load($invoiceid);

    $invoice_number = $invoice->invoiceNumber;
    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId)->clientName;
}

foreach (DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoiceid) as $each) {
    $allinvoice = $each;
}

if (count($allinvoice) > 0) {
    Session::setSession('allinvoiceid', $allinvoice->id);
    $total_amount_lines = $allinvoice->totalAmountLines;
}

$payments = DAOFactory::getTblEnterPaymentDAO()->queryByAllInvoiceId($allinvoice->id);
$balance = 0;
if (count($payments) > 0) {
    foreach ($payments as $payment) {
        $balance += $payment->paymentAmount;
    }
}
?>
<div class="invoiceHolderENTERPayment">
    <form method='post' action='<?php echo URL ?>invoice/collection' id='form' class="form1ENTERPayment">
        <div id="enterENTERPayment">
            <p class="enterPaymentENTERPayment">Enter Payment</p>
            <input class="closeENTERPayment" type="button" name="close" value="X">
            <div>
                <hr class="hrENTERPayment2">
            </div>

            <div>
                <div class="EpaymentText">Invoice No:<input type="text" id="textIn2ENTERPayment" value="<?php echo $invoice_number ?>"></div>		
            </div>
            <ul>
                <nav class= "textCustomerENTERPayment"> Client: <input type="text" class="textCust2ENTERPayment" value="<?php echo $client ?>"></nav>
            </ul>
            <ul>
                <nav class= "paymentENTERPayment"> Payment (Php): <input type="text" class="payment2ENTERPayment" value="" name="paymentAmount" required></nav>
            </ul>
            <ul>
                <nav class="forPaENTERPayment"><input type="checkbox" value="payment" class="payCheckENTERPayment">for full Payment Amount</nav>
            </ul>
            <ul>
                <div class="balanceENTERPayment">Balance Amount: <input attribute readonly="readonly" type="text" class="balAmountENTERPayment" value="<?php echo $balance; ?>"></div>
            </ul>
            <ul>
                <div class="invoiceTAENTERPayment">Invoice Total Amount: <input attribute readonly="readonly" type="text" class="invoiceTA2ENTERPayment" value="<?php echo $total_amount_lines ?>"></div>
            </ul>
            <ul>
                <div class="dateENTERPayment">Date:<input type="date" class="date2ENTERPayment" name="transDate"></div>
            </ul>
            <ul> 
                <div class="selectMethodENTERPayment">Method of Payment:
                    <select class="selectMethod2ENTERPayment">
                        <option>Cash</option>
                    </select>
                </div>
            </ul>
            <ul>
                <div class="referencePaymentText">Reference No.:<input type="text"class="referencePaymentInput"></div>
            </ul>

            <ul>
                <div class="noteENTERPayment">Notes:<textarea input type="text" class="note2ENTERPayment"></textarea></div>
            </ul>

            </table>	

        </div>

        <div class="divbuttonsENTERPayment">
            <input class="buttonDownENTERPaymentEP" type="submit" name="save" value="Save">
            <input class="buttonDown2ENTERPaymentEP" type="button" name="save" value="Save and Add New">
            <input type="hidden" name="task" value="payment" />
        </div>	



    </form>
</div>



