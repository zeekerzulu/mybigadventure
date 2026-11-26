<?php
$heading = 'Yellowstone National Park<br>Norris Geyser Basin<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040805/P1010124.JPG"><img src="Pics/Daily/20040805/Small/P1010124.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010128.JPG"><img src="Pics/Daily/20040805/Small/P1010128.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010132.JPG"><img src="Pics/Daily/20040805/Small/P1010132.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010140.JPG"><img src="Pics/Daily/20040805/Small/P1010140.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5018_1.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5018_1.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010144.JPG"><img src="Pics/Daily/20040805/Small/P1010144.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010151.JPG"><img src="Pics/Daily/20040805/Small/P1010151.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010153.JPG"><img src="Pics/Daily/20040805/Small/P1010153.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010155.JPG"><img src="Pics/Daily/20040805/Small/P1010155.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010159.JPG"><img src="Pics/Daily/20040805/Small/P1010159.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010165.JPG"><img src="Pics/Daily/20040805/Small/P1010165.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010182.JPG"><img src="Pics/Daily/20040805/Small/P1010182.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010190.JPG"><img src="Pics/Daily/20040805/Small/P1010190.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5019.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5019.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010224.JPG"><img src="Pics/Daily/20040805/Small/P1010224.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040805/P1010230.JPG"><img src="Pics/Daily/20040805/Small/P1010230.JPG"></a>
</center>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040805.2&page=1>1</a>
<a href=index.php?action=Parks&date=20040805.2&page=2>2</a>
<a href=index.php?action=Parks&date=20040805.2&page=3>3</a>
<a href=index.php?action=Parks&date=20040805.2&page=4>4</a>
<a href=index.php?action=Parks&date=20040805.2&page=5>5</a>
<a href=index.php?action=Parks&date=20040805.2&page=6>6</a>
<a href=index.php?action=Parks&date=20040805.2&page=7>7</a>
<a href=index.php?action=Parks&date=20040805.2&page=8>8</a>
<a href=index.php?action=Parks&date=20040805.2&page=9>9</a>
<a href=index.php?action=Parks&date=20040805.2&page=10>10</a>
<hr>
<a href=index.php?action=Parks&date=20040805.2&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040805&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040805&page=9#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Parks&date=20040805.1&page=1 title='Yellowstone National Park - Mammoth Hot Springs'>Prev Park Sight</a> | <a href=index.php?action=Parks&date=20040806.1&page=1 title='Yellowstone National Park - Fountain Paint Pot Area'>Next Park Sight</a>
<p>
</center>";
}
?>