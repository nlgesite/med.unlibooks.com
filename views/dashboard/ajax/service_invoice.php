
		<div class="innerholder">
			<div class="boxes1">
				<div class="box3">
					<div class="containers">
						<div align="center" class="ex2014" style="font-family:Arial;font-size:18px;margin-top:20px;"><strong>Sales for Year	 <?php echo date("Y") ?></strong></div>
						<img src="<?=URL?>libs/chart/images/serviceInvoice_<?= $this->orgId ?>.png" style="margin-left:9px;"> 
						<div style="margin-top: 10px;margin-left: 67px; float:left;">
						
						</div>
					</div>		
				</div>		
					<div style="font-size:16px;font-family:Arial;margin-left:5px;">
						<b>Service Invoices</b>
					</div>
						<div class="colexp">
								
							<table class="tblColAmcollect2">
								<tr>
									<th style="text-align:left;">Month</th>
									<th style="text-align:right;">Amount</th>
								</tr>
							<?php 
								$total = 0;
								$count = 1;
								foreach($this->invoiceTotal as $each){
									$total += $each->pCash;
									if($count < 10){
							?>
								<tr>
									<td><?= date('F',strtotime($each->dateIssued)) ?></td>
									<td style="text-align:right;"><?= Controller::getFloat($each->pCash) ?></td>
								</tr>
							<?php
								}
							?>
							<?php
								}
							?>				
							</table>
						
								<!--<div class="topMarMon"><strong>February</strong> &nbsp- 0.00</div>
								<div class="topMarMon"><strong>March</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- &nbsp0.00</div>
								<div class="topMarMon"><strong>April</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- 0.00</div>-->
						

						</div>
					<div style="margin-top:10px;font-size:15px;width:230px;margin-left:5px;font-family:Arial;">
						<strong>
							Total Amount   - &#8369;<?= Controller::getFloat($total)?>
						</strong>
					</div>
				</div>
		
				<div style="clear:both"></div>	
			</div>	
		</div>
