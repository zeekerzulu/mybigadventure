<?php
	if (isset($_REQUEST['date'])) {
		$currdate = $_REQUEST['date'];
	} elseif (isset($commentdate)) {
		if ($commentdate) $currdate = $commentdate;
	}
	if (isset($currdate)) {
		if (strlen($currdate) == 10) $currdate = substr($currdate,0,8);
		include 'navshortcutmap.php';
		if (isset($navshortcutmap[$currdate][1])) {
			$tjparms = "action=TripJournal&daterange=" . $navshortcutmap[$currdate][1] . "&page=" . $navshortcutmap[$currdate][2];
			$caparms = "action=Calendar&date=". $currdate . "&month=" . $navshortcutmap[$currdate][3];
			$stparms = "action=Maps&state=" . $navshortcutmap[$currdate][4];
			if (!isset($indexkey) && isset($_REQUEST['stat']))
				$indexkey = $_REQUEST['stat'];
			if (!isset($indexkey) && isset($_REQUEST['action']))
				$indexkey = $_REQUEST['action'];
			$inparms = "action=StatsIndex&stat=" . $indexkey . "&page=1";
			echo "<span class='NavShortcut'><a href=index.php?$tjparms title='Trip Journal'>Journal</a>";
			if ($action != 'DailyEvents') {
				echo " | <a href=index.php?action=DailyEvents&date=$currdate&page=1 title='Travel Log'>Log</a>";
			}
			if (isset($indexkey) && $action != 'DailyEvents') {
				echo " | <a href=index.php?$inparms title='$indexkey Index'>Index</a>";
			}
			echo " | <a href=index.php?$caparms title='Calendar'>Calendar</a> | <a href=index.php?$stparms title='State Map'>Map</a></span>";
		}
	} elseif (isset($indexkey)) {
		$inparms = "action=StatsIndex&stat=" . $indexkey . "&page=1";
		echo "<span class='NavShortcut'><a href=index.php?$inparms title='$indexkey Index'>Index</a></span>";
	}
	unset($currdate);
	unset($indexkey);
?>