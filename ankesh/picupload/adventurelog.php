<table class="ContentBanner" width=<?php echo $width?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>A S I A&nbsp;&nbsp;&nbsp;P A C I F I C</b></td></tr></table>
<br>
<?php 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		$includefile = "AdventureLog/gallery.php";
	} else {
		$includefile = "AdventureLog/page_${page}.php";
	}
	include $includefile;
?>