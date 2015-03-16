<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblJournalLinesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblJournalLines 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param tblJournalLine primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblJournalLines tblJournalLine
 	 */
	public function insert($tblJournalLine);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblJournalLines tblJournalLine
 	 */
	public function update($tblJournalLine);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByJournalEntryId($value);

	public function queryByType($value);

	public function queryByAccountCode($value);

	public function queryByParticulars($value);

	public function queryByDebit($value);

	public function queryByCredit($value);


	public function deleteByJournalEntryId($value);

	public function deleteByType($value);

	public function deleteByAccountCode($value);

	public function deleteByParticulars($value);

	public function deleteByDebit($value);

	public function deleteByCredit($value);


}
?>