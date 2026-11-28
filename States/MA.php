<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M A S S A C H U S E T T S</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/MA_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="332,343,383,343,383,365,332,365" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#MA" TITLE="Massachusetts Trip Statistics">

<AREA SHAPE=POLY COORDS="38,288,88,288,88,311,38,311" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="206,134,257,134,257,157,206,157" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#VT" TITLE="Vermont Trip Statistics">

<AREA SHAPE=POLY COORDS="424,146,473,146,473,168,424,168" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#NH" TITLE="New Hampshire Trip Statistics">

<AREA SHAPE=POLY COORDS="596,58,646,58,646,79,596,79" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#ME" TITLE="Maine Trip Statistics">

<AREA SHAPE=POLY COORDS="253,337,302,337,302,487,253,487" HREF="index.php?action=Stats&stat=States&nocomments=1&page=8#CT" TITLE="Connecticut Trip Statistics">

<AREA SHAPE=POLY COORDS="470,558,521,558,521,581,470,581" HREF="index.php?action=Stats&stat=States&nocomments=1&page=7#RI" TITLE="Rhode Island Trip Statistics">

<!-- TRAVEL LOG --->

<AREA SHAPE=POLY COORDS="510,98,740,98,740,114,510,114" HREF="index.php?action=DailyEvents&date=20041015&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="729,0,760,0,760,16,729,16" HREF="index.php?action=DailyEvents&date=20041018&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="503,282,534,282,534,298,503,298" HREF="index.php?action=DailyEvents&date=20041019&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="574,482,605,482,605,496,574,496" HREF="index.php?action=DailyEvents&date=20041020&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="616,551,647,551,647,567,616,567" HREF="index.php?action=DailyEvents&date=20041021&page=1" TITLE="Travel Log">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="730,27,768,27,768,42,730,42" HREF="index.php?action=Stats&stat=Friends&date=20041015&page=14&maplink=1" TITLE="Monica">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="731,70,762,70,762,87,731,87" HREF="index.php?action=Stats&stat=Sites&date=20041016&page=21&maplink=1" TITLE="Southern Maine Coast & Nubble Lighthouse">

<AREA SHAPE=POLY COORDS="524,350,554,350,554,365,524,365" HREF="index.php?action=Stats&stat=Sites&date=20041020.1&page=23&maplink=1" TITLE="The Freedom Trail & Boston Red Sox Capture American League Pennant">

<AREA SHAPE=POLY COORDS="721,359,753,359,753,752,721,752" HREF="index.php?action=Stats&stat=Sites&date=20041021&page=25&maplink=1" TITLE="Cape Cod, Massachusetts">

<AREA SHAPE=POLY COORDS="596,447,626,447,626,463,596,463" HREF="index.php?action=Stats&stat=Sites&date=20041023.1&page=26&maplink=1" TITLE="Plymouth Rock & The Mayflower II">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="497,313,555,313,555,329,497,329" HREF="index.php?action=Stats&stat=Communities&date=20041020&page=9&maplink=1" TITLE="Boston, Massachusetts">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="642,391,701,391,701,407,642,407" HREF="index.php?action=Stats&stat=Monuments&date=20041020&page=4&maplink=1" TITLE="Pilgrim Monument">

<AREA SHAPE=POLY COORDS="559,419,617,419,617,435,559,435" HREF="index.php?action=Stats&stat=Monuments&date=20041023&page=5&maplink=1" TITLE="National Monument to the Forefathers">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="599,324,637,324,637,341,599,341" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=29&maplink=1" TITLE="Boot of Despair, Pink Duck & Haggard Graves">

<AREA SHAPE=POLY COORDS="652,442,690,442,690,458,652,458" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=32&maplink=1" TITLE="Giant Marble">

<AREA SHAPE=POLY COORDS="758,380,796,380,796,396,758,396" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=33&maplink=1" TITLE="Retired Anchor">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="671,563,710,563,710,579,671,579" HREF="index.php?action=Stats&stat=Mishaps&date=20041022&page=15&maplink=1" TITLE="Cart Crash">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,125,0,156,28,150,235,104,420,70,686,372,635,423,684,285,739,0,739" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="106,421,432,432,421,606,71,681,66,656,97,633" HREF="index.php?action=Maps&state=CT" TITLE="Connecticut">

<AREA SHAPE=POLY COORDS="329,0,584,0,632,157,610,205,522,250,293,241" HREF="index.php?action=Maps&state=NH" TITLE="New Hampshire">

<AREA SHAPE=POLY COORDS="131,0,156,27,151,234,292,242,331,0" HREF="index.php?action=Maps&state=VT" TITLE="Vermont">

<AREA SHAPE=POLY COORDS="432,430,510,430,564,563,424,598" HREF="index.php?action=Maps&state=RI" TITLE="Rhode Island">

<AREA SHAPE=POLY COORDS="585,0,634,157,730,0" HREF="index.php?action=Maps&state=ME" TITLE="Maine">

</MAP>
