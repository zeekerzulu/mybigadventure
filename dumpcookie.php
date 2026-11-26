<?php
	$cookiename = "MyBigAdventure";
	if (isset($_COOKIE[$cookiename])) {
		parse_str($_COOKIE[$cookiename]);
		if (isset($font)) echo "FONT: $font<p>";
 		if (isset($fontsize)) echo "FONTSIZE: $fontsize<p>";
 		if (isset($fontcolor)) echo "FONTCOLOR: $fontcolor<p>";
 		if (isset($sound)) echo "SOUND: $sound<p>";
 		if (isset($themepalette)) echo "THEMEPALETTE: $themepalette<p>";
 		if (isset($commentsortorder)) echo "COMMENTSORTORDER: $commentsortorder<p>";;
 		if (isset($commentdisplaynum)) echo "COMMENTDISPLAYNUM: $commentdisplaynum<p>";
 		if (isset($alertnewfeatures)) echo "ALERTNEWFEATURES: $alertnewfeatures<p>";
	} else {
		echo "No Cookie is Available!";
	}
?>