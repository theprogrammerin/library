   <table width="100%"  align="center"  border="0" cellspacing="1" class="webkit" style="
 margin-top:20px;
-moz-border-radius: 7px 7px 0px 0px; text-align:center; font-size:12px;">
  <tr bgcolor="#B9C9FE" style="font-size:15px; text-align:center; font-size:12px; font-weight:bold; font-family:Arial, 'Arial Black', 'Arial Narrow'; color:#003399;height:30px; ">

    <td class="webkit" >Date Borrowed</td>
     <td class="webkit" >Title of Books</td>
     <td class="webkit" >Date Due</td>
     <td class="webkit">Date Returned</td>
     <td class="webkit">Signature</td>
    <td class="webkit"  colspan="3" align="center">Action</td>
  </tr>
   
   <?php

include('config.php');
if(isset($_REQUEST['studentid'])){
$studentid=$_REQUEST['studentid'];
$Status='Unsigned';

	$query1 = "select * from tblborrow where studentid=$studentid and status='Unsigned'";
$get=mysql_query($query1);
while($borrower=mysql_fetch_array($get) or die(mysql_error())){

switch($borrower['status']){
	
	case "Signed":
	   $dep="Selected";
	   break;
     case "Unsigned":
	   $dep1="Selected";
	   break;
	}
//include('get_data.php');
if($borrower['status']=="Signed"){
	
	}else
{
			$myhref="<a class='trnone' href='?returnBooks&studentid=$_GET[studentid]&id=$borrower[borrowid]'>";
}
?>
 
  <tr bordercolor="#FF6666"style="height:30px;" class="trme" <?php if($borrower['status']=='Unsigned'){
	  echo 'bgcolor="#FF6666"';
	  }else {echo 'bgcolor="#E8EDFF"';} ?>>
  
    
      
    <td ><?php echo $myhref; ?> <div class="trdiv"><?php echo $borrower['dateborrow'];?></div> </a></td >
    <td><?php echo $myhref; ?>  <div class="trdiv">
	
	<?php
	$qu = "select * from books where bookid='".$borrower['bookid']."'";
    $gets=mysql_query($qu);
	$borrow=mysql_fetch_array($gets) or die(mysql_error());
	 echo $borrow['booktitle'];?>
 </div></a>
 
 </td>
    <td><?php echo $myhref; ?><div class="trdiv"><?php echo $borrower['duedate'];?></div></a></td>
    <td> <div class="trdiv">
    <?php if($borrower['datereturn']=="0000-00-00"){ ?>
    
    <?php  if($_GET['id']==$borrower['borrowid']){

//echo date('Y-m-d');
switch (date('m')) {
	  case '01':
	    $bmonth1 = "selected"; break;
	  case '02':	
	    $bmonth2 = "selected"; break;
	  case '03':	
	    $bmonth3 = "selected"; break;
	  case '04':	
	    $bmonth4 = "selected"; break;
	  case '05':	
	    $bmonth5 = "selected"; break;
	  case '06':	
	    $bmonth6 = "selected"; break;
	  case '07':	
            $bmonth7 = "selected"; break;
	  case '08':	
	    $bmonth8 = "selected"; break;
	  case '09':	
	    $bmonth9 = "selected"; break;
	  case '10':	
	    $bmonth10 = "selected"; break;
	  case '11':	
	    $bmonth11 = "selected"; break;
	  case '12':	
	    $bmonth12 = "selected"; break;
	}
 ?>
 
    <select name="bmonth" style="width:75px;">
 		 <option value="01" <?php echo $bmonth1; ?>>January</option>
		  <option value="02" <?php echo $bmonth2; ?>>February</option>
  		  <option value="03" <?php echo $bmonth3; ?>>March</option>
		  <option value="04" <?php echo $bmonth4; ?>>April</option>
		  <option value="05" <?php echo $bmonth5; ?>>May</option>
		  <option value="06" <?php echo $bmonth6; ?>>June</option>
		  <option value="07" <?php echo $bmonth7; ?>>July</option>
		  <option value="08" <?php echo $bmonth8; ?>>August</option>
		  <option value="09" <?php echo $bmonth9; ?>>September</option>
		  <option value="10" <?php echo $bmonth10; ?>>October</option>
		  <option value="11" <?php echo $bmonth11; ?>>November</option>
		  <option value="12" <?php echo $bmonth12; ?>>December</option>
</select>
<select name="bday">
<option>DD</option>
<?php 

for($i=01;$i<32;$i++){ ?>

<option <?php 
if(date('d')==$i){ echo 'selected="selected"'; ?>
<?php }else{}
 ?> 
value="<?php  echo $i;?>" <?php echo $i; ?>><?php echo $i; ?></option>

<?php } ?>
</select>

<select name="byear">
<option>YYYY</option>
<?php for($i=1000;$i<2021;$i++){ ?>
<option 
<?php 
if(date('Y')==$i){ echo 'selected="selected"'; ?>
<?php }else{}
 ?> 
 value="<?php  echo $i;?>" ><?php echo $i; ?></option>
<?php }?>
</select>



    <?php }else{ ?>
    <?php echo $myhref; ?>
    <div class="trdiv">
		Unreturn
	</div>	
	<?php	}	 ?>
    
    </div>
    </a></td>
    <?php }else{ echo $borrower['datereturn']; } ?>
    
    <td><?php  if($_GET['id']==$borrower['borrowid']){?> 
     <div class="trdiv">
     <?php if($borrower['status']=="Unsigned"){ ?>
    <select name="sig" >
    <option></option>
    <option value="Signed">Signed</option>
    </select>
	
	<?php }?>
    <?php }else{
	if($borrower['status']=="Unsigned"){ ?>
   <div class="trdiv">
   <?php echo $myhref; ?> 
   Unsigned </a>
	<?php }else{ 
	echo "<img src='images/tick.gif' height='15'/>".$borrower['status'];
	 } 
	}?></div></a>
    </td>
    <?php if($_GET['id']==$borrower['borrowid']){ ?>
    <td width="30" colspan="3"><input type="submit" name="return" value="Return"></td>
    <?php }else{?>
    <td width="30"><img src="icons/b_edit.png"/></td>
    <td width="30"><img src="icons/b_drop.png"/></td>
    <td width="30"><img src="icons/b_search.png"/></td>
    <?php }?>
    
  </tr>

<?php } ?>
<?php }?>
<tr>
<td colspan="9" bgcolor="#B9C9FE" height="20"></td>
</tr>
</table>