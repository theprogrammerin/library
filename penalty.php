<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));

$theDate  = date("m/d/y");


?>

<?php
include('config.php');
if(isset($_GET['borrowid'])){

	$q=mysql_query("select * from book_loans where loan_id='".$_GET['borrowid']."'");

	$name=mysql_fetch_array($q)or die(mysql_error());

	}
 ?>
<form action="" method="post">

<table border="0" style="margin-top:15px; margin-left:20px; ">
<tr><td>
<input type="hidden" name="bid" value="<?php echo $name['borrowid']; ?>">
Borrowers Id:
<input type="hidden" name="accNo" value="<?php echo $name['accNo']; ?>">
</td>
<td>
<input type="text" readonly="readonly" name="borrowersid" style="padding:4px; width:250px;" value="<?php echo $name['studentid']; ?>"><br/>
</td></tr>
<?php
$q=mysql_query("select * from borrower where card_no='".$name['card_no']."'");

	$id=mysql_fetch_array($q)or die(mysql_error());

 ?>
 <tr><td>
Borrowers Name:
</td>
<td>
<input type="text" readonly="readonly" style="padding:4px; width:250px;" value="<?php echo $id['fname']."&nbsp;".$id['lname']; ?>"><br/>
</td></tr>
<tr>
<td colspan="2" height="10"><hr/></td>
</tr>
<tr><td>
Date Due:
</td><td>
<input type="text" readonly="readonly" name="datedue" style="padding:4px; width:250px;" value="<?php echo date_format(date_create($name['duedate']), 'F d Y'); ?>" />
</td></tr>
<?php

include('config.php');
$sql="SELECT * FROM tblpayment";
$rs=mysql_query($sql);


$rowpay=mysql_fetch_array($rs);


$endTimeStamp = strtotime($name['duedate']);
$startTimeStamp = strtotime($theDate);
$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);



?>
<tr><td>
Date Return:
</td><td>
<input type="text" readonly="readonly" name="datereturn" style="padding:4px; width:250px;" value="<?php echo date_format(date_create($theDate), 'F d, Y'); ?>"/>
</td>
<td>TotalDays</td><td><input name="totaldays" readonly="readonly" type="text" style="padding:4px; width:50px;" value="<?php echo $numberDays; ?>"/></td>
</tr></table>
<fieldset style="margin-top:25px; margin-left:20px; margin-right:20px;">

<table border="0" style="float:left; border:1px inset #333; margin-top:10px; ">
<tr>
<td>Total:</td><td>Php</td><td><input readonly="readonly" type="text" name="total" value="<?php echo number_format($numberDays*$name['amount'],2); ?>"></td>
</tr>
</table>

<fieldset style=" float:right; width:220px; margin-top:10px;">
<table border="0">
<tr><td colspan="2">
Over due book(<small>Base on day return</small>)
</td></tr>
<tr><td>
Php
</td>
<td><input type="text" readonly="readonly" value="<?php echo number_format($numberDays*$rowpay['amount'],2); ?>"></td></tr>
</table>

</fieldset>
<table border="0" style="float:left; margin-top:10px; ">
<tr><td>
<input type="submit" name="resibo" value="Pay" style="padding:8px; width:100px; float:left;">
</td></tr></table>
</fieldset>
</form>

<?php
if(isset($_POST['resibo'])){

	/*$borrowersid=$_POST['borrowersid'];
	$datedue=$_POST['datedue'];
	$datereturn=$_POST['datereturn'];
	$totaldays=$_POST['totaldays'];
	$total=$_POST['total'];

$sql="insert into tblreciept (borrowersid,datedue,datereturn,totaldays,totalpay) values(
	'".$borrowersid."',
	'".$datedue."',
	'".$datereturn."',
	'".$totaldays."',
	'".$total."'
	)";

	$pay=mysql_query($sql) or die (mysql_error());
	if($pay){*/

	?>

    		<script>
$(document).ready(function(){
 $("#div5").fadeIn(1000);



});
</script>
		<?php
	//	}
	?>


	<?php
	}
	if(isset($_GET['print/save'])){?>
		<script>
$(document).ready(function(){
 $("#div5").fadeIn(1000);



});
</script>
	<?php
	}
?>


<?php
/*if(isset($_POST['pay'])){
 include('config.php');
	$borrowersid=$_POST['borrowersid'];
	$datedue=$_POST['datedue'];
	$datereturn=$_POST['datereturn'];
	$totaldays=$_POST['totaldays'];
	$total=$_POST['total'];
$borrowid=$_POST['bidl'];

$sql="insert into tblreciept (borrowersid,datedue,datereturn,totaldays,totalpay) values(
	'".$borrowersid."',
	'".$datedue."',
	'".$datereturn."',
	'".$totaldays."',
	'".$total."'
	)";

	$pay=mysql_query($sql) or die (mysql_error());
	if($pay){
		echo "success";
		}
}
*/
?>

