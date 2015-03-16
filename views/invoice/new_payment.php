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
<link href="<?=URL?>views/invoice/css/ajax.css" rel="stylesheet" type="text/css">

<div class="chartHolderPayment">
    <form class="chart-formPayment">
        <div id="chart-divPayment">
            <input type="button" class="chart-close" value="X">
            <p class="chartheadNewPayment">Select Invoice to Apply Payment</p>
            <div>
                <table class="cnitablePayment">
                    <tr class="headinvoicePayment">
                        <th class="checkboxPayment"><input type="checkbox" ></th>
                        <th class="collectionthPayment">Invoice No.</th>
                        <th class="collectionthPayment">Date</th>
                        <th class="collectionthPayment">Client</th>
                        <th class="collectionth2Payment">Total Amount</th>
						<th class="collectionth2Payment">Amount Balance</th>
                    </tr>
                    <?php
                    $invoice = TblNewInvoiceMySqlExtDAO::getData();

                    if (count($invoice) > 0) {
                        foreach ($invoice as $item) {
                            ?>
                            <tr class="row-recurring">
                                <th class="cboxPayment"><input type="checkbox" name="chk[]" class="chk" value="<?php echo $item->id ?>"></th>
                                <td class="paynocolPayment"><a href="<?=URL?>000001"><u><?php echo $item->invoice_number ?></u></a></td>
                            <td class="datecolPayment">4/14/2014</td>
                            <td class="datecolPayment">Rose Ann Yumang</td>
                            <td class="tamtcolPayment">1,000.00</td>
							<td class="tamtcolPayment"></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
            <div class="div-saveAddPayment">
                <input type="button" class="chartSavePayment">
            </div>
        </div>

    </form>
	
</div>


<!--<div class="popBack hidden">

</div>-->

<script>
	$(function(){
		$('.chartSavePayment').click(function(){
                    if ($('.chk').is(':checked')) {
                                var checked = [];
                                $("input[name='chk[]']:checked").each(function()
                                {
                                    checked.push(parseInt($(this).val()));
                                    return false;
                                });
                                
                                $.post(URL+'views/invoice/enterPayment.php',{invoiceid:checked})
				.done(function(returnData){
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					
					$('.closeENTERPayment').click(function(){
						$('.popBack').addClass('hidden');	
					});
				})
				.fail(function(){
					alert('Connection Error!');
				});
                                return false;
                            } else {
                                alert('Please select record to enter payment');
                            }
			
		});
                
		
	})
</script>
