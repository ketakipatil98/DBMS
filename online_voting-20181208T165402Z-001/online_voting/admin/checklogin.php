<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Karanataka General Elections </title>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
    <style>
    body{
    background:#ffffff url("cloud.jfif") no-repeat;
    background-size: 1400px 700px;
        }</style>
</head>
<body>
    <center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTION 2018 </font></b></center><br><br>
<br>     

<div id="page">
<div id="header">
<h1>Invalid Credentials Provided </h1>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
require('connection.php');


// Defining your login details into variables
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
// MySQL injection protections
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM tbadministrators WHERE email='$myusername' and password='$encrypted_mypassword'" or die(mysql_error());
$result=mysql_query($sql) or die(mysql_error());

// Checking table row
$count=mysql_num_rows($result);
// If username and password is a match, the count will be 1

if($count==1){
// If everything checks out, you will now be forwarded to student.php
$user = mysql_fetch_assoc($result);
$_SESSION['admin_id'] = $user['admin_id'];
header("location:admin.php");
}
//If the username or password is wrong, you will receive this message below.
else {
echo "Wrong Username or Password. Please try again.<br><br>Return to <a href=\"index.php\">login</a>";
}

ob_end_flush();

?> 
</div>
<div id="footer"> 
  <div class="bottom_addr">&copy; 2018 Online Voting System. <br>All Rights Reserved By Karnataka govt.</div>
</div>
</div>
</body>
</html>