<table class="ContentBanner" width=<?php if ($picrotator) echo "678"; else echo "800"; ?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>M E M O R I A L S</b></td></tr></table>
<br>
<?php 
	$date = $_REQUEST['date']; 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		$includefile = "Memorials/${date}/gallery.php";
	} else {
		$includefile = "Memorials/${date}/page_${page}.php";
	}
	include $includefile;
?>