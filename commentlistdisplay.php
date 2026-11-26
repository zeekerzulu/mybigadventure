<table class="ContentBanner" width=<?php if ($ads) echo "679"; else echo "802";?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>C O M M E N T S</b></td></tr></table>
<p>
<?php
	$backcount = $_REQUEST['backcount'];
	if (isset($_REQUEST['nosecurity'])) {
		$security = 0;
		$securityparm = "&nosecurity=1";
	} else {
		$security = 1;
		$securityparm = "";
	}
	echo "<p><center><a href=javascript:history.go($backcount)>Exit Comments</a></center><p>";
	$backcount--;
	$totalcomments = 0;
	$actionkey = '';
	$datemasterkey = 0;
	$datekey = 0;
	$dateseqkey = 0;
	if (isset($_REQUEST['totalcomments'])) {
		$totalcomments = $_REQUEST['totalcomments'];
		if (isset($_REQUEST['actionkey'])) {
			$actionkey = $_REQUEST['actionkey'];
		}
		if (isset($_REQUEST['datekey'])) {
			$datekey = $_REQUEST['datekey'];
			if (strlen($datekey) == 10) {
				$datemasterkey = substr($datekey,0,8);
				$dateseqkey = substr($datekey,9,1);
			} else {
				$datemasterkey = $datekey;
				$dateseqkey = 0;
			}
		}
	} elseif (isset($_REQUEST['username'])) {
		$username = $_REQUEST['username'];
		$query = "SELECT Count(ID) AS TotalRecs FROM Comments WHERE SourceCode = $sourcecode AND Name = '$username'";
  	include "dbconnector.php";
  	$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
   		or die("Could not connect : " . mysql_error() . "<P>");
  	mysql_select_db("$dbname") or die ("Could not select database<P>");
 		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
		$row = mysql_fetch_assoc($result);
		$totalcomments = $row["TotalRecs"];
  	mysql_free_result($result);
  	mysql_close($link);
	} elseif (isset($_REQUEST['ID'])) {
		$idsearch = $_REQUEST['ID'];
	}
	$commentsperpage = $cookie->commentdisplaynum;
	if (isset($_REQUEST['currentcomment'])) {
		$currentcomment = $_REQUEST['currentcomment'];
	} else {
		$currentcomment = 0;
	}
	$query = "SELECT ID, ActionKey, DateKey, DateSeq, ActionKey, URLKeyCode, Rank, Page, StoryLink, SummaryIndic, Name, Email, URL, date_format(EntryDateTime,'%m.%d.%y - %h:%i %p') AS EntryDateTime, Comment, SubjectLine, ImageStatus, ImageName, ImageCount FROM Comments WHERE SourceCode = $sourcecode";
	if (isset($username)) {
		$query = $query . " AND Name = '$username'";
	} elseif (isset($idsearch)) {
		$query = $query . " AND ID = $idsearch";
	} elseif ($actionkey == 'Pics' || $actionkey == 'Panoramas' || $actionkey == 'Videos') {
		$query = $query . " AND DateKey = $datemasterkey AND ActionKey = '$actionkey'";
	} elseif (isset($_REQUEST['datekey']) && !isset($_REQUEST['actionkey'])) {
		$query = $query . " AND DateKey = $datemasterkey";
	} elseif (!isset($_REQUEST['datekey']) && isset($_REQUEST['actionkey'])) {
		include 'commentrankingmap.php';
		$rank = $rankingmap[$actionkey];
		if (isset($_REQUEST['includesummary'])) {
			$summaryindex = $actionkey . 'Summary';
			$ranks = $rank . ',' . $rankingmap[$summaryindex];
		}
		if (isset($ranks))
			$query = $query . " AND Rank IN ($ranks)";
		else
			$query = $query . " AND Rank = $rank";
	} else {
		include 'commentrankingmap.php';
		$rank = $rankingmap[$actionkey];
		if (isset($_REQUEST['includesummary'])) {
			$summaryindex = $actionkey . 'Summary';
			$ranks = $rank . ',' . $rankingmap[$summaryindex];
		}
		if ($dateseqkey != 0) {
			if (isset($ranks))
				$query = $query . " AND Rank IN ($ranks)";
			else
				$query = $query . " AND Rank = $rank";
			$query = $query . " AND DateKey = $datemasterkey AND DateSeq = $dateseqkey";
		} else {
			if ($actionkey == 'Parks' && $datekey == 20040805) { // Special Yellowstone Processing
				if (isset($ranks))
					$query = $query . " AND Rank IN ($ranks)";
				else
					$query = $query . " AND Rank = $rank";
				$query = $query . " AND DateKey BETWEEN 20040805 AND 20040807";
			} elseif (isset($actionkey)) {
				if (isset($ranks))
					$query = $query . " AND Rank IN ($ranks)";
				else
					$query = $query = $query . " AND Rank = $rank";
				$query = $query . " AND DateKey = $datemasterkey";
			} else {
				$query = $query . " AND DateKey = $datemasterkey";
			}
		}
	}
	if (isset($_REQUEST['nomedia'])) $query = $query . " AND MediaIndic = 0";
	$query = $query . " ORDER BY DateKey ASC, DateSeq ASC, Rank ASC, SummaryIndic DESC, Page ASC, MediaIndic ASC, URLKeyCode ASC, ID $cookie->commentsortorder LIMIT $currentcomment, $commentsperpage";

  include "dbconnector.php";
  $link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
   	or die("Could not connect : " . mysql_error() . "<P>");
  mysql_select_db("$dbname") or die ("Could not select database<P>");

 	$result = mysql_query($query) or die ("Query failed : " . mysql_error());
  $totalrows = mysql_num_rows($result);
	$currow = 0;
	$prevsubtitle = '';
	$displayreverse = 0;

	if (isset($username) && $currentcomment == 0) {
		if ($totalcomments == 0)
			echo "<p>Sorry, no comments were found for contributor '$username'.<p>";
		else
			echo "<p>A grand total of $totalcomments comments have been submitted by contributor '$username'.  All comments are listed chronologically as they appear within the website.<p>";
	}
	include 'commentmap.php';
  while ($row = mysql_fetch_assoc($result)) {
		$currow++;
		$id = $row["ID"];
		$datemasterkey = $row["DateKey"];
		$dateseqkey = $row["DateSeq"];
		if (isset($username)) {
			if ($dateseqkey == 0)
				$datekey = $datemasterkey;
			else
				$datekey = $datemasterkey . '.' . $dateseqkey;
		}			
		$actionkey2 = $row["ActionKey"];
		$rank = $row["Rank"];
		$pagenum = $row["Page"];
		$summaryindic = $row["SummaryIndic"];
		$username = $row["Name"];
		$urlkeycode = $row["URLKeyCode"];
		$storylink = $row["StoryLink"];
		$email = $row["Email"];
		$datetime = $row["EntryDateTime"];
		$url = $row["URL"];
		$subjectline = $row["SubjectLine"];
		$comment = $row["Comment"];
		$comment = str_replace(chr(10),"<br>",$comment);
		$comment = str_replace(chr(92),"",$comment);
		$imagestatus = $row["ImageStatus"];
		$imagename = $row["ImageName"];
		$imagecount = $row["ImageCount"];
		unset($subject);
		parse_str(str_replace('~','&',$urlkeycode));
		if ($actionkey2 != 'Pics' && $actionkey2 != 'Panoramas' && $actionkey2 != 'Videos') {
			switch ($actionkey2) {
				case 'Bio': $heading = 'Biking Bio'; break;
				case 'TripPreparation': $heading = 'Trip Preparation'; break;
				case 'BuildSeries': $heading = 'Build Series'; break;
				case 'TripResources': $heading = 'Trip Resources'; break;
				case 'Calendar': $heading = 'Calendar - ' . $month; break;
				case 'Maps': $heading = 'Map - ' . $state; break;
				case 'AdventurePreview': $heading = 'Adventure Preview'; break;
				case 'Favorites':
					if ($subject == 'Pictures' || $subject == 'Panoramas') {
						$heading = 'Favorite ' . $subject . ' Summary';
					} else {
						$heading = 'Favorite ' . $subject;
						if ($subject == 'Sights') $indexkey = 'Sites'; else $indexkey = $subject;
					}
					break;
				case 'FavoritePictures': $heading = 'Favorite Pictures - Page #' . $page; break;
				case 'FavoritePanoramas': $heading = 'Favorite Panoramas - Page #' . $page; break;
				case 'DailyEvents': $heading = 'Travel Log - Page #' . $page; break;
				case 'Biking':
					if ($summaryindic == 1)
						$heading = 'Bike #' . $page . ' Summary';
					else
						$heading = 'Bike #' . $commentmap["Biking$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Hiking':
					if ($summaryindic == 1)
						$heading = 'Hike #' . $page . ' Summary';
					else
						$heading = 'Hike #' . $commentmap["Hiking$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Family':
				case 'Friends':
				case 'People':
				case 'Oddities':
				case 'Mishaps':
				case 'Revelations':
					$heading = $actionkey2 . " - Page #" . $page;
					$indexkey = $actionkey2;
					break;
				case 'Sites':
					if ($summaryindic == 1) {
						$heading = 'Sight #' . $page . ' Summary';
					} elseif ($datemasterkey == 20040926) {  // Winter Olympic Sports Complex
						if ($dateseqkey == 1) $heading = 'Sight #13.1 - Page #' . $page;
						elseif ($dateseqkey == 2) $heading = 'Sight #13.2 - Page #' . $page;
						else $heading = 'Sight #13.3 - Page #' . $page;
					} else {
						$heading = 'Sight #' . $commentmap["Sites$datekey"] . ' - Page #' . $page;
					}
					$indexkey = $actionkey2;
					break;
				case 'Communities':
					if ($summaryindic == 1)
						$heading = 'Community #' . $page . ' Summary';
					else
						$heading = 'Community #' . $commentmap["Communities$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Parks':
					if ($summaryindic == 1) {
						$heading = 'Parks #' . $page . ' Summary';
					} else {
						if ($datemasterkey == 20040805) {  // Yellowstone National Park
							$heading = 'Park #4.' . $dateseqkey . ' - Page #' . $page;
						} elseif ($datemasterkey == 20040806) {
							if ($dateseqkey == 1) $heading = 'Park #4.3 - Page #' . $page;
							elseif ($dateseqkey == 2) $heading = 'Park #4.4 - Page #' . $page;
							elseif ($dateseqkey == 3) $heading = 'Park #4.5 - Page #' . $page;
							else $heading = 'Park #4.6 - Page #' . $page;
						} elseif ($datemasterkey == 20040807) {
							$heading = 'Park #4.7 - Page #' . $page;
						} else {
							$heading = 'Parks #' . $commentmap["Parks$datekey"] . ' - Page #' . $page;
						}
					}
					$indexkey = $actionkey2;
					break;
				case 'Forests':
					if ($summaryindic == 1)
						$heading = 'Forest #' . $page . ' Summary';
					else
						$heading = 'Forest #' . $commentmap["Forests$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Monuments':
					if ($summaryindic == 1)
						$heading = 'Monument #' . $page . ' Summary';
					else
						$heading = 'Monument #' . $commentmap["Monuments$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Memorials':
					if ($summaryindic == 1)
						$heading = 'Memorial #' . $page . ' Summary';
					else
						$heading = 'Memorial #' . $commentmap["Memorials$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Landmarks':
					if ($summaryindic == 1)
						$heading = 'Landmark #' . $page . ' Summary';
					else
						$heading = 'Landmark #' . $commentmap["Landmarks$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'Museums':
					if ($summaryindic == 1)
						$heading = 'Museum #' . $page . ' Summary';
					else
						$heading = 'Museum #' . $commentmap["Museums$datekey"] . ' - Page #' . $page;
					$indexkey = $actionkey2;
					break;
				case 'AdventureLog': $heading = 'Adventure Log - Page #' . $page; break;
				default: $heading = $actionkey2;
			}
			if (stristr($heading,'Page #gallery') != '') {
				$heading = str_replace(stristr($heading,'Page #gallery'),'Gallery',$heading);
			}
			$subtitle = $heading;
		} else {
			$picname = stristr($urlkeycode,'Pics~name=');
			if ($picname != '') {
				if (stristr($picname,"/") != '') {
					$picname = substr($picname,strrpos($picname,'/')+1);
					if (stristr($picname,"~") != '') {
						$picname = substr($picname,0,strpos($picname,"~"));
					}
				} else {
					$picname = substr(str_replace(stristr($picname,'~title'),'',$picname),10);
				}
				$subtitle = "Picture $picname";
			} else {
				$videoname = stristr($urlkeycode,'Videos~name=');
				if ($videoname != '') {
					$videoname = substr($videoname,strrpos($videoname,'/')+1);
					$subtitle = "Video $videoname";
				} else {
					$panoramaname = stristr($urlkeycode,'Panoramas~name=');
					if ($panoramaname != '') {
						$panoramaname = substr($panoramaname,strrpos($panoramaname,'/')+1);
						if (stristr($panoramaname,"~") != '') {
							$panoramaname = substr($panoramaname,0,strpos($panoramaname,"~"));
						}
						$subtitle = "Panorama $panoramaname";
					} else {
						$subtitle = $actionkey2;
					}
				}
			}
			$urlkeycode = $urlkeycode . '&rank=' . $rank . '&date=' . $datemasterkey . '.' . $dateseqkey . '&page=' . $pagenum;
		}
		$urlkeycode = str_replace('~','&',$urlkeycode);
		if ($subtitle != $prevsubtitle) {
			$sameheadingcnt = 1;
			if ($datemasterkey != 0) {
				$displaydate = substr($datemasterkey,4,2) . "." . substr($datemasterkey,6,2) . "." . substr($datemasterkey,2,2);
			} else {
				$displaydate = '';
			}
			if ($storylink != '') $urlkeycode = $urlkeycode . '&storylink=' . $storylink;
			$urlkeycode = str_replace('&back=1','',$urlkeycode);
			$urlkeycode = $urlkeycode . '&nogallery=1';
			echo "<table class=SubContentBanner width=";
			if ($ads) echo "679"; else echo "802";
			echo " cellspacing=0 cellpadding=7>
				<tr><td class=BannerText width=40% align=left>
					<a href='index.php?action=$urlkeycode' title='Go to the webpage behind all the comments'><b>$subtitle</b></a></td>
					<td align=center>$displaydate</td>
					<td class=BannerText width=40% align=right>";
			$commentdate = $datemasterkey;
			include 'navshortcut.php';
			echo "</td></tr></table>";
			$prevsubtitle = $subtitle;
			$displayhr = 0;
		} else {
			$sameheadingcnt++;
			if ($sameheadingcnt > 1) $displayreverse = 1;
			$displayhr = 1;
		}
		if ($displayhr) echo "<hr class=Comment>";
		echo "<table cellpadding=3 cellspacing=3><tr><td>&nbsp;<br>";
		if ($imagestatus == 'A') {
			if (!$security) echo "ROOT IMAGE NAME: $imagename<p>";
			for ($index = 1; $index <= $imagecount; $index++) {
				echo "<a href=javascript:myPicPopup" . $index . "('index.php?action=Popup&name=" . $homedirectory . "Uploads/Images/" . $imagename . "_" . $index . ".jpg')><img src=Uploads/Images/Small/" . $imagename . "_" . $index . ".jpg></a>";
				if ($index < $imagecount) echo "&nbsp;"; else echo "<p>";
			}
		} elseif ($imagestatus == 'P') {
			echo "<b>*** Images Pending Approval ***</b><p>";
		} elseif ($imagestatus == 'R') {
			echo "<b>*** Images Removed ***</b><p>";
		}
		if (trim($subjectline) != '') {
			echo "<b>$subjectline</b>";
		}
		echo "<p>$comment<p><table width=";
		if ($ads) echo "665"; else echo "790";
		echo " cellspacing=0 cellpadding=0><tr><td>";
		if (isset($_REQUEST['username'])) {
			echo "$username";
		} else {
			echo "<a href='index.php?action=CommentListDisplay&username=$username&backcount=$backcount' title='Display all comments submitted by contributor: $username'>$username</a>";
		}
		if (!empty($email)) echo " | <a href=mailto:$email>Email</a>";
		if (!empty($url)) echo " | <a href=javascript:myPopupCommentator('$url')>URL</a>";
		echo " | $datetime</td><td align=right>Comment #$id<br>&nbsp;</td></tr></table></td></tr></table>";
	}
	echo "<center>";
	if ($totalcomments) {
		if ($currentcomment == 0) {
			$currentpage = 1;
		} else {
			$currentpage = intval($currentcomment/$commentsperpage) + 1;
		}
		$totalpages = ceil($totalcomments/$commentsperpage);
		$urlparms = '';
		if (isset($_REQUEST['username'])) {
			$urlparms = "username=$username";
		} else {
			if (isset($_REQUEST['actionkey'])) {
				$urlparms = "actionkey=$actionkey";
			}
			if (isset($_REQUEST['datekey'])) {
				if ($urlparms != '') $urlparms = $urlparms . "&";
				$urlparms = $urlparms . "datekey=$datekey";
			}
			if (isset($_REQUEST['includesummary'])) {
				if ($urlparms != '') $urlparms = $urlparms . "&";
				$urlparms = $urlparms . "includesummary=1";
			}
		}
		echo "<hr class=Comment><b>Page</b>";
		for ($index = 1; $index <= $totalpages; $index++) {
			if ($index == $currentpage) {
				echo "<b> $index</b>";
			} else {
				$newcurrentcomment = $currentcomment + ($commentsperpage * ($index - $currentpage));
				echo " <a href=index.php?action=CommentListDisplay&$urlparms&currentcomment=$newcurrentcomment&totalcomments=$totalcomments&backcount=$backcount$securityparm>$index</a>";
			}
		}
		if ($displayreverse) {
			echo "<hr class=Comment><a href=index.php?action=CommentListDisplay&$urlparms&currentcomment=$currentcomment&totalcomments=$totalcomments&backcount=$backcount&reversesortorder=1$securityparm title='Reverse order of comments within each comment heading'>Reverse Order</a>";
		}
	}
	if (isset($_REQUEST['ID'])) echo "<hr class=Comment>";
	echo "</center>";
  mysql_free_result($result);
  mysql_close($link);
?>