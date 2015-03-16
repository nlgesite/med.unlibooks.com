<?php
    class Dashboard_Model extends Model{
        public function __construct() {
            parent::__construct();
        }
		
		function getExpenses(){
			$orgId = Session::getSession('medorgid');
			return $expenses = TblExpenseLinesMySqlExtDAO::getTopExpenses($orgId,date('m'),date('Y'));
			
			if($expenses){
				$amount = array();
				$coa = array();
				$total = 0;
				$count = 0;
				$total2 = 0;
				foreach($expenses as $each){
					$total += $each->netAmount;
					if($count < 4){
						$coa[] = $each->accountNum;
						$amount[] = $each->netAmount;
					} else {
						$total2 += $each->netAmount;
					}
					$count++;
				} 
				if(count($expenses) > 3){
					$coa[] = "Other's";
					$amount[] = $total2;
				}
				$amount2 = array();
				foreach($amount as $each){
					$amount2[] = ($each/$total) * 100;
				}
				$amount = $amount2;
				 include("libs/chart/pChart/pData.class");
				 include("libs/chart/pChart/pChart.class");

		/* 		 Dataset definition  */
				 $DataSet = new pData;
				 $DataSet->AddPoint($amount,"Serie1");
				 $DataSet->AddPoint($coa,"Serie2");
				 $DataSet->AddAllSeries();
				 $DataSet->SetAbsciseLabelSerie("Serie2");

				 // /* // Initialise the graph */
				 $Test = new pChart(380,200);
				 $Test->drawFilledRoundedRectangle(7,7,373,193,5,240,240,240);
				 $Test->drawRoundedRectangle(5,5,375,195,5,230,230,230);

				 // /* // Draw the pie chart */
				 $Test->setFontProperties("libs/chart/Fonts/tahoma.ttf",8);
				 $Test->drawPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),150,90,110,TRUE,TRUE,50,20,5);
				 $Test->drawPieLegend(310,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);

				 $Test->Render("libs/chart/images/".$orgId.".png");
			}
			
			return $expenses;
		}
		
		 function getCollectedAmount(){
			$orgId = Session::getSession('medorgid');
			return $collectedAmount = TblInvoiceAmountMySqlExtDAO::getTopCollectedAmount($orgId,date('m'),date('Y'));
			if($collectedAmount){
				
				$amount = array();
				$total = 0;
				$total2 = 0;
				$count = 0;
				$hmo = array();
				
				foreach($collectedAmount as $each){
					$total += $each->amountReceived;
					if($count < 7){
						$hmo[] = $each->hmoAccount;
						$amount[] = $each->amountReceived;
					} else {
						$total2 += $each->amountReceived;
					}
					$count++;
				}
				
				$amount2 = array();
				foreach($amount as $each){
					$amount2[] = ($each/$total) * 100;
				}
				$amount = $amount2;
				
				 include("libs/chart/pChart/pData.class");
				 include("libs/chart/pChart/pChart.class"); 

		/*this is comment 		 Dataset definition  */
				$DataSet = new pData;
				$DataSet->AddPoint($amount,"Serie1");
				$DataSet->AddPoint($hmo,"Serie2");
				$DataSet->AddAllSeries();
				$DataSet->SetAbsciseLabelSerie("Serie2");

				 // this is comment/* // Initialise the graph */
				 $Test = new pChart(380,200);
				 $Test->drawFilledRoundedRectangle(7,7,373,193,5,240,240,240);
				 $Test->drawRoundedRectangle(5,5,375,195,5,230,230,230); 

				 // this is comment/* // Draw the pie chart */
				$Test->setFontProperties("libs/chart/Fonts/tahoma.ttf",8);
				 $Test->drawPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),150,90,110,TRUE,TRUE,50,20,5);
				 $Test->drawPieLegend(310,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250); 

				$Test->Render("libs/chart/images/collected_".$orgId.".png"); 
			}
			
			return $collectedAmount;
		}
		
		
		
		 function getServiceInvoice(){
		 
			$orgId = Session::getSession('medorgid');
			return $invoiceTotal = TblNewInvoiceMySqlExtDAO::getAllServiceInvoice($orgId,date('m'),date('Y'));
			
			if($invoiceTotal){
				$amount = array();
				$total = 0;
				$count = 0;
				$dateMonth = array();
				foreach($invoiceTotal as $each){
					
					$total += $each->pCash;
					if($count < 7){
						// $dateMonth[] = $each->dateIssued;
						$dateMonth[] = date('F',strtotime($each->dateIssued));
						$amount[] = $each->pCash;
					}
					$count++;
				} 
				
				$amount2 = array();
				foreach($amount as $each){
					$amount2[] = ($each/$total) * 100;
				}
				$amount = $amount2;
				
				 include("libs/chart/pChart/pData.class");
				 include("libs/chart/pChart/pChart.class");

		/* 		 Dataset definition  */
				 $DataSet = new pData;
				 $DataSet->AddPoint($amount,"Serie1");
				 $DataSet->AddPoint($dateMonth,"Serie2");
				 $DataSet->AddAllSeries();
				 $DataSet->SetAbsciseLabelSerie("Serie2");

				 // /* // Initialise the graph */
				 $Test = new pChart(380,200);
				 $Test->drawFilledRoundedRectangle(7,7,373,193,5,240,240,240);
				 $Test->drawRoundedRectangle(5,5,375,195,5,230,230,230);

				 // /* // Draw the pie chart */
				 $Test->setFontProperties("libs/chart/Fonts/tahoma.ttf",8);
				 $Test->drawPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),150,90,110,TRUE,TRUE,50,20,5);
				 $Test->drawPieLegend(310,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);

				 $Test->Render("libs/chart/images/serviceInvoice_".$orgId.".png"); 
			}
			return $invoiceTotal;
		} 
		
    }
?>
