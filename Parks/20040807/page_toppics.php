<?php
$heading = 'Yellowstone National Park<br>Canyon Area<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010006.JPG"><img src="Pics/Daily/20040807.2/Small/P1010006.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5027.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5027.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010038.JPG"><img src="Pics/Daily/20040807.2/Small/P1010038.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010040.JPG"><img src="Pics/Daily/20040807.2/Small/P1010040.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010047.JPG"><img src="Pics/Daily/20040807.2/Small/P1010047.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010051.JPG"><img src="Pics/Daily/20040807.2/Small/P1010051.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010072.JPG"><img src="Pics/Daily/20040807.2/Small/P1010072.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010077.JPG"><img src="Pics/Daily/20040807.2/Small/P1010077.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010088.JPG"><img src="Pics/Daily/20040807.2/Small/P1010088.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010112.JPG"><img src="Pics/Daily/20040807.2/Small/P1010112.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010120.JPG"><img src="Pics/Daily/20040807.2/Small/P1010120.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010104.JPG"><img src="Pics/Daily/20040807.2/Small/P1010104.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010103.JPG"><img src="Pics/Daily/20040807.2/Small/P1010103.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010102.JPG"><img src="Pics/Daily/20040807.2/Small/P1010102.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010101.JPG"><img src="Pics/Daily/20040807.2/Small/P1010101.JPG"></a>
<a href="index.php?action=Panoramas&name=Daily/20040807.2/Panorama/1.jpg"><img class='FullPanorama' src="Pics/Daily/20040807.2/Panorama/Small/1.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010100.JPG"><img src="Pics/Daily/20040807.2/Small/P1010100.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040807.2/P1010140.JPG"><img src="Pics/Daily/20040807.2/Small/P1010140.JPG"></a>
<p>
</center>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040807&page=1>1</a>
<a href=index.php?action=Parks&date=20040807&page=2>2</a>
<a href=index.php?action=Parks&date=20040807&page=3>3</a>
<a href=index.php?action=Parks&date=20040807&page=4>4</a>
<a href=index.php?action=Parks&date=20040807&page=5>5</a>
<a href=index.php?action=Parks&date=20040807&page=6>6</a>
<a href=index.php?action=Parks&date=20040807&page=7>7</a>
<a href=index.php?action=Parks&date=20040807&page=8>8</a>
<a href=index.php?action=Parks&date=20040807&page=9>9</a>
<hr>
<a href=index.php?action=Parks&date=20040807&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040807&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040807&page=6#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Parks&date=20040806.4&page=1 title='Yellowstone National Park - Mud Volcano'>Prev Park Sight</a> | <a href=index.php?action=Stats&stat=Parks&date=20040815&page=5 title='Grand Teton National Park'>Next Park</a>
<p>
</center>";
}
?>