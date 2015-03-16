<style>
    .createNSupplier{
       
    }

    .cnitableSuppliers{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 47px;
    }
    .cnitableSuppliers, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableSuppliers, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableSuppliers a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
    }
    .cnitableSuppliers a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
    .cnitableSuppliers tr:HOVER{
        background-color:#E8E8E8;
    }	

    .suppliersFormNew{
        background-color: white;
        padding-top: 1px;
        padding-bottom: 500px;
    }
    .editvendor{
    }
    .SearchSuppliers{
       
    }
	.vendorformnew{
		box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
		margin-bottom: -18px;
		margin-top:251px;
	}
	
	.tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
        background-color: #55C768;
        /* padding: 2px 2px 2px 2px; */
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
	.vendorSearch{
		color:#000;
	}
</style>
<?php
	require_once ('public/paginator.php');
	$pages = new Paginator;
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
<form method="post" action="<?php echo URL ?>expenses/suppliers?page=<?= $_GET['page']  ?>&ipp=<?= ($_GET['ipp']) ?>" id="form" style="" class="vendorformnew">
    <div class="SuppliersHolder customerHolder">
        <div id="newInvoice">
			<p class="headText">ALL VENDORS</p>
				<a href="<?=URL?>expenses/add">	
					<input type="button" class="createNSupplier createvendorall">
				</a>
						   
		</div>	
        <div class="centerSuppliers centerAllExp">
            <div id="searchSuppliers">
				<div style="float:left; margin-left: 24px;">
					<input type="button" name="sendinvoice" value="EDIT" class="deleteSuppliers addSuppliers editvendor buttoninvoices">
					<input type="button" name="sendinvoice" value="DELETE" class="deleteSuppliers addSuppliers buttoninvoices" onclick="deleterec()">
					<input type="button" name="print" value="Record Expenses" class="createExpenseSuppliers hidden">
					<input type="button" name="print" value="Transactions" class="TransactionSuppliers hidden">
                </div>
				<div style="float:right;margin-right: 67px;">
					<div class="invoiceselect invoiceselect2" id="invoiceselect">
						<select class="inumberSuppliers inumber" name="searchby">
							<option class="vendorSearch" value="1">VENDOR NUMBER</option>
							<option class="vendorSearch" value="2">VENDOR NAME</option>
						</select>
						<input type="search" name="search" placeholder="SEARCH" class="searchindexSuppliers searchindex" > 	
						<input type="submit" name="add" value="" class="SearchSuppliers search2Col">
						<input type="hidden" name="task" value=""/>
					</div>
				</div>
            </div>
        </div>
    </div>

    <div class="suppliersFormNew">
	
		
        <table class="cnitableSuppliers">
            <thead class="headinvoiceItemSuppliers">
            <th  width="1%"><input type="checkbox"></th>
            <th class="">Vendor No.</th>
            <th class="">Date Created</th>
            <th class="">Vendor Name</th>
            <th class="">Active</th>
            </thead>
            <?php
            $suppliers = TblSupplierMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
            $pages->items_total = count(TblSupplierMySqlExtDAO::getData('', -1));
			$pages->mid_range = 9;
			$pages->paginate();
			if (count($suppliers) > 0) {
				foreach ($suppliers as $item) {
					?>
					<tr class="tableItemSuppliers">
						<td class=""><input name="chk[]" type="checkbox" class="chk" value="<?php echo $item->id ?>"></td>
						<td class=""><a href="#" value="<?= $item->id ?>" class="viewAct"><?php echo $item->supplierAccount ?></a></td>
						<td class=""><?php echo date('m / d / Y', strtotime($item->dateCreated)) ?></td>
						<td class=""><?php echo ucwords($item->name) ?></td>
						<td class=""><?php echo $item->activeAccount ?></td>
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
    </div>
</form>
</div>
<div class="popBack hidden">

</div>
<script>
    $(function() {
	
        $('.createNSupplier').click(function() {
			//x = confirm('Do you want to add new Vendor?') ; 
			//if (x == true) {
            $.post(URL + 'expenses/newvendor')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeNewVendor').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                window.location.reload();
                            }
                        });


                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
		//}
		//return false;
        });


        $('.editvendor').click(function() {
            // alert('asdf');
            if ($('input[name="chk[]"]:checked').length == 0) {
                alert('Please select item to edit.');
                return false;
            } else if ($('input[name="chk[]"]:checked').length > 1) {
                alert('Please select only 1 item to edit.');
                return false;
            }

            value = $('input[name="chk[]"]:checked').val();
            $.post(URL + 'expenses/newvendor', {id: value})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewVendor').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
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

            $.post(URL + 'expenses/checksuppliers', {supplierids: checked})
                    .done(function(returnData) {
//                                alert(returnData); return false;
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('delsupplier');
                                $('#form').submit();
                            }
                        }

                    });
        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(supplierid) {
        if ($('.chk').is(':checked') || supplierid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            if (supplierid != '') {
                checked.push(parseInt(supplierid));
            }

            $.post(URL + 'expenses/newvendor', {supplierid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewVendor').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
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

    // von code
    clickViewAct();
    function clickViewAct() {
        $('.viewAct').click(function() {
            value = $(this).attr('value');
            $.post(URL + 'expenses/newvendor', {id: value})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewVendor').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });
    }
	/*
    $('select[name="searchby"]').change(function() {
        $('.searchindexSuppliers').keyup();
    });
    $('.searchindexSuppliers').keyup(function() {
        search = $(this).val();
        type = $('select[name="searchby"]').val();
        $.post('<?= URL ?>expenses/getSuppliers', {'search': search, 'type': type})
                .done(function(returnData) {
                    $('.cnitableSuppliers td').remove();
                    $('.cnitableSuppliers thead').append(returnData);
                    clickViewAct();
                });

    });
	*/
</script>