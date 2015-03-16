		<div style="font-size: 20px; font-family: verdana; margin-top: 10px; font-weight: bold; color: rgba(0, 0, 0, 0.67); text-align:center;">	Patient List
		</div>
		<div style="text-align: center !important; font-family:Verdana;font-size:12px;">
			<?= date('F d,Y',strtotime($_GET['from'])) ?> - <?= date('F d,Y',strtotime($_GET['to'])) ?>
		</div>
		
		<div style="text-align:center;">
			
		<table style="text-align:center; border-collapse:collapse; margin-top:50px; font-family:Verdana; font-size:12px; width:50%;">
			<tr>
			</tr>
			<tr>
			</tr>
			
			<tr>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Date Created
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;"> 
					Patient Code
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Patient Name
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Tin No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Address
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Email Address
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Phone No.
				</th>
				<th style="border:1px solid #fff; font-size:14px; font-weight:bold; background:rgb(63, 176, 63); padding:3px; color:#fff; text-align:center;">
					Active Account
				</th>
			</tr>
			
		<?php
		$i = 1;
		$total = 0;
		if($this->data){
			foreach($this->data as $row) {
		?>
				
			<tr>
				<td style="text-align:center;">
					<?= $row->dateCreated;?>
				</td>
				<td style="text-align:center;">
					<?= $row->clientAccount;?>
				</td>
				<td style="text-align:center;">
					<?= $row->clientName;?>
				</td>
				<td style="text-align:center;">
					<?= $row->tinNum;?>
				</td>
				<td style="text-align:center;">
					<?= $row->address;?>
				</td>
				<td style="text-align:center;">
					<?= $row->emailAddress;?>
				</td>
				<td style="text-align:center;">
					<?= $row->phoneNumber;?>
				</td>
				<td style="text-align:center;">
					<?= $row->active?>
				</td>
			</tr>
		<?php
			}
		}
			
		
		exit;
		?>
		</table>
		</div>