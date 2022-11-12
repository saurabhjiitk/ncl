<?php
session_start();
	if(isset($_SESSION["account_no"])=="")
	{
	echo "<script>window.location='login.php?login=invalid'</script>";
	}
?>
<head>
<title>Acount Entry</title>
<script>
function logout()
{
alert ("You are going to Log Out.....");	
}
</script>

<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
background-color:#CCC;
}
#menu_div a input {
	color: #FFF;
	background-color: #666;
	height: 38px;
	width: 120px;
	margin-top: 5px;
	margin-right: 5px;
	border-radius: 20px;
}
#menu_div a input:hover {
	color: #000;
	background-color: #0F9;
}

-->
</style>
<link href="../css/css_design.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="top_div">
    	<marquee behavior="alternate" direction="right">
        Welcome To Co-Operative Bank Pvt. Ltd.
        </marquee>
    </div>
    <div id="menu_div" align="right">
    	<a href="credit.php" a><input type="button" value="Credit" /></a>
    	<a href="statement.php" a><input type="button" value="Statement" /></a>
        <a href="logout.php" a><input type="button" value="Log Out" onClick="return logout();" /></a>
    </div>
    <div id="form_div">
        <form id="form1" name="form1" method="post" action="getdebit.php">
          <div align="center">
            <table width="413" height="183" border="1">
              <tr>
                <td colspan="3" bgcolor="#0000FF"><div align="center" class="style1">Details For Debit</div></td>
              </tr>
              <tr>
                <td><div align="center">Account no.</div></td>
                <td><div align="center"><strong>:</strong></div></td>
                <td><input type="text" name="account_no" id="account_no"/></td>
                
              </tr>
              <tr>
                <td><div align="center">Amount</div></td>
                <td><div align="center"><strong>:</strong></div></td>
                <td colspan=""><input type="text" name="debit" id="debit" /></td>
                
              </tr>
              <tr>
                <td colspan="3" bgcolor="#0000FF"><div align="center">
                  <input type="submit" name="button" id="button" value="Submit" />
                </div></td>
               
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
