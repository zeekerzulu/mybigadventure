<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>F A V O R I T E&nbsp;&nbsp;&nbsp;P I C T U R E S</b></td></tr></table>
<br>
<?php 
	$page = $_REQUEST['page'];
	$includefile = "Favorites/page_${page}.php";
	include $includefile;
?>