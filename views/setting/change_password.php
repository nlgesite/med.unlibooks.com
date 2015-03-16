<style>
    .changeMain{
        width:100%;
    }
    .changeMainForm{
        width:320px;
        padding:5px;
        margin:auto;
        background-color:white;
        margin-top:100px;
        padding-bottom:15px;
        box-shadow: 0px 1px 1px 0px rgb(150, 150, 150);
        border-radius:5px;
    }
    .changeText{
        color:rgb(79,98,40);
        font-family:calibri;
        font-size:14px;
        font-weight:bold;
        padding:5px;
    }
    .changeLine{
        border-top:1px solid green;
        border-left:none
            border-bottom:none;
        border-right:none;
    }
    .changeTable{
        margin-top:5px;
    }
    .changeTable td{
        color:rgb(79,98,40);
        font-family:calibri;
        font-size:12px;
        font-weight:bold;
    }
    .changeTable input[type="text"]{
        width: 200px;
        padding: 4px 5px 4px 5px;
        font-family:calibri;
        font-size:12px;
        border:1px solid rgb(191, 191, 191);
    }

    .buttonHolder{
        margin-top:10px;
        margin-left:180px;
    }
    .changebutton{
        width:60px;
        border-radius:5px;
        border:none;
        color:white;
        font-family:calibri;
        font-weight:bold;
        font-size:14px;
        padding:5px 3px 3px 5px;
        background: #9cc647;
        background: -moz-linear-gradient(top, #9cc647 0%, #7b9b37 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9cc647), color-stop(100%,#7b9b37));
        background: -webkit-linear-gradient(top, #9cc647 0%,#7b9b37 100%);
        background: -o-linear-gradient(top, #9cc647 0%,#7b9b37 100%);
        background: -ms-linear-gradient(top, #9cc647 0%,#7b9b37 100%);
        background: linear-gradient(to bottom, #9cc647 0%,#7b9b37 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='9cc647', endColorstr='#7b9b37',GradientType=0 );
        box-shadow: 0px 1px 1px 0px rgb(150, 150, 150);
    }
</style>

<div class="changeMain">
    <form method="post" action="<?php echo URL ?>setting/permission" class="changeMainForm">
        <div class="changeText">Change Password</div>
        <div class="changeLine"></div>
        <table class="changeTable">
            <tr>
                <td>Old Password</td>
                <td><input type="password" name="oldpassword" placeholder="Enter Old Password"></td>
            </tr>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="newpassword" placeholder="Enter New Password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="nconfirmpassword" placeholder="Confirm Password"></td>
            </tr>
        </table>
        <div class="buttonHolder">
            <input type="submit" class="changebutton changebuttonOK" value="Ok">
            <input type="button" class="changebutton changebuttonCancel" value="Cancel">
            <input type="hidden" name="task" value="changepassword" />
        </div>

    </form>
</div>

<script>
    $(function() {
        result = "";
        $('.changeMainForm').submit(function() {
            $.ajaxSetup({async: false});
            $.post(URL + 'setting/checkpassword', {oldpassword: $('input[name="oldpassword"]').val()})
                    .done(function(returnData) { 
                        result = returnData;

                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            if (result == 1) {
                alert('Old password did not match from the database');
                return false;
            }
            if ($('input[name="newpassword"]').val() !== $('input[name="nconfirmpassword"]').val()) {
                alert('Password and confirm password do not match');
                return false;
            }
        })
    });
</script>
