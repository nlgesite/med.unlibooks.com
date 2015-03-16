<style>
    .clientlistmainformbalance{
        width:100%;
        margin:auto;
    }
    .clientlistformbalance{
        width:764px;
    }
    .buttonFSbalance{
        /* margin-left: 532px; */
        margin-left: 644px;
        margin-top: -17px;
    }


    div.scrollbalance{
          height: 605px;
		  overflow: scroll;
		  margin-left: 8px;
		  width: 737px;
		  /* margin-top: 20px; */
		  box-shadow: 1px 1px 6px rgb(148, 148, 148);
		  padding-top: 20px;
    }

    .balanceSheetform{
        border:solid 1px #c8c8c8;
        padding:5px;
        font-size: 12px;
        font-family: arial;
        padding-bottom:50px;
        padding-top:30px;
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
        width:95%;
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
    .balanceTable input[type="text"]{
        text-align:right;
        width:150px;;
        padding-right:13px;
        border: none;
    }
    .doubleborder td{
        border-bottom-style:double;
    }
    .boldstyle, .boldstyle input[type="text"]{
        font-weight:bold;
    }
    .seebelow{
        text-align:center;
        font-weight:bold;
        font-family:calibri;
        font-size:12px;
        margin-top:70px;
        font-style:italic;
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


</style>
<script>

    $('form').submit(function() {
        $.post(URL + 'report/new_balance_sheet', {date: $('input[name="date"]').val(), year: $('input[name="year"]').val(), searchtype: $('input[name="searchtype"]:checked').val()})
                .done(function(returnData) {
                    $('.newformcl').html(returnData);
                    $('.newformcl').removeClass('hidden');
                    $('.balanceSheetform').removeClass('hidden');

                    /* $('.close').click(function() {
                     $('.popBack').addClass('hidden');
                     $('.popBack').html('');
                     }); */
                }).fail(function() {
            alert('Connection Error!');
        });

        return false;

    });

    $('.exportBalanceSheet').click(function() {
        location = URL + 'report/export_BalanceSheet?date=' + $('input[name="date"]').val() + '&year=' + $('input[name="year"]').val() + '&searchtype=' + $('input[name="searchtype"]:checked').val();
    });

    $('.printBS').click(function() {
        window.print();
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
	
	$( "#datepicker" ).datepicker({ defaultDate: new Date() });

</script>

<?php
$info = new TblOrganizationInfo();
$org = new TblOrganization();

//$data = (object) array('incomeTaxPayable' => '', 'propertyAndEquipment' => '', 'proprietorsCapital' => '', 'netOperatingIncomeLoss' => '', 'personalDrawings' => '', 'cash' => '', 'otherAssets' => '', 'outputVat' => '', 'receivable' => '', 'date' => '');
if (Session::getSession('meduser')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    Session::setSession('medinfoid', $info->id);

    if (isset($_POST['date']) || isset($_POST['year'])) { 
//        require_once ('public/report.class.php');
//        $report = new ReportClass();
        $data = ReportClass::balanceSheet(Session::getSession('medorgid'), (isset($_POST['searchtype']) && $_POST['searchtype']=='monthly')? $_POST['date']:$_POST['year'], $_POST['searchtype']);
//        $data2 = ReportClass::incomeStatement();
    }
}
//	print_r($data);
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<div class="clientlistmainformbalance">
    <form method='post' action='<?php echo URL ?>report/new_clientlist' id='form' class="clientlistformbalance">
        <div class="BSText">Balance Sheet</div>
        <div class="">
            <div class="buttonFSbalance">
                <input type="button" class="FSPrintbalance printBS" value="">
                <input type="button" class="FSPrintbalances exportBalanceSheet" value="">
            </div>
        </div>
        
        <div class="fromtodateIncome DFstask">
            <div class="incomestate">
                <table>
                    <td class=""><input type="radio" name="searchtype" value="monthly" class="monthly"
                        <?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly' ? ' checked="checked" ' : '' ?>
                                        required > Monthly</td>
                    <td class=""><input type="radio" name="searchtype" value="annual" class="annual" style="margin-left:20px;"
                        <?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual' ? ' checked="checked" ' : '' ?>
                                        required > Annual</td>
                </table>
                <table class="fromtodatetableincome">
                    <tr>
                        <td class="hidden monthTd reportfonts">Month: <input name="date" id="startDate" class="monthpicker reportfonts" type="" style="width:124px;color:#000;font-size: 12px;font-weight: normal;padding:2px;" value="<?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly' ? $_POST['date'] : date('F Y') ?>" /></td>
                        <td class="hidden yearTd reportfonts">
                            <div style="">Year: <input class="todaydate"  id="datepicker" type="" name="year" class="monthname"value="<?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual' ? $_POST['year'] : date('Y') ?>" /></div>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div style="float:right;margin-right:377px;"><input type="submit" value="" class="searchsalesincome hidden"></div>
        </div>

        <div class="hmoDivider"></div>	
       
          <div class="balanceSheetform hidden">
			 <div class="scrollbalance">	
                <div class="balanceTitle">
                    <div><?= $org->orgName ?></div>
                    <div>STATEMENT OF FINANCIAL POSITION</div>
                    <div>As of <?php echo $data->date ?></div>
                    <div class="amountphp">(Amounts in Philippine Pesos)</div>
                </div>
                <div>
                    <table class="balanceTable">
                        <tr>
                            <th width="50%"></th>
                            <th width="25%"></th>
                        </tr>
                        <tr class="titleTableassets">
                            <td></td>
                            <td><?php echo $data->date ?></td>
                        </tr>
                        <tr>
                            <td class="titleTableassets">ASSETS</td>
                            <td></td>
                        </tr>
                        <tr class="currentassetstr">
                            <td class="parentchildbalance">CURRENT ASSETS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Cash and cash equivalents </td>
                            <td>P<input type="text" class="isNumeric" value="<?php echo number_format((float) $data->CCE, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Receivables</td>
                            <td>P<input type="text" class="isNumeric" value="<?php echo number_format((float) $data->AR, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Other Assets</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->OCA, 2) ?>" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                            <td>&nbsp &nbsp &nbsp &nbsp Total Current Assets</td>
                            <td>P<input type="text"  value="<?php echo number_format((float) $data->totalcurrentasset, 2) ?>" readonly></td>
                        </tr>

                        <tr>
                            <td class="parentchildbalance ">NONCURRENT ASSETS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Long-term Investments</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->LTI, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Property and Equipment, net</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->PPE, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Long-Term Receivables</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->LTR, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Intangible Assets</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->IA, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Other Assets</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->OA, 2) ?>" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                            <td>&nbsp &nbsp &nbsp &nbsp Total Non Current Assets</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->totalnoncurrentasset, 2) ?>" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="doubleborder boldstyle">
                            <td class="parentchildbalance">TOTAL ASSETS</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->totalasset, 2) ?>" readonly style="padding-right: 5px;width:142px;"></td>
                        </tr>
                        <tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr>
                        <tr>
                            <td class="titleTableassets">LIABILITIES AND CAPITAL</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="parentchildbalance">CURRENT LIABILITIES</td>

                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Accounts Payable</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->AP, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Accrued expenses</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->AE, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Income Tax Payable</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->ITP, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Other current liabilities</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->OCL, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                            <td>&nbsp &nbsp &nbsp &nbsp Total Current Liabilities</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->totalcurrentliability, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="parentchildbalance">NONCURRENT LIABILITIES</td>

                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Long-term liabilities</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->LTB, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Deferred credits</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->DC, 2) ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Other liabilities</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->OL, 2) ?>" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="tdborderline" style="border-bottom:solid 1px #000;">
                            <td>&nbsp &nbsp &nbsp &nbsp Total Non Current Liabilities</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->totalnoncurrentliability, 2) ?>" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="boldstyle">
                            <td class="parentchildbalance">TOTAL LIABILITIES</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->totalliability, 2) ?>" style="padding-right: 13px;" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td class="parentchildbalance">CAPITAL</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Capital</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->capital, 2) ?>" style="padding-right: 13px;" readonly ></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Net Income / Loss</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->net, 2) ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Drawings</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->Drawing, 2) ?>" readonly></td>
                        </tr>
                        <tr class="tdborderline boldstyle" style="border-bottom:solid 1px #000;">
                            <td>TOTAL CAPITAL</td>
                            <td>P<input type="text" value="<?php echo number_format((float) $data->totalcapital, 2) ?>" readonly></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="boldstyle doubleborder">
                            <td class="parentchildbalance">TOTAL LIABILITIES AND CAPITAL</td>
                            <td>P<input type="text" value="<?php echo number_format((float) bcadd(round($data->totalliability,2) , round($data->totalcapital,2),2), 2) ?>" readonly style="padding-right: 5px;width:142px"></td>
                        </tr>
                    </table>
                    <div class="seebelow"></div>
                </div>
            </div>
        </div>
    </form>
</div>