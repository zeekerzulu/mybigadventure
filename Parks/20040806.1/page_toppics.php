<?php
$heading = 'Yellowstone National Park<br>Fountain Paint Pot Area<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040806/P1010040.JPG"><img src="Pics/Daily/20040806/Small/P1010040.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010041.JPG"><img src="Pics/Daily/20040806/Small/P1010041.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5020.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5020.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010053.JPG"><img src="Pics/Daily/20040806/Small/P1010053.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5021.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5021.jpg"></a>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040806.1&page=1>1</a>
<a href=index.php?action=Parks&date=20040806.1&page=2>2</a>
<a href=index.php?action=Parks&date=20040806.1&page=3>3</a>
<a href=index.php?action=Parks&date=20040806.1&page=4>4</a>
<hr>
<a href=index.php?action=Parks&date=20040806.1&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040806&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040806&page=4#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Parks&date=20040805.2&page=1 title='Yellowstone National Park - Norris Geyser Basin'>Prev Park Sight</a> | <a href=index.php?action=Parks&date=20040806.2&page=1 title='Yellowstone National Park - Old Faithful Area'>Next Park Sight</a>
<p>
</center>";
}
?>