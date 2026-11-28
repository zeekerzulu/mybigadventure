<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>A R K A N S A S</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/AR.gif" usemap="#map">
<map id="map1_map" name="map">
<area shape=poly coords="0,447,64,471,121,454,138,460,149,449,250,497,249,653,286,739,0,738" href="index.php?action=Maps&state=E_TX" title="East Texas">
<area shape=poly coords="0,129,208,138,208,192,217,319,210,484,152,451,134,461,119,452,56,472,0,448" href="index.php?action=Maps&state=OK" title="Oklahoma">
<area shape=poly coords="0,0,214,0,207,136,0,128" href="index.php?action=Maps&state=KS" title="Kansas">
<area shape=poly coords="250,548,496,553,514,629,461,738,283,739,247,652" href="index.php?action=Maps&state=LA" title="Louisiana">
<area shape=poly coords="571,345,752,339,735,663,740,739,460,739,517,620,502,475" href="index.php?action=Maps&state=MS" title="Mississippi">
<area shape=poly coords="750,341,798,336,798,739,741,739,734,646" href="index.php?action=Maps&state=AL" title="Alabama">
<area shape=poly coords="632,189,751,185,752,165,798,168,798,336,569,347" href="index.php?action=Maps&state=TN" title="Tennessee">
<area shape=poly coords="626,188,655,179,656,129,672,114,712,128,708,99,743,82,737,65,748,21,797,22,798,167,751,165,749,185" href="index.php?action=Maps&state=KY" title="Kentucky">
<area shape=poly coords="213,0,555,0,627,70,634,99,635,120,661,147,651,181,613,241,563,245,587,205,569,190,209,190" href="index.php?action=Maps&state=MO" title="Missouri">
<area shape=poly coords="553,0,748,0,740,83,708,96,713,128,671,114,654,133,630,106,628,68" href="index.php?action=Maps&state=IL" title="Illinois">
</map>
