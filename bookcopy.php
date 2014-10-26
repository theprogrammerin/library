   <?php

include('config.php');
if(isset($_REQUEST['accNo'])){
$accNo=  explode("-", $_REQUEST['accNo']);
$book_id = $accNo[0];
$branch_id = $accNo[1];
$q="SELECT * from book_copies where book_id=$book_id and branch_id = $branch_id";
$q_re=mysql_query($q);
$qw=mysql_fetch_array($q_re);
if($qw['no_of_copies']=="0"){ ?>
<input readonly="readonly" name="copy" type="text" id="get" value="0
" style="padding:4px;  width:65px;">

	<?php }
	else{?>
	<input readonly="readonly" name="copy" type="text" id="get" value="<?php echo $qw['no_of_copies']; ?>" style="padding:4px;  width:65px;">
    <?php } }?>