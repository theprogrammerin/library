<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

?>


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
       window.location='index.php?overdue';
        }
    </script>

<div class="hed" id="printablediv">

<table width="360" border="0" align="center">
  <tr>
    <td align="center" style="font-size:20px;  font-weight:bold;font-family:Arial, 'Arial Black', 'Arial Narrow';">St. Mary's Academy of San Nicolas</td>
   
  </tr>
  <tr>
    <td style="font-size:17px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';" align="center">T. Abella St., Cebu City</td>   
  </tr>
  <tr>
    <td height="50" align="center" style="font-size:22px; font-family:Arial, 'Arial Black', 'Arial Narrow';">List of OverDue Books</td>

</table>


 <table width="90%" bordercolor="#999999" a class="web" border="0" cellspacing="1" style=" margin-bottom:50px;
 margin-left:35px;font-size:12px;font-family:Verdana, Geneva, sans-serif; margin-top:20px;">
<thead>
<tr style="font-weight:bold; font-size:15px;" height="30">

   <td class="web" width="100" align="center">Acc No</td>
    <td class="web" width="400" align="center">Boook Title</td>
    <td class="web" width="240" align="center">Borrowers Name</td>
    <td class="web" width="240" align="center">Due Date</td>
<td class="web" width="240" align="center">Count of days</td>
</tr>
<tr>
<td colspan="5" style="border-bottom:1px #000 solid;">

</td>
</tr>
<?php include('config.php');
 $printcount=0;
 for($i=0;$i<count($_POST['checkbox']);$i++){ 
 $printcount++;
 $borrowid = $_POST['checkbox'][$i]; 


$sql =mysql_query("SELECT * FROM tblborrow WHERE borrowid='$borrowid'"); 


  while($row=mysql_fetch_array($sql)){

$qsa=mysql_query("select * from books where accNo=$row[accNo]");	 
	   $book=mysql_fetch_array($qsa);
$b=mysql_query("select * from tblborrower where studentid=$row[studentid]");	 
	   $bor=mysql_fetch_array($b);

?> 
<tr align="center" height="30">
<td align="left"><?php echo $row['accNo'];?></td>
<td><?php echo $book['booktitle'];?></td>
<td><?php echo $bor['fname']."&nbsp".$bor['lname'];?></td>
<td><?php echo date_format(date_create($row['duedate']), 'F d, Y'); ?></td>
<td>
<?php

$date1=date_format(date_create($row['duedate']), 'Y/m/d')."<br>";

$date2=date_format(date_create(date("Y/m/d")), 'Y/m/d')."<br>";

if($date1<$date2){

$j= count+($c++);

$start=date_format(date_create($row['duedate']), 'Y/m/d')."<br>";
$today=date_format(date_create(date("Y/m/d")), 'Y/m/d')."<br>";

$endTimeStamp = strtotime(date("Y/m/d"));
$startTimeStamp = strtotime($row['duedate']);
$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays); 
echo $numberDays;
}
?>
</td>
</tr>

<?php } }?>

<!--end of printing -->

 </thead>


</table>

</div>