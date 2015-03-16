<html>
	<head>
		<link href="css/template.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<meta charset="utf-8"/>
		<script>
			/*$(document).ready(function() {
				$('tr.header1').nextUntil('.header1').slideUp();
				$('tr.header1').click(function(){
					$(this).nextUntil('.header1').slideToggle('Fast');
				});
			});*/
			
			$(document).ready(function() {
				
				$('tr.child2-1').hide();
				$('tr.child1').slideUp();
				
				$('tr.child1').click(function(){
					$(this).nextUntil('.child1').slideToggle('Fast');
				});
				$('tr.header1').click(function(){
					$(this).nextUntil('.header1','.child1').slideToggle('Fast');
					
				});
			});

		</script>
	</head>
		<body>	
			<div class="itb-mapping_container">
				<div class="itb-mapping_holder">	
					<div class="moa-title">
						Mapping of Accounts
					</div>
					
					<div class="moa-line">
					</div>
					
					<div class="moa-subtitle">
						Match your Trial Balance (left) to the Standard Chart of Accounts (center). You can review mapped accounts (right).
					</div>
					
					<div class="itb-tbl-container">
					
						<table class="itb-mapping_content_ctr" cellspacing="0">
						
							<tr>
								<th>
									<label >Company Trial Balance </label> &nbsp;
								</th>
							</tr>
							
							<tr>
								<td><input type="checkbox">10000001 - Sales and Revenue</td>
							</tr>
							<tr>
								<td><input type="checkbox">10000002 - Cost of Sales</td>
							</tr>
							<tr>
								<td><input type="checkbox">10000003 - Other Expense</td>
							</tr>
						</table>
						
						<table class="itb-mapping_content" cellspacing="0">
						
							<tr>
								<th>
									<label >Standard Chart of Accounts </label> &nbsp;
								</th>
							</tr>
							
							<tr>
								<td style="background:#6DBCD1;">Balance Sheet</td>
							</tr>
							<tr  class="header1">
								<td>100000 - Income</td>
							</tr>

							<tr class="child1">
								<td>100101 - Sales and Revenue</td>
							</tr>
							<tr class="child1">
								<td>100102 - Cost of Sales</td>
							</tr>
							<tr class="child1">
								<td>100103 - Other Expense</td>
							</tr>

							<tr class="header1">
								<td>200000 - Expenses</td>
							</tr>

							<tr class="child1">
								<td>200100 - Sales and Revenue</td>
							</tr>
							<tr class="child1">
								<td>200200 - Cost of Sales</td>
							</tr>
								<tr class="child2-1">
									<td><input type="checkbox">200201 - Cost of Sales</td>
								</tr>
								<tr class="child2-1">
									<td><input type="checkbox">200202 - Cost of Revenue</td>
								</tr>
							<tr class="child1">
								<td>200300 - Other Expense</td>
							</tr>
							<tr class="header1">
								<td>300000 - Liabilities</td>
							</tr>
					
						</table>
					
					</div>
					
					
					<div>
						<img src="img/rightArrow.png"/>
					</div>
					
					<div>
						<img src="img/leftArrow.png"/>
					</div>
					
				
					
					<table class="itb-mapping_content2" cellspacing="0">
					
						<tr>
							<th>
								<label >Balance Sheet</label> &nbsp;
							</th>
							<th class="BS-shadow">
								<label>Income Statement</label>
							</th>
					
					</table>
					
					<table class="itb-mapping_content2" cellspacing="0">
						<tr class="header1">
							<td>Sales / Revenue</td>
							<td>80,000</td>
						</tr>
						
							<tr class="child1">
								<td>Sales of Goods</td>
								<td>20,000</td>
							</tr>
							
								<tr class="child2-1">
									<td><input type="checkbox">10000001 - Sales and Revenue</td>
									<td>15,000</td>
								</tr>
								<tr class="child2-1">
									<td><input type="checkbox">10000002 - Cost of Sales</td>
									<td>5,000</td>
								</tr>
								
								
							<tr class="child1">
								<td>Sales discounts, returns and allowances</td>
								<td>60,000</td>
							</tr>
							
								<tr class="child2-1">
									<td><input type="checkbox">10000007 - Discounts for Bulk</td>
									<td>40,633</td>
								</tr>
								<tr class="child2-1">
									<td><input type="checkbox">10000008 - Discounts for Sale</td>
									<td>19,367</td>
								</tr>
								
								<tr class="child1">
								</tr>
								
						<tr class="header1">
							<td>Cost of Sales / Services</td>
							<td></td>
						</tr>
						<tr class="header1">
							<td>Purchases</td>
							<td></td>
						</tr>
						<tr class="header1">
							<td>Other Income</td>
							<td></td>
						</tr>
						<tr class="header1">
							<td>General, Administrative and Selling Expenses</td>
							<td></td>
						</tr>
						<tr class="header1">
							<td>Provision for Income Tax</td>
							<td></td>
						</tr>
	
					</table>	
					
					<div style="clear: both"></div>
				</div>
			</div>
		</body>
</html>		
	
