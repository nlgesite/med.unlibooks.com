<style>
    .cnitableClient{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 49px;
    }
    .cnitableClient, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableClient, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableClient a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
    }
    .cnitableClient a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
    .cnitableClient tr:HOVER{
        background-color: #E8E8E8;
    }	
    .b a{
        color: black;
    }
    .tbalance{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        width:100%;
        font-size:12px;
        border:none;
        background:none;
        height:100%;
        background:none;
        text-align:right;
        padding-right:15px;
    }
    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
        background-color: #55C768;
        /*  padding: 2px 2px 2px 2px; */
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
    }
    .tfootTable a{
        color:blue;
        text-decoration:none;
        cursor:pointer;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
    }
    .tfootTable a:hover{
        font-weight:normal;
        text-decoration:underline;
    }
    .tfootTable select{
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
    .createNc{
        margin-left: 779px;
        margin-top: -76px;
        width: 200px;
        height: 45px;
        border: none;
        background-image:url('<?= URL ?>public/images/patient2.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;
    }
</style>

<?php
require_once ('public/paginator.php');
$pages = new Paginator;
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
    <form method="post" action="<?php echo URL ?>invoice/customers" id="form">
        <div class="customerHolder">
            <div id="newInvoice">
                <p class="headText">ALL PATIENT</p>
                <a href="<?= URL ?>invoice/customers">	
                    <input type="button" class="createNc">
                </a>

            </div>	
            <?php
            echo (Session::getSession('error') != '') ? Session::getSession('error') : '';
            Session::setSession('error', '');
            ?>

            <div class="center2">
                <div class="search3">
                    <div style="float:left; margin-left: 24px;">
                        <input type="button" value="EDIT" class="clientEdit buttoninvoices" name="edit" onclick="editrec('')">
                        <input type="button" value="DELETE" class="dlt buttoninvoices" name="delete" onclick="deleterec();">
                    </div>
                    <div style="float:right;margin-right: 67px;">
                        <div class="invoiceselect invoiceselect2" id="invoiceselect">
                            <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : '' ?>
                            <select class="cNumber inumber" name="searchby" style="margin-right:0px;">
                                <option value="1" style="color:#000;" <?php echo $searchby == 1 ? 'selected' : '' ?>>PATIENT NUMBER</option>
                                <option value="2" style="color:#000;" <?php echo $searchby == 2 ? 'selected' : '' ?>>PATIENT NAME</option>
                            </select>
                            <input type="text" placeholder="SEARCH" class="cSearch searchindex" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
                            <input type="submit" name="search2" value=" " class="search2Col">
                        </div>
                    </div>
                </div>
            </div>


            <table class="cnitableClient">
                <tr class="trcustomer_table">
                    <th width="3%"><input type="checkbox" class="toggle"></th>
                    <th width="20%">Patient ID No.</th>
                    <th width="20%">Date</th>
                    <th width="36%">Patient Name</th>
                </tr>


                <?php
                $customers = TblClientMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
                $pages->items_total = count(TblClientMySqlExtDAO::getData('', -1));
                $pages->mid_range = 9;
                $pages->paginate();
                if (count($customers) > 0) {
                    foreach ($customers as $item) {
                        ?>
                        <tr class="customer_row">
                            <td class=""><input type="checkbox" name="chk[]" class="chk" value="<?php echo $item->id ?>"></td>
                            <td class=""><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->clientAccount ?></a></td>
                            <td class=""><?php echo date('m / d / Y', strtotime($item->dateCreated)) ?></td>
                            <td class="b"><a onclick="editrec(<?php echo $item->id ?>)"><?php echo ucwords($item->clientName) ?></a></td>
                        </tr>

                        <?php
                    }
                }
                ?>
                <table class="tfootTable">
                    <tfoot>
                        <tr class="under">
                            <td colspan="5" style="text-align: center;color:#fff;font-family:verdana; font-size:12px;" class="under">
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
            </table>

            <input type="hidden" name="task" value="">
            <input type="hidden" name="returnurl" class="returnurl" value="" />
        </div>
    </form>
</div>
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

            $.post(URL + 'invoice/checktrans', {clientid: checked})
                    .done(function(returnData) {
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('delcustomer');
                                $('#form').submit();
                            }
                        }
                    })
        } else {
            alert('Please select record to delete');
        }
    }
    function editrec(clientid) {
        sessionStorage.setItem("username", "John");
        if ($('.chk').is(':checked') || clientid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            if (clientid != '') {
                checked.push(parseInt(clientid));
            }
            $.post(URL + 'invoice/newCustomer', {clientid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.close1Client').click(function() {
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
        $('.aPayment').click(function() {
            $.post(URL + 'views/invoice/enterPayment.php')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeENTERPayment').click(function() {
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
        });

    })
</script>

<script>
    $(function() {
        $('.createNc').click(function() {
            $.post(URL + 'invoice/newcustomer')
                    .done(function(returnData) {
                        $('.popBack').empty();
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.close1Client').click(function() {
                            setTimeout(function() {
                                if (confirm('Are you sure, you want to leave this page without saving?')) {
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                    $('body').css('overflow', 'auto');
                                    location = URL + 'invoice/customers';
                                }
                            }, 1000);

                        });

                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });

            return false;
        });
    })
</script>


