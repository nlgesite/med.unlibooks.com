<style>
    .journalBody{
        width:100%;

    }
    .journalform{
        width: 900px;
        margin:auto;
        padding-top:25px;
        border:2px solid rgb(191,191,191);
        background-color:white;
        padding-bottom:56px;
        margin-top:40px;
    }
    .journalTitle{
        width: 869px;
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-family: agency fb2;
        margin-left: 20px;
        font-size: 28.4px;
        color: #04805c;

    }
    .clientJournal{
        font-size: 12px;
        font-family: verdana;
        margin-left: 53px;
        margin-top: 15px;	
        font-weight: bold;
    }
    .clientJournal input[type="text"]{
        width: 350px;
        margin-left: 10px;
        padding: 5px;
        height: 29px;
        font-size: 12px;
        font-family: verdana;
    }
    .clientJournal2{
        font-size: 12px;
        font-family: verdana;
        font-weight: bold;
        margin-left: 50px;
        margin-top: 5px;
    }
    .clientJournal2 td{
        font-weight:normal;
    }
    .clientJournal2 input[type="text"],input[type="date"]{
        width: 200px;
        margin-left: 10px;
        padding: 5px;
        height: 29px;
        font-size: 12px;
        font-family: verdana;
    }
    .tbJournalform{
        border-collapse:collapse;
        width:99%;
        margin:auto;
        margin-top:20px;
        margin-left:7px;
    }

    .tbJournalform th{
        color:white;
        font-size:13px;
        font-family:verdana;
        font-weight:bold;
        text-align:left;
        padding: 5px;
    }
    .tbJournalform td{
        padding: 0px 0px 0px 0px;
    }

    .tbJournalform select{
        width: 100%;
        padding: 5px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        border: solid 1px #c8c8c8;
        /* box-shadow: 0px 0px 1px 1px rgb(218, 213, 213); */
    }
    .tbJournalform input[type="text"]{
        width: 100%;
        padding: 5px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        border:none;
        border: 1px solid rgb(191,191,191); 
        /* box-shadow: 0px 0px 1px 1px rgb(218, 213, 213); */
    }
    .tbJournalform tr td:nth-child (5){
        text-align: right;
    }
    .totalJournal{
        font-size:12px;
        font-family:verdana;
        margin-left:588px;
        font-weight:bold;
        margin-top:20px;
    }
    .textTotalJournal{
        width:115px;
        padding:5px;
        height:25px;
        text-align:right;
        border:none;
        font-weight:bold;
        font-family: verdana;
        font-size: 12px;
    }
    .linejournalLine{
        width: 98%;
        border-top: 1px solid rgb(214, 211, 211);
        margin: auto;
        margin-top: 20px;
    }
    .linejournalLine2{
        width: 96%;
        border-top: 1px solid rgb(214, 211, 211);
        margin: auto;
        margin-top: 2px;
    }
    .JournalPost{
        border: none;
        padding: 5px 10px 5px 10px;
        width: 63px;
        border-radius: 5px;
        font-family: verdana;
        font-size: 12px;
        background: #B6B1B1;
        color:white;
        border: none;
        background:none;
    }
    .buttonJournal{
        margin-right: 10px;
        margin-top: 20px;
        float:right;
    }
    .adel{
        margin-left: 1px;
        margin-top: 2px;
    }

    .a{
        background-image: url('<?= URL ?>public/images/add1.png');
        background-repeat: no-repeat;
        width: 18px;
        height: 22px;
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border: none;
        background:white;
    }
    .a:hover, .a-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/addhover.png');
        background-size: 72% 77%;
        width: 18px;
        height: 22px;
        background-repeat: no-repeat;
        background-position: 4px;

    }

    .del{
        background-repeat: no-repeat;
        width: 15px;
        height: 22px;
        margin-left:-2px;	
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border:  none;
        background:white;
    }
    .del:hover, .del-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/del1a.png');
    }



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

    .clientJournal td{
        border:none;
    }
    .clientJournal2 td{
        border:none;
    }
    .tdJournal{
        border: solid 1px #c8c8c8;
    }
    .tbJournalform td{
        /* border:none; */
    }
    .mystyle{
        border-bottom: solid 1px #c8c8c8;
    }
    .tbJournalform tr th:nth-child(5){
        text-align: right;
    }
    .img2 {
        position: absolute;
        margin-left: 25px;
        height: 17px;
        z-index: -1;
        top: 209px;
    }
    .addLineJournal{
        padding: 5px 10px 5px 10px;
        cursor: pointer;
        /*width: 67px;*/
        border-radius: 5px;
        font-family: verdana;
        font-size: 12px;
        background: #B6B1B1;
        color: white;
        border: none;
        background-image: url('../public/images/addline.png'); 
        background-size:100% 100%;
        width:72px;
        height:25px;
    }
</style>
<script>
    eventLoader();
    var selectitems;
    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

    function eventLoader()
    {
        $('.tbJournalform').find('tr').mouseover(function() {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.deltask').addClass('del-hover');
        });

        $('.tbJournalform').find('tr').mouseout(function() {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.deltask').removeClass('del-hover');
        });

    }

    $.post(URL + 'accounting/journalType', {type: ''})
            .done(function(returnData) {
                selectitems = returnData;
            }).fail(function() {
        alert('Connection error.');
    });

    $(document).on("click", "#addtask", function() {
//        $.post(URL + 'accounting/journalType', {type: $(this).val()})
//                .done(function(returnData) {
        $("#tbJournalform").append('<tr id="tbJournalform2">'
                + '<td style="border-bottom: none;">'
                + '<input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)" /></td>'
                + '<td class="typecontent tdJournal">'
                + '<select name="accountCode[]" class="accountcode" required>'
                + selectitems
                + '</select>'
                + '</td>'
                + '<td class="tdJournal"><input type="text" class="textTableText2 particular" name="particulars[]" required></td>'
                + '<td class="tdJournal"><input type="text" class="textTableText debit isNumeric" style="text-align:right" value="0.00" name="debit[]" required></td>'
                + '<td class="tdJournal"><input type="text" class="textTableText credit isNumeric" style="text-align:right" value="0.00" name="credit[]" required></td>'
                + '<td style="border-bottom: none;">'
                + '<div class="adel">'
                + '<input type="button" name="add"  class="a addtask" id="addtask"/>'
                + '</div>'
                + '</td>'
                + '</tr>'

                );
        eventLoader();
//                }).fail(function() {
//            alert('Connection error.');
//        });
    });
</script>
<?php
$task = 'addjournal';
$journal = new TblJournalEntry();
$invoicestat = 'x';
$invoicestat2 = '';


if (isset($_POST['journalid'])) {
    $task = 'view';
    $journalid = $_POST['journalid'];
    $journal = DAOFactory::getTblJournalEntryDAO()->load($journalid);
    $journalines = DAOFactory::getTblJournalLinesDAO()->queryByJournalEntryId($journalid);
}
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="journalBody">
    <form method="post" action="<?php echo URL ?>accounting/setJournal" class="journalform boxshadow">
        <div class="journalTitle new1Client">JOURNAL ENTRY</div>
        <table class="clientJournal2">
            <tr>
                <td>Journal Number:</td>
                <td><input type="text" name="journalNumber" value="<?php echo (isset($journal->journalNumber)) ? $journal->journalNumber : 'JV-' . sprintf('%1$07d', TblJournalEntryMySqlExtDAO::getMaxNumId()) ?>" required readonly></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="text" name="dateIssued" id="di" value="<?php echo (isset($journal->transDate)) ? date('m/d/Y', strtotime($journal->transDate)) : date('m/d/Y') ?>" required></td>
            </tr>
        </table>
        <table class="tbJournalform" id="tbJournalform">
            <tr>
                <th style="background-color:white; width:1%;"></th>
                <th width="30%">Account Name</th>
                <th width="25%">Particulars</th>
                <th width="15%">Debit</th>
                <th style="text-align:right; width:15%;">Credit</th>
                <th style="background-color:white; width:1%;"></th>
            </tr>

            <?php
            if ($task == "view" && count($journalines) > 0) {
                foreach ($journalines as $journaline) {
                    ?>
                    <tr id="tbJournalform2">
                        <td style="border-bottom: none;"><input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)" disabled /></td>
                        <td class="tdJournal"><?php echo DAOFactory::getTblCoaDAO()->load($journaline->accountCode)->accontName; ?></td>
                        <td class="tdJournal"><input type="text" readonly class="textTableText2 particular" name="particulars[]" value="<?php echo $journaline->particulars ?>" required></td>
                        <td class="tdJournal"><input type="text" readonly class="textTableText isNumeric debit" style="text-align:right" value="<?php echo number_format((float) $journaline->debit, 2) ?>" name="debit[]" required></td>
                        <td class="tdJournal"><input type="text" readonly class="textTableText isNumeric credit" style="text-align:right" value="<?php echo number_format((float) $journaline->credit, 2) ?>" name="credit[]" required></td>
                        <td style="border-bottom: none;">
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask" id="addtask" disabled />                 
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                $count = 1;
                while ($count <= 2) {
                    ?>
                    <tr id="tbJournalform2">
                        <td style="border-bottom: none;"><input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)" /></td>
                        <td class="typecontent tdJournal"> 
                            <select name="accountCode[]" class="accountcode">
                                <option></option>
                                <?php
                                $coas = TblCoaMySqlExtDAO::hideCoaData('');
                                foreach ($coas as $coa) {
                                    if (!in_array($item->accountNum, array('1002-001', '6001-021'))) {
                                    ?>
                                    <option value="<?php echo $coa->accountNum ?>"><?php echo $coa->accountNum . '-' . str_replace('?', '-', mb_convert_encoding($coa->accontName, 'UTF-8', 'UTF-8')); //iconv('UTF-8', 'ASCII//TRANSLIT', $coa->accontName);           ?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select></td>
                        <td class="tdJournal"><input type="text" class="textTableText2 particular" name="particulars[]" required></td>
                        <td class="tdJournal"><input type="text" class="textTableText isNumeric debit" style="text-align:right" value="0.00" name="debit[]" required></td>
                        <td class="tdJournal"><input type="text" class="textTableText isNumeric credit" style="text-align:right" value="0.00" name="credit[]" required></td>
                        <td style="border-bottom: none;">
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask" id="addtask"/>                 
                            </div>
                        </td>
                    </tr>
                    <?php
                    $count++;
                }
            }
            ?>
        </table>
        <div style="margin-left:22px;margin-top:12px;">
            <?php if ($task == 'addjournal') { ?>
                <input type="button" value="" class="addLineJournal" id="addtask">
                <input type="hidden" name ="task" value="<?php echo $task ?>" />
            <?php } ?>
        </div>
        <div class="totalJournal">Total: &nbsp &nbsp 
            <input type="text" readonly class="textTotalJournal numeric" value="<?php echo number_format((float) $journal->amount, 2) ?>" name="totaldebit"> 
            <input type="text" readonly class="textTotalJournal numeric" value="<?php echo number_format((float) $journal->amount, 2) ?>" name="totalcredit"></div>
        <div class="linejournalLine"></div>
        <div class="buttonJournal">
            <?php if ($task == 'addjournal') { ?>
                <input type="submit" class="JournalPost addsavebutton" value="Post" />
                <input type="hidden" name ="task" value="<?php echo $task ?>" />
            <?php } ?>
            <input type="button" class="JournalPost closeJournal addsavebutton" value="Cancel">
        </div>
    </form>
<!--       <select name="loc_id_1" id="loc_id_1">
<option value="NEW">-- ADD NEW --</option>
<option value="1">Smith Company</option>
<option value="6">Jones Company</option>
<option value="23">Wright Company</option>
</select>
    
    <script>
    $('#loc_id_1').find('option[value!="NEW"]').hide();</script>-->
</div>

<script>
    $(function() {
        var selectedItems;
//        $(document).on("change", ".type", function() {
//            $object = $(this);
//            $.post(URL + 'accounting/journalType', {type: $(this).val()})
//                    .done(function(returnData) {
//                        $($object).parents('tr').find('.typecontent').html(returnData);
//                    }).fail(function() {
//                alert('Connection error.');
//            });
//        });

        $(document).on("change", ".accountcode", function() {
            $object = $(this);
//            $objtype = $($object).parents('tr').find('.accountcode').val();
            currtype = $(this).parents('tr').find('.accountcode').val();
            $('.accountcode').each(function() {
                if ($(this).closest('td').parent()[0].sectionRowIndex != $($object).closest('td').parent()[0].sectionRowIndex) {
                    if ($(this).val() == currtype) {
                        alert('Account name already selected');
                        $($object).parents('tr').find(".accountcode option:first").attr('selected', 'selected');
                        return false;
                    }
                }
//                alert('sdfd');
                checkContent(currtype, $object);

            });
//            alert($($object).parents('tr').find('.accountcode option:selected').text());
        });


        function checkContent(currtype, $object) {


            count = 0;

            $('.accountcode').each(function() {
                if ($(this).closest('td').parent()[0].sectionRowIndex != 1) {
                    $obj = $(this);
                    if (currtype == '1002-001' || currtype == '6001-021') {
                        $(this).empty().append(selectitems);
                        if (currtype == '1002-001') {
                            $("option[value!='6001-021']", this).remove();
                        } else {
                            $("option[value!='1002-001']", this).remove();
                        }
                       
                        $('#tbJournalform tr:nth-child(2)').find('.accountcode option')
                                            .removeAttr('selected')
                                            .filter('[value="' + currtype + '"]')
                                            .attr('selected', true);
                        if(count > 0){
                            $(this).parents('tr').remove();
                        }
                        $('.addtask, .deltask, .addLineJournal').addClass('hidden');
                            
                    }
                    else 
                    {
                        if ((currtype != '1002-001' || currtype != '6001-021') && ($(this).val()== '1002-001' || $(this).val() == '6001-021')) {
                            $(this).empty().append(selectitems);
                        }
                         $("option[value='1002-001'],option[value='6001-021']", this).remove();
                         $('.addtask, .deltask, .addLineJournal').removeClass('hidden');
                    }
                    count++;
                }
//                else if(currtype == '1002-001' || currtype == '6001-021'){
                    
//                }
            });
        }


        $('.journalform').submit(function() {
            confirmDoyou = confirm('Do you want to post the transaction?');
            if (confirmDoyou) {
                return true;
            }
            return false;
        })


        $('.journalform').submit(function() {
            if ($('input[name="totaldebit"]').val().replace(/,/g, '') != $('input[name="totalcredit"]').val().replace(/,/g, '')) {
                alert('Total debit should be equal total credit');
                return false;
            }

            $('.JournalPost').prop('disabled', true);
//            return false;
        });

        $(document).on("keyup", ".debit", function() {
            if ($(this).val().replace(/,/g, '') > 0) {
                $(this).parents('tr').find('.credit').val("0.00");
            }
            computeTotal();
        });

        $(document).on("keyup", ".credit", function() {
            if ($(this).val().replace(/,/g, '') > 0) {
                $(this).parents('tr').find('.debit').val("0.00");
            }
            computeTotal();
        });

        $("#di").datepicker(
                {beforeShowDay: function(date) {
                        //getMonth()  is 0 based
                        if ($.inArray(date.getFullYear() + '-' + date.getMonth(), taxyears) > -1) {
                            return [false, ''];
                        }
                        return [true, ''];
                    },
                    dateFormat: 'mm/dd/yy'
                }
			
        );
    })

    function computeTotal() {
        totaldebit = totalcredit = 0;
        $('.accountCode').each(function(i) {
            //                        alert(parseFloat($(this).parents('tr').find('.debit').val().replace(/,/g, '')));
            totaldebit += parseFloat($(this).parents('tr').find('.debit').val().replace(/,/g, ''));
            totalcredit += parseFloat($(this).parents('tr').find('.credit').val().replace(/,/g, ''));
        });

        $('input[name="totaldebit"]').val($.number(totaldebit, 2));
        $('input[name="totalcredit"]').val($.number(totalcredit, 2));

        if (totaldebit != totalcredit) {
            $('input[name="totaldebit"]').css('color', 'red');
            $('input[name="totalcredit"]').css('color', 'red');
        } else {
            $('input[name="totaldebit"]').css('color', 'black');
            $('input[name="totalcredit"]').css('color', 'black');
        }
    }


</script>