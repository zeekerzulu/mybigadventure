<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>M I C H I G A N</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/MI.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="0,94,35,75,80,85,46,154,64,178,224,246,226,274,250,317,301,277,337,300,270,504,274,584,0,568" HREF="index.php?action=Maps&state=WI" TITLE="Wisconsin">
<AREA SHAPE=POLY COORDS="0,0,151,0,115,11,78,81,33,76,0,93" HREF="index.php?action=Maps&state=MN" TITLE="Minnesota">
<AREA SHAPE=POLY COORDS="0,568,36,623,0,674" HREF="index.php?action=Maps&state=IA" TITLE="Iowa">
<AREA SHAPE=POLY COORDS="0,568,276,582,259,657,233,654,233,739,0,738,0,668,34,622" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">
<AREA SHAPE=POLY COORDS="444,665,553,659,575,639,618,668,770,589,777,738,444,738" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">
<AREA SHAPE=POLY COORDS="231,655,441,660,444,738,233,738" HREF="index.php?action=Maps&state=IN" TITLE="Indiana">
<AREA SHAPE=POLY COORDS="770,589,798,584,798,739,777,739" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">
</MAP>
