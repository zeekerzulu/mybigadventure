<?php
	for ($index=1; $index<=count($fileattachmentmap); $index++) {
		$fileatt_type = $fileattachmentmap[$index][1];
		$fileatt_name = $fileattachmentmap[$index][2];
		$fileatt = $fileattachmentmap[$index][3];
		$file = fopen($fileatt,'rb');
		$data = fread($file,filesize($fileatt));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$emailmessage .= "Content-Type: {$fileatt_type};\r\n" .
		"name=\"{$fileatt_name}\";\r\n" .
		"Content-Disposition: attachment;\r\n" .
		"filename=\"{$fileatt_name}\";\r\n" .
		"Content-Transfer-Encoding: base64\r\n" .
		$data . "\r\n";
		$emailmessage .= "$mimeboundary\r\n";
		unset($data);
		unset($file);
		unset($fileatt);
		unset($fileatt_type);
		unset($fileatt_name);
	}
?>
