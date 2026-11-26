<table class="ContentBanner" width=<?php if ($picrotator) echo "678"; else echo "800"; ?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>C O M M U N I T I E S</b></td></tr></table>
<br>
<?php 
	$date = $_REQUEST['date']; 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		$includefile = "Communities/${date}/gallery.php";
	} else {
		$includefile = "Communities/${date}/page_${page}.php";
	}
	include $includefile;
?>