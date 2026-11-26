<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M I S S I S S I P P I</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/MS_20050901.gif" usemap="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="456,99,505,99,505,121,456,121" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#TN" TITLE="Tennessee Trip Statistics">

<AREA SHAPE=POLY COORDS="367,398,416,398,416,421,367,421" HREF="index.php?action=Stats&stat=States&nocomments=1&page=11#MS" TITLE="Mississippi Trip Statistics">

<AREA SHAPE=POLY COORDS="190,571,238,571,238,593,190,593" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#LA" TITLE="Louisiana Trip Statistics">

<AREA SHAPE=POLY COORDS="0,551,52,551,52,574,0,574" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#TX" TITLE="Texas Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="389,90,420,90,420,106,389,106" HREF="index.php?action=DailyEvents&date=20041109&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="315,159,346,159,346,174,315,174" HREF="index.php?action=DailyEvents&date=20041110&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="291,653,322,653,322,669,291,669" HREF="index.php?action=DailyEvents&date=20041111&page=1" TITLE="Travel Log">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="337,616,376,616,376,632,337,632" HREF="index.php?action=Stats&stat=People&date=20041112&page=20&maplink=1" TITLE="Rene & Charlie">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="308,113,338,113,338,129,308,129" HREF="index.php?action=Stats&stat=Sites&date=20041110&page=35&maplink=1" TITLE="Graceland & Beale Street">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="298,86,357,86,357,101,298,101" HREF="index.php?action=Stats&stat=Communities&date=20041110&page=11&maplink=1" TITLE="Memphis, Tennessee">

<AREA SHAPE=POLY COORDS="319,683,377,683,377,698,319,698" HREF="index.php?action=Stats&stat=Communities&date=20041112&page=12&maplink=1" TITLE="New Orleans, Louisiana">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="385,150,424,150,424,166,385,166" HREF="index.php?action=Stats&stat=Oddities&date=20041110&page=49&maplink=1" TITLE="Ode to Elvis & Talking Wall">

<AREA SHAPE=POLY COORDS="319,277,358,277,358,293,319,293" HREF="index.php?action=Stats&stat=Oddities&date=20041111&page=51&maplink=1" TITLE="Great White Truck">

<AREA SHAPE=POLY COORDS="389,641,428,641,428,657,389,657" HREF="index.php?action=Stats&stat=Oddities&date=20041112.1&page=52&maplink=1" TITLE="Later Gater & Kinky Leather">

<!-- STATES -->

<area shape=poly coords="0,279,19,283,1,444,51,548,32,612,34,643,13,664,22,683,0,683" href="index.php?action=Maps&state=E_TX" title="East Texas">

<area shape=poly coords="16,337,266,347,278,420,219,551,388,556,379,591,410,640,409,718,256,718,75,676,20,680,13,665,34,634,33,594,52,544,30,467,11,443," href="index.php?action=Maps&state=LA" title="Louisiana">

<area shape=poly coords="404,0,356,104,361,130,348,146,798,135,798,0" href="index.php?action=Maps&state=TN" title="Tennessee">

<!--
<area shape=poly coords="360,0,358,15,336,39,389,39,404,0" href="index.php?action=Maps&state=MO" title="Missouri">

<area shape=poly coords="736,135,798,133,797,389,736,136" href="index.php?action=Maps&state=GA" title="Georgia">

<area shape=poly coords="576,555,798,545,798,686,696,617,585,628,593,605,593,587,573,565" href="index.php?action=Maps&state=FL" title="Florida">

<area shape=poly coords="524,143,735,136,777,336,798,394,796,426,788,460,798,490,794,517,798,528,798,547,582,553,575,568,593,590,595,612,584,625,507,634,498,443" href="index.php?action=Maps&state=AL" title="Alabama">

<area shape=poly coords="0,0,359,0,356,14,337,38,387,40,394,52,356,100,355,127,322,169,317,204,266,278,265,349,18,338,18,284,0,277" href="index.php?action=Maps&state=AR" title="Arkansas">-->
</map>
