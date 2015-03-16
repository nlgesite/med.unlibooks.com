

<!--SELECT * 

FROM tbl_journal_lines;


SELECT *

FROM tbl_coa;

SELECT 
        coa.account_num,
        coa.accont_name,
        jLines.debit,
        jLines.credit		

FROM tbl_journal_lines jLines

INNER JOIN tbl_coa coa
        ON coa.id = jLines.account_code
        
WHERE coa.org_id = 139 ;-->
<?php
$daterange = $daterange2 = '';
if (isset($_POST['date']) && $_POST['searchtype'] == 'monthly') {
    $daterange = date('Y-m', strtotime($_POST['date'] . ' -1 month'));
    $daterange2 = date('Y-m', strtotime($_POST['date']));
} elseif (isset($_POST['date']) && $_POST['searchtype'] == 'annual') {
    $daterange = $_POST['year'] - 1; //date('Y', strtotime($_POST['date'] . ' -1 year'));
    $daterange2 = $_POST['year']; //date('Y', strtotime($_POST['date']));
}
?>
<html>
    <head>
        <style>
            .trialBalCont{
                width:100%;
                margin:0;
                padding:0;
                font-family:Verdana;
                font-size:12px;
            }
            .trialBal2{
                margin:auto;
            }
            .fromReg{
                text-align:center;
                font-weight:bold;
                margin-top:20px;
            }
            .tblShowReportOR{
                border-collapse:collapse;
                margin-top:21px;
                width:97%;
                font-family:Verdana;
                font-size:10px;
                text-align:left;
                margin-left:12px;
            }
            .tblShowReportOR tr td{
                border:1px solid #c8c8c8;
            }
            .tblShowReportOR th{
                font-size:14px;
                font-weight:bold;
                background:rgb(63, 176, 63);
                padding:3px;
                color:#fff;
                border: 1px solid #c8c8c8;
            }
            .listsRec{
                text-align:left;
                padding:5px;
            }
            .hidden{
                display:none;
            }
            .fromtodateIncome{
                margin-left:20px;
                font-family:Verdana;
                font-size:12px;
            }
            .fromtodatetableincome{
                font-family:Verdana;
                font-size:12px;
                margin-top:10px;
                margin-left:6px;
            }
            .fromtodatetableincome td{
                padding: 5px;
            }
            .fromtodatetableincome input[type="date"]{
                width:150px;
                height:29px;
                font-family:Verdana;
                font-size:12px;
                margin-left:5px;
                padding:5px;
            }
            .incomestate{
                padding:10px;
				  margin-left: -9px;
				  margin-top: 4px;
            }
            .DFstask{

            }
            .searchsalesincome{
                width: 100px;
                height: 28px;
                cursor: pointer;
                margin-top: -40px;
            }
            .ui-datepicker-calendar {
                display: none;
            }
            .buttonFSbalance{
                float:right;
                margin-top: -17px;
                margin-right:5px;
            }
            .showTrialBalance{
                overflow:scroll;overflow-x:hidden; height:591px;box-shadow: 1px 1px 6px rgb(148, 148, 148); width: 751px; margin-left: 8px; margin-top: 15px;padding-bottom: 28px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
    </head>
    <body>

        <div class="trialBalCont">
            <div class="trialBal2">
                <form method='post' id='form' class="clientlistformbalance">
                    <div style="" class="BSText">
                        Trial Balance Report 
                    </div>

                    <div class="buttonFSbalance">
                        <input type="button" class="FSPrintbalance printFS" value="">
                        <input type="button" class="FSPrintbalances exportTB" value="">
                    </div>

                    <div class="fromtodateIncome DFstask">
                        <div class="incomestate">
                            <table>
                                <td><input type="radio" name="searchtype" value="monthly" class="monthly"
                                    <?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly' ? ' checked="checked" ' : '' ?>
                                           required > Monthly</td>
                                <td><input type="radio" name="searchtype" value="annual" class="annual" style="margin-left:20px;"
                                    <?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual' ? ' checked="checked" ' : '' ?>
                                           required > Annual</td>
                            </table>
                            <table class="fromtodatetableincome">
                                <tr>
                                    <td class="hidden monthTd reportfonts">Month: <input name="date" id="startDate" class="monthpicker" type="" style="width:124px;" value="<?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly' ? $_POST['date'] : date('F Y') ?> <?php ?> " /></td>
                                    <td class="hidden yearTd reportfonts">
                                        <div style="margin-left:10px;">Year: <input class="todaydate"  id="datepicker" type=""   name="year" class="monthname" value="<?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual' ? $_POST['year'] : date('Y') ?>" /></div>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div style="float:right;margin-right:377px;"><input type="submit" value="" class="searchsalesincome hidden"></div>
                    </div>
                    <div class="hmoDivider"></div>
                    <div class="showTrialBalance hidden" style="">	

                        <table class="tblShowReportOR">
                            <tr>
                                <th style="width: 76px; text-align:center;">Account Code</th>
                                <th style="width: 90px;text-align: center;">Account Name</th>
                                <th style="width: 80px;text-align: center;">As of <?php echo $daterange ?></th>
                                <th style="width: 80px;text-align: center;">Debit</th>
                                <th style="width: 80px;text-align: center;">Credit</th>
                                <th style="width: 80px;text-align: center;">As of <?php echo $daterange2 ?></th>
                                <?php
                                if (isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly') {
                                    ?>
                                    <th style="text-align:right;width: 90px;text-align: center;">For the month of <?php echo $daterange2 ?></th>
                                <?php } ?>
                            </tr>
                            <?php
//                            require_once 'public/report.class.php';
//                            $incomestatement = ReportClass::incomeStatement('');
                            $tb = array();
                            if (isset($_POST['date']) || isset($_POST['year'])) {
                                $tb = TblTrialBalanceMySqlExtDAO::trialBalance(Session::getSession('medorgid'), (isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly') ? $_POST['date'] : $_POST['year'], $_POST['searchtype']);
                                $tb2 = (count($tb) == 2) ? $tb[1] : array();
                                $totalprev = $totalcurrentasof = $totaldebit = $totalcredit = 0;
                            }
                            if (count($tb) > 0) {
                                foreach ($tb[0] as $i => $item) {
                                    ?>
                                    <tr class="listsRec">
                                        <!--<td><?php //echo $i + 1   ?></td>-->
                                        <td><?php echo $item->code ?></td>
                                        <td><?php echo $item->name ?></td>
                                        <td style="text-align:right;padding-right:5px;"><?php
                                            $prevasof = $tb2[$i]->debit - $tb2[$i]->credit;
                                            echo ($prevasof != 0) ? number_format($prevasof,2) : '';
                                            ?></td>
                                        <td style="text-align:right;padding-right:5px;"><?php
                                            echo ($item->debit != 0) ? number_format($item->debit, 2) : '';
                                            ?></td>
                                        <td style="text-align:right;padding-right:5px;"><?php
                                            echo ($item->credit != 0) ? number_format($item->credit, 2) : '';
                                            ?></td>
                                        <td style="text-align:right;padding-right:5px;"><?php
                                            $currentasof = $prevasof + $item->debit - $item->credit;
                                            echo ($currentasof != 0) ? number_format($currentasof, 2) : ''; //($currentasof >= 0) ? number_format($currentasof, 2) : '-';
                                            ?></td>
                                            <?php
                                        if (isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly') {
                                            ?>
                                            <td style="text-align:right;padding-right:5px;"><?php
                                if ($item->code > '3002') {
                                    echo ($currentasof != 0) ? number_format($currentasof, 2) : '';
                                } else {
                                    echo ($item->balance != 0) ? number_format($item->balance, 2) : '';
                                    $currentasof = $item->balance;
                                }
                                            ?></td>

                                        <?php } ?>
                                    </tr>
                                    <?php
                                    $totalprev += $prevasof;
                                    $totaldebit += $item->debit;
                                    $totalcredit += $item->credit;
                                    $totalcurrentasof += round($currentasof,2);
                                }
//                                echo 
                                ?>
                                <tr>
                                    <td colspan="2" style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;">Total</td>
                                    <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format(round($totalprev), 2) ?></td>
                                    <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format($totaldebit, 2) ?></td>
                                    <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format($totalcredit, 2) ?></td>
                                    <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format(bcsub(round($totaldebit,2), round($totalcredit)) , 2) ?></td>
                                    <?php
                                    if (isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly') {
                                        ?>
                                        <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format(round($totalcurrentasof) , 2) ?></td>
                                    <?php } ?>

                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </form>	
            </div>
        </div>
    </body>
</html>
<script>
    $(function() {
        $('form').submit(function() {

            $.post(URL + 'report/trial_balance', {date: $('input[name="date"]').val(), year: $('input[name="year"]').val(), searchtype: $('input[name="searchtype"]:checked').val()})
                    .done(function(returnData) {
                        // alert(returnData);
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');
                        $('.showTrialBalance').removeClass('hidden');
                        // $('.selectRate').change();

                    }).fail(function() {
                alert('Connection Error!');
            });

            return false;

        });


        $(".monthly").click(function() {
            $(".monthTd").show();
            $(".searchsalesincome").show();
            $(".yearTd").hide();
            $('#startDate').prop('required', true);
            $('#datepicker').prop('required', false);
        });

        $(".annual").click(function() {
            $(".yearTd").show();
            $(".searchsalesincome").show();
            $(".monthTd").hide();
            $("#datepicker2").datepicker({dateFormat: 'yy', changeMonth: false, });
            $('#datepicker').prop('required', true);
            $('#startDate').prop('required', false);
        });

        $('input[name="searchtype"]:checked').click();

        $('.monthpicker').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, month, 1));
            }
        });



        $('#datepicker').datepicker({
            changeMonth: false,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy',
            stepMonths: 12,
            onClose: function(dateText, inst) {
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, 1));
            }

        });


        $("#datepicker").focus(function() {
            $(".ui-datepicker-month").hide();
        });

        $('.printFS').click(function() {
            window.print();
        });
        $('.exportTB').click(function() {
            location = URL + 'report/export_trialbalance?date=' + $('input[name="date"]').val() + '&year=' + $('input[name="year"]').val() + '&searchtype=' + $('input[name="searchtype"]:checked').val();
        });


    });
</script>