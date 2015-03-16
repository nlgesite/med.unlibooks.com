<style>
    .balanceSheetform{
        border:solid 1px #c8c8c8;
        padding:5px;
        font-size: 12px;
        font-family: Verdana;
        padding-bottom:50px;
    }

    .balanceTitle{
        text-align:center;
        font-size: 14px;
        font-family: Verdana;
        font-weight:bold;
    }
    .amountphp{
        font-style: italic;
    }

    .balanceTable{
        border-collapse:collapse;
        width: 500px;
    }
    .titleTableassets{
        text-align:center;
        font-weight:bold;
    }
    .parentchildbalance{
        font-weight:bold;
    }
    .balanceTable td{
        font-size: 12px;
        font-family: Verdana;
    }
    .tca{
        padding-top: 20px;
        padding-left: 33px
    }	
    .tcainput{
        padding-top: 20px;
    }
    .doubleborder{
        border:none;
        border-bottom-style:double;
    }
    .boldstyle{
        font-weight:bold;
    }
    .newstyle{
        border-bottom:solid 1px black;
    }
    .whitetext{
        padding-left:0px;
		font-weight:bold;
    }
    .fromtodateIncome{

        font-family:Verdana;
        font-size:12px;
    }
    .fromtodatetableincome{
        font-family:Verdana;
        font-size:12px;
        margin-top:10px;
        margin-left:6px;
    }

</style>
<div style="text-align:center !important; font-size: 14px; font-family: Verdana; font-weight:bold; width:50%;">
    <div>
        <?= $this->org->orgName ?>
    </div><br />
    <div>
        INCOME STATEMENT
    </div><br />
    <div>
        <?php echo $this->data->date ?>
    </div><br />
    <div>
        <i>(Amounts in Philippine Pesos)</i>
    </div><br />
</div>
<div>
    <table class="balanceTable">
        <tr>
            <th width="18%"></th>
            <th width="1%"></th>
            <th width="5%"></th>
        </tr>
        <tr>
            <td class="whitetext" colspan="2"><span class="inputval3 boldstyle" style="margin-left: 9px;" ><?php echo $this->data->date ?></span></td>

        </tr>

        <tr class="currentassetstr">
            <td class="parentchildbalance">REVENUES</td>
            <td></td>
        </tr>
        <tr>
            <td>&nbsp &nbsp Professional Service Income</td>
            <td>P</td>
            <td style="font-weight:bold;"><?php echo number_format((float) $this->data->psi, 2) ?></td>        
        </tr>
        <tr><td colspan="2"></td></tr>
        <tr class="currentassetstr">
            <td class="parentchildbalance">COST OF SERVICES</td>
            <td>P</td>
            <td style="font-weight:bold;"><?php echo number_format((float) $this->data->costofservice, 2) ?></td>        
        </tr>
        <tr>
        <tr><td colspan="2"></td></tr>
        <tr>
            <td class="parentchildbalance">NET REVENUE</td>
            <td>P</td>
            <td style="font-weight:bold;"><?php echo number_format((float) $this->data->psi - $this->data->costofservice, 2) //$totalincome = $data->income + $data->otherincome; echo number_format((float)$totalincome, 2)    ?></td>
        </tr>
        <tr><td colspan="2"></td></tr>
        <?php
        if ($this->data->otherincome > 0) {
            ?>
            <tr class="currentassetstr">
                <td>Other Income</td>
                <td>P</td>
                <td style="font-weight:bold;"><?php echo number_format((float) $this->data->otherincome, 2) ?></td>
            </tr>
        <?php } ?>
        <tr><td colspan="2"></td></tr>
        <tr>
            <td class="parentchildbalance">OPERATING PROFIT</td>
            <td>P</td>
            <td style="font-weight:bold;"><?php echo number_format((float) $this->data->operatingprofit, 2) //$totalincome = $data->income + $data->otherincome; echo number_format((float)$totalincome, 2)    ?></td>
        </tr>
        <tr><td colspan="2"></td></tr>
        <tr class="currentassetstr">
            <td class="parentchildbalance">OPERATING EXPENSES</td>
            <td class="whitetext"></td>
        </tr>
        <tr>
            <td>&nbsp &nbsp General and Administrative Expenses</td>
            <td>P</td>
            <td class="whitetext"><?php echo number_format((float) $this->data->expense, 2) ?></td>
        </tr>
        <tr><td colspan="2"></td></tr>
        <tr class="currentassetstr">
            <td class="parentchildbalance">NET INCOME (LOSS)</td>
            <td>P</td>
            <td class="whitetext"><?php echo number_format((float) $this->data->net, 2) ?></td>

        </tr>
    </table>
</div>