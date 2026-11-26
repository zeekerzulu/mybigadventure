<?php
$heading = 'Yellowstone National Park<br>West Thumb Geyser Basin<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040806/P1010201.JPG"><img src="Pics/Daily/20040806/Small/P1010201.JPG"></a>
<a href="index.php?action=Panoramas&name=Daily/20040806/Panorama/1.mov"><img class='FullPanorama' class='FullPanorama' src="Pics/Daily/20040806/Panorama/Small/1.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010212.JPG"><img src="Pics/Daily/20040806/Small/P1010212.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010216.JPG"><img src="Pics/Daily/20040806/Small/P1010216.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010221.JPG"><img src="Pics/Daily/20040806/Small/P1010221.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5025.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5025.jpg"></a>
<a href="index.php?action=Panoramas&name=Daily/20040806/Panorama/2.mov"><img class='FullPanorama' class='FullPanorama' src="Pics/Daily/20040806/Panorama/Small/2.jpg"></a>
</center>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040806.3&page=1>1</a>
<a href=index.php?action=Parks&date=20040806.3&page=2>2</a>
<a href=index.php?action=Parks&date=20040806.3&page=3>3</a>
<a href=index.php?action=Parks&date=20040806.3&page=4>4</a>
<a href=index.php?action=Parks&date=20040806.3&page=5>5</a>
<hr>
<a href=index.php?action=Parks&date=20040806.3&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040806&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040806&page=7#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Parks&date=20040806.2&page=1 title='Yellowstone National Park - Old Faithful Area'>Prev Park Sight</a> | <a href=index.php?action=Parks&date=20040806.4&page=1 title='Yellowstone National Park - Mud Volcano'>Next Park Sight</a>
<p>
</center>";
}
?>