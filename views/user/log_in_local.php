<style>

.getstartedbodyLog{
	background-image: url('<?= URL ?>public/images/loginback.png');
	background-size: 100%;
    background-repeat: no-repeat;
	margin:0;
}
.divlog1{
	background-image: url('<?= URL ?>public/images/logincontainer.png');
	background-size: 100% 100%;
	height: 420px;
	border-radius: 15px;
	background-repeat: no-repeat;
}
.Log2button{
	background-image: url('<?= URL ?>public/images/loginbutton.png');
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
    $(function() {
        $('#loginForm').submit(function() {
            $('.loginDevider').html('<div>LOADING. . .</div>');
            email = $('input[name="email"]').val();
            if (email == '') {
                $('.loginDevider').html('<div class="error">Please Enter Username!</div>');
                $('input[name="email"]').focus();
                return false;
            }

            password = $('input[name="password"]').val();
            if (password == '') {
                $('.loginDevider').html('<div class="error">Please Enter Password!</div>');
                $('input[name="password"]').focus();
                return false;
            }

            msg = $.ajax({
                url: URL + "login/userLogin",
                type: 'POST',
                data: {'email': email, 'password': password},
                async: false,
                error: function() {
                    return 'Connection Error!';
                }
            }).responseText;
            
            if (msg == '') {
                validate = $.ajax({
                    url: URL + "dashboard",
                    async: false,
                    error: function() {
                        return 'Connection Error!';
                    }
                }).responseText;

                if (validate == 0) {
                    location.reload();
                } else {
                    location = URL + "dashboard";
                }
            } else {
                if (msg == '1') {
                    location = URL + 'login/userLogin';
                } else { alert(msg);
                    $('.loginDevider').html('<div class="error">' + msg + '</div>');
                }
            }
            return false;
        });
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
					     <div class="loginDevider hidden"></div>
                    <table class="logintr">
						<tr class="logintr">
                            <td class="text1log2">EMAIL ADDRESS:</td>
                        </tr>
                        <tr class="logintr">
                            <td class="logintd"><div style="margin-left:10px;background-image:url('public/images/inputcontainer.png');background-size: 100% 100%;"><input type="email" class="fullnameInputlog2" placeholder="" name="email" required></div></td>
                        </tr>
                        <tr class="logintr">
                            <td class="text1log2">PASSWORD:</td>
                        </tr>
						 <tr class="logintr">
                            <td><div style="margin-left:10px;background-image:url('public/images/inputcontainer.png');background-size: 100% 100%;"><input type="password" class="fullnameInputlog2" name="password" placeholder="" required></div></td>
                        </tr>

                    </table>
					<div>
						<div class="ban"><a href="<?= URL ?>forgotpassword" class="textlogin"> Forgot your Password?</a></div>
						<input type="submit" value="" class="Log2button">
						<p class="tryCreate">Don't have any account yet? <a href="<?php echo URL?>">Create Account Now</a></p>
					</div>
                </div>
		</div>
        </form>
		
    </div>
</body>