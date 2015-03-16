<style>
.accountContainer{
	width:100%;
}
.accountForm{
	width:800px;
	border:1px solid rgb(152, 158, 84);
	background-color:white;
	margin:auto;
	border-radius: 10px;
	padding:20px;
	padding-bottom:30px;
}
.createYourAccount{
	font-family:Comic Sans MS;
	font-size:20px;
	font-weight:bold;
	color:rgb(0,0,0);
	width: 800px;
	text-align:center;
}
.createYourAccount2{
	width: 790PX;
	margin: auto;
	border: 1px solid rgb(127,127,127);
	font-family: calibri;
	font-size: 12px;
	padding-bottom: 148px;
	box-shadow: 2px 1px 1px 0px gray;
	margin-top: 15px;
}
.userAccount{
	font-family: Comic Sans MS;
	font-size: 16px;
	font-weight: bold;
	/* float: left; */
	margin-top: -41px;
	margin-left: 90px;
}
.userAccountTable{
	margin-left: 10px;
	margin-top: 15px;
}
.userAccountTable input[type="text"]{
	margin-right: 20px;
	width: 245px;
	margin-left: 20;
	height: 30px;
	border: 1px solid rgb(191,191,191);
	margin-top: 3px;
}
.useraccountHR{
	width: 765px;
	margin-left: 9;
	margin-top: 20px;
	border-top: none;
	border-bottom: 1px solid rgb(146,208,80);
	border-left: none;
	border-right: none;
}	
.keyred{
	margin-top:10px;
}
.setup{
	margin-left: 71px;
	font-family: calibri;
	font-size: 10px;
	font-style: italic;
	margin-top: 5px;
}
.userAccountTable textarea{
	margin-right: 20px;
	width: 245px;
	margin-left: 20;
	height: 68px;
	border: 1px solid rgb(191,191,191);
	margin-top: 3px;
	mx-height:68px;
	maximum-width:245px;
}
.userAccountTable2{
	margin-left: 421px;
	margin-top: -262px;
}
.userAccountTable2 input[type="text"]{
	margin-right: 20px;
	width: 240px;
	margin-left: 20;
	height: 30px;
	border: 1px solid rgb(191,191,191);
	margin-top: 3px;
}
.browseUser{
	width: 120px;
	height: 27px;
	background-color: rgb(127,127,127);
	color: white;
	font-weight: bold;
	border: none;
	float: right;
	margin-right: 67px;
}
.proceedUser{
	background: #96bd45; /* Old browsers */
	background: -moz-linear-gradient(top, #96bd45 0%, #7d9d38 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#96bd45), color-stop(100%,#7d9d38)); 
	background: -webkit-linear-gradient(top, #96bd45 0%,#7d9d38 100%);
	background: -o-linear-gradient(top, #96bd45 0%,#7d9d38 100%); 
	background: -ms-linear-gradient(top, #96bd45 0%,#7d9d38 100%); 
	background: linear-gradient(to bottom, #96bd45 0%,#7d9d38 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='96bd45', endColorstr='#7d9d38',GradientType=0 ); 
	border: none;
	width: 120px;
	border-radius: 5px;
	height: 37px;
	float: right;
	margin-right: -160px;
	margin-top: 80px;
	color:white;
	font-family:calibri;
	font-weight:bold;
	font-size:18px;
	box-shadow: 0px 2px 3px 1px gray;
}
</style>
<div class="accountContainer">
	<div class="accountForm">
		<div class="createYourAccount">Create your account</div>
		<div class="createYourAccount2">
			<img src="/unlibooks/public/images/puppet.png">
			<div class="userAccount">User Account</div>
			
			<table class="userAccountTable">
				<tr>
					<td>Name<span style="color:red">*</span></td>
					<td><input type="text"></td>
					<td>Password<span style="color:red">*</span></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Username<span style="color:red">*</span></td>
					<td><input type="text"></td>
					<td>Confirm Password<span style="color:red">*</span></td>
					<td><input type="text"></td>
				</tr>
			</table>
			<div class="useraccountHR"></div>
			<div class="keyred"><img src="/unlibooks/public/images/keyRed.png"></div>
			<div class="userAccount"style="margin-left:71px;">Company Details</div>
			<div class="setup">This Setup will be Display on Reports</div>
			
			<table class="userAccountTable">
				<tr>
					<td>Company Name<span style="color:red">*</span></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td style="margin-top:11px;position:absolute;">Address</td>
					<td rowspan="1"><textarea></textarea></td>
				</tr>
				<tr>
					<td>Tin No.</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Business Type</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Currency</td>
					<td><input type="text"></td>
				</tr>
				
			</table>
			<table class="userAccountTable2">
				<tr>
					<td>City</td>
					<td><input type="text"><td>
				</tr>
				<tr>
					<td>Province</td>
					<td><input type="text"><td>
				</tr>
				<tr>
					<td>Postal Code</td>
					<td><input type="text"><td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text"><td>
				</tr>
				<tr>
				<td colspan="2"><div  style="margin-top:10px;">Upload your Logo here</div></td>
				</tr>
			</table>
			<input type="button" value="Browse.."class="browseUser">
			<input type="button"value="Proceed" class="proceedUser">
			
		</div>
		</div>
	</div>
</div>