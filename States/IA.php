<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>I O W A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/IA.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="452,0,799,0,798,224,623,234,618,218,590,211,582,173,587,151,569,96,516,45" HREF="index.php?action=Maps&state=WI" TITLE="Wisconsin">
<AREA SHAPE=POLY COORDS="0,478,257,495,294,516,280,543,321,587,314,739,0,739" HREF="index.php?action=Maps&state=KS" TITLE="Kansas">
<AREA SHAPE=POLY COORDS="0,0,189,0,185,129,173,129,167,208,77,193,62,204,24,173,0,175" HREF="index.php?action=Maps&state=SD" TITLE="South Dakota">
<AREA SHAPE=POLY COORDS="188,0,453,0,569,96,573,133,185,130" HREF="index.php?action=Maps&state=MN" TITLE="Minnesota">
<AREA SHAPE=POLY COORDS="0,174,29,176,65,204,77,192,115,195,186,236,259,495,0,479" HREF="index.php?action=Maps&state=NE" TITLE="Nebraska">
<AREA SHAPE=POLY COORDS="227,434,543,429,566,456,560,478,577,526,625,567,640,608,648,597,681,611,657,674,723,718,314,717,318,580,301,579,277,451,297,513,258,494" HREF="index.php?action=Maps&state=MO" TITLE="Missouri">
<AREA SHAPE=POLY COORDS="623,231,797,225,799,739,730,739,729,727,657,671,679,609,649,600,637,609,622,562,562,474,570,434,605,390,591,352,650,324,661,275,616,220" HREF="index.php?action=Maps&state=IL" TITLE="Illinois">
</MAP>
