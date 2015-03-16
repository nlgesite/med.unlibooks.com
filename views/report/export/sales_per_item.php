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
				<i>Sales per Item</i>
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
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Date
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;"> 
					Invoice No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Item Code
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Item Description
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Quantity
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Unit Price
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Amount
				</th>
			</tr>
		<?php		
		$i = 1;
		$total = 0;
		if($this->data){
			foreach($this->data as $row) {
				$total = $total + $row->netAmount;
		?>
				<tr>
					<td style="text-align:center;">
						<?= $row->dateCreated;?>
					</td>
					<td style="text-align:center;">
						<?= $row->invoiceNumber;?>
					</td>
					<td style="text-align:center;">
						<?= $row->itemCode;?>
					</td>
					<td style="text-align:center;">
						<?= $row->description;?>
					</td>
					<td style="text-align:center;">
						<?= $row->quantity;?>
					</td>
					<td style="text-align:center;">
						<?= $row->unitCost;?>
					</td>
					<td style="text-align:center;">
						<?= Controller::getFloat($row->netAmount) ?>
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
		</div>