<script type="text/javascript" src="js/ajax.js" >

</script>

<?php
include('config.php');
?>
<?php

$classid=$_REQUEST['classid'];
$q = $classid;
$query="SELECT b.book_id, title, no_of_copies, bc.branch_id, branch_name FROM book b INNER JOIN book_copies bc ON b.book_id = bc.book_id INNER JOIN library_branch lb ON lb.branch_id = bc.branch_id RIGHT JOIN book_authors ba ON b.book_id = ba.book_id where
b.book_id like '%$q%' or title like '%$q%' or author_name like '%$q%' ";

?>

<select style="width:280px; padding:4px;" name="bookid" class="cat" onChange="getcopy(this.value)">
<option value=""  style="padding:1px;"></option>
<?php
$query_result=mysql_query($query);

while($row=mysql_fetch_array($query_result))
{

?>

<option <?php
if($row['no_of_copies']=="0"){ ?> title="not available"
		disabled="disabled"
		<?php } else{?> <?php } ?>

 value="<?php echo "{$row['book_id']}-{$row['branch_id']}"; ?>" title="<?php echo $row['no_of_copies']."&nbsp;"."Books Available"; ?>">
 <?php echo "{$row['title']} - {$row['branch_name']}"; ?></option>
<?php
}

?>
</select>

 <div id="get" style="float:right; margin-left:20px;">
 <input type="text" readonly="readonly"  id="get" value="<?php echo $qw['bookcopies']; ?>" style="padding:4px; width:65px;">
 </div>