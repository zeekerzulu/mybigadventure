<?php
	$date = $_REQUEST['date']; 
	$page = $_REQUEST['page'];
	switch ($action) {
		case 'Biking': $statlabel = 'B I K I N G'; break;
		case 'Hiking': $statlabel = 'H I K I N G'; break;
		case 'Sites': $statlabel = 'S I G H T S'; break;
		case 'Communities': $statlabel = 'C O M M U N I T I E S'; break;
		case 'Parks': $statlabel = 'P A R K S'; break;
		case 'Forests': $statlabel = 'F O R E S T S'; break;
		case 'Monuments': $statlabel = 'M O N U M E N T S'; break;
		case 'Memorials': $statlabel = 'M E M O R I A L S'; break;
		case 'Landmarks': $statlabel = 'L A N D M A R K S'; break;
		case 'Museums': $statlabel = 'M U S E U M S'; break;
		default: $statlabel = 'U N K O W N'; break;
	}
	echo "<table id='BannerWide' class='ContentBanner' width=";
	if ($picrotator) echo "678"; else echo "800";
	echo " cellspacing=0 cellpadding=7><tr><td width=25% align=left>";
	if ($commentprocessing) {
		$searchaction = 'FetchActionCount';
		$actionkey = $action;
		$datekey = $date;
		include 'commentlinks.php';
	}
	echo "</td><td class=BannerText align=center><b>$statlabel</b></td><td width=25% align=right>";
	include 'navshortcut.php';
	include 'sharecontrol.php';
	echo "</td></tr></table><div id='BannerNarrow'><b>$statlabel</b>";
	include 'sharecontrol.php';
	echo "<br>";
	include 'navshortcut.php';
	echo "</div><p>";
	$page = strtolower($page);
	if ($page == 'gallery') {
		$includefile = "$action/${date}/gallery.php";
	} else {
		$includefile = "$action/${date}/page_${page}.php";
	}
	if ($cookie['theme'] == 'theme1') {
   	echo "<div class='LinkSensitive'>" ;
	  include $includefile;
	  echo "</div>" ;
	} else {
	  include $includefile;
	}
?>