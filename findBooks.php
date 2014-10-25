
<style>
.hr:hover{ background:#F90;}
.del:hover{ background:#FFF;}

.hed{
	float:left;
	margin-left:20px;
	margin-top:10px;}
.s{ background:#F90;}
</style>

<script type="text/javascript">

$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
	$.ajax({
type: "POST",
url: "allbooks.php",
data: dataString,
cache: false,
success: function(html)
{

$("#displaybooks").html(html).show();
	}
});
}
else
{
$.ajax({
type: "POST",
url: 'searchallbooks.php',
data: dataString,
cache: false,
success: function(html)

{

$("#displaybooks").html(html).show();
	}});


}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search Books through Book ID, Title, Authors");
   });
   
   </script>
   
  <table border="0" style="border:1px inset #999; margin-top:20px; margin-left:40px; float:left;">
<tr><td>
<input type="text" style="width:500px; padding:4px;" onclick="clear()" class="search" id="searchbox" />
</td>
</tr></table>
<div class="hed">
<table width="853"   border="0" cellspacing="1" style="margin-left:20px;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<thead>
<tr bgcolor="#F90"  height="30" align="center">
   <td class="s" width="100"><strong>Book ID</strong></td>
    <td  class="s" width="400"><strong>Title</strong></td>
    <td class="s" width="200"><strong>Author</strong></td>
     
 </tr>
 </thead></table>
 
<div id="displaybooks">

<?php include('allbooks.php'); ?>

</div>
<br/>
</div>