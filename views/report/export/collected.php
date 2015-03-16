	
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
				<i>Collected Report</i>
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
					Payment Date
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;"> 
					Invoice No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;"> 
					Collected No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					HMO Partner
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Patient Name
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					MOP
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Ref. No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Status
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Amount
				</th>
			</tr>
			<?php
			
			
			$i = 1;
			$total = 0;
			
			if($this->data){
				foreach($this->data as $row) {
					// $total = $total + $row->amount;
					$total = ($row->status == 'reversed' ? $total - Controller::removeComma($row->amount)	: $total + Controller::removeComma($row->amount)) ;
			?>
				<tr>
					<td style="text-align:center;">
						<?= $row->trans_date;?>
					</td>
					<td style="text-align:center;">
						<?= $row->invoiceNumber;?>
					</td>
					<td style="text-align:center;">
						<?= $row->col_num;?>
					</td>
					<td style="text-align:center;">
						<?= $row->hmoName;?>
					</td>
					<td style="text-align:center;">
						<?= $row->clientName;?>
					</td>
					<td style="text-align:center;">
						<?= $row->mop;?>
					</td>
					<td style="text-align:center;">
						<?= $row->refNum;?>
					</td>
					<td style="text-align:center;">
						<?= $row->status?>
					</td>
					<td style="text-align:center;">
						<?= ($row->status == 'reversed' ? '(' . Controller::getFloat($row->amount) . ')' : Controller::getFloat($row->amount)) ?>
					</td>
				</tr>
			<?php
				}
			}
			?>
			
			<tr>
				<td style="text-align:left;" colspan="8">
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