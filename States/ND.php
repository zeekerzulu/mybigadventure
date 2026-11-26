
<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N O R T H&nbsp;&nbsp;&nbsp;D A K O T A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/ND.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="0,153,168,168,145,576,0,567" HREF="index.php?action=Maps&state=E_MT" TITLE="East Montana">
<AREA SHAPE=POLY COORDS="0,567,146,577,140,738,0,738" HREF="index.php?action=Maps&state=WY" TITLE="Wyoming">
<AREA SHAPE=POLY COORDS="152,482,686,478,667,512,699,543,709,726,698,734,703,739,140,739" HREF="index.php?action=Maps&state=SD" TITLE="South Dakota">
<AREA SHAPE=POLY COORDS="627,162,765,158,764,120,784,125,799,170,797,721,710,727,698,540,670,511,686,474" HREF="index.php?action=Maps&state=MN" TITLE="Minnesota">
<AREA SHAPE=POLY COORDS="702,739,697,727,798,721,798,739" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">
</MAP>
