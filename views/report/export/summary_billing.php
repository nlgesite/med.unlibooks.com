<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="summary_billing.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryBilling;
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
		<div style="font-size: 19px;text-transform: uppercase;font-weight: bold;letter-spacing: 1;font-family: Agency FB;">
			<?= $org->orgName ?>
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;font-family: Agency FB;">
			<?= $info->address ?>
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;font-family: Agency FB;">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;font-family: Agency FB;">
			SUMMARY OF BILLING
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;font-family: Agency FB;">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:9px;">
			<?php
			if($report):
			?>
			<tr>
				<td colspan="9">
				</td>
			</tr>
			<tr>
				<td colspan="9">
				</td>
			</tr>
			<tr>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Date</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Billing No.</th>
				<th width="15%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Client Name</th>
				<th width="18%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Description</th>
				<th width="11%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Trade Receivable</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Output VAT</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Sales Discount</th>
				<th width="11%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Professional Service Income</th>
				<th width="11%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Balance</th>
			</tr>
			<?php
			$balance = '';
			$tempbal = '';
			$tr = '';
			$trTotal = '';
			$OVTotal = '';
			$sdTotal = '';
			$psiTotal = '';
			$balanceTotal = '';
			if(isset($report) && !empty($report)){
				foreach($report as $each){
					$tempBal = (round(floatval($each['output_vat']),2) + round(floatval($each['prof']),2)) - (round(floatval($each['disc']),2));
					$tr = round(floatval($each['tr']),2);
					$trTotal += round(floatval($each['tr']),2);
					$OVTotal += round(floatval($each['output_vat']),2);
					$sdTotal += round(floatval($each['disc']),2);
					$psiTotal += round(floatval($each['prof']),2);
					
					if($tr == $tempBal){
						$balance = '-';
					}else{
						$balance = $tempBal;
						$balanceTotal += $balance ;
					}
			?>		
				<tr>
					<td><?= $each['trans_date']?></td>
					<td><?= $each['billing_no']?></td>
					<td><?= $each['client_name']?></td>
					<td><?= $each['description']?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['tr']) == 0 ? '-' : number_format($each['tr'],2)?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
					<td style="text-align:right;"><?= $balance?></td>
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
						<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal) ?>
					</td>
					<td style="text-align:right;">
						<?= $OVTotal == 0 ? '-' : Controller::getFloat($OVTotal) ?>
					</td>
					<td style="text-align:right;">
						<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal) ?>
					</td>
					<td style="text-align:right;">
						<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal) ?>
					</td>
					<td style="text-align:right;">
						<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal) ?>
					</td>
				</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO SUMMARY OF BILLING
			</div>
		<?php
		endif;
		?>
	</div>
</div>
