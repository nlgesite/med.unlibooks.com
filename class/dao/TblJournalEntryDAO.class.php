<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-06 03:47
 */
interface TblJournalEntryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblJournalEntry 
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
 	 * @param tblJournalEntry primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblJournalEntry tblJournalEntry
 	 */
	public function insert($tblJournalEntry);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblJournalEntry tblJournalEntry
 	 */
	public function update($tblJournalEntry);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrgId($value);

	public function queryByJournalNumber($value);

	public function queryByTransDate($value);

	public function queryByAmount($value);


	public function deleteByOrgId($value);

	public function deleteByJournalNumber($value);

	public function deleteByTransDate($value);

	public function deleteByAmount($value);


}
?>