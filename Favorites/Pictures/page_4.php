<center>
<p>
<?php
	include 'titlemap.php';
	$picarray = array("5081_2","5081_3","5082","5083","5084","5084_1","5085","5085_1","5085_2","5085_3","5086","5087","5088","5089","5090","5091","5092","5093","5093_1","5094","5095","5096","5097","5098","5099","5100","5100_1","5101","5102","5102_1","5102_2","5102_3","5103","5104","5105","5105_1","5106","5107");
	$arraylen = count($picarray);
	for ($index = 0; $index < $arraylen; $index++) {
		echo "<a href='index.php?action=Pics&name=Favorites/Pictures/" . $picarray[$index] . ".JPG&storylink=" . $titlemap[$picarray[$index]][1] . "#Ref1'><img src=Pics/Favorites/Pictures/Small/" . $picarray[$index] . ".jpg  alt='" . $titlemap[$picarray[$index]][2] . "'></a>" . Chr(10);
	}
?>
<p>
<hr><a href="index.php?action=FavoritePictures&page=3" title="Prev Page"><<<</a>&nbsp;&nbsp;
<b>Page</b>
<a href="index.php?action=FavoritePictures&page=1">1</a>
<a href="index.php?action=FavoritePictures&page=2">2</a>
<a href="index.php?action=FavoritePictures&page=3">3</a>
<b>4</b>
<a href="index.php?action=FavoritePictures&page=5">5</a>
<a href="index.php?action=FavoritePictures&page=6">6</a>
<a href="index.php?action=FavoritePictures&page=7">7</a>
<a href="index.php?action=FavoritePictures&page=8">8</a>
<a href="index.php?action=FavoritePictures&page=9">9</a>
<a href="index.php?action=FavoritePictures&page=10">10</a>
<a href="index.php?action=FavoritePictures&page=11">11</a>
<a href="index.php?action=FavoritePictures&page=12">12</a>
<a href="index.php?action=FavoritePictures&page=13">13</a>
&nbsp;&nbsp;<a href="index.php?action=FavoritePictures&page=5" title="Next Page">>>></a>
<hr>
</center>