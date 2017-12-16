<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-11 12:50:19 --> Query error: Column 'addedfrom' in where clause is ambiguous - Invalid query: SELECT *
FROM `tblstafftasks`
JOIN `tblcontracts` ON `tblcontracts`.`id` = `tblstafftasks`.`rel_id`
WHERE `addedfrom` = '1'
ERROR - 2017-12-11 12:53:29 --> Severity: Notice --> Undefined index: company H:\xampp\htdocs\perfex\application\views\admin\custom_reports\dss.php 125
ERROR - 2017-12-11 12:53:29 --> Severity: Notice --> Undefined index: company H:\xampp\htdocs\perfex\application\views\admin\custom_reports\dss.php 125
ERROR - 2017-12-11 12:53:29 --> Severity: Notice --> Undefined index: company H:\xampp\htdocs\perfex\application\views\admin\custom_reports\dss.php 125
ERROR - 2017-12-11 13:02:06 --> Query error: Unknown column 'tblclients.id' in 'on clause' - Invalid query: SELECT *
FROM `tblstafftasks`
JOIN `tblcontracts` ON `tblcontracts`.`id` = `tblstafftasks`.`rel_id`
JOIN `tblclients` ON `tblcontracts`.`addedfrom` = `tblclients`.`id`
WHERE `tblstafftasks`.`addedfrom` = '2'
ERROR - 2017-12-11 13:03:26 --> Query error: Unknown column 'tblclients.useid' in 'on clause' - Invalid query: SELECT *
FROM `tblstafftasks`
JOIN `tblcontracts` ON `tblcontracts`.`id` = `tblstafftasks`.`rel_id`
JOIN `tblclients` ON `tblcontracts`.`addedfrom` = `tblclients`.`useid`
WHERE `tblstafftasks`.`addedfrom` = '2'
