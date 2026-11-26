<?php 
	$youremail = trim($_POST['youremail']);
	$message = "Add email " . $youremail . " from the website's email distribution list.";
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= "From: support@mybigadventure.com\r\n";
	mail("jeff@mybigadventure.com", "Add Email Recipient from Email Distribution List", $message, $header);
?>
<table class=ContentBanner width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>O P T - I N&nbsp;&nbsp;&nbsp;F O R&nbsp;&nbsp;&nbsp;N O T I F I C A T I O N&nbsp;&nbsp;&nbsp;E M A I L</b></td></tr></table>
<p>
<center>
<a href="index.php?action=Home">Return to Home Page</a>
</center>
<p>
Your request to have your email added to the website's email distribution list has been received.  Within 24 hours your email address will be added to the list.
<p>
Thank you for your continued interest in the website.  If enjoyable, please share your experiences with the website with family and friends.
<p>
Thank you!
<p>
The MyBigAdventure Team
<p>
&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>