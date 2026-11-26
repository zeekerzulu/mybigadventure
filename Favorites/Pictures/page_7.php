<center>
<p>
<?php
	include 'titlemap.php';
	$picarray = array("5158","5159","5160","5160_1","5161","5161_1","5162","5163","5163_1","5164","5165","5166","5167","5167_1","5168","5168_1","5169","5169_1","5170","5170_1","5171","5172","5173","5173_1","5174","5175","5176","5177","5178","5178_1","5179","5179_1","5179_2","5179_3","5180","5181","5182","5183","5184");
	$arraylen = count($picarray);
	for ($index = 0; $index < $arraylen; $index++) {
		echo "<a href='index.php?action=Pics&name=Favorites/Pictures/" . $picarray[$index] . ".JPG&storylink=" . $titlemap[$picarray[$index]][1] . "#Ref1'><img src=Pics/Favorites/Pictures/Small/" . $picarray[$index] . ".jpg  alt='" . $titlemap[$picarray[$index]][2] . "'></a>" . Chr(10);
	}
?>
<p>
<hr><a href="index.php?action=FavoritePictures&page=6" title="Prev Page"><<<</a>&nbsp;&nbsp;
<b>Page</b>
<a href="index.php?action=FavoritePictures&page=1">1</a>
<a href="index.php?action=FavoritePictures&page=2">2</a>
<a href="index.php?action=FavoritePictures&page=3">3</a>
<a href="index.php?action=FavoritePictures&page=4">4</a>
<a href="index.php?action=FavoritePictures&page=5">5</a>
<a href="index.php?action=FavoritePictures&page=6">6</a>
<b>7</b>
<a href="index.php?action=FavoritePictures&page=8">8</a>
<a href="index.php?action=FavoritePictures&page=9">9</a>
<a href="index.php?action=FavoritePictures&page=10">10</a>
<a href="index.php?action=FavoritePictures&page=11">11</a>
<a href="index.php?action=FavoritePictures&page=12">12</a>
<a href="index.php?action=FavoritePictures&page=13">13</a>
&nbsp;&nbsp;<a href="index.php?action=FavoritePictures&page=8" title="Next Page">>>></a>
<hr>
</center>