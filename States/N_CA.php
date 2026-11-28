<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N O R T H E R N&nbsp;&nbsp;&nbsp;C A L I F O R N I A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/N_CA_20050906.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="678,147,728,147,728,169,678,169" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#ID" TITLE="Idaho Trip Statistics">

<AREA SHAPE=POLY COORDS="569,501,618,501,618,526,569,526" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Nevada Trip Statistics">

<AREA SHAPE=POLY COORDS="217,484,265,484,265,509,217,509" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="California Trip Statistics">

<AREA SHAPE=POLY COORDS="313,143,363,143,363,164,313,164" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Oregon Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="431,718,463,718,463,735,431,735" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="186,609,217,609,217,626,186,626" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="21,431,52,21,52,449,21,449" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="9,247,40,247,40,265,9,265" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="14,71,44,71,44,87,14,87" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="427,672,461,672,461,688,427,688" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="84,201,117,201,117,216,84,216" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="115,34,147,34,147,49,115,49" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="379,665,409,665,409,680,379,680" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="8,145,38,145,38,159,8,159" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="25,14,55,14,55,31,25,31" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="461,696,485,696,485,711,461,711" HREF="index.php?action=UnderConstruction&stat=Parks&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="94,408,120,408,120,423,94,423" HREF="index.php?action=UnderConstruction&stat=Parks&date=200&page=&maplink=1" TITLE="">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="351,692,389,692,389,708,351,708" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="98,444,137,444,137,460,98,460" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="78,228,118,228,118,243,78,243" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="96,115,135,115,135,131,96,131" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="92,583,390,554,389,585,566,738,190,737" HREF="index.php?action=Maps&state=C_CA" TITLE="Central California">

<AREA SHAPE=POLY COORDS="94,1,600,1,620,53,618,271,68,267,56,108" HREF="index.php?action=Maps&state=OR" TITLE="Oregon">

<AREA SHAPE=POLY COORDS="388,277,797,266,799,739,561,739,385,582" HREF="index.php?action=Maps&state=NV" TITLE="Nevada">

<AREA SHAPE=POLY COORDS="600,0,799,0,798,264,615,272,611,79,613,42,591,36,602,0" HREF="index.php?action=Maps&state=ID" TITLE="Idaho">

</MAP>
