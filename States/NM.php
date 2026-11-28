<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N E W&nbsp;&nbsp;&nbsp;M E X I C O</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/NM_20050905.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="518,656,568,656,568,678,518,678" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#TX" TITLE="Texas Trip Statistics">

<AREA SHAPE=POLY COORDS="391,403,441,403,441,425,391,425" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#NM" TITLE="New Mexico Trip Statistics">

<AREA SHAPE=POLY COORDS="50,396,101,396,101,419,50,419" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Arizona Trip Statistics">

<AREA SHAPE=POLY COORDS="417,46,465,46,465,67,417,67" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Colorado Trip Statistics">

<AREA SHAPE=POLY COORDS="50,42,87,42,87,63,50,63" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Utah Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="658,646,690,646,690,662,658,662" HREF="index.php?action=DailyEvents&date=20041115&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="591,542,621,542,621,558,591,558" HREF="index.php?action=DailyEvents&date=20041116&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="399,113,430,113,430,129,399,129" HREF="index.php?action=DailyEvents&date=20041117&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="96,72,124,72,124,87,96,87" HREF="index.php?action=UnderConstruction&date=20041216&page=1" TITLE="Travel Log">

<!-- BIKING -->

<AREA SHAPE=POLY COORDS="439,158,472,158,472,174,439,174" HREF="index.php?action=Stats&stat=Biking&date=20041118&page=19&maplink=1" TITLE="Rio Grande del Rancho">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="482,557,520,557,520,573,482,573" HREF="index.php?action=Stats&stat=People&date=20041116.1&page=21&maplink=1" TITLE="Loren">

<AREA SHAPE=POLY COORDS="574,521,613,521,613,537,574,537" HREF="index.php?action=Stats&stat=People&date=20041116.2&page=22&maplink=1" TITLE="Joe">

<AREA SHAPE=POLY COORDS="93,94,134,94,134,110,93,110" HREF="index.php?action=UnderConstruction&stat=People&date=20041216&page=&maplink=1" TITLE="Rondos">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="387,185,418,185,418,200,387,200" HREF="index.php?action=Stats&stat=Sites&date=20041118&page=39&maplink=1" TITLE="San Francisco de Asis Church">

<AREA SHAPE=POLY COORDS="60,151,89,151,89,168,60,168" HREF="index.php?action=UnderConstruction&stat=Sites&date=20041217&page=&maplink=1" TITLE="Hubbell Trading Post">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="375,162,434,162,434,178,375,178" HREF="index.php?action=Stats&stat=Communities&date=20041119.1&page=13&maplink=1" TITLE="Taos, New Mexico">

<AREA SHAPE=POLY COORDS="475,145,533,145,533,160,475,160" HREF="index.php?action=Stats&stat=Communities&date=20041119.2&page=14&maplink=1" TITLE="Taos Pueblo, New Mexico">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="514,595,539,595,539,611,514,611" HREF="index.php?action=Stats&stat=Parks&date=20041116&page=12&maplink=1" TITLE="Carlsbad Caverns National Park">

<AREA SHAPE=POLY COORDS="96,290,122,290,122,307,96,307" HREF="index.php?action=UnderConstruction&stat=Parks&date=20041217&page=18&maplink=1" TITLE="Petrified Forest National Park">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="0,73,79,73,49,86,0,86" HREF="index.php?action=UnderConstruction&stat=Monuments&date=20041216&page=7&maplink=1" TITLE="Monument Valley">

<!-- MUSEUMS -->

<AREA SHAPE=POLY COORDS="490,463,536,463,536,480,490,480" HREF="index.php?action=Stats&stat=Museums&date=20041117&page=4&maplink=1" TITLE="International UFO Museum & Research Center">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="467,580,507,580,507,598,467,598" HREF="index.php?action=Stats&stat=Oddities&date=20041116&page=54&maplink=1" TITLE="Dripping Concoction">

<AREA SHAPE=POLY COORDS="554,419,593,419,593,434,554,434" HREF="index.php?action=Stats&stat=Oddities&date=20041117.1&page=55&maplink=1" TITLE="Eyes from Above, Bored Aliens & Alien Exposed">

<AREA SHAPE=POLY COORDS="375,132,413,132,413,148,375,148" HREF="index.php?action=Stats&stat=Oddities&date=20041118&page=58&maplink=1" TITLE="Historic Gutters & Elephant Footprints">

<AREA SHAPE=POLY COORDS="434,97,473,97,473,113,434,113" HREF="index.php?action=Stats&stat=Oddities&date=20041119.2&page=60&maplink=1" TITLE="Dirty Straw & Sinking Window">

<AREA SHAPE=POLY COORDS="58,230,95,230,95,245,58,245" HREF="index.php?action=UnderConstruction&stat=Oddities&date=20041217&page=&maplink=1" TITLE="Rainbow Replacement & Petrified Construction">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="657,127,796,121,798,738,509,739,360,593,668,587" HREF="index.php?action=Maps&state=W_TX" TITLE="West Texas">

<AREA SHAPE=POLY COORDS="0,0,163,0,162,73,0,66" HREF="index.php?action=Maps&state=UT" TITLE="Utah">

<AREA SHAPE=POLY COORDS="163,0,733,0,737,72,161,75" HREF="index.php?action=Maps&state=CO" TITLE="Colorado">

<AREA SHAPE=POLY COORDS="0,65,161,74,143,658,0,653" HREF="index.php?action=Maps&state=AZ" TITLE="Arizona">

<!--
<AREA SHAPE=POLY COORDS="660,75,799,68,798,119,661,122" HREF="index.php?action=Maps&state=OK" TITLE="Oklahoma">
<AREA SHAPE=POLY COORDS="735,0,798,0,798,68,737,70" HREF="index.php?action=Maps&state=KS" TITLE="Kansas">
-->

</MAP>
