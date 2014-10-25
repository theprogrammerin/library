<?php
require_once('calendar/classes/tc_calendar.php');
?>
<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>
<script>
  $("#id").click(function(){
    $("#success").fadeIn(2000);
});

$("#default").click(function(){
    $("#def").fadeIn(2000);
});

 $(document).ready(function(){
  $("#closeempty").click(function(){
    $("#divempty").fadeOut("slow");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#close").click(function(){
    $("#success").fadeOut("slow");
  });
});

  $("#id").click(function(){
    $("#error").fadeIn(2000);
});
</script>
<script>
$(document).ready(function(){
  $("#closeerror").click(function(){
    $("#error").fadeOut("slow");
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
<!--success-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript">

$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox==='')
{
   $.ajax({
type: "POST",
url: 'searchstudent.php',
data: dataString,
cache: false,
success: function(h)

{

$("#display").html(h).hide();
	}});

  
}
else
{
$.ajax({
type: "POST",
url: 'searchstudent.php',
data: dataString,
cache: false,
success: function(html)

{

$("#display").html(html).show();
	}});


}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search StudentID, Name");
   });
   
  
   
   </script>
    <script language="javascript" type="text/javascript">
function timing()
{
var a=new Date();
h=a.getHours();
m=a.getMinutes();
s=a.getSeconds();

if(s<=9) s="0"+s;
if(m<=9) m="0"+m;
if(h<=9) h="0"+h;


time=a;

document.frm.mytime.value=time;



setTimeout("timing()",1000);



}
</script><!--time-->



<div id="success" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Your Borrow has been Registered
</div>

<div class="btnbox" id="close">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div><!--succes box-->
<div id="error" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/error.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Error</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">Tulo sa ang limit karun
</div>

<div class="btnbox" id="closeerror">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div><!--error1 box-->
<div id="error2" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/error.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Error</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">You Can Borrow Only 1 types of Books
</div>

<div class="btnbox" id="closeerror2">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div><!--error2 box-->
<div id="divempty" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/error.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Error</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">Select Book
</div>

<div class="btnbox" id="closeempty" style="cursor:pointer;">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div><!--empty box-->
<style>

.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
		.searchdiv{
			width:700px;
			float:left;}
.deweydiv{

	height:300px;
	margin-left:30px;
	width:750px;
	float:left;}
	.error{
		color:#C00;
		font-size:15px;
		font-family:Verdana, Geneva, sans-serif;}
.dleft{

	height:300px;
	width:449px;
	float:left;
	}
.dright{
	height:300px;
	width:300px;
	float:left;
	}
	.set{ margin-right:70px; height:20px; width:300px; float:right;}
</style>
<div class="set"></div>

<form action="" name="frm" method="post">

<div class="searchdiv">
<table border="0" style="border:1px inset #999; font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-top:20px; margin-left:50px; float:left;">
<tr><td colspan="2">
<input type="text" style="width:400px; padding:4px;" name="<?php echo time('y-m-d') ?>" class="search" id="searchbox" />
</td></tr>
</table>

</div>

<div class="deweydiv">
<div class="dleft">
<?php if(isset($_GET['card_no'])){
	include('config.php');
	$id=$_GET['card_no'];
	$sql="SELECT * FROM borrower where card_no=$id";
$rs=mysql_query($sql);
$get=mysql_fetch_array($rs);

	} ?>
    
<table width="420" border="0" style="font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; font-weight:bold;border:1px inset #999; margin-top:5px; margin-left:20px; float:left;">
</tr>
<tr><td>Name</td><td>Card No.</td>
</tr>
<tr>
<td>
<input type="text" readonly="readonly" value="<?php echo $get['fname']."&nbsp;".$get['lname']; ?>" name="name" style="width:200px; padding:4px;" onclick="clear()" class="search" id="searchbox" />
</td><td>
<input type="text" readonly="readonly" value="<?php echo $get['card_no']; ?>" name="studentid" style="width:100px; padding:4px;" onclick="clear()" class="search" id="searchbox" />
</td>
</tr>
</table>
<table border="0" wi style="font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; font-weight:bold; border:inset #999 1px;width: 420px;  margin-top:10px; margin-bottom:20px; float:left; margin-left:20px;">
<tr><td colspan="3">Book ID</td></tr>
<tr>
<td colspan="3">
<select 
<?php if(isset($_GET['card_no'])) {?>
<?php }else{ ?> disabled="disabled"<?php }  ?> name="classID" style=" padding:4px;" class="com" onChange="display(this.value)">
<option ></option>
<?php if(isset($_GET['book_id'])){
	$res=mysql_query("select b.book_id, title, author_name from book b JOIN book_authors ba ON b.book_id = ba.book_id where b.book_id=$_GET[book_id]");
	$r=mysql_fetch_array($res);
	
	} ?>
    
<?php

include('config.php');
$sql="SELECT * FROM bookclass";
$rs=mysql_query($sql);
$class=0;

while($row=mysql_fetch_array($rs)){
	$class++;
 ?>
<option 
<?php 
if($r['bookclass']==$row['classid']){
	echo 'selected="selected"';
	}else{}
?>
 value="<?php
  echo $row['classid'];?>">
<?php 

echo $row['classid']."&nbsp;".$row['classname']; 

?>
</option>
<?php
}
?>
</select>

</td>
</tr>
<tr>
<tr><td>Choose Book</td><td align="right">Book Stock</td></tr>
<tr>
<td colspan="3"><div id="div">
<select style="width:280px; padding:5.5px;" name="bookid">
<option value="<?php echo $r['accNo'];?>">
<?php echo $r['booktitle'];?>
</option>
</select>
 <div id="get" style="float:right; margin-left:20px;">
 <input  readonly="readonly" type="text" id="get" value="<?php echo $r['bookcopies']; ?>" style="padding:4px; width:65px;">
 </div>

</div></td>
</tr>
</table>
<br/>
<table border="0" style=" font-weight:bold;font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-left:20px; float:left; margin-top:20px; border:1px inset #999;">
<tr>
<td>

<input type="submit" name="borrow" style="padding:9px; width:200px;" value="Borrow" /></td>
</tr>
</table>

</div>
<div class="dright">
<table border="0" style="font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-left:30px; margin-top:5px; border:1px inset #999;">
<tr><td style=" font-weight:bold;">Date Borrowed</td></tr>
<tr>
<td style="border:1px solid #CCC; font-size:12px; height:30px; width:200px;">

<script language="JavaScript">
<!--

var Today = new Date()
var year = Today.getYear()
var month = Today.getMonth()
var date = Today.getDate()
var day = Today.getDay()

if(year < 1000){
year += 1900
}

var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")	
			   
var dayArray = new Array("Sunday","Monday","Tuesday","Wednesday", "Thursday","Friday","Saturday")

document.write( dayArray[day] + ", " + monthArray[month] + " " + date + ", " + year )

</script>
<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }

pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
.value{ border:1px inset #CCC;}
.value:hover{border:1px inset #666;}
</style>
</td>
</tr>
</table>

<table border="0" style=" font-weight:bold;font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-left:30px; margin-top:10px; border:1px inset #999;">
<tr><td>Date Due</td></tr>
<tr>
<td>

<?php
	  $myCalendar = new tc_calendar("date5", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, 2020);
	  $myCalendar->dateAllow('2008-05-13', '2020-03-01');
	  $myCalendar->setDateFormat('F j, Y');
	  $myCalendar->setAlignment('left', 'bottom');
	  //$myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
	 // $myCalendar->setSpecificDate(array("2011-04-10", "2011-04-14"), 0, 'month');
	  $myCalendar->setSpecificDate(array("2011-06-01"), 0, '');
	  $myCalendar->writeScript();
	  ?>

</td>
</tr>
</table>

<table border="0" style=" font-weight:bold;font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-left:30px; margin-top:5px; border:1px inset #999;">
<tr><td>Default Value&nbsp;&nbsp;
<a href=""></a>
</td>
<td></td>
</tr>
<tr>
<td>

<script>
 jQuery(function($){
   $("#pay").Watermark("<?php echo $rowpay['amount']; ?>");
   });
</script>
<script>
 function OpenPopUp(borrowid, pageURL, title,w,h) {
	     //alert("Pardeep")
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
      var targetWin =  window.open('http://localhost/lib/default.php' + borrowid, 'name', 'location=no,menubar=no,wiscrollbars=no,resizable=no,fullscreen=no,width='+w+', height='+h+', top='+top+', left='+left);
        return false;
    }
	

</script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#ass').load('loadpay.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
<span id="ass"></span>

</td>
<td class="value" align="center" style="width:25px;">
 <div id="id" title="Change default value">
  <a href="" style="margin-right:10px;" id="" 
    onclick="OpenPopUp(id,'','',300,100);" class='trnone'>

<img src="icons/b_edit.png"  />
</a>
</div>
</td>
</tr>
</table>

</div>
</div>
<div id="display">

</div>
</form>

<table align="left" border="0" style="float:left; margin-left:20px; margin-top:20px; ">
<tr>
<td>
<?php
  $bmonth = $_POST['bmonth'];
  $bday = $_POST['bday'];
  $byear = $_POST['byear'];
  $duedate = $byear.'-'.$bmonth.'-'.$bday.'-'.date('H:i:s');
  
  
	$classid=$_POST['classID'];
	$accNo=$_POST['bookid'];
	$studentid=$_POST['studentid'];
	$dateborrow=$_POST['dateborrow'];
	$date=$_POST['ed'];
	$copy=$_POST['copy'];
	$theDate  = isset($_REQUEST["date5"]) ? $_REQUEST["date5"] : "";
    $mydate= $theDate.'-'.date("H:i:s");
	
	$copies=$_POST['copies'];
	if(isset($_POST['borrow']))
{
	include('config.php');
	$strSQL = "SELECT * FROM tblborrow WHERE studentid = '$studentid' and status='Unsigned' ";
$objExec = mysql_query($strSQL);
$count=0;
while($row=mysql_fetch_array($objExec)){
	$count++;
}
if($count==3){ ?>

<script>
$(document).ready(function(){
    $("#error").fadeIn(1000);
});
</script>

<?php	//echo "<div class='error'>tulo ra limit bai</div>";
	}
	elseif(empty($classid)){?>
    <script>
$(document).ready(function(){
    $("#divempty").fadeIn(1000);
});
</script>
     <?php }
	 elseif(empty($accNo)){?>
	 <script>
$(document).ready(function(){
    $("#divempty").fadeIn(1000);
});
</script>
	 <?php }
else{
	$strSQL = "SELECT * FROM tblborrow  WHERE accNo = '$accNo' and studentid = '$studentid' and status='Unsigned' ";
$objExec = mysql_query($strSQL);
$row=mysql_fetch_array($objExec);	
if($row){ ?>
<script>
$(document).ready(function(){
    $("#error2").fadeIn(1000);
});
</script>
	<?php	//echo "<div class='error'>You can borrow only one type of books</div>";
	}
else{
	$sql="insert into tblborrow (accNo,classid,studentid,dateborrow,duedate,datereturn,status,amount,item) values(
	'".$accNo."',
	'".$classid."',
	'".$studentid."',
	'".date('Y-m-d H:i:s')."',
	'".$mydate."',
	'".$date."',
	'Unsigned',
	'".$_POST['pay']."',
	'1'
	
	)";
			
	$rs_update=mysql_query($sql);
	if($rs_update){


$upd="select * from books where accNo='".$_GET['accNo']."'";
		$obj = mysql_query($upd);
$cop=mysql_fetch_array($obj);

if(isset($_GET['accNo'])){
		
		$get=$cop['bookcopies']-1;
}else{

$get=$copy-1;
}
	
$update="update books set bookcopies='$get' where accNo='$accNo'";
		$objExec = mysql_query($update);
if($objExec){
	$up="update tblborrower set status='1' where studentid='$studentid'";
		$obj = mysql_query($up);
		$updateres="update tblbookreserve set status='0' where accNo='$accNo'";
		$objExec = mysql_query($updateres);
		 ?>

		<script>
$(document).ready(function(){
    $("#success").fadeIn(1000);
});
</script>
<?php	
	//echo "Your Borrow has been Registered";
	}
		
		
	}
	}
}
	}
 ?>
</td>
</tr>
</table>
