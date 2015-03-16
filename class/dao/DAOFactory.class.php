<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AdminCoaDAO
	 */
	public static function getAdminCoaDAO(){
		return new AdminCoaMySqlExtDAO();
	}

	/**
	 * @return AdminUserDAO
	 */
	public static function getAdminUserDAO(){
		return new AdminUserMySqlExtDAO();
	}

	/**
	 * @return AmApiProductDAO
	 */
	public static function getAmApiProductDAO(){
		return new AmApiProductMySqlExtDAO();
	}

	/**
	 * @return AmApiSubscriptionDAO
	 */
	public static function getAmApiSubscriptionDAO(){
		return new AmApiSubscriptionMySqlExtDAO();
	}

	/**
	 * @return TblAllCollectionDAO
	 */
	public static function getTblAllCollectionDAO(){
		return new TblAllCollectionMySqlExtDAO();
	}

	/**
	 * @return TblAllInvoiceDAO
	 */
	public static function getTblAllInvoiceDAO(){
		return new TblAllInvoiceMySqlExtDAO();
	}

	/**
	 * @return TblAtc1601eDAO
	 */
	public static function getTblAtc1601eDAO(){
		return new TblAtc1601eMySqlExtDAO();
	}

	/**
	 * @return TblClientDAO
	 */
	public static function getTblClientDAO(){
		return new TblClientMySqlExtDAO();
	}

	/**
	 * @return TblCoaDAO
	 */
	public static function getTblCoaDAO(){
		return new TblCoaMySqlExtDAO();
	}

	/**
	 * @return TblCommentDAO
	 */
	public static function getTblCommentDAO(){
		return new TblCommentMySqlExtDAO();
	}

	/**
	 * @return TblEnterPaymentDAO
	 */
	public static function getTblEnterPaymentDAO(){
		return new TblEnterPaymentMySqlExtDAO();
	}

	/**
	 * @return TblExpenseAmountDAO
	 */
	public static function getTblExpenseAmountDAO(){
		return new TblExpenseAmountMySqlExtDAO();
	}

	/**
	 * @return TblExpenseLinesDAO
	 */
	public static function getTblExpenseLinesDAO(){
		return new TblExpenseLinesMySqlExtDAO();
	}

	/**
	 * @return TblForm1601cDAO
	 */
	public static function getTblForm1601cDAO(){
		return new TblForm1601cMySqlExtDAO();
	}

	/**
	 * @return TblForm1601eDAO
	 */
	public static function getTblForm1601eDAO(){
		return new TblForm1601eMySqlExtDAO();
	}

	/**
	 * @return TblForm1701DAO
	 */
	public static function getTblForm1701DAO(){
		return new TblForm1701MySqlExtDAO();
	}

	/**
	 * @return TblForm1701qDAO
	 */
	public static function getTblForm1701qDAO(){
		return new TblForm1701qMySqlExtDAO();
	}

	/**
	 * @return TblForm2550mDAO
	 */
	public static function getTblForm2550mDAO(){
		return new TblForm2550mMySqlExtDAO();
	}

	/**
	 * @return TblForm2550qDAO
	 */
	public static function getTblForm2550qDAO(){
		return new TblForm2550qMySqlExtDAO();
	}

	/**
	 * @return TblForm2551mDAO
	 */
	public static function getTblForm2551mDAO(){
		return new TblForm2551mMySqlExtDAO();
	}

	/**
	 * @return TblHmoDAO
	 */
	public static function getTblHmoDAO(){
		return new TblHmoMySqlExtDAO();
	}

	/**
	 * @return TblInvoiceAmountDAO
	 */
	public static function getTblInvoiceAmountDAO(){
		return new TblInvoiceAmountMySqlExtDAO();
	}

	/**
	 * @return TblInvoiceLinesDAO
	 */
	public static function getTblInvoiceLinesDAO(){
		return new TblInvoiceLinesMySqlExtDAO();
	}

	/**
	 * @return TblJournalEntryDAO
	 */
	public static function getTblJournalEntryDAO(){
		return new TblJournalEntryMySqlExtDAO();
	}

	/**
	 * @return TblJournalLinesDAO
	 */
	public static function getTblJournalLinesDAO(){
		return new TblJournalLinesMySqlExtDAO();
	}

	/**
	 * @return TblMopDAO
	 */
	public static function getTblMopDAO(){
		return new TblMopMySqlExtDAO();
	}

	/**
	 * @return TblNewExpenseDAO
	 */
	public static function getTblNewExpenseDAO(){
		return new TblNewExpenseMySqlExtDAO();
	}

	/**
	 * @return TblNewInvoiceDAO
	 */
	public static function getTblNewInvoiceDAO(){
		return new TblNewInvoiceMySqlExtDAO();
	}

	/**
	 * @return TblOrganizationDAO
	 */
	public static function getTblOrganizationDAO(){
		return new TblOrganizationMySqlExtDAO();
	}

	/**
	 * @return TblOrganizationInfoDAO
	 */
	public static function getTblOrganizationInfoDAO(){
		return new TblOrganizationInfoMySqlExtDAO();
	}

	/**
	 * @return TblReferralDAO
	 */
	public static function getTblReferralDAO(){
		return new TblReferralMySqlExtDAO();
	}

	/**
	 * @return TblSupplierDAO
	 */
	public static function getTblSupplierDAO(){
		return new TblSupplierMySqlExtDAO();
	}

	/**
	 * @return TblSupportDAO
	 */
	public static function getTblSupportDAO(){
		return new TblSupportMySqlExtDAO();
	}

	/**
	 * @return TblTaskDAO
	 */
	public static function getTblTaskDAO(){
		return new TblTaskMySqlExtDAO();
	}

	/**
	 * @return TblTaxDAO
	 */
	public static function getTblTaxDAO(){
		return new TblTaxMySqlExtDAO();
	}

	/**
	 * @return TblTaxablePeriodDAO
	 */
	public static function getTblTaxablePeriodDAO(){
		return new TblTaxablePeriodMySqlExtDAO();
	}

	/**
	 * @return TblTrialBalanceDAO
	 */
	public static function getTblTrialBalanceDAO(){
		return new TblTrialBalanceMySqlExtDAO();
	}

	/**
	 * @return TblTrialBalanceTransDAO
	 */
	public static function getTblTrialBalanceTransDAO(){
		return new TblTrialBalanceTransMySqlExtDAO();
	}

	/**
	 * @return TblUserDAO
	 */
	public static function getTblUserDAO(){
		return new TblUserMySqlExtDAO();
	}

	/**
	 * @return UserPermissionDAO
	 */
	public static function getUserPermissionDAO(){
		return new UserPermissionMySqlExtDAO();
	}


}
?>