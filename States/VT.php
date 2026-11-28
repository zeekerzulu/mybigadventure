<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>V E R M O N T</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/VT_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="124,506,175,506,175,527,124,527" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="383,332,432,332,432,355,383,355" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#VT" TITLE="Vermont Trip Statistics">

<AREA SHAPE=POLY COORDS="613,343,662,343,662,365,613,365" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#NH" TITLE="New Hampshire Trip Statistics">

<AREA SHAPE=POLY COORDS="742,337,791,337,791,357,742,357" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#ME" TITLE="Maine Trip Statistics">

<!-- TRAVEL LOG --->

<AREA SHAPE=POLY COORDS="6,231,37,231,37,248,6,248" HREF="index.php?action=DailyEvents&date=20040921&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="164,216,195,216,195,232,164,232" HREF="index.php?action=DailyEvents&date=20040922&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="319,180,349,180,349,196,319,196" HREF="index.php?action=DailyEvents&date=20040927&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="709,360,739,360,739,375,709,375" HREF="index.php?action=DailyEvents&date=20041008&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="652,706,682,706,682,723,652,723" HREF="index.php?action=DailyEvents&date=20041019&page=1" TITLE="Travel Log">

<!-- BIKING -->

<AREA SHAPE=POLY COORDS="101,215,131,215,131,230,101,230" HREF="index.php?action=Stats&stat=Biking&date=20040922&page=15&maplink=1" TITLE="Adirondack State Park">

<AREA SHAPE=POLY COORDS="195,192,226,192,226,209,195,209" HREF="index.php?action=Stats&stat=Biking&date=20040925&page=16&maplink=1" TITLE="Whiteface Mountain">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="165,308,197,308,197,323,165,323" HREF="index.php?action=Stats&stat=Hiking&date=20040923&page=5&maplink=1" TITLE="Mount Marcy">

<AREA SHAPE=POLY COORDS="632,320,665,320,665,336,632,336" HREF="index.php?action=Stats&stat=Hiking&date=20041009&page=7&maplink=1" TITLE="Mount Chocorua">

<AREA SHAPE=POLY COORDS="766,284,800,284,800,300,766,300" HREF="index.php?action=Stats&stat=Hiking&date=20041017&page=8&maplink=1" TITLE="Pleasant Mountain">

<!-- FRIEND -->

<AREA SHAPE=POLY COORDS="731,422,769,422,769,438,731,438" HREF="index.php?action=Stats&stat=Friends&date=20041008&page=13&maplink=1" TITLE="Bill">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="204,321,242,321,242,337,204,337" HREF="index.php?action=Stats&stat=People&date=20040923&page=15&maplink=1" TITLE="Alma & Hilde">

<AREA SHAPE=POLY COORDS="136,170,175,170,175,186,136,186" HREF="index.php?action=Stats&stat=People&date=20040925&page=16&maplink=1" TITLE="Darren">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="210,252,240,252,240,267,210,267" HREF="index.php?action=Stats&stat=Sites&date=20040926&page=13&maplink=1" TITLE="Winter Olympic Sports Complex">

<AREA SHAPE=POLY COORDS="185,164,216,164,216,181,185,181" HREF="index.php?action=Stats&stat=Sites&date=20040927&page=14&maplink=1" TITLE="Whiteface Mountain">

<AREA SHAPE=POLY COORDS="276,160,308,160,308,176,276,176" HREF="index.php?action=Stats&stat=Sites&date=20040927&page=15&maplink=1" TITLE="Lake Champlain Ferries & Lake Champlain">

<AREA SHAPE=POLY COORDS="334,262,365,262,365,277,334,277" HREF="index.php?action=Stats&stat=Sites&date=20041004&page=17&maplink=1" TITLE="Ben & Jerry's Ice Cream Factory">

<AREA SHAPE=POLY COORDS="781,366,800,366,800,381,781,381" HREF="index.php?action=Stats&stat=Sites&date=20041013&page=20&maplink=1" TITLE="Porter-Parsonsfield Historical Bridge">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="204,276,263,276,263,292,204,292" HREF="index.php?action=Stats&stat=Communities&date=20040924&page=6&maplink=1" TITLE="Lake Placid, New York">

<AREA SHAPE=POLY COORDS="464,285,521,285,521,301,464,301" HREF="index.php?action=Stats&stat=Communities&date=20041004&page=7&maplink=1" TITLE="Montpelier, Vermont">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="356,190,393,190,393,206,356,206" HREF="index.php?action=Stats&stat=Oddities&date=20041001&page=18&maplink=1" TITLE="Worm Vending & Monster Insect">

<AREA SHAPE=POLY COORDS="382,286,420,286,420,302,382,302" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=20&maplink=1" TITLE="Flavor Graveyard">

<AREA SHAPE=POLY COORDS="694,311,734,311,734,328,694,328" HREF="index.php?action=Stats&stat=Oddities&date=20041009&page=23&maplink=1" TITLE="Bark Tube">

<AREA SHAPE=POLY COORDS="704,399,743,399,743,414,704,414" HREF="index.php?action=Stats&stat=Oddities&date=20041013.1&page=24&maplink=1" TITLE="Water French Impression, Tree Sprouting Mural, World Record Mega Burnout & Where's Waldo?">

<AREA SHAPE=POLY COORDS="714,286,753,286,753,303,714,303" HREF="index.php?action=Stats&stat=Oddities&date=20041017&page=28&maplink=1" TITLE="Questionable Shelter">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="28,288,68,288,68,304,28,304" HREF="index.php?action=Stats&stat=Mishaps&date=20040922&page=11&maplink=1" TITLE="Butterfly Rescue">

<AREA SHAPE=POLY COORDS="209,297,247,297,247,312,209,312" HREF="index.php?action=Stats&stat=Mishaps&date=20040923&page=12&maplink=1" TITLE="Injured Camera">

<AREA SHAPE=POLY COORDS="147,193,186,193,186,209,147,209" HREF="index.php?action=Stats&stat=Mishaps&date=20040925&page=13&maplink=1" TITLE="Trail Rash">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,75,295,78,305,443,303,661,281,739,0,739" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="704,0,779,573,754,626,672,668,458,663,532,259,614,201,667,0" HREF="index.php?action=Maps&state=NH" TITLE="New Hampshire">

<AREA SHAPE=POLY COORDS="702,0,786,575,798,549,799,0" HREF="index.php?action=Maps&state=ME" TITLE="Maine">

<AREA SHAPE=POLY COORDS="305,661,674,672,758,621,797,674,741,739,280,737" HREF="index.php?action=Maps&state=MA" TITLE="Massachusetts">

<!--
<AREA SHAPE=POLY COORDS="" HREF="index.php?action=Maps&state=RI" TITLE="Rhode Island">-->

</MAP>
