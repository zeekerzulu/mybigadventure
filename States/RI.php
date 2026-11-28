<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>R H O D E&nbsp;&nbsp;&nbsp;I S L A N D</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/RI_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="360,338,410,338,410,359,360,359" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#RI" TITLE="Rhode Island Trip Statistics">

<AREA SHAPE=POLY COORDS="9,105,58,105,58,125,9,125" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="124,64,174,64,174,130,124,130" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#VT" TITLE="Vermont Trip Statistics">

<AREA SHAPE=POLY COORDS="346,77,397,77,397,101,346,101" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#NH" TITLE="New Hampshire Trip Statistics">

<AREA SHAPE=POLY COORDS="233,219,281,219,281,241,233,241" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#MA" TITLE="Massachusetts Trip Statistics">

<AREA SHAPE=POLY COORDS="155,419,204,419,204,440,155,440" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#CT" TITLE="Connecticut Trip Statistics">

<!-- TRAVEL LOG --->

<AREA SHAPE=POLY COORDS="312,149,467,149,467,167,312,167" HREF="index.php?action=DailyEvents&date=20041019&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="500,356,530,356,530,373,500,373" HREF="index.php?action=DailyEvents&date=20041020&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="536,428,568,428,568,444,536,444" HREF="index.php?action=DailyEvents&date=20041021&page=1" TITLE="Travel Log">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="454,232,483,232,483,248,454,248" HREF="index.php?action=Stats&stat=Sites&date=20041020.1&page=23&maplink=1" TITLE="The Freedom Trail & Boston Red Sox Capture American League Pennant">

<AREA SHAPE=POLY COORDS="638,241,669,241,669,258,638,258" HREF="index.php?action=Stats&stat=Sites&date=20041021&page=25&maplink=1" TITLE="Cape Cod, Massachusetts">

<AREA SHAPE=POLY COORDS="535,332,565,332,565,348,535,348" HREF="index.php?action=Stats&stat=Sites&date=20041023.1&page=26&maplink=1" TITLE="Plymouth Rock & The Mayflower II">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="407,191,465,191,465,208,407,208" HREF="index.php?action=Stats&stat=Communities&date=20041020&page=9&maplink=1" TITLE="Boston, Massachusetts">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="563,266,624,266,624,283,563,283" HREF="index.php?action=Stats&stat=Monuments&date=20041020&page=4&maplink=1" TITLE="Pilgrim Monument">

<AREA SHAPE=POLY COORDS="486,295,545,295,545,311,486,311" HREF="index.php?action=Stats&stat=Monuments&date=20041023&page=5&maplink=1" TITLE="National Monument to the Forefathers">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="527,200,564,200,564,216,527,216" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=29&maplink=1" TITLE="Boot of Despair, Pink Duck & Haggard Graves">

<AREA SHAPE=POLY COORDS="601,320,640,320,640,336,601,336" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=32&maplink=1" TITLE="Giant Marble">

<AREA SHAPE=POLY COORDS="690,252,729,252,729,268,690,268" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=33&maplink=1" TITLE="Retired Anchor">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="584,440,623,440,623,456,584,456" HREF="index.php?action=Stats&stat=Mishaps&date=20041022&page=15&maplink=1" TITLE="Cart Crash">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,79,0,72,114,29,283,25,581,313,508,340,562,0,666" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="27,289,351,303,347,484,0,552,0,519,20,503" HREF="index.php?action=Maps&state=CT" TITLE="Connecticut">

<AREA SHAPE=POLY COORDS="233,0,536,0,558,34,532,84,446,127,212,116" HREF="index.php?action=Maps&state=NH" TITLE="New Hampshire">

<AREA SHAPE=POLY COORDS="80,0,234,0,212,120,72,110" HREF="index.php?action=Maps&state=VT" TITLE="Vermont">

<AREA SHAPE=POLY COORDS="75,107,448,130,533,79,580,143,710,500,484,433,433,300,28,289" HREF="index.php?action=Maps&state=MA" TITLE="Massachusetts">

<AREA SHAPE=POLY COORDS="533,0,562,36,578,0" HREF="index.php?action=Maps&state=ME" TITLE="Maine">

</MAP>
