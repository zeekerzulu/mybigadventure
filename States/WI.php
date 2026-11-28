<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>W I S C O N S I N</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/WI_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="70,187,120,187,120,209,70,209" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#MN" TITLE="Minnesota Trip Statistics">

<AREA SHAPE=POLY COORDS="319,286,367,286,367,308,319,308" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#WI" TITLE="Wisconsin Trip Statistics">

<AREA SHAPE=POLY COORDS="390,678,438,678,438,699,390,699" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IL" TITLE="Illinois Trip Statistics">

<AREA SHAPE=POLY COORDS="637,698,687,698,687,718,637,718" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IN" TITLE="Indiana Trip Statistics">

<AREA SHAPE=POLY COORDS="760,679,800,679,800,700,760,700" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="108,246,138,247,140,263,108,262" HREF="index.php?action=DailyEvents&date=20040825&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="366,381,395,380,398,398,367,399" HREF="index.php?action=DailyEvents&date=20040829&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="603,600,633,600,633,617,601,615" HREF="index.php?action=DailyEvents&date=20040831&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="481,600,512,601,513,617,480,616" HREF="index.php?action=DailyEvents&date=20040830&page=1" TITLE="Travel Log">

<!-- FRIEND -->

<AREA SHAPE=POLY COORDS="71,320,110,320,110,337,71,337" HREF="index.php?action=Stats&stat=Friends&date=20040825&page=2&maplink=1" TITLE="Greg">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="139,321,170,321,170,338,139,338" HREF="index.php?action=Stats&stat=Sites&date=20040829&page=8&maplink=1" TITLE="Mall of America">

<AREA SHAPE=POLY COORDS="323,428,353,428,353,443,323,443" HREF="index.php?action=Stats&stat=Sites&date=20040830&page=9&maplink=1" TITLE="Carr Valley Cheese">

<AREA SHAPE=POLY COORDS="353,452,383,452,383,467,353,467" HREF="index.php?action=Stats&stat=Sites&date=20040830&page=10&maplink=1" TITLE="House on the Rock">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="601,644,627,644,627,662,601,662" HREF="index.php?action=Stats&stat=Parks&date=20040901&page=7&maplink=1" TITLE="Indiana Dunes National Lakeshore">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="501,641,539,641,539,657,501,657" HREF="index.php?action=Stats&stat=Mishaps&date=20040830&page=9&maplink=1" TITLE="Chicago Blues">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,394,0,368,54,205,117,155,312,268,444,0,430" HREF="index.php?action=Maps&state=MN" TITLE="Minnesota">

<AREA SHAPE=POLY COORDS="313,550,589,548,577,619,551,626,556,739,268,739,278,661,351,604," HREF="index.php?action=Maps&state=IL" TITLE="Illinois">

<AREA SHAPE=POLY COORDS="763,623,798,619,797,738,768,738" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="552,622,761,618,765,739,555,739" HREF="index.php?action=Maps&state=IN" TITLE="Indiana">

<!--
<AREA SHAPE=POLY COORDS="0,432,268,441,352,604,264,739,0,738" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">

<AREA SHAPE=POLY COORDS="336,130,393,0,568,0,726,86,753,131,780,119,797,170,797,619,576,620,590,504,579,399,601,316,634,261," HREF="index.php?action=Maps&state=MI" TITLE="Michigan">-->

</MAP>
