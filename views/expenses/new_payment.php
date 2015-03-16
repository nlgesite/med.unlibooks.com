<style>
</style>
<link href="<?= URL ?>views/invoice/css/ajax.css" rel="stylesheet" type="text/css">

<div class="chartHolderPayment">
<form class="chart-formPayment">
	<div id="chart-divPayment">
		<input type="button" class="chart-close" value="X">
		<p class="chartheadNewPayment">Select Invoice to Apply Payment</p>
		<div>
			<table class="cnitablePayment">
		<tr class="headinvoicePayment">
			<th class="checkboxPayment"><input type="checkbox"></th>
			<th class="collectionthPayment">Payment No.</th>
			<th class="collectionthPayment">Date</th>
			<th class="collectionthPayment">Customer</th>
			<th class="collectionth2Payment">Total Amount</th>
		</tr>
		
		<tr class="row-recurring">
			<th class="cboxPayment"><input type="checkbox"></th>
			<td class="paynocolPayment"><u><a href="<?= URL ?>000001"></a>000001</u></td>
			<td class="datecolPayment">4/14/2014</td>
			<td class="datecolPayment">Rose Ann Yumang</td>
			<td class="tamtcolPayment">1,000.00</td>
			
		</tr>
		
		<tr  class="row-recurring">
			<th class="cboxPayment"><input type="checkbox"></th>
			<td class="paynocolPayment"><u><a href="<?= URL ?>000002"></a>000002</u></td>
			<td class="datecolPayment">4/14/2014</td>
			<td class="datecolPayment">Rose Ann Yumang</td>
			<td class="tamtcolPayment">1,000.00</td>
			
		</tr>
		
		<tr  class="row-recurring">
			<th class="cboxPayment"><input type="checkbox"></th>
			<td class="paynocolPayment"><u><a href="<?= URL ?>000002"></a>000002</u></td>
			<td class="datecolPayment">4/14/2014</td>
			<td class="datecolPayment">Rose Ann Yumang</td>
			<td class="tamtcolPayment">1,000.00</td>
			
		</tr>
		
		<tr  class="row-recurring">
			<th class="cboxPayment"><input type="checkbox"></th>
			<td class="paynocolPayment"><u><a href="<?= URL ?>000004"></a>000004</u></td>
			<td class="datecolPayment">4/14/2014</td>
			<td class="datecolPayment">Rose Ann Yumang</td>
			<td class="tamtcolPayment">1,000.00</td>
			
		</tr>
	
		</table>
		</div>
		<div class="div-saveAddPayment">
			<input type="button" class="chartSave" value="Save">
			<input type="button" class="chartAddSave" value="Save and Add New">
		</div>
	</div>
</form>
</div>