<?php
session_start();
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
    <style>
    body{
    background:#ffffff url("cloud.jfif") no-repeat;
    background-size: 1400px 700px;
        }</style>
</head><body>  
<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTIONS 2018 </font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully. </h1>
<p align="center">&nbsp;</p>
</div>
<?php
session_destroy();
?>
    <p align="center"><font size="4"><br>You have been logged out successfully.<br><br>Thank you for using the Online Voting System.</font></p><br><br><br>
    <p align="center" color="darkblue"><font size="3">Return to <a href="index.php">Login</a></font></p>
<div id="footer">
<div class="bottom_addr">&copy; 2018 Online Voting System. <br>  All Rights Reserved by Karnataka govt.</div>
</div>
</div>
</body></html>