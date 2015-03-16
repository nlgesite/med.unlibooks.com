
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
				<i>Monthly Expenses Report</i>
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
					Account Code
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;"> 
					Account Name
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(37, 181, 239); padding:3px; color:#fff; text-align:center;">
					Amount
				</th>
			</tr>
		<?php		
			$i = 1;
			$total = 0;
			$total_journal = 0;
			
			if($this->data){
				foreach($this->data as $row) {
				
				$total += $row->expense;
		?>		
			<?php
			if($row->expense != 0){
			?>
				<tr>
					<td style="text-align:center;">
						<?= $row->accountNum;?>
					</td>
					<td style="text-align:center;">
						<?= $row->accontName;?>
					</td>
					<td style="text-align:center;">
						<?= Controller::getFloat($row->expense) ?>
					</td>
				</tr>
		<?php	
					}
				}
			}
		?>
			<tr>
				<td colspan="2" style="text-align:left;">
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