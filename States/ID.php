<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>I D A H O</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/ID_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="96,174,146,174,146,195,96,195" HREF="index.php?action=Stats&stat=States&nocomments=1&page=1#WA" TITLE="Washington State Trip Statistics">

<AREA SHAPE=POLY COORDS="283,194,334,194,334,216,283,216" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#ID" TITLE="Idaho Trip Statistics">

<AREA SHAPE=POLY COORDS="526,175,575,175,575,196,526,196" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#MT" TITLE="Montana Trip Statistics">

<AREA SHAPE=POLY COORDS="722,632,771,632,771,654,722,654" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#WY" TITLE="Wyoming Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="173,103,203,103,203,118,173,118" HREF="index.php?action=DailyEvents&date=20040719&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="238,46,279,44,269,63,240,63" HREF="index.php?action=DailyEvents&date=20040725&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="442,53,472,53,472,69,442,69" HREF="index.php?action=DailyEvents&date=20040727&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="432,6,463,6,463,22,432,22" HREF="index.php?action=DailyEvents&date=20040728&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="609,220,640,220,640,235,609,235" HREF="index.php?action=DailyEvents&date=20040729&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="685,312,715,312,715,329,685,329" HREF="index.php?action=DailyEvents&date=20040730&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="641,383,671,383,671,400,641,400" HREF="index.php?action=DailyEvents&date=20040804&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="623,437,654,437,654,451,623,451" HREF="index.php?action=DailyEvents&date=20040805&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="708,371,740,371,740,386,708,386" HREF="index.php?action=DailyEvents&date=20040806&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="722,561,752,561,752,576,722,576" HREF="index.php?action=DailyEvents&date=20040807&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="662,535,692,535,692,551,662,551" HREF="index.php?action=DailyEvents&date=20040814&page=1" TITLE="Travel Log">

<!-- BIKING -->

<AREA SHAPE=POLY COORDS="198,70,230,70,230,85,198,85" HREF="index.php?action=Stats&stat=Biking&date=20040721&page=7&maplink=1" TITLE="Centennial Trail">

<AREA SHAPE=POLY COORDS="290,41,322,41,322,56,290,56" HREF="index.php?action=Stats&stat=Biking&date=20040726&page=8&maplink=1" TITLE="Gold Hill North">

<AREA SHAPE=POLY COORDS="409,26,440,26,440,42,409,42" HREF="index.php?action=Stats&stat=Biking&date=20040728&page=9&maplink=1" TITLE="Logan Pass">

<AREA SHAPE=POLY COORDS="627,347,659,347,659,363,627,363" HREF="index.php?action=Stats&stat=Biking&date=20040730&page=10&maplink=1" TITLE="Emerald Lake">

<AREA SHAPE=POLY COORDS="734,497,767,497,767,514,734,514" HREF="index.php?action=Stats&stat=Biking&date=20040814&page=11&maplink=1" TITLE="Shadow Mountain">

<AREA SHAPE=POLY COORDS="657,501,689,501,689,517,657,517" HREF="index.php?action=Stats&stat=Biking&date=20040815&page=12&maplink=1" TITLE="Signal Mountain">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="719,390,752,390,752,405,719,405" HREF="index.php?action=Stats&stat=Hiking&date=20040807&page=1&maplink=1" TITLE="Sepulcher Mountain">

<AREA SHAPE=POLY COORDS="718,417,752,417,752,433,718,433" HREF="index.php?action=Stats&stat=Hiking&date=20040807&page=2&maplink=1" TITLE="Bunsen Peak">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="154,140,192,140,192,157,154,157" HREF="index.php?action=Stats&stat=Friends&date=20040719&page=1&maplink=1" TITLE="Gil">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="246,109,284,109,284,124,246,124" HREF="index.php?action=Stats&stat=People&date=20040721&page=6&maplink=1" TITLE="Adam, John, Patrick & John">

<AREA SHAPE=POLY COORDS="300,81,338,81,338,96,300,96" HREF="index.php?action=Stats&stat=People&date=20040726&page=7&maplink=1" TITLE="Katie & Ron">

<AREA SHAPE=POLY COORDS="588,307,626,307,626,322,588,322" HREF="index.php?action=Stats&stat=People&date=20040731&page=8&maplink=1" TITLE="Patrick">

<AREA SHAPE=POLY COORDS="750,353,788,353,788,368,750,368" HREF="index.php?action=Stats&stat=People&date=20040804&page=9&maplink=1" TITLE="Bud">

<AREA SHAPE=POLY COORDS="617,417,654,417,654,432,617,432" HREF="index.php?action=Stats&stat=People&date=20040807&page=10&maplink=1" TITLE="Dave & Jana, Brian">

<AREA SHAPE=POLY COORDS="770,518,800,518,800,533,770,533" HREF="index.php?action=Stats&stat=People&date=20040814&page=12&maplink=1" TITLE="Lindsay">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="606,366,637,366,637,382,606,382" HREF="index.php?action=Stats&stat=Sites&date=20040804&page=3&maplink=1" TITLE="Montana Grizzly Encounters">

<AREA SHAPE=POLY COORDS="659,562,689,562,689,577,659,577" HREF="index.php?action=Stats&stat=Sites&date=20040809&page=4&maplink=1" TITLE="Wild West Stagecoach Robbery & Grand Tetons Sunset">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="218,16,276,16,276,32,218,32" HREF="index.php?action=Stats&stat=Communities&date=20040725&page=3&maplink=1" TITLE="Sandpoint, Idaho">

<AREA SHAPE=POLY COORDS="668,586,726,586,726,601,668,601" HREF="index.php?action=Stats&stat=Communities&date=20040808&page=4&maplink=1" TITLE="Jackson, Wyoming">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="516,23,541,23,541,38,516,38" HREF="index.php?action=Stats&stat=Parks&date=20040728&page=3&maplink=1" TITLE="Glacier National Park">

<AREA SHAPE=POLY COORDS="730,472,755,472,755,487,730,487" HREF="index.php?action=Stats&stat=Parks&date=20040805&page=4&maplink=1" TITLE="Yellowstone National Park">

<AREA SHAPE=POLY COORDS="606,394,636,394,636,410,606,410" HREF="index.php?action=Parks&date=20040805.1&page=1" TITLE="Mammoth Hot Springs">

<AREA SHAPE=POLY COORDS="624,455,654,455,654,470,624,470" HREF="index.php?action=Parks&date=20040805.2&page=1" TITLE="Norris Geyser Basin, Fountain Paint Pot & Old Faithful Area">

<AREA SHAPE=POLY COORDS="746,442,776,442,776,457,746,457" HREF="index.php?action=Parks&date=20040806.3&page=1" TITLE="West Thumb Geyser Basin, Mud Volcano & Canyon Area">

<AREA SHAPE=POLY COORDS="733,529,758,529,758,546,733,546" HREF="index.php?action=Stats&stat=Parks&date=20040815&page=5&maplink=1" TITLE="Grand Teton National Park">

<!-- MUSEUMS -->

<AREA SHAPE=POLY COORDS="574,327,619,327,619,342,574,342" HREF="index.php?action=Stats&stat=Museums&date=20040801&page=1&maplink=1" TITLE="Museum of the Rockies">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="275,149,314,149,314,165,275,165" HREF="index.php?action=Stats&stat=Oddities&date=20040721&page=11&maplink=1" TITLE="Concrete Tarantula & Moose of a Different Color">

<AREA SHAPE=POLY COORDS="550,37,589,37,589,53,550,53" HREF="index.php?action=Stats&stat=Oddities&date=20040729&page=13&maplink=1" TITLE="Java Tepee">

<AREA SHAPE=POLY COORDS="510,120,548,120,548,136,510,136" HREF="index.php?action=Stats&stat=Oddities&date=20040729&page=14&maplink=1" TITLE="Steel Indians">

<AREA SHAPE=POLY COORDS="769,466,800,466,800,481,769,481" HREF="index.php?action=Stats&stat=Oddities&date=20040805&page=15&maplink=1" TITLE="Got Buffalo Milk?">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="205,150,244,150,244,166,205,166" HREF="index.php?action=Stats&stat=Mishaps&date=20040721&page=5&maplink=1" TITLE="Idiotic Road Rash">

<AREA SHAPE=POLY COORDS="487,50,525,50,525,65,487,65" HREF="index.php?action=Stats&stat=Mishaps&date=20040729&page=6&maplink=1" TITLE="Park Ranger">

<!-- REVELATIONS -->

<AREA SHAPE=POLY COORDS="491,0,549,0,549,16,491,16" HREF="index.php?action=Stats&stat=Revelations&date=20040729&page=1&maplink=1" TITLE="Vista Disconnect">

<AREA SHAPE=POLY COORDS="646,289,705,289,705,303,646,303" HREF="index.php?action=Stats&stat=Revelations&date=20040801&page=2&maplink=1" TITLE="Hair is Over-Rated">

<AREA SHAPE=POLY COORDS="714,334,772,334,772,348,714,348" HREF="index.php?action=Stats&stat=Revelations&date=20040804&page=3&maplink=1" TITLE="Eating">

<AREA SHAPE=POLY COORDS="621,479,680,479,680,494,621,494" HREF="index.php?action=Stats&stat=Revelations&date=20040806&page=4&maplink=1" TITLE="The Mirror Trap & Water">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="317,0,798,0,797,399,672,407,674,453,541,477,463,343,425,363,434,241,314,103" HREF="index.php?action=Maps&state=W_MT" TITLE="Montana">

<AREA SHAPE=POLY COORDS="0,0,249,0,246,306,106,302,0,327" HREF="index.php?action=Maps&state=WA" TITLE="Washington">

<AREA SHAPE=POLY COORDS="4,711,460,724,461,739,0,737" HREF="index.php?action=Maps&state=NV" TITLE="Nevada">

<AREA SHAPE=POLY COORDS="0,329,106,301,248,310,277,348,219,475,245,500,229,718,0,708" HREF="index.php?action=Maps&state=OR" TITLE="Oregon">

<AREA SHAPE=POLY COORDS="460,722,688,717,688,738,460,738" HREF="index.php?action=Maps&state=UT" TITLE="Utah">

<AREA SHAPE=POLY COORDS="672,407,798,399,799,739,688,738" HREF="index.php?action=Maps&state=WY" TITLE="Wyoming">

</MAP>
