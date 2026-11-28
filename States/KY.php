<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>K E N T U C K Y</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/KY_20050822.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="68,187,119,187,119,207,68,207" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IL" TITLE="Illinois Trip Statistics">

<AREA SHAPE=POLY COORDS="299,186,346,186,346,208,299,208" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IN" TITLE="Indiana Trip Statistics">

<AREA SHAPE=POLY COORDS="561,105,609,105,609,126,561,126" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<AREA SHAPE=POLY COORDS="358,400,405,400,405,423,358,423" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<AREA SHAPE=POLY COORDS="410,490,459,490,459,513,410,513" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<AREA SHAPE=POLY COORDS="671,464,719,464,719,485,671,485" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<AREA SHAPE=POLY COORDS="626,611,673,611,673,633,626,633" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#NC" TITLE="North Carolina Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="304,441,334,441,334,456,304,456" HREF="index.php?action=DailyEvents&date=20041104&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="446,572,477,572,477,587,446,587" HREF="index.php?action=DailyEvents&date=20041106&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="402,557,433,557,433,573,402,573" HREF="index.php?action=DailyEvents&date=20041108&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="14,568,44,568,44,583,14,583" HREF="index.php?action=DailyEvents&date=20041109&page=1" TITLE="Travel Log">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="454,594,487,594,487,612,454,612" HREF="index.php?action=Stats&stat=Hiking&date=20041107&page=9&maplink=1" TITLE="Andrews Bald & Clingmans Dome Trail">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="338,364,378,364,378,381,338,381" HREF="index.php?action=Stats&stat=People&date=20041106&page=19&maplink=1" TITLE="Ernesta">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="332,511,363,511,363,528,332,528" HREF="index.php?action=Stats&stat=Sites&date=20041109&page=34&maplink=1" TITLE="Tennessee Scenic Overlook">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="281,384,306,384,306,399,281,399" HREF="index.php?action=Stats&stat=Parks&date=20041105&page=10&maplink=1" TITLE="Mammoth Cave National Park">

<AREA SHAPE=POLY COORDS="525,586,550,586,550,602,525,602" HREF="index.php?action=Stats&stat=Parks&date=20041107&page=11&maplink=1" TITLE="Great Smoky Mountains National Park">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="268,415,305,415,305,431,268,431" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=45&maplink=1" TITLE="Amish Tailgater">

<AREA SHAPE=POLY COORDS="285,355,323,355,323,372,285,372" HREF="index.php?action=Stats&stat=Oddities&date=20041005&page=46&maplink=1" TITLE="Underground Eats">

<AREA SHAPE=POLY COORDS="498,608,536,608,536,625,498,625" HREF="index.php?action=Stats&stat=Oddities&date=20041107&page=47&maplink=1" TITLE="Spaceship Viewpoint">

<AREA SHAPE=POLY COORDS="341,548,380,548,380,564,341,564" HREF="index.php?action=Stats&stat=Oddities&date=20041109&page=48&maplink=1" TITLE="Tennessee Mexican">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="467,636,692,469,798,466,798,645,746,613,629,613,572,635" HREF="index.php?action=Maps&state=NC" TITLE="North Carolina">

<AREA SHAPE=POLY COORDS="0,568,43,472,691,466,469,634,0,622," HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">

<AREA SHAPE=POLY COORDS="430,0,764,0,742,151,611,284,429,203" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="526,469,662,376,691,402,798,359,798,468" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">

<AREA SHAPE=POLY COORDS="221,0,428,0,429,250,168,346,212,244," HREF="index.php?action=Maps&state=IN" TITLE="Indiana">

<AREA SHAPE=POLY COORDS="0,0,219,0,210,256,128,419,64,423,0,306" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">

<AREA SHAPE=POLY COORDS="764,0,798,0,798,140,769,142" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">

<AREA SHAPE=POLY COORDS="0,625,155,634,140,738,0,739" HREF="index.php?action=Maps&state=MS" TITLE="Mississippi">

<!--
<AREA SHAPE=POLY COORDS="622,737,553,665,574,631,760,617,770,644,798,643,798,739" HREF="index.php?action=Maps&state=SC" TITLE="South Carolina">
<AREA SHAPE=POLY COORDS="363,633,576,634,555,662,621,739,382,739" HREF="index.php?action=Maps&state=GA" TITLE="Georgia">
<AREA SHAPE=POLY COORDS="0,314,69,446,21,522,0,523" HREF="index.php?action=Maps&state=MO" TITLE="Missouri">
<AREA SHAPE=POLY COORDS="799,360,685,403,608,290,743,146,762,46,770,143,798,143" HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">
<AREA SHAPE=POLY COORDS="155,633,365,637,380,739,140,739" HREF="index.php?action=Maps&state=AL" TITLE="Alabama">
-->

</MAP>
