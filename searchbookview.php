<style>
.divclick{min-height:30px;}
.a{ color:#000; font-size:12px; font-family:Verdana, Geneva, sans-serif; text-decoration:none;}
.hr:hover{ background:#F90;}

</style>



<table width="578" bgcolor="#F90" border="0" cellspacing="1" style=" text-align:center;margin-top:-51px; margin-left:190px; float:left;" >
<thead>
<tr bgcolor="#F90" height="30" style="font-family:Verdana, Geneva, sans-serif">
   <td class="web" width="100"><strong>Book ID</strong></td>
    <td class="web" width="400"><strong>Title</strong></td>
    <td class="web" width="300"><strong>Author</strong></td>
  </tr>
<?php
include('config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select b.book_id, title, author_name from book b JOIN book_authors ba ON b.book_id = ba.book_id where 
b.book_id like '%$q%' or title like '%$q%' or author_name like '%$q%' ";

$r=mysql_query($sql_res);
$items = 0;
?>

	
<?php while($row=mysql_fetch_array($r))
{
	
	$href='<a class="a" href="?book_id='.$row['book_id'].'&create">';
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
<td width="100"><?php echo $href; ?>
<div class="divclick"><?php echo $f_bookid; ?></div></a>
</td>
<td width="400"><?php echo $href; ?>
<div class="divclick"><?php echo $fbooktitle; ?></div></a>
</td>

<td width="300"><?php echo $href; ?> 
<div class="divclick"><?php echo $fauthor; ?></div></a>
</td>


</tr>




<?php
} ?>

<?php
echo "</table>";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; float:left; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $q; ?>"&nbsp;
Search Not Found</div>

<?php	}
 
}

?>




</div>

<br/>

