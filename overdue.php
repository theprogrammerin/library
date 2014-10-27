<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

?>
<style>
.trss:nth-child(2n+1){

	background-color:#CCC;}
.trss:hover{background-color:#D5DEFF;

}

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

<?php

if(isset($_POST['overreport'])){
include('overreport.php');
}else{

?>

<table border="0" style="margin-top:20px; margin-left:38px;">
<tr>
<td rowspan="3"><img src="icons/phone_book_edit.png" height="50"></td>
<tr>
<td style="font-size:18px;font-family:Verdana, Geneva, sans-serif; border-bottom:#666 solid 1px; ">List of Overdue Books</td>
</tr>
<tr>
<td style="font-size:12px;font-family:Verdana, Geneva, sans-serif;"><?php echo date_format(date_create(date("Y/m/d")), 'F d, Y');?></td>
</tr>

</tr>
</table>

<form action="" method="post">

<table width="89%" bordercolor="#999999" class="web" border="0" cellspacing="1" style="border:#666 solid 1px;
 margin-bottom:20px; margin-left:38px; margin-right:45px; font-size:12px;font-family:Verdana, Geneva, sans-serif; margin-top:20px;">
<thead>
<tr bgcolor="#3B5998" height="30" style="color:white;  font-weight:bold; text-align:left;" >
<td><input type="checkbox" id="selectall"/></td>
<td>No.</td>
   <td class="web" width="100" align="center">Acc No</td>
    <td class="web" width="300" align="center">Boook Title</td>
    <td class="web" width="200" align="center">Borrowers Name</td>
    <td class="web" width="150" align="center">Due Date</td>
    <td class="web" width="200" align="center" colspan="3">Count&nbsp;of&nbsp;days</td>
</tr>

<?php

$duedate=mysql_query("select * FROM book_loans where due_date < NOW() order by due_date");



$count=0;
$c=1;
while($row=mysql_fetch_array($duedate)){

$count++;
$borrower=mysql_query("select * from borrower where card_no='".$row['card_no']."'");

$stud=mysql_fetch_array($borrower);

$bo=mysql_query("select * from book where book_id='".$row['book_id']."'");
$book=mysql_fetch_array($bo);


$date1=date_format(date_create($row['due_date']), 'Y/m/d')."<br>";

$date2=date_format(date_create(date("Y/m/d")), 'Y/m/d')."<br>";

if($date1<$date2){

$j= count+($c++);

$start=date_format(date_create($row['due_date']), 'Y/m/d')."<br>";
$today=date_format(date_create(date("Y/m/d")), 'Y/m/d')."<br>";

$endTimeStamp = strtotime(date("Y/m/d"));
$startTimeStamp = strtotime($row['due_date']);
$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays); ?>

<tr class="trss" >
<td><input name="checkbox[]" class="name" type="checkbox"  value="<?php echo $row['borrowid']; ?>"></td>
<td><?php echo $count;?></td>
<td><?php echo $row['card_no']; ?></td>
<td><?php echo $book['title']; ?></td>
<td><?php echo $stud['fname']."&nbsp".$stud['lname']; ?></td>
<td><?php echo date_format(date_create($row['due_date']), 'F d, Y'); ?></td>
<td>
<input type="hidden" name="countdays" value="<?php echo $numberDays; ?>">
<?php echo $numberDays; ?></td>
</tr>
<?php

}



} ?>

</table>


<?php }?>



<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot">
<table border="0" style="margin-top:20px; font-family:Verdana, Geneva, sans-serif; font-size:10px;">
<tr>
<?php
 if(isset($_POST['overreport'])){  ?>
<td>Print Record(s)</td>
<td><input type="text" value="<?php echo  $printcount; ?>" style="padding:2px; width:60px;" readonly="readonly"></td>

 <?php }else{?>
 <td>Count of Over Due Books</td>
<td><input type="text" value="<?php echo $j; ?>" style="padding:2px; width:60px;" readonly="readonly"></td>
  <?php } ?>

  <td>
<?php
 if(isset($_POST['overreport'])){  ?>
    <img src="icons/print.png" height="20" style="cursor:pointer;" title="Print"  onClick="javascript:printDiv('printablediv')"/>
 <?php }else{?>
 <input type="submit" value="Print Report" name="overreport">
</form>

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