<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="cash_disbursement.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashDisbursementBook;
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
	<div class="fromReg" style="font-family: Agency FB;margin-left: 15;text-align: center;height:auto!important;padding-top:20px;">
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
			CASH DISBURSEMENT BOOK
		</div>
		<div style="letter-spacing:1;font-size: 18px;font-weight: bold;">
			<?php echo (isset($_POST['from']))? date('F d,Y',strtotime($_POST['from'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['to']))? date('F d,Y',strtotime($_POST['to'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:10px;">
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
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Vendor Name</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Ref No.</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Particulars</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Account Name</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Amount</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">INPUT VAT</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Cash on Hand</th>
				<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Balance</th>
			</tr>
			<?php
			$balance = '';
			$tempbal = '';
			$tr = '';
			$totalAmount = '';
			$ivTotal = '';
			$cohTotal = '';
			$balanceTotal = '';
			if($this->cashDisbursementBook){
				foreach($this->cashDisbursementBook as $each){
					$tempBal = (round(floatval($each['amount']),2) + round(floatval($each['input_vat']),2));
					$tr = (round(floatval($each['coh']),2));
					$totalAmount += (round(floatval($each['amount']),2));
					$ivTotal += (round(floatval($each['input_vat']),2));
					$cohTotal += (round(floatval($each['coh']),2));
					
					if($tr == $tempBal || $tempBal == 0){
						$balance = '-';
					}else{
						$balance = Controller::getFloat($tempBal);
						$balanceTotal += $tempBal; 
					}
				
			?>
				<tr>
					<td style="border:1px solid #000;">
						<?= $each['trans_date'] ?>
					</td>
					<td style="border:1px solid #000;">
						<?= $each['name'] ?>
					</td>
					<td style="border:1px solid #000;">
						<?= $each['reference_number'] ?>
					</td>
					<td style="border:1px solid #000;">
						<?= $each['particulars'] ?>
					</td>
					<td style="text-align:right;border:1px solid #000;">
						<?= $each['accont_name'] ?>
					</td>
					<td style="text-align:right;border:1px solid #000;">
						<?= ($each['amount'] == 0 ? '-' : number_format($each['amount'], 2))?>
					</td>
					<td style="text-align:right;border:1px solid #000;">
						<?= ($each['input_vat'] == 0 ? '-' : number_format($each['input_vat'],2))?>
					</td>
					<td style="text-align:right;border:1px solid #000;">
						<?= ($each['coh'] == 0 ? '-' : number_format($each['coh'],2)) ?>
					</td>
					<td style="text-align:right;border:1px solid #000;">
						<?= $balance?>
					</td>
				</tr>
			<?php
				}
			}
			
			?>
			<tr>
				<td colspan="5" style="border:1px solid #000;">
				Total
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $totalAmount == 0 ? '-' : Controller::getFloat($totalAmount)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $ivTotal == 0 ? '-' : Controller::getFloat($ivTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?>
				</td>
			</tr>
			</tr>
			</tr>
			</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO CASH DISBURSEMENT
			</div>
		<?php
		endif;
		?>
	</div>
</div>
