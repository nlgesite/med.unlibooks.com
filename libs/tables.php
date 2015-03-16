<?php

"-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2015 at 07:03 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET time_zone = '+00:00';


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unlibooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_coa`
--

CREATE TABLE IF NOT EXISTS `admin_coa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_num` varchar(100) NOT NULL,
  `account_type` enum('Assets','Liabilities','Income','Expense','Equity') NOT NULL,
  `income_balance_sheet` enum('Income Sheet','Balance Sheet') NOT NULL,
  `account_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) NOT NULL,
  `sub_account` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_num` (`account_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_all_collection`
--

CREATE TABLE IF NOT EXISTS `tbl_all_collection` (
  `id` int(11) NOT NULL DEFAULT '0',
  `enter_payment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enter_payment_id` (`enter_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_all_invoice`
--

CREATE TABLE IF NOT EXISTS `tbl_all_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_invoice_id` int(11) DEFAULT NULL,
  `new_recurring_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `new_invoice_id` (`new_invoice_id`),
  KEY `time_tracking_id` (`new_recurring_id`),
  KEY `new_recurring_id` (`new_recurring_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(100) DEFAULT NULL,
  `bank_code` varchar(15) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_account_number` varchar(100) DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `client_account` varchar(15) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `address` text,
  `tin_num` varchar(30) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `fax_number` varchar(30) DEFAULT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `contact_num` varchar(30) DEFAULT NULL,
  `contact_email_address` varchar(100) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `mop_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `vat_inclusive` enum('yes','no') DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `bank_id` (`bank_id`),
  KEY `mop_id` (`mop_id`),
  KEY `tax_id` (`tax_id`),
  KEY `payment_id` (`payment_id`),
  KEY `currency_id` (`currency_id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coa`
--

CREATE TABLE IF NOT EXISTS `tbl_coa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) NOT NULL,
  `account_num` varchar(30) DEFAULT NULL,
  `account_type` enum('assets','liabilities','income','expense','equity') DEFAULT NULL,
  `account_categories` varchar(100) DEFAULT NULL,
  `accont_name` varchar(100) DEFAULT NULL,
  `description` text,
  `vat_id` int(11) DEFAULT NULL,
  `vat_inclusive` enum('yes','no') DEFAULT NULL,
  `opening_bal` double NOT NULL,
  `as_of` date NOT NULL,
  `note` text NOT NULL,
  `active_account` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vat_id` (`vat_id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE IF NOT EXISTS `tbl_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(15) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `currency_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enter_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_enter_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_invoice_id` int(11) DEFAULT NULL,
  `time_tracking_id` int(11) DEFAULT NULL,
  `amount_received` double DEFAULT NULL,
  `total_balance` double NOT NULL,
  `applied_amount` double NOT NULL,
  `date_received` date DEFAULT NULL,
  `ref_num` varchar(30) NOT NULL,
  `mop_id` int(11) DEFAULT NULL,
  `check_date` date NOT NULL,
  `posted` enum('yes','no') NOT NULL,
  `notes` text,
  PRIMARY KEY (`id`),
  KEY `new_invoice_id` (`new_invoice_id`),
  KEY `mop_id` (`mop_id`),
  KEY `time_tracking_id` (`time_tracking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_amount`
--

CREATE TABLE IF NOT EXISTS `tbl_expense_amount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_expense_id` int(11) DEFAULT NULL,
  `sub_total_amount` double DEFAULT NULL,
  `discount_amount` double NOT NULL,
  `vat_amount` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `new_expense_id` (`new_expense_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_lines`
--

CREATE TABLE IF NOT EXISTS `tbl_expense_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_expense_id` int(11) NOT NULL,
  `coa_id` int(11) DEFAULT NULL,
  `description_memo` varchar(100) DEFAULT NULL,
  `vat_id` int(11) NOT NULL,
  `net_amount` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coa_id` (`coa_id`),
  KEY `new_expense_id` (`new_expense_id`),
  KEY `vat_id` (`vat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_amount`
--

CREATE TABLE IF NOT EXISTS `tbl_invoice_amount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `all_invoice_id` int(11) NOT NULL,
  `sub_total_amount` double DEFAULT NULL,
  `vat_amount` double DEFAULT NULL,
  `discount_amount` double NOT NULL,
  `grand_total` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `all_invoice_id` (`all_invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_lines`
--

CREATE TABLE IF NOT EXISTS `tbl_invoice_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_invoice_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `vat_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `unit_cost` double NOT NULL,
  `hour` double DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `net_amount` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `task_id` (`task_id`),
  KEY `new_invoice_id` (`new_invoice_id`),
  KEY `vat_id` (`vat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE IF NOT EXISTS `tbl_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `item_code` varchar(15) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `unit_cost` double DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `item_code` (`item_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_journal_entry`
--

CREATE TABLE IF NOT EXISTS `tbl_journal_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `journal_number` varchar(30) NOT NULL,
  `date_issues` date NOT NULL,
  `category` enum('Bank','GL','vendor','customer') NOT NULL,
  `coa_id` int(11) NOT NULL,
  `particular` text NOT NULL,
  `debit` double NOT NULL,
  `credit` double NOT NULL,
  `posted` enum('yes','no') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  KEY `coa_id` (`coa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mop`
--

CREATE TABLE IF NOT EXISTS `tbl_mop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `code` varchar(15) NOT NULL,
  `description` text,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_expense`
--

CREATE TABLE IF NOT EXISTS `tbl_new_expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `expense_number` int(11) NOT NULL,
  `reference_number` varchar(11) DEFAULT NULL,
  `inclusive_of_vat` enum('yes','no','','') NOT NULL,
  `discount` double DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `date_reversed` date NOT NULL,
  `particular` text,
  `status` enum('posted','open','reversed') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `expense_lines_id` (`reference_number`),
  KEY `expense_number` (`expense_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_invoice`
--

CREATE TABLE IF NOT EXISTS `tbl_new_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `currency_id` int(11) NOT NULL,
  `client_account` varchar(100) DEFAULT NULL,
  `send_by_email` enum('yes','no') NOT NULL,
  `inclusive_of_vat` enum('yes','no','','') NOT NULL,
  `invoice_for` enum('task','item','both','') NOT NULL,
  `invoice_number` varchar(100) DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `date_reversed` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `PO_SO` varchar(100) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `particular` text,
  `remarks` text,
  `status` enum('posted','open') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_recurring`
--

CREATE TABLE IF NOT EXISTS `tbl_new_recurring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `currency_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `client_account` varchar(100) DEFAULT NULL,
  `send_by_email` enum('yes','no') NOT NULL,
  `recurring_number` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `PO_SO` varchar(100) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `particular` text,
  `remarks` text,
  `status` enum('saved','stop') DEFAULT NULL,
  `frequency` enum('weekly','monthly') NOT NULL,
  `total_amount_line` double NOT NULL,
  `last_date_sent` date NOT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `recurring_number` (`recurring_number`),
  KEY `client_id` (`client_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE IF NOT EXISTS `tbl_organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_account` varchar(30) DEFAULT NULL,
  `org_name` varchar(100) DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization_info`
--

CREATE TABLE IF NOT EXISTS `tbl_organization_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) NOT NULL,
  `org_account` varchar(30) DEFAULT NULL,
  `current_software` varchar(100) NOT NULL,
  `address` text,
  `tin_num` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `phone_num` varchar(30) DEFAULT NULL,
  `fax_num` varchar(30) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `business_code` varchar(100) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `logo_name` text,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_terms`
--

CREATE TABLE IF NOT EXISTS `tbl_payment_terms` (
  `id` int(11) NOT NULL DEFAULT '0',
  `org_id` int(11) DEFAULT NULL,
  `payment_code` varchar(30) DEFAULT NULL,
  `description` text,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL DEFAULT '0',
  `project_num` varchar(30) DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `note` text,
  `active_account` enum('yes','no') DEFAULT NULL,
  `trans_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recurring_lines`
--

CREATE TABLE IF NOT EXISTS `tbl_recurring_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_recurring_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `item_description` varchar(100) NOT NULL,
  `task_description` varchar(100) NOT NULL,
  `rate` double NOT NULL,
  `unit_cost` double NOT NULL,
  `hour` double DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `net_amount` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `task_id` (`task_id`),
  KEY `new_invoice_id` (`new_recurring_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) NOT NULL,
  `supplier_account` varchar(30) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` text,
  `email_address` varchar(100) DEFAULT NULL,
  `phone_num` varchar(30) DEFAULT NULL,
  `fax_num` varchar(30) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `date_created` date NOT NULL,
  `active_account` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE IF NOT EXISTS `tbl_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `task_code` varchar(15) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `rate_per_hour` double DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax`
--

CREATE TABLE IF NOT EXISTS `tbl_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `tax_code` varchar(15) DEFAULT NULL,
  `description` text,
  `rate` double DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terms`
--

CREATE TABLE IF NOT EXISTS `tbl_terms` (
  `id` int(11) NOT NULL DEFAULT '0',
  `org_id` int(11) DEFAULT NULL,
  `code` varchar(15) DEFAULT NULL,
  `description` text,
  `days_to_due_date` date DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time_tracking`
--

CREATE TABLE IF NOT EXISTS `tbl_time_tracking` (
  `id` int(11) NOT NULL DEFAULT '0',
  `trans_date` date DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `hour` double DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` enum('billed','unbilled') DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `task_id` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_info_id` int(11) NOT NULL,
  `user_no` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` enum('admin','staff') DEFAULT NULL,
  `active` enum('yes','no') DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `org_info_id` (`org_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE IF NOT EXISTS `user_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `invoice_module` enum('yes','no') NOT NULL,
  `invoice` enum('yes','no') NOT NULL,
  `recurring` enum('yes','no') NOT NULL,
  `collections` enum('yes','no') NOT NULL,
  `customers` enum('yes','no') NOT NULL,
  `items` enum('yes','no') NOT NULL,
  `expenses_module` enum('yes','no') NOT NULL,
  `expense` enum('yes','no') NOT NULL,
  `vendors` enum('yes','no') NOT NULL,
  `time_tracking_module` enum('yes','no') NOT NULL,
  `time_sheet` enum('yes','no') NOT NULL,
  `project` enum('yes','no') NOT NULL,
  `task` enum('yes','no') NOT NULL,
  `setting_module` enum('yes','no') NOT NULL,
  `company` enum('yes','no') NOT NULL,
  `taxes` enum('yes','no') NOT NULL,
  `bank` enum('yes','no') NOT NULL,
  `chart_of_account` enum('yes','no') NOT NULL,
  `user_permision` enum('yes','no') NOT NULL,
  `import_export` enum('yes','no') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_all_invoice`
--
ALTER TABLE `tbl_all_invoice`
  ADD CONSTRAINT `tbl_all_invoice_ibfk_1` FOREIGN KEY (`new_invoice_id`) REFERENCES `tbl_new_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD CONSTRAINT `tbl_bank_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD CONSTRAINT `tbl_client_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_client_ibfk_3` FOREIGN KEY (`tax_id`) REFERENCES `tbl_tax` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_client_ibfk_5` FOREIGN KEY (`bank_id`) REFERENCES `tbl_bank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_client_ibfk_6` FOREIGN KEY (`currency_id`) REFERENCES `tbl_currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_coa`
--
ALTER TABLE `tbl_coa`
  ADD CONSTRAINT `tbl_coa_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_enter_payment`
--
ALTER TABLE `tbl_enter_payment`
  ADD CONSTRAINT `tbl_enter_payment_ibfk_3` FOREIGN KEY (`new_invoice_id`) REFERENCES `tbl_new_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_expense_amount`
--
ALTER TABLE `tbl_expense_amount`
  ADD CONSTRAINT `tbl_expense_amount_ibfk_1` FOREIGN KEY (`new_expense_id`) REFERENCES `tbl_new_expense` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_expense_lines`
--
ALTER TABLE `tbl_expense_lines`
  ADD CONSTRAINT `tbl_expense_lines_ibfk_1` FOREIGN KEY (`coa_id`) REFERENCES `tbl_coa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_expense_lines_ibfk_2` FOREIGN KEY (`new_expense_id`) REFERENCES `tbl_new_expense` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_expense_lines_ibfk_3` FOREIGN KEY (`vat_id`) REFERENCES `tbl_tax` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_invoice_amount`
--
ALTER TABLE `tbl_invoice_amount`
  ADD CONSTRAINT `tbl_invoice_amount_ibfk_1` FOREIGN KEY (`all_invoice_id`) REFERENCES `tbl_all_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_invoice_lines`
--
ALTER TABLE `tbl_invoice_lines`
  ADD CONSTRAINT `tbl_invoice_lines_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tbl_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_invoice_lines_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_invoice_lines_ibfk_3` FOREIGN KEY (`new_invoice_id`) REFERENCES `tbl_new_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_invoice_lines_ibfk_4` FOREIGN KEY (`vat_id`) REFERENCES `tbl_tax` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `tbl_item_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_expense`
--
ALTER TABLE `tbl_new_expense`
  ADD CONSTRAINT `tbl_new_expense_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_invoice`
--
ALTER TABLE `tbl_new_invoice`
  ADD CONSTRAINT `tbl_new_invoice_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tbl_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_new_invoice_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `tbl_currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_recurring`
--
ALTER TABLE `tbl_new_recurring`
  ADD CONSTRAINT `tbl_new_recurring_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tbl_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_new_recurring_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `tbl_currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_organization_info`
--
ALTER TABLE `tbl_organization_info`
  ADD CONSTRAINT `tbl_organization_info_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_organization_info_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `tbl_currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `tbl_project_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tbl_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_recurring_lines`
--
ALTER TABLE `tbl_recurring_lines`
  ADD CONSTRAINT `tbl_recurring_lines_ibfk_1` FOREIGN KEY (`new_recurring_id`) REFERENCES `tbl_new_recurring` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_recurring_lines_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tbl_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_recurring_lines_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD CONSTRAINT `tbl_supplier_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_supplier_ibfk_3` FOREIGN KEY (`currency_id`) REFERENCES `tbl_currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD CONSTRAINT `tbl_task_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  ADD CONSTRAINT `tbl_tax_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `tbl_organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_time_tracking`
--
ALTER TABLE `tbl_time_tracking`
  ADD CONSTRAINT `tbl_time_tracking_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tbl_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_time_tracking_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`org_info_id`) REFERENCES `tbl_organization_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD CONSTRAINT `user_permission_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
"
?>