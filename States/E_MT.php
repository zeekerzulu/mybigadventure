<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>E A S T&nbsp;&nbsp;&nbsp;M O N T A N A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/E_MT.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="0,629,64,631,74,610,95,640,90,739,0,739" HREF="index.php?action=Maps&state=ID" TITLE="Idaho">
<AREA SHAPE=POLY COORDS="595,179,798,167,798,484,605,493" HREF="index.php?action=Maps&state=ND" TITLE="North Dakota">
<AREA SHAPE=POLY COORDS="607,494,798,482,798,738,612,739" HREF="index.php?action=Maps&state=SD" TITLE="South Dakota">
<AREA SHAPE=POLY COORDS="97,585,607,589,613,737,90,738" HREF="index.php?action=Maps&state=WY" TITLE="Wyoming">
<AREA SHAPE=POLY COORDS="0,164,212,178,216,589,98,585,95,635,74,609,62,628,0,625" HREF="index.php?action=Maps&state=W_MT" TITLE="West Montana">
</MAP>
