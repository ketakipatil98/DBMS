<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
 <style>
    body{
    background:#ffffff url("vli.jpg") no-repeat;
    background-size: 1400px 700px;
        }</style>
    </head><body>

<center><b><font color = "darkblue" size="6">KARNATAKA GENERAL ELECTIONS 2018 </font></b></center><br><br>
<center><b><font color = "darkblue" size= "4">WELCOME TO E-VOTING</font></b></center>  
        
<div id="page">
<div id="header">
<h1>Voter Login </h1>
<div class="news"><marquee behavior="alternate" color="red">New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates. </marquee></div>
</div>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="tan">
<tr>
<td width="78">Username/Email</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
<br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a>
</center>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2018 Online Voting System.          <br> All Rights Reserved by Karnataka govt.</div>
</div>
</div>
</body></html>