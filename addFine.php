<?php

require_once('calendar/classes/tc_calendar.php');
?>

<?php
  include_once("config.php");
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $card_no=$_POST['studentid'];
      $loan_id=$_POST['loan_id'];
      $fine_amt=$_POST['fine_amt'];
      $paid = $_POST['paid'];
      if(!empty($_POST['fine_amt']))
    {

      $query = "SELECT * FROM fines WHERE loan_id = $loan_id";
      $rs = mysql_query($query);

      if(mysql_num_rows($rs) > 0) {
        $query = "UPDATE fines SET fine_amt = $fine_amt, paid = $paid WHERE loan_id = $loan_id";
      }
      else {
        $query = "INSERT INTO fines(loan_id, fine_amt, paid) VALUES ($loan_id, $fine_amt, $paid)";
      }
      $rs = mysql_query($query);
      }
    }
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
var dataString = 'searchword='+ searchbox + '&page=addFine';

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
   $("#searchbox").Watermark("Search Card No., Student Name");
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

function updateFine() {

  card_no = $("[name=studentid]").val();
  loan_id = $("#loan_id").val();

  path = "./?addFine&card_no=" + card_no + "&loan_id=" + loan_id;

  window.location = path;



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

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">
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

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">
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
<tr><td colspan="3">Loan ID - Book Title</td></tr>
<tr>
<td colspan="3">
<select id="loan_id" name="loan_id"
<?php if(isset($_GET['card_no'])) {?>
<?php }else{ ?> disabled="disabled"<?php }  ?> style=" padding:4px;" class="com" onChange="updateFine(this)">
<option ></option>
<?php

include('config.php');
$sql="SELECT * FROM book_loans INNER JOIN book ON book_loans.book_id = book.book_id WHERE card_no = {$_GET['card_no']}";
echo $sql;
$rs=mysql_query($sql);
$class=0;


while($row=mysql_fetch_array($rs)){
	$class++;
 ?>
<option value="<?php echo $row['loan_id']; ?>"<?php if(isset($_GET['card_no']) && $_GET['loan_id'] == $row["loan_id"]) {?>
selected <?php } ?> >
  <?php
    echo $row['loan_id']." - ".$row['title'];
  ?>
</option>
<?php
}
?>
</select>
<br/><br/>
</td>
</tr>
<tr><td colspan="3">Fine Amount</td></tr>
<tr>
<td colspan="3">
  <?php
  if(!empty($_GET['loan_id'])) {
    $sql = "SELECT * FROM fines WHERE loan_id = {$_GET['loan_id']}";
    $rs=mysql_query($sql);
    $data = mysql_fetch_array($rs);
    $fine = 0;
    if($data) {
      $fine = $data["fine_amt"];
    }
  ?>
    <input type="text" name="fine_amt" value="<?php echo $fine ?>" />
    <select name="paid">
      <option value="0" <?php if($data["paid"] == 0) {?>
selected <?php } ?> >UnPaid</option>
      <option value="1" <?php if($data["paid"] == 1) {?>
selected <?php } ?>>Paid</option>
    </select>
  <?php } else { ?>
    <input type="text" name="fine_amt" value="" disabled/>
    <select name="paid">
      <option value="0" selected>UnPaid</option>
      <option value="1">Paid</option>
    </select>
  <?php } ?>

  <br/>
  <br/>
</td>
</tr>
</table>
<br/>
<table border="0" style=" font-weight:bold;font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-left:20px; float:left; margin-top:20px; border:1px inset #999;">
<tr>
<td>

<input type="submit" name="borrow" style="padding:9px; width:200px;" value="Update Fine" /></td>
</tr>
</table>

</div>
<span id="ass"></span>

</td>
<td class="value" align="center" style="width:25px;">
 <div id="id" title="Change default value"></div>
</td>
</tr>
</table>

</div>
<div id="display">

</div>
</form>

<table align="left" border="0" style="float:left; margin-left:20px; margin-top:20px; ">
<tr>
<td>

  <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

      echo "UPDATED";


    }
    ?>

</td>
</tr>
</table>
