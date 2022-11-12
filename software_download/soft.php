<?php
session_start();
if(strlen($_SESSION['username'])=="")
{
  header('location:logout.php');
} else {

?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<link rel="stylesheet" href="Index_CSS.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
	<title>Windows Software</title>
	<script>
	document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
		

	</script>
<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align:left;}
</style>
	<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>
</head>

<body>

<img src="ncl.png" alt="Paris" style="width:50%;">

<div style="width:80%; margin-left:10%;">
<h1 style="color:#291BD7; background-color:#1BD1D7;font-size:40px; font-weight:bold"
<c>List of CC Windows Lab Software<h2> Welcome Back : <?php  echo  $_SESSION['username'];?>         
	<a href="logout.php" class="btn btn-success" type="submit" name="logout" >Logout</a></h2>
</h1>

	</div>
		<p style="color: red; font-size: 24px;">
			Note:- For download software please open in Internet Explorer OR Microsoft Edge OR Enable FTP in Google Chrome/Mozila Firefox.
			<br>
			<a href="adarshsr/ftp_enable.html" target="Fadarshsr/ftp_enable.html"> How to enable FTP in Chrome</a>
		</p>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Abaqus2019 
		<a href="ftp://172.31.5.215/Abaqus2019.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Aspen8.8 
		<a href="ftp://172.31.5.215/Aspen8.8.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Anaconda4.1.1 
		<a href="ftp://172.31.5.215/Anaconda4.1.1.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			
	<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Atmel Studio 
		<a href="ftp://172.31.5.215/Atmel Studio.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > AutoCAD_2019_English_Win_64bit 
		<a href="ftp://172.31.5.215/AutoCAD_2019_English_Win_64bit.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > AutoCAD_Mechanical_2019_English_Win_64bit 
		<a href="ftp://172.31.5.215/AutoCAD_Mechanical_2019_English_Win_64bit.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > CodeBlockes 
		<a href="ftp://172.31.5.215/CodeBlockes.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > comsol5 
		<a href="ftp://172.31.5.215/comsol5.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Dev-C++ 
		<a href="ftp://172.31.5.215/Dev-C++.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > EView7 
		<a href="ftp://172.31.5.215/EView7.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Inventor_Pro_2019_English_Win_64bit_dlm 
		<a href="ftp://172.31.5.215/Inventor_Pro_2019_English_Win_64bit_dlm.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Maple18 
		<a href="ftp://172.31.5.215/Maple18.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Mathematica_8.0.4 
		<a href="ftp://172.31.5.215/Mathematica_8.0.4.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Matlab_2018b 
		<a href="ftp://172.31.5.215/Matlab_2018b.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > MATLAB_2019b 
		<a href="ftp://172.31.5.215/MATLAB_2019b.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > MikTex2 
		<a href="ftp://172.31.5.215/MikTex2.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Minitab14.12 
		<a href="ftp://172.31.5.215/Minitab14.12.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Origin2015 
		<a href="ftp://172.31.5.215/Matlab_2018b.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Python3.8 
		<a href="ftp://172.31.5.215/Python3.8.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > QGIS 
		<a href="ftp://172.31.5.215/QGIS.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > R3.3.2 
		<a href="ftp://172.31.5.215/R3.3.2.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > RStudio1.1 
		<a href="ftp://172.31.5.215/RStudio1.1.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > SCAPS3307 
		<a href="ftp://172.31.5.215/SCAPS3307.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > QGIS 
		<a href="ftp://172.31.5.215/QGIS.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > R3.3.2 
		<a href="ftp://172.31.5.215/R3.3.2.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > RStudio1.1 
		<a href="ftp://172.31.5.215/RStudio1.1.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > SCAPS3307 
		<a href="ftp://172.31.5.215/SCAPS3307.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a></div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Schrodinger_Suites_2019-1_Windows-x64 
		<a href="ftp://172.31.5.215/Schrodinger_Suites_2019-1_Windows-x64.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > SCS Samsung 
		<a href="ftp://172.31.5.215/SCS Samsung.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > SPSSSC_64-BIT_23.0_MW_ML 
		<a href="ftp://172.31.5.215/SPSSSC_64-BIT_23.0_MW_ML.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > SSHSecureShell3.2.9 
		<a href="ftp://172.31.5.215/SSHSecureShell3.2.9.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a></div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Stata 12 
		<a href="ftp://172.31.5.215/Stata 12.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Tecplot360 
		<a href="ftp://172.31.5.215/Tecplot360.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Visual Studio 2013 Professional 32-bit 
		<a href="ftp://172.31.5.215/Visual Studio 2013 Professional 32-bit.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a></div>
			<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > SSHSecureShell3.2.9 
		<a href="ftp://172.31.5.215/SSHSecureShell3.2.9.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a></div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > VS_Express2015
		<a href="ftp://172.31.5.215/VS_Express2015.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > winrar 
		<a href="ftp://172.31.5.215/winrar.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a> </div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > WinSCP 
		<a href="ftp://172.31.5.215/WinSCP.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a></div>
		<hr>
		<div style="width:50%; margin-left:25%; margin-right:10%; text-align=left; color:#291BD7; background-color:#1BD1D7; font-size:25px; font-weight:bold;" > Xming6.9
		<a href="ftp://172.31.5.215/Xming6.9.zip" style="float:right;" ><font style="color:red; font-size:20px;"> Download </font></a></div>	
<br>
<hr>
<?php } ?>	
	<div class="footer">
<footer>
  <p> Developed and Maintained By : <span style="color: #035ABB;">Saurabh Jaiswal</span></p></footer>
</div>
		</body>
</html>
