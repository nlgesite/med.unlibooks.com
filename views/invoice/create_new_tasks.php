<style>
    .popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
    .img2 {
        position: absolute;
        margin-left: 25px;
        height: 17px;
        z-index: -1;
        top: 186px;
    }	

    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 50px;
    }
    #newCNTs{
        margin-left: 20px;
    }
    .divCNTsBelow{
        /* width: 735px; */
        height: 50px;
        /*background-color: #E1F1CE;*/
        margin-top: 36px;
        float:right;
        margin-right:15px;
    }
    .cnt-formCNTs{
        width: 439px;
        margin: auto;
        background-color: white;
        padding-bottom:15px;
    }
    .cnt-headCNTs{
        margin-top: 0px;
        font-size: 30px;
        font-family: agency fb2;
        font-size:28.4px;
        color:#04805c;
    }

    .hrCNTs{
        width: 583px;
        border: 2px solid gray;
        margin-left: -21px;
        margin-top: -20px;
        border-radius: 3px;
        height: 4px;
        background-color: gray;

    }
    .closeCNTs{
        border: none;
        border-radius: 2px;
        font-family: Cambria;
        font-weight: bold;
        font-size: 13px;
        height: 18px;
        margin-left: 385px;
        width: 22px;
        margin-top: 10px;

    }
    .NewCheck{
        margin-top: -19px;
        margin-left: 42;
        float: left;
    }
    .taskACNTs{
        color: #000000;
        font-family: verdana;
        font-size: 12px;
        padding-left: 20px;
    }
    .taskCheckNew{
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
        margin-left: 113px;
    }
    .tAccountCNTs{
        margin-left: 25px;
        margin-top: 7px;
        width: 190px;
        height: 27px;
        background-color: white;
        font-family: verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        padding:5px;
    }
    .checkLabel{
        font-size: 12px;
        font-family: verdana;
        color: #000000;
    }
    .createNewTasksTble{
        float: right;
        margin-top: -50px;
        margin-right:20px; 
    }
    .rph{
        font-family: verdana;
        font-size: 12px;
        margin-left: 25px;
        height: 27px;
        width: 190px;
        margin-top: 5px;
        padding:5px;
        border: solid 1px #C8C8C8;
    }
    .descTCNTs{
        color: #000000;
        font-family: verdana;
        font-size: 12px;
        padding-left: 16px;
        margin-top: -41px;
    }
    .itemICNTs{
        width: 190px;
        height:90px;
        background-color: white;
        font-family: verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-top: 5px;
        margin-left: 25px;
        max-width:190px;
        max-height:90px;
        padding:5px;
    }
    .rphCNTs{
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .rphICNTs{
        width: 130px;
        height: 30px;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
        border: solid 1px #C8C8C8;
    }
    .vatCNTs{
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .vatSCNTs{
        width: 150px;
        height: 30px;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-left: 20px;
        margin-top: 5px;
    }
    .saveBCNTs{
        margin-top: 10px;
        margin-left: 0px;
        width: 105px;
        height:31px;
        border-radius: 5px;
        font-family: verdana;
        font-style: bold;
        font-size: 13px;
        color: white;
        border: none;
    }
    .saanBCNTs{
        margin-top: 10px;
        margin-left: 0px;
        width: 150px;
        height:31px;
        border-radius: 5px;
        font-family: verdana;
        font-style: bold;
        font-size: 12px;
        color: white;
        border: none;
        background: #B6B1B1;
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: linear-gradient(bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
        cursor: pointer;
    }
    .tasktablenew td{
        border:none;
    }
</style>

<script>
    $(function() {
        returnurl = '';

        $('#saveAddNew').click(function() {
            returnurl = 'savenew';
        });
        $('#formtask').submit(function() {

            confirmPost = confirm('Do you want to add new Service?');
            if (!confirmPost) {
                return false;
            } else {
                if (typeof (newrecord) == "undefined") {
                    newrecord = '';
                }
                
                $.ajax({
                    url: URL + "invoice/services",
                    type: "POST",
                    data: {
                        taskCode: $('input[name="taskCode"]').val(),
                        text: $('input[name="taskCode"]').val(),
                        description: $('#formtask #description').val(),
                        ratePerHour: $('input[name="ratePerHour"]').val(),
                        vatInclusive: 'yes',
                        task: $('#formtask input[name="task"]').val(),
                        glPosting: $('#formtask #glPosting').val(),
                        returnurl: 'invoice',
                        checkitem: 'task',
                        active: $('#formtask #taskCheckNew').is(':checked') ? 'yes' : 'no'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        if (jsonStr.value == 'error') {
                            alert('Service ID no. is already existing.');
                            return false;
                        } else {
                            $("#formtask #description").text();
                            if (newrecord == 'new') {
                                $('.taskid').each(function(i) {
                                    $('option:last', $(this)).before($('<option/>', {
                                        value: jsonStr.id,
                                        text: jsonStr.text
                                    }));
                                });

                                $('.activeObj').parents('tr').find('.description').val(jsonStr.description);
                                $('.activeObj').parents('tr').find('.rate').val($.number(jsonStr.value, 2));
                                $('.activeObj').parents('tr').find('.tasknet').val($.number(jsonStr.value.replace(/,/g, '') * $('.activeObj').parents('tr').find('.hour').val().replace(/,/g, ''), 2));
                                $('.activeObj option').removeAttr('selected')
                                        .filter('[value="' + jsonStr.id + '"]')
                                        .attr('selected', true);

                                $('.activeObj').removeClass('activeObj');
                                subTotal(); 
                                $('.popBack').html('');
                                $('.popBack').addClass("hidden");
//                                $('.taskfrm').addClass('hidden');
                                $('body').css('overflow', 'auto');
                                return false;
                            } else if (returnurl == 'savenew') {
                                $('.createNewTask').click();
                                return false;
                            }
                        }
                        window.location = URL + "invoice/services";
                    }, error: function(xhr, textStatus, errorThrown) {
                        alert(xhr.responseText);
                    }
                });

                return false;
            }
        });
    })
</script>
<?php
$tbltask = new TblTask();
$task = 'addtask';
Session::setSession('taskid', '');
$taskid ='';
if (isset($_POST['taskid'])) {
    $taskid = $_POST['taskid'];

    $tbltask = DAOFactory::getTblTaskDAO()->load($taskid);
    Session::setSession('taskid', $taskid);
    $task = 'updatetask';
}
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link href="<?= URL ?>views/time/css/ajax.css" rel="stylesheet" type="text/css">
<div class="invoiceHolderCNTs">
    <form class="cnt-formCNTs boxshadow" id="formtask">
        <div id="newCNTs" class="new1Client22">
            <input type="button" class="closeCNTs popx" value="">
            <p class="cnt-headCNTs ni1Clienthmo"><?php echo ($task == 'addtask') ? 'ADD NEW' : 'UPDATE' ?> SERVICE:</p>

        </div>
        <div>
            <table style="margin-left: 27px;" class="tasktablenew">	
                <?php
//                if ($task == 'addtask') {
                ?>
<!--                    <tr>
                        <td class="taskACNTs">Service ID No.</td>
                        <td><input type="text" class="tAccountCNTs" name="taskCode" value="<?php echo $tbltask->taskCode ?>" required></td>
                    </tr>
                    <tr>
                        <td><div class="descTCNTs">Description:</div></td>
                        <td><textarea class="itemICNTs" name="description"  id="description" required><?php echo $tbltask->description ?></textarea></td>
                    </tr>	-->
                <?php
//                } else if ($task == 'updatetask') {
                ?>
                <tr>
                    <td class="taskACNTs">Service ID No.</td>
                    <td><input type="text" class="tAccountCNTs" name="taskCode" value="<?php echo ($task == 'addtask') ? TblTaskMySqlExtDAO::getMaxNumId() : $tbltask->taskCode ?>" ></td>
                </tr>
                <tr>
                    <td><div class="descTCNTs">Description:</div></td>
                    <td><textarea class="itemICNTs" name="description"  id="description" required><?php echo $tbltask->description ?></textarea></td>
                </tr>
                <?php
//                }
                ?>
                <tr>	
                    <td class="taskACNTs">Consultation Fee:</td>
                    <td><input type="text" class="rph isNumeric" name="ratePerHour" value="<?php echo $tbltask->ratePerHour ?>" required style="border: solid 1px #C8C8C8;" maxlength="9"></td>
                </tr>
                <tr>	
                    <td class="taskACNTs">GL Posting:</td>
                    <td><select class="rph" style="border: solid 1px #C8C8C8;" name="glPosting2" id="glPosting2" disabled><option></option>
                            <?php
                            $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('medorgid'));
                            foreach ($coas as $coa) {
                                if ($coa->accountNum == '4000-001' && $task == 'addtask') {
                                    $glid = $coa->id;
                                }
                                ?>
                                <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $tbltask->glPosting ) ? 'selected' : '' ?> <?php echo ($coa->accountNum == '4000-001' && $task == 'addtask') ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" value="<?php echo ($tbltask->glPosting != '') ? $tbltask->glPosting : $glid ?>" name="glPosting" id="glPosting" />
                    </td>
                </tr>
                <tr>	
                    <td><div style="margin-top:7px;"><input type="checkbox" checked class="taskCheckNew" id="taskCheckNew" <?php echo $tbltask->active == 'yes' ? 'checked' : '' ?>></div></td>
                </tr>
            </table>
            <div class="NewCheck"> <label class="checkLabel">Active Account</label></div>

            <table class="createNewTasksTble">
            </table>

        </div>
        <div class="hrclassTaskNew"></div>
        <div class="divCNTsBelow">	
            <input type="submit" value="Save" class="saveBCNTs addsavebutton" id="servicenew">
            <?php if (!isset($_POST['view'])) { ?>
                <input type="submit" value="Save and Add New" class="saanBCNTs addsavebutton" id="saveAddNew">
            <?php } ?>
        </div>
        <input type="hidden" name="task" value="<?php echo $task ?>"/>
        <div style="clear:both"></div>
    </form>
</div>

