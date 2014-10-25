<?php
include('config.php');

if($_GET['id']){
	$del=mysql_query("delete from tbltype where id=$_GET[id]") or die(mysql_error());
	echo "<script>window.location='?addBorrower&addtype'</script>";
	}
 ?>
 
 <?php
if($_GET['sec_id']){
	$del=mysql_query("delete from tblsection where sec_id=$_GET[sec_id]") or die(mysql_error());
	echo "<script>window.location='?addBorrower&year/section'</script>";
	}
 ?>



<?php

if($_GET['resid'])
{
$id=$_GET['resid'];


 $sql = "DELETE FROM  tblbookreserve WHERE resid='$id'";
 mysql_query( $sql);
}

?>
