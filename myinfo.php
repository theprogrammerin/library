<?php 
include('config.php');
$profile=mysql_query("select * from tblborrower where studentid='".$_SESSION[studentid]."'");

$row=mysql_fetch_array($profile);

?>

<table border="0" cellspacing="1"  style=" font-family:Verdana, Geneva, sans-serif; font-size:12px; border:#999 solid 0px;margin-left:50px; margin-top:30px; margin-bottom:20px;">
<td width="50">
<img src="borrowersphoto/<?php echo $row['photo']; ?>" height="50">
</td>
<td>My Information</td>
</tr>
</table>




<table border="0"  style=" font-family:Verdana, Geneva, sans-serif; font-size:15px; border:#999 solid 1px;margin-left:50px; margin-top:30px; margin-bottom:20px;">
<tr>
<td align="right">First Name:</td><td><?php echo $row['fname']; ?></td>
</tr>
<tr>
<td align="right">Last Name:</td><td><?php echo $row['lname']; ?></td>
</tr>
<tr>
<td align="right">Middle:</td><td><?php echo $row['mi']; ?></td>
</tr>
<tr>
<td align="right">Gender:</td><td><?php echo $row['gender']; ?></td>
</tr>
<tr>
<td align="right">address:</td><td><?php echo $row['address']; ?></td>
</tr>
<tr>
<td align="right">Contact:</td><td><?php echo $row['contactnumber']; ?></td>
</tr>
<tr>
<td align="right">Middle:</td><td><?php echo $row['mi']; ?></td>
</tr>
</table>

<table border="0"  style=" font-family:Verdana, Geneva, sans-serif; font-size:15px; border:#999 solid 1px;margin-left:50px; margin-top:30px; margin-bottom:20px;">
<tr>
<td align="right">Type:</td><td><?php echo $row['type']; ?></td>
</tr>
<tr>
<td align="right">Section:</td><td><?php echo $row['section']; ?></td>
</tr>
<tr>
<td align="right">Level/Year:</td><td><?php echo $row['levelyr']; ?></td>
</tr>
<tr>
<td align="right">S/Y:</td><td><?php echo $row['sy']; ?></td>
</tr>

</table>