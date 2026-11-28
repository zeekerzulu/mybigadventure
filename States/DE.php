<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>D E L A W A R E</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/DE_20050820.gif" usemap="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="184,103,235,103,235,125,184,125" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#PA" TITLE="Pennsylvania Trip Statistics">

<AREA SHAPE=POLY COORDS="524,117,574,117,574,139,524,139" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#NJ" TITLE="New Jersey Trip Statistics">

<AREA SHAPE=POLY COORDS="370,414,419,414,419,435,370,435" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#DE" TITLE="Delaware Trip Statistics">

<AREA SHAPE=POLY COORDS="98,379,148,379,148,401,98,401" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#DC" TITLE="Washington D.C. Trip Statistics">

<AREA SHAPE=POLY COORDS="124,191,173,191,173,214,124,214" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#MD" TITLE="Maryland Trip Statistics">
<!--
<AREA SHAPE=POLY COORDS="83,645,131,645,131,668,83,668" HREF="index.php?action=Stats&stat=States&nocomments=1&page=#VI" TITLE="Virginia Trip Statistics">-->

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="43,301,75,301,75,317,43,317" HREF="index.php?action=DailyEvents&date=20041024&page=1" TITLE="Travel Log">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="137,310,176,310,176,326,137,326" HREF="index.php?action=Stats&stat=Mishaps&date=20041029&page=16&maplink=1" TITLE="Unwelcome Neighbor">

<!-- STATES -->

<area shape=poly coords="52,344,87,340,97,360,73,374" href="index.php?action=Maps&state=DC" title="District of Columbia">

<area shape=poly coords="0,315,68,400,17,491,68,489,213,624,434,586,342,738,0,738" href="index.php?action=Maps&state=VA" title="Virginia">

<area shape=poly coords="0,149,321,154,342,476,472,480,435,586,230,623,15,497,64,362,0,315" href="index.php?action=Maps&state=MD" title="Maryland">

<area shape=poly coords="0,0,500,0,320,154,0,148" href="index.php?action=Maps&state=PA" title="Pennsylvania">

<area shape=poly coords="532,0,675,0,485,418,365,173" href="index.php?action=Maps&state=NJ" title="New Jersey">

</map>
