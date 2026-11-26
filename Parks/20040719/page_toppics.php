<?php
$heading = 'North Cascades National Park<br>Top Pictures';
$headingsecondary = 'Northern Washington State';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040719/67.JPG"><img src="Pics/Daily/20040719/67_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040719/80.JPG"><img src="Pics/Daily/20040719/80_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040719/85.JPG"><img src="Pics/Daily/20040719/85_sm.JPG"></a>
<a href="index.php?action=Panoramas&name=Daily/20040719/Panorama/1.mov"><img class='FullPanorama' src="Pics/Daily/20040719/Panorama/Small/1.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040719/121.JPG"><img src="Pics/Daily/20040719/109_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040719/121.JPG"><img src="Pics/Daily/20040719/121_sm.JPG"></a>
<a href="index.php?action=Panoramas&name=Daily/20040719/Panorama/2.mov"><img class='FullPanorama' src="Pics/Daily/20040719/Panorama/Small/2.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040719/146.JPG"><img src="Pics/Daily/20040719/146_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040719/147.JPG"><img src="Pics/Daily/20040719/147_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040719/152.JPG"><img src="Pics/Daily/20040719/152_sm.JPG"></a>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040719&page=1>1</a>
<a href=index.php?action=Parks&date=20040719&page=2>2</a>
<a href=index.php?action=Parks&date=20040719&page=3>3</a>
<a href=index.php?action=Parks&date=20040719&page=4>4</a>
<hr>
<a href=index.php?action=Parks&date=20040719&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040719&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040719&page=4#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Stats&stat=Parks&date=20040711&page=1 title='Mount Rainier National Park'>Prev Park</a> |
<a href=index.php?action=Stats&stat=Parks&date=20040728&page=3 title='Glacier National Park'>Next Park</a>
<p>
</center>";
}
?>