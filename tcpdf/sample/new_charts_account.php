<style>
</style>
<link href="default.css" rel="stylesheet" type="text/css">
<div class="chartHolder">
<form class="chart-form">
	<div id="chart-div">
		<input type="button" class="chart-close" value="X">
		<p class="chart-head">New Chart of Account</p>
		<div class="chart-box">
			<p class="aText"><b>Accounts</b></p>
			<table>
				<tr>
					<td class="anText">Account No.</td><input type="text" class="aNo" placeholder="0001">
				</tr>
				<tr>
					<td class="atText">Account Type:</td><select class="aType"><option></option></select>
				</tr>
				<tr>
					<td class="accountCategoriesText">Account Categories:</td><select class="accountCategoriesType"><option></option></select>
				</tr>
				<tr>
					<td class="aName">Account Name:</td><input type="text" class="aNameInput">
				</tr>
				<tr>
					<td class="descText">Description:</td><textarea class="descInput"></textarea>
				</tr>
				<tr>
					<td><input type="checkbox" class="saBox"><td class="saText">Subaccount of:</td><select class="saSelect"><option></option></select>
				</tr>
				<tr>
					<td class="vatText">Vat:</td><select class="vatSelect"><option></option></select>
				</tr>
				<tr>
					<td class="InclusiveOfVatChartText"><input type="checkbox" value="Browse.." class="InclusiveOfVatChartcheck">Inclusive of Vat</td>
				</tr>
			</table>
		</div>
		<div class="chart-box2">
			<p class="bText"><b>Balances</b></p>
			<table>
				<tr>
					<td class="openB">Opening Balance</td><input type="text" class="oBal"><td class="asText">As of:</td><input type="date" class="ao">
				</tr>
				<tr>
					<td class="noteText">Note:</td><textarea class="noteInput"></textarea>
				</tr>
				<tr>
					<td><input type="checkbox" class="aBox"></td><td class="aaInput">Active Account</td>
				</tr>
			</table>
		</div>
		<div class="div-saveAdd">
			<input type="button" class="chartSave" value="Save">
			<input type="button" class="chartAddSave" value="Save and Add New">
		</div>
	</div>
</form>
</div>