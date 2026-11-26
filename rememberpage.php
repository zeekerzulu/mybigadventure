<?php
	$cookie['rememberpageurl'] = str_replace('&','~',$_SERVER['HTTP_REFERER']);
	include 'cookiesetparameters.php';
?>
<table class="ContentBanner" width=802 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>R E M E M B E R&nbsp;&nbsp;&nbsp;P A G E</b><?php include 'sharecontrol.php' ?></td></tr></table>
<p>
<center>
Your last page has been remembered by the website.
<p>
If you return to the website via the Home Page (<a href="javascript:myPopup1('http://www.mybigadventure.com<?php if ($sourcecode != 1) echo '/' . $homedirectory?>')">http://www.mybigadventure.com<?php if ($sourcecode != 1) echo '/' . $homedirectory?></a>),
<br>
MyBigAdventure will automatically redirect you to the remembered page.
<p>
If you wish to discontinue using the remember page function,
<br>
click <a href="index.php?action=RememberPageCancel">here</a> and the website will forget the page.
<p>
<b>Note:</b> To use this function, cookies are required.
<br>
You can turn cookies on in your browser preferences.
</center>