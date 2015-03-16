<style>
    .chartadmin{
        width:100%;

    }
    .chartadminform{
        width: 962px;
        background-color:white;
        margin:auto;
        margin-top:50px;
        padding:5px;
        padding-bottom:60px;
    }
    .newcoa{
        margin-top: -11px;
        font-size: 30px;
        text-shadow: none;
        font-style: italic;
        font-family: verdana;
        margin-left: 20px;
    }
    .hrNNCOA {
        width: 959px;
        border: 2px solid gray;
        margin-left: -1px;
        margin-top: 15px;
        border-radius: 3px;
        height: 4px;
        background-color: gray;
    }
    .chart-box{
        border: 1px solid #C8C8C8;
        width: 463px;
        height: 340px;
        margin-left: 15px;
        margin-top:30px;
    }
    .aText{
        background-color: #fff;
        font-style: italic;
        font-family: verdana;
        font-size: 13px;
        width: 70px;
        text-align: center;
        margin-top: -9px;
        margin-left: 50px;
    }
    .COATable{
        margin-left: 25px;
    }
    .COATable td{
        color:#000000;
        font-family:verdana;
        font-size:12px;
    }
    .aNo{
        width: 130px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-size: 12px;
        font-family: verdana;
        text-align: right;
        padding: 5px;
        margin-left:5px;
    }
    .atText{
        font-family: verdana;
        font-size: 12px;
        margin-top: 10px;
        padding-left: 20px;
        color: #000000;
    }
    .aType{
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
    .aNameInput{
        width: 270px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        margin-top: 5px;
        font-size: 12px;
        font-family: verdana;
        text-align: left;
        padding:5px;
        margin-left:5px;
    }
    .descText{
        font-family: Calibri;
        font-size: 12px;
        position: absolute;
        margin-top: 168px;
        margin-left: 20px;
        color: #003366;
    }
    .atText2{
        font-family: verdana;
        font-size: 12px;
        margin-top: -31px;
        color: #000000;
        width: 100px;
    }
    .descInput{
        width:270px;
        height: 87px;
        border: 1px solid #C8C8C8;
        background-color: white;
        margin-top: 5px;
        font-size: 12px;
        font-family: Calibri;
        text-align: left;
        max-width:270px;
        max-height: 87px;
        padding:5px;
        margin-left:5px;
    }
    .chart-box2{
        float: right;
        border: 1px solid #C8C8C8;
        width: 451px;
        height: 340px;
        margin-top: -341px;
        margin-right: 15px;
    }
    .bText{
        background-color: #fff;
        margin-top: -10px;
        margin-left: 55px;
        font-style: italic;
        font-family: verdana;
        font-size: 13px;
        width: 70px;
        text-align: center;
    }



    .oBal{
        width: 111px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-size: 12px;
        font-family: verdana;
        margin-top: 0px;
        margin-left: 10px;
        padding:5px;
    }
    .asText{
        padding-left:5px;
        padding-top: 2px;
        font-family: verdana;
        font-size: 12px;
        color: #000000;
    }
    .ao{
        width: 128px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-size: 12px;
        font-family: verdana;
        text-align: right;
        margin-left: 10px;
        margin-top: 0px;
    }
    .noteText{
        font-family: verdana;
        font-size: 12px;
        color: #000000;
        padding-left: 20;
        margin-top: 10px;
    }
    .noteInput{
        width:355px;
        height: 87px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-size: 12px;
        font-family: verdana;
        text-align: left;
        margin-left: 65;
        margin-top: -12px;
        max-width:355px;
        max-height: 87px;
        padding:5px;
    }
    .aBox{
        color: #003366;
        margin-left: 20px;
        margin-top: 10px;
    }
    .aaInput{
        font-family: verdana;
        font-size: 12px;
        margin-left: 40px;
        margin-top: -16px;
        color: #000000;

    }
    .baltable{
        margin-left:15px;
    }
    .hrclassChartNew{
        width: 99%;
        margin: auto;
        margin-top: 50px;
        border-top: none;
        border-bottom: 1px solid #c8c8c8;
        border-left: none;
        border-right:none;
    }
    .div-saveAdd{
        /* width: 962px; */
        height: 48px;
        /*background-color: #E5F1CE;*/
        border: none;
        margin-top: 5px;
        padding-bottom:5px;
        float:right;
        margin-right:15px;
    }
    .chartSave{
        /* position: absolute; */
        margin-top: 10px;
        /* margin-left: 679px; */
        width: 105px;
        height:31px;
        border-radius: 5px;
        font-family: verdana;
        /* font-style: bold; */
        font-size: 13px;
        color: white;
        border: none;
        cursor: pointer;
        background: #B6B1B1;
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
    }
    .chartAddSave{
        /* position: absolute; */
        margin-top: 10px;
        /* margin-left: 789px; */
        width: 150px;
        height:31px;
        border-radius: 5px;
        font-family: verdana;
        /* font-style: bold; */
        font-size: 13px;
        color: white;
        border: none;
        cursor: pointer;
        background: #B6B1B1;
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
    }
    .ibs{
        margin-left:19px;
        font-family: verdana;
        font-size: 12px;
        margin-top:25px;
    }
    .ibsSelect{
        width: 190px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-size: 12px;
        font-family: verdana;
        margin-left:5px;
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
    .saotable{
        margin-left:22px;
        margin-top:10px;
        font-size: 12px;
        font-family: verdana;
    }
    .chart-close{
        background-color: gray;
        color: white;
        border: none;
        border-radius: 2px;
        font-family: verdana;
        font-weight: bold;
        font-size: 16px;
        height: 25px;
        margin-left: 944px;
        margin-top: -5px;
    }
</style>

<script>
    $(function() {
        
        $("select.aType").change(function() {
            //$( this ).val();
			
            if ($(this).val() !== '') {
                accountTypeSub();
            }
		
        })
		//alert ($(this).val());
    })

	

</script>



<?php
$event = 'add';
$coa = new AdminCoa();
if (isset($_POST['coaid'])) {
    $event = 'update';
    $coa = DAOFactory::getAdminCoaDAO()->load($_POST['coaid']);
    Session::setSession('coaid', $_POST['coaid']);
}
?>

<script>
    evnt = "<?php echo $event; ?>"; 
</script>
<div class="chartadmin">
    <form method="post" action="<?php echo URL .'coa/' . $event?>" class="chartadminform" id="coafrm">
        <input type="button" class="chart-close" value="X">
        <div>
            <div class="newcoa">Create New Chart of Accounts</div>
        </div>
        <hr class="hrNNCOA">
        <div class="chart-box">
            <p class="aText"><b>Accounts</b></p>

            <table class="COATable">
                <tr>
                    <td class="">Account Code:</td>
                    <td><input type="text" class="aNo" required name="accountNum" value="<?php echo $coa->accountNum ?>"></td>
                </tr>
                <tr>
                    <td class="">Account Type:</td>
                    <td><select class="aType" name="accountType" required <?php echo ($event =='update')? 'disabled':'';?>>
                            <option></option>
                            <option value="assets" <?php echo ($coa->accountType=='Assets')? 'selected':''?>>Assets</option>
                            <option value="liabilities" <?php echo ($coa->accountType=='Liabilities')? 'selected':''?>>Liabilities</option>
                            <option value="income" <?php echo ($coa->accountType=='Income')? 'selected':''?>>Income</option>
                            <option value="expense" <?php echo ($coa->accountType=='Expense')? 'selected':''?>>Expense</option>
                            <option value="equity" <?php echo ($coa->accountType=='Equity')? 'selected':''?>>Equity</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="">Account Categories:</td>
                    <td><select class="aType"><option></option></select></td>
                </tr>
                <tr>
                    <td class="">Account Name:</td>
                    <td><input type="text" class="aNameInput" name="accountName" value="<?php echo $coa->accountName ?>" required></td>
                </tr>
                <tr>
                    <td class=""><div class="atText2">Description:</div></td>
                    <td><textarea class="descInput" name="description"><?php echo $coa->description ?></textarea></td>
                </tr>
            </table>

            <table class="saotable">
                <tr>
                    <td><input type="checkbox" <?php echo ($event =='update')? 'disabled':''; echo ($coa->subAccount !='')? ' checked':'' ?>></td>
                    <td>Sub Account of:</td>
                    <td><select name="subAccount" class="sao" <?php echo ($event =='update')? 'disabled':'';?>>
                                    <option></option>
                                    <?php
                                    if ($event == "update") {
                                        $items = AdminCoaMySqlExtDAO::getCoa($coa->accountType); //DAOFactory::getTblCoaDAO()->queryByAccountType($coa->accountType);
                                        foreach ($items as $item) {
                                            if ($item->id != $coa->id) {
                                                ?>
                                    <option value="<?php echo $item->id ?>" <?php echo ($item->id == $coa->subAccount) ? 'selected' : '' ?> ><?php echo $item->accountName ?></option>
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

        <div class="chart-box2">
            <p class="bText"><b>Balances</b></p>
            <div class="ibs">Income/Balance Sheet: <select class="ibsSelect" name="incomeBalanceSheet" <?php echo ($event =='update')? 'disabled':'';?>>
                    <option value="income" <?php ($coa->incomeBalanceSheet == 'Income Sheet')?'selected':'' ?>>Income Sheet</option>
                    <option value="balance" <?php ($coa->incomeBalanceSheet == 'Balance Sheet')?'selected':'' ?>>Balance Sheet</option>
                </select></div>
            <div><input type="checkbox" checked class="aBox" name="activeAccount" ></div>
            <div class="aaInput">Active Account</div>
            <div></div>
        </div>

        <div class="hrclassChartNew"></div>
        <div class="div-saveAdd">
            <input type="submit" class="chartSave" value="Save" />
            <input type="submit" class="chartAddSave" value="Save and Add New" onclick="returnurl = 'savenew'"/>
            <input type="hidden" name="task" value="<?php echo $task ?>" />
        </div>



    </form>
</div>

<script>

	function accountTypeSub() {
       
        $.ajax({
            url: URL + "coa/getCoaData",
            type: "POST",
			
            data: {
                accountTypeSub: $(".aType").val(),
				
            },
			
            dataType: "JSON",
			
            success: function(jsonStr) {
			
                $(".sao").find('option').remove();
                $(".sao").append($("<option></option>").val('').html(''));
                $.each(jsonStr, function(i, jsonStr) {
                    $(".sao").append($("<option></option>").val(jsonStr.id).html(jsonStr.c));
                });
				
			
            }
			
        });
		
		
		
    }


    $(function() {

        $('#coafrm').submit(function() {
            if (returnurl == "savenew") { alert(evnt);
//                $.ajax({
//                    url: "<?= URL ?>coa/add",
//                    type: "POST",
//                    data: 
//                        $(this).serialize()
//                    ,
//                    dataType: "JSON",
//                    success: function(jsonStr) {
//                        $(this).trigger('reset');
//                        returnurl = '';
//                        return false;
//                    }, error: function(xhr, textStatus, errorThrown) {
////                        alert('resf');
//                        alert(xhr.responseText);
//                    }
//                });

                $.post(URL + 'coa/' + evnt, $(this).serialize())
                        .done(function(returnData) {
                            $('#coafrm').trigger('reset');
                            $('input[type="text"]').val('');
                            returnurl = '';
                            $('#coafrm').attr(URL + 'coa/add');
                        })
                        .fail(function() {
                            alert('Connection Error!');
                        });
                return false;
            }
        })

    })
</script>