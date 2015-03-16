<?php

class Coa_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function add() {
        $coa = $this->setCoa();
        DAOFactory::getAdminCoaDAO()->insert($coa);

        $this->setCoaAllCompany($coa);

        echo true;
    }

    function update() {
        $coa = $this->setCoa();
        $coa->id = Session::getSession('coaid');
        DAOFactory::getAdminCoaDAO()->update($coa);

        echo true;
    }

    function setCoa() {
        $coa = new AdminCoa();

        $coa->accountName = $_POST['accountName'];
        $coa->accountNum = $_POST['accountNum'];
        $coa->accountType = $_POST['accountType'];
        $coa->description = $_POST['description'];
        $coa->incomeBalanceSheet = ($_POST['incomeBalanceSheet'] == 'income') ? 'Income Sheet' : 'Balance Sheet';
        $coa->subAccount = $_POST['subAccount'];

        return $coa;
    }

    function setCoaAllCompany($coa) {
//           $coa = new AdminCoa();
        $newcoa = new TblCoa();
        $newcoa->accontName = $coa->accountName;
        $newcoa->accountNum = $coa->accountNum;
        $newcoa->accountType = $coa->accountType;
        $newcoa->activeAccount = 'yes';
        $newcoa->description = $coa->description;
        $newcoa->incomeBalanceSheet = $coa->incomeBalanceSheet;

        $orgids = DAOFactory::getTblOrganizationDAO()->queryAll();

        foreach ($orgids as $orgid) {
            $newcoa->orgId = $orgid->id;
            if ($coa->subAccount != '') {
                $newcoa->subAccount = TblCoaMySqlExtDAO::getCoaId($coa->subAccount,$orgid->id);
            }
            DAOFactory::getTblCoaDAO()->insert($newcoa);
        }
    }

}

?>
