<?php
session_start();
require('../connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
} 
//retrive voters from the tbmembers table
$result1=mysql_query("SELECT * FROM tbmembers")
or die("There are no records to display ... \n" . mysql_error()); 
if (mysql_num_rows($result)<1){
    $result = null;
}
?>

<?php
// inserting sql query
if (isset($_POST['Submit']))
{

$newVoterFName = addslashes( $_POST['fname'] ); //prevents types of SQL injection
$newVoterLName = addslashes( $_POST['lname'] ); //prevents types of SQL injection
$newVoterEmail =$_POST['email'] ;
$newVoterPassword =$_POST['pass'] ;
$myVoterid = $_POST['voterid'];    

$newpass = md5($newVoterPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysql_query( "INSERT INTO tbMembers(first_name, last_name, email, password,voterid) VALUES ('$newVoterFName','$newVoterLName', '$newVoterEmail', '$newpass','$myVoterid')" )
        or die( mysql_error() );

// redirect back to candidates
 header("Location: addvoter.php");
}
?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM tbmembers WHERE member_id='$id'")
 or die("The member does not exist ... \n"); 
 
 // redirect back to candidates
 header("Location: addvoter.php");
 }
 else
 // do nothing   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
     <style>
    body{
    background:#ffffff url("bg1.jpg") no-repeat;
    background-size: 1400px 1100px;
        }</style>
<title>Administration Control Panel:voters</title>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head>
<body bgcolor="tan">
<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTIONS 2018</font></b></center><br><br>
<div id="page">
<div id="header">
  <h1>MANAGE VOTERS</h1>
  <a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> | <a href="positions.php">Manage Parties</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="addvoter.php">Add Voter</a>  | <a href="logout.php">Logout</a>
</div>
<div id="container">
<table width="380" align="center">
<CAPTION><h3>ADD NEW VOTER</h3></CAPTION>
<form name="fmVoters" id="fmVoters" action="addvoter.php" method="post" onsubmit="return candidateValidate(this)">
<tr>
    <td>Voter firstName</td>
    <td><input type="text" name="fname" /></td>
</tr>
<tr>
    <td>Voter LastName</td>
    <td><input type="text" name="lname" /></td>
 </tr>
 <tr>
    <td>Voter email</td>
    <td><input type="text" name="email" /></td>
 </tr>
   <tr>
    <td>Voter password</td>
    <td><input type="text" name="pass" /></td>
 </tr>
   <tr>
    <td>Voter id</td>
    <td><input type="text" name="voterid" /></td>
 </tr> 
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>

<div id="footer"> 
  <div class="bottom_addr">&copy;  2018 Online Voting System. <br>All Rights Reserved By Karnataka govt.</div>
</div>
</div>
</body>
</html>