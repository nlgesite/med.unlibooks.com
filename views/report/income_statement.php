<style>
    .clientlistmainformbalance{
        width:100%;
        margin:auto;
    }
    .clientlistformbalance{
        /* background-color: white;
        width: 742px;
        margin-left: 370px;
        margin-top: 423px; */
        width:764px;
    }
    .buttonFSbalance{
        /* margin-left: 532px; */
        margin-left: 644px;
        margin-top: -17px;
    }

    div.scrollbalance{
        height: 574px;
		  overflow: scroll;
		  overflow-x: hidden;
		  margin-left: 10px;
		  width: 736px;
		  margin-top: 20px;
		  box-shadow: 1px 1px 6px rgb(148, 148, 148);
		padding-top:15px;
    }

    .balanceSheetform{
        /* border:solid 1px #c8c8c8; */
        padding:5px;
        font-size: 12px;
        font-family: Verdana;
        padding-bottom:6px;
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
        font-family: Verdana;
        height:25px;
    }
/*    .titleposition{
        padding-top: 22px;
    }*/
    .tca{
        padding-top: 20px;
        padding-left: 33px
    }	
    .tcainput{
        padding-top: 20px;
    }
    .balanceTable input[type="text"]{
        text-align:right;
        width:150px;;
        padding-right:13px;
    }
    .inputval{
        border:none;
    }
    .inputval2{
        border:none;
        border-bottom:solid 1px black;
    }
    .inputval3{
        border:none;
        border-bottom:solid 2px black;
    }
    .doubleborder{
        border:none;
        border-bottom-style:double;
    }
    .boldstyle{
        font-weight:bold;
    }
    .see{
        font-style: italic;
        font-weight: bold;
        font-family: Verdana;
        font-size: 12px;
        text-align: center;
        margin-top: 40px;
    }
    .seebelow{
        text-align:center;
        font-weight:bold;
        font-family:calibri;
        font-size:12px;
        margin-top:70px;
        font-style:italic;
    }
    .newstyle{
        border-bottom:solid 1px black;
    }
    .whitetext{
        padding-left:0px;
		font-weight:bold;
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
    .fromtodatetableincome input[type="text"]{
        width:150px;
        height:29px;
        font-family:Verdana;
        font-size:12px;
        margin-left:5px;
        padding:5px;
    }
    .searchsalesincome{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        /* margin-left: 634px; */
        cursor: pointer;
        margin-top:-45px;
    }
    .annual{

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
    .DFstask{
      /*   margin-top: 15px; */
        padding-left: 20px;
        font-size: 12px;
        font-family: verdana;
        border-radius: 10px;
        /* padding-bottom:15px; */
    }
    .incomestate{

    }
    /* 	.date-picker{
                    width: 133px;
                    height: 28px;
                    font-size: 12px;
                    font-family: verdana;
                    padding-left: 5px;
                    border-radius: 5px;
                    box-shadow: none;
                    border: 1px solid rgba(128, 128, 128, 0.58);
                    margin-left: 5px;
                    margin-right: 5px;
            } */
    .fromtodatetableincome input [type="date"]{
        width: 133px;
        height: 28px;
        font-size: 12px;
        font-family: verdana;
        padding-left: 5px;
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid rgba(128, 128, 128, 0.58);
        margin-left: 5px;
        margin-right: 5px;
    }



</style>
<script>

    $('form').submit(function() {
        $.post(URL + 'report/new_income_statement', {date: $('input[name="date"]').val(), year: $('input[name="year"]').val(), searchtype: $('input[name="searchtype"]:checked').val()})
                .done(function(returnData) {
                    $('.newformcl').html(returnData);
                    $('.newformcl').removeClass('hidden');
                    $(".balanceSheetform").removeClass("hidden");

                    /* $('.close').click(function() {
                     $('.popBack').addClass('hidden');
                     $('.popBack').html('');
                     }); */
                }).fail(function() {
            alert('Connection Error!');
        });

        return false;

    });

    $('.exportIncomeStatement').click(function() {
        location = URL + 'report/export_incomeStatement?date=' + $('input[name="date"]').val() + '&year=' + $('input[name="year"]').val() + '&searchtype=' + $('input[name="searchtype"]:checked').val();
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



</script>
<?php
$info = new TblOrganizationInfo();
$org = new TblOrganization();

//$data = (object) array('income' => '', 'expense' => '', 'date' => '');

if (Session::getSession('meduser')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    Session::setSession('medinfoid', $info->id);

    if (isset($_POST['date'])) {
//        require_once ('public/report.class.php');
//        $report = new ReportClass();
        $data = ReportClass::incomeStatement(Session::getSession('medorgid'), (isset($_POST['searchtype']) && $_POST['searchtype']=='monthly')? $_POST['date']:$_POST['year'], $_POST['searchtype']);
    }
}
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<div class="clientlistmainformbalance">
    <form method='post'  id='form' class="clientlistformbalance">

        <div class="">
            <div class="BSText">Income Statement</div>
            <div class="buttonFSbalance">
                <input type="button" class="FSPrintbalance printFS" value="">
                <input type="button" class="FSPrintbalances exportIncomeStatement" value="">
            </div>

        </div>
        <div class="fromtodateIncome DFstask">
            <div class="incomestate">
                <table>
                    <td><input type="radio" name="searchtype" value="monthly" class="monthly" <?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly' ? ' checked="checked" ' : '' ?> required > Monthly</td>
                    <td><input type="radio" name="searchtype" value="annual" class="annual" style="margin-left:20px;" <?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual' ? ' checked="checked" ' : '' ?> required > Annual</td>
                </table>
                <table class="fromtodatetableincome">
                    <tr>
                        <td class="hidden monthTd reportfonts">Month: <input name="date" id="startDate" class="monthpicker" type="" style="width:124px;" value="<?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly' ? $_POST['date'] : date('F Y') ?>" /></td>
                        <td class="hidden yearTd reportfonts">
                            <div style="margin-left:10px;">Year: <input class="todaydate"  id="datepicker" type=""   name="year" class="monthname"value="<?= isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual' ? $_POST['year'] : date('Y') ?>" /></div>
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
                    <div>INCOME STATEMENT</div>
					 <?php
						
                        if (isset($_POST['searchtype']) && $_POST['searchtype'] == 'annual') {
                     ?>
						<div>For the year ended <?php echo $data->date ?></div>
					<?php } ?>
					 <?php
						
                        if (isset($_POST['searchtype']) && $_POST['searchtype'] == 'monthly') {
                     ?>
						<div>For the month ended <?php echo $data->date ?></div>
					<?php } ?>
                    <div class="amountphp">(Amounts in Philippine Pesos)</div>
                </div>
                <div>
                    <table class="balanceTable">
                        <tr>
                            <th width="50%"></th>
                            <th width="25%"></th>
                            <th width="25%"></th>
                        </tr>
                        <tr>
                            <td class="titleTableassets"></td>
                            <td class="whitetext"><input type="text" class="inputval3 boldstyle" style="margin-left: 9px;" value="<?php echo $data->date ?>" style="text-align:center" readonly></td>

                        </tr>

                        <tr class="currentassetstr">
                            <td class="parentchildbalance">REVENUES</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp Professional Service Income</td>
                            <td style="font-weight:bold;">P<input type="text" class="inputval isNumeric" value="<?php echo number_format((float) $data->psi, 2) ?>" readonly style="padding-right: 13px;"></td>        
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="currentassetstr">
                            <td class="parentchildbalance">COST OF SERVICES</td>
                            <td style="font-weight:bold;">P<input type="text" class="inputval isNumeric" value="<?php echo number_format((float) $data->costofservice, 2) ?>" readonly style="padding-right: 13px;"></td>        
                        </tr>
                        <tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td class="parentchildbalance">NET REVENUE</td>
                            <td style="font-weight:bold;">P<input type="text" style=" border-top: solid 1px #000" class="inputval boldstyle isNumeric" value="<?php echo number_format((float)$data->psi - $data->saledisc - $data->costofservice, 2) //$totalincome = $data->income + $data->otherincome; echo number_format((float)$totalincome, 2)   ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <?php
                        if ($data->otherincome > 0) {
                            ?>
                        <tr class="currentassetstr">
                                <td>Other Income</td>
                                <td style="font-weight:bold;">P<input type="text" class="inputval isNumeric" value="<?php echo number_format((float) $data->otherincome, 2) ?>" readonly style="padding-right: 13px;"></td>
                            </tr>
                        <?php } ?>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td class="parentchildbalance">OPERATING PROFIT</td>
                            <td style="font-weight:bold;">P<input type="text" style=" border-top: solid 1px #000;" class="inputval boldstyle isNumeric" value="<?php  echo number_format((float) $data->operatingprofit, 2) //$totalincome = $data->income + $data->otherincome; echo number_format((float)$totalincome, 2)   ?>" readonly style="padding-right: 13px;"></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="currentassetstr">
                            <td class="parentchildbalance">OPERATING EXPENSES</td>
                            <td class="whitetext"></td>
                        </tr>
                        <tr>
                            <td>&nbsp &nbsp General and Administrative Expenses</td>
                            <td class="whitetext">P<input type="text" class="inputval boldstyle newstyle isNumeric" value="<?php echo number_format((float) $data->expense, 2) ?>" readonly style="padding-top:0px;"></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr class="currentassetstr">
                            <td class="parentchildbalance">NET INCOME (LOSS)</td>
                            <td class="whitetext">P<input  type="text" class="inputval isNumeric boldstyle" style="border-bottom-style: double;" value="<?php echo number_format((float) $data->net, 2)
                                ?>" readonly ></td>

                        </tr>
<!--                        <tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr>
                        <tr class="currentassetstr">
                            <td class="parentchildbalance">PROVISION FOR INCOME TAX</td>
                            <td class="whitetext">
                                <input type="text" class="inputval3 boldstyle numeric" value="<?php
                                       //$provincome = $net * 0.3;
                                       echo number_format((float) $data->provincome, 2)
                                       ?>" readonly></td>

                        </tr>-->
<!--                        <tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr>
                        <tr class="currentassetstr">
                            <td class="parentchildbalance">NET INCOME (LOSS) AFTER INCOME TAX</td>
                            <td class="" style="font-weight:bold;">P<input type="text" class="doubleborder boldstyle isNumeric" value="<?php echo number_format((float) $data->net - $data->provincome, 2) ?>" readonly style="padding-right: 13px;"></td>

                        </tr>-->


                    </table>
                    <div class="seebelow"></div>
                </div>
            </div>
        </div>


    </form>
</div>