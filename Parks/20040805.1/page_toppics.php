<?php
$heading = 'Yellowstone National Park<br>Mammoth Hot Springs<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040805/P1010083.JPG"><img src="Pics/Daily/20040805/Small/P1010083.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010015.JPG"><img src="Pics/Daily/20040805/Small/P1010015.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010021.JPG"><img src="Pics/Daily/20040805/Small/P1010021.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5017.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5017.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010039.JPG"><img src="Pics/Daily/20040805/Small/P1010037.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5018.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5018.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010057.JPG"><img src="Pics/Daily/20040805/Small/P1010057.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010067.JPG"><img src="Pics/Daily/20040805/Small/P1010067.JPG"></a>
</center>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040805.1&page=1>1</a>
<a href=index.php?action=Parks&date=20040805.1&page=2>2</a>
<a href=index.php?action=Parks&date=20040805.1&page=3>3</a>
<a href=index.php?action=Parks&date=20040805.1&page=4>4</a>
<a href=index.php?action=Parks&date=20040805.1&page=5>5</a>
<hr>
<a href=index.php?action=Parks&date=20040805.1&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040805&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040805&page=4#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Stats&stat=Parks&date=20040728&page=3 title='Glacier National Park'>Prev Park</a> |
<a href=index.php?action=Parks&date=20040805.2&page=1 title='Yellowstone National Park - Norris Geyser Basin'>Next Park Sight</a>
<p>
</center>";
}
?>