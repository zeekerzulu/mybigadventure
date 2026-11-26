<?php
$heading = 'Yellowstone National Park<br>Old Faithful Area<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040806/P1010091.JPG"><img src="Pics/Daily/20040806/Small/P1010091.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010105.JPG"><img src="Pics/Daily/20040806/Small/P1010105.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010111.JPG"><img src="Pics/Daily/20040806/Small/P1010111.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5023.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5023.jpg"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5024.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5024.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010142.JPG"><img src="Pics/Daily/20040806/Small/P1010123.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010142.JPG"><img src="Pics/Daily/20040806/Small/P1010136.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010142.JPG"><img src="Pics/Daily/20040806/Small/P1010138.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010142.JPG"><img src="Pics/Daily/20040806/Small/P1010142.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010175.JPG"><img src="Pics/Daily/20040806/Small/P1010171.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010175.JPG"><img src="Pics/Daily/20040806/Small/P1010175.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010183.JPG"><img src="Pics/Daily/20040806/Small/P1010183.JPG"></a>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040806.2&page=1>1</a>
<a href=index.php?action=Parks&date=20040806.2&page=2>2</a>
<a href=index.php?action=Parks&date=20040806.2&page=3>3</a>
<a href=index.php?action=Parks&date=20040806.2&page=4>4</a>
<a href=index.php?action=Parks&date=20040806.2&page=5>5</a>
<a href=index.php?action=Parks&date=20040806.2&page=6>6</a>
<a href=index.php?action=Parks&date=20040806.2&page=7>7</a>
<a href=index.php?action=Parks&date=20040806.2&page=8>8</a>
<a href=index.php?action=Parks&date=20040806.2&page=9>9</a>
<a href=index.php?action=Parks&date=20040806.2&page=10>10</a>
<hr>
<a href=index.php?action=Parks&date=20040806.2&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040806&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040806&page=6#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Parks&date=20040806.1&page=1 title='Yellowstone National Park - Fountain Paint Pot Area'>Prev Park Sight</a> | <a href=index.php?action=Parks&date=20040806.3&page=1 title='Yellowstone National Park - West Thumb Geyser Basin'>Next Park Sight</a>
<p>
</center>";
}
?>