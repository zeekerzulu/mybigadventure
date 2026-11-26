<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>G E O R G I A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/GA.gif" usemap="#map">
<map id="map1_map" name="map">
<area shape=poly coords="0,106,222,109,276,393,255,442,264,472,257,503,266,524,41,516,35,533,55,556,57,576,43,593,0,591" href="index.php?action=Maps&state=AL" title="Alabama">
<area shape=poly coords="42,590,55,573,34,535,40,518,263,525,275,552,511,570,527,592,530,542,582,552,636,739,473,738,345,617,249,659,141,585,45,589," href="index.php?action=Maps&state=FL" title="Florida">
<area shape=poly coords="0,0,489,0,324,110,0,104" href="index.php?action=Maps&state=TN" title="Tennesee">
<area shape=poly coords="324,111,479,0,798,0,798,197,722,128,628,125,602,95,506,91,429,112," href="index.php?action=Maps&state=NC" title="North Carolina">
<area shape=poly coords="433,113,495,92,601,93,631,126,725,127,798,195,798,233,744,312,627,414,410,143," href="index.php?action=Maps&state=SC" title="South Carolina">
</map>
