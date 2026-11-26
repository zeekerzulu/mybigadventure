<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>W A S H I N G T O N</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/WA_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="89,132,139,132,139,154,89,154" HREF="index.php?action=Stats&stat=States&nocomments=1&page=1#BC" TITLE="British Columbia Trip Statistics">

<AREA SHAPE=POLY COORDS="395,298,445,298,445,321,395,321" HREF="index.php?action=Stats&stat=States&nocomments=1&page=1#WA" TITLE="Washington State Trip Statistics">

<AREA SHAPE=POLY COORDS="685,394,735,394,735,417,685,417" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#ID" TITLE="Idaho Trip Statistics">

<AREA SHAPE=POLY COORDS="733,300,784,300,784,321,733,321" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#MT" TITLE="Montana Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="306,463,336,463,337,478,306,477" HREF="index.php?action=DailyEvents&date=20040708&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="352,366,384,367,385,382,352,383" HREF="index.php?action=DailyEvents&date=20040710&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="281,319,312,320,312,336,280,334" HREF="index.php?action=DailyEvents&date=20040711&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="224,211,254,212,253,227,224,228" HREF="index.php?action=DailyEvents&date=20040713&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="222,141,254,140,255,156,224,156	" HREF="index.php?action=DailyEvents&date=20040715&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="558,306,587,307,587,323,557,323" HREF="index.php?action=DailyEvents&date=20040719&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="618,241,648,241,648,257,618,257" HREF="index.php?action=DailyEvents&date=20040725&page=1" TITLE="Travel Log">

<!-- BIKING -->

<AREA SHAPE=POLY COORDS="250,463,282,464,282,479,250,479" HREF="index.php?action=Stats&stat=Biking&date=20040709&page=1&maplink=1" TITLE="Lewis River">

<AREA SHAPE=POLY COORDS="301,370,332,370,334,386,301,385" HREF="index.php?action=Stats&stat=Biking&date=20040711&page=2&maplink=1" TITLE="Fifes Ridge">

<AREA SHAPE=POLY COORDS="214,321,245,322,245,338,214,337" HREF="index.php?action=Stats&stat=Biking&date=20040712&page=3&maplink=1" TITLE="Downtown Seattle">

<AREA SHAPE=POLY COORDS="169,236,199,235,200,252,168,252" HREF="index.php?action=Stats&stat=Biking&date=20040714&page=4&maplink=1" TITLE="San Juan Island">

<AREA SHAPE=POLY COORDS="162,138,193,138,193,153,162,152" HREF="index.php?action=Stats&stat=Biking&date=20040716&page=5&maplink=1" TITLE="Vancouver Waterfront & Vancouver Chinatown">

<AREA SHAPE=POLY COORDS="588,283,618,282,619,299,587,298" HREF="index.php?action=Stats&stat=Biking&date=20040721&page=7&maplink=1" TITLE="Centennial Trail">

<AREA SHAPE=POLY COORDS="668,235,699,235,699,250,668,250" HREF="index.php?action=Stats&stat=Biking&date=20040726&page=8&maplink=1" TITLE="Gold Hill North">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="536,345,574,345,574,361,536,361" HREF="index.php?action=Stats&stat=Friends&date=20040720&page=1&maplink=1" TITLE="Gil">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="217,292,256,292,256,309,217,309" HREF="index.php?action=Stats&stat=People&date=20040712&page=1&maplink=1" TITLE="Alexander & Ted">

<AREA SHAPE=POLY COORDS="169,210,206,210,206,224,169,224" HREF="index.php?action=Stats&stat=People&date=20040714&page=3&maplink=1" TITLE="Christine & Ingrid, Paula & Rosemary">

<AREA SHAPE=POLY COORDS="166,109,204,109,204,125,166,125" HREF="index.php?action=Stats&stat=People&date=20040716&page=5&maplink=1" TITLE="Monica">

<AREA SHAPE=POLY COORDS="633,303,671,303,671,320,633,320" HREF="index.php?action=Stats&stat=People&date=20040721&page=6&maplink=1" TITLE="Adam, John, Patrick & John">

<AREA SHAPE=POLY COORDS="677,274,716,274,716,290,677,290" HREF="index.php?action=Stats&stat=People&date=20040726&page=7&maplink=1" TITLE="Katie & Ron">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="207,265,237,264,237,280,207,280" HREF="index.php?action=Stats&stat=Sites&date=20040714&page=1&maplink=1" TITLE="San Juan Island">

<AREA SHAPE=POLY COORDS="158,169,188,169,188,185,158,185" HREF="index.php?action=Stats&stat=Sites&date=20040717&page=2&maplink=1" TITLE="Dr. Sun Yat-Sen Classical Chinese Park and Garden">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="186,360,246,360,246,375,186,376" HREF="index.php?action=Stats&stat=Communities&date=20040712&page=1&maplink=1" TITLE="Seattle, Washington">

<AREA SHAPE=POLY COORDS="219,109,278,109,278,124,219,124" HREF="index.php?action=Stats&stat=Communities&date=20040716&page=2&maplink=1" TITLE="Vancouver, British Columbia">

<AREA SHAPE=POLY COORDS="596,208,654,208,654,223,596,223" HREF="index.php?action=Stats&stat=Communities&date=20040725&page=3&maplink=1" TITLE="Sandpoint, Idaho">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="253,416,279,417,279,432,253,432" HREF="index.php?action=Stats&stat=Parks&date=20040711&page=1&maplink=1" TITLE="Mount Rainier National Park">

<AREA SHAPE=POLY COORDS="326,257,350,257,350,272,326,272" HREF="index.php?action=Stats&stat=Parks&date=20040719&page=2&maplink=1" TITLE="North Cascades National Park">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="180,481,239,481,239,497,180,497" HREF="index.php?action=Stats&stat=Monuments&date=20040708&page=1&maplink=1" TITLE="Mount St. Helens National Volcanic Monument">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="262,520,300,520,300,536,262,536" HREF="index.php?action=Stats&stat=Oddities&date=20040708&page=1&maplink=1" TITLE="Long Trek to the Bathroom & Where the Rubber Meets the Road">

<AREA SHAPE=POLY COORDS="336,423,375,423,375,439,336,439" HREF="index.php?action=Stats&stat=Oddities&date=20040711&page=3&maplink=1" TITLE="Lost Civilization">

<AREA SHAPE=POLY COORDS="284,292,321,292,321,308,284,307" HREF="index.php?action=Stats&stat=Oddities&date=20040712&page=4&maplink=1" TITLE="Concrete Ship">

<AREA SHAPE=POLY COORDS="158,260,197,260,197,276,158,276" HREF="index.php?action=Stats&stat=Oddities&date=20040714&page=5&maplink=1" TITLE="Free Home, Mechanical Freak Show, & Born to be Wild">

<AREA SHAPE=POLY COORDS="239,172,277,172,277,188,239,188" HREF="index.php?action=Stats&stat=Oddities&date=20040719&page=8&maplink=1" TITLE="Orange Protection">

<AREA SHAPE=POLY COORDS="277,216,315,216,315,231,277,231" HREF="index.php?action=Stats&stat=Oddities&date=20040719&page=9&maplink=1" TITLE="Pet Cow Care">

<AREA SHAPE=POLY COORDS="372,208,410,208,410,222,372,222" HREF="index.php?action=Stats&stat=Oddities&date=20040719&page=10&maplink=1" TITLE="Big Bucks">

<AREA SHAPE=POLY COORDS="664,344,703,344,703,360,664,360" HREF="index.php?action=Stats&stat=Oddities&date=20040721&page=11&maplink=1" TITLE="Concrete Tarantula & Moose of a Different Color">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="309,494,347,494,347,510,309,510" HREF="index.php?action=Stats&stat=Mishaps&date=20040709&page=1&maplink=1" TITLE="Lost Bike Computer & Missing Watch">

<AREA SHAPE=POLY COORDS="366,394,404,394,404,411,366,410" HREF="index.php?action=Stats&stat=Mishaps&date=20040710&page=3&maplink=1" TITLE="Nocturnal Muscle Cramp & Bike Rack Breakdown">

<AREA SHAPE=POLY COORDS="584,348,622,348,622,365,584,365" HREF="index.php?action=Stats&stat=Mishaps&date=20040721&page=5&maplink=1" TITLE="Idiotic Road Rash">

<!-- STATES --->

<AREA SHAPE=POLY COORDS="626,195,690,191,695,296,722,352,796,419,798,739,646,739,652,689,629,675,677,541,639,499" HREF="index.php?action=Maps&state=ID" TITLE="Idaho">

<AREA SHAPE=POLY COORDS="688,191,798,184,798,418,723,350,693,294" HREF="index.php?action=Maps&state=W_MT" TITLE="Montana">

<AREA SHAPE=POLY COORDS="140,474,218,495,236,552,320,536,500,507,645,503,677,544,632,681,653,692,647,739,115,739" HREF="index.php?action=Maps&state=OR" TITLE="Oregon">

</MAP>
