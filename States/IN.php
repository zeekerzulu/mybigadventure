<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>I N D I A N A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/IN_20050821.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="136,60,185,60,185,80,136,80" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#WI" TITLE="Wisconsin Trip Statistics">

<AREA SHAPE=POLY COORDS="111,356,161,356,161,377,111,377" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IL" TITLE="Illinois Trip Statistics">

<AREA SHAPE=POLY COORDS="380,329,429,329,429,351,380,351" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IN" TITLE="Indiana Trip Statistics">

<AREA SHAPE=POLY COORDS="631,330,680,330,680,352,631,352" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<AREA SHAPE=POLY COORDS="448,631,495,631,495,653,448,652" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<AREA SHAPE=POLY COORDS="475,716,524,716,524,736,475,736" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<AREA SHAPE=POLY COORDS="715,670,762,670,762,694,715,693" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="352,142,384,142,384,158,353,157" HREF="index.php?action=DailyEvents&date=20040831&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="626,213,656,215,657,231,626,229" HREF="index.php?action=DailyEvents&date=20040903&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="233,147,264,145,264,163,235,162" HREF="index.php?action=DailyEvents&date=20040830&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="392,673,423,673,423,689,392,689" HREF="index.php?action=DailyEvents&date=20041104&page=1" TITLE="Travel Log">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="415,592,454,592,454,609,415,609" HREF="index.php?action=Stats&stat=People&date=20041106&page=19&maplink=1" TITLE="Ernesta">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="688,213,718,213,718,229,688,229" HREF="index.php?action=Stats&stat=Sites&date=20040904&page=11&maplink=1" TITLE="Cedar Point Amusement Park">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="345,199,371,199,371,214,345,214" HREF="index.php?action=Stats&stat=Parks&date=20040901&page=7&maplink=1" TITLE="Indiana Dunes National Lakeshore">

<AREA SHAPE=POLY COORDS="359,606,384,606,384,623,359,623" HREF="index.php?action=Stats&stat=Parks&date=20041105&page=10&maplink=1" TITLE="Mammoth Cave National Park">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="353,639,392,639,392,653,353,653" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=45&maplink=1" TITLE="Amish Tailgater">

<AREA SHAPE=POLY COORDS="371,579,411,579,411,596,371,596" HREF="index.php?action=Stats&stat=Oddities&date=20041005&page=46&maplink=1" TITLE="Underground Eats">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="237,176,276,176,276,191,237,191" HREF="index.php?action=Stats&stat=Mishaps&date=20040830&page=9&maplink=1" TITLE="Chicago Blues">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="36,0,330,0,339,95,66,81,33,57,28,30" HREF="index.php?action=Maps&state=WI" TITLE="Wisconsin">

<AREA SHAPE=POLY COORDS="63,82,339,92,323,165,299,170,293,484,208,651,169,634,149,656,125,581,63,519,87,463,62,449,48,458,39,437,0,372,0,278,34,233,25,197,81,180,100,132" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">

<AREA SHAPE=POLY COORDS="507,177,611,166,636,149,694,171,798,107,798,400,693,510,658,473,598,484,515,433" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="134,704,534,441,589,484,664,474,740,600,609,698" HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">

<AREA SHAPE=POLY COORDS="111,739,128,704,246,708,250,691,783,691,749,738" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">

<AREA SHAPE=POLY COORDS="748,739,780,691,798,690,799,739" HREF="index.php?action=Maps&state=NC" TITLE="North Carolina">

<AREA SHAPE=POLY COORDS="609,696,743,600,775,630,798,614,799,691" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">

<!--

<AREA SHAPE=POLY COORDS="328,0,696,0,608,170,324,166,342,70" HREF="index.php?action=Maps&state=MI" TITLE="Michigan">

<AREA SHAPE=POLY COORDS="0,0,35,0,33,56,96,147,67,187,28,195,21,213,32,242,0,277" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">

<AREA SHAPE=POLY COORDS="0,373,50,457,60,449,90,465,60,524,130,584,162,661,130,708,114,738,66,738,75,705,0,699" HREF="index.php?action=Maps&state=MO" TITLE="Missouri">

<AREA SHAPE=POLY COORDS="0,699,80,708,72,739,0,738" HREF="index.php?action=Maps&state=AR" TITLE="Arkansas">

<AREA SHAPE=POLY COORDS="689,534,691,507,796,401,798,615,772,631," HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">-->

</MAP>
