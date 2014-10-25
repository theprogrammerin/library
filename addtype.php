
<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are you sure you want to delete this Type?"))
		  {

 $.ajax({
   type: "GET",
   url: "deletetype.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".sds").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>




<script type="text/javascript">
$(function() {

$(".jades").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'sec_id=' + del_id;
 if(confirm("Are you sure you want to delete this Section?"))
		  {

 $.ajax({
   type: "GET",
   url: "deletetype.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".trint").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>