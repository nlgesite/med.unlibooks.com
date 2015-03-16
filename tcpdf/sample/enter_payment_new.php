<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

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
        width: 869;
        background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
        background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -webkit-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: linear-gradient(to top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 18px;
        font-family: calibri;
        font-style: italic;
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
        font-family: calibri;
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
        font-family: calibri;
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
        background-image:url('/unlibooks/public/images/imagesearch1.png');
        background-repeat:no-repeat;
        background-position:left;
        padding-left: 22px;
    }
    .searchbutton{
        margin-left: 5px;
        width: 80px;
        color: whitesmoke;
        background-color: 5E5353;
        height: 28px;
        border: none;
        border-radius: 5px;
    }
    .mainTable{
        border-collapse: collapse;
        width: 99%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        background-color: 1EBE39;
        color: white;
        font-weight: bold;
        font-size: 14px;
        font-family: calibri;
        text-align: left;
        padding:5px;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size: 12px;
        font-family: calibri;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }

    .tableDiv{
        margin-top: 5px;
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
        border: 1px solid c8c8c8;
        background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
        background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -webkit-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: linear-gradient(to top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        cursor: pointer;
    }
    .buttonscontainer{
        margin-left: 700px;
        margin-top: 15;
    }
</style>



<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm" id="form">
        <div class="titleEnterPayment">Enter Payment</div>
        <table class="table1Enter">
            <tr>
                <td>Date Received:</td>
                <td><input type="text" name="" value="<?php echo date('Y-m-d') ?>"></td>
            </tr>
            <tr>
                <td>Amount Received:</td>
                <td><input type="text" name="amountReceived" id="amountReceived"></td>
            </tr>
            <tr>
                <td>Received from Client:</td>
                <td colspan="3">
                    <?php
                    $customer = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('medorgid'));
                    //print_r(count($customer));
                    if (count($customer) > 0) {//
                        ?>
                        <select class="table1Enterselect client" name="clientId" ><option></option>
                            <?php foreach ($customer as $item) { ?>
                                <option value='<?php echo $item->id ?>'><?php echo $item->clientName ?></option>
                            <?php } ?>
                        </select>
                        <?php
                    }
                    ?>
                </td>
            </tr>

        </table>

        <table class="table2Enter">
            <thead>
                <tr>
                    <td>Method of Payment:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Reference No.:</td>
                    <td><input type="text" name="refNum"></td>
                </tr>
                <tr>
                    <td class="note">Notes:</td>
                    <td colspan="3"><textarea class="textarea"></textarea></td>
                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>

        <div class="search">
            <input type="search" placeholder="Search Invoice No. Here" class="txtsearch2" name="search"> 
            <input type="button" class="searchbutton" value="Search" id="search" >
        </div>
        <div class="tableDiv">
            
            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="3%"><input type="checkbox"></th>
                        <th width="100px">Invoice No.</th>
                        <th width="100px">Invoice Date</th>
                        <th>Client</th>
                        <th width="128px">Total Invoice Amount</th>
                        <th  width="120px">Applied Amount</th>
                        <th  width="120px">Amount Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['paymentid'])) {
                        echo print_r(TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid'])) ;
                    }
                    ?>
<!--                    <tr class="child">
                        <td width="3%"><input type="checkbox"></td>
                        <td><a href="">000001</a></td>
                        <td>7/25/2014</td>
                        <td></td>
                        <td>2,000.00</td>
                        <td><input type="text" value="1,500.00"></td>
                        <td>500.00</td>
                    </tr>
                    <tr class="child">
                        <td width="3%"><input type="checkbox"></td>
                        <td><a href="">000002</td>
                        <td>7/25/2014</td>
                        <td></td>
                        <td>2,000.00</td>
                        <td><input type="text" value="1,500.00"></td>
                        <td>500.00</td>
                    </tr>-->

                </tbody>
            </table>
            <hr class="hrclass">
        </div>
        <div class="buttonscontainer">
            <input type="submit" value="Post" class="buttons">
            <input type="button" value="Cancel" class="buttons">
            <input type="hidden" name="task" value="payment" />
        </div>

    </form>

</div>
<script>
    $(function() {
           clientid = 0;
           amountreceived = 0;
           search = '';
        $('.client').change(function() {
            invoicePayment($(this).val(), '');
            clientid = $(this).val();
        });
        $(document).on('keyup','input[name="search"]',function(){
            search = $(this).val();
        });
        
        $(document).on('click','#search',function(){
//            alert(search);
           invoicePayment(clientid, search); 
        });

//        $('#search').keyup(function(){
//            alert($(this).val());
//        })
        function invoicePayment(clientid, search){
             $('.mainTable > tbody > tr').remove();
            $.post(URL + 'invoice/clientInvoice', {clientid: clientid, search: search})
                    .done(function(returnData) {
                $('.mainTable > tbody').append(returnData);
            })
                    .fail(function() {
                alert('Connection Error!');
            });
            return false;
        }
        
        $('#form').submit(function() {

        });
        
        
        $('input[name="amountReceived"]').keyup(function() {
//          invoiceAmount();
           amountreceived = $(this).val();
           invoiceAmount();
        });

        $(document).on("click", ".chk", function() {
//            alert(parseFloat($('input[name="amountReceived"]').val()));
            invoiceAmount();
        });

        function invoiceAmount() {
//            amountreceived = $('input[name="amountReceived"]').val();
            if (amountreceived == '') {
                amountreceived = 0;
            }

            $("input[name='chk[]']:checked").each(function()
            {
                invoicetotal = parseFloat($(this).parents('tr').find('.totalinvoice').text());

                if (amountreceived > invoicetotal) {
                    amountreceived -= invoicetotal;
                    $(this).parents('tr').find('.amount').val(invoicetotal);
                    $(this).parents('tr').find('.balance').val(parseFloat( $(this).parents('tr').find('.amount').val() - invoicetotal));
                } else {
                    $(this).parents('tr').find('.amount').val('');
                }

            });
            return false;
        }


    })
</script>