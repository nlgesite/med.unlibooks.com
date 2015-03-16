<style>
    .accountContainer{
        width:100%;
        margin-top:40px;
        margin-b
    }
    .accountForm{
        width:800px;
        background-color:rgb(250, 250, 250);
        background-image: url('<?= URL ?>public/images/createaccountback.png');
        background-size: 100%;
        margin:auto;
        border-radius: 35px;
        padding-bottom:30px;
        padding-left:35px;
        padding-top:35px;
        margin-bottom:50px;
    }
    .createYourAccount{
        font-family:Comic Sans MS;
        font-size:20px;
        font-weight:bold;
        color:rgb(0,0,0);
        width: 800px;
        text-align:center;
    }
    .getstartedbodyLog{
        background-image: url('<?= URL ?>public/images/loginback.png');
        background-size: 100%;
        background-repeat: no-repeat;
        margin:0;
    }
    .spanblue{
        color:rgb(2, 3, 255);
    }
    .createYourAccount2{
        width: 790px;
        margin: auto;
        font-family: tahoma;
        font-size: 12px;
        margin-top: 15px;
    }

    .userAccount{
        font-family: tahoma;
        font-size: 18px;
        color: #8391a7;
        font-weight: bold;
    }
    .setup{
        font-weight:bold;
        font-size:8px;
    }
    table{
        font-family: tahoma;
        font-size: 13px;
        color:#797676;
        font-weight:bold;
        letter-spacing: 1px;
    }
    .maincontact{
        margin-top:55px;
    }
    table input[type="text"],input[type="password"],input[type="email"]{
        margin-right: 20px;
        width: 220px;
        margin-left:5px;
        height: 30px;
        margin-top: 3px;
        padding:5px;
        font-family:tahoma;
        font-size:12px;
        background-image:url('public/images/inputcontainer.png');
        background-size: 100% 100%;	
        border:none;
        color:gray;
        border-radius:5px;
    }
    .rightform{
        float: left;
        margin-left: 454px;
        margin-top: -46px;
    }
    .address{
        margin-top: 40px;
    }
    .div1{
        margin-top:20px;
    }
    .div2{
        margin-top: 15px;
        padding-left: 72px;
    }
    .div3{
        margin-top: 15px;
    }
    .div4a{
        margin-left: 45px;
        margin-top: 36px;
    }
    .div5{
        float:right;
        margin-top:-65px;
        margin-right:200px;
    }
    .proceedUser{
        width: 103px;
        height: 40px;
        border: none;
        background-image:url('<?= URL ?>public/images/proceed.png');
        background-repeat:no-repeat;
        background-size:100% 100%;
        border-radius: 10px;
        cursor: pointer;
        float: right;
        margin-right: 33px;
    }

    [data-tooltip] {
        display: inline-block;
        position: relative;
        cursor: help;
        padding: 4px;
    }
    /* Tooltip styling */
    [data-tooltip]:before {
        content: attr(data-tooltip);
        display: none;
        position: absolute;
        background: #25b5ef;
        color: #fff;
        padding: 4px 8px;
        font-size: 10px;
        line-height: 1.4;
        min-width: 100px;
        text-align: center;
        border-radius: 4px;
    }
    /* Dynamic vertical centering */
    [data-tooltip-position="right"]:before,
    [data-tooltip-position="left"]:before {
        top: 50%;
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    [data-tooltip-position="right"]:before {
        left: 100%;
        margin-left: 6px;
    }

    /* Tooltip arrow styling/placement */
    [data-tooltip]:after {
        content: '';
        display: none;
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
    }
    /* Dynamic vertical centering for the tooltip */
    [data-tooltip-position="right"]:after,
    [data-tooltip-position="left"]:after {
        top: 50%;
        margin-top: -6px;
    }
    [data-tooltip-position="right"]:after {
        left: 100%;
        border-width: 6px 6px 6px 0;
        border-right-color: #25b5ef;
    }
    /* Show the tooltip when hovering */
    [data-tooltip]:hover:before,
    [data-tooltip]:hover:after {
        display: block;
        z-index: 50;
    }
    /*body { margin: 60px 130px; }  Demo purposes - ignore this margin */
</style>

<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script type="text/javascript">
    function checkPassword(str)
    {
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        return re.test(str);
    }

    $(function() {
        $(document).ready(function() {
            var fsize;
            $('#imgInp').bind('change', function() {
//                alert(this.files[0].size);
                fsize = this.files[0].size;
            });

            $('.accountForm').submit(function() {
                /* var ext = $('#imgInp').val().split('.').pop().toLowerCase(); */
//                alert(fsize);
//                return false;
                if ($('#password').val() != "" && ($('#password').val() == $('#confirmpassword').val())) {
                    if ($('#password').val().length < 6) {
                        alert("Error: Password must contain at least six characters!");
                        //	$('#password').focus();
                        return false;
                    }

//					 if(!checkPassword(this.password.value)) {
//					  alert("The Password must consists of uppercase, lowercase and number!");
//					  return false;
//					}

                }

                if ($('#password').val() != $('#confirmpassword').val()) {
                    $('#error').text('Password and confirm password do not match');
                    return false;
                } else if (checkeEmail($('input[name="email"]').val()) == 0) {
                    $('#error').text('Email already exist');
                    return false;
                } else if (checkOrganization($('input[name="orgname"]').val()) == 0) {
                    $('#error').text('Organization name already exist');
                    return false;
                }

                /* if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1 && ext!='') {
                 alert('invalid file!');
                 return false;
                 }
                 if(fsize >= 20000){
                 alert('invalid file!');
                 return false;
                 } */
                //alert(checkOrganization($('input[name="orgname"]').val())); 
                //return false;

            });

//            $('#imgInp').fileupload({
//                add: function(e, data) {
//                    var fileType = data.files[0].name.split('.').pop(), allowdtypes = 'jpeg,jpg,png,gif';
//                    if (allowdtypes.indexOf(fileType) < 0) {
//                        alert('Invalid file type, aborted');
//                        return false;
//                    }
//                }
//            });
        });
        function checkeEmail(email) {
            //get the email  
            stat = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>user/checkEmail", {email: email},
            function(result) {
                if (result == 1) {
                    stat = 0;
                } else {
                    stat = 1;
                }
            });
            $.ajaxSetup({async: true});
            return stat;
        }

        function checkOrganization(org) {
            //get the email  
            stat = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>user/checkOrganization", {org: org},
            function(result) {
                if (result == 1) {
                    stat = 0;
                } else {
                    stat = 1;
                }
            });
            $.ajaxSetup({async: true});
            return stat;
        }

        $('#uplogo1').click(function() {
//                   alert('test');
            $('input[type="file"]').click();
        });
        $("#imgInp").change(function() {
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgprev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        ;
    });
</script>
<body class="getstartedbodyLog">
    <div class="accountContainer">
        <form method="post" action="<?php echo URL ?>user/userRegister" name="landing" class="accountForm" id="accountForm" enctype="multipart/form-data" >

            <?php $result = array();
            if (isset($_GET["receipt"])):
                ?>
                <input type="hidden" name="receipt" value="<?= $_GET["receipt"] ?>">
                <?php
                require_once('registration/amember_api.php');

                $amember = new AmemberAPI;

                $result = $amember::validate_receipt($_GET["receipt"]);
                ?>
            <?php endif; ?>

            <div class="createYourAccount2">
                <div class="atherform">
                    <div>
                        <div class="userAccount titleaccount">BASIC INFORMATION</div>
                        <div class="setup">THIS SETUP WILL BE DISPLAY ON REPORTS</div>
                    </div>
                    <div class="maincontact">
                        <div class="whole">
                            <table>
                                <td>REGISTERED NAME</td>
                                <td><input type="text" required name="orgname" value="<?php echo!empty($result) ? $result->s_name : ((Session::getSession('companyName') != '') ? Session::getSession('companyName') : '') ?>" placeholder="Last Name, First Name, Middle Name"></td>
                            </table>
                            <div class="rightform">
                                <table>
                                    <tr>
                                        <td>PHONE NO.</td>
                                        <td><input type="text" name="phoneNum" class="rightInput" value="<?php echo!empty($result) ? $result->s_phone : ""; ?>" maxlength="20" required ></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">FAX NO.</td>
                                        <td style="padding-top: 5px;"><input type="text" name="faxNum" class="rightInput" maxlength="20" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="address">
                        <table class="">
                            <tr>
                                <td style="">REGISTERED ADDRESS</td>
                                <td rowspan="1"><input type="text" name="address" value="<?php echo!empty($result) ? $result->s_address : ""; ?>" style="width: 585px;" maxlength="100" required></td>
                            </tr>
                        </table>
                    </div>


                    <div class="div1">
                        <table>
                            <tr>
                                <td>EMAIL ADDRESS</td>
                                <td><input type="email" name="email" required  value="<?php echo!empty($result) ? $result->s_email : ((Session::getSession('email') != '') ? Session::getSession('email') : '') ?>" style="width: 227px;" maxlength="70"></td>
                            </tr>
                        </table>
                    </div>

                    <div>
                        <table class="div2">
                            <tr>
                                <td>PASSWORD</td>
                                <td><input type="password" id="password" name="password" required  value="<?php echo!empty($result) ? $result->s_email : ((Session::getSession('email') != '') ? Session::getSession('email') : '') ?>" style="width: 185px;" maxlength="20"></td>
                                <td style="padding-left: 23px;">CONFIRM PASSWORD</td>
                                <td><input type="password" required name="confirmpassword" id="confirmpassword" style="width: 160px;" maxlength="20"></td>
                            </tr>
                        </table>

                    </div>
                    <div class="div3">
                        <table class="">
                            <tr>
                                <td>
                                    ZIP CODE
                                </td>
                                <td>
                                    <input type="text" name="zipCode" style="width: 105px;" maxlength="4" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top: 15px;">
                                    RDO CODE
                                </td>
                                <td style="padding-top: 15px;">
                                    <input type="text" name="rdoCode" style="margin-left: 16px; width:265px;" maxlength="20" required>
                                </td>
                            </tr>


                        </table>
                        <table>
                            <tr>
                                <td style="padding-top: 15px;">TIN</td>
                                <td style="padding-top: 15px;"><input type="text" name="tinNum" style="width: 300px;" maxlength="20" required></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td style="padding-top: 15px;">LINE OF BUSINESS/OCCUPATION:</td>
                                <td style="padding-top: 15px;"><input type="text" name="lineOfBusiness" style="width: 283px;" maxlength="100" required></td>
                            </tr>
                        </table>


                    </div>


                    <div>	
                        <div class="div4">
                            <table class="div4a">
                                <tr>
                                    <td style="padding-left: 22px;color: rgb(131, 145, 167);font-size: 10px;">
                                        METHOD OF DEDUCTION:
                                    </td>
                                </tr>	
                                <tr>	
                                    <td>
                                        <input type="radio" name="modeOfPayment" value="osd" style="margin-left:0px;" required checked>
                                        <span data-tooltip="Automatic maximum deduction of 40% of income even without supporting receipts" data-tooltip-position="right">
                                            OPTIONAL STANDARD DEDUCTION
                                        </span>    
                                    </td>
                                </tr>	
                                <tr>	
                                    <td>
                                        <input type="radio" name="modeOfPayment" value="itemized" style="margin-left:0px;" required> 
                                        <span data-tooltip="Can be used if expenses is more than 40% of income. Should provide expense receipts" data-tooltip-position="right">
                                            ITEMIZED DEDUCTION</span><br/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="div5">
                            <table>
                                <tr>
                                    <td style="padding-left: 22px;color: rgb(131, 145, 167);font-size: 10px;">
                                        TYPE OF TAX:
                                    </td>
                                </tr>	
                                <tr>	
                                    <td>
                                        <input type="radio" name="typeOfTax" value="percentage" style="margin-left:0px;" required checked>
                                        <span data-tooltip="If your income is below 1,919,500.00" data-tooltip-position="right">PERCENTAGE</span>

                                    </td>
                                </tr>	
                                <tr>	
                                    <td>
                                        <input type="radio" name="typeOfTax" value="vat" style="margin-left:0px;" required>
                                        <span data-tooltip="If your income is over 1,919,500.00" data-tooltip-position="right">VALUE-ADDED TAX</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>	 
                    <input type="submit" name="submit" value=""  class="proceedUser">
                    <div style="height:30px;"></div>

                </div>
            </div>
            <div id="error"></div>
        </form>
    </div>