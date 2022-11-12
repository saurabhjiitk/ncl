<?php
session_start();
	if(isset($_SESSION["name"])=="")
	{
	echo "<script>window.location='login.php?login=invalid'</script>";
	}
?>

<head>
<title>Co-operative Bank Pvt. Ltd.:</title>
<style type="text/css">
#form_div #form_user_div {
	height: 250px;
	width: 42%;
	border: 1px solid #03F;
	margin-top: 20px;
	margin-left: 100px;
	font-size: 18px;
}

#form_div #form_admin_div {
	float: right;
	height: 250px;
	width: 42%;
	border: 1px solid #03F;
	margin-top: -252px;
	margin-right: 100px;
}
#form_div #form_user_div form table tr td div #button {
	height: 35px;
	width: 100px;
	background-color: #0C3;
	font-size: 16px;
	color: #FFF;
}
#form_div #form_admin_div form table tr td div #button {
	height: 35px;
	width: 100px;
	background-color: #0C3;
	font-size: 16px;
	color: #FFF;
}

#form_div #form_user_div form table tr td div #button:hover {
	height: 35px;
	width: 100px;
	background-color: #C6C;
	font-size: 16px;
	color: #FFF;
}
#form_div #form_admin_div form table tr td div #button:hover {
	height: 35px;
	width: 100px;
	background-color: #C6C;
	font-size: 16px;
	color: #FFF;
}


#form_div #form_user_div form p {
	font-size: 15px;
	width: 95%;
}
#form_div #form_admin_div form p {
	font-size: 15px;
	width: 95%;
}


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
</style>
<link href="../css/css_design.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="top_div">
        <marquee direction="left" behavior="alternate">
        	Welcome To Co-Operative Bank Pvt. Ltd.
        </marquee>
    </div>
    <div id="menu_div" align="right">
        <a href="../user/user_regi.html" a><input type="button" value="New Account" /></a>
       	<a href="#" a><input type="button" value="Manage Account" /></a>
    	<a href="logout.php" a><input type="button" value="Log Out" /></a>

    </div>
    </div>
    <div id="form_div" align="center">
    	<p>Succesfully Registered....</p>
    
    </div>
</body>
</html>
