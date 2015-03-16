<style>
    .coaform{
        width:100%;

    }
    .coaform2{
        background-color:white;
        padding-top:15px;
        padding-bottom:25px;
    }
    .coaformin{
        border-radius: 5px;
        border: solid 1px gray;
        width: 955px;
        margin: auto;
        padding:10px;
        padding-bottom:320px;
    }
    .coatitle{
        font-size:16px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight:normal;
        padding-left:15px;
    }
    .lineadmin{
        width: 955px;
    }
    .adminButton{
        padding-left:10px
    }
    .admincoatable{
        border-collapse:collapse;
        width:955px;
        margin:auto;
        margin-top:3px;
    }
    .admincoatable th{
        background-color:#55C768;
        height:27px;
        text-align:left;
        padding:5px;
        border:none;
        font-size:13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;

    }
    .buttonAdmincoa{
        border:none;
        background:none;
        cursor:pointer;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
        margin-top:5px;
    }
    .assets{
        background-color:rgb(235, 241, 222);
        padding:5px;
        padding-left:25px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:14px;
        font-weight:bold;
        color:black;
    }
    .admincoatable td{
        /* background-color:#55C768; */
        height:27px;
        text-align:left;
        padding:5px;
        border:none;
        font-size:13px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        border-top: 1px solid #C0C0C0;
        border-bottom: 1px solid #C0C0C0;
    }
    .addcoa{
        background-image: url('/unlibooks/admin/public/images/addnew.png');
        width: 79px;
        height: 29px;
        background-repeat: no-repeat;
        padding: 5;
        background-size: 101% 73%;
        background-position: 1px 4px;

    }
    .deletecoa{
        background-image: url('/unlibooks/admin/public/images/deleteadmin.png');
        width: 79px;
        height: 29px;
        background-repeat: no-repeat;
        padding: 5;
        background-size: 96% 100%;
        background-position: 3px 0px;
    }
    .editcoa{
        background-image: url('/unlibooks/admin/public/images/editadmin.png');
        width: 79px;
        height: 29px;
        background-repeat: no-repeat;
        padding: 5;
        background-size: 88% 97%;
        background-position: 5px 0px;

    }
</style>


<div class="coaform">
    <form class="coaform2">
        <div class="coaformin">
            <div class="coatitle">COA</div>
            <img class="lineadmin"  src="<?= URL ?>public/images/lineadmin.png">
            <div class="adminButton">
                <input type="button" value="" class="buttonAdmincoa addcoa">
                <input type="button" value="" class="buttonAdmincoa deletecoa">
                <input type="button" value="" class="buttonAdmincoa editcoa" onclick="editrec('')">
            </div>
            <?php $coalist = array('assets', 'liabilities', 'income', 'expense','equity'); ?>
            <div>
                <table class="admincoatable">
                    <tr>
                        <th width="2%"><input type="checkbox"></th>
                        <th>Account Code</th>
                        <th>Name</th>
                        <th>Income/Balance Sheet</th>
                    </tr>
                    <?php foreach ($coalist as $type) { ?>
                        <tr>
                            <td colspan="4" class="assets" style="color:black;"><?php echo ucfirst($type); ?></td>	
                        </tr>
                        <?php
                        $items = AdminCoaMySqlExtDAO::getCoa(ucfirst($type));

                        foreach ($items as $item) {
                            ?>
                            <tr>
                                <td><input type="checkbox" class="chk" name="chk[]" value="<?php echo $item->id ?>"></td>
                                <td><?php echo $item->accountNum ?></td>
                                <td><?php echo $item->accountName ?></td>
                                <td><?php echo $item->incomeBalanceSheet ?></td>
                            </tr>
                            <?php
                            $subitems = DAOFactory::getAdminCoaDAO()->queryBySubAccount($item->id);
                            if (count($subitems > 0)) {
                                foreach ($subitems as $subitem) {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" class="chk" name="chk[]" value="<?php echo $subitem->id ?>" style="margin-left: 15px"></td>
                                        <td><?php echo $subitem->accountNum ?></td>
                                        <td><?php echo $subitem->accountName ?></td>
                                        <td><?php echo $subitem->incomeBalanceSheet ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </table>
            </div>


        </div>
    </form>
</div>

<div class="popBack hidden">

</div>

<script>
    $(function() {
        $('.addcoa').click(function() {
            $.post(URL + 'coa/new_charts_account')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.chart-close').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
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

    function editrec(coaid) {

        if ($('.chk').is(':checked') || coaid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                return false;
            });

            if (coaid != '') {
                checked = parseInt(coaid);
            }

            $.post(URL + 'coa/new_charts_account', {coaid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.chart-close').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                location.reload();
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



