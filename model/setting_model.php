<?php

class Setting_Model extends Model {

    public function __construct() {
        parent::__construct();

        if (isset($_POST['task'])) {
            if ($_POST['task'] == 'addbank') {
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
            } elseif ($_POST['task'] == 'adduser') {
                $this->addUser();
            } elseif ($_POST['task'] == 'updateuser') {
                $this->updateUser();
            } elseif ($_POST['task'] == 'changepassword') {
                $this->changepassword();
            }
        }
    }

    function updateCompany() {
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));
        $info->address = $_POST['address'];
        $info->country = 1;
        $info->phoneNum = $_POST['phoneNum'];
        $info->faxNum = $_POST['faxNum'];
//        $info->typeOfTax = $_POST['typeOfTax'];
//        $info->modeOfPayment = $_POST['modeOfPayment'];
        $info->lineOfBusiness = $_POST['lineOfBusiness'];
        $info->tinNum = $_POST['tinNum'];
        $info->rdoCode = $_POST['rdoCode'];
        $info->zipCode = $_POST['zipCode'];
//        $info->logoName = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        DAOFactory::getTblOrganizationInfoDAO()->update($info);
//        $this->uploadFile(Session::getSession('user'));
//        header('Location:' . URL . 'setting/company');
        
        $org = DAOFactory::getTblOrganizationDAO()->load(Session::getSession('medorgid'));
        $org->orgName = $_POST['orgName'];
        DAOFactory::getTblOrganizationDAO()->update($org);
        exit;
        return true;
    }

    function uploadFile($id) {
        chmod("public/companylogo/", 0755);

        if (isset($_FILES["file"]) && !empty($_FILES["file"]["name"])) {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if (($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts)) {

                if ($_FILES["file"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                } else {
                    if (file_exists("public/companylogo/" . Session::getSession('medorgid') . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName)) {
                        unlink('public/companylogo/' . Session::getSession('medorgid') . '.' . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->logoName);
                    }
                    move_uploaded_file($_FILES["file"]["tmp_name"], 'public/companylogo/' . Session::getSession('medorgid') . '.' . $extension);
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
        if ($_POST['task'] == 'addbank') {
            $bank->orgId = Session::getSession('medorgid');
            $bank->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblBankDAO()->insert($bank);

            if (isset($_POST['returnurl'])) {
                $data = array("value" => $id, "text" => $_POST['bankCode'], "accntnumber" => $_POST['bankAccountNumber']);

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updatebank') {
            $bank->id = Session::getSession('bankid');
            $bank->dateModified = date('Y-m-d');
            DAOFactory::getTblBankDAO()->update($bank);
            Session::setSession('bankid', '');
        }
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

        if ($_POST['task'] == "addtax") {
            $tax->orgId = Session::getSession('medorgid');
            $tax->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblTaxDAO()->insert($tax);
            if (isset($_POST['returnurl'])) {
                $data = array("value" => $id, "text" => $_POST['taxCode']);

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == "updatetax") {
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
            $num = count($data); //                echo "<p> $num fields in line $row: <br /></p>\n";

            if ($row > 1) {
                $field = array('taskCode', 'description', 'ratePerHour');
                $task = new TblTask();
                for ($c = 0; $c < $num; $c++) { //                    echo $data[$c] . "<br />\n";
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
            $num = count($data); //                echo "<p> $num fields in line $row: <br /></p>\n";
            if ($row > 1) {
                $field = array('ItemCode', 'Description', 'Unit Cost');
                $item = new TblItem();
                for ($c = 0; $c < $num; $c++) { //                    echo $data[$c] . "<br />\n";
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

    function addUser() {
        $this->setUser(new TblUser);
    }

    function updateUser() {
        $this->setUser(DAOFactory::getTblUserDAO()->load(Session::getSession('userid')));
    }

    function setUser($user) {
//        $user = new TblUser();
        $user->userNo = $_POST['userNo'];
        $user->fullName = $_POST['name'];
        $user->emailAddress = $_POST['email'];
        $user->orgInfoId = Session::getSession('medinfoid');
        $user->active = isset($_POST['active']) ? 'yes' : 'no';

        if ($_POST['task'] == 'adduser') {
            $user->password = $_POST['password'];
            $user->dateCreated = date('Y-m-d');
            DAOFactory::getTblUserDAO()->insert($user);
        } elseif ($_POST['task'] == 'updateuser') {
            $user->dateModified = date('Y-m-d');
            DAOFactory::getTblUserDAO()->update($user);
        }
    }

    function deleteUser() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblUserDAO()->delete($value);
        }
    }

    function changepassword() {
        $user = DAOFactory::getTblUserDAO()->load(Session::getSession('userid'));
        $user->password = $_POST['newpassword'];

        DAOFactory::getTblUserDAO()->update($user);
    }

}
