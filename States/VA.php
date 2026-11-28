<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>V I R G I N I A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/VA_20050821.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="415,542,464,542,464,563,415,562" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#NC" TITLE="North Carolina Trip Statistics">

<AREA SHAPE=POLY COORDS="81,531,132,531,132,550,81,548" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<AREA SHAPE=POLY COORDS="400,472,450,472,450,492,400,491" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<AREA SHAPE=POLY COORDS="70,390,116,390,116,414,70,413" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<AREA SHAPE=POLY COORDS="616,198,662,198,662,218,616,213" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#MD" TITLE="Maryland Trip Statistics">

<AREA SHAPE=POLY COORDS="737,295,785,295,785,316,737,316" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#DE" TITLE="Delaware Trip Statistics">

<AREA SHAPE=POLY COORDS="152,128,201,128,201,151,152,150" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<AREA SHAPE=POLY COORDS="523,91,571,91,571,114,523,113" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#PA" TITLE="Pennsylvania Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="363,507,395,507,395,520,363,519" HREF="index.php?action=DailyEvents&date=20041030&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="73,574,103,574,103,590,73,590" HREF="index.php?action=DailyEvents&date=20041106&page=1" TITLE="Travel Log">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="0,613,35,613,35,630,0,630" HREF="index.php?action=Stats&stat=Hiking&date=20041107&page=9&maplink=1" TITLE="Andrews Bald & Clingmans Dome Trail">

<!-- FAMILY -->

<AREA SHAPE=POLY COORDS="332,562,370,562,370,578,332,577" HREF="index.php?action=Stats&stat=Family&date=20041031&page=8&maplink=1" TITLE="Uncle Donald">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="64,607,89,607,89,621,64,621" HREF="index.php?action=Stats&stat=Parks&date=20041107&page=11&maplink=1" TITLE="Great Smoky Mountains National Park">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="43,627,81,627,81,645,43,645" HREF="index.php?action=Stats&stat=Oddities&date=20041107&page=47&maplink=1" TITLE="Spaceship Viewpoint">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="394,572,433,572,433,586,394,586" HREF="index.php?action=Stats&stat=Mishaps&date=20041103&page=17&maplink=1" TITLE="Bent Bike">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,222,148,270,219,401,79,488,0,484" HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">

<AREA SHAPE=POLY COORDS="608,244,630,244,634,263,609,263" HREF="index.php?action=Maps&state=DC" TITLE="District of Columbia">

<AREA SHAPE=POLY COORDS="425,174,719,171,730,297,783,296,771,341,690,357,624,306,634,243,603,240,563,210,525,178,425,226" HREF="index.php?action=Maps&state=MD" TITLE="Maryland">

<AREA SHAPE=POLY COORDS="19,649,244,496,723,494,736,590,565,738,467,739,410,679,320,674,305,649,179,635,119,654" HREF="index.php?action=Maps&state=NC" TITLE="North Carolina">

<AREA SHAPE=POLY COORDS="0,483,244,494,238,516,18,651,0,651" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">

<AREA SHAPE=POLY COORDS="11,0,345,0,341,77,316,178,176,308,151,270,0,220" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="799,279,735,177,790,113,757,66,785,0,799,0," HREF="index.php?action=Maps&state=NJ" TITLE="New Jersey">

<AREA SHAPE=POLY COORDS="716,167,734,170,789,272,784,295,730,297" HREF="index.php?action=Maps&state=DE" TITLE="Delaware">

<AREA SHAPE=POLY COORDS="343,0,784,0,759,65,798,119,717,170,343,174" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">

<!--

<AREA SHAPE=POLY COORDS="173,306,195,306,316,181,342,73,341,172,426,178,423,225,480,187,505,194,527,178,565,212,556,233,516,200,437,308,412,290,347,409,247,432" HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">

<AREA SHAPE=POLY COORDS="97,682,184,635,293,644,322,679,411,680,470,738,151,738" HREF="index.php?action=Maps&state=SC" TITLE="South Carolina">
-->

</MAP>
