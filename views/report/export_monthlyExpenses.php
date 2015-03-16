<?php
	$data = $this->exportExpenses;
	$journal = $this->exportJournal;
	
	header('Content-type: application/excel');                                  
	header('Content-Disposition: attachment; filename="monthly_expense_report.xls"');
		
		$i = 1;
		$total = 0;
		$total_journal = 0;
		$flag = false;
	
			echo "\t";
			echo 'Account Code';
			echo "\t";
			echo 'Account Name';
			echo "\t";
			echo 'Amount';
			echo "\r\n"; 
			
			if($data){
			foreach($data as $row) {
				$total_journal += $row->total;
				echo "\t";
				echo $row->accountNum;
				echo "\t";
				echo $row->accontName;
				echo "\t";
				echo $row->total;
				echo "\r\n";
			}
		}
			
		$journal_total = 0;
		if($journal){
			foreach($journal as $row2){
				$journal_total += $row2->total;
				
				echo "\t";
				echo $row2->accountNum;
				echo "\t";
				echo $row2->accontName;
				echo "\t";
				echo $row2->total;
				echo "\r\n";
				
			}
		}
		
		$total = $total_journal + $journal_total;
		
			echo "\t";
			echo 'Total';
			echo "\t";
			echo '';
			echo "\t";
			echo $total;
			echo "\r\n";
		
		exit;
?>


					<div class="hmoDivider"></div>	
					<div class="tblShowReport_div hidden">
						<div class="fromReg">
							<div style="font-size:17px;">
								<?= $org->orgName ?>
							</div>
							<div>
								<?= $info->address ?>
							</div>
							<div>
								VAT Reg. TIN: <?= $info->tinNum ?>
							</div>
							<br/>
							<div>
								<i>Monthly Expenses Report</i>
							</div>
							<div>
								<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
								<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
							</div>
						</div>
						<table class="tblShowReport">
							<tr>
								<th>Account Code</th>
								<th>Account Name</th>
								<th style="text-align:right;">Amount</th>
							</tr>
							<?php
							$report = $this->getMonthlyExpense;
							$total = 0;
							$total_journal = 0;
							if(isset($report) && !empty($report)){
								foreach ($report as $each){
									$total_journal += $each->total;
								?>
								<tr>
									<td style="text-align:left;"><?= $each->accountNum?></td>
									<td style="text-align:left;"><?= $each->accontName?></td>
									<td style="text-align:right;"><?= Controller::getFloat($each->total)?></td>
								</tr>
								
							<?php	
								
								}
							?>
							<?php
								$journaltot = 0;
								$reportJournal = $this->getJournalLine;
								if(isset($reportJournal) && !empty($reportJournal)){
									foreach($reportJournal as $journal){
									$journaltot += $journal->total;
								?>
										<tr>
											<td style="text-align:left;"><?= $journal->accountNum?></td>
											<td style="text-align:left;"><?= $journal->accontName?></td>
											<td style="text-align:right;"><?= COntroller::getFloat($journal->total) ?></td>
										</tr>
							<?php
									}
								}
								
								// $total_journal = $journaltot;
								$total = $journaltot + $total_journal;
							?>
							
								<tr>
									<td style="text-align:left;"><b>Total</b></td>
									<td></td>
									<td style="text-align:right;"><b><?= Controller::getFloat($total) ?></b></td>
								</tr>
							<?php
							}
							?>
						</table>
					</div>