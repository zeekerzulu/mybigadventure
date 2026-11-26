<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N E W&nbsp;&nbsp;&nbsp;H A M P S H I R E</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/NH_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="9,440,58,440,58,461,9,461" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="168,364,218,354,218,385,168,385" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#VT" TITLE="Vermont Trip Statistics">

<AREA SHAPE=POLY COORDS="392,364,443,364,443,385,392,385" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#NH" TITLE="New Hampshire Trip Statistics">

<AREA SHAPE=POLY COORDS="617,185,667,185,667,206,617,206" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#ME" TITLE="Maine Trip Statistics">

<!-- TRAVEL LOG --->

<AREA SHAPE=POLY COORDS="120,209,151,209,151,224,120,224" HREF="index.php?action=DailyEvents&date=20040927&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="525,382,555,382,555,399,525,399" HREF="index.php?action=DailyEvents&date=20041008&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="629,515,660,515,660,531,629,531" HREF="index.php?action=DailyEvents&date=20041015&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="688,426,719,426,719,442,688,442" HREF="index.php?action=DailyEvents&date=20041018&page=1" TITLE="Travel Log">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="509,455,549,455,549,472,509,472" HREF="index.php?action=Stats&stat=Friends&date=20041008&page=13" TITLE="Bill">

<AREA SHAPE=POLY COORDS="684,457,724,457,724,473,684,473" HREF="index.php?action=Stats&stat=Friends&date=20041015&page=14" TITLE="Monica">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="416,392,449,392,449,409,416,409" HREF="index.php?action=Stats&stat=Hiking&date=20041009&page=7&maplink=1" TITLE="Mount Chocorua">

<AREA SHAPE=POLY COORDS="580,334,612,334,612,350,580,350" HREF="index.php?action=Stats&stat=Hiking&date=20041017&page=8&maplink=1" TITLE="Pleasant Mountain">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="82,198,112,198,112,213,82,213" HREF="index.php?action=Stats&stat=Sites&date=20040927&page=15&maplink=1" TITLE="Lake Champlain Ferries & Lake Champlain">

<AREA SHAPE=POLY COORDS="141,294,172,294,172,310,141,310" HREF="index.php?action=Stats&stat=Sites&date=20041004&page=17&maplink=1" TITLE="Ben & Jerry's Ice Cream Factory">

<AREA SHAPE=POLY COORDS="570,408,600,408,600,424,570,424" HREF="index.php?action=Stats&stat=Sites&date=20041013&page=20&maplink=1" TITLE="Porter-Parsonsfield Historical Bridge">

<AREA SHAPE=POLY COORDS="449,545,655,545,655,561,449,561" HREF="index.php?action=Stats&stat=Sites&date=20041016&page=21&maplink=1" TITLE="Southern Maine Coast & Nubble Lighthouse">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="258,320,316,320,316,336,258,336" HREF="index.php?action=Stats&stat=Communities&date=20041004&page=7&maplink=1" TITLE="Montpelier, Vermont">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="156,218,195,218,195,234,156,234" HREF="index.php?action=Stats&stat=Oddities&date=20041001&page=18&maplink=1" TITLE="Worm Vending & Monster Insect">

<AREA SHAPE=POLY COORDS="176,324,215,324,215,339,176,339" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=20&maplink=1" TITLE="Flavor Graveyard">

<AREA SHAPE=POLY COORDS="638,368,677,368,677,384,638,384" HREF="index.php?action=Stats&stat=Oddities&date=20041008&page=22&maplink=1" TITLE="Two-Tone Home">

<AREA SHAPE=POLY COORDS="476,351,515,351,515,367,476,367" HREF="index.php?action=Stats&stat=Oddities&date=20041009&page=23&maplink=1" TITLE="Bark Tube">

<AREA SHAPE=POLY COORDS="497,436,535,436,535,452,497,452" HREF="index.php?action=Stats&stat=Oddities&date=20041013.1&page=24&maplink=1" TITLE="Water French Impression, Tree Sprouting Mural, World Record Mega Burnout & Where's Waldo?">

<AREA SHAPE=POLY COORDS="523,334,563,334,563,349,523,349" HREF="index.php?action=Stats&stat=Oddities&date=20041017&page=28&maplink=1" TITLE="Questionable Shelter">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,109,87,114,67,475,94,483,79,739,0,739" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="83,115,420,115,403,247,320,298,230,696,85,693,96,471,61,473" HREF="index.php?action=Maps&state=VT" TITLE="Vermont">

<AREA SHAPE=POLY COORDS="505,35,581,0,799,0,799,397,574,615,517,515" HREF="index.php?action=Maps&state=ME" TITLE="Maine">

<AREA SHAPE=POLY COORDS="91,691,461,708,550,668,592,722,567,739,76,736" HREF="index.php?action=Maps&state=MA" TITLE="Massachusetts">

</MAP>
