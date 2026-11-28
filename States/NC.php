<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N O R T H&nbsp;&nbsp;&nbsp;C A R O L I N A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/NC_20050821.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="650,42,697,42,697,63,650,60" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#MD" TITLE="Maryland Trip Statistics">

<AREA SHAPE=POLY COORDS="69,146,120,146,120,168,69,168" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<AREA SHAPE=POLY COORDS="390,204,440,204,440,228,390,226" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<AREA SHAPE=POLY COORDS="482,420,531,420,531,444,482,443" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#NC" TITLE="North Carolina Trip Statistics">

<AREA SHAPE=POLY COORDS="73,270,123,270,123,291,73,292" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="362,250,393,250,393,266,362,266" HREF="index.php?action=DailyEvents&date=20041030&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="71,297,102,297,102,313,71,313" HREF="index.php?action=DailyEvents&date=20041106&page=1" TITLE="Travel Log">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="0,361,32,361,32,379,0,379" HREF="index.php?action=Stats&stat=Hiking&date=20041107&page=9&maplink=1" TITLE="Andrews Bald & Clingmans Dome Trail">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="66,340,94,340,94,355,66,355" HREF="index.php?action=Stats&stat=Parks&date=20041107&page=11&maplink=1" TITLE="Great Smoky Mountains National Park">

<!-- FAMILY -->

<AREA SHAPE=POLY COORDS="347,310,386,310,386,327,347,327" HREF="index.php?action=Stats&stat=Family&date=20041031&page=8&maplink=1" TITLE="Uncle Donald">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="48,368,86,368,86,383,48,383" HREF="index.php?action=Stats&stat=Oddities&date=20041107&page=47&maplink=1" TITLE="Spaceship Viewpoint">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="394,301,432,301,432,434,394,434" HREF="index.php?action=Stats&stat=Mishaps&date=20041103&page=17&maplink=1" TITLE="Bent Bike">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="73,225,213,136,250,172,359,136,405,27,435,46,458,0,615,0,596,50,617,44,626,67,651,70,682,94,762,78,717,231" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">

<AREA SHAPE=POLY COORDS="0,225,239,230,202,279,18,363,12,391,0,385" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">

<AREA SHAPE=POLY COORDS="0,0,68,0,111,21,145,9,169,52,167,75,208,136,71,226,0,222" HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">

<AREA SHAPE=POLY COORDS="69,0,119,20,147,9,170,44,189,41,199,21,203,0" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="614,0,596,49,616,42,627,67,652,69,681,95,766,76,775,36,724,36,721,0" HREF="index.php?action=Maps&state=MD" TITLE="Maryland">

<AREA SHAPE=POLY COORDS="720,0,727,37,777,34,770,1" HREF="index.php?action=Maps&state=DE" TITLE="Delaware">

<!--

<AREA SHAPE=POLY COORDS="201,0,474,0,466,10,458,0,432,47,406,27,360,106,354,142,273,167,244,169,163,69,168,43,191,36" HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">

<AREA SHAPE=POLY COORDS="91,417,115,393,176,375,286,384,310,414,404,419,499,514,296,702," HREF="index.php?action=Maps&state=SC" TITLE="South Carolina">

<AREA SHAPE=POLY COORDS="0,387,112,395,92,422,293,702,286,718,0,718," HREF="index.php?action=Maps&state=GA" TITLE="Georgia">-->

</MAP>
