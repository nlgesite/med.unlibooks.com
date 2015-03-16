<style>
.isNumeric{
	text-align: right;
}
.mainformitemsum{
	padding-top:10px;
	padding-left:5px;
	font-size: 12px;
	font-family: verdana;
	font-weight: bold;
}
.sbis{
	font-size:16px;
	margin-left:20px;
	/* margin-top:10px; */
}
.parameteritem{
	margin-left:20px;
	padding-top:15px;
}	
div.scroll {
    height: 651px;
	overflow: scroll;
	margin-left: 4px;
	width: 756px;
	margin-top: 20px;
	
}
.fromtodate{
	margin-top:15px;
	margin-left:60px;
}
.fromtodatetable{
	margin-top: 15px;
	font-size: 12px;
	font-family: verdana;
	font-weight: bold;
	margin-left: 50px;
}
.fromtodatetable input[type="date"]{
	font-size: 12px;
	font-family: verdana;
	width:140px;
	padding:5px;
	height:27px;
}
.tblmainsumlist{
	
}
.tblmainsumlist input[type="text"]{
	width:100%;
	border:none;
	background:none;
	font-size: 12px;
	font-family: verdana;
	color: black;
}

.tblmainsumlist{
		font-size: 12px;
		font-family: verdana;
		color: black;
		border-collapse: collapse;
		/* margin-top: 20px;
		margin-left: 8px; */
		width: 731px;
}
.tblmainsumlist th{
		text-align:left;
		background-color:rgb(63, 176, 63);
		color:white;
		padding:3px;
		height:27px;
		border:1px solid #fff;
}
.tblmainsumlist td{
		text-align:left;
		background-color:white;
		color:black;
		padding:5px;
		height:27px;
		border:solid 1px rgb(197, 196, 196);
}
.searchsales{
		/* width: 100px;
		height: 28px;
		color: white;
		font-size: 14px;
		font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
		background-color: rgba(135, 194, 15, 0.87);
		font-weight: bold;
		border: none;
		border-radius: 5px;
		box-shadow: 2px 2px 2px gray;
		margin-left: 5px;
		cursor: pointer;
		margin-top:-2px; */
}
.hmoDivider{
	width:100%;
	height:6px;
	border-radius:2px;
	background:gray;
	margin-top:10px;
}
.fromReg{
	text-align:center;
	font-weight:bold;
	margin-top:20px;
	font-family:Verdana;
	font-size:17px;
}
.FSPrintsalesitem{
	width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	background-color:rgba(135, 194, 15, 0.87);
	font-weight: bold;
	border: none;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	margin-left: 5px;
	cursor: pointer;
}
.buttonFS{
	margin-left: 532px;
	margin-top: -22px;
}
.DFstask{
	background-color: rgba(128, 128, 128, 0.12);
	margin-top: 15px;
	padding-left: 10px;
	font-size: 12px;
	font-family: verdana;
	border-radius: 10px;
}
.dateDivtask{
	padding-top: 5px;
}
.dateDiv2task{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
	font-weight:normal;
}
.ButInputtask{
	width: 133px;
	height: 28px;
	font-size: 12px;
	font-family: verdana;
	padding-left: 5px;
	border-radius: 5px;
	box-shadow: none;
	border: 1px solid rgba(128, 128, 128, 0.58);
	margin-left: 5px;
	margin-right: 5px;
}
.FSGentask{
	width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	background-color: rgba(135, 194, 15, 0.87);
	font-weight: bold;
	border: none;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	margin-left: 637px;
	float: left;
	margin-top: -56px;
	cursor: pointer;
}
</style>
<?php
    $info = new TblOrganizationInfo();
    $org  = new TblOrganization();
    
    if(Session::getSession('meduser')){
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
        $org  = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
        Session::setSession('medinfoid', $info->id);
//        Session::setSession('orgid', $info->orgId);
        
//        print_r($info->emailAddress); exit;
    }
?>
<script>
				
				
				
				 $('form').submit(function() {
				 
                    $.post(URL + 'report/new_salesitem', {startdate: $('input[name="startdate"]').val(), enddate: $('input[name="enddate"]').val()})										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');
						 $(".trhidden").removeClass("hidden");

                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
					
                    return false;
					
                });
				
			$('.exportSalesItem').click(function(){
				location = URL + 'report/exportItem?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
			});
				
			
				
				
				
				
				
</script>

	<div class="mainformitemsum">
		<form method='post' action='<?php echo URL ?>report/new_salesitem' id='form'>
		<div class="sbis">Sales per Item</div>
		
				<div class="buttonFS">
					<input type="button" class="FSPrintsalesitem" value="Print">
					<input type="button" class="FSPrintsalesitem exportSalesItem" value="Export">
				</div>
				
				<div class="DFstask">
					<div class="dateDivtask">Date:</div>
					<div class="dateDiv2task">From <input type="date" class="ButInputtask" name="startdate" value="<?= isset($_POST['startdate']) ?  $_POST['startdate'] : date('Y-m-d', strtotime('today - 30 days')) ?>"> To <input type="date" class="ButInputtask" name="enddate" value="<?= isset($_POST['enddate']) ?  $_POST['enddate'] : date('Y-m-d') ?>"></div>
					<input type="submit" class="FSGentask searchsales" value="Generate" id="searchsalestask">
				</div>
				
				
			<!--<table class="fromtodatetable">
				<tr>
					<td>From Date: <input type="date" name="startdate" class="startdate" value="<?php echo $_POST['startdate'] ?>"></td>
					<td><div style="margin-left:10px;">To Date: <input type="date" name="enddate" value="<?php echo $_POST['enddate'] ?>"></div></td>
					<td><input type="submit" value="Search" class="searchsales"></td>
				</tr>
			</table>-->
		</div>
		
		<div class="hmoDivider"></div>	
		<div class="containersales trhidden hidden">
			<div class="fromReg">
				<div style="font-size:17px;">
					<?= $org->orgName ?>
				</div>
				<div style="font-size:12px;">
					<?= $info->address ?>
				</div>
				<div style="font-size:12px;">
					VAT Reg. TIN: <?= $info->tinNum ?>
				</div>
				<br/>
				<div>
					<i>Sales per Item</i>
				</div>
				<div>
					<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
					<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
				</div>
			</div>
			<div class="scroll">
				<table class="tblmainsumlist">
					<tr>
						<th width="80px">Date</th>
						<th width="80px">Invoice No.</th>
						<th width="80px">Item Code</th>
						<th width="171px">Item Description</th>
						<th width="100px">Quantity</th>
						<th width="100px">Unit Price</th>
						<th width="100px" style="text-align: right;">Amount</th>
					</tr>
					<?php
		
						$salesview = TblInvoiceLinesMySqlExtDAO::getInvoiceNo();
						$quantitytotal = 0;  
						$totalunitcost = 0;
						$nettotal = 0;
						if (count($salesview) > 0) {
							foreach ($salesview as $item) {
						?>
					<tr class="">
						<td><?php echo $item['date_created'] ?></td>
						<td><?php echo $item['invoice_number'] ?></td>
						<td><?php echo $item['item_code'] ?></td>
						<td><?php echo $item['description'] ?></td>
						<td style="text-align: center;"><?php echo $item['quantity'] ?></td>
						<td><input class="isNumeric" readonly type="text" value="<?= Controller::getFloat($item['unit_cost']) ?>"></td>
						<td><input type="text" class="isNumeric" readonly value="<?= Controller::getFloat($item['net_amount']) ?>"></td>
						
					</tr>
					 <?php
					  $quantitytotal += $item['quantity'];
					  $totalunitcost += $item['unit_cost'];
					  $nettotal += $item['net_amount'];
					  
						}
					}
					?>
					<tr class="">
						<td style="background-color: #A9A8A8; font-weight:bold; text-align:right;padding-right:40px;" colspan="6">Total Amount</td>
						<td colspan="1" style="background-color: #A9A8A8;font-weight:bold;"><input class="isNumeric" style="font-weight:bold;padding-left:0px;" readonly type="text" value="<?php echo number_format((float) $nettotal ,2) ?>"></td>
					</tr>
				</table>
				
			</div>
		</div>
	</form>	
	</div>


