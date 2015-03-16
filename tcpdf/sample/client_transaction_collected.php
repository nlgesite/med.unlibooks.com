<?php
	$cl = 'collected';
?>

<style>
.link-selected{
	background-color: rgba(128, 128, 128, 0.06) !important;
	border: none !important;
	color: black !important;
}
.invoiceHolderCNW{
	width: 100%;
	margin-top: 40px;
}	
.nif1{
	width: 810px;
	background-color: c8c8c8;
	margin: auto;
	border-radius: 5px;
	padding-top: 10px;
	padding-bottom: 10px;
}
#new1{
	font-family: Calibri;
	margin-left: 10px;
	font-weight: none;
	background-color: white;
	width: 790px;
	font-size: 12px;
}
.close1{
	background-color: gray;
	color: white;
	border: none;
	border-radius: 2px;
	font-family: Cambria;
	font-style: bold;
	font-size: 13px;
	height: 25px;
	margin-left:771px;
}
.TitleTransaction{
	padding-top: 5px;
	padding-left: 5px;
	font-size: 16px;
	font-style: italic;
	font-family: calibri;
	background-color: white;
}
.link{
	margin-top: 25px;
	background-color: white;
	height: 25px;
	margin-left: 3px;
}
.LinkTransaction{
	text-decoration: none;
	font-size: 12px;
	font-family: calibri;
	font-style: normal;
	padding: 7px 20px 7px 20px;
	background-color: rgba(83, 182, 17, 0.62);
	margin-left: -3px;
	color: white;
	border: none;
}
.LinkTransaction:hover{
	background-color: rgba(128, 128, 128, 0.06);
	border: none;
	color: black;
}
.dateFormContainer{
	float: left;
	margin-left: 319px;
	margin-top: -24px;
}
.InputTypeDate{
	width: 120px;
	height: 21px;
	font-size: 12px;
	font-family: calibri;
	border: 1px solid rgba(0, 128, 0, 0.44);
}
.dateFrom{
	margin-top: -17px;
	margin-left: 72px;
	font-size: 12px;
	font-weight: normal;
	font-style: none;
	font-family: calibri;
}
.dateTo{
	margin-left:210;
	margin-top: -18;
}
.dateTo2{
	margin-left: 241;
	margin-top: -17px;
}
.TextForm{
	font-size: 12px;
	font-weight: normal;
	font-style: normal;
	font-family: calibri;
}
.blank{
	hieght: 7px;
	width: 790px;
	background-color: rgba(128, 128, 128, 0.06);
	margin-top: -4px;
	padding-bottom: 60px;
}
.tableTransaction{
	padding-top: 10px;
	border-collapse: collapse;
	width: 100%;
	padding-bottom: 50px;
}
.tableTransactionheader{
	background-color: #55C768;
	color: white;
	font-size: 13px;
	font-family: calibri;
	font-weight: bold;
	
}
.Blank2{
	hieght: 7px;
	width: 790px;
	background-color: rgba(128, 128, 128, 0.06);
}
.tableTransaction, th, td{
	text-align: left;
	padding: 5px;
}
.tableTransaction,td{
	border-bottom: 1px solid c8c8c8;
	font-size: 12px;
	font-family: calibri;
}
.lineTransac{
	margin-top: 130;
	border-top: none;
	border-bottom: 2px solid rgba(128, 128, 128, 0.25);
}
.totalAmount{
	border-left: 1px solid black;
	float: right;
	margin-right: 113px;
	font-size: 14px;
	font-family: calibri;
}
.amountText{
	width: 100px;
	border: none;
	background-color: rgba(128, 128, 128, 0);
	font-size: 14px;
	font-family: calibri;
	text-align: right;
}
.inputTotal{
	float: right;
	margin-right: -203px;
	margin-top: -4px;
}

.tableTransaction tr td:nth-child(6){
	text-align: right;
}
.tableTransaction tr th:nth-child(6){
	text-align: right;
}
.close{
	float: right;
	margin-top: -29px;
	margin-right: 10px;
}
.close2{
	border-radius: 5px;
	width: 62px;
	text-align: center;
	padding: 2px 5px 2px 5px;
	color: white;
	background-color: rgba(72, 168, 9, 0.66);
	border: none;
}
.tableTransaction a{
	color: blue;
}
</style>

<div class="invoiceHolderCNW">
<form class="nif1">
	<div id="new1">
		<div class="TitleTransaction">Client Transactions</div>
		<br>
		<div class="link">
		<a href="/unlibooks/sample/client_transaction_invoices.php" class="LinkTransaction <?php echo ($cl=='invoice')? 'link-selected' :''  ?>">Invoices</a>
		<a href="/unlibooks/sample/client_transaction_collected.php" class="LinkTransaction <?php echo ($cl=='collected')? 'link-selected' :''  ?>">Collected</a>
		</div>
		<div class="dateFormContainer">
			<div class="TextForm">Date From:</div>
			<div class="dateFrom"><input type="date" class="InputTypeDate TextForm"></div>
			<div class="dateTo TextForm">To:</div>
			<div class="dateTo2"><input type="date" class="InputTypeDate TextForm"></div>
		</div>
		
	
		<div class="blank">
			<br>
				<table class="tableTransaction">
					<tr class="tableTransactionheader">
						<th>Client Account</th>
						<th>Client Name</th>
						<th>Payment No.</th>
						<th>Payment Date</th>
						<th>Invoice No.</th>
						<th>Amount Collected</th>
					</tr>
					<tr class="tableTransactionChild">
						<td>C_00001</td>
						<td>Juan Cruz</td>
						<td><a href>P_000001</a></td>
						<td>7/22/2014</td>
						<td><a href>000001</a></td>
						<td>2,000.00</td>
					</tr>
					<tr class="">
						<td>C_00001</td>
						<td>Juan Cruz</td>
						<td><a href>P_000002</a></td>
						<td>7/22/2014</td>
						<td><a href>000002</a></td>
						<td>2,000.00</td>
					</tr>
					<tr class="">
						<td>C_00001</td>
						<td>Juan Cruz</td>
						<td><a href>P_000003</a></td>
						<td>7/22/2014</td>
						<td><a href>000002</a></td>
						<td>2,000.00</td>
					</tr>
					
					
				</table>
				<hr class="lineTransac">
				<div class="totalAmount">Total Invoice Amount</div>
				<div class="inputTotal"><input type="text" readonly="readonly" class="amountText" value="4,000.00"></div>
		</div>
				<div class="close"><input type="button" value="Close" class="close2"></div>

	</div>
</form>

</div>