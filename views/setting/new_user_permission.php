<style>
    body{
        overflow:hidden;
    }
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }


    .rowTable{
        height: 30px;
        width: 870px;
        margin-top: -10px;
    }
    .rowTable2{
        height: 30px;
        width: 870px;
        margin-top: 10px;
    }

    .changePassword{
        float: right;
        margin-top: -27px;
        margin-right: 11px;
        font-size:13px;
        font-family:verdana;
        color:white;
        font-weight:bold;
        border:none;
        border-radius: 5px;
        width: 140px;
        padding: 5px;
        cursor:pointer;
        background: ##B6B1B1; /* Old browsers */
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949)); 
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%); 
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%); 
        background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
    }
    .userTable2{

    }
</style>
<?php
$task = "adduser";
$user = new TblUser();

if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $user = DAOFactory::getTblUserDAO()->load($userid);
    Session::setSession('userid', $userid);
    $task = 'updateuser';
}
?>
<link href="<?=URL?>views/setting/css/ajax.css" rel="stylesheet" type="text/css">
<div class="invoiceHolderNNUser">
    <span id="error"></span>
    <form method="post" action="<?php echo URL ?>setting/permission" class="cnt-formNNUser" id="userfrm2">
        <div id="newNNUser">
            <input type="button" class="closeNNUser" value="X">
            <p class="cnt-headNNUser">New User</p>
        </div>
        <div class="chart-boxPermission">
            <p class="aText"><b>Accounts</b></p>
            <table class="tableUser" style="margin-left: 20px;">
                <tr>
                    <td class="">User No.:</td>
                    <td><input type="text" class="PermisionUserNo" name="userNo" value="<?php echo $user->userNo ?>" required></td>
                </tr>
                
                <tr>
                    <td class="">Name:</td>
                    <td><input type="text" class="PermisionName2" id="name" name="name" value="<?php echo $user->fullName ?>" required></td>
                </tr>


            </table>

            <table class="TableUser2">

                <tr>
                    <td class="">Email Address:</td>
                    <td><input type="email" class="PermisionEmail2" name="email" value="<?php echo $user->emailAddress ?>" required></td>
                </tr>

                <?php
                if ($task == "adduser") {
                    ?>
                    <tr>
                        <td class="PermisionUserNamePer">Password:</td>
                        <td><input type="password" class="PermisionUserName2Per" name="password"></td>
                    </tr>
                    <tr>
                        <td class="PermisionUserNamePer">Confirm Password:</td>
                        <td><input type="password" class="PermisionUserName2Per" name="confirmpassword"></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td><input type="checkbox" checked class="ActiveAccountUserPermission">Active Account</td>
                </tr>
            </table>
            <?php if ($task == "updateuser") { ?>
                <input type="button" class="changePassword" value="Change Password">
            <?php } ?>
        </div>

        
        <input type="hidden" name="task" value="<?php echo $task ?>" />
        <div class="buttonNBank">	
            <input type="submit" value="Save" class="saveBNNUserP">
            <input type="submit" value="Save and Add New" class="saanBNNUserP" id="saveAddNew">
        </div>
		<div style="clear:both"></div>
    </form>

</div>

<script>
    $(function() {
        returnurl = '';
        $('.changePassword').click(function() {
            $.post(URL + 'setting/change_password')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.changebuttonCancel').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });


        $('#saveAddNew').click(function() {
            returnurl = 'savenew';
        });

        $('#userfrm2').submit(function() {
            if ($("input[name='task']").val == "adduser") {
                if (checkeEmail($('input[name="email"]').val()) == 0) {
                    $('#error').text('Email already exist');
                    return false;
                }
            }
            if ($("input[name='password']").val() !== $("input[name='confirmpassword']").val()) {
                alert('Password and confirm password do not match.');
                return false;
            }

//            alert('test');return false;
            if (returnurl == "savenew") {
                $.post(URL + "setting/adduser", {
                    userNo: $('input[name="userNo"]').val(),
                      //  type: $('#userfrm2 #type').val(),
                        name: $('input[name="name"]').val(),
                        email: $('input[name="email"]').val(),
                        password: $('input[name="password"]').val(),
                        active:'yes',
                        confirmpassword: $('input[name="confirmpassword"]').val(),
                        task: 'adduser'
                },
                function(result) {
                     $("#userfrm2").trigger('reset');
                        if (returnurl != 'savenew') {
                            $('.popBack').addClass("hidden");
                            $('.userfrm2').addClass('hidden');
                            $('body').css('overflow', 'auto');
                        }
                });
                return false;
            }
        })
//			

    })
	
	
	
	
	
	
	
	
	
	
	
	

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
</script>
