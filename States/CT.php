<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>C O N N E C T I C U T</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/CT_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="375,393,425,393,425,415,375,415" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#CT" TITLE="Connecticut Trip Statistics">

<AREA SHAPE=POLY COORDS="317,51,368,51,368,71,317,71" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#VT" TITLE="Vermont Trip Statistics">

<AREA SHAPE=POLY COORDS="547,47,595,47,595,70,547,70" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#NH" TITLE="New Hampshire Trip Statistics">

<AREA SHAPE=POLY COORDS="446,186,494,186,494,209,446,209" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#MA" TITLE="Massachusetts Trip Statistics">

<AREA SHAPE=POLY COORDS="599,407,648,407,648,427,599,427" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#RI" TITLE="Rhode Island Trip Statistics">

<AREA SHAPE=POLY COORDS="35,533,84,533,84,552,35,552" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#NJ" TITLE="New Jersey Trip Statistics">

<AREA SHAPE=POLY COORDS="77,291,127,291,127,312,77,312" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<!-- TRAVEL LOG --->

<AREA SHAPE=POLY COORDS="627,121,656,121,656,137,627,137" HREF="index.php?action=DailyEvents&date=20041019&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="707,328,737,328,737,344,707,344" HREF="index.php?action=DailyEvents&date=20041020&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="748,403,780,403,780,421,748,421" HREF="index.php?action=DailyEvents&date=20041021&page=1" TITLE="Travel Log">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="646,192,677,192,677,207,646,207" HREF="index.php?action=Stats&stat=Sites&date=20041020.1&page=23&maplink=1" TITLE="The Freedom Trail & Boston Red Sox Capture American League Pennant">

<AREA SHAPE=POLY COORDS="737,305,769,305,769,320,737,320" HREF="index.php?action=Stats&stat=Sites&date=20041023.1&page=26&maplink=1" TITLE="Plymouth Rock & The Mayflower II">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="612,163,671,163,671,177,612,177" HREF="index.php?action=Stats&stat=Communities&date=20041020&page=9&maplink=1" TITLE="Boston, Massachusetts">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="688,265,749,265,749,278,688,278" HREF="index.php?action=Stats&stat=Monuments&date=20041023&page=5&maplink=1" TITLE="National Monument to the Forefathers">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="727,168,766,168,766,184,727,184" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=29&maplink=1" TITLE="Boot of Despair, Pink Duck & Haggard Graves">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,277,0,177,568,551,503,121,640,147,533,0,435" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="558,274,642,276,687,405,558,447" HREF="index.php?action=Maps&state=RI" TITLE="Rhode Island">

<AREA SHAPE=POLY COORDS="430,0,761,0,731,46,650,99,425,91" HREF="index.php?action=Maps&state=NH" TITLE="New Hampshire">

<AREA SHAPE=POLY COORDS="278,0,432,0,411,87,275,85" HREF="index.php?action=Maps&state=VT" TITLE="Vermont">

<AREA SHAPE=POLY COORDS="277,85,648,99,732,44,798,431,553,444,559,272,223,259" HREF="index.php?action=Maps&state=MA" TITLE="Massachusetts">

<AREA SHAPE=POLY COORDS="0,434,149,528,125,739,0,739" HREF="index.php?action=Maps&state=NJ" TITLE="New Jersey">

</MAP>
