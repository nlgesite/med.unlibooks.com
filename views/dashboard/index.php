<?php
	$total = 0;
?>
<style>
    .overlay {
        position: absolute;
       /*  top: 17; */
        left: 303;
        height: 325px;
        width: 679px;
        background-color: rgba(244,241,241,0.5);
        z-index: 10;  
        border-radius: 10px;
        height: 325px;
        margin: 0px;
        padding: 5px;
        margin-top:0px;
        margin-left:-9px;
    }
    .overlay2 {
        position: absolute;
        top: 367px;
        left: 303;
        height: 325px;
        width: 679px;
        background-color: rgba(244,241,241,0.5);
        z-index: 10;  
        border-radius: 10px;
        height: 325px;
        margin: 0px;
        padding: 5px;
        margin-top:7px;
        margin-left:-9px;
    }
    .overlay3 {
        position: absolute;
        top: 783;
        left: 303;
        height: 325px;
        width: 679px;
        background-color: rgba(244,241,241,0.5);
        z-index: 10;  
        border-radius: 10px;
        height: 325px;
        margin: 0px;
        padding: 5px;
        margin-top:7px;
        margin-left:-9px;
    }
    .DashboardContainer{
        margin-top: -3px; 
        background-color: white;
        /* padding-top: 30px; */
        position:relative;
    }
    .start{
        /* background-color: rgb(235,241,222); */
        padding-top: 4px;
        text-align: left;
        font-size: 28px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        color: rgb(0, 0,0);
        padding-bottom: 10px;
        padding-left:38px;
        color: #398f72;

    }
    .ciCont{
        width:100%;
        margin:0;
        padding:0;

    }
    .ciHolder {
        border: 1px solid #c8c8c8;
        float: right;
        height: 325px;
        margin: 15px;
        padding: 18px 14px;
        width: 613px;
    }
    .leftDiv{
        font-family:Arial;
        font-size:12px;
        margin-left:5px;
        margin-top:-8px;
    }
    .blueJan{
        padding:6px;
        width:75px;
        background:rgb(4, 169, 255);
    }
    .yellowFeb{
        padding:6px;
        width:75px;
        background:rgb(255, 184, 0);
    }
    .maroonMar{
        padding:6px;
        width:75px;
        background:rgb(169, 70, 70);
    }
    .violetApr{
        padding:6px;
        width:75px;
        background:rgb(148, 13, 178);
    }	
    .topMar{
        margin-top:5px;
    }
    .topMarMon{
        margin-top:8px;
        font-size:10px;
        font-family:Arial;
    }
    .topMarDash{
        margin-top:3px;
    }
    .topMarAmount{
        margin-top:6px;
        font-size:10px;
    }

    .monthly_sales {
        border: 1px solid gray;
        float:right;
        font-size:12px;
        margin-bottom:15px;
        margin-left:-66px;
        margin-top:-22px;
        width:323px;
    }


    .cibDiv {
        height: 180px;
        margin-left: 176px;
        margin-top: 60px;
        position: absolute;
        width: 317px;
        border: 1px solid #c8c8c8;
        border-radius: 5px;
        z-index: 11;
        background-color: #fff
    }
    .cibDivlast {	
        /*  height: 195px;
         margin-left: 160px;
         margin-top: -200px;
         position: absolute;
         width: 336px;
         border: 2px solid black;
         border-radius:15px;
             background-color:#fff; */
        height: 180px;
        margin-left: 176px;
        margin-top: -202px;
        position: absolute;
        width: 317px;
        border: 1px solid #c8c8c8;
        border-radius: 5px;
        z-index: 11;
        background-color: #fff
    }
    .startCreateInv{
        width: 203px;
        height: 29px;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 20px;
        margin-left: 49px;
        font-weight: bold;
        background-image: url('public/images/dashchek.png');
        background-position: 101% 50%;
        background-repeat: no-repeat;
        background-size: 55px;
    }
    .hidden{
        display:none;
    }
    .ms2014{
        font-weight:bold;
        font-size:18px;
        text-align:center;
        margin-top:10px;
    }

    .wrapcontent{
        width:600px;
        height:300px;
        padding-bottom:20px;
    }
    .wrapexpcontent{
        width:600px;
        height:300px;
        padding-bottom:20px;
    }
    .tblGraph2{
        width: 173px;
        height: 146px;
        border-left:1px solid gray;
        border-top:1px solid gray;
        border-bottom:1px solid gray;
    }
    .graphAmount{
        margin-top:10px;
        text-align:right;
    }


    .div1{
        height:23.5px;
        width:173px;
        background:#EFEFEF;
        border-bottom:1px solid gray;
    }
    .barGraph1{
        width: 30px;
        height: 116px;
        background: rgb(4, 169, 255);
        border: 1px solid #c8c8c8;
        margin-top: -119px;
        margin-left: 107px;
    }
    .barGraph2{
        width: 30px;
        height: 70px;
        background: rgb(255, 184, 0);
        border: 1px solid #c8c8c8;
        margin-top: -72px;
        margin-left: 139px;
    }
    .barGraph3{
        width: 30px;
        height: 119px;
        background: rgb(169, 70, 70);
        border: 1px solid #c8c8c8;
        margin-top: -121px;
        margin-left: 171px;
    }
    .barGraph4{
        width: 30px;
        height: 46px;
        background:rgb(148, 13, 178);
        border: 1px solid #c8c8c8;
        margin-top: -48px;
        margin-left: 203px;
    }
    .boxBlue{
        width:7px;
        height:7px;
        background:rgb(107, 148, 98);
        border:1px solid #c8c8c8;
    }
    .boxYellow{
        width:7px;
        height:7px;
        background: rgb(104, 32, 129);
        border:1px solid #c8c8c8;
    }
    .boxMaroon{
        width:7px;
        height:7px;
        background:rgb(22, 118, 131);
        border:1px solid #c8c8c8;
    }
    .boxViolet{
        width:7px;
        height:7px;
        background:rgb(231, 98, 39);
        border:1px solid #c8c8c8;
    }
    .boxLightBlue{
        width:7px;
        height:7px;
        background:rgb(86, 143, 208);
        border:1px solid #c8c8c8;
    }
    .boxDarkBlue{
        width:7px;
        height:7px;
        background:rgb(45, 72, 205);
        border:1px solid #c8c8c8;
    }
    .bbox{
        margin-top:18px;
    }
    .monthBox{
        margin-top:12px;
        magin-right:7px;


    }

    <!--for expense -->

    .expshade {
        background: none repeat scroll 0 0 rgb(244, 241, 124);
        border-radius: 60px;
        height: 350px;
        margin-left: -16px;
        margin-top: -8px;
        opacity: 0.8;
        position: absolute;
        width: 635px;
    }
    .ciContexp{
        width:100%;
        margin:0;
        padding:0;
    }
    .ciHolderexp {
        border: 1px solid #c8c8c8;
        float: right;
        height: 325px;
        margin: 30px -15px 15px;
        padding: 18px 14px;
        width: 613px;
    }
    .leftDivexp{
        width:195px;
        font-family:Arial;
        font-size:12px;
        margin-left:5px;
        margin-top:5px;
    }
    .tblExpenseexp{
        font-family:Arial;
        font-size:11px;
        border-collapse:collapse;
        margin-top:7px;
        margin-left:10px;
        width:219px;
    }
    .tblExpenseexp tr td{
        padding:5px;
        border:1px solid #c8c8c8;
        background:#e8e8e8;
    }
    .tblExpenseexp th{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(129, 160, 75);
    } 
    .expensesDivexp{
        border: 1px solid gray;
        width: 323px;
        margin-top: -289px;
        margin-left: 225px;
        font-family: Arial;
        font-size: 12px;
        padding: 26px;

    }
    .ex2014exp{
        font-weight:bold;
        font-size:18px;
        font-family:Arial;
        text-align:center;
        margin-top:10px;
    }
    .boxBexp{
        width:7px;
        height:7px;
        background:blue;
        border:1px solid #c8c8c8;
    }
    .boxVexp{
        width:7px;
        height:7px;
        background:rgb(145, 46, 224);
        border:1px solid #c8c8c8;
    }
    .boxSexp{
        width:7px;
        height:7px;
        background:rgb(194, 187, 187);
        border:1px solid #c8c8c8;
    }
    .boxBrexp{
        width:7px;
        height:7px;
        background:brown;
        border:1px solid #c8c8c8;
    }
    .boxSBexp{
        width:7px;
        height:7px;
        background:rgb(26, 153, 203);
        border:1px solid #c8c8c8;
    }
    .boxYGexp{
        width:7px;
        height:7px;
        background:rgb(136, 195, 50);
        border:1px solid #c8c8c8;
    }
    .boxOexp{
        width:7px;
        height:7px;
        background:rgb(255, 128, 4);
        border:1px solid #c8c8c8;
    }
    .bboxexp{
        margin-top:12px;
    }
    .textline1{
        margin-top:6px;
    }


    .popCont {
        background: none repeat scroll 0 0 rgb(244, 241, 241);
        border-radius: 60px;
        height: 350px;;
        margin-left: -16px;
        margin-top: -8px;
        opacity: 0.8;
        position: absolute;
        width: 635px;
    }
    .popConttwo {
        background: none repeat scroll 0 0 rgb(244, 241, 241);
        border-radius: 60px;
        height: 350px;;
        margin-left: -16px;
        margin-top: -20px;
        opacity: 0.8;
        position: absolute;
        width: 635px;
    }

    .cibDivexp{
        width: 336;
        height: 195;
        background:rgb(211, 231, 187);
        position: absolute;
        margin-top: -235px;
        margin-left: 159px;
    }
    .startCreateInvexp{
        width:157px;
        height:45px;
        color:#fff;
        background:rgb(129, 160, 75);
        border:none;
    }
    <!--for collected ammount -->
    .ciContcollect{
        width:100%;
        margin:0;
        padding:0;
    }
    .ciHoldercollect {
        border: 1px solid #c8c8c8;
        float: right;
        height: 310px;
        margin: 0 -15px 15px;
        padding: 18px 14px;
        width: 613px;
    }
    .leftDivcollect{
        width: 195px;
        font-family: Arial;
        font-size: 12px;
       /*  margin-left: 15px; */
        margin-top: 9px;

    }
    .tblColAmcollect{
        font-family:Arial;
        font-size:11px;
        border-collapse:collapse;
        margin-top:5px;
        margin-left:15px;
        width:100%;

    }
    .tblColAmcollect tr td{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(250, 223, 200);
    }
    .tblColAmcollect th{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(252, 171, 104);
    } 
	.tblColAmcollect2{
        font-family:Arial;
        font-size:11px;
        border-collapse:collapse;
        margin-top:5px;
        margin-left:10px;
        width:100%;

    }
    .tblColAmcollect2 tr td{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(250, 223, 200);
    }
    .tblColAmcollect2 th{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(252, 171, 104);
    } 
    .colAmDivcollect{
        border: 1px solid gray;
        width: 323px;
        margin-top: -269px;
        margin-left: 232px;
        font-family: Arial;
        font-size: 12px;
        padding: 26px;
    }
    .colAm2014collect{
        font-weight:bold;
        font-size:18px;
        font-family:Arial;
        text-align:center;
    }
    .bboxBcollect{
        width:7px;
        height:7px;
        background:rgb(29, 110, 218);
        border:1px solid #c8c8c8;
    }
    .bboxRcollect{
        width:7px;
        height:7px;
        background:red;
        border:1px solid #c8c8c8;
    }
    .bboxGcollect{
        width:7px;
        height:7px;
        background:rgb(136, 195, 50);
        border:1px solid #c8c8c8;
    }
    .bboxVcollect{
        width:7px;
        height:7px;
        background:rgb(145, 46, 224);
        border:1px solid #c8c8c8;
    }
    .bboxSBcollect{
        width:7px;
        height:7px;
        background:rgb(26, 153, 203);
        border:1px solid #c8c8c8;
    }
    .bboxOcollect{
        width:7px;
        height:7px;
        background:rgb(255, 128, 4);
        border:1px solid #c8c8c8;
    }
    .cABoxcollect{
        margin-top:22px;
    }
    .cABoxTextcollect{
        margin-top:16px;
    }
    .popContcollect{
        width: 627px;
        height: 337px;
        border-radius: 60px;
        background: rgb(244, 241, 241);
        opacity: .8;
        margin-top: -310px;
        position: absolute;
        margin-left: -6px;
    }
    .cibDivcollect{
        width: 336;
        height: 195;
        background:rgb(211, 231, 187);
        position: absolute;
        margin-top: -235px;
        margin-left: 159px;
    }
    .notifydash{
        width: 246px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 12px;
        float: left;
        /* background-color: red; */
        margin-left: 16px;
        margin-top: 10px;
        height:1012px;
        background-color: white;
        border: solid 1px #c8c8c8;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 10px;
        /* border-left: solid 10px #77933c; */
    }
    .notifytextdash{
        /* font-family: Arial, Helvetica, verdana, sans-serif, tahoma; */
        font-family: Bookman, serif;
        font-size: 14px;
        font-weight: bold;
        width: 154px;
        text-align: center;
        margin-left: 30px;
        height: 18px;
        color: #00a9ea;
        margin-top: 10px;
        /* background-color: rgb(96, 97, 96); */
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .textline1exp{
        margin-top:6px;
    }

    .content{
        float:right;
        height: 100%;
        width:700px;
        margin-top:10px;
        margin-right: 8px;
    }

    .outerholder {
        border: 1px solid #c8c8c8;
        height: 339px;
        width: 690px;
    }

    .innerholder {

        border-radius: 10px;
        height: 325px;
        margin: 0;
        padding: 5px;
        width: 679px;
        overflow: visible;

        z-index: 1000;
    }
    .box1 {
        float: left;
        height: 250px;
        margin-left: 14px;
        width: 245px;

    }
    .box2 {
        border: 2px solid pink;
        float: right;
        height: 250px;
        margin-right: 3px;
        width: 400px;
    }
    .box3 {
        border: 2px solid pink;
        float: right;
        height: 270px;
        margin-right: 3px;
        width: 400px;

    }
    .box4 {
        border: 2px solid pink;
        float: right;
        height: 255px;
        margin-right: 3px;
        width: 400px;
        margin-top:-180px;
        padding:20 10;

    }


    .bargraphs{
        float:left;
        border: 2px solid yellow;
        margin-top:10px;
    }

    .boxes1{
        margin-top:10px;

    }
    .boxes2{
        margin-top:10px;

    }

    .col1 {
        float: left;
        height: 200px;
        margin-left: -30px;
        margin-top: 12px;
        width: 130px;
        font-family:Arial;
        font-size:12px;
    }
    .col2{
        width:130px;
        height:200px;
        margin-right:20px;
        margin-left:110px;
        margin-top:20px;
    }
    .col3{
        width:100px;
        height:200px;
        float:right;
        margin-top:-200px;
    }
    .colexp {
        float: left;
        height: 200px;
        margin-left: 7px;
        margin-top: 0px;
        width: 195px;

    }
    .containers{
        height:50px;
    }
    .notecontainer{
        background-color: #FCFCFC;
        padding: 5px;
        width: 215px;
        margin-left: 10px;
        box-shadow: 1px 3px 6px 1px #c8c8c8;
        /*padding-bottom: 25px;*/
        border: solid 1px rgb(37, 181, 239);
        /*margin-top: 12px;*/
    }
    .cibDiva{
        padding-left:59px;
        margin-top:65px;
        background-color:#e6e6e6;
        border-radius: 1px 1px 5px 5px;
        padding:8px;
    }
    .startdivNew{
        font-family:Arial;
        font-size:22px;
        margin-top:39px;
        margin-left:65px;
        color: #00a9ea;
        font-weight: bold;
    }
    .nty{
        font-family:Arial;
        font-size: 24px;
        margin-top: 73px;
        margin-left: 50px;
        color: #00a9ea;
        font-weight: bold;
    }
    .hrdash{
        height: 5px;
        width: 99%;
        background-color: rgb(37, 181, 239);
        margin-top: 5px;
        border: none;
    }
    .dashcontainer2{
        margin-top: -93px;
        background-color: #fff;
        padding-top: 34px;
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        width:1000px;
        margin:auto;
        padding-bottom:50px;
    }
    .bodydash{


    }
    .notifycontainer{
        margin-left: -28px;
        padding-right:8px;
    }
    .linkdash{
        margin-top: 49px;
        margin-left: 40px;
    }
    .linkdash a:hover{
        font-weight:normal;
        cursor:pointer;
    }
    .notifytext{
        padding-top: 15px;
        color: rgb(0, 113, 109);
        font-family: tahoma;
        font-size: 12px;
    }
    .hrdash2{
        height: 2px;
        width: 83%;
        background-color: rgb(37, 181, 239);
        margin-top: 34px;
        border: none;
        margin-left: 35px;
    }
    .DEMO{
        font-family:tahoma;
        font-size:17px;
        color:#00a9ea;
    }
    .videos{
        font-family: tahoma;
        font-size: 12px;
        color: rgb(57, 143, 114);
        font-weight: bold;
    }
    .linkdash a{
        color: rgb(57, 143, 114);
        text-decoration:none;
    }
    .linkdash a:hover{
        color:#00a9ea;
        font-weight:bold;
    }
    .popx{
        background-image: url('public/images/popx.png');
        background-size: 100% 100%;
        cursor: pointer;
    }
</style>
<script>
    $(document).on("click", ".popx", function() {
        $('.popBack').addClass('hidden');
        $('.popBack').html('');
    });
    function playVid(play) {
        switch (play) {
            case 1:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/mh-XQBPjB_U?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 2:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/yPyx-SlOuK0?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 3:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/G7J94i4qSsw?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 4:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/9YUUQQkY4II?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 5:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/CWNKTf0fTEQ?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 6:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/V_ty-vLHEIU?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 7:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/QhHO2Rm4JBY?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 8:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/8u7q_D5ovXY?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 9:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/YZ3B1KXuNbs?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
            case 10:
                $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="float:right;border:none;height:19px; width:19px;" value=""><iframe width="640" height="390" src="https://www.youtube.com/embed/ChObRLr5EI4?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                break;
        }
        $(".popBack").removeClass('hidden');
        $(".popBack").css('z-index', '100');

    }
    
//    $.post();

</script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<body class="bodydash">
    <div class="dashcontainer2">
        <div class="DashboardContainer"><?php //echo Session::getSession('orgid'); exit;             ?>
            <hr class="hrdash">

            <?php
//                        $nf2 = new NumberFormatter($lang_tag, NumberFormatter::SPELLOUT);
//                        echo $nf2->format('34');
			$cur_inv = TblNewInvoiceMySqlExtDAO::getData('', 'All');
			$cur_exp = TblNewExpenseMySqlExtDAO::searchExpense(Session::getSession('medorgid'), '', '');
			$cur_pay = TblEnterPaymentMySqlExtDAO::getData('', 'All');
			
            if ( empty($cur_inv) && empty($cur_exp) && empty($cur_pay)) {
                ?>
                <div class="start">Hi <?php echo ucfirst(DAOFactory::getTblOrganizationDAO()->load(Session::getSession('medorgid'))->orgName); ?>, <br>
                    Where would you like to get started?</div>
            <?php } ?>

            <div class="notifydash">
                <div class="notecontainer">
                    <div class="notifytextdash">NOTIFICATION</div>
                    <div class="notifycontainer">
                        <ul><li class="notifytext">* &nbsp You have posted <span style="font-weight:bold;"><?php echo TblNewInvoiceMySqlExtDAO::gettotalInvoicePostedYesterday() ?></span> invoices yesterday</li>
                            <li class="notifytext">* &nbsp You have <span style="font-weight:bold;"><?php echo TblNewInvoiceMySqlExtDAO::getOpenInvoice() ?></span> open invoices for posting</li>
                            <li class="notifytext">* &nbsp Your Total Cash Collection yesterday is: <span style="font-weight:bold;"><?php echo number_format(TblEnterPaymentMySqlExtDAO::getTotalYesterdayCollection(), 2) ?></span> </li>
                            <li class="notifytext">* &nbsp Your Total Amount Receivable yesterday is: <span style="font-weight:bold;"><?php echo number_format(TblNewInvoiceMySqlExtDAO::getTotalAmountReceivable(), 2); ?></span></li>
                            <li class="notifytext">* &nbsp You added <span style="font-weight:bold;"><?php echo TblClientMySqlExtDAO::getTotalClientAddedToday() ?></span> new patients</li>
                            <li class="notifytext">* &nbsp You added <span style="font-weight:bold;"><?php echo TblHmoMySqlExtDAO::getTotalHmoAddedToday() ?></span> new HMO partner</li>
                            <li class="notifytext">* &nbsp Your total expenses yesterday is: <span style="font-weight:bold;"><?php echo number_format(TblExpenseAmountMySqlExtDAO::getExpensesYesterday(), 2) ?></span></li>
                        </ul>

                        <div class="linkdash" style="margin-left:5px;margin-top:25px;">
                            <ul>
                                <li style="padding-top:30px;text-align:center;" class="DEMO">Watch Video for Demo</li>
                                <li style="padding-top:35px;" class="videos"><a href="#" onclick="playVid(1)">How to create a company </a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(2)">How to setup company</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(3)">Getting Started</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(4)">How to create invoice</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(5)">How to record payment</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(6)">How to add new HMO Partner</a></li><!--
                                -->                             <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(7)">How to add new Patient</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(8)">How to add new service</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(9)">How to record expenses</a></li>
                                <li style="padding-top:15px;" class="videos"><a href="#" onclick="playVid(10)">How to add new vendor</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div></div>
            </div>

            <div class="content">
                <div class="outerholder serviceInvoiceDashboard">
                    <div class="cibDiv3 cibDiv">
                        <div  class="startdivNew" style="">CREATE INVOICE</div>
                        <div class="cibDiva" style=""><a href="<?= URL ?>invoice/add"><input type="button" value="Start Here" class="startCreateInv"></a></div>
                    </div>
                    <div class="overlay"></div>
                    <div class="innerholder">
                        <div class="boxes1">
                            <div class="box1">
                                <div style="font-size:16px; width:150px;font-size:16px;font-family:Arial;">
                                    <b>Service Invoices</b>
                                </div>
                                <div class="leftDivcollect">
                                    <div>
									<?php if($this->invoiceTotal){ ?>
										<table class="tblColAmcollect2">
											<tr>
												<th style="text-align:left;">Month</th>
												<th style="text-align:right;">Amount</th>
											</tr>
										<?php 
											$total = 0;
											$count = 1;
											foreach($this->invoiceTotal as $each){
												$total += $each->pCash;
												if($count < 10){
										?>
											<tr>
												<td><?= date('F',strtotime($each->dateIssued)) ?></td>
												<td style="text-align:right;"><?= Controller::getFloat($each->pCash) ?></td>
											</tr>
										<?php
											}
										?>
										<?php
											}
										?>				
										</table>
									<?php } ?>
                                    </div >

                                </div>
                                <div style="margin-top:40px;font-weight:bold;font-size:15px;width:250px;font-family:Arial;">
                                    Total Amount   -   <?= Controller::getFloat($total) ?>
                                </div>
                            </div>
                            <div class="box2" id="invoiceChart">
                                <div style="width:100%;font-size:18px;font-family:Arial;" class="ms2014">Sales for Year <?php echo date("Y") ?></div>
                                <div style="margin-top:34px;margin-left:33px; float:left;">
                                    <img src="<?= URL ?>dashboard_design/public/img/monthly_expenses.png">
                                </div>

                                <div class="col2 hidden">
                                    <div class="tblGraph2">
                                        <div class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                    </div>


                                    <div style="margin-left:-77px;">
                                        <div class="barGraph1"></div>
                                        <div class="barGraph2"></div>
                                        <div class="barGraph3"></div>
                                        <div class="barGraph4"></div>
                                    </div>

                                </div>

                                <div class="col3" style="margin-top:7px;">		

                                    <div>
                                        <div class="bbox boxBlue"></div>
                                        <div class="bbox boxYellow"></div>
                                        <div class="bbox boxMaroon"></div>
                                        <div class="bbox boxViolet"></div>
                                        <div class="bbox boxLightBlue"></div>
                                        <div class="bbox boxDarkBlue"></div>
                                    </div>
                                    <div style="margin-left:18px; margin-top:-160px;font-size:12px;font-family:Arial;">
                                        <div class="monthBox">January</div>
                                        <div class="monthBox">February</div>
                                        <div class="monthBox">March</div>
                                        <div class="monthBox">April</div>
                                        <div class="monthBox">May</div>
                                        <div class="monthBox">June</div>
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </div>	
                        </div>	




                        <div style="clear:both"></div>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="outerholder expenseDashboard">

                    <div class="innerholder">
                        <div class="overlay2"></div>
                        <div class="boxes2">
                            <div class="box3" id="expenseChart" style="font-family:Arial;font-size:12px;">
                                <div class="containers">
                                    <div align="center" class="ex2014" style="font-size:18px;margin-top:20px;"><strong>Monthly Expenses - <?php echo date("F Y") ?></strong></div>
                                    <div class="c1" style="float:left; width:100px; margin-left:28px;">
                                        <div>
                                            <div class="bboxexp boxBexp"></div>
                                            <div class="bboxexp boxVexp"></div>
                                            <div class="bboxexp boxSexp"></div>
                                        </div>
                                        <div style="margin-left:20px; margin-top:-58px;">
                                            <div class="textline1exp">Water</div>
                                            <div class="textline1exp">Meals</div>
                                            <div class="textline1exp">Communication</div>
                                        </div>
                                    </div>
                                    <div class="c2" style="margin-left:150px; margin-top:0px;">
                                        <div class="bboxexp boxBrexp"></div>
                                        <div class="bboxexp boxSBexp"></div>
                                        <div style="margin-left:17px; margin-top:-37px;">
                                            <div class="textline1exp">Transportation</div>
                                            <div class="textline1exp">Fuel</div>
                                        </div>
                                    </div>
                                    <div class="c3" style="margin-left:300px;margin-top:-45px;">
                                        <div class="bboxexp boxYGexp"></div>
                                        <div class="bboxexp boxOexp"></div>
                                        <div style="margin-left:19px;margin-top:-37px;">
                                            <div class="textline1exp">Supplies</div>
                                            <div class="textline1exp">Electricity</div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;margin-left:92px; float:left;">
                                        <img src="<?= URL ?>dashboard_design/public/img/monthly_expenses.png">
                                    </div>
                                </div>


                            </div>

                            <div style="font-size:16px;font-family:Arial;">
                                <b>Expenses</b>
                            </div>
                            <div class="colexp">
								<?php $total = 0; if($this->expenses){ ?>
                                <table class="tblExpenseexp">
									<tr>
										<th style="text-align:left;" colspan="2">GL Account</th>
										<th style="text-align:right;">Amount</th>
									</tr>
								<?php 
									$total = 0;
									$total2 = 0;
									$count = 1;
									foreach($this->expenses as $each){
										$total += $each->netAmount;
										if($count < 6){
								?>
									<tr>
										<td width="12%"><?= $each->accountNum ?></td>
										<td width="20%"><?= $each->descriptionMemo ?></td>
										<td style="text-align:right;" width="1%"><?= Controller::getFloat($each->netAmount) ?></td>
									</tr>
								<?php 
										} else {
											$total2 += $each->netAmount;
										}
										$count++;
									} 
									if(count($this->expenses) > 5){
								?>
									<tr>
										<td colspan="2">Other's</td>
										<td style="text-align:right;"><?= Controller::getFloat($total2) ?></td>
									</tr>
								<?php
									}
								?>
								</table>
								<?php } ?>
                                <div style="margin-top:10px;font-size:15px;width:200px;font-family:Arial;"><strong>Total Amount  -  
									<?= Controller::getFloat($total) ?>
								</strong></div>
                            </div >


                        </div>
                        <div class="cibDiv2 cibDiv">
                            <div  class="startdivNew" style="font-family:Arial;font-size:22px;margin-top:40px;margin-left:50px;">RECORD EXPENSE</div>
                            <div class="cibDiva" style=""><a href="<?= URL ?>expenses/add"><input type="button" value="Start Here" class="startCreateInv"></a></div>

                            <!--<div style="font-family:Arial;font-size:26px;margin-top:40px;margin-left:80px;"></div>
                            <div style="margin-left:91px;margin-top:26px;"> <a href="<?= URL ?>expenses/add"><input type="button" value="Start Here" class="startCreateInvexp"></a></div>-->
                        </div>
                    </div>
                </div>


                <div class="outerholder collectedAmountDashboard">
                    <div class="overlay3"></div>
                    <div class="innerholder">

                        <div class="leftDivcollect">
                            <div style="font-size:16px;opacity:0.4 marg">
                                <b>Collected Amount</b>
                            </div>
                            <div>
							<?php $total = 0; if($this->collectedAmount){ ?>
                                <table class="tblColAmcollect">
									<tr>
										<th style="text-align:left;">HMO Account</th>
										<th style="text-align:left;">HMO Partner</th>
										<th style="text-align:right;">Amount</th>
									</tr>
								<?php 
									$total = 0;
									$total2 = 0;
									$count = 1;
									foreach($this->collectedAmount as $each){
										$total += $each->amountReceived;
										if($count < 6){
								?>
									<tr>
										<td><?= $each->hmoAccount ?></td>
										<td><?= $each->hmoName ?></td>
										<td style="text-align:right;"><?= Controller::getFloat($each->amountReceived) ?></td>
									</tr>
								<?php
										} else {
											$total2 += $each->amountReceived;
										}
								?>
								<?php
									}
									if(count($this->collectedAmount) > 5){
								?>
									<tr>
										<td colspan="2">Other's</td>
										<td style="text-align:right;"><?= Controller::getFloat($total2) ?></td>
									</tr>
								<?php
									}
								?>
								</table>
							<?php } ?>
                            </div >
                            <div style="margin-top:40px;font-weight:bold;font-size:15px;width:200px;">Total Amount  -  
							<?= Controller::getFloat($total) ?></div>
                        </div>

                        <div style="clear:both"></div>
                        <div class="box4" id="collectedChart">
                            <div class="colAm2014collect">Monthly Collected Amount - <?php echo date("F Y") ?></div>
                            <div style="margin-top:11px; margin-left:20px;">
                                <img src="<?= URL ?>dashboard_design/public/img/collected_amount.png">
                            </div>
                            <div style="margin-left: 279px;margin-top: -205px;">
                                <div class="cABoxcollect bboxBcollect"></div>
                                <div class="cABoxcollect bboxRcollect"></div>
                                <div class="cABoxcollect bboxGcollect"></div>
                                <div class="cABoxcollect bboxVcollect"></div>
                                <div class="cABoxcollect bboxSBcollect"></div>
                                <div class="cABoxcollect bboxOcollect"></div>
                            </div>
                            <div style="margin-left: 300px;margin-top: -184px;font-family:Arial;font-size:12px;">
                                <div class="cABoxTextcollect">Maxicare</div>
                                <div class="cABoxTextcollect">Asian Life</div>
                                <div class="cABoxTextcollect">Medasia</div>
                                <div class="cABoxTextcollect">Medicard</div>
                                <div class="cABoxTextcollect">Intellicare</div>
                                <div class="cABoxTextcollect">Value Care</div>
                                <div style="clear:both"></div>
                            </div>
                            <div style="clear:both"></div>

                        </div>	
                        <div class="cibDivlast">
                            <div class="nty">No Transaction Yet</div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="popBack hidden">

    </div>	
</body>
<script>
    /* $(function() {
     $('.startCreateInv').click(function() {
     $.post(URL + 'invoice/task')
     .done(function(returnData) {
     $('.popBack').html(returnData);
     $('.popBack').removeClass('hidden');
     $('body').css('overflow', 'hidden');
     
     
     $('.closeCNTs').click(function() {
     if (confirm('Are you sure, you want to leave this page without saving?')) {
     $('.popBack').addClass('hidden');
     $('.popBack').html('');
     $('body').css('overflow', 'auto');
     location = URL + 'invoice/tasks';
     }
     });
     })
     .fail(function() {
     alert('Connection Error!');
     });
     return false;
     });
     
     }) */
    $(function() {
        $.post(URL + 'dashboard/getServiceInvoice')
                .done(function(returnData) {
                    if (returnData != '') {
                        // $('.serviceInvoiceDashboard').html(returnData);
                    }
                });

        $.post(URL + 'dashboard/getExpenses')
                .done(function(returnData) {
                    if (returnData != '') {
                        // $('.expenseDashboard').html(returnData);
                    }
                });

        $.post(URL + 'dashboard/getCollectedAmount')
                .done(function(returnData) {
                    if (returnData != '') {
                        // $('.collectedAmountDashboard').html(returnData);
                    }
                });

    });
</script>

<script>
google.load("visualization", "1", {packages:["corechart"]});

<?php 
if($this->expenses){ ?>
  google.setOnLoadCallback(expenseChart);
  
  function expenseChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Account Number', 'Rate']
<?php 
	$total = 0;
	$total2 = 0;
	$count = 1;
	foreach($this->expenses as $each){
		$total += $each->netAmount;
		if($count < 6){
?>
		,['<?= $each->accountNum ?>', <?= $each->netAmount ?>]
<?php
		} else {
			$total2 += $each->netAmount;
		}
?>
<?php
	}
	if(count($this->expenses) > 5){
?>
		,["Other's", <?= $total2 ?>]
<?php
	}
?>
	]);

	var options = {
	  title: 'Monthly Expenses - <?php echo date("F Y") ?>',
	  is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('expenseChart'));
	chart.draw(data, options);
  }
  
  $('.cibDiv2').remove();
  $('.overlay2').remove();
  $('#expenseChart').css('padding',0);
<?php } ?>
<?php 
if($this->invoiceTotal){ ?>
  google.setOnLoadCallback(invoiceChart);
  
  function invoiceChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Account Number', 'Rate']
<?php 
	$total = 0;
	$total2 = 0;
	$count = 1;
	foreach($this->invoiceTotal as $each){
		$total += $each->pCash;
		if($count < 6){
?>
		,['<?= date('F',strtotime($each->dateIssued)) ?>', <?= $each->pCash ?>]
<?php
		} else {
			$total2 += $each->pCash;
		}
?>
<?php
	}
	if(count($this->invoiceTotal) > 5){
?>
		,["Other's", <?= $total2 ?>]
<?php
	}
?>
	]);

	var options = {
	  title: 'Sales for Year - <?php echo date("Y") ?>',
	  is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('invoiceChart'));
	chart.draw(data, options);
  }
  $('.overlay').remove();
  $('.cibDiv3').remove();
  $('#expenseChart').css('padding',0);
  
<?php } ?>

<?php if($this->collectedAmount){ ?>
  google.setOnLoadCallback(collectedChart);
  
  function collectedChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Account Number', 'Rate']
<?php 
	$total = 0;
	$total2 = 0;
	$count = 1;
	foreach($this->collectedAmount as $each){
		$total += $each->amountReceived;
		if($count < 6){
?>
		,['<?= $each->hmoAccount ?>', <?= $each->amountReceived ?>]
<?php
		} else {
			$total2 += $each->amountReceived;
		}
?>
<?php
	}
	if(count($this->collectedAmount) > 5){
?>
		,["Other's", <?= $total2 ?>]
<?php
	}
?>
	]);

	var options = {
	  title: 'Monthly Collected Amount - <?php echo date("F Y") ?>',
	  is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('collectedChart'));
	chart.draw(data, options);
  }
  $('.cibDivlast').remove();
  $('.overlay3').remove();
  $('#collectedChart').css('padding',0);
<?php } ?>

</script>