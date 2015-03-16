<?php

class Invoice_Model extends Model {

    public function __construct() {
        parent::__construct();
        if (isset($_POST['task'])) {
            if ($_POST['task'] == 'addrecurring') {
                $this->addRecurring();
            } elseif ($_POST['task'] == 'updaterecurring') {
                $this->updateRecurring();
            } elseif ($_POST['task'] == 'delcustomer') {
                $this->deleteCustomer();
            } elseif ($_POST['task'] == 'additem' && Session::getSession('itemid') == '') {
                $this->addItem();
            } elseif ($_POST['task'] == 'updateitem') {
                $this->updateItem();
            } elseif ($_POST['task'] == 'delitem') {
                $this->deleteItem();
            } elseif ($_POST['task'] == 'delrecurring') {
                $this->deleteRecurring();
            } elseif ($_POST['task'] == 'payment') {
                $this->enterPayment();
            } elseif ($_POST['task'] == 'addclient' && Session::getSession('clientid') == '') {
                $this->addCustomer();
            } elseif ($_POST['task'] == 'updateclient') {
                $this->updateCustomer();
            } elseif ($_POST['task'] == 'addHmo' && Session::getSession('hmoid') == '') {
                $this->addHMO();
            } elseif ($_POST['task'] == 'updatehmo') {
                $this->updateHMO();
            } elseif ($_POST['task'] == 'deletehmo') {
                $this->deleteHMO();
            } elseif ($_POST['task'] == 'copyinvoice') {
                $this->copyInvoice();
            } elseif ($_POST['task'] == 'copyrecurring') {
                $this->copyRecurring();
            } elseif ($_POST['task'] == 'addtask' && Session::getSession('taskid') == '') {
                $this->addTask();
            } elseif ($_POST['task'] == 'updatetask') {
                $this->updateTask();
            } elseif ($_POST['task'] == 'deltask') {
                $this->deleteTask();
            } elseif ($_POST['task'] == 'delinvoice') {
                $this->deleteInvoice();
            }
        }
    }

    function addInvoice() {
        $this->setInvoice(new TblNewInvoice(), '');
    }

    function updateInvoice() {
        $this->setInvoice(DAOFactory::getTblNewInvoiceDAO()->load(Session::getSession('invoiceid')), '');
    }

    function setInvoice($invoice, $recuringid) { 
//        echo date('Y-m-d', strtotime($_POST['dueDate'])); exit;
        $invoice_id = 0;
        $invoice->invoiceNumber = (isset($_POST['invoiceNumber']) ? $_POST['invoiceNumber'] : '');
        $invoice->clientId = $_POST['clientId'];
        $invoice->dateIssued = date('Y-m-d', strtotime($_POST['dateIssued']));
        $invoice->dueDate = date('Y-m-d', strtotime($_POST['dueDate']));
        $invoice->discount = $_POST['discount'];
        $invoice->particular = $_POST['particular'];
        $invoice->hmoId = (DAOFactory::getTblMopDAO()->load($_POST['mopId'])->code == 'HMO') ? $_POST['hmoId'] : 0;
        $invoice->mopId = $_POST['mopId'];
        $invoice->remarks = $_POST['remarks'];
        $invoice->status = "open";
        if (isset($_POST['status'])) {
            if ($_POST['status'] == "post") {
                $invoice->status = "posted";
                $invoice->dateModified = date('Y-m-d');
            }
        }
//        exit;
        if ($_POST['task'] == 'addinvoice' || $_POST['task'] == 'addrecurring') {
            $tblAllInvoice = new TblAllInvoice();
            $invoice->dateCreated = date('Y-m-d');

            $invoice->invoiceNumber = 'Inv-' . sprintf('%1$07d', TblNewInvoiceMySqlExtDAO::getMaxNumId());
            $invoice_id = DAOFactory::getTblNewInvoiceDAO()->insert($invoice);
            $tblAllInvoice->newRecurringId = ($recuringid != '') ? $recuringid : 0;
            $tblAllInvoice->newInvoiceId = $invoice_id;
            $allinvoiceid = DAOFactory::getTblAllInvoiceDAO()->insert($tblAllInvoice);
            $this->invoiceSummary($allinvoiceid);
        } elseif ($_POST['task'] == 'updateinvoice' || $_POST['task'] == 'updaterecurring' || $_POST['status'] == "post") {
            $invoice_id = $invoice->id = Session::getSession('invoiceid');
            $invoice->dateModified = date('Y-m-d');
            $invoice->totalAmountLine = $this->saveInvoiceLine($invoice_id);
            DAOFactory::getTblNewInvoiceDAO()->update($invoice);
            $allinvoiceid = DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoice_id);
            $this->invoiceSummary($allinvoiceid[0]->id);
        }
        $this->saveInvoiceLine($invoice_id);

        if (isset($_POST['status'])) {
            if ($_POST['status'] == "post") {
                Session::setSession('status', 'posted');
                Session::setSession('invoiceid', $invoice_id);

                echo 'add';
            }
        }
        exit;
    }

    function invoiceSummary($allinvoiceid) {
        $invoiceamount = new TblInvoiceAmount();

        $invoiceamount->allInvoiceId = $allinvoiceid;
        $invoiceamount->subTotalAmount = Controller::removeComma($_POST['subtotal']);
        ;
        $invoiceamount->vatAmount = Controller::removeComma($_POST['vat']);
        $invoiceamount->discountAmount = Controller::removeComma($_POST['discounttotal']);
        $invoiceamount->grandTotal = Controller::removeComma($_POST['grandtotal']);

        if ($_POST['task'] == 'updateinvoice') {
            foreach (DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allinvoiceid) as $each) {
                $invoiceamount->id = $each->id;
            }
            DAOFactory::getTblInvoiceAmountDAO()->update($invoiceamount);
        } else {
            DAOFactory::getTblInvoiceAmountDAO()->insert($invoiceamount);
        }
//        uncommment when use in trial balance
        if ($_POST['status'] == 'post') {
//            $outputvat = ($invoiceamount->subTotalAmount - $invoiceamount->discountAmount) * 0.12;
            if (DAOFactory::getTblMopDAO()->load($_POST['mopId'])->code == 'Cash' || DAOFactory::getTblMopDAO()->load($_POST['mopId'])->code == 'Check') {
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1000-002'), $invoiceamount->grandTotal, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
                if ($invoiceamount->discountAmount > 0) {
                    $servfeelvld = $invoiceamount->subTotalAmount - $invoiceamount->discountAmount;
                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('4000-002'), $invoiceamount->discountAmount, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
//                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1000-002'), $servfeelvld + $invoiceamount->vatAmount, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
//                     echo $invoiceamount->vatAmount;exit;
                }
//                else {
//                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1001-001'), $invoiceamount->grandTotal, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
//                }
//                    if ($invoiceamount->discountAmount > 0) {
//                        
//                    }
            } elseif (DAOFactory::getTblMopDAO()->load($_POST['mopId'])->code == 'HMO') {
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1001-001'), $invoiceamount->grandTotal, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
                if ($invoiceamount->discountAmount > 0) {
                    $servfeelvld = $invoiceamount->subTotalAmount - $invoiceamount->discountAmount;

                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('4000-002'), $invoiceamount->discountAmount, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
//                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1000-002'), $servfeelvld + $invoiceamount->vatAmount, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
                }
//                else {
//                    Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1001-001'), $invoiceamount->grandTotal, 0, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
//                }
            }
//            $this->incomeTaxPayable($_POST['dateIssued'],$allinvoiceid);
            if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax == 'vat') {
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('2000-005'), 0, $invoiceamount->vatAmount, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
            }

            Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('4000-001'), 0, $invoiceamount->subTotalAmount, $allinvoiceid, date('Y-m-d', strtotime($_POST['dateIssued'])), 'invoice', 'dc');
        }
    }

    function deleteInvoice() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblNewInvoiceDAO()->delete($value);
        }
    }

    function addRecurring() {
        $this->setRecurring(new TblNewRecurring());
    }

    function updateRecurring() {
        $this->setRecurring(DAOFactory::getTblNewRecurringDAO()->load(Session::getSession('recurringid')));
    }

    function setRecurring($recurring) {
        $recurring->startDate = date('Y-m-d', strtotime($_POST['dateIssued']));
        $recurring->endDate = date('Y-m-d', strtotime($_POST['dueDate']));
        $recurring->clientId = $_POST['clientId'];
        $recurring->frequency = $_POST['frequency'];
        $recurring->pOSO = $_POST['pOSO'];
        $recurring->discount = $_POST['discount'];
        $recurring->particular = $_POST['particular'];
        $recurring->remarks = $_POST['remarks'];
        $recurring->dateCreated = date('Y-m-d');
        $recurring->vatInclusive = isset($_POST['isInclusive']) ? 'yes' : 'no';
        $recurring->currencyId = $_POST['currencyId'];
        $recurring->rate = ($_POST['crate'] != '') ? $_POST['crate'] : '';
        if ($_POST['task'] == 'addrecurring') {
            $recurring->recurringNumber = sprintf('%1$07d', TblNewRecurringMySqlExtDAO::getMaxNumId());
            $recurring->dateCreated = date('Y-m-d');
            $recurring_id = DAOFactory::getTblNewRecurringDAO()->insert($recurring);

//            $recurring = DAOFactory::getTblNewRecurringDAO()->load($recurring_id);
//            $recurring->recurringNumber = sprintf('%1$07d', count(TblNewRecurringMySqlExtDAO::getData()) + 1);
//            DAOFactory::getTblNewRecurringDAO()->update($recurring);

            $this->setInvoice(new TblNewInvoice(), $recurring_id);
        } elseif ($_POST['task'] == 'updaterecurring') {
            $recurring_id = $recurring->id = Session::getSession('recurringid');
            $recurring->dateModified = date('Y-m-d');
            $allinvoice = DAOFactory::getTblAllInvoiceDAO()->queryByNewRecurringId($recurring_id);
            DAOFactory::getTblNewRecurringDAO()->update($recurring);
            // commented
//            $this->setInvoice(DAOFactory::getTblNewInvoiceDAO()->load($allinvoice[0]->newInvoiceId), $recurring_id);
        }
        $this->recurringSummary($recurring_id);
        $this->saveRecurringLine($recurring_id);
    }

    function recurringSummary($newrecurringid) {
        $recurringamount = new TblRecurringAmount();

        $recurringamount->newRecurringId = $newrecurringid;
        $recurringamount->subTotalAmount = str_replace(',', '', $_POST['subtotal']);
        $recurringamount->vatAmount = str_replace(',', '', $_POST['vat']);
        $recurringamount->discountAmount = str_replace(',', '', $_POST['discounttotal']);
        $recurringamount->grandTotal = str_replace(',', '', $_POST['grandtotal']);
        if ($_POST['task'] == 'updaterecurring') {
            foreach (DAOFactory::getTblRecurringAmountDAO()->queryByNewRecurringId($newrecurringid) as $each) {
                $recurringamount->id = $each->id;
            }
            DAOFactory::getTblRecurringAmountDAO()->update($recurringamount);
        } else {
            DAOFactory::getTblRecurringAmountDAO()->insert($recurringamount);
        }
    }

    function deleteRecurring() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblNewRecurringDAO()->delete($value);
        }
    }

    function addCustomer() {
        $this->setCustomer(new TblClient());
//        $url = '';
    }

    function addHMO() {
        $this->setHmo(new TblHmo());
//        $url = '';
    }

    function updateCustomer() {
//        if (Session::getSession('clientid') != '') {
//            $customer = DAOFactory::getTblClientDAO()->load(Session::getSession('clientid'));
//            $customer->active = ($_POST['active']=='yes') ? 'yes' : 'no';
//            DAOFactory::getTblClientDAO()->update($customer);
//        } 
        $this->setCustomer(DAOFactory::getTblClientDAO()->load(Session::getSession('clientid')));
    }

    function updateHMO() {
//        if (Session::getSession('hmoid') != '') {
//            $hmo = DAOFactory::getTblHmoDAO()->load(Session::getSession('hmoid'));
//            $hmo->active = ($_POST['active']=='yes') ? 'yes' : 'no';
//            DAOFactory::getTblHmoDAO()->update($hmo);
//        } 
        $this->setHmo(DAOFactory::getTblHmoDAO()->load(Session::getSession('hmoid')));
    }

    function setCustomer($customer) {
//        echo $_POST['clientnum'];
        if (TblClientMySqlExtDAO::checkClientNumber() >= 1) {
            $data = array("value" => 'error', "text" => 'Patient ID no. is already existing or may be used in transaction.');
            echo json_encode($data);
            exit;
        }

        $customer->clientAccount = $_POST['clientAccount'];
        $customer->clientName = $_POST['clientName'];
        $customer->address = $_POST['address'];
        $customer->tinNum = $_POST['tinNum'];
        $customer->emailAddress = $_POST['emailAddress'];
        $customer->phoneNumber = $_POST['phoneNumber'];
        $customer->hmo = $_POST['hmo'];
        $customer->hmoNum = $_POST['hmoNum'];
        $customer->contactName = $_POST['contactName'];
        $customer->contactNum = $_POST['contactNum'];
        $customer->contactEmailAddress = $_POST['contactEmailAddress'];
        //$customer->taxId = $_POST['taxId'];
        //$customer->bankId = $_POST['bankId'] != '' ? $_POST['bankId'] : 0;
        // $customer->mopId = $_POST['mopId'];
//        $customer->termId = 0;
        // $customer->currencyId = $_POST['currencyId'];
        //  $customer->glPosting = $_POST['glPosting'];
        $customer->hmo = $_POST['hmo'];
        $customer->vatInclusive = (isset($_POST['vatInclusive']) ? 'yes' : 'no');
        $customer->active = ($_POST['active'] == 'yes') ? 'yes' : 'no';
        if ($_POST['task'] == 'addclient' && Session::getSession('clientid') == '') {
            $customer->orgId = Session::getSession('medorgid');
            $customer->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblClientDAO()->insert($customer);

            if (isset($_POST['returnurl'])) {
                $data = array("value" => $id, "text" => $_POST['clientName'],
                    "clientAccount" => $_POST['clientAccount'], "address" => $_POST['address']);
                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updateclient' || ($_POST['task'] == 'addclient' && Session::getSession('clientid') != '')) {
            $customer->id = Session::getSession('clientid');
            $customer->dateModified = date('Y-m-d');
            DAOFactory::getTblClientDAO()->update($customer);
            Session::setSession('clientid', '');
            if (isset($_POST['returnurl'])) {
                $data = array("value" => Session::getSession('clientid'), "text" => $_POST['clientName'],
                    "address" => $_POST['address'], "currencyId" => '');

                echo json_encode($data);
                exit;
            }
        }
        header('Location: ' . URL . 'invoice/customers');
    }

    function setHmo($hmo) {
        if (TblHmoMySqlExtDAO::checkHMONumber() >= 1) {
            $data = array("value" => 'error', "text" => 'Patient ID no. is already existing.');
            echo json_encode($data);
            exit;
        }

        $hmo->hmoAccount = $_POST['hmoAccount'];
        $hmo->hmoName = $_POST['hmoName'];
        $hmo->address = $_POST['address'];
        $hmo->tin = $_POST['tin'];
        $hmo->emailAddress = $_POST['emailAddress'];
        $hmo->phoneNumber = $_POST['phoneNumber'];
        $hmo->faxNumber = $_POST['faxNumber'];
        $hmo->glPosting = $_POST['glPosting'];
        $hmo->active = ($_POST['active']=='yes') ? 'yes' : 'no';
//       print_r($hmo); exit;
        if ($_POST['task'] == 'addHmo' && Session::getSession('hmoid') == '') {
            $hmo->orgId = Session::getSession('medorgid');
            $hmo->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblHmoDAO()->insert($hmo);

            if (isset($_POST['returnurl'])) {
                $data = array("value" => $id, "text" => $_POST['hmoName'],
                    "address" => $_POST['address']);

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updatehmo' || ($_POST['task'] == 'addHmo' && Session::getSession('hmoid') != '')) {
//            $hmo->id = Session::getSession('hmoid');
            $hmo->dateModified = date('Y-m-d');
            DAOFactory::getTblHmoDAO()->update($hmo);
            // Session::setSession('hmoid', '');
            if (isset($_POST['returnurl'])) {
                $data = array("value" => Session::getSession('hmoid'), "text" => $_POST['hmoName'],
                    "address" => $_POST['address']);

                echo json_encode($data);
//                Session::setSession('hmoid', '');
                exit;
            }
            Session::setSession('hmoid', '');

            header('Location: ' . URL . 'invoice/hmo');
            exit;
        }
        // exit;
    }

    function deleteCustomer() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblClientDAO()->delete($value);
        }
    }

    function deleteHMO() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblHmoDAO()->delete($value);
        }
    }

    function addItem() {
        $this->setItem(new TblItem);
    }

    function updateItem() {
        $this->setItem(DAOFactory::getTblItemDAO()->load(Session::getSession('itemid')));
    }

    function deleteItem() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblItemDAO()->delete($value);
        }
    }

    function setItem($item) {
        $item->itemCode = $_POST['itemCode'];
        $item->description = $_POST['description'];
//        $item->averageCost = $_POST['averageCost'];
        $item->unitCost = str_replace(',', '', $_POST['unitCost']);
        $item->glPosting = $_POST['glPosting'];
//        $item->taxId = $_POST['taxId'];
//        $item->vatInclusive = (isset($_POST['vatInclusive']) ? 'yes' : 'no');
//        $item->orgId = Session::getSession('orgid');
        if ($_POST['task'] == 'additem' && Session::getSession('itemid') == '') {
            $item->orgId = Session::getSession('medorgid');
            $item->dateCreated = date('Y-m-d');
            $id = DAOFactory::getTblItemDAO()->insert($item);

            if (isset($_POST['returnurl'])) {
                $data = array("id" => $id, "text" => $_POST['itemCode'],
                    "description" => $_POST['description'], "value" => $_POST['unitCost']);

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updateitem' || ($_POST['task'] == 'additem' && Session::getSession('itemid') != '')) {
            $item->id = Session::getSession('itemid');
            $item->dateModified = date('Y-m-d');

            DAOFactory::getTblItemDAO()->update($item);

            Session::setSession('itemid', '');
            if (isset($_POST['returnurl'])) {
                $data = array("id" => Session::getSession('itemid'), "text" => $_POST['itemCode'],
                    "description" => $_POST['description'], "value" => $_POST['unitCost']);

                echo json_encode($data);
                exit;
            }
        }

        header('Location: ' . URL . 'invoice/items');
    }

    function invoiceItems() {
        $items = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('medorgid'));
        $vats = DAOFactory::getTblTaxDAO()->queryAll();
        $taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax;

        if (count($items > 0)) {
            echo '<tr class="row-item">
			<td class="mystyle"><input type="button" name="delete"  class="del delitem"></td>';
            echo '<td class="mystyle"><select class="items" name="itemid[]" required>';
            echo '<option value="">--Select--</option>';
            foreach ($items as $item) {

                echo '<option value="' . $item->id . '">' . $item->itemCode . '-' . $item->description . '</option>';
            }
            echo '<option value="additem">Add Item</option>';
            echo '</select></td>';
            echo '<td class="mystyle"><input type="text" name="itemDescription[]" class="description"></td>';
            echo '<td class="mystyle"><input type="text" name="unitCost[]" class="unitCost isNumeric linetext" value="0.00"/></td>';
            echo '<td class="mystyle"><input type="text" name="quantity[]" class="quantity nodecimal linetext" value="0" required"/></td>';
            echo'<td class="mystyle" >';

            if ($taxtype == 'vat') {
                echo '<input type="text" value="Vatable" class="vata" readonly>';
            } else {
                echo '<input type="text" value="Vat Exempt" class="vata" readonly>';
            }
            echo '</td>';
            echo '<td class="mystyle"><input type="text" class="itemnet linetext isNumeric" readonly value="0.00" ></td>';
            echo '<td class="mystyle">
                            <div class="adddel">
                                <input type="button" name="add"  class="a additem" id="additem">
								<div>
									
								</div>	
                            </div> 
                        </td>';
            echo '</tr>';
        }
    }

    function invoiceTask() {
        $items = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('medorgid'));
        $vats = DAOFactory::getTblTaxDAO()->queryAll();
        $taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'))->typeOfTax;

        if (count($items > 0)) {
            echo '<tr class="row-item">' .
            '<td class="mystyle"><input type="button" name="delete"  class="del deltask"></td>';
            echo'<td class="mystyle" ><select name="taskid[]" class="taskid" required>';
            echo '<option value="">--Select--</option>';
            foreach ($items as $item) {
                echo '<option value="' . $item->id . '">' . $item->taskCode . '-' . $item->description . '</option>';
            }
            echo '<option value="addtask">[Add Service]</option>' .
            '</select></td>';
            echo '<td class="mystyle"><input type="text" name="taskDescription[]" class="description"></td>';
			 echo'<td class="mystyle" >';
            if ($taxtype == 'vat') {
                echo '<select class="vatselectInvoice" name="vatselectInvoice[]">'
                . '<option value="1" ';
                echo $taxtype == "vat" ? "selected" : "";
                echo '>Vatable</option>'
                . '<option value="2" ';
                echo ($taxtype == "percentage") ? "selected" : "";
                echo '>Non-VAT</option></select>';
            } else {
                echo '<input type="text" value="Non-VAT" readonly>
                      <input type="hidden" name="vatselectInvoice[]" class="vatselectInvoice"  value="2" >';
            }
            echo '</td>';
             echo '<td class="mystyle"><input type="text" name="hour[]" class="hour nodecimal linetext" required value="0" maxlength="2" /></td>';
			
			echo '<td class="mystyle"><input type="text" name="rate[]" class="rate isNumeric linetext" value="0.00" maxlength="9" /></td>';
           
//            echo'<td class="mystyle" ><select class="vatselectInvoice" name="vatselectInvoice[]">'
//            . '<option value="1" ';
//            echo $taxtype == "vat" ? "selected" : "";
//            echo '>Vatable</option>'
//            . '<option value="2" ';
//            echo ($taxtype == "percentage") ? "selected" : "";
//            echo '>Vat Exempt</option></select></td>';
           
            echo '<td class="mystyle"><input type="text" class="tasknet linetext isNumeric" readonly value="0.00"/></td>';
            echo '<td class="mystyle">
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask" id="addtask">
                            </div>
                        </td>	';
            echo '</tr>';
        }
    }

    function getTaskDescription() {

        $result = DAOFactory::getTblTaskDAO()->load($_POST['taskid']);

        $data = array("description" => $result->description, "rate" => $result->ratePerHour);

        echo json_encode($data);
    }

    function getItemDescription() {

        $result = DAOFactory::getTblItemDAO()->load($_POST['itemid']);

        $data = array("description" => $result->description, "unitcost" => $result->unitCost);

        echo json_encode($data);
    }

    function saveInvoiceLine($invoice_id) {
        $total_net = 0;
        if (isset($_POST['invoicetaskid']) || isset($_POST['invoiceitemid'])) {
            if (!isset($_POST['taskcheck'])) {
                $data = 0;
            } else {
                $data = (isset($_POST['invoicetaskid'])) ? implode(',', $_POST['invoicetaskid']) . ',' : 0 . ',';
            }
            if (!isset($_POST['itemcheck'])) {
                ($data != 0) ? $data .= '0' : ',0';
            } else {
                $data .= (isset($_POST['invoiceitemid'])) ? implode(',', $_POST['invoiceitemid']) : 0;
            }
            TblInvoiceLinesMySqlExtDAO::deleteInvoiceLine($data, $invoice_id);
        }

        if (array_key_exists('taskid', $_POST) && isset($_POST['taskcheck'])) {
            for ($i = 0; $i < count($_POST['taskid']); $i++) {
                $invoiceline = new TblInvoiceLine();
                $invoiceline->newInvoiceId = $invoice_id;
                $invoiceline->taskId = $_POST['taskid'][$i];
                $invoiceline->hour = Controller::removeComma($_POST['hour'][$i]);
//                $task = DAOFactory::getTblTaskDAO()->load($_POST['taskid'][$i]);
                $invoiceline->vat = ($_POST['vatselectInvoice'][$i] == 1) ? 'Vatable' : 'Non-VAT';
//                if ($task->description != $_POST['taskDescription'][$i]) {
                $invoiceline->description = $_POST['taskDescription'][$i];
//                }

//                if ($task->ratePerHour != $_POST['rate'][$i]) {
                    $invoiceline->rate = str_replace(',', '', $_POST['rate'][$i]);
//                }


                $invoiceline->netAmount = $invoiceline->hour * Controller::removeComma($_POST['rate'][$i]);
                $total_net += $invoiceline->netAmount;

                if (isset($_POST['invoicetaskid'][$i]) && $invoice_id == Session::getSession('invoiceid')) {
                    $invoiceline->id = $_POST['invoicetaskid'][$i];
                    DAOFactory::getTblInvoiceLinesDAO()->update($invoiceline);
                } else {
                    DAOFactory::getTblInvoiceLinesDAO()->insert($invoiceline);
                }
            } //exit;
        }

//        if (array_key_exists('itemid', $_POST) && isset($_POST['itemcheck'])) {
//            for ($i = 0; $i < count($_POST['itemid']); $i++) {
//                $invoiceline = new TblInvoiceLine();
//                $invoiceline->newInvoiceId = $invoice_id;
//                $invoiceline->itemId = $_POST['itemid'][$i];
//                $invoiceline->quantity = str_replace(',', '', $_POST['quantity'][$i]);
//                $item = DAOFactory::getTblItemDAO()->load($_POST['itemid'][$i]);
//                if ($item->description != $_POST['itemDescription'][$i]) {
//                    $invoiceline->itemDescription = $_POST['itemDescription'][$i];
//                }
//
//                if ($item->unitCost != $_POST['unitCost'][$i]) {
//                    $invoiceline->unitCost = floatval(str_replace(',', '', $_POST['unitCost'][$i]));
//                }
//
//                $invoiceline->netAmount = $invoiceline->quantity * floatval(str_replace(',', '', $_POST['unitCost'][$i]));
//
//                $total_net += $invoiceline->netAmount;
//
//                if (isset($_POST['invoiceitemid'][$i])) {
//                    $invoiceline->id = $_POST['invoiceitemid'][$i];
//                    DAOFactory::getTblInvoiceLinesDAO()->update($invoiceline);
//                } else {
//                    DAOFactory::getTblInvoiceLinesDAO()->insert($invoiceline);
//                }
//            }
//        }

        return $total_net;
    }

    function saveRecurringLine($recurring_id) {
        if (isset($_POST['invoicetaskid']) || isset($_POST['invoiceitemid'])) {

            if (!isset($_POST['taskcheck'])) {
                $data = 0;
            } else {
                $data = (isset($_POST['invoicetaskid'])) ? implode(',', $_POST['invoicetaskid']) . ',' : 0 . ',';
            }
            if (!isset($_POST['itemcheck'])) {
                ($data != 0) ? $data .= '0' : ',0';
            } else {
                $data .= (isset($_POST['invoiceitemid'])) ? implode(',', $_POST['invoiceitemid']) : 0;
            }
            TblRecurringLinesMySqlExtDAO::deleteRecurringLine($data);
        }

        if (array_key_exists('taskid', $_POST) && isset($_POST['taskcheck'])) {

            for ($i = 0; $i < count($_POST['taskid']); $i++) {
                $recurringline = new TblRecurringLine();
                $recurringline->newRecurringId = $recurring_id;
                $recurringline->taskId = $_POST['taskid'][$i];
                $recurringline->hour = str_replace(',', '', $_POST['hour'][$i]);
                $recurringline->taxId = $_POST['tasktaxid'][$i];
                $recurringline->description = $_POST['taskDescription'][$i];
                $task = DAOFactory::getTblTaskDAO()->load($_POST['taskid'][$i]);

                if ($task->ratePerHour != $_POST['rate'][$i]) {
                    $recurringline->rate = str_replace(',', '', $_POST['rate'][$i]);
                }
                $recurringline->netAmount = $recurringline->hour * str_replace(',', '', $_POST['rate'][$i]);

                if (isset($_POST['invoicetaskid'][$i])) {
                    $recurringline->id = $_POST['invoicetaskid'][$i];
                    DAOFactory::getTblRecurringLinesDAO()->update($recurringline);
                } else {
                    DAOFactory::getTblRecurringLinesDAO()->insert($recurringline);
                }
            }
        }

        if (array_key_exists('itemid', $_POST) && isset($_POST['itemcheck'])) {
            for ($i = 0; $i < count($_POST['itemid']); $i++) {
                $recurringline = new TblRecurringLine();
                $recurringline->newRecurringId = $recurring_id;
                $recurringline->itemId = $_POST['itemid'][$i];
                $recurringline->quantity = str_replace(',', '', $_POST['quantity'][$i]);
                $recurringline->taxId = $_POST['itemtaxid'][$i];
                $recurringline->description = $_POST['itemDescription'][$i];

                $item = DAOFactory::getTblItemDAO()->load($_POST['itemid'][$i]);
                if ($item->description != $_POST['itemDescription'][$i]) {
                    $recurringline->itemDescription = $_POST['itemDescription'][$i];
                }

                if ($item->unitCost != $_POST['unitCost'][$i]) {
                    $recurringline->unitCost = str_replace(',', '', $_POST['unitCost'][$i]);
                }
                $recurringline->netAmount = $recurringline->quantity * str_replace(',', '', $_POST['unitCost'][$i]);

                if (isset($_POST['invoiceitemid'][$i])) {
                    $recurringline->id = $_POST['invoiceitemid'][$i];
                    DAOFactory::getTblRecurringLinesDAO()->update($recurringline);
                } else {
                    DAOFactory::getTblRecurringLinesDAO()->insert($recurringline);
                }
            }
        }
    }

    function calcVat() {
        $client = DAOFactory::getTblClientDAO()->load($_POST['clientId']);
        $tax = DAOFactory::getTblTaxDAO()->load($client->taxId);
        $data = array("vatable" => $client->vatInclusive, "rate" => $tax->rate);
        echo json_encode($data);
    }

    function getAddress() {
        if (is_numeric($_POST['clientId'])) {
            $client = DAOFactory::getTblClientDAO()->load($_POST['clientId']);
            $data = array("address" => $client->address);
            echo json_encode($data);
        }
    }

    function bankName() {
        if (is_numeric($_POST['bankid'])) {
            echo DAOFactory::getTblBankDAO()->load($_POST['bankid'])->bankAccountNumber;
        }
    }

    function copyReversedInvoice() {
        if (Session::getSession('invoiceid') != '') {
//            foreach ($_POST['chk'] as $id) {
            $id = Session::getSession('invoiceid');
            $invoice = DAOFactory::getTblNewInvoiceDAO()->load($id);
            $oldinvoice = $invoice->id;
            $invoice->id = '';
            $invoice->dateCreated = $invoice->dateReversed = date('Y-m-d');
//                $invoice->invoiceNumber = 'Inv-' . sprintf('%1$07d', TblNewInvoiceMySqlExtDAO::getMaxNumId());
            $invoice->status = 'reversed';
            $invoiceid = DAOFactory::getTblNewInvoiceDAO()->insert($invoice);
            $globalinvoice = new GlobalClass();

            //save to tblallinvoice
            foreach (DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($id) as $each) {
                $allinvoice = $each;
            }
            $oldallinvoice = $allinvoice->id;
            $allinvoice->id = '';
            $allinvoice->newInvoiceId = $invoiceid;
            $allinvoiceid = DAOFactory::getTblAllInvoiceDAO()->insert($allinvoice);

            //save to tblinvoiceamount
            foreach (DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($oldallinvoice) as $each) {
                $invoiceamount = $each;
            }
            $invoiceamount->id = '';
            $invoiceamount->allInvoiceId = $allinvoiceid;
            $invoiceamount->discountAmount = $invoiceamount->discountAmount * -1;
            $invoiceamount->subTotalAmount = $invoiceamount->subTotalAmount * -1;
            $invoiceamount->vatAmount = $invoiceamount->vatAmount * -1;
            $invoiceamount->grandTotal = $invoiceamount->grandTotal * -1;
            DAOFactory::getTblInvoiceAmountDAO()->insert($invoiceamount);

            $globalinvoice->saveInvoiceLine($invoiceid, $oldinvoice);
            
            Controller::copyReverseTB($oldallinvoice,$allinvoiceid, $invoice->dateIssued, 'invoice');
//            }
        }
    }

    
    //below function not being used
    function copyRecurring() {

        if (isset($_POST['chk'])) {
            foreach ($_POST['chk'] as $id) {
                $recurring = DAOFactory::getTblNewRecurringDAO()->load($id);
                $oldrecurring = $recurring->id;
                $recurring->id = '';
                $recurring->dateCreated = $recurring->dateIssued = date('Y-m-d');
                $recurring->recurringNumber = '';
                $recurring->recurringNumber = sprintf('%1$07d', TblNewRecurringMySqlExtDAO::getMaxNumId());
                $recurringid = DAOFactory::getTblNewRecurringDAO()->insert($recurring);

                $recurringlines = DAOFactory::getTblRecurringLinesDAO()->queryByNewRecurringId($oldrecurring);
                foreach (DAOFactory::getTblRecurringAmountDAO()->queryByNewRecurringId($oldrecurring) as $each) {
                    $recurringamount = $each;
                }
                $recurringamount->id = '';
                DAOFactory::getTblRecurringAmountDAO()->insert($recurringamount);
                $oldinvoice = $allinvoice->newInvoiceId;

                $invoice = DAOFactory::getTblNewInvoiceDAO()->load($oldinvoice);

                $invoice->id = '';
                $invoice->dateCreated = date('Y-m-d');
                $invoiceid = DAOFactory::getTblNewInvoiceDAO()->insert($invoice);

                $invoice = DAOFactory::getTblNewInvoiceDAO()->load($invoiceid);
                $invoice->invoiceNumber = sprintf('%1$07d', $invoiceid);
                DAOFactory::getTblNewInvoiceDAO()->update($invoice);

                foreach ($recurringlines as $recurringline) {
                    $recurringline->newRecurringId = $recurring->id;
                    $recurringline->id = '';
                    DAOFactory::getTblRecurringLinesDAO()->insert($recurringline);

                    $recurringline->newInvoiceId = $invoiceid;
                    DAOFactory::getTblInvoiceLinesDAO()->insert($recurringline);
                }

                $oldallinvoice = $allinvoice->id;
                $allinvoice->id = '';
                $allinvoice->newInvoiceId = $invoiceid;
                $allinvoice->newRecurringId = $recurringid;

                DAOFactory::getTblAllInvoiceDAO()->insert($allinvoice);
            }
        }
    }

    function enterPayment() {

        if (isset($_POST['chkcol'])) {
            $payment = new TblEnterPayment();
            $payment->colNum = 'Col-' . sprintf('%1$07d', TblEnterPaymentMySqlExtDAO::getMaxNumId());
            $payment->timeTrackingId = 0;
            $payment->amountReceived = Controller::removeComma($_POST['amountReceived']);
            $payment->dateReceived = date('Y-m-d', strtotime($_POST['dateReceived'])); //date('Y-m-d');
            $payment->refNum = $_POST['refNum'];
            $payment->mopId = $_POST['mopId'];
            $payment->hmoId = $_POST['hmoId'];
            $payment->glPosting = $_POST['glPosting'];
            $payment->whtTax = $_POST['whtTax'];
            $payment->posted = 'yes';
            $payment->status = 'posted';
            $payment->notes = $_POST['notes'];

            $paymentid = DAOFactory::getTblEnterPaymentDAO()->insert($payment);

            foreach ($_POST['chkcol'] as $i => $object) {
                $collection = new TblAllCollection();
                $collection->enterPaymentId = $paymentid;

                foreach (DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($object) as $each) {
                    $allinvoiceid = $each->id;
                }
                foreach (DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allinvoiceid) as $each) {
                    $collection->invoicedAmountId = $each->id;
                }
                $collection->appliedAmount = Controller::removeComma($_POST['amount'][$object]);
                $collection->whtAmount = Controller::removeComma($_POST['whtax'][$object]);
                $collection->totalBalance = Controller::removeComma($_POST['balance'][$object]);

                $colid = DAOFactory::getTblAllCollectionDAO()->insert($collection);

//                uncomment for trial balance
//            $coaid = TblNewInvoiceMySqlExtDAO::getCoaCodeId('1001-001');
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1001-001'), 0, $collection->appliedAmount + $collection->whtAmount, $colid, date('Y-m-d', strtotime($_POST['dateReceived'])), 'collection', 'dc');
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1002-005'), $collection->whtAmount, 0, $colid, date('Y-m-d', strtotime($_POST['dateReceived'])), 'collection', 'dc');
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('1000-002'), $collection->appliedAmount, 0, $colid, date('Y-m-d', strtotime($_POST['dateReceived'])), 'collection', 'dc');
//                $this->setTrialBalance($coaid, $collection->appliedAmount, 0, date('Y-m-d'));
            }
        }
        header('Location: ' . URL . 'invoice/collection');
    }

    function addTask() {
        $this->setTask(new TblTask());
    }

    function updateTask() {
//        if (Session::getSession('taskid') != '') {
//            $sevice = DAOFactory::getTblTaskDAO()->load(Session::getSession('taskid'));
//            $sevice->active = ($_POST['active']=='yes') ? 'yes' : 'no';
//            DAOFactory::getTblTaskDAO()->update($sevice);
//        } 
        $this->setTask(DAOFactory::getTblTaskDAO()->load(Session::getSession('taskid')));
    }

    function setTask($task) {
        $global = new GlobalClass();

        if ($global->checkDuplicate() >= 1) {
            $data = array("value" => 'error', "text" => 'Service ID no. is already existing.');
            echo json_encode($data);
            exit;
        }

        $task->taskCode = $_POST['taskCode'];
        $task->description = $_POST['description'];
        $task->ratePerHour = Controller::removeComma($_POST['ratePerHour']);
        $task->vatInclusive = (isset($_POST['vatInclusive']) == 'yes') ? 'yes' : 'no';
        $task->glPosting = $_POST['glPosting'];
        $task->active = ($_POST['active'] == 'yes') ? 'yes' : 'no';
        if ($_POST['task'] == 'addtask' && Session::getSession('taskid') == '') {
            $task->orgId = Session::getSession('medorgid');
            $task->dateCreated = date('Y-m-d');
            
            $id = DAOFactory::getTblTaskDAO()->insert($task);

            if (isset($_POST['returnurl'])) {
                $data = array("id" => $id, "text" => $_POST['taskCode'],
                    "description" => $_POST['description'],
                    "value" => Controller::removeComma($_POST['ratePerHour']));

                echo json_encode($data);
                exit;
            }
        } elseif ($_POST['task'] == 'updatetask' || ($_POST['task'] == 'addtask' && Session::getSession('taskid') != '')) {
            $task->id = Session::getSession('taskid');
            $task->dateModified = date('Y-m-d');
            DAOFactory::getTblTaskDAO()->update($task);
            Session::setSession('taskid', '');

            if (isset($_POST['returnurl'])) {
                $data = array("id" => Session::getSession('taskid'), "text" => $_POST['taskCode'],
                    "description" => $_POST['description'],
                    "value" => Controller::removeComma($_POST['ratePerHour']));

                echo json_encode($data);
                exit;
            }
        }
        header('Location: ' . URL . 'invoice/services');
    }

    function deleteTask() {
        $arr_id = $_POST['chk'];

        foreach ($arr_id as $item => $value) {
            DAOFactory::getTblTaskDAO()->delete($value);
        }
    }

    function reverseCollection() {
        if (isset($_POST['paymentids'])) {
            foreach ($_POST['paymentids'] as $item) {
                $payment = DAOFactory::getTblEnterPaymentDAO()->load($item);

                if ($payment->status == 'reversed') {
                    echo 'reversed';
                    exit;
                } else {
//                    $payment->colNum = 'Col-' . sprintf('%1$07d',TblEnterPaymentMySqlExtDAO::getMaxNumId());
                    $payment->status = 'reversed';
                    $payment->dateReversed = date('Y-m-d');
                    Session::setSession('paymentid', '');

                    $allcollection = DAOFactory::getTblAllCollectionDAO()->queryByEnterPaymentId($payment->id);
                    $payment->id = '';
                    $newpaymentid = DAOFactory::getTblEnterPaymentDAO()->insert($payment);

                    foreach ($allcollection as $collection) {
                        $collid = $collection->id;
                        $collection->id = '';
                        $collection->enterPaymentId = $newpaymentid;
                        $collection->appliedAmount = $collection->appliedAmount * -1;
                        $collection->whtAmount = $collection->whtAmount * -1;
                        $collection->totalBalance = ($collection->appliedAmount + $collection->whtAmount) * -1;

                        $newcollid = DAOFactory::getTblAllCollectionDAO()->insert($collection);
                        Controller::copyReverseTB($collid,$newcollid, $payment->dateReceived, 'collection');
                    }
//			        DAOFactory::getTblEnterPaymentDAO()->update($payment);
                }
            }
        }

        echo '';
    }

    function reverseInvoice() {
        $status = TblEnterPaymentMySqlExtDAO::checkCollection();
        if ($status == 'reversed' || $status == '') {
//	        $invoice = DAOFactory::getTblNewInvoiceDAO()->load(Session::getSession('invoiceid'));
//	        $invoice->status = 'reversed';
//                $invoice->dateReversed = date('Y-m-d');
//
//	        DAOFactory::getTblNewInvoiceDAO()->update($invoice);
            $this->copyReversedInvoice();
            echo '';
        } else {
            echo 'invalid';
        }
    }

    function incomeTaxPayable($date, $allinvoiceid) {
        require_once 'public/report.class.php';

        $incomestatement = ReportClass::incomeStatement($date);
        if ($incomestatement && isset($date)) {
            if ($incomestatement->provincome > 0) {
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('2005'), 0, $incomestatement->provincome, $allinvoiceid, date('Y-m-d', strtotime($date)), 'invoice', 'dc');
                Controller::setTrialBalance(TblNewInvoiceMySqlExtDAO::getCoaCodeId('6001-001'), $incomestatement->provincome, 0, $allinvoiceid, date('Y-m-d', strtotime($date)), 'invoice', 'dc');
            }
        }
    }
	
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

}

?>