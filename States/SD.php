<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>S O U T H&nbsp;&nbsp;&nbsp;D A K O T A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/SD_20050715.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="53,132,102,132,102,154,53,154" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#MT" TITLE="Montana Trip Statistics">

<AREA SHAPE=POLY COORDS="41,480,91,480,91,502,41,502" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#WY" TITLE="Wyoming Trip Statistics">

<AREA SHAPE=POLY COORDS="450,363,500,363,500,384,450,384" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#SD" TITLE="South Dakota Trip Statistics">

<AREA SHAPE=POLY COORDS="721,188,770,188,770,209,721,209" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#MN" TITLE="Minnesota Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="51,283,83,285,81,301,52,301" HREF="index.php?action=DailyEvents&date=20040817&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="220,327,252,327,252,341,222,342" HREF="index.php?action=DailyEvents&date=20040818&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="232,416,263,416,263,432,232,432" HREF="index.php?action=DailyEvents&date=20040822&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="322,412,352,412,353,428,320,428" HREF="index.php?action=DailyEvents&date=20040823&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="658,247,689,250,690,265,657,264" HREF="index.php?action=DailyEvents&date=20040824&page=1" TITLE="Travel Log">

<!-- BIKING -->

<AREA SHAPE=POLY COORDS="280,350,311,349,310,364,280,362" HREF="index.php?action=Stats&stat=Biking&date=20040822&page=13&maplink=1" TITLE="The Badlands">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="314,436,347,436,347,452,314,452" HREF="index.php?action=Stats&stat=Hiking&date=20040824&page=3&maplink=1" TITLE="Notch Trail & Saddle Pass Trail">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="271,326,301,326,301,341,271,341" HREF="index.php?action=Stats&stat=Sites&date=20040822&page=7&maplink=1" TITLE="Wall Drug">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="300,369,339,369,339,383,300,383" HREF="index.php?action=Stats&stat=People&date=20040823&page=14&maplink=1" TITLE="Ranger Lovelace">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="273,416,299,416,299,433,273,433" HREF="index.php?action=Stats&stat=Parks&date=20040822&page=6&maplink=1" TITLE="Badlands National Park">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="110,328,169,328,169,343,110,343" HREF="index.php?action=Stats&stat=Monuments&date=20040818&page=2&maplink=1" TITLE="Devils Tower National Monument">

<AREA SHAPE=POLY COORDS="94,410,152,410,152,425,94,425" HREF="index.php?action=Stats&stat=Monuments&date=20040821&page=3&maplink=1" TITLE="Jewel Cave National Monument">

<!-- MEMORIALS -->

<AREA SHAPE=POLY COORDS="173,415,224,415,224,430,173,430" HREF="index.php?action=Stats&stat=Memorials&date=20040821&page=1&maplink=1" TITLE="Mount Rushmore National Memorial">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="32,306,71,306,71,322,32,322" HREF="index.php?action=Stats&stat=Mishaps&date=20040817&page=7&maplink=1" TITLE="Road Kill">

<AREA SHAPE=POLY COORDS="186,306,225,306,225,321,186,321" HREF="index.php?action=Stats&stat=Mishaps&date=20040820&page=8&maplink=1" TITLE="Paranoia Runs Amuck">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,0,158,0,148,269,0,258" HREF="index.php?action=Maps&state=W_MT" TITLE="Montana">

<AREA SHAPE=POLY COORDS="0,258,147,268,130,680,0,672" HREF="index.php?action=Maps&state=WY" TITLE="Wyoming">

<AREA SHAPE=POLY COORDS="0,671,286,683,284,739,0,739" HREF="index.php?action=Maps&state=CO" TITLE="Colorado">

<AREA SHAPE=POLY COORDS="657,0,799,0,799,413,706,418,699,230,668,202,689,166" HREF="index.php?action=Maps&state=MN" TITLE="Minnesota">

<!--
<AREA SHAPE=POLY COORDS="158,0,659,0,685,166,151,169" HREF="index.php?action=Maps&state=ND" TITLE="North Dakota">

<AREA SHAPE=POLY COORDS="698,419,797,415,799,716,774,718,699,498,707,448,696,424" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">

<AREA SHAPE=POLY COORDS="136,473,555,478,597,502,607,489,651,488,717,525,785,739,285,739,286,681,129,679," HREF="index.php?action=Maps&state=NE" TITLE="Nebraska">-->

</MAP>
