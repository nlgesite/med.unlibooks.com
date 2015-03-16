<style>
.invoiceHolderCNW{
	width: 100%;
	margin-top: 40px;
}	
.nif1{
	width: 810px;
	height: 670px;
	background-color: white;
	margin: auto;
}
#new1{
	font-family: Calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
	text-shadow: 1px 1px 5px gray;
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
.ni1{
	margin-top: -15px;
	font-size: 32px;
	text-shadow:none;
}
.hrCNC{
	width:808px;
	border: 2px solid gray;
	margin-left: -21px;
	margin-top: -20px;
	border-radius: 3px;
	height: 4px;
	background-color: gray;
	
}
.cAccountCNC{
	position: absolute;
	margin-top: 12px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}
.customerNCNC{
	position: absolute;
	margin-top: 40px;
	margin-left: 154px;
	width: 248px;
	height: 27px;
	background-color: white;
	border: solid 1px #C8C8C8;
	font-size: 12px;
	font-family: calibri;
}
.tnumberCNC{
	position: absolute;
	margin-top: 73px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}
.tinNCNC{
	position: absolute;
	margin-top: 73px;
	margin-left: 154px;
	width: 248px;
	height: 27px;
	background-color: white;
	border: solid 1px #C8C8C8;
	font-size: 12px;
	font-family: calibri;
}
.eMailCNC{
	position: absolute;
	margin-top: 105px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}
.mailCNC{
	position: absolute;
	margin-top: 106px;
	margin-left: 154px;
	width: 248px;
	height: 27px;
	background-color: white;
	border: solid 1px #C8C8C8;
	font-size: 12px;
	font-family: calibri;
}
.addSCNC{
	position: absolute;
	margin-top: 138px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}
.addressCNC{
	position: absolute;
	margin-top: 140px;
	margin-left: 154px;
	font-family: Calibri;
	font-size: 14px;
	width: 248px;
	height: 70px;
	background-color: white;
	border: solid 1px #C8C8C8;
	font-size: 12px;
	font-family: calibri;
}
.phoneNCNC{
	position: absolute;
	margin-top: 218px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}
.pNoCNC{
	position: absolute;
	margin-top: 217px;
	margin-left: 154px;
	width: 100px;
	height: 27px;
	background-color: white;
	border: solid 1px #C8C8C8;
	font-size: 12px;
	font-family: calibri;
}
.faxNCNC{
	position: absolute;
	margin-top: 250px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}
.fNoCNC{
	position: absolute;
	margin-top: 251px;
	margin-left: 154px;
	width: 100px;
	height: 27px;
	background-color: white;
	border: solid 1px #C8C8C8;
	font-size: 12px;
	font-family: calibri;
}
.cAccountCNC{
	position: absolute;
	margin-top: 12px;
	margin-left: 14px;
	color:#008B8B;
	font-family: Calibri;
	font-weight: bold;
	font-size: 12px;
}

</style>

<div class="invoiceHolderCNW">
<form class="nif1">
	<div id="new1">
		<input type="button" class="close1" value="X">
		<p class="ni1">Create New Client:</p>
		<hr class="hrCNC">
	</div>
	
<div id="container_ccp">
	<table class="ca_table">
		<tr class="customer_account">
			<td class="cAccountCNC">Client Account:</td><input type="text" placeholder="&nbsp;00001" class="customerACNC">
		</tr>
		<tr>
			<td class="cNameCNC">Client Name:</td><input type="text" value="&nbsp;Item" class="customerNCNC">
		</tr>
		<tr>	
			<td class="tnumberCNC">Tin No.:</td><input type="text" value="&nbsp;111-111-111-000" class="tinNCNC">
		</tr>
		<tr>		
			<td class="eMailCNC">E-Mail:</td><input type="text" value="&nbsp;Item" class="mailCNC">
		</tr>
		<tr>		
			<td class="addSCNC">Address:</td><textarea class="addressCNC">Item</textarea>
		</tr>
		<tr>		
			<td class="phoneNCNC">Phone No.:</td><input type="text" value="&nbsp;Item" class="pNoCNC">
		</tr>
		<tr>		
			<td class="faxNCNC">Fax No.:</td><input type="text" value="&nbsp;Item" class="fNoCNC">
		</tr>
	</table>
	<table class="ccc_table">
		<tr>		
			<td><u class="ccpCNC">Client Contact Person:</u></td>
		</tr>
		<tr>		
			<td class="contactNaCNC">Contact Name:</td><input type="text" value="&nbsp;Item" class="cusNameCNC">
		</tr>
		<tr>		
			<td class="contactNoCNC">Contact No.:</td><input type="text" value="&nbsp;Item" class="cNoCNC">
		</tr>
		<tr>		
			<td class="cEmailCNC">E-Mail:</td><input type="text" value="&nbsp;Item" class="cEmCNC">
		</tr>
	</table>
</div>
<div class="second">
	<table class="acu_table">
		<tr>		
			<td><u class="asuCNC">Account Set-up:</u></td>
		</tr>
		<tr>
			<td class="modCNC">MOP:</td><select class="modICNC"><option>Check</option></select>
		</tr>
		<tr>
			<td class="vatAsuCNC">Vat:</td><select class="asuVatCNC"><option>Vatable</option></select>
		</tr>
		<tr>
			<td class="InclusiveOfVatClientText"><input type="checkbox" value="Browse.." class="InclusiveOfVatClientcheck">Inclusive of Vat</td>
		</tr>
		<tr>
			<td class="currencyCNC">Currency:</td><select class="currencySCNC"><option>PHP</option></select>
		</tr>
		<tr>
			<td class="termsAsuCNC">Terms:</td><select class="termsTaCNC"><option>PHP</option></select>
		</tr>
		<tr>		
			<td class="dateCCNC">Date Created:</td><input type="date" class="dCreatedCNC">
		</tr>
		<tr>		
			<td class="activeACNC">Active Account</td><input type="checkbox" class="aAccountCNC">
		</tr>
		<tr>		
			<td class="bankACNC">Bank Account:</td><input type="text" value="&nbsp;BDO" class="bAccountCNC">
		</tr>
		<tr>		
			<td class="bankNCNC">Bank Name:</td><input type="text" value="&nbsp;BDO" class="bNameCNC">
		</tr>
</div>
	<div class="divCNCBelow">	
		<input type="button" value="Save" class="saveBCNC">
		<input type="button" value="Save and Add New" class="saanBCNC">
	</div>
</form>

</div>