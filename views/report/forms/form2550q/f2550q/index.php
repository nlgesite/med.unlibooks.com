<?php
	$this->imageUrl = isset($this->imageUrl) && !empty($this->imageUrl) ? $this->imageUrl : '';
	$form2550qData = (isset($this->form2550q) && !empty($this->form2550q)) ? $this->form2550q : '';
?>
		<style>
			
			.inp2550q{
				width: 270px;
				height: 26px;
				background:transparent;
				border:none;
			}
			.inp2550qA{
				width: 117px;
				height: 23px;
				background:transparent;
				border:none;
			}
			.inp2550qC{
				width: 273px;
				height: 26px;
				background:transparent;
				border:none;
			}
			.inp2550qPnlts{
				width: 174px;
				height: 26px;
				background:transparent;
				border:none;
			}
			
			#background input[type="text"]{
				border: none;
				background: none;
				width: 250px;
				font-size: 17px !important;
			}
			
			.penalties{
				width: 165px !important;
				margin-top: -2px;
			}
			
			#item1c 
			{ 
				 left: 184px; 
				 top: 181px; 
				 position: absolute; 
				 width: 19px;
				 height: 20px;
				 z-index:1;
			} 

			 #item1f 
			{ 
				 left: 273px; 
				 top: 181px; 
				 position: absolute; 
				 width: 20px;
				 height: 19px;
				 z-index:2;
			} 

			 #itemm 
			{ 
				 left: 184px; 
				 top: 208px; 
				 position: absolute; 
				 width: 49px;
				 height: 21px;
				 z-index:3;
			} 

			 #itemy 
			{ 
				 left: 235px; 
				 top: 208px; 
				 position: absolute; 
				 width: 100px;
				 height: 22px;
				 z-index:4;
			} 

			 #item21 
			{ 
				 left: 438px; 
				 top: 181px; 
				 position: absolute; 
				 width: 20px;
				 height: 19px;
				 z-index:5;
			} 

			 #item22 
			{ 
				 left: 439px; 
				 top: 209px; 
				 position: absolute; 
				 width: 18px;
				 height: 18px;
				 z-index:6;
			} 

			 #item23 
			{ 
				 left: 494px; 
				 top: 181px; 
				 position: absolute; 
				 width: 19px;
				 height: 19px;
				 z-index:7;
			} 

			 #item24 
			{ 
				 left: 494px; 
				 top: 209px; 
				 position: absolute; 
				 width: 19px;
				 height: 18px;
				 z-index:8;
			} 

			 #item3fm 
			{ 
				 left: 678px; 
				 top: 183px; 
				 position: absolute; 
				 width: 53px;
				 height: 20px;
				 z-index:9;
			} 

			 #item3fd 
			{ 
				 left: 733px; 
				 top: 183px; 
				 position: absolute; 
				 width: 48px;
				 height: 20px;
				 z-index:10;
			} 

			 #item3fy 
			{ 
				 left: 782px; 
				 top: 183px; 
				 position: absolute; 
				 width: 48px;
				 height: 20px;
				 z-index:11;
			} 

			 #item3tm 
			{ 
				 left: 679px; 
				 top: 209px; 
				 position: absolute; 
				 width: 51px;
				 height: 21px;
				 z-index:12;
			} 

			 #item3td 
			{ 
				 left: 733px; 
				 top: 209px; 
				 position: absolute; 
				 width: 48px;
				 height: 21px;
				 z-index:13;
			} 

			 #item3ty 
			{ 
				 left: 782px; 
				 top: 209px; 
				 position: absolute; 
				 width: 46px;
				 height: 21px;
				 z-index:14;
			} 

			 #item4y 
			{ 
				 left: 947px; 
				 top: 183px; 
				 position: absolute; 
				 width: 20px;
				 height: 19px;
				 z-index:15;
			} 

			 #item4n 
			{ 
				 left: 948px; 
				 top: 209px; 
				 position: absolute; 
				 width: 19px;
				 height: 19px;
				 z-index:16;
			} 

			 #item5y 
			{ 
				 left: 1146px; 
				 top: 182px; 
				 position: absolute; 
				 width: 19px;
				 height: 19px;
				 z-index:17;
			} 

			 #item5n 
			{ 
				 left: 1145px; 
				 top: 209px; 
				 position: absolute; 
				 width: 21px;
				 height: 19px;
				 z-index:18;
			} 

			 #item6whole 
			{ 
				 left: 145px; 
				 top: 245px; 
				 position: absolute; 
				 width: 381px;
				 height: 23px;
				 z-index:19;
			} 

			 #item61 
			{ 
				 left: 146px; 
				 top: 248px; 
				 position: absolute; 
				 width: 78px;
				 height: 21px;
				 z-index:20;
			} 

			 #item62 
			{ 
				 left: 247px; 
				 top: 249px; 
				 position: absolute; 
				 width: 77px;
				 height: 20px;
				 z-index:21;
			} 

			 #item63 
			{ 
				 left: 346px; 
				 top: 248px; 
				 position: absolute; 
				 width: 79px;
				 height: 21px;
				 z-index:22;
			} 

			 #item64 
			{ 
				 left: 447px; 
				 top: 249px; 
				 position: absolute; 
				 width: 76px;
				 height: 20px;
				 z-index:23;
			} 

			 #item7 
			{ 
				 left: 622px; 
				 top: 247px; 
				 position: absolute; 
				 width: 84px;
				 height: 20px;
				 z-index:24;
			} 

			 #item8 
			{ 
				 left: 876px; 
				 top: 246px; 
				 position: absolute; 
				 width: 50px;
				 height: 20px;
				 z-index:25;
			} 

			 #item9 
			{ 
				 left: 1043px; 
				 top: 244px; 
				 position: absolute; 
				 width: 153px;
				 height: 21px;
				 z-index:26;
			} 

			 #item10 
			{ 
				 left: 115px; 
				 top: 299px; 
				 position: absolute; 
				 width: 830px;
				 height: 22px;
				 z-index:27;
			} 

			 #item11 
			{ 
				 left: 1001px; 
				 top: 299px; 
				 position: absolute; 
				 width: 197px;
				 height: 21px;
				 z-index:28;
			} 

			 #item12 
			{ 
				 left: 115px; 
				 top: 352px; 
				 position: absolute; 
				 width: 915px;
				 height: 22px;
				 z-index:29;
			} 

			 #item13 
			{ 
				 left: 1096px; 
				 top: 353px; 
				 position: absolute; 
				 width: 100px;
				 height: 21px;
				 z-index:30;
			} 

			 #item14y 
			{ 
				 left: 489px; 
				 top: 384px; 
				 position: absolute; 
				 width: 27px;
				 height: 17px;
				 z-index:31;
			} 

			 #item14n 
			{ 
				 left: 595px; 
				 top: 384px; 
				 position: absolute; 
				 width: 27px;
				 height: 19px;
				 z-index:32;
			} 

			 #item14specify 
			{ 
				 left: 834px; 
				 top: 386px; 
				 position: absolute; 
				 width: 362px;
				 height: 23px;
				 z-index:33;
			} 
			
			.item_1 {
				width: 20px !important;
				height: 22px;
				text-align: center !important;
				padding-left: 1;
				font-size: 17px !important;
			}
			
			.item_1m {
				width: 51px !important;
				height: 22px;
				letter-spacing: 9px;
				font-size: 17px !important;
			}
			
			.item_1y {
				width: 99px !important;
				height: 22px;
				letter-spacing: 11px;
				font-size: 17px !important;
			}
			
			.item_2 {
				width: 20px !important;
				height: 22px;
				text-align: center !important;
				padding-left: 1;
				font-size: 17px !important;
			}
			
			.item_3 {
				width: 55px !important;
				height: 22px;
				padding-left: 1;
				letter-spacing: 11px;
				font-size: 17px !important;
			}
			
			.item_4 {
				width: 20px !important;
				height: 22px;
				text-align: center !important;
				padding-left: 2px;
				font-size: 17px !important;
			}
			
			.item_5 {
				width: 20px !important;
				height: 22px;
				text-align: center !important;
				padding-left: 2px;
				font-size: 17px !important;
			}
			
			.item_6 {
				width: 382px !important;
				height: 28px;
				text-align: center !important;
				padding-left: 2px;
				background: white !important;
				border: 4px solid black !important;
				font-size: 17px !important;
			}
			
			.item_7 {
				width: 84px !important;
				height: 24px;
				padding-left: 0px;
				letter-spacing: 14px;
				font-size: 17px !important;
			}
			
			.item_8 {
				width: 52px !important;
				height: 25px;
				padding-left: 0px;
				letter-spacing: 9px;
				font-size: 17px !important;
			}
			
			.item_9 {
				width: 153px !important;
				height: 28px;
				padding-left: 2px;
				letter-spacing: 0px;
				text-align: left !important;
				font-size: 17px !important;
			}
			
			.item_10 {
				width: 831px !important;
				height: 22px;
				padding-left: 2px;
				letter-spacing: 0px;
				text-align: left !important;
				font-size: 17px !important;
			}
			
			.item_11 {
				width: 197px !important;
				height: 22px;
				padding-left: 3px;
				letter-spacing: 0px;
				text-align: left !important;
				font-size: 17px !important;
			}
			
			.item_12 {
				width: 916px !important;
				height: 24px;
				padding-left: 5px;
				letter-spacing: 0px;
				text-align: left !important;
				font-size: 17px !important;
			}
			
			.item_13 {
				width: 102px !important;
				height: 25px;
				padding-left: 3px;
				letter-spacing: 12px;
				font-size: 17px !important;
			}
			
			.item_14 {
				width: 29px !important;
				height: 26px;
				padding-left: 3px;
				text-align: center !important;
				font-size: 17px !important;
			}
			
			.item_14_specify {
				width: 364px !important;
				height: 26px;
				padding-left: 5px;
				text-align: left !important;
				font-size: 17px !important;
			}
			
			
		</style>
		
		<script>
			$(function(){
			
				$('.item_1').click(function(){
					$('.item_1').val('');
					$(this).val('x');
					
					tempValue = $(this).parent().find('#item1').val();
					
					$('#itemYearEnd').val(tempValue);
					
				});
			
				$('.item_2').click(function(){
					$('.item_2').val('');
					$(this).val('x');
					
					tempValue = $(this).parent().find('#item2').val();
					
					$('#item2Value').val(tempValue);
					
				});
			
				$('.item_4').click(function(){
					$('.item_4').val('');
					$(this).val('x');
					
					tempValue = $(this).parent().find('#item4').val();
					
					$('#item4Value').val(tempValue);
					
				});
			
				$('.item_5').click(function(){
					$('.item_5').val('');
					$(this).val('x');
					
					tempValue = $(this).parent().find('#item5').val();
					
					$('#item5Value').val(tempValue);
					
				});
			
				$('.item_14').click(function(){
					$('.item_14').val('');
					$(this).val('x');
					
					tempValue = $(this).parent().find('#item14').val();
					
					$('#item14Value').val(tempValue);
					
				});
			});
		</script>
		
		<script src="<?= $this->imageUrl ?>custom.js"></script>
		
		<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">
		<div id="background">
			<div id="Background"><img src="<?= $this->imageUrl ?>images/Background.png"></div>
			
			<!-- -->
			
			<div id="item1c">
				<input type="hidden" name="yearEnded" id="itemYearEnd">
				<input type="text" class="item_1" value="<?= $form2550qData->yearEnded == 'calendar' ? 'x' : '' ?>">
				<input type="hidden" id="item1" value="calendar">
			</div>
			<div id="item1f">
				<input type="text" class="item_1" value="<?= $form2550qData->yearEnded == 'fiscal' ? 'x' : '' ?>">
				<input type="hidden" id="item1" value="fiscal">
			</div>
			<div id="itemm">
				<input type="text" class="item_1m" name="item1_month" value="<?= getF2550p1Data($form2550qData,'month') ?>">
			</div>
			<div id="itemy">
				<input type="text" class="item_1y" name="item1_year" value="<?= date('Y',strtotime($form2550qData->year)) ?>">
			</div>
			<div id="item21">
				<input type="hidden" name="item2" id="item2Value">
				<input type="text" class="item_2" value="<?= $form2550qData->item2 == '1st' ? 'x' : '' ?>">
				<input type="hidden" id="item2" value="1st">
			</div>
			<div id="item22">
				<input type="text" class="item_2" value="<?= $form2550qData->item2 == '2nd' ? 'x' : '' ?>">
				<input type="hidden" id="item2" value="2nd">
			</div>
			<div id="item23">
				<input type="text" class="item_2" value="<?= $form2550qData->item2 == '3rd' ? 'x' : '' ?>">
				<input type="hidden" id="item2" value="3rd">
			</div>
			<div id="item24">
				<input type="text" class="item_2" value="<?= $form2550qData->item2 == '4th' ? 'x' : '' ?>">
				<input type="hidden" id="item2" value="4th">
			</div>
			<div id="item3fm">
				<input type="hidden" name="item3From">
				<input type="text" class="item_3" name="item3FM" value="<?= $form2550qData->item3From ? date('m',strtotime($form2550qData->item3From)) : ''?>">
			</div>
			<div id="item3fd">
				<input type="text" class="item_3" name="item3FD" value="<?= $form2550qData->item3From ? date('d',strtotime($form2550qData->item3From)) : ''?>">
			</div>
			<div id="item3fy">
				<input type="text" class="item_3" name="item3FY" value="<?= $form2550qData->item3From ? date('y',strtotime($form2550qData->item3From)) : ''?>">
			</div>
			<div id="item3tm">
				<input type="hidden" name="item3To">
				<input type="text" class="item_3" name="item3TM" value="<?= $form2550qData->item3To ? date('m',strtotime($form2550qData->item3To)) : ''?>">
			</div>
			<div id="item3td">
				<input type="text" class="item_3" name="item3TD" value="<?= $form2550qData->item3To ? date('d',strtotime($form2550qData->item3To)) : ''?>">
			</div>
			<div id="item3ty">
				<input type="text" class="item_3" name="item3TY" value="<?= $form2550qData->item3To ? date('y',strtotime($form2550qData->item3To)) : ''?>">
			</div>
			<div id="item4y">
				<input type="hidden" name="item4" id="item4Value">
				<input type="text" class="item_4" value="<?= $form2550qData->item4 == 'yes' ? 'x' : '' ?>">
				<input type="hidden" id="item4" value="yes">
			</div>
			<div id="item4n">
				<input type="text" class="item_4" value="<?= $form2550qData->item4 == 'no' ? 'x' : '' ?>">
				<input type="hidden" id="item4" value="no">
			</div>
			<div id="item5y">
				<input type="hidden" name="item5" id="item5Value">
				<input type="text" class="item_5" value="<?= $form2550qData->item5 == 'yes' ? 'x' : '' ?>">
				<input type="hidden" id="item5" value="yes">
			</div>
			<div id="item5n">
				<input type="text" class="item_5" value="<?= $form2550qData->item5 == 'no' ? 'x' : '' ?>">
				<input type="hidden" id="item5" value="no">
			</div>
			<div id="item6whole">
				<input type="text" class="item_6" name="item6" value="<?= getF2550p1Data($form2550qData,'item6') ?>">
			</div>
			<!--<div id="item61">
				<img src="images/item61.png">
			</div>
			<div id="item62">
				<img src="images/item62.png">
			</div>
			<div id="item63">
				<img src="images/item63.png">
			</div>
			<div id="item64">
				<img src="images/item64.png">
			</div>-->
			<div id="item7">
				<input type="text" class="item_7" name="item7" value="<?= getF2550p1Data($form2550qData,'item7') ?>">
			</div>
			<div id="item8">
				<input type="text" class="item_8" name="item8" value="<?= getF2550p1Data($form2550qData,'item8') ?>">
			</div>
			<div id="item9">
				<input type="text" class="item_9" name="item9" value="<?= getF2550p1Data($form2550qData,'item9') ?>">
			</div>
			<div id="item10">
				<input type="text" class="item_10" name="item10" value="<?= getF2550p1Data($form2550qData,'item10') ?>">
			</div>
			<div id="item11">
				<input type="text" class="item_11" name="item11" value="<?= getF2550p1Data($form2550qData,'item11') ?>">
			</div>
			<div id="item12">
				<input type="text" class="item_12" name="item12" value="<?= getF2550p1Data($form2550qData,'item12') ?>">
			</div>
			<div id="item13">
				<input type="text" class="item_13" name="item13" value="<?= getF2550p1Data($form2550qData,'item13') ?>">
			</div>
			<div id="item14y">
				<input type="hidden" name="item14" id="item14Value">
				<input type="text" class="item_14" value="<?= $form2550qData->item14 == 'yes' ? 'x' : '' ?>">
				<input type="hidden" id="item14" value="yes">
			</div>
			<div id="item14n">
				<input type="text" class="item_14"value="<?= $form2550qData->item14 == 'no' ? 'x' : '' ?>">
				<input type="hidden" id="item14" value="no">
			</div>
			<div id="item14specify">
				<input type="text" class="item_14_specify" name="item14Specify" value="<?= getF2550p1Data($form2550qData,'item14Specify') ?>">
			</div>
			<!-- -->
			
			<div id="inpM15a"><input type="text" name="part2Item15A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item15A'),2) ?>"/></div>
			<div id="inpM15b"><input type="text" name="part2Item15B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item15B'),2) ?>"/></div>
			<div id="inpM16a"><input type="text" name="part2Item16A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item16A'),2) ?>"/></div>
			<div id="inpM16b"><input type="text" name="part2Item16B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item16B'),2) ?>"/></div>
			<div id="inpM17"><input type="text" name="part2Item17" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item17'),2) ?>"/></div>
			<div id="inpM18"><input type="text" name="part2Item18" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item18'),2) ?>"/></div>
			<div id="inpM19a"><input type="text" name="part2Item19A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item19A'),2) ?>"/></div>
			<div id="inpM19b"><input type="text" name="part2Item19B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item19B'),2) ?>"/></div>
			<div id="inpM20a"><input type="text" name="part2Item20A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item20A'),2) ?>"/></div>
			<div id="inpM20b"><input type="text" name="part2Item20B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item20B'),2) ?>"/></div>
			<div id="inpM20c"><input type="text" name="part2Item20C" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item20C'),2) ?>"/></div>
			<div id="inpM20d"><input type="text" name="part2Item20D" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item20D'),2) ?>"/></div>
			<div id="inpM20e"><input type="text" name="part2Item20E" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item20E'),2) ?>"/></div>
			<div id="inpM20f"><input type="text" name="part2Item20F" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item20F'),2) ?>"/></div>
			<div id="inpM21a"><input type="text" name="part2Item21A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21A'),2) ?>"/></div>
			<div id="inpM21b"><input type="text" name="part2Item21B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21B'),2) ?>"/></div>
			<div id="inpM21c"><input type="text" name="part2Item21C" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21C'),2) ?>"/></div>
			<div id="inpM21d"><input type="text" name="part2Item21D" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21D'),2) ?>"/></div>
			<div id="inpM21e"><input type="text" name="part2Item21E" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21E'), 2) ?>"/></div>
			<div id="inpM21f"><input type="text" name="part2Item21F" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21F'),2) ?>"/></div>
			<div id="inpM21g"><input type="text" name="part2Item21G" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21G'),2) ?>"/></div>
			<div id="inpM21h"><input type="text" name="part2Item21H" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21H'),2) ?>"/></div>
			<div id="inpM21i"><input type="text" name="part2Item21I" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21I'),2) ?>"/></div>
			<div id="inpM21j"><input type="text" name="part2Item21J" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21J'), 2) ?>"/></div>
			<div id="inpM21k"><input type="text" name="part2Item21K" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21K'),2) ?>"/></div>
			<div id="inpM21l"><input type="text" name="part2Item21L" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21L'),2) ?>"/></div>
			<div id="inpM21m"><input type="text" name="part2Item21M" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21M'),2) ?>"/></div>
			<div id="inpM21n"><input type="text" name="part2Item21N" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21N'),2) ?>"/></div>
			<div id="inpM21o"><input type="text" name="part2Item21O" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21O'),2) ?>"/></div>
			<div id="inpM21p"><input type="text" name="part2Item21P" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item21P'),2) ?>"/></div>
			<div id="inpM22"><input type="text" name="part2Item22" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item22'),2) ?>"/></div>
			<div id="inpM23a"><input type="text" name="part2Item23A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item23A'),2) ?>"/></div>
			<div id="inpM23b"><input type="text" name="part2Item23B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item23B'),2) ?>"/></div>
			<div id="inpM23c"><input type="text" name="part2Item23C" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item23C'),2) ?>"/></div>
			<div id="inpM23d"><input type="text" name="part2Item23D" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item23D'),2) ?>"/></div>
			<div id="inpM23e"><input type="text" name="part2Item23E" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item23E'),2) ?>"/></div>
			<div id="inpM23f"><input type="text" name="part2Item23F" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item23F'),2) ?>"/></div>
			<div id="inpM24"><input type="text" name="part2Item24" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item24'),2) ?>"/></div>
			<div id="inpM25"><input type="text" name="part2Item25" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item25'),2) ?>"/></div>
			<div id="inpM26a"><input type="text" name="part2Item26A" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26A'),2) ?>"/></div>
			<div id="inpM26b"><input type="text" name="part2Item26B" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26B'),2) ?>"/></div>
			<div id="inpM26c"><input type="text" name="part2Item26C" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26C'),2) ?>"/></div>
			<div id="inpM26d"><input type="text" name="part2Item26D" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26D'),2) ?>" /></div>
			<div id="inpM26e"><input type="text" name="part2Item26E" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26E'),2) ?>"/></div>
			<div id="inpM26f"><input type="text" name="part2Item26F" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26F'),2) ?>"/></div>
			<div id="inpM26g"><input type="text" name="part2Item26G" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26G'),2) ?>"/></div>
			<div id="inpM26h"><input type="text" name="part2Item26H" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item26H'),2) ?>"/></div>
			<div id="inpM27"><input type="text" name="part2Item27" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item27'),2) ?>"/></div>
			<div id="inpM28a"><input type="text" name="part2Item28A" class="penalties" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item28A'),2) ?>"/></div>
			<div id="inpM28b"><input type="text" name="part2Item28B" class="penalties" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item28B'),2) ?>"/></div>
			<div id="inpM28c"><input type="text" name="part2Item28C" class="penalties" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item28C'),2) ?>"/></div>
			<div id="INPm28d"><input type="text" name="part2Item28D" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item28D'),2) ?>"/></div>
			<div id="inpM29"><input type="text" name="part2Item29" value="<?= number_format((float) getF2550p1Data($form2550qData,'part2Item29'),2) ?>"/></div>
			
		</div>
		
<?php

function getF2550p1Data($obj, $name) {
    $return = "";

    if ($obj != '') {
        foreach ($obj as $var => $each) {
            if ($var == $name) {
                $return = $each;
            }
        }
    }
    return $return;
}
?>