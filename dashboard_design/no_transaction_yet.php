<style>
.ciContcollect{
	width:100%;
	margin:0;
	padding:0;
}
.ciHoldercollect{
	width:613px;
	border:1px solid #c8c8c8;
	margin:auto;
	padding:29px 11px;
}
.leftDivcollect{
	width:195px;
	font-family:Arial;
	font-size:12px;
	margin-left:5px;
	margin-top:5px;
}
.tblColAmcollect{
	font-family:Arial;
	font-size:11px;
	border-collapse:collapse;
	margin-top:21px;
	margin-left:5px;
	width:100%;
}
.tblColAmcollect tr td{
	padding:5px;
	border:1px solid #c8c8c8;
	background:rgb(250, 223, 200);
}
.tblColAmcollect th{
	padding:5px;
	border:1px solid #c8c8c8;
	background:rgb(252, 171, 104);
} 
.colAmDivcollect{
	border: 1px solid gray;
	width: 323px;
	margin-top: -269px;
	margin-left: 232px;
	font-family: Arial;
	font-size: 12px;
	padding: 26px;
}
.colAm2014collect{
	font-weight:bold;
	font-size:18px;
	font-family:Arial;
	text-align:center;
}
.bboxBcollect{
	width:7px;
	height:7px;
	background:rgb(29, 110, 218);
	border:1px solid #c8c8c8;
}
.bboxRcollect{
	width:7px;
	height:7px;
	background:red;
	border:1px solid #c8c8c8;
}
.bboxGcollect{
	width:7px;
	height:7px;
	background:rgb(136, 195, 50);
	border:1px solid #c8c8c8;
}
.bboxVcollect{
	width:7px;
	height:7px;
	background:rgb(145, 46, 224);
	border:1px solid #c8c8c8;
}
.bboxSBcollect{
	width:7px;
	height:7px;
	background:rgb(26, 153, 203);
	border:1px solid #c8c8c8;
}
.bboxOcollect{
	width:7px;
	height:7px;
	background:rgb(255, 128, 4);
	border:1px solid #c8c8c8;
}
.cABoxcollect{
	margin-top:16px;
}
.cABoxTextcollect{
	margin-top:11px;
}
.popContcollect{
	width: 627px;
	height: 337px;
	border-radius: 60px;
	background: rgb(244, 241, 241);
	opacity: .8;
	margin-top: -313px;
	position: absolute;
	margin-left: -6px;
}
.cibDivcollect{
	width: 336;
	height: 195;
	background:rgb(211, 231, 187);
	position: absolute;
	margin-top: -235px;
	margin-left: 159px;
}
</style>
<html>
	<head>
	</head>
	<body>
		<div class="ciContcollect">
			<div class="ciHoldercollect">
				<div class="leftDivcollect">
					<div style="font-size:16px;">
						<b>Collected Amount</b>
					</div>
					<div>
						<table class="tblColAmcollect">
							<tr>
								<th style="text-align:left;">HMO Partner</th>
								<th style="text-align:right;">Amount</th>
							</tr>
							<tr>
								<td>Maxicare</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>	
							<tr>	
								<td>Asian Life</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>	
							<tr>	
								<td>Medasia</td>
								<td style="text-align:right;">15,000.00</td>
							</tr>
							<tr>	
								<td>Medicard</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>
							<tr>	
								<td>Intellicare</td>
								<td style="text-align:right;">5,000.00</td>
							</tr>
							<tr>	
								<td>Value Care</td>
								<td style="text-align:right;">10,000.00</td>
							</tr>
						</table>
					</div >
					<div style="margin-top:40px;font-weight:bold;font-size:15px;">Total Amount  -  77,000.00</div>
				</div>
				<div class="colAmDivcollect">
					<div class="colAm2014collect">Monthly Collected Amount 2014</div>
					<div style="margin-top:10px;">
						<img src="/unlibooks/dashboard_design/public/img/collected_amount.png">
					</div>
					<div style="margin-left: 233px;margin-top: -181px;">
						<div class="cABoxcollect bboxBcollect"></div>
						<div class="cABoxcollect bboxRcollect"></div>
						<div class="cABoxcollect bboxGcollect"></div>
						<div class="cABoxcollect bboxVcollect"></div>
						<div class="cABoxcollect bboxSBcollect"></div>
						<div class="cABoxcollect bboxOcollect"></div>
					</div>
					<div style="margin-left: 250px;margin-top: -147px;">
						<div class="cABoxTextcollect">Maxicare</div>
						<div class="cABoxTextcollect">Asian Life</div>
						<div class="cABoxTextcollect">Medasia</div>
						<div class="cABoxTextcollect">Medicard</div>
						<div class="cABoxTextcollect">Intellicare</div>
						<div class="cABoxTextcollect">Value Care</div>
					</div>
					<div style="height:20px;"></div>
				</div>	
				<div class="popContcollect"></div>
				<div class="cibDivcollect">
					<div style="font-family:Arial;font-size:26px;margin-top:78px;margin-left:59px;">No Transaction Yet</div>
				</div>
			</div>
		</div>
	</body>
</html>