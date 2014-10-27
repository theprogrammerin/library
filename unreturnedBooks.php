<style>
.hed{
	float:left;
	width:860px;
	margin-left:35px;
	padding-bottom:20px;
	margin-top:10px;}
</style>
<SCRIPT language="javascript">

    $(function () {

        // add multiple select / deselect functionality

        $("#selectall").click(function () {

            $('.name').attr('checked', this.checked);

        });



        // if all checkbox are selected, then check the select all checkbox

        // and viceversa

        $(".name").click(function () {



            if ($(".name").length == $(".name:checked").length) {

                $("#selectall").attr("checked", "checked");

            } else {

                $("#selectall").removeAttr("checked");

            }



        });

    });

</SCRIPT>
   <script>
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
              "<nav>" +
              divElements + "</nav>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
       window.location='index.php?unreturnedBooks';
        }
    </script>

<script>

 $(document).ready(function(){
  $("#closeempty").click(function(){
    $("#divempty").fadeOut("slow");
	window.location='index.php?unreturnedBooks';
  });
});
</script>



<div id="divempty" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/error.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Error</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:20px; margin-right:20px; font-family:Arial, Helvetica, sans-serif; text-align:center">Choose to print
</div>

<div class="btnbox" id="closeempty" style="cursor:pointer;">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div>

<style>
.trsss{
	background-color:#FFCC99;}
.trsss:hover{background-color:#F90;

</style>
<div class="hed" id="printablediv">

<?php
 if(isset($_POST['print'])){
 if(!$_POST['checkbox']){ ?>
	 <script>
$(document).ready(function(){
    $("#divempty").fadeIn(1000);
});
</script>


	<?php }else{}
 ?>
 <?php
 }
 else{
 ?>

<?php
   include('config.php');

   ?>
      <form action="" method="post">

<table border="0" style="margin-top:20px; margin-left:0;">
<tr>
<tr>
<td style="font-size:18px;font-family:Verdana, Geneva, sans-serif; border-bottom:#666 solid 1px; ">List of Unreturned Books</td>
</tr>
<tr>
<td style="font-size:12px;font-family:Verdana, Geneva, sans-serif;"><?php echo date_format(date_create(date("Y/m/d")), 'F d, Y');?></td>
</tr>

</tr>
</table>


<table width="100%" bordercolor="#999999" class="web" border="0" cellspacing="1" style="border:#666 solid 1px; margin-bottom:20px; margin-left:0px;font-size:12px;font-family:Verdana, Geneva, sans-serif; margin-top:20px;">
<thead>
<tr bgcolor="#F90" height="30"  style="color:white;  font-weight:bold; text-align:left;">
<td>No.</td>
   <td class="web" width="100" align="center">Card No.</td>
    <td class="web" width="400" align="center">Book Title</td>
    <td class="web" width="240" align="center">Borrower's Name</td>
    <td class="web" width="240" align="center">Date of Lend</td>


    <?php
	include('config.php');
$q="select * from book_loans where date_in = '0000-00-00'";
$rs=mysql_query($q);

$count=0;
$ihap=0;
$num=mysql_num_rows($rs);

while($row=mysql_fetch_array($rs)){
	$count++;

	?>
  </tr>


   <tr  class="trsss"  align="center" height="25">
   <td><?php echo $count; ?></td>
      <td bgcolor="" width="100">
	<?php

	 echo $row['card_no']; ?>
    </td>
    <td  width="400"><?php
	$qs= mysql_query("SELECT * from book where book_id={$row['book_id']}");
while($title=mysql_fetch_array($qs)){
	 echo $title['title']; }?></td>
    <td width="180">
    <?php
	$qs=mysql_query("select * from borrower where card_no=$row[card_no]");
while($title=mysql_fetch_array($qs)){
	 echo $title['fname']."&nbsp;".$title['lname']; }?>
    </td>
    <td><?php echo date_format(date_create($row['date_out']), 'F d, Y'); ?></td>



    </tr>

   <?php
} ?>
      </thead>
  </table>

  <?php } ?>
    </div>

  <!--footer-->

<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot">
<table border="0" style="margin-top:20px; font-family:Verdana, Geneva, sans-serif; font-size:10px;">
<tr>
 <td>Count of Unreturn Books</td>
<td><input type="text" value="<?php echo $num; ?>" style="padding:2px; width:60px;" readonly="readonly"></td>

</tr>
</table>

</div>
<div class="rightfoot"></div>
</div>
</div>
</body>
</html>