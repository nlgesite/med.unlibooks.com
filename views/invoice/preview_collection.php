<style>
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
    .mainbodyrintcollection{
        width:100%;
    }
    .mainformcollection{
        width:800px;
        margin:auto;
        padding:10px;
        background-color:#fff;
        margin-top:30px;
    }
    .upcontainer{
        float: right;
        font-family: verdana;
        font-size: 12px;
        margin-top: -75px;
    }
    .dateclass{
        width: 90px;
        margin-left: 5px;
    }
    .containercol{
        margin: 35px;
        font-family: verdana;
        font-size: 12px;
    }
    .datecontainer{
        width:191px;
    }
    .tddate{
        text-align:right;
    }
    .textdate{
        border-bottom:solid 1px #000;
    }	
    .img2 {
        position: absolute;
        margin-left: 28px;
        height: 17px;
        z-index: -1;
        top: 209px;
    }
    .contextcontainer{
        width:100%;
        margin-top:20px;
    }
    .rf{
        width: 288px;
		border: none;
		border-bottom: solid 1px #000;
    }
    .addresscontainer{
        width: 266px;
		border: none;
		border-bottom: solid 1px #000;
    }
    .insum{
        width: 619px;
		border: none;
		border-bottom: solid 1px #000;
    }	
    .divall{
        margin-top:5px;
    }
    .fullpay{
        width: 563px;
		border: none;
		border-bottom: solid 1px #000;
    }
    .signature{
        text-align: right;
        margin-right: 8px;
        margin-top: 40px;
    }
    .sign{
        width: 288px;
		border: none;
		border-bottom: solid 1px #000;
    }
    .orgname{
        font-weight:bold;
        font-size:14px;
    }
    .colreceipt{
        font-size:22px; 
        font-family: bold;
        padding-top: 15px;
    }
    .closeprint{
        width: 23px;
        border: none;
        float: right;
        margin-top: -27px;
        margin-right: -15px;
    }

    span{
        text-decoration: underline;
    }
	.ar{
		margin-right: 61px;
		margin-top: 5px;
		border: none;
		
	}
</style>
<?php
//$orgInfo = $this->orgInfo;
//$org = $this->org;
$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));

$info = new TblOrganizationInfo();
$org = new TblOrganization();

if (Session::getSession('meduser')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    Session::setSession('medinfoid', $info->id);
}
//print_r($_POST['paymentid']); exit;
if (isset($_POST['paymentid'])) {

    $paymentview = TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid']);
//    print_r($_POST['paymentid']);
}
?>

<?php
if ($paymentview) {
    require_once ('public/inwords.php');
    Session::setSession('paymentid', $paymentview[0]->paymentid);

    $hmo = DAOFactory::getTblHmoDAO()->load($paymentview[0]->hmoId);
    $parts = explode('.', $paymentview[0]->appliedAmount);
    $words = inwords::convert_number_to_words($parts[0]); //$inwords->in_words(324); //in_words->show_words($paymentview[0]->appliedAmount);
    $words .= ($parts[1] > 0)? ' and ' . inwords::convert_number_to_words($parts[1]) . ' cents' :'';
    $words .= ' only';
    ?>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
    <div class="mainbodyrintcollection">
        <div class="mainformcollection boxshadow">
            <div class="containercol">
                <input type="button" class="closePrint popx" value="">
                <div style="text-align:center;margin-top:5px;">

                    <ul class="companyInfo">
                        <li class="orgname"><?= strtoupper($org->orgName) ?></li>
                        <li><?= $info->address ?></li>
                        <li>Reg. TIN.: <?= $info->tinNum ?></li>
                    </ul>
                    <ul>
                        <li class="colreceipt">COLLECTION RECEIPT</li>
                    </ul>

                </div>
                <div class="upcontainer">
                    <table class="datecontainer">
                        <tr>
                            <td class="tddate">Date:<span><?php echo date('m/d/Y', strtotime($paymentview[0]->dateReceived)) ?></span></td>
                        </tr>
                        <tr>
                            <td class="tddate">Collection no.:<span><?php echo $paymentview[0]->colNum ?></span></td>
                        </tr>
                    </table>
                </div>

                <div class="contextcontainer">
                    <div class="divall"> &nbsp &nbsp Received From <input type="text" readonly class="rf"  value="<?php echo $hmo->hmoName ?>"> with TIN <input type="text" class="addresscontainer" readonly value="<?php echo $hmo->tin ?>"></div>
                    <div class="divall">with address at <input type="text" class="insum" readonly value="<?php echo $hmo->address ?>"></div>
                    <div class="divall">the sum of pesos <span><?php echo $words ?></span> ( Php <span><?php echo number_format($paymentview[0]->appliedAmount,2) ?></span> )</div>
                    <div class="divall">In partial/full payment of <input type="text" class="fullpay" readonly value="<?php echo $paymentview[0]->invoiceNumber ?>"></div>
                </div>
				
				

                <div class="signature">
                    <div>By:<input type="text" class="sign"></div>
					<div class="ar">Authorized Representative</div>
                </div>
            </div>
        </div>

    </div>
<?php } ?>