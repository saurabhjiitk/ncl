<?php
require("db.php");
$account=$_POST["account"];
$account_no=$_POST["account_no"];
$password=$_POST["password"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$father_name=$_POST["father_name"];
$mother_name=$_POST["mother_name"];
$nominee=$_POST["nominee"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
// img uploaded code are here
$img=$_FILES["img"]["name"];
$tmp1=$_FILES["img"]["tmp_name"];
$path="upload/".$img;
move_uploaded_file($tmp1,$path);
//code end here
$sql="insert into user(account,account_no,password,fname,lname,email,father_name,mother_name,nominee,dob,gender,mobile,address,img,entry_time) values('".$account."','".$account_no."','".$password."','".$fname."','".$lname."','".$email."','".$father_name."','".$mother_name."','".$nominee."','".$dob."','".$gender."','".$mobile."','".$address."','".$img."',now())";
mysql_query($sql) or die("error in insertion".mysql_error());
$m=mysql_affected_rows();
if($m > 0)
{
	echo "<script>alert('successfully registered');window.location='user_regi.php';</script>";
}
else
{
	echo "<script>alert('error in insertion');window.location='user_regi.php';</script>";	
}

?>