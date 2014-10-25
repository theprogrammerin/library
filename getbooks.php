
<?php
include('config.php');
?>
<table width="700px" align="center"  border="0" cellspacing="1" style=" margin-bottom:30px;font-size:12px; margin-top:40px; font-family:Verdana, Geneva, sans-serif;">
<thead>
<tr  style="font-size:15px; font-weight:bold; font-family:Verdana, Geneva, sans-serif;" height="30" align="center" >
   <td width="100">Acc No</td>
    <td  width="400">Title</td>
    <td  width="200">Author</td>
    <td  width="70">Copies</td>
      </tr>
      <tr>
<td colspan="4" style="border-bottom:#000 solid 1px;"></td>
</tr>
  </thead>
<?php

$year=$_REQUEST['year'];
$query="select * from books where daterecieve='$year' and status='1'";
$query_result=mysql_query($query);
$s=mysql_num_rows($query_result);
if($s==0){ ?>
	<div style=" margin-left:224px; color:#F00; font-size:17px; font-weight:bold; font-family:Verdana, Geneva, sans-serif;">No Books Found&nbsp;<?php echo $year; ?></div>
  
<?php	}elseif($query_result){ ?>
	<div style=" margin-left:281px; font-size:17px; font-weight:bold; font-family:Verdana, Geneva, sans-serif;">S.Y&nbsp;<?php echo $year; ?></div>
<?php	
while($row=mysql_fetch_array($query_result) or die(mysql_error()))
{ ?>
	

 
  <tr  align="center" class="hr" height="25">
    <td bgcolor="" width="100">
	<?php echo $row['accNo'];?>
    </td>
    <td  width="400"><?php echo $row['booktitle']; ?></td>
    <td width="200"><?php echo $row['author1']; ?></td>
    <td width="70" ><?php echo $row['bookcopies'];?></td>
   
 
  </tr>
  

<?php }
	}
?>
  </table>

