<style>
.hr:hover{ background:#F90;}
.del:hover{ background:#FFF;}
</style>
<table width="853" border="0" cellspacing="1" style="  margin-left:15px;background:#F90;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<?php
	include('database/config.php');
$q="select b.book_id, title, author_name, lc.branch_id, branch_name, no_of_copies, IFNULL(no_issued, 0) AS no_issued, (no_of_copies- IFNULL(no_issued, 0)) AS no_available from book b
join book_authors ba on b.book_id  = ba.book_id
join book_copies bc on b.book_id=bc.book_id
join library_branch lc on bc.branch_id = lc.branch_id
LEFT join (SELECT book_id, branch_id, count(*) AS no_issued FROM book_loans WHERE date_in = '0000-00-00' GROUP BY book_id, branch_id) book_issues ON book_issues.book_id = b.book_id AND lc.branch_id = book_issues.branch_id
order by b.book_id;
";
$rs=mysql_query($q);





while($row=mysql_fetch_array($rs)){
	?>

  <tr bgcolor="#FFCC99"  align="center" class="hr" height="25">
    <td width="75">	<?php echo $row['book_id'];?></td>
    <td width="250"><?php echo $row['title']; ?></td>
    <td width="120"><?php echo $row['author_name']; ?></td>
    <td width="120"><?php echo $row['branch_name']; ?></td>
    <td width="50" >
	<input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:20px;" value="<?php echo $row['no_of_copies'];;
 ?>"/></td>
 <td width="50" >
	<input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:20px;" value="<?php echo $row['no_available'];;
 ?>"/></td>
   <td class="view">
<a href="?addBooks&book_id=<?php echo $row['book_id'] ?>&view">View</a></td>

   <td class="edit"><a  href="?addBooks&book_id=<?php echo $row['book_id']; ?>&branch_id=<?php echo $row['branch_id']; ?>">Edit</a></td>
   <td class="del">
<?php echo '<div align="center"><a href="#" id="'.$row['book_id'].'-'.$row['branch_id'].'" class="delbutton" >Delete</a></div>'; ?>

   </td>


  </tr>


<?php	}
?>
<tr height="20px">
<td></td>
</tr>
</table>



<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'book_id=' + del_id;
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