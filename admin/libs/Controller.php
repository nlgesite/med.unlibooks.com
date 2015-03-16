<?php
class Controller{
	function __construct(){
		$this->view = new Views();
	}
	
	public function loadModel($name){
		$path = 'model/' . $name . '_model.php';
		
		if(file_exists($path)){
			require $path;
			
			$modelName = $name . '_model';
			
			$this->model = new $modelName();
			
		}
	}
	
	public function loadFormModel($name){
		$path = 'model/tax_return/' . $name . '_Model.php';
		
		if(file_exists($path)){
			require $path;
			
			$modelName = $name . '_model';
			
			$this->formModel = new $modelName();
			
		}
	}
	
	static function includeForm($var1,$var2 = ''){
		$companyType = Session::getSession('userCompanyType');
		$returns = false;
		
		if($companyType){
			foreach($companyType as $each){
				if($each == $var1){
					$returns = true;
				}
			}
			
			if($var2 != ''){
				foreach($companyType as $each){
					if($each == $var2){
						$returns = true;
					}
				}
			}
		} else {
			return false;
		}
		
		return $returns;
	}
	
	public function menu(){
		$model = new Tax_Return_Model();
		$this->view->form2550M = $model->getForm2550M();
		$this->view->form2550Q = $model->getForm2550Q();
		$this->view->form1601C = $model->getForm1601C();
		$this->view->form1601E = $model->getForm1601E();
		$this->view->form1601F = $model->getForm1601F();
		$this->view->form1603 = $model->getForm1603();
		$this->view->form1702Q = $model->getForm1702Q();
		$this->view->form1604CF = $model->getForm1604CF();
		$this->view->form1702 = $model->getForm1702();
		$this->view->form1604E = $model->getForm1604E();
		$ty = Session::getSession('userTaxableYear');
		$trigger = 'tax_return';
		if($ty['type'] == 'prior' || $ty['type'] == 'Upgrade') $trigger = 'tax_returnPY';
		$this->view->menu = 'views/tax_return/menu.php';
	}
	
	static function removeComma($string){
		$pattern = '/^\(/';
		// echo $string;
		$matches = array();
		preg_match($pattern,$string,$matches);
		
		if(substr($string,0,1) == '('){
			// preg_replace('/\(|\)/','',$string);
			$string = strtr($string, array('(' => '', ')' => ''));
			// str_replace(')', '', $string);
			// preg_replace( "(", "", $path );
			// $pattern = '/^\)/';
			
			// str_replace($pattern, '', $string);
			$string = '-'.$string;
		}
		
		$string = str_replace(',', '', $string);
		// exit;
		return $string;
		
	}
	
	static function setComma($string){
		 $a = str_replace(',', '', $string);
		 
		 return $a;
	}
	
	
	static function getFloat($int){
		if($int == ''){
			return '0.00';
		}
		if($int < 0){
			$int *= (-1);
			return '('.number_format($int,2).')';
		} else {
			return number_format($int,2);
		}
	}
	/*
	static function isQuarter(){
		$ty = Session::getSession('userTaxableYear');
		$company = Session::getSession('userCompany');
		
		$monthNo = date('m',strtotime($company['yearEnd']));
		
		// $monthNo += 1;
		
		$month = date('m',strtotime($ty['yearEndDate']));
		
		// echo '<script>alert("'.$month.'");</script>';
		
		for($int = 1; $int <= 12; $int++){
			$monthNo = $monthNo % 12;
			$monthNo += 1;
			if($monthNo == 0){
				$monthNo = 12;
			}
			// echo '<script>alert("'.$monthNo.' - '.$month.' - '.$int.'");</script>';
			// echo '<script>alert("'.$monthNo.' - '.$month.' - '.$int.'");</script>';
			if($monthNo == $month){
				if($int == 3){
					// echo '<script>alert(1);</script>';
					return 'first';
				} elseif ($int == 6){
					// echo '<script>alert(2);</script>';
					return 'second';
				} elseif ($int == 9){
					// echo '<script>alert(3);</script>';
					return 'third';
				} elseif ($int == 12){
					return 'fourth';
				}
					// echo '<script>alert(5);</script>';
				// echo $int;
				// exit;
				return false;
			}
			
			// echo ',';
		}
		// echo 'asd';
		// exit;
		return false;
	}
	*/
}