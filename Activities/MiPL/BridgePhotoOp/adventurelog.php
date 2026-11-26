<table class="ContentBanner" width=<?php echo $width?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M i P L&nbsp;&nbsp;&nbsp;B R I D G E&nbsp;&nbsp;&nbsp;P H O T O&nbsp;&nbsp;&nbsp;O P</b></td></tr></table>
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