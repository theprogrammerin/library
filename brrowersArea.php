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
<div class="header"></div> 

<?php include('viewmenu.html'); ?>

<div class="wrapbody">
<div class="dewey">
<select 
 name="classID" style="font-size:20px; padding:6px; border:none; width:280px; margin-left:10px; margin-top:1px;" class="com" onChange="dissearch(this.value)">
<option ></option>
<?php
include('config.php');
$sql="SELECT * FROM bookclass";
$rs=mysql_query($sql);
$class=0;

while($row=mysql_fetch_array($rs)){
	$class++;
 ?>
<option style="font-size:20px;"
<?php
if($_GET['classid']==$row['classid']){ ?>
selected="selected" 
<?php }else{} ?>
 value="<?php echo $row['classid'];?>">
<?php 

echo $row['classid']."&nbsp;".$row['classname']; 

?>
</option>
<?php
}
?>
</select>
</div>
<div class="search">
<input type="text" class="searchid" name="<?php echo time('y-m-d'); ?>" id="searchbox" style="padding:6px;width:600px; margin-left:7px; margin-top:3px; border:none; font-size:20px;">
</div>

<!--<div id="displaysearch">
</div>
-->
<div id="display">
<?php
include('BorrowerSearch.php');

 ?>
</div>


</div>


</body>
</html>