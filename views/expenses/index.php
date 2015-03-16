<style>
.cnitableExp{
	border-collapse:collapse;
	width: 98%;
	margin:auto;
	margin-top: 48px;
}
.cnitableExp, th{
	background-color: #55C768;
	padding: 2px 2px 2px 2px;
	font-size: 13px;
	color:white;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	text-align: left;
	padding: 5px;
}
.cnitableExp, td{
	font-size: 12px;
	color:black;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	text-align: left;
	padding: 2px 5px 2px 5px;
}
.cnitableExp a{
	color:blue;
	font-size: 12px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: none;
}
.cnitableExp a:hover{
	color:blue;
	font-size: 12px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: underline;
}

.cnitableExp tr th:nth-child(6){
	text-align: right;
}
.cnitableExp tr th:nth-child(7){
	text-align: center;
}
.cnitableExp tr td:nth-child(6){
	text-align: right;
}
.cnitableExp tr td:nth-child(7){
	text-align: center;
}
.cnitableExp tr:HOVER{
	background-color: #E8E8E8;
}	
.searchB{
	
}

.createAll{
	margin-left: 760px;
	margin-top: -74px;
	width: 200px;
	height: 47px;
	border: none;
	background-image:url('<?= URL ?>public/images/recordexpenses.png');
	background-repeat:no-repeat;
	background-position:left;
	border-radius: 10px;
	cursor: pointer;
	
}
.cnitableExpHolderPage{
	background-color: #25B5EF;
	width:98%;
	margin:auto;
	margin-top:8px;
}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
<div class="invoiceHolderAllExp">
	<div class="customerHolder">
			<div id="newInvoice">
				<p class="headText">ALL EXPENSES</p>
					<a href="<?=URL?>expenses/add">	
						<input type="button" class="createAll">
					</a>
						   
			</div>	
			<div class="centerAllExp">
				<div id="search3">
					<div style="float:left; margin-left: 24px;">
						<input type="button" name="edit" value="EDIT" class="edit2aAllExp buttoninvoices">
						<input type="button" name="copy" value="COPY" class="copy2aAllExp buttoninvoices">
						<input type="button" name="del" value="DELETE" class="deleteAllExp buttoninvoices">
						<input type="button" name="del" value="PRINT PREVIEW" class="printPreview buttoninvoices">
						<input type="button" name="print" value="Print Preview" class="printAllExp hidden">
					</div>
					<div style="float:right;margin-right: 67px;">
						<div class="invoiceselect invoiceselect2" id="invoiceselect">
							<select class="inumberAllExp inumber">
								<option style="color:#000;" value="expense_number">EXPENSE NUMBER</option>
								<option style="color:#000;" value="name">VENDOR NAME</option>
							</select>
							<input type="search" name="search" placeholder="SEARCH" class="searchindexAllE searchindex" > 
							<input type="button" name="addpayment" value="" class="searchB search2Col">
						</div>
					</div>			
				</div>
			</div>

	<div>
		<table class="cnitableExp">
			<thead class="headinvoice">
				<th width="1%"><input type="checkbox"></th>
				<th class="">Expense No.</th>
				<th class="">Date</th>
				<th class="">Vendor Name</th>
				<th class=""style="text-align:right;padding-right:20px;">Total Amount</th>
				<th class="">Status</th>
				<th class="">Date Reversed</th>
			</thead>
		</table>
		
	</div>
		<div class="cnitableExpHolderPage">
			
		</div>
	</div>

</div>
</div>
<div class="popBack hidden">

</div>

<script>
	$(function(){
		$('.printAllExp').click(function(){
			 $.post(URL + 'views/invoice/print_invoice.php')
				.done(function(returnData){
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					
					
					$('.closePrint').click(function(){
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
					});
				})
				.fail(function(){
					alert('Connection Error!');
				});
			return false;
		});
		
		$('.deleteAllExp').click(function(){
			myArray = new Array();
			
			if($('input[name="trig[]"]:checked').length == 0){
			
				alert('Please select item to delete.');
			
				return false;
					
			}
			
			$('input[name="trig[]"]:checked').each(function(){
				myArray.push($(this).val());
			});
			
			status = $('input[name="trig[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
			
			if(status == 'Posted' || status=='Reversed'){
				alert('Sorry, unable to delete transaction.');
				return false;
			}
			confirmation = confirm('Deleting expenses.');
			if(confirmation){
				$.post(URL + 'expenses/delete',{'array':myArray})
					.done(function(returnData){
						if(returnData == 0){
							location.reload();
						} else {
							alert(returnData);
							loadEapenseList();
						}
					});
			}
		});
		
		// loadEapenseList();
		setPagenation();
		$('.searchindexAllE').keyup(function(){
			// loadEapenseList();
			setPagenation();
		});
		
		$('.inumberAllExp').change(function(){
			// loadEapenseList();
			setPagenation();
		});
		
		$('.edit2aAllExp').click(function(){
			if($('input[name="trig[]"]:checked').length == 0){
				alert('Please select item to edit.');
				return false;
			} else if($('input[name="trig[]"]:checked').length > 1){
				alert('Please select only 1 item to edit.');
				return false;
			}
			status = $('input[name="trig[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
			if(status == 'posted'){
				alert('Sorry, unable to edit transaction.');
				return false;
			}
			id = $('input[name="trig[]"]:checked').val();
			
			edit(id);
		});
		
		$('.copy2aAllExp').click(function(){
			if($('input[name="trig[]"]:checked').length == 0){
				alert('Please select item to copy.');
				return false;
			} else if($('input[name="trig[]"]:checked').length > 1){
				alert('Please select only 1 item to copy.');
				return false;
			}
			
			id = $('input[name="trig[]"]:checked').val();
			
			copy(id);
		});
		
		
	})
	
	
	// setPagenation();
	function setPagenation(){
		search = $('.searchindexAllE').val();
		type = $('.inumberAllExp').val();
		$.post(URL + 'expenses/expensePagenation',{'search':search, 'type':type, 'pageNumber': 25})
			.done(function(returnData){
				$('.cnitableExpHolderPage').html(returnData);
			});
		
	}
	
	function edit(id){
		$.post(URL + 'expenses/edit',{'expenseId':id})
			.done(function(returnData){
				$('.invoiceHolderAllExp').html(returnData);
				
				$('.form1NExpense').unbind();
				$('.form1NExpense').submit(function(){
					allowWithHolding = false;
					obj = false;
					count = 0;
					$('.selectNewExp').each(function(){
						code = $(this).find('option:selected').attr('accountNum');
						// $('.wtHolder').addClass('hidden');
						
						if(code == '6000-001'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-004'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-005'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						}
						count++;
					});
					if(obj && count > 1){
						alert('Account is not allowed for multiple selection.');
						$(obj).focus();
						return false;
					}
					$.post(URL + 'expenses/editexpense?id='+id,$('.form1NExpense').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location.reload();
							} else {
								alert(returnData);
							}
						});
					return false;
				});
				
				
				$('.postExpense').unbind();
				$('.postExpense').click(function(){
					allowWithHolding = false;
					obj = false;
					count = 0;
					$('.selectNewExp').each(function(){
						code = $(this).find('option:selected').attr('accountNum');
						// $('.wtHolder').addClass('hidden');
						
						if(code == '6000-001'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-004'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-005'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						}
						count++;
					});
					if(obj && count > 1){
						alert('Account is not allowed for multiple selection.');
						$(obj).focus();
						return false;
					}
					confirmation = confirm('Are you sure you want to post this expense?');
					if(confirmation){
						$.post(URL + 'expenses/editexpense?type=posted&id='+id,$('form').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location = URL + 'expenses';
							} else {
								alert(returnData);
							}
						});
					}
				});
			});
	}
	function copy(id){
		$.post(URL + 'expenses/copy',{'expenseId':id})
			.done(function(returnData){
				$('.invoiceHolderAllExp').html(returnData);
				
				$('.form1NExpense').unbind();
				$('.form1NExpense').submit(function(){
					$.post(URL + 'expenses/addexpense',$('.form1NExpense').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location.reload();
							} else {
								alert(returnData);
							}
						});
					return false;
				});
				
				$('.postExpense').unbind();
				$('.postExpense').click(function(){
					confirmation = confirm('Are you sure you want to post this expense?');
					if(confirmation){
						$.post(URL + 'expenses/addexpense?type=posted',$('form').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location = URL + 'expenses';
							} else {
								alert(returnData);
							}
						});
					}
				});
			});
	}
	
	function printPreview(id){
		$('.popupBack').removeClass('hidden');
		$.post( URL + 'expenses/printPreview',{'id':id})
			.done(function(returnData){
				$('.popBack').html(returnData);
				$('.popBack').removeClass('hidden');
				 $('body').css('overflow', 'hidden');
				
				$('.xButton').click(function(){
					$('.popBack').html('');
					$('.popBack').addClass('hidden');
					 $('body').css('overflow', 'auto');
				});
			})
	}
	
	
	
	
</script>
	
<script>
	$(function(){
		$('.addAllExp').click(function(){
			 $.post(URL + 'views/invoice/enter_payment_new.php')
				.done(function(returnData){
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					
					
					$('.closeENTERPayment').click(function(){
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
					});
				})
				.fail(function(){
					alert('Connection Error!');
				});
			return false;
		});
		
		
		$('.printPreview').click(function(){
		
			if($('input[name="trig[]"]:checked').length == 0){
				alert('Please select item to preview.');
				return false;
			} else if($('input[name="trig[]"]:checked').length > 1){
				alert('Please select only 1 item to preview.');
				return false;
			}
			
			status = '';
			
			$('input[name="trig[]"]:checked').parent('td').parent('tr').each(function(){
				values = $(this).find('td:nth-child(6)').html();
				if(values == 'Posted' || values=='Reversed'){
					status = 'Posted';
				}
			});
			if(status == 'Posted' || status=='Reversed'){
				
			} else {
				alert('Sorry, unable to preview transaction.');
				$('input[name="trig[]"]:checked').prop('checked',false);
				return false;
			}
			
			id = $('input[name="trig[]"]:checked').val();
			
			printPreview(id);
		});
		
		<?php
			if(Session::getSession('expenseIdPosted')){
		?>
			printPreview('<?= Session::getSession('expenseIdPosted') ?>');
		<?php
				Session::setSession('expenseIdPosted',false);
			}
		?>
		
		
		
		
		
		
		
		
		
	})
</script>