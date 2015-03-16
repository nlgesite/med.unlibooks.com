<style>
    .saotable{
        margin-top:3px;
        font-size: 12px;
        font-family: verdana;
    }
    .sao{
        width: 190px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-size: 12px;
        font-family: verdana;
        text-align: right;
        margin-top: 5px;
        margin-left:5px;
    }
    .saotext{
        font-size: 12px;
        font-family: verdana;
        margin-left: -20px;
    }
</style>
<link href="<?= URL ?>views/accounting/css/ajax.css" rel="stylesheet" type="text/css">

<script>
    $(function() {

        $("select.aType").change(function() {
            if ($(this).val() !== '') {
                accountTypeSub();
            }
        });

        $('#chksubaccount').click(function() {
            if ($(this).is(':checked')) {
                $('.sao').removeAttr('disabled');
                $('.sao').attr('required', 'required');
            } else {
                $('.sao').attr('disabled', 'disabled');
                $('.sao').removeAttr('required');
            }

        });

    })
</script>


<?php
$coa = new TblCoa();
$task = 'addcoa';
$isreadonly = '';
if (isset($_POST['coaid'][0])) {
    $coaid = $_POST['coaid'][0];

    $coa = DAOFactory::getTblCoaDAO()->load($coaid);
    Session::setSession('coaid', $coaid);
    $task = 'updatecoa';

    if (count(DAOFactory::getAdminCoaDAO()->queryByAccountNum($coa->accountNum)) > 0) {
        $isreadonly = "readonly";
        Session::setSession('coadefault', 'default');
    }
}
?>

<div class="chartHolder">
    <form method="post" action="<?php echo URL ?>accounting/chart" class="chart-form">
        <div id="chart-div">
            <input type="button" class="chart-close" value="X">
            <p class="chart-head"><?php echo ($task == 'addcoa') ? 'Create New' : 'Update' ?> Chart of Account</p>
            <hr class="hrNNCOA">
            <div class="chart-box">
                <p class="aText"><b>Accounts</b></p>
                <table class="COATable">
                    <tr>
                        <td class="">Account Code.</td>
                        <td><input type="text" class="aNo" required name="accountNum" value="<?php echo $coa->accountNum ?>" <?php echo $isreadonly ?>></td>
                    </tr>
                    <tr>
                        <td class="atText">Account Type:</td>
                        <td><select class="aType" name="accountType" required <?php echo ($isreadonly != '') ? 'disabled' : '' ?>>
                                <option></option>
                                <option value="assets" <?php echo ($coa->accountType == "Assets") ? "selected" : '' ?>>Assets</option>
                                <option value="liabilities" <?php echo ($coa->accountType == "Liabilities") ? "selected" : '' ?>>Liabilities</option>
                                <option value="income" <?php echo ($coa->accountType == "Income") ? "selected" : '' ?>>Income</option>
                                <option value="expense" <?php echo ($coa->accountType == "Expense") ? "selected" : '' ?>>Expense</option>
                                <option value="equity" <?php echo ($coa->accountType == "Equity") ? "selected" : '' ?>>Equity</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="">Account Name:</td>
                        <td><input type="text" class="aNameInput" name="accountName" value="<?php echo $coa->accontName ?>" required <?php echo $isreadonly ?>></td>
                    </tr>
                    <table class="saotable">
                        <tr>
                            <td><input type="checkbox" <?php echo ($isreadonly != '') ? 'disabled' : '';
echo ($coa->subAccount != '') ? 'checked' : ''
?> id="chksubaccount"></td>
                            <td><div class="saotext">Sub Account of:</div></td>
                            <td><select name="subAccount" class="sao" <?php echo ($isreadonly != '') ? 'disabled' : '' ?> <?php echo ($task == 'addcoa') ? 'disabled' : '' ?>>
                                    <option></option>
                                    <?php
                                    if ($task == "updatecoa") {
                                        $items = TblCoaMySqlExtDAO::getcoaData($coa->accountType); //DAOFactory::getTblCoaDAO()->queryByAccountType($coa->accountType);
                                        foreach ($items as $item) {
                                            if ($item->id != $coa->id) {
                                                ?>
                                                <option value="<?php echo $item->id ?>" <?php echo ($item->id == $coa->subAccount) ? 'selected' : '' ?>><?php echo $item->accontName ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="hrclassChartNew"></div>
            <div class="div-saveAdd">
                <input type="submit" class="chartSave" value="Save" />
                <input type="submit" class="chartAddSave" value="Save and Add New" />
                <input type="hidden" name="task" value="<?php echo $task ?>" />
            </div>
            <div style="clear:both"></div>
        </div>
    </form>
</div>
<div class="popup hidden"></div>
<script>

    function accountTypeSub() {
        $.ajax({
            url: URL + "accounting/getCoaData",
            type: "POST",
            data: {
                accountTypeSub: $(".aType").val(),
            },
            dataType: "JSON",
            success: function(jsonStr) {
                $(".sao").find('option').remove();
                $.each(jsonStr, function(i, jsonStr) {
                    $(".sao").append($("<option></option>").val(jsonStr.id).html(jsonStr.c));
                });
            }
        });
    }

    $(function() {
        $('.chartAddSave').click(function() {
            evnt = "addnew";
        });

        $('#taxId').change(function() {
            if ($(this).val() == 'addtax')
                $.post(URL + 'accounting/tax', {returnurl: 'supplier'})
                        .done(function(returnData) {
                            $('.popup').html(returnData);
                            $('.popup').removeClass('hidden');

                            $('.closeNTaxes').click(function() {
                                $('.popup').addClass('hidden');
                                $('.popup').html('');
                            });
                        });
        });

        $('.chart-form').submit(function() {
            accntcode = $('input[name="accountNum"]').val();
            name = $('input[name="accountName"]').val();

            $.ajaxSetup({async: false});
            result = 0;
            $.post(URL + 'accounting/checkchart', {accountcode: accntcode})
                    .done(function(returnData) {
                        result = returnData;
                    });
            if (result > 0) {
                alert('Account number already exist');
                return false;
            }

            if (evnt == "addnew") {
                $.post(URL + 'accounting/setCoa', $('.chart-form').serialize())
                        .done(function(returnData) {
                            $('input[type="text"]').val('');
                            $('.descInput').text('');
                            $('.chart-form input[name="task"]').val('addcoa');
                            $evnt = '';
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            }
        });
    });
</script>


