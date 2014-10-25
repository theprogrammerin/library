
<?php
include('config.php');

$sql_res="select * from books where status='1' ";

if($sql_res === FALSE) {
	echo('wrong query');
    die(mysql_error()); // TODO: better error handling
}


$r=mysql_query($sql_res);
$items = 0;
while($row=mysql_fetch_array($r))
{
	$j="";
	$items++; 
	$bookid=$row['accNo'];
	$booktitle=$row['booktitle'];
	$author=$row['author1'];
	$author1=$row['author2'];
	$author2=$row['author3'];
	$img=$row['img'];
	$country=$row['country'];
	$publish=$row['publish'];
	$subject=$row['subject'];
	$section=$row['section'];
	$copy=$row['bookcopies'];
	
	$re_bookid='<b>'.$q.'</b>';
	$re_booktitle='<b>'.$q.'</b>';
	$rcallnumber='<b>'.$q.'</b>';
	$rauthor='<b>'.$q.'</b>';
	$rauthor1='<b>'.$q.'</b>';
	$rauthor2='<b>'.$q.'</b>';
	$rpublish='<b>'.$q.'</b>';
	$rsubject='<b>'.$q.'</b>';
	$rsection='<b>'.$q.'</b>';
	
	$f_bookid = str_ireplace($q, $re_bookid, $bookid);
	$fbooktitle = str_ireplace($q, $re_booktitle, $booktitle);
	$fcallnumber = str_ireplace($q, $rcallnumber, $callnumber);
	$fauthor = str_ireplace($q, $rauthor, $author);
	$fauthor1 = str_ireplace($q, $rauthor1, $author1);
	$fauthor2 = str_ireplace($q, $rauthor2, $author2);
	$fpublish = str_ireplace($q, $rpublish, $publish);
	$fsubject = str_ireplace($q, $rsubject, $subject);
	$fsection = str_ireplace($q, $rsection, $section);
}
?>