<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>P A N O R A M A S</b><?php include 'sharecontrol.php' ?></td></tr></table>
<br><center>
<?php 
	$link = '';
	if (!empty($_REQUEST['link'])) {
		$link = $_REQUEST['link'];
		if ($link != '') {
			$newlink = str_replace("~","&",$link);
			// Coming from the comments facility
			if (isset($_REQUEST['date'])) {
				$date = $_REQUEST['date'];
				$page = $_REQUEST['page'];
				$newlink = "$newlink&date=$date&page=$page";
			}
			echo "<a href=index.php?action=$newlink>More of the story</a>";
		}
	}
	if (empty($_REQUEST['sendpage'])) {
			if ($link != '') echo " | ";
			echo "<a href='javascript:history.go(-1)'>Back</a>";
	}
	if (!empty($_REQUEST['title'])) {
		$title = $_REQUEST['title'];
		if ($title != '') {
			$title = str_replace('^^',' ',$title);
			echo "<p><b><h1>$title</h1></b>";
		}
	}
	$name = $_REQUEST['name'];
	$name = str_replace('.mov','.jpg',$name);
	echo "<p><div class='PanoramaView'><img src=Pics/$name></div></center>";
?>