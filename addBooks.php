<?php
include('time.php');
?>
<style>
.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;
	margin-left:20px;}
.success{
	color:#060;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
.error{
	color:#F00;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
</style>

<div id="success" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Successfully Added
</div>
<div class="btnbox" id="closes">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</div>
</div>

<div id="update" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; text-align:center; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Book has been Updated!
</div>
<a style="text-decoration:none;" href="?searchBooks">
<div class="btnbox" id="close">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</a>

</div>
</div>

<script>
$(document).ready(function(){
  $("#closes").click(function(){
    $("#success").fadeOut("slow");
  });
});

</script>
<script>

 $(document).ready(function(){
  $("#update").click(function(){
    $("#close").fadeOut("slow");
  });
});
</script>
<?php
include('config.php');
if(isset($_GET['book_id'])){
	$book_id=$_GET['book_id'];
	$query1 = "select * from book where book_id=$book_id";
$get=mysql_query($query1);
$edit=mysql_fetch_array($get);



	}
 ?>



<form action="" name="frm" method="post">
<table width="940" border="0" cellspacing="3" style="font-size:13px; font-weight:bold; margin-left:10px; text-align:right; margin-top:10px;font-family:Verdana, Geneva, sans-serif;">
<tr height="40">
<td>Book ID</td>
<td>:</td>
<td align="left"><input style="width:250px;padding:4px;" type="text" name="book_id" value="<?php echo $edit['book_id']; ?>"></td>
</tr>

<tr>
<td>Book Title</td>
<td>:</td>
<td colspan="0" align="left"><input type="text" name="booktitle" style="width:250px; padding:4px;" value="<?php echo $edit['title']; ?>"></td>
</tr>
<tr>
<td >No. of authors </td><td>:</td>
<td align="left"><input type="text" style="width:250px;padding:4px;" name="authortype" value="<?php echo $edit['type']; ?>"></td>

<?php

?>


<td >Book Author(s)</td><td>:</td>
<td align="left"><input type="text" style="width:250px;padding:4px;" name="author" value="<?php echo $edit['author_name']; ?>"></td>
</tr>
<tr>
<td>Book Branch</td>
<td>:</td>
<td align="left"><select name="bookbranch" style="width:262px;padding:4px;"> 

<?php
include('config.php');
$sql="SELECT * FROM library_branch";
$rs=mysql_query($sql);
$class=0;

while($row=mysql_fetch_array($rs)){
	$class++;
 ?>
<option style="font-size:15px;"
<?php if($edit['bookbranch']==$row['branch_name']){ ?>
selected="selected"
<?php }else{} ?>
 value="<?php echo $row['branch_name'];?>">
<?php echo $row['branch_name']; ?>
</option>
<?php }?>
</select>

</td>
<?php

$branch_id="1";

switch ($branch_name) {
  case "Oak Lawn":
    $branch_id="1";
    break;
  case "Lakewood":
 	$branch_id="2";
    break;
  case "Grauwyler Park":
    $branch_id="3";
    break;
  case "Highland Hills":
    $branch_id="4";
    break;
  case "Audelia Road":
    $branch_id="5";
    break;

}
?>
<td ></td><td></td>
<td align="left">[if multiple, seperate with ","(comma)]</td>

</tr>

</tr>
<td>Book Copies</td>
<td>:</td>
<td align="left" colspan="1"><input type="text" style="width:250px;padding:4px;" name="copies" value="<?php echo $edit['no_of_copies']; ?>"></td>

</tr>
</table>


<div style=" width:300px; float:left; margin-left:50px; ">
<table width="" border="0" style=" border:1px #999 inset; margin-bottom:20px; margin-top:10px;">
 
  <tr>
  
  <td  align="right"><input type="submit" name="add" 
  <?php if($edit){echo "disabled='disabled'" ;} else{echo "";} ?>
   value="Add" style="padding:8px; width:110px;"></td>
  
  <td  align="right"><input type="submit"
  <?php if($edit){echo "" ;} else{echo "disabled='disabled'";} 
  if(isset($_GET['view'])){ echo "disabled='disabled'";}else{} ?>
  name="update" value="Update" style="padding:8px; width:110px;"></td>
    
  
 <td>
<?php if(isset($_GET['view'])){ ?>
<td  align="right"><a style="text-decoration:none;" href="?searchBooks">
<input type="button" name="input"
   value="Back to search" style="padding:8px; width:110px;" />
</a></td>
    
  <?php } ?>
<?php 


if(isset($_POST['add'])){
	$book_id=$_POST['book_id'];
$booktitle=$_POST['title'];
$author=$_POST['author_name'];
$bookbranch=$_POST['branch_name'];
$authortype=$_POST['type'];
$copies=$_POST['no_of_copies'];




$auth_type ="2";

if ($authortype=="1"){
	$auth_type="1";
}



include('config.php');

if(empty($book_id))
	{
		echo "<div class='error'>Book&nbsp;ID&nbsp;is&nbsp;required!</div>";
	}
elseif(!is_numeric($book_id))
	{
	echo "<div class='error'>Book&nbsp;ID&nbsp;should&nbsp;be&nbsp;numeric!</div>";
	}
else{
	$chek=mysql_query("select * from book where book_id='".$book_id."'");
	$c=mysql_num_rows($chek);
	if($c==1){
	echo "<div class='error'>Book&nbsp;ID&nbsp;already&nbsp;exist</div>";
		}else{
		
$insert1="Insert into book(book_id,title)
 values('$_POST[book_id]','$_POST[booktitle]')";
 
$insert2="Insert into book_copies(book_id, branch_id, no_of_copies)
 values('$_POST[book_id]',".$branch_id.",'$_POST[copies]')";

$insert3="Insert into book_authors(book_id, author_name, type)
 values('$_POST[book_id]','$_POST[author]','".$auth_type."')";
 


$rs1=mysql_query($insert1) or die(mysql_error());
$rs2=mysql_query($insert2) or die(mysql_error());
$rs3=mysql_query($insert3) or die(mysql_error());
	
	if($rs1 && $rs2 && $rs3){ ?>
		
				<script>
$(document).ready(function(){
    $("#success").fadeIn(1000);
});
</script>
		
	<?php }	}
	}
}
if(isset($_POST['update'])){
	$book_id=$_POST['book_id'];
$booktitle=$_POST['title'];
$author=$_POST['author_name'];
$bookbranch=$_POST['branch_name'];
$copies=$_POST['no_of_copies'];

include('config.php');
		
$update1="update book set title='$_POST[booktitle]',book_id='$_POST[book_id]'
		 where book_id='$_POST[book_id]'";
$update2="update book_copies set book_id='$_POST[book_id]',branch_id='".$branch_id."',no_of_copies='$_POST[copies]' where book_id='$_POST[book_id]'";
$update3="update book_authors set book_id='$_POST[book_id]', book_author='$_POST[author]',type='$_POST[book_id]' where book_id='$_POST[book_id]'";


 $rs_update1=mysql_query($update1);
 $rs_update2=mysql_query($update2);
 $rs_update3=mysql_query($update3);
 
  ?>
    <script>
$(document).ready(function(){
    $("#update").fadeIn(1000);
});
</script>
	<?php	
		
		}
?>
	
 </td>
  </tr>
</table>
</div>
<div style="width:300px; float:left; margin-left:20px; margin-top:10px;">
<table border="0">
<tr>
<td> </td>
</tr>
</table>
</div>

</form>


<br/>