<?php
		if (!empty($_REQUEST['stat'])) {
			$statparm = trim($_REQUEST['stat']);
			if ($statparm == 'Favorites' || $statparm == 'Oddities' ||
				$statparm == 'Mishaps' || $statparm == 'Revelations') {
				$picdisplaycnt = 7;
			} elseif ($statparm == 'Friends') {
				$picdisplaycnt = 7;
			} else {
				$picdisplaycnt = 7;
			}
		} else {
			$picdisplaycnt = 7;
		}
		include 'titlemap.php';
		do {
			$counter1 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter1);
		} while ($pos);
		do {
			$counter2 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter2);
		} while ($pos || $counter2 == $counter1);
		do {
			$counter3 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter3);
		} while ($pos || ($counter3 == $counter2 || $counter3 == $counter1));
		do {
			$counter4 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter4);
		} while ($pos || ($counter4 == $counter3 || $counter4 == $counter2 || $counter4 == $counter1));
		do {
			$counter5 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter5);
		} while ($pos || ($counter5 == $counter4 || $counter5 == $counter3 || $counter5 == $counter2 || $counter5 == $counter1));
		do {
			$counter6 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter6);
		} while ($pos || ($counter6 == $counter5 || $counter6 == $counter4 || $counter6 == $counter3 || $counter6 == $counter2 || $counter6 == $counter1));
		do {
			$counter7 = rand(5000,5366);
			$pos = substr_count($skipnames,$counter7);
		} while ($pos || ($counter7 == $counter6 || $counter7 == $counter5 || $counter7 == $counter4 || $counter7 == $counter3 || $counter7 == $counter2 || $counter7 == $counter1));
?>
			<table class='PicRotator' cellspacing=0 cellpadding=0>
<?php
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter1][1];
		$title = $titlemap[$counter1][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter1.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter1.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter2][1];
		$title = $titlemap[$counter2][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter2.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter2.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter3][1];
		$title = $titlemap[$counter3][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter3.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter3.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter4][1];
		$title = $titlemap[$counter4][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter4.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter4.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter5][1];
		$title = $titlemap[$counter5][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter5.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter5.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter6][1];
		$title = $titlemap[$counter6][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter6.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter6.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
	$picdisplaycnt--;
	if ($picdisplaycnt >= 0) {
		$storylink = $titlemap[$counter7][1];
		$title = $titlemap[$counter7][2];
		echo "<tr><td valign=center>
						<a href=index.php?action=Pics&name=Favorites/Pictures/$counter7.JPG&storylink=$storylink#Ref1><img src=Pics/Favorites/Rotator/$counter7.jpg border=0 alt='$title'></a>
					</td></tr>";
	}
?>
</table>