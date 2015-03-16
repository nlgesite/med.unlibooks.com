<style>
	.generatedReports2{
		zoom: 60%;
	}
	input[type="text"]{
		font-weight: bold;
		text-align: right;
		font-size: 20px;
	}
	
	.BSForm{
	}
.BSText{
	font-size: 16px;
	font-family: verdana;
	font-weight: bold;
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
	background-color: rgba(128, 128, 128, 0.12);
	margin-top: 15px;
	padding-left: 10px;
	font-size: 12px;
	font-family: verdana;
	border-radius: 10px;
	height:65px;
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
}	
.hmoDivider{
        width:100%;
        height:6px;
        border-radius:2px;
        background:gray;
        margin-top:10px;
    }
</style>
<div>

		<div class="linereport"> 
			<div class="BSForm">
				<div class="BSText">Form 1601E</div>
				<div class="buttonFS">
					<input type="button" class="FSPrint hidden" value="Export">
					<input type="button" class="FSPrint printPdf hidden" value="Print">
				</div>
				<div class="DFs">
					<div>
						<select name="month" style="margin-top: 20px;" class="yearname">
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
						<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname"/>
						<input type="button" value="GENERATE" class="generate"/>
					</div>
				</div>
			</div>
			<div class="hmoDivider"></div>	
		</div>

	<form class="hidden">
		<div class="buttonHolder">
			<input type="submit" value="SAVE"/>
			<input type="button" value="POST" class="postform1601e"/>
		</div>
		<!--<div class="zoomDiv">
			<input type="button" id="zoomOut" value="-">
			<input type="button" id="zoomIn" value="+">
		</div>-->
		
		<div class="generatedReports2 divClass" id="divelement">
			
		</div>
		
		
		<div class="buttonHolder">
			<input type="submit" value="SAVE"/>
			<input type="button" value="POST" class="postform1601c"/>
		</div>
	</form>
</div>

<script>
	$(function(){
		$('#zoomIn').click(
		function() {
			$("#divelement").animate({ 'zoom': 0.7 }, 400);
		});
    
		$('#zoomOut').click(
		function() {
			$("#divelement").animate({ 'zoom': 0.4 }, 400);
		});
		
		$('.generate').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			$.post( URL + 'report/form1601e/getReport',{'month':month, 'year':year})
				.done(function(returnData){
					$('.generatedReports2').html(returnData);
					$('form').removeClass('hidden');
					$('.isNumeric').each(function(){
						$(this).val($.number($(this).val(), 2));
					});
					
				})
		});
		
		$('form').submit(function(){
			$.post(URL + 'report/form1601e/setReport',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
				});
			return false;
		});
		
		$('.postform1601e').click(function(){
			confirmPost = confirm('Are you sure you want to post?');
			if(confirmPost){
				$.post(URL + 'report/form1601e/setReport?status=post',$('form').serialize())
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