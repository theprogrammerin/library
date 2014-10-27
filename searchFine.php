<style>
.scroll{
	width:902px;
	max-height:500px;
	float:left;
	margin-bottom:20px;
	margin-left:20px;
	overflow:scroll;
	overflow-x:hidden;
    overflow-y:scroll;	}
.searcharea{
	float:left;

	margin-left:20px;
	}
.hed{
	float:left;
	margin-left:20px;
	margin-top:10px;}


    </style>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
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
url: "findfine.php",
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
url: 'findfine.php',
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
   $("#searchbox").Watermark("Search Borrower's name, Card No.");
   });

   </script>
<br/>

<div class="searcharea">
<table border="0" style="border:1px inset #999; margin-top:5px; margin-left:21px; float:left;">
<tr><td>
<input type="text" style="width:500px; padding:4px;" onclick="clear()" class="search" id="searchbox" />
</td>
</tr></table>
</div>
<div class="hed">
<style>
.web{ 
 text-align:center; font-size:12px; font-weight:bold; font-family:Arial, "Arial Black", "Arial Narrow"; color:#000;
}
</style>
<table width="850"  border="0" class="web" cellspacing="1" style=" margin-left:20px;font-size:12px; font-family:Verdana, Geneva, sans-serif; ">

<tr  bgcolor="#F90" height="30">
   <td class="web" width="160">Card No.</td>
    <td class="web" width="190">First Name</td>
    <td class="web" width="190">Last Name</td>
    <td class="web" width="190">Fine</td>
    <td class="web" width="190" colspan="3">Action</td>
  </tr>
  </table>
</div>
<div class="scroll">


<div id="display">
<?php include('findfine.php'); ?>
</div>


</div>