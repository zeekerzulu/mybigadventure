<?php
		$message = "<html><head></head><body>&nbsp;<p>Click <a href=http://$websiteurl/index.php?action=AdminCommentImagesDisplay&imagename=$imagename&homedirectory=$homedirectory>here</a> to see the images in need of approval...<p><p>Below is the subject and comment text associated with the images:<p>$subjectline<p>$comment</body></html>";
		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$header .= "From: jeff@mybigadventure.com\r\n";
		$header .= "Reply-To: jeff@mybigadventure.com\r\n";
		mail('drilling@aracnet.com;zeekerzulu@yahoo.com', 'New Comment Images Needing Approval', $message, $header);
?>
