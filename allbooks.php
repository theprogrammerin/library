<style>

.del:hover{ background:#FFF;}
</style>
<div class="display_box">

<table width="853"   border="0" cellspacing="1" style=" margin-left:20px;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<thead>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
include('config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select b.book_id, title, author_name from book b JOIN book_authors ba ON b.book_id = ba.book_id ";

if($sql_res === FALSE) {
	echo('wrong query');
    die(mysql_error()); 
}


$r=mysql_query($sql_res);
$items = 0;
?>

	
<?php 
while($row=mysql_fetch_array($r))
{
	$j="";
	$items++; 
	$bookid=$row['book_id'];
	$booktitle=$row['title'];
	$author=$row['author_name'];
	
	$re_bookid='<b>'.$q.'</b>';
	$re_booktitle='<b>'.$q.'</b>';
	$rauthor='<b>'.$q.'</b>';
	
	$f_bookid = str_ireplace($q, $re_bookid, $bookid);
	$fbooktitle = str_ireplace($q, $re_booktitle, $booktitle);
	$fauthor = str_ireplace($q, $rauthor, $author);

?>


  <tr bgcolor="#FFCC99" align="center" class="hr" height="25">
<td width="100">
<?php echo $f_bookid; ?>
</td>
<td width="400">
<?php echo $fbooktitle; ?>
</td>

<td width="200"> <?php echo $fauthor; ?></td>
 

<?php
} ?>
<tr  height="20px" bgcolor="#FFCC99">
<td colspan="4" height="25"></td>
</tr>
<?php
echo "</table>";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $q; ?>"&nbsp;
Search Not Found</div>

<?php	}
 
}

?>
<br/>


