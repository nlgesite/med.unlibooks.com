<?php

class Model{

	function __construct(){
		Session::init();
		require 'include_dao.php';
		require_once 'libs/global.class.php';
                require_once 'public/global.class.php';
                require_once 'public/paginator.php';
	}

	static function getSubscriptionCode(){
		require_once('../t201a401x171pi200r00i00n/license.php');
	
		$code = txpGenerateLicense('TCCY');
		txpSaveCode($code,'Current');
		
		return $code;
	}

	static function isPostedTaxReturn($id){
		$count = 0;
		
		$total = 0;
		// $isQuarter = Controller::isQuarter();
		// if(!$isQuarter){
			if(Controller::includeForm('Value Added Tax (2550M / 2550Q)')){
				$data = Form2550MySqlExtDAO::get2550Form($id, 'monthly', 'yes');
				if($data){
					// if(count($data) == 8){
						$count++;
					// }
				}
				$total++;
			}
		// } else {
		if(Controller::includeForm('Value Added Tax (2550M / 2550Q)')){
			$data = Form2550MySqlExtDAO::get2550Form($id, 'quarterly', 'yes');
			if($data){
				// if(count($data) == 4){
					$count++;
				// }
			}
			$total++;
		}
		// }
		if(Controller::includeForm('Withholding Tax on Compensation (1601C / 1604CF)')){
			$data = Form1601CMySqlExtDAO::getPostedForm($id);
			if($data){
				// if(count($data) == 12){
					$count++;
				// }
			}
			$total++;
		}

		if(Controller::includeForm('Expanded Withholding Tax (1601E / 1604E)')){
			$data = Form1601EMySqlExtDAO::getPostedForm($id);
			if($data){
				// if(count($data) == 12){
					$count++;
				// }
			}
			$total++;
		}
			
		if(Controller::includeForm('Final Withholding Tax (1601F / 1604CF)')){
			$data = Form1601FMySqlExtDAO::getPostedForm($id);
			if($data){
				// if(count($data) == 12){
					$count++;
				// }
			}
			$total++;
		}
		// if($isQuarter){
			if(Controller::includeForm('Fringe Benefit Tax (1603)')){
				$data = Form1603MySqlExtDAO::getPosted($id);
				if($data){
					// if(count($data) == 4){
						$count++;
					// }
				}
				$total++;
			}
			// if(strtoupper($isQuarter) != 'FOURTH'){
				if(Controller::includeForm('Income Tax (1702Q / 1702)')){
					$data = Form1702QMySqlExtDAO::getPosted($id);
					if($data){
						// if(count($data) == 3){
							$count++;
						// }
					}
					$total++;
				}
			// } elseif(strtoupper($isQuarter) == 'FOURTH'){
				if(Controller::includeForm('Income Tax (1702Q / 1702)')){
					$data = Form1702MySqlExtDAO::getPosted($id);
					if($data){
						// if(count($data) == 3){
							$count++;
						// }
					}
					$total++;
				}
			// }
		// }
	/*
		if(Controller::includeForm('Withholding Tax on Compensation (1601C / 1604CF)','Final Withholding Tax (1601F / 1604CF)')){
			$data = Form1604CFMySqlExtDAO::getPosted($id);
			if($data){
					$count++;
			}
			$total++;
		}
			
		if(Controller::includeForm('Income Tax (1702Q / 1702)')){
			$data = Form1702MySqlExtDAO::getPosted($id);
			if($data){
					$count++;
			}
			$total++;
		}
			
		if(Controller::includeForm('Expanded Withholding Tax (1601E / 1604E)')){
			$data = Form1604EMySqlExtDAO::getPosted($id);
			if($data){
					$count++;
			}
			$total++;
		}
		//*/
		if($count == $total){
			return true;
		}
		return false;
	}
	
	static function hasOneTy(){
		Session::init();
		require_once 'include_dao.php';
		$company = Session::getSession('userCompany');
		
		if($company){
			$ty = DAOFactory::getTblTaxableYearDAO()->queryByCompanyId($company['id']);
			if(!empty($ty) && count($ty) == 1){
				$ty = $ty[0];
				$array = array();
				foreach($ty as $var=>$val){
					$array[$var] = $val;
				}
				// $array['type'] = 'Upgrade';
				// print_r($array);
				// exit;
				Session::setSession('userTaxableYear',$array);
				return true;
			}
		}
		return false;
	}
	
	static function getLogs(){
		Session::init();
		require_once 'include_dao.php';
		$user = Session::getSession('taxUser');
		return DAOFactory::getTblUserLogsDAO()->queryByUserId($user['id']);
	}
	
	static function setLogs($msg){
		date_default_timezone_set('Asia/Taipei');
		require_once 'include_dao.php';
		$user = Session::getSession('taxUser');
		if($user){
			$logs = new TblUserLog();
			
			$logs->log = $msg;
			$logs->userId = $user['id'];
			$logs->dateTime = date('Y-m-d H:i:s');
			
			DAOFactory::getTblUserLogsDAO()->insert($logs);
		}
	}
}