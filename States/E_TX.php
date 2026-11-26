<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>E A S T&nbsp;&nbsp;&nbsp;T E X A S</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/E_TX_20050901.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="673,470,722,470,722,493,673,493" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#LA" TITLE="Louisiana Trip Statistics">

<AREA SHAPE=POLY COORDS="274,419,323,419,323,443,274,443" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#TX" TITLE="Texas Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="459,575,490,575,490,592,459,592" HREF="index.php?action=DailyEvents&date=20041113&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="193,652,225,652,225,668,193,668" HREF="index.php?action=DailyEvents&date=20041114&page=1" TITLE="Travel Log">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="399,575,429,575,429,592,399,592" HREF="index.php?action=Stats&stat=Sites&date=20041114&page=37&maplink=1" TITLE="Johnson Space Center">

<AREA SHAPE=POLY COORDS="164,599,195,599,195,614,164,614" HREF="index.php?action=Stats&stat=Sites&date=20041115&page=38&maplink=1" TITLE="The Alamo">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,54,0,51,107,172,161,164,739,0,738" HREF="index.php?action=Maps&state=W_TX" TITLE="West Texas">

<AREA SHAPE=POLY COORDS="560,272,798,269,798,389,776,477,797,475,798,582,617,606,478,560,379" HREF="index.php?action=Maps&state=LA" TITLE="Louisiana">

<!--
<AREA SHAPE=POLY COORDS="55,0,520,0,524,37,519,213,458,181,441,187,426,181,359,206,311,180,287,197,115,151,106,125,78,131,50,105" HREF="index.php?action=Maps&state=OK" TITLE="Oklahoma">

<AREA SHAPE=POLY COORDS="518,3,798,0,798,268,557,274,558,219528,221,519,213" HREF="index.php?action=Maps&state=AR" TITLE="Arkansas">
-->

</MAP>
