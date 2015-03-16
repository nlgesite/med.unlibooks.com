<style>
    .trialBalCont{
        /*width:100%;*/
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
        /*border-collapse:collapse;*/
        /*margin-top:21px;*/
        width:600px;
        font-family:Verdana;
        font-size:10px;
        text-align:left;
        /*margin-left:12px;*/
    }
    .tblShowReportOR tr td{
        border:1px solid #c8c8c8;
    }
    .tblShowReportOR th, .head{
        font-size:14px;
        font-weight:bold;
        background:rgb(37, 181, 239);
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
        /*  margin-left:20px; */
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
    .incomestate{
        padding:10px;
    }
</style>

<div class="trialBalCont">
    <div class="trialBal2">
        <div style="" class="BSText">
            Trial Balance Report 
        </div>

        <div class="hmoDivider"></div>
        <div class="showTrialBalance" style="">	

            <table class="tblShowReportOR">
                <tr>
                    <th class="head" style="width: 80px; text-align:center;">Account Code</th>
                    <th class="head" style="width: 200px;text-align: center;">Account Name</th>
                    <th class="head" style="width: 100px;text-align: center;">As of <?php echo $this->daterange ?></th>
                    <th class="head" style="width: 100px;text-align: center;">Debit</th>
                    <th class="head" style="width: 100px;text-align: center;">Credit</th>
                    <th class="head" style="width: 100px;text-align: center;">As of <?php echo $this->daterange2 ?></th>
                    <?php
                    if (isset($this->searchtype) && $this->searchtype == 'monthly') {
                        ?>
                        <th class="head" style="text-align:right;width: 90px;text-align: center;">For the month of <?php echo $this->daterange2 ?></th>
                    <?php } ?>
                </tr>
                <?php
//                            require_once 'public/report.class.php';
//                            $incomestatement = ReportClass::incomeStatement('');
                $tb = array();
                if ($this->data) {
                    $tb = $this->data;
                    $tb2 = (count($tb) == 2) ? $tb[1] : array();
                    $totalcurrentasof = $totaldebit = $totalcredit = 0;
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
                                echo ($prevasof != 0) ? $prevasof : '';
//                                            echo number_format($prevasof, 2)
                                ?></td>
                            <td style="text-align:right;padding-right:5px;"><?php
                                echo ($item->debit != 0) ? number_format($item->debit, 2) : '';
//                                                echo number_format($item->debit, 2);
                                ?></td>
                            <td style="text-align:right;padding-right:5px;"><?php
                                echo ($item->credit != 0) ? number_format($item->credit, 2) : '';
//                                              echo number_format($item->credit, 2);
                                ?></td>
                            <td style="text-align:right;padding-right:5px;"><?php
                                $currentasof = $prevasof + $item->debit - $item->credit;
                                echo number_format($currentasof, 2); //($currentasof >= 0) ? number_format($currentasof, 2) : '-';
                                ?></td>
                                <?php
                            if ($this->searchtype == 'monthly') {
                                ?>
                                <td style="text-align:right;padding-right:5px;"><?php
                    if ($item->code > '3002') {
                        echo ($currentasof != 0) ? number_format($currentasof, 2) : '';
//                                                    echo number_format($currentasof, 2);
                    } else {
                        echo ($item->balance != 0) ? number_format($item->balance, 2) : '';
//                                                    echo number_format($item->balance, 2);
                    }
//                                        echo ($item->balance != 0) ? number_format($item->balance, 2) : '-' 
                                ?></td>

                            <?php } ?>
                        </tr>
                        <?php
                        $totaldebit += $item->debit;
                        $totalcredit += $item->credit;
                        $totalcurrentasof += $currentasof;
                    }
                    ?>
                    <tr>
                        <td colspan="2" style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;">Total</td>
                        <td></td>
                        <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format($totaldebit, 2) ?></td>
                        <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format($totalcredit, 2) ?></td>
                        <td style="font-weight:bold;font-family:verdana; font-size:10px; text-align:right; padding-right:5px;"><?php echo number_format($totalcurrentasof, 2) ?></td>
                        <?php
//                                    if (isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly') {
                        ?>
                        <td></td>
                        <?php //}  ?>

                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
