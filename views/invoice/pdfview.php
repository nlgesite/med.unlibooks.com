<?php

// Include the main TCPDF library (search for installation path).
//define ('PDF_HEADER_STRING', );

require_once('tcpdf/examples/tcpdf_include.php');
//for errors
ob_end_clean();
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
$header = getheader();
//define(PDF_HEADER_LOGO, $header['logo']);
$pdf->SetHeaderData($header['logo'], 1, $header['name'], $header['address'] . "\nTIN: ". $header['tin'] . "\nPhone: " . $header['phone'] . "\nFax: " . $header['fax'], array(0, 64, 255), array(0, 64, 128));
//$pdf->SetHeaderData($data);
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
// set color for background
$pdf->SetFillColor(255, 255, 200);

// set for font
$fontname = $pdf->addTTFfont('/path-to-font/DejaVuSans.ttf', 'TrueTypeUnicode', '', 32);
// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
$pdf->SetTopMargin(35);
$pdf->SetFont('helvetica', '', 20, '', 'false');
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setCellPaddings(2, 4, 0, 8);
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
        margin-top: 102px;
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
$pdf->MultiCell(55, 5, '[LEFT] ' . $txt, 1, 'L', 1, 0, '', '', true);
$pdf->MultiCell(55, 5, '[RIGHT] ' . $txt, 1, 'R', 0, 1, '', '', true);
$pdf->MultiCell(55, 5, '[CENTER] ' . $txt, 1, 'C', 0, 0, '', '', true);
$pdf->MultiCell(55, 5, '[JUSTIFY] ' . $txt . "\n", 1, 'J', 1, 2, '', '', true);
$pdf->MultiCell(55, 5, '[DEFAULT] ' . $txt, 1, '', 0, 1, '', '', true);


$pdf->Ln(100);

function data() {

    $client = new TblClient();
    $invoice = new TblNewInvoice();
    $invoiceamount = new TblInvoiceAmount();
    $taskline = array();
    $itemline = array();
    if (isset($_POST['invoiceid']) || is_numeric(Session::getSession('printinvoiceid'))) {
        $invoice = DAOFactory::getTblNewInvoiceDAO()->load(isset($_POST['invoiceid']) ? $_POST['invoiceid'] : Session::getSession('printinvoiceid'));
        $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
		$hmo = DAOFactory::getTblHmoDAO()->load($invoice->hmoId);
		$mopay = DAOFactory::getTblMopDAO()->load($invoice->mopId);
        foreach (DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoice->id) as $each) {
            $allinvoice = $each;
        }

        foreach (DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allinvoice->id) as $each) {
            $invoiceamount = $each;
        }
        $taskline = TblInvoiceLinesMySqlExtDAO::getTasks($invoice->id);
//        $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
//        return $_POST['invoiceid'];
    }
	
	
	
    $data = '<div id="newInvoice" style="border:solid 1px gray; text-align:center; padding:10px;">INVOICE</div>
				<br>
				<table class="tbleInvoice" style="cellpadding:1px;" >
					<tr class="invoicetr" style="nobr:true;">
						<td style="width:450px; font-size:12px; height:18px;">Patient Name: ' . ucwords($client->clientName) . '</td>
						<td style="width:200px;height:18px;">Invoice Number: ' . $invoice->invoiceNumber . '</td>
					</tr>
					<tr class="invoicetr">
						<td style="width:450px; height:18px;">Address: ' . ucwords($client->address) . '</td>
						<td style="width:200px;height:18px;">Invoice Date: ' . $invoice->dateIssued . '</td>
					</tr>
					
					<tr class="invoicetr">
						<td class="particularInvoice" style="width:450px;height:18px;">HMO: ' .($mopay->code ? (isset($hmo->hmoName) ? ucwords($hmo->hmoName) : '') : ''). '</td>
						<td style="width:200px;height:18px;">Due Date: ' . $invoice->dueDate . '</td>
					</tr>
					<tr class="invoicetr">
						<td class="particularInvoice" style="width:450px;height:18px;"></td>
						<td style="width:230px;height:18px;">Discount: ' . $invoice->discount . '%</td>
					</tr>
					<tr class="invoicetr">
						<td class="particularInvoice" style="width:450px;height:18px;">Particular: ' . $invoice->particular . '</td>
						<td style="width:200px;height:18px;"></td>
					</tr>
				</table>';

    $discounttotal = $subtotal = $vattotal = 0;
    if (count($taskline) > 0) {
        $data .= '<div style="margin-top:130px;" height=12px></div>' .
                ' <table class="tblInvoice2" style="border:solid 1px gray;" cellpadding="4">
                        <thead>
                            <tr class="newTblInv">
                                <th style="width:15%; height:23px;border:solid 1px gray;">Service No.</th>
                                <th style="width:15%; height:23px;border:solid 1px gray;text-align:center;">Hour</th>
                                <th style="width:40%; height:23px;border:solid 1px gray;">Description</th>
                                <th style="width:15%; height:23px;border:solid 1px gray;text-align:right">Rate</th>
                                <th style="width:15%; height:23px;border:solid 1px gray; text-align:right">Amount</th>
                            </tr>
                        </thead>';
        foreach ($taskline as $i => $task) {
            $data .='           <tr >' .
                    '<td style="width:15%; height:20px; padding:5px;" class="">' . $task->taskCode . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px; text-align:center;" class="">' . $task->hour . '</td>' .
                    '<td style="width:40%; height:20px; padding:5px;" class="">' . $task->description . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px; text-align:right" class="">' . number_format((float) $task->rate, 2) . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px; text-align:right" class="">' . number_format((float) $task->netAmount, 2) . '</td>' .
                    '</tr>';
        }
        $data .='       </table>';
    }

//    if (count($itemline) > 0) {
//        $data .='<div></div>' .
//                '  <table class="tblInvoice2" style="border:solid 1px black;" cellpadding="4">
//                        <thead>
//                            <tr class="newTblInv">
//                                <th style="width:15%; height:23px;border:solid 1px black;cellpadding:4px;">Item No.</th>
//                                <th style="width:15%; height:23px; border:solid 1px black; text-align:center;">Quantity</th>
//                                <th style="width:40%; height:23px; border:solid 1px black;">Description</th>
//                                <th style="width:15%; height:23px; border:solid 1px black;text-align:right">Unit Cost</th>
//                                <th style="width:15%; height:23px;border:solid 1px black;text-align:right">Amount</th>
//                            </tr>
//                        </thead>';
//        foreach ($itemline as $i => $item) {
//            $data .='<tr >' .
//                    '<td style="width:15%; height:20px; cellpadding:4px;" class="">' . $item->itemCode . '</td>' .
//                    '<td style="width:15%; height:20px; padding:5px; text-align:center;"  class="">' . $item->quantity . '</td>' .
//                    '<td style="width:40%; height:20px; padding:5px;" class="">' . $item->description . '</td>' .
//                    '<td style="width:15%; height:20px; padding:5px;text-align:right" class="">' . number_format((float) $item->unitCost, 2) . '</td>' .
//                    '<td style="width:15%; height:20px; padding:5px;text-align:right" class="">' . number_format((float) $item->netAmount, 2) . '</td>' .
//                    '</tr>';
//        }
//        $data .= '</table><br><br>';
//    }
	 $data .= '<br><br>';
    $data .= ' <table class="" style="">' .
            '<tr>' .
            '<td class="" style="font-size:12px;height:18px;width:326px; border:none;" cellpadding="4";></td>' .
            '<td class="SAInvoice" style="font-size:12px;height:18px;width:130px;" cellpadding="4";>Service Amount:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right; width:160px;" cellpadding="4">' . number_format((float) $invoiceamount->subTotalAmount, 2) . '</td>' .
            '</tr>' .
            '<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";></td>' .
            '<td class="SAInvoice2" style="">Vat 12%:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;">' . number_format((float) $invoiceamount->vatAmount, 2) . '</td>' .
            '</tr>' .
            '<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";></td>' .
            '<td class="SAInvoice2" style="">Discount:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;">' . number_format((float) $invoiceamount->discountAmount, 2) . '</td>' .
            '</tr>' .
            '<tr class="" cellpadding="4">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";></td>' .
            '<td class="SAInvoice3" cellpadding="4" style="background-color: #C8C8C8;">Grand Total:</td>' .
            '<td style="font-size:12px;height:18px; black;text-align:right;background-color: #C8C8C8;" cellpadding="4">' . number_format((float) $invoiceamount->grandTotal, 2) . '</td>' .
            '</tr>' .
            '<tr class="" cellpadding="4">' .
            '<td colspan="3" cellpadding="4";></td>' .
            '</tr>' .
            '<tr class="" cellpadding="4">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";>Remarks</td>' .
            '<td class="SAInvoice3" cellpadding="4" style=""></td>' .
            '<td style="font-size:12px;height:18px;" cellpadding="4"></td>' .
            '</tr>' .
            '<tr class="" cellpadding="4">' .
            '<td colspan="3" style="font-size:12px;height:120px; border:solid 1px black;">' . $invoice->remarks . '</td>' .
            '</tr>' .
            '</table>';

    return $data;
}

function getheader() {
    $company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));


    $client = new TblClient();
    $invoice = new TblNewInvoice();

    $logoexist = '';
    if (file_exists("public/companylogo/" . Session::getSession('medorgid') . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName)) {
        $logoexist = 'existt';
    }

    $array = array("logo" => ($logoexist != '') ? Session::getSession("medorgid") . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName : '',
        "name" => DAOFactory::getTblOrganizationDAO()->load(Session::getSession("medorgid"))->orgName,
        "address" => $company->address, "tin" => $company->tinNum, "phone" => $company->phoneNum, "fax" => $company->faxNum, "clientName" => $client->clientName);

    $data = '<div id="newInvoice" style="border:solid 1px black; text-align:center; padding:10px;">INVOICE</div>
				<br>
				<table class="tbleInvoice" style="cellpadding:1px;" >
					<tr class="invoicetr" style="nobr:true;">
						<td style="width:450px; font-size:12px; height:18px;">Client Name: ' . $client->clientName . '</td>
						<td style="width:200px;height:18px;">Invoice Number: ' . $invoice->invoiceNumber . '</td>
					</tr>
					<tr class="invoicetr">
						<td style="width:450px; height:18px;">Address: ' . $client->address . '</td>
						<td style="width:200px;height:18px;">Invoice Date: ' . $invoice->dateIssued . '</td>
					</tr>
					
					<tr class="invoicetr">
						<td class="particularInvoice" style="width:450px;height:18px;"></td>
						<td style="width:200px;height:18px;">Due Date: ' . $invoice->dueDate . '</td>
					</tr>
					<tr class="invoicetr">
						<td class="particularInvoice" style="width:450px;height:18px;">Particular: ' . $invoice->particular . '</td>
						<td style="width:230px;height:18px;">P.O. / S.O: ' . $invoice->pOSO . '</td>
					</tr>
					<tr class="invoicetr">
						<td class="particularInvoice" style="width:450px;height:18px;"></td>
						<td style="width:200px;height:18px;">Discount: ' . $invoice->discount . '%</td>
					</tr>
				</table>';

    return $array;
}
