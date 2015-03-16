
<style>
    .createNewChartofAccount{
        margin-left: 750px;
        margin-top: -77px;
        width: 212px;
        height: 42px;
        border: none;
        background-image:url('<?= URL ?>public/images/chartofaccount.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;
    }

    .collect_tableCharts{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 5px;
    }
    .collect_tableCharts, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: calibri;
        text-align: left;
        padding: 5px;
        padding-left: 20px;
    }
    .collect_tableCharts, td{
        font-size: 12px;
        color:black;
        font-family: calibri;
        text-align: left;
        padding: 2px 5px 2px 20px;
    }
    .collect_tableCharts a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
    }
    .table_collectionCharts{
    }
    .collect_tableCharts tr:HOVER{
        background-color: #E8E8E8;
    }
    .table_collectionCharts tr: hover{
        background-color: white;
    }	

    .invoiceHolderCharts{
        width: 100%;
        margin-top: 217px;
        background-color: white;
    }
    #newCharts{
        font-family: calibri;
        margin-left: 20px;
        font-style: italic;
        font-weight: none;
    }
    .chartsForm{
        background-color: white;
        padding-top: 1px;
        padding-bottom: 200px;
    }	
    .headTextCharts{
        margin-top: -133px;
        font-size: 30px;
        padding-top: 34px;
    }
    .hrClass4Charts{
        width:985px;
        border: 2px solid gray;
        margin-left: -15px;
        margin-top: -25px;
    }
    .div2Charts{
        background-color: #E5F1CE;
        right: 50%;
        margin-top: 5px;
        width: 990px;
        height: 45px;
        margin-left:5px;
        border-radius:10px 10px 0px 0px;
        border: 0px;
    }
    .button_containerCharts{
        margin-left: 10px;
        width: 200px;
        text-align: center;
        height: 28px;
        margin-top: 25px;
    }
    .addpaymentCharts{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: 5px;
        font-size: 14px;
        font-family: calibri;
        cursor: pointer;
        margin-top: 7px;
    }
    .printCharts{
        background-color:#5e5353;
        width: 128px;
        height: 29px;
        border-radius: 2px 2px 2px 2px;
        margin-left: 5px;
        font-size: 14px;
        font-family: calibri;
        cursor: pointer;
        color: whitesmoke;
        border: none;
    }
    .edit1Charts{
        background-color:#5e5353;
        width: 128px;
        height: 29px;
        border-radius: 2px 2px 2px 2px;
        margin-left: -1px;
        font-size: 14px;
        font-family: calibri;
        cursor: pointer;
        color: whitesmoke;
        border: none;
    }

    .head_collectCharts{
        font-family: Calibri;
        letter-spacing:1px;
        font-size: 13px;
        background-color: #55C768;
        color: white;
        height: 30px;
        text-align: left;
        font-weight: bold;
    }
    .collect_tableCharts{
        margin-top: 5px;
        margin-left: 10px;
        width: 98%;
        font-family: Calibri;
        font-size:12px;
    }
    .table_collectionCharts{
        background-color: white;
        height: 30px;
        font-family: calibri;
        font-weight: none;
    }
    .table_collectionCharts2{
        background-color: white;
        height: 25px;
    }

    .checkboxCharts{
        text-align: center;


    }
    .paynoCharts{
        color: black;
        margin-top: 200px;
        padding-left: 0px;
        text-align: left;
        background-color:white;
        border-collapse: collapse;
        width: 200px;
        font-size: 12px;
        font-family: calibri;
        font-weight: bold;
        padding-left: 1px;
    }
    .paynoCharts2{
        color: black;
        margin-top: 200px;
        padding-left: 0px;
        text-align: left;
        background-color:white;
        border-collapse: collapse;
        width: 200px;
        font-size: 12px;
        font-family: calibri;
        padding-left: 1px;
    }
    .cboxCharts{
        text-align: center;
        border: none;
        background-color: white;
        width: 40px;
    }
    .cboxCharts2{
        text-align: center;
        border: none;
        background-color: white;
        width: 40px;
    }
    .table_Title{
        background-color: rgb(235, 241, 222);
        height: 30px;
        border-bottom: 1px solid #C8C8C8;
        font-size:12px;
        font-family:calibri;
        font-weight:bold;
        padding-left:30px;
    }
    .collect_tableCharts tr th:nth-child(2){
        text-align: right;
        padding-right:100px;
    }
    .table_collectionCharts td:nth-child(1){
        text-align: left;
        padding-left: 40px;
        background-color: rgb(250, 248, 248);
    }
    .table_collectionCharts td:nth-child(2){
        text-align: right;
        padding-right:100px;
        background-color: rgb(250, 248, 248);
    }
</style>

<div class="invoiceHolderCharts">
    <div id="newCharts">
        <p class="headTextCharts">All Chart of Account</p>
        <a href="<?= URL ?>invoice/newRecurring">
            <input type="button"  class="createNewChartofAccount">
        </a>
        <div class="hrClass4Charts"></div>
    </div>

    <div class="div2Charts">
        <div id="button_containerCharts">
            <input type="button" value="Edit" class="printCharts addpaymentCharts">
            <input type="button" value="Delete" class="edit1Charts">
        </div>
    </div>
</div>

<div class="chartsForm">
    <table class="collect_tableCharts">

        <tr class="head_collectCharts">
            <th>Account No.</th>
            <th>Balances</th>
        </tr>
        <tr class="table_Title">
            <td colspan="2">ASSETS</td>
        </tr>

        <tr class="table_collectionCharts">
            <td class="">10000 - Cash</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class=""> 11000 - Receivables</td>
            <td class="">20,000.00</td>
        </tr>

        <tr class="table_Title">
            <td colspan="2">LIABILITIES</td>
        </tr>

        <tr class="table_collectionCharts">
            <td class="">20000 - Account Payables</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class=""> 20100 - Unrealized Loss on Foreign Currency</td>
            <td class="">20,000.00</td>
        </tr>

        <tr class="table_Title">
            <td colspan="2">INCOME</td>
        </tr>

        <tr class="table_collectionCharts">
            <td class="">90000 - Consulting Income</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class=""> 90100 -  Gain on Foreign Exchange</td>
            <td class="">20,000.00</td>
        </tr>

        <tr class="table_Title">
            <td colspan="2">EXPENSE</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class="">50000 - Utilities</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class=""> 50100 - Office Supplies</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class="">70000 - Telephone – Land Line</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class=""> 70100 - Travel Expense</td>
            <td class="">20,000.00</td>
        </tr>

        <tr class="table_collectionCharts">
            <td class=""> 70200 - Rent Expense</td>
            <td class="">20,000.00</td>
        </tr>

        <tr class="table_Title">
            <td colspan="2">EQUITY</td>
        </tr>

        <tr class="table_collectionCharts">
            <td class="">110100 - Owner Investment / Drawings</td>
            <td class="">20,000.00</td>
        </tr>
        <tr class="table_collectionCharts">
            <td class=""> 110200 - Owner's Equity</td>
            <td class="">20,000.00</td>
        </tr>

    </table>	
</div>
<div class="popBack hidden">

</div>
<script>
    $(function() {
        $('.createNewChartofAccount').click(function() {
            $.post(URL + 'views/setting/new_charts_account.php')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.chart-close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });
    })
</script>

