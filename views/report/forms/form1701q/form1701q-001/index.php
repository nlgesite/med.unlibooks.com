<?php
$form1701q = isset($this->form1701q) ? $this->form1701q : '';
//	 print_r($this->form1701q);
//exit;
?>
<style>
    .formInput{
        height: 25px;
        width: 300px;
        background: transparent;
        border: none;
        text-align: right;
        padding-right: 10px;
    }

    .item_1{
        height: 31px;
        width: 123px;
        background: transparent;
        border: none;
        text-align: center!important;
        letter-spacing: 20px;
        padding: 9px;
    }

    .item_2{
        height: 20px;
        width: 31px;
        background: transparent;
        border: none;
        text-align: center !important;
        margin-top: -4px;
    }

    .item_3{
        height: 20px;
        width: 31px;
        background: transparent;
        border: none;
        text-align: center !important;
        margin-top: -3px;
    }

    .item_4{
        height: 29px;
        width: 68px;
        background: transparent;
        border: none;
    }

    .item_5{
        height: 29px;
        width: 346px;
        /* background: transparent; */
        border: none;
        padding: 5;
        letter-spacing: 11px;
    }

    .item_6{
        height: 29px;
        width: 71px;
        background: transparent;
        border: none;
        padding: 0px;
        letter-spacing: 8px;
    }

    .item_7{
        height: 29px;
        width: 337px;
        background: transparent;
        border: none;
    }

    .item_8{
        height: 29px;
        width: 70px;
        background: transparent;
        border: none;
    }

    .item_9{
        height: 29px;
        width: 548px;
        background: transparent;
        border: none;
        padding: 5;
        letter-spacing: 1;
        text-align: left !important;
    }
    

    .item_10{
        height: 29px;
        width: 548px;
        background: transparent;
        border: none;
    }

    .item_11{
        height: 29px;
        width: 548px;
        background: transparent;
        border: none;
        text-align: left !important;
        padding: 5;
        letter-spacing: 1;
    }

    .item_12{
        height: 29px;
        width: 548px;
        background: transparent;
        border: none;
    }

    .item_13{
        height: 29px;
        width: 233px;
        background: transparent;
        border: none;
    }

    .item_14{
        height: 29px;
        width: 80px;
        background: transparent;
        border: none;
        letter-spacing: 6px;
    }

    .item_15{
        height: 29px;
        width: 143px;
        /* background: transparent; */
        border: none;
        text-align: left !important;
        padding: 5;
    }

    .item_16{
        height: 29px;
        width: 233px;
        background: transparent;
        border: none;
    }

    .item_17{
        height: 29px;
        width: 81px;
        background: transparent;
        border: none;
    }

    .item_18{
        height: 29px;
        width: 143px;
        background: transparent;
        border: none;
    }

    .item_19{
        height: 27px;
        width: 244px;
        background: transparent;
        border: none;
        padding: 5;
        text-align: left !important;
        letter-spacing: 1;
    }

    .item_20{
        height: 17px;
        width: 74px;
        background: transparent;
        border: none;
    }

    .item_20_2{
        height: 15px;
        width: 30px;
        background: transparent;
        border: none;
    }

    .item_21{
        height: 27px;
        width: 232px;
        background: transparent;
        border: none;
    }

    .item_22{
        height: 17px;
        width: 74px;
        background: transparent;
        border: none;
    }

    .item_22_2{
        height: 15px;
        width: 30px;
        background: transparent;
        border: none;
    }

    .item_23{
        height: 20px;
        width: 30px;
        background: transparent;
        border: none;
    }

    .item_24{
        height: 20px;
        width: 30px;
        background: transparent;
        border: none;
    }

    .item_25{
        height: 20px;
        width: 27px;
        background: transparent;
        border: none;
         text-align: center !important;
        margin-top: -7px;
    }

    .item_25_specify{
        height: 15px;
        width: 261px;
        background: transparent;
        border: none;
    }

    #item1 
    { 
        left: 234px; 
        top: 218px; 
        position: absolute; 
        width: 123px;
        height: 28px;
        z-index:1;
    } 

    #item21st 
    { 
        left: 457px; 
        top: 227px; 
        position: absolute; 
        width: 29px;
        height: 19px;
        z-index:2;
    } 

    #item22nd 
    { 
        left: 534px; 
        top: 227px; 
        position: absolute; 
        width: 29px;
        height: 19px;
        z-index:3;
    } 

    #item23rd 
    { 
        left: 622px; 
        top: 227px; 
        position: absolute; 
        width: 29px;
        height: 19px;
        z-index:4;
    } 

    #item3yes 
    { 
        left: 812px; 
        top: 227px; 
        position: absolute; 
        width: 29px;
        height: 19px;
        z-index:5;
    } 

    #item3no 
    { 
        left: 897px; 
        top: 227px; 
        position: absolute; 
        width: 29px;
        height: 19px;
        z-index:6;
    } 

    #item4 
    { 
        left: 1111px; 
        top: 218px; 
        position: absolute; 
        width: 68px;
        height: 28px;
        z-index:7;
    } 

    #item5 
    { 
        left: 104px; 
        top: 298px; 
        position: absolute; 
        width: 344px;
        height: 29px;
        z-index:8;
    } 

    #item6 
    { 
        left: 537px; 
        top: 298px; 
        position: absolute; 
        width: 69px;
        height: 29px;
        z-index:9;
    } 

    #item7 
    { 
        left: 674px; 
        top: 298px; 
        position: absolute; 
        width: 335px;
        height: 29px;
        z-index:10;
    } 

    #item8 
    { 
        left: 1111px; 
        top: 298px; 
        position: absolute; 
        width: 69px;
        height: 29px;
        z-index:11;
    } 

    #item9 
    { 
        left: 60px; 
        top: 351px; 
        position: absolute; 
        width: 546px;
        height: 29px;
        z-index:12;
    } 

    #item10 
    { 
        left: 632px; 
        top: 351px; 
        position: absolute; 
        width: 546px;
        height: 29px;
        z-index:13;
    } 

    #item11 
    { 
        left: 60px; 
        top: 402px; 
        position: absolute; 
        width: 546px;
        height: 29px;
        z-index:14;
    } 

    #item12 
    { 
        left: 632px; 
        top: 402px; 
        position: absolute; 
        width: 546px;
        height: 29px;
        z-index:15;
    } 

    #item13 
    { 
        left: 60px; 
        top: 455px; 
        position: absolute; 
        width: 232px;
        height: 28px;
        z-index:16;
    } 

    #item14 
    { 
        left: 351px; 
        top: 455px; 
        position: absolute; 
        width: 80px;
        height: 28px;
        z-index:17;
    } 

    #item15 
    { 
        left: 463px; 
        top: 455px; 
        position: absolute; 
        width: 143px;
        height: 28px;
        z-index:18;
    } 

    #item16 
    { 
        left: 632px; 
        top: 455px; 
        position: absolute; 
        width: 231px;
        height: 28px;
        z-index:19;
    } 

    #item17 
    { 
        left: 900px; 
        top: 455px; 
        position: absolute; 
        width: 80px;
        height: 28px;
        z-index:20;
    } 

    #item18 
    { 
        left: 1037px; 
        top: 455px; 
        position: absolute; 
        width: 141px;
        height: 28px;
        z-index:21;
    } 

    #item19 
    { 
        left: 60px; 
        top: 515px; 
        position: absolute; 
        width: 243px;
        height: 26px;
        z-index:22;
    } 

    #item20011 
    { 
        left: 364px; 
        top: 490px; 
        position: absolute; 
        width: 71px;
        height: 16px;
        z-index:23;
    } 

    #item20012 
    { 
        left: 364px; 
        top: 510px; 
        position: absolute; 
        width: 71px;
        height: 15px;
        z-index:24;
    } 

    #item20013 
    { 
        left: 364px; 
        top: 529px; 
        position: absolute; 
        width: 71px;
        height: 17px;
        z-index:25;
    } 

    #item20compensation 
    { 
        left: 575px; 
        top: 491px; 
        position: absolute; 
        width: 29px;
        height: 14px;
        z-index:26;
    } 

    #item20business 
    { 
        left: 575px; 
        top: 510px; 
        position: absolute; 
        width: 29px;
        height: 14px;
        z-index:27;
    } 

    #item20mixedIncome 
    { 
        left: 575px; 
        top: 529px; 
        position: absolute; 
        width: 29px;
        height: 14px;
        z-index:28;
    } 

    #item21 
    { 
        left: 632px; 
        top: 515px; 
        position: absolute; 
        width: 232px;
        height: 26px;
        z-index:29;
    } 

    #item22011 
    { 
        left: 911px; 
        top: 490px; 
        position: absolute; 
        width: 72px;
        height: 16px;
        z-index:30;
    } 

    #item22012 
    { 
        left: 911px; 
        top: 510px; 
        position: absolute; 
        width: 72px;
        height: 15px;
        z-index:31;
    } 

    #item22013 
    { 
        left: 911px; 
        top: 529px; 
        position: absolute; 
        width: 73px;
        height: 17px;
        z-index:32;
    } 

    #item22compensation 
    { 
        left: 1147px; 
        top: 491px; 
        position: absolute; 
        width: 29px;
        height: 14px;
        z-index:33;
    } 

    #item22business 
    { 
        left: 1147px; 
        top: 510px; 
        position: absolute; 
        width: 29px;
        height: 14px;
        z-index:34;
    } 

    #item22mixedIncome 
    { 
        left: 1147px; 
        top: 529px; 
        position: absolute; 
        width: 29px;
        height: 14px;
        z-index:35;
    } 

    #item23itemizedDeduct 
    { 
        left: 77px; 
        top: 567px; 
        position: absolute; 
        width: 29px;
        height: 18px;
        z-index:36;
    } 

    #item23optionalSD 
    { 
        left: 296px; 
        top: 567px; 
        position: absolute; 
        width: 30px;
        height: 18px;
        z-index:37;
    } 

    #item24itemizedDeduct 
    { 
        left: 653px; 
        top: 567px; 
        position: absolute; 
        width: 30px;
        height: 18px;
        z-index:38;
    } 

    #item24optionalSD 
    { 
        left: 881px; 
        top: 567px; 
        position: absolute; 
        width: 30px;
        height: 18px;
        z-index:39;
    } 

    #item25yes 
    { 
        left: 646px; 
        top: 597px; 
        position: absolute; 
        width: 24px;
        height: 15px;
        z-index:40;
    } 

    #item25no 
    { 
        left: 737px; 
        top: 597px; 
        position: absolute; 
        width: 24px;
        height: 15px;
        z-index:41;
    } 

    #item25specify 
    { 
        left: 918px; 
        top: 597px; 
        position: absolute; 
        width: 261px;
        height: 15px;
        z-index:42;
    } 


</style>

<script>
//    $('.item_2').click(function() {
//        $('.item_2').val('');
//        $(this).val('x');
//
//        tempVal = $(this).parent().find('#item2').val();
//
//        $('#item2Value').val(tempVal);
//    });
    
    function optionSelected($obj,$objectno){
        $('.item_'+ $objectno).val('');
        $($obj).val('x');

        tempVal = $($obj).parent().find('#item'+ $objectno).val();

        $('#item'+$objectno+'Value').val(tempVal);
    }
</script>
<link href="<?= $this->imageUrl ?>form1701q-001/styles.css" rel="stylesheet" type="text/css">
<script>paymentmode = "<?php echo DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->modeOfPayment; ?>";</script>
<script src="<?= URL ?>views/report/forms/js.js" type="text/javascript"></script>
<script src="<?= URL ?>views/report/forms/form1701q/1701q.js" type="text/javascript"></script>

<div id="background">

    <div id="Layer0"><img src="<?= $this->imageUrl ?>form1701q-001/images/Layer0.png"></div>

    <!--for profile-->
    <div id="item1">
        <input type="text" class="item_1" name="item1" value="<?= setData($form1701q, 'item1'); ?>">
    </div>
    <div id="item21st">
        <input type="hidden" id ="item2Value" value ="" name="item2"/>
        <input type="text" class="item_2" name="item2" value="<?= setData($form1701q, 'item2'); ?>" onclick="optionSelected(this,2)" readonly>
        <input type="hidden" id ="item2" value ="1st" />
    </div>
    <div id="item22nd">
        <input type="text" class="item_2" name="item2" value="<?= setData($form1701q, 'item2'); ?>" onclick="optionSelected(this,2)" readonly>
        <input type="hidden" id ="item2" value ="2nd" />
    </div>
    <div id="item23rd">
        <input type="text" class="item_2" name="item2" value="<?= setData($form1701q, 'item2'); ?>" onclick="optionSelected(this,2)" readonly>
        <input type="hidden" id ="item2" value ="3rd" />
    </div>
    <div id="item3yes">
        <input type="hidden" id ="item3Value" value ="" name="item3"/>
        <input type="text" class="item_3" name="item3" value="<?= setData($form1701q, 'item3'); ?>" onclick="optionSelected(this,3)" readonly>
        <input type="hidden" id ="item3" value ="yes" />
    </div>
    <div id="item3no">
        <input type="text" class="item_3" name="item3" value="<?= setData($form1701q, 'item3'); ?>" onclick="optionSelected(this,3)" readonly>
        <input type="hidden" id ="item3" value ="no" />
    </div>
    <div id="item4">
        <input type="text" class="item_4" name="item4" value="<?= setData($form1701q, 'item4'); ?>">
    </div>
    <div id="item5">
        <input type="text" class="item_5" name="item5" value="<?= setData($form1701q, 'item5'); ?>">
    </div>
    <div id="item6">
        <input type="text" class="item_6" name="item6" value="<?= setData($form1701q, 'item6'); ?>">
    </div>
    <div id="item7">
        <input type="text" class="item_7" name="item7" value="<?= setData($form1701q, 'item7'); ?>">
    </div>
    <div id="item8">
        <input type="text" class="item_8" name="item8" value="<?= setData($form1701q, 'item8'); ?>">
    </div>
    <div id="item9">
        <input type="text" class="item_9" name="item9" value="<?= setData($form1701q, 'item9'); ?>">
    </div>
    <div id="item10">
        <input type="text" class="item_10" name="item10" value="<?= setData($form1701q, 'item10'); ?>">
    </div>
    <div id="item11">
        <input type="text" class="item_11" name="item11" value="<?= setData($form1701q, 'item11'); ?>">
    </div>
    <div id="item12">
        <input type="text" class="item_12" name="item12" value="<?= setData($form1701q, 'item12'); ?>">
    </div>
    <div id="item13">
        <input type="text" class="item_13" name="item13" value="<?= setData($form1701q, 'item13'); ?>">
    </div>
    <div id="item14">
        <input type="text" class="item_14" name="item14" value="<?= setData($form1701q, 'item14'); ?>">
    </div>
    <div id="item15">
        <input type="text" class="item_15" name="item15" value="<?= setData($form1701q, 'item15'); ?>">
    </div>
    <div id="item16">
        <input type="text" class="item_16" name="item16" value="<?= setData($form1701q, 'item16'); ?>">
    </div>
    <div id="item17">
        <input type="text" class="item_17" name="item17" value="<?= setData($form1701q, 'item17'); ?>">
    </div>
    <div id="item18">
        <input type="text" class="item_18" name="item18" value="<?= setData($form1701q, 'item18'); ?>">
    </div>
    <div id="item19">
        <input type="text" class="item_19" name="item19" value="<?= setData($form1701q, 'item19'); ?>">
    </div>
    <div id="item20011">
        <input type="text" class="item_20" name="item20Atc1" value="<?= setData($form1701q, 'item20Atc1'); ?>">
    </div>
    <div id="item20012">
        <input type="text" class="item_20" name="item20Atc2" value="<?= setData($form1701q, 'item20Atc2'); ?>">
    </div>
    <div id="item20013">
        <input type="text" class="item_20" name="item20Atc3" value="<?= setData($form1701q, 'item20Atc3'); ?>">
    </div>
    <div id="item20compensation">
        <input type="text" class="item_20_2" name="item20Compensation" >
    </div>
    <div id="item20business">
        <input type="text" class="item_20_2" name="item20Business" >
    </div>
    <div id="item20mixedIncome">
        <input type="text" class="item_20_2" name="item20MixedIncome" >
    </div>
    <div id="item21">
        <input type="text" class="item_21" name="item21" >
    </div>
    <div id="item22011">
        <input type="text" class="item_22" name="item22Atc1" >
    </div>
    <div id="item22012">
        <input type="text" class="item_22" name="item22Atc2" >
    </div>
    <div id="item22013">
        <input type="text" class="item_22" name="item22Atc3" >
    </div>
    <div id="item22compensation">
        <input type="text" class="item_22_2" name="item22Compensation" >
    </div>
    <div id="item22business">
        <input type="text" class="item_22_2" name="item22Business" >
    </div>
    <div id="item22mixedIncome">
        <input type="text" class="item_22_2" name="item22MixedIncome" >
    </div>
    <div id="item23itemizedDeduct">
        <input type="text" class="item_23" name="item23Itemized" >
    </div>
    <div id="item23optionalSD">
        <input type="text" class="item_23" name="item23Osd" >
    </div>
    <div id="item24itemizedDeduct">
        <input type="text" class="item_24" name="item24Itemized" >
    </div>
    <div id="item24optionalSD">
        <input type="text" class="item_24" name="item24Osd" >
    </div>
    <div id="item25yes">
        <input type="hidden" id ="item25Value" value ="" name="item25"/>
        <input type="text" class="item_25" name="item25" onclick="optionSelected(this,25)" readonly>
        <input type="hidden" id="item25" value="yes" >
    </div>
    <div id="item25no">
        <input type="text" class="item_25" name="item25" onclick="optionSelected(this,25)" readonly>
        <input type="hidden" id="item25" value="no" >
    </div>
    <div id="item25specify">
        <input type="text" class="item_25_specify" name="item25Specify" >
    </div>
    <!--end profile-->
    <div id="f26a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q26A" value="<?= $form1701q->iTR1701Q26A ?>" readonly/>
    </div>
    <div id="f26b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q26B" value="<?= setData($form1701q, 'iTR1701Q26B') ?>"/>
    </div>
    <div id="f27a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q27A" value="<?= setData($form1701q, 'iTR1701Q27A') ?>"/>
    </div>
    <div id="f27b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q27B" value="<?= setData($form1701q, 'iTR1701Q27B') ?>"/>
    </div>
    <div id="f28a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q28A" value="<?= setData($form1701q, 'iTR1701Q28A') ?>" readonly />
    </div>
    <div id="f28b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q28B" value="<?= setData($form1701q, 'iTR1701Q28B') ?>" readonly/>
    </div>
    <div id="f29a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q29A" value="<?= setData($form1701q, 'iTR1701Q29A') ?>" readonly/>
    </div>
    <div id="f29b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q29B" value="<?= setData($form1701q, 'iTR1701Q29B') ?>" />
    </div>
    <div id="f30a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q30A" value="<?= setData($form1701q, 'iTR1701Q30A') ?>" readonly />
    </div>
    <div id="f30b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q30B" value="<?= setData($form1701q, 'iTR1701Q30B') ?>" readonly/>
    </div>
    <div id="f31a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q31A" value="<?= $form1701q->iTR1701Q31A ?>" readonly />
    </div>
    <div id="f31b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q31B" value="<?= setData($form1701q, 'iTR1701Q31B') ?>" />
    </div>
    <div id="f32a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q32A" value="<?= setData($form1701q, 'iTR1701Q32A') ?>" readonly />
    </div>
    <div id="f32b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q32B" value="<?= setData($form1701q, 'iTR1701Q32B') ?>" readonly/>
    </div>
    <div id="f33a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q33A" value="<?= $form1701q->iTR1701Q33A ?>" readonly />
    </div>
    <div id="f33b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q33B" value="<?= setData($form1701q, 'iTR1701Q33B') ?>" />
    </div>
    <div id="f34a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q34A" value="<?= setData($form1701q, 'iTR1701Q34A') ?>" readonly />
    </div>
    <div id="f34b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q34B" value="<?= setData($form1701q, 'iTR1701Q34B') ?>" readonly/>
    </div>
    <div id="f35a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q35A" value="<?= setData($form1701q, 'iTR1701Q35A') ?>" />
    </div>
    <div id="f35b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q35B" value="<?= setData($form1701q, 'iTR1701Q35B') ?>" />
    </div>
    <div id="f36a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q36A" value="<?= setData($form1701q, 'iTR1701Q36A') ?>" readonly />
    </div>
    <div id="f36b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q36B" value="<?= setData($form1701q, 'iTR1701Q36B') ?>" readonly />
    </div>
    <div id="f37a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q37A" value="<?= $form1701q->iTR1701Q37A ?>" readonly />
    </div>
    <div id="f37b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q37B" value="<?= setData($form1701q, 'iTR1701Q37B') ?>" readonly />
    </div>
    <div id="f38a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38A" value="<?= setData($form1701q, 'iTR1701Q38A') ?>"/>
    </div>
    <div id="f38b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38B" value="<?= setData($form1701q, 'iTR1701Q38B') ?>"/>
    </div>
    <div id="f38c">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38C" value="<?= setData($form1701q, 'iTR1701Q38C') ?>"/>
    </div>
    <div id="f38d">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38D" value="<?= setData($form1701q, 'iTR1701Q38D') ?>"/>
    </div>
    <div id="f38e">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38E" value="<?= setData($form1701q, 'iTR1701Q38E') ?>"/>
    </div>
    <div id="f38f">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38F" value="<?= setData($form1701q, 'iTR1701Q38F') ?>"/>
    </div>
    <div id="f38g">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38G" value="<?= $form1701q->iTR1701Q38G ?>" readonly />
    </div>
    <div id="f38h">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38H" value="<?= setData($form1701q, 'iTR1701Q38H') ?>" />
    </div>
    <div id="f38i">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38I" value="<?= setData($form1701q, 'iTR1701Q38I') ?>"/>
    </div>
    <div id="f38j">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38J" value="<?= setData($form1701q, 'iTR1701Q38J') ?>"/>
    </div>
    <div id="f38k">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38K" value="<?= setData($form1701q, 'iTR1701Q38K') ?>"/>
    </div>
    <div id="f38l">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38L" value="<?= setData($form1701q, 'iTR1701Q38L') ?>"/>
    </div>
    <div id="f38m">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38M" value="<?= setData($form1701q, 'iTR1701Q38M') ?>" readonly />
    </div>
    <div id="f38n">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q38N" value="<?= setData($form1701q, 'iTR1701Q38N') ?>" readonly />
    </div>
    <div id="f39a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q39A" value="<?= setData($form1701q, 'iTR1701Q39A') ?>" readonly />
    </div>
    <div id="f39b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q39B" value="<?= setData($form1701q, 'iTR1701Q39B') ?>" readonly />
    </div>
    <div id="f40a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40A" value="<?= setData($form1701q, 'iTR1701Q40A') ?>"/>
    </div>
    <div id="f40b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40B" value="<?= setData($form1701q, 'iTR1701Q40B') ?>"/>
    </div>
    <div id="f40c">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40C" value="<?= setData($form1701q, 'iTR1701Q40C') ?>"/>
    </div>
    <div id="f40d">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40D" value="<?= setData($form1701q, 'iTR1701Q40D') ?>"/>
    </div>
    <div id="f40e">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40E" value="<?= setData($form1701q, 'iTR1701Q40E') ?>"/>
    </div>
    <div id="f40f">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40F" value="<?= setData($form1701q, 'iTR1701Q40F') ?>"/>
    </div>
    <div id="f40g">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40G" value="<?= setData($form1701q, 'iTR1701Q40G') ?>" readonly />
    </div>
    <div id="f40h">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q40H" value="<?= setData($form1701q, 'iTR1701Q40H') ?>" readonly />
    </div>
    <div id="f41a">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q41A" value="<?= setData($form1701q, 'iTR1701Q41A') ?>" readonly />
    </div>
    <div id="f41b">
        <input type="text" class="formInput isFloat isNumeric" name="iTR1701Q41B" value="<?= setData($form1701q, 'iTR1701Q41B') ?>" readonly/>
    </div>
    <div id="f41c">
        <input type="text" class="formInput " name="iTR1701Q41C" value="<?= setData($form1701q, 'iTR1701Q41C') ?>" readonly/>
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

<script>
    $(function() {
        $('.isNumeric').each(function() {
            if ($(this).val() != '') {
                $(this).val($.number($(this).val(), 2));
            }
        })
    })
</script>