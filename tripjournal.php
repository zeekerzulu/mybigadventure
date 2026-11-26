<table class="ContentBanner" width="678" cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>T R I P&nbsp;&nbsp;&nbsp;J O U R N A L</b><?php include 'sharecontrol.php' ?></td></tr></table>
<br>
<?php
	$searchaction = 'FetchWeekCounts';
	$searchdates = $_REQUEST['daterange'];
	$displayinitialpipe = 1;
	//include 'commentsearch.php';
	$page = $_REQUEST['page'];
	$includefile = "Journal/page_${page}.php";
	include $includefile;
?>