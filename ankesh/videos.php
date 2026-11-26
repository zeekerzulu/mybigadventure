<table class="ContentBanner" width=<?php echo $width?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>V I D E O S</b></td></tr></table>
<br>
<?php 
	echo "<center>";
	$sendpage = false;
	if (!empty($_REQUEST['sendpage'])) {
		$sendpage = true;
	}
	$name = '';
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		if ($name != '') {
			if (!$sendpage) echo "<p><a href='javascript:history.go(-1)'>Back</a><p>
				WARNING:<br>Downloading of video may cause<br>drowziness, please be patient...<p>
				<embed src=$name width=320 height=255 controller=true>";
				if (isset($_REQUEST['DeLormeVideo'])) {
					echo "<br><a href=javascript:myPopup1('http://www.delorme.com')>DeLorme Topo 5.0</a>";
					if (isset($_REQUEST['Scale'])) {
						$scale = $_REQUEST['Scale'];
						echo "<br>($scale normal height)";
					}
					echo "<p>* My apologies for the rough video, it's the best<br>I could do given my camera's capabilities.<p>** Control the rotation yourself via<br>the video's slide control.";
				}
				echo "<p>
				<b>Note:</b> QuickTime is required to view the website's videos.  If you encounter a blank screen upon access, you will need to download QuickTime.  Click <a href=javascript:myPopup2('http://www.apple.com/quicktime/')>here</a> to download the software.
				<p>";
		}
	}
	echo "</center>";
?>