<?php
$form2550mData = (isset($this->form2550m) && !empty($this->form2550m)) ? $this->form2550m : '';
/* 	
$info = new TblOrganizationInfo();
$org = new TblOrganization();

$data = (object) array('report18m' => '', 'report18e' => '', 'report18i' => '', 'report15' => '', 'report12a' => '');
if (Session::getSession('user')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    Session::setSession('infoid', $info->id);

    // if (isset($_POST['date'])) {
	if (isset($_POST['month']) && isset($_POST['year'])) {
        require_once ('public/report.class.php');
        $report = new ReportClass();
        $data = $report->itr2550m();
		
		// print_r($data);
    }
	
} */
	
	
?>
<script src="<?= $this->imageUrl ?>custom.js"></script>
<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">
<style>
    .inp2550m{
		width: 244px;
		height: 26px;
		background: transparent;
		border: none;
		font-size: 16px !important;
		margin-top: -4px;
    }
    .inp2550m2{
        width:165px;
        background:transparent;
        border:none;
		font-size: 17px !important;
    }
	
	.item_1m{
		height: 22px;
		width: 51px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 14px;
	}
	
	.item_1y{
		height: 22px;
		width: 99px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 14px;
	}
	
	.item_2{
		height: 24px;
		width: 28px;
		background: transparent;
		border: none;
		text-align: center !important;
		font-size: 16px !important;
	}
	
	.item_3{
		height: 21px;
		width: 123px;
		background: transparent;
		border: none;
		font-size: 16px !important;
		padding: 5;
		letter-spacing: 31px;
	}
	
	.item_4{
		height: 28px;
		width: 377px;
		/* background: transparent; */
		border: 1px solid black;
		text-align: center !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 14px;
	}
	
	.item_5{
		height: 21px;
		width: 86px;
		background: transparent;
		border: none;
		padding: 0;
		letter-spacing: 15px;
		font-size: 17px !important;
	}
	
	.item_6{
		height: 21px;
		width: 290px;
		background: transparent;
		border: none;
		font-size: 16px !important;
		text-align: left !important;
		padding: 5;
		letter-spacing: 2px;
	}
	
	.item_7{
		height: 21px;
		width: 830px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 2px;
	}
	
	.item_8{
		height: 21px;
		width: 196px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 2px;
	}
	
	.item_9{
		height: 21px;
		width: 915px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 2px;
	}
	
	.item_10{
		height: 22px;
		width: 103px;
		background: transparent;
		border: none;
		text-align: left !important;
		padding: 5;
		font-size: 16px !important;
		letter-spacing: 17px;
	}
	
	.item_11{
		height: 23px;
		width: 29px;
		background: transparent;
		border: none;
		text-align: center !important;
		font-size: 16px !important;
	}
	
	.item_11_specify{
		height: 22px;
		width: 363px;
		background: transparent;
		border: none;
		text-align: left !important;
		font-size: 16px !important;
		padding: 5;
		letter-spacing: 2;
	}
	
	 #item1M 
	{ 
		 left: 397px; 
		 top: 187px; 
		 position: absolute; 
		 width: 49px;
		 height: 20px;
		 z-index:1;
	} 

	 #item1Y 
	{ 
		 left: 451px; 
		 top: 187px; 
		 position: absolute; 
		 width: 49px;
		 height: 20px;
		 z-index:2;
	} 

	 #item2Yes 
	{ 
		left: 693px;
		top: 184px;
		position: absolute;
		width: 26px;
		height: 18px;
		z-index: 3;
	} 

	 #item2No 
	{ 
		 left: 762px; 
		 top: 184px; 
		 position: absolute; 
		 width: 26px;
		 height: 18px;
		 z-index:4;
	} 

	 #item3 
	{ 
		 left: 1074px; 
		 top: 187px; 
		 position: absolute; 
		 width: 122px;
		 height: 20px;
		 z-index:5;
	} 

	 #item4en1 
	{ 
		 left: 147px; 
		 top: 245px; 
		 position: absolute; 
		 width: 76px;
		 height: 20px;
		 z-index:6;
	} 

	 #item4en2 
	{ 
		 left: 247px; 
		 top: 249px; 
		 position: absolute; 
		 width: 76px;
		 height: 20px;
		 z-index:7;
	} 

	 #item4en3 
	{ 
		 left: 347px; 
		 top: 249px; 
		 position: absolute; 
		 width: 77px;
		 height: 20px;
		 z-index:8;
	} 

	 #item4en4 
	{ 
		 left: 447px; 
		 top: 249px; 
		 position: absolute; 
		 width: 76px;
		 height: 20px;
		 z-index:9;
	} 

	 #item5 
	{ 
		 left: 622px; 
		 top: 249px; 
		 position: absolute; 
		 width: 83px;
		 height: 20px;
		 z-index:10;
	} 

	 #item6 
	{ 
		 left: 908px; 
		 top: 249px; 
		 position: absolute; 
		 width: 288px;
		 height: 20px;
		 z-index:11;
	} 

	 #item7 
	{ 
		 left: 116px; 
		 top: 302px; 
		 position: absolute; 
		 width: 831px;
		 height: 21px;
		 z-index:12;
	} 

	 #item8 
	{ 
		 left: 1002px; 
		 top: 302px; 
		 position: absolute; 
		 width: 194px;
		 height: 21px;
		 z-index:13;
	} 

	 #item9 
	{ 
		 left: 116px; 
		 top: 355px; 
		 position: absolute; 
		 width: 912px;
		 height: 21px;
		 z-index:14;
	} 

	 #item10 
	{ 
		 left: 1095px; 
		 top: 354px; 
		 position: absolute; 
		 width: 101px;
		 height: 22px;
		 z-index:15;
	} 

	 #item11Yes 
	{ 
		 left: 491px; 
		 top: 383px; 
		 position: absolute; 
		 width: 26px;
		 height: 18px;
		 z-index:16;
	} 

	 #item11No 
	{ 
		 left: 595px; 
		 top: 383px; 
		 position: absolute; 
		 width: 26px;
		 height: 18px;
		 z-index:17;
	} 

	 #item11Specify 
	{ 
		 left: 835px; 
		 top: 387px; 
		 position: absolute; 
		 width: 361px;
		 height: 22px;
		 z-index:18;
	} 
</style>
<script src="<?= URL ?>views/report/forms/js.js" type="text/javascript"></script>
<script>
	$(function(){
		$('.item_2').click(function(){
			$('.item_2').val('');
			$(this).val('x');
			
			tempVal = $(this).parent().find('#item2').val();
			
			$('#item2Value').val(tempVal);
			
			// alert ($('#item2Value').val());
		})
		
		$('.item_11').click(function(){
			$('.item_11').val('');
			$(this).val('x');
			
			tempVal = $(this).parent().find('#item11').val();
			
			$('#item11Value').val(tempVal);
			// alert ($('#item11Value').val());
		})
		
//                $('input[name="part2Item17F"],input[name="part2Item18B"],input[name="part2Item18D"],\n\
//                input[name="part2Item18F"],input[name="part2Item18H"],input[name="part2Item18J"],input[name="part2Item18L"],\n\
//                input[name="part2Item180"]').change(function (){
//                    $('input[name="part2Item19"]').val(
//                            getInt($('input[name="part2Item17F"]').val()) + getInt($('input[name="part2Item18B"]').val()) 
//                            + getInt($('nput[name="part2Item18D"]').val()) + getInt($('input[name="part2Item18F"]').val()) 
//                            + getInt($('input[name="part2Item18H"]').val()) + getInt($('input[name="part2Item18J"]').val())
//                            + getInt($('input[name="part2Item18L"]').val()) + getInt($('input[name="part2Item180"]').val()));
//                    
//                    $('input[name="part2Item19"]').number(true,2);
//                });
                
//                $('input[name="part2Item18A"],input[name="part2Item18C"],input[name="part2Item18E"],\n\
//                input[name="part2Item18G"],input[name="part2Item18I"],input[name="part2Item18K"],input[name="part2Item18M"],\n\
//                input[name="part2Item18N"]').change(function (){
//                    $('input[name="part2Item18P"]').val(
//                            getInt($('input[name="part2Item18A"]').val()) + getInt($('input[name="part2Item18C"]').val()) 
//                            + getInt($('nput[name="part2Item18E"]').val()) + getInt($('input[name="part2Item18G"]').val()) 
//                            + getInt($('input[name="part2Item18I"]').val()) + getInt($('input[name="part2Item18K"]').val())
//                            + getInt($('input[name="part2Item18M"]').val()) + getInt($('input[name="part2Item18N"]').val()));
//                    
//                    $('input[name="part2Item18P"]').number(true,2);
//                });
                
		// $('.readonly').find('input').prop('readonly', true);           
		
	});

</script>


<div id="background">
    <div id="Background"><img src="<?= $this->imageUrl ?>images/Background.png"></div>
	<!--2550M-->
	
	<div id="item1M">
		<input type="text" class="item_1m" name="item1" value="<?= getF2550p1Data($form2550mData,'item1M'); ?>">
	</div>
	<div id="item1Y">
		<input type="text" class="item_1y" name="item1" value="<?= getF2550p1Data($form2550mData,'item1Y'); ?>">
	</div>
	
	<div id="item2Yes">
		<input type="hidden" name="item2" id="item2Value">
		<input type="text" class="item_2" value="<?= $form2550mData->item2 == 'yes' ? 'x' : ''?>">
		<input type="hidden" id="item2" value="yes">
	</div>
	<div id="item2No">
		<input type="text" class="item_2" value="<?= $form2550mData->item2 == 'no' ? 'x' : ''?>">
		<input type="hidden" id="item2" value="no">
	</div>
	<div id="item3">
		<input type="text" class="item_3" name="item3" value="<?= getF2550p1Data($form2550mData,'item3'); ?>">
	</div>
	<div id="item4en1">
		<input type="text" class="item_4" name="item4" value="<?= getF2550p1Data($form2550mData,'item4'); ?>">
	</div>
	<!--<div id="item4en2">
		<input type="text" class="item_1m" name="item1" value="<?= getF2550p1Data($form2550mData,'item1M'); ?>">
	</div>
	<div id="item4en3">
		<input type="text" class="item_1m" name="item1" value="<?= getF2550p1Data($form2550mData,'item1M'); ?>">
	</div>
	<div id="item4en4">
		<input type="text" class="item_1m" name="item1" value="<?= getF2550p1Data($form2550mData,'item1M'); ?>">
	</div>-->
	<div id="item5">
		<input type="text" class="item_5" name="item5" value="<?= getF2550p1Data($form2550mData,'item5'); ?>">
	</div>
	<div id="item6">
		<input type="text" class="item_6" name="item6" value="<?= getF2550p1Data($form2550mData,'item6'); ?>">
	</div>
	<div id="item7">
		<input type="text" class="item_7" name="item7" value="<?= getF2550p1Data($form2550mData,'item7'); ?>">
	</div>
	<div id="item8">
		<input type="text" class="item_8" name="item8" value="<?= getF2550p1Data($form2550mData,'item8'); ?>">
	</div>
	<div id="item9">
		<input type="text" class="item_9" name="item9" value="<?= getF2550p1Data($form2550mData,'item9'); ?>">
	</div>
	<div id="item10">
		<input type="text" class="item_10" name="item10" value="<?= getF2550p1Data($form2550mData,'item10'); ?>">
	</div>
	<div id="item11Yes">
		<input type="hidden" name="item11" id="item11Value">
		<input type="text" class="item_11" value="<?= $form2550mData->item11 == 'yes' ? 'x' : ''?>" >
		<input type="hidden" id="item11" value="yes">
	</div>
	<div id="item11No">
		<input type="text" class="item_11" value="<?= $form2550mData->item11 == 'no' ? 'x' : ''?>">
		<input type="hidden" id="item11" value="no">
	</div>
	<div id="item11Specify">
		<input type="text" class="item_11_specify" name="item11Specify" value="<?= getF2550p1Data($form2550mData,'item11Specify'); ?>">
	</div>
	
	<!--end 2550M-->
	
	<div class="readonly">
		<div id="inp12a"><input type="text" name="part2Item12A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item12A'),2) ?>" /></div>
		<div id="inp12b"><input type="text" name="part2Item12B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item12B'),2) ?>" /></div>
		<div id="inp13a"><input type="text" name="part2Item13A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item13A'),2) ?>" /></div>
		<div id="inp13b"><input type="text" name="part2Item13B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item13B'),2) ?>" /></div>
		<div id="inp14"><input type="text" name="part2Item14" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item14'),2) ?>" /></div>
		<div id="inp15"><input type="text" name="part2Item15" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item15'),2) ?>" /></div>
		<div id="inp16a"><input type="text" name="part2Item16A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item16A'),2) ?>" /></div>
		<div id="inp16b"><input type="text" name="part2Item16B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item16B'),2) ?>" /></div>
		<div id="inp17a"><input type="text" name="part2Item17A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17A'),2) ?>" /></div>
		<div id="inp17b"><input type="text" name="part2Item17B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17B'),2) ?>" /></div>
		<div id="inp17c"><input type="text" name="part2Item17C" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17C'),2) ?>" /></div>
		<div id="inp17d"><input type="text" name="part2Item17D" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17D'),2) ?>" /></div>
		<div id="inp17e"><input type="text" name="part2Item17E" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17E'),2) ?>" /></div>
		<div id="inp17f"><input type="text" name="part2Item17F" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17F'),2) ?>" /></div>
		<div id="inp18a"><input type="text" name="part2Item18A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18A'),2) ?>" readonly /></div>
		<div id="inp18b"><input type="text" name="part2Item18B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18B'),2) ?>" /></div>
		<div id="inp18c"><input type="text" name="part2Item18C" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18C'),2) ?>" /></div>
		<div id="inp18d"><input type="text" name="part2Item18D" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18D'),2) ?>" /></div>
		<div id="inp18e"><input type="text" name="part2Item18E" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18E'),2) ?>" readonly /></div>
		<div id="inp18f"><input type="text" name="part2Item18F" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18F'),2) ?>" /></div>
		<div id="inp18g"><input type="text" name="part2Item18G" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18G'),2) ?>" /></div>
		<div id="inp18h"><input type="text" name="part2Item18H" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18H'),2) ?>" /></div>
		<div id="inp18i"><input type="text" name="part2Item18I" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18I'),2) ?>" /></div>
		<div id="inp18j"><input type="text" name="part2Item18J" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18J'),2) ?>" /></div>
		<div id="inp18k"><input type="text" name="part2Item18K" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18K'),2) ?>" /></div>
		<div id="inp18l"><input type="text" name="part2Item18L" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18L'),2) ?>" /></div>
		<div id="inp18m"><input type="text" name="part2Item18M" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18M'),2) ?>" readonly /></div>
		<div id="inp18n"><input type="text" name="part2Item18N" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18N'),2) ?>" /></div>
		<div id="inp18o"><input type="text" name="part2Item18O" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18O'),2) ?>" /></div>
		<div id="inp18p"><input type="text" name="part2Item18P" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18P'),2) ?>" /></div>
		<div id="inp19"><input type="text" name="part2Item19" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item19'),2) ?>" /></div>
		<div id="inp20a"><input type="text" name="part2Item20A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20A'),2) ?>" /></div>
		<div id="inp20b"><input type="text" name="part2Item20B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20B'),2) ?>"/></div>
		<div id="inp20c"><input type="text" name="part2Item20C" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20C'),2) ?>"/></div>
		<div id="inp20d"><input type="text" name="part2Item20D" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20D'),2) ?>"/></div>
		<div id="inp20e"><input type="text" name="part2Item20E" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20E'),2) ?>"/></div>
		<div id="inp20f"><input type="text" name="part2Item20F" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20F'),2) ?>"/></div>
		<div id="inp21"><input type="text" name="part2Item21" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item21'),2) ?>"/></div>
		<div id="inp22"><input type="text" name="part2Item22" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item22'),2) ?>"/></div>
		<div id="inp23a"><input type="text" name="part2Item23A" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23A'),2) ?>"/></div>
		<div id="inp23b"><input type="text" name="part2Item23B" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23B'),2) ?>"/></div>
		<div id="inp23c"><input type="text" name="part2Item23C" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23C'),2) ?>"/></div>
		<div id="inp23d"><input type="text" name="part2Item23D" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23D'),2) ?>"/></div>
		<div id="inp23e"><input type="text" name="part2Item23E" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23E'),2) ?>"/></div>
		<div id="inp23f"><input type="text" name="part2Item23F" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23F'),2) ?>"/></div>
		<div id="inp23g"><input type="text" name="part2Item23G" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23G'),2) ?>"/></div>
		<div id="inp24"><input type="text" name="part2Item24" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item24'),2) ?>"/></div>
		<div id="inp25a"><input type="text" name="part2Item25A" class="isFloat inp2550m2" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25A'),2) ?>"/></div>
		<div id="inp25b"><input type="text" name="part2Item25B" class="isFloat inp2550m2" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25B'),2) ?>"/></div>
		<div id="inp25c"><input type="text" name="part2Item25C" class="isFloat inp2550m2" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25C'),2) ?>"/></div>
		<div id="inp25d"><input type="text" name="part2Item25D" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25D'),2) ?>"/></div>
		<div id="inp26"><input type="text" name="part2Item26" class="isFloat inp2550m" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item26'),2) ?>"/></div>
	</div>
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