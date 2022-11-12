<?php
session_start();
	if(isset($_SESSION["name"])=="")
	{
	echo "<script>window.location='login.php?login=invalid'</script>";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Registration:</title>
<style type="text/css">
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
#form_div form table {
	font-size: 18px;
}
#form_div form table tr td div strong font {
	color: #FFF;
}

</style>
<link href="../css/css_design.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="top_div" >
        <marquee direction="left" behavior="alternate">
        	Welcome To Co-Operative Bank Pvt. Ltd.
        </marquee>
    </div>
    <div id="menu_div" align="right">
    <a href="logout.php" a><input type="button" value="Log Out" /></a>
    </div>
    <div id="form_div">
    	<form action="user_get_regi.php" method="post" enctype="multipart/form-data">
        	<table width="521" height="585" border="1" align="center">
  <tr>
    <td colspan="3" bgcolor="#0033FF"><div align="center"><strong><font size="+2">New User Account</font></strong></div></td>
    </tr>
    <tr>
    <td width="282"><div align="center"><strong>Account Type</strong></div></td>
    <td width="9">&nbsp;</td>
    <td width="361"><input name="account" id="account" type="radio" value="current" />Current
    				<input name="account" id="account" type="radio" value="saving" />Saving
    </td>
  </tr>
    <tr>
    <td width="282"><div align="center"><strong>Account No.</strong></div></td>
    <td width="9">&nbsp;</td>
    <td width="361"><input type="text" name="account_no" id="account_no" /></td>
  </tr>
  <tr>
    <td width="282"><div align="center"><strong>Password</strong></div></td>
    <td width="9">&nbsp;</td>
    <td width="361"><input type="password" name="password" id="password" /></td>
  </tr>

  <tr>
    <td width="282"><div align="center"><strong>First Name</strong></div></td>
    <td width="9">&nbsp;</td>
    <td width="361"><input type="text" name="fname" id="fname" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Last Name</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="lname" id="lname" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>E-Mail</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Father's Name</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="father_name" id="father_name" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Mother's Name</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="mother_name" id="mother_name" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Nominee Name</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="nominee" id="nominee" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>D.O.B.</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="date" name="dob" id="dob" /></td>
  </tr>

  <tr>
    <td><div align="center"><strong>Gender</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="radio" name="gender" id="gender" value="male" />Male
        <input type="radio" name="gender" id="gender" value="female" />Female
    </td>
  </tr>
  <tr>
    <td><div align="center"><strong>Mobile No.</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name="mobile" id="mobile" /></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Address</strong></div></td>
    <td>&nbsp;</td>
    <td><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Upload Photo</strong></div></td>
    <td>&nbsp;</td>
    <td><input type="file" name="img" id="img" /></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#0033FF"><div align="center">
      <input type="reset" name="reset" id="reset" value="Reset" />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="submit" id="submit" value="Submit" />
    </div></td>
    </tr>
</table>

      </form>
</div>
 <div class="footer">
    &copy Copyright and All Rights Reserved By <font color="#000000">Saurabh Jaiswal</font> 
    </div>
</body>
</html>
