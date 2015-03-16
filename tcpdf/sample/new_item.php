<link href="default.css" rel="stylesheet" type="text/css">
<div class="invoiceHolder">
<form class="cni-form">
	<div id="new">
		<input type="button" class="close" value="X">
		<p class="cni-head">Create New Items</p>
		<hr>
	</div>
<div>
	<table>	
		<tr>
			<td class="item-A">Item Account:</td><input type="text" placeholder="&nbsp;00001" class="item-text">
		</tr>
		<tr>
			<td class="cni-desc">Description:</td><textarea class="cni-text" placeholder="Item"></textarea>
		</tr>
		<tr>	
			<td class="aveCost">Average Cost:</td><input type="text" class="aCost">
		</tr>
		<tr>	
			<td class="unitCost">Unit Cost:</td><input type="text" class="u-Cost">
		</tr>
		<tr>
			<td class="cni-vat">Vat:</td><select class="vat-select"><option>Vatable</option></select>
		</tr>
		<tr>
			<td class="InclusiveOfVatText"><input type="checkbox" value="Browse.." class="InclusiveOfVatcheck">Inclusive of Vat</td>
		</tr>
		<tr>
			<td class="cni-uom">UOM:</td><select class="uom-select"><option></option></select>
		</tr>
		<tr>
			<td class="cni-categ">Category:</td><select class="categ-select"><option></option></select>
		</tr>
		
	</table>
</div>
	<div class="divBelowNewItem">	
		<input type="button" value="Save" class="cni-save">
		<input type="button" value="Save and Add New" class="cni-saan">
	</div>
	
	

</form>

</div>	