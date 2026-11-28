<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>T E N N E S S E E</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/TN_20050822.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="139,98,187,98,187,120,139,120" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IL" TITLE="Illinois Trip Statistics">

<AREA SHAPE=POLY COORDS="372,65,421,65,421,87,372,87" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IN" TITLE="Indiana Trip Statistics">

<AREA SHAPE=POLY COORDS="599,32,649,32,649,54,599,54" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<AREA SHAPE=POLY COORDS="696,289,745,289,745,310,696,310" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<AREA SHAPE=POLY COORDS="439,216,487,216,487,242,439,242" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<AREA SHAPE=POLY COORDS="661,427,709,427,709,448,661,448" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#NC" TITLE="North Carolina Trip Statistics">

<AREA SHAPE=POLY COORDS="319,375,368,375,368,397,319,397" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<AREA SHAPE=POLY COORDS="97,597,146,597,146,618,97,618" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#MS" TITLE="Mississippi Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="382,261,414,261,414,277,382,277" HREF="index.php?action=DailyEvents&date=20041104&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="527,379,556,379,556,393,527,393" HREF="index.php?action=DailyEvents&date=20041106&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="472,378,503,378,503,395,472,395" HREF="index.php?action=DailyEvents&date=20041108&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="94,391,124,391,124,406,94,406" HREF="index.php?action=DailyEvents&date=20041109&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="29,455,60,455,60,473,29,473" HREF="index.php?action=DailyEvents&date=20041110&page=1" TITLE="Travel Log">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="519,408,553,408,553,426,519,426" HREF="index.php?action=Stats&stat=Hiking&date=20041107&page=9&maplink=1" TITLE="Andrews Bald & Clingmans Dome Trail">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="417,179,456,179,456,195,417,195" HREF="index.php?action=Stats&stat=People&date=20041106&page=19&maplink=1" TITLE="Ernesta">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="416,327,446,327,446,344,416,344" HREF="index.php?action=Stats&stat=Sites&date=20041109&page=34&maplink=1" TITLE="Tennessee Scenic Overlook">

<AREA SHAPE=POLY COORDS="17,419,48,419,48,435,17,435" HREF="index.php?action=Stats&stat=Sites&date=20041110.1&page=35&maplink=1" TITLE="Graceland, Mississippi Riverboats & Beale Street">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="17,389,75,389,75,404,17,404" HREF="index.php?action=Stats&stat=Sites&date=20041110&page=11&maplink=1" TITLE="Memphis, Tennessee">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="361,192,384,192,384,208,361,208" HREF="index.php?action=Stats&stat=Parks&date=20041105&page=10&maplink=1" TITLE="Mammoth Cave National Park">

<AREA SHAPE=POLY COORDS="612,403,638,403,638,419,612,419" HREF="index.php?action=Stats&stat=Parks&date=20041107&page=11&maplink=1" TITLE="Great Smoky Mountains National Park">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="362,232,401,232,401,247,362,247" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=45&maplink=1" TITLE="Amish Tailgater">

<AREA SHAPE=POLY COORDS="368,164,405,164,405,180,368,180" HREF="index.php?action=Stats&stat=Oddities&date=20041005&page=46&maplink=1" TITLE="Underground Eats">

<AREA SHAPE=POLY COORDS="565,433,604,433,604,449,565,449" HREF="index.php?action=Stats&stat=Oddities&date=20041107&page=47&maplink=1" TITLE="Spaceship Viewpoint">

<AREA SHAPE=POLY COORDS="496,318,534,318,534,335,496,335" HREF="index.php?action=Stats&stat=Oddities&date=20041109&page=48&maplink=1" TITLE="Tennessee Mexican">

<AREA SHAPE=POLY COORDS="94,455,133,455,133,471,94,471" HREF="index.php?action=Stats&stat=Oddities&date=20041110&page=49&maplink=1" TITLE="Ode to Elvis & Talking Wall">

<AREA SHAPE=POLY COORDS="18,617,55,617,55,632,18,632" HREF="index.php?action=Stats&stat=Oddities&date=20041111&page=51&maplink=1" TITLE="Great White Truck">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="636,480,656,451,723,428,798,429,797,647,678,506," HREF="index.php?action=Maps&state=SC" TITLE="South Carolina">

<AREA SHAPE=POLY COORDS="553,453,771,283,796,284,798,427,715,430,655,452" HREF="index.php?action=Maps&state=NC" TITLE="North Carolina">

<AREA SHAPE=POLY COORDS="605,288,738,192,767,221,790,205,798,212,798,282" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">

<AREA SHAPE=POLY COORDS="130,293,162,223,210,239,208,207,239,192,243,162,432,120,458,69,506,59,508,25,543,38,553,63,632,79,661,64,687,105,692,140,737,192,604,289,244,281,241,299" HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">

<AREA SHAPE=POLY COORDS="505,0,589,77,630,83,661,67,696,100,707,98,718,76,727,34,746,44,761,0" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="292,0,504,0,505,63,477,77,456,71,457,89,409,149,381,128,360,159,344,146,318,166,244,166,289,69,279,25" HREF="index.php?action=Maps&state=IN" TITLE="Indiana">

<AREA SHAPE=POLY COORDS="30,0,290,0,279,32,287,76,237,180,236,198,207,209,210,236,162,223,141,245,127,213,122,175,56,109,75,67,37,43" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">

<AREA SHAPE=POLY COORDS="0,527,59,444,234,456,198,739,0,738" HREF="index.php?action=Maps&state=MS" TITLE="Mississippi">

<!--
<AREA SHAPE=POLY COORDS="446,456,597,451,653,454,636,482,676,506,709,558,757,603,799,649,799,739,505,739" HREF="index.php?action=Maps&state=GA" TITLE="Georgia">
<AREA SHAPE=POLY COORDS="0,0,26,0,40,43,54,38,80,51,58,112,124,176,131,206,126,219,139,242,156,248,146,289,136,283,100,345,52,343,73,320,63,294,0,288" HREF="index.php?action=Maps&state=MO" TITLE="Missouri">
<AREA SHAPE=POLY COORDS="798,212,789,207,761,220,737,189,694,140,689,101,708,96,712,78,720,78,714,57,728,35,746,45,759,0,798,0" HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">
<AREA SHAPE=POLY COORDS="231,456,448,457,506,738,198,738," HREF="index.php?action=Maps&state=AL" TITLE="Alabama">
<AREA SHAPE=POLY COORDS="0,289,65,292,74,317,47,343,103,348,0,530" HREF="index.php?action=Maps&state=AR" TITLE="Arkansas">-->
</MAP>
