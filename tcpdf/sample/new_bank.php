<style>
</style>
<link href="default.css" rel="stylesheet" type="text/css">

<div class="invoiceHolderNNBank">
<form metho="post" action="<?php echo URL ?>setting/newbank" class="cnt-formNNBank">
	<div id="newNNBank">
		<input type="button" class="closeNNBank" value="X">
		<p class="cnt-headNNBank">New Bank</p>
		<hr class="hrNNBank">
	</div>

<div>
	<table>	
		<tr>
			<td class="taskANNBank">Bank Code:</td><input type="text" class="tAccountNNBank" name="bankCode" required>
		</tr>
		<tr>
			<td class="taskANNBankName">Bank Name:</td><input type="text" class="tAccountNNBankName2" name="bankName" required>
		</tr>
		<tr>
			<td class="taskANBankName">Bank Number:</td><input type="text" class="tAccountNBankName2" name="bankAccountNumber" required>
		</tr>
		<tr>
			<td class="descTNNBank">Note:</td><textarea class="itemINNBank"></textarea>
		</tr>	
		<tr>
			<td><input type="checkbox" class="ActiveAccountNBank" name="active"></td><td class="vatNNBank">Active Account</td>
		</tr>
		
	</table>
</div>
	<div class="buttonNBankBelow">	
		<input type="submit" value="Save" class="saveBNNBank">
		<input type="button" value="Save and Add New" class="saanBNNBank">
	</div>
	
	

</form>

</div>
