<style>
	.generatedReports{
		zoom: 55%;
	}
	input[type="text"]{
		font-weight: bold;
		text-align: right;
		font-size: 20px;
	}
		.BSForm{
	
}
.BSText{
	padding-left: 20px;
	padding-top:20px;
}
.FSPrint{
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
	float: right;
	margin-right: 15px;
	margin-top: -22px;
}
.DFs{
	margin-top: 15px;
	padding-left: 22px;
	height:51px;
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

.yearname{
	width:120px;
	height:26px;
}
.generate{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	margin-left: 5px;
	cursor: pointer;
}	
.hmoDivider{
        width: 100%;
		height: 2px;
		border-radius: 2px;
		background: rgb(37, 181, 239);
		margin-top: 9px;
    }
.generatediv{
	float: left;
	margin-top: -27px;
	margin-left: 139px;
}
.itrbutton{
	padding-top: 10px;
	padding-left: 29px;
}
.gen101{
	overflow:scroll;
	height:562px;
	margin-top: 10px;
}
.buttonbelow{
	float: right;
	margin-right: 63px;
	margin-top: 14px;
}
.buttonstyles{
	width:80px;
	height:25px;
	color:#fff;
	font-family:tahoma;
	font-weight:bold;
	border:none;
	border-radius:2px;
	margin-left: 10px;
}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div>
	<div class="linereport"> 
			<div class="BSForm">
				<div class="BSText">Form 1701</div>
				<div class="buttonFS">
					<input type="button" class="FSPrint hidden" value="Export">
					<input type="button" class="FSPrint printPdf hidden" value="Print">
				</div>
				<div class="DFs">
					<div>
						<select name="month" style="margin-top: 20px;" class="yearname hidden">
							<option value="december">December</option>
							<?php
								for($x = 1; $x <= 12; $x++){
							?>
								<option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
									<?= date("F", mktime(null, null, null, $x)); ?>
								</option>
							<?php
								}
							?>
						</select>
						<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname" style="margin-top: 5px;"/>
						
					</div>
						<div class="generatediv">
							<input type="button" value="" class="generate reportgenerate"/>
						</div>
					
				</div>
			</div>
			<div class="hmoDivider"></div>	
		</div>
	
<!--	<div>
		<select name="month">
			<?php
				for($x = 1; $x <= 12; $x++){
			?>
				<option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
					<?= date("F", mktime(null, null, null, $x)); ?>
				</option>
			<?php
				}
			?>
		</select>
		<input type="number" name="year" value="<?= date('Y') ?>"/>
		<input type="button" value="GENERATE" class="generate"/>
	</div>-->
	<form class="hidden">
		<div class="buttonHolder itrbutton">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles"/> 
			<input type="button" value="POST" class="postform1701 addsavebutton buttonstyles"/>
		</div>
		<div style="overflow:scroll; height:565px;margin-top:19px;">
			<div class="generatedReports">
				
			</div>
		</div>
		<div class="buttonHolder buttonbelow">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles"/> 
			<input type="button" value="POST" class="postform1701 addsavebutton buttonstyles"/>
		</div>
	</form>
</div>


<?php
	function setData($array,$data,$index=''){
		if (!empty($array)) {
			if($index == ''){
				if(!empty($array->$data)){
					return $array->$data;
				} elseif(!empty($array[$data])) {
					return $array[$data];
				}
			} else {
				if(!empty($array[$index]->$data)){
					return $array[$index]->$data;
				}
			}
		}
	}
?>

<script>
	$(function(){
		$('.generate').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			$('.generatedReports').html('');
			$('.buttonHolder').removeClass('hidden');
			$.post( URL + 'report/form1701/getReport',{'month':month, 'year':year})
				.done(function(returnData){
					
					$('.generatedReports').html(returnData);
					$('form').removeClass('hidden');
				})
		});
		
		$('form').submit(function(){
			$.post(URL + 'report/form1701/setReport',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
				})
				
				return false;
		});
		
		$('.postform1701').click(function(){
			confirmPost = confirm('Are you sure you want to post?');
			if(confirmPost){
				$.post(URL + 'report/form1701/setReport?status=post',$('form').serialize())
					.done(function(returnData){
						if(returnData == 0){
							$('.generate').click();
						} else {
							alert(returnData);
						}
					});
			}
		});
		
		
	})
</script>