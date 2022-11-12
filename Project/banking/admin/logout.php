<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["password"]);
session_destroy();
echo "<script>window.location='../index.php'</script>";
?>