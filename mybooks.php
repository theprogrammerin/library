<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

?>

 <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

<style>

.trs:nth-child(2n+1){
	
	background-color:#CCC;}
	.trs:hover{ background:#E0E0E0;}
</style>

<table border="0" cellspacing="1" width="80%" style=" font-family:Verdana, Geneva, sans-serif; font-size:12px; border:#999 solid 1px;margin-left:50px; margin-top:30px; margin-bottom:20px;">
<td width="50">
<img src="icons/1.png" height="50">
</td>
<td>My Books Reserved</td>
</tr>
</table>

<table border="0" cellspacing="1" width="80%" style=" border:#999 solid 1px;margin-left:50px; margin-top:30px; margin-bottom:20px;">

<tr bgcolor="#3B5998" style="font-size:15px; font-family:Verdana, Geneva, sans-serif; height:30px; color:#FFF;">
<td>AccNo</td>
<td>Books</td>
<td>Reserved To</td>
<td>Time reserved</td>
<td>Time Claim</td>
<td>Status</td>
<td align="center">
  <img src="icons/b_drop.png" height="15" /></td>

</tr>
<?php
require_once('config.php');

$sql = "SELECT * from tblbookreserve where studentid=$_SESSION[studentid]";
$rs=mysql_query($sql);
while($rows=mysql_fetch_array($rs)){
/*tblborrower.lname,
tblborrower.photo, 
tblborrower.fname,
tblborrower.mi,
tblborrower.levelyr,
tblborrower.section,
tblborrower.type,

tblbookreserve.studentid,
tblbookreserve.timeres,
tblbookreserve.accNo,
tblbookreserve.timeget ".
 "FROM tblborrower, tblbookreserve ".
	"WHERE tblborrower.studentid = tblbookreserve.studentid ";*/
	 
	$bo=mysql_query("select * from tblborrower where studentid='$rows[studentid]'");
	$r=mysql_fetch_array($bo);
	$bos=mysql_query("select * from books where accNo='$rows[accNo]'");
	$ass=mysql_fetch_array($bos);
	
 ?>
 <tr class="trs" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; height:30px;">
 <td><?php echo $rows['accNo']; ?></td>
  <td><?php echo $ass['booktitle']; ?></td>
   <td><?php echo $r['fname']."&nbsp;".$r['mi']."&nbsp;".$r['lname']; ?></td>
   <td><?php echo $rows['timeres']; ?></td>
    <td><?php echo $rows['timeget']; ?></td>
<td>
<?php
if($rows['status']==0){

echo "<span style='color:red'>Expired</span>";
}else{
echo "<span style='color:green'>Active</span>";
}

 ?>

</td>
    <td align="center">

<?php if($rows['status']==1){ ?>

 <a title="Cancel Reserved" class="j" href="" id=<?php echo $rows['resid']; ?> ><img src="icons/b_drop.png" height="15" /></a></td>
<?php }else{ ?>
<a title="Cancel Reserved" class="js" href="" id=<?php echo $rows['resid']; ?> ><img src="icons/b_drop.png" height="15" /></a></td>

<?php } ?> 
</tr>
 <?php
 
}?>
<tr bgcolor="#3B5998" >
<td colspan="7" height="20" ></td>
</tr>
</table>




<?php
/*
if(isset($_GET['resid']))
{

$as=$ass['bookcopies']+1;



$id=$_GET['resid'];


 $sql = "DELETE FROM  tblbookreserve WHERE resid='$id'";
 mysql_query( $sql);


$update1="UPDATE books set bookcopies='$as' where accNo='".$_GET['accNo']."' ";

 mysql_query( $update1)or die(mysql_error());


echo "<script>window.location='?accNo=$_GET[accNo]&create&borrow&mybooks'</script>";
}
*/
?>








<script type="text/javascript">
$(function() {

$(".j").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

var accNo=<?php echo $_GET['accNo']; ?>;
//Built a url to send
var info = 'resid=' + del_id + 'accNo=' + accNo;
 if(confirm("Are you sure you want to cancel reserve?"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".trs").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>





<script type="text/javascript">
$(function() {

$(".js").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

var accNo=<?php echo $_GET['accNo']; ?>;
//Built a url to send
var info = 'resid=' + del_id + 'accNo=' + accNo;
 if(confirm("Are you sure you want to cancel reserve?"))
		  {

 $.ajax({
   type: "GET",
   url: "deletetype.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".trs").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>