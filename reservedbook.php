<style>
.reserved{ background:#090; width:100%; z-index:5;}
.trhov:hover{ background:#DADADA;}
</style>
<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
?>
<?php 

include('config.php');


//$del="delete from tblbookreserve where timeget='$exp'";


/*$sql="SELECT tblborrower.lname, tblborrower.fname, tblborrower.mi,
tblbookreserve.studentid
FROM tblborrower
INNER JOIN tblborrower
ON tblborrower.studentid=tblbookreserve.studentid";*/


// Make a MySQL Connection
// Construct our join query
$sql = "SELECT * from tblbookreserve where status=1";
$rs=mysql_query($sql);
$num=mysql_num_rows($rs);
if($num==0){ ?>
	<div style="width:200px; color:#F00;">No Reserved</div>
	 <?php }else{}
while($rows=mysql_fetch_array($rs)){
	 $bo=mysql_query("select * from tblborrower where studentid='$rows[studentid]'");
	$r=mysql_fetch_array($bo);



/*$sql="SELECT * FROM tblbookreserve where status='1'";*/





	
$exp=date("Y/m-d H:i:s");
$del=mysql_query("update tblbookreserve set status='0' WHERE timeget='$exp'");


$sela="select * from tblbookreserve where status='0' and timeget='$exp'";
$asa=mysql_query($sela);
$aa=mysql_fetch_array($asa);



if($aa){

$sel="select * from tblbookreserve where resid='$_GET[resid]'";
$as=mysql_query($sel);
$a=mysql_fetch_array($as);

$s="select * from books where accNo='".$rows['accNo']."'";
$ad=mysql_query($s);
$ass=mysql_fetch_array($ad);



$num=$ass['bookcopies']+1;

$update1="UPDATE books set bookcopies='$num' where accNo='".$rows['accNo']."' ";

 mysql_query( $update1);

}




	
	/*$sqls="SELECT * FROM tblborrower where studentid ='$row[studentid]' ";
$rss=mysql_query($sqls);
$rows=mysql_fetch_array($rss)or die(mysql_error());*/
?>

<table border="0" width="100%">

<tr class="trhov">
<td width="30"><img src="borrowersphoto/<?php 
if($r['photo']){
echo $r['photo'];
}else{
	echo "profile.gif";
	}

 ?>" height="30" width="30"></td><td>
 <?php ?>
 <?php echo $r['fname']."&nbsp;".$r['mi']."&nbsp;".$r['lname'];?></div></td>
<td><?php echo $r['levelyr']."&nbsp;".$r['section']; ?></div></td>
</tr>
<!--<tr>
<td colspan="2" height="10"></td>
</tr>-->
</table>

<?php }?>
<table width="100%" cellspacing="0" height="30" bgcolor="#D1D1D1" border="0">
<tr>
<td align="center"><a href="?allreserved">View all</a></td>
</tr>
</table>

