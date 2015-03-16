<style>
	.clientlistmainform{
		width:100%;
		margin:auto;
	}
	.clientlistform{
		/* background-color: white;
		width: 742px;
		margin-left: 370px;
		margin-top: 423px; */
		width:764px;
	}
	.blHeader{
		font-size: 17px;
		font-family: verdana;
		/* padding-left: 234px; */
		padding-top: 10px;
		font-weight: bold;
		color: rgba(0, 0, 0, 0.67);
	}
	.clientlisttable{
		font-size: 12px;
		font-family: verdana;
		color: black;
		border-collapse: collapse;
		/* margin-top: 20px; */
		/* width: 1651px; */
		/* margin-left: 8px; */
	}
	.clientlisttable th{
		text-align:left;
		background-color:rgb(28, 180, 239);
		color:white;
		padding:5px;
		height:27px;
		border:1px solid #fff;;
		text-align:left;
		padding:3px;
	}
	.clientlisttable td{
		text-align:left;
		background-color:white;
		color:black;
		padding:5px;
		height:27px;
		border:solid 1px rgb(197, 196, 196);
	}
	.clientlisttable input[type="text"]{
		
	}
	
.form2Report{
	width: 762px;
	margin-top: 137px;
	margin-left: 223;
}
.BSForm{
	
}
.BSText{
	
}
.FSPrint{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 5px;
	cursor: pointer;
}
.buttonFS{
	margin-left: 532px;
	margin-top: -28px;
}
.DFs{
	margin-top: 10px;
	padding-left: 21px;
}
.ButInput{
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
.dateDiv{
	padding-top: 5px;
}
.dateDiv2{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
}
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 367px;
	float: left;
	margin-top: -48px;
	cursor: pointer;
}
.blHeader{
	font-size: 20px;
	font-family: verdana;
	/* padding-left: 234px; */
	margin-top: 10px;
	font-weight: bold;
	color: rgba(0, 0, 0, 0.67);
	text-align:center;
}
.MainSheet{
	/* float: left;
	margin-top: -500px;
	margin-left: 300px; */
	margin-top: -11px;
}
.linereport{
	border-bottom:solid 1px green;
	border-top:none;
}
	
div.scroll {
    height: 570px;
	overflow: scroll;
	margin-left: 4px;
	width: 758px;
	margin-top: 20px;
	
}
.dateclist{
	font-size: 12px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
}	
.hmoDivider{
	
}
</style>
<script>
				
				
				
				 $('form').submit(function() {
				 
                    $.post(URL + 'report/new_clientlist', {startdate: $('input[name="startdate"]').val(), enddate: $('input[name="enddate"]').val()})										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');
						 $(".clientlisthide").removeClass("hidden");

                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
					
                    return false;
					
                });
				
				$('.exportClient').click(function(){
					location = URL + 'report/exportClient?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
				});
				
				$('.printPL').click(function(){
					window.print();
				});
</script>



<div class="clientlistmainform">
	<form method='post' action='<?php echo URL ?>report/new_clientlist' id='form' class="clientlistform">
		<div class="pL"> 
			<div class="BSForm">
				<div class="BSText">Patient List</div>
				<div class="buttonFS">
					<input type="button" class="FSPrint printPL reportprint" value="">
					<input type="button" class="FSPrint exportClient reportexport" value="">
				</div>
				<div class="DFs">
					<div class="fontreportnew">
						<div class="dateDiv"><b>Date:</b></div>
						<div class="dateDiv2" style="margin-top:10px;">From: <input type="date" class="ButInput" name="startdate" value="<?= isset($_POST['startdate']) ?  $_POST['startdate'] : date('Y-m-d') ?>"> To: <input type="date" class="ButInput" name="enddate" value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('Y-m-d')?>"></div>
						<input type="submit" class="FSGen reportgenerate" value="">
					</div>
				</div>
			</div>
		
		</div>
		<div class="hmoDivider"></div>	
		<div class="clientlisthide hidden">	
			<div class="blHeader" >Patient List</div>
			<div style="margin-left:267px;font-family:Verdana;font-size:12px;">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			<div class="scroll">	
				<table class="clientlisttable">
					<tr>
						<th width="100px">Date Created</th>
						<th width="100px">Patient Code</th>
						<th width="100px">Patient Name</th>
						<th width="100px">Tin No.</th>
						<th width="100px">Address</th>
						<th width="100px">Email Add</th>
						<th width="100px">Phone No.</th>
						<!--<th width="100px">Vat</th>
						<th width="100px">Inclusive of Vat</th>-->
						<!--<th width="100px">HMO</th>
						<th width="100px">HMO Id No</th>-->
						<th width="100px">Active Account</th>
					</tr>
					<?php
		
						$clientList = TblClientMySqlExtDAO::getClientlist();
						if (count($clientList) > 0) {
							foreach ($clientList as $item) {
						?>
					
					<tr>
						<td class=""><?php echo $item['date_created'] ?></td>
						<td class=""><?php echo $item['client_account'] ?></td>
						<td><?php echo $item['client_name'] ?></td>
						<td class=""><?php echo $item['tin_num'] ?></td>
						<td><?php echo $item['address'] ?></td>
						<td><?php echo $item['email_address'] ?></td>
						<td><?php echo $item['phone_number'] ?></td>
						<!--<td class=""><?php //echo $item['currencyCode'] ?></td>-->
						<!--<td class=""></td>
						<td class=""></td>-->
						<td class=""><?php echo $item['active'] ?></td>
					<?php } ?>
					</tr>
					<?php 	
					
					}
						
					?>
				</table>
			</div>
		</div>
	</div>
	</form>

</div>