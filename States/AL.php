<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>A L A B A M A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/AL.gif" usemap="#map">
<map id="map1_map" name="map">
<area shape=poly coords="98,126,271,133,279,149,240,455,246,627,139,626,118,568,129,542,0,535,0,442,10,259,76,140," href="index.php?action=Maps&state=MS" title="Mississippi">
<area shape=poly coords="161,0,786,0,588,133,104,129," href="index.php?action=Maps&state=TN" title="Tennesee">
<area shape=poly coords="490,135,702,129,676,157,799,281,798,600,793,584,557,572,536,514,530,451,544,388,526,356," href="index.php?action=Maps&state=GA" title="Georgia">
<area shape=poly coords="314,544,547,546,557,574,791,582,799,602,798,739,324,616,336,586" href="index.php?action=Maps&state=FL" title="Florida">
<area shape=poly coords="0,0,111,0,94,24,145,28,149,42,9,268,18,406,0,444" href="index.php?action=Maps&state=AR" title="Arkansas">
<area shape=poly coords="0,534,131,542,118,577,146,627,189,734,0,739," href="index.php?action=Maps&state=LA" title="Louisana">
<area shape=poly coords="597,129,699,130,798,105,798,0,760,0,634,79," href="index.php?action=Maps&state=NC" title="North Carolina">
<area shape=poly coords="679,155,700,130,799,105,797,278,717,184" href="index.php?action=Maps&state=SC" title="South Carolina">
<area shape=poly coords="110,0,153,0,145,25,96,22" href="index.php?action=Maps&state=MO" title="Missouri">
</map>
