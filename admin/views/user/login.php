<style>
	
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
                    url: URL + "coa",
                    async: false,
                    error: function() {
                        return 'Connection Error!';
                    }
                }).responseText;

                if (validate == 0) {
                    location.reload();
                } else {
                    location = URL + "coa";
                }
            } else {
                if (msg == '1') {
                    location = URL + 'login/userLogin';
                } else {
                    $('.loginDevider').html('<div class="error">' + msg + '</div>');
                }
            }
            return false;
        });
    })
</script>
<link href="<?= URL ?>views/index/css/default.css" rel="stylesheet" type="text/css">
<body class="getstartedbodyLog">
    <div class="invoiceHolderLog1">
        <form method="post" action="<?php echo URL ?>login/userLogin" class="companyFormLog1"  id="loginForm">
         
            <div id="newLog1">
                <div class ="divlog1">
					<img class="scpLogo"  src="<?= URL ?>public/images/scp.png">
					<div class="companyNameNew">SISON CORILLO PARONE & CO.</div>
                    <hr class="title2lognew">
					   <div class="loginDevider"></div>
                    <table class="logintr">
                        <tr class="logintr">
                            <td class="text1log2">Email Address:</td>
                            <td class="logintd"><input type="email" class="fullnameInputlog2" name="email" required></td>
                        </tr>
                        <tr class="logintr">
                            <td class="text1log2">Password:</td>
                            <td><input type="password" class="fullnameInputlog2" name="password" required></td>
                        </tr>

                    </table>
                    <input type="submit" value="Log In" class="Log2button" style="margin-left: 150px;">

                </div>
            </div>
        </form>
    </div>
</body>