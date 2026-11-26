<?php
	$trackFile = 'Mgmt/track.txt';
	$ip = $_SERVER['REMOTE_ADDR'];
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$referer = $_SERVER['HTTP_REFERER'];
	$querystring = $_SERVER['QUERY_STRING'];
	if(is_file($trackFile)){
		$fp = @fopen($trackFile, "a") or die("Couldn't open file");
		$outputstring = $ip . " - " . date('m/d/y h:i:sa') . "\n" . $agent . "\n" . $querystring . "\n" . $referer . "\n\n";
		fwrite ($fp, $outputstring);
		fclose($fp);
	}
?>