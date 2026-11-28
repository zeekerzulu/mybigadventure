<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>W E S T&nbsp;&nbsp;&nbsp;T E X A S</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/W_TX_20050901.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="526,368,573,368,573,391,526,391" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#TX" TITLE="Texas Trip Statistics">

<AREA SHAPE=POLY COORDS="112,198,161,198,161,221,112,221" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#NM" TITLE="New Mexico Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="663,656,695,656,695,672,663,672" HREF="index.php?action=DailyEvents&date=20041114&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="275,456,305,456,305,471,275,471" HREF="index.php?action=DailyEvents&date=20041115&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="221,328,252,328,252,344,221,344" HREF="index.php?action=DailyEvents&date=20041116&page=1" TITLE="Travel Log">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="128,313,167,313,167,331,128,331" HREF="index.php?action=Stats&stat=People&date=20041116.1&page=21&maplink=1" TITLE="Loren">

<AREA SHAPE=POLY COORDS="205,305,243,305,243,322,205,322" HREF="index.php?action=Stats&stat=People&date=20041116.2&page=22&maplink=1" TITLE="Joe">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="700,599,730,599,730,615,700,615" HREF="index.php?action=Stats&stat=Sites&date=20041115&page=38&maplink=1" TITLE="The Alamo">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="119,347,145,347,145,363,119,363" HREF="index.php?action=Stats&stat=Parks&date=20041116&page=12&maplink=1" TITLE="Carlsbad Caverns National Park">

<!-- MUSEUMS -->

<AREA SHAPE=POLY COORDS="123,254,168,254,168,271,123,271" HREF="index.php?action=Stats&stat=Museums&date=20041117&page=4&maplink=1" TITLE="UFO Museum & Research Center">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="122,389,160,389,160,406,122,406" HREF="index.php?action=Stats&stat=Oddities&date=20041116&page=54&maplink=1" TITLE="Dripping Concoction">

<AREA SHAPE=POLY COORDS="188,204,227,204,227,219,188,219" HREF="index.php?action=Stats&stat=Oddities&date=20041117.1&page=55&maplink=1" TITLE="Eyes from Above, Bored Aliens & Alien Exposed">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="693,161,798,181,798,739,707,739" HREF="index.php?action=Maps&state=E_TX" TITLE="East Texas">

<AREA SHAPE=POLY COORDS="0,0,302,0,302,382,0,372" HREF="index.php?action=Maps&state=NM" TITLE="New Mexico">
<!--
<AREA SHAPE=POLY COORDS="558,0,560,112,798,186,798,0" HREF="index.php?action=Maps&state=OK" TITLE="Oklahoma">-->

</MAP>
