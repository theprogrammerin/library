<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y');
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
?>
<?php
require_once('calendar/classes/tc_calendar.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Return Books</title>
</head>
<link href="calendar/Calendar2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/ajax.js"></script>

<script language="javascript" src="calendar/calendar.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="jspop/jquery.min.1.js">
</script>

<script>
$(document).ready(function(){
  $("#id").click(function(){
    $("#div1").fadeIn(2000);
  });


});
</script>

<script>
$(document).ready(function(){
  $("#close").click(function(){
    $("#div1").fadeOut("slow");
  });


});

</script>
<script>
$(document).ready(function(){
  $("#close").click(function(){

  });


});
</script>

<script type="text/javascript">
function refreshParent()
{
    window.opener.location.reload(true);
}
</script>
<style>
.print{ }
</style>
<body onunload="refreshParent();">
<?php
include('config.php');
if(isset($_GET['borrowid'])){

	$q=mysql_query("select * from book_loans where loan_id='".$_GET['borrowid']."'");

	$name=mysql_fetch_array($q)or die(mysql_error());

	$qs=mysql_query("select * from borrower where card_no='".$name['card_no']."'");

	$print=mysql_fetch_array($qs)or die(mysql_error());
	$qsa=mysql_query("select * from book where book_id='".$name['book_id']."'");

	$book=mysql_fetch_array($qsa)or die(mysql_error());


	}

 ?>
  <script>
        function printDiv(divID) {

            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
			 window.location='?borrowid=<?php echo  $_GET['borrowid']; ?>&print/save';
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
              "<nav>" +
              divElements + "</nav>";

            //Print Page
            window.print();



            //Restore orignal HTML
            document.body.innerHTML = oldPage;
			if(window.print){
			 window.location='?borrowid=<?php echo  $_GET['borrowid']; ?>&accNo=<?php echo  $_GET['accNo']; ?>&print/save';
			 }
        }
    </script>
 <script>
$(document).ready(function(){
  $("#close").click(function(){
    $("#div2").fadeOut("slow");
  });


});

</script>
<div id="div5" style=" position:absolute; z-index:5; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction1">
<div class="headbox1">
<img src="icons/images.jpg" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style="margin-left:7px; margin-top:13px; color:#030; font-size:12px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Payment</div>
<!--btn-->
<a href="?borrowid=<?php echo $name['borrowid']; ?>" title="PRINT"
onclick="javascript:printDiv('print')">


</a>
<a href="?borrowid=<?php echo $name['borrowid']; ?>&save" title="SAVE">
<?php

  ?>
<div style=" margin-right:7px; height:25px;width:50px;text-align:center;  border:1px solid #CCC; -moz-border-radius:5px; margin-top:9px; color:#030; font-size:12px; font-family:Verdana, Geneva, sans-serif; float:right;">
<form action="" method="post">
<input type="hidden" name="bid" value="<?php echo $_POST['bid']; ?>">
<input type="hidden" name="accNo" value="<?php echo $_POST['accNo']; ?>">
<input type="hidden" name="bor_id" value="<?php echo $_POST['borrowersid']; ?>">
<input type="hidden" name="datedew" value="<?php echo $_POST['datedue']; ?>">
<input type="hidden" name="dateret" value="<?php echo $_POST['datereturn']; ?>">
<input type="hidden" name="totald" value="<?php echo $_POST['totaldays']; ?>">
<input type="hidden" name="tot" value="<?php echo $_POST['total']; ?>">


<input type="hidden" name="date1" value="<?php
echo date_format(date_create($_POST['datereturn']), 'Y/m/d'); ?>">
<input type="submit" value="Save" name="save1" style="width:50px;">
</form>
</div>
</a>
<!--bnt-->

</div>


<div id="print">

<div style="font-size:15px;padding-top:20px; width:380px; height:303px; margin-right:10px; margin-left:10px; font-family:Arial, Helvetica, sans-serif;">
<img src="images/st mary.png" height="200" style=" margin-left:80px; margin-top:50px;position:absolute; opacity:0.1;" />
<span style="font-weight:bold; font-size:12px; color:#3B5998;">St. Mary's Academy of San Nicolas</span><br/>
<span style="font-size:11px; color:#3B5998;">T. Abella St., Cebu City</span><br/>
<span style="font-size:11px; color:#3B5998;">Tel. No. (63) (32) 286-5875</span><br/>
<div style="font-weight:bold; width:100%; font-size:12px; margin-top:10px; border-bottom:1px solid #3B5998;"></div>
<div style=" margin-top:8px; width:230px; float:left;">
<table border="0">
<tr>
<td><span style="font-size:11px; color:#3B5998;">Recieved from:</span></td>
<td style="font-size:11px;"><?php echo $print['lname']."&nbsp;".$print['fname']."&nbsp;".$print['mi'];?></td>
</tr>
<tr>
<td style="font-size:11px; color:#3B5998;">Year/level Section:</td>
<td style="font-size:11px;"><?php

if($print['levelyr']==1){
	echo "1st Year";
	}
	elseif($print['levelyr']==2){
		echo "2nd Year";
		}
	elseif($print['levelyr']==3){
		echo "3rd Year";
		}
	elseif($print['levelyr']==4){
		echo "4th Year";
		}
		echo "&nbsp;".$print['section'];?></td>
</tr>
<tr>
<td style="font-size:11px; color:#3B5998;">The sum of PESOS:</td>
<td style="font-size:11px;"><?php echo "Php"."&nbsp;".$_POST['total']; ?></td>
</tr>
</table>
</div>

<div style=" height:60px;   margin-top:8px;  width:150px; float:left;">
<table border="0">
<tr>
<td><span style="font-size:11px; color:#3B5998;">Date:</span></td>
<td style="font-size:11px;"><?php echo date('m/d/Y') ?></td>
</tr>
<tr>
<td style="font-size:11px;color:#3B5998;">Borrowers ID:</td>
<td style="font-size:11px;"><?php echo $print['studentid']; ?></td>
</tr>
</table>
</div>
<div style=" width:380px; float:left; margin-top:10px;">
<table border="0" cellspacing="1" width="380">
<tr>
<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>
<td style="color:#3B5998; border-right:1px #666 solid;font-size:11px; font-weight:bold;" align="center" colspan="2">Particulars</td>
<td width="100" style="font-size:11px; font-weight:bold;color:#3B5998;" align="center">Amount</td>
</tr>
<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>
<tr>
<td style="font-size:11px;" width="180"><?php echo $book['title']; ?></td>
<td style="font-size:11px;" align="right"><?php echo $name['amount']; ?></td>
<td style="font-size:11px;" align="right"><?php echo $name['amount']; ?></td>
</tr>

<tr>
<td style="font-size:11px; font-weight:bold;" width="180">Total of days</td>
<td style="font-size:11px;" align="right"><?php echo $_POST['totaldays']; ?></td>
<td style="font-size:11px;" align="right"><?php echo $_POST['totaldays']; ?></td>
</tr>

<tr>
<td style="font-size:11px; font-weight:bold;" width="180">Total</td>
<td style="font-size:11px;" align="right"><?php echo number_format($_POST['total'],2); ?></td>
<td style="font-size:11px;" align="right"><?php echo number_format($_POST['total'],2); ?></td>
</tr>
</table>
</div>

<div style=" width:380px; margin-bottom:30px; float:left; margin-top:10px;">

<table border="0" cellspacing="1" width="380">

<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>


</table>
</div>

<span style="font-weight:bold;color:#3B5998; text-align:center; font-size:12px;">
<table border="0" cellspacing="1" style="float:left;margin-top:7px;" width="200">

<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>
<tr>
<td colspan="3">Librarian</td>
</tr>

</table>|
</span>

</div>
</div>
</div>
</div>

<!--pop up-->
<div id="div1" style=" position:absolute; z-index:5; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxactionpenalty">
<div class="headboxpen">
<img src="images/gnome-panel-window-menu.png" height="30" style="float:left; margin-left:10px; margin-top:5px;">
<div style=" float:left; font-size:15px; font-weight:bold; font-family:Verdana, Geneva, sans-serif; margin-top:15px; margin-left:5px;">Penalty</div>
<div id="close" style="cursor:pointer; float:right; margin-top:5px; margin-right:5px;"><img src="images/close.gif"/></div>
</div>
<?php include('penalty.php'); ?>
</div>
</div>

<div id="div2" style=" position:absolute; z-index:5; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Thank you, Your book has been return.
</div>
<a href="" style="text-decoration:none;" id="" onclick="window.close();">
<div class="btnbox">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</a>
</div>
</div>
<!--end-->
 <div class="headerpop">
<div style="color:#FFF; margin-left:20px; padding-top:10px;">Return Books</div>
<hr/>
</div>
<div class="popwrap">
<div class="bgwrap">

<form name="frm"  id="reservation" action="" method="post" >
<table border="0" style="margin-top:10px; margin-left:10px;">
<tr><td>
Date Borrowed:</td><td><input type="text" readonly="readonly" value="
<?php //echo $name['dateborrow'];

echo date_format(date_create($name['date_out']), 'F j, Y');
?>
<?php //echo $name['dateborrow']; ?>" style="padding:4px; width:226px;">
</tr></tr>
<tr><td>
<?php
include('config.php');
	$q=mysql_query("select * from book where book_id='".$name['book_id']."'");
	$book=mysql_fetch_array($q)or die(mysql_error());

//echo date_format(date_create($name['dateborrow']), 'd');
 ?>
Book Title:</td><td><textarea style="padding:6px; width:330px;" value="" readonly="readonly"><?php echo $book['title']; ?></textarea>
</td></tr>
<tr><td>
Date Due:</td><td><input style="padding:4px; width:226px;" readonly="readonly" name="datedue" type="text"
value="<?php echo date_format(date_create($name['due_date']), 'F j, Y'); ?>
">
</td></tr>
<tr><td>
<?php

//echo date('Y-m-d');
switch (date_format(date_create($name['date_out']), 'm')) {
	  case '01':
	    $bmonth1 = "selected"; break;
	  case '02':
	    $bmonth2 = "selected"; break;
	  case '03':
	    $bmonth3 = "selected"; break;
	  case '04':
	    $bmonth4 = "selected"; break;
	  case '05':
	    $bmonth5 = "selected"; break;
	  case '06':
	    $bmonth6 = "selected"; break;
	  case '07':
            $bmonth7 = "selected"; break;
	  case '08':
	    $bmonth8 = "selected"; break;
	  case '09':
	    $bmonth9 = "selected"; break;
	  case '10':
	    $bmonth10 = "selected"; break;
	  case '11':
	    $bmonth11 = "selected"; break;
	  case '12':
	    $bmonth12 = "selected"; break;
	}
 ?>
Date Return:</td><td>

<input type="text" style="padding:4px; width:226px;" readonly="readonly" value="<?php echo date_format(date_create(date("m/d/y")), 'F j, Y'); ?>">
<?php
	 $myCalendar = new tc_calendar("date5", true, false);
	 $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	 $myCalendar->setDate(date('d'), date('m'), date('Y'));
	 $myCalendar->setPath("calendar/");
	 $myCalendar->setYearInterval(2000, 2020);
	 $myCalendar->dateAllow('2008-05-13', '2020-03-01');
	 $myCalendar->setDateFormat('F j, Y');
	 $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
	 $myCalendar->setSpecificDate(array("2011-04-10", "2011-04-14"), 0, 'month');
	 $myCalendar->setSpecificDate(array("2011-06-01"), 0, '');
	 $myCalendar->writeScript();
	  ?>
</td></tr>
<tr><td>Signature</td><td>
   <select name="sig" style="padding:4px; width:100px;" >
    <option value="Signed">Signed</option>
    </select>
</td></tr>
<tr><td>
<input type="submit" style="padding:4px; width:100px;" name="return" value="Submit">
</td>
<td>
<?php

/*$query1 = "select * from tblborrow where borrowid=$_GET[borrowid]";
$get=mysql_query($query1);
$bookid=mysql_fetch_array($get);*/

$query12 = "select * from book where book_id=$name[book_id]";
$s=mysql_query($query12);
$boks=mysql_fetch_array($s);
?>
<?php


$id=$_GET['borrowid'];
	//$datedue=$name['duedate'];
	$datedue=date_format(date_create($name['due_date']), 'm j, Y');
	$sig=$_POST['sig'];
	$bookid=$_POST['bookid'];

  $borrowed=date_format(date_create($name['date_out']), 'm j, Y');
  $theDate  = isset($_REQUEST["date5"]) ? $_REQUEST["date5"] : "";
  $format=date_format(date_create(date("m/d/y")), 'm j, Y');


if(isset($_POST['return'])){



  if($borrowed > $format){ ?>
			<div style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#F00;">Invalid Date</div>
		<?php	}
elseif(false){

?>
			<script>
$(document).ready(function(){
    $("#div1").fadeIn(1000);
});
</script>
		<?php }



else{
	include('config.php');
	$update="update book_loans set date_in='$theDate' where loan_id='$id'";
		$objExec = mysql_query($update)or die(mysql_error());
		if($objExec){
		// $up="update book set bookcopies='$add' where accNo='".$boks['accNo']."'";
	// mysql_query($up)or die(mysql_error()); ?>

		<script>
$(document).ready(function(){
    $("#div2").fadeIn(1000);
});
</script>

	<?php
			}

	}} ?>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['save1'])){
	include('config.php');

	$re=$_POST['date1'];

	$bor=$_POST['bor_id'];
	$dat=$_POST['datedew'];
	$dater=$_POST['dateret'];
	$tota=$_POST['totald'];
	$tot=$_POST['tot'];
        $accNo=$_POST['accNo'];
 $bid=$_POST['bid'];


	$pay=true;
if($pay){

	$update2="update book_loans set date_in='$re' where loan_id='$id'";
	$objExec2 = mysql_query($update2)or die(mysql_error());
	?>
<script>
$(document).ready(function(){
    $("#div2").fadeIn(1000);
});
</script>
	<?php
}
}
?>

</div>
</div>
</body>
</html>