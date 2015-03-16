<style>
    .createNewUserPermission{
        margin-left: 747px;
        margin-top: -74px;
        width: 212px;
        height: 47px;
        border: none;
        background-image: url('<?=URL?>public/images/userPermission.png');
        background-repeat: no-repeat;
        background-position: left;
        border-radius: 10px;
        cursor: pointer;

    }


    .collect_tableUseP{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 15px;
    }
    .collect_tableUseP, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .collect_tableUseP, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .collect_tableUseP a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
    }
    .taxestr{
        background-color: white;
        border-bottom: solid 1px #C8C8C8;
        height: 25px;
    }
    .collect_tableUseP tr:HOVER{
        background-color: #E8E8E8;
    }	
</style>

<div class="invoiceHolderUseP">
    <div id="newUseP">
        <p class="headTextUseP">User & Permission</p>
        <a href="<?=URL?>invoice/newRecurring">
            <input type="button"  class="createNewUserPermission">
        </a>

        <div class="hrClass4UseP"></div>
    </div>

    <div class="div2UseP">
        <div id="button_containerUseP">
            <input type="button" value="Edit" class="printUseP addpaymentUseP" onclick="editrec('')">
            <input type="button" value="Delete" class="edit1UseP" onclick="deleterec()">
        </div>
    </div>

    <form method="post" action="<?php echo URL ?>setting/user" id="userfrm">
        <div>
            <table class="collect_tableUseP">

                <tr class="head_collectUseP">
                    <th width="2%"><input type="checkbox"></th>
                    <th>User No.</th>
                    <th>Name</th>
                    <th>E-Mail Address</th>
                    <th class="hidden">Type</th>
                </tr>
                <?php
                $user = DAOFactory::getTblUserDAO()->queryByOrgInfoId(Session::getSession('medinfoid'));

                if (count($user) > 0) {
                    foreach ($user as $item) {
                        ?>
                        <tr class="table_collectionUseP">
                            <td><input type="checkbox"  name="chk[]" class="chk" value="<?php echo $item->id ?>"></td>
                            <td><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->userNo ?></a></td>
                            <td><?php echo $item->fullName ?></td>
                            <td><?php echo $item->emailAddress ?></td>
                            <td><?php echo $item->type ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>	
			 <input type="hidden" name="task" value="">
        </div>	
    </form>
    <div class="popBack hidden">

    </div>
    <script>
        $(function() {
            $('.createNewUserPermission').click(function() {
                $.post(URL + 'setting/user')
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');


                            $('.closeNNUser').click(function() {
                                if (confirm('Are you sure, you want to leave this page without posting?')) {
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                    location.reload();
                                }
                            });
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            });
        })

        function deleterec() {
            if ($('.chk').is(':checked')) {
                var checked = [];
                $("input[name='chk[]']:checked").each(function()
                {
                    checked.push(parseInt($(this).val()));
                    return false;
                });

                $.post(URL + 'setting/user', {users: checked})
                        .done(function(returnData) {
//                                alert(returnData); return false;
//                            if (returnData) {
//                                alert('Unable to the delete the following record(s) due to existing transaction(s).')
//                            }
//                            else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('deluser');
                                $('#form').submit();
                            }
//                            }

                        });

            } else {
                alert('Please select record to delete');
            }
        }
        function editrec(userid) {
            if ($('.chk').is(':checked') || userid != '') {
                var checked;
                $("input[name='chk[]']:checked").each(function()
                {
                    checked = parseInt($(this).val());
                    return false;
                });

                if (userid != '') {
                    checked = parseInt(userid);
                }
//                alert(checked);
                $.post(URL + 'setting/user', {userid: checked})
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');


                            $('.closeNNUser').click(function() {
                                if (confirm('Are you sure, you want to leave this page without posting?')) {
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                }
                            });
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            } else {
                alert('Please select record to edit');
            }
        }
    </script>		