<style>
    .cnitableAllItems{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .cnitableAllItems, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color: black;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableAllItems a{
        color:blue;
        font-weight: normal;
        cursor: pointer;
        font-size: 12px;
        text-decoration: none;
    }
    .cnitableAllItems a:hover{
        color:blue;
        font-weight: normal;
        cursor: pointer;
        font-size: 12px;
        text-decoration: underline;
    }
    .cnitableAllItems tr:HOVER{
        background-color: #E8E8E8;
    }
    .AllItemsBack{
        background-color: white;
        margin-top: -1px;
        padding-top: 1px;
        padding-bottom: 500px;
		/* box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75); */
    }	
    .ucostItem{
        width: 100%;
        border:none;
        background:none;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
        background:none;
        padding-right:15px;
        height:100%;
        text-align:right;
    }
    .tfootItem{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color: white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .tfootItem:hover{
        background-color:none;
    }
    .tblTfoot{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tblTfoot a{
        color:blue;
        text-decoration:none;
        cursor:pointer;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
    }
    .tblTfoot a:hover{
        font-weight:normal;
        text-decoration:underline;
    }
    .tblTfoot select{
        width:50px;
        margin-left:10px;
        margin-right:10px;
    }
    .search2Col{
        width: 29px;
        height: 33px;
        border-radius: 2px 2px 2px 2px;
        margin-left: -11px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        border: none;
        color: whitesmoke;
        background-image: url('<?= URL ?>public/images/za.png');
        border: solid 1px #c8c8c8;
        background-color: rgb(230, 250, 222);
        background-repeat: no-repeat;
        background-position: 3px;
    }
    .createNewI{
        margin-left: 760px;
        margin-top: -75px;
        width: 200px;
        height: 45px;
        border: none;
        background-image:url('<?= URL ?>public/images/create new item2.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;
    }
	.iteminvoiceformnew{
		box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
		margin-bottom: -18px;
		margin-top:-32px;
	}
</style>
<?php
$pages = new Paginator;
?>
<form method='post' action='<?php echo URL ?>invoice/items' id='form' style="" class="iteminvoiceformnew">
    <div class="ItemHolder">
        <div id="newItem">
            <p class="textHead">All Items</p>
            <a href="#">	
                <input type="button" class="createNewI">
            </a>
            <div class="hrClass2"></div>
        </div>	
        <div class="centerItem">
            <div id="searchItem">
                <input type="button" name="edit" value="Edit" class="editItem" onclick="editrec('');">
                <input type="button" name="delete" value="Delete" class="deleteItem" onclick="deleterec()">
                <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : '' ?>
                <select class="inumberItem" name="searchby">
                    <option value="1" <?php echo $searchby == 1 ? 'selected' : '' ?>>Item Number</option>
                    <option value="2" <?php echo $searchby == 2 ? 'selected' : '' ?>>Item Name</option>
                </select>
                <input type="search" name="search" placeholder="Search" class="searchindexItem" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>"> 
                <div  style="margin-top: -33px;margin-left: 965px;"><input type="submit" name="search2" value="" class="search2Col"></div>
            </div>
        </div>
    </div>

    <div class="AllItemsBack">
        <table class="cnitableAllItems">
            <tr class="headinvoiceItem">
                <th width="1%"><input type="checkbox" class='toggle'></th>
                <th width="24%">Item Number</th>
                <th width="24%">Date Created</th>
                <th width="26%">Item Name</th>
                <th width="24%" style="text-align:right; padding-right:20px;">Unit Cost</th>

            </tr>

            <?php
            $items = TblItemMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
            $pages->items_total = count(TblItemMySqlExtDAO::getData('', -1));
            $pages->mid_range = 9;
            $pages->paginate();
            if (count($items) > 0) {
                foreach ($items as $item) {
                    ?>
                    <tr class="tableItem">
                        <td class=""><input type="checkbox" name='chk[]' class='chk' value='<?php echo $item->id ?>'></td>
                        <td class=""><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->itemCode ?></a></td>
                        <td class=""><?php echo $item->dateCreated ?></td>
                        <td class=""><?php echo $item->description ?></td>
                        <td class=""><input type="text" class="numeric ucostItem" readonly="readonly" value='<?php echo $item->unitCost ?>'></td>
                    </tr>
                    <?php
                }
            }
            ?>

        </table>
        <table class="tblTfoot">
            <tfoot>
                <tr class="tfootItem">
                    <td colspan="5" style="text-align: center" >
                        <?php
                        echo $pages->display_pages();
                        echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
                        . $pages->display_items_per_page() . "</span>";

                        echo "Page $pages->current_page of $pages->num_pages";
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <input type='hidden' name='task' value=''/>
</form>
<div class="popBack hidden">

</div>
<script>
    $(function() {
        $('.toggle').click(function() {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').prop('checked', true);
            } else {
                $('input[type="checkbox"]').prop('checked', false);
            }
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

            $.post(URL + 'invoice/checkitem', {itemids: checked})
                    .done(function(returnData) {
//                                alert(returnData); return false;
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('delitem');
                                $('#form').submit();
                            }
                        }

                    });

        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(itemid) {
        sessionStorage.setItem("username", "John");
        if ($('.chk').is(':checked')) {
            var checked = [];
            count = 0;
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                count++;
            });
            if (count > 1) {
                alert('Please select only one item');
                return false;
            }

            if (itemid != '') {
                checked = parseInt(itemid);
            }

            $.post(URL + 'invoice/item', {itemid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewItem').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
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

<script>
    $(function() {
        $('.createNewI').click(function() {
            $.post(URL + 'invoice/item')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewItem').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                location = URL + 'invoice/items';
                            }
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });

    })
</script>