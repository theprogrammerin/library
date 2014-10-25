<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
?>

<script language="JavaScript">
<!--
function clock(){
var time = new Date()
var hr = time.getHours()
var min = time.getMinutes()
var sec = time.getSeconds()
var ampm = " PM "
if (hr < 12){
ampm = " AM "
}
if (hr > 12){
hr -= 12
}
if (hr < 10){
hr = " " + hr
}
if (min < 10){
min = "0" + min
}
if (sec < 10){
sec = "0" + sec
}
document.clockForm.clockButton.value = hr + ":" + min + ":" + sec + ampm
setTimeout("clock()", 1000)
}
function showDate(){
var date = new Date()
var year = date.getYear()
if(year < 1000){
year += 1900
}
var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
alert( monthArray[date.getMonth()] + " " + date.getDate() + ", " + year)
}
window.onload=clock;
//-->
</script>


        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script>
$(document).ready(function(){
  $("#close").click(function(){
    $("#ok").fadeOut("slow");
  });
});
</script>
<style>
.form{ width:700px; margin:auto;}
.ts{ padding:2px; width:200px;}
</style>
<div id="ok" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:19px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Your Borrow has been Reserved
</div>
<a href="out.php">
<div class="btnbox" id="close">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</a>

</div>
</div><!--succes box-->
<div class="form">


<table border="0">
<tr>
<td><img src="icons/1.png" height="50" /></td><td style="font-size:30px; font-family:Verdana, Geneva, sans-serif;">Reservation Form</td>
</tr>
</table>
 
<?php
include('config.php');
$get="select * from books where accNo='".$_GET['accNo']."'";
$result=mysql_query($get) or die(mysql_error());
 $res=mysql_fetch_array($result);
 
 
 ?>

<table width="" border="0" style="margin-top:30px;font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
  <tr>
    <td>Acc. No.</td>
    <td><input type="text" readonly="readonly" value="<?php echo $_GET['accNo']; ?>" class="ts" /></td>
  </tr>
   <tr>
    <td>Book Title</td>
    <td><input type="text" readonly="readonly" value="<?php echo $res['booktitle']; ?>" class="ts" /></td>
  </tr>
    <tr>
    <td>Book Author</td>
    <td><input type="text" readonly="readonly" value="<?php echo $res['author1']; ?>" class="ts" /></td>
  </tr>
</table>
<?php if (!isset($_SESSION['studentid'])){ ?>


<form action="" method="post">
<table width="" border="0"  style="margin-top:30px;">
 <tr >
    <td colspan="2" height="40" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">Personal Information</td>
    
  </tr>
  <tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
    <td>First Name</td>
    <td><input type="text" value="" name="fname" class="ts" /></td>
  </tr>
    <tr style="font-size:13px;font-family:Verdana, Geneva, sans-serif; ">
    <td>Last Name</td>
    <td><input type="text" value="" name="lname" class="ts" /></td>
  </tr>
  <tr>
  <td colspan="2" align="right"><input type="submit" name="next" value="Next Step" /></td>
  </tr>
</table>
</form>
<?php }
else{
?>
<?php
$get="select * from tblborrower where studentid='".$_SESSION['studentid']."'";
$id=mysql_query($get) or die(mysql_error());
 $get=mysql_fetch_array($id);
 
 $get1="select * from tbltype where id='".$get['type']."'";
$jade=mysql_query($get1) or die(mysql_error());
 $a=mysql_fetch_array($jade);
 ?>

<form action="" method="post" name="clockForm">
<table width="700" border="0"  style="margin-top:30px;">
 <tr >
    <td colspan="2" height="40" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">Personal Information</td>
    
  </tr>
  <tr>
  <td height="150" colspan="2"> 
  
  <img style="" src="borrowersphoto/<?php if($get['photo']==true){
	  echo $get['photo'];}else{
		  echo "default.jpg";
		  } ?>
  " height="100" width="100"></td>
  </tr>
  <tr>
    <td>Full Name</td>
    <td>
    <input type="hidden" readonly="readonly" value="<?php  echo $_GET['accNo']; ?>" name="accNo" class="ts" />
    <input type="hidden" readonly="readonly" value="<?php  echo $_SESSION['studentid']; ?>" name="studentid" class="ts" />
    <input type="text" readonly="readonly" value="<?php  echo $get['fname']."&nbsp;".$get['mi'].".&nbsp;".$get['lname']; ?>" name="lname" class="ts" /></td>
    <td>Time Reserve</td>
     <td>Time Reserve</td>
   
  </tr>
   <tr>
    <td>Gender</td>
    <td><input type="text" readonly="readonly" value="<?php  echo $get['gender']; ?>" name="lname" class="ts" /></td>
     <td rowspan="2">
<input type="button" style="width:155px; font-size:25px; padding:6px" name="clockButton" value="Loading..." onClick="showDate()" />

    </td>
     <td rowspan="2">
     <?php
	 
	// for($=date('H:i'))
	 
	  ?>
     
     
    <!--<input  align="center" value="<?php ?>" type="text" style="width:155px; font-size:32px; padding:6px" name="get" size="8">-->

<select style='width:190px; font-size:15px; padding:12px;' name='get' onchange='return timeSchedvalue(this.value)'>
<?php
 for ($i = 0; $i <= 960; $i+=30) {
    $time1 = date('h:i a', mktime(date('H:i:s'), $i, 0, 0, 0, 0));
    $time2 = date('h:i a', mktime(date('H:i:s'), $i+30, 0, 0, 0, 0));
	 $time3 = date('h:i:s', mktime(date('H:i:s'), $i+30, 0, 0, 0, 0));
	
    echo "<option value='" .$time3 . "'>".$time2 . "</option>";
}
?>
</select>
<?php ?>
    </td>
  </tr>
   <tr>
    <td>Type</td>
    <td><input type="text" readonly="readonly" value="<?php  echo $get['type']; ?>" name="lname" class="ts" /></td>
  </tr>
   

</table>



<table border="0" align="center" style="margin-top:30px;">
<tr>
    <td colspan="2" align="right" height="50"><input style="padding:11px; font-size:30px; width:200px;" type="submit" value="Reserve" name="res" class="ts" /></td>
  </tr>
</table>
</form>

<?php }?>
<?php 

 if($_POST['next']){
require_once('config.php');
	
$login1="SELECT * FROM tblborrower WHERE (fname = '" .$_POST['fname']. "') and (lname = '" .$_POST['lname']. "')";
$r=mysql_query($login1);
$row=mysql_fetch_array($r);
if($row){
	$_SESSION['studentid']=$row['studentid'];


	echo "<script>window.location='?accNo=$_GET[accNo]&choosepassword'</script>";

	// echo "<script>window.location='?accNo=$_GET[accNo]&studentid=$row[studentid]'</script>";


	}
else{ 

echo $_POST['fname']."&nbsp;".$_POST['lname']."&nbsp;Not found in the database";



}
}
 
?>

<?php 

if(isset($_SESSION['studentid'])){

echo "choose";
}
?>
<a href="out.php">out</a>
</div>

