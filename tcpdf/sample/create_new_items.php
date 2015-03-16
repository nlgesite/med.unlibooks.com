<link href="default.css" rel="stylesheet" type="text/css">


<div class="invoiceHolder">
<form class="nif">
	<div id="new">
		<input type="button" class="close" value="X">
		<p class="ni">Create New Item:</p>
		<hr class="hrClass">
	</div>
	
<div>
	<table>
		<tr>
                    <td class="itemA">Item Account:</td><input type="text" placeholder="&nbsp;00001" class="iAccount" name="" required pattern="[0-9]{5}">
		</tr>
			
		<tr>
			<td class="descT">Description:</td><textarea class="itemI" name="" required>Item</textarea>
		</tr>
		<tr>	
			<td class="unitC">Unit Cost:</td><input type="text" class="uCost" name="" required>
		</tr>
		<tr>
			<td class="vat">Vat:</td><select class="vatS" name=""><option>Vatable</option></select>
		</tr>
		<tr>
			<td class="InclusiveOfVatCreateText"><input type="checkbox" value="Browse.." class="InclusiveOfVatCreatecheck">Inclusive of Vat</td>
		</tr>
	</table>	
</div>
	<div class="divSaveBBelow">	
		<input type="button" value="Save" class="saveB">
		<input type="button" value="Save and Add New" class="saanB">
	</div>
	
	

</form>

</div>

