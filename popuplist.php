<style>
.bar{ height:30px; width:700px; margin-top:10px;}
#getresult{ float:left;}
.sy{ float:left; font-size:15px; font-family:Verdana, Geneva, sans-serif; margin-top:10px;}
#printablediv{width:700px; margin:auto;}
</style>
<script type="text/javascript" src="js/ajax.js"></script>
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
<div class="bar">

<select name="classID" style=" font-size:15px; padding:3px; width:200px; float:left;" class="com" onChange="getbooks(this.value)">
<option ></option>
<?php
include('config.php');
$sql="SELECT * FROM sy";
$rs=mysql_query($sql);
$class=0;

while($row=mysql_fetch_array($rs)){
	$class++;
 ?>
<option value="<?php echo $row['year'];?>">
<?php 

echo $row['year']; 

}
?>
</option>
</select>

<?php 
if(isset($_REQUEST['classid'])){
	
	echo "res";
	
	}
?>
  
<form action="" method="post">
<input type="button" value="Print" onClick="javascript:printDiv('printablediv')" />
  <input type="submit" value="Refresh" />
</form>
</div>
<div id="printablediv">
<table width="360" border="0" align="center" style="margin-top:40px;">
  <tr>
    <td align="center" style="font-size:20px;  font-weight:bold;font-family:Arial, 'Arial Black', 'Arial Narrow';">St. Mary's Academy of San Nicolas</td>
   
  </tr>
  <tr>
    <td style="font-size:17px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';" align="center">T. Abella St., Cebu City</td>   
  </tr>
  <tr height="10"><td></td>
  </tr>
  <tr>
    <td style=" margin-top:20px;font-size:19px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow';" align="center">HIGH SCHOOL LIBRARY</td>   
  </tr>
 
  <tr align="center" >
  <td style="font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">List of Acquisitions
  </td>
  </tr>
 
</table>
<div id="getresult">

<table width="700px" align="center"  border="0" cellspacing="1" style=" margin-bottom:30px; font-size:12px; margin-top:20px; font-family:Verdana, Geneva, sans-serif;">
<thead>

<tr style="font-size:15px; font-weight:bold; font-family:Verdana, Geneva, sans-serif;" height="30" align="center" >
   <td width="100">Acc No</td>
    <td  width="400">Title</td>
    <td  width="200">Author</td>
    <td  width="70">Copies</td>
      </tr>
      <tr>
<td colspan="4" style="border-bottom:#000 solid 1px;"></td>
</tr>
  </thead>
  
  <?php 
	include('config.php');
$q="select * from books where status='1'";
$rs=mysql_query($q);
while($row=mysql_fetch_array($rs)){
	?>

  <tr  align="center" class="hr" height="25">
    <td bgcolor="" width="100">
	<?php echo $row['accNo'];?>
    </td>
    <td  width="400"><?php echo $row['booktitle']; ?></td>
    <td width="200"><?php echo $row['author1']; ?></td>
    <td width="70" ><?php echo $row['bookcopies'];?></td>
   
 
  </tr>
  <?php } 

  ?>
  
  </table>
  </div>
  
  </div>