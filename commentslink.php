<?php
	if ($searchaction == 'FetchActionCount') {
		include 'commentsearch.php';
		if ($searchcount) {
		if (!isset($nopipe)) echo " | ";
		echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&datekey=$datekey>Comments ($searchcount)</a>";
		} else {
			if (!isset($nopipe)) echo " | ";
			echo "Comments (0)";
		}
	} else {
		$displaypipe = 0;
		for ($commentindex = 0; $commentindex < count($commentcountarray[0]); $commentindex++) {
			if ($datekey == $commentcountarray[0][$commentindex]) {
				$actionkey = $commentcountarray[1][$commentindex];
				if ($actionkey == 'DailyEvents') $actioncomment = 'Travel Log';
				elseif ($actionkey == 'Sites') $actioncomment = 'Sight';
				elseif ($actionkey == 'Parks') $actioncomment = 'Park';
				elseif ($actionkey == 'Communities') $actioncomment = 'Community';
				else $actioncomment = $actionkey;
				$numofcomments = $commentcountarray[2][$commentindex];
				if ($displaypipe) {
					echo " | ";
				} else {
					echo "Comments: ";
					$displaypipe = 1;
				}
	  		echo "<a href=index.php?action=CommentListDisplay&actionkey=$actionkey&datekey=$datekey>$actioncomment ($numofcomments)</a>";
			}
		}
		//sort($commentcountarray);
	}
?>