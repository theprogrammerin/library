<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
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
url: 'searchreturn.php',
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
url: 'searchreturn.php',
data: dataString,
cache: false,
success: function(html)

{

$("#display").html(html).show();
	}});


}return false;


});
});


   </script>
<style>

.trme:nth-child(2n+1){

	background-color:#CCC;

}
</style>
<style>

.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;

	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
		.searchdiv{
			height:35px;
			padding-top:-18px;
			width:500px;
			margin-left:-2px;
			word-spacing:20px;}
.deweydiv{

	height:300px;
	width:750px;
	float:left;}
.studentform{
	/*background:#FFF;
	box-shadow:0px 0px 5px grey;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border:1px #666 solid;
	margin:auto;*/
	width:886px;
	margin-left:20px;

	margin-top:30px;}
.trdiv{
	text-decoration:none;

	}


.trme:hover{
	background:#D6D6D6;}
.trme{text-decoration:none; color:#000; font-size:12px; font-family:Verdana, Geneva, sans-serif;}

.trnone{ text-decoration:none; color:#000; font-size:12px; font-family:Verdana, Geneva, sans-serif;}
</style>
<form name="frm"  id="reservation" action="" method="post" >



<div class="studentform">
<?php


include('config.php');
if(isset($_GET['card_no'])){

	$q=mysql_query("select * from borrower where card_no='".$_GET['card_no']."'");
	$name=mysql_fetch_array($q)or die(mysql_error());


	}
 ?>

<table width="360" border="0" align="center" style="margin-top:30px; float:right; margin-right:250px; " >
  <tr>
    <td align="center" style="font-size:20px;  font-weight:bold;font-family:Arial, 'Arial Black', 'Arial Narrow';">The University of Texas at Dallas</td>

  </tr>
  <tr>
    <td style="font-size:17px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';" align="center">Richardson, Texas</td>
  </tr>
  <tr>
    <td height="50" align="center" style="font-size:22px; font-family:Arial, 'Arial Black', 'Arial Narrow';">Borrower's Record</td>
  </tr>
<!--  <tr>
    <td  align="center" style="font-size:14px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';">S.Y:&nbsp;&nbsp;<u><?php //echo $name['sy']; ?></u></td>
 	</tr>-->
</table>

<br/>

<script>
jQuery(function($){
   $("#searchbox").Watermark(<?php if(isset($_GET['card_no'])){?>
   "<?php echo $name['fname'];?> <?php echo $name['lname']; ?> <?php echo $name['card_no']; ?>"
	<?php }else{ ?>
	"Search First Name,Last Name, Card No."
	<?php } ?>);
   });

</script>

<table align="center" style="margin-left:20px;"  width="430" border="0">
  <tr>
    <td style="font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; font-weight:bold;">Name</td><td>:</td>
    <td width="450" style="font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; ">
    <div class="searchdiv"><input type="text" class="search" id="searchbox" style="  width:490px; padding:4px; border:1px #CCC solid; color:#000; font-size:15px;" name="<?php echo time('y-m-d') ?>"

    />
</div>
<div id="display">

</div>

	</td>
  </tr>
  <tr>
    <td style="font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; font-weight:bold;">Card No. </td><td>:</td>
    <td width="450" style="border-bottom:1px solid #666;font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; "><?php echo $name['card_no']; ?></td>
  </tr>
</table>
<style>
.webkit{
	/* -webkit-border-radius: 7px 7px 0px 0px;
	  -moz-border-radius: 7px 7px 0px 0px;*/
	}
</style>


<script>
 function OpenPopUp(borrowid, pageURL, title,w,h) {
	     //alert("Pardeep")
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
      var targetWin =  window.open('./returnbookpopup.php?borrowid=' + borrowid, 'name', 'location=no,menubar=no,wiscrollbars=no,resizable=no,fullscreen=no,width='+w+', height='+h+', top='+top+', left='+left);
        return false;
    }


</script>

<script>
 function Openpen(borrowid, pageURL, title,w,h) {
	     //alert("Pardeep")
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
      var targetWin =  window.open('./popuppenalty.php?borrowid=' + borrowid, 'name', 'location=no,menubar=no,wiscrollbars=no,resizable=no,fullscreen=no,width='+w+', height='+h+', top='+top+', left='+left);
        return false;
    }


</script>
<br/>

<!---=======================================================================-->
<div style="margin-left:20px; margin-right:20px;">

  <div id="view">

<?php if(isset($_GET['studentid'])){ ?>

<form action="" method="post">

<?php $click=$_POST['click']; ?>
<select name="click">
<option <?php if($click=="View All"){ ?> Selected="Selected" <?php }else{} ?>>View All</option>
<option <?php if($click=="Signed"){ ?> Selected="Selected" <?php }else{} ?>>Signed</option>
<option <?php if($click=="Unsigned"){ ?> Selected="Selected" <?php }else{} ?>>Unsigned</option>

</select>

<input type="submit" name="sel" value="select">
</form>

<table border="0" style="margin-top:10px;">
<tr>
<td width="12" bgcolor="#FF6666" height="13" style="border:1px black solid;"></td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;font-weight:bold;">Unreturned Books</td>
</tr>
<tr>
<td width="12" bgcolor="#E8EDFF" height="13" style="border:1px black solid;"></td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">Returned Books</td>
</tr>
</table>

<?php
include('config.php');
$studentid=$_GET['studentid'];
$q1 ="select * from book_loans where card_no='$studentid' and date_in = '0000-00-00'";

$ret=mysql_query($q1);
$re=mysql_num_rows($ret);

$q2 ="select * from book_loans where card_no='$studentid' and date_in <> '0000-00-00'";

$un=mysql_query($q2);
$unre=mysql_num_rows($un);

$q3 ="select * from book_loans where card_no='$studentid'";

$all=mysql_query($q3);
$allb=mysql_num_rows($all);

?>

<table border="0" style="margin-top:15px;">
<tr>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">Returned Books</td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">(<?php echo $re; ?>)|</td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">Unreturned Books</td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">(<?php echo $unre; ?>)|</td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">All Borrowed Books</td>
<td style="font-size:9px;font-family:Verdana, Geneva, sans-serif;">(<?php echo $allb; ?>)</td>
</tr>
</table>

<table width="100%"  align="center"  border="0" cellspacing="1" class="webkit" style="
 margin-top:0px; border:#666 solid 1px; text-align:center; font-size:12px;">
  <tr bgcolor="#3B5998" style="font-size:15px; color:white; text-align:center; font-size:12px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';height:30px; ">
 <td width="30"></td>
    <td class="webkit" >Date Borrowed</td>
     <td class="webkit" >Title of Books</td>
     <td class="webkit" >Date Due</td>
     <td class="webkit">Date Returned</td>
     <td class="webkit">Signature</td>
    <td class="webkit"  colspan="0" align="center"><img src="icons/b_drop.png"/></td>
    <td class="webkit"  colspan="0" align="center"><img src="icons/s_db.png" title="Penalty"/></td>

  </tr>

<?php


include('config.php');
$click=$_POST['click'];


if(isset($_GET['studentid'])){
	$studentid=$_GET['studentid'];

if(!$click){

	$query1 = "select * from book_loans where card_no=$studentid";
}
elseif($click=="View All" && $click=="View All"){

	$query1 = "select * from book_loans where card_no=$studentid";
}
else{
$query1 = "select * from book_loans where card_no=$studentid ";
}

$get=mysql_query($query1);
$num=mysql_num_rows($get);


if($num==0){ ?>
<tr><td align="left" style="font-family:Verdana, Geneva, sans-serif;">
	<h3>No Books&nbsp;<span style="color:red;"><?php echo $click;?></span></h3>
    </td></tr>
<?php }
while($borrower=mysql_fetch_array($get)){

  $borrower["status"] = "Signed";
  if($borrower['date_in'] == "0000-00-00") {
    $borrower["status"] = "Unsigned";
  }
?>


<?php


switch($borrower['date_in']){

	case "Signed":
	   $dep="Selected";
	   break;
     case "Unsigned":
	   $dep1="Selected";
	   break;
	}
//include('get_data.php');
if($borrower['status']=="Signed"){}else
{


	$id=$borrower['borrowid'];
			//$myhref="<a href='' style='margin-right:10px;' id='$id'
   // onclick='OpenPopUp(id,'','',300,200);' class='trnone'>";
 }

?>

  <tr id="content" bordercolor="#FF6666" height="30"

<?php if($borrower['status']=='Unsigned'){
	  echo " style='font-weight:bold;'";
	  }else {} ?>

 class="trme" <?php if($borrower['status']=='Unsigned'){
	  echo 'bgcolor=""';
	  }else {echo 'bgcolor=""';} ?>>

    <td bgcolor="white" align="center"

 >
  <?php if($borrower['status']=='Unsigned'){ ?>
	<div style="height:20px; width:20px; border:1px black solid; background-color:#FF6666;"></div>
	 <?php }else { ?>
<div style="height:20px; width:20px;border:1px black solid; background-color:#E8EDFF;"></div>
<?php } ?>

</td>

    <td >

   <?php if($borrower['status']=="Signed"){}else{ ?>
    <a href="" style="margin-right:10px;" id="<?php echo $borrower['loan_id']; ?>"
    onclick="OpenPopUp(id,'','',800,500);" class='trnone'> <?php } ?>


     <div class="trdiv"><?php echo date_format(date_create($borrower['dateborrow']), 'M d Y     h:i A'); ?></div> </a></td >
    <td>
    <?php if($borrower['status']=="Signed"){}else{ ?>
    <a href="" style="margin-right:10px;" id="<?php echo $borrower['loan_id']; ?>"
    onclick="OpenPopUp(id,'','',800,500);" class='trnone'> <?php } ?> <div class="trdiv">

	<?php
	$qu = "select * from book where book_id='".$borrower['book_id']."'";
    $gets=mysql_query($qu);
	$borrow=mysql_fetch_array($gets) or die(mysql_error());
	$del=mysql_num_rows($gets);

	 echo $borrow['title'];

	 ?>
 </div></a>

 </td>
    <td> <?php if($borrower['status']=="Signed"){}else{ ?>
    <a href="" style="margin-right:10px;" id="<?php echo $borrower['borrowid']; ?>"
    onclick="OpenPopUp(id,'','',700,400);" class='trnone'> <?php } ?><div class="trdiv">
	<?php echo date_format(date_create($borrower['duedate']), 'F j, Y '); ?>
	</div></a></td>
    <td> <div class="trdiv">

    <?php if($borrower['datereturn']=="0000-00-00"){ ?>

    <?php  if($_GET['id']==$borrower['borrowid']){ ?>

//echo date('Y-m-d');



<?php

for($i=01;$i<32;$i++){ ?>

<option <?php
if(date('d')==$i){ echo 'selected="selected"'; ?>
<?php }else{}
 ?>
value="<?php  echo $i;?>" <?php echo $i; ?>><?php echo $i; ?></option>

<?php } ?>
</select>

<select name="byear">
<option>YYYY</option>
<?php for($i=1000;$i<2021;$i++){ ?>
<option
<?php
if(date('Y')==$i){ echo 'selected="selected"'; ?>
<?php }else{}
 ?>
 value="<?php  echo $i;?>" ><?php echo $i; ?></option>
<?php }?>
</select>



    <?php }else{ ?>
     <?php if($borrower['status']=="Signed"){}else{ ?>

    <a href="" style="margin-right:10px;" id="<?php echo $borrower['borrowid']; ?>"
    onclick="OpenPopUp(id,'','',700,400);" class='trnone'> <?php } ?>

    <div class="trdiv">
		Unreturn
	</div>
	<?php	}	 ?>

    </div>
    </a></td>
    <?php }else{ echo date_format(date_create($borrower['datereturn']), 'F j, Y'); } ?>

    <td><?php  if($_GET['id']==$borrower['borrowid']){?>
     <div class="trdiv">
     <?php if($borrower['status']=="Unsigned"){ ?>
    <select name="sig" >
    <option></option>
    <option value="Signed">Signed</option>
    </select>

	<?php }?>
    <?php }else{
	if($borrower['status']=="Unsigned"){ ?>
   <div class="trdiv">
    <a href="" style="margin-right:10px;" id="<?php echo $borrower['borrowid']; ?>"
    onclick="OpenPopUp(id,'','',700,400);" class='trnone'>
   Unsigned </a>
	<?php }else{
	echo "<img src='images/tick.gif' height='15'/>".$borrower['status'];
	 }
	}?></div></a>
    </td>

<?php if($borrower['status']=="Unsigned"){}else{ ?>
    <td width="30"><a href="" id="<?php echo $borrower['borrowid']; ?>" class="ass"><img src="icons/b_drop.png"/></td>
  <?php } ?>


<td>


<?php if($borrower['item']==0) {?>
<a href="" id=<?php echo $borrower['borrowid']; ?> onclick="Openpen(id,'','',400,400);">
<img src="icons/s_db.png" title="Penalty"/></a>
<?php }else{}?>
</td>


  </tr>

<?php } }?>
<tr>
<td colspan="9" bgcolor="#3B5998" height="20"></td>
</tr>
</table>
<?php }?>
</div>
</form>



<?php
if(isset($_GET['id'])){
$query1 = "select * from tblborrow where borrowid=$_GET[id]";
$get=mysql_query($query1);
$bookid=mysql_fetch_array($get);

$query12 = "select * from books where bookid=$bookid[bookid]";
$s=mysql_query($query12);
$boks=mysql_fetch_array($s);
$add=$boks['bookcopies']+1;
}
?>
<?php

if(isset($_POST['return'])){
	include('config.php');
	$id=$_GET['id'];
	$sig=$_POST['sig'];
	$bookid=$_POST['bookid'];
	  $bmonth = $_POST['bmonth'];
  $bday = $_POST['bday'];
  $byear = $_POST['byear'];
  $dateret = $byear.'-'.$bmonth.'-'.$bday;

	if(empty($sig)){
		echo "<script>alert('Please dont forget to sign');</script>";
		}
else{
	$update="update tblborrow set datereturn='$dateret',status='$sig' where borrowid='$id'";
		$objExec = mysql_query($update)or die(mysql_error());
		if($objExec){
			$up="update books set bookcopies='$add' where bookid='".$boks['bookid']."'";
		mysql_query($up)or die(mysql_error());

		echo "<script>alert('The Book has been return successfully');</script>";

	echo "<script>window.location='?returnBooks&studentid=$_GET[studentid]'</script>";
			}

	}} ?>


</div>


<br/>


<script type="text/javascript">
$(function() {

$(".ass").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'borrowid=' + del_id;
 if(confirm("Are you sure you want to delete this Record?"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){

   }
 });
         $(this).parents(".trme").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>