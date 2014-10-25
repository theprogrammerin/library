<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#a').load('backup.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
<style>

.trs:nth-child(2n+1){
	
	background-color:#CCC;}
</style>
<div id="a"></div>
<table bgcolor="" border="0" cellspacing="1" style=" border:#666 solid 1px;width:500px;margin-left:50px; margin-bottom:20px;">
<tr bgcolor="#3B5998" style="color:#FFF; background:#3B5998; font-size:15px; font-weight:bold;">
<td>
</td>
<td>
File Name
</td>
<td align="center">
Action
</td>
</tr>

<?php
// List the files
$dir = opendir ("./DB_backup"); 
$count=0;
while (false !== ($file = readdir($dir))) { 

	// Print the filenames that have .sql extension
	if (strpos($file,'.sql',1)) { 
$count++;


	// Remove the sql extension part in the filename
	$filenameboth = str_replace('.sql', '', $file);
                        
	// Print the cells

		echo '<tr class="trs">';
		echo "<td width='15'><img src='icons/b_selboard.png'></td>";
		echo '<td>'.$filenameboth.".sql".'</td>';
		echo "<td align='center'>"."<a href='DB_backup/" . $filenameboth . ".sql'>
		<img src='icons/download-database-icon.png' height='20' />
		Download</a>"."</td>";
		echo "</tr>";
		
	} 
} 
?>
<tr >
<td colspan="3" height="20" bgcolor="#3B5998"></td>
</tr>

</table>
