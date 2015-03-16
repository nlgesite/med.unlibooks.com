<?php
	//include all DAO files
	require_once('registration/class/sql/Connection2.class.php');
	require_once('registration/class/sql/ConnectionFactory2.class.php');
	require_once('registration/class/sql/ConnectionProperty2.class.php');
	require_once('registration/class/sql/QueryExecutor2.class.php');
	require_once('registration/class/sql/Transaction2.class.php');
	require_once('registration/class/sql/SqlQuery2.class.php');
	require_once('registration/class/core/ArrayList2.class.php');
	require_once('registration/class/dao/DAOFactory2.class.php');
 	
	require_once('registration/class/dao/AmApiProductDAO.class.php');
	require_once('registration/class/dto/AmApiProduct.class.php');
	require_once('registration/class/mysql/AmApiProductMySqlDAO.class.php');
	require_once('registration/class/mysql/ext/AmApiProductMySqlExtDAO.class.php');
	require_once('registration/class/dao/AmApiSubscriptionDAO.class.php');
	require_once('registration/class/dto/AmApiSubscription.class.php');
	require_once('registration/class/mysql/AmApiSubscriptionMySqlDAO.class.php');
	require_once('registration/class/mysql/ext/AmApiSubscriptionMySqlExtDAO.class.php');
	require_once('registration/class/dao/MedAccountsDAO.class.php');
	require_once('registration/class/dto/MedAccount.class.php');
	require_once('registration/class/mysql/MedAccountsMySqlDAO.class.php');
	require_once('registration/class/mysql/ext/MedAccountsMySqlExtDAO.class.php');

?>