<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
     <style>
    body{
    background:#ffffff url("vli.jpg") no-repeat;
    background-size: 1400px 700px;
        }</style>
</head><body >
   
<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTIONS 2018</font></b></center><br><br>
<center><b><font color="darkblue" size = "4">Registration page </font> </b></center>    
<div id="page">
<div id="header">
<h1>Voter Registration </h1>
<div class="news"><marquee behavior="alternate">New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates. </marquee></div>
</div>
    <div id="demo"><p><center> <font size="3px" >Be Bright, Vote For What is Right ! </font> </center> </p></div>    
<div id="container">
<?php
require('connection.php');
//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];
$myVoterid = $_POST['voterid'];    

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysql_query( "INSERT INTO tbMembers(first_name, last_name, email, password,voterid) VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass','$myVoterid')" )
        or die( mysql_error() );

die( "You have registered for an account.<br><br>Go to <a href=\"index.php\">Login</a>" );
}

echo "<center><h3>Register an account by filling in the needed information below:</h3></center><br><br>";
echo '<form action="registeracc.php" method="post" onsubmit="return registerValidate(this)">';
echo '<table align="center"><tr><td>';
echo "<tr><td>First Name:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='firstname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Last Name:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='lastname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Email Address:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='email' maxlength='100' value=''></td></tr>";
echo "<tr><td>Password:</td><td><input type='password' style='background-color:#999999; font-weight:bold;' name='password' maxlength='15' value=''></td></tr>";
echo "<tr><td>Confirm Password:</td><td><input type='password' style='background-color:#999999; font-weight:bold;' name='ConfirmPassword' maxlength='15' value=''></td></tr>";
echo "<tr><td>voter id :</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='voterid' maxlength='100' value=''></td></tr>";     
echo "<tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register Account'/></td></tr>";
echo "<tr><td colspan = '2'><p>Already have an account? <a href='index.php'><b>Login Here</b></a></td></tr>";
echo "</tr></td></table>";
echo "</form>";
?>
</div> 
<div id="footer">
<div class="bottom_addr">&copy; 2018 Online Voting System. <br>All Rights Reserved By Karnataka govt.</div>
</div>
</div>
</body></html>