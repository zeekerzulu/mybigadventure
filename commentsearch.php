<?php
	if ($commentprocessing) {
	$db_Table = "Comments";
  include "dbconnector.php"; // DB info
  $link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
     or die("Could not connect : " . mysql_error() . "<P>");
  mysql_select_db("$dbname") or die ("Could not select database<P>");

	switch ($searchaction) {
		case 'FetchActionCount':
			include 'commentrankingmap.php';
			$rank = $rankingmap[$actionkey];
			if (isset($includesummary)) {
				$summaryindex = $actionkey . 'Summary';
				$ranks = $rank . ',' . $rankingmap[$summaryindex];
			}
			if (!isset($datekey)) {
				if (isset($ranks))
  				$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank IN ($ranks)";
				else
  				$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank = $rank";
			} elseif ($dateseqkey == 0) {
				if ($actionkey == 'Parks' && $datemasterkey == 20040805) { // Special Yellowstone Processing
					if (isset($ranks))
						$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank IN ($ranks) AND DateKey BETWEEN 20040805 AND 20040807";
					else
						$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank = $rank AND DateKey BETWEEN 20040805 AND 20040807";
				} else {
					if (isset($ranks))
  					$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank IN ($ranks) AND DateKey = $datemasterkey";
					else
  					$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank = $rank AND DateKey = $datemasterkey";
				}
			} else {
				if (isset($ranks))
  				$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank IN ($ranks) AND DateKey = $datemasterkey AND DateSeq = $dateseqkey";
				else
  				$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND Rank = $rank AND DateKey = $datemasterkey AND DateSeq = $dateseqkey";
			}
  		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
  		$row = mysql_fetch_assoc($result);
			$searchcount = $row["RecCnt"];
  		mysql_free_result($result);
  		mysql_close($link);
			break;
		case 'FetchPageCount':
			$storylink = stristr($searchurl,'~storylink');
			if ($storylink != '') $searchurl = str_replace($storylink,'',$searchurl);
			$ranklink = stristr($searchurl,'~rank');
			if ($ranklink != '') $searchurl = str_replace($ranklink,'',$searchurl);
			$nogallery = stristr($searchurl,'~nogallery');
			if ($nogallery != '') $searchurl = str_replace($nogallery,'',$searchurl);
  		$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND URLKeyCode = '$searchurl'"; 
  		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
  		$row = mysql_fetch_assoc($result);
			$searchcount = $row["RecCnt"];
  		mysql_free_result($result);
  		mysql_close($link);
			break;
		case 'FetchDayCount':
  		$query = "SELECT Count(ID) AS RecCnt FROM $db_Table WHERE SourceCode = $sourcecode AND DateKey = $datekey"; 
  		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
  		$row = mysql_fetch_assoc($result);
			$searchcount = $row["RecCnt"];
  		mysql_free_result($result);
  		mysql_close($link);
			break;
		case 'FetchDayCounts':
		case 'FetchWeekCounts':
			if ($searchaction == 'FetchDayCounts') {
				$query = "SELECT ActionKey, DateKey, COUNT(ID) AS CommentCount FROM Comments WHERE SourceCode = $sourcecode AND DateKey IN (SELECT DateKey FROM Comments WHERE DateKey = $datekey) GROUP BY DateKey, ActionKey";
			} else {
				$searchstartdate = substr($searchdates,0,8);
				$searchenddate = substr($searchdates,9,8);
				$query = "SELECT ActionKey, DateKey, COUNT(ID) AS CommentCount FROM Comments WHERE SourceCode = $sourcecode AND DateKey IN (SELECT DateKey FROM Comments WHERE DateKey BETWEEN $searchstartdate AND $searchenddate) GROUP BY DateKey, ActionKey";
			}
  		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
      $totalrows = mysql_num_rows($result);
			$currow = 0;
			while ($row = mysql_fetch_assoc($result)) {
				$datekey = $row["DateKey"];
				$actionkey = $row["ActionKey"];
				if ($actionkey == "DailyEvents") $priority = 1;
				elseif ($actionkey == "Biking") $priority = 2;
				elseif ($actionkey == "Hiking") $priority = 3;
				elseif ($actionkey == "Family") $priority = 4;
				elseif ($actionkey == "Friends") $priority = 5;
				elseif ($actionkey == "People") $priority = 6;
				elseif ($actionkey == "Sites") $priority = 7;
				elseif ($actionkey == "Communities") $priority = 8;
				elseif ($actionkey == "Parks") $priority = 9;
				elseif ($actionkey == "Forests") $priority = 10;
				elseif ($actionkey == "Monuments") $priority = 11;
				elseif ($actionkey == "Memorials") $priority = 12;
				elseif ($actionkey == "Landmarks") $priority = 13;
				elseif ($actionkey == "Museums") $priority = 14;
				elseif ($actionkey == "Oddities") $priority = 15;
				elseif ($actionkey == "Mishaps") $priority = 16;
				elseif ($actionkey == "Revelations") $priority = 17;
				elseif ($actionkey == "Pics") $priority = 18;
				elseif ($actionkey == "Panoramas") $priority = 19;
				elseif ($actionkey == "Videos") $priority = 20;
				else $priority = 24;
				$commentcount = $row["CommentCount"];
				$commentcountarray[0][$currow] = $datekey;
				$commentcountarray[1][$currow] = $actionkey;
				$commentcountarray[2][$currow] = $commentcount;
				$commentcountarray[3][$currow] = $priority;
				$currow++;
			}
			if (count($commentcountarray[0]) > 1) {
				while (true) {
					$swap = 0;
					for ($commentindex1 = 0; $commentindex1 < count($commentcountarray[0]) - 1; $commentindex1++) {
						if ($commentcountarray[3][$commentindex1] > $commentcountarray[3][$commentindex1 + 1]) {
							$swap = 1;
							$temp = $commentcountarray[0][$commentindex1];
							$commentcountarray[0][$commentindex1] = $commentcountarray[0][$commentindex1 + 1];
							$commentcountarray[0][$commentindex1 + 1] = $temp;
							$temp = $commentcountarray[1][$commentindex1];
							$commentcountarray[1][$commentindex1] = $commentcountarray[1][$commentindex1 + 1];
							$commentcountarray[1][$commentindex1 + 1] = $temp;
							$temp = $commentcountarray[2][$commentindex1];
							$commentcountarray[2][$commentindex1] = $commentcountarray[2][$commentindex1 + 1];
							$commentcountarray[2][$commentindex1 + 1] = $temp;
							$temp = $commentcountarray[3][$commentindex1];
							$commentcountarray[3][$commentindex1] = $commentcountarray[3][$commentindex1 + 1];
							$commentcountarray[3][$commentindex1 + 1] = $temp;
						}
					}
					if (!$swap) break;
				}
			}
  		mysql_free_result($result);
  		mysql_close($link);
			break;
	}
}
?>