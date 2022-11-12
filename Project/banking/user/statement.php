<?php

require("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Statement</title>

<style>
</style>
<link href="../css/css_design.css" rel="stylesheet" type="text/css" />
</head>


<body>
	<div id="top_div">
    	<marquee behavior="alternate" direction="right">
        Welcome To Co-Operative Bank Pvt. Ltd.
        </marquee>
    </div>
<div id="menu_div" align="right">
  		<a href="credit.php" a><input type="button" value="Credit" /></a>
  		<a href="debit.php" a><input type="button" value="Debit" /></a>
        <a href="logout.php" a><input type="button" value="Log Out" /></a>
		    
    </div>
<div id="form_div">
<p>&nbsp;</p>
    <form id="form1" name="form1" method="post" action="getdata.php">
      <div align="center">
        <table width="922" height="158" border="0">
        <tr>
          <td width="300"><table width="928" height="185" border="1" bordercolor="#0033FF">
            <tr>
              <td width="182"><div align="center" class="style1"> Sr. No.</div></td>
              <td width="146"><div align="center" class="style1">Account No.</div></td>
              <td width="182"><div align="center" class="style1">Debit</div></td>
              <td width="182"><div align="center" class="style1">Credit</div></td>
              <td width="182"><div align="center" class="style1">Entry_Time</div></td>
              
            </tr>
            <?php
    $i=1;
    $tamt=0;
    $sql="select * from balance";
    $q=mysql_query($sql);
    while($data=mysql_fetch_array($q))
    {
        $tamt=$tamt+$data['credit'];
        $tamt=$tamt-$data['debit'];
    ?>
            <tr>
              <td><input type="checkbox" /><div align="center"><?php echo $i++;?>.)</div></td>
              <td><div align="center"><?php echo $data['account_no'];?></div></td>
              <td><div align="center"><?php echo $data['debit'];?></div></td>
              <td><div align="center"><?php echo $data['credit'];?></div></td>
              <td><div align="center"><?php echo $data['entry_time'];?></div></td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="2"><div align="left"></div>
                  <div align="center" class="style1">
    
                      <div align="left">
                        <input type="button" value="Edit" />
                        <input type="button" value="Delete" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        Current Balance:-
                      </div>
                    </div></td>
              <td colspan="3" align="center"><?php echo $tamt;?></td>
              
            </tr>
          </table></td>
        </tr>
        </table>
      </div>
    </form>

</div>    
<div class="footer">
    &copy Copyright and All Rights Reserved By Saurabh Jaiswal 
</div>


</body>
</html>