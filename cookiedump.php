<?php
echo 'COOKIE DUMP';
	$cookiename = "MyBigAdventure";
	include 'cookiegetparameters.php';
	if (isset($_COOKIE[$cookiename])) {
		parse_str($_COOKIE[$cookiename], $cookie);
		if (isset($cookie['font'])) echo "FONT: " . $cookie['font']. "<p>";
 		if (isset($cookie['fontsize'])) echo "FONTSIZE: " . $cookie['fontsize']. "<p>";
 		//if (isset($cookie['sound'])) echo "SOUND: " . $cookie['sound']. "<p>";
 		if (isset($cookie['theme'])) echo "THEMEPALETTE: " . $cookie['theme']. "<p>";
 		if (isset($cookie['colorpalette'])) echo "COLORPALETTE: " . $cookie['colorpalette']. "<p>";
 		//if (isset($cookie['commentsortorder'])) echo "COMMENTSORTORDER: " . $cookie['commentsortorder']. "<p>";;
 		//if (isset($cookie['commentdisplaynum'])) echo "COMMENTDISPLAYNUM: " . $cookie['commentdisplaynum']. "<p>";
 		//if (isset($cookie['alertnewfeatures'])) echo "ALERTNEWFEATURES: " . $cookie['alertnewfeatures']. "<p>";
	} else {
		echo "No Cookie is Available!";
	}
?>