<style>
    .monthlyExpensesCont{
        width:100%;
        margin:0;
        padding:0;
        font-family:Verdana;
        font-size:12px;
    }
    .monthlyExpensesHolder{
        /* width:980px; */
        /*  border:1px solid gray; */
        margin:auto;
        /* margin-left:200px */
    }
    .expenseDiv{
    }
    .tblExpense{
        margin-left:21px;
        margin-top:20px;
        font-family:Verdana;
        font-size:12px;
    }
    .tblShowReport{
        border-collapse:collapse;
        margin-top:30px;
        width:99%;
        font-family:Verdana;
        font-size:12px;
    }
    .tblShowReport tr td{
        border:solid 1px rgb(197, 196, 196);
        text-align:center;
    }
    .tblShowReport th{
        border:solid 1px rgb(197, 196, 196);
        font-size:14px;
        font-weight:bold;
        background:rgb(37, 181, 239);
        color:#fff;
        padding:3px;
        text-align:left;
    }
    .dateReport{
        width:173px;
    }
    .tblShowReport_div{
        margin-left:10px;
    }
    .fromReg{
        text-align: center;
        font-weight: bold;
        margin-top: 20px;
        font-size: 14px;
        font-family: arial;

    }
    .hmoDivider{
        width:100%;
        height:6px;
        border-radius:2px;
        background:gray;
        margin-top:10px;
    }
    .exportButton{
        /* width: 100px;
        height: 28px;
        color: white;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        background-color: rgba(135, 194, 15, 0.87);
        font-weight: bold;
        border: none;
        border-radius: 5px;
        box-shadow: 2px 2px 2px gray;
        margin-left: 5px;
        cursor: pointer; */
    }
    .monthlyGenerate{
        width: 100px;
        height: 28px;
        color: white;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        background-color: rgba(135, 194, 15, 0.87);
        font-weight: bold;
        border: none;
        border-radius: 5px;
        box-shadow: 2px 2px 2px gray;
        margin-left: 5px;
        cursor: pointer;
    }


    .DFs{
        margin-top: 10px;
        padding-left: 10px;
    }
    .FSGen{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        margin-left: 400px;
        /* float: left; */
        margin-top: -17px;
        cursor: pointer;
    }
    .ButInput{
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

    .tblExpenseOR2{
        /* margin-top:10px; */
        font-family:Verdana;
        font-size:12px;
    }
    .generateHmo{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        margin-left: 5px;
        cursor: pointer;
    }
    .exportHmo{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        margin-left: 5px;
        cursor: pointer;
    }
    .tblShowReport tr td{
        padding:5px;
    }
    .totalRec{
        background-color: rgb(37, 181, 239);
        color: #fff;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<?php
$info = new TblOrganizationInfo();
$org = new TblOrganization();

if (Session::getSession('meduser')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    Session::setSession('medinfoid', $info->id);
//        Session::setSession('orgid', $info->orgId);
//        print_r($info->emailAddress); exit;
}

$checkEnterPayment = $this->checkEnterPayment;


?>
<html>
    <head>
    </head>
    <body>
        <form>
            <div class="monthlyExpensesCont">
                <div class="monthlyExpensesHolder">
                    <div class="expenseDiv">
                        <div class="cr_title BSText" style="">
                            Collection Report
                        </div>
                        <div class="cr_button" style="margin-top: -28px;margin-left: 532px;">
                            <input type="button" value="" class="generateHmo printCA reportprint">
                            <input type="button" value="" class="exportHmo exportButton reportexport">
                        </div>
                        <div class="DFs">
                            <div style="padding:10px;">
                                <div class="outstanding_gen">
                                    <div class="fontreportnew">
                                        <div class="dateDiv"><b>Date:</b></div>
                                        <div class="dateDiv2" style="margin-top:10px;">From: 
                                            <input type="date" class="ButInput" name="startdate" 
                                                   value="<?= isset($_POST['startdate']) ? $_POST['startdate'] : date('Y-m-d') ?>">
                                            To: 
                                            <input type="date" class="ButInput" name="enddate" 
                                                   value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('Y-m-d') ?>"></div>

                                        <input type="submit" class="FSGen reportgenerate" value="">
                                    </div>
                                </div>
                                <table class="tblExpenseOR2 fontreportnew">
                                    <tr>
                                        <td style="font-weight:normal;padding-left: 20px;">
                                            MOP:
                                        </td>
                                        <td>
                                        </td>
                                        <td>

                                            <select class="payment_collected_mop" style="width: 102px;height: 23px;">
												
												<?php
												if($checkEnterPayment){
												?>
													<option>
														All
													</option>
                                                <?php
												$myMop = '';
                                                foreach ($checkEnterPayment as $each) {
													if($each->mop != $myMop){
//                                                    ?>
                                                    <option>
                                                        <?= $each->mop ?>
                                                    </option>
                                                    <?php
													}
													$myMop = $each->mop;
                                                }
												}
                                                ?>
                                            </select>

                                        </td>
                                        <td style="font-weight:normal">
                                            <span class="payment_collected_hmoName2 hidden">HMO Partner:</span>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <select name="hmoname" class="payment_collected_hmoName hidden" style="width: 145px;height: 23px;">
                                                
                                                <?php
												if($checkEnterPayment){
												
												?>
													<option>
														All
													</option>
												<?php
												$hmo = $this->getHmoName_enterpayment;
                                                foreach ($checkEnterPayment as $each) {
														if($each->hmoName != ''){
                                                    ?>
                                                    <option value="<?= $each->hmoName ?>">
                                                        <?= $each->hmoName ?>
                                                    </option>
                                                    <?php
													}
                                                }
												}
                                                ?>
                                            </select>
                                        </td>
                                </table>


                            </div>
                        </div>


                        <div class="hmoDivider"></div>	
						<?php
						if($checkEnterPayment){
						?>
                        <div class="tblShowReport_div hidden">
                            <div class="showReportByHMO"  style="overflow:scroll;overflow-x:hidden;height:590px;">
                                <div class="fromReg">
                                    <div style="font-size:17px;">
                                        <?= $org->orgName ?>
                                    </div>
                                    <div>
                                        <?= $info->address ?>
                                    </div>
                                    <div>
                                        VAT Reg. TIN: <?= $info->tinNum ?>
                                    </div>
                                    <br/>
                                    <div>
                                        <i>Collected Report</i>
                                    </div>

                                    <div>
                                        <?php echo (isset($_POST['startdate'])) ? date('F d, Y', strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
                                        <?php echo (isset($_POST['enddate'])) ? date('F d, Y', strtotime($_POST['enddate'])) : date('F d,Y') ?>
                                    </div>
                                </div>

                                <table class="tblShowReport">
                                    <tr>
                                        <th>Payment Date</th>
                                        <th>Invoice No.</th>
                                        <th>Collected No.</th>
                                        <th>HMO Partner</th>
                                        <th>Patient Name</th>
                                        <th>MOP</th>
                                        <th>Ref. No.</th>
                                        <th>Status</th>
                                        <th style="text-align:right;">Amount</th>
                                    </tr>
                                    <?php
                                    $report = $this->getEnterPayment;
                                    $total = 0;
                                    if (isset($report) && !empty($report)) {
                                        foreach ($report as $each) {
                                            $total = ($each->status == 'reversed' ? $total - Controller::removeComma($each->amount) : $total + Controller::removeComma($each->amount));
                                            // $total = ($total + Controller::removeComma($each->amount)) ;
                                            ?>
                                            <tr class="listsRec">
                                                    <!--<td style="text-align:left;"><?= ($each->status == 'reversed' ? $each->date_reversed : $each->date_issued) ?></td>-->
                                                <td style="text-align:left;"><?= ($each->trans_date) ?></td>
                                                <td style="text-align:left;"><?= $each->invoiceNumber ?></td>
                                                <td style="text-align:left;"><?= $each->col_num ?></td>
                                                <td style="text-align:left;"><?= $each->hmoName ?></td>
                                                <td style="text-align:left;"><?= $each->clientName ?></td>
                                                <td style="text-align:left;"><?= $each->mop ?></td>
                                                <td style="text-align:left;"><?= $each->refNum ?></td>
                                                <td style="text-align:left;" title="<?= ($each->status == 'reversed' ? $each->date_reversed : "") ?>"><?= $each->status ?></td>
                                                <td style="text-align:right;"><?= ($each->status == 'reversed' ? '(' . number_format((float) $each->amount, 2) . ')' : number_format((float) $each->amount, 2)) ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <tr class="totalRec">
                                            <td style="text-align:right;padding-right:25px;" colspan="8"><b>Total</b></td>
                                            <td style="text-align:right;font-weight:bold;"><?= number_format((float) $total, 2) ?></b></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
						<?php
						
						}else{
						?>
							<div style="text-align:center;">
								YOU HAVE NO COLLECTION REPORT
							</div>
						<?php
						}
						?>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

<script>
    $(function() {
	
		<?php
			if(!$checkEnterPayment){
		?>
			$('.cr_button input').prop('disabled',true);
			$('.DFs input').prop('disabled',true);
			$('.DFs select').prop('disabled',true);
		<?php
			}
		?>
	
        value = '';
        $('.printCA').click(function() {
            window.print();
        });

        $('.payment_collected_hmoName').change(function() {
            var value = $('.payment_collected_hmoName').val();
            total = 0; 
            $('.showReportByHMO .listsRec').each(function() {
                if (typeof $(this).find('td:nth-child(4)').html() != 'undefined') {
                    $(this).addClass('hidden');
                    $(this).hide();
                    amount = getInt($(this).find('td:nth-child(9)').html());
                    
                    if ($(this).find('td:nth-child(4)').html() == value) {
                        $(this).removeClass('hidden');
                        $(this).show();
                        total += amount;
                    } else if (value == 'All') {
                        $(this).removeClass('hidden');
                        $(this).show();
                        total += amount;
                    }
                }
                $('.totalRec').find('td:nth-child(2)').html(roundFloat(total));
            });
        });

        $('.payment_collected_mop').change(function() {
            total = 0;
            value = $(this).val();
            if($(this).val() == 'HMO'){
                $('.payment_collected_hmoName').removeClass('hidden');
                $('.payment_collected_hmoName2').removeClass('hidden');
            }else{
                $('.payment_collected_hmoName').addClass('hidden');
                $('.payment_collected_hmoName2').addClass('hidden');
            }
                
            
            $('.showReportByHMO .listsRec').each(function() {
                if (typeof $(this).find('td:nth-child(6)').html() != 'undefined') {
                    $(this).addClass('hidden');
                    $(this).hide();
                    amount = getInt($(this).find('td:nth-child(9)').html());
                    
                    if ($(this).find('td:nth-child(6)').html() == value) {
                        $(this).removeClass('hidden');
                        $(this).show();
                        total += amount;
                    } else if (value == 'All') {
                        $(this).removeClass('hidden');
                        $(this).show();
                        total += amount;
                    }
                } 
            });
//            alert(total);
                $('.totalRec').find('td:nth-child(2)').html(roundFloat(total));
        });

        $('form').submit(function() {

            $.post(URL + 'report/new_payment_collected', {startdate: $('input[name="startdate"]').val(), enddate: $('input[name="enddate"]').val()})
                    .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');
                        $('.tblShowReport_div').removeClass('hidden');

                    }).fail(function() {
                alert('Connection Error!');
            });

            return false;

        });


        $('.exportButton').click(function() {
            location = URL + 'report/export_PaymentCollected?from=' + $('input[name="startdate"]').val() + '&to=' + $('input[name="enddate"]').val() + '&hmo=' + $('.payment_collected_hmoName').val();
        });

        function roundFloat(intVal) {
            intVal = parseFloat(intVal);
            intVal = Number((intVal).toFixed(2));

            array = intVal.toString().split('.');

            if (array[1]) {
                if (array[1].length == 1) {
                    array[1] += '0';
                }
            } else {
                array[1] = '00';
            }

            intVal = array.join('.');

            hasComma = commafy(intVal);

            if (hasComma[0] == '-') {
                hasComma = hasComma.toString().replace(/-/g, '');
                hasComma = '(' + hasComma + ')';
            }
            return hasComma;
        }

        function commafy(num) {
            var n = num.toString().split(".");
            n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return n.join(".");
        }

        function getInt(intVal) {
            if (intVal != '') {
                intVal = intVal.toString().replace(/,/g, '');
            }
            if (intVal[0] == '(') {
                intVal = intVal.toString().replace(/\(/g, '');
                intVal = intVal.toString().replace(/\)/g, '');
                intVal *= -1;
            }
            intVal = parseFloat(intVal);
            if (isNaN(intVal)) {
                return 0;
            }
            return intVal;
        }
    });
</script>