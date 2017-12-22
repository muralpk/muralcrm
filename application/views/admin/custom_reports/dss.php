<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daily Service Sheet</title>
<style type="text/css">
body {
    margin-left: 16px;
    margin-top: 30px;
    margin-right: 16px;
    margin-bottom: 30px;
    text-align: center;
    border-bottom: thin;
}

table, tr, td {
    border: 0px solid black;
    text-align: left;
}
tr.noBorder td {
    border: 0;
    text-align: left;
}
tr.bottom td {
    border: 0;
    border-bottom: 1pt solid black;
    text-align: left;
}
tr.right td {
    border: 0;
    border-right: 1pt solid black;
    
}
td.bottom td {
    border: 0;
    border-bottom: 1pt solid black;
    text-align: left;
}
/*.rotate
{
    -ms-transform:rotate(-90deg);
    -moz-transform:rotate(-90dg);
    -webkit-transform:rotate(-90dg);
    -o-transform:rotate(-90dg);
    float:left;
}*/
@page{size:landscape;}
</style>

</head>

<body>
<table width="1296" cellpadding="1" cellspacing="0" class="table" align="center">
<tbody>
  </tbody>
<tbody>
  <tr class="bottom">
    <td width="170" rowspan="6"><img src="<?php echo $logo; ?>" width="108" alt=""/></td>
    <td width="13" rowspan="6">&nbsp;</td>
    <td width="893" rowspan="6" class="noBorder"><font size="+3"><p align="center"><?php echo get_option('companyname'); ?></p> </font>
    Date: <?php echo date_format(date_create_from_format("Y-m-d",$date),"d-m-Y"); ?>
    <br>
    Technician Coordinator: <b>&nbsp;</b>
    <br>
    Technician Name:  <b><?php echo $employee->
    firstname . ' ' . $employee->
    lastname ?></b>
    <br>
    <b>Area: CUSTOMER GROUP </b></td>
    <td width="210" bgcolor="#DCDBDB" class="bottom">Total Visit:</td>
    </tr>
  <tr class="bottom">
    <td bgcolor="#DCDBDB" >Total Services:</td>
    </tr>
  <tr class="bottom">
    <td bgcolor="#DCDBDB" style="text-align: left">Total AMC:</td>
    </tr>
  <tr class="bottom">
    <td bgcolor="#DCDBDB"  class="bottom">Total Shower:</td>
    </tr>
  <tr class="bottom">
    <td bgcolor="#DCDBDB" style="text-align: left">Total Replacement:</td>
    </tr>
  <tr class="bottom">
    <td bgcolor="#DCDBDB" style="text-align: left">Total Collection:</td>
  </tr>
  <tr class="bottom">
    <td colspan="2" bgcolor="#000000"><font color="#FFFFFF"><strong>CUSTOMER WARNING</strong></font></td>
    <td colspan="2" class="noBorder" style="text-align: left; color: #030303;"><strong>CUSTOMER WARNING: Please write the Time in &amp; Time out of the technician, and you are kindly advised not to</strong></td>
    </tr>
   <tr> <td colspan="2"></td> </tr>
   <tr> <td colspan="2"></td> </tr>
   <tr> <td colspan="2"></td> </tr>
   <tr> <td colspan="2"></td> </tr>
</tbody>
<tbody>
</tbody>
</table>
<p></p> 
<table width="1296" cellpadding="2" cellspacing="2"   style="font-size: 9px; table td{border-left: 1px;}" align="center">
<tbody>
  </tbody>
<tbody>
  <tr height="18px"> 
    <td width="13" bgcolor="#000000"><font color="#F9F9F9"><b>  No</b></font></td>
    <td width="54" bgcolor="#000000"><font color="#F9F9F9"><b>Customer #</b></font></td>
    <td width="50" bgcolor="#000000"><font color="#F9F9F9"><b>DOP</b></font></td>
    <td width="115" bgcolor="#000000"><font color="#F9F9F9"><b>Customer Name</b></font></td>
    <td width="46" bgcolor="#000000"><font color="#F9F9F9"><b>Cont #</b></font></td>
    <td width="265" bgcolor="#000000"><font color="#F9F9F9"><b>Address</b></font></td>
    <td width="55" bgcolor="#000000"><font color="#F9F9F9"><b>City</b></font></td>
    <td width="57" bgcolor="#000000"><font color="#F9F9F9"><b>Mobile #</b></font></td>
    <td width="57" bgcolor="#000000"><font color="#F9F9F9"><b>Phone #</b></font></td>
    <td width="126" bgcolor="#000000"><font color="#F9F9F9"><b>Complaint</b></font></td>
    <td width="60" bgcolor="#000000"><font color="#F9F9F9"><b>Serv. Type</b></font></td>
    <td width="54" bgcolor="#000000"><font color="#F9F9F9"><b>Amount AED</b></font></td>
    <td width="54" bgcolor="#000000"><font color="#F9F9F9"><b>Peref Timing</b></font></td>
    <td width="51" bgcolor="#000000"><font color="#F9F9F9"><b>Time In</b></font></td>
    <td width="51" bgcolor="#000000"><font color="#F9F9F9"><b>Time Out</b></font></td>
    <td width="88" bgcolor="#000000"><font color="#F9F9F9"><b>Signature</b></font></td>
    
    </tr>
<?php $counter = 1;
foreach ($tasks as $task) { ?>
  <tr class="bottom" height="22px">
    <td><?php echo $counter++; ?></td>
    <td>&nbsp;</td>
    <td><?php echo date_format(date_create_from_format("Y-m-d",$task['dop']),"d-m-Y");  ?></td>
    <td><?php echo $task['customer_name']; ?></td>
    <td>&nbsp;</td>
    <td><?php echo $task['address']; ?></td>
    <td><?php echo $task['city']; ?></td>
    <td><?php echo $task['phonenumber']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
<?php }
 while ($counter < 12) { ?>
  <tr class="bottom" height="22px">
    <td><?php echo $counter++; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php } ?>
</tbody>
<tbody>
</tbody>
</table>
<p></p>

<table width="1296" cellpadding="1" cellspacing="8"   style="font-size: 11px; table td{border-left: 1px;}" align="center">
<tbody>
  </tbody>
<tbody>
  
  <tr class="bottom" height="22px">
    <td colspan="4">Remarks:</td>
    </tr>
  <tr class="noBorder" height="22px">
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr class="bottom">
    <td><strong>Technical Coordinator: </strong></td>
    <td width="339" colspan="-1"><strong>Admin Manager :</strong></td>
    <td width="296" colspan="-1"><strong>Chief Accountant:</strong></td>
    <td width="301" colspan="-1"><strong>Technician:</strong></td>
    </tr>
  <tr class="noBorder">
    <td><p>I insure the all invoices / contracts / next task / payment task are create &amp; task  closed</p></td>
    <td colspan="-1"><p>I checked all invoices / contracts are created &amp; task was closed.</p></td>
    <td colspan="-1">I checked all invoices / contracts are created &amp; I recieved payments (cash / cheques).</td>
    <td colspan="-1">I recieved and check the payment voucher as per my inovices / sale / services</td>
  </tr>
</tbody>
<tbody>
</tbody>
</table>
<?php 
// echo $this->db->last_query();
?>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>
