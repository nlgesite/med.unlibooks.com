<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
    }

    function logout() {
        Session::destroy();
        header('location: ' . URL . 'login');
    }

    public function userRegister() {
        $result = $this->model->register();
        if ($result) {
            header('location: ' . URL . 'dashboard');
        }
        else {
            echo '<script>alert("' . $result . '");window.history.go(-1);</script>';
        }
    }

    public function checkEmail() {
        $this->model->checkEmail();
    }

   
    public function checkOrganization() {
        $this->model->checkOrganization();
    }
    
    public function checkfileUpload(){
//        print_r($expression)
        if (isset($_FILES["data"]) && !empty($_FILES["data"])) {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["data"]["name"]);
            $extension = end($temp);

            if (($_FILES["logoName"]["size"] < 20000) && in_array($extension, $allowedExts)) {

                if ($_FILES["logoName"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["data"]["error"] . "<br>";
                } 
            } else {
                echo "Invalid file" . $_FILES["data"]["size"];
            }
        }
    }

}
