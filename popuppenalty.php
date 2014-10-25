<title>Payment</title>




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
      
        }
    </script>


<img src="icons/print.png" height="20" style="cursor:pointer;" title="Print"  onClick="javascript:printDiv('print')"/>

<div id="print" >




<?php 

include('config.php');
$sql="SELECT * FROM tblreciept where borrowid='".$_GET['borrowid']."'";
$rs=mysql_query($sql);


$rowpay=mysql_fetch_array($rs);


$sqls="SELECT * FROM tblborrower where studentid='".$rowpay['studentid']."'";
$rss=mysql_query($sqls);


$print=mysql_fetch_array($rss);

$bok="SELECT * FROM books where accNo='".$rowpay['accNo']."'";
$r=mysql_query($bok);


$book=mysql_fetch_array($r);


$b="SELECT * FROM tblborrow where accNo='".$rowpay['accNo']."'";
$rsss=mysql_query($b);


$am=mysql_fetch_array($rsss);

?>


<div style="font-size:15px;padding-top:20px; width:380px; height:303px; margin-right:10px; margin-left:10px; font-family:Arial, Helvetica, sans-serif;">
<img src="images/st mary.png" height="200" style=" margin-left:80px; margin-top:50px;position:absolute; opacity:0.1;" />
<span style="font-weight:bold; font-size:12px; color:#3B5998;">St. Mary's Academy of San Nicolas</span><br/>
<span style="font-size:11px; color:#3B5998;">T. Abella St., Cebu City</span><br/>
<span style="font-size:11px; color:#3B5998;">Tel. No. (63) (32) 286-5875</span><br/>
<div style="font-weight:bold; width:100%; font-size:12px; margin-top:10px; border-bottom:1px solid #3B5998;"></div>

<div style=" margin-top:8px; width:230px; float:left;">
<table border="0">
<tr>
<td><span style="font-size:11px; color:#3B5998;">Recieved from:</span></td>
<td style="font-size:11px;"><?php echo $print['lname']."&nbsp;".$print['fname']."&nbsp;".$print['mi'];?></td>
</tr>
<tr>
<td style="font-size:11px; color:#3B5998;">Year/level Section:</td>
<td style="font-size:11px;"><?php 

if($print['levelyr']==1){
	echo "1st Year";
	}
	elseif($print['levelyr']==2){
		echo "2nd Year";
		}
	elseif($print['levelyr']==3){
		echo "3rd Year";
		}
	elseif($print['levelyr']==4){
		echo "4th Year";
		}
		echo "&nbsp;".$print['section'];?></td>
</tr>
<tr>
<td style="font-size:11px; color:#3B5998;">The sum of PESOS:</td>
<td style="font-size:11px;"><?php echo "Php"."&nbsp;".$rowpay['totalpay']; ?></td>
</tr>
</table>
</div>

<div style=" height:60px;   margin-top:8px;  width:150px; float:left;">
<table border="0">
<tr>
<td><span style="font-size:11px; color:#3B5998;">Date:</span></td>
<td style="font-size:11px;"><?php echo date('m/d/Y') ?></td>
</tr>
<tr>
<td style="font-size:11px;color:#3B5998;">Borrowers ID:</td>
<td style="font-size:11px;"><?php echo $print['studentid']; ?></td>
</tr>
</table>
</div>

<div style=" width:380px; float:left; margin-top:10px;">
<table border="0" cellspacing="1" width="380">
<tr>
<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>
<td style="color:#3B5998; border-right:1px #666 solid;font-size:11px; font-weight:bold;" align="center" colspan="2">Particulars</td>
<td width="100" style="font-size:11px; font-weight:bold;color:#3B5998;" align="center">Amount</td>
</tr>
<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>
<tr>
<td style="font-size:11px;" width="180"><?php echo $book['booktitle']; ?></td>
<td style="font-size:11px;" align="right"><?php echo $am['amount']; ?></td>
<td style="font-size:11px;" align="right"><?php echo $am['amount']; ?></td>
</tr>

<tr>
<td style="font-size:11px; font-weight:bold;" width="180">Total of days</td>
<td style="font-size:11px;" align="right"><?php echo $rowpay['totaldays']; ?></td>
<td style="font-size:11px;" align="right"><?php echo $rowpay['totaldays']; ?></td>
</tr>

<tr>
<td style="font-size:11px; font-weight:bold;" width="180">Total</td>
<td style="font-size:11px;" align="right"><?php echo number_format($rowpay['totalpay'],2); ?></td>
<td style="font-size:11px;" align="right"><?php echo number_format($rowpay['totalpay'],2); ?></td>
</tr>
</table>
</div>

<div style=" width:380px; margin-bottom:30px; float:left; margin-top:10px;">

<table border="0" cellspacing="1" width="380">

<tr>
<td colspan="3" style="border-top:1px #3B5998 solid;"></td>
</tr>


</table>
</div>

<span style="font-weight:bold;color:#3B5998; text-align:center; font-size:12px;">
<table border="0" cellspacing="1" style="border-top:1px #3B5998 solid; float:left;margin-top:3px;" width="200">

<tr>
<td colspan="3" ></td>
</tr>
<tr>
<td colspan="3">Librarian</td>
</tr>

</table>|
</span>

</div>
</div>