<style>
.arrows{
	background:url(icons/arrow.png);
	width:18px;
	height:20px;
    margin-left: -13px;
	position:absolute;
	margin-top:10px;
		top: 0px;}
</style>

<?php
include('config.php');
//$search_word=$_GET['q'];
$sql = mysql_query("Select * from tblbookreserve where status='1'");
$row=mysql_num_rows($sql); ?>

<?php if($row==0){
	
	}else{ ?>
<div style="background:#FFF; height:19px; border-radius:5px; border:1px #333 solid; margin-left:5px; padding-left:5px;padding-right:5px; color:#000; padding-bottom:5px;">
<?php echo $row; ?>
</div>	
<div class="arrows"></div>
<?php }?>


