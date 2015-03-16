<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    /** 	@ This is the login function used at every login pages
     * 		- Code Version 15.02.09.08.40 (Please update version every update)
     * 		- Documentation added by NLGESITE
     */
    function login() {

        $email = isset($_POST['email']) ? ($_POST['email']) : '';     // Get submitted email else set as empty
        $password = isset($_POST['password']) ? ($_POST['password']) : '';  // Get submitted password else set as empty

        /** 	@ Query all users that has the same email as entered by the user.
         *
         * 		- check all the user by looking for the account who has the
         * 		  password sames as entered by the user. (USING LOOP)
         *
         * 		- set the found user with the same email and password
         * 		  as the user and SET a SESSION for the user.
         *
         * 		- Reloading the page will validate if the current user has
         * 		  a session and redirect the user to DASHBOARD (current)
         */
        $usermail = DAOFactory::getTblUserDAO()->queryByEmailAddress($email);
        $hashedPassword = $password; //password_hash($password, PASSWORD_DEFAULT);
        if ($usermail) {
            $user2 = '';
            foreach ($usermail as $each) { 
//                if ($hashedPassword == $each->password) {
//                    
//                    $user2 = $each;
//                }

				if (($each->password == $hashedPassword)) {
                //if (password_verify($each->password, $hashedPassword)) {
                    $user2 = $each;
                }
                // Hash the password.  $hashedPassword will be a 60-character string.
//                    $hashedPassword = password_hash('my super cool password', PASSWORD_DEFAULT);
                // You can now safely store the contents of $hashedPassword in your database!
                // Check if a user has provided the correct password by comparing what they typed with our hash
//                    password_verify('the wrong password', $hashedPassword); // false
//                    password_verify('my super cool password', $hashedPassword); // true
            }

            if ($user2 == '') {
                echo 'Incorrect Username/Password!';
                return false;
            }

            $array = array();
            foreach ($user2 as $var => $val) {
                $array[$var] = $val;
            }

            Session::setSession('meduser', $array['id']);
            Session::setSession('medorgid', DAOFactory::getTblOrganizationInfoDAO()->load($array['orgInfoId'])->orgId);
            Session::setSession('medinfoid', $array['orgInfoId']);

            if (isset($_POST['redirect'])) {
                header("location: " . $_POST['redirect'] . "");
            }
        } else {
            echo 'Username/Password Not Found!';
        }
    }
	
	function login_online() {

		if(SUBDOMAIN != "SUBDOMAIN"){

	        $email = isset($_POST['email']) ? ($_POST['email']) : '';     // Get submitted email else set as empty
	        $password = isset($_POST['password']) ? ($_POST['password']) : '';  // Get submitted password else set as empty
	
	        /** 	@ Query all users that has the same email as entered by the user.
	         *
	         * 		- check all the user by looking for the account who has the
	         * 		  password sames as entered by the user. (USING LOOP)
	         *
	         * 		- set the found user with the same email and password
	         * 		  as the user and SET a SESSION for the user.
	         *
	         * 		- Reloading the page will validate if the current user has
	         * 		  a session and redirect the user to DASHBOARD (current)
	         */
	        $usermail = DAOFactory::getTblUserDAO()->queryByEmailAddress($email);
	        $hashedPassword = $password;//password_hash($password, PASSWORD_DEFAULT);
	        if ($usermail) {
	            $user2 = '';
	            foreach ($usermail as $each) { 
	//                if ($hashedPassword == $each->password) {
	//                    
	//                    $user2 = $each;
	//                }
	
	                //if (password_verify($each->password, $hashedPassword)) {
	                if (($each->password == $hashedPassword)) {
	                    $user2 = $each;
	                }
	                // Hash the password.  $hashedPassword will be a 60-character string.
	//                    $hashedPassword = password_hash('my super cool password', PASSWORD_DEFAULT);
	                // You can now safely store the contents of $hashedPassword in your database!
	                // Check if a user has provided the correct password by comparing what they typed with our hash
	//                    password_verify('the wrong password', $hashedPassword); // false
	//                    password_verify('my super cool password', $hashedPassword); // true
	            }
	
	            if ($user2 == '') {
	                echo 'Incorrect Username/Password!';
	                return false;
	            }
	
	            $array = array();
	            foreach ($user2 as $var => $val) {
	                $array[$var] = $val;
	            }
	
	            Session::setSession('meduser', $array['id']);
	            Session::setSession('medorgid', DAOFactory::getTblOrganizationInfoDAO()->load($array['orgInfoId'])->orgId);
	            Session::setSession('medinfoid', $array['orgInfoId']);
	
	            if (isset($_POST['redirect'])) {
	                header("location: " . $_POST['redirect'] . "");
	            }
	        } else {
	            echo 'Username/Password Not Found!';
	        }
        
        } else if(isset($_POST['task']) && $_POST['task'] == "get subdomain"){
        
        	require_once('registration/include_dao.php');
        	
        	$account = DAOFactory2::getMedAccountsDAO()->queryByEmail($_POST['email']);
        	
        	if(!empty($account[0])){
        		echo $account[0]->subdomain;
        	} else {
        		echo "-s";
        	}
        
        } else if(isset($_POST['subdomain'])){
        	echo '
			<form action="http://'. $_POST['subdomain'] .'.med.unlibooks.com/login/userLogin" method="POST" id="myForm" style="display: none">
				<input type="text" name="email" value="'.$_POST['email'].'"/>
				<input type="password" name="password" value="'.$_POST['password'].'"/>
				<input type="text" name="redirect" value="http://'. $_POST['subdomain'] .'.med.unlibooks.com/"/>
				<input type="submit">
			</form>
			<script type="text/javascript">
				document.getElementById("myForm").submit();
			</script>
		    ';
        } else {
        	echo 'No Subdomain';
        }
        
                
    }

}
