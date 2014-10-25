<style>
.form{ width:700px; margin:auto;}
.ts{ padding:2px; width:200px;}
</style>
<?php
include('config.php');
$get="select * from book where book_id='".$_GET['book_id']."'";
$result=mysql_query($get) or die(mysql_error());
 $res=mysql_fetch_array($result);
 
 
 ?>



<table border="0" style=" margin-left:40px;">
<tr>
<td><img src="icons/1.png" height="50" /></td><td style="font-size:30px; font-family:Verdana, Geneva, sans-serif;">Reservation</td>
</tr>
</table>

<table width="" border="0" style=" margin-left:40px; margin-top:30px;font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
  <tr>
    <td>Acc. No.</td>
    <td><input type="text" readonly="readonly" style="padding:5px; border:1px black solid;" value="<?php echo $_GET['book_id']; ?>" class="ts" /></td>
  </tr>
   <tr>
    <td>Book Title</td>
    <td><input type="text" readonly="readonly" style="padding:5px; border:1px black solid;" value="<?php echo $res['booktitle']; ?>" class="ts" /></td>
  </tr>
    <tr>
    <td>Book Author</td>
    <td><input type="text" readonly="readonly" style="padding:5px; border:1px black solid;" value="<?php echo $res['author1']; ?>" class="ts" /></td>
  </tr>
<tr>
<td colspan="2" align="right"><a href="?findBooks" style="text-decoration:none;">
<input type="button" value="Browse Books">
</a>
</td>
</tr>
</table>


<?php
if(isset($_SESSION['studentid'])){

include('myborrow.php');

}else{
 ?>

<?php

if(isset($_GET['pass'])){ ?>


<!---choose password---------------------------------------------------------------------------------->
<form action="" method="post">
<?php
$get="select * from tblborrower where studentid='".$_GET['studentid']."'";
$id=mysql_query($get);
 $get=mysql_fetch_array($id);
?>
<table width="" border="0"  style=" margin-bottom:30px;border:1px solid black;margin-top:30px; margin-left:40px;">
 <tr >
    <td colspan="2" height="40" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">Choose Password</td>
    
  </tr>
<tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif;">
<td>Last Name:<span style='color:Green; font-size:11px;font-family:Verdana, Geneva, sans-serif;'><?php echo $get['lname']; ?></span></td>
<td>First Name:<span style='color:Green; font-size:11px;font-family:Verdana, Geneva, sans-serif;'><?php echo $get['fname']; ?></span></td>


</tr>

<tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif;">
<td>Login UserName:<span style='color:Green; font-size:11px;font-family:Verdana, Geneva, sans-serif;'>
<?php echo $get['lname']; ?>
</span>
<input type="hidden" value="<?php echo $get['lname']; ?>" name="username">
</td>

</tr>



  <tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
    <td>Password</td> <td>Confirm Password</td>
</tr><tr>
   

 <td><input type="Password" value="" style="padding:5px; border:1px black solid;" name="pass" class="ts" /></td> 
<td><input style="padding:5px; border:1px black solid;" type="Password" value="" name="cpass" class="ts" /></td>

<tr>
<td colspan="2" align="right">

<!---processsss pass---------------------------------------------------------------------------------->

<?php 
if(isset($_POST['pro'])){
$studentid=$_GET['studentid'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

if($pass!=$cpass){

echo "<span style='color:red; font-size:11px;font-family:Verdana, Geneva, sans-serif;'>*** Password Not Match</span>";
}
else{

$chek="select * from userlogin where studentid='".$_GET['studentid']."'";
$ids=mysql_query($chek);
 $gets=mysql_num_rows($ids);
if($gets==1){
echo "<span style='color:red; font-size:11px;font-family:Verdana, Geneva, sans-serif;'>Already Set</span>";
}else{

$pass="insert into userlogin (studentid,username,password) values('".$studentid."','".$_POST['username']."','".$pass."')";

mysql_query($pass);


	$_SESSION['studentid']=$_GET['studentid'];

echo "<script>window.location='?book_id=$_GET[book_id]&create&borrow&mybooks'</script>";


}
}
}
?>

<!---------------------------------------------------------------------------end processsss pass---------->
<input type="submit" name="pro" value="Submit" />
</td>
  </tr>
</table>


</form>

<!----------------------------------------------------------------------------end choose password--------->



<?php }else{
 ?>

<!-------------------------------------------------login---------------------------------------------------------->

<form action="" method="post">

<table width="" border="0"  style="margin-bottom:30px; float:left;border:1px solid black;margin-top:30px; margin-left:40px;">
 <tr >
    <td colspan="2" height="40" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">Login</td>
    
  </tr>


  <tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
<td>Username</td> 

</tr>

<tr>
<td><input type="text" value="" style="padding:5px; border:1px black solid;" name="user" class="ts" /></td> 
</tr>

  <tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
<td>Password</td>
</tr>
<tr>

<td><input style="padding:5px; border:1px black solid;" type="password" value="" name="pass" class="ts" /></td>

<tr>
<td colspan="2" align="right">
<!---processsss---------------------------------------------------------------------------------->
<?php 

 if($_POST['login']){
require_once('config.php');
	
$log="SELECT * FROM userlogin WHERE (username = '" .$_POST['user']. "') and (password = '" .$_POST['pass']. "')";
$rss=mysql_query($log)or die(mysql_error());
$logs=mysql_fetch_array($rss);
if($logs){

	$_SESSION['studentid']=$logs['studentid'];

	echo "<script>window.location='?book_id=$_GET[book_id]&create&borrow&mybooks'</script>";

	// echo "<script>window.location='?book_id=$_GET[book_id]&studentid=$row[studentid]'</script>";


	}
else{ 

echo "<span style='color:red; font-size:11px;font-family:Verdana, Geneva, sans-serif;'>
Invalid Account
</span>";



}
}
 
?>


<!---end processsss---------------------------------------------------------------------------------->
<input type="submit" name="login" value="Login" />
</td>
  </tr>
</table>
</form>
<!-------------------------------------------------end login----------------------------------------------->

<form action="" method="post">

<table width="" border="0"  style="float:left; border:1px solid black;margin-top:30px; margin-left:40px;">
 <tr >
    <td colspan="2" height="40" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">Register</td>
    
  </tr>


  <tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
    <td>First Name
</td> <td>Last Name</td>
</tr><tr>
    <td><input type="text" value="" style="padding:5px; border:1px black solid;" name="fname" class="ts" /></td> <td><input style="padding:5px; border:1px black solid;" type="text" value="" name="lname" class="ts" /></td>

<tr>
<td colspan="2" align="right">
<!---processsss---------------------------------------------------------------------------------->
<?php 

 if($_POST['next']){
require_once('config.php');
	
$login1="SELECT * FROM tblborrower WHERE (fname = '" .$_POST['fname']. "') and (lname = '" .$_POST['lname']. "')";
$r=mysql_query($login1);
$row=mysql_fetch_array($r);
if($row){
	//$_SESSION['studentid']=$row['studentid'];



	echo "<script>window.location='?book_id=$_GET[book_id]&create&pass&studentid=$row[studentid]'</script>";

	// echo "<script>window.location='?book_id=$_GET[book_id]&studentid=$row[studentid]'</script>";


	}
else{ 

echo "<span style='color:red; font-size:11px;font-family:Verdana, Geneva, sans-serif;'>".$_POST['fname']."&nbsp;".$_POST['lname']."&nbsp;Not found in the database</span>";



}
}
 
?>


<!---end processsss---------------------------------------------------------------------------------->
<input type="submit" name="next" value="Proceed" />
</td>
  </tr>
</table>
</form>
<?php }}?>

