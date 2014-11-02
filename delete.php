<?php
include('config.php');

$temp = explode("-", $_GET['book_id']);
$book_id = $temp[0];
$branch_id = $temp[1];


$query = "DELETE FROM fines WHERE loan_id IN ( SELECT loan_id FROM book_loans WHERE book_id = $book_id AND branch_id = $branch_id)";
mysql_query($query);
$query = "DELETE FROM book_loans WHERE book_id = $book_id AND branch_id = $branch_id";
mysql_query($query);
$query = "DELETE FROM book_copies WHERE book_id = $book_id AND branch_id = $branch_id";
mysql_query($query);

$query = "SELECT * FROM book_copies WHERE book_id = $book_id AND branch_id = $branch_id";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) {
  $query = "
    DELETE FROM book_authors WHERE book_id = $book_id;
    DELETE FROM book WHERE book_id = $book_id;
  ";
  mysql_query($query);
}

echo "Deleted";

?>