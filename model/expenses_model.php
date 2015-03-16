<?php

class Expenses_Model extends Model {

    public function __construct() {
        parent::__construct();

        if (isset($_POST['task'])) {
            switch ($_POST['task']) {
//                case 'addsupplier': $this->addSupplier();
//                    break;
//                case 'updatesupplier': $this->updateSupplier();
//                    break;
                case 'addcoa': $this->addCoa();
                    break;
                case 'updatecoa': $this->addCoa();
                    break;
                case 'delsupplier': $this->deleteSupplier();
                    break;
                // case 'addexpense': $this->addExpense();
                // break;
            }
        }
    }

    function addSupplier() {
        $this->setSupplier(new TblSupplier());
    }

    function updateSupplier($id) {
        $this->setSupplier(DAOFactory::getTblSupplierDAO()->load($id));
    }

    function setSupplier($supplier) {
        $supplier->supplierAccount = $_POST['supplierAccount'];
        $supplier->name = $_POST['name'];
        $supplier->address = $_POST['address'];
        $supplier->emailAddress = $_POST['emailAddress'];
        $supplier->phoneNum = $_POST['phoneNum'];
        $supplier->faxNum = $_POST['faxNum'];
        $supplier->dateCreated = date('Y-m-d');
        $supplier->emailAddress = $_POST['emailAddress'];
        $supplier->currencyId = 0;
        $supplier->activeAccount = isset($_POST['isactive']) ? 'yes' : 'no';
        $supplier->orgId = Session::getSession('medorgid');
        $hasDuplicate = TblSupplierMysqlExtDAO::hasDuplicate($supplier->orgId, $supplier->supplierAccount);

        if ($supplier->id == '') {
            if ($hasDuplicate) {
                echo 'Sorry, duplicate Vendor No. is invalid.
					"' . $supplier->supplierAccount . '" already exist.';
            } else {
                $id = DAOFactory::getTblSupplierDAO()->insert($supplier);
                Session::setSession('vendorSessionId', $id);
                echo $id;
            }
            // if (isset($_POST['returnurl'])) {
            // $data = array("id" => $id, "text" => $_POST['name'],"address" => $_POST['address']);
            // echo json_encode($data);
            // exit;
            // }
        } else {
            if ($supplier->activeAccount == 'no') {
                $expense = DAOFactory::getTblNewExpenseDAO()->queryBySupplierId($supplier->id);
                $return = true;
                if (isset($expense) && !empty($expense)) {
                    foreach ($expense as $each) {
                        if ($each->status == 'open') {
                            $return = false;
                        }
                    }
                }

                if ($return) {
                    DAOFactory::getTblSupplierDAO()->update($supplier);
                } else {
                    echo 'Unable to de-active supplier,
						supplier has open transaction in the expense.';
                }
            } else {
                DAOFactory::getTblSupplierDAO()->update($supplier);
            }
        }
    }

    function deleteSupplier() {

        $arr_id = $_POST['chk'];

        $expense = DAOFactory::getTblNewExpenseDAO()->queryBySupplierId($supplier->id);
        $message = 'Unable to delete suppliers, some supplier has open transaction in the expense.';
        $return = true;
        foreach ($arr_id as $item => $value) {
            if (isset($expense) && !empty($expense)) {
                foreach ($expense as $each) {
                    if ($each->status == 'open') {
                        $return = false;
                    }
                }
            }

            if ($return) {
                DAOFactory::getTblSupplierDAO()->delete($value);
            } else {
                $return = false;
            }
        }

        if (!$return) {
            echo '<script>';
            echo 'alert("' . $message . '");';
            echo '</script>';
        }
        header('Location: ' . URL . 'expenses/suppliers');
    }

    function addExpense() {
        $orgId = Session::getSession('medorgid');
        $expenseNumber = $_POST['expenseNumber'];
        $hasExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumber($orgId, $expenseNumber);
        $myExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumber($orgId, "%%");
        if ($hasExpense) {
            echo 'Unable to save. 
					Expense Number: ' . $expenseNumber . ' already exist.';
            exit;
        }

        $expenseNumber = $_POST['expenseNumber'];

        $expense = new TblNewExpense();
        $this->setExpense($expense);
    }

    function editExpense() {
        $orgId = Session::getSession('medorgid');
        $expenseNumber = $_POST['expenseNumber'];
        $hasExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumber($orgId, $expenseNumber);

        if ($hasExpense && $hasExpense[0]->id != $_GET['id']) {
            echo 'Unable to save. 
					Expense Number: ' . $expenseNumber . ' already exist.';
            exit;
        }

        $expense = DAOFactory::getTblNewExpenseDAO()->load($_GET['id']);

        $this->setExpense($expense);
    }

    function setExpense($expense) {
        $expense->supplierId = $_POST['supplierId'];
        $expense->expenseNumber = $_POST['expenseNumber'];
        $expense->referenceNumber = $_POST['referenceNumber'];
        $expense->eWT = $_POST['eWT'];
        $expense->dateIssued = date('Y-m-d', strtotime($_POST['dateIssued'])); //date('Y-m-d');
        $expense->particular = $_POST['particular'];
        $expense->inclusiveOfVat = isset($_POST['inclusiveOfVat']) ? 'yes' : 'no';

        $expense->status = isset($_GET['type']) ? $_GET['type'] : 'open';
        if ($expense->id == '') {
            $expense->dateCreated = date('Y-m-d');
			if($expense->status == 'posted'){
				$expense->dateModified = date('Y-m-d');
			}
            $expense->id = DAOFactory::getTblNewExpenseDAO()->insert($expense);
        } else {
            $expense->dateModified = date('Y-m-d');
            DAOFactory::getTblNewExpenseDAO()->update($expense);
        }

		if($expense->status == 'posted'){
			Session::setSession('expenseIdPosted',$expense->id);
		}
        $this->saveExpenseLine($expense->id);
    }

    function expenseLine() {
        echo "<tr class='no-bg borderbottom'>";
        echo "<td class='neg'><input type='button' name='delete'  class='del delitem' onclick='deleteRow(this)'></td>";
        echo "<td><select name='coaId[]' class='selectNewExp' required><option></option>";
        $userCoa = $this->getUserCoa();
        if (isset($userCoa) && !empty($userCoa)) {
            foreach ($userCoa as $each) {
                // if ($each->accountType == 'Expense') {
                echo '<option value="' . $each->id . '" accountNum="' . $each->accountNum . '" >
							' . $each->accountNum . ' - ' . $each->accontName . '</option>';
                // }
            }
        }
        echo "</select></td>";
        echo "<td><input type='text' name='memo[]'  required maxlength='50' /></td>";
        echo '<td><select name="vat[]" required>';
        $vat = $this->getVat();
        if (isset($vat) && !empty($vat)) {
            foreach ($vat as $each) {
                echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
					title="' . $each->description . '" >
					' . $each->taxCode . '</option>';
            }
        }
        echo '</select></td>';
        echo "<td><input type='text' name='amount[]' class='isNumeric'/></td>";
        echo"<td class='neg'>
				<div class='adel'>
					<input type='button' name='add'  class='a addtask' id='addtask'>
				</div>
		</td>";



        echo "</tr>";
    }

    function saveExpenseLine($expenseid) {
        DAOFactory::getTblExpenseLinesDAO()->deleteByNewExpenseId($expenseid);
//        $expense = new TblExpenseLine();
        // print_r($expense);
        foreach ($_POST['coaId'] as $var => $each) {
            $expenseLn = new TblExpenseLine();
            $expenseLn->newExpenseId = $expenseid;
            $expenseLn->coaId = $each;
            $expenseLn->descriptionMemo = $_POST['memo'][$var];
            $expenseLn->vatId = $_POST['vat'][$var]; //echo $_POST['vat'][$var];
            $expenseLn->netAmount = Controller::removeComma($_POST['amount'][$var]);
//            print_r($expenseLn);
            DAOFactory::getTblExpenseLinesDAO()->insert($expenseLn);
        }
        DAOFactory::getTblExpenseAmountDAO()->deleteByNewExpenseId($expenseid);

        $expenseAmount = new TblExpenseAmount();
        $expenseAmount->newExpenseId = $expenseid;
        $expenseAmount->subTotalAmount = Controller::removeComma($_POST['totalAmount']);
        $expenseAmount->vatAmount = Controller::removeComma($_POST['vatAmount']);
        $expenseAmount->eWTAmount = Controller::removeComma($_POST['eWTAmount']);
        $expenseAmount->grandTotal = Controller::removeComma($_POST['vatTotalAmount']);

        DAOFactory::getTblExpenseAmountDAO()->insert($expenseAmount);

        if (isset($_GET['type']) && $_GET['type'] == 'posted') {
            //for future function uncomment
            if ($_GET['type'] == 'posted') {
                $this->setTrialBalance($expenseid, date('Y-m-d', strtotime($_POST['dateIssued'])));
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1000-002'), 0, $expenseAmount->grandTotal, $expenseid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'expense', 'dc');
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1002-004'), $expenseAmount->vatAmount, 0, $expenseid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'expense', 'dc');
//                if ($expenseAmount->eWTAmount > 0) {
//                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('2000-009'), 0, $expenseAmount->eWTAmount, $expenseid, $_POST['dateIssued'], 'expense', 'dc');
//                }
//                echo 'test';exit;
            }
        }
        exit;

        $total_net = 0;
        if (isset($_POST['expenselineid'])) {
            if (!isset($_POST['expenselineid'])) {
                $data = 0;
            } else {
                $data = (isset($_POST['expenselineid'])) ? implode(',', $_POST['expenselineid']) . ',' : 0 . ',';
            }
        }

        if (array_key_exists('coaId', $_POST)) {
            for ($i = 0; $i < count($_POST['coaId']); $i++) {
                $expenseline = new TblExpenseLine();
                $expenseline->newExpenseId = $expenseid;
                $expenseline->coaId = $_POST['coaId'][$i];
                $expenseline->memo = $_POST['memo'][$i];
                $expenseline->amount = $_POST['amount'][$i];

                if (isset($_POST['expenselineid'][$i])) {
                    $invoiceline->id = $_POST['expenselineid'][$i];
                    DAOFactory::getTblExpenseLinesDAO()->update($expenseline);
                } else {
                    DAOFactory::getTblExpenseLinesDAO()->insert($expenseline);
                }
            }
        }
        return $total_net;
    }

// von codes
    function getSupplier() {
        $supplier = new TblSupplier();
        if (isset($_POST) && isset($_POST['id'])) {
            $supplier = DAOFactory::getTblSupplierDAO()->load($_POST['id']);
        } else {
            $user = Session::getSession('medorgid');
            $lastSupplier = DAOFactory::getTblSupplierDAO()->queryByOrgId($user);
        }

        return $supplier;
    }

    function search() {
        $orgId = Session::getSession('medorgid');
        $search = isset($_POST['search']) ? $_POST['search'] : '';
        $type = isset($_POST['type']) ? $_POST['type'] : '';
        return $suppliers = TblSupplierMySqlExtDAO::searchByType($orgId, $search, $type);
    }

    function getUserCoa() {
        $session = Session::getSession('medorgid');
        $expenseArray = $this->getExpenseArray();

        $userCoa = TblCoaMySqlExtDAO::getUserCoaExpense($session, $expenseArray);

        return $userCoa;
    }

    function getVat() {
        $vat = DAOFactory::getTblTaxDAO()->queryAll();
//        if(DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax=='percentage'){
//         return DAOFactory::getTblTaxDAO()->queryByDescription('VAT-Exempt');   
//        }else{
        return $vat;
//        }
    }

    function getExpense() {
        $expense = new TblNewExpense();
        $expense->date = date('Y-m-d');
        if (isset($_POST['expenseId']) && !empty($_POST['expenseId'])) {
            $expense = DAOFactory::getTblNewExpenseDAO()->load($_POST['expenseId']);
        } else {
            $orgId = Session::getSession('medorgid');
            $myExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumber($orgId, "%%");
            if ($myExpense) {
                $myExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumberAll($orgId, "%%");
                $expense->expenseNumber = ++$myExpense[0]->expenseNumber;
                $expense->expenseNumber = $expense->expenseNumber;
            } else {
                $expense->expenseNumber = 'Exp-000001';
            }
        }

        return $expense;
    }

    function getExpenseCopy() {
        $expense = new TblNewExpense();
        $expense->date = date('Y-m-d');
        if (isset($_POST['expenseId']) && !empty($_POST['expenseId'])) {
            $expense = DAOFactory::getTblNewExpenseDAO()->load($_POST['expenseId']);
            $orgId = Session::getSession('medorgid');
            $myExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumber($orgId, "%%");
            if ($myExpense) {
                $expense->expenseNumber = ++$myExpense[0]->expenseNumber;
                // $expense->referenceNumber = ++$myExpense[0]->referenceNumber;
            }
        } else {
            $orgId = Session::getSession('medorgid');
            $myExpense = TblNewExpenseMySqlExtDAO::getExpenseByExpenseNumber($orgId, "%%");
            if ($myExpense) {
                $expense->expenseNumber = ++$myExpense[0]->expenseNumber;
                // $expense->referenceNumber = ++$myExpense[0]->referenceNumber;
            } else {
                $expense->expenseNumber = 'Exp_000001';
            }
        }
        $expense->status = 'open';

        return $expense;
    }

    function getExpenseLine() {
        $expense = $this->getExpense();
        if ($expense->id != '') {
            $expenseLine = DAOFactory::getTblExpenseLinesDAO()->queryByNewExpenseId($expense->id);

            return $expenseLine;
        } else {
            return false;
        }
    }

    function getExpenseAmount() {
        $expense = $this->getExpense();
        if ($expense->id != '') {
            $expenseAmount = DAOFactory::getTblExpenseAmountDAO()->queryByNewExpenseId($expense->id);
            if (isset($expenseAmount) && !empty($expenseAmount)) {
                return $expenseAmount[0];
            }
        }
        return new TblExpenseAmount();
    }

    function getOrgExpenseAmount() {
        $orgId = Session::getSession('medorgid');
        $expenseAmount = TblExpenseAmountMySqlExtDAO::searchExpenseByOrg($orgId);
        return $expenseAmount;
    }

    function searchData() {
        $orgId = Session::getSession('medorgid');
        $search = $_POST['search'];
        $type = $_POST['type'];
        $limit = $_POST['pageNumber'];
        if ($limit == '') {
            return $count = TblNewExpenseMySqlExtDAO::searchExpense($orgId, $search, $type);
        } else {
            $page = ($_POST['page'] * $limit) - $limit;
            $returnData = TblNewExpenseMySqlExtDAO::searchExpenseNumber($orgId, $search, $type, $limit, $page);
            return $returnData;
        }
    }

    function delete() {
        if (isset($_POST['array']) && !empty($_POST['array'])) {
            foreach ($_POST['array'] as $each) {
                DAOFactory::getTblNewExpenseDAO()->delete($each);
            }
        } else {
            echo 'Please select the item to delete';
        }
    }

    function getMySuppliers() {
        $orgId = Session::getSession('medorgid');
        $suppliers = DAOFactory::getTblSupplierDAO()->queryByOrgId($orgId);
        return $suppliers;
    }

    function getExpensePages() {
        $pageNumber = $_POST['pageNumber'];
        $search = $_POST['search'];
        $type = $_POST['type'];
        $orgId = Session::getSession('medorgid');
        if ($pageNumber == '') {
            return 1;
        } else {
            $count = TblNewExpenseMySqlExtDAO::searchExpense($orgId, $search, $type);
            if ($count) {
                $pageNum = count($count) / $pageNumber;
                if (count($count) % $pageNumber != 0) {
                    $pageNum = $pageNum + 1;
                }
                return (int) $pageNum;
            }
        }
        return 1;
    }

    function setReverse() {
        $id = $_POST['id'];

        $expense = DAOFactory::getTblNewExpenseDAO()->load($id);

//        $expense->status = 'reversed';
//        $expense->dateReversed = date('Y-m-d');
//
//        DAOFactory::getTblNewExpenseDAO()->update($expense);
        $oldexpenseid = $expense->id;
        $expense->id = '';
        $expense->status = 'reversed';
        $expense->dateReversed = date('Y-m-d');
        $newexpid = DAOFactory::getTblNewExpenseDAO()->insert($expense);

        $expamount = DAOFactory::getTblExpenseAmountDAO()->queryByNewExpenseId($id);

        if ($expamount) {
            $expamount[0]->newExpenseId = $newexpid;
            $expamount[0]->grandTotal = $expamount[0]->grandTotal * -1;
            $expamount[0]->subTotalAmount = $expamount[0]->subTotalAmount * -1;
            $expamount[0]->vatAmount = $expamount[0]->vatAmount * -1;
            $expamount[0]->eWTAmount = $expamount[0]->eWTAmount * -1;
            DAOFactory::getTblExpenseAmountDAO()->insert($expamount[0]);
        }

        $explines = DAOFactory::getTblExpenseLinesDAO()->queryByNewExpenseId($id);

        foreach ($explines as $item) {
            $item->newExpenseId = $newexpid;
            DAOFactory::getTblExpenseLinesDAO()->insert($item);
        }
        
        Controller::copyReverseTB($oldexpenseid,$newexpid, $expense->dateIssued, 'expense');
    }

    function setTrialBalance($id, $transdate) {
        $coaentries = TblNewExpenseMySqlExtDAO::dataPerCoa($id);
        $credicoa = array('1004-003', '1004-005', '1004-007', '1004-009',
            '1004-011', '1004-013', '1006-002', '2000-001',
            '2000-002', '2000-003', '2000-004', '2000-005',
            '2000-006', '2000-007', '2000-008', '2000-009',
            '2000-010', '2001-001', '2001-002', '2002-001',
            '2003-001', '3000', '3001', '4001-001', '4001-002',
            '4001-003');
//        echo count($coaentries);
        $wht = array('6000-005', '6001-021', '6001-016', '6001-020');
        foreach ($coaentries as $item) {
//            $tb = new TblTrialBalance();
//            $tb->coaId = $item['id'];
            $debit = $credit = 0;
            if (in_array($item['code'], $credicoa)) {
                $debit = 0;
                (DAOFactory::getTblTaxDAO()->load($item['vat_id'])->taxCode == 'Vatable') ? $credit = $item['amount'] / 1.12 : $credit = $item['amount'];
            } else {
                (DAOFactory::getTblTaxDAO()->load($item['vat_id'])->taxCode == 'Vatable') ? $debit = $item['amount'] / 1.12 : $debit = $item['amount'];
                $credit = 0;
            }
                Controller::setTrialBalance($item['id'], $debit, $credit, $id, $transdate, 'expense', 'dc');
            ////subtotal-ewt;
            //cashonhand-ewt
//            if(in_array($item['code'], $wht)){
//                
//            }

            
//            $tb->balance = $tb->debit - $tb->credit;
//            $tb->transDate = $transdate;
//            DAOFactory::getTblTrialBalanceDAO()->insert($tb);

            if (in_array($item['code'], $wht)) {
                $ewt = $debit * ($_POST['eWT']/100);
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('2000-009'), 0, $ewt, $id, $transdate, 'expense', 'dc');
            }
        }
    }

    function getOrganizationInfo() {
        $orgId = Session::getSession('medorgid');
        $org = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);

        return $org[0];
    }

    function getExpenseArray() {
        $expenseArray = array(
            '1002-001',
            '1002-002',
            '1002-003',
            '1002',
            '1004-001',
            '1004-002',
            '1004-004',
            '1004-006',
            '1004-008',
            '1004-010',
            '1004-012',
            '1006-001',
            '1007',
            '6000-003',
            '6000-005',
            '6000-006',
            '6000-007',
            '6001-001',
            '6001-005',
            '6001-006',
            '6001-009',
            '6001-011',
            '6001-012',
            '6001-014',
            '6001-016',
            '6001-017',
            '6001-018',
            '6001-019',
            '6001-020',
            '6001-021',
            '6001-022',
            '6001-023',
            '6001-024',
            '6001-025',
            '6001-026',
            '6001-029',
            '6001-032',
            '6001-033',
            '6001-034',
            '6001-035'
        );
        return $expenseArray;
    }
	
	//for Ap voucher
	function getOrg(){
		$orgId = Session::getSession('medorgid');
		
		$org = DAOFactory::getTblOrganizationDAO()->load($orgId);
		
		return $org;
	}
	
	function getOrgInfo(){
		$org = $this->getOrg();
		
		$orgInfo = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($org->id);
		return $orgInfo[0];
	}
	
	function getExpenseInfo(){
		$id = $_POST['id'];
		$expense = DAOFactory::getTblNewExpenseDAO()->load($id);
		
		return $expense;
	}
	
	function getTrialBalanceExpenseInfo($id){
		$trialbalance = TblTrialBalanceMysqlExtDAO::getTrialBalanceByType($id, 'expense');
		
		return $trialbalance;
	}
	
	function getExpenseVendor($id){
		$vendor = DAOFactory::getTblSupplierDAO()->load($id);
		
		return $vendor;
	}
	//till here
	
	
	

}

?>
