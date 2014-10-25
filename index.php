<?php session_start();

if(!isset($_SESSION['username']))
{
header("Location: welcome.php");
exit;
}
?>
<?php
$timezone = "America/Chicago";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
include("config.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Library Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />

</head>

<script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.fixedMenu.js"></script>
        <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
        <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>

        <script src="js/organictabs.jquery.js"></script>

</head>

<body>

<div class="header">

</div>
<?php include('menu.php'); ?>
<div class="wrapper">
<div class="head">
<div class="head_title">
<?php if(isset($_GET['borrowBooks'])){ ?> Borrow Books<?php } ?>
<?php if(isset($_GET['overdue'])){ ?>Over Due Books<?php } ?>
<?php if(isset($_GET['allreserved'])){ ?> Reserved Books<?php } ?>
<?php if(isset($_GET['addBooks'])){ ?> Add Books<?php } ?>
<?php if(isset($_GET['searchBooks'])){ ?>Search Books<?php } ?>
<?php if(isset($_GET['addBorrower'])){ ?>Add Borrower<?php } ?>
<?php if(isset($_GET['searchBorrower'])){ ?>Search Borrower<?php } ?>
<?php if(isset($_GET['addFine'])){ ?>Add Fine<?php } ?>
<?php if(isset($_GET['searchFine'])){ ?>Search Fine<?php } ?>
<?php if(isset($_GET['returnBooks'])){ ?>Return Books<?php } ?>
<?php if(isset($_GET['unreturnbook'])){ ?>unreturn Borrower<?php } ?>
<?php if(isset($_GET['unreturnedBooks'])){ ?>List of Unreturned Books<?php } ?>
<?php if(isset($_GET['Booklist'])){ ?>List of Books<?php } ?>

</div>
</div>
<div class="body">

<?php

if(isset($_GET['addBooks'])){
	 include('addBooks.php');
	}
elseif(isset($_GET['searchBooks'])){
	 include('searchBooks.php');
	}
elseif(isset($_GET['borrowBooks'])){
	 include('borrowBooks.php');
	}
elseif(isset($_GET['addBorrower'])){
	 include('addBorrower.php');
	}
elseif(isset($_GET['searchBorrower'])){
	 include('searchBorrower.php');
	}
elseif(isset($_GET['addFine'])){
   include('addFine.php');
  }
elseif(isset($_GET['searchFine'])){
   include('searchFine.php');
  }
elseif(isset($_GET['returnBooks'])){
	 include('returnBooks.php');
	}
	elseif(isset($_GET['unreturnbook'])){
	 include('unreturnbook.php');
	}
	elseif(isset($_GET['unreturnedBooks'])){
	 include('unreturnedBooks.php');
	}
	elseif(isset($_GET['print'])){
	 include('print.php');
	}
	elseif(isset($_GET['Booklist'])){
	 include('Booklist.php');
	}

elseif(isset($_GET['overdue'])){
	 include('overdue.php');
	}

/*----------------------------------------------*/



/*----------------------------------------------*/
	else{ ?>
<center>
<div align="center" style="font-family:Verdana, Geneva, sans-serif">
<h1><strong>The University of Texas at Dallas</strong></h1>
<br />
<h3>Library Management System</h3>
<h2><strong><em>WELCOME</em></strong></h2>
</div>

</center><?php }


	 //include('login.php');

 ?>
<?php if(isset($_GET['searchBooks'])){}
elseif(isset($_GET['unreturnedBooks'])){}
elseif(isset($_GET['overdue'])){}
else{ ?>
    </div>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot">
</div>
<div class="rightfoot"></div>
</div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>

    <?php } ?>
