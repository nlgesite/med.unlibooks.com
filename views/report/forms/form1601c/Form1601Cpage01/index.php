<?php
	$this->imageUrl = isset($this->imageUrl) && !empty($this->imageUrl) ? $this->imageUrl : '';
	$form1601C = isset($this->form1601c) ? $this->form1601c : '';
?>

		<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">
	<style>
	.inp1601c{
		width:301px;
		height:29px;
		background:transparent;
		border:none;
	}
	.inp1601c2{
		width:297px;
		height:26px;
		background:transparent;
		border:none;
	}
	.inp1601c3{
		width:297px;
		height:33px;
		background:transparent;
		border:none;
	}
	.inp1601c4{
		width: 196px;
		height: 27px;
		background: transparent;
		border: none;
	}
	.inp1601c4a {
		width: 212px;
		height: 27px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAm{
		width: 86px;
		height:14px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAy{
		width: 175px;
		height:16px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAm2{
		width:56px;
		height:16px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAy2{
		width:175px;
		height:16px;
		background: transparent;
		border: none;
	}
	.inp1601cCol3{
		width:296px;
		height:16px;
		background: transparent;
		border: none;
	}
	.inp1601cCol3a{
		width:273px;
		height:16px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAcont{
		width:264px;
		height:20px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAcontB{
		width:293px;
		height:20px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAcontBa{
		width:298px;
		height:20px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAcontBb{
		width:273px;
		height:20px;
		background: transparent;
		border: none;
	}
	.inp1601cSecAcontBbb{
		width:357px;
		height:20px;
		background: transparent;
		border: none;
	}
	
	.item_1m{
		height: 31px;
		width: 62px;
		background: transparent;
		border: none;
		letter-spacing: 20px;
		padding: 9px;
	}
	
	.item_1y{
		height: 31px;
		width: 123px;
		background: transparent;
		border: none;
		padding: 10px;
		letter-spacing: 18px;
	}
	
	.item_2yes{
		height: 31px;
		width: 28px;
		background: transparent;
		border: none;
		text-align: center !important;
		margin-left: 2px;
		margin-top: 1px;
	}
	
	.item_3{
		height: 32px;
		width: 79px;
		background: transparent;
		border: none;
		padding-left: 17px;
		padding-top: 5px;
		letter-spacing: 17px;
	}
	
	.item_4{
		height: 34px;
		width: 33px;
		background: transparent;
		border: none;
		text-align: center !important;
		padding-left: 4px;
	}
	
	.item_5{
		height: 33px;
		width: 426px;
		/* background: transparent; */
		border: none;
		padding: 15px;
		letter-spacing: 15px;
	}
	
	.item_6{
		height: 34px;
		width: 84px;
		background: transparent;
		border: none;
		padding: -4px;
		letter-spacing: 12px;
	}
	
	.item_7{
		height: 34px;
		width: 243px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
	}
	
	.item_8{
		height: 34px;
		width: 879px;
		background: transparent;
		border: none;
		padding: 5;
		text-align: left !important;
		letter-spacing: 1;
	}
	
	.item_9{
		height: 34px;
		width: 174px;
		/* background: transparent; */
		border: none;
		padding: 5;
		letter-spacing: 3px;
		text-align: left !important;
	}
	
	.item_10{
		height: 35px;
		width: 879px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 3px;
	}
	
	.item_11{
		height: 34px;
		width: 125px;
		background: transparent;
		border: none;
		padding: 0px;
		letter-spacing: 16px;
	}
	
	.item_12{
		height: 34px;
		width: 31px;
		background: transparent;
		border: none;
		text-align: center !important;
	}
	
	.item_13{
		height: 18px;
		width: 33px;
		background: transparent;
		border: none;
		text-align: center !important;
		padding: 0;
		font-size: 17px !important;
	}
	
	.item_13specify{
		height: 34px;
		width: 317px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		letter-spacing: 2;
	}
	
	.item_14{
		height: 30px;
		width: 128px;
		background: transparent;
		border: none;
	}
	
	 #item1m 
	{ 
		 left: 260px; 
		 top: 316px; 
		 position: absolute; 
		 width: 61px;
		 height: 30px;
		 z-index:2;
	} 

	 #itrem1y 
	{ 
		 left: 323px; 
		 top: 315px; 
		 position: absolute; 
		 width: 123px;
		 height: 32px;
		 z-index:3;
	} 

	 #item2yes 
	{ 
		left: 535px;
		top: 314px;
		position: absolute;
		width: 29px;
		height: 33px;
		z-index: 4;
	} 

	 #item2no 
	{ 
		 left: 629px; 
		 top: 315px; 
		 position: absolute; 
		 width: 29px;
		 height: 30px;
		 z-index:5;
	} 

	 #item3 
	{ 
		 left: 872px; 
		 top: 314px; 
		 position: absolute; 
		 width: 77px;
		 height: 33px;
		 z-index:6;
	} 

	 #item4yes 
	{ 
		 left: 1010px; 
		 top: 315px; 
		 position: absolute; 
		 width: 33px;
		 height: 33px;
		 z-index:7;
	} 

	 #item4no 
	{ 
		 left: 1102px; 
		 top: 315px; 
		 position: absolute; 
		 width: 32px;
		 height: 32px;
		 z-index:8;
	} 

	 #item5 
	{ 
		 left: 125px; 
		 top: 382px; 
		 position: absolute; 
		 width: 425px;
		 height: 33px;
		 z-index:9;
	} 

	 #item6 
	{ 
		 left: 687px; 
		 top: 382px; 
		 position: absolute; 
		 width: 81px;
		 height: 33px;
		 z-index:10;
	} 

	 #item7 
	{ 
		 left: 949px; 
		 top: 384px; 
		 position: absolute; 
		 width: 244px;
		 height: 31px;
		 z-index:11;
	} 

	 #item8 
	{ 
		 left: 123px; 
		 top: 444px; 
		 position: absolute; 
		 width: 879px;
		 height: 33px;
		 z-index:12;
	} 

	 #item9 
	{ 
		 left: 1019px; 
		 top: 445px; 
		 position: absolute; 
		 width: 175px;
		 height: 31px;
		 z-index:13;
	} 

	 #item10 
	{ 
		 left: 124px; 
		 top: 506px; 
		 position: absolute; 
		 width: 878px;
		 height: 31px;
		 z-index:14;
	} 

	 #item11 
	{ 
		 left: 1069px; 
		 top: 506px; 
		 position: absolute; 
		 width: 124px;
		 height: 33px;
		 z-index:15;
	} 

	 #item12private 
	{ 
		 left: 123px; 
		 top: 567px; 
		 position: absolute; 
		 width: 29px;
		 height: 35px;
		 z-index:16;
	} 

	 #item12government 
	{ 
		 left: 218px; 
		 top: 567px; 
		 position: absolute; 
		 width: 29px;
		 height: 35px;
		 z-index:17;
	} 

	 #item13yes 
	{ 
		 left: 392px; 
		 top: 581px; 
		 position: absolute; 
		 width: 33px;
		 height: 18px;
		 z-index:18;
	} 

	 #item13no 
	{ 
		 left: 488px; 
		 top: 581px; 
		 position: absolute; 
		 width: 35px;
		 height: 18px;
		 z-index:19;
	} 

	 #item13specify 
	{ 
		 left: 685px; 
		 top: 566px; 
		 position: absolute; 
		 width: 316px;
		 height: 34px;
		 z-index:20;
	} 

	 #item14 
	{ 
		 left: 1067px; 
		 top: 567px; 
		 position: absolute; 
		 width: 126px;
		 height: 31px;
		 z-index:21;
	} 
	</style>
		<script>
			$(function(){
				$('.item_2yes').click(function(){
					$('.item_2yes').val('');
					$(this).val('x');
					
					tempVal = $(this).parent().find('#item2').val();
					
					$('#item2Value').val(tempVal);
					
					// alert ($('#item2Value').val());
				});
				
				$('.item_4').click(function(){
					$('.item_4').val('');
					$(this).val('x');
					
					tempVal = $(this).parent().find('#item4').val();
					
					$('#item4Value').val(tempVal);
					
					// alert ($('#item2Value').val());
				});
				
				$('.item_12').click(function(){
					$('.item_12').val('');
					$(this).val('x');
					
					tempVal = $(this).parent().find('#item12').val();
					
					$('#item12Value').val(tempVal);
					
					// alert ($('#item2Value').val());
				});
				
				$('.item_13').click(function(){
					$('.item_13').val('');
					$(this).val('x');
					
					tempVal = $(this).parent().find('#item13').val();
					
					$('#item13Value').val(tempVal);
					
					// alert ($('#item2Value').val());
				});
				
				$('input[name="part2Item15"], input[name="part2Item16A"], input[name="part2Item16B"], input[name="part2Item16C"]').change(function(){
					part2Item15 = getInt($('input[name="part2Item15"]').val());
					part2Item16A = getInt($('input[name="part2Item16A"]').val());
					part2Item16B = getInt($('input[name="part2Item16B"]').val());
					part2Item16C = getInt($('input[name="part2Item16C"]').val());
					
					part2Item17 = part2Item15 + part2Item16A + part2Item16B + part2Item16C;
					
					$('input[name="part2Item17"]').val(part2Item17);
					$('input[name="part2Item17"]').change();
				});
				
				$('input[name="part2Item18"], input[name="part2Item19"]').change(function(){
					part2Item18 = getInt($('input[name="part2Item18"]').val());
					part2Item19 = getInt($('input[name="part2Item19"]').val());
					
					part2Item20 = part2Item18 + part2Item19;
					
					$('input[name="part2Item20"]').val(part2Item20);
					$('input[name="part2Item20"]').change();
				});
				
				$('input[name="part2Item21A"], input[name="part2Item21B"]').change(function(){
					part2Item21A = getInt($('input[name="part2Item21A"]').val());
					part2Item21B = getInt($('input[name="part2Item21B"]').val());
					
					part2Item22 = part2Item21A + part2Item21B;
					
					$('input[name="part2Item22"]').val(part2Item22);
					$('input[name="part2Item22"]').change();
				});
				
				$('input[name="part2Item20"], input[name="part2Item22"]').change(function(){
					part2Item20 = getInt($('input[name="part2Item20"]').val());
					part2Item22 = getInt($('input[name="part2Item22"]').val());
					
					part2Item23 = part2Item20 - part2Item22;
					
					$('input[name="part2Item23"]').val(part2Item23);
					$('input[name="part2Item23"]').change();
				});
				
				$('input[name="part2Item24A"], input[name="part2Item24B"], input[name="part2Item24C"]').change(function(){
					part2Item24A = getInt($('input[name="part2Item24A"]').val());
					part2Item24B = getInt($('input[name="part2Item24B"]').val());
					part2Item24C = getInt($('input[name="part2Item24C"]').val());
					
					part2Item24D = part2Item24A + part2Item24B + part2Item24C;
					
					$('input[name="part2Item24D"]').val(part2Item24D);
					$('input[name="part2Item24D"]').change();
				});
				
				$('input[name="part2Item23"], input[name="part2Item24D"]').change(function(){
					part2Item23 = getInt($('input[name="part2Item23"]').val());
					part2Item24D = getInt($('input[name="part2Item24D"]').val());
					
					part2Item25 = part2Item23 + part2Item24D;
					
					$('input[name="part2Item25"]').val(part2Item25);
					$('input[name="part2Item25"]').change();
				});
				
			});
		</script>
	
		<div id="background">
			
			<div id="Background">
				<img src="<?= $this->imageUrl ?>images/Background.png">
			</div>
			<div id="item1m">
				<input type="text" class="item_1m" name="item1" value="<?= setData($form1601C,'item1M'); ?>">
			</div>
			<div id="itrem1y">
				<input type="text" class="item_1y" name="item1" value="<?= setData($form1601C,'item1Y'); ?>">
			</div>
			<div id="item2yes">
				<input type="hidden" name="item2" id="item2Value">
				<input type="text" class="item_2yes" value="<?= $form1601C->item2 == 'yes' ? 'x' : ''?>">
				<input type="hidden" id="item2" value="yes">
			</div>
			<div id="item2no">
				<input type="text" class="item_2yes" value="<?= $form1601C->item2 == 'no' ? 'x' : ''?>">
				<input type="hidden" id="item2" value="no">
			</div>
			<div id="item3">
				<input type="text" class="item_3" name="item3" value="<?= setData($form1601C,'item3'); ?>">
			</div>
			<div id="item4yes">
				<input type="hidden" name="item4" id="item4Value">
				<input type="text" class="item_4" value="<?= $form1601C->item4 == 'yes' ? 'x' : ''?>">
				<input type="hidden" id="item4" value="yes">
			</div>
			<div id="item4no">
				<input type="text" class="item_4" value="<?= $form1601C->item4 == 'no' ? 'x' : ''?>">
				<input type="hidden" id="item4" value="no">
			</div>
			<div id="item5">
				<input type="text" class="item_5" name="item5" value="<?= setData($form1601C,'item5'); ?>">
			</div>
			<div id="item6">
				<input type="text" class="item_6" name="item6" value="<?= setData($form1601C,'item6'); ?>">
			</div>
			<div id="item7">
				<input type="text" class="item_7" name="item7" value="<?= setData($form1601C,'item7'); ?>">
			</div>
			<div id="item8">
				<input type="text" class="item_8" name="item8" value="<?= setData($form1601C,'item8'); ?>">
			</div>
			<div id="item9">
				<input type="text" class="item_9" name="item9" value="<?= setData($form1601C,'item9'); ?>">
			</div>
			<div id="item10">
				<input type="text" class="item_10" name="item10" value="<?= setData($form1601C,'item10'); ?>">
			</div>
			<div id="item11">
				<input type="text" class="item_11" name="item11" value="<?= setData($form1601C,'item11'); ?>">
			</div>
			<div id="item12private">
				<input type="hidden" name="item12" id="item12Value">
				<input type="text" class="item_12" value="<?= $form1601C->item12 == 'private' ? 'x' : ''?>">
				<input type="hidden" id="item12" value="private">
			</div>
			<div id="item12government">
				<input type="text" class="item_12" value="<?= $form1601C->item12 == 'government' ? 'x' : ''?>">
				<input type="hidden" id="item12" value="government">
			</div>
			<div id="item13yes">	
				<input type="hidden" name="item13" id="item13Value">
				<input type="text" class="item_13" value="<?= $form1601C->item13 == 'yes' ? 'x' : ''?>">
				<input type="hidden" id="item13" value="yes">
			</div>
			<div id="item13no">
				<input type="text" class="item_13" value="<?= $form1601C->item13 == 'no' ? 'x' : ''?>">
				<input type="hidden" id="item13" value="no">
			</div>
			<div id="item13specify">
				<input type="text" class="item_13specify" name="item13Specify" value="<?= setData($form1601C,'item13Specify'); ?>">
			</div>
			<div id="item14">
				<input type="text" class="item_14" name="item14">
			</div>
			
			<div id="p1p15"><input type="text" class="inp1601c" name="part2Item15" value="<?= number_format((float) setData($form1601C,'part2Item15'), 2) ?>" /></div>
			<div id="p116a"><input type="text" class="inp1601c" name="part2Item16A" value="<?= number_format((float) setData($form1601C,'part2Item16A'), 2) ?>" /></div>
			<div id="p116b"><input type="text" class="inp1601c" name="part2Item16B" value="<?= number_format((float) setData($form1601C,'part2Item16B'), 2) ?>" /></div>
			<div id="p1p16c"><input type="text" class="inp1601c" name="part2Item16C" value="<?= number_format((float) setData($form1601C,'part2Item16C'), 2) ?>" /></div>
			<div id="p1p17"><input type="text" class="inp1601c" name="part2Item17" value="<?= number_format((float) setData($form1601C,'part2Item17'), 2) ?>" /></div>
			<div id="p1p18"><input type="text" class="inp1601c2" name="part2Item18" value="<?= number_format((float) setData($form1601C,'part2Item18'), 2) ?>" /></div>
			<div id="p1p19"><input type="text" class="inp1601c2" name="part2Item19" value="<?= number_format((float) setData($form1601C,'part2Item19'), 2) ?>" /></div>
			<div id="p1p20"><input type="text" class="inp1601c2" name="part2Item20" value="<?= number_format((float) setData($form1601C,'part2Item20'), 2) ?>" /></div>
			<div id="p121a"><input type="text" class="inp1601c" name="part2Item21A" value="<?= number_format((float) setData($form1601C,'part2Item21A'), 2) ?>" /></div>
			<div id="p121b"><input type="text" class="inp1601c" name="part2Item21B" value="<?= number_format((float) setData($form1601C,'part2Item21B'), 2) ?>" /></div>
			<div id="p1p22"><input type="text" class="inp1601c3" name="part2Item22" value="<?= number_format((float) setData($form1601C,'part2Item22'), 2) ?>" /></div>
			<div id="p1p23"><input type="text" class="inp1601c3" name="part2Item23" value="<?= number_format((float) setData($form1601C,'part2Item23'), 2) ?>" /></div>
			<div id="p1p24a"><input type="text" class="inp1601c4" name="part2Item24A" value="<?= number_format((float) setData($form1601C,'part2Item24A'), 2) ?>" /></div>
			<div id="p1p24b"><input type="text" class="inp1601c4a" name="part2Item24B" value="<?= number_format((float) setData($form1601C,'part2Item24B'), 2) ?>" /></div>
			<div id="p1p24c"><input type="text" class="inp1601c4" name="part2Item24C" value="<?= number_format((float) setData($form1601C,'part2Item24C'), 2) ?>" /></div>
			<div id="p1p24d"><input type="text" class="inp1601c2" name="part2Item24D" value="<?= number_format((float) setData($form1601C,'part2Item24D'), 2) ?>" /></div>
			<div id="p1p25"><input type="text" class="inp1601c2" name="part2Item25" value="<?= number_format((float) setData($form1601C,'part2Item25'), 2) ?>" /></div>
		</div>

<?php
	function setData($array,$data,$index=''){
		if (!empty($array)) {
			if($index == ''){
				if(!empty($array->$data)){
					return $array->$data;
				}
			} else {
				if(!empty($array[$index]->$data)){
					return $array[$index]->$data;
				}
			}
		}
	}
?>