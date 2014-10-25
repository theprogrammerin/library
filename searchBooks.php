<style>
.scroll{
	width:900px;
	max-height:500px;
	margin-bottom:20px;
	float:left;
	margin-left:25px;
	overflow:scroll;
	overflow-x:hidden;
    overflow-y:scroll;	
	}
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
url: "all.php",
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
url: 'search.php',
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

<br/>
<br/>

<div class="searcharea">
<table border="0" style="border:1px inset #999; margin-top:5px; margin-left:27px; float:left;">
<tr><td>
<input type="text" style="width:500px; padding:4px;" onclick="clear()" class="search" id="searchbox" />
</td>
</tr></table>

</div>
<style>
.bookstat{ font-size:12px; font-family:Verdana, Geneva, sans-serif; text-align:right; margin-left:0px; width:732px; margin-top:20px; float:left;}
.web{ -webkit-border-radius:7px 7px 0px 0px;
 -moz-border-radius:7px 7px 0px 0px; 
 text-align:center; font-size:12px; font-weight:bold; font-family:Arial, "Arial Black", "Arial Narrow"; color:#003399;
}
.unret{border:1px #CCC solid;}
.unret:hover{border:1px #666 solid;}
.addbooks:hover{ border:1px #333 solid;}
.addbooks{ color:#666; border-radius:5px; margin-left:20px; height:30px;border:1px inset #CCC; float:left;}

.list:hover{ border:1px inset #333;}
.list{ color:#666; border-radius:5px; margin-left:20px; height:30px;border:1px inset #CCC; float:left;}
</style>
<div class="hed">
<table width="853"  border="0" cellspacing="1" style=" margin-left:20px;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<thead>
<tr bgcolor="#F90" height="30" align="center">
   <td width="70"><strong>Book ID</strong></td>
    <td  width="250"><strong>Title</strong></td>
    <td  width="120"><strong>Author</strong></td>
    <td  width="120"><strong>Branch</strong></td>
    <td  width="50"><strong>Copies</strong></td>
    <td  width="50"><strong>Copies Available</strong></td>
    <td  width="90" colspan="3"><strong>Action</strong></td>
  </tr>
  </thead>
  </table>
</div>
<div class="scroll">


<div id="display">
<?php include('all.php'); ?>

</div>

</div></div>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot">   
<div class="bookstat">
   <?php 
   include('config.php');
   
   $q="SELECT count(*) from book";


$rs=mysql_query($q);
$row=mysql_fetch_array($rs);
$booktotal=$row['count(*)'];
echo "&nbsp;";
	 $qss="SELECT * FROM tblborrow where status='Unsigned'";
	 $rss=mysql_query($qss);
$rows=mysql_num_rows($rss);
//

   ?> 

   <table width="" border="0" style=" height:30px;border:1px inset #999; float:left;">
  <tr>
    <td>Total variety of Books : </td>
    <td><input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:50px;" value="<?php echo $booktotal;
 ?>"/></td>
  
  </tr>
</table>

  
<a href="?addBooks" >
<table class="addbooks" border="0">
<tr width="150">
<td  align="left">
<td> Add Books</td>
</td>
</tr>
</table>
</a>

  <a href="" style="margin-right:10px;" 
    onclick="OpenPopUp(id,'','',770,500);" class='trnone'>
<table class="list" border="0" style="float:left;">
<tr width="150">
<td  align="left">
<td>List of Books</td>
</td>
</tr>
</table>
</a>
   </div>
   
   </div>
<div class="rightfoot"></div>
</div>
</div>
</body>
</html>
