<style>
    .createNewChartofAccount{
        margin-left: 747px;
        margin-top: -74px;
        width: 212px;
        height: 47px;
        border: none;
        background-image:url('<?=URL?>public/images/chartofaccount.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;

    }

    .collect_tableCharts{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 5px;
    }
    .collect_tableCharts, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
        padding-left: 20px;
    }
    .collect_tableCharts, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 2px 5px 2px 20px;
    }
    .collect_tableCharts a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
    }
    .table_collectionCharts{
    }
    .collect_tableCharts tr:HOVER{
        /* background-color: #E8E8E8; */
    }
    .table_collectionCharts tr:hover{
       /*  background-color: white; */
    }	

    .invoiceHolderCharts{
        width: 100%;
        /* margin-top: 217px; */
        background-color: white;
		box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
		margin-bottom: -18px;
		margin-top:49px;
    }
    #newCharts{
        
    }
    .chartsForm{
        background-color: white;
        padding-top: 1px;
        padding-bottom: 200px;
		box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
		margin-bottom: -18px;
    }	
    .headTextCharts{
        /* margin-top: -133px; */
        font-size: 30px;
        padding-top: 24px;
		padding-top: 30px;
		font-size: 28.24px;
		font-family: agency fb2;
		color: #398f72;
		padding-left: 10px;
    }
    .hrClass4Charts{
        width:985px;
        border: 2px solid gray;
        margin-top: -8px;
    }
    .div2Charts{
        background-color: #E5F1CE;
        right: 50%;
        margin-top: 5px;
        width: 990px;
        height: 45px;
        margin-left:5px;
        border-radius:10px 10px 0px 0px;
        border: 0px;
    }
    .button_containerCharts{
        margin-left: 10px;
        width: 200px;
        text-align: center;
        height: 28px;
        margin-top: 25px;
    }
    .addpaymentCharts{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: 5px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        margin-top: 7px;
    }
    .printCharts{
        background-color:#5e5353;
        width: 128px;
        height: 29px;
        border-radius: 2px 2px 2px 2px;
        margin-left: 5px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        color: whitesmoke;
        border: none;
    }
    .edit1Charts{
        background-color:#5e5353;
        width: 128px;
        height: 29px;
        border-radius: 2px 2px 2px 2px;
        margin-left: -1px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        color: whitesmoke;
        border: none;
    }

    .head_collectCharts{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        letter-spacing:1px;
        font-size: 13px;
        color: white;
        height: 30px;
        text-align: left;
        font-weight: bold;
    }
    .collect_tableCharts{
        margin-top: 5px;
        margin-left: 10px;
        width: 98%;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
    }
    .table_collectionCharts{
        background-color: white;
        height: 30px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: none;
    }
    .table_collectionCharts2{
        background-color: white;
        height: 25px;
    }

    .checkboxCharts{
        text-align: center;


    }
    .paynoCharts{
        color: black;
        margin-top: 200px;
        padding-left: 0px;
        text-align: left;
        background-color:white;
        border-collapse: collapse;
        width: 200px;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        padding-left: 1px;
    }
    .paynoCharts2{
        color: black;
        margin-top: 200px;
        padding-left: 0px;
        text-align: left;
        background-color:white;
        border-collapse: collapse;
        width: 200px;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        padding-left: 1px;
    }
    .cboxCharts{
        text-align: center;
        border: none;
        background-color: white;
        width: 40px;
    }
    .cboxCharts2{
        text-align: center;
        border: none;
        background-color: white;
        width: 40px;
    }
    .table_Title{
        background-color: #23adf1;
        height: 30px;
        border-bottom: 1px solid #C8C8C8;
        font-size:12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight:bold;
        padding-left:30px;
    }
    .collect_tableCharts tr th:nth-child(2){
        text-align: right;
        padding-right:100px;
    }
    .table_collectionCharts td:nth-child(1){
        text-align: left;
        padding-left: 40px;
        background-color: rgb(250, 248, 248);
    }
    .table_collectionCharts td:nth-child(2){
        text-align: right;
        padding-right:100px;
        background-color: rgb(250, 248, 248);
    }
	.collect_tableCharts th{
		background-color:#0072bc;
	}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="bodysize">
<div class="invoiceHolderCharts">
    <div id="newCharts">
        <p class="headTextCharts">CHART OF ACCOUNTS</p>
        <a href="<?=URL?>invoice/newRecurring">
            <input type="button"  class="createNewChartofAccount hidden">
        </a>
        <div class="hrClass4Charts"></div>
    </div>
</div>

<div class="chartsForm">
    <table class="collect_tableCharts">

        <tr class="head_collectCharts" style="background-color:#0072bc;">
            <th>NAME</th>
            <th></th>
        </tr>
        <?php
		
			$coas = array("assets", "liabilities","equity", "income", "expense");
				
        foreach ($coas as $coa) {
			
				
            $items = TblCoaMySqlExtDAO::getcoaData($coa);
				
            ?>
		
            <tr class="table_Title">
                <td colspan="" style="color:#fff;">
					<?php 
						if($coa == "income"){
							$coa = "SALES/SERVICE REVENUE";
						}		
							echo strtoupper($coa);
					
					?>
						
				</td>
				<td colspan="2"></td>
            </tr>
            <?php
            foreach ($items as $item) {
                ?>
                <tr class="table_collectionCharts">
                    <td class="" style="font-weight:bold;"><?php echo $item->accountNum . ' - ' . $item->accontName ?></td>
                    <td class=""></td>
                </tr>
                <?php
                $subitems = DAOFactory::getTblCoaDAO()->queryBySubAccount($item->id);
                if (count($subitems > 0)) {
                    foreach ($subitems as $subitem) {
                        ?>
                        <tr class="table_collectionCharts">
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $subitem->accountNum . '-' . $subitem->accontName ?></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
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
<div class="popBack hidden">

	


</div>
<script>
    $(function() {
        $('.createNewChartofAccount').click(function() {
            $.post(URL + 'accounting/new_charts_account')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.chart-close').click(function() {
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

    function editrec(coaid) {
        if ($('.chk').is(':checked') || coaid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            if (coaid != '') {
                checked.push(parseInt(coaid));
            }

            $.post(URL + 'accounting/new_charts_account', {coaid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.chart-close').click(function() {
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

