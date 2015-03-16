<?php

class User_Model extends Model {

    function __construct() {
        parent::__construct();
    }
	
    function register() {
        $result = $this->uploadFile('');

        if ($result == '') {
            $user = new TblUser();
            $organization = new TblOrganization();
            $orginfo = new TblOrganizationInfo();

            $organization->orgName = $_POST['orgname'];
            $organization->dateCreated = date('Y-m-d');

            $org_id = DAOFactory::getTblOrganizationDAO()->insert($organization);
            $orginfo->orgId = $org_id;
            $orginfo->emailAddress = $_POST['email'];
            $orginfo->dateCreated = date('Y-m-d');
            $orginfo->address = $_POST['address'];
            $orginfo->phoneNum = $_POST['phoneNum'];
            $orginfo->faxNum = $_POST['faxNum'];
            $orginfo->tinNum = $_POST['tinNum'];
            $orginfo->rdoCode = $_POST['rdoCode'];
            $orginfo->zipCode = $_POST['zipCode'];
            $orginfo->lineOfBusiness = $_POST['lineOfBusiness'];
            $orginfo->modeOfPayment = $_POST['modeOfPayment'];
            $orginfo->typeOfTax = $_POST['typeOfTax'];
            $orginfo->logoName = pathinfo($_FILES["logoName"]["name"], PATHINFO_EXTENSION);
            $orginfo_id = DAOFactory::getTblOrganizationInfoDAO()->insert($orginfo);

            $user->orgInfoId = $orginfo_id;
            $user->userNo = sprintf('%1$04d', $org_id);
            $user->fullName = $_POST['name'];
            $user->emailAddress = $_POST['email'];
            
//            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->password = $_POST['password'];
            $user->dateCreated = date('Y-m-d');
            $user->type = 'admin';

            $user_id = DAOFactory::getTblUserDAO()->insert($user);

            Session::setSession('meduser', $user_id);
            Session::setSession('medinfoid', $orginfo_id);
            Session::setSession('medorgid', $org_id);

            $this->setCoaOrg($org_id);
            $this->uploadFile($org_id);

            return true;
        } else {
            return $result;
        }
    }
	
	/**	@ Use this for online registration (Code Version 15.02.09.08.57)
	 *		- Leave this as is if not yet uploaded
	 */

	function register_online() {
        $result = $this->uploadFile('');

        if ($result == '' && isset($_POST['orgname'])) {
        
            include_once("registration/ubload.php");
            
            //echo "
            //	<style>
            //		body{letter-spacing: 1px; font: 12px Arial; color: white; background-color: black; margin: 0; padding: 0; font-weight: bold;}
            //	</style>
            //";
        
            //echo "<body>";
            //echo "Configuring your account. Please wait. This will only take a minute.<br/>";
            //echo "All rights reserve - UNLIBOOKS FOR MEDICAL PRACTICIONER 2015.<br/><br/>";
        
            $mainId = 1;
            require_once('registration/index.php');
            require_once('registration/subdomain.php');
            
	    echo '
		<script>
			document.getElementById("Loaded").style.width = "80%";
		</script>
	    ';
	    //echo "[".SUBDOMAIN."@med.unlibooks.com]: Saving basic information.<br/>";
	    
            $user = new TblUser();
            $organization = new TblOrganization();
            $orginfo = new TblOrganizationInfo();

            $organization->orgName = $_POST['orgname'];
            $organization->dateCreated = date('Y-m-d');

            $org_id = DAOFactory::getTblOrganizationDAO()->insert($organization);
            $orginfo->orgId = $org_id;
            $orginfo->emailAddress = $_POST['email'];
            $orginfo->dateCreated = date('Y-m-d');
            $orginfo->address = $_POST['address'];
            $orginfo->phoneNum = $_POST['phoneNum'];
            $orginfo->faxNum = $_POST['faxNum'];
            $orginfo->tinNum = $_POST['tinNum'];
            $orginfo->rdoCode = $_POST['rdoCode'];
            $orginfo->zipCode = $_POST['zipCode'];
            $orginfo->lineOfBusiness = $_POST['lineOfBusiness'];
            $orginfo->modeOfPayment = $_POST['modeOfPayment'];
            $orginfo->typeOfTax = $_POST['typeOfTax'];
            $orginfo->logoName = pathinfo($_FILES["logoName"]["name"], PATHINFO_EXTENSION);
            $orginfo_id = DAOFactory::getTblOrganizationInfoDAO()->insert($orginfo);

            $user->orgInfoId = $orginfo_id;
            $user->userNo = sprintf('%1$04d', $org_id);
            $user->fullName = $_POST['name'];
            $user->emailAddress = $_POST['email'];
			$user->password = $_POST['password'];
            //$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //$user->password = $hashedPassword;//$_POST['password'];
            $user->dateCreated = date('Y-m-d');
            $user->type = 'admin';

            $user_id = DAOFactory::getTblUserDAO()->insert($user);

            // Session::setSession('meduser', $user_id);
            // Session::setSession('medinfoid', $orginfo_id);
            // Session::setSession('medorgid', $org_id);

            $this->setCoaOrg($org_id);
            $this->uploadFile($org_id);

	// *** *** *** *** *** VALIDATE RECEIPT *** *** *** *** *** //

            if(isset($_POST["receipt"]) && $_POST["receipt"] != ""){
            	    
	    	    //echo "[".SUBDOMAIN."@med.unlibooks.com]: Setting up subscription...<br/>";
            
            	    $subscribed = DAOFactory2::getAmApiSubscriptionDAO()->queryByReceiptId($_POST["receipt"]);
            	    
            	    if(empty($subscribed)){
            	    
			    require_once('registration/amember_api.php');
			    
			    $amember = new AmemberAPI;
			    
			    // *** validate receipt *** //
			    
			    $result = $amember::validate_receipt($_POST["receipt"]);
			    
			    $product = DAOFactory::getAmApiProductDAO()->queryByTitle($result->s_product);
			    
			    // *** get expiration *** //
			    
			    $expiration = $amember::get_expiration($result->s_user_id, $result->s_product);
			    
			    // *** saving subscription *** //
			    
			    @require_once('registration/include_dao.php');
			    
			    $subscription = new AmApiSubscription;
			    $subscription2 = new AmApiSubscription2;
			    
			    $subscription->ubUserId 	= $user_id;
			    $subscription2->ubUserId	= $mainId;	// Should be the main id
			    $subscription2->amUserId 	= $subscription->amUserId 	= $result->s_user_id;
			    $subscription2->productId 	= $subscription->productId 	= $product[0]->id;
			    $subscription2->dateStart 	= $subscription->dateStart 	= date("Y-m-d H:i:s", strtotime($result->s_date_started));
			    $subscription2->expiration 	= $subscription->expiration 	= date("Y-m-d H:i:s", strtotime($expiration->s_date_expiration));
			    $subscription2->receiptId 	= $subscription->receiptId 	= $_POST["receipt"];
			    $subscription2->status 	= $subscription->status 		= "active";
			    
			    DAOFactory::getAmApiSubscriptionDAO()->insert($subscription);
			    DAOFactory2::getAmApiSubscriptionDAO()->insert($subscription2);
		    
		            /**  This session is assume to set at registration page when 
		             *   receipt is set in the link that came from the amember
		             */
		            
		    	    if(isset($_SESSION['receipt'])) unset($_SESSION['receipt']);
		    
		    } else {
            	    
	    	            //echo "[".SUBDOMAIN."@med.unlibooks.com]: Subscription Failed! Receipt is already used. You will be registered in Trial Version...<br/>";	
		    
		    }
	    }

	    echo '
		<script>
			document.getElementById("Loaded").style.width = "90%";
		</script>
	    ';
	    //echo "[".SUBDOMAIN."@med.unlibooks.com]: (If an error occured, just refresh the page.)...<br/>";
	    sleep(5);

	    require_once('registration/ubemail.php');

	    $to      = $_POST['email'];
	    $subject = 'Welcome to UNLIBOOKS MEDICAL';
	    $headers  = 'MIME-Version: 1.0' . "\r\n";
	    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	    // Additional headers
	    $headers .= 'To: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";
	    $headers .= 'From: UNLIBOOKS MEDICAL <webmaster_med@example.com>' . "\r\n";
	    $headers .= 'Bcc: nlgesite@scp-ph.com' . "\r\n";

	    $message = _CreateEmailMessage($_POST['email'],SUBDOMAIN);

	    mail($to, $subject, $message, $headers);

	// *** *** *** *** *** END *** *** *** *** *** //

	    echo '
		<script>
			document.getElementById("Loaded").style.width = "100%";
		</script>
	    ';
	    //echo "[".SUBDOMAIN."@med.unlibooks.com]: Completed!<br/>";
            //echo "</body>";
	    sleep(1);

	    echo '
		<form action="http://'. SUBDOMAIN .'.med.unlibooks.com/login/userLogin" method="POST" id="myForm" style="display: none">
			<input type="text" name="email" value="'.$_POST['email'].'"/>
			<input type="password" name="password" value="'.$_POST['password'].'"/>
			<input type="text" name="redirect" value="http://'. SUBDOMAIN .'.med.unlibooks.com/"/>
			<input type="submit">
		</form>
		<script type="text/javascript">
			document.getElementById("myForm").submit();
		</script>
	    ';

            return true;
        } else {
            return $result;
        }
    }

    function uploadFile($id) {
        chmod("public/companylogo/", 0755);

        if (isset($_FILES["logoName"]) && !empty($_FILES["logoName"]) && $id != '') {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["logoName"]["name"]);
            $extension = end($temp);

            if (($_FILES["logoName"]["size"] < 20000) && in_array($extension, $allowedExts)) {

                if ($_FILES["logoName"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                } else {
                    if (file_exists("public/companylogo/" . Session::getSession('medorgid') . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName)) {
                        echo Session::getSession('medorgid') . " already exists. ";
                    } elseif ($id != '') {
                        move_uploaded_file($_FILES["logoName"]["tmp_name"], 'public/companylogo/' . Session::getSession('medorgid') . '.' . $extension);
                    }
                }
            } else {
                echo "Invalid file"; 
            }
        }
    }

    function setCoaOrg($orgid) {
        $coas = DAOFactory::getAdminCoaDAO()->queryBySubAccount('');

        foreach ($coas as $coa) {
            $tblcoa = new TblCoa();
            $tblcoa->orgId = $orgid;
            $tblcoa->accontName = $coa->accountName;
            $tblcoa->accountNum = $coa->accountNum;
            $tblcoa->accountType = $coa->accountType;
            $tblcoa->activeAccount = 'yes';
            $tblcoa->description = $coa->description;
            $tblcoa->incomeBalanceSheet = $coa->incomeBalanceSheet;

            $id = DAOFactory::getTblCoaDAO()->insert($tblcoa);

            $subcoas = DAOFactory::getAdminCoaDAO()->queryBySubAccount($coa->id);

            foreach ($subcoas as $subcoa) {
                $tblcoa = new TblCoa();
                $tblcoa->orgId = $orgid;
                $tblcoa->subAccount = $id;
                $tblcoa->accontName = $subcoa->accountName;
                $tblcoa->accountNum = $subcoa->accountNum;
                $tblcoa->accountType = $subcoa->accountType;
                $tblcoa->activeAccount = 'yes';
                $tblcoa->description = $subcoa->description;
                $tblcoa->incomeBalanceSheet = $subcoa->incomeBalanceSheet;

                $coaid = DAOFactory::getTblCoaDAO()->insert($tblcoa);
                
//                $tbalance = new TblTrialBalance();
//                $tbalance->coaId = $coaid;
//                DAOFactory::getTblTrialBalanceDAO()->insert($tbalance);
            }
        }
    }

    function resetPassword() {
        $user = DAOFactory::getTblUserDAO()->queryByEmailAddress($_POST['email']);
        $randompasswprd = $this->randomPassword();
        if ($user) {
            $hashedPassword = password_hash($randompasswprd, PASSWORD_DEFAULT);
            $user[0]->password = $hashedPassword;
            DAOFactory::getTblUserDAO()->update($user[0]);
        }

        $txt = 'Your new password is ' . $randompasswprd;
        $subject = 'User Tax Consult';
        $from = 'Unlibooks Team<support@taxpirin.com>';
        $to = $_POST['email'];
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $from . "\r\n";
        $headers .= 'Bcc: admin@unilibooks.com' . "\r\n";
        //*
        if (mail($to, $subject, $txt, $headers)) {
            return true;
        } else {
            return false;
        }//*/
    }

    function checkEmail() {
        $result = DAOFactory::getTblUserDAO()->queryByEmailAddress($_POST['email']);
        echo count($result);
    }

    function checkEmail_online() {
    	@require_once('registration/include_dao.php');
    	$result = DAOFactory2::getMedAccountsDAO()->queryByEmail($_POST['email']);
        
        echo count($result);
    }

    function checkOrganization() {
        $result = DAOFactory::getTblOrganizationDAO()->queryByOrgName($_POST['org']);
        echo count($result);
    }

    function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        
        return implode($pass); //turn the array into a string
    }

}

?>
