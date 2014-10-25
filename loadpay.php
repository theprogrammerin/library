<?php 
include('config.php');
$sql="SELECT * FROM tblpayment";
$rs=mysql_query($sql);


$rowpay=mysql_fetch_array($rs);
?>
<input id="pay" align="center" name="pay" value="<?php echo $rowpay['amount']; ?>" type="text" style="width:155px; padding:4px" size="8">