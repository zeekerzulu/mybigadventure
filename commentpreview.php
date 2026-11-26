<html><head><title>My Big Adventure - Comment Preview</title></head>
<body bgcolor=<?php echo $backgroundcolor;?>>
<table class="ContentBanner" width=690 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>C O M M E N T&nbsp;&nbsp;&nbsp;P R E V I E W</b></td></tr></table>
<table width=690 border=0 cellspacing=0 borderwidth=0 cellpadding=7>
	<tr><td class=ContentArea colspan=10 valign=top>
<p>
<?php
	$username = trim($_REQUEST['name']);
	$email = trim($_REQUEST['email']);
	$url = trim($_REQUEST['url']);
	$displayurl = $url;
	if (trim($url) != '') {
		if (stristr($url,'http://') == '') {
			$displayurl = 'http://' . $url;
		}
	}
	$subjectline = trim($_REQUEST['subjectline']);
	$comment = trim($_REQUEST['comment']);
	$comment = str_replace("@@","'",str_replace('^^','"',str_replace('~~','&',$comment)));
	$imagecount = $_REQUEST['imagecount'];
	echo "<hr class=Comment>";
	if ($imagecount > 0) {
		for ($index = 1; $index <= $imagecount; $index++) {
			echo "<a href=javascript:myPicPopup" . $index . "('index.php?action=Popup&name=Graphics/previewtestimage" . $index . ".jpg')><img class=CommentPreview src=" . $rootdirectory . "Graphics/previewtestimage" . $index . "_sm.jpg></a>&nbsp;";
		}
	}
	if ($index > 0) echo "<p>";
	echo "<b>$subjectline</b><p>$comment<p><table width=100%><tr><td>$username";
	if (!empty($email)) echo " | <a href=mailto:$email>Email</a>";
	if (!empty($url)) echo " | <a href=javascript:myPopupCommentator('$displayurl')>URL</a>";
	echo " | " . date('m.d.y - h:s A') . "</td><td align=right>Comment #1000</td></tr></table>";
	echo "<hr class=Comment><p>";
?>
<center><a href="javascript:window.close()">Close</a></center>
</td></tr></table>


