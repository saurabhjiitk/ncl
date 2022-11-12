<?php

session_start();
$user=$_POST["username"];
$ldaprdn="uid=$user,ou=People,dc=iitk,dc=ac,dc=in";
$ldappass=$_POST["password"];  // associated password
$ldaphost='172.31.1.1';
$ldapport='389';                 // your ldap server's port number
$ldapconn = ldap_connect($ldaphost, $ldapport)
    or die("Could not connect to LDAP server.");
ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
if ($ldapconn) {
$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    if ($ldapbind) {
    $_SESSION['username']= $user;
        header('Location:soft.php');
    }
    else {
echo "<script>alert('Wrong User ID Or Password...Please Enter Correct User ID Or Password...');window.location='index.php?login=invalid'</script>";
               }
}
         else {
         echo "not connected";
 }
?>