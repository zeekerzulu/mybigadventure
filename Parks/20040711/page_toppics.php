<?php
$heading = 'Mount Rainier National Park<br>Top Pictures';
$headingsecondary = 'Western Washington State';
include 'renderheading.php';
?>
<p>
<center>
<a href=javascript:history.go(-1)>Back</a>
<p>
<a href="index.php?action=Pics&name=Daily/20040711/63.JPG"><img src="Pics/Daily/20040711/63_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040711/66.JPG"><img src="Pics/Daily/20040711/53_sm.JPG"></a>
<a href="index.php?action=Pics&name=Oddities/20040711_1.JPG"><img src="Pics/Oddities/20040711_1_sm.JPG"></a>
<a href="index.php?action=Pics&name=Oddities/20040711_2.JPG"><img src="Pics/Oddities/20040711_2_sm.JPG"></a>
<a href="index.php?action=Pics&name=Oddities/20040711_3.JPG"><img src="Pics/Oddities/20040711_3_sm.JPG"></a>
<a href="index.php?action=Pics&name=Daily/20040711/96.JPG"><img src="Pics/Daily/20040711/96_sm.JPG"></a>
<p>
<?php
if (!isset($_REQUEST['summary'])) {
echo "<center>
<hr>
<b>Page</b>
<a href=index.php?action=Parks&date=20040711&page=1>1</a>
<a href=index.php?action=Parks&date=20040711&page=2>2</a>
<a href=index.php?action=Parks&date=20040711&page=3>3</a>
<hr>
<a href=index.php?action=Parks&date=20040711&page=gallery>Photo Gallery</a>
<p>
<a href=index.php?action=DailyEvents&date=20040711&page=1 title='Top of Travel Log'>Travel Log</a> | <a href=index.php?action=DailyEvents&date=20040711&page=1#Ref2 title='Travel Log Reference'>Reference</a>
<p>
<a href=index.php?action=Stats&stat=Parks&date=20040719&page=2 title='North Cascades National Park'>Next Park</a>
<p>
</center>";
}
?>