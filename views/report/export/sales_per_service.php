<div style="text-align:center; font-weight:bold; margin-top:20px;">
			<div style="font-size:17px;">
				<?= $this->org->orgName ?>
			</div>
			<div>
				<?= $this->info->address ?>
			</div>
			<div>
				VAT Reg. TIN: <?= $this->info->tinNum ?>
			</div>
			<div>
				<i>Sales per Service</i>
			</div>
			<div>
				<?= date('F d,Y',strtotime($_GET['from'])) ?> - <?= date('F d,Y',strtotime($_GET['to'])) ?>
			</div>
		</div>
		<div style="text-align:center;">
			
		<table style="text-align:center; border-collapse:collapse; margin-top:50px; font-family:Verdana; font-size:12px; width:50%;">
			<tr>
			</tr>
			<tr>
			</tr>
			
			<tr>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Date
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;"> 
					Invoice No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Service Code
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Service Description
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Hour
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Rate per Hour
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Amount
				</th>
			</tr>
<?php
		
		$i = 1;
		$total = 0;
		$amount = 0;
		if($this->data){
			foreach($this->data as $row) {
				$total = $total + $row['net_amount'];
?>
			<tr>
				<td style="text-align:center;">
					<?= $row['trans_date'];?>
				</td>
				<td style="text-align:center;">
					<?= $row['invoice_number'];?>
				</td>
				<td style="text-align:center;">
					<?= $row['task_code'];?>
				</td>
				<td style="text-align:center;">
					<?= $row['description'];?>
				</td>
				<td style="text-align:center;">
					<?= $row['hour'];?>
				</td>
				<td style="text-align:center;">
					<?= Controller::getFloat($row['net_amount'])?>
				</td>
				
				<?php
					$amount = ($row['hour'] * $row['net_amount'])
				?>
				
				<td style="text-align:center;">
					<?= Controller::getFloat($amount) ?>
				</td>
			</tr>
		
<?php
			}
		}
?>
			<tr>
				<td style="text-align:left;" colspan="6">
					<b>Total</b>
				</td>
				<td style="text-align:center;">
					<b><?= Controller::getFloat($total) ?></b>
				</td>
			</tr>
	<?php
		exit;
	?>
		</table>