<?php
 /*
     Example10 : A 3D exploded pie graph
 */

 // Standard inclusions   
 include("pChart/pData.class");
 include("pChart/pChart.class");

 // Dataset definition 
 $DataSet = new pData;
 $DataSet->AddPoint(array(3000,2000,2500,5000,30000),"Serie1");
 $DataSet->AddPoint(array("Von","Belle","Khariza","Jerome","Rosean"),"Serie2");
 $DataSet->AddAllSeries();
 $DataSet->SetAbsciseLabelSerie("Serie2");

 // Initialise the graph
 $Test = new pChart(380,200);
 $Test->drawFilledRoundedRectangle(7,7,373,193,5,240,240,240);
 $Test->drawRoundedRectangle(5,5,375,195,5,230,230,230);

 // Draw the pie chart
 $Test->setFontProperties("Fonts/tahoma.ttf",8);
 $Test->drawPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),150,90,110,TRUE,TRUE,50,20,5);
 $Test->drawPieLegend(310,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);

 $Test->Render("example10.png");
?>

<img src="example10.png"/>