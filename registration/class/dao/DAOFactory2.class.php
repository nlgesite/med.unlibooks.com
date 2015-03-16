<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory2{
	
	/**
	 * @return AmApiProductDAO
	 */
	public static function getAmApiProductDAO(){
		return new AmApiProductMySqlExtDAO2();
	}

	/**
	 * @return AmApiSubscriptionDAO
	 */
	public static function getAmApiSubscriptionDAO(){
		return new AmApiSubscriptionMySqlExtDAO2();
	}

	/**
	 * @return MedAccountsDAO
	 */
	public static function getMedAccountsDAO(){
		return new MedAccountsMySqlExtDAO();
	}


}
?>