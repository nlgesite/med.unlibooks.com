
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
</style>
<link href="default.css" rel="stylesheet" type="text/css">
<div class="invoiceHolderENTERPayment">
<form class="form1ENTERPayment">
	<div id="enterENTERPayment">
		<p class="enterPaymentENTERPayment">Enter Payment</p>
		<input class="closeENTERPayment" type="button" name="close" value="X">
		<div>
		<hr class="hrENTERPayment2">
		</div>
		
		<table>  
				<ul>
					<nav class="textInvoiceENTERPayment">Invoice No:<input type="text" id="textIn2ENTERPayment" value="00001"></nav>
				</ul>
				<ul>
					<nav class= "textCustomerENTERPayment"> Client: <input type="text" class="textCust2ENTERPayment" value="Rose Ann Yumang"></nav>
				</ul>
				<ul>
					<nav class= "paymentENTERPayment"> Payment (Php): <input type="text" class="payment2ENTERPayment"></nav>
				</ul>
				<ul>
					<nav class="forPaENTERPayment"><input type="checkbox" value="payment" class="payCheckENTERPayment">for full Payment Amount</nav>
				</ul>
				<ul>
					<div class="balanceENTERPayment">Balance Amount: <input attribute readonly="readonly" type="text" class="balAmountENTERPayment" value="P19,000.00"></div>
				</ul>
				<ul>
					<div class="invoiceTAENTERPayment">Invoice Total Amount: <input attribute readonly="readonly" type="text" class="invoiceTA2ENTERPayment" value="P20,000.00"></div>
				</ul>
				<ul>
					<div class="dateENTERPayment">Date:<input type="date" class="date2ENTERPayment"></div>
				</ul>
				<ul> 
					<div class="selectMethodENTERPayment">Method of Payment:
						<select class="selectMethod2ENTERPayment">
						<option>Cash</option>
						</select>
					</div>
				</ul>
				<ul>
					<div class="referencePaymentText">Reference:<input type="text"class="referencePaymentInput"></div>
				</ul>
				
				<ul>
					<div class="noteENTERPayment">Notes:<textarea input type="text" class="note2ENTERPayment"></textarea></div>
				</ul>
			
		</table>	
		
	</div>
		
		
	<hr class="hr2ENTERPayment">
	<hr class="hr4ENTERPayment">
	<div class="divbuttonsENTERPayment">
		<input class="buttonDownENTERPaymentEP" type="button" name="save" value="Save">
		<input class="buttonDown2ENTERPaymentEP" type="button" name="save" value="Save and Add New">
	</div>	
	

	
</form>
