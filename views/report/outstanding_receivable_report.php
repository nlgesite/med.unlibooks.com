<style>
.outstandingReceivableCont{
	width:100%;
	margin:0;
	padding:0;
	font-family:Verdana;
	font-size:12px;
}
.outstandingReceivableHolder{
	/* border:1px solid gray; */
	margin:auto;
}
.showGeneratedHmo{
	/* border:1px solid gray; */
	margin:auto;
}
.tblExpenseOR{
	margin-left:20px;
	margin-top:21px;
	font-family:Verdana;
	font-size:12px;
}
.tblExpenseOR2{
	/* margin-top:20px; */
	font-family:Verdana;
	font-size:12px;
}
.tblShowReportOR{
	border-collapse:collapse;
	margin-top:30px;
	width:98%;
	margin-left:7px;
	font-family:Verdana;
	font-size:12px;
	text-align:left;
}
.tblShowReportOR tr td{
	border:1px solid #c8c8c8;
}
.tblShowReportOR th{
	border: solid 1px rgb(197, 196, 196);
	font-size:14px;
	font-weight:bold;
	background:rgb(63, 176, 63);
	padding:3px;
	color:#fff;
}
.dateReportOR{
	width:176px;
}
.hmoDivider{
	
}
.companyId2{
	border:none;
	font-weight:bold;
}
.fromReg{
	text-align: center;
	font-weight: bold;
	margin-top: 20px;
	font-size: 14px;
	font-family: arial;
}
.listsRec{
	text-align:left;
	padding:5px;
}
.tblShowReportOR tr td{
	padding:5px;
}
.exportHmo{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 5px;
	cursor: pointer;
}
.generateHmo{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 5px;
	cursor: pointer;
}



.DFs{
	margin-top: 5px;
	padding-left: 10px;
	
}
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 371px;
	/* float: left; */
	margin-top: -16px;
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
div.scroll {
    height: 570px;
	overflow: scroll;
	margin-left: 4px;
	margin-top: 20px;
	box-shadow: 1px 1px 6px rgb(148, 148, 148);
	width: 751px;
}
.totalRec{
	background-color: rgb(37, 181, 239);
	color: #fff;
}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<?php
    $info = new TblOrganizationInfo();
    $org  = new TblOrganization();
    
    if(Session::getSession('meduser')){
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
        $org  = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
        Session::setSession('medinfoid', $info->id);
//        Session::setSession('orgid', $info->orgId);
        
//        print_r($info->emailAddress); exit;
    }
?>
<?php
	$getHMOPartner = $this->getOutstandingReceivable;
	$checkHMOPartner = $this->checkHmoOutStanding;
	
?>
<html>
	<head>
	</head>
	<body>
		<div class="outstandingReceivableCont">
		
			<div class="outstandingReceivableHolder">
				<form>
					<div class="outstanding_title BSText" style="">
						Outstanding Receivable Report
					</div>
					<div class="outstanding_button" style="margin-top: -28px;margin-left: 532px;">
						<input type="button" value="" class="generateHmo printORR reportprint">
						<input type="button" value="" class="exportHmo reportexport">
					</div>
					<div class="DFs">
						<div class="outstanding_gen" style="padding:10px;">
							<div class="fontreportnew">
								<div class="dateDiv"><b>Date:</b></div>
								<div class="dateDiv2" style="margin-top:10px;">From: <input type="date" class="ButInput" name="startdate" value="<?= 
								isset($_POST['startdate']) ? $_POST['startdate'] : date('Y-m-d')?>"> To: <input type="date" class="ButInput" name="enddate" value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('Y-m-d')?>"></div>
								
								<input type="submit" class="FSGen reportgenerate" value="">
							</div>
					<table class="tblExpenseOR2 fontreportnew">
						<tr>
							<td style="font-weight:normal">
								HMO Partner:
							</td>
							<td>
							</td>
							<td>
								<select class="selectHmo" style="width:159px;height:25px;">
								
								<?php
								if($checkHMOPartner){
								?>	
									<option>
										All
									</option>
								<?php
									foreach($checkHMOPartner as $hmoPartner){
								?>	
									<option>
										<?= $hmoPartner->hmoName ?>
									</option>
								<?php
								}
								}
								?>	
								</select>
							</td>
							
						</tr>
					</table>
							
							
						</div>
					
				</div>	
				<div class="hmoDivider"></div>
				<?php
				if($checkHMOPartner){
				?>	
				<div class="showGeneratedHmo hidden" style="overflow:auto;overflow-x:hidden;height:600px;">	
				<div class="scroll">
					<div class="fromReg">
						<div style="font-size:17px;" class="orgname">
							<?= $org->orgName ?>
						</div>
						<div class="orgadd">
							<?= $info->address ?>
						</div>
						<div class="orgtin">
							VAT Reg. TIN: <?= $info->tinNum ?>
						</div>
						<br/>
						<div class="orgreport">
							<i>Outstanding Receivable Report</i>
						</div>
						<div>
							<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
							<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
						</div>
					</div>
					
						<table class="tblShowReportOR">
					
							<tr>
								<th>Invoice Date</th>
								<th>Invoice No.</th>
								<th>HMO Partner</th>
								<th>Patient Name</th>
								<th>Status</th>
								<th style="text-align:right;">Amount</th>
							</tr>
							<?php
							$report = $this->getOutstandingReceivable;
							$total = 0;
							if(isset($report) && !empty($report)){
								foreach ($report as $each){
									if($each->grandTotal != 0){
									$total = ($each->status == 'reversed'? $total - Controller::removeComma($each->grandTotal) : $total + Controller::removeComma($each->grandTotal));
							?>
							<tr class="listsRec">
								<td><?= $each->transDate ?></td>
								<td><?= $each->invoiceNumber?></td>
								<td><?= $each->hmoName?></td>
								<td><?= $each->clientName?></td>
								<td><?= ($each->status=='posted' && $each->grandTotal< 0)? 'collected':$each->status?></td>
								<td style="text-align:right;"><?= ($each->grandTotal < 0 ? '(' . number_format((float) $each->grandTotal*-1 ,2) . ')' : (number_format((float) $each->grandTotal ,2 ))) ?></td>
							</tr>
							<?php
								}
							}
							?>
							<tr class="totalRec">
								<td colspan="5" style="text-align:right;padding-right:25px;">
									<b>Total:</b>
								</td>
								<td style="text-align:right;font-weight:bold;font-size:14px;"><b><?= number_format((float) $total,2)?></b></td>
							</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>	
				
				</form>
				
				<?php
				}else{
				?>
					<div style="text-align:center;">
						YOU HAVE NO OUTSTANDING RECEIVABLE
					</div>
					
				<?php
				}
				?>
			
		</div>
	</body>
</html>

<script>
	$(function(){
		<?php
			if(!$checkHMOPartner){
		?>
			$('.outstanding_button input').prop('disabled',true);
			$('.DFs input').prop('disabled',true);
			$('.DFs select').prop('disabled',true);
		<?php	
			}
		?>
		$('form').submit(function() {
		 
			$.post(URL + 'report/new_outstanding_receivable', {startdate: $('input[name="startdate"]').val(), enddate: $('input[name="enddate"]').val()})										
				.done(function(returnData) {
				// alert(returnData);
				$('.newformcl').html(returnData);
				$('.newformcl').removeClass('hidden');
				$('.showGeneratedHmo').removeClass('hidden');
				// $('.selectRate').change();

			}).fail(function() {
				alert('Connection Error!');
			});
			
			return false;
			
		});
		
		$('.printORR').click(function(){
			window.print();
		});
		
		
		$('.exportHmo').click(function(){
			location = URL + 'report/export_OutstandingReceivable?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val()+'&hmo='+$('.selectHmo').val();
		});
		
		
		$('.selectHmo').change(function(){
			var value = $('.selectHmo').val();
			total = 0;
				$('.showGeneratedHmo .listsRec').each(function(){
					if(typeof $(this).find('td:nth-child(3)').html() != 'undefined'){
						$(this).addClass('hidden');
						$(this).hide();
						if($(this).find('td:nth-child(3)').html() == value){
							$(this).removeClass('hidden');
							$(this).show();
							total += getInt($(this).find('td:nth-child(6)').html());
						} else if(value == 'All'){
							$(this).removeClass('hidden');
							$(this).show();
							total += getInt($(this).find('td:nth-child(6)').html());
						}
					}
					$('.totalRec').find('td:nth-child(6)').html(roundFloat(total));
				});
			
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