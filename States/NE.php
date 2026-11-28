<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>N E B R A S K A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/NB.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="703,431,798,425,799,655,752,533,769,506," HREF="index.php?action=Maps&state=MO" TITLE="Missouri">
<AREA SHAPE=POLY COORDS="0,0,69,0,48,384,0,379" HREF="index.php?action=Maps&state=WY" TITLE="Wyoming">
<AREA SHAPE=POLY COORDS="71,0,626,0,630,128,621,129,630,160,622,209,636,235,572,200,533,197,516,211,476,186,61,176" HREF="index.php?action=Maps&state=SD" TITLE="South Dakota">
<AREA SHAPE=POLY COORDS="626,0,798,0,799,119,633,129" HREF="index.php?action=Maps&state=MN" TITLE="Minnesota">
<AREA SHAPE=POLY COORDS="623,130,799,121,799,424,698,427,621,212,632,165," HREF="index.php?action=Maps&state=IA" TITLE="Iowa">
<AREA SHAPE=POLY COORDS="205,492,728,488,770,506,753,536,796,576,799,655,799,738,197,737" HREF="index.php?action=Maps&state=KS" TITLE="Kansas">
<AREA SHAPE=POLY COORDS="0,379,204,389,197,738,0,738" HREF="index.php?action=Maps&state=CO" TITLE="Colorado">
</MAP>
