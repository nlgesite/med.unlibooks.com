<style>
.item-text2NewItem {
	margin-top: 3px;
	margin-left: 40px;
}

</style>

<link href="<?=URL?>views/invoice/css/ajax.css" rel="stylesheet" type="text/css">
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
			<td class="itemA">Item ID No.:</td>
			<td><input type="text" placeholder="" class="iAccount"></td>
		</tr>
			
		<tr>
			<td class="descT">Description:</td>
			<td><textarea class="itemI">Item</textarea></td>
		</tr>
		<tr>	
			<td class="unitC">Unit Cost:</td><input type="text" class="uCost">
		</tr>
		<tr>
			<td class="vat">Vat:</td><select class="vatS"><option>Vatable</option></select>
		</tr>
		<tr>
			<td class="InclusiveOfVatCreateText"><input type="checkbox" value="Browse.." class="InclusiveOfVatCreatecheck">Inclusive of Vat</td>
		</tr>
	</table>	
</div>
	<div class="divSaveBBelow">	
		<input type="button" value="Save" class="saveB">
		<input type="button" value="Save and Add New" class="saanB">
                <input type="hidden" name="returnurl" class="returnurl" value="" />
	</div>
	
	

</form>

</div>

