<center>
<p>
<?php
	include 'titlemap.php';
	$picarray = array("5057","5058","5058_1","5059","5060","5061","5062","5062_1","5063","5064","5064_1","5065","5066","5067","5068","5068_1","5068_2","5068_3","5068_4","5069","5070","5071","5071_1","5072","5072_1","5073","5073_1","5074","5075","5075_1","5076","5077","5078","5079","5080","5080_1","5080_2","5081","5081_1");
	$arraylen = count($picarray);
	for ($index = 0; $index < $arraylen; $index++) {
		echo "<a href='index.php?action=Pics&name=Favorites/Pictures/" . $picarray[$index] . ".JPG&storylink=" . $titlemap[$picarray[$index]][1] . "#Ref1'><img src=Pics/Favorites/Pictures/Small/" . $picarray[$index] . ".jpg  alt='" . $titlemap[$picarray[$index]][2] . "'></a>" . Chr(10);
	}
?>
<p>
<hr><a href="index.php?action=FavoritePictures&page=2" title="Prev Page"><<<</a>&nbsp;&nbsp;
<b>Page</b>
<a href="index.php?action=FavoritePictures&page=1">1</a>
<a href="index.php?action=FavoritePictures&page=2">2</a>
<b>3</b>
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
&nbsp;&nbsp;<a href="index.php?action=FavoritePictures&page=4" title="Next Page">>>></a>
<hr>
</center>