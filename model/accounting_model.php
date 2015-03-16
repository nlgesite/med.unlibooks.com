<?php

class Accounting_Model extends Model {

    public function __construct() {
        parent::__construct();


        if (isset($_POST['task'])) {
            if ($_POST['task'] == 'addbank' && Session::getSession('bankid') == '') {
                $this->newBank();
            } elseif ($_POST['task'] == 'updatebank') {
                $this->updateBank();
            } elseif ($_POST['task'] == 'delbank') {
                $this->deleteBank();
            } elseif ($_POST['task'] == 'addtax') {
                $this->addTax();
            } elseif ($_POST['task'] == 'updatetax') {
                $this->updateTax();
            } elseif ($_POST['task'] == 'deltax') {
                $this->deleteTax();
            } elseif ($_POST['task'] == 'addcoa') {
                $this->addCoa();
            } elseif ($_POST['task'] == 'updatecoa') {
                $this->updateCoa();
            }
        }
    }

    function updateCompany() {
        $info = new TblOrganizationInfo();

        $info->id = Session::getSession('medinfoid');
        $info->orgId = Session::getSession('medorgid');
        $info->address = $_POST['orgName'];
        $info->tinNum = $_POST['tinNum'];
        $info->city = $_POST['city'];
        $info->province = $_POST['province'];
        $info->country = 1; //$_POST['country'];
        $info->phoneNum = $_POST['phoneNum'];
        $info->faxNum = $_POST['faxNum'];
        $info->businessCode = 1; //$_POST['businessCode'];
        $info->currencyCode = 'sdfsd'; //$_POST['currencyCode'];

        DAOFactory::getTblOrganizationInfoDAO()->update($info);
        $this->uploadFile(Session::getSession('meduser'));
        return true;
    }

    function uploadFile($id) {
        chmod("public/companylogo/", 0755);

        if (isset($_FILES["file"])) {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts)) {

                if ($_FILES["file"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                } else {
                    if (file_exists("public/companylogo/" . Session::getSession('medorgid'))) {
                        echo $_FILES["file"]["name"] . " already exists. ";
                    } else {
                        move_uploaded_file($_FILES["file"]["tmp_name"], 'public/companylogo/' . Session::getSession('medorgid'));
                    }
                }
            } else {
                echo "Invalid file" . $_FILES["file"]["size"];
            }
        }
    }

    function newBank() {
        $this->setBank(new TblBank());
    }

    function updateBank() {
        $this->setBank(DAOFactory::getTblBankDAO()->load(Session::getSession('bankid')));
    }

    function setBank($bank) {
        $bank->bankCode = $_POST['bankCode'];
        $bank->bankName = $_POST['bankName'];
        $bank->bankAccountNumber = $_POST['bankAccountNumber'];

        $bank->active = (isset($_POST['active'])) ? 'yes' : 'no';

        if ($_POST['task'] == 'addbank' && Session::getSession('bankid') == '') {
            $bank->dateCreated = date('Y-m-d');
            $bank->orgId = Session::getSession('medorgid');
            $id = DAOFactory::getTblBankDAO()->insert($bank);

            if (isset($_POST['returnurl'])) {
                $data = array("value" => $id, "text" => $_POST['bankCode'], "accntnumber" => $_POST['bankAccountNumber']);

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updatebank' || ($_POST['task'] == 'addbank' && Session::getSession('bankid') != '')) {
            $bank->id = Session::getSession('bankid');
            $bank->dateModified = date('Y-m-d');
            DAOFactory::getTblBankDAO()->update($bank);
            if (isset($_POST['returnurl'])) {
                $data = array("value" => Session::getSession('bankid'), "text" => $_POST['bankCode'], "accntnumber" => $_POST['bankAccountNumber']);

                Session::setSession('bankid', '');
                echo json_encode($data);
                exit;
            }
        }
        return false;
    }

    function deleteBank() {
        $arr_id = $_POST['chk'];
        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblBankDAO()->delete($value);
        }
    }

    function addTax() {
        $this->setTax(new TblTax());
    }

    function updateTax() {
        $this->setTax(DAOFactory::getTblTaxDAO()->load(Session::getSession('taxid')));
    }

    function setTax($tax) {
        $tax->taxCode = $_POST['taxCode'];
        $tax->description = $_POST['description'];
        $tax->rate = $_POST['rate'];


        $tax->active = ($_POST['active'] == 'yes') ? 'yes' : 'no';

        if ($_POST['task'] == "addtax" && Session::getSession('taxid') == '') {
            $tax->orgId = Session::getSession('medorgid');
            $tax->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblTaxDAO()->insert($tax);

            if (isset($_POST['returnurl'])) {
                $data = array("value" => $id, "text" => $_POST['taxCode']);

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == "updatetax" || ($_POST['task'] == 'addtax' && Session::getSession('taxid') != '')) {
            $tax->dateModified = date('Y-m-d');
            $tax->id = Session::getSession('taxid');
            DAOFactory::getTblTaxDAO()->update($tax);
            Session::setSession('taxid', '');
        }
    }

    function deleteTax() {
        $arr_id = $_POST['chk'];
        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblTaxDAO()->delete($value);
        }
    }

    function export() {
        if (isset($_POST['type'])) {
            # filename for download
            $filename = "website_data_" . date('Ymd') . ".csv";
            header('Content-Encoding: UTF-8');
            header("Content-Disposition: attachment; filename=\"$filename\"");
//            header("Content-Type: application/vnd.ms-excel");
            header("Content-Type: text/csv");

            switch ($_POST['type']) {
                case 'client':
                    $this->exportClient();
                    break;
                case 'task':
                    $this->exportTask();
                    break;
                case 'item':
                    $this->exportItem();
                    break;
                default:
                    break;
            }
        }
    }

    function exportClient() {
        $data = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('medorgid'));
        $arrayhead = array('Client Account', 'Client Name', 'Address', 'Tin Num', 'Email Address',
            'Phone Number', 'Fax Number', 'Contact Name', 'Contact Num', 'Contact Email Address',
            'Bank Code', 'Tax Code', 'mop_id', 'payment_id', 'Currency Code', 'Vat Inclusive', 'Term_id',
            'Active');
        array_walk($arrayhead, 'self::cleanData');
        echo implode(",", array_values($arrayhead)) . "\r\n"; //        echo implode("\t", array_values($arrayhead)) . "\r\n";

        $array_row = array();
        foreach ($data as $row) {
            $array_row['client_account'] = $row->clientAccount;
            $array_row['client_name'] = $row->clientName;
            $array_row['address'] = $row->address;
            $array_row['tin_num'] = $row->tinNum;
            $array_row['email_address'] = $row->emailAddress;
            $array_row['phone_number'] = $row->phoneNumber;
            $array_row['fax_number'] = $row->faxNumber;
            $array_row['contact_name'] = $row->contactName;
            $array_row['contact_num'] = $row->contactNum;
            $array_row['contact_email_address'] = $row->contactEmailAddress;
            $array_row['bank_id'] = DAOFactory::getTblBankDAO()->load($row->bankId)->bankCode;
            $array_row['tax_id'] = DAOFactory::getTblTaxDAO()->load($row->taxId)->taxCode;
            $array_row['mop_id'] = $row->mopId;
            $array_row['payment_id'] = $row->paymentId;
            $array_row['currency_id'] = DAOFactory::getTblCurrencyDAO()->load($row->currencyId)->currencyCode;
            $array_row['vat_inclusive'] = $row->vatInclusive;
            $array_row['term_id'] = $row->termId;
            $array_row['active'] = $row->active;

            array_walk($array_row, 'self::cleanData');
            echo implode(",", array_values($array_row)) . "\r\n"; //implode("\t", array_values($array_row)) . "\r\n";
        }
        exit;
    }

    function exportTask() {
        $data = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('medorgid'));
        $array_row = array();

        foreach ($data as $row) {
            $array_row['taskCode'] = $row->taskCode;
            $array_row['description'] = $row->description;
            $array_row['ratePerHour'] = $row->ratePerHour;
            $array_row['active'] = $row->active;

            array_walk($array_row, 'self::cleanData');
            echo implode("\t", array_values($array_row)) . "\r\n";
        }
        exit;
    }

    function exportItem() {
        $data = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('medorgid'));
        $array_row = array();

        foreach ($data as $row) {
            $array_row['itemCode'] = $row->itemCode;
            $array_row['description'] = $row->description;
            $array_row['unitCost'] = $row->unitCost;
            $array_row['active'] = $row->active;

            array_walk($array_row, 'self::cleanData');
            echo implode("\t", array_values($array_row)) . "\r\n";
        }
        exit;
    }

    function cleanData(&$str) {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) {
            $str = '"' . str_replace('"', '""', $str) . '"';
        }
    }

    function import() {
        if (($handle = fopen($_FILES["file"]["tmp_name"], 'r')) !== FALSE) {
            switch ($_FILES["file"]['name']) {
                case 'client.csv':
                    $this->saveImportClient($handle);
                    break;
                case 'task.csv':
                    $this->saveImportTask($handle);
                    break;
                case 'item.csv':
                    $this->saveImportItem($handle);
                    break;
                default:
                    break;
            }
        }

        return $_FILES["file"]['name'];
    }

    function saveImportClient($handle) {
        $row = 1;
        $clieterror = array();
        $field = array('clientAccount', 'clientName', 'address', 'tinNum', 'emailAddress', 'phoneNumber', 'faxNumber', 'contactName', 'contactNum', 'contactEmailAddress', 'bankId', 'taxId', 'mopId', 'paymentId', 'currencyId', 'vatInclusive', 'termId', 'active');
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            if ($row > 1) {
                $client = new TblClient();
                for ($c = 0; $c < $num; $c++) {
                    switch ($field[$c]) {
                        case 'bankId':$result = DAOFactory::getTblBankDAO()->queryByBankCode($data[$c]);
                            $client->$field[$c] = $result[0]->id;
                            break;
                        case 'taxId':$result = DAOFactory::getTblTaxDAO()->queryByTaxCode($data[$c]);
                            $client->$field[$c] = $result[0]->id;
                            break;
                        case 'currencyId':$result = DAOFactory::getTblCurrencyDAO()->queryByCurrencyCode($data[$c]);
                            $client->$field[$c] = $result[0]->id;
                            break;
                        default:$client->$field[$c] = $data[$c];
                            break;
                    }
                }
                $client->paymentId = 0;
                $client->orgId = Session::getSession('medorgid');
                $client->dateCreated = date('Y-m-d');
                $client->createdBy = Session::getSession('medorgid');
                if (count(DAOFactory::getTblClientDAO()->queryByClientAccount($client->clientAccount)) == 1) {
                    $clieterror[] = $client->clientAccount;
                } else {
                    DAOFactory::getTblClientDAO()->insert($client);
                }
            } $row++;
        }
        if (count($clieterror) > 0) {
            Session::setSession('error', 'Unable to insert the ff. record(s):' . implode(',', $clieterror));
        }
        fclose($handle);
    }

    function saveImportTask($handle) {
        $row = 1;
        $taskerror = array();
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);

            if ($row > 1) {
                $field = array('taskCode', 'description', 'ratePerHour');
                $task = new TblTask();
                for ($c = 0; $c < $num; $c++) {
                    $task->$field[$c] = $data[$c];
                }
                $task->orgId = Session::getSession('medorgid');
                $task->dateCreated = date('Y-m-d');

                if (count(DAOFactory::getTblTaskDAO()->queryByTaskCode($task->taskCode)) == 1) {
                    $taskerror[] = $task->taskCode;
                } else {
                    DAOFactory::getTblTaskDAO()->insert($task);
                }
            } $row++;
        }
        if (count($taskerror) > 0) {
            Session::setSession('error', 'Unable to insert the ff. record(s):' . implode(',', $taskerror));
        }
        fclose($handle);
    }

    function saveImportItem($handle) {
        $row = 1;
        $itemerror = array();
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            if ($row > 1) {
                $field = array('ItemCode', 'Description', 'Unit Cost');
                $item = new TblItem();
                for ($c = 0; $c < $num; $c++) {
                    $item->$field[$c] = $data[$c];
                }
                $item->orgId = Session::getSession('medorgid');
                $item->dateCreated = date('Y-m-d');
                if (count(DAOFactory::getTblItemDAO()->queryByItemCode($item->itemCode)) == 1) {
                    $itemerror[] = $item->itemCode;
                } else {
                    DAOFactory::getTblItemDAO()->insert($item);
                }
            } $row++;
        }
        if (count($itemerror) > 0) {
            Session::setSession('error', 'Unable to insert the ff. record(s):' . implode(',', $itemerror));
        }
        fclose($handle);
    }

    function addCoa() {
        $this->setCoa(new TblCoa());
    }

    function updateCoa() {
        $this->setCoa(DAOFactory::getTblCoaDAO()->load(Session::getSession('coaid')));
    }

    function setCoa($coa) {
        $coa = new TblCoa();

        if (Session::getSession('coadefault') == '') {
            $coa->accountNum = $_POST['accountNum'];
            $coa->accountType = $_POST['accountType'];
            $coa->accontName = $_POST['accountName'];
            $coa->description = $_POST['description'];
//        $coa->vatId = $_POST['vatId'];
            $coa->openingBal = $_POST['openingBal'];
            $coa->asOf = date('Y-m-d', strtotime($_POST['asOf']));
            $coa->vatInclusive = (isset($_POST['vatInclusive'])) ? 'yes' : '';
            $coa->activeAccount = (isset($_POST['activeAccount'])) ? 'yes' : '';
            $coa->subAccount = $_POST['subAccount'];
            $coa->incomeBalanceSheet = ($_POST['incomeBalanceSheet'] == 'income') ? 'Income Sheet' : 'Balance Sheet';
        }
        Session::setSession('coadefault', '');
        $coa->openingBal = $_POST['openingBal'];

        if ($_POST['task'] == 'addcoa') {
            $coa->orgId = Session::getSession('medorgid');
            DAOFactory::getTblCoaDAO()->insert($coa);
        } elseif ($_POST['task'] == "updatecoa") {
            DAOFactory::getTblCoaDAO()->update($coa);
        }

        echo true;
    }

    function addJournal() {
        $this->setJournal(new TblJournalEntry);
    }

    function updateJournal() {
        $this->setJournal(DAOFactory::getTblJournalEntryDAO()->load(Session::getSession('journalid')));
    }

    function setJournal($journal) {
        $journal->journalNumber = $_POST['journalNumber'];
        $journal->orgId = Session::getSession('medorgid');
       // $journal->transDate = date('m / d / Y', strtotime($_POST['dateIssued']));
		$journal->transDate = date('Y-m-d',strtotime($_POST['dateIssued']));
        $_POST['totaldebit'] = str_replace(',', '', $_POST['totaldebit']);
        $_POST['totalcredit'] = str_replace(',', '', $_POST['totalcredit']);
        if ($_POST['totaldebit'] == $_POST['totalcredit']) {
            $journal->amount = $_POST['totaldebit'];
        }

        $journalid = DAOFactory::getTblJournalEntryDAO()->insert($journal);

        if (array_key_exists('accountCode', $_POST)) {
            for ($i = 0; $i < count($_POST['accountCode']); $i++) {
                $journaline = new tblJournalLine();
                $journaline->journalEntryId = $journalid;
                $journaline->type = 'GL Posting';
                $journaline->accountCode = TblNewInvoiceMySqlExtDAO::getCoaCodeId($_POST['accountCode'][$i]); //$_POST['accountCode'][$i];
                $journaline->particulars = $_POST['particulars'][$i];
                $journaline->debit = isset($_POST['debit'][$i]) ? str_replace(',', '', $_POST['debit'][$i]) : 0.0;
                $journaline->credit = isset($_POST['credit'][$i]) ? str_replace(',', '', $_POST['credit'][$i]) : 0.0;

                DAOFactory::getTblJournalLinesDAO()->insert($journaline);
            }
        }

        //for future function uncomment
        $this->setTrialBalance($journalid, date('Y-m-d',strtotime($_POST['dateIssued'])));
    }

    function setTrialBalance($id, $transdate) {
        $coaentries = TblJournalEntryMySqlExtDAO::dataPerCoa($id);

        foreach ($coaentries as $item) {
//            $tb = new TblTrialBalance();
//            $tb->coaId = $item['code'];
//            $tb->debit = $item['debit'];
//            $tb->credit = $item['credit'];
//            $tb->balance = $item['debit'] - $item['credit'];
//            $tb->transDate = $transdate;
//            
//            DAOFactory::getTblTrialBalanceDAO()->insert($tb);
            Controller::setTrialBalance($item['code'],$item['debit'], $item['credit'], $id, $transdate, 'journal', 'dc');
        }
    }

}

?>
