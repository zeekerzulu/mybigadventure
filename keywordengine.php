<?php
include 'keyworddefaults.php';
$title = $action;
$keywordlist = $defaultkeywordlist;
$keywordindex = '';
$summaryindic = 0;
$description = '';
if (isset($_REQUEST['stat']) && isset($_REQUEST['date'])) {
	$keywordindex = $_REQUEST['stat'] . $_REQUEST['date'];
	$summaryindic = 1;
	$venue = $_REQUEST['stat'];
} elseif (isset($_REQUEST['action']) && isset($_REQUEST['date'])) {
	if ($_REQUEST['action'] == 'Calendar') {
		$keywordindex = $_REQUEST['action'];
		$venue = "";
	} else {
		$keywordindex = $_REQUEST['action'] . $_REQUEST['date'];
		$venue = $_REQUEST['action'];
	}
} elseif (isset($_REQUEST['action'])) {
	$keywordindex = $_REQUEST['action'];
	if ($_REQUEST['state']) {
	  $keywordindex = $keywordindex . $_REQUEST['state'];
	}	
	$venue = "";
}
if ($keywordindex != '') {
	include 'keywordmap.php';
	if (!empty($keywordmap[$keywordindex])) {
		switch ($venue) {
			case 'Sites': $venue = 'Sight'; break;
			case 'Communities': $venue = 'Community'; break;
			case 'Parks': $venue = 'Park'; break;
			case 'Forests': $venue = 'Forest'; break;
			case 'Monuments': $venue = 'Monument'; break;
			case 'Memorials': $venue = 'Memorial'; break;
			case 'Landmarks': $venue = 'Landmark'; break;
			case 'Museums': $venue = 'Museum'; break;
		}
		$keywordlist = $keywordmap[$keywordindex][2];
		$info = explode('~',$keywordmap[$keywordindex][1]);
		$title = $info[0];
		$description = $info[1];
		if ($keywordmap[$keywordindex][3]) {
  		$image = $keywordmap[$keywordindex][3];
    }
  	if ($venue == 'Oddities' || $venue == 'Mishaps' || $venue == 'Revelations') {
  	  $title = $venue . ' - ' . $title ;
		} else if ($venue != '' && $venue != 'Family' && $venue != 'Friends' && $venue != 'People') {
			if ($summaryindic) {
				$title = $title . " - $venue Summary";
			} else {
				$title = $title . " - $venue Detail";
			}
		} else {
			if ($title == 'Trip Journal') {
				$titlepage = $_REQUEST['page'];
				$title = 'Trip Journal - Week #' . $titlepage;
			} elseif ($title == 'Calendar') {
				$titlemonth = $_REQUEST['month'];
				if (strrpos($titlemonth,'#')) $titlemonth = substr($titlemonth,strrpos($titlemonth,'#')-1);
				$title = 'Calendar - ' . $titlemonth;
			}
		}
	}
}
?>