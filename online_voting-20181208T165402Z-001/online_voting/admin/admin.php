<?php
session_start();
require('../connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
     <style>
    body{
    background:#ffffff url("vli.jpg") no-repeat;
    background-size: 1400px 700px;
        }</style>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="white">
<br>
    <br>
<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTIONS 2018</font></b></center><br><br>
<div id="page">
<div id="header">
    <h1><center>ADMINISTRATION CONTROL PANEL </center></h1>
<a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> | <a href="positions.php">Manage Parties</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="addvoter.php">Add Voter</a> |<a href="logout.php">Logout</a>
</div>
<p align="center">&nbsp;</p>
<div id="container">

    <p><center>Click a link above to perform any required administrative operation.</center></p>


</div>
<div id="footer">
<div class="bottom_addr">&copy; 2018 Online Voting System.<br> All Rights Reserved by Karnataka govt.</div>
</div>
</div>
</body></html>