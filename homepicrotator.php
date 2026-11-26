<?php
		include 'titlemap.php';
		do {
			$picnamelist = rand(5000,5366);
		} while (substr_count($skipnames,$picnamelist));
		for ($index=1; $index<=15; $index++) {
			do {
				$counter = rand(5000,5366);
			} while (substr_count($skipnames,$counter) || substr_count($picnamelist,$counter));
			$picnamelist = $picnamelist . ',' . $counter;
		}
		$picnamearray = explode(',',$picnamelist);
?>
<table cellspacing=0 cellpadding=0 border=0><tr>
<?php
	echo "<td><table class='HomePicRotator' border=0>";
	for ($index=0; $index<=4; $index++) {
		$picnameindex = $picnamearray[$index];
		$storylink = $titlemap[$picnameindex][1];
		$title = $titlemap[$picnameindex][2];
		echo "<tr><td height=89 width=119 valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$picnameindex.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$picnameindex.jpg border=0 title='$title'></a>
					</td></tr>";
	}
	echo "</table></td>";
	echo "<td><table class='HomePicRotator' border=0><tr>";
	for ($index=5; $index<=7; $index++) {
		$picnameindex = $picnamearray[$index];
		$storylink = $titlemap[$picnameindex][1];
		$title = $titlemap[$picnameindex][2];
		echo "<td><a href=index.php?action=Pics&name=Favorites/Pictures/$picnameindex.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$picnameindex.jpg border=0 title='$title'></a></td>";
	}
	echo "</tr></table>";
	echo "<table cellspacing=1 cellpadding=1 border=0><tr align=center valign=center><td>";
	echo "<a href='index.php?action=Pics&name=TravelHavoc.JPG&audio=1&title=BUCKLE UP AND HOLD ON ! ! !<p>My big adventure is about to begin!!!'><img class=HomePic border=0 src=Pics/CoverPageSmall2.jpg></a>";
	echo "</td></tr></table>";
	echo "<table class='HomePicRotator' border=0><tr>";
	for ($index=8; $index<=10; $index++) {
		$picnameindex = $picnamearray[$index];
		$storylink = $titlemap[$picnameindex][1];
		$title = $titlemap[$picnameindex][2];
		echo "<td><a href=index.php?action=Pics&name=Favorites/Pictures/$picnameindex.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$picnameindex.jpg border=0 title='$title'></a></td>";
	}
	echo "</tr></table></td>";
	echo "<td><table class='HomePicRotator' border=0>";
	for ($index=11; $index<=15; $index++) {
		$picnameindex = $picnamearray[$index];
		$storylink = $titlemap[$picnameindex][1];
		$title = $titlemap[$picnameindex][2];
		echo "<tr><td height=89 width=119 valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$picnameindex.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$picnameindex.jpg border=0 title='$title'></a>
					</td></tr>";
	}
	echo "</table></td></tr></table>";
?>