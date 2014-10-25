<div class="searchbox">

<style>
.searchbox{ position:absolute; margin-top:-6px; margin-left:-2px; color:#000;}
.td{
	height:25px;
	text-decoration:none;}
.a{ text-decoration:none;
color:#000;}
.hr:hover{
	background:#CCC;}

.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;

	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}


</style>
<table width="412" border="0" cellspacing="1" style=" background:#060;font-size:12px; font-family:Verdana, Geneva, sans-serif;">

<?php
include('config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select * from borrower where  lname like '$q%' or fname like '$q%' limit 8";
}

$r=mysql_query($sql_res);
$items = 0;
?>

<?php while($row=mysql_fetch_array($r))
{
	$j="<a href='index.php?returnBooks&studentid=$row[card_no]' class='a'>";
	//$d="<a href='?del&idnumber=$row[idnumber]' class='a'>";

		 $items++;

$fname=$row['fname'];
$lname=$row['lname'];
$mi=$row['mi'];

$re_idnumber='<b>'.$q.'</b>';
$rfname='<b>'.$q.'</b>';
$rlname='<b>'.$q.'</b>';
$rmi='<b>'.$q.'</b>';

$final_idnumber = str_ireplace($q, $re_idnumber, $idnumber);
$ffname = str_ireplace($q, $rfname, $fname);
$flname = str_ireplace($q, $rlname, $lname);
$fmi = str_ireplace($q, $rmi, $mi);

?>


 <tr bgcolor="#FFFFFF" class="hr"  height="25">
<td><?php echo $j;  ?>
<div class="td"><div style="padding-top:10px;">
<?php echo $ffname; ?></div>
</div></a>
</td>
<td><?php echo $j;  ?>
<div class="td"><div style="padding-top:10px;">
<?php echo $flname; ?></div>
</div></a>
</td>
<td><?php echo $j;  ?>
<div class="td"><div style="padding-top:10px;">
<?php echo $fmi; ?></div>
</div></a>
</td>

</tr>

<?php
}echo "
";

?>
</table>
<?php
if($items==0){ ?>

<div style=" text-align:left; margin-left:0px; height:20px; background:#FFF; width:; color:#F00; font-size:12px; font-family:Verdana, Geneva, sans-serif; margin-top:5px;">
"<?php echo $_POST['searchword']; ?>" &nbsp;
Search Not Found</div>

<?php	} ?>
</div>


