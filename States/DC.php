<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>D I S T R I C T&nbsp;&nbsp;&nbsp;O F&nbsp;&nbsp;&nbsp;C O L U M B I A</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
?>
<img id="map1" src="States/Maps/DC_20050820.gif" usemap="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="372,562,422,562,422,586,372,584" HREF="index.php?action=Stats&stat=States&nocomments=1&page=9#DC" TITLE="District of Columbia Trip Statistics">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="446,158,486,158,486,174,446,172" HREF="index.php?action=Stats&stat=Friends&date=20041026&page=15&maplink=1" TITLE="">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="327,343,357,343,357,356,327,359" HREF="index.php?action=Stats&stat=Sites&date=20041027.1&page=28&maplink=1" TITLE="The White House">

<AREA SHAPE=POLY COORDS="181,495,210,495,210,510,181,510" HREF="index.php?action=Stats&stat=Sites&date=20041027.2&page=29&maplink=1" TITLE="Arlington National Cemetery">

<AREA SHAPE=POLY COORDS="463,366,495,366,495,381,463,383" HREF="index.php?action=Stats&stat=Sites&date=20041029.1&page=30&maplink=1" TITLE="U.S. Capital Building">

<AREA SHAPE=POLY COORDS="487,446,518,446,518,461,487,463" HREF="index.php?action=Stats&stat=Sites&date=20041029.2&page=31&maplink=1" TITLE="U.S. Botanic Garden">

<AREA SHAPE=POLY COORDS="416,336,447,336,447,352,416,352" HREF="index.php?action=Stats&stat=Sites&date=20041029.3&page=32&maplink=1" TITLE="U.S. National Archives and Records Administration">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="367,480,426,480,426,496,367,495" HREF="index.php?action=Stats&stat=Communities&date=20041025&page=10&maplink=1" TITLE="Washington, D.C.">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="360,311,419,331,419,327,360,328" HREF="index.php?action=Stats&stat=Monuments&date=20041027&page=6&maplink=1" TITLE="Washington Monument">

<!-- MEMORIALS -->

<AREA SHAPE=POLY COORDS="533,428,582,428,582,443,533,443" HREF="index.php?action=Stats&stat=Memorials&date=20041025&page=2&maplink=1" TITLE="Ulysses S. Grant Memorial">

<AREA SHAPE=POLY COORDS="244,415,297,415,297,431,244,431" HREF="index.php?action=Stats&stat=Memorials&date=20041027.1&page=3&maplink=1" TITLE="World War II Memorial, Vietnam Veterans Memorial, Lincoln Memorial & Korean War Veterans Memorial">

<AREA SHAPE=POLY COORDS="291,460,342,460,342,477,291,477" HREF="index.php?action=Stats&stat=Memorials&date=20041027.5&page=7&maplink=1" TITLE="Franklin Delano Roosevelt Memorial & Thomas Jefferson Memorial">

<!-- MUSEUMS -->

<AREA SHAPE=POLY COORDS="309,491,355,491,355,507,309,507" HREF="index.php?action=Stats&stat=Museums&date=20041028&page=2&maplink=1" TITLE="Smithsonian Institution National Air & Space Museum">

<AREA SHAPE=POLY COORDS="466,338,511,338,511,353,466,353" HREF="index.php?action=Stats&stat=Museums&date=20041029&page=3&maplink=1" TITLE="Smithsonian Institution National Museum of Natural History">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="262,358,301,358,301,373,262,372" HREF="index.php?action=Stats&stat=Oddities&date=20041025.1&page=34&maplink=1" TITLE="Patriotic Van & 10 Other Oddities...">

<!-- STATES -->

<area shape=poly coords="0,69,108,220,376,4,771,398,436,738,799,739,799,0,0,0" href="index.php?action=Maps&state=MD" title="Maryland">

<!--
<area shape=poly coords="0,101,358,515,359,739,0,739" href="index.php?action=Maps&state=VA" title="Virginia">
-->

</map>
