<?php 
	$youremail = trim($_POST['youremail']);
	$message = "Remove email " . $youremail . " from the website's email distribution list.";
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= "From: support@mybigadventure.com\r\n";
	mail("jeff@mybigadventure.com", "Remove Email Recipient from Email Distribution List", $message, $header);
?>
<table class=ContentBanner width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>O P T - O U T&nbsp;&nbsp;&nbsp;O F&nbsp;&nbsp;&nbsp;N O T I F I C A T I O N&nbsp;&nbsp;&nbsp;E M A I L</b></td></tr></table>
<p>
<center>
<a href="index.php?action=Home">Return to Home Page</a>
</center>
<p>
Your request to have your email removed from the website's email distribution list has been received.  Within 24 hours your email address will be removed from the list.
<p>
Thank you for your past interest in the website.  You are always welcome to return at anytime in the future to share in the adventures of my travels.
<p>
The MyBigAdventure Team
<p>
&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>