<table class="ContentBanner" width=804 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>U T A H</b><?php include 'sharecontrol.php' ?></td></tr></table><p>
<?php
if (isset($_REQUEST['back'])) {
  echo "<p><center><a href=javascript:history.go(-1)>Back to USA Map</a></center><p>";
} else {
  echo "<p><center><a href='index.php?action=Maps&state=USA'>Go to USA Map</a></center><p>";
}
include 'statemaphint.php';
?>
<img id="map1" src="States/Maps/UT_20050906.gif" USEMAP="#map">
<map id="map1_map" name="map">

<!-- STATS -->

<AREA SHAPE=POLY COORDS="188,60,238,60,238,82,188,82" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#ID" TITLE="Idaho Trip Statistics">

<AREA SHAPE=POLY COORDS="587,100,638,100,638,124,587,124" HREF="index.php?action=Stats&stat=States&nocomments=1&page=2#WY" TITLE="Wyoming Trip Statistics">

<AREA SHAPE=POLY COORDS="677,685,729,685,729,705,677,705" HREF="index.php?action=Stats&stat=States&nocomments=1&page=12#NM" TITLE="New Mexico Trip Statistics">

<AREA SHAPE=POLY COORDS="677,408,728,408,728,429,677,429" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Colorado Trip Statistics">

<AREA SHAPE=POLY COORDS="370,409,419,409,419,430,370,430" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Utah Trip Statistics">

<AREA SHAPE=POLY COORDS="434,715,486,715,486,737,434,737" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Arizona Trip Statistics">

<AREA SHAPE=POLY COORDS="64,405,112,405,112,427,64,427" HREF="index.php?action=UnderConstruction&stat=States&nocomments=1&page=#" TITLE="Nevada Trip Statistics">

<!-- TRAVEL LOG -->

<AREA SHAPE=POLY COORDS="690,472,721,472,721,488,690,488" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="486,430,517,430,517,445,486,445" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="366,559,396,559,396,576,366,576" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="262,608,293,608,293,623,262,623" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="76,643,106,643,106,659,76,659" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="286,706,316,706,316,723,286,723" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<AREA SHAPE=POLY COORDS="530,626,560,626,560,642,530,642" HREF="index.php?action=UnderConstruction&date=200&page=1" TITLE="Travel Log">

<!-- HIKING -->

<AREA SHAPE=POLY COORDS="711,437,744,437,744,452,711,452" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="570,416,602,416,602,432,570,432" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="318,572,352,572,352,589,318,589" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="245,539,277,539,277,556,245,556" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="361,671,394,671,394,687,361,687" HREF="index.php?action=UnderConstruction&stat=Hiking&date=200&page=&maplink=1" TITLE="">

<!-- FRIENDS -->

<AREA SHAPE=POLY COORDS="31,668,71,668,71,684,31,684" HREF="index.php?action=UnderConstruction&stat=Friends&date=200&page=&maplink=1" TITLE="">

<!-- PEOPLE -->

<AREA SHAPE=POLY COORDS="734,469,772,469,772,485,734,485" HREF="index.php?action=UnderConstruction&stat=People&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="290,674,330,674,330,691,290,691" HREF="index.php?action=UnderConstruction&stat=People&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="539,589,577,589,577,604,539,604" HREF="index.php?action=UnderConstruction&stat=People&date=200&page=&maplink=1" TITLE="">

<!-- SIGHTS -->

<AREA SHAPE=POLY COORDS="513,455,544,455,544,471,513,471" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="558,464,589,464,589,479,558,479" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="343,516,372,516,372,531,343,532" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="156,697,187,697,187,712,156,712" HREF="index.php?action=UnderConstruction&stat=Sites&date=200&page=&maplink=1" TITLE="">

<!-- COMMUNITIES -->

<AREA SHAPE=POLY COORDS="197,627,258,627,258,642,197,642" HREF="index.php?action=UnderConstruction&stat=Communities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="8,643,68,643,68,659,8,659" HREF="index.php?action=UnderConstruction&stat=Communities&date=200&page=&maplink=1" TITLE="">

<!-- PARKS -->

<AREA SHAPE=POLY COORDS="500,410,526,410,526,425,500,425" HREF="index.php?action=UnderConstruction&stat=Parks&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="309,534,334,534,334,551,309,551" HREF="index.php?action=UnderConstruction&stat=Parks&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="306,604,330,604,330,620,306,620" HREF="index.php?action=UnderConstruction&stat=Parks&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="392,696,419,696,419,714,392,714" HREF="index.php?action=UnderConstruction&stat=Parks&date=200&page=&maplink=1" TITLE="">

<!-- FORESTS -->

<AREA SHAPE=POLY COORDS="643,438,682,438,682,452,643,452" HREF="index.php?action=UnderConstruction&stat=Forests&date=200&page=&maplink=1" TITLE="">

<!-- MONUMENTS -->

<AREA SHAPE=POLY COORDS="475,572,534,572,534,587,475,587" HREF="index.php?action=UnderConstruction&stat=Monuments&date=200&page=&maplink=1" TITLE="">

<!-- ODDITIES -->

<AREA SHAPE=POLY COORDS="636,472,673,472,673,488,636,488" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="630,361,670,361,670,376,630,376" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="521,373,558,373,558,389,521,389" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="585,438,624,438,624,453,585,453" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="361,581,400,581,400,599,361,599" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="181,575,221,181,221,592,181,592" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="135,659,173,659,173,675,135,675" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="318,651,356,651,356,667,318,667" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="569,616,609,616,609,631,569,631" HREF="index.php?action=UnderConstruction&stat=Oddities&date=200&page=&maplink=1" TITLE="">

<!-- MISHAPS -->

<AREA SHAPE=POLY COORDS="275,557,313,557,313,573,275,573" HREF="index.php?action=UnderConstruction&stat=Mishaps&date=200&page=&maplink=1" TITLE="">

<AREA SHAPE=POLY COORDS="40,705,78,705,78,721,40,721" HREF="index.php?action=UnderConstruction&stat=Mishaps&date=200&page=&maplink=1" TITLE="">

<!-- STATES -->

<AREA SHAPE=POLY COORDS="0,675,63,737,0,739" HREF="index.php?action=Maps&state=S_CA" TITLE="Southern California">

<AREA SHAPE=POLY COORDS="585,197,800,189,800,603,597,611" HREF="index.php?action=Maps&state=CO" TITLE="Colorado">

<AREA SHAPE=POLY COORDS="599,611,800,603,800,738,602,739" HREF="index.php?action=Maps&state=NM" TITLE="New Mexico">

<AREA SHAPE=POLY COORDS="188,610,598,612,601,739,132,739,127,699,159,698,176,712,185,690" HREF="index.php?action=Maps&state=AZ" TITLE="Arizona">

<AREA SHAPE=POLY COORDS="0,0,432,0,431,100,0,88" HREF="index.php?action=Maps&state=ID" TITLE="Idaho">

<AREA SHAPE=POLY COORDS="433,0,798,0,798,189,430,200" HREF="index.php?action=Maps&state=WY" TITLE="Wyoming">

<AREA SHAPE=POLY COORDS="0,84,203,97,184,690,171,712,146,695,127,706,129,739,63,739,0,672" HREF="index.php?action=Maps&state=NV" TITLE="Nevada">

</MAP>
