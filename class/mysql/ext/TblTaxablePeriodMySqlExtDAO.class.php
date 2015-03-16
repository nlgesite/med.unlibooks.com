<?php
/**
 * Class that operate on table 'tbl_taxable_period'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-11-21 04:01
 */
class TblTaxablePeriodMySqlExtDAO extends TblTaxablePeriodMySqlDAO{

	static function getPeriodByMonthYear($orgId, $month, $year){
		$txt = '
				SELECT * 
					FROM tbl_taxable_period
					
					WHERE
						org_id = '.$orgId.'
					AND month LIKE "'.$month.'"
					AND year LIKE "'.$year.'"
			';
			
		$sqlQuery = new SqlQuery($txt);
		
		return self::getTblTaxablePeriod($sqlQuery);
	}

	protected static function getTblTaxablePeriod($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		
		if(empty($tab)){
			return false;
		}
		
		$return = array();
		
		foreach($tab as $each){
			$period = new TblTaxablePeriod();
			
			$period->id = $each['id'];
			$period->orgId = $each['org_id'];
			$period->month = $each['month'];
			$period->year = $each['year'];
			
			$return[] = $period;
		}
		
		return $return;
	}
}
?>