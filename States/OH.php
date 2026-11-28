<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>O H I O</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/OH_20050821.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="3,363,53,363,53,385,3,385" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IL" TITLE="Illinois Trip Statistics">

<AREA SHAPE=POLY COORDS="140,326,190,326,190,347,140,347" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#IN" TITLE="Indiana Trip Statistics">

<AREA SHAPE=POLY COORDS="420,260,470,260,470,282,420,282" HREF="index.php?action=Stats&stat=States&nocomments=1&page=4#OH" TITLE="Ohio Trip Statistics">

<AREA SHAPE=POLY COORDS="682,268,732,268,732,291,682,291" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#PA" TITLE="Pennsylvania Trip Statistics">

<AREA SHAPE=POLY COORDS="709,115,759,115,759,136,709,136" HREF="index.php?action=Stats&stat=States&nocomments=1&page=5#NY" TITLE="New York Trip Statistics">

<AREA SHAPE=POLY COORDS="591,665,638,665,638,687,591,688" HREF="index.php?action=Stats&stat=States&nocomments=1&page=10#VA" TITLE="Virginia Trip Statistics">

<AREA SHAPE=POLY COORDS="205,624,255,624,255,647,205,645" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#KY" TITLE="Kentucky Trip Statistics">

<AREA SHAPE=POLY COORDS="245,716,290,716,290,739,245,738" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="389,221,419,219,419,234,390,236" HREF="index.php?action=DailyEvents&date=20040903&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="669,36,700,36,701,52,670,52" HREF="index.php?action=DailyEvents&date=20040904&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="124,139,153,140,155,156,122,153" HREF="index.php?action=DailyEvents&date=20040831&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="4,137,34,137,35,150,4,153" HREF="index.php?action=DailyEvents&date=20040830&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="156,676,190,676,190,691,156,691" HREF="index.php?action=DailyEvents&date=20041104&page=1" TITLE="Travel Log">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="661,63,699,63,699,79,661,79" HREF="index.php?action=Stats&stat=Friends&date=20040905&page=3&maplink=1" TITLE="Western New York Friends">

<AREA SHAPE=POLY COORDS="672,13,711,13,711,28,672,28" HREF="index.php?action=Stats&stat=Friends&date=20040918&page=9&maplink=1" TITLE="Old Hometown Friends">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="179,594,219,594,219,609,179,609" HREF="index.php?action=Stats&stat=People&date=20041106&page=19&maplink=1" TITLE="Ernesta">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="451,221,482,221,482,237,451,237" HREF="index.php?action=Stats&stat=Sites&date=20040904&page=11&maplink=1" TITLE="Cedar Point Amusement Park">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="114,191,140,191,140,208,114,208" HREF="index.php?action=Stats&stat=Parks&date=20040901&page=7&maplink=1" TITLE="Indiana Dunes National Lakeshore">

<AREA SHAPE=POLY COORDS="108,631,135,631,135,647,108,647" HREF="index.php?action=Stats&stat=Parks&date=20041105&page=10&maplink=1" TITLE="Mammoth Cave National Park">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="113,657,152,657,152,673,113,673" HREF="index.php?action=Stats&stat=Oddities&date=20041004&page=45&maplink=1" TITLE="Amish Tailgater">

<AREA SHAPE=POLY COORDS="123,597,162,597,162,614,123,614" HREF="index.php?action=Stats&stat=Oddities&date=20041005&page=46&maplink=1" TITLE="Underground Eats">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="5,168,44,168,44,184,5,184" HREF="index.php?action=Stats&stat=Mishaps&date=20040830&page=9&maplink=1" TITLE="Chicago Blues">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="696,372,798,368,799,397,750,384,695,428" HREF="index.php?action=Maps&state=MD" TITLE="Maryland">

<AREA SHAPE=POLY COORDS="0,0,105,0,112,87,0,79" HREF="index.php?action=Maps&state=WI" TITLE="Wisconsin">

<AREA SHAPE=POLY COORDS="0,80,110,88,95,164,67,161,55,477,0,574" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">

<AREA SHAPE=POLY COORDS="68,160,277,169,270,437,149,553,5,558,55,464" HREF="index.php?action=Maps&state=IN" TITLE="Indiana">

<AREA SHAPE=POLY COORDS="660,86,729,44,710,0,799,0,799,132,662,139" HREF="index.php?action=Maps&state=NY" TITLE="New York">

<AREA SHAPE=POLY COORDS="605,106,659,88,663,139,799,133,798,370,612,377" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">

<AREA SHAPE=POLY COORDS="511,738,527,702,799,694,799,738" HREF="index.php?action=Maps&state=NC" TITLE="North Carolina">

<AREA SHAPE=POLY COORDS="364,700,498,606,540,638,631,606,690,492,718,506,798,397,799,695" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">

<AREA SHAPE=POLY COORDS="0,576,182,545,274,438,361,491,425,481,497,608,365,702,0,678" HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">

<AREA SHAPE=POLY COORDS="0,677,527,697,507,739,0,739" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">

<!--

<AREA SHAPE=POLY COORDS="107,0,469,0,454,78,412,108,389,168,96,160,114,61" HREF="index.php?action=Maps&state=MI" TITLE="Michigan">

<AREA SHAPE=POLY COORDS="608,283,613,378,696,373,697,426,752,380,799,392,535,639,450,518,585,384" HREF="index.php?action=Maps&state=WV" TITLE="West Virginia">-->

</MAP>
