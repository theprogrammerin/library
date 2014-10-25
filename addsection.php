<?php include('addtype.php'); ?>

<style>
.asss{ background:#3B5998; height:30px; color:#FFF; text-align:center; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; }
.jade{border:1px #333 solid; margin-top:20px;}
.trint:nth-child(2n+1){
	
	background-color:#CCC;}
	.trint:hover{ background:#E5E5E5;}
</style>
<script>
jQuery(function($){
   $("#water").Watermark("Add First Year");
   });
 
 jQuery(function($){
   $("#water1").Watermark("Add Second Year");
   });
   jQuery(function($){
   $("#water2").Watermark("Add Third Year");
   });
   jQuery(function($){
   $("#water3").Watermark("Add Fourth Year");
   });
   
  
   
   </script>
   <script type="text/javascript" src="js/jquery.watermarkinput.js"></script>

<table border="0" width="830" style="margin-left:50px;  margin-bottom:20px;">
<tr>
<td width="
50">
<img src="icons/1.png" height="50">
</td><td align="left" style="font-size:25px; font-family:Verdana, Geneva, sans-serif;">Change Year/Section</td>
</tr></table>
<?php 
if(isset($_POST['addsec'])){
	include('config.php');
	$addsec=mysql_query("insert into tblsection (section,yr_id) values('".$_POST['ad']."','".$_POST['yr_id']."')")or die(mysql_error());
		echo "<script>window.location='?addBorrower&year/section'</script>";

}
if(isset($_POST['edit'])){
	include('config.php');
	$addsec=mysql_query("update  tblsection set section='".$_POST['ad']."' where sec_id=$_GET[sec_id]")or die(mysql_error());
}

if(isset($_GET['edit'])){
	$edit=mysql_query("select * from tblsection where sec_id=$_GET[sec_id]");
	$row=mysql_fetch_array($edit);
	}
if(isset($_GET['edit1'])){
	$edit1=mysql_query("select * from tblsection where sec_id=$_GET[sec_id]");
	$row1=mysql_fetch_array($edit1);
	}
if(isset($_GET['edit2'])){
	$edit2=mysql_query("select * from tblsection where sec_id=$_GET[sec_id]");
	$row2=mysql_fetch_array($edit2);
	}
	if(isset($_GET['edit3'])){
	$edit3=mysql_query("select * from tblsection where sec_id=$_GET[sec_id]");
	$row3=mysql_fetch_array($edit3);
	}
?>
<form action="" method="post">
<table border="0" width="180" class="jade"  style="margin-left:50px; float:left; margin-bottom:20px;">
<tr class="asss">
<td colspan="3">1st Year</td>
</tr>
<?php 
	include('config.php');
$sqlclass="SELECT * FROM tblsection where yr_id='1'";
$rsclass=mysql_query($sqlclass);
while($type=mysql_fetch_array($rsclass)){ ?>
<tr class="trint">
<td width="110"><?php echo $type['section'];?></td>
<td align="center"><a href=""  class="jades" id=<?php echo $type['sec_id']; ?>><img src="icons/b_drop.png" height="15" ></a></td>
<td align="center">
<a href="?addBorrower&year/section&edit&sec_id=<?php echo $type['sec_id']; ?>"><img src="icons/b_edit.png" height="15" ></a>
</td>
<input type="hidden" id="add" name="yr_id" value="<?php  echo $type['yr_id']; ?>" style=" padding:1px;width:165px;">

</tr>
<?php }?>
<tr>
<td height="30" colspan="3" >
<input type="text" value="<?php echo $row['section']; ?>" id="water" name="ad" style=" padding:1px;width:165px;">
</td>
</tr>
<td height="20" bgcolor="#3B5998" colspan="3" >
<?php if(isset($_GET['edit'])){?>
<input type="submit" id="add" name="edit" value="Edit" style=" padding:1px;width:50px;">
<a href="?addBorrower&year/section" style="text-decoration:none; font-size:12pxl; color:#FFF;">Cancel</a>
<?php
}else{?>
<input type="submit" id="add" name="addsec" value="Add" style=" padding:1px;width:50px;">

<?php }?>


</td>
</tr>
</table>
</form>

<!--------------------------------------------------------------------------------------->
<form action="" method="post">
<table border="0" width="180"class="jade"  style="margin-left:20px; float:left; margin-bottom:20px;">
<tr class="asss">
<td colspan="3">2nd Year</td>
</tr>
<?php 
	include('config.php');
$sqlclass="SELECT * FROM tblsection where yr_id='2'";
$rsclass=mysql_query($sqlclass);
while($type=mysql_fetch_array($rsclass)){ ?>
<tr class="trint">
<td width="110"><?php echo $type['section'];?></td>
<td align="center">
<a href=""  class="jades" id=<?php echo $type['sec_id']; ?>><img src="icons/b_drop.png" height="15" ></a></td>
<td align="center">
<a href="?addBorrower&year/section&edit1&sec_id=<?php echo $type['sec_id']; ?>"><img src="icons/b_edit.png" height="15" ></a>
</td>
<input type="hidden" id="add" name="yr_id" value="<?php  echo $type['yr_id']; ?>" style=" padding:1px;width:165px;">

</tr>
<?php }?>
<tr>
<td height="30" colspan="3" >
<input type="text" value="<?php echo $row1['section']; ?>" id="water1" name="ad" style=" padding:1px;width:165px;">
</td>
</tr>
<td height="20" bgcolor="#3B5998" colspan="3" >
<?php if(isset($_GET['edit1'])){?>
<input type="submit" id="add" name="edit" value="Edit" style=" padding:1px;width:50px;">
<a href="?addBorrower&year/section" style="text-decoration:none; font-size:12pxl; color:#FFF;">Cancel</a>
<?php
}else{?>
<input type="submit" id="add" name="addsec" value="Add" style=" padding:1px;width:50px;">

<?php }?>


</td>
</tr>
</table>
</form>
<!--------------------------------------------------------------------------------------->

<form action="" method="post">
<table border="0" width="180" class="jade"  style="margin-left:20px; float:left; margin-bottom:20px;">
<tr class="asss">
<td colspan="3">3rd Year</td>
</tr>
<?php 
	include('config.php');
$sqlclass="SELECT * FROM tblsection where yr_id='3'";
$rsclass=mysql_query($sqlclass);
while($type=mysql_fetch_array($rsclass)){ ?>
<tr class="trint">
<td width="110"><?php echo $type['section'];?></td>
<td align="center">
<a href=""  class="jades" id=<?php echo $type['sec_id']; ?>><img src="icons/b_drop.png" height="15" ></a></td>
<td align="center">
<a href="?addBorrower&year/section&edit2&sec_id=<?php echo $type['sec_id']; ?>"><img src="icons/b_edit.png" height="15" ></a>
</td>
<input type="hidden" id="add" name="yr_id" value="<?php  echo $type['yr_id']; ?>" style=" padding:1px;width:165px;">

</tr>
<?php }?>
<tr>
<td height="30" colspan="3" >
<input type="text" value="<?php echo $row2['section']; ?>" id="water2" name="ad" style=" padding:1px;width:165px;">
</td>
</tr>
<td height="20" bgcolor="#3B5998" colspan="3" >
<?php if(isset($_GET['edit2'])){?>
<input type="submit" id="add" name="edit" value="Edit" style=" padding:1px;width:50px;">
<a href="?addBorrower&year/section" style="text-decoration:none; font-size:12pxl; color:#FFF;">Cancel</a>
<?php
}else{?>
<input type="submit" id="add" name="addsec" value="Add" style=" padding:1px;width:50px;">

<?php }?>


</td>
</tr>
</table>
</form>
<!--------------------------------------------------------------------------------------->

<form action="" method="post">
<table border="0" width="180"class="jade"  style="margin-left:20px; float:left; margin-bottom:20px;">
<tr class="asss">
<td colspan="3">4th Year</td>
</tr>
<?php 
	include('config.php');
$sqlclass="SELECT * FROM tblsection where yr_id='4'";
$rsclass=mysql_query($sqlclass);
while($type=mysql_fetch_array($rsclass)){ ?>
<tr class="trint">
<td width="110"><?php echo $type['section'];?></td>
<td align="center">
<a href=""  class="jades" id=<?php echo $type['sec_id']; ?>><img src="icons/b_drop.png" height="15" ></a></td>
<td align="center">
<a href="?addBorrower&year/section&edit3&sec_id=<?php echo $type['sec_id']; ?>"><img src="icons/b_edit.png" height="15" ></a>
</td>
<input type="hidden" id="add" name="yr_id" value="<?php  echo $type['yr_id']; ?>" style=" padding:1px;width:165px;">

</tr>

<?php }?>
<tr>
<td height="30" colspan="3" >
<input type="text" value="<?php echo $row3['section']; ?>" id="water3" name="ad" style=" padding:1px;width:165px;">
</td>
</tr>
<td height="20" bgcolor="#3B5998" colspan="3" >
<?php if(isset($_GET['edit3'])){?>
<input type="submit" id="add" name="edit" value="Edit" style=" padding:1px;width:50px;">
<a href="?addBorrower&year/section" style="text-decoration:none; font-size:12pxl; color:#FFF;">Cancel</a>
<?php
}else{?>
<input type="submit" id="add" name="addsec" value="Add" style=" padding:1px;width:50px;">

<?php }?>


</td>
</tr>
</table>
</form>