<?php 
	$stat = $_REQUEST['stat'];
	switch ($stat) { 
		case 'Favorites': $statlabel = 'F A V O R I T E S'; break;
		case 'PostTripFun': $statlabel = 'P O S T - T R I P&nbsp;&nbsp;&nbsp;F U N'; break;
		case 'States': $statlabel = 'S T A T E S&nbsp;&nbsp;&nbsp;V I S I T E D'; break;
		case 'Driving': $statlabel = 'D R I V I N G'; break;
		case 'Biking': $statlabel = 'B I K I N G'; break;
		case 'Hiking': $statlabel = 'H I K I N G'; break;
		case 'Family': $statlabel = 'F A M I L Y'; break;
		case 'Friends': $statlabel = 'F R I E N D S'; break;
		case 'People': $statlabel = 'P E O P L E'; break;
		case 'Sites': $statlabel = 'S I G H T S'; break;
		case 'Communities': $statlabel = 'C O M M U N I T I E S'; break;
		case 'Parks': $statlabel = 'P A R K S'; break;
		case 'Forests': $statlabel = 'F O R E S T S'; break;
		case 'Monuments': $statlabel = 'M O N U M E N T S'; break;
		case 'Memorials': $statlabel = 'M E M O R I A L S'; break;
		case 'Landmarks': $statlabel = 'L A N D M A R K S'; break;
		case 'Museums': $statlabel = 'M U S E U M S'; break;
		case 'Oddities': $statlabel = 'O D D I T I E S'; break;
		case 'Mishaps': $statlabel = 'M I S H A P S'; break;
		case 'Revelations': $statlabel = 'R E V E L A T I O N S'; break;
	}
	// DEPRICATED
	if (false) {
  	echo "<table class='ContentBanner' width='808' cellspacing='0' cellpadding='7'>
  		<tr><td width='25%' align=left>";
  	if ($commentprocessing && !isset($_REQUEST['nocomments']) && $stat != 'Favorites' && $stat != 'Driving' && $stat != 'States' && $stat != 'PostTripFun') {
  		$searchaction = 'FetchActionCount';
  		$actionkey = $stat;
  		if ($actionkey == 'Biking' || $actionkey == 'Hiking' || $actionkey == 'Sites' ||
  				$actionkey == 'Communities' || $actionkey == 'Parks' || $actionkey == 'Forests' ||
  				$actionkey == 'Monuments' || $actionkey == 'Memorials' || $actionkey == 'Landmarks' ||
  				$actionkey == 'Museums') {
  			$includesummary = 1;
  		}
  		include 'commentlinks.php';
  	}
  	echo "&nbsp;</td>
  		<td class='BannerText' align='center'><b>$statlabel</b></td>
  		<td width='25%'>&nbsp;</td></tr></table>";
	}
	echo "<div class='BannerSimple'><b>$statlabel</b>";
	include 'sharecontrol.php';
	echo "</div>";
	$stat = $_REQUEST['stat']; 
	$page = $_REQUEST['page']; 
	include "Statistics/$stat/index_${page}.php";
?>