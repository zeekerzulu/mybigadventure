<table class="ContentBanner" width=<?php echo $width?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>P I C T U R E S</b></td></tr></table>
<p><center>
<p>
<?php
	if (empty($_REQUEST['noback'])) {
		echo "<a href=javascript:history.go(-1)>Back</a>";
	} elseif (isset($_REQUEST['homepage'])) {
		echo "<a href=index.php?action=AdventureLog&page=1>Homepage</a>";
	}
	echo "<p>";
	$name = $_REQUEST['name'];
	echo "<p><img src=Pics/$name>";
?>
</center>