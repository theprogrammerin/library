<style>
.r:hover{
	background:#D5DEFF;}
</style>
<?php 
include('config.php');	
$classid=$_GET['classid'];
	$q=mysql_query("select * from books where bookclass='$classid' and status='1'");
		$num=mysql_num_rows($q)or die(mysql_error());


if(empty($_POST)){?>
<table width="100%" bgcolor="#0099FF" border="0" cellspacing="1" style=" text-align:center;margin-top:-2px; float:left; margin-left:" >
<thead>
<tr align="center" bgcolor="#F90" height="30">
   <td class="web" width="100"><strong>Book ID</strong></td>
    <td class="web" width="400"><strong>Title</strong></td>
    <td class="web" width="300"><strong>Author</strong></td>
    <td class="web" width="100" colspan="2"><img src="icons/phone_book_edit.png" height="25"/></td>
  </tr>

<?php
}


		if($num==0){ ?>
        <tr bgcolor="#E8EDFF">
        <td colspan="5" align="center">No Books Found!</td>
        </tr>
			<?php }else{
	while($class=mysql_fetch_array($q)or die(mysql_error())){
		//$link="<a class='classlink' href='?classid=$name[classid]&$name[classname]'>";
	 ?>
		<tr bgcolor="#E8EDFF" class="r">
        <td><?php echo $class['accNo'];	 ?></td>
        <td><?php echo $class['booktitle'];	 ?></td>
        <td><?php echo $class['author1'];	 ?></td>
        <td><img src="icons/phone_book_edit.png" height="25"/></td>
        </tr>
		
		
	<?php  }} ?>
    </thead>
    </table>
	
    