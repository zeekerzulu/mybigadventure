<?php
	$websiteurl = "www.mybigadventure.com";
	$homedirectory = "ankesh/";
	$querystring = $_POST['querystring'];
	$htmlcontent = $_POST['htmlcontent'];
	$htmlcontent = str_replace('\"','"',$htmlcontent);
	$htmlcontent = str_replace("\'","'",$htmlcontent);
	parse_str($querystring);
	if ($page == 'gallery') {
		if (isset($area))
			$filename = 'AdventureLog/' . $area . '/gallery.php';
		else
			$filename = 'AdventureLog/gallery.php';
	} else {
		if (isset($area))
			$filename = 'AdventureLog/' . $area . '/page_' . $page . '.php';
		else
			$filename = 'AdventureLog/page_' . $page . '.php';
	}
	if (is_writable($filename)) {
		if (!$handle = fopen($filename, 'w')) {
			echo "Cannot open file ($filename)";
			exit;
		}
		if (fwrite($handle, $htmlcontent) === FALSE) {
			echo "Cannot write to file ($filename)";
			exit;
		}
		fclose($handle);
		header("Location: http://" . $websiteurl . "/" . $homedirectory . "index.php?" . $querystring);
	} else {
		echo "The file $filename is not writable";
	}
?>