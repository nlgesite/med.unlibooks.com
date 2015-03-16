<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryBilling;
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
.textRight{
	text-align:right;
}
.textLeft{
	text-align:left;
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
			SUMMARY OF BILLING
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
				<th>Billing No.</th>
				<th width="15%">Client Name</th>
				<th width="18%">Description</th>
				<th width="11%">Trade Receivable</th>
				<th>Output VAT</th>
				<th>Sales Discount</th>
				<th width="11%">Professional Service Income</th>
				<th width="11%">Balance</th>
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
					<td class="textRight"><?= Controller::getFloat($each['tr']) == 0 ? '-' : number_format($each['tr'],2)?></td>
					<td class="textRight"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
					<td class="textRight"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
					<td class="textRight"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
					<td class="textRight"><?= $balance?></td>
				</tr>
			<?php
				}
			}
			?>
				<tr>
					<td colspan="4">
						Total
					</td>
					<td class="textRight">
						<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal) ?>
					</td>
					<td class="textRight">
						<?= $OVTotal == 0 ? '-' : Controller::getFloat($OVTotal) ?>
					</td>
					<td class="textRight">
						<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal) ?>
					</td>
					<td class="textRight">
						<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal) ?>
					</td>
					<td class="textRight">
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
