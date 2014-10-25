   <?php

include('config.php');
if(isset($_REQUEST['accNo'])){
$accNo=$_REQUEST['accNo'];

$q="select * from books where accNo=$accNo";
$q_re=mysql_query($q);
$qw=mysql_fetch_array($q_re); 
if($qw['bookcopies']==0){ ?>
<input readonly="readonly" name="copy" type="text" id="get" value="
" style="padding:4px;  width:65px;">
	
	<?php }
	else{?>
	<input readonly="readonly" name="copy" type="text" id="get" value="<?php echo $qw['bookcopies']; ?>" style="padding:4px;  width:65px;">
    <?php } }?>