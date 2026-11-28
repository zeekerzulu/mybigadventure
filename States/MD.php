<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M A R Y L A N D</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/MD_20050821.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="352,81,403,81,403,101,352,101" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#PA" TITLE="Pennsylvania Trip Statistics">

<AREA SHAPE=POLY COORDS="719,348,770,348,770,367,719,367" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#NJ" TITLE="New Jersey Trip Statistics">

<AREA SHAPE=POLY COORDS="560,504,609,504,609,525,560,525" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#MD" TITLE="Maryland Trip Statistics">

<AREA SHAPE=POLY COORDS="277,455,326,455,326,477,277,477" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#DC" TITLE="Washington D.C. Trip Statistics">

<AREA SHAPE=POLY COORDS="204,664,253,664,253,686,204,686" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="344,385,375,385,375,401,344,401" HREF="index.php?action=DailyEvents&date=20041024&page=1" TITLE="Travel Log">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="438,395,476,395,476,412,438,411" HREF="index.php?action=Stats&stat=Mishaps&date=20041029&page=16&maplink=1" TITLE="Unwelcome Neighbor">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,799,0,799,147,617,240,0,236" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">

<AREA SHAPE=POLY COORDS="799,567,643,565,618,242,703,215,663,305,799,524" HREF="index.php?action=Maps&state=DE" TITLE="Delaware">

<AREA SHAPE=POLY COORDS="343,425,406,425,401,473,338,477" HREF="index.php?action=Maps&state=DC" TITLE="District of Columbia">

<AREA SHAPE=POLY COORDS="799,529,663,268,799,131" HREF="index.php?action=Maps&state=NJ" TITLE="New Jersey">

<AREA SHAPE=POLY COORDS="0,484,116,310,213,393,234,344,336,445,340,482,373,486,324,598,536,713,741,677,669,738,0,738" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">

<!--
<AREA SHAPE=POLY COORDS="0,296,203,274,232,343,214,393,112,310,0,487" HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">-->

</MAP>
