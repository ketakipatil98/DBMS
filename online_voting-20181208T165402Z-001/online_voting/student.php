<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
    <style>
    body{
    background:#ffffff url("355.png") no-repeat;
    background-size: 1400px 700px;
        }</style>
</head><body>

<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTION 2018</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>VOTER'S HOMEPAGE </h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
</div>
    
<div id="container">
    <p align="left" size="3"><h4><center>Importance of Voting</center></h4>As a democratic country, India is built on the foundations of election.Voting is a constitutional right that we are privileged to have.The constitution has given us the right to elect who we want, and the right to make the change.Your vote can play an important part in making the change.Though it seems like an endless sea of people are there to vote, every vote counts.</p><p align="left" size="3">If you are unhappy with the current government, you can vote for a better one. Not voting could result in the same party ruling for another five years. At the end of the day, if the country is stuck with a bad government, it is the people to blame for voting wrong or for not voting at all.<br><br><center>So vote for your candidate and MAKE YOUR VOTE YOUR VOICE!<br>
   </center></p>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2018 Online Voting System. <br>All Rights Reserved by Karnataka govt.</div>
</div>
</div>
</body></html>