<?php

// *** *** *** *** *** CREATE SUBDOMAIN *** *** *** *** *** //

	define('HOST','unlibooks.com');
	define('CPANELUSER','unlibooks');
	define('CPANELPASS','sjc-123');
	define('CPANEL_SKIN','x3');
	define('DOMAIN','med.unlibooks.com');
	define('SUBDOMAIN',strtolower($subdomain));

	echo '
		<script>
			document.getElementById("Loaded").style.width = "8%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Creating Subdomain...<br/>";
	
	$cpaneluser= CPANELUSER;
	$cpanelpass= CPANELPASS;
	$cpanel_skin = CPANEL_SKIN;

	$doms = array( DOMAIN . ";" . SUBDOMAIN );

	function subd($host,$port,$ownername,$passw,$request) {

		$sock = fsockopen('localhost',2082);
		if(!$sock) {
			print('Socket error');
			exit();
		}

		$authstr = "$ownername:$passw";
		$pass = base64_encode($authstr);
		$in = "GET $request\r\n";
		$in .= "HTTP/1.0\r\n";
		$in .= "Host:$host\r\n";
		$in .= "Authorization: Basic $pass\r\n";
		$in .= "\r\n";

		fputs($sock, $in);
		
		while (!feof($sock)) {
			$result .= fgets ($sock,128);
		}
		
		fclose( $sock );

		return $result;
	}

	$subd = "";

	foreach($doms as $dom) {
		$lines = explode(';',$dom);

		$domain = trim($lines[0]);
		$subd = trim($lines[1]);

		$request = "/frontend/$cpanel_skin/subdomain/doadddomain.html?rootdomain=$domain&domain=$subd&dir=subdomains/med";
		$result = subd('localhost',2082,$cpaneluser,$cpanelpass,$request);

	}

	echo '
		<script>
			document.getElementById("Loaded").style.width = "25%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Securing Subdomain...<br/>";
	
	sleep(5);

//  *** *** *** *** *** CREATE DATABASE *** *** *** *** *** //

	echo '
		<script>
			document.getElementById("Loaded").style.width = "30%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Creating Database...<br/>";
	
	include("xmlapi.php");

	$databasename = 'med_for_'.$subd;
	$databaseuser = 'clients'; // Warning: in most of cases this can't be longer than 8 characters
	$databasepass = 'sjc-123'; // Warning: be sure the password is strong enough, else the CPanel will reject it

	$xmlapi = new xmlapi(HOST);    
	$xmlapi->password_auth("".CPANELUSER."","".CPANELPASS."");    
	$xmlapi->set_port(2082);
	$xmlapi->set_debug(1);//output actions in the error log 1 for true and 0 false  
	$xmlapi->set_output('array');//set this for browser output  
	//create database    
	$createdb = $xmlapi->api1_query(CPANELUSER, "Mysql", "adddb", array($databasename));   
	//create user 
	$usr = $xmlapi->api1_query(CPANELUSER, "Mysql", "adduser", array($databaseuser, $databasepass));
	 //add user 
	$addusr = $xmlapi->api1_query(CPANELUSER, "Mysql", "adduserdb", array("unlibook_".$databasename."", "unlibook_".$databaseuser."", 'all'));


	echo '
		<script>
			document.getElementById("Loaded").style.width = "45%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Securing Database...<br/>";
	
	sleep(5);
	
	echo '
		<script>
			document.getElementById("Loaded").style.width = "50%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Establishing Connection to Database...<br/>";
	
	$conn = new mysqli('localhost', "unlibook_".$databaseuser, $databasepass, "unlibook_".$databasename);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 


	echo '
		<script>
			document.getElementById("Loaded").style.width = "55%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Configuring database structure...<br/>";
	
	$filename = "/home/unlibooks/public_html/subdomains/generate_med_database.sql";
	$handle = fopen($filename, "rb");
	$sql = fread($handle, filesize($filename));
	fclose($handle);
	
	if ($conn->multi_query($sql) === TRUE) {
		$conn->close();
	} else {
		echo "Error Setting up Data Tables: " . $conn->error;
		$conn->close();
		exit;
	}
	
	echo '
		<script>
			document.getElementById("Loaded").style.width = "60%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Waiting for the Subdomain to response...<br/>";
	
	sleep(10);
	
	require_once('registration/include_dao.php');
	
	echo '
		<script>
			document.getElementById("Loaded").style.width = "70%";
		</script>
	';
	//echo "[".SUBDOMAIN."@med.unlibooks.com]: Saving subdomain.<br/>";
	
	$account = new MedAccount;

	$account->subdomain = $subdomain;
	$account->databaseName = $databasename;
	$account->databaseUser = $databaseuser;
	$account->dateRegistered = $databasepass;
	$account->accountName = $_POST['orgname'];
	$account->suffix = $code;
	$account->email = $_POST['email'];
	$account->verified = 0;
	
	$mainId = DAOFactory2::getMedAccountsDAO()->insert($account);

	sleep(5);

// *** *** *** *** *** END *** *** *** *** *** //

?>