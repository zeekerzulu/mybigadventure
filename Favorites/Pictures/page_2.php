<center>
<p>
<?php
	include 'titlemap.php';
	$picarray = array("5027","5027_1","5027_2","5027_3","5027_4","5028","5029","5030","5031","5032","5032_1","5033","5034","5035","5036","5037","5038","5039","5040","5041","5041_1","5043","5044","5045","5046","5047","5048","5049","5050","5051","5052","5053","5054","5055","5055_1","5056");
	$arraylen = count($picarray);
	for ($index = 0; $index < $arraylen; $index++) {
		echo "<a href='index.php?action=Pics&name=Favorites/Pictures/" . $picarray[$index] . ".JPG&storylink=" . $titlemap[$picarray[$index]][1] . "#Ref1'><img src=Pics/Favorites/Pictures/Small/" . $picarray[$index] . ".jpg  alt='" . $titlemap[$picarray[$index]][2] . "'></a>" . Chr(10);
	}
?>
<p>
<hr><a href="index.php?action=FavoritePictures&page=1" title="Prev Page"><<<</a>&nbsp;&nbsp;
<b>Page</b>
<a href="index.php?action=FavoritePictures&page=1">1</a>
<b>2</b>
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
&nbsp;&nbsp;<a href="index.php?action=FavoritePictures&page=3" title="Next Page">>>></a>
<hr>
</center>