<table class="ContentBanner" width=802 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>P R E F E R E N C E S</b><?php include 'sharecontrol.php' ?></td></tr></table>
<p>
Your screen preferences have been successfully processed and applied to the website.
<p>
Please use this page to review your new display preferences.
<p>
Unhappy with your selection?
<p>
Roll the dice again to find a more suitable look and feel!
<p>
<table><tr><td><a class='ButtonLink' href="index.php?action=PreferencesDisplay"><div class='ReEditButton'>Re-Edit Preferences</div></a></td></tr></table>
<?php
	if ($sourcecode != 1) {
		echo "<p>Otherwise, it&rsquo;s all good, exit processing!<p><a href=index.php?action=AdventureLog&page=1>Exit Preferences</a>";
	}
?>
<p>
<?php
if ($sourcecode != 1) {
	include 'AdventureLog/page_1.php';
} else {
echo "<table class=ContentBanner width=802 cellspacing=0 cellpadding=7>
	<tr><td class=BannerText align=center><b>T E S T&nbsp;&nbsp;&nbsp;C O N T E N T</b></td></tr></table>
<p>
I remember the hike up the mountainside to the crater was a tough one.  I was hell-bent on keeping a fast pace but wasn't accustomed to the steep incline.  Ascending more than 4500 feet in less than 5 miles calls for a certain measure of restraint, but of course I ignored that.
<p>
About a half-mile from the top I encountered the ash dome.  Ever try hiking up a steep ash slope?  It's sorta slippery, every two steps forward is met with one sliding step back.  Add to this leg cramping and you get a picture of my experience.  But I made it to the top, no bones about it!
<p>
<a href=index.php?action=Pics&name=Daily/20040708/30.JPG><img src=Pics/Daily/20040708/30_sm.jpg></a>
<p>
At the top I was rewarded with a spectacular view of Mount Rainier, located 50 miles to the northeast.  In the mid-ground is Spirit Lake.  Hammered by the eruption, the lake is still recovering from the devestation.  In the foreground you see the eastern crater wall.  I'd estimate its height to be around 1500 feet.
<p>
<a href=index.php?action=Pics&name=Daily/20040708/29.JPG><img src=Pics/Daily/20040708/29_sm.jpg></a>
<p>
At the center of it all is the lava dome, standing about two hundred feet high.  This picture is a bit dated however, recently the mountain has been showing signs of waking up.  At present, another lava dome has appeared and is growing at a much faster rate when compared to the time it took to build the original lava dome pictured here.
<p>
<a href=index.php?action=Pics&name=Daily/20040708/Topo1.jpg><img src=Pics/Daily/20040708/Topo1_sm.jpg></a>
<a href=index.php?action=Pics&name=Daily/20040708/Topo2.jpg><img src=Pics/Daily/20040708/Topo2_sm.jpg></a>
<p>
I've included two topography maps from my DeLorme GPS software.  The first is a 2-D map of the crater.  Filled with squiggly lines, the distance between any two lines on either map represents 100 feet in elevation.  Look at all the glaciers on the mountain.  The second map is a 3-D map which shows the depth of the crater looking due north.  Notice how the eruption blew out the northern side of the mountain.
<p>
That concludes my tour of Mount St. Helens National Volcanic Monument.  The tour was a terse one but you just can't beat a volcano when it comes to piquing my interests.  I rate my tour a 10 out of a possible 10.";
}
?>
<p>