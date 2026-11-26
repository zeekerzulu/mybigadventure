<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>I L L I N O I S</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/IL_20050821.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="373,59,423,59,423,80,373,80" HREF="index.php?action=Stats&stat=States&nocomments=1&page=3#WI" TITLE="Wisconsin Trip Statistics">

<AREA SHAPE=POLY COORDS="364,313,413,313,413,336,364,336" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IL" TITLE="Illinois Trip Statistics">

<AREA SHAPE=POLY COORDS="627,399,679,399,679,419,627,419" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IN" TITLE="Indiana Trip Statistics">

<AREA SHAPE=POLY COORDS="759,329,800,329,800,351,759,351" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<AREA SHAPE=POLY COORDS="681,700,729,700,729,720,681,722" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<AREA SHAPE=POLY COORDS="611,627,661,627,661,649,611,648" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="470,134,503,137,502,153,473,154" HREF="index.php?action=DailyEvents&date=20040830&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="594,131,625,132,625,148,595,146" HREF="index.php?action=DailyEvents&date=20040831&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="706,611,737,611,737,628,706,628" HREF="index.php?action=DailyEvents&date=20041104&page=1" TITLE="Travel Log">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="693,579,732,579,732,595,693,595" HREF="index.php?action=Stats&stat=People&date=20041106&page=19&maplink=1" TITLE="Ernesta">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="590,193,615,193,615,209,590,209" HREF="index.php?action=Stats&stat=Parks&date=20040901&page=7&maplink=1" TITLE="Indiana Dunes National Lakeshore">

<AREA SHAPE=POLY COORDS="642,577,667,577,667,592,642,592" HREF="index.php?action=Stats&stat=Parks&date=20041105&page=10&maplink=1" TITLE="Mammoth Cave National Park">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="625,660,663,660,663,675,625,675" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=45&maplink=1" TITLE="Amish Tailgater">

<AREA SHAPE=POLY COORDS="593,603,632,603,632,619,593,619" HREF="index.php?action=Stats&stat=Oddities&date=20041005&page=46&maplink=1" TITLE="Underground Eats">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="492,172,530,172,530,531,492,531" HREF="index.php?action=Stats&stat=Mishaps&date=20040830&page=9&maplink=1" TITLE="Chicago Blues">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="271,0,567,0,577,41,578,83,303,82,295,70,271,64,263,19," HREF="index.php?action=Maps&state=WI" TITLE="Wisconsin">

<AREA SHAPE=POLY COORDS="752,162,799,153,797,419,762,419," HREF="index.php?action=Maps&state=OH" TITLE="Ohio">

<AREA SHAPE=POLY COORDS="540,160,746,153,762,457,505,571,548,469," HREF="index.php?action=Maps&state=IN" TITLE="Indiana">

<AREA SHAPE=POLY COORDS="386,702,517,561,675,540,767,424,798,423,797,684,506,686,505,705," HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">

<AREA SHAPE=POLY COORDS="375,738,388,701,507,705,513,686,799,681,798,739" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">

<!--

<AREA SHAPE=POLY COORDS="567,0,799,0,799,156,752,161,747,153,566,158,579,63" HREF="index.php?action=Maps&state=MI" TITLE="Michigan">

<AREA SHAPE=POLY COORDS="0,0,270,0,262,19,269,61,303,84,339,134,336,157,309,186,270,197,276,246,236,302,211,277,0,269" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">

<AREA SHAPE=POLY COORDS="0,270,212,277,236,302,233,340,300,460,313,448,339,462,315,523,386,581,394,611,386,626,418,659,375,738,327,738,339,715,326,702,0,690" HREF="index.php?action=Maps&state=MO" TITLE="Missouri">

<AREA SHAPE=POLY COORDS="0,689,339,705,326,738,0,738" HREF="index.php?action=Maps&state=AR" TITLE="Arkansas">-->

</MAP>
