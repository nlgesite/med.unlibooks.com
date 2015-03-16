<?php
    class Vat_Model extends Model{
        public function __construct() {
            parent::__construct();
        }
        
        function add(){
            DAOFactory::getTblTaxDAO()->insert($this->setVat());
            
            echo true;
        }
        
        function update(){
            $vat = $this->setVat();
            
            $vat->id = Session::getSession('taxid');
            DAOFactory::getTblTaxDAO()->update($vat);
            Session::setSession('taxid', '');
            
            echo true;
        }
        
        function setVat(){
            $vat = new TblTax();
            
            $vat->taxCode = $_POST['taxCode'];
            $vat->active = (isset($_POST['active']))?'yes':'no';
            $vat->description = $_POST['description'];
            $vat->rate = $_POST['rate'];
            
            return $vat;
        }
    }
?>
