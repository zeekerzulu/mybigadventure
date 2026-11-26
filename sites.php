<table class="ContentBanner" width=<?php if ($picrotator) echo "678"; else echo "800"; ?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>S I G H T S</b></td></tr></table>
<br>
<?php 
	$date = $_REQUEST['date']; 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		$includefile = "Sites/${date}/gallery.php";
	} else {
		$includefile = "Sites/${date}/page_${page}.php";
	}
	include $includefile;
?>