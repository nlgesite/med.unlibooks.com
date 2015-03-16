<?php
$form1701 = isset($this->form1701) ? $this->form1701 : '';
// print_r($form1701);
// exit;
?>
<style>
    .inpText{
        width: 272px;
        height: 24px;
        border: none;
        background: transparent;
    }
    .inpText2{
        width: 272px;
        height: 33px;
        border: none;
        background: transparent;
    }

    #item1M 
    { 
        left: 182px; 
        top: 226px; 
        position: absolute; 
        width: 54px;
        height: 24px;
        z-index:1;
    } 

    #item1Y 
    { 
        left: 300px; 
        top: 225px; 
        position: absolute; 
        width: 54px;
        height: 24px;
        z-index:2;
    } 

    #item2yes 
    { 
        left: 543px; 
        top: 227px; 
        position: absolute; 
        width: 28px;
        height: 24px;
        z-index:3;
    } 

    #item2no 
    { 
        left: 649px; 
        top: 228px; 
        position: absolute; 
        width: 27px;
        height: 24px;
        z-index:4;
    } 

    #item3yes 
    { 
        left: 1018px; 
        top: 227px; 
        position: absolute; 
        width: 27px;
        height: 24px;
        z-index:5;
    } 

    #item3no 
    { 
        left: 1116px; 
        top: 228px; 
        position: absolute; 
        width: 26px;
        height: 23px;
        z-index:6;
    } 

    #item4ATC 
    { 
        left: 312px; 
        top: 262px; 
        position: absolute; 
        width: 26px;
        height: 29px;
        z-index:7;
    } 

    #item4CI 
    { 
        left: 590px; 
        top: 262px; 
        position: absolute; 
        width: 34px;
        height: 28px;
        z-index:8;
    } 

    #item4MI 
    { 
        left: 1030px; 
        top: 262px; 
        position: absolute; 
        width: 28px;
        height: 28px;
        z-index:9;
    } 

    #item5 
    { 
        left: 460px; 
        top: 317px; 
        position: absolute; 
        width: 537px;
        height: 33px;
        z-index:10;
    } 

    #item6 
    { 
        left: 1158px; 
        top: 317px; 
        position: absolute; 
        width: 86px;
        height: 33px;
        z-index:11;
    } 

    #item7SP 
    { 
        left: 465px; 
        top: 352px; 
        position: absolute; 
        width: 30px;
        height: 23px;
        z-index:12;
    } 

    #item7P 
    { 
        left: 707px; 
        top: 352px; 
        position: absolute; 
        width: 26px;
        height: 23px;
        z-index:13;
    } 

    #item7E 
    { 
        left: 902px; 
        top: 352px; 
        position: absolute; 
        width: 32px;
        height: 23px;
        z-index:14;
    } 

    #item7T 
    { 
        left: 1061px; 
        top: 352px; 
        position: absolute; 
        width: 27px;
        height: 23px;
        z-index:15;
    } 

    #item8 
    { 
        left: 44px; 
        top: 402px; 
        position: absolute; 
        width: 1188px;
        height: 29px;
        z-index:16;
    } 

    #item9 
    { 
        left: 39px; 
        top: 457px; 
        position: absolute; 
        width: 1188px;
        height: 30px;
        z-index:17;
    } 

    #item10 
    { 
        left: 40px; 
        top: 512px; 
        position: absolute; 
        width: 1187px;
        height: 29px;
        z-index:18;
    } 

    #item10two 
    { 
        left: 40px; 
        top: 543px; 
        position: absolute; 
        width: 1187px;
        height: 29px;
        z-index:19;
    } 

    #item11M 
    { 
        left: 44px; 
        top: 596px; 
        position: absolute; 
        width: 68px;
        height: 30px;
        z-index:20;
    } 

    #item11D 
    { 
        left: 147px; 
        top: 597px; 
        position: absolute; 
        width: 68px;
        height: 29px;
        z-index:21;
    } 

    #item11Y 
    { 
        left: 252px; 
        top: 597px; 
        position: absolute; 
        width: 133px;
        height: 28px;
        z-index:22;
    } 

    #item12 
    { 
        left: 388px; 
        top: 597px; 
        position: absolute; 
        width: 845px;
        height: 27px;
        z-index:23;
    } 

    #item13 
    { 
        left: 44px; 
        top: 650px; 
        position: absolute; 
        width: 456px;
        height: 34px;
        z-index:24;
    } 

    #item14S 
    { 
        left: 534px; 
        top: 650px; 
        position: absolute; 
        width: 31px;
        height: 34px;
        z-index:25;
    } 

    #item14M 
    { 
        left: 670px; 
        top: 650px; 
        position: absolute; 
        width: 31px;
        height: 34px;
        z-index:26;
    } 

    #item14LS 
    { 
        left: 805px; 
        top: 650px; 
        position: absolute; 
        width: 31px;
        height: 34px;
        z-index:27;
    } 

    #item14W 
    { 
        left: 1070px; 
        top: 649px; 
        position: absolute; 
        width: 32px;
        height: 35px;
        z-index:28;
    } 

    #item15WI 
    { 
        left: 446px; 
        top: 694px; 
        position: absolute; 
        width: 26px;
        height: 23px;
        z-index:29;
    } 

    #item15WNO 
    { 
        left: 598px; 
        top: 693px; 
        position: absolute; 
        width: 29px;
        height: 24px;
        z-index:30;
    } 

    #item16FS 
    { 
        left: 922px; 
        top: 694px; 
        position: absolute; 
        width: 27px;
        height: 23px;
        z-index:31;
    } 

    #item16SF 
    { 
        left: 1065px; 
        top: 694px; 
        position: absolute; 
        width: 27px;
        height: 23px;
        z-index:32;
    } 

    #item17 
    { 
        left: 182px; 
        top: 726px; 
        position: absolute; 
        width: 575px;
        height: 38px;
        z-index:33;
    } 

    #item18 
    { 
        left: 866px; 
        top: 726px; 
        position: absolute; 
        width: 168px;
        height: 37px;
        z-index:34;
    } 

    #item19 
    { 
        left: 1129px; 
        top: 726px; 
        position: absolute; 
        width: 111px;
        height: 37px;
        z-index:35;
    } 

    #item20ID 
    { 
        left: 358px; 
        top: 773px; 
        position: absolute; 
        width: 25px;
        height: 22px;
        z-index:36;
    } 

    #item20OSD 
    { 
        left: 655px; 
        top: 773px; 
        position: absolute; 
        width: 26px;
        height: 23px;
        z-index:37;
    } 

    #item21C 
    { 
        left: 308px; 
        top: 804px; 
        position: absolute; 
        width: 36px;
        height: 34px;
        z-index:38;
    } 

    #item21A 
    { 
        left: 431px; 
        top: 804px; 
        position: absolute; 
        width: 36px;
        height: 34px;
        z-index:39;
    } 

    #item21O 
    { 
        left: 573px; 
        top: 804px; 
        position: absolute; 
        width: 35px;
        height: 34px;
        z-index:40;
    } 

    #item21Specify 
    { 
        left: 762px; 
        top: 804px; 
        position: absolute; 
        width: 482px;
        height: 34px;
        z-index:41;
    } 

    #item22yes 
    { 
        left: 391px; 
        top: 842px; 
        position: absolute; 
        width: 20px;
        height: 21px;
        z-index:42;
    } 

    #item22no 
    { 
        left: 487px; 
        top: 842px; 
        position: absolute; 
        width: 21px;
        height: 20px;
        z-index:43;
    } 

    #item23yes 
    { 
        left: 1045px; 
        top: 842px; 
        position: absolute; 
        width: 20px;
        height: 20px;
        z-index:44;
    } 

    #item23no 
    { 
        left: 1139px; 
        top: 840px; 
        position: absolute; 
        width: 20px;
        height: 20px;
        z-index:45;
    } 

    #item24yes 
    { 
        left: 399px; 
        top: 887px; 
        position: absolute; 
        width: 26px;
        height: 22px;
        z-index:46;
    } 

    #item24no 
    { 
        left: 509px; 
        top: 886px; 
        position: absolute; 
        width: 26px;
        height: 23px;
        z-index:47;
    } 

    #item25 
    { 
        left: 1135px; 
        top: 883px; 
        position: absolute; 
        width: 44px;
        height: 36px;
        z-index:48;
    } 

    .item_1{
        width: 54px;
        height: 25px;
        border: none;
        background: transparent;
        letter-spacing: 14px;
        margin-top: -2px;
        outline-style: none;rent;
    }

    .item_2{
        width: 28px;
        height: 27px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }

    .item_3{
        width: 28px;
        height: 27px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }

    .item_4{
        width: 28px;
        height: 30px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }

    .item_4b{
        width: 36px;
        height: 30px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }

    .item_5{
        width: 544px;
        height: 33px;
        border: 1px solid black;
        text-align: center !important;
        outline-style: none;
    }

    .item_6{
        width: 88px;
        height: 36px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        letter-spacing: 17px;
    }

    .item_7{
        width: 28px;
        height: 30px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }

    .item_8{
        width: 1188px;
        height: 32px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        letter-spacing: 22px;
        text-align: left !important;
        margin-left: 14px;
    }
    .item_9{
        width: 1188px;
        height: 32px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        letter-spacing: 22px;
        text-align: left !important;
        margin-left: 18px;
    }
    .item_10{
        width: 1188px;
        height: 32px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        letter-spacing: 22px;
        text-align: left !important;
        margin-left: 18px;
    }

    .item_11{
        width: 67px;
        height: 30px;
        border: none;
        background: transparent;
        letter-spacing: 14px;
        margin-top: -2px;
        outline-style: none;rent;
    }
    .item_11b{
        width: 142px;
        height: 30px;
        border: none;
        background: transparent;
        letter-spacing: 20px;
        margin-top: -2px;
        outline-style: none;
    }

    .item_12{
        width: 852px;
        height: 30px;
        border: none;
        background: transparent;
        letter-spacing: 22px;
        margin-top: -2px;
        outline-style: none;
        text-align: left !important;
        margin-left: 9px;
    }

    .item_13{
        width: 446px;
        height: 36px;
        border: none;
        background: transparent;
        letter-spacing: 23px;
        margin-top: -2px;
        outline-style: none;
        text-align: left !important;
        margin-left: 14px
    }

    .item_14{
        width: 32px;
        height: 36px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_15{
        width: 26px;
        height: 26px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_16{
        width: 26px;
        height: 26px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }

    .item_17{
        width: 567px;
        height: 40px;
        border: none;
        background: transparent;
        letter-spacing: 18px;
        margin-top: -2px;
        outline-style: none;
        text-align: left !important;
        margin-left: 10px;
    }
    .item_18{
        width: 165px;
        height: 40px;
        border: none;
        background: transparent;
        letter-spacing: 16px;
        margin-top: -2px;
        outline-style: none;
        text-align: left !important;
    }
    .item_19{
        width: 117px;
        height: 40px;
        border: none;
        background: transparent;
        letter-spacing: 16px;
        margin-top: -2px;
        outline-style: none;
        text-align: left !important;
    }
    .item_20{
        width: 26px;
        height: 26px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_21{
        width: 36px;
        height: 36px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_21b{
        width: 498px;
        height: 36px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: left !important;
        letter-spacing: 21px;
    }
    .item_22{
        width: 26px;
        height: 26px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_23{
        width: 26px;
        height: 26px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_24{
        width: 26px;
        height: 26px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
    }
    .item_25{
        width: 78px;
        height: 39px;
        border: none;
        background: transparent;
        margin-top: -2px;
        outline-style: none;
        text-align: center !important;
        font-size: 20px;
    }


</style>

<script>
    $(function() {
        $('.item_2').click(function() {
            $('.item_2').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item2').val();

            $('#item2Value').val(tempVal);
        });
        $('.item_3').click(function() {
            $('.item_3').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item3').val();

            $('#item3Value').val(tempVal);
        });
        $('.item4choi').click(function() {
            $('.item4choi').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item4').val();

            $('#item4Value').val(tempVal);
        });
        $('.item_7').click(function() {
            $('.item_7').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item7').val();

            $('#item7Value').val(tempVal);
        });
        $('.item_14').click(function() {
            $('.item_14').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item14').val();

            $('#item14Value').val(tempVal);
        });
        
        $('.item_15').click(function() {
            $('.item_15').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item15').val();

            $('#item15Value').val(tempVal);
        });
        
        $('.item_16').click(function() {
            $('.item_16').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item16').val();

            $('#item16Value').val(tempVal);
        });
        
        $('.item_20').click(function() {
            $('.item_20').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item20').val();

            $('#item20Value').val(tempVal);
        });
        
        $('.item_21').click(function() {
            $('.item_21').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item21').val();

            $('#item21Value').val(tempVal);
        });
        
        $('.item_22').click(function() {
            $('.item_22').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item22').val();

            $('#item22Value').val(tempVal);
        });
        
        $('.item_23').click(function() {
            $('.item_23').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item23').val();

            $('#item23Value').val(tempVal);
        });
        
        $('.item_24').click(function() {
            $('.item_24').val('');
            $(this).val('x');

            tempVal = $(this).parent().find('#item24').val();

            $('#item24Value').val(tempVal);
        });
    });
</script>

<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">


<div id="background">
    <div id="page11701">
        <img src="<?= $this->imageUrl ?>images/page11701.png">
    </div>
    <div id="item1M">
        <input type="text" class="item_1" name="item1Month" value="<?= setData($form1701, 'item1Month') ?>" />
    </div>
    <div id="item1Y">
        <input type="text" class="item_1" name="item1Year" value="<?= setData($form1701, 'item1Year') ?>" />
    </div>
    <div id="item2yes">
        <input type="hidden" name="amended" id="item2Value">
        <input type="text" class="item_2" value="<?= setData($form1701, 'amended') ?>" />
        <input type="hidden" id="item2" value="yes">
    </div>
    <div id="item2no">
        <input type="text" class="item_2" value="<?= setData($form1701, 'amended') ?>" />
        <input type="hidden" id="item2" value="no">
    </div>
    <div id="item3yes">
        <input type="hidden" name="shortPeriod" id="item3Value">
        <input type="text" class="item_3" value="<?= setData($form1701, 'shortPeriod') ?>" />
        <input type="hidden" id="item3" value="yes">
    </div>
    <div id="item3no">
        <input type="text" class="item_3" value="<?= setData($form1701, 'shortPeriod') ?>" />
        <input type="hidden" id="item3" value="no">
    </div>
    <div id="item4ATC">
        <input type="hidden" name="alpha" id="item4Value">
        <input type="text" class="item_4 item4choi" value="<?= setData($form1701, 'alpha') ?>" />
        <input type="hidden" id="item4" value="comp">
    </div>
    <div id="item4CI">
        <input type="text" class="item_4b item4choi" value="<?= setData($form1701, 'alpha') ?>" />
        <input type="hidden" id="item4" value="business">
    </div>
    <div id="item4MI">
        <input type="text" class="item_4 item4choi" value="<?= setData($form1701, 'alpha') ?>" />
        <input type="hidden" id="item4" value="mixed">
    </div>
    <div id="item5">
        <input type="text" class="item_5" name="taxpayerTin" value="<?= setData($form1701, 'taxpayerTin') ?>" />
    </div>
    <div id="item6">
        <input type="text" class="item_6" name="rdo" value="<?= setData($form1701, 'rdo') ?>" />
    </div>
    <div id="item7SP">
        <input type="hidden" name="taxFiler" id="item7Value">
        <input type="text" class="item_7" value="<?= setData($form1701, 'taxFiler') ?>" />
        <input type="hidden" id="item7" value="single">
    </div>
    <div id="item7P">
        <input type="text" class="item_7" value="<?= setData($form1701, 'taxFiler') ?>" />
        <input type="hidden" id="item7" value="prof">
    </div>
    <div id="item7E">
        <input type="text" class="item_7" value="<?= setData($form1701, 'taxFiler') ?>" />
        <input type="hidden" id="item7" value="estate">
    </div>
    <div id="item7T">
        <input type="text" class="item_7" value="<?= setData($form1701, 'taxFiler') ?>" />
        <input type="hidden" id="item7" value="trust">
    </div>
    <div id="item8">
        <input type="text" class="item_8" name="taxFilerName" value="<?= setData($form1701, 'taxFilerName') ?>" />
    </div>
    <div id="item9">
        <input type="text" class="item_9" name="tradeName" value="<?= setData($form1701, 'tradeName') ?>" />
    </div>
    <div id="item10">
        <input type="text" class="item_10" name="regAddress" value="<?= setData($form1701, 'regAddress') ?>" />
    </div>
    <!--<div id="item10two">
            <input type="text" class="item_10 " name="pg1Item26" value="<?= setData($form1701, 'pg1Item26') ?>" />
    </div>-->
    <div id="item11M">
        <input type="text" class="item_11" name="dateOfBirth" value="<?= setData($form1701, 'dateOfBirth') ?>" />
    </div>
    <div id="item11D">
        <input type="text" class="item_11" name="dateOfBirth" value="<?= setData($form1701, 'dateOfBirth') ?>" />
    </div>
    <div id="item11Y">
        <input type="text" class="item_11b" name="dateOfBirth" value="<?= setData($form1701, 'dateOfBirth') ?>" />
    </div>
    <div id="item12">
        <input type="text" class="item_12" name="email" value="<?= setData($form1701, 'email') ?>" />
    </div>
    <div id="item13">
        <input type="text" class="item_13" name="contactNum" value="<?= setData($form1701, 'contactNum') ?>" />
    </div>
    <div id="item14S">
        <input type="hidden" name="civilStatus" id="item14Value" value="">
        <input type="text" class="item_14" name="civilStatus" value="<?= setData($form1701, 'civilStatus') ?>" />
        <input type="hidden" id ="item14" value ="single" />
    </div>
    <div id="item14M">
        <input type="text" class="item_14" name="civilStatus" value="<?= setData($form1701, 'civilStatus') ?>" />
        <input type="hidden" id ="item14" value ="married" />
    </div>
    <div id="item14LS">
        <input type="text" class="item_14" name="civilStatus" value="<?= setData($form1701, 'civilStatus') ?>" />
        <input type="hidden" id ="item14" value ="separated" />
    </div>
    <div id="item14W">
        <input type="text" class="item_14" name="civilStatus" value="<?= setData($form1701, 'civilStatus') ?>" />
        <input type="hidden" id ="item14" value ="widow" />
    </div>
    <div id="item15WI">
        <input type="hidden" id ="item15Value" value ="" />
        <input type="text" class="item_15" name="item15" value="<?= setData($form1701, 'item15') ?>" />
        <input type="hidden" id ="item15" value ="with_income" />
    </div>
    <div id="item15WNO">
        <input type="text" class="item_15" name="item15" vaue="<?= setData($form1701, 'item15') ?>" />
        <input type="hidden" id ="item15" value ="no_income" />
    </div>
    <div id="item16FS">
        <input type="hidden" id ="item16Value" value ="" />
        <input type="text" class="item_16" name="item16" value="<?= setData($form1701, 'item16') ?>" />
        <input type="hidden" id ="item16" value ="joint" />
    </div>
    <div id="item16SF">
        <input type="text" class="item_16" name="item16" value="<?= setData($form1701, 'item16') ?>" />
        <input type="hidden" id ="item16" value ="separate" />
    </div>
    <div id="item17">
        <input type="text" class="item_17" name="item17" value="<?= setData($form1701, 'item17') ?>" />
    </div>
    <div id="item18">
        <input type="text" class="item_18" name="item18" value="<?= setData($form1701, 'item18') ?>" />
    </div>
    <div id="item19">
        <input type="text" class="item_19" name="item19" value="<?= setData($form1701, 'item19') ?>" />
    </div>
    <div id="item20ID">
        <input type="hidden" id ="item20Value" value ="" />
        <input type="text" class="item_20" name="item20" value="<?= setData($form1701, 'item20') ?>" />
        <input type="hidden" id ="item20" value ="itemized" />
    </div>
    <div id="item20OSD">
        <input type="text" class="item_20" name="item20" value="<?= setData($form1701, 'item20') ?>" />
        <input type="hidden" id ="item20" value ="osd" />
    </div>
    <div id="item21C">
        <input type="hidden" id ="item21Value" value ="" />
        <input type="text" class="item_21" name="item21" value="<?= setData($form1701, 'item21') ?>" />
        <input type="hidden" id ="item21" value ="cash" />
    </div>
    <div id="item21A">
        <input type="text" class="item_21" name="item21" value="<?= setData($form1701, 'item21') ?>" />
        <input type="hidden" id ="item21" value ="accrual" />
    </div>	
    <div id="item21O">
        <input type="text" class="item_21" name="item21" value="<?= setData($form1701, 'item21') ?>" />
        <input type="hidden" id ="item21" value ="others" />
    </div>
    <!--<div id="item21Specify">
            <input type="text" class="item_21b" name="item21" value="<?= setData($form1701, 'pg1Item26') ?>" />
    </div>-->
    <div id="item22yes">
        <input type="hidden" id ="item22Value" value ="" />
        <input type="text" class="item_22" name="item22" value="<?= setData($form1701, 'item22') ?>" />
        <input type="hidden" id ="item22" value ="yes" />
    </div>
    <div id="item22no">
        <input type="text" class="item_22" name="item22" value="<?= setData($form1701, 'item22') ?>" />
        <input type="hidden" id ="item22" value ="no" />
    </div>
    <div id="item23yes">
        <input type="hidden" id ="item23Value" value ="" />
        <input type="text" class="item_23" name="item23" value="<?= setData($form1701, 'item23') ?>" />
        <input type="hidden" id ="item23" value ="yes" />
    </div>
    <div id="item23no">
        <input type="text" class="item_23" name="item23" value="<?= setData($form1701, 'item23') ?>" />
        <input type="hidden" id ="item23" value ="no" />
    </div>
    <div id="item24yes">
        <input type="hidden" id ="item24Value" value ="" />
        <input type="text" class="item_24" name="item24" value="<?= setData($form1701, 'item24') ?>" />
        <input type="hidden" id ="item24" value ="yes" />
    </div>
    <div id="item24no">
        <input type="text" class="item_24" name="item24" value="<?= setData($form1701, 'item24') ?>" />
        <input type="hidden" id ="item24" value ="no" />
    </div>
    <div id="item25">
            <!--<input type="text" class="item_25" name="pg1Item26" value="<?= setData($form1701, 'pg1Item26') ?>" />-->
        <select class="item_25" name="item25" value="<?= setData($form1701, 'item25') ?>">
            <option>
                1
            </option>
            <option>
                2
            </option>
            <option>
                3
            </option>
            <option>
                4
            </option>
        </select>
    </div>
    <div id="partII26">
        <input type="text" class="inpText isFloat" name="pg1Item26" value="<?= setData($form1701, 'pg1Item26') ?>" />
    </div>
    <div id="partII27">
        <input type="text" class="inpText2 isFloat" name="pg1Item27" value="<?= setData($form1701, 'pg1Item27') ?>" />
    </div>
    <div id="partII28">
        <input type="text" class="inpText2 isFloat" name="pg1Item28" value="<?= setData($form1701, 'pg1Item28') ?>" />
    </div>
    <div id="partII29">
        <input type="text" class="inpText2 isFloat" name="pg1Item29" value="<?= setData($form1701, 'pg1Item29') ?>" />
    </div>
    <div id="partII30">
        <input type="text" class="inpText2 isFloat" name="pg1Item30" value="<?= setData($form1701, 'pg1Item30') ?>" />
    </div>
    <div id="partII31"> 
        <input type="text" class="inpText2 isFloat" name="pg1Item31" value="<?= setData($form1701, 'pg1Item31') ?>" />
    </div>
    <div id="partII32">
        <input type="text" class="inpText2 isFloat" name="pg1Item32" value="<?= setData($form1701, 'pg1Item32') ?>" />
    </div>
</div>

<?php

function setData2($array, $data, $index = '') {
    if (!empty($array)) {
        if ($index == '') {
            if (!empty($array->$data)) {
                return $array->$data;
            } elseif (!empty($array[$data])) {
                return $array[$data];
            }
        } else {
            if (!empty($array[$index]->$data)) {
                return $array[$index]->$data;
            }
        }
    }
}

function setData($obj, $name) {
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