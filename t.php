<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>Library Management system</TITLE>
</head>

<body>
<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
?>
<?php

$s=date_format(date_create(date('01:00')), 'H:i')+date_format(date_create(date('00:30')), 'H:i');

echo $s."<br/>";



$r = date('01:00') + date('00:30');
$s = $r=date('00:00');

$time=date('01:00')+date('00:30');

for($i=date('00:00');$i<$time;$i++){
	echo $i."<br>";
	}

//echo date_format(date_create(date('01:00')), 'H:i')."<br/>";
//for(
//$i=date_format(date_create(date('01:00')), 'H:i');
//$i<date_format(date_create(date('2:00')), 'H:i');
//$i++)
 //{
	// echo $i."<br/>";
	 
	// }
 ?>
</body>
</html>