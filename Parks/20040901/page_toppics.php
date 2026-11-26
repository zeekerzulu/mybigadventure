<?php
$heading = 'Indiana Dunes National Park<br>Top Pictures';
$headingsecondary = 'Northern Indiana';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Favorites/Pictures/5056.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5056.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040901/DSCN0055.JPG"><img src="Pics/Daily/20040901/Small/DSCN0055.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040901/DSCN0056.JPG"><img src="Pics/Daily/20040901/Small/DSCN0056.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5057.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5057.jpg"></a>
<a href="index.php?action=Pics&name=Daily/20040901/DSCN0090.JPG"><img src="Pics/Daily/20040901/Small/DSCN0090.JPG"></a>
<a href="index.php?action=Pics&name=Favorites/Pictures/5058.JPG&nogallery=1"><img src="Pics/Favorites/Pictures/Small/5058.jpg"></a>
<p>
</center>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040901&page=1>1</a>
<a href=index.php?action=Parks&date=20040901&page=2>2</a>
<a href=index.php?action=Parks&date=20040901&page=3>3</a>
<a href=index.php?action=Parks&date=20040901&page=4>4</a>
<a href=index.php?action=Parks&date=20040901&page=5>5</a>
<hr>
<a href=index.php?action=Parks&date=20040901&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040901&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040901&page=1#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Stats&stat=Parks&date=20040822&page=6 title='Badlands National Park'>Prev Park</a> |
<a href=index.php?action=Stats&stat=Parks&date=20040921&page=8 title='Adirondack State Park'>Next Park</a>
<p>
</center>";
}
?>