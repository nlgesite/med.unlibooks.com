<style>

.div2{
	background-color: #E1E8D3;
	right: 50%;
	margin-right: -450px;
	width: 990px;
	height: 45px;
	margin: 0 auto;
	border-radius:10px 10px 0px 0px;
	border: 0px;
}
.button_container{
	margin-left: 10px;
	width: 200px;
	text-align: center;
	height: 28px;
	margin-top: 20px;
	
}
.addpayment{
	background-color:#C8C8C8 ;
	width: 128px;
	height: 29px;
	border-radius: 5px 0px 7px 0px;
	margin-left: 5px;
	font-size: 14px;
	font-family: calibri;
	margin: auto;
	cursor: pointer;
}
.print{
	background-color:#C8C8C8 ;
	width: 128px;
	height: 29px;
	border-radius: 5px 0px 7px 0px;
	margin-left: -5px;
	font-size: 14px;
	font-family: calibri;
	cursor: pointer;
}
.edit1{
	background-color:#C8C8C8 ;
	width: 128px;
	height: 29px;
	border-radius: 5px 0px 7px 0px;
	margin-left: -5px;
	font-size: 14px;
	font-family: calibri;
	cursor: pointer;
}
.delete{
	background-color:#C8C8C8 ;
	width: 128px;
	height: 29px;
	border-radius: 5px 0px 7px 0px;
	margin-left: -5px;
	font-size: 14px;
	font-family: calibri;
	cursor: pointer;
	
}
.txtsearch{
	margin-left: 15px;
	margin-top: 6px;
	width: 21%;
	height: 30px;
	border: 1px solid #C0C0C0;
	text-align: center;
	background-image:url('/unlibooks/public/images/search2.png');
	background-repeat:no-repeat;
	background-position:left;
}	

.byn{
	font-family: Calibri;
	margin-left: 750px;
	margin-top: -25px;
	font-style: normal;
}	
.inumber{
	background-color:#C8C8C8 ;
	margin-left: 10px;
	width: 150px;
	height: 29px;
	border:none;
	border-radius: 5px 0px 7px 0px;
	font-size:12px;
	font-weight:bold;
}

.head_collect{
	font-family: Calibri;
	letter-spacing:1px;
}
.hc{
	margin-left: 5px;
}
.collect_table{
	margin-top: 10px;
	
	margin-left: 10px;
	width: 98%;
	font-family: Calibri;
	font-size:15px;
}
.cbox{
	text-align: center;
	border: none;
	background-color: white;
}
.payno{
	color: blue;
	border:none;
	margin-top: 200px;
	padding-left: 0px;
	text-align: center;
	background-color:#F5F5F5;
	border-collapse: collapse;
}
.payno:hover{
	cursor: pointer;
}
.date{
	text-align: center;
	background-color:#F5F5F5;
	border-collapse: collapse;
}
.ray1{
	text-align: center;
	background-color:#F5F5F5;
	border-collapse: collapse;
}

.tamt{
	text-align: center;
	background-color:#F5F5F5;
	border-collapse: collapse;
}
.mop{
	text-align: center;
	background-color:#F5F5F5;
	border-collapse: collapse;
}

.table_collection{
	
	
}	
.tcollect{
	margin-left: 660px;
	margin-top: 10px;
	font-family: Tahoma;
	font-weight: bold;
	font-size: 12px;
	text-align:center;
	
}
.php{
	text-align: center;
	border:none;
	color: black;
	width: 110px;
	font-weight: bold;
	font-size:12px;
	font-family: Tahoma;
	text-transform:uppercase;
}
.by4{
	color: black;
	font-weight: normal;
	font-family: Calibri;
	font-size: 14px;
	margin-left: 10px;
}

</style>

<div class="invoiceHolder">
	<div id="new">
		<h1 class="ai">All Collections</h1>
		<hr>
	</div>
	
	<div class="div2">
			<div id="button_container">
				<input type="button" value="Add Payment" class="addpayment">
				<input type="button" value="Print" class="print">
				<input type="button" value="Edit" class="edit1">
				<input type="button" value="Delete" class="delete">
				<input type="search" placeholder="Search" class="txtsearch" > 	
				<a class="by4">By:</a>
				<select class="inumber">
					<option>Invoice Number</option>
				</select>
					
			</div>
		</div>
</div>

	
<div>
	<table class="collect_table">

		<tr class="head_collect">
			<th class="checkbox"><input type="checkbox"></th>
			<th>Payment No.</th>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Amount</th>
			<th>Method of payment</th>
		</tr>
		
		<tr class="table_collection">
			<th class="cbox"><input type="checkbox"></th>
			<td class="payno"><u><a href="/000001"></a>000001</u></td>
			<td class="date">4/14/2014</td>
			<td class="ray1">Rose Ann Yumang</td>
			<td class="tamt">1,000.00</td>
			<td class="mop">Check</td>
		</tr>
		
		<tr class="table_collection">
			<th class="cbox"><input type="checkbox"></th>
			<td class="payno"><u><a href="/000002"></a>000002</u></td>
			<td class="date">4/14/2014</td>
			<td class="ray1">Rose Ann Yumang</td>
			<td class="tamt">1,000.00</td>
			<td class="mop">Cash</td>
		</tr>
		
		<tr class="table_collection">
			<th class="cbox"><input type="checkbox"></th>
			<td class="payno"><u><a href="/000003"></a>000003</u></td>
			<td class="date">4/14/2014</td>
			<td class="ray1">Rose Ann Yumang</td>
			<td class="tamt">1,000.00</td>
			<td class="mop">Cash</td>
		</tr>
		
		<tr class="table_collection">
			<th class="cbox"><input type="checkbox"></th>
			<td class="payno"><u><a href="/000004"></a>000004</u></td>
			<td class="date">4/14/2014</td>
			<td class="ray1">Rose Ann Yumang</td>
			<td class="tamt">1,000.00</td>
			<td class="mop">Check</td>
		</tr>
	</table>
</div>
	<div class="tcollect">
		<td>Total Collections:<input type="text" value="4,000.00 Php" class="php"></td>
	</div>
</div>

	`