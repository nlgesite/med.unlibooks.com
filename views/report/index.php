<style>
.reportContainer{
	margin-top: -63px;
	background-color: white;
	padding-top: 4px;
	padding-bottom: 120px;
	box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
}
.reportForm{
	width: 985px;
	margin-left:5px;
	border-radius: 18px;
	border: 1px solid rgba(128, 128, 128, 0.42);
	/* padding-bottom:320px; */
	margin-top:15px;
}
.listForm{
	width: 211px;
	/* height: 600px; */
	margin-left: 10px;
	padding-top: 20px;
	border-right: 1px solid rgba(128, 128, 128, 0.42);
	/* float:left;  */
	height: 786px;
	/* padding-bottom: 476px; */
}
.fsReport{
	font-size: 23px;
	font-family: agency fb2;
	font-weight: bold;
	color: rgb(37, 181, 239);
}
.ul.b {
    list-style-type: square;
	font-size: 12px;
	padding-left: 1px;
	margin-top: -5px;
	color: black;
}

li.{
	padding-top: 10px;
	list-style-type: square;
	color: black;
}
.listType{
	list-style-type: circle;
	font-size: 12px;
	font-family:verdana;
	color: black;
	margin: 0 10px;
	padding: 5px 10px;
	color:rgb(37, 181, 239);
}
.listType:HOVER{
	color: green;
}
.listType a{
	list-style-type: square;
	font-size: 12px;
	font-family: verdana;
	color: black;
	font-weight: normal;
}

.listType2{
	list-style-type: square;
	font-size: 12px;
	font-family: verdana;
	padding-top: 5px;
}

.b a{
	font-weight: normal;
	font-size: 17px;
	font-family: agency fb2;
	color: rgb(57, 143, 114);
}
.a:hover{
	background-color: red;
} 
.listForm a{
	text-decoration: none;
}
.listForm a:hover{
	text-decoration:none;
	color:rgb(17, 113, 81);
}
.clientlink{
	margin-top: -806px;
	/* height: 100%; */
	/* border-left: solid 1px gray; */
	/* padding-bottom: 507px; */
	margin-left: 220px;
	width: 764px;
	float:left;
}
.reportMainformNew{
	/* height:100%; */
}
.hrdashreport {
	height: 5px;
	width: 99%;
	margin-top:79px;
	border:none;
}	
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<div class="bodysize">
<div class="reportContainer">
	<hr class="hrdashreport">
	<form class="reportForm">
		<div class="reportMainformNew">
				
			<div class="listForm">
				<div class="fsReport">Financial Statement</div>
				<div class="sd">
					<div class="b">
					  <div class="listType">&#9642; &nbsp <a href="" class="balancesheetlink">Balance Sheet</a></div>
					  <div class="listType">&#9642; &nbsp <a href="" class="Incomestatementlink">Income Statement</a></div>	
					  <div class="listType">&#9642; &nbsp <a href="" class="trialBalanceLink">Trial Balance</a></div>	
					</div>
				</div>
				
				<div class="fsReport">Account Receivables</div>
				<div class="sd">
					<div class="b">
					  <div class="listType">&#9642; &nbsp <a href="" class="outstandingReceivable">Outstanding  Receivable</a></div>
					   <div class="listType">&#9642; &nbsp <a href="" class="paymentCollected">Collection Report</a></div>
					</div>
				</div>
				<div class="fsReport">Sales</div>
				<div class="sd">
					<div class="b">
					  <!--  <div class="listType">&#9642; &nbsp <a href="" class="salesperitem">Sales per Item</a></div>-->
					  <div class="listType">&#9642; &nbsp <a href="" class="salespertask">Sales per Service</a></div>
					</div>
				</div>
				
				<div class="fsReport">Other Reports</div>
				<div class="sd">
					<div class="b">
					  <div class="listType">&#9642; &nbsp <a href="" class="monthlyExpense">Monthly Expense</a></div>
					  <div class="listType">&#9642; &nbsp <a href="" class="cashReceiptsBook">Cash Receipts Book</a></div>
					  <div class="listType">&#9642; &nbsp <a href="" class="cashDisburstmentBook">Cash Disbursement Book</a></div>
					  <div class="listType">&#9642; &nbsp <a href="" class="summaryOfBilling">Summary of Billing</a></div>
					  <div class="listType">&#9642; &nbsp <a href="" class="summaryofJournal">Summary of Journal</a></div>
					   <!--<div class="listType">&#9642; &nbsp <a href="" class="clientlistLink">Patient List</a></div>-->
					</div>
				</div>
				
				<div class="fsReport">BIR Reports</div>
				<div class="sd">
					<div class="b">
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form1601c">
									Form 1601C
								</a>
						</div>
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form1601e">
									Form 1601E
								</a>
						</div>
						<?php
							if($this->available->typeOfTax != 'vat'){
						?>
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form2551m">
									Form 2551M
								</a>
						</div>
						<?php
							}
						?>
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form1701">
									Form 1701
								</a>
						</div>
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form1701q">
									Form 1701Q
								</a>
						</div>
						<?php
							if($this->available->typeOfTax == 'vat'){
						?>
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form2550m">
									Form 2550M
								</a>
						</div>
						<div class="listType">
							&#9642; &nbsp 
								<a href="" class="form2550q">
									Form 2550Q
								</a>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				
			</div> 
				
			<div style="clear:both"></div>
			
			<div class="clientlink">
				<div class="newformcl">
				
				</div>
		
		</div>	
		
		</div>
		<div style="clear:both"></div>	
	</form>
</div>
</div>
<div class="popBack hidden">

</div>
<script>
		var loading = '<div class="loadingHolder"><img src="' + URL + 'public/images/loading.gif"/></div>';
            $(function() {
                $('.clientlistLink').click(function() {
				
                    $.post(URL + 'report/new_clientlist')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.salesperitem').click(function() {
				
                    $.post(URL + 'report/new_salesitem')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.summaryOfBilling').click(function() {
				
                    $.post(URL + 'report/summaryBilling')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.summaryofJournal').click(function() {
				
                    $.post(URL + 'report/summaryJournal')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.cashDisburstmentBook').click(function() {
				
                    $.post(URL + 'report/cashDisburstmentBook')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.salespertask').click(function() {
				
                    $.post(URL + 'report/new_salestask')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.monthlyExpense').click(function() {
				
                    $.post(URL + 'report/new_monthlyExpense',{'startdate': '<?= date('Y-m-d') ?>', 'enddate': '<?= date('Y-m-d') ?>'})		
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.outstandingReceivable').click(function() {
				
                    $.post(URL + 'report/new_outstanding_receivable')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.paymentCollected').click(function() {
				
                    $.post(URL + 'report/new_payment_collected')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.balancesheetlink').click(function() {
				
                    $.post(URL + 'report/new_balance_sheet')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				$('.Incomestatementlink').click(function() {
				
                    $.post(URL + 'report/new_income_statement')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.trialBalanceLink').click(function() {
				
                    $.post(URL + 'report/trial_balance')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				$('.cashReceiptsBook').click(function() {
				
                    $.post(URL + 'report/cashReceiptsBook')										
                        .done(function(returnData) {
                        $('.newformcl').html(returnData);
                        $('.newformcl').removeClass('hidden');


                        /* $('.close').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        }); */
                    }).fail(function() {
                        alert('Connection Error!');
                    });
                    return false;
                });
				
				
				$('.form2551m').click(function() {
					$.post(URL + 'report/form2551m')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						})
                    return false;
                });
				
				$('.form1701').click(function() {
					$.post(URL + 'report/form1701')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						})
                    return false;
                });
				
				$('.form1701q').click(function() {
					$.post(URL + 'report/form1701q')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						})
                    return false;
                });
				
				$('.form2550m').click(function() {
					$.post(URL + 'report/form2550m')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						})
                    return false;
                });
				
				$('.form2550q').click(function() {
					$.post(URL + 'report/form2550q')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						});
                    return false;
                });
				
				$('.form1601c').click(function() {
					$.post(URL + 'report/form1601c')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						});
                    return false;
                });
				
				$('.form1601e').click(function() {
					$.post(URL + 'report/form1601e')
						.done(function(returnData){
							$('.newformcl').html(returnData);
							$('.newformcl').removeClass('hidden');
							pdfPrint();
						});
                    return false;
                });
				
				function pdfPrint(){
					
					$('.printPdf').unbind();
					$('.printPdf').bind('click',function(){
						window.print();
					});
				}

            })
			
</script>


