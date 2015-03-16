<div class="innerholder">
	<div class="boxes2">
		<div class="box3">
			<div class="containers">
				<div align="center" class="ex2014" style="margin-top: 15;font-family:Arial;font-size:18px;"><strong>Monthly Expenses - <?php echo date("F Y") ?></strong></div>
				<img src="<?=URL?>libs/chart/images/<?= $this->orgId ?>.png" style="margin-left: 10px;">
				<div style="margin-top: 10px;margin-left: 67px; float:left;">
					
				</div>
			</div>
		
	
	</div>
	<div style="font-size:16px;font-family:Arial;margin-left:8px;">
				<b>Expenses</b>
			</div>
			<div class="colexp">
				<table class="tblExpenseexp">
					<tr>
						<th style="text-align:left;" colspan="2">GL Account</th>
						<th style="text-align:right;">Amount</th>
					</tr>
				<?php 
					$total = 0;
					$total2 = 0;
					$count = 1;
					foreach($this->expenses as $each){
						$total += $each->netAmount;
						if($count < 6){
				?>
					<tr>
						<td width="12%"><?= $each->accountNum ?></td>
						<td width="20%"><?= $each->descriptionMemo ?></td>
						<td style="text-align:right;" width="1%"><?= Controller::getFloat($each->netAmount) ?></td>
					</tr>
				<?php 
						} else {
							$total2 += $each->netAmount;
						}
						$count++;
					} 
					if(count($this->expenses) > 5){
				?>
					<tr>
						<td colspan="2">Other's</td>
						<td style="text-align:right;"><?= Controller::getFloat($total2) ?></td>
					</tr>
				<?php
					}
				?>
				</table>
			
			<div style="margin-top:10px;font-size:15px;width:230px;margin-left:0px;font-family:Arial;">
				<strong>
					Total Amount  - &#8369;<?= Controller::getFloat($total) ?>
				</strong>
			</div>
			</div >
	</div>
</div>