<style>

.del:hover{ background:#FFF;}
</style>
<div class="display_box">

<table width="853" border="0" cellspacing="1" style="margin-left:15px;background:#F90;font-size:12px; font-family:Verdana, Geneva, sans-serif;">

<?php
include('config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select b.book_id, title, author_name, branch_name, no_of_copies, IFNULL(no_issued, 0) AS no_issued, (no_of_copies- IFNULL(no_issued, 0)) AS no_available from book b
join book_authors ba on b.book_id  = ba.book_id
join book_copies bc on b.book_id=bc.book_id
join library_branch lc on bc.branch_id = lc.branch_id
LEFT join (SELECT book_id, branch_id, count(*) AS no_issued FROM book_loans WHERE date_in = '0000-00-00' GROUP BY book_id, branch_id) book_issues ON book_issues.book_id = b.book_id AND lc.branch_id = book_issues.branch_id
where b.book_id like '%$q%' or title like '%$q%' or author_name like '%$q%'
order by b.book_id";



$r=mysql_query($sql_res);
$items = 0;
?>


<?php while($row=mysql_fetch_array($r))
{
	 $items++;
$bookid=$row['book_id'];
$booktitle=$row['title'];
$author=$row['author_name'];
$branch=$row['branch_name'];
$copies=$row['no_of_copies'];
$available = $row['no_available'];

$re_bookid='<b>'.$q.'</b>';
$re_booktitle='<b>'.$q.'</b>';
$rauthor='<b>'.$q.'</b>';
$rbranch='<b>'.$q.'</b>';
$rcopies='<b>'.$q.'</b>';
$ravailable='<b>'.$q.'</b>';

$f_bookid = str_ireplace($q, $re_bookid, $bookid);
$fbooktitle = str_ireplace($q, $re_booktitle, $booktitle);
$fauthor = str_ireplace($q, $rauthor, $author);
$fbranch = str_ireplace($q, $rbranch, $branch);
$fcopies = str_ireplace($q, $rcopies, $copies);
$favailable = str_ireplace($q, $ravailable, $available);
?>


  <tr bgcolor="#FFCC99" align="center" class="hr" height="25">
<td width="70">
<?php echo $f_bookid; ?>
</td>
<td width="250">
<?php echo $fbooktitle; ?>
</td>

<td width="120"> <?php echo $fauthor; ?></td>
<td width="120"> <?php echo $fbranch; ?></td>

 <td width="50" >
	<input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:50px;" value="<?php echo $fcopies;
 ?>"/></td>
 <td width="50" >
	<input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:50px;" value="<?php echo $favailable;
 ?>"/></td>

<td class="view" width="35">
<a href="?addBooks&book_id=<?php echo $row['book_id'] ?>&view">View</a></td>

 <td class="edit" width="30"><a href="?addBooks&book_id=<?php echo $row['book_id']; ?>">Edit</a></td>

<td class="del">
<?php echo '<div align="center"><a href="#" id="'.$row['book_id'].'" class="delbutton" >Delete</a></div>'; ?>
   </td>


</tr>




<?php
} ?>
<tr height="20px" bgcolor="#f90">
<td colspan="4" bgcolor="#F90"></td>
</tr>
<?php
echo "</table>";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $q; ?>"&nbsp;
Search Not Found</div>

<?php	}

}

?>


<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'bookid=' + del_id;
 if(confirm("Are you sure you want to delete this Book?"))
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

