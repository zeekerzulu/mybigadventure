<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N E W&nbsp;&nbsp;&nbsp;J E R S E Y</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/NJ_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="339,409,389,409,389,431,339,431" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#NJ" TITLE="New Jersey Trip Statistics">

<AREA SHAPE=POLY COORDS="133,213,183,213,183,235,133,235" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#PA" TITLE="Pennsylvania Trip Statistics">

<AREA SHAPE=POLY COORDS="569,13,619,13,619,34,569,34" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#CT" TITLE="Connecticut Trip Statistics">

<AREA SHAPE=POLY COORDS="718,113,768,113,768,134,718,134" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="104,571,155,571,155,595,104,595" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#MD" TITLE="Maryland Trip Statistics">

<AREA SHAPE=POLY COORDS="198,618,248,618,248,640,198,640" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#DE" TITLE="Delaware Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="453,236,484,236,484,252,453,252" HREF="index.php?action=DailyEvents&date=20041023&page=1" TITLE="Travel Log">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="173,415,240,398,213,480,340,690,319,739,185,739" HREF="index.php?action=Maps&state=DE" TITLE="Delaware">

<AREA SHAPE=POLY COORDS="0,410,172,416,184,739,0,739" HREF="index.php?action=Maps&state=MD" TITLE="Maryland">

<AREA SHAPE=POLY COORDS="611,0,799,0,595,96,580,55,625,30" HREF="index.php?action=Maps&state=CT" TITLE="Connecticut">

<AREA SHAPE=POLY COORDS="526,0,610,0,623,23,574,57,597,97,796,82,796,131,477,214,544,83" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="0,0,369,0,300,88,291,197,380,305,173,416,0,411" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">

</MAP>
