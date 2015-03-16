<style>
.monthlyExpensesCont{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
	color: #183867;
}
.tblExpense{
	margin-left:20px;
	margin-top:20px;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReport{
	border-collapse: collapse;
	margin-top: 30px;
	width: 99%;
	font-family: Verdana;
	font-size: 12px;
	left: 50%;
}
.tblShowReport tr td{
	border:1px solid gray;
	text-align:center;
	padding:5px;
}
.tblShowReport th{
	border:1px solid #000;
	font-size:12px;
	font-weight:bold;
	background:#183867;
	padding:6px;
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
.exportButton{
	width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	background-color: rgba(135, 194, 15, 0.87);
	font-weight: bold;
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
	font-size:12px;
	font-family: verdana;
	border-radius: 10px;
	color:#25B5EF;
}
.ButInput{
	width: 133px;
	height: 24px;
	font-size: 12px;
	font-family: verdana;
	padding-left: 5px;
	box-shadow: none;
	border: 1px solid rgba(128, 128, 128, 0.58);
	margin-left: 5px;
	margin-right: 5px;
}

/* .ButInput::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	/* width:8px;
	height:14px; */
}	
.ButInput::-webkit-calendar-picker-indicator{
	background-color:#c8c8c8;
	width:8px;
	height:14px;
}
.ButInput::-webkit-input-date{
	-webkit-appearance: none;
} */
.ButInput{
	width: 118px;
	height: 24px;
	font-size: 15px;
	font-family: Agency FB;
	padding-left: 5px;
	box-shadow: none;
	margin-left: 5px;
	margin-right: 5px;
/* 	background-image: url('<?=URL?>public/images/dropSelect.png');
	background-repeat: no-repeat;
	background-size: 118px 24px;
	/* padding-right:20px; */
	outline-style:none; */
}
.dateDiv{
}
.dateDiv2{
	padding-top: 5px;
}
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/generate.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	/* position: absolute; */
	margin-top:4px;
	outline-style: none;
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
	float: right;
	margin-top: 4px;
	margin-right:5px;
}
.FSPrint{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/reportprint.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	outline-style: none;
}
.FSPrint2{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/exportreport.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	outline-style: none;
}
.reportTitle {
	font-size: 23.4px;
	font-family: Agency FB;
	/* margin-left: 15px; */
	color: rgb(37, 181, 239);
	float:left;
	font-weight:bold;
	padding-top: 10px;
	padding-left: 3px;
}
.fromReg{
	font-family: arial;
	width:688px;
	margin-left: 15;
	text-align: center;
	height:auto!important;
	padding-top:20px;
}
.reportHolderOR{
	width: 720px;
	height:600px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left: 15px;
	overflow: scroll;
	/* overflow-x: hidden; */
}
.nameText{
	font-size: 14px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 1;
}
.ORCompanyInfo{
	letter-spacing:0;
	font-size: 12px;
	font-weight: bold;
	font-family:arial;
}
</style>
<?php
    $report = $this->summaryJournal;
?>
	<form>
		<div class="monthlyExpensesCont">
			<div class="reportTitle">
				Summary of Journal
			</div>
			<div class="buttonFS">
				<input type="button" class="FSPrint printME" value="">
				<input type="button" class="FSPrint2 exportButton" value="">
			</div>
			<div style="clear:both;"></div>
			<div class="DFs">
				<div style="float:left;margin-left: 4px;">
					<div class="dateDiv"></div>
					<div class="dateDiv2">Date From: <input type="date" class="ButInput" name="startdate" value="<?= 
						isset($_POST['startdate']) ? $_POST['startdate'] : date('Y-m-d') ?>"> 
						To: 
						<input type="date" class="ButInput" name="enddate" value="<?= 
						isset($_POST['enddate']) ? $_POST['enddate'] : date('Y-m-d') ?>">
					</div>
				</div>
				<div style="float:right;margin-right:207px;margin-top: -1px;">
					<input type="submit" class="FSGen" value="" >
				</div>
				<div style="clear:both;"></div>
				<div style="height:2px;width:764px;background:#25B5EF;margin-top:20px;margin-bottom:20px;margin-left:-14px;"></div>
			</div>
			
					<!--<div class="hmoDivider"></div>-->
			<div class="tblShowReport_div">
				
			</div>
		</div>
	</form>

<div class="reportHolderContainer trhidden">
	<?php
	if(!$report){
	?>
		<div style="text-align: center;">
			YOU DON'T HAVE SUMMARY OF JOURNAL
		</div>
	<?php
	}
	?>
</div>
<script>
	$(function(){
		$('.buttonFS').addClass('hidden');
		$('form').submit(function() {
			$('.reportHolderContainer').html(loading);
		 
			$.post(URL + 'report/genSummaryJournal', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val()
				})										
				.done(function(returnData) {
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
				}).fail(function() {
					alert('Connection Error!');
				});
			
			return false;
		});
		
		
		$('.exportButton').click(function(){
			location = URL + 'report/exportSummaryJournal?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
			
		<?php
		if(!$report){
		?>
			$('.monthlyExpensesCont input').prop('disabled',true);
			$('.DFs select').prop('disabled',true);
		<?php
		}
		?>
	});
</script>