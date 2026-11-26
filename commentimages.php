<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>P E N D I N G&nbsp;&nbsp;&nbsp;C O M M E N T&nbsp;&nbsp;&nbsp;I M A G E S</b></td></tr></table>
<p>
<center>
<?php
	$imagename = $_REQUEST['imagename'];
	$imagecnt = $_REQUEST['imagecnt'];
	for ($index = 1; $index <= $imagecnt; $index++) {
		echo "<img src=Uploads/Images/Small/" . $imagename . "_" . $index . ".jpg>&nbsp;&nbsp;&nbsp;";
	}
?>
<p>
<form name=form action="index.php?action=AdminCommentImagesApproval&imagename=$imagename" method="post">
	<input type="submit" name="submit" value="Approve">
</form>
</center>
