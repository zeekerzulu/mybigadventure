<?php
if (stristr($_SERVER['HTTP_REFERER'],'VisitorGallery')) {
echo "<SCRIPT LANGUAGE=JavaScript>
<!-- This free JavaScript code is provided by D. John Wood // -->
<!-- Hide script from old browsers
<!-- 
var message='Sorry, you do not have permission to download these copyrighted images.'; // Message for the alert box
function click(e) {
if (document.all) {
if (event.button == 2) {
alert(message); 
return false; 
} 
} if (document.layers) {
if (e.which == 3) {
alert(message);
return false; 
} 
} 
} if (document.layers) {
document.captureEvents(Event.MOUSEDOWN); 
} document.onmousedown=click; 
// End hiding script from old browsers --> </SCRIPT>";
}
?>
<table class="ContentBanner" width=<?php if ($ads) echo '678'; else echo '808';?> cellspacing=0 cellpadding=7>
<tr><td class="BannerText" align="center"><b>P I C T U R E S</b><?php include 'sharecontrol.php' ?></td></tr></table>
<center>
<?php 
	if (stristr($_REQUEST['name'],"Favorites") != '') {
		echo "<br>";
	} else {
		if (!isset($_REQUEST['noback'])) {
			if (!stristr($_SERVER['HTTP_REFERER'],'CommentListEntry')) {
				echo "<br><a href='javascript:history.go(-1)' title='Go back to previous page'>Back</a>";
			}
		}
	}

	$storylink = '';
	$title = '';
	$picname = stristr($_REQUEST['name'],'Favorites/Pictures');
	$picname = str_replace('.JPG','.jpg',$picname);
	if ($picname != '' && !isset($_REQUEST['nogallery'])) {
		include 'titlemap.php';
		$picname = substr($picname,19);

		/* picname can be 9999.JPG or 9999_9.JPG */
		if (strlen($picname) == 8) {
			$picnum = substr($picname,0,4);
			$picsubnum = 0;
			$title = $titlemap[$picnum][2];
			$favoritespage = $titlemap[$picnum][3];
		} else {
			$picnum = substr($picname,0,4);
			$picsubnum = substr($picname,5,1);
			$title = $titlemap[substr($picname,0,6)][2];
			$favoritespage = $titlemap[substr($picname,0,6)][3];
		}

		/* fetch the previous image name */
		if ($picsubnum > 1) {
			$prevpicsubnum = $picsubnum - 1;
			$prevpicnum = $picnum . "_" . $prevpicsubnum;
		} elseif ($picsubnum == 1) {
			$prevpicnum = $picnum;
			$prevpicsubnum = 0;
		} else {
			$prevpicsubnum = 4;
			$prevpicnum = $picnum;
			do {
				$prevpicnum = $prevpicnum - 1;
				if (stristr($skipnames,"$prevpicnum") == '') break;
			} while (true);
			do {
				$prevpicnum2 = $prevpicnum . "_" . $prevpicsubnum;
				if (isset($titlemap[$prevpicnum2][1])) {
					break;
				}
				$prevpicsubnum--;
			} while ($prevpicsubnum);
			if ($prevpicsubnum) $prevpicnum = $prevpicnum2;
		}

		if (isset($titlemap[$prevpicnum][1])) {
			$prevstorylink = $titlemap[$prevpicnum][1];
			$prevtitle = $titlemap[$prevpicnum][2];
		} else {
			$prevstorylink = '';
			$prevtitle = '';
		}

		/* fetch the next image name */
		if ($picsubnum < 4) {
			$nextpicsubnum = $picsubnum + 1;
			$nextpicnum = $picnum . "_" . $nextpicsubnum;
			if (!isset($titlemap[$nextpicnum][1])) {
				$nextpicnum = $picnum;
				do {
					$nextpicnum = $nextpicnum + 1;
					if (stristr($skipnames,"$nextpicnum") == '') break;
				} while (true);
			}
		} else {
			$nextpicnum = $picnum;
			$nextpicsubnum = 0;
			do {
				$nextpicnum = $nextpicnum + 1;
				if (stristr($skipnames,"$nextpicnum") == '') break;
			} while (true);
		}

		if (isset($titlemap[$nextpicnum][1])) {
			$nextstorylink = $titlemap[$nextpicnum][1];
			$nexttitle = $titlemap[$nextpicnum][2];
		} else {
			$nextstorylink = '';
			$nexttitle = '';
		}

		if (strlen($prevpicnum) == 4) {
			$picnum2 = $prevpicnum;
			$picsubnum2 = 0;
		} else {
			$picnum2 = substr($prevpicnum,0,4);
			$picsubnum2 = substr($prevpicnum,5,1);
		}

		/* fetch the previous previous image name */
		if ($picsubnum2 > 1) {
			$prevprevpicsubnum = $picsubnum2 - 1;
			$prevprevpicnum = $picnum2 . "_" . $prevprevpicsubnum;
		} elseif ($picsubnum2 == 1) {
			$prevprevpicnum = $picnum2;
			$prevprevpicsubnum = 0;
		} else {
			$prevprevpicsubnum = 4;
			$prevprevpicnum = $picnum2;
			do {
				$prevprevpicnum = $prevprevpicnum - 1;
				if (stristr($skipnames,"$prevprevpicnum") == '') break;
			} while (true);
			do {
				$prevprevpicnum2 = $prevprevpicnum . "_" . $prevprevpicsubnum;
				if (isset($titlemap[$prevprevpicnum2][1])) {
					break;
				}
				$prevprevpicsubnum--;
			} while ($prevprevpicsubnum);
			if ($prevprevpicsubnum) $prevprevpicnum = $prevprevpicnum2;
		}

		if (isset($titlemap[$prevprevpicnum][1])) {
			$prevprevstorylink = $titlemap[$prevprevpicnum][1];
			$prevprevtitle = $titlemap[$prevprevpicnum][2];
		} else {
			$prevprevstorylink = '';
			$prevprevtitle = '';
		}

		if (strlen($nextpicnum) == 4) {
			$picnum2 = $nextpicnum;
			$picsubnum2 = 0;
		} else {
			$picnum2 = substr($nextpicnum,0,4);
			$picsubnum2 = substr($nextpicnum,5,1);
		}

		/* fetch the next next image name */
		if ($picsubnum2 < 4) {
			$nextnextpicsubnum = $picsubnum2 + 1;
			$nextnextpicnum = $picnum2 . "_" . $nextnextpicsubnum;
			if (!isset($titlemap[$nextnextpicnum][1])) {
				$nextnextpicnum = $picnum2;
				do {
					$nextnextpicnum = $nextnextpicnum + 1;
					if (stristr($skipnames,"$nextnextpicnum") == '') break;
				} while (true);
			}
		} else {
			$nextnextpicnum = $picnum2;
			$nextnextpicsubnum = 0;
			do {
				$nextnextpicnum = $nextnextpicnum + 1;
				if (stristr($skipnames,"$nextnextpicnum") == '') break;
			} while (true);
		}
		
		if (isset($titlemap[$nextnextpicnum][1])) {
			$nextnextstorylink = $titlemap[$nextnextpicnum][1];
			$nextnexttitle = $titlemap[$nextnextpicnum][2];
		} else {
			$nextnextstorylink = '';
			$nextnexttitle = '';
		}

		echo "<table class='FavoritePicsControls' cellspacing=0 cellpadding=3><tr><td align=left>";
		if ($prevpicnum >= 5000) {
			$prevstorylink = $titlemap[$prevpicnum][1];
			echo "<a href='index.php?action=Pics&name=Favorites/Pictures/$prevpicnum.JPG&storylink=$prevstorylink&noback=1' title='Go to previous picture'><<<</a>";
		}
		echo "</td><td></td><td align=center>";
	if ($picname != '' && !isset($_REQUEST['nogallery'])) {
		echo "<a href=index.php?action=FavoritePictures&page=$favoritespage>Index</a>";
	}
		echo "</td><td></td><td align=right>";
		if ($nextpicnum <= 5366) {
			$nextstorylink = $titlemap[$nextpicnum][1];
			echo "<a href='index.php?action=Pics&name=Favorites/Pictures/$nextpicnum.JPG&storylink=$nextstorylink&noback=1' title='Go to next picture'>>>></a>";
		}
		echo "</td></tr>";
		echo "<tr><td align=center width=20%>";
		if ($prevprevpicnum >= 5000) {
			echo "<a href=index.php?action=Pics&name=Favorites/Pictures/$prevprevpicnum.JPG&storylink=$prevprevstorylink><img class=PicFavoritesBorder src=Pics/Favorites/Rotator/$prevprevpicnum.jpg border=1 alt='$prevprevtitle' title='$prevprevtitle'></a>";
		}
		echo "</td><td align=center width=20%>";
		if ($prevpicnum >= 5000) {
			echo "<a href=index.php?action=Pics&name=Favorites/Pictures/$prevpicnum.JPG&storylink=$prevstorylink><img class=PicFavoritesBorder src=Pics/Favorites/Rotator/$prevpicnum.jpg border=1  alt='$prevtitle' title='$prevtitle'></a>";
		}
		echo "</td><td align=center width=20%>";
		echo "<img class=PicFavoritesBorder src=Pics/Favorites/Rotator/$picname border=3></a>";
		echo "</td><td align=center width=20%>";
		if ($nextpicnum <= 5366) {
			echo "<a href=index.php?action=Pics&name=Favorites/Pictures/$nextpicnum.JPG&storylink=$nextstorylink><img class=PicFavoritesBorder src=Pics/Favorites/Rotator/$nextpicnum.jpg border=1  alt='$nexttitle' title='$nexttitle'></a>";
		}
		echo "</td><td align=center width=20%>";
		if ($nextnextpicnum <= 5366) {
			echo "<a href=index.php?action=Pics&name=Favorites/Pictures/$nextnextpicnum.JPG&storylink=$nextnextstorylink><img class=PicFavoritesBorder src=Pics/Favorites/Rotator/$nextnextpicnum.jpg border=1 alt='$nextnexttitle' title='$nextnexttitle'></a>";
		}
		echo "</td></tr>";
		echo "<tr><td colspan=5 align=center>";
	if (!empty($_REQUEST['storylink'])) {
		$storylink = $_REQUEST['storylink'];
		if ($storylink != '') {
			$newstorylink = str_replace("`","&",$storylink);
			echo "<a href='index.php?action=$newstorylink' title='Get the story behind the picture'>More of the story</a>";
		}
	}
	echo "</td></tr></table>";
	echo "<p><b><h1>$title</h1></b>";
	} else {
		if (!empty($_REQUEST['title'])) {
			$title = str_replace('^^',' ',$_REQUEST['title']);
			echo "<p><b><h1>$title</h1></b>";
		}
	}
	$name = $_REQUEST['name'];
	$host = $_SERVER['HTTP_HOST'];
	preg_match('/mybigadventure/', $host, $production);
	if ($production) {
  	$image_info = getimagesize("http://www.mybigadventure.com/Pics/$name");	  
	} else {
  	$image_info = getimagesize("http://$host/mybigadventure/Pics/$name");
  }
  // In production getimagesize() is returning NULL. Until I figure out why, use the widest dimension (landscape) for all production images
	if ($image_info[0] == '640' || $production) {
    $class = 'FullPic';
  } else {
    $class = 'FullPicPortrait';
  }
	echo "<p><img class='$class' host='$host' foo='$foo' url='$image_info[3]' src=Pics/$name><p>";
	if (isset($_REQUEST['copyright'])) {
		$copyright = $_REQUEST['copyright'];
		echo "<p>&copy; $copyright";
	}
	if (isset($_REQUEST['audio'])) {
  	$audio = $_REQUEST['audio'];
	  echo '<center><audio controls><source src="Audio/' . $audio . '.mp3" type="audio/mpeg"></audio></center>';
	}
?>
</center>