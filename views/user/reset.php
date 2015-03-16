<style>

.getstartedbodyLog{
	background-image: url('<?= URL ?>public/images/loginback.png');
	background-size: 100%;
    background-repeat: no-repeat;
	margin:0;
}
.divlog1{
	background-image: url('<?= URL ?>public/images/logincontainer.png');
	background-size: 100% 338px;		
	height: 338px;
	border-radius: 15px;	
}
.Log3button{
	background-image: url('<?= URL ?>public/images/submit.png');
	background-size: 100% 100%;	
}
</style>

<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script>
    URL = '<?php echo URL; ?>';
</script>
<script>
    $(function(){
        $('#form').submit(function(){  
        if(checkeEmail($('input[name="email"]').val()) == 1){
                    $('#error').text('Email does not exist');
                    
                    return false;
                }
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
    })
</script>
<link href="<?= URL ?>views/user/css/default.css" rel="stylesheet" type="text/css">
<body class="getstartedbodyLog">
    <div class="invoiceHolderLog1">
        <form method="post" action="<?php echo URL ?>login/userLogin" class="companyFormLog1"  id="loginForm" style="margin: auto;
width: 360px;
margin-top: 122px;">
            <div id="newLog1">
                <div class ="divlog1">
					<img class="scpLogo"  src="<?= URL ?>public/images/medical PNG.png">
					<!--<img class="scpLogo"  src="<?= URL ?>public/images/scp.png">-->
					<!--<div class="companyNameNew">SISON CORILLO PARONE & CO.</div>
                    <hr class="title2lognew">-->
					   <div class="loginDevider"></div>
                    <table class="logintr">
						<tr class="logintr">
                            <td class="text1log2"></td>
                        </tr>
                        <tr class="logintr">
                            <td class="logintd"><div style="margin-left:10px;background-image:url('public/images/inputcontainer.png');background-size: 100% 100%;"><input type="email" class="fullnameInputlog3 fullnameInputlog2" placeholder="Email Address" name="email" required></div></td>
                        </tr>
                       

                    </table>
                    <div class="text2og3">Resetting your password will be emailed to you.</div>
                       
                    <input type="submit" value="" class="Log3button">

                  <!--  <div class="loginlink"><a href="<?= URL ?>login"  class="text3log3"> Log In </a><hr class="loginhr"> <div class="loginhr2"><a href="landing"<?= URL ?>register"  class="text3log3 text3log3New"> Create Account  Now! </a></div></div>
-->
                </div>
		</div>
        </form>
    </div>
</body>