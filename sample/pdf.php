<?php

//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */
// Include the main TCPDF library (search for installation path).

//define ('PDF_HEADER_STRING', );

require_once('tcpdf\examples\tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 001');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
 
 
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
$header = getheader(); 
//define(PDF_HEADER_LOGO, $header['logo']);
$pdf->SetHeaderData($header['logo'], 30, $header['name'], $header['address'] ."\nPhone: " . $header['phone'] .'Fax: ' . $header['fax'], array(0, 64, 255), array(0, 64, 128));
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

//$data = '<table><tr><td>dfdf</td></tr></table>';
//echo $data; exit;
// Set some content to print
$data = data();
//echo $data; exit;
$html = <<<EOD
<style>
    .invoiceHolderInvoicePrint{
        width: 100%;
        margin-top: 50px;
		margin: auto;
    }
    .PaymentTypeFormInvoice{
        width: 805px;
        margin: auto;
        background-color: white;
    }
    #newInvoice{
        font-family: Tahoma;
        margin-left: 15px;
        font-weight: bold;
        font-size: 20px;
        margin-top: 55px;
        height: 27px;
        border: 1px solid black;
        width: 773px;
        text-align: center;
        font-style:normal;
    }

    .niInvoice{
        font-size: 30px;
    }
    .clogo{
        width: 500px;
        height: 30px;
        margin-top: -10px;
        margin-left: 10px;
        padding-top: 10px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .clogoup{
        padding-left: 5px;
        width: 500px;
        height: 17px;
        margin-top: -42px;
        margin-left: 121px;
        font-size: 17px;
        font-family: Tahoma;
        font-weight: bold;
        text-shadow: none;
        color:#000000;
    }
    .clogoAdd{
        margin-left: 157px;
        width: 50px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
        font-weight: none;
    }
    .clogoAdd2{
        margin-left: 157px;
        width: 200px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
        font-weight: none;	
    }
    .invoicetr{
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .tbleInvoice{
        margin-top: 15px;
        margin-left: 15px;
    }
    .tbleInvoice td{
        font-weight:normal;
    }
    .inputboxInvoiceTxt{
        height: 20px;
        margin-top: 0px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        margin-left: -6px;
    }
    .inputboxInvoiceTxtIN{
        height: 20px;
        margin-top: 0px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        margin-left: -6px;
        width:80px;
    }
    .inputboxInvoiceTxtID{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -18px;
        border: none;
        margin:70px;
    }
    .inputboxInvoiceTxtDD{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .inputboxInvoiceTxtSO{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .inputboxInvoiceTxtDIS{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .particularInvoice{
        padding-top:35px;
    }
    .inputboxInvoiceTxt2 {
        margin-top: 1px;
        margin-left: -19px;
        font-family: Tahoma;
        font-size: 12px;
        margin-left: -30px;
        border: none;
    }
    .inputboxInvoiceTxtParticular{
        margin-top: 35px;
        margin-left: -19px;
        font-family: Tahoma;
        font-size: 12px;
        border: none;
    }
    .tbl2Invoice{
        margin-top: -102px;
		margin-left: 602px;
		border-collapse: collapse;
    }
    .tblInvoice2{
        border: 1px solid black;
		margin-top: 15px;
		padding-bottom: 30px;
		margin: auto;
		width: 773px;
    }
    .newTblInv{
        border-spacing: 0px;
    }
    .tblInvoicepaddingbottom td{
        padding-bottom:30px;
    }
    .tblInvoice2, th{
        text-align: left;
        border-spacing: 0px;
    }
    .tblInvoice2 th{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        color: black;
        font-size: 12px;
        font-family:tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
    }
    .tblInvoice2 td{
        /*border-bottom: 1px solid black;
        border-right: 1px solid black;	*/
        color: black;
        font-size: 12px;
        font-family:tahoma;
        font-weight: normal;
        padding-left: 5px;
    }
    .thInvoiceNew{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
    }
    .thInvoiceNew2{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        text-align: right;
        padding-right: 5px;
    }
    .thInvoiceNew3{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: center;
        width: 888px;
    }
    .thInvoiceNew5{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: center;
    }
    .thInvoiceNew4{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: right;
        padding-right: 5px;
    }
    .boarderNew{
        background-color: white;
        font-weight: none;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .boarderNew2{
        background-color: white;
        font-weight: none;
        padding-left: 5px;
        text-align: center;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .boarderNew3{
        background-color: white;
        font-weight: none;
        padding-right: 5px;
        text-align: right;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .tbl2Invoice2{
        border: 1px solid black;
        margin-top: 20px;
        margin-left: 15px;
        padding-bottom: 30px;
        font-size: 12px;
        font-family:Tahoma;
        width: 96.1%;
    }
    .tbl2Invoice2, tr th{
        text-align: left;
        border-spacing: 0px;
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
        width: 19.3%;
    }
    .tbl3Invoice2{
        border: 1px solid black;
        margin-top: 20px;
        margin-left: 501px;
        width: 287px;
        border-collapse: collapse;

    }
    .SAInvoice{
        text-align: left;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
    }
    .SAInvoice2{
        text-align: left;
        font-size: 12px;
        font-family: Tahoma;
        padding:5px;
    }
    .SAInvoice3{
        text-align: left;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: -5px;
        font-weight: bold;
    }
    .inputTotalInvoice{
        width: 130px;
        margin-left: 56px;
        text-align: right;
        padding-right: 3px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
    }
    .inputTotalInvoice2{
        width: 130px;
        margin-left: 56px;
        text-align: right;
        padding-right: 3px;
        margin-top: -5px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
    }
    .inputTotalInvoice3{
        width: 130px;
        margin-left: 56px;
        text-align: right;
        padding-right: 3px;
        font-weight: bold;
        font-size: 12px;
        font-family: Tahoma;
        border-top: 1px solid black;
        border-left: none;
        border-right: none;
        border-bottom: none;
        box-shadow: none;
        background-color: #c8c8c8;
        margin-top:-1px;
    }
    .trTotalInvoices{
        margin-top: -5px;
    }
    .trTotalInvoicesGr{
        margin-top: -5px;
        background-color: #c8c8c8;
        border-spacing: 0px;

    }
    .RemarksInvoice{
        margin-top: 30px;
        margin-left: 15px;
        font-size: 12px;
        font-weight: bold;
        text-shadow: none;
        font-family: Tahoma;
    }
    .RemarkText{
        margin-left: 30px;
        width: 740px;
        height: 60px;
        margin-bottom: 20px;
        margin-top: 10px;
		font-family:tahoma;
		font-size:12px;
		padding:5px;
    }
    .closePrint{
        background-color: gray;
        color: white;
        border: none;
        border-radius: 2px;
        font-family: Cambria;
        font-style: bold;
        font-size: 16px;
        height: 25px;
        float:right;
        margin-right: -1px;
    }
    .tblInvoice2 tr th:nth-child(2){
        text-align: center;
    }
    .tblInvoice2 tr th:nth-child(4){
        text-align: right;
    }
    .tblInvoice2 tr th:nth-child(5){
        text-align: right;
    }
    .tblInvoice2 tr td:nth-child(2){
        text-align: center;
    }
    .tblInvoice2 tr td:nth-child(4){
        text-align: right;
    }
    .tblInvoice2 tr td:nth-child(5){
        text-align: right;
    }

    .tblInvoice2Item{
        border: 1px solid black;
        margin-top: 10px;
        margin-left: 15px;
        padding-bottom: 30px;
        width: 96.1%;
    }
    .newTblInv{
        border-spacing: 0px;
    }

    .tblInvoice2Item, th{
        text-align: left;
        border-spacing: 0px;
		margin: auto;
		margin-top: 15px;
		width: 773px;
    }
    .tblInvoice2Item th{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        color: black;
        font-size: 12px;
        font-family: tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
        width: 19.3%;
    }

    .tblInvoice2Item tr th:nth-child(2){
        text-align: center;
    }
    .tblInvoice2Item tr th:nth-child(4){
        text-align: right;
    }
    .tblInvoice2Item tr th:nth-child(5){
        text-align: right;
    }
    .tblInvoice2Item tr td:nth-child(2){
        text-align: center;
    }
    .tblInvoice2Item tr td:nth-child(4){
        text-align: right;
    }
    .tblInvoice2Item tr td:nth-child(5){
        text-align: right;
    }
    .scplogoclass{
        width: 114px;
        height: 63px;
    }
    .addressLogo{
        color:#000000;
        font-size:12px;
		font-family:Arial, Helvetica, verdana, sans-serif, tahoma
    }
    .pdf{
        color: white;
        background-color: rgb(89,89,89);
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        margin-left: 650px;
        margin-top: 27px;
        box-shadow: 0px 0px 3px 1px gray;
        font-family: calibri;
        font-weight: bold;
        width: 47px;
        height: 25px;
    }
    .pdf2{
        color: white;
        background-color: rgb(89,89,89);
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        box-shadow: 0px 0px 3px 1px gray;
        font-family: calibri;
        font-weight: bold;
        width: 47px;
        height: 25px;
        margin-left:5px;
    }

    @media print {
        .mainbodyInvoice, #container, .mainBody, #footer, input[type=button] {
            display: none;
        }
        
        .Main{
            background: none;
        }
        
        .PaymentTypeFormInvoice{
            width: 100%;
        }
        .PaymentTypeFormInvoice{
            width: 805px;
        }
        
        .popBack{
            width: 100%;
            overflow: hidden;
            position: static;
            background-color: #fff;
            /*margin: 90px auto;*/
        }
        
        @page {
            size: landscape;
            margin: 0px;
        }
        thead   {display: table-header-group;   }
 
        tfoot   {display: table-footer-group;   }
    }
    
    @media screen{
        thead   {display: table-header-group;   }
 
        tfoot   {display: table-footer-group;   }
    }
</style>

        $data
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('invoice.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
exit;

function data() {

    $client = new TblClient();
    $invoice = new TblNewInvoice();
    $invoiceamount = new TblInvoiceAmount();
    $taskline = array();
    $itemline = array();
    if (isset($_POST['invoiceid'])) {
        $invoice = DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid']);
        $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
        $invoiceamount = DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId(DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoice->id)[0]->id)[0];
        $taskline = TblInvoiceLinesMySqlExtDAO::getTasks($invoice->id);
        $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
//        return $_POST['invoiceid'];
    }
    $data = '
			
            <div id="newInvoice" style="text-align:center;border:solid 1px black;padding-top:15px;">INVOICE</div>

            <table class="tbleInvoice">
                <tr class="invoicetr">
                    <td style="width:120px;">Client Name:</td>
                    <td style="width:120px;">' . $client->clientName . '</td>
                </tr>
                <tr class="invoicetr">
                    <td style="width:120px;">Address:</td>
                    <td style="width:120px;">' . $client->address . '</td>
                </tr>
                <tr class="invoicetr" style="margin-top:25px;">
                    <td style="width:120px;" class="particularInvoice">Particular:</td>
                    <td style="width:120px;">' . $invoice->particular . '</td>
                </tr>
            </table>
            <table class="tbl2Invoice">
				
				<tr class="invoicetr">
                    <td style="width:120px;">Invoice Number:</td>
                    <td style="width:120px;">' . $invoice->invoiceNumber . '</td>
                </tr>	
                <tr class="invoicetr">
                    <td style="width:120px;">Invoice Date:</td>
                    <td style="width:120px;">' . $invoice->dateIssued . '</td>
                </tr>	
                <tr class="invoicetr">
                    <td style="width:120px;">Due Date:</td>
                    <td style="width:120px;">' . $invoice->dueDate . '</td>
                </tr>
                <tr class="invoicetr">
                    <td style="width:120px;">P.O. / S.O:</td>
                    <td style="width:120px;">' . $invoice->pOSO . '</td>
                </tr>
                <tr class="invoicetr">
                    <td style="width:120px;">Discount:</td>
                    <td style="width:120px;">' . $invoice->discount . '%</td>
                </tr>
            </table>';
    $discounttotal = $subtotal = $vattotal = 0;
    if (count($taskline) > 0) {
        $data .= //'<div style="margin-top: 14px; width:805px;">
                '<div height=12px></div>'.
                   ' <table class="tblInvoice2">
                        <thead>
                            <tr class="newTblInv" style="height:29px;">
                                <th style="width:15%;">Service No.</th>
                                <th style="width:15%;">Hour</th>
                                <th style="width:40%;">Description</th>
                                <th style="width:15%;">Rate</th>
                                <th style="width:15%;">Amount</th>
                            </tr>
                        </thead>';
        foreach ($taskline as $i => $task) {

//            $tbltask = DAOFactory::getTblTaskDAO()->load($task->taskId);

//            $discountamt = $task->netAmount * $invoice->discount / 100;
//            $discount = $task->netAmount - $discountamt;
//            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

//            if ($client->vatInclusive == 'yes') {
//                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
//                $subtotal += $task->netAmount - $vat;
//                $vattotal += $vat;
//            } else {
//                $subtotal += $task->netAmount;
//            }

            $data .='           <tr >' .
                    '<td style="width:15%;" class="">' . $task->taskCode . '</td>' .
                    '<td style="width:15%;" class="">' . $task->hour . '</td>' .
                    '<td style="width:40%;" class="">' . $task->description . '</td>' .
                    '<td style="width:15%;" class="">' . number_format((float) $task->rate, 2) . '</td>' .
                    '<td style="width:15%;" class="">' . number_format((float) $task->netAmount, 2) . '</td>' .
                    '</tr>';
        }
        $data .='       </table>';
    }

    if (count($itemline) > 0) {
        $data .='<div height=12px></div>'.
                '      <table class="tblInvoice2">
                        <thead>
                            <tr class="newTblInv">
                                <th style="width:15%;">Item No.</th>
                                <th style="width:15%;">Quantity</th>
                                <th style="width:40%;">Description</th>
                                <th style="width:15%;">Unit Cost</th>
                                <th style="width:15%;">Amount</th>
                            </tr>
                        </thead>';
        foreach ($itemline as $i => $item) {

//            $tblitem = DAOFactory::getTblItemDAO()->load($item->itemId);

//            $discountamt = $item->netAmount * $invoice->discount / 100;
//            $discount = $item->netAmount - $discountamt;
//            $discounttotal += $discountamt;
////                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;
//
//            if ($client->vatInclusive == 'yes') {
//                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
//                $vattotal += $vat;
//                $subtotal += $item->netAmount - $vat;
//            } else {
//                $subtotal += $item->netAmount;
//            }

            $data .='                <tr >' .
                    '<td style="width:15%;" class="">' . $item->itemCode . '</td>' .
                    '<td style="width:15%;"  class="">' . $item->quantity . '</td>' .
                    '<td style="width:40%;" class="">' . $item->description . '</td>' .
                    '<td style="width:15%;" class="">' . number_format((float) $item->unitCost, 2) . '</td>' .
                    '<td style="width:15%;" class="">' . number_format((float) $item->netAmount, 2) . '</td>' .
                    '</tr>';
        }
        $data .= '</table>' ;
    }
//    $total = TblNewInvoiceMySqlExtDAO::getTotal($invoice->id);
    $data .= '<table class="tbl3Invoice2">' .
            '<tr>' .
            '<td class="SAInvoice">Sales Amount:</td>' .
            '<td>' . number_format((float) $invoiceamount->subTotalAmount, 2) . '</td>' .
            '</tr>' .
            '<tr class="trTotalInvoices">' .
            '<td class="SAInvoice2">Vat 12%:</td>' .
            '<td>' . number_format((float) $invoiceamount->vatAmount, 2) . '</td>' .
            '</tr>' .
            '<tr class="trTotalInvoices">' .
            '<td class="SAInvoice2">Discount:</td>' .
            '<td>' . number_format((float) $invoiceamount->discountAmount, 2) . '</td>' .
            '</tr>' .
            '<tr class="trTotalInvoicesGr">' .
            '<td class="SAInvoice3">Grand Total:</td>' .
            '<td>' . number_format((float) $invoiceamount->grandTotal, 2) . '</td>' .
            '</tr>' .
            '</table>' .
            '<div class="RemarksInvoice">Remarks</div>' .
            '<div>' . $invoice->remarks . '</div>' .
            '</div>';

    return $data;
}

function getheader(){
    $company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));
    
    $array = array("logo"=> Session::getSession("medorgid"),
        "name"=>DAOFactory::getTblOrganizationDAO()->load(Session::getSession("medorgid"))->orgName,
        "address"=>$company->address,"phone"=>$company->phoneNum, "fax"=>$company->phoneNum);
    
    return $array;
}
