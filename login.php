<?php session_start();

if(isset($_SESSION['username']))
{
header("Location: index.php");
exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title>Library Login</title>
  
  <script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>

    <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
    <style>
	#headline{
		color:#390;
		font-family:Verdana, Geneva, sans-serif;
	}
	</style>
</head>

<body>

<div class="header"></div> 
<?php include('admin.php'); 
?>
<center>
<?php
?>

<div id="status">
<div class="wrapstat">
 <br/> <br/>
 
 <div align="center">
 <h3 id="headline"> The University of Texas at Dallas</h3>
 <h3 id="headline">Admin Login</h3>
 </div>
 <br/>

<fieldset style="width:300px; margin-top:30px; margin:auto;">
<div style="margin-top:3px; height:4px; width:200px;"></div>
<div class="headwrap">
<div class="title">
  <div style="float:left; font-size:20px; font-family:Verdana, Geneva, sans-serif; color:#090; margin-top:8px;
">&nbsp;Login</div>
</div>


<form id="login" name="login" method="post" action="do_login.php">
<table align="center" width="300" border="0" style="margin-top:20px;">
<tr>
<td width="80" style="font-family:Verdana, Geneva, sans-serif; font-size:15px;">Username</td><td><input type="text" name="username" style="width:200px; padding:5px;">
<td align="left">
</td>
</tr>
<tr>
<td style="font-family:Verdana, Geneva, sans-serif; font-size:15px;">Password</td>
<td align="left"><input type="password" name="password" style="width:200px; padding:5px;"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><input id="submit" type="submit" name="submit" value="Login">
<div id="ajax_loading"><img align="absmiddle" src="images/loading.gif">&nbsp;Checking...</div></td>
</tr>
</table>
</form>
</fieldset>
</div>
</div>
</center>
</body>
</html>