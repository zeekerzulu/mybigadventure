<?php
$heading = 'Yellowstone National Park<br>Mud Volcano<br>Top Pictures';
$headingsecondary = 'Northwestern Wyoming';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040806/P1010234.JPG"><img src="Pics/Daily/20040806/Small/P1010234.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010235.JPG"><img src="Pics/Daily/20040806/Small/P1010235.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010238.JPG"><img src="Pics/Daily/20040806/Small/P1010238.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040806/P1010242.JPG"><img src="Pics/Daily/20040806/Small/P1010242.JPG"></a>
</center>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040806.4&page=1>1</a>
<a href=index.php?action=Parks&date=20040806.4&page=2>2</a>
<a href=index.php?action=Parks&date=20040806.4&page=3>3</a>
<hr>
<a href=index.php?action=Parks&date=20040806.4&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040806&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040806&page=8#Ref1 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Parks&date=20040806.3&page=1 title='Yellowstone National Park - West Thumb Geyser Basin'>Prev Park Sight</a> | <a href=index.php?action=Parks&date=20040807&page=1 title='Yellowstone National Park - Canyon Area'>Next Park Sight</a>
<p>
</center>";
}
?>