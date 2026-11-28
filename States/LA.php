<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>L O U I S I A N A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/LA_20050901.gif" usemap="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="617,200,665,200,665,222,617,222" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#MS" TITLE="Mississippi Trip Statistics">

<AREA SHAPE=POLY COORDS="446,406,494,406,494,426,446,426" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#LA" TITLE="Louisiana Trip Statistics">

<AREA SHAPE=POLY COORDS="125,401,176,401,176,422,125,422" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#TX" TITLE="Texas Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="543,491,573,491,573,508,543,508" HREF="index.php?action=DailyEvents&date=20041111&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="145,479,175,479,175,495,145,495" HREF="index.php?action=DailyEvents&date=20041113&page=1" TITLE="Travel Log">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="589,450,628,450,628,464,589,464" HREF="index.php?action=Stats&stat=People&date=20041112&page=20&maplink=1" TITLE="Rene & Charlie">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="95,480,125,480,125,493,95,493" HREF="index.php?action=Stats&stat=Sites&date=20041114&page=37&maplink=1" TITLE="Space Center Houston">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="576,512,633,512,633,530,576,530" HREF="index.php?action=Stats&stat=Communities&date=20041112&page=12&maplink=1" TITLE="New Orleans, Louisiana">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="567,104,607,104,607,121,567,121" HREF="index.php?action=Stats&stat=Oddities&date=20041111&page=51&maplink=1" TITLE="Great White Truck">

<AREA SHAPE=POLY COORDS="634,474,672,474,672,487,634,487" HREF="index.php?action=Stats&stat=Oddities&date=20041112.1&page=52&maplink=1" TITLE="Later Gater & Kinky Leather">

<!-- STATES -->

<area shape=poly coords="0,98,15,76,65,106,162,82,262,126,260,284,303,385,272,521,0,683" href="index.php?action=Maps&state=E_TX" title="East Texas">

<area shape=poly coords="0,0,230,0,224,117,160,83,52,100,14,78,0,96" href="index.php?action=Maps&state=OK" title="Oklahoma">

<area shape=poly coords="563,0,764,0,746,293,760,460,655,471,631,421,638,388,472,384,472,366,529,254,508,178,515,150,505,125,556,35" href="index.php?action=Maps&state=MS" title="Mississippi">

<!--
<area shape=poly coords="230,0,565,0,506,125,510,180,263,177,261,126,232,125,223,113" href="index.php?action=Maps&state=AR" title="Arkansas">
<area shape=poly coords="764,0,798,0,799,450,760,460,746,289" href="index.php?action=Maps&state=AL" title="Alabama">
-->
</map>
