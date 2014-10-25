<script>
  $(document).ready(function(){
  $("#close").click(function(){
    $("#update").fadeOut("slow");
	window.location='?searchBorrower';
  });
  
});
/*ajax combo*/
var XMLHttpRequestObject=false;
function getsection(yr_id)
{
if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
} 
XMLHttpRequestObject.onreadystatechange=function()
{
if (XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
document.getElementById("div").innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send();
}
/*ajax combo*/
</script>



<script>
$(document).ready(function(){
  $("#closes").click(function(){
    $("#success").fadeOut("slow");
  });
});

</script>

<div id="update" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; font-family:Arial, Helvetica, sans-serif; text-align:center">Record Updated
</div>

<div class="btnbox" id="close" style="cursor:pointer;">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div>


<div id="success" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Successfully Added
</div>
<a href="?addBorrower" style="text-decoration:none;">
<div class="btnbox" id="closes">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</a>
</div>
</div><!--succes box-->


<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('Y');
$checkout = date('Y', strtotime("+1 year", strtotime($checkin)));
?>
<style>
input{
	padding:3px;}
	
	.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
.success{
	color:#060;
	margin-top:15px;
	margin-left:20px;
	float:left;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
	.asd{ width:900px;height:40px;}
	.back{ background:#EEE; height:27px; width:100px;}
</style>
<?php 
include('config.php');
if(isset($_GET['card_no'])){
	$studentid=$_GET['card_no'];
	
	
	$query1 = "select * from borrower where card_no=$_GET[card_no]";
$get=mysql_query($query1);
$getedit=mysql_fetch_array($get);
}
?>

<div class="asd">
 <ul id="MenuBar1" class="MenuBarHorizontal" >
<table border="0" align="right" style="margin-right:10px;"><tr>
<td width="100" align="center">
</td>
<td>
<!--
  <li><a class="MenuBarItemSubmenu" href="">
  <img src="icons/b_tblops.png" height="13" />
  Settings</a>
    <ul>
     <!-- <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>-->
        
  <!--
      <li ><a href="?addBorrower&addtype"><img src="icons/b_props.png" height="14" /> &nbsp;Add Type</a></li>
      <li><a href="?addBorrower&year/section"><img src="icons/s_db.png" height="14" />&nbsp;Year/section</a></li>
    </ul>
  </li>
-->
</td></tr></table>
</ul>
</div>

<?php if(isset($_GET['addtype'])){ ?>
</script>
<style>

.sds:nth-child(2n+1){
	
	background-color:#CCC;}
	.sds:hover{ background:#C1C1FF;}
</style>
<?php }
else{
?>
<form action="" id="login" name="login"  method="post" enctype="multipart/form-data">

<table width="900" border="0" cellspacing="3" style=" font-size:13px; margin-left:20px; text-align:right; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
  <tr>
    <td width="86" height="50">Card No. </td>
    <td width="6">:</td>
    <td width="202" align="left">
    <input type="text" disabled="disabled"  value="<?php echo $getedit['card_no']; ?>" name="card_no"></td>
    <td colspan="" align="right">

     </td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td>
        
     </td>
  </tr>
  <tr>
    <td>First Name</td>
    <td>:</td>
    <td align="left"><input type="text" name="fname" value="<?php echo $getedit['fname']; ?>"></td>
    <td width="108" >Last Name</td>
    <td width="6">:</td>
    <td width="144" align="left"><input  type="text" name="lname" value="<?php echo $getedit['lname']; ?>"></td>
    <td width="114"> </td>
    <td width="5"></td>
    <td width="181" align="left"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td>:</td>
    <td align="left">
    <input  type="text" name="address" value="<?php echo $getedit['address']; ?>">
    </td>
    <td>City</td>
    <td>:</td>
    <td align="left"><input type="text" name="city" value="<?php echo $getedit['city']; ?>"></td>
    <td>State</td>
    <td>:</td>
    <td align="left">
    <input  type="text" name="state" value="<?php echo $getedit['state']; ?>">
    </td>
  
  </tr>
  <tr>
    <td>Phone</td>
    <td>:</td>
    <td align="left">
    <input  type="text" name="phone" value="<?php echo $getedit['phone']; ?>">
    </td>
    <td colspan="1"></td>
    <td></td>
    <td align="left" colspan="2">
   
   
  	</td>

    
  </tr>
  <tr>
   
  </tr>
</table>



<table width="" align="left" border="0" style=" margin-top:20px; border:1px #999 inset; margin-bottom:10px; margin-left:50px;">
  <tr>
  <td  align="right"><input id="submit"<?php if(isset($getedit['card_no'])){ ?> disabled="disabled" <?php }else{} ?> type="submit" name="addborrower" value="Add" style="padding:8px; width:110px;"></td>
  <td  align="right"><input <?php if(isset($getedit['card_no'])){ }else{?> disabled="disabled" <?php } ?> type="submit"  name="update" value="Update" style="padding:8px; width:110px;"></td>
    <td  align="right"><input type="submit" value="Clear" name="clear" style="padding:8px; width:110px;"></td> 
  </tr>
</table>

</form>
<?php
	if(isset($_POST['update'])){
	//$card_no=$_POST['card_no'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$phone=$_POST['phone'];
	
	include('config.php');
	
$update="
update borrower set
fname ='$_POST[fname]',
lname='$_POST[lname]',
address='$_POST[address]',
city='$_POST[city]',
state='$_POST[state]',
phone='$_POST[phone]'
where card_no=$_GET[card_no]";

$updaters=mysql_query($update) or die (mysql_error());
if($updaters){ ?>
	
	<script>
$(document).ready(function(){
    $("#update").fadeIn(1000);
});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
<?php	}}
	 ?>
	 
         <?php
 include('config.php');

	if(isset($_POST['addborrower'])){
			
		
$addborrow="Insert into `borrower`(fname,lname,address,city,state,phone)
 values('$_POST[fname]','$_POST[lname]','$_POST[address]', '$_POST[city]', '$_POST[state]','$_POST[phone]'     )";
  
//
$rs=mysql_query($addborrow) or die (mysql_error());
//$set=mysql_query($insert) or die (mysql_error());
	if($rs){ ?>
		<script>
$(document).ready(function(){
    $("#success").fadeIn(1000);
});
</script>
<?php	}
	}
	
}
?>
	