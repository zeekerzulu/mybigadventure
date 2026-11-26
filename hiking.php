<table class="ContentBanner" width=<?php if ($picrotator) echo "678"; else echo "808"; ?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>H I K I N G</b></td></tr></table>
<br>
<?php 
	$date = $_REQUEST['date']; 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		$includefile = "Hiking/${date}/gallery.php";
	} else {
		$includefile = "Hiking/${date}/page_${page}.php";
	}
	include $includefile;
?>