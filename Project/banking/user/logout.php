<?php
session_start();
unset($_SESSION["account_no"]);
unset($_SESSION["password"]);
session_destroy();
echo "<script>window.location='../index.php'</script>";
?>