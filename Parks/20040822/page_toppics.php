<?php
$heading = 'Badlands National Park<br>Top Pictures';
$headingsecondary = 'Southwestern South Dakota';
include 'renderheading.php';
?>
<p>
<center>
<a href="index.php?action=Pics&name=Daily/20040822/P1010107.JPG"><img src="Pics/Daily/20040822/Small/P1010107.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040822/P1010108.JPG"><img src="Pics/Daily/20040822/Small/P1010108.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040822/P1010109.JPG"><img src="Pics/Daily/20040822/Small/P1010109.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040822/P1010110.JPG"><img src="Pics/Daily/20040822/Small/P1010110.JPG"></a>
<a href="index.php?action=Panoramas&name=Daily/20040822/Panorama/1.mov"><img class='FullPanorama' src="Pics/Daily/20040822/Panorama/Small/1.jpg"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5044.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5044.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040823/20.JPG"><img src="Pics/Daily/20040823/Small/20.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040823/19.JPG"><img src="Pics/Daily/20040823/Small/19.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040823/5.JPG"><img src="Pics/Daily/20040823/Small/5.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040823/6.JPG"><img src="Pics/Daily/20040823/Small/6.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040823/10.JPG"><img src="Pics/Daily/20040823/Small/10.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040823/2.JPG"><img src="Pics/Daily/20040823/Small/2.jpg"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5047.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5047.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040824/5.JPG"><img src="Pics/Daily/20040824/Small/5.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040824/8.JPG"><img src="Pics/Daily/20040824/Small/8.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5046.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5046.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040824/12.JPG"><img src="Pics/Daily/20040824/Small/12.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5045.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5045.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040824/14.JPG"><img src="Pics/Daily/20040824/Small/14.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040824/15.JPG"><img src="Pics/Daily/20040824/Small/15.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040824/16.JPG"><img src="Pics/Daily/20040824/Small/16.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040824/18.JPG"><img src="Pics/Daily/20040824/Small/18.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040824/20.JPG"><img src="Pics/Daily/20040824/Small/20.JPG"></a>
<p>
</center>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040822&page=1>1</a>
<a href=index.php?action=Parks&date=20040822&page=2>2</a>
<a href=index.php?action=Parks&date=20040822&page=3>3</a>
<a href=index.php?action=Parks&date=20040822&page=4>4</a>
<a href=index.php?action=Parks&date=20040822&page=5>5</a>
<a href=index.php?action=Parks&date=20040822&page=6>6</a>
<a href=index.php?action=Parks&date=20040822&page=7>7</a>
<a href=index.php?action=Parks&date=20040822&page=8>8</a>
<a href=index.php?action=Parks&date=20040822&page=9>9</a>
<a href=index.php?action=Parks&date=20040822&page=10>10</a>
<a href=index.php?action=Parks&date=20040822&page=11>11</a>
<hr>
<a href=index.php?action=Parks&date=20040822&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040822&page=1 title='Top of Travel Log'>Travel Log</a>
<p>
<a href=index.php?action=Stats&stat=Parks&date=20040815&page=5 title='Grand Teton National Park'>Prev Park</a> | <a href=index.php?action=Stats&stat=Parks&date=20040901&page=7 title='Indiana Dunes National Park'>Next Park</a>
<p>
</center>";
}
?>