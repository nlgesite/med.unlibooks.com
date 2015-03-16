<style>
    .balanceSheetform{
        border:solid 1px #c8c8c8;
        padding:5px;
        font-size: 12px;
        font-family: arial;
    }

    .balanceTitle{
        text-align:center;
        font-size: 14px;
        font-family: arial;
        font-weight:bold;
    }
    .amountphp{
        font-style: italic;
    }

    .balanceTable{
        width:500px;
        border-collapse:collapse;
        margin-left:24px;
        margin-top: 56px;
    }
    .titleTableassets{
        text-align:center;
        font-weight:bold;
    }
    .parentchildbalance{
        font-weight:bold;
    }
    .currentassetstr{
        margin-top:10px;
    }
    .balanceTable td{
        font-size: 12px;
        font-family: arial;
        height:25px;
    }
    .doubleborder td{
        border-bottom-style:double;
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

    .ui-datepicker-calendar {
        display: none;
    }
    .hmoDivider{
        width: 100%;
        height: 2px;
        border-radius: 2px;
        background: rgb(37, 181, 239);
        margin-top: 10px;
    }
    .BSText{
        font-size: 29px;
        font-family: agency fb2;
        font-weight: bold;
        padding-left: 20px;
        padding-top: 20px;
        color: rgb(37, 181, 239);
    }

    .tdborderline td{
        border-top:solid 1px #000;
    }

    .boldstyle{
        font-weight: bold;
    }
</style>
<div class="clientlistmainformbalance">
    <div class="hmoDivider"></div>	
    <div class="scrollbalance">	
        <div class="balanceSheetform hidden">
            <div class="balanceTitle">
                <div><?= $this->org->orgName ?></div><br />
                <div>STATEMENT OF FINANCIAL POSITION</div><br />
                <div>As of <?php echo $this->data->date ?></div><br />
                <div class="amountphp">(Amounts in Philippine Pesos)</div>
            </div>
            <div>
                <table class="balanceTable">
                    <tr>
                        <th width="50%"></th>
                        <th width="1%"></th>
                        <th width="25%"></th>
                    </tr>
                    <tr class="titleTableassets">
                        <td></td>
                        <td colspan="2"><?php echo $this->data->date ?></td>
                    </tr>
                    <tr>
                        <td class="titleTableassets">ASSETS</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr class="currentassetstr">
                        <td class="parentchildbalance">CURRENT ASSETS</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Cash and cash equivalents </td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->CCE, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Receivables</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->AR, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Other Assets</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->OCA, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                        <td>&nbsp &nbsp &nbsp &nbsp Total Current Assets</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->totalcurrentasset, 2) ?></td>
                    </tr>

                    <tr>
                        <td class="parentchildbalance ">NONCURRENT ASSETS</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Long-term Investments</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->LTI, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Property and Equipment, net</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->PPE, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Long-Term Receivables</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->LTR, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Intangible Assets</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->IA, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Other Assets</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->OA, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                        <td>&nbsp &nbsp &nbsp &nbsp Total Non Current Assets</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->totalnoncurrentasset, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="doubleborder">
                        <td class="parentchildbalance">TOTAL ASSETS</td>
                        <td class="boldstyle">P</td>
                        <td class="boldstyle"><?php echo number_format((float) $this->data->totalasset, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr>
                    <tr>
                        <td class="titleTableassets">LIABILITIES AND CAPITAL</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="parentchildbalance">CURRENT LIABILITIES</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Accounts Payable</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->AP, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Accrued expenses</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->AE, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Income Tax Payable</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->ITP, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Other current liabilities</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->OCL, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                        <td>&nbsp &nbsp &nbsp &nbsp Total Current Liabilities</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->totalcurrentliability, 2) ?></td>
                    </tr>
                    <tr>
                        <td class="parentchildbalance">NONCURRENT LIABILITIES</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Long-term liabilities</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->LTB, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Deferred credits</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->DC, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Other liabilities</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->OL, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                        <td>&nbsp &nbsp &nbsp &nbsp Total Non Current Liabilities</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->totalnoncurrentliability, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="boldstyle">
                        <td class="parentchildbalance">TOTAL LIABILITIES</td>
                        <td class="boldstyle">P</td>
                        <td class="boldstyle"><?php echo number_format((float) $this->data->totalliability, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr>
                        <td class="parentchildbalance">CAPITAL</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Capital</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->capital, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Net Income / Loss</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->net, 2) ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp &nbsp Drawings</td>
                        <td>P</td>
                        <td><?php echo number_format((float) $this->data->Drawing, 2) ?></td>
                    </tr>
                    <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                        <td class="boldstyle">TOTAL CAPITAL</td>
                        <td class="boldstyle">P</td>
                        <td class="boldstyle"><?php echo number_format((float) $this->data->totalcapital, 2) ?></td>
                    </tr>
                    <tr><td colspan="2"></td></tr>
                    <tr class="doubleborder">
                        <td class="parentchildbalance">TOTAL LIABILITIES AND CAPITAL</td>
                        <td class="boldstyle">P</td>
                        <td class="boldstyle"><?php echo number_format((float) $this->data->totalliability + $this->data->totalcapital, 2) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>