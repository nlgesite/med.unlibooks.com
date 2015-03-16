<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryJournal;
?>
<style>
.tblCRB{
	margin-top:20px;
	border-collapse:collapse;
	font-family:Verdana;
	font-size:12px;
	border:1px solid #c8c8c8;
	width:98%;
}
.tblCRB th{
	background: #25B5EF;
  color: #fff;
  padding: 2px;
  border: 1px solid #c8c8c8;
}
.tblCRB tr td{
	border:1px solid #c8c8c8;
	padding:5px;
}
</style>
<div class="reportHolderOR">
	<div class="fromReg">
		<div class="nameText">
			<?= $org->orgName ?>
		</div>
		<div class="ORCompanyInfo">
			<?= $info->address ?>
		</div>
		<div class="ORCompanyInfo">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div class="ORCompanyInfo">
			SUMMARY OF JOURNAL
		</div>
		<div class="ORCompanyInfo">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB">
		<?php
		if($report):
		?>
			<tr>
				<th>Date</th>
				<th>JV No.</th>
				<th>Particulars</th>
				<th>Account Name</th>
				<th>Debit</th>
				<th>Credit</th>
			</tr>
			<?php
			$debitTotal = '';
			$creditTotal = '';
			if(isset($report) && !empty($report)){
				foreach($report as $each){
					$debitTotal += round(floatval($each['debit']),2);
					$creditTotal += round(floatval($each['credit']),2);
			?>
			<tr>
				<td><?= $each['trans_date']?></td>
				<td><?= $each['journal_number']?></td>
				<td><?= $each['particulars']?></td>
				<td><?= $each['accont_name']?></td>
				<td style="text-align:right;"><?= $each['debit'] == 0 ? '-' : number_format($each['debit'],2)?></td>
				<td style="text-align:right;"><?= $each['credit'] == 0 ? '-' : number_format($each['credit'],2)?></td>
			</tr>
			<?php
				}
			}
			?>
			<tr>
				<td colspan="4">
				Total
				</td>
				<td style="text-align:right;">
					<?= $debitTotal == 0 ? '-' : Controller::getFloat($debitTotal);?>
				</td>
				<td style="text-align:right;">
					<?= $creditTotal == 0 ? '-' : Controller::getFloat($creditTotal);?>
				</td>
			</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO SUMMARY OF JOURNAL
			</div>
		<?php
		endif;
		?>
	</div>
</div>
