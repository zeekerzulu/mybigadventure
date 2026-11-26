<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>W E S T&nbsp;&nbsp;&nbsp;V I R G I N I A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/WV.gif" USEMAP="#map">
<map id="map1_map" name="map">
<AREA SHAPE=POLY COORDS="0,0,229,0,231,30,208,48,0,36" HREF="index.php?action=Maps&state=MI" TITLE="Michigan">
<AREA SHAPE=POLY COORDS="0,403,111,316,238,362,308,491,170,580,0,567" HREF="index.php?action=Maps&state=KY" TITLE="Kentucky">
<AREA SHAPE=POLY COORDS="699,330,722,325,723,348,699,348" HREF="index.php?action=Maps&state=DC" TITLE="District of Columbia">
<AREA SHAPE=POLY COORDS="512,259,798,250,798,439,692,390,728,343,721,327,695,328,618,263,513,313" HREF="index.php?action=Maps&state=MD" TITLE="Maryland">
<AREA SHAPE=POLY COORDS="103,738,338,582,799,574,799,739,391,739,276,725,230,739" HREF="index.php?action=Maps&state=NC" TITLE="North Carolina">
<AREA SHAPE=POLY COORDS="168,576,309,488,342,523,453,477,506,376,530,394,607,290,644,316,677,304,711,343,689,392,798,438,798,575" HREF="index.php?action=Maps&state=VA" TITLE="Virginia">
<AREA SHAPE=POLY COORDS="0,566,335,580,330,609,105,737,0,738" HREF="index.php?action=Maps&state=TN" TITLE="Tennessee">
<AREA SHAPE=POLY COORDS="101,52,206,51,232,29,287,60,389,0,431,0,430,167,269,396,88,313" HREF="index.php?action=Maps&state=OH" TITLE="Ohio">
<AREA SHAPE=POLY COORDS="0,40,102,44,85,347,0,402" HREF="index.php?action=Maps&state=IN" TITLE="Indiana">
<AREA SHAPE=POLY COORDS="488,0,799,0,799,16,488,24" HREF="index.php?action=Maps&state=NY" TITLE="New York">
<AREA SHAPE=POLY COORDS="431,0,486,0,487,25,798,15,798,250,430,261" HREF="index.php?action=Maps&state=PA" TITLE="Pennsylvania">
</MAP>
