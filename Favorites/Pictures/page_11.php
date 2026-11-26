<center>
<p>
<?php
	include 'titlemap.php';
	$picarray = array("5270_4","5271","5272","5273","5274","5275","5276","5277","5278","5279","5280","5281","5282","5283","5284","5285","5286","5287","5288","5289","5290","5291","5292","5293","5293_1","5294","5295","5296","5297","5298","5299","5300","5301","5303","5304","5305","5306","5307");
	$arraylen = count($picarray);
	for ($index = 0; $index < $arraylen; $index++) {
		echo "<a href='index.php?action=Pics&name=Favorites/Pictures/" . $picarray[$index] . ".JPG&storylink=" . $titlemap[$picarray[$index]][1] . "#Ref1'><img src=Pics/Favorites/Pictures/Small/" . $picarray[$index] . ".jpg  alt='" . $titlemap[$picarray[$index]][2] . "'></a>" . Chr(10);
	}
?>
<p>
<hr><a href="index.php?action=FavoritePictures&page=10" title="Prev Page"><<<</a>&nbsp;&nbsp;
<b>Page</b>
<a href="index.php?action=FavoritePictures&page=1">1</a>
<a href="index.php?action=FavoritePictures&page=2">2</a>
<a href="index.php?action=FavoritePictures&page=3">3</a>
<a href="index.php?action=FavoritePictures&page=4">4</a>
<a href="index.php?action=FavoritePictures&page=5">5</a>
<a href="index.php?action=FavoritePictures&page=6">6</a>
<a href="index.php?action=FavoritePictures&page=7">7</a>
<a href="index.php?action=FavoritePictures&page=8">8</a>
<a href="index.php?action=FavoritePictures&page=9">9</a>
<a href="index.php?action=FavoritePictures&page=10">10</a>
<b>11</b>
<a href="index.php?action=FavoritePictures&page=12">12</a>
<a href="index.php?action=FavoritePictures&page=13">13</a>
&nbsp;&nbsp;<a href="index.php?action=FavoritePictures&page=12" title="Next Page">>>></a>
<hr>
</center>