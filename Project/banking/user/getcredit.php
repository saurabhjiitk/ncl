<?php
require("db.php");
$account_no=$_POST["account_no"];
$credit=$_POST["credit"];
/*date_default_timezone_set('Asia/Calcutta');
$date=date("d M,Y");
$time=date("h:i a");*/
$sql="insert into balance(account_no,credit,entry_time) values('".$account_no."','".$credit."',now())";
mysql_query($sql);
$m=mysql_affected_rows();
if($m > 0){
echo "<script>alert('Your Amount Succesfully Credited....');window.location='user_panel.php'</script>";
}else{
echo "<script>alert('Please Try Again'....);window.location='credit.php'</script>";
}

?>