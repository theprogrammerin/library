<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('reserve_count.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

var auto_refresh = setInterval(
function ()
{
$('#loadreserved').load('reservedbook.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds
</script>

<style>
#load_tweets{position:absolute; margin-top:-29px; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; color:#000; z-index:5px;
margin-left:27px;}
.menuwrap{ width:960px; margin:auto; }
.menus{ width:100%;   background: #090; height:32px;}

</style>



<div class="menus">
<div id="hotel">
<div class="menuwrap">
   <div class="menu">
        <ul>
        <li>
                <a href="#"><span class="img"></span>&nbsp;Home&nbsp;<span class="arrow"></span>&nbsp|</a>

                <ul>

               <li><a href="index.php">Home</a></li>
                    <li><a href="logout.php">Logout/Signout</a></li>


                </ul>
            </li>
            <li>
                <a href="#"><span class="img"></span>&nbsp;Book Borrow/Return<span class="arrow"></span></a>

                <ul>
                    <li><a href="?borrowBooks">Borrow Books</a></li>
                    <li><a href="?returnBooks">Return Books</a></li>



                </ul>
            </li>
            <li>
                <a href="#"><span class="img"></span>&nbsp;Books<span class="arrow"></span></a>
                <ul>
                    <li><a href="?addBooks">Add Books</a></li>
                    <li><a href="?searchBooks">Search Books</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="img"></span>&nbsp;Borrowers<span class="arrow"></span></a>
                <ul>
                    <li><a href="?addBorrower">Add Borrower</a></li>
                    <li><a href="?searchBorrower">Search Borrower</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="img"></span>&nbsp;Fines<span class="arrow"></span></a>
                <ul>
                    <li><a href="?addFine">Add Fine</a></li>
                    <li><a href="?searchFine">View Fine</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="img"></span>&nbsp;View<span class="arrow"></span></a>
                <ul>
                    <li><a href="?unreturnedBooks">Unreturn Books</a></li>

		    <li><a href="?overdue">OverDue Books</a></li>

                </ul>
            </li>
     <!--
            <li><div id="load_tweets"></div>
                <a href="#">

                <span class="img"><img src="icons/b_docs.png"width='20px'  height='18px' style=" padding-top:3px;"></span>&nbsp;Book Reserve<span class="arrow"></span></a>
                <ul>
                    <li>
                    <span id="loadreserved"></span>
					<?php //include('reservedbook.php'); ?>
                    </li>



                </ul>
            </li>
             <li>
                <a href="#">
                <span class="img"><img src="icons/b_tblops.png"width='20px'  height='18px' style=" padding-top:3px;"></span>&nbsp;Settings<span class="arrow"></span></a>
                <ul>
                    <li><a href="?backupdatabase">Backup Database</a></li>

    -->

                </ul>
            </li>
        </ul>
    </div>
    <div id='inlineBox' class='popup_block'>
			<div id='inlineBoxAjax'></div>
		</div>
        </div></div>

