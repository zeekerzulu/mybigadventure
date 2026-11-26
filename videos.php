<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
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
		  $name = str_replace('.MOV','.mp4',$name);
			if (!$sendpage) echo "<p><a href='javascript:history.go(-1)'>Back</a><p>
				WARNING:<br>Downloading of video may cause<br>drowziness, please be patient...<p>
				<video width='320' height='255' controls autoplay>
				  <source src=$name type='video/mp4'>
				</video>" ;
				if (false && isset($_REQUEST['DeLormeVideo'])) {
					echo "<br><a href=javascript:myPopup1('http://www.delorme.com')>DeLorme Topo 5.0</a>";
					if (isset($_REQUEST['Scale'])) {
						$scale = $_REQUEST['Scale'];
						echo "<br>($scale normal height)";
					}
				}
				echo "<p>My apologies for the rough video, it's the best<br>I could do given my camera's capabilities.";
		}
	}
	echo "</center>";
?>