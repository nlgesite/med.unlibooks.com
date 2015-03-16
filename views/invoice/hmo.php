<style>
    .cnitableClienthmo{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 5px;
    }
    .cnitableClienthmo, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableClienthmo, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableClienthmo a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
    }
    .cnitableClienthmo a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
    .cnitableClienthmo tr:HOVER{
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
   
    .cNumberhmo select option {
        /* padding: 20px; */
    }
    .search2Colpat {
        
    }
	.cusContainer select {
		background-color:#5e5353 ;
		/* margin-left: 304px; */
		width: 149px;
		height: 33px;
		border:none;
		font-size:12px;
		border: none;
		color: whitesmoke;
		font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<?php
require_once ('public/paginator.php');
$pages = new Paginator;
?>
<div class="bodysize">
 <form method="post" action="<?php echo URL ?>invoice/hmo" id="form"> 
	<div class="customerHolder">
		<div>
				<div id="newInvoice">
					<p class="headText">ALL HMO PARTNER</p>
					<a href="<?= URL ?>invoice/hmo">	
						<input type="button" class="createNchmo">
					</a> 
				</div>	
				 <?php
					echo (Session::getSession('error') != '') ? Session::getSession('error') : '';
					Session::setSession('error', '');
				 ?>
			<div class="center2">
				<div class="cusButton">
					<div style="float:left; margin-left: 24px;">
						<input type="button" value="EDIT" class="clientEdit buttoninvoices" name="edit" onclick="editrec('')">
						<input type="button" value="DELETE" class="dlt buttoninvoices" name="delete" onclick="deleterec();">
					</div>
					<div style="float:right;margin-right: 67px;">	
						<div class="invoiceselect invoiceselect2" id="invoiceselect">
							<?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : '' ?>
							<select class="cNumberhmo inumber" name="searchby" style="margin-right:0px;">
								<option value="1" style="color:#000;"<?php echo $searchby == 1 ? 'selected' : '' ?>>HMO Partner No.</option>
								<option value="2" style="color:#000;" <?php echo $searchby == 2 ? 'selected' : '' ?>>HMO Partner Name</option>
							</select>
							<input type="text" placeholder="SEARCH" class="cSearchhmo searchindex" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">               
						
							<input type="submit" name="search2" value="" class="search2Colpat search2Col">
						</div>
					</div>
			   </div>
			</div>
		</div>	
		<div>	
			<table class="cnitableClienthmo" style="margin-top: 49px;">
				<tr class="trcustomer_table">
					<th width="3%"><input type="checkbox" class="toggle"></th>
					<th width="20%">HMO Partner ID No.</th>
					<th width="20%">Date Created</th>
					<th width="36%">HMO Partner Name</th>
				</tr>

				
					<?php
					$customers = TblHmoMySqlExtDAO::getData(($_GET['ipp']=="All")? '':$_GET['ipp'], ($_GET['ipp']=="All")? '' : $_GET['ipp']*($_GET['page']-1));
					$pages->items_total = count(TblHmoMySqlExtDAO::getData('', -1));
					$pages->mid_range = 9;
					$pages->paginate();
					if (count($customers) > 0) {
						foreach ($customers as $item) {
							?>
							<tr class="customer_row">
								<td class=""><input type="checkbox" name="chk[]" class="chk" value="<?php echo $item->id ?>"></td>
								<td class=""><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->hmoAccount ?></a></td>		
								<td class=""><?php echo date('m  / d / Y',strtotime($item->dateCreated)) ?></td>
								<td class="b"><?php echo ucwords($item->hmoName) ?></td>
							</tr>
							<?php
						}
					}
					?>
					
			</table>
			 <div class="tfootTable" style="text-align:center; padding:6px 0 6px 0">
                <?php
                echo $pages->display_pages();
                echo "<span style=\"margin-left:25px\width:120px;color:#fff;font-family:verdana; font-size:12px;\"> " . $pages->display_jump_menu()
                . $pages->display_items_per_page() . "</span>";

                echo "Page $pages->current_page of $pages->num_pages";
                ?>
            </div>

			<input type="hidden" name="task" value="">
			<input type="hidden" name="returnurl" class="returnurl" value="" />
		

		</div>
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

            $.post(URL + 'invoice/checkHMOtrans', {hmoid: checked})
                    .done(function(returnData) {
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('deletehmo');
                                $('#form').submit();
                            }
                        }
                    })
        } else {
            alert('Please select record to delete');
        }
    }
    function editrec(hmoid) {
        sessionStorage.setItem("username", "John");
        if ($('.chk').is(':checked') || hmoid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            if (hmoid != '') {
                checked.push(parseInt(hmoid));
            }
            $.post(URL + 'invoice/newHmo', {hmoid: checked})
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
        $('.createNchmo').click(function() {
            $.post(URL + 'invoice/newHmo')
                    .done(function(returnData) {
                        $('.popBack').empty();
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.close1Client').click(function() {
                            if (confirm('Are you sure, you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                location = URL + 'invoice/hmo';
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


