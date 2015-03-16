<?php
    class Index_Model extends Model{
        public function __construct() {
            parent::__construct();
        }
		
		function login() { 
        $email = isset($_POST['email']) ? ($_POST['email']) : '';
        $password = isset($_POST['password']) ? ($_POST['password']) : '';
        $usermail = DAOFactory::getTblUserDAO()->queryByEmailAddress($email);
        if ($usermail) {
            $user2 = '';
            foreach ($usermail as $each) {
//				if(md5($password) == $each->password){
//					$user2 = $each;
//				}
                if ($password == $each->password) {
                    $user2 = $each;
                }
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
        } else {
            echo 'Username/Password Not Found!';
        }
    }
		
    }
?>
