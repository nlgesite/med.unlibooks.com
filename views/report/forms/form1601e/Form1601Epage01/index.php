<?php
$this->imageUrl = isset($this->imageUrl) ? $this->imageUrl : '';
$atc_form1601e = isset($this->atc_form1601e) ? $this->atc_form1601e : '';
$form1601e = isset($this->form1601e) ? $this->form1601e : '';
?>
<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">
<style>
    .input1601e{
        height: 25px;
        width: 533px;
        border:none;
        background:transparent;
    }
    .input1601e2{
        height: 25px;
        width: 84px;
        border:none;
        background:transparent;
    }
    .input1601e3{
        height: 25px;
        width: 233px;
        border:none;
        background:transparent;
    }
    .input1601e4{
        height: 25px;
        width: 55px;
        border:none;
        background:transparent;
    }
    .input1601e5{
        height: 25px;
        width: 263px;
        border:none;
        background:transparent;
    }
    .input1601e5a{
        height: 27px;
        width: 192px;
        border: none;
        background: transparent;
    }
    .input1601e5aa{
        height: 27px;
        width: 222px;
        border: none;
        background: transparent;
    }
    .input1601e5aaa{
        height: 27px;
        width: 206px;
        border: none;
        background: transparent;
    }

    .item_1m{
        height: 31px;
        width: 68px;
        background: transparent;
        border: none;
        text-align: center!important;
        letter-spacing: 20px;
        padding: 9px;
    }

    .item_1y{
        height: 29px;
        width: 127px;
        background: transparent;
        border: none;
        text-align: center!important;
        letter-spacing: 20px;
        padding: 9px;
    }

    .item_2{
        height: 20px;
        width: 28px;
        background: transparent;
        border: none;
        text-align: center !important;
        font-size: 17px !important;
    }

    .item_3{
        height: 21px;
        width: 75px;
        background: transparent;
        border: none;
        font-size: 16px !important;
        letter-spacing: 17px;
    }

    .item_4{
        height: 24px;
        width: 35px;
        background: transparent;
        border: none;
        text-align: center !important;
        font-size: 16px !important;
    }

    .item_4no{
        height: 20px;
        width: 19px;
        background: transparent;
        border: none;
        text-align: center !important;
        font-size: 16 !important;
    }

    .item_5{
        height: 31px;
        width: 454px;
        /* background: transparent; */
        border: none;
        padding: 5;
        letter-spacing: 15px;
        text-align: center !important;
    }

    .item_6{
        height: 31px;
        width: 84px;
        background: transparent;
        border: none;
        text-align: center !important;
        letter-spacing: 19px;
        padding: 5px;
    }

    .item_7{
        height: 31px;
        width: 241px;
        background: transparent;
        border: none;
        padding: 5;
        text-align: left !important;
        letter-spacing: 1px;
    }

    .item_8{
        height: 26px;
        width: 913px;
        background: transparent;
        border: none;
        padding: 5;
        letter-spacing: 1;
        text-align: left !important;
    }

    .item_9 {
        height: 25px;
        width: 158px;
        /* background: transparent; */
        border: none;
        text-align: left !important;
        padding: 5;
        letter-spacing: 1px;
    }

    .item_10{
        height: 26px;
        width: 917px;
        background: transparent;
        border: none;
        text-align: left !important;
        padding: 7px;
        letter-spacing: 1;
    }

    .item_11{
        height: 26px;
        width: 110px;
        background: transparent;
        border: none;
        padding: 5px;
        letter-spacing: 15px;
        text-align: center !important;
    }

    .item_12{
        height: 22px;
        width: 31px;
        background: transparent;
        border: none;
        text-align: center !important;
    }

    .item_13{
        height: 22px;
        width: 31px;
        background: transparent;
        border: none;
        text-align: center !important;
    }

    .item_13_specify{
        height: 22px;
        width: 445px;
        background: transparent;
        border: none;
        text-align: left !important;
        padding-left: 5;
    }

    #item1m 
    { 
        left: 249px;
        top: 226px;
        position: absolute;
        width: 66px;
        height: 30px;
        z-index: 119;
    } 

    #item1y 
    { 
        left: 315px; 
        top: 227px; 
        position: absolute; 
        width: 126px;
        height: 29px;
        z-index:120;
    } 

    #item2yes 
    { 
        left: 532px; 
        top: 236px; 
        position: absolute; 
        width: 28px;
        height: 15px;
        z-index:121;
    } 

    #item2no 
    { 
        left: 615px; 
        top: 236px; 
        position: absolute; 
        width: 27px;
        height: 15px;
        z-index:122;
    } 

    #item3 
    { 
        left: 766px; 
        top: 238px; 
        position: absolute; 
        width: 75px;
        height: 17px;
        z-index:123;
    } 

    #item4yes 
    { 
        left: 998px; 
        top: 235px; 
        position: absolute; 
        width: 34px;
        height: 15px;
        z-index:124;
    } 

    #item4no 
    { 
        left: 1110px; 
        top: 236px; 
        position: absolute; 
        width: 17px;
        height: 17px;
        z-index:125;
    } 

    #item5 
    { 
        left: 110px; 
        top: 292px; 
        position: absolute; 
        width: 453px;
        height: 31px;
        z-index:126;
    } 

    #item6 
    { 
        left: 705px; 
        top: 292px; 
        position: absolute; 
        width: 83px;
        height: 31px;
        z-index:127;
    } 

    #item7 
    { 
        left: 980px; 
        top: 292px; 
        position: absolute; 
        width: 239px;
        height: 31px;
        z-index:128;
    } 

    #item8 
    { 
        left: 110px; 
        top: 344px; 
        position: absolute; 
        width: 912px;
        height: 25px;
        z-index:129;
    } 

    #item9 
    { 
        left: 1063px; 
        top: 345px; 
        position: absolute; 
        width: 156px;
        height: 24px;
        z-index:130;
    } 

    #item10 
    { 
        left: 108px; 
        top: 390px; 
        position: absolute; 
        width: 915px;
        height: 24px;
        z-index:131;
    } 

    #item11 
    { 
        left: 1111px; 
        top: 392px; 
        position: absolute; 
        width: 108px;
        height: 24px;
        z-index:132;
    } 

    #item12private 
    { 
        left: 106px; 
        top: 434px; 
        position: absolute; 
        width: 29px;
        height: 22px;
        z-index:133;
    } 

    #item12government 
    { 
        left: 210px; 
        top: 434px; 
        position: absolute; 
        width: 28px;
        height: 22px;
        z-index:134;
    } 

    #item13yes 
    { 
        left: 437px; 
        top: 433px; 
        position: absolute; 
        width: 27px;
        height: 22px;
        z-index:135;
    } 

    #item13no 
    { 
        left: 542px; 
        top: 433px; 
        position: absolute; 
        width: 28px;
        height: 22px;
        z-index:136;
    } 

    #item13specify 
    { 
        left: 774px; 
        top: 434px; 
        position: absolute; 
        width: 444px;
        height: 22px;
        z-index:137;
    }
	.input1601e18 {
		background: transparent;
		width: 25px;
		border: none;
		height: 26px;
		text-align: center !important;
		outline-style: none;
	}	

</style>
<script>
    $(function() {
        $('.item_2').click(function() {
            $('.item_2').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item2').val();

            $('#item2Value').val(tempVal);

            // alert ($('#item2Value').val());
        });

        $('.item_4x').click(function() {
            $('.item_4x').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item4').val();

            $('#item4Value').val(tempVal);

            // alert ($('#item2Value').val());
        });

        $('.item_12').click(function() {
            $('.item_12').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item12').val();

            $('#item12Value').val(tempVal);

            // alert ($('#item2Value').val());
        });

        $('.item_13').click(function() {
            $('.item_13').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item13').val();

            $('#item13Value').val(tempVal);

            // alert ($('#item2Value').val());
        });

        $('.input1601e18').click(function() {
            $('.input1601e18').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item18').val();

            $('#item18Value').val(tempVal);

            // alert ($('#item2Value').val());
        });
		
		$('input[name="item14"], input[name="item15C"]').change(function(){
			item14 = getInt($('input[name="item14"]').val());
			item15C = getInt($('input[name="item15C"]').val());
			
			item16 = item14 - item15C;
			// alert(item16);
			$('input[name="item16"]').val(item16);
			$('input[name="item16"]').change();
		});
		
		$('input[name="item17A"], input[name="item17B"], input[name="item17C"]').change(function(){
			item17A = getInt($('input[name="item17A"]').val());
			item17B = getInt($('input[name="item17B"]').val());
			item17C = getInt($('input[name="item17C"]').val());
			
			item17D = item17A + item17B + item17C;
			
			$('input[name="item17D"]').val(item17D);
			$('input[name="item17D"]').change();
		});
		
		$('input[name="item16"], input[name="item17D"]').change(function(){
			item16 = getInt($('input[name="item16"]').val());
			item17D = getInt($('input[name="item17D"]').val());
			// alert(item16);
			// alert(item17D);
			item18 = item16 + item17D;
			
			$('input[name="item18"]').val(item18);
			$('input[name="item18"]').change();
		});
		$('input[name="item15A"], input[name="item15B"]').change(function(){
			item15A = getInt($('input[name="item15A"]').val());
			item15B = getInt($('input[name="item15B"]').val());
			
			item15C = item15A + item15B;
			
			$('input[name="item15C"]').val(item15C);
			$('input[name="item15C"]').change();
		});
		
    });

</script>
<div id="background">


    <div id="form1601E"><img src="<?= $this->imageUrl ?>images/form1601E.png"></div>

    <div id="item1m">
        <input type="text" class="item_1m" name="item1" value="<?= setData($form1601e, 'item1M'); ?>">
    </div>
    <div id="item1y">
        <input type="text" class="item_1y" name="item1" value="<?= setData($form1601e, 'item1Y'); ?>">
    </div>
    <div id="item2yes">
        <input type="hidden" name="item2" id="item2Value">
        <input type="text" class="item_2" value="<?= $form1601e->item2 == 'yes' ? 'x' : '' ?>" >
        <input type="hidden" id="item2" value="yes">
    </div>
    <div id="item2no">
        <input type="text" class="item_2" value="<?= $form1601e->item2 == 'no' ? 'x' : '' ?>">
        <input type="hidden" id="item2" value="yes">
    </div>
    <div id="item3">
        <input type="text" class="item_3" name="item3" value="<?= setData($form1601e, 'item3'); ?>">
    </div>
    <div id="item4yes">
        <input type="hidden" name="item4" id="item4Value">
        <input type="text" class="item_4 item_4x" value="<?= $form1601e->item4 == 'yes' ? 'x' : '' ?>">
        <input type="hidden" id="item4" value="yes">
    </div>
    <div id="item4no">
        <input type="text" class="item_4no item_4x" value="<?= $form1601e->item4 == 'no' ? 'x' : '' ?>">
        <input type="hidden" id="item4" value="no">
    </div>
    <div id="item5">
        <input type="text" class="item_5" name="item5" value="<?= setData($form1601e, 'item5'); ?>">
    </div>
    <div id="item6">
        <input type="text" class="item_6" name="item6" value="<?= setData($form1601e, 'item6'); ?>">
    </div>
    <div id="item7">
        <input type="text" class="item_7" name="item7" value="<?= setData($form1601e, 'item7'); ?>">
    </div>
    <div id="item8">
        <input type="text" class="item_8" name="item8" value="<?= setData($form1601e, 'item8'); ?>">
    </div>
    <div id="item9">
        <input type="text" class="item_9" name="item9" value="<?= setData($form1601e, 'item9'); ?>">
    </div>
    <div id="item10">
        <input type="text" class="item_10" name="item10"  value="<?= setData($form1601e, 'item10'); ?>">
    </div>
    <div id="item11">
        <input type="text" class="item_11" name="item11" value="<?= setData($form1601e, 'item11'); ?>">
    </div>
    <div id="item12private">
        <input type="hidden" name="item12" id="item12Value">
        <input type="text" class="item_12" value="<?= $form1601e->item12 == 'private' ? 'x' : '' ?>">
        <input type="hidden" id="item12" value="private">
    </div>
    <div id="item12government">
        <input type="text" class="item_12" value="<?= $form1601e->item12 == 'government' ? 'x' : '' ?>">
        <input type="hidden" id="item12" value="government">
    </div>
    <div id="item13yes">	
        <input type="hidden" name="item13" id="item13Value">
        <input type="text" class="item_13" value="<?= $form1601e->item13 == 'yes' ? 'x' : '' ?>">
        <input type="hidden" id="item13" value="yes">
    </div>
    <div id="item13no">
        <input type="text" class="item_13" value="<?= $form1601e->item13 == 'no' ? 'x' : '' ?>">
        <input type="hidden" id="item13" value="no">
    </div>
    <div id="item13specify">
        <input type="text" class="item_13_specify" name="item13Specify" value="<?= setData($form1601e, 'item13Specify'); ?>">
    </div>
    <?php
    for ($x = 0; $x <= 21; $x++) {
            ?>

            <div id="noip<?= $x + 1 ?>"><input type="text" style="text-align:left;padding:4px;" class="input1601e" name="accountName[]" value="<?= setData($atc_form1601e, 'accountName', $x . '') ?>"readonly/></div>
            <div id="atc<?= $x + 1 ?>"><input type="text" style="font-size:19px;text-align:center;"class="input1601e2" name="atcCode[]" value="<?= setData($atc_form1601e, 'atcCode', $x . '') ?>"readonly/></div>
            <div id="tb<?= $x + 1 ?>"><input type="text" class="input1601e3" name="amount[]" value="<?= number_format((float) setData($atc_form1601e, 'amount', $x . ''), 2) ?>"readonly/></div>
            <div id="tr<?= $x + 1 ?>"><input type="text" class="input1601e4" name="rate[]" value="<?= number_format((integer) setData($atc_form1601e, 'rate', $x . '')) ?>%"readonly/></div>
            <div id="trtbw<?= $x + 1 ?>"><input type="text" class="input1601e5" name="taxRequired[]" value="<?= number_format((float) setData($atc_form1601e, 'taxRequired', $x . ''), 2) ?>"readonly/></div>
            <?php
    }
    ?>

    <div id="trtbw141"><input type="text" class="input1601e5" name="item14" value="<?= number_format((float) setData($form1601e, 'item14'), 2) ?>"readonly></div>
    <div id="trtbw15A"><input type="text" class="input1601e5" name="item15A" value="<?= number_format((float) setData($form1601e, 'item15A'), 2) ?>"></div>
    <div id="trtbw15B"><input type="text" class="input1601e5" name="item15B" value="<?= number_format((float) setData($form1601e, 'item15B'), 2) ?>"></div>
    <div id="trtbw15C"><input type="text" class="input1601e5" name="item15C" value="<?= number_format((float) setData($form1601e, 'item15C'), 2) ?>"readonly></div>
    <div id="trtbw161"><input type="text" class="input1601e5" name="item16" value="<?= number_format((float) setData($form1601e, 'item16'), 2) ?>"readonly></div>
    <div id="trtbw17A"><input type="text" class="input1601e5a" name="item17A" value="<?= number_format((float) setData($form1601e, 'item17A'), 2) ?>"></div>
    <div id="trtbw17B"><input type="text" class="input1601e5aa" name="item17B" value="<?= number_format((float) setData($form1601e, 'item17B'), 2) ?>"></div>
    <div id="trtbw17C"><input type="text" class="input1601e5aaa" name="item17C" value="<?= number_format((float) setData($form1601e, 'item17C'), 2) ?>"></div>
    <div id="trtbw17D"><input type="text" class="input1601e5" name="item17D" value="<?= number_format((float) setData($form1601e, 'item17D'), 2) ?>"readonly></div>
    <div id="trtbw181"><input type="text" class="input1601e5" name="item18" value="<?= number_format((float) setData($form1601e, 'item18'), 2) ?>"readonly></div>
    
	<div id="trtbw181tbr">
		<input type="hidden" name="item18OverRemittance" id="item18Value">
		<input type="text" class="input1601e18" value="<?= $form1601e->item18OverRemittance == 'refunded' ? 'x' : '' ?>">
		<input type="hidden" id="item18" value="refund">
	</div>
    <div id="trtbw181tbi">
		<input type="text" class="input1601e18" value="<?= $form1601e->item18OverRemittance == 'issuedTCC' ? 'x' : '' ?>">
		<input type="hidden" id="item18" value="tcc">
	</div>
</div>

<?php

function setData($array, $data, $index = '') {
    if (!empty($array)) {
        if ($index != '') {
            if (!empty($array[$index]->$data)) {
                return $array[$index]->$data;
            }
        } else {
            if (!empty($array->$data)) {
                return $array->$data;
            }
        }
    }
}
?>		