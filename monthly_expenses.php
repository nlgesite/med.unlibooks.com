<style>
.monthlyExpensesCont{
	width:100%;
	margin:0;
	padding:0;
	font-family:Arial;
	font-size:12px;
}
.monthlyExpensesHolder{
	width:980px;
	border:1px solid gray;
	margin:auto;
	margin-left:200px
}
.expenseDiv{
	text-align:center;
}
.tblExpense{
	margin-left:260px;
	margin-top:50px;
	font-family:Arial;
	font-size:12px;
}
.tblShowReport{
	border-collapse:collapse;
	margin-top:30px;
	width:100%;
	font-family:Arial;
	font-size:12px;
}
.tblShowReport tr td{
	border:1px solid #000;
	text-align:center;
}
.tblShowReport th{
	border:1px solid #000;
	font-size:14px;
	font-weight:bold;
}
.dateReport{
	width:173px;
}
</style>
<html>
	<head>
	</head>
	<body>
		<div class="monthlyExpensesCont">
			<div class="monthlyExpensesHolder">
				<div class="expenseDiv">
					<div style="font-size:16px;font-weight:bold;padding-top:10px;">
						MONTHLY EXPENSE
					</div>
					<table class="tblExpense">
						<tr>
							<td>
								Parameter:
							</td>
							<td>
								From Date:
							</td>
							<td>
								<input type="date" class="dateReport">
							</td>
							<td>
								To Date:
							</td>
							<td>
								<input type="date" class="dateReport">
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
								Vendor:
							</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
								Account Name:
							</td>
							<td>
								<input type="text">
							</td>
						</tr>
					</table>
					<table class="tblShowReport">
						<tr>
							<th>Date</th>
							<th>Expense</th>
							<th>Ref. No</th>
							<th>Vendor Name</th>
							<th>Account Name</th>
							<th>Memo</th>
							<th>Amount</th>
						</tr>
						<tr>
							<td>
							11111
							</td>
							<td>
							2222222
							</td>
							<td>
							333333333
							</td>
							<td>
							44444
							</td>
							<td>
							5555555
							</td>
							<td>
							666666
							</td>
							<td>
							7777777
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>