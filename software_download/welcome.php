<?php
session_start();
if(strlen($_SESSION['username'])=="")
{
  header('location:logout.php');
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Registraion using PHP OOPs Concept</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/style.css" rel="stylesheet">
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="" align="center">Welcome Back : <?php  echo  $_SESSION['username'];?></legend>
    </div>

    <div class="control-group" align="center">
      <!-- Button -->
      <div class="controls">
        <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
      </div>
    </div>

  </fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>
<?php } ?>
<?php
// include Function  file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$uemail=$_POST['email'];
$pasword=md5($_POST['password']);
//Function Calling
$sql=$userdata->registration($fname,$uname,$uemail,$pasword);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Data Save successfully.');</script>";
echo "<script>window.location.href='welcome.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Registration using PHP OOPs Concept</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/style.css" rel="stylesheet">
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
 <script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data){
  $("#usernameavailblty").html(data);
  }
  });

}
</script>
</head>
<body>
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend" align="center">
      <legend class="">User Registration using PHP OOPs Concept</legend>
    </div>

<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username">Fullname</label>
      <div class="controls">
        <input type="text" id="username" name="fullname" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>


<?php /*?>    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
<input type="text" id="username" name="username" onblur="checkusername(this.value)" class="input-xlarge" required="true">
          <span id="usernameavailblty"></span>
      </div>
    </div>
<?php */?> 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="email" id="email" name="email" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
 
<?php /*?>    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
<?php */?> 

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit" id="submit" name="submit">Save</button>
      </div>
    </div>


  </fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>
