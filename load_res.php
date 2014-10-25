<style>

.trs:nth-child(2n+1){
	
	background-color:#CCC;}
	.trs:hover{ background:#E0E0E0;}
</style>

<table border="0" cellspacing="1" width="80%" style=" font-family:Verdana, Geneva, sans-serif; font-size:12px; border:#999 solid 1px;margin-left:50px; margin-top:30px; margin-bottom:20px;">
<td width="50">
<img src="icons/1.png" height="50">
</td>
<td>All Reserved records automatically deleted</td>
</tr>
</table>

<table border="0" cellspacing="1" width="80%" style=" border:#999 solid 1px;margin-left:50px; margin-top:30px; margin-bottom:20px;">
<tr>
<td bgcolor="#3B5998" colspan="2" height="30"  style="font-size:20px; color:#FFF; font-family:Verdana, Geneva, sans-serif;" align="center">Reserved Books</td>
</tr>
<tr bgcolor="#3B5998" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; height:30px; color:#FFF;">
<td>AccNo</td>
<td>Books</td>
<td>Reserved To</td>
<td>Time reserved</td>
<td>Time Claim</td>
    <td><img src="icons/phone_book_edit.png" height="20" /></td>

</tr>
<?php
require_once('config.php');

$sql = "SELECT * from tblbookreserve where status=1";
$rs=mysql_query($sql);
while($rows=mysql_fetch_array($rs)){
/*tblborrower.lname,
tblborrower.photo, 
tblborrower.fname,
tblborrower.mi,
tblborrower.levelyr,
tblborrower.section,
tblborrower.type,

tblbookreserve.studentid,
tblbookreserve.timeres,
tblbookreserve.accNo,
tblbookreserve.timeget ".
 "FROM tblborrower, tblbookreserve ".
	"WHERE tblborrower.studentid = tblbookreserve.studentid ";*/
	 
	$bo=mysql_query("select * from tblborrower where studentid='$rows[studentid]'");
	$r=mysql_fetch_array($bo);
	$bos=mysql_query("select * from books where accNo='$rows[accNo]'");
	$ass=mysql_fetch_array($bos);
	
 ?>
 <tr class="trs" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; height:30px;">
 <td><?php echo $rows['accNo']; ?></td>
  <td><?php echo $ass['booktitle']; ?></td>
   <td><?php echo $r['fname']."&nbsp;".$r['mi']."&nbsp;".$r['lname']; ?></td>
   <td><?php echo $rows['timeres']; ?></td>
    <td><?php echo date_format(date_create($rows['timeget']), 'h:i a'); ?></td>
    <td>
    <a href="?borrowBooks&studentid=<?php echo $rows['studentid']; ?>&accNo=<?php echo $rows['accNo']; ?>"><img src="icons/phone_book_edit.png" height="20" /></a></td>
 </tr>
 <?php
 
}?>
<tr bgcolor="#3B5998" >
<td colspan="6" height="20" ></td>
</tr>
</table>