<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashDisbursementBook;
?>
<style>
.tblCRB{
	margin-top:20px;
	border-collapse:collapse;
	font-family:Verdana;
	font-size:12px;
	border:1px solid #c8c8c8;
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
			CASH DISBURSEMENT BOOK
		</div>
		<div class="ORCompanyInfo">
			<?php echo (isset($_POST['from']))? date('F d,Y',strtotime($_POST['from'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['to']))? date('F d,Y',strtotime($_POST['to'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB">
			<?php
			if($report):
			?>
			<!--<tr>
				<td colspan="9">
				</td>
			</tr>
			<tr>
				<td colspan="9">
				</td>
			</tr>-->
			<tr>
				<th width="12%">Date</th>
				<th width="15%">Vendor Name</th>
				<th>Ref No.</th>
				<th>Particulars</th>
				<th>Account Name</th>
				<th>Amount</th>
				<th>INPUT VAT</th>
				<th>Cash on Hand</th>
				<th width="12%">Balance</th>
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
					<td>
						<?= $each['trans_date'] ?>
					</td>
					<td>
						<?= $each['name'] ?>
					</td>
					<td>
						<?= $each['reference_number'] ?>
					</td>
					<td>
						<?= $each['particulars'] ?>
					</td>
					<td>
						<?= $each['accont_name'] ?>
					</td>
					<td style="text-align:right">
						<?= ($each['amount'] == 0 ? '-' : number_format($each['amount'], 2))?>
					</td>
					<td style="text-align:right">
						<?= ($each['input_vat'] == 0 ? '-' : number_format($each['input_vat'],2))?>
					</td>
					<td style="text-align:right">
						<?= ($each['coh'] == 0 ? '-' : number_format($each['coh'],2)) ?>
					</td>
					<td style="text-align:right">
						<?= $balance?>
					</td>
				</tr>
			<?php
				}
			}
			
			?>
			<tr>
				<td colspan="5">
				<b>Total</b>
				</td>
				<td style="text-align:right">
					<b><?= $totalAmount == 0 ? '-' : Controller::getFloat($totalAmount)?></b>
				</td>
				<td style="text-align:right">
					<b><?= $ivTotal == 0 ? '-' : Controller::getFloat($ivTotal)?></b>
				</td>
				<td style="text-align:right">
					<b><?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?></b>
				</td>
				<td style="text-align:right">
					<b><?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?></b>
				</td>
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
