<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashReceiptsBook;
?>
<style>
.tblCRB{
	margin-top:20px;
	border-collapse:collapse;
	font-family:Verdana;
	font-size:12px;
	border:1px solid #c8c8c8;
	width: 99%;
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
			CASH RECEIPTS BOOK
		</div>
		<div class="ORCompanyInfo">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB">
			<?php
			if($report):
			?>
			<!--<tr>
				<td colspan="10">
				</td>
			</tr>
			<tr>
				<td colspan="10">
				</td>
			</tr>-->
			<tr>
				<th>Date</th>
				<th>Ref No.</th>
				<th width="12%">Client Name</th>
				<th>Particulars</th>
				<th>Cash on Hand</th>
				<th width="10">Trade Receivable</th>
				<th>Output VAT</th>
				<th>Sales Discount</th>
				<th width="11%">Professional Service Income</th>
				<!--<th width="11%">Miscellaneous Income</th>-->
				<th width="10%">Balance</th>
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
				
					if($tr == $tempBal || $tempBal == 0){
						$balance = '-';
					}else{
						$balance = Controller::getFloat($tempBal);
						$balanceTotal += $tempBal;
					}
	 		?>
				<tr>
					<td><?= $each['trans_date']?></td>
					<td><?= $each['invoice_number']?></td>
					<td><?= $each['client_name']?></td>
					<td><?= $each['particular']?></td>
					<td style="text-align:right"><?= Controller::getFloat($each['coh']) == 0 ? '-' : number_format($each['coh'],2)?></td>
					<td style="text-align:right"><?= Controller::getFloat($each['ar']) == 0 ? '-' : number_format($each['ar'],2)?></td>
					<td style="text-align:right"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
					<td style="text-align:right"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
					<td style="text-align:right"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
					<td style="text-align:right"><?= $balance?></td>
				</tr>
			<?php
				}
			}
			?>
			<tr>
				<td colspan="4">
					Total
				</td>
				<td style="text-align:right">
					<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
				</td>
				<td style="text-align:right">
					<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal)?>
				</td>
				<td style="text-align:right">
					<?= $ovTotal == 0 ? '-' : Controller::getFloat($ovTotal)?>
				</td>
				<td style="text-align:right">
					<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal)?>
				</td>
				<td style="text-align:right">
					<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal)?>
				</td>
				<td style="text-align:right">
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
