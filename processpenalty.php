<?php 
if(isset($_POST['pay'])){
 include('config.php'); 
	$borrowersid=$_POST['borrowersid'];
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
	if($pay){
		echo "success";
		}
}

?>

