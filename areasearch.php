<?php
include('config.php');
?>
<?php

$classid=$_REQUEST['classid'];
$query="select * from books where bookclass='$classid'";

?>


<?php
$query_result=mysql_query($query);

while($row=mysql_fetch_array($query_result))
{
	
//echo $row['bookid']."<br/>";

}

?>