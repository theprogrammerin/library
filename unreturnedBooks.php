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
.trsss:nth-child(2n+1){
	
	background-color:#CCC;}
.trsss:hover{background-color:#D5DEFF;

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
<table width="360" border="0" align="center">
  <tr>
    <td align="center" style="font-size:20px;  font-weight:bold;font-family:Arial, 'Arial Black', 'Arial Narrow';">St. Mary's Academy of San Nicolas</td>
   
  </tr>
  <tr>
    <td style="font-size:17px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';" align="center">T. Abella St., Cebu City</td>   
  </tr>
  <tr>
    <td height="50" align="center" style="font-size:22px; font-family:Arial, 'Arial Black', 'Arial Narrow';">List of Unreturned Books</td>

</table>


 <table width="95%" bordercolor="#999999" a class="web" border="0" cellspacing="1" style=" margin-bottom:50px; margin-left:22px;font-size:12px;font-family:Verdana, Geneva, sans-serif; margin-top:20px;">
<thead>
<tr style="font-weight:bold; font-size:15px;" height="30">

   <td class="web" width="100" align="center">Acc No</td>
    <td class="web" width="400" align="center">Boook Title</td>
    <td class="web" width="240" align="center">Borrowers Name</td>
    <td class="web" width="240" align="center">Date of Lend</td>
</tr>
<tr>
<td colspan="4" style="border-bottom:1px #000 solid;">

</td>
</tr>
 <?php include('config.php');
 $printcount=0;
 for($i=0;$i<count($_POST['checkbox']);$i++){ 
 $printcount++;
 $borrowid = $_POST['checkbox'][$i]; 

 $sql =mysql_query("SELECT * FROM tblborrow WHERE borrowid='$borrowid'"); 


  while($row=mysql_fetch_array($sql)){
	 
	   ?>

<tr align="center" height="30">
<td><?php echo $row['accNo']; ?></td>
<td>
<?php
$qsa=mysql_query("select * from books where accNo=$row[accNo]");
while($acc=mysql_fetch_array($qsa)){
	 echo $acc['booktitle']; }?>
</td>
<td>
<?php
$qs=mysql_query("select * from tblborrower where studentid=$row[studentid]");
while($title=mysql_fetch_array($qs)){
	 echo $title['fname']."&nbsp;".$title['lname']; }?>

</td>
<td><?php echo date_format(date_create($row['dateborrow']), 'F d, Y'); ?></td>
</tr>



<!--end of printing -->
 <?php } 
 }
 
 ?>
 </thead>


</table>
 <?php
 }
 else{
 ?>

<?php 
   include('config.php');
  
	 $qss="SELECT * FROM tblborrow where status='Unsigned'";
	 $rss=mysql_query($qss);

//
   ?> 
      <form action="" method="post">

<table border="0" style="margin-top:20px; margin-left:0;">
<tr>
<td rowspan="3"><img src="icons/phone_book_edit.png" height="50"></td>
<tr>
<td style="font-size:18px;font-family:Verdana, Geneva, sans-serif; border-bottom:#666 solid 1px; ">List of Unreturned Books</td>
</tr>
<tr>
<td style="font-size:12px;font-family:Verdana, Geneva, sans-serif;"><?php echo date_format(date_create(date("Y/m/d")), 'F d, Y');?></td>
</tr>

</tr>
</table>


<table width="100%"bordercolor="#999999" class="web" border="0" cellspacing="1" style="border:#666 solid 1px; margin-bottom:20px; margin-left:0px;font-size:12px;font-family:Verdana, Geneva, sans-serif; margin-top:20px;">
<thead>
<tr bgcolor="#3B5998" height="30"  style="color:white;  font-weight:bold; text-align:left;">
<td><input type="checkbox" id="selectall"/></td>
<td>No.</td>
   <td class="web" width="100" align="center">Acc No</td>
    <td class="web" width="400" align="center">Boook Title</td>
    <td class="web" width="240" align="center">Borrowers Name</td>
    <td class="web" width="240" align="center">Date of Lend</td>
   
    
    <?php 
	include('config.php');
$q="select * from tblborrow where status='Unsigned'";
$rs=mysql_query($q);

$count=0;
$ihap=0;
$num=mysql_num_rows($rs);

while($row=mysql_fetch_array($rs)){
	$count++;
	
	?>
  </tr>
 
  
   <tr  class="trsss"  align="center" height="25">
   <td>

   <input name="checkbox[]" class="name" type="checkbox"  value="<?php echo $row['borrowid']; ?>"></td>
   <td><?php echo $count; ?></td>
      <td bgcolor="" width="100">
	<?php

	 echo $row['accNo']; ?>
    </td>
    <td  width="400"><?php
	$qs=mysql_query("select * from books where accNo=$row[accNo]");
while($title=mysql_fetch_array($qs)){
	 echo $title['booktitle']; }?></td>
    <td width="180">
    <?php
	$qs=mysql_query("select * from tblborrower where studentid=$row[studentid]");
while($title=mysql_fetch_array($qs)){
	 echo $title['fname']."&nbsp;".$title['lname']; }?>
    </td>
    <td><?php echo date_format(date_create($row['dateborrow']), 'F d, Y'); ?></td>

  
   
    </tr>
    
   <?php 
} ?> 
      </thead>
  </table>
 
  <?php } ?>
    </div>

  <!--footer-->
    
      <script>
/* function OpenPopUp(borrowid, pageURL, title,w,h) {
	     //alert("Pardeep")
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
      var targetWin =  window.open('http://localhost/lib/unreturn_check.php?borrowid=' + borrowid, 'name', 'location=no,menubar=no,wiscrollbars=no,resizable=no,fullscreen=no,width='+w+', height='+h+', top='+top+', left='+left);
        return false;
    }*/
	

</script>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot">
<table border="0" style="margin-top:20px; font-family:Verdana, Geneva, sans-serif; font-size:10px;">
<tr>
<?php
 if(isset($_POST['print'])){  ?>
<td>Print Record(s)</td>
<td><input type="text" value="<?php echo  $printcount; ?>" style="padding:2px; width:60px;" readonly="readonly"></td>

 <?php }else{?>
 <td>Count of Unreturn Books</td>
<td><input type="text" value="<?php echo $num; ?>" style="padding:2px; width:60px;" readonly="readonly"></td>
  <?php } ?>
  
  <td>
<?php
 if(isset($_POST['print'])){  ?>
    <img src="icons/print.png" height="20" style="cursor:pointer;" title="Print"  onClick="javascript:printDiv('printablediv')"/>
 <?php }else{?>
 <input type="submit" value="Print Report" name="print">

 
 <?php } ?>
</td>
</tr>
</table>

</div>
<div class="rightfoot"></div>
</div>
</div>
</body>
</html>