<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            Service Sheet
        </title>
        <style type="text/css">
        @page{size:landscape;}
        body,td,th {
        font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 11pt;
        color: #000000;
        }
        body {
        background-color: #FFFFFF;
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        }
        </style>
    </head>
    <body>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td align="right">
                        <h2>
                            Service Sheet
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="33%" valign="top">
                                        <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000">
                                            <tbody>
                                                <tr>
                                                    <td width="50%">
                                                        Date
                                                    </td>
                                                    <td width="50%">
                                                        <?php echo date_format(date_create_from_format("Y-m-d",$date),"d-m-Y"); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Tech Coordinator
                                                    </td>
                                                    <td>
                                                        Shazia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Technician Name
                                                    </td>
                                                    <td>
                                                        <?php echo $employee->
    firstname . ' ' . $employee->
    lastname ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="33%" align="center">
                                        <h2>
                                            <?php echo get_option('companyname'); ?>
                                        </h2>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table width="300" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000">
                                            <tbody>
                                                <tr>
                                                    <td width="70%">
                                                        Total Visit
                                                    </td>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total Service
                                                    </td>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total AMC
                                                    </td>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total Shower
                                                    </td>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total Replacement
                                                    </td>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total Collection
                                                    </td>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table width="886" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000">
                                            <tbody>
                                                <tr>
                                                    <td width="200" bgcolor="#999999">
                                                        CUSTOMER WARNING:
                                                    </td>
                                                    <td width="800">
                                                        Please write the TIME &amp; OUT of the technician. And you are kindly advised not to.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000">
                            <tbody>
                                <tr>
                                    <td width="2%" bgcolor="#999999">
                                        Sr. No
                                    </td>
                                    <td width="7%" bgcolor="#999999">
                                        Customer No
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        D.O.P.
                                    </td>
                                    <td width="10%" bgcolor="#999999">
                                        Customer Name
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        Contract No.
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        Address
                                    </td>
                                    <td width="3%" bgcolor="#999999">
                                        City
                                    </td>
                                    <td width="5%" bgcolor="#999999">
                                        Location
                                    </td>
                                    <td width="5%" bgcolor="#999999">
                                        Mobile
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        Home Tel.
                                    </td>
                                    <td width="4%" bgcolor="#999999">
                                        Complaint
                                    </td>
                                    <td width="4%" bgcolor="#999999">
                                        Services Type
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        Amount
                                    </td>
                                    <td width="7%" bgcolor="#999999">
                                        Preferred Timing
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        Time In
                                    </td>
                                    <td width="6%" bgcolor="#999999">
                                        Time Out
                                    </td>
                                    <td width="11%" bgcolor="#999999">
                                        Customer Signatuer
                                    </td>
                                </tr>
                                <?php $counter = 1;foreach ($tasks as $task) {?>
                                <tr>
                                    <td>
                                        <?php echo $counter++; ?>
                                    </td>
                                    <td>
                                        <?php //var_dump($task); ?>
                                    </td>
                                    <td>
                                        <?php echo date_format(date_create_from_format("Y-m-d",$task['datestart']),"d-m-Y");  ?>
                                    </td>
                                    <td>
                                        <?php echo $task['company']; ?>
                                    </td>
                                    <td>
                                        <?php echo $task['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $task['address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $task['city']; ?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <?php echo $task['phonenumber']; ?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <?php echo date_format(date_create_from_format("Y-m-d",$task['startdate']),"d-m-Y");  ?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <?php }
 while ($counter < 7) {?>
                                <tr>
                                    <td>
                                        <?php echo $counter++; ?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td colspan="2">
                                        For Official Use Only
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Remarks
                                    </td>
                                    <td colspan="15">
                                        &nbsp;
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="20%" height="50" align="center" valign="middle" style="border-bottom-width:thin; border-bottom-color:#000000; border-bottom-style:solid">
                                        Technical Coordinator
                                    </td>
                                    <td width="20%" height="50" align="center" valign="middle">
                                        &nbsp;
                                    </td>
                                    <td width="20%" height="50" align="center" valign="middle" style="border-bottom-width:thin; border-bottom-color:#000000; border-bottom-style:solid">
                                        Admin Manager
                                    </td>
                                    <td width="20%" height="50" align="center" valign="middle">
                                        &nbsp;
                                    </td>
                                    <td width="20%" height="50" align="center" valign="middle" style="border-bottom-width:thin; border-bottom-color:#000000; border-bottom-style:solid">
                                        Chief Accountant
                                    </td>
                                </tr>
                                <tr>
                                    <td height="50" align="center" valign="middle" style="border-bottom-width:thin; border-bottom-color:#000000; border-bottom-style:solid">
                                        Technician Signatuer
                                    </td>
                                    <td height="50" align="center" valign="middle">
                                        &nbsp;
                                    </td>
                                    <td height="50" align="center" valign="middle">
                                        &nbsp;
                                    </td>
                                    <td height="50" align="center" valign="middle">
                                        &nbsp;
                                    </td>
                                    <td height="50" align="center" valign="middle">
                                        &nbsp;
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
// echo $this->db->last_query();
          ?>
    </body>
    <script type="text/javascript">
    window.print();
    </script>
</html>
