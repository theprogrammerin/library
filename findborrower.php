<style>
.hr:hover{ background:#F90;}
.del:hover{ background:#FFF;}
</style>
<div class="display_box">

<table width="850" border="0" cellspacing="1" style=" margin-left:20px;background:#F90; font-size:12px; font-family:Verdana, Geneva, sans-serif;">

<?php
include('config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select * from borrower where card_no like '%$q%' or fname like '%$q%' or lname like '%$q%' ";

$r=mysql_query($sql_res);
$items = 0;
?>

	
<?php while($row=mysql_fetch_array($r))
{
	 $items++; 
$bookid=$row['card_no'];
$booktitle=$row['fname'];
$author=$row['lname'];


$re_bookid='<b>'.$q.'</b>';
$re_booktitle='<b>'.$q.'</b>';
$rcallnumber='<b>'.$q.'</b>';
$rauthor='<b>'.$q.'</b>';
$rauthor1='<b>'.$q.'</b>';
$rauthor2='<b>'.$q.'</b>';
$rpublish='<b>'.$q.'</b>';
$rsubject='<b>'.$q.'</b>';
$rsection='<b>'.$q.'</b>';

$f_bookid = str_ireplace($q, $re_bookid, $bookid);
$fbooktitle = str_ireplace($q, $re_booktitle, $booktitle);
$fcallnumber = str_ireplace($q, $rcallnumber, $callnumber);
$fauthor = str_ireplace($q, $rauthor, $author);
$fauthor1 = str_ireplace($q, $rauthor1, $author1);
$fauthor2 = str_ireplace($q, $rauthor2, $author2);
$fpublish = str_ireplace($q, $rpublish, $publish);
$fsubject = str_ireplace($q, $rsubject, $subject);
$fsection = str_ireplace($q, $rsection, $section);
?>


<tr bgcolor="#FFCC99" height="25" class="hr" align="center">
<td width="230">
<?php echo $f_bookid; ?>
</td>
<td width="250">
<?php echo $fbooktitle; ?>
</td>

<td width="250"> <?php echo $fauthor; ?></td>

 <td align="center" class="del"><a title="EDIT"  href="?addBorrower&card_no=<?php echo $row['card_no']; ?>">Edit</a></td>
  <td class="del">
  <?php echo '<div align="center"><a href="#" id="'.$row['card_no'].'" class="delbutton" title="Click To Delete">Delete</a></div>'; ?>
  </td>
  </tr>




<?php
} ?>


<?php

echo "";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $_POST['searchword']; ?>" &nbsp;
Search Not Found</div>

<?php	} ?>

<tr height="25">
<td colspan="6">
</td>
</tr>
 </table>
<?php }?>

<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'studentid=' + del_id;
 if(confirm("Are you sure you want to delete this Borrower?"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".hr").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>



</div>

