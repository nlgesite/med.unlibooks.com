<style>
    .getstartedbody{
        margin: 0px;
    }
    .textColor{
        font-size:12px;
        color:#1EBE39;
        font-weight:bold;
    }
    .inputstarted{
        padding-top: 10px;
    }
    .inputstarted2{
        padding-top: 3px;
    }

    #error{
        font: normal 10px Arial;
        color: red;
    }
</style>
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.companyFormLog1').submit(function() {
                if ($('#password').val() != $('#confirmpassword').val()) {
                    $('#error').text('Password and confirm password do not match');
                    return false;
                }else if(checkeEmail($('input[name="email"]').val()) == 0){
                    $('#error').text('Email already exist');
                    
                    return false;
                }else if(checkOrganization($('input[name="orgname"]').val()) == 0){
                    $('#error').text('Organization name already exist');
                    
                    return false;
                }else if(!$('.Log1Check').is(':checked')){
                    $('#error').text('Please check terms and condition');
                    return false;
                }
                
            });
                       
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
    });
</script>
  <link href="<?= URL ?>views/user/css/default.css" rel="stylesheet" type="text/css">
<body class="getstartedbody">
  
    <div class="invoiceHolderLog1">
        <form method="post" action="<?= URL ?>user/userRegister" class="companyFormLog1">
            <div id="newLog1">
                <div class ="divlog1">
                    <div class="titlelog1"><img class="logoStart"  src="<?= URL ?>public/images/logotrans.png"></div>
                    <div class="title2log1">Start your 30-days free trial</div>

                    <table>
                        <tr class="getStartedTr">
                            <td class="titlelog1getstarted">Full Name:</td>
                            <td class="inputstarted"><input type="text" class="InputGetStarted" name="name" required></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="titlelog1getstarted">Organization Name:</td>
                            <td class="inputstarted2"><input type="text" class="InputGetStarted" name="orgname" required></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="titlelog1getstarted">Current Software:</td>
                            <td class="inputstarted2">
                                <select class="CSInputlog1">
                                    <option></option>
                                </select></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="titlelog1getstarted">E-mail Address:</td>
                            <td class="inputstarted2"><input type="email" class="InputGetStarted" name="email" required ></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="titlelog1getstarted">Password:</td>
                            <td class="inputstarted2"><input type="password" class="InputGetStarted" id="password" name="password" required></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="titlelog1getstarted">Confirm Password:</td>
                            <td class="inputstarted2"><input type="password" class="InputGetStarted" id="confirmpassword" name="confirmpassword" required></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="text6log1" colspan="2" ><input type="checkbox" class="Log1Check">I have read and agree to the <span class="textColor"> Unlibooks Partner Agreement</span> &nbsp &nbsp &nbsp  &nbsp &nbsp and <span  class="textColor">Terms of Use.</span></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <div id="error"></div></td>
                        </tr>
                        <tr class="getStartedTr">
                            <td class="text10log1" colspan="2"><input type="submit" value="Get Started" class="Log1button"></td>
                        </tr>
                    </table>
                    
                    <hr class ="log1Hr">
                    <div class="divGetStarted" colspan="2" >Or<a href=<?= URL ?>login class="textColor"> Log In</a> and if you already have an account.</div>
                </div>
            </div>
        </form>
    </div>
</body>