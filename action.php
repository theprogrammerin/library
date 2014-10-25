<?php session_start();
if(isset($_POST['login'])){
include('config.php');
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM user WHERE (username = '" .addslashes($user) . "') and (password = '" .$pass . "')";
$rs=mysql_query($sql);

if($row=mysql_fetch_array($rs))
{	  
$_SESSION['userid']=$row['ID'];
$_SESSION['login_name']=$row['username'];
	echo "<script>window.location='index.php?transaction'</script>";

 
}else{
	echo "<script>window.location='index.php?error'</script>";
	} 
	}

?>

