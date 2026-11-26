<?php
$heading = 'Grand Teton National Park<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040815/P8150173.JPG"><img src="Pics/Daily/20040815/Small/P8150173.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150177.JPG"><img src="Pics/Daily/20040815/Small/P8150177.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150180.JPG"><img src="Pics/Daily/20040815/Small/P8150180.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150182.JPG"><img src="Pics/Daily/20040815/Small/P8150182.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150209.JPG"><img src="Pics/Daily/20040815/Small/P8150209.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150210.JPG"><img src="Pics/Daily/20040815/Small/P8150210.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150211.JPG"><img src="Pics/Daily/20040815/Small/P8150211.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150212.JPG"><img src="Pics/Daily/20040815/Small/P8150212.JPG"></a>
<a href="index.php?action=Panoramas&name=Daily/20040815/Panorama/2.jpg"><img class='FullPanorama' src="Pics/Daily/20040815/Panorama/Small/2.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150213.JPG"><img src="Pics/Daily/20040815/Small/P8150213.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150214.JPG"><img src="Pics/Daily/20040815/Small/P8150214.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150215.JPG"><img src="Pics/Daily/20040815/Small/P8150215.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150216.JPG"><img src="Pics/Daily/20040815/Small/P8150216.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150257.JPG"><img src="Pics/Daily/20040815/Small/P8150257.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150258.JPG"><img src="Pics/Daily/20040815/Small/P8150258.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P8150259.JPG"><img src="Pics/Daily/20040815/Small/P8150259.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P1010302.JPG"><img src="Pics/Daily/20040815/Small/P1010302.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P1010304.JPG"><img src="Pics/Daily/20040815/Small/P1010304.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040815/P1010308.JPG"><img src="Pics/Daily/20040815/Small/P1010308.JPG"></a>
<p>
</center>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040815&page=1>1</a>
<a href=index.php?action=Parks&date=20040815&page=2>2</a>
<a href=index.php?action=Parks&date=20040815&page=3>3</a>
<a href=index.php?action=Parks&date=20040815&page=4>4</a>
<a href=index.php?action=Parks&date=20040815&page=5>5</a>
<a href=index.php?action=Parks&date=20040815&page=6>6</a>
<a href=index.php?action=Parks&date=20040815&page=7>7</a>
<a href=index.php?action=Parks&date=20040815&page=8>8</a>
<hr>
<a href=index.php?action=Parks&date=20040815&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040815&page=1 title='Top of Travel Log'>Travel Log</a>
<p>
<a href=index.php?action=Stats&stat=Parks&date=20040805&page=4 title='Yellowstone National Park'>Prev Park</a> | <a href=index.php?action=Stats&stat=Parks&date=20040822&page=6 title='Badlands National Park'>Next Park</a>
<p>
</center>";
}
?>