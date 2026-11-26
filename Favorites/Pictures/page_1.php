<center>
<?php
	include 'titlemap.php';
	$picarray = array("5000~1","5001","5002","5002_1","5002_2","5003","5003_1","5004~3","5004_1","5005","5006","5007","5008","5008_1","5009","5009_1","5009_2","5010","5010_1~4","5011","5012","5013","5014","5015","5016","5017","5018","5018_1","5019","5020","5021","5022","5023","5024","5025","5025_1","5026","5026_1");
	$arraylen = count($picarray);
	for ($index = 0; $index < $arraylen; $index++) {
	  $info = explode('~', $picarray[$index]);
	  $pic = $info[0];
	  $audio = $info[1];
		echo "<a href='index.php?action=Pics&name=Favorites/Pictures/" . $pic . ".JPG&storylink=" . $titlemap[$pic][1] ;
		if ($audio) {
		  echo "&audio=" . $audio ;
		}
		echo "#Ref1'><img src=Pics/Favorites/Pictures/Small/" . $pic . ".jpg  alt='" . $titlemap[$pic][2] . "'></a>" . Chr(10);
	}
?>
<p>
<hr>
<b>Page</b>
<b>1</b>
<a href="index.php?action=FavoritePictures&page=2">2</a>
<a href="index.php?action=FavoritePictures&page=3">3</a>
<a href="index.php?action=FavoritePictures&page=4">4</a>
<a href="index.php?action=FavoritePictures&page=5">5</a>
<a href="index.php?action=FavoritePictures&page=6">6</a>
<a href="index.php?action=FavoritePictures&page=7">7</a>
<a href="index.php?action=FavoritePictures&page=8">8</a>
<a href="index.php?action=FavoritePictures&page=9">9</a>
<a href="index.php?action=FavoritePictures&page=10">10</a>
<a href="index.php?action=FavoritePictures&page=11">11</a>
<a href="index.php?action=FavoritePictures&page=12">12</a>
<a href="index.php?action=FavoritePictures&page=13">13</a>
&nbsp;&nbsp;<a href="index.php?action=FavoritePictures&page=2" title="Next Page">>>></a>
<hr>
</center>