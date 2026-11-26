<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>O K L A H O M A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/OK.gif" usemap="#map">
<map id="map1_map" name="map">
<area shape=poly coords="0,0,129,0,124,204,0,197" href="index.php?action=Maps&state=CO" title="Colorado">
<area shape=poly coords="0,199,46,202,16,716,0,712" href="index.php?action=Maps&state=NM" title="New Mexico">
<area shape=poly coords="129,26,728,23,733,200,125,204" href="index.php?action=Maps&state=KS" title="Kansas">
<area shape=poly coords="416,504,797,557,798,739,415,739" href="index.php?action=Maps&state=E_TX" title="East Texas">
<area shape=poly coords="0,712,10,713,40,256,289,263,289,456,410,504,408,739,0,739" href="index.php?action=Maps&state=W_TX" title="West Texas">
<area shape=poly coords="738,251,797,250,798,553,757,551,756,359,737,250" href="index.php?action=Maps&state=AR" title="Arkansas">
<area shape=poly coords="727,21,798,24,797,249,737,252," href="index.php?action=Maps&state=MO" title="Missouri">
</map>
