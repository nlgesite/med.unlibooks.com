<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="cash_receipts.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashReceiptsBook;
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
	
</style>
<div class="reportHolderOR">
	<div style="font-family: Agency FB;margin-left: 15;text-align: center;height:auto!important;padding-top:20px;">
		<div style="font-size: 19px;text-transform: uppercase;font-weight: bold;letter-spacing: 1;">
			<?= $org->orgName ?>
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;">
			<?= $info->address ?>
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;">
			CASH RECEIPTS BOOK
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:10px;">
			<?php
			if($report):
			?>
			<tr>
				<td colspan="10">
				</td>
			</tr>
			<tr>
				<td colspan="10">
				</td>
			</tr>
			<tr>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Date</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Ref No.</th>
				<th width="12%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Client Name</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Particulars</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Cash on Hand</th>
				<th width="10%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Trade Receivable</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Output VAT</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Sales Discount</th>
				<th width="11%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Professional Service Income</th>
				<!--<th width="11%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Miscellaneous Income</th>-->
				<th width="10%" style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Balance</th>
			</tr>
			<?php
			$balance = '';
			$tempbal = '';
			$tr = '';
			$cohTotal = '';
			$trTotal = '';
			$ovTotal = '';
			$sdTotal = '';
			$psiTotal = '';
			$miTotal = '';
			$balanceTotal = '';
			if(isset($report) && !empty($report)){
				foreach($report as $each){
				
					$tempBal = ((round(floatval($each['output_vat']),2)) + (round(floatval($each['prof']),2))) - (round(floatval($each['disc']),2));
					$tr = (round(floatval($each['coh']),2)) + (round(floatval($each['ar']),2));
					$cohTotal += (round(floatval($each['coh']),2));
					$trTotal += (round(floatval($each['ar']),2));
					$ovTotal += (round(floatval($each['output_vat']),2));
					$sdTotal += (round(floatval($each['disc']),2));
					$psiTotal += (round(floatval($each['prof']),2));
					$miTotal += (round(floatval($each['mi']),2));
				
					if($tr == $tempBal || $tempBal == 0){
						$balance = '-';
					}else{
						$balance = Controller::getFloat($tempBal);
						$balanceTotal += $tempBal;
					}
	 		?>
				<tr>
					<td style=" border:1px solid #000;"><?= $each['trans_date']?></td>
					<td style=" border:1px solid #000;"><?= $each['invoice_number']?></td>
					<td style=" border:1px solid #000;"><?= $each['client_name']?></td>
					<td style=" border:1px solid #000;"><?= $each['particular']?></td>
					<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['coh']) == 0 ? '-' : number_format($each['coh'],2)?></td>
					<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['ar']) == 0 ? '-' : number_format($each['ar'],2)?></td>
					<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
					<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
					<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
					<!--<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['mi']) == 0 ? '-' : number_format($each['mi'],2)?></td>-->
					<td style="text-align:right;border:1px solid #000;"><?= $balance?></td>
				</tr>
			<?php
				}
			}
			?>
			<tr>
				<td colspan="4" style="border:1px solid #000;">
					Total
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $ovTotal == 0 ? '-' : Controller::getFloat($ovTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal)?>
				</td>
				<!--<td style="text-align:right;border:1px solid #000;">
					<?= $miTotal == 0 ? '-' : Controller::getFloat($miTotal)?>
				</td>-->
				<td style="text-align:right;border:1px solid #000;">
					<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?>
				</td>
			</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO CASH RECEIPT
			</div>
		<?php
		endif;
		?>
	</div>
</div>
