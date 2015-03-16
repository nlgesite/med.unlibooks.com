<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="summary_journal.xls"');
?>

<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryJournal;
?>
<style>
.reportHolderOR{
		width: 50%;
		text-align:center;
		padding-left:30px;
}
.tblCRB{
	padding-top:100px;
	width:50%;
	
}
</style>
<div class="reportHolderOR">
	<div class="fromReg">
		<div style="font-size: 19px;text-transform: uppercase;font-weight: bold;letter-spacing: 1; font-family:Agency FB;">
			<?= $org->orgName ?>
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold; font-family:Agency FB;">
			<?= $info->address ?>
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold; font-family:Agency FB;">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold; font-family:Agency FB;">
			SUMMARY OF JOURNAL
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold; font-family:Agency FB;">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:12px;">
			<?php
			if($report):
			?>
			<tr>
				<td colspan="6">
				</td>
			</tr>
			<tr>
				<td colspan="6">
				</td>
			</tr>
			<tr>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Date</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">JV No.</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Particulars</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Account Name</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Debit</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Credit</th>
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
				<td style="border:1px solid #000;padding:5px;"><?= $each['trans_date']?></td>
				<td style="border:1px solid #000;padding:5px;"><?= $each['journal_number']?></td>
				<td style="border:1px solid #000;padding:5px;"><?= $each['particulars']?></td>
				<td style="border:1px solid #000;padding:5px;"><?= $each['accont_name']?></td>
				<td style="text-align:right;border:1px solid #000;padding:5px;"><?= $each['debit'] == 0 ? '-' : number_format($each['debit'],2)?></td>
				<td style="text-align:right;border:1px solid #000;padding:5px;"><?= $each['credit'] == 0 ? '-' : number_format($each['credit'],2)?></td>
			</tr>
			<?php
			}
			}
			?>
			<tr>
				<td colspan="4" style="border:1px solid #000;padding:5px;">
				Total
				</td>
				<td style="text-align:right;border:1px solid #000;padding:5px;">
					<?= $debitTotal == 0 ? '-' : Controller::getFloat($debitTotal);?>
				</td>
				<td style="text-align:right;border:1px solid #000;padding:5px;">
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
