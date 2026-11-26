<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>F A V O R I T E&nbsp;&nbsp;&nbsp;P A N O R A M A S</b><?php include 'sharecontrol.php' ?></td></tr></table>
<br>
<?php 
	$page = $_REQUEST['page'];
	$includefile = "Favorites/Panoramas/page_${page}.php";
	echo "<div class='Panoramas'>";
	include $includefile;
	echo "</div>";
?>