<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delivery Note</title>
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

</style>

</head>

<body bottommargin="5" leftmargin="20" rightmargin="5" topmargin="5">
<table width="705" cellpadding="1" cellspacing="8" class="table" align="center">
<tbody>
  </tbody>
<tbody>
  <tr class="noBorder">
    <td width="140" rowspan="6"><img src="<?php echo $logo; ?>" width="108"  alt=""/></td>
    <td colspan="2" class="noBorder"><p align="center"> <strong><?php echo get_option('companyname'); ?></strong></p></td>
    </tr>
  <tr class="noBorder">
    <td colspan="2" class="noBorder">Office Address and phone Number </td>
    </tr>
  <tr class="bottom">
    <td width="291" class="noBorder"><strong>Customer Name </strong></td>
    <td width="234">Date:</td>
    </tr>
  <tr class="bottom">
    <td width="291" class="noBorder">05682718181, 062515151</td>
    <td style="text-align: left">Technician:</td>
    </tr>
  <tr class="bottom">
    <td width="291" class="noBorder">Emailaddress@gmail.com</td>
    <td style="text-align: left">Sales Person:</td>
    </tr>
  <tr class="bottom">
    <td colspan="2" class="noBorder"> Customer Full Address, City (Group)</td>
    </tr>
  <tr class="bottom">
    <td bgcolor="#000000"><font color="#FFFFFF" align="center"><strong>Delivery Note</strong></font></td>
    <td class="noBorder" style="text-align: left; color: #030303;">Inovice No</td>
    <td class="noBorder" style="text-align: left; color: #030303;">Sale Contract No</td>
    </tr>
   
</tbody>
<tbody>
</tbody>
</table>
<p></p> 
<table width="705" cellpadding="2" cellspacing="2"   style="font-size: 11px; table td{border-left: 1px;}" align="center">
<tbody>
  </tbody>
<tbody>
  <tr height="18px"> 
    <td width="33" bgcolor="#000000"><font color="#F9F9F9"><b>  No</b></font></td>
    <td width="157" bgcolor="#000000"><font color="#F9F9F9"><b>Item Name</b></font></td>
    <td width="396" bgcolor="#000000"><font color="#F9F9F9"><b>Discription</b></font></td>
    <td width="91" bgcolor="#000000"><font color="#F9F9F9"><b>Quantity</b></font></td>
    </tr>
  <tr class="bottom" height="22px">
    <td>01</td>
    <td>HP-RO 008</td>
    <td>1 Year Warranty</td>
    <td>1</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>02</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>03</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>04</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>05</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>06</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>07</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>08</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>09</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>10</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr class="bottom" height="22px">
    <td>11</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</tbody>
<tbody>
</tbody>
</table>
<p></p>

<table width="705" cellpadding="1" cellspacing="8"   style="font-size: 11px; table td{border-left: 1px;}" align="center">
<tbody>
  </tbody>
<tbody>
  
  <tr class="noBorder" height="22px">
    <td colspan="3"><strong>Delivery on the behalf of Hydropure</strong></td>
    </tr>
  <tr class="bottom" height="22px">
    <td width="217">Task Assign Date:</td>
    <td width="238">Task Assigned by:</td>
    <td width="210">Installation Date</td>
    </tr>
  <tr class="noBorder" height="22px">
    <td><strong>Recieved By:</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="bottom" height="22px">
    <td>Name:</td>
    <td>Email</td>
    <td>Signature:</td>
  </tr>
</tbody>
<tbody>
</tbody>
</table>
</body>
</html>
