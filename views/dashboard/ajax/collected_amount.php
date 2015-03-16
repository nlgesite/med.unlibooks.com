<style>
	.pieCollectedAmt{
		margin-left: -59px;
		width: 348px;
		height: 216px;
	}
</style>

<div class="innerholder">
	<div class="boxes2">
		<div class="box3">
			<div class="containers">
				<div align="center" class="ex2014" style="font-family:Arial;font-size:18px;margin-top:20px;"><strong>Monthly Collected Amount - <?php echo date("F Y") ?></strong></div>
				<img src="<?=URL?>libs/chart/images/collected_<?= $this->orgId ?>.png" style="margin-left:9px;">
				<div style="margin-top: 10px;margin-left: 67px; float:left;">
				
				</div>
			</div>
		</div>
			<div style="font-size:16px;font-family:Arial;margin-left:8px;">
				<b>Collected Amount</b>
			</div>
			<div class="colexp">
				<table class="tblColAmcollect">
					<tr>
						<th style="text-align:left;">HMO Account</th>
						<th style="text-align:left;">HMO Partner</th>
						<th style="text-align:right;">Amount</th>
					</tr>
				<?php 
					$total = 0;
					$total2 = 0;
					$count = 1;
					foreach($this->collectedAmount as $each){
						$total += $each->amountReceived;
						if($count < 6){
				?>
					<tr>
						<td><?= $each->hmoAccount ?></td>
						<td><?= $each->hmoName ?></td>
						<td style="text-align:right;"><?= Controller::getFloat($each->amountReceived) ?></td>
					</tr>
				<?php
						} else {
							$total2 += $each->amountReceived;
						}
				?>
				<?php
					}
					if(count($this->collectedAmount) > 5){
				?>
					<tr>
						<td colspan="2">Other's</td>
						<td style="text-align:right;"><?= Controller::getFloat($total2) ?></td>
					</tr>
				<?php
					}
				?>
				</table>
                        </div><div class="clear"></div>
			<div style="padding:0px;font-size:15px;width:230px;margin-left:7px;font-family:Arial;">
				<strong>
					Total Amount  - &#8369;<?= Controller::getFloat($total) ?>
				</strong>
			</div>
		</div>
	</div>
</div>