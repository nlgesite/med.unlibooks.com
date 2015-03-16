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
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Invoice Date
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;"> 
					Invoice No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					HMO Partner
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Patient Name
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Status
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
				if($row->grandTotal != 0){
				// $total = $total + $row->grandTotal;
				$total = ($row->status == 'reversed'? $total - Controller::removeComma($row->grandTotal) : $total + Controller::removeComma($row->grandTotal));
?>
			<tr>
				<td style="text-align:center;">
					<?= $row->dateIssued;?>
				</td>
				<td style="text-align:center;">
					<?= $row->invoiceNumber;?>
				</td>
				<td style="text-align:center;">
					<?= $row->hmoName;?>
				</td>
				<td style="text-align:center;">
					<?= $row->clientName;?>
				</td>
				<td style="text-align:center;">
					<?= $row->status;?>
				</td>
				<td style="text-align:center;">
					<?= ($row->status == 'reversed' ? '(' . number_format((float) $row->grandTotal ,2) . ')' : (number_format((float) $row->grandTotal ,2 ))) ?>
				</td>
			</tr>
<?php
			}
			}
			
?>
			<tr>
				<td style="text-align:left;" colspan="5">
					<b>Total</b>
				</td>
				<td style="text-align:center;">
					<b><?= number_format((float) $total,2)?></b>
				</td>
			</tr>
<?php		
			}
?>
		</table>
		</div>