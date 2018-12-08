<?php
require('../connection.php');
// retrieving candidate(s) results based on position
if (isset($_POST['Submit'])){   
/*
$resulta = mysql_query("SELECT * FROM tbCandidates where candidate_name='Luis Nani'");

while($row1 = mysql_fetch_array($resulta))
  {
  $candidate_1=$row1['candidate_cvotes'];
  }
  */
  $position = addslashes( $_POST['position'] );
  
    $results = mysql_query("SELECT * FROM tbcandidates where candidate_position='$position'");

    $row1 = mysql_fetch_array($results); // for the first candidate
    $row2 = mysql_fetch_array($results); // for the second candidate
    $row3 = mysql_fetch_array($results);
    $row4 = mysql_fetch_array($results);
      if ($row1){
      $candidate_name_1=$row1['candidate_name']; // first candidate name
      $candidate_1=$row1['candidate_cvotes']; // first candidate votes
      $candidate_p_1=$row1['candidate_position'];
      }

      if ($row2){
      $candidate_name_2=$row2['candidate_name']; // second candidate name
      $candidate_2=$row2['candidate_cvotes']; // second candidate votes
      }
    if ($row3){
      $candidate_name_3=$row3['candidate_name']; // second candidate name
      $candidate_3=$row3['candidate_cvotes']; // second candidate votes
      }
    if ($row4){
      $candidate_name_4=$row4['candidate_name']; // second candidate name
      $candidate_4=$row4['candidate_cvotes']; // second candidate votes
      }
}
    else
        // do nothing
?> 
<?php
// retrieving positions sql query
$positions=mysql_query("SELECT * FROM tbpositions")
or die("There are no records to display ... \n" . mysql_error()); 
?>
<?php
session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
?>

<?php if(isset($_POST['Submit'])){$totalvotes=$candidate_1+$candidate_2+$candidate_3+$candidate_4;} ?>

<html><head>
    <style>
    body{
    background:#ffffff url("bg1.jpg") no-repeat;
    background-size: 2000px 2000px;
        }</style>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head><body >
<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTIONS 2018</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>POLL RESULTS </h1>
<a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> | <a href="positions.php">Manage Parties</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="addvoter.php">Add Voter</a> |<a href="logout.php">Logout</a>
</div>
<div id="container">
<table width="420" align="center">
<form name="fmNames" id="fmNames" method="post" action="refresh.php" onSubmit="return positionValidate(this)">
<tr>
    <td><font size="4">Choose Party</font></td>
    <td><SELECT NAME="position" id="position">
    <OPTION VALUE="select">select
    <?php 
    //loop through all table rows
    while ($row=mysql_fetch_array($positions)){
    echo "<OPTION VALUE=$row[position_name]>$row[position_name]"; 
    //mysql_free_result($positions_retrieved);
    //mysql_close($link);
    }
    ?>
    </SELECT></td>
    <td><input type="submit" name="Submit" value="See Results" /></td>
</tr>
<tr>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
</form> 
</table>
<?php if(isset($_POST['Submit'])){echo $candidate_name_1;} ?>:<br><?php if($candidate_p_1=="BJP"){
echo '<img src="namo.jpg"/>';} elseif($candidate_p_1=="CONGRESS"){echo '<img src="rahul.jpg"/>';} elseif($candidate_p_1=="TDP"){echo '<img src="cbn.jpg"/>';} elseif($candidate_p_1=="JDS"){echo '<img src="dev.jpg"/>';} elseif($candidate_p_1=="AAM"){echo '<img src="kej.jpg"/>';} elseif($candidate_p_1=="YCP"){echo '<img src="kum.jpg"/>';} elseif($candidate_p_1=="HNP"){echo '<img src="akh.jpg"/>';} elseif($candidate_p_1=="AIADMK"){echo '<img src="pal.jpg"/>';}?>
<img width='<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_1/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>'
height='30'>
<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_1/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>% of <?php if(isset($_POST['Submit'])){echo $totalvotes;} ?> total votes
<br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_1;} ?>
<br>
<br>
    
<?php if(isset($_POST['Submit'])){ echo $candidate_name_2;} ?>:<br>
<?php if($candidate_p_1=="BJP"){
echo '<img src="amitshah.jpg"/>';} elseif($candidate_p_1=="CONGRESS"){echo '<img src="soni.jpg"/>';} elseif($candidate_p_1=="TDP"){echo '<img src="lok.jpg"/>';} elseif($candidate_p_1=="JDS"){echo '<img src="dev.jpg"/>';} elseif($candidate_p_1=="AAM"){echo '<img src="saz.jpg"/>';} elseif($candidate_p_1=="YCP"){echo '<img src="sur.jpg"/>';} elseif($candidate_p_1=="HNP"){echo '<img src="rek.jpg"/>';} elseif($candidate_p_1=="AIADMK"){echo '<img src="pan.jpg"/>';}?>
<img width='<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_3/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>'
height='30'>
<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_2/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>% of <?php if(isset($_POST['Submit'])){echo $totalvotes;} ?> total votes
<br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_2;} ?>
    <br>
    <br>
<?php if(isset($_POST['Submit'])){ echo $candidate_name_3;} ?>:<br>
<?php if($candidate_p_1=="BJP"){
echo '<img src="raj.jpg"/>';} elseif($candidate_p_1=="CONGRESS"){echo '<img src="man.jpg"/>';} elseif($candidate_p_1=="TDP"){echo '<img src="nar.jpg"/>';} elseif($candidate_p_1=="JDS"){echo '<img src="kun.jpg"/>';} elseif($candidate_p_1=="AAM"){echo '<img src="ish.jpg"/>';} elseif($candidate_p_1=="YCP"){echo '<img src="sur.jpg"/>';} elseif($candidate_p_1=="HNP"){echo '<img src="ujw.jpg"/>';} elseif($candidate_p_1=="AIADMK"){echo '<img src="tam.jpg"/>';}?>
<img width='<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_3/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>'
height='30'>
<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_3/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>% of <?php if(isset($_POST['Submit'])){echo $totalvotes;} ?> total votes
<br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_3;} ?>
    <br>
    <br>
<?php if(isset($_POST['Submit'])){ echo $candidate_name_4;} ?>:<br>
<?php if($candidate_p_1=="BJP"){
echo '<img src="lka.jpg"/>';} elseif($candidate_p_1=="CONGRESS"){echo '<img src="narr.jpg"/>';} elseif($candidate_p_1=="TDP"){echo '<img src="chi.jpg"/>';} elseif($candidate_p_1=="JDS"){echo '<img src="kums.jpg"/>';} elseif($candidate_p_1=="AAM"){echo '<img src="dha.jpg"/>';} elseif($candidate_p_1=="YCP"){echo '<img src="jag1.jpg"/>';} elseif($candidate_p_1=="HNP"){echo '<img src="mul.jpg"/>';} elseif($candidate_p_1=="AIADMK"){echo '<img src="rama.jpg"/>';}?>
<img width='<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_4/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>'
height='30'>
<?php if(isset($_POST['Submit'])){ if ($candidate_2 || $candidate_1 != 0){echo(100*round($candidate_4/($candidate_4+$candidate_3+$candidate_2+$candidate_1),2));}} ?>% of <?php if(isset($_POST['Submit'])){echo $totalvotes;} ?> total votes
<br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_4;} ?>  
</div>
<div id="footer">
<div class="bottom_addr">&copy;  2018 Online Voting System. <br>All Rights Reserved By Karnataka govt.</div>
</div>
</div>
</body></html>