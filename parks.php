<table class="ContentBanner" width=<?php if ($picrotator) echo "678"; else echo "800"; ?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>P A R K S</b></td></tr></table>
<br>
<?php 
	$date = $_REQUEST['date']; 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		$includefile = "Parks/${date}/gallery.php";
	} else {
		$includefile = "Parks/${date}/page_${page}.php";
	}
	include $includefile;
?>