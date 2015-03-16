<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->monthlyExpense;
?>
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
			MONTHLY EXPENSES REPORT
		</div>
		<div class="ORCompanyInfo">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		<table class="tblShowReport">
		<?php
			if($report):
		?>
			<tr>
				<th width="20%">Account Code</th>
				<th>Account Name</th>
				<th style="text-align:right;">Amount</th>
			</tr>
			<?php
			$total = 0;
			$total_journal = 0;
			if(isset($report) && !empty($report)){
				foreach ($report as $each){
				
					$total = $total + round(floatval($each['expense']), 2);
			?>
				<?php
				if($each['expense'] != 0){
				?>
				<tr>
					<td style="text-align:left;"><?= $each['account_num'] ?></td>
					<td style="text-align:left;"><?= $each['accont_name'] ?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['expense'] )?></td>
				</tr>
				
			<?php
					}
				}
			}
			?>
			
				<tr>
					<td style="text-align:left;"><b>Total</b></td>
					<td></td>
					<td style="text-align:right;"><b><?= Controller::getFloat($total) ?></b></td>
				</tr>
			<?php
			
			?>
		</table>
		<?php
		else:
		?>
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO MONTHLY EXPENSE
			</div>
		<?php
		endif;
		?>
	</div>
</div>
