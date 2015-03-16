<?php
$salesview = TblInvoiceLinesMySqlExtDAO::checktaskreport(Session::getSession('medorgid'));
?>

<style>
    .mainformitemsum{
        padding-left:0px;
    }
    .sbis{

    }
    .parameteritem{
        padding-top:15px;
        margin-left:20px;
    }	
    div.scroll {
        height: 464px;
        overflow: scroll;
        margin-left: 4px;
        width: 756px;
        margin-top: 20px;

    }
    .fromtodate{
        margin-top:15px;
        margin-left:60px;
    }
    .fromtodatetable{
        margin-top:5px;
        font-size: 12px;
        font-family: verdana;
        font-weight: bold;
        margin-top:20px;
        margin-left:0px;
    }
    .fromtodatetable input[type="date"]{
        font-size: 12px;
        font-family: verdana;
        width:140px;
        padding:5px;
        height:27px;
    }
    .tblmainsumlist{

    }

    .tblmainsumlist{
        font-size: 12px;
        font-family: verdana;
        color: black;
        border-collapse: collapse;
        /* margin-top: 20px;
        margin-left: 8px; */
        width: 731px;
    }
    .tblmainsumlist th{
        text-align:left;
        background-color:rgb(37, 181, 239);
        color:white;
        padding:3px;
        height:27px;
        border: solid 1px rgb(197, 196, 196);
    }
    .tblmainsumlist td{
        text-align:left;
        background-color:white;
        color:#000;
        padding:5px;
        height:27px;
        border:solid 1px rgb(197, 196, 196);
    }
    .searchsalestask{
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
        cursor: pointer;
        margin-top:-2px; */
    }
    .hmoDivider{
        width:100%;
        height:6px;
        border-radius:2px;
        background:gray;
        margin-top:10px;
    }
    .fromReg{
        text-align: center;
		font-weight: bold;
		margin-top: 20px;
		font-size: 14px;
		font-family: arial;
    }
    .tblmainsumlist input[type="text"]{
        width:100%;
        border:none;
        background:none;
        font-size: 12px;
        font-family: verdana;
        color: #fff;
    }
    .FSPrintsalestask{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        margin-left: 5px;
        cursor: pointer;
    }
    .buttonFS{
        margin-left: 532px;
        margin-top: -28px;
    }

    .DFstask{
        margin-top: 10px;
        padding-left: 10px;
    }
    .dateDivtask{
        padding-top: 5px;
    }
    .dateDiv2task{
        padding-top: 5px;
        margin-bottom: 10px;
        padding-bottom: 10px;
        font-weight:normal;
    }
    .ButInputtask{
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
    .FSGentask{
        width: 100px;
        height: 28px;
        border: none;
        border-radius: 5px;
        margin-left: 373px;
        float: left;
        margin-top: -47px;
        cursor: pointer;
    }
    .isNumeric{
        text-align: right;
    }
</style>

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
?>
<script>
    $('form').submit(function() {

        $.post(URL + 'report/new_salestask', {startdate: $('input[name="startdate"]').val(), enddate: $('input[name="enddate"]').val()})
                .done(function(returnData) {
                    $('.newformcl').html(returnData);
                    $('.newformcl').removeClass('hidden');
                    $(".containertask").removeClass("hidden");
                }).fail(function() {
            alert('Connection Error!');
        });
        return false;
    });

    $('.exportSalesTask').click(function() {
        location = URL + 'report/exportTask?from=' + $('input[name="startdate"]').val() + '&to=' + $('input[name="enddate"]').val();
    });

    $('.printSPS').click(function() {
        window.print();
    });
	
	<?php
	
	if(!$salesview){
	?>
		$('.buttonFS input').prop('disabled', true);
		$('.DFstask input').prop('disabled', true);
	<?php
	}
	?>


</script>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<form method='post' action='<?php echo URL ?>report/new_salestask' id='form'>
    <div class="mainformitemsum">
        <div class="sbis BSText">Sales per Service</div>
        <div class="buttonFS">
            <input type="button" class="FSPrintsalestask printSPS reportprint" value="">
            <input type="button" class="FSPrintsalestask exportSalesTask reportexport" value="">
        </div>
        <div class="DFstask">
            <div class="fontreportnew" style="padding-left:10px;">
                <div class="dateDivtask"><b>Date:</b></div>
                <div class="dateDiv2task" style="margin-top:10px;">From: <input type="date" class="ButInputtask" name="startdate" value="<?= isset($_POST['startdate']) ? $_POST['startdate'] : date('Y-m-d') ?>"> To: <input type="date" class="ButInputtask" name="enddate" value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('Y-m-d') ?>"></div>
                <input type="submit" class="FSGentask searchsalestask reportgenerate" value="" id="searchsalestask">
            </div>
        </div>		

        <div class="hmoDivider"></div>	
		
		<?php
		
		$salesview = TblInvoiceLinesMySqlExtDAO::checktaskreport(Session::getSession('medorgid'));
		if(!$salesview ){
			?>
				<div style="text-align:center;">
					YOU HAVE NO SALES PER SERVICE
				</div>
			<?php
			}else{
		?>
        <div class="containertask trhidden hidden">	

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
                    <i>Sales per Service</i>
                </div>
                <div>
                    <?php echo (isset($_POST['startdate'])) ? date('F d, Y', strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
                    <?php echo (isset($_POST['enddate'])) ? date('F d, Y', strtotime($_POST['enddate'])) : date('F d,Y') ?>
                </div>
            </div>
			<?php
			$salesview = TblInvoiceLinesMySqlExtDAO::gettaskreport(Session::getSession('medorgid'), $_POST['startdate'], $_POST['enddate']);
			if($salesview){
			?>
			<div class="scroll">
                <table class="tblmainsumlist">
                    <tr>
                        <th width="80px">Date</th>
                        <th width="90px">Invoice No.</th>
                        <th width="90px">Service Code</th>
                        <th width="141px">Service Description</th>
                        <th width="80px" style="text-align: center;">Hour</th>
                        <th width="125px" style="text-align:center;">Rate</th>
                        <th width="125px" style="text-align: right;">Amount</th>
                    </tr>
                    <?php
                    $salesview = new stdClass();

                    if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
                        $salesview = TblInvoiceLinesMySqlExtDAO::gettaskreport(Session::getSession('medorgid'), $_POST['startdate'], $_POST['enddate']);
                    }
                    $quantitytotal = 0;
                    $totalunitcost = 0;
                    $nettotal = 0;
                    $amount = 0;
					
                    if (count($salesview) > 0) {
                        foreach ($salesview as $item) {
                            ?>
                            <tr class="">
                                <td><?php echo $item['trans_date'] ?></td>
                                <td><?php echo $item['invoice_number'] ?></td>
                                <td><?php echo $item['task_code'] ?></td>
                                <td><?php echo $item['description'] ?></td>
                                <td><input class="isNumeric" style="text-align: center;color:#000;" readonly type="text" value="<?php echo $item['hour'] ?>"></td>
                                <td style="text-align: center;"><input type="text" style="color:#000; text-align:center;" value="<?php echo number_format((float) $item['net_amount'], 2) ?>"></td>
                                <?php
                                $amount = ($item['hour'] * $item['net_amount']);
                                ?>
                                <td><input type="text" style="color:#000;" class="isNumeric" readonly value="<?php echo number_format((float) $amount, 2) ?>"></td>
                            </tr>
                            <?php
                            $quantitytotal += $item['rate_per_hour'];
                            $totalunitcost += $item['hour'];
                            $nettotal += $item['net_amount'];
                        }
                    }
                    ?>
                    <tr class="">
                        <td style="background-color: rgb(37, 181, 239); font-weight:bold;text-align:right;padding-right:40px;color:#fff;" colspan="6">Total Amount</td>
                        <td style="background-color: rgb(37, 181, 239);font-weight:bold;" colspan="1"><input class="isNumeric" style="font-weight:bold;padding-left:0px;color:#fff;" readonly type="text" value="<?php echo number_format((float) $nettotal, 2) ?>"></td>
                    </tr>
                </table>
            </div>
			<?php
				}else{
				?>
					<div style="text-align:center;">
						NO SALES PER SERVICE
					</div>
				<?php
				}
			}
			?>
        </div>	
    </div>


</form>