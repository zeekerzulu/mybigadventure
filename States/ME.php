<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M A I N E</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/ME_20050715.gif" USEMAP="#map">
<MAP id="map1_map" NAME="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="10,553,59,553,59,574,10,574" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="97,555,147,555,147,578,97,578" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#VT" TITLE="Vermont Trip Statistics">

<AREA SHAPE=POLY COORDS="179,582,229,582,229,603,179,603" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#NH" TITLE="New Hampshire Trip Statistics">

<AREA SHAPE=POLY COORDS="364,398,415,398,415,420,364,420" HREF="index.php?action=Stats&stat=States&nocomments=1&page=6#ME" TITLE="Maine Trip Statistics">

<!-- TRAVEL LOG --->

<AREA SHAPE=POLY COORDS="21,443,51,443,51,458,21,458" HREF="index.php?action=DailyEvents&date=20040922&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="108,429,139,429,139,445,108,445" HREF="index.php?action=DailyEvents&date=20040927&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="437,414,468,414,468,430,437,430" HREF="index.php?action=DailyEvents&date=20041004&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="485,509,515,509,515,526,485,526" HREF="index.php?action=DailyEvents&date=20041005&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="257,499,289,499,289,515,257,515" HREF="index.php?action=DailyEvents&date=20041008&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="302,591,333,591,333,607,302,607" HREF="index.php?action=DailyEvents&date=20041015&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="364,554,393,554,393,571,364,571" HREF="index.php?action=DailyEvents&date=20041018&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="203,626,234,626,234,641,203,641" HREF="index.php?action=DailyEvents&date=20041019&page=1" TITLE="Travel Log">

<!-- BIKING -->

<AREA SHAPE=POLY COORDS="0,443,15,443,15,458,0,458" HREF="index.php?action=Stats&stat=Biking&date=20040922&page=15&maplink=1" TITLE="Adirondack State Park">

<AREA SHAPE=POLY COORDS="61,420,93,410,93,437,61,437" HREF="index.php?action=Stats&stat=Biking&date=20040925&page=16&maplink=1" TITLE="Whiteface Mountain">

<AREA SHAPE=POLY COORDS="491,486,524,486,524,501,491,501" HREF="index.php?action=Stats&stat=Biking&date=20041006&page=17&maplink=1" TITLE="Acadia National Park & The Heart of Acadia">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="18,501,51,501,51,517,18,517" HREF="index.php?action=Stats&stat=Hiking&date=20040923&page=5&maplink=1" TITLE="Mount Marcy">

<AREA SHAPE=POLY COORDS="502,461,535,461,535,476,502,476" HREF="index.php?action=Stats&stat=Hiking&date=20041005&page=6&maplink=1" TITLE="Cadillac Mountain">

<AREA SHAPE=POLY COORDS="192,520,225,520,225,535,192,535" HREF="index.php?action=Stats&stat=Hiking&date=20041009&page=7&maplink=1" TITLE="Mount Chocorua">

<AREA SHAPE=POLY COORDS="286,474,319,474,319,491,286,491" HREF="index.php?action=Stats&stat=Hiking&date=20041017&page=8&maplink=1" TITLE="Pleasant Mountain">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="247,549,286,549,286,565,247,565" HREF="index.php?action=Stats&stat=Friends&date=20041008&page=13" TITLE="Bill">

<AREA SHAPE=POLY COORDS="342,534,381,534,381,549,342,549" HREF="index.php?action=Stats&stat=Friends&date=20041015&page=14" TITLE="Monica">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="42,521,80,521,80,536,42,536" HREF="index.php?action=Stats&stat=People&date=20040923&page=15&maplink=1" TITLE="Alma & Hilde">

<AREA SHAPE=POLY COORDS="0,395,39,395,39,411,0,411" HREF="index.php?action=Stats&stat=People&date=20040925&page=16&maplink=1" TITLE="Darren">

<AREA SHAPE=POLY COORDS="410,515,448,515,448,532,410,532" HREF="index.php?action=Stats&stat=People&date=20041005&page=17&maplink=1" TITLE="Laura & Jonathan, Jean & Celine">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="46,395,76,395,76,410,46,410" HREF="index.php?action=Stats&stat=Sites&date=20040927&page=14&maplink=1" TITLE="Whiteface Mountain">

<AREA SHAPE=POLY COORDS="94,400,125,400,125,415,94,415" HREF="index.php?action=Stats&stat=Sites&date=20040927&page=15&maplink=1" TITLE="Lake Champlain Ferries & Lake Champlain">

<AREA SHAPE=POLY COORDS="127,492,157,492,157,509,127,509" HREF="index.php?action=Stats&stat=Sites&date=20041004&page=17&maplink=1" TITLE="Ben & Jerry's Ice Cream Factory">

<AREA SHAPE=POLY COORDS="414,472,445,472,445,488,414,488" HREF="index.php?action=Stats&stat=Sites&date=20041008.1&page=18&maplink=1" TITLE="Cadillac Mountain Sunrise & Bass Harbor Lighthouse">

<AREA SHAPE=POLY COORDS="285,518,315,518,315,534,285,534" HREF="index.php?action=Stats&stat=Sites&date=20041013&page=20&maplink=1" TITLE="Porter-Parsonsfield Historic Bridge">

<AREA SHAPE=POLY COORDS="320,568,351,568,351,583,320,583" HREF="index.php?action=Stats&stat=Sites&date=20041016&page=21&maplink=1" TITLE="Southern Maine Coast & Nubble Lighthouse">

<AREA SHAPE=POLY COORDS="203,686,234,686,234,701,203,701" HREF="index.php?action=Stats&stat=Sites&date=20041020.1&page=23&maplink=1" TITLE="The Freedom Trail & Boston Red Sox Capture American League Pennant">

<AREA SHAPE=POLY COORDS="330,671,361,671,361,687,330,687" HREF="index.php?action=Stats&stat=Sites&date=20041021&page=25&maplink=1" TITLE="Cape Cod">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="454,513,481,513,481,530,454,530" HREF="index.php?action=Stats&stat=Parks&date=20041005&page=9&maplink=1" TITLE="Acadia National Park">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="59,471,117,471,117,486,59,486" HREF="index.php?action=Stats&stat=Communities&date=20040924&page=6&maplink=1" TITLE="Lake Placid, New York">

<AREA SHAPE=POLY COORDS="169,484,228,484,228,500,169,500" HREF="index.php?action=Stats&stat=Communities&date=20041004&page=7&maplink=1" TITLE="Montpelier, Vermont">

<AREA SHAPE=POLY COORDS="486,441,545,441,545,457,486,457" HREF="index.php?action=Stats&stat=Communities&date=20041005&page=8&maplink=1" TITLE="Bar Harbor, Maine">

<AREA SHAPE=POLY COORDS="171,662,230,662,230,677,171,667" HREF="index.php?action=Stats&stat=Communities&date=20041020&page=9&maplink=1" TITLE="Boston, Massachusetts">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="355,719,413,719,413,735,355,735" HREF="index.php?action=Stats&stat=Monuments&date=20041020&page=4&maplink=1" TITLE="Pilgrim Monument">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="128,448,166,448,166,464,128,464" HREF="index.php?action=Stats&stat=Oddities&date=20041001&page=18&maplink=1" TITLE="Worm Vending & Monster Insect">

<AREA SHAPE=POLY COORDS="86,517,125,517,125,533,86,533" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=20&maplink=1" TITLE="Flavor Graveyard">

<AREA SHAPE=POLY COORDS="397,494,436,494,436,509,397,509" HREF="index.php?action=Stats&stat=Oddities&date=20041005&page=21&maplink=1" TITLE="Inviting Claws">

<AREA SHAPE=POLY COORDS="300,499,339,499,339,514,300,514" HREF="index.php?action=Stats&stat=Oddities&date=20041008&page=22&maplink=1" TITLE="Two-Tone Home">

<AREA SHAPE=POLY COORDS="235,480,273,480,273,495,235,495" HREF="index.php?action=Stats&stat=Oddities&date=20041009&page=23&maplink=1" TITLE="Bark Tube">

<AREA SHAPE=POLY COORDS="203,543,241,543,241,558,203,558" HREF="index.php?action=Stats&stat=Oddities&date=20041013.1&page=24&maplink=1" TITLE="Water French Impression, Tree Sprouting Mural, World Record Mega Burnout & Where's Waldo?">

<AREA SHAPE=POLY COORDS="280,664,319,664,319,681,280,681" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=29&maplink=1" TITLE="Boot of Despair, Pink Duck & Haggard Graves">

<AREA SHAPE=POLY COORDS="348,693,388,693,388,710,348,710" HREF="index.php?action=Stats&stat=Oddities&date=20041020&page=33&maplink=1" TITLE="Retired Anchor">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="59,490,99,490,99,507,59,507" HREF="index.php?action=Stats&stat=Mishaps&date=20040923&page=12&maplink=1" TITLE="Injured Camera">

<AREA SHAPE=POLY COORDS="15,421,55,421,55,436,15,436" HREF="index.php?action=Stats&stat=Mishaps&date=20040925&page=13&maplink=1" TITLE="Trail Rash">

<AREA SHAPE=POLY COORDS="478,422,516,422,516,438,478,438" HREF="index.php?action=Stats&stat=Mishaps&date=20041005&page=14&maplink=1" TITLE="Early Morning Wakeup Call">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,397,93,403,60,739,0,739" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="91,402,223,409,216,460,183,478,140,641,84,636" HREF="index.php?action=Maps&state=VT" TITLE="Vermont">

<AREA SHAPE=POLY COORDS="223,406,255,384,258,577,276,607,264,633,232,646,138,639" HREF="index.php?action=Maps&state=NH" TITLE="New Hampshire">

<AREA SHAPE=POLY COORDS="87,634,232,647,268,631,284,656,290,738,234,739,221,715,64,710" HREF="index.php?action=Maps&state=MA" TITLE="Massachusetts">

<AREA SHAPE=POLY COORDS="66,705,195,719,196,739,61,739" HREF="index.php?action=Maps&state=CT" TITLE="Connecticut">

<!--
<AREA SHAPE=POLY COORDS="194,713,224,717,220,739,196,739" HREF="index.php?action=Maps&state=RI" TITLE="Rhode Island">-->

</MAP>
