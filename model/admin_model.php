<?php
class Admin_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function login() { 
        $username = isset($_POST['username']) ? ($_POST['username']) : '';
        $password = isset($_POST['password']) ? ($_POST['password']) : '';
        $usermail = DAOFactory::getTblUserDAO()->queryByUsername($username);
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

            Session::setSession('user', $array['id']);
        } else {
            echo 'Username/Password Not Found!';
        }
    }

}
