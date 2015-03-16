<?php

class Bootstrap {

    function __construct() {
        //start session
        Session::init();

        $link = isset($_GET['url']) ? $_GET['url'] : null;

        $arrayLink = explode('/', trim($link, '/'));
        //print_r($arrayLink);

        $class = strtolower($arrayLink[0]);
        $function = isset($arrayLink[1]) ? $arrayLink[1] : 'index';
        $file = isset($arrayLink[2]) ? $arrayLink[2] : 'index';
        $path = 'controllers/' . $class . '.php';

        Session::setSession('class', ($class != '' ? $class : 'Home'));
        Session::setSession('function', $function);
//        echo $function;
        if ($class == 'tax_return') {
            Session::setSession('form', $function);
        }

        if ($class == '') {
            $class = 'index';
            $path = 'controllers/' . $class . '.php';
        }
        $this->checkUrl($class, $function);

        $this->checkUser($class);
		
        if (file_exists($path)) {
            require $path; 
            if (class_exists($class)) {
                $mainClass = new $class();

                $mainClass->loadModel($class);
                if (method_exists($class, $function)) {
                    if (isset($arrayLink[2])) {
                        $mainClass->{$function}($arrayLink[2]);
                    } else {
                        $mainClass->{$function}('');
                    }
                } else {
                    $this->error();
                }
            } else {
                $this->error();
            }
        } else {
            $this->error();
        }
    }

    function checkUrl($class, $function) {
        $class = strtoupper($class);
        $function = strtoupper($function);
        if ($class == 'LOGIN2') {
            require_once 'controllers/login.php';
            $mainClass = new Login();
            $mainClass->index();
            exit;
        } elseif ($class == 'REGISTER') {
            require_once 'controllers/login.php';
            $mainClass = new Login();
            $mainClass->register();
            exit;
        } elseif ($class == 'FORGOTPASSWORD') {
            require_once 'controllers/login.php';
            $mainClass = new Login();
            $mainClass->reset();
            exit;
        }
    }

    function error() {
        $views = new Views();
        $views->msg = 'An error occur!</br>Page not Found!';
        $views->render('views/error/index.php');
        exit;
    }

    function checkUser($class) {
  //      $class = strtolower($class);       // print_r(Session::getSession('user')); exit;
//        echo $class; exit;
        if($class == 'dashboard' || $class == 'invoice' || $class == 'expenses' || $class == 'timetracking' || $class == 'setting' || $class == 'report2') {
            if (Session::getSession('meduser') == null) {
                header('location: ' . URL );
            }
        }        
    }

}