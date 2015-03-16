<?php

/**
 * Class that operate on table 'tbl_form_2550m'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-11-21 04:01
 */
class TblForm2550mMySqlExtDAO extends TblForm2550mMySqlDAO {

    static function get2550M_data($orgId, $month2, $year) {
//		$txt = "			
//			select _2550M.date_issued, _2550M.vat_type, _2550M.itr_item as itr_item, sum(_2550M.amount) as amount
//			from (
//				select expense.date_issued, expense.vat_type, 
//				   case when expense.account_num like ('%6000-001%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-004%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-005%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-006%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-007%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-008%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-010%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-013%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-015%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-016%') and expense.vat_type = 'Vat' then '18I'
//						when expense.account_num like ('%6000-009%') and expense.vat_type = 'Vat' then '18E'
//						when expense.account_num like ('%6000-011%') and expense.vat_type = 'Vat' then '18E'
//						when expense.account_num like ('%6000-014%') and expense.vat_type = 'Vat' then '18E'
//						when expense.account_num like ('%6000-018%') and expense.vat_type = 'Vat' then '18E'
//				  else '18M' 
//					end as 'itr_item',
//						sum(expense.amount) as amount
//				from (
//					 select tbl_coa.account_num, tbl_coa.accont_name, tbl_new_expense.date_issued,
//								case when tbl_expense_lines.vat_id = 9 then 'Vat' else 'Exempt' 
//								end as vat_type,
//								case when (case when tbl_expense_lines.vat_id = 9 then 'Vat' else 'Exempt' end) = 'Vat' then (tbl_expense_lines.net_amount/1.12) 
//								else tbl_expense_lines.net_amount 
//								end as amount
//						from tbl_new_expense
//						inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id =  " . $orgId . " and tbl_new_expense.`status` like '%posted%'
//						inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id
//						inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id
//					   where tbl_coa.account_num in ('6000-001', '6000-004', '6000-005', '6000-006', '6000-007', '6000-008', '6000-010', '6000-013', '6000-015', '6000-016', '6000-009', '6000-011', '6000-014', '6000-018')
//						)expense
//						group by expense.date_issued, expense.vat_type,itr_item
//						
//			union all
//
//				select journal.trans_date, journal.Vat_type, journal.itr_item, sum(journal.amount) as amount  
//			   from (  select tbl_journal_entry.trans_date, tbl_coa.account_num, 'Exempt'as Vat_type,
//									case when tbl_coa.account_num like '%1002-001%' then '18M'
//										when tbl_coa.account_num like '%1002-002%' then '18M'
//										when tbl_coa.account_num like '%1002-004%' then '18M'
//									   when tbl_coa.account_num like '%1003-001%' then '18M'
//										when tbl_coa.account_num like '%1003-003%' then '18M'
//										when tbl_coa.account_num like '%1003-005%' then '18M'
//										when tbl_coa.account_num like '%1003-007%' then '18M'
//									end as 'itr_item',	 
//									case when tbl_coa.account_num like '%1002-001%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//										when tbl_coa.account_num like '%1002-002%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//										when tbl_coa.account_num like '%1002-004%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//										when tbl_coa.account_num like '%1003-001%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//										when tbl_coa.account_num like '%1003-003%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//										when tbl_coa.account_num like '%1003-005%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//										when tbl_coa.account_num like '%1003-007%' then (tbl_journal_lines.debit - tbl_journal_lines.credit)
//									end as 'amount'							 	 										 
//							from tbl_coa
//						   inner join tbl_journal_lines on tbl_coa.id = tbl_journal_lines.account_code
//							inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
//							where  tbl_journal_entry.org_id =  " . $orgId . " and tbl_coa.account_num in ('1002-001', '1002-002', '1002-004', '1003-001', '1003-003', '1003-005', '1003-007')
//					 )journal
//							group by journal.trans_date, journal.itr_item
//								
//			union all									
//								
//			/*PATIENT*/
//				select patient.date_issued, patient.vat, patient.itr_item, 
//						(sum(patient.amount) - sum(patient.dis_amount)) as amount
//						from (
//								select tbl_new_invoice.date_issued, tbl_invoice_lines.vat, tbl_invoice_lines.net_amount, 
//									   case when tbl_invoice_lines.vat = 'Vatable' then '12A'
//										 else  15
//										 end as itr_item,
//									   case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12
//									   else tbl_invoice_lines.net_amount
//									   end as 'amount',
//									   case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100))
//									   else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)
//									   end as dis_amount
//								
//								from tbl_invoice_lines
//								
//								inner join tbl_new_invoice on tbl_invoice_lines.new_invoice_id = tbl_new_invoice.id and tbl_new_invoice.mop_id in (1,4) and tbl_new_invoice.`status` like '%posted%'
//								inner join tbl_client on tbl_new_invoice.client_id = tbl_client.id and tbl_client.org_id =  " . $orgId . "
//								) patient
//								group by patient.date_issued, patient.vat
//								
//			union all
//
//			/*HMO*/
//						select hmo.date_received, hmo.vat, hmo.itr_item, 
//							  (sum(hmo.amount) - sum(hmo.dis_amount)) as amount
//						from (
//							  select a.date_received,tbl_invoice_lines.net_amount, tbl_invoice_lines.vat,
//									 case when tbl_invoice_lines.vat = 'Vatable' then '12A'
//										 else  15
//										 end as itr_item,
//									   case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12
//									   else tbl_invoice_lines.net_amount
//									   end as 'amount',
//									   case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100))
//									   else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)
//									   end as dis_amount
//								from tbl_enter_payment a 
//								inner join tbl_all_collection b on a.id = b.enter_payment_id
//								inner join tbl_invoice_amount on b.invoiced_amount_id = tbl_invoice_amount.id
//								inner join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
//								inner join tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
//								inner join tbl_invoice_lines on tbl_new_invoice.id = tbl_invoice_lines.new_invoice_id
//								inner join tbl_hmo c on a.hmo_id = c.id and c.org_id =  " . $orgId . "
//							)hmo
//						 group by hmo.date_received, hmo.vat
//				)_2550M
//				 WHERE MONTH(_2550M.date_issued) = " . $month2 . " AND YEAR(_2550M.date_issued) = " . $year . "
//			
//			group by _2550M.date_issued, _2550M.vat_type, _2550M.itr_item";

        $txt = "select _2550M.date_issued, _2550M.itr_item, sum(_2550M.amount) as amount
                        from (
                        /*EXPENSE*/
                        select expense.date_issued, expense.vat_type, expense.account_num,
                                            case when expense.account_num like ('%1002-001%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%1002-002%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%1002-003%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6000-005%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6000-006%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6000-007%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-001%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-005%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-006%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-009%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-012%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-014%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-016%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-017%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-019%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-020%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-021%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-022%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-024%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-025%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-026%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-029%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-032%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-033%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-034%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%6001-035%') and expense.vat_type = 'Vat' then '18I'
                                                                when expense.account_num like ('%1007-001%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6000-003%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6001-011%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6001-018%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%6001-023%') and expense.vat_type = 'Vat' then '18E'
                                                                when expense.account_num like ('%1004-001%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-002%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-004%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-006%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-008%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-010%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1004-012%') and expense.vat_type = 'Vat' then '18A'
                                                                when expense.account_num like ('%1006-001%') and expense.vat_type = 'Vat' then '18A'
                                                                else '18M'
                                                                end as 'itr_item',
                              sum(expense.amount) as amount
                        from ( select tbl_coa.account_num, tbl_coa.accont_name, 
                                                                  case when tbl_new_expense.date_reversed like '0000-00-00' 
                                                                            then tbl_new_expense.date_issued
                                                                  else tbl_new_expense.date_reversed 
                                                                  end as date_issued,
                                                                  case when tbl_expense_lines.vat_id = 9 
                                                                                 then 'Vat' 
                                                                  else 'Exempt' 
                                                                  end as vat_type,	 
                                                                  case when (case when tbl_expense_lines.vat_id = 9 then 'Vat' else 'Exempt' end) = 'Vat' 
                                                                                 then ((case when tbl_new_expense.`status` like '%reversed%' then tbl_expense_lines.net_amount *-1 else tbl_expense_lines.net_amount end)/1.12) 
                                                                  else tbl_expense_lines.net_amount 
                                                                  end as amount
                                          from tbl_new_expense
                                          inner join tbl_supplier on tbl_new_expense.supplier_id = tbl_supplier.id and tbl_supplier.org_id = ".$orgId." and tbl_new_expense.`status` in ('posted','reversed')
                                          inner join tbl_expense_lines on tbl_new_expense.id = tbl_expense_lines.new_expense_id
                                          inner join tbl_coa on tbl_expense_lines.coa_id = tbl_coa.id
                                          where tbl_coa.account_num in 	('1002-001','1002-002','1002-003','1004-001','1004-002','1004-004','1004-006','1004-008','1004-010','1004-012','1006-001','1007-001','6000-003',
                                                                                                                                 '6000-005','6000-006','6000-007','6001-001','6001-005','6001-006','6001-009','6001-011','6001-012','6001-014','6001-016','6001-017','6001-018',
                                                                                                                                 '6001-019','6001-020','6001-021','6001-022','6001-023','6001-024','6001-025','6001-026','6001-029','6001-032','6001-033','6001-034','6001-035')
                                )expense
                        group by expense.date_issued, expense.vat_type, itr_item, expense.account_num

                        union all

                        /*JOURNAL*/
                        select journal.trans_date, journal.Vat_type, journal.account_num, journal.irt_item, sum(journal.amount) as amount
                           from (  select tbl_journal_entry.trans_date, tbl_coa.account_num, 'Vat'as Vat_type,
                                                                        case when tbl_coa.account_num like ('%1004-001%')  then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-002%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-004%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-006%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-008%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-010%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1004-012%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1006-001%') then '18A'
                                                                                        when tbl_coa.account_num like ('%1007-001%') then '18E'
                                                                                        when tbl_coa.account_num like ('%6000-005%') then '18I'
                                                                                        when tbl_coa.account_num like ('%4001-003%') then '12A'
                                                                        end as 'irt_item',	
                                                                        case when tbl_coa.account_num like ('%1004-001%')  then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-002%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-004%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-006%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-008%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-010%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1004-012%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1006-001%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%1007-001%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%6000-005%') then (tbl_journal_lines.debit - tbl_journal_lines.credit)
                                                                                        when tbl_coa.account_num like ('%4001-003%') then (tbl_journal_lines.credit - tbl_journal_lines.debit)
                                                                        end as 'amount'		
                                                        from tbl_coa
                                                   inner join tbl_journal_lines on tbl_coa.id = tbl_journal_lines.account_code
                                                        inner join tbl_journal_entry on tbl_journal_lines.journal_entry_id = tbl_journal_entry.id
                                                        where  tbl_journal_entry.org_id = ".$orgId." and tbl_coa.account_num in ('1004-001','1004-002','1004-004','1004-006','1004-008','1004-010',
                                                                                                                                                                                                                                                                        '1004-012','1006-001','1007-001','4001-003','6000-005')
                                         )journal
                                                        group by journal.trans_date, journal.irt_item, journal.account_num

                        union all 

                        /*PATIENT*/
                                select patient.date_issued, patient.vat, 'account_num' as account_num, patient.itr_item, 
                                                                (sum(patient.amount) - sum(patient.dis_amount)) as amount
                                        from(	 select case when tbl_new_invoice.date_reversed like '0000-00-00' 
                                                                              then tbl_new_invoice.date_issued
                                                                       else tbl_new_invoice.date_reversed 
                                                                       end as date_issued,
                                                                       tbl_invoice_lines.vat, 
                                                                                 case when tbl_invoice_lines.vat = 'Vatable' then '12A'
                                                                                 else  15
                                                                                 end as itr_item,
                                                                                 case when tbl_new_invoice.`status`like 'reversed' 
                                                                                      then (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)*-1
                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)
                                                                                end as amount,
                                                                                 case when tbl_new_invoice.`status`like 'reversed' 
                                                                                                then (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)*-1
                                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)
                                                                                                end as dis_amount
                                                                from tbl_invoice_lines

                                                                inner join tbl_new_invoice on tbl_invoice_lines.new_invoice_id = tbl_new_invoice.id and tbl_new_invoice.mop_id in (1,4) and tbl_new_invoice.`status` in ('posted','reversed')
                                                                inner join tbl_client on tbl_new_invoice.client_id = tbl_client.id and tbl_client.org_id = ".$orgId."
                                                )patient

                        union all

                        /*HMO*/
                                                select hmo.date_received, hmo.vat, 'account_num' as account_num, hmo.itr_item, 
                                                      (sum(hmo.amount) - sum(hmo.dis_amount)) as amount
                                                from (
                                                      select case when a.date_reversed like '0000-00-00' 
                                                                            then a.date_received
                                                                       else a.date_reversed 
                                                                       end as date_received,
                                                                                 tbl_invoice_lines.net_amount, 
                                                                                 tbl_invoice_lines.vat,
                                                             case when tbl_invoice_lines.vat = 'Vatable' then '12A'
                                                                                 else  15
                                                                                 end as itr_item,
                                                                                 a.`status`,
                                                                                  case when a.`status`like 'reversed' 
                                                                                      then (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)*-1
                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then tbl_invoice_lines.net_amount/1.12 else tbl_invoice_lines.net_amount end)
                                                                                end as amount,
                                                                                 case when a.`status`like 'reversed' 
                                                                                                then (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)*-1
                                                                                                else (case when tbl_invoice_lines.vat = 'Vatable' then ((tbl_invoice_lines.net_amount/1.12) * (tbl_new_invoice.discount /100)) 
                                                                                                                                                                                                                                                                                                                                                         else (tbl_invoice_lines.net_amount) * (tbl_new_invoice.discount /100)end)
                                                                                                end as dis_amount
                                                   from tbl_enter_payment a 
                                                                inner join tbl_all_collection b on a.id = b.enter_payment_id
                                                                inner join tbl_invoice_amount on b.invoiced_amount_id = tbl_invoice_amount.id
                                                                inner join tbl_all_invoice on tbl_invoice_amount.all_invoice_id = tbl_all_invoice.id
                                                                inner join tbl_new_invoice on tbl_all_invoice.new_invoice_id = tbl_new_invoice.id
                                                                inner join tbl_invoice_lines on tbl_new_invoice.id = tbl_invoice_lines.new_invoice_id
                                                                inner join tbl_hmo c on a.hmo_id = c.id and c.org_id = ".$orgId."
                                                        )hmo
                                                group by hmo.date_received, hmo.vat
                                )_2550M	
                                WHERE MONTH(_2550M.date_issued) =".$month2." && YEAR(_2550M.date_issued) =".$year."
                        group by month(_2550M.date_issued), _2550M.itr_item";
        
        $sqlQuery = new SqlQuery($txt);

        return self::Tbl2550M($sqlQuery);
    }

    protected static function Tbl2550M($sqlQuery) {
        $result = QueryExecutor::execute($sqlQuery);

        if (empty($result)) {
            return false;
        }

        $returns = array();

        foreach ($result as $item) {
            $return = new stdClass();

            $return->amount = $item['amount'];
            $return->itr_item = $item['itr_item'];

            $returns[] = $return;
        }
        return $returns;
    }

}

?>