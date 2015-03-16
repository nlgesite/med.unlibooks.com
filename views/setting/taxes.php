<?php //Session::setSession('orgid', '46');     ?>
<style>
    .createNTaxes{
        margin-left: 750px;
        margin-top: -77px;
        width: 212px;
        height: 42px;
        border: none;
        background-image:url('<?=URL?>public/images/createNewTaxes.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;

    }


    .collect_tableTaxes{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 15px;
    }
    .collect_tableTaxes, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: calibri;
        text-align: left;
        padding: 5px;
    }
    .collect_tableTaxes, td{
        font-size: 12px;
        color:black;
        font-family: calibri;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .collect_tableTaxes a{
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
    .collect_tableTaxes tr:HOVER{
        background-color: #E8E8E8;
    }	
</style>
<div class="invoiceHolderTaxes">
    <div id="newTaxes">
        <p class="headTextTaxes">All Taxes</p>
        <a href="<?=URL?>invoice/newRecurring">
            <input type="button"  class="createNTaxes">
        </a>
        <div class="hrClass4Taxes"></div>

    </div>

    <div class="div2Taxes">
        <div id="button_containerTaxes">
            <input type="button" value="Edit" class="addpaymentTaxes" onclick="editrec()">
            <input type="button" value="Delete" class="edit1Taxes" onclick="deleterec()">
        </div>

        <table class="collect_tableTaxes">

            <tr class="head_collectTaxes">
                <th><input type="checkbox"></th>
                <th>Tax Code</th>
                <th>Tax Name</th>
                <th>Rate</th>
                <th>Active</th>
            </tr>
            <?php
            $tax = DAOFactory::getTblTaxDAO()->queryByOrgId(Session::getSession('medorgid'));

            foreach ($tax as $item) {
                ?>
                <tr class="taxestr">

                    <td class=""><input type="checkbox" name="chk[]" class="chk" value="<?php echo $item->id ?>"></td>
                    <td class=""><?php echo $item->taxCode ?></td>
                    <td class=""><?php echo $item->description ?></td>
                    <td class=""><?php echo $item->rate ?>%</td>
                    <td class=""><?php echo ucfirst($item->active) ?></td>
                </tr>
            <?php } ?>
        </table>	
    </div>	
</div>
<div class="popBack hidden">

</div>
<script>
    $(function() {
        $('.createNTaxes').click(function() {
            $.post(URL + 'setting/tax')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');


                        $('.closeNTaxes').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
							$('body').css('overflow','auto');
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
            $.post(URL + 'setting/checktax', {taxids: checked})
                    .done(function(returnData) {
//                                alert(returnData); return false;
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('deltax');
                                $('#form').submit();
                            }
                        }

                    });

        } else {
            alert('Please select record to delete');
        }
    }

    function editrec() {
        if ($('.chk').is(':checked')) {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            $.post(URL + 'setting/tax', {taxid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');


                        $('.closeNTaxes').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');s
							$('body').css('overflow','auto');
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
