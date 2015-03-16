<style>
 body{
        overflow:hidden;
    }
	.popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }

.evCont{
	width:100%;
	margin:auto;
	padding:0;
	margin-bottom:30px;
}
.evHolder{
	width:800px;
	border:1px solid #c8c8c8;
	height:auto!important;
	margin:auto;
	font-family:Verdana;
	font-size:12px;
	background: #fff;
	padding-bottom:20px;
	margin-top:30px;
}
li{
	list-style-type:none;
}
.companyInfo li{
	padding-top:5px;
}
.xButton{
	width: 20px;
	background: gray;
	border: none;
	height: 25px;
	color: #fff;
	font-weight: bold;
}
.buttonRight{
	background: gray;
	border: none;
	color: #fff;
	padding:4px 13px;
	border-radius: 3px;
	font-weight: bold;
	font-size: 12px;
}
.inpEV{
	border-bottom:1px solid #000!important;
	border:none;
	outline-style: none;
}
.inpEV2{
	width:300px;
	outline-style: none;
}
.particularsTA{
	width: 734px;
	height: 83px;
	padding: 7px;
	border: 1px solid #000;
	font-size:12px;
	font-family:Verdana;
	padding-left:5px;
}
.tblAcctExpense{
	border-collapse:collapse;
	font-size:12px;
	font-weight:Verdana;
	width:734px;
	margin-top:20px;
}
.tblAcctExpense tr,td{
	border-right:1px solid #000;
	border-left:1px solid #000;
	padding:10px;
}
.tblAcctExpense th{
	border:1px solid #000;
	padding:6px;
	font-size:13px;
	background:rgb(170, 169, 169);
}
.amountRight{
	text-align:right;
}
.totalTD{
	padding:10px;
	border:1px solid #000;
}
.ulSignatory{
	display:inline-block;
	margin-left: 50px;
	margin-top:30px;
}
.img2 {
	position: absolute;
	margin-left: 28px;
	height: 17px;
	z-index: -1;
	top: 209px;
}
</style>
<?php
	$expense = $this->getExpense;
	$vendor = $this->getVendor;
	$trialBalance = $this->getTrialBalance;
	$orgInfo = $this->orgInfo;
	$org = $this->org;
?>
<div class="evCont">
	<div class="evHolder">
		<div style="float:right;">
			<input type="button" class="xButton" value="X">
		</div>
		<div style="text-align:center;margin-top:5px;">
			<ul class="companyInfo">
				<li><?= $org->orgName ?></li>
				<li><?= $orgInfo->tinNum ?></li>
				<li><?= $orgInfo->address ?></li>
				<li><?= $orgInfo->phoneNum ?></li>
			</ul>
			<ul>
				<li style="font-size:22px;">AP VOUCHER</li>
			</ul>
		</div>
		<div style="float:right;margin-top:-99px;margin-right:40px;" class="voucher" onClick="window.print()">
			<input type="button" value="PDF" class="buttonRight">
			<input type="button" value="Print" class="buttonRight">
		</div>
		<div style="clear:both;"></div>
		<div style="float:right;margin-right:25px;">
			<ul>
				<li>Expense No.: <input type="text" class="inpEV" value="<?= $expense->expenseNumber ?>"></li>
				<li>Date: <input type="text" class="inpEV" style="margin-left:49px;" value="<?= date('M. d, Y',strtotime($expense->dateModified)) ?>"></li>
				<li>Ref No.: <input type="text" class="inpEV" style="margin-left:34px;"
					value="<?= $expense->referenceNumber ?>"></li>
			</ul>
		</div>
		<div style="clear:both;"></div>
		<div>
			<ul>
				<li>Payee Name: <input type="text" class="inpEV inpEV2" value="<?= ucwords($vendor->name) ?>"></li>
			</ul>
		</div>
		<div style="margin-left:40px;margin-top:15px;">
			Particulars:
			<p class="particularsTA">
				<?= $expense->particular ?>
			</p>
		</div>
		<div style="margin-left:40px;">
			<table class="tblAcctExpense">
				<tr>
					<th style="text-align:left;">Account Code</th>
					<th style="text-align:left;">Account Title</th>
					<th class="amountRight">Debit</th>
					<th class="amountRight">Credit</th>
				</tr>
				<?php
					$debit = 0;
					$credit = 0;
					
					if($trialBalance){
						foreach($trialBalance as $each){
							$debit += $each['debit'];
							$credit += $each['credit'];
				?>
				
					<tr>
						<td><?= $each['account_num'] ?></td>
						<td><?= $each['accont_name'] ?></td>
						<td class="amountRight"><?= Controller::getFloat($each['debit']) ?></td>
						<td class="amountRight"><?= Controller::getFloat($each['credit']) ?></td>
					</tr>
				<?php
						}
					}
				?>
				<tr>
					<td class="totalTD" style="border-right:none!important;"></td>
					<td class="totalTD amountRight" style="border-left:none!important;">Total</td>
					<td class="totalTD amountRight" class="amountRight"><b><?= Controller::getFloat($debit) ?></b></td>
					<td class="totalTD amountRight" class="amountRight"><b><?= Controller::getFloat($credit) ?></b></td>
				</tr>
			</table>
		</div>
			<div class="ulSignatory">
				<ul>
					<li><label>Prepared By:</label></li>
					<li><input type="text" class="inpEV" style="margin-top:10px;"></li>
				</ul>
			</div>	
			<div class="ulSignatory">	
				<ul>
					<li><label>Reviewed By:</label></li>
					<li><input type="text" class="inpEV" style="margin-top:10px;"></li>
				</ul>
			</div>
			<div class="ulSignatory">
				<ul>
					<li><label>Approved By:</label></li>
					<li><input type="text" class="inpEV" style="margin-top:10px;"></li>
				</ul>
			</div>
	</div>
</div>










