<?php 
	$page = $_REQUEST['page'];
	if ($page == 'gallery') {
		if (isset($area))
			$includefile = "AdventureLog/${area}/gallery.php";
		else
			$includefile = "AdventureLog/gallery.php";
	} else {
		if (isset($area))
			$includefile = "AdventureLog/${area}/page_${page}.php";
		else
			$includefile = "AdventureLog/page_${page}.php";
	}
	include $includefile;
?>