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
	/* border:1px solid gray; */
	margin:auto;
	/* margin-left:200px */
}
.expenseDiv{
	
}
.tblExpense{
	margin-left:20px;
	margin-top:20px;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReport{
	border-collapse:collapse;
	margin-top:30px;
	width:95%;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReport tr td{
	border:1px solid rgb(197, 196, 196);
	text-align:center;
	padding:5px;
}
.tblShowReport th{
	border:1px solid #fff;
	font-size:14px;
	font-weight:bold;
	background:rgb(37, 181, 239);
	padding:3px;
	color:#fff;
	text-align:left;
}
.dateReport{
	width:173px;
}
.tblShowReport_div{
	margin-left:45px;
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
.exportButton{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 5px;
	cursor: pointer;
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
	margin-top: 15px;
	padding-left:21px;
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
.dateDiv{
	padding-top: 5px;
}
.dateDiv2{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
}
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 367px;
	float: left;
	margin-top: -48px;
	cursor: pointer;
}
.blHeader{
	font-size: 20px;
	font-family: verdana;
	/* padding-left: 234px; */
	margin-top: 10px;
	font-weight: bold;
	color: rgba(0, 0, 0, 0.67);
	text-align:center;
}
.buttonFS{
	margin-left: 532px;
	margin-top: -28px;
}
.DFs{
	
}
.FSPrint{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 5px;
	cursor: pointer;
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
	
	$report = $this->getMonthlyExpense;
?>
<html>
	<head>
	</head>
	<body>
		<form>
		<div class="monthlyExpensesCont">
			<div class="monthlyExpensesHolder">
				<div class="expenseDiv">
					<div class="me_head">
						<div class="BSText">
							Monthly Expense
						</div>
						<div class="buttonFS">
							<input type="button" class="FSPrint printME reportprint" value="">
							<input type="button" class="FSPrint exportButton reportexport" value="">
						</div>
						<div class="DFs">
							<div class="fontreportnew">
								<div class="dateDiv"><b>Date:</b></div>
								<div class="dateDiv2"style="margin-top:10px;">From: <input type="date" class="ButInput" name="startdate" value="<?= 
									isset($_POST['startdate']) ? $_POST['startdate'] : date('Y-m-d')?>"> To: <input type="date" class="ButInput" name="enddate" value="<?php echo $_POST['enddate'] ?>">
								</div>
								<input type="submit" class="FSGen reportgenerate" value="">
							</div>
						</div>
					</div>
				
					<div class="hmoDivider"></div>	
					<?php
					if(!$report){
					?>
						<div style="text-align:center;">
							YOU HAVE NO MONTHLY EXPENSE
						</div>
					<?php
					}else{
					?>
					<div class="tblShowReport_div hidden">
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
								<i>Monthly Expenses Report</i>
							</div>
							<div>
								<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
								<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
							</div>
						</div>
						<?php
						if($report){
						?>
						<table class="tblShowReport">
							<tr>
								<th>Account Code</th>
								<th>Account Name</th>
								<th style="text-align:right;">Amount</th>
							</tr>
							<?php
							$report = $this->getMonthlyExpense;
							$total = 0;
							$total_journal = 0;
							if(isset($report) && !empty($report)){
								foreach ($report as $each){
									$total += $each->expense;
							?>
								<?php
								if($each->expense != 0){
								?>
								<tr>
									<td style="text-align:left;"><?= $each->accountNum?></td>
									<td style="text-align:left;"><?= $each->accontName ?></td>
									<td style="text-align:right;"><?= Controller::getFloat($each->expense)?></td>
								</tr>
								
							<?php
									}
								}
							}
							?>
							
								<tr>
									<td style="text-align:right;padding-right:25px;background-color:rgb(37, 181, 239);color:#fff;" colspan="2"><b>Total</b></td>
									<td style="text-align:right;background-color:rgb(37, 181, 239);color:#fff;"><b><?= Controller::getFloat($total) ?></b></td>
								</tr>
							<?php
							
							?>
						</table>
						
					</div>
					
					
					<?php
						}else{
						?>
							<div style="text-align:center;">
								NO MONTHLY EXPENSE
							</div>
					<?php	
						}
					}
					?>
				</div>
			</div>
		</div>
		</form>
	</body>
</html>

<script>
	$(function(){
		$('form').submit(function() {
		 
			$.post(URL + 'report/new_monthlyExpense', {'startdate': $('input[name="startdate"]').val(), 'enddate': $('input[name="enddate"]').val()})										
				.done(function(returnData) {
				// alert(returnData);
				$('.newformcl').html(returnData);
				$('.newformcl').removeClass('hidden');
				$('.tblShowReport_div').removeClass('hidden');
				// $('.selectRate').change();

			}).fail(function() {
				alert('Connection Error!');
			});
			
			return false;
			
		});
		
		
		$('.exportButton').click(function(){
			location = URL + 'report/export?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
		});
		
		$('.printME').click(function(){
			window.print();
		});
	});
</script>