<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
require("db.php");
$name=mysql_real_escape_string($_POST["name"]); 
$password=mysql_real_escape_string($_POST["password"]);
$query="select * from admin where name='".$name."' and password='".$password."'";
$q=mysql_query($query);
$m=mysql_num_rows($q);
if($m>0)
{
$_SESSION["name"]=$name;
$_SESSION["password"]=$password;
echo "<script>window.location='admin_panel.php'</script>";
}else
{
echo "<script>alert('Wrong User Name Or Password...');window.location='login.php?login=invalid'</script>";
}
}
if((isset($_GET['login']))&&($_GET['login']=="invalid"))
{
		$msg="<font color='red'>User Name Or Password are Invalid..!</font>";
}else if((isset($_GET['login']))&&($_GET['login']=="not"))
{
		$msg="<font color='red'>Not Registered</font>";
}
?>

<head>
<title>Co-operative Bank Pvt. Ltd.:</title>
<style type="text/css">
#form_div #form_user_div form table tr td div h3 strong {
	font-size: 24px;
}
#form_div #form_admin_div form table tr td div h3 strong {
	font-size: 24px;
}


#form_div #form_user_div form table tr td div h3 strong {
	color: #06F;
}
#form_div #form_admin_div form table tr td div h3 strong {
	color: #06F;
}

#form_div form div table tr td div strong {
	font-size: 30px;
	color: #03F;
}
#form_div form div table tr td div #button {
	background-color: #06F;
	width: 80px;
	height: 30px;
	color: #FFF;
	font-size: 16px;
	font-weight: bold;
}
#form_div {
	margin-top: 30px;
}
</style>
<link href="../css/css_design.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="top_div">
        <marquee direction="left" behavior="alternate">
        	Welcome To Co-Operative Bank Pvt. Ltd.
        </marquee>
    </div>
<div id="menu_div">
</div>
	<div id="form_div">
        	<form action="" method="post">
    	  <div align="center">
    	    <table width="455" height="217" border="1">
    	      <tr>
    	        <td colspan="3" bgcolor="#999999"><div align="center"> <strong>Admin Login</strong>    	        </div></td>
   	          </tr>
    	      <tr>
    	        <td><div align="center"><strong><font size="+2" color="#000000">Name</font></strong></div></td>
    	        <td><div align="center"><strong><font size="+2" color="#000000">:</font></strong></div></td>
    	        <td><label for="name"></label>
   	            <input type="text" name="name" id="name"></td>
   	          </tr>
    	      <tr>
    	        <td><div align="center"><strong><font size="+2" color="#000000">Password</font></strong></div></td>
    	        <td><div align="center"><strong><font size="+2" color="#000000">:</font></strong></div></td>
    	        <td><label for="password"></label>
   	            <input type="password" name="password" id="password"></td>
   	          </tr>
    	      <tr>
    	        <td colspan="3" bgcolor="#999999"><div align="center">
    	          <input type="submit" name="button" id="button" value="Submit">
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
