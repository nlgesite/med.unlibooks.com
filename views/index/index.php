
<style>
    .bodydash{
        width:100%;
        /* 	background-image: url('<?= URL ?>public/images/backgroundnew1.png'); */
        background-color:#0066CC;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        margin:0;

    }
    @font-face {
        font-family: 'agency fb'; /*a name to be used later*/
        src: url('<?= URL ?>/public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'; /*a name to be used later*/
        src: url('<?= URL ?>/public/fonts/AGENCYB.ttf'); /*URL to font*/
    }
    .maindashcontainer{

    }
    .dashcontainer{
        width: 875px;
        margin:auto;
        height:710px;
        background:white;
        margin-top:10px;
    }
    .linklanding{
        padding-left: 190px;
        padding-bottom: 4px;
        text-align: right;
        padding-top: 10px;
        margin-right:99px;
        color:#444242;
        font-family:agency fb;
    }
    .linklanding a{
        font-size:12px;
        font-family:agency fb2;
        color:rgb(31, 73, 125);
        text-decoration:none;
        color:#898787;
    }
    .imageubmed{
        /*background-image: url('<?= URL ?>public/images/landing.png');*/
        /*background-image: url('<?= URL ?>public/images/landingimg.png');*/
        background-size: 744px 260px;
        background-repeat: no-repeat;
        height: 260px;
        width: 799px;
        margin-left: auto;
    }
    .lineindex{
        position: absolute;
        width: 5px;
        height: 20px;
        margin-left: -12px;
    }
    .lineindex1{
        position: absolute;
        width: 5px;
        height: 20px;
        margin-left: -35px;
    }
    .lineindex2{
        position: absolute;
        width: 5px;
        height: 20px;
        margin-left:-5px;
    }
    .freetrial{
        width: 744px;
        margin: auto;
        margin-top:12px;
    }

    @font-face {
        font-family: 'agency fb'; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    .desc{
        float: left;
        width: 389px;
        font-family:agency fb;
        font-size: 21px;
        color: #008f9a;
		margin-top: -19px;
    }
    .features{
       margin-top: 57px;
		color: #4F4F4F;
		width: 487px;
		font-size: 16.4px;
		font-family: agency fb;
		/* text-shadow: 0px 1px 1px rgb(160, 159, 159); */
    }
    .check{
        /* width: 412px;
        height: 150px;
        /* margin-left: 247px; */
        margin-top: -14px; 
        width: 349px;
        height: 229px;
        margin-left: 63px;
        margin-top: -36px;
    }
    .checkcontainer{
        width: 412px;
        float: left;
        margin-top: -161px;
        margin-left: 5px;
    }
    .registration{
        float: right;
        width: 340px;
        margin-right: 6px;
        margin-top: 12px;
    }
    .regcontainer{
        background-color:#28a3d4;
        height:332px;
        border-radius: 4px;
        padding-top:10px;
    }
    .checklanding{
        width: 14px;
        margin-top: 19px;
        height: 14px;
    }

    .trialTitle{
        /* background-image: url('<?= URL ?>public/images/freetrial.png'); */
        background-size: 210px 42px;
		background-repeat: no-repeat;
		height: 49px;
		width: 210px;
		margin: auto;
    }
    .getStarted{
       COLOR: #fff;
		font-family: agency fb;
		width: 229px;
		margin: auto;
		margin-top: 24px;
		font-size: 17px;
    }
    .email{
        width: 259px;
        height: 24px;
        border: none;
        padding: 5px;
        font-family: tahoma;
        font-size:11px;
    }
    .getStartedButton{
        /* background-image: url('<?= URL ?>public/images/getstarted.png'); */
        background-size: 93px 27px;
        background-repeat: no-repeat;
        height: 27px;
        width: 93px;
        margin: auto;
        border: none;
        margin-top: 21px;
        border-radius: 5px;
    }
    .agreement{
        margin-top:20px;
    }
    .agree{
       font-family: agency fb;
		font-size: 14px;
		margin-left: 18px;
		margin-top: -12px;
    }
    .orlog {
        font-family: agency fb;
        font-size:14px;
        margin:auto;
        text-align:center;
        margin-top:-16px;
    }
    .Log1Check{
        /* background: url('<?= URL ?>public/images/square.png');  */

    }
    .agreetable{
        width:299px;
        margin:auto;
        margin-top: 0px;
    }
    .orlog a{
        color:white;
        text-decoration:none;
    }
    .startedbutton{
        margin:auto;
        text-align:center;
        margin-top:2px;
    }

    /* 
    input[type=checkbox]:before { content:""; display:inline-block; width:12px; height:12px; background:#33b51c; }
    input[type=checkbox]:checked } */
    .is{
        word-spacing: 3px;
    }
    .monitor{
        word-spacing: 5px;
    }
    .footerlanding{
        margin: auto;
        float: right;
        margin-right: -280px; 
        font-size: 17px;
        font-family: agency fb;
        margin-top: 420px;
        color: #021d2f;
        padding-bottom:10px;
    }
    .footerlanding a{
        text-decoration: none;
        color:#021d2f;
        font-size: 13px;
        font-family: agency fb;
    }
    .unlibookstitle{
        height: 93px;
        width: 412px;
        font-family: agency fb;
        font-size: 23px;
        letter-spacing:0.5px;
    }




    input[type=checkbox] {
        /* All browsers except webkit*/
        transform: scale(2);

        /* Webkit browsers*/
        -webkit-transform: scale(1.3); 
    }

    .custom-checkbox{
        width: 14px;
        height: 14px;
        margin-left:2px;
        display: inline-block;
        position: relative;
        z-index: 1;
        top: 5px;
      /* /* background: url('<?= URL ?>public/images/checkcheck.png') no-repeat; */
        background-size: 14px 14px;
        -webkit-transform: scale(0.7); */
    }

    .selected{
        width: 14px;
        height: 14px;
        margin-left:2px;
        display: inline-block;
        position: relative;
        z-index: 1;
        top: 5px;
       /*  background: url('<?= URL ?>public/images/checkwithcheck.png') no-repeat; */
        background-size: 14px 14px;
        -webkit-transform: scale(0.7);

    }
    .custom-checkbox input[type="checkbox"]{
        margin: 0;
        position: absolute;
        z-index: 2;
        cursor: pointer;
        outline: none;
       /*  opacity: 0; */
        /* CSS hacks for older browsers */
        _noFocusLine: expression(this.hideFocus=true); 
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: alpha(opacity=0);
        -khtml-opacity: 0;
        -moz-opacity: 0;


    }
    .planning {
        height: 16px;
        width: 129px;

    }
    .login {
        height: 16px;
        width: 83px;
        margin-left: -57px;

    }

    .features{
        font-size: 23px;
        list-style-type: none;
        padding: 0px;
        /*margin: 0px;*/
        margin-left: 6px;
        margin-top: -5px;
    }

    .features li {
        background-image: url('public/images/chk.png');
        background-repeat: no-repeat;
        background-position: 0px center; 
        padding-left: 35px; 
		padding-top: 5px;
		padding-bottom: 5px;
    }
	
	
	.getStartedButton2{
		position: absolute;
		margin-top: -50px;
		margin-left: 123px;
		height: 27px;
		width: 93px;
		/* margin: auto; */
		border: none;
		/* margin-top: 21px; */
		border-radius: 5px;
		padding: 5px;
		color: rgb(128, 122, 122);
		background-color: rgb(197, 197, 197);
		font-family: agency fb2;
		font-size: 15px;
	}
	

</style>


<!-- include js file here -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script>
    $(document).ready(function(e) {
        $('#landingForm').submit(function() {
            var sEmail = $('#txtEmail').val();

// checking empty fields
            /*  if ($.trim(sEmail).length == 0 || $("#name").val() == "" || $("#lname").val() == "") {
             alert('All fields are mandatory');
             return false;
             } */
            if (!validateEmail(sEmail)) {
                alert('Invalid Email Address');
                return false;
            }

            if (!$('.Log1Check').is(':checked')) {
                alert('Please check first the Agreement and Term of Use');
                return false;
            }
        });
    });

// Function that validates email address through a regular expression.
    function validateEmail(sEmail) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }


    function customCheckbox(checkboxName) {
        var checkBox = $('input[name="' + checkboxName + '"]');

        // $(checkBox).each(function(){
        $(checkBox).wrap("<span class='custom-checkbox'></span>");
        if ($(checkBox).is(':checked')) {
            $(checkBox).parent().addClass("selected");
        }
        // });
        $(checkBox).click(function() {
            $(this).parent().toggleClass("selected");
        });
    }


    $(document).ready(function() {
        customCheckbox("check");
    })

</script>

<script>
    $(function() {
        $('.imageubmed').css("background-image", "url('<?= URL ?>public/images/landingimg.png')");
        $('.bodydash').css("background-image", "url('<?= URL ?>public/images/backgroundnew1.png')");
        $('.trialTitle').css("background-image", "url('<?= URL ?>public/images/30days.png')");
        $('.getStartedButton').css("background-image", "url('<?= URL ?>public/images/getstarted.png')");
        $('.check').prop("src", "<?= URL ?>public/images/checkfile.png");

    })

	

</script>
<script>

	$(function() {

        $('form').bind('change keyup', function () {
            if($('input[type="email"').val() != '' && $('#check').is(':checked'))  {
               $('.getStartedButton').prop("disabled", false);
			    $(".getStartedButton2").hide();
				
            } else {
                $('.getStartedButton').prop("disabled", true);
				$(".getStartedButton2").show();
            }
        
	   });s
    })
	
</script>

<body class="bodydash">
    <div class="maindashcontainer">
        <form class="dashcontainer" method="post" action="<?php echo URL ?>user/userRegister" name="landing" class="" id="landingForm">
            <div class="linklanding">
                    <!--<img src="<?= URL ?>public/images/lineindex.png" class="lineindex">-->
                <a href="plan" style="padding: 7px 55px 7px 22px;" class=""><img src="<?= URL ?>public/images/plan.png" class="planning"></a>
                <!--<img src="<?= URL ?>public/images/lineindex.png" class="lineindex1">-->
                <!--need to change when planning is done login2.png
                 <a href="login" style="padding: 7px 24px 8px 0px;"><img src="<?= URL ?>public/images/login.png" class="login"></a>-->
                <a href="login" style="padding: 7px 24px 8px 0px;"><img src="<?= URL ?>public/images/login.png" class="login"></a>
                            <!--<img src="<?= URL ?>public/images/lineindex.png" class="lineindex2">-->

            </div>
            <div class="imageubmed"></div>
            <div class="freetrial">
                <div class="desc">
                    <div class="">
                        <!--<img class="unlibookstitle" src="<?= URL ?>public/images/unlibooksnewline.png">-->
                        <p style="font-size: 23px"><span style="font-size:44px;">UNLIBOOKS</span> is a quick and easy-to-use BIR compliant accounting software specifically designed for medical practitioners.</p>
                    </div>
                    <div class="features">
                        <div style="float:left;margin-top: 20px;">
                                <!--<img src="<?= URL ?>public/images/checkfile.png" class="check">-->
                            <ul class="features">
                                <li>Quick billing to your patients</li>
                                <li>Simple recording of expenses</li>
                                <li>Useful tracking of collections and expenses</li>
                                <li>Easy to understand financial and tax reports</li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="registration">
                    <div class="regcontainer">	

                        <div class="trial" style="padding-top: 10px;">
                            <div class="trialTitle"></div>

                            <table class="getStarted">
                                <tr>
                                    <td>EMAIL ADDRESS</td>
                                </tr>
                                <tr>
                                    <td><input type="email" name="email" placeholder="" id="txtEmail" required class="email"></td>
                                </tr>
								 <tr>
                                    <td style="padding-top: 10px;">PASSWORD</td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" placeholder="" id="password" required class="email"></td>
                                </tr>

                            </table>

                            <table class="agreetable">
                                <tr>
                                    <td><div><input type="checkbox" id="check" class="Log1Check" name="check" value="check" ><div class="agree"> I have read and agreed to the <span class="spanAgree">Unlibooks End User's Agreement</span> and <span class="spanAgree">Terms of Use.</span></div></div></td>
                                </tr>
                            </table>

                            <div class="startedbutton"><input type="submit" value="" name="submit" disabled="disabled"  class="getStartedButton"></div>
                            <div class="agreement">
                                <div class="Orlog">Or <a href="login">Log In</a> if you already have an account.</div>
                            </div>
							<input type="submit" name="submit" disabled="disabled" value="GET STARTED"  class="getStartedButton2">
                        </div>
                    </div>
                </div>

            </div>

            <div class="footerlanding">
                <a href="contact_us" style="padding: 7px 55px 7px 22px;">Contact Us</a>
                <a href="about_us" style="padding: 7px 24px 8px 0px;">About Us</a>
            </div>


        </form>



    </div>



    <div class="popBack hidden">

    </div>

</body>