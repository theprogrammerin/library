<script type="text/javascript" src="js/ajax.js" >

</script>

<?php
include('config.php');
?>
<?php

$classid=$_REQUEST['classid'];
$query="select * from books where bookclass='$classid' and status='1'";

?>

<select style="width:280px; padding:4px;" name="bookid" class="cat" onChange="getcopy(this.value)">
<option value=""  style="padding:1px;"></option>
<?php
$query_result=mysql_query($query);

while($row=mysql_fetch_array($query_result))
{
	
?>

<option <?php
if($row['bookcopies']==0){ ?> title="not available"
		disabled="disabled" 
		<?php } else{?> <?php } ?>
		
 value="<?php echo $row['accNo']; ?>" title="<?php echo $row['bookcopies']."&nbsp;"."Books Available"; ?>">
 <?php echo $row['booktitle']; ?></option>
<?php
}

?>
</select>

 <div id="get" style="float:right; margin-left:20px;">
 <input type="text" readonly="readonly"  id="get" value="<?php echo $qw['bookcopies']; ?>" style="padding:4px; width:65px;">
 </div>