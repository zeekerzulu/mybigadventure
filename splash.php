<html>
<head>
<title>Cross Country Travel Adventure & USA Tour - My Big Adventure&trade;</title>
<?php
	include 'keywordmeta.php';
?>
<meta http-equiv="Page-Exit"
      content="RevealTrans(Duration=1.5, Transition=3)">
</head>
<body>
<center>
<table width="800" height="500">
<tr><td class="SplashText" align="center">
<b>
<?php
		$counter = rand(1,16);
		if ($counter == 9) $counter = 10;  // Bypass the Mississippi Picture
?>
<font size="-4">Click on picture to enter MyBigAdventure&trade;</font><p>
<a href="index.php?action=Home" title="Enter My Big Adventure!">
<?php
	echo "<img class=PicBorder border=2 src=Pics/Splash/Splash$counter.jpg border=0></a>";
?>
<p>
<center><b>
<?php
		switch ($counter) {
				case '1':
						echo "Logan Pass, Glacier National Park, MT";
						break;
				case '2':
						echo "On a dirt road, just south of Bozeman, MT";
						break;
				case '3':
						echo "The Grand Tetons, Grand Teton National Park, WY";
						break;
				case '4':
						echo "Devils Tower National Monument, Devils Tower, WY";
						break;
				case '5':
						echo "The Badlands, SD";
						break;
				case '6':
						echo "The Adirondacks, Lake Placid, NY";
						break;
				case '7':
						echo "Southwest Harbor, Acadia National Park, ME";
						break;
				case '8':
						echo "Great Smoky Mountains, North Carolina";
						break;
				case '9':
				case '10':
						echo "The Alamo, San Antonio, TX";
						break;
				case '11':
						echo "Pueblo Peak, Taos, NM";
						break;
				case '12':
						echo "Uber-Expensive Vacation Home, Vail, CO";
						break;
				case '13':
						echo "Historic Ute Indian Rock Art, Arches National Park, Moab, UT";
						break;
				case '14':
						echo "Delicate Arch, Arches National Park, Moab, UT";
						break;
				case '15':
						echo "Towering Hoodoos, Bryce Canyon National Park, UT";
						break;
				case '16':
						echo "The Needles, Cannon Beach, OR";
						break;
		}
?>
<p>
<font size="-4">Last Updated: Monday, September 5, 2005 @ 7:25 pm Pacific</font></center>
</b>
<p>
</tr>
<tr><td class="SplashText">
<center>
<font size="-4"><a href="index.php?action=AllSplash"><b><font color="black">All Splash Pages</font></b></a></font></center>
</center>
</td></tr>
</table>
</center>
</body>
</html>
<?php
	//include 'trackspider.php';
?>