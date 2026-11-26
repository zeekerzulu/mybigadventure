<?php
	if ($commentprocessing) {
	if (isset($datekeyoveride)) {
		$datekey = $datekeyoveride;
	} elseif (isset($_REQUEST['date'])) {
		$datekey = $_REQUEST['date'];
	}
	if (isset($datekey)) {
		if (strlen($datekey) == 10) {
			$datemasterkey = substr($datekey,0,8);
			$dateseqkey = substr($datekey,9,1);
		} else {
			$datemasterkey = $datekey;
			$dateseqkey = 0;
		}
	}
	switch ($searchaction) {
		case 'FetchActionCount':
			include 'commentsearch.php';
			if ($searchcount) {
				if (isset($includesummary)) {
					if (isset($datekey)) {
						echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&datekey=$datekey&includesummary=1&totalcomments=$searchcount&backcount=-1 title='Complete Comment Listing of this Event/Venue/Individual'>Comments ($searchcount)</a>";
					} else {
						echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&includesummary=1&totalcomments=$searchcount&backcount=-1 title='Complete Comment Listing of this Event/Venue/Individual'>Comments ($searchcount)</a>";
					}
				} else {
					if (isset($datekey)) {
						echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&datekey=$datekey&totalcomments=$searchcount&backcount=-1 title='Complete Comment Listing of this Event/Venue/Individual'>Comments ($searchcount)</a>";
					} else {
						echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&totalcomments=$searchcount&backcount=-1 title='Complete Comment Listing of this Event/Venue/Individual'>Comments ($searchcount)</a>";
					}
				}
			} else {
				echo "Comments (0)";
			}
			break;
		case 'FetchDayCount':
			include 'commentsearch.php';
			if ($searchcount) {
				echo "<a href=index.php?action=CommentListDisplay&datekey=$datekey&totalcomments=$searchcount&backcount=-1 title='Complete Comment Listing for the Day'>Comments ($searchcount)</a>";
			} else {
				echo "Comments (0)";
			}
			break;
		case 'FetchDayCounts':
			include 'commentsearch.php';
		case 'FetchWeekCounts':
			$displaypipe = 0;
			for ($commentindex = 0; $commentindex < count($commentcountarray[0]); $commentindex++) {
				if ($datekey == $commentcountarray[0][$commentindex]) {
					$actionkey = $commentcountarray[1][$commentindex];
					if ($actionkey == 'DailyEvents') $actioncomment = 'Travel Log';
					elseif ($actionkey == 'Sites') $actioncomment = 'Sights';
					else $actioncomment = $actionkey;
					$numofcomments = $commentcountarray[2][$commentindex];
					if ($displaypipe) {
						echo " | ";
					} else {
						if (isset($displayinitialpipe)) echo " | ";
						echo "Comments: ";
						$displaypipe = 1;
					}
					$extraparms = '';
					if ($actionkey != 'Pics' && $actionkey != 'Panoramas' && $actionkey != 'Videos') {
						$extraparms = '&nomedia=1';
					}
					if ($actionkey == 'Biking' || $actionkey == 'Hiking' || $actionkey == 'Sites' ||
						$actionkey == 'Communities' || $actionkey == 'Parks' || $actionkey == 'Forests' ||
						$actionkey == 'Monuments' || $actionkey == 'Memorials' || $actionkey == 'Landmarks' ||
						$actionkey == 'Museums') {
						$extraparms = $extraparms . '&includesummary=1';
					}
	  			echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&datekey=$datekey$extraparms&totalcomments=$numofcomments&backcount=-1>$actioncomment ($numofcomments)</a>";
				}
			}
	}
	}
?>