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

jQuery(function($){
   $("#searchbox").Watermark("Search StudentID,Name,LastName");
   });
   
   </script>
<style>

.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
		.searchdiv{
			margin-bottom:20px;
			height:35px;
			padding-top:20px;
			width:500px;
			margin-left:20px;}
.deweydiv{

	height:300px;
	width:750px;
	float:left;}
.studentform{
	background:#FFF;
	box-shadow:0px 0px 5px grey;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border:1px #666 solid;
	margin:auto;
	width:700px;
	margin-bottom:20px;
	margin-top:30px;}
.trdiv{
	text-decoration:none;
	}
	.trme{
		text-decoration:none; color:#000; font-size:13px; font-family:Verdana, Geneva, sans-serif;
		}
.trme:hover{
	background:#D6D6D6;}.trnone{ text-decoration:none; color:#000; font-size:14px; font-family:Verdana, Geneva, sans-serif;}
</style>
<form name="frm"  id="reservation" action="" method="post" >

<div class="searchdiv">
<table border="0" align="center" style="border:1px inset #999; font-size:12px; font-family:Arial, 'Arial Black', 'Arial Narrow'; margin-top:5px;">
<tr>
<td style="border:1px inset #999; font-size:15px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow'; width:100px; text-align:center;">Search</td>
<td colspan="2" style="border:1px inset #999;">
<input type="text" style="width:400px; padding:4px;" name="" class="search" id="searchbox" />
</td></tr>
</table>

</div>
<div id="display">

</div>
<?php if(isset($_GET['studentid'])){ ?>
<div class="studentform">
<?php


include('config.php');
if(isset($_GET['studentid'])){
	
	$q=mysql_query("select * from tblborrower where studentid='".$_GET['studentid']."'");
	
	$name=mysql_fetch_array($q)or die(mysql_error());

	}
 ?>

<table width="430" border="0" align="center" style="margin-top:30px; " >
  <tr>
    <td align="center" style="font-size:20px;  font-weight:bold;font-family:Arial, 'Arial Black', 'Arial Narrow';">St. Mary's Academy of San Nicolas</td>
   
  </tr>
  <tr>
    <td style="font-size:17px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';" align="center">T. Abella St., Cebu City</td>   
  </tr>
  <tr>
    <td height="50" align="center" style="font-size:22px; font-family:Arial, 'Arial Black', 'Arial Narrow';">Borrower's Record</td>
  </tr>
  <tr>
    <td  align="center">S.Y</td><td></td>
  </tr>
</table>
<br/>



<table align="center" style="margin-left:20px;"  width="430" border="0">
  <tr>
    <td style="font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; font-weight:bold;">Name</td><td>:</td>
    <td width="450" style="border-bottom:1px solid #666;font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; "><?php echo $name['lname']."&nbsp;&nbsp;".$name['fname']."&nbsp;".$name['mi']; ?></td>
  </tr>
  <tr>
    <td style="font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; font-weight:bold;">Year/Section</td><td>:</td>
    <td width="300" style="border-bottom:1px solid #666;font-size:15px; font-family:Arial, 'Arial Black', 'Arial Narrow'; "><?php echo $name['levelyr']; ?></td>
  </tr>
</table>
<br/>
<div style="margin-left:20px; margin-right:20px;">
<table width="100%" align="center"  border="0" cellspacing="1" bgcolor="#000000">
  <tr bgcolor="#CCCCCC" style="font-size:15px; font-family:Arial, Helvetica, sans-serif; font-weight:bold;">
    <td>Date</td>
    <td>Title of Books</td>
    <td>Date Due</td>
    <td>Date Returned</td>
    <td>Signature</td>
  </tr>
  
<?php


include('config.php');
if(isset($_GET['studentid'])){
	$studentid=$_GET['studentid'];
	$query1 = "select * from tblborrow where studentid=$studentid";
$get=mysql_query($query1);
while($borrower=mysql_fetch_array($get)){

switch($borrower['status']){
	
	case "Signed":
	   $dep="Selected";
	   break;
     case "Unsigned":
	   $dep1="Selected";
	   break;
	}
//include('get_data.php');
if($borrower['status']=="Signed"){
	
	}else
{
			$myhref="<a class='trnone' href='?returnBooks&studentid=$_GET[studentid]&id=$borrower[borrowid]'>";
}
?>
 
  <tr class="trme" <?php if($borrower['status']=='Unsigned'){
	  echo 'bgcolor="#E79296"';
	  }else {echo 'bgcolor="#C6F8DF"';} ?>>
  
    
      
    <td  ><?php echo $myhref; ?> <div class="trdiv"><?php echo $borrower['dateborrow'];?></div> </a></td >
    <td><?php echo $myhref; ?>  <div class="trdiv">
	
	<?php
	$qu = "select * from books where bookid='".$borrower['bookid']."'";
    $gets=mysql_query($qu);
	$borrow=mysql_fetch_array($gets) or die(mysql_error());
	 echo $borrow['booktitle'];?>
 </div></a>
 
 </td>
    <td><?php echo $myhref; ?><div class="trdiv"><?php echo $borrower['datereturn'];?></div></a></td>
    <td> <div class="trdiv">
    <?php if($borrower['datereturn']=="0000-00-00"){ ?>
    <?php  if($_GET['id']==$borrower['borrowid']){?> 
    <input type="text" name="datereturn" value="<?php echo date('Y-m-d'); ?>"  style="width:100px;">
    <?php }
	
	 ?>
    
    </div>
    </a></td>
    <?php }else{ echo $borrower['datereturn']; } ?>
    
    <td><?php  if($_GET['id']==$borrower['borrowid']){?> 
    
     <div class="trdiv">
     <?php if($borrower['status']=="Unsigned"){ ?>
    <select name="sig" >
    <option></option>
    <option value="Signed">Signed</option>
    </select>
	
	<?php }?>
    <?php }
	if($borrower['status']=="Unsigned"){ ?>
	<?php }else{ 
	echo $borrower['status'];
	 } ?></div></a>
    </td>
  </tr>

<?php } }?>

</table>
<table border="0" style=" border:1px inset #999;margin-top:10px;">
<tr>
<td><input type="submit" name="return" value="Return"></td>
</tr>
</table>
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
	$dateret=$_POST['datereturn'];
	$sig=$_POST['sig'];
	$bookid=$_POST['bookid'];
	if(empty($dateret)){
		echo "Please Input Date";
		}
	elseif(($dateret)!= date('Y-m-d')){
		echo "invalid date Format";
		}else{
	$update="update tblborrow set datereturn='$dateret',status='$sig' where borrowid='$id'";
		$objExec = mysql_query($update)or die(mysql_error());
		if($objExec){
			$up="update books set bookcopies='$add' where bookid='".$boks['bookid']."'";
		mysql_query($up)or die(mysql_error());
		
		echo "<script>alert('The Book has beeb return successfully');</script>";

	echo "<script>window.location='?returnBooks&studentid=$_GET[studentid]'</script>";
			}
			
	}} ?>


</div>
<?php } ?>
<br/>