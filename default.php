<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Default Value</title>
</head>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<body>

<?php 
include('config.php');
$sql="SELECT * FROM tblpayment";
$rs=mysql_query($sql);


$rowpay=mysql_fetch_array($rs);
?>
<form action="" method="post">

<table border="0" align="center" style=" font-weight:bold;font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-top:5px; border:1px inset #999;">
<tr><td>Change Default Value&nbsp;&nbsp;
<a href=""><img src="icons/b_help.png" title="Bayad sa libro kung malapas sa imong date due <?php echo $rowpay['amount']; ?> kada adlaw malapas" /></a>
</td>
<td></td>
</tr>
<tr>
<td>
<input id="p" align="center" name="pay" value="" type="text" style="width:155px; padding:4px" size="8">
</td>
<td class="value" align="center" style="width:25px;">
<div id="id" title="Change default value">
<input type="submit" name="change" style="padding:3px;" value="Change">

</div>
</td>
</tr>
</table></form>
<?php 
if(isset($_POST['change'])){
	$up="update tblpayment set amount='".$_POST['pay']."'";
	mysql_query($up); ?>
	<script>
window.close();
</script>
	<?php }
?>
</body>
</html>