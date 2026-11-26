<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>K A N S A S</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/KS.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="612,147,798,135,799,554,714,560,705,293,664,248,681,217" HREF="index.php?action=Maps&state=MO" TITLE="Missouri">
<AREA SHAPE=POLY COORDS="17,555,266,565,267,717,11,717" HREF="index.php?action=Maps&state=W_TX" TITLE="West Texas">
<AREA SHAPE=POLY COORDS="710,560,798,553,798,738,737,738" HREF="index.php?action=Maps&state=AR" TITLE="Arkansas">
<AREA SHAPE=POLY COORDS="578,25,798,0,798,135,608,144" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">
<AREA SHAPE=POLY COORDS="21,506,711,508,737,739,265,739,269,569,21,556" HREF="index.php?action=Maps&state=OK" TITLE="Oklahoma">
<AREA SHAPE=POLY COORDS="0,90,116,99,102,507,0,502" HREF="index.php?action=Maps&state=CO" TITLE="Colorado">
<AREA SHAPE=POLY COORDS="0,504,23,505,9,739,0,739" HREF="index.php?action=Maps&state=NM" TITLE="New Mexico">
<AREA SHAPE=POLY COORDS="0,0,579,23,670,216,637,200,113,198,116,98,0,93" HREF="index.php?action=Maps&state=NE" TITLE="Nebraska">
</MAP>
