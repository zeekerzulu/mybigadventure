<table class='ContentBanner' width='808' cellspacing='0' cellpadding='7'>
	<tr><td class='BannerText' align='center'><b>A D V E N T U R E&nbsp;&nbsp;&nbsp;P R E V I E W</b><?php include 'sharecontrol.php' ?></td></tr></table>
<?php
	if (empty($_REQUEST['nointro'])) {
		echo "<p>Here's a quick and easy way to randomly navigate the website. The Adventure Preview feature proves three ways to navigate. Category links jump to summary listings related to the category and from there you dive into the details. State links jump to the associated state where the activity, event, etc. occurred. Lastly, the Adventure Link will take you to a specific activity, event, place, sight, or person.<p>If you wish to generate a new listing simply click on the Try Again button.";
	}
	echo "<center><p><table class='AdventureLinks'><tr><td><b>CATEGORY</b></td><td><b>STATE</b></td><td><b>ADVENTURE LINK</b><td></tr>";
	include 'adventurepreviewengine.php';
?>
<tr><td></td><td colspan=2><a class="ButtonLink" href="index.php?action=AdventurePreview&nointro=1"><div class='SubmitButton TryAgain'>Try Again</div></a></td></tr></table></center>