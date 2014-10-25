<?php session_start();
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/borrowers.css" />

<TITLE>Library Management system</TITLE>
</head>


 <script type="text/javascript">
  function dissearch(classid){
	    window.location="?get&classid="+classid;
	   
	   }
   </script>
 <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.fixedMenu.js"></script>
        <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
        <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>
        <script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
       
        <script type="text/javascript">

$(document).ready(function(){

$(".searchid").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
$.ajax({
type: "POST",
url: "borrowerSearch.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	}
});
}
else
{
$.ajax({
type: "POST",
url: 'searchbookview.php',
data: dataString,
cache: false,
success: function(html)

{

$("#display").html(html).show();
	}});


}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search Books through Book ID, Title, Authors");
   });
   
   
   </script>

<body>
<style>
.search{width:629px; padding-bottom:50px; margin:auto;}
.logo{ width:200px; height:198px; margin:auto;}
	.head_title{
			color:#000;
			font-size:15px;
			font-family:Verdana, Geneva, sans-serif; 
			font-weight:bold;
			margin-left:35px;
			padding-top:7px;}
</style>
<div class="header">
</div> 

<?php include('viewmenu.php'); ?>
<div class="wrapperdiv">
<div class="head">
<div class="head_title">
<?php if(isset($_GET['findBooks'])){ ?>Browse Books<?php }
else{
	echo "Search Books";
	} ?>


</div>
</div>
<div class="body">
<?php
if(isset($_GET['create'])){
	include('loginborrowers.php');
	}else{

 ?>
<?php 
if(isset($_GET['findBooks'])){
		include('findBooks.php');
	}else{
?>
<div class="search">
<table align="center" border="0"><tr><td></td></tr></table>
<input type="text" align="middle" class="searchid" name="<?php echo time('y-m-d'); ?>" id="searchbox" style=" margin-left:25px;padding:2px;width:570px;margin-top:10px;font-size:20px; ">
</div>

<div id="display">
</div>

<?php } }?>
</div><!--end of body-->
<div class="foot">
<div class="headfoot"></div>
<div class="bodyfoot"></div>
<div class="fotfoot"></div>
</div>

</div>

</body>
</html>