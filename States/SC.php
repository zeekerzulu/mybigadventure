<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>S O U T H&nbsp;&nbsp;&nbsp;C A R O L I N A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/SC.gif" usemap="#map">
<map id="map1_map" name="map">
<area shape=poly coords="53,135,259,143,240,175,442,450,405,585,354,574,346,622,329,599,97,579,78,464,93,403" href="index.php?action=Maps&state=GA" title="Georgia">
<area shape=poly coords="0,545,90,551,100,581,333,600,346,625,350,576,401,586,434,717,242,716,164,648,63,682,0,620" href="index.php?action=Maps&state=FL" title="Florida">
<area shape=poly coords="0,0,378,0,150,142,0,136" href="index.php?action=Maps&state=TN" title="Tennesee">
<area shape=poly coords="154,140,376,0,798,0,798,164,698,256,647,257,552,164,458,161,434,129,323,123,259,144" href="index.php?action=Maps&state=NC" title="North Carolina">
<area shape=poly coords="0,132,52,136,100,422,78,468,89,550,0,547" href="index.php?action=Maps&state=AL" title="Alabama">
</map>
