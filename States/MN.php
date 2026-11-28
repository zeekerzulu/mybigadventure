<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M I N N E S O T A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/MN_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="93,547,143,547,143,570,93,570" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#SD" TITLE="South Dakota Trip Statistics">

<AREA SHAPE=POLY COORDS="352,328,401,328,401,349,352,349" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#MN" TITLE="Minnesota Trip Statistics">

<AREA SHAPE=POLY COORDS="636,442,686,442,686,464,636,464" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#WI" TITLE="Wisconsin Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="445,461,476,461,476,477,445,477" HREF="index.php?action=DailyEvents&date=20040825&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="200,475,233,474,231,490,203,490" HREF="index.php?action=DailyEvents&date=20040824&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="719,580,751,581,750,598,719,597" HREF="index.php?action=DailyEvents&date=20040829&page=1" TITLE="Travel Log">

<!-- FRIEND -->

<AREA SHAPE=POLY COORDS="424,532,463,532,463,547,424,547" HREF="index.php?action=Stats&stat=Friends&date=20040825&page=2&maplink=1" TITLE="Greg">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="489,530,519,530,519,545,489,545" HREF="index.php?action=Stats&stat=Sites&date=20040829&page=8&maplink=1" TITLE="Mall of America">

<AREA SHAPE=POLY COORDS="680,632,711,632,711,647,680,647" HREF="index.php?action=Stats&stat=Sites&date=20040830&page=9&maplink=1" TITLE="Carr Valley Cheese">

<AREA SHAPE=POLY COORDS="712,653,743,653,743,668,712,668" HREF="index.php?action=Stats&stat=Sites&date=20040830&page=10&maplink=1" TITLE="House on the Rock">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="673,739,642,725,633,684,639,666,620,603,506,519,517,449,498,430,512,402,541,378,541,324,653,251,700,252,674,328,694,350,798,377,798,739" HREF="index.php?action=Maps&state=WI" TITLE="Wisconsin">

<AREA SHAPE=POLY COORDS="0,379,233,397,212,428,241,461,233,647,227,648,235,686,219,723,228,738,170,711,129,711,111,719,79,694,0,687" HREF="index.php?action=Maps&state=SD" TITLE="South Dakota">

<!--
<AREA SHAPE=POLY COORDS="0,70,198,81,202,170,219,220,220,300,221,333,236,374,233,397,0,380" HREF="index.php?action=Maps&state=ND" TITLE="North Dakota">

<AREA SHAPE=POLY COORDS="222,644,626,648,638,669,631,689,645,725,668,732,672,738,227,737,217,725,235,684," HREF="index.php?action=Maps&state=IA" TITLE="Iowa">

<AREA SHAPE=POLY COORDS="0,686,77,693,115,718,136,710,175,714,216,739,0,738" HREF="index.php?action=Maps&state=NE" TITLE="Nebraska">

<AREA SHAPE=POLY COORDS="672,326,731,178,797,141,798,378,694,350" HREF="index.php?action=Maps&state=MI" TITLE="Michigan">-->

</MAP>
