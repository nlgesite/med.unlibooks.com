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
		$path = 'controllers/' . $class . '.php';				// *** uncomment this line if uploaded (live) *** //

        Session::setSession('class', ($class != '' ? $class : 'Home'));
        Session::setSession('function', $function);
        
        if ($class == 'tax_return') {
            Session::setSession('form', $function);
        }

        if ($class == '') {
            $class = 'index';
            $path = 'controllers/' . $class . '.php';
			$path = 'controllers/' . $class . '.php';			// *** uncomment this line if uploaded (live) *** //          $functions;
        }
		
		$this->checkVerification();
		
		$this->checkSubscription();
		
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

    function checkSubscription(){
    
        if(isset($_GET['receipt'])){
        
            Session::setSession('receipt',$_GET['receipt']);
        
        }

        if(Session::getSession('meduser') != null){
            
            /**  Check if user subscription is still available
             *   - TRIAL is included in this function
             *   - Preventing viewing any page if subscription is expired
             */
            
            // *** Get user subscription *** //
            
            require_once('include_dao.php');
            $user = Session::getSession('meduser');
            
            $subscription = DAOFactory::getAmApiSubscriptionDAO()->queryByUbUserId($user);
            
            // *** Checking if has subscription *** //
            
            if(!empty($subscription)){
	            if($subscription[0]->expiration < date('Y-m-d H:i:s', time())){
	            	
	            	/**  Check amember database for updates
	            	 *   - call api for getting the expiration date
	            	 *     by sending amemberId and productTitle
	            	 */
	            	
	            	$product = DAOFactory::getAmApiProductDAO()->load($subscription[0]->productId);
			    
			// *** get expiration *** //
			require_once('registration/amember_api.php');
			
			$amember = new AmemberAPI;
			
			$expiration = $amember::get_expiration($subscription[0]->amUserId, $product->title);
	            	
	            	$expired = false;
	            	$expirationDate = $subscription[0]->expiration;
	            	if($expiration->s_date_expiration > $subscription[0]->expiration){
	            	
	            		@require_once('registration/include_dao.php');
	            	
	            		$account = DAOFactory2::getMedAccountsDAO()->queryBySubdomain(SUBDOMAIN);
	            		$accSubs = DAOFactory2::getAmApiSubscriptionDAO()->queryByUbUserId($account[0]->id);
	            	
	            		$expirationDate = $accSubs[0]->expiration = $subscription[0]->expiration = $expiration->s_date_expiration;
	            		
	            		DAOFactory::getAmApiSubscriptionDAO()->update($subscription[0]);
	            		DAOFactory2::getAmApiSubscriptionDAO()->update($accSubs[0]);
	            		
	            		if($expiration->s_date_expiration < date('Y-m-d H:i:s', time())){
	            			
	            			$expired = true;
	            			
	            		}
	            		
	            	} else {
	            	
	            		$expired = true;
	            		
	            	}
	            	
	            	if($expired){
	            		
	            		
                		$type = "subscribed";
                		require_once('public/expire.php');
	            		exit;
	            		
	            	}
	            }
            } else {
            
                /**  TRIAL Validation
                 *   - Check if 30 days trial is already ended
                 *   - View a page when it is expired
                 */
            
                $user = DAOFactory::getTblUserDAO()->load($user);
            
                $expirationDate = date("Y-m-d", strtotime($user->dateCreated . " +30 days"));
            
                if($expirationDate < date("Y-m-d")){
                
                	if(Session::getSession('receipt')!=null){
					
				@require_once('registration/include_dao.php');
                	
                		$subscribed = DAOFactory2::getAmApiSubscriptionDAO()->queryByReceiptId(Session::getSession('receipt'));
            	    		
            	    		// *** validate if the receipt is already used by other accounts *** //
            	    		
            	    		if(empty($subscribed)){
					// ***  Save subscription *** //
					
					require_once('registration/amember_api.php');
				    
					$amember = new AmemberAPI;
					
					// *** validate receipt *** //
					
					$result = $amember::validate_receipt(Session::getSession('receipt'));
					
					$product = DAOFactory::getAmApiProductDAO()->queryByTitle($result->s_product);
					
					// *** get expiration *** //
					
					$expiration = $amember::get_expiration($result->s_user_id, $result->s_product);
					
					// *** get main account *** //
					
					$mainAccount = DAOFactory2::getMedAccountsDAO()->queryBySubdomain(SUBDOMAIN);
					
					// *** saving subscription *** //
					
					$subscription = new AmApiSubscription;
					$subscription2 = new AmApiSubscription2;
					
					$subscription->ubUserId 	= Session::getSession('meduser');
					$subscription2->ubUserId	= $mainAccount[0]->id;	// Should be the main id
					$subscription2->amUserId 	= $subscription->amUserId 	= $result->s_user_id;
					$subscription2->productId 	= $subscription->productId 	= $product[0]->id;
					$subscription2->dateStart 	= $subscription->dateStart 	= date("Y-m-d H:i:s", strtotime($result->s_date_started));
					$subscription2->expiration 	= $subscription->expiration 	= date("Y-m-d H:i:s", strtotime($expiration->s_date_expiration));
					$subscription2->receiptId 	= $subscription->receiptId 	= Session::getSession('receipt');
					$subscription2->status 	= $subscription->status 		= "active";
					
					DAOFactory::getAmApiSubscriptionDAO()->insert($subscription);
					DAOFactory2::getAmApiSubscriptionDAO()->insert($subscription2);
					
					/**  This session is assume to set at registration page when 
					*   receipt is set in the link that came from the amember
					*/
					
                		}
                		
				if(isset($_SESSION['receipt'])) unset($_SESSION['receipt']);
                		
                	} else {
                	
                		$type = "trial";
                		require_once('public/expire.php');
		            	exit;
		            	
	            	}
                }
                
            }
            
        }
        
    }
    
    function checkVerification(){
    	
    	if(isset($_GET['verify'])){
        
            Session::setSession('verify',$_GET['verify']);
        
        }
        
      	if(Session::getSession('meduser') != null){
        
            if(Session::getSession('verify')!=null){
        
            	@require_once('registration/include_dao.php');
            
            	$id = intval(Session::getSession('verify')) - 64;
            
            	$account = DAOFactory2::getMedAccountsDAO()->load($id);
            	$account->verified = 1;
            	
            	DAOFactory2::getMedAccountsDAO()->update($account);
            	
            }
            
        }
    	
    }
	
    function error() {
        $views = new Views();
        $views->msg = 'An error occur!</br>Page not Found!';
        $views->render('views/error/index.php');
        exit;
    }

    function checkUser($class) {
  //      $class = strtolower($class);       // print_r(Session::getSession('meduser')); exit;
//        echo $class; exit;
        $views = array('dashboard','invoice','expenses','expenses','accounting','setting','report','support');
//        $functions = array('new','add');
        if(in_array($class, $views)) {
            if (Session::getSession('meduser') == null) {
                header('location: ' . URL );
            }
        }elseif(!in_array($class, $views) && Session::getSession('meduser')){
            header('location: ' . URL  .'dashboard');
        }
    }

}