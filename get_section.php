 <select name="sec">
  <option>Select section</option>
    <?php
	include('config.php');

	$yr_id=$_REQUEST['yr_id'];
    $sec="SELECT * FROM tblsection where yr_id='$yr_id'";
$a=mysql_query($sec)or die(mysql_error());
while($type=mysql_fetch_array($a)){ ?> 
<option><?php echo $type['section']; ?></option>
    <?php }?>
    </select>