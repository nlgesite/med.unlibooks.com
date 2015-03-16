<style>
.ciContexp{
	width:100%;
	margin:0;
	padding:0;
	

}
.ciHolderexp{
	width:613px;
	border:1px solid #c8c8c8;
	margin:auto;
	padding:29px 11px;
}
.leftDivexp{
	
	width:195px;
	font-family:Arial;
	font-size:12px;
	margin-left:5px;
	margin-top:5px;
}
.tblExpenseexp{
	font-family:Arial;
	font-size:11px;
	border-collapse:collapse;
	margin-top:21px;
	margin-left:5px;
	width:100%;
}
.tblExpenseexp tr td{
	padding:5px;
	border:1px solid #c8c8c8;
	background:#e8e8e8;
}
.tblExpenseexp th{
	padding:5px;
	border:1px solid #c8c8c8;
	background:rgb(129, 160, 75);
} 
.expensesDivexp{
	border: 1px solid gray;
	width: 323px;
	margin-top: -289px;
	margin-left: 225px;
	font-family: Arial;
	font-size: 12px;
	padding: 26px;

}
.ex2014exp{
	font-weight:bold;
	font-size:18px;
	font-family:Arial;
	text-align:center;
	margin-top:10px;
}
.boxBexp{
	width:7px;
	height:7px;
	background:blue;
	border:1px solid #c8c8c8;
}
.boxVexp{
	width:7px;
	height:7px;
	background:rgb(145, 46, 224);
	border:1px solid #c8c8c8;
}
.boxSexp{
	width:7px;
	height:7px;
	background:rgb(194, 187, 187);
	border:1px solid #c8c8c8;
}
.boxBrexp{
	width:7px;
	height:7px;
	background:brown;
	border:1px solid #c8c8c8;
}
.boxSBexp{
	width:7px;
	height:7px;
	background:rgb(26, 153, 203);
	border:1px solid #c8c8c8;
}
.boxYGexp{
	width:7px;
	height:7px;
	background:rgb(136, 195, 50);
	border:1px solid #c8c8c8;
}
.boxOexp{
	width:7px;
	height:7px;
	background:rgb(255, 128, 4);
	border:1px solid #c8c8c8;
}
.bboxexp{
	margin-top:12px;
}
.textline1{
	margin-top:6px;
}
.popContexp{
	width: 627px;
	height: 355px;
	border-radius: 60px;
	background: rgb(244, 241, 241);
	opacity: .8;
	margin-top: -331px;
	position: absolute;
	margin-left: -6px;
}
.cibDivexp{
	width: 336;
	height: 195;
	background:rgb(211, 231, 187);
	position: absolute;
	margin-top: -235px;
	margin-left: 159px;
}
.startCreateInvexp{
	width:157px;
	height:45px;
	color:#fff;
	background:rgb(129, 160, 75);
	border:none;
}
</style>
<html>
	<head>
	</head>
	<body>
		<div class="ciContexp">
			<div class="ciHolderexp">
				<div class="leftDivexp">
					<div style="font-size:16px;">
						<b>Expenses</b>
					</div>
					<div>
						<table class="tblExpenseexp">
							<tr>
								<th style="text-align:left;">GL Account</th>
								<th style="text-align:right;">Amount</th>
							</tr>
							<tr>
								<td>Water</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>	
							<tr>	
								<td>Transportation</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>	
							<tr>	
								<td>Supplies</td>
								<td style="text-align:right;">15,000.00</td>
							</tr>
							<tr>	
								<td>Meals</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>
							<tr>	
								<td>Fuel</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>
							<tr>	
								<td>Electricity</td>
								<td style="text-align:right;">10,000.00</td>
							</tr>
							<tr>	
								<td>Communication</td>
								<td style="text-align:right;">10,000.00</td>
							</tr>
						</table>
					</div >
					<div style="margin-top:40px;font-weight:bold;font-size:15px;">Total Amount  -  55,000.00</div>
				</div>
				<div class="expensesDivexp">
					<div class="ex2014">Monthly Sales 2014</div>
					<div style="margin-left:20px;">
						<div class="bboxexp boxBexp"></div>
						<div class="bboxexp boxVexp"></div>
						<div class="bboxexp boxSexp"></div>
					</div>
					<div style="margin-left:36px;margin-top:-58px;">
						<div class="textline1exp">Water</div>
						<div class="textline1exp">Meals</div>
						<div class="textline1exp">Communication</div>
					</div>
					<div style="margin-left:135px;margin-top:-64px;">
						<div class="bboxexp boxBrexp"></div>
						<div class="bboxexp boxSBexp"></div>
					</div>
					<div style="margin-left:150px;margin-top:-38px;">
						<div class="textline1exp">Transportation</div>
						<div class="textline1exp">Fuel</div>
					</div>
					<div style="margin-left:246px;margin-top:-44px;">
						<div class="bboxexp boxYGexp"></div>
						<div class="bboxexp boxOexp"></div>
					</div>
					<div style="margin-left:262px;margin-top:-38px;">
						<div class="textline1exp">Supplies</div>
						<div class="textline1exp">Electricity</div>
					</div>
					<div style="margin-top: 52px;margin-left: 44px;">
						<img src="/unlibooks/dashboard_design/public/img/monthly_expenses.png">
					</div>
				</div>
				<div class="popContexp"></div>
			<div class="cibDivexp">
				<div style="font-family:Arial;font-size:26px;margin-top:40px;margin-left:80px;">Record Expense</div>
				<div style="margin-left:91px;margin-top:26px;"><input type="button" value="Start Here" class="startCreateInvexp"></div>
			</div>
			</div>
			
		</div>
	</body>	
</html>	