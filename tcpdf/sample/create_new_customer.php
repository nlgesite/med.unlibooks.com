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
 .createNewCustomerForm{
	width: 100%;
	margin-top: 40px;
}
</style>



<link href="default.css" rel="stylesheet" type="text/css">

<div class="createNewCustomerForm">
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

