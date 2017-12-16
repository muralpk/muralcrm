<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-15 11:06:53 --> 404 Page Not Found: admin/Custom_reports/2.png
ERROR - 2017-12-15 11:09:28 --> 404 Page Not Found: admin/Custom_reports/2.png
ERROR - 2017-12-15 11:12:16 --> 404 Page Not Found: admin/Custom_reports/logo.png
ERROR - 2017-12-15 15:20:02 --> Severity: error --> Exception: Call to undefined function get_media_folder() H:\xampp\htdocs\perfex\application\views\admin\custom_reports\dss.php 58
ERROR - 2017-12-15 15:21:24 --> Severity: error --> Exception: Call to undefined function get_media_folder() H:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 26
ERROR - 2017-12-15 15:24:48 --> Severity: error --> Exception: Call to undefined function get_media_folder() H:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 26
ERROR - 2017-12-15 15:26:57 --> Severity: error --> Exception: Call to undefined function get_media_folder() H:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 26
ERROR - 2017-12-15 15:28:02 --> Severity: error --> Exception: Call to undefined function get_media_folder() H:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 26
ERROR - 2017-12-15 15:41:26 --> Severity: Notice --> Undefined property: Custom_reports::$comfig H:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 26
ERROR - 2017-12-15 15:41:26 --> Severity: error --> Exception: Call to a member function item() on null H:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 26
ERROR - 2017-12-15 11:49:35 --> Severity: Error --> Maximum execution time of 30 seconds exceeded H:\xampp\htdocs\perfex\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2017-12-15 15:58:25 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 65028096 bytes) H:\xampp\htdocs\perfex\application\views\admin\custom_reports\dss.php 166
ERROR - 2017-12-15 16:12:47 --> Query error: Not unique table/alias: 'tblstaff' - Invalid query: SELECT *
FROM `tblstafftasks`
JOIN `tblcontracts` ON `tblstafftasks`.`rel_id` = `tblcontracts`.`id`
JOIN `tblclients` ON `tblcontracts`.`client` = `tblclients`.`userid`
JOIN `tblstafftaskassignees` ON `tblstafftasks`.`id` = `tblstafftaskassignees`.`taskid`
JOIN `tblstaff` ON `tblstafftaskassignees`.`staffid` = `tblstaff`.`staffid`
JOIN `tblstaff` ON `tblcontracts`.`addedfrom` = `tblstaff`.`staffid`
WHERE `tblstafftaskassignees`.`staffid` = '2'
AND `startdate` = '2017-12-12'
ERROR - 2017-12-15 22:24:59 --> Severity: Error --> Class 'Invoices_model' not found C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 3
ERROR - 2017-12-15 22:26:53 --> Severity: Error --> Class 'Invoices_model' not found C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 3
ERROR - 2017-12-15 22:31:05 --> Severity: Error --> Class 'Invoices_model' not found C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 4
ERROR - 2017-12-15 22:33:16 --> Severity: error --> Exception: Call to undefined method Invoices_model::get_where() C:\xampp\htdocs\perfex\application\controllers\admin\Custom_reports.php 52
ERROR - 2017-12-15 22:33:42 --> Severity: error --> Exception: syntax error, unexpected '?', expecting end of file C:\xampp\htdocs\perfex\application\views\admin\custom_reports\item_sale.php 59
ERROR - 2017-12-15 22:37:40 --> Severity: Error --> Class 'Invoices_model' not found C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 4
ERROR - 2017-12-15 22:38:52 --> Severity: Notice --> Undefined property: CRM_Loader::$load C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 3
ERROR - 2017-12-15 22:38:52 --> Severity: error --> Exception: Call to a member function model() on null C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 3
ERROR - 2017-12-15 22:39:50 --> Severity: Notice --> Undefined property: CRM_Loader::$load C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 4
ERROR - 2017-12-15 22:39:50 --> Severity: error --> Exception: Call to a member function model() on null C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 4
ERROR - 2017-12-15 22:43:16 --> Severity: Error --> Class 'Invoices_model' not found C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 4
ERROR - 2017-12-15 22:53:42 --> Severity: error --> Exception: Class 'CI_Base' not found C:\xampp\htdocs\perfex\application\models\Az_invoices_model.php 3
ERROR - 2017-12-15 19:45:47 --> 404 Page Not Found: Assets/plugins
ERROR - 2017-12-15 19:49:46 --> 404 Page Not Found: Assets/plugins
ERROR - 2017-12-15 19:53:46 --> 404 Page Not Found: Assets/plugins
ERROR - 2017-12-15 19:56:09 --> 404 Page Not Found: Assets/plugins
ERROR - 2017-12-15 19:58:36 --> 404 Page Not Found: Assets/plugins
ERROR - 2017-12-15 19:58:40 --> 404 Page Not Found: Assets/plugins
