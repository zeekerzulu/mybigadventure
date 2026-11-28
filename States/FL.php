<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>F L O R I D A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/FL.gif" usemap="#map">
<map id="map1_map" name="map">
<area shape=poly coords="0,0,259,0,253,36,263,61,33,53,32,72,51,92,43,107,51,111,35,130,0,129" href="index.php?action=Maps&state=AL" title="Alabama">
<area shape=poly coords="260,0,255,36,271,85,506,103,520,127,526,78,577,90,596,0" href="index.php?action=Maps&state=GA" title="Georgia">
</map>
