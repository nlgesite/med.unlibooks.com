<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AdminCoaDAO.class.php');
	require_once('class/dto/AdminCoa.class.php');
	require_once('class/mysql/AdminCoaMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminCoaMySqlExtDAO.class.php');
	require_once('class/dao/AdminUserDAO.class.php');
	require_once('class/dto/AdminUser.class.php');
	require_once('class/mysql/AdminUserMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminUserMySqlExtDAO.class.php');
	require_once('class/dao/AmApiProductDAO.class.php');
	require_once('class/dto/AmApiProduct.class.php');
	require_once('class/mysql/AmApiProductMySqlDAO.class.php');
	require_once('class/mysql/ext/AmApiProductMySqlExtDAO.class.php');
	require_once('class/dao/AmApiSubscriptionDAO.class.php');
	require_once('class/dto/AmApiSubscription.class.php');
	require_once('class/mysql/AmApiSubscriptionMySqlDAO.class.php');
	require_once('class/mysql/ext/AmApiSubscriptionMySqlExtDAO.class.php');
	require_once('class/dao/TblAllCollectionDAO.class.php');
	require_once('class/dto/TblAllCollection.class.php');
	require_once('class/mysql/TblAllCollectionMySqlDAO.class.php');
	require_once('class/mysql/ext/TblAllCollectionMySqlExtDAO.class.php');
	require_once('class/dao/TblAllInvoiceDAO.class.php');
	require_once('class/dto/TblAllInvoice.class.php');
	require_once('class/mysql/TblAllInvoiceMySqlDAO.class.php');
	require_once('class/mysql/ext/TblAllInvoiceMySqlExtDAO.class.php');
	require_once('class/dao/TblAtc1601eDAO.class.php');
	require_once('class/dto/TblAtc1601e.class.php');
	require_once('class/mysql/TblAtc1601eMySqlDAO.class.php');
	require_once('class/mysql/ext/TblAtc1601eMySqlExtDAO.class.php');
	require_once('class/dao/TblClientDAO.class.php');
	require_once('class/dto/TblClient.class.php');
	require_once('class/mysql/TblClientMySqlDAO.class.php');
	require_once('class/mysql/ext/TblClientMySqlExtDAO.class.php');
	require_once('class/dao/TblCoaDAO.class.php');
	require_once('class/dto/TblCoa.class.php');
	require_once('class/mysql/TblCoaMySqlDAO.class.php');
	require_once('class/mysql/ext/TblCoaMySqlExtDAO.class.php');
	require_once('class/dao/TblCommentDAO.class.php');
	require_once('class/dto/TblComment.class.php');
	require_once('class/mysql/TblCommentMySqlDAO.class.php');
	require_once('class/mysql/ext/TblCommentMySqlExtDAO.class.php');
	require_once('class/dao/TblEnterPaymentDAO.class.php');
	require_once('class/dto/TblEnterPayment.class.php');
	require_once('class/mysql/TblEnterPaymentMySqlDAO.class.php');
	require_once('class/mysql/ext/TblEnterPaymentMySqlExtDAO.class.php');
	require_once('class/dao/TblExpenseAmountDAO.class.php');
	require_once('class/dto/TblExpenseAmount.class.php');
	require_once('class/mysql/TblExpenseAmountMySqlDAO.class.php');
	require_once('class/mysql/ext/TblExpenseAmountMySqlExtDAO.class.php');
	require_once('class/dao/TblExpenseLinesDAO.class.php');
	require_once('class/dto/TblExpenseLine.class.php');
	require_once('class/mysql/TblExpenseLinesMySqlDAO.class.php');
	require_once('class/mysql/ext/TblExpenseLinesMySqlExtDAO.class.php');
	require_once('class/dao/TblForm1601cDAO.class.php');
	require_once('class/dto/TblForm1601c.class.php');
	require_once('class/mysql/TblForm1601cMySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm1601cMySqlExtDAO.class.php');
	require_once('class/dao/TblForm1601eDAO.class.php');
	require_once('class/dto/TblForm1601e.class.php');
	require_once('class/mysql/TblForm1601eMySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm1601eMySqlExtDAO.class.php');
	require_once('class/dao/TblForm1701DAO.class.php');
	require_once('class/dto/TblForm1701.class.php');
	require_once('class/mysql/TblForm1701MySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm1701MySqlExtDAO.class.php');
	require_once('class/dao/TblForm1701qDAO.class.php');
	require_once('class/dto/TblForm1701q.class.php');
	require_once('class/mysql/TblForm1701qMySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm1701qMySqlExtDAO.class.php');
	require_once('class/dao/TblForm2550mDAO.class.php');
	require_once('class/dto/TblForm2550m.class.php');
	require_once('class/mysql/TblForm2550mMySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm2550mMySqlExtDAO.class.php');
	require_once('class/dao/TblForm2550qDAO.class.php');
	require_once('class/dto/TblForm2550q.class.php');
	require_once('class/mysql/TblForm2550qMySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm2550qMySqlExtDAO.class.php');
	require_once('class/dao/TblForm2551mDAO.class.php');
	require_once('class/dto/TblForm2551m.class.php');
	require_once('class/mysql/TblForm2551mMySqlDAO.class.php');
	require_once('class/mysql/ext/TblForm2551mMySqlExtDAO.class.php');
	require_once('class/dao/TblHmoDAO.class.php');
	require_once('class/dto/TblHmo.class.php');
	require_once('class/mysql/TblHmoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblHmoMySqlExtDAO.class.php');
	require_once('class/dao/TblInvoiceAmountDAO.class.php');
	require_once('class/dto/TblInvoiceAmount.class.php');
	require_once('class/mysql/TblInvoiceAmountMySqlDAO.class.php');
	require_once('class/mysql/ext/TblInvoiceAmountMySqlExtDAO.class.php');
	require_once('class/dao/TblInvoiceLinesDAO.class.php');
	require_once('class/dto/TblInvoiceLine.class.php');
	require_once('class/mysql/TblInvoiceLinesMySqlDAO.class.php');
	require_once('class/mysql/ext/TblInvoiceLinesMySqlExtDAO.class.php');
	require_once('class/dao/TblJournalEntryDAO.class.php');
	require_once('class/dto/TblJournalEntry.class.php');
	require_once('class/mysql/TblJournalEntryMySqlDAO.class.php');
	require_once('class/mysql/ext/TblJournalEntryMySqlExtDAO.class.php');
	require_once('class/dao/TblJournalLinesDAO.class.php');
	require_once('class/dto/TblJournalLine.class.php');
	require_once('class/mysql/TblJournalLinesMySqlDAO.class.php');
	require_once('class/mysql/ext/TblJournalLinesMySqlExtDAO.class.php');
	require_once('class/dao/TblMopDAO.class.php');
	require_once('class/dto/TblMop.class.php');
	require_once('class/mysql/TblMopMySqlDAO.class.php');
	require_once('class/mysql/ext/TblMopMySqlExtDAO.class.php');
	require_once('class/dao/TblNewExpenseDAO.class.php');
	require_once('class/dto/TblNewExpense.class.php');
	require_once('class/mysql/TblNewExpenseMySqlDAO.class.php');
	require_once('class/mysql/ext/TblNewExpenseMySqlExtDAO.class.php');
	require_once('class/dao/TblNewInvoiceDAO.class.php');
	require_once('class/dto/TblNewInvoice.class.php');
	require_once('class/mysql/TblNewInvoiceMySqlDAO.class.php');
	require_once('class/mysql/ext/TblNewInvoiceMySqlExtDAO.class.php');
	require_once('class/dao/TblOrganizationDAO.class.php');
	require_once('class/dto/TblOrganization.class.php');
	require_once('class/mysql/TblOrganizationMySqlDAO.class.php');
	require_once('class/mysql/ext/TblOrganizationMySqlExtDAO.class.php');
	require_once('class/dao/TblOrganizationInfoDAO.class.php');
	require_once('class/dto/TblOrganizationInfo.class.php');
	require_once('class/mysql/TblOrganizationInfoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblOrganizationInfoMySqlExtDAO.class.php');
	require_once('class/dao/TblReferralDAO.class.php');
	require_once('class/dto/TblReferral.class.php');
	require_once('class/mysql/TblReferralMySqlDAO.class.php');
	require_once('class/mysql/ext/TblReferralMySqlExtDAO.class.php');
	require_once('class/dao/TblSupplierDAO.class.php');
	require_once('class/dto/TblSupplier.class.php');
	require_once('class/mysql/TblSupplierMySqlDAO.class.php');
	require_once('class/mysql/ext/TblSupplierMySqlExtDAO.class.php');
	require_once('class/dao/TblSupportDAO.class.php');
	require_once('class/dto/TblSupport.class.php');
	require_once('class/mysql/TblSupportMySqlDAO.class.php');
	require_once('class/mysql/ext/TblSupportMySqlExtDAO.class.php');
	require_once('class/dao/TblTaskDAO.class.php');
	require_once('class/dto/TblTask.class.php');
	require_once('class/mysql/TblTaskMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTaskMySqlExtDAO.class.php');
	require_once('class/dao/TblTaxDAO.class.php');
	require_once('class/dto/TblTax.class.php');
	require_once('class/mysql/TblTaxMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTaxMySqlExtDAO.class.php');
	require_once('class/dao/TblTaxablePeriodDAO.class.php');
	require_once('class/dto/TblTaxablePeriod.class.php');
	require_once('class/mysql/TblTaxablePeriodMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTaxablePeriodMySqlExtDAO.class.php');
	require_once('class/dao/TblTrialBalanceDAO.class.php');
	require_once('class/dto/TblTrialBalance.class.php');
	require_once('class/mysql/TblTrialBalanceMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTrialBalanceMySqlExtDAO.class.php');
	require_once('class/dao/TblTrialBalanceTransDAO.class.php');
	require_once('class/dto/TblTrialBalanceTran.class.php');
	require_once('class/mysql/TblTrialBalanceTransMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTrialBalanceTransMySqlExtDAO.class.php');
	require_once('class/dao/TblUserDAO.class.php');
	require_once('class/dto/TblUser.class.php');
	require_once('class/mysql/TblUserMySqlDAO.class.php');
	require_once('class/mysql/ext/TblUserMySqlExtDAO.class.php');
	require_once('class/dao/UserPermissionDAO.class.php');
	require_once('class/dto/UserPermission.class.php');
	require_once('class/mysql/UserPermissionMySqlDAO.class.php');
	require_once('class/mysql/ext/UserPermissionMySqlExtDAO.class.php');

?>