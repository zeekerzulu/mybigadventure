<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M I S S O U R I</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/MO.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="0,199,176,208,214,229,195,258,232,304,228,520,0,509" HREF="index.php?action=Maps&state=KS" TITLE="Kansas">
<AREA SHAPE=POLY COORDS="646,568,689,496,726,509,733,471,761,463,765,429,799,424,798,550,767,546,768,565," HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">
<AREA SHAPE=POLY COORDS="0,510,229,522,227,572,240,692,238,738,0,739" HREF="index.php?action=Maps&state=OK" TITLE="Oklahoma">
<AREA SHAPE=POLY COORDS="0,0,123,0,179,211,0,201" HREF="index.php?action=Maps&state=NE" TITLE="Nebraska">
<AREA SHAPE=POLY COORDS="125,0,580,0,558,58,512,71,511,92,522,117,485,174,462,148,146,148" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">
<AREA SHAPE=POLY COORDS="584,0,771,0,787,41,796,268,789,294,798,330,753,445,761,465,731,480,732,505,683,499,669,518,573,390,595,327,479,207,525,110,511,72,563,50" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">
<AREA SHAPE=POLY COORDS="762,430,797,339,796,426" HREF="index.php?action=Maps&state=IN" TITLE="Indiana">
<AREA SHAPE=POLY COORDS="604,715,604,678,654,569,765,565,770,545,798,549,797,719,642,724" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">
<AREA SHAPE=POLY COORDS="227,573,598,573,603,593,578,623,634,623,586,738,237,738,237,673" HREF="index.php?action=Maps&state=AR" TITLE="Arkansas">
<AREA SHAPE=POLY COORDS="588,739,603,707,647,726,773,719,771,739" HREF="index.php?action=Maps&state=MS" TITLE="Mississippi">
<AREA SHAPE=POLY COORDS="772,739,767,721,797,718,799,739" HREF="index.php?action=Maps&state=MS" TITLE="Alabama">
</MAP>
