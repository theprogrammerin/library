

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
<script>
$(document).ready(function(){
  $("#closeerror2").click(function(){
    $("#error2").fadeOut("slow");
  });
});

</script>

<div id="ok" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-100px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Your Book has been Reserved
</div>

<div class="btnbox" id="close">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>


</div>
</div><!--succes box-->

<div id="error2" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-100px;">
<div class="headbox">
<img src="icons/error.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Error</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">You Can Reserved Only 1 types of Books
</div>

<div class="btnbox" id="closeerror2">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div><!--error2 box-->

<style>
.s{ text-decoration:none;color:blue;}
.s:hover{ color:black;}
</style>

<table width="" border="1" width="300"  style="border:0px solid black;margin-top:30px; margin-left:40px;">
 <tr >
    <td colspan="2" height="40"  style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
Borrow Books</td>
    
  </tr>
<tr  style="font-size:12px; text-decoration:none; font-family:Verdana, Geneva, sans-serif;">
<td><a class='s' href="?accNo=<?php echo $_GET['accNo']; ?>&create&borrow">Borrow</a></td>
<td><a class='s' href="?accNo=<?php echo $_GET['accNo']; ?>&create&borrow&mybooks">My Books</td>
<td><a class='s' href="?accNo=<?php echo $_GET['accNo']; ?>&create&borrow&myinfo">Info</a></td>
<td><a class='s' href="out.php">Logout</a></td>
</tr>


</table>

<?php if(isset($_GET['mybooks'])){
include('mybooks.php');
}
elseif(isset($_GET['myinfo'])){
include('myinfo.php');
}
else{ ?>

<?php
$get="select * from tblborrower where studentid='".$_SESSION['studentid']."'";
$id=mysql_query($get);
 $get=mysql_fetch_array($id);
?>



<form action="" method="post" name="clockForm">
<table width="" border="0"  style="border:1px solid black; margin-bottom:30px;margin-top:30px; margin-left:40px;">

<tr style="font-size:15px; font-family:Verdana, Geneva, sans-serif;">
<td>Time Reserve</td>
<td></td>
<td>Time Claim</td>
</tr> 

<tr>

<td>
<input type="text" readonly="readonly" style="width:155px; font-size:25px; padding:6px" name="clockButton" value="Loading..."  />

    </td>
     <td >
     <?php
	 
	// for($=date('H:i'))
	 
	  ?>
     
     
    <!--<input  align="center" value="<?php ?>" type="text" style="width:155px; font-size:32px; padding:6px" name="get" size="8">-->
</td>
<td>
<select style='width:190px; font-size:25px; padding:6px;' name='get' onchange='return timeSchedvalue(this.value)'>
<?php
 for ($i = 0; $i <= 960; $i+=30) {
    $time1 = date('h:i a', mktime(date('H:i:s'), $i, 0, 0, 0, 0));
    $time2 = date('h:i a', mktime(date('H:i:s'), $i+60, 0, 0, 0, 0));
	 $time3 = date('H:i:s', mktime(date('H:i:s'), $i+60, 0, 0, 0, 0));
	
echo "<option value='" .$time3 . "'>".$time2 . "</option>";

}
?>
</select>
    </td>
</tr>

<tr>
 <td colspan="3" align="center">
<input style="padding:5px; font-size:20px; width:100px;" type="submit" value="Reserve" name="res" class="ts" />
</td>
</tr>
</table>
</form>

<?php 
}?>


<?php


if(isset($_POST['res'])){

$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);



require_once('config.php');
$day=date('y/m/d');

$date=date_format(date_create($_POST['get']), 'H:i:s');
$a=$day.'-'.$date;

$chek="select * from tblbookreserve where accNo='".$_GET['accNo']."' and studentid='".$_SESSION['studentid']."' and status='1'";
$ids=mysql_query($chek);
 $gets=mysql_num_rows($ids);
if($gets==1){ ?>
<script>
$(document).ready(function(){
    $("#error2").fadeIn(1000);
});
</script>
<?php }else{
$sql="insert into tblbookreserve (accNo,studentid,timeres,timeget,status) values(
	'".$_GET['accNo']."',
	'".$_SESSION['studentid']."',
	'".date('y/m/d h:i:s')."',
	'".$a."',
	'1'
	)";
			
	$rs_update=mysql_query($sql)or die(mysql_error());
	if($rs_update){
		
		$minus=$res['bookcopies']-1;
	
$update="update books set bookcopies='$minus' where accNo='$_GET[accNo]'";
		$objExec = mysql_query($update); ?>
			<script>
$(document).ready(function(){
    $("#ok").fadeIn(1000);
});
</script>
	<?php }
}
}
	?>