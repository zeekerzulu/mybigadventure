<?php 
		$youremail = trim($_POST['youremail']);
		$pagelink = trim($_POST['pagelink']);
		$pagelink = $pagelink . "&noback=1";
		if ($rootdirectory != '')
			$emailpagelink = $pagelink . "&homepage=1";
		else
			$emailpagelink = $pagelink;
		$friendemail = trim($_POST['friendemail']);
		$subjectline = trim($_POST['subjectline']);
		$message = trim($_POST['message']);
		$message = str_replace(chr(10),"<br>",$message);
		$message = str_replace(chr(92),"",$message);
		$message = "<html><body>" . $message . "<p><p><hr><p><p>Welcome to MyBigAdventure&trade;<p>Your friend <a href='mailto:" . $youremail . "'>" . $youremail . "</a> wishes to bring to your attention the following webpage: <p><p><a href='" . $emailpagelink . "'>" . $emailpagelink . "</a>";
		if ($homedirectory != '') {
			include $homedirectory . 'sendpagelinkcopy.php';
		} else {
			$message = $message . "<p><p>If you enjoy the website and wish to browse around, here are some useful links:
			<p>
			Homepage: <a href='http://$websiteurl'>http://$websiteurl</a>
			<p>
			Calendar: <a href='http://$websiteurl/index.php?action=Calendar&month=July'>http://$websiteurl/index.php?action=Calendar&month=July</a>
			<p>
			Trip Journal: <a href='http://$websiteurl/index.php?action=Journal&page=1&daterange=20040708-20040711'>http://$websiteurl/index.php?action=Journal&page=1&daterange=20040708-20040711</a>
			<p>
			Guest Book: <a href='http://$websiteurl/index.php?action=GuestBookList'>http://$websiteurl/index.php?action=GuestBookList</a>
			<p>
			Note: Please feel free to share the website with your family and friends.
			<p>
			- The MyBigAdventure&trade; Team</body></html>";
		}
		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$header .= "From: $youremail\r\n";
		$header .= "CC: $youremail\r\n";
		$header .= "Reply-To: $youremail\r\n";
		mail($friendemail, $subjectline, $message, $header);
		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$header .= "From: jeff@$websiteemail\r\n";
		$header .= "Reply-To: $youremail\r\n";
		mail('drilling@aracnet.com', 'Send Page Notification', $message, $header);
?>
<table class="ContentBanner" width=<?php if ($rootdirectory == '') echo "808"; else echo "802"?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>S E N D&nbsp;&nbsp;&nbsp;P A G E&nbsp;&nbsp;&nbsp;T O&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;F R I E N D</b></td></tr></table>
<br>
<center>
Your email has been successfully submitted.
<p>
Thank you for sharing the website with your family and friends.
<p>
<p>
<a href="javascript:history.go(-2)">Return to Current Page</a>
<?php
	if ($rootdirectory != '')
		echo "&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>";
?>
</center>