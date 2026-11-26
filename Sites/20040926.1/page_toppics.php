<?php
$heading = 'Winter Olympic Sports Complex<br>Ice Skating & Speed Skating<br>Top Pictures';
$headingsecondary = 'Lake Placid, New York';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0234.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0234.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0048.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0048.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0074.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0074.jpg"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5072_1.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5072_1.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0118.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0118.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0119.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0119.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0120.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0120.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0127.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0127.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040926.2/DSCN0040.JPG"><img src="Pics/Daily/20040926.2/Small/DSCN0040.jpg"></a>
<p>
</center>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Sites&date=20040926.1&page=1>1</a>
<a href=index.php?action=Sites&date=20040926.1&page=2>2</a>
<a href=index.php?action=Sites&date=20040926.1&page=3>3</a>
<a href=index.php?action=Sites&date=20040926.1&page=4>4</a>
<a href=index.php?action=Sites&date=20040926.1&page=5>5</a>
<hr>
<a href=index.php?action=Sites&date=20040926.1&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040926&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040926&page=1#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Stats&stat=Sites&date=20040921&page=12 title='Sterling Center Cemetery'>Prev Sight</a> | <a href=index.php?action=Sites&date=20040926.2&page=1 title='Winter Olympic Sports Complex - Ski Jumping Complex'>Next Sight</a>
<p>
</center>";
}
?>