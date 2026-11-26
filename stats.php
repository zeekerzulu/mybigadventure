<?php 
	$stat = $_REQUEST['stat']; 
	$page = $_REQUEST['page']; 
	switch ($stat) {
		case 'Favorites':
			$subject = $_REQUEST['subject']; 
			switch ($subject) {
				case 'Pictures': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;P I C T U R E S'; break;
				case 'Panoramas': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;P A N O R A M A S'; break;
				case 'Biking': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;B I K I N G'; break;
				case 'Hiking': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;H I K I N G'; break;
				case 'People': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;P E O P L E'; break;
				case 'Sights': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;S I G H T S'; break;
				case 'Communities': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;C O M M U N I T I E S'; break;
				case 'Parks': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;P A R K S'; break;
				case 'Forests': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;F O R E S T S'; break;
				case 'Monuments': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;M O N U M E N T S'; break;
				case 'Memorials': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;M E M O R I A L S'; break;
				case 'Landmarks': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;L A N D M A R K S'; break;
				case 'Museums': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;M U S E U M S'; break;
				case 'Oddities': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;O D D I T I E S'; break;
				case 'Mishaps': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;M I S H A P S'; break;
				case 'Revelations': $statlabel = 'F A V O R I T E&nbsp;&nbsp;&nbsp;R E V E L A T I O N S'; break;
			}
			break;
		case 'States': $statlabel = 'S T A T E S&nbsp;&nbsp;&nbsp;V I S I T E D'; break;
		case 'Driving': $statlabel = 'M I L E S&nbsp;&nbsp;&nbsp;D R I V E N'; break;
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
	if ($stat != 'States') {
		echo "<table id='BannerWide' class='ContentBanner' width='678' cellspacing='0' cellpadding='7'>
			<tr><td width='25%' align=left>";
		if (false && $commentprocessing && $stat != 'Favorites' && $stat != 'Driving') {
			$searchaction = 'FetchActionCount';
			$actionkey = $stat;
			if ($actionkey != 'Family' && $actionkey != 'Friends' && $actionkey != 'People' &&
				$actionkey != 'Oddities' && $actionkey != 'Mishaps' && $actionkey != 'Revelations') {
				$includesummary = 1;
			}
			include 'commentlinks.php';
		}
		echo "</td>
			<td class='BannerText' align='center'><b>$statlabel</b></td>
				<td width='25%' align='right'>";
		include 'navshortcut.php';
    include 'sharecontrol.php';
		echo "</td></tr></table><div id='BannerNarrow'><b>$statlabel</b>";
	include 'sharecontrol.php';
	echo "<br>";
	include 'navshortcut.php';
	echo "</div><p>";
		if (isset($_REQUEST['maplink'])) echo "<center><a href='javascript:history.go(-1)' title='Go back to state map'>Back to Map</a></center><p>";
	}
	include "Statistics/$stat/page_$page.php";
?>