<?php
	ob_start();
	$sourcecode = 7;
	$websiteurl = "www.mybigadventure.com";
	$websiteemail = "mybigadventure.com";
	$homedirectory = "ankesh/";
	$rootdirectory = "../";
	if (isset($_REQUEST['e'])) {
		$querystring = $_SERVER['QUERY_STRING'];
		header("Location: http://" . $websiteurl . "/" . $homedirectory . "edit.php?" . $querystring);
	}
	$cookiename = "MyBigAdventureAnkesh";
	include $rootdirectory . 'cookiegetparameters.php';
	$commentprocessing = 0;
	if (isset($_REQUEST['reversesortorder'])) {
		include $rootdirectory . 'cookiecommentsortorder.php';
		$querystring = str_replace('&reversesortorder=1','',$_SERVER['QUERY_STRING']);
		header("Location: http://" . $websiteurl . '/' . $homedirectory . "index.php?" . $querystring);
	}
	include 'style.css';
	include $rootdirectory . 'Mgmt/popup.php';
	if (empty($_REQUEST['action'])) {
		if ($cookie->rememberpageurl != '') {
			$cookie->rememberpageurl = str_replace('~','&',$cookie->rememberpageurl);
			header("Location: $cookie->rememberpageurl"); // Redirect to remembered page
		}
		include 'splash.php'; 
		exit;
	}
	$action = $_REQUEST['action'];
	if ($action == 'CommentPreview') {
		include $rootdirectory . 'commentpreview.php';
		exit;
	}
	if ($action == 'Popup') {
		$name = $_REQUEST['name'];
		echo "<html><head><title>My Big Adventure Popup</title></head><body bgcolor=$backgroundcolor>
			<table width=650><tr><td align=center><img src=" . $rootdirectory . $name . "><p><a href='javascript:window.close()'>Close</a></td></tr></table></body></html>";
		ob_end_flush();
		exit;
	}
?>
<html>
	<head>
		<title>My Big Adventure - Travels with Ankesh</title>
	</head>
<center>
	<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" alink="black" vlink="black" link="black">
		<table border=0 cellspacing="0" cellpadding="0">
	<?php
		$error = false;
		$ads = false;
		if (isset($_REQUEST['action'])) {
			$action = $_REQUEST['action'];
		} else {
			$error = true;
			$action = "Missing";
		}
		if (isset($_REQUEST['area'])) {
			$area = $_REQUEST['area'];
		}
		$ads = false;
		$picrotator = false;
		switch ($action) {
			case 'AdventureLog':
				$actionInclude = 'adventurelog.php'; 
				if ($_REQUEST['page'] == 'gallery') $ads = false; else $ads = false;
				break;
			case 'Pics':
				$actionInclude = 'pics.php'; 
				$ads = false;
				break;
			case 'Videos':
				$actionInclude = 'videos.php'; 
				$ads = false;
				break;
			case 'SendaaaaPageaaaLinkaaaEntry':
				$actionInclude = $rootdirectory . 'sendpagelinkentry.php'; 
				break;
			case 'SendPageLinkPost':
				$actionInclude = $rootdirectory . 'sendpagelinkpost.php'; 
				break;
			case 'CommentxxxListxxxEntzzzry':
				$actionInclude = $rootdirectory . 'commentlistentry.php';
				$ads = false; 
				break;
			case 'CommentListDisplay':
				$actionInclude = $rootdirectory . 'commentlistdisplay.php';
				$ads = false; 
				break;
			case 'CommentPost':
				$actionInclude = $rootdirectory . 'commentpost.php';
				break;
			case 'GuestzzzzBookxxxxLisrrrrrrrt':
				$actionInclude = $rootdirectory . 'guestbooklist.php'; 
				break;
			case 'GuestBookEntry':
				$actionInclude = $rootdirectory . 'guestbookentry.php'; 
				break;
			case 'GuestBookPost':
				$actionInclude = $rootdirectory . 'guestbookpost.php'; 
				break;
			case 'PreferencesDisplay':
				$actionInclude = $rootdirectory . 'preferencesdisplay.php'; 
				break;
			case 'PreferencesTestPage':
				$actionInclude = $rootdirectory . 'preferencestestpage.php'; 
				break;
			case 'PreferencesPost':
				include $rootdirectory . 'preferencespost.php';
				header("Location: http://" . $websiteurl . '/' . $homedirectory . "index.php?action=PreferencesTestPage");
			case 'RememberPage':
				$actionInclude = $rootdirectory . 'rememberpage.php'; 
				break;
			case 'RememberPageCancel':
				$actionInclude = $rootdirectory . 'rememberpagecancel.php'; 
				break;
			default:
				$actionInclude = 'badurl.php';
				break;
		}
		if ($ads) $width = 684; else $width = 802;
		echo "<tr><td colspan=2>";
		include $rootdirectory . 'banner.php';
		echo "</td></tr>
			<tr><td valign=top bgcolor=$backgroundcolor>
				<table width=$width border=0 cellspacing=0 borderwidth=0 cellpadding=15>
				<tr><td class=ContentArea valign=center>";
		include $actionInclude;
		if (!stristr($_SERVER['QUERY_STRING'],'SendPageLinkEntry') &&
				!stristr($_SERVER['QUERY_STRING'],'SendPageLinkPost')) {
			echo '<p><center><a href="index.php?action=SendPageLinkEntry" title="Share the adventure!">Send this page to a friend</a></center><p>';
		}
		if ($commentprocessing) {
		if (!empty($_SERVER['QUERY_STRING'])) {
			$urlkeycode = str_replace('~noback=1','',str_replace('%20','',(str_replace('&','~',str_replace('action=','',$_SERVER['QUERY_STRING'])))));
		}
		if (!stristr($_SERVER['QUERY_STRING'],'CommentListEntry') &&
				!stristr($_SERVER['QUERY_STRING'],'CommentPost') &&
				!stristr($_SERVER['QUERY_STRING'],'CommentListDisplay') &&
				!stristr($_SERVER['QUERY_STRING'],'SendPageLinkEntry') &&
				!stristr($_SERVER['QUERY_STRING'],'SendPageLinkPost') &&
				!isset($_REQUEST['nocomments'])) {	
			$parenturl = str_replace('http://www.mybigadventure.com/' . $homedirectory . 'index.php?','parent_',
				str_replace('&','~parent_',$_SERVER['HTTP_REFERER']));
			$searchaction = 'FetchPageCount';
			$searchurl = $urlkeycode;
			include $rootdirectory . 'commentsearch.php';
			echo "<center><p><a href='index.php?action=CommentListEntry&urlkeycode=$urlkeycode&parenturl=$parenturl&backcount=-1' title='Share your page comments with the user community!'>Add/View Page Comments ($searchcount)</a></center><p>";
		}
		}
	?>
	</td></tr>
	<tr><td>
	<?php
	if ($commentprocessing == 1 && $action == 'AdventureLog' && !isset($_REQUEST['area'])) {
		if (isset($_REQUEST['page'])) {
			if ($_REQUEST['page'] == 1) {
				include $rootdirectory . 'commentrecentlisting.php';
			}
		}
	}
	?>
	</td></tr></table></td>
	<?php
		if ($ads) {
			echo "<td class=AdContentArea valign=top>";
			include $rootdirectory . 'ads.php';
		} else {
			echo "<td>&nbsp;";
		}
	?>
	</td></tr>
	<tr class=Footer height=60>
		<td align=center>
			<table cellspacing=3 cellpadding=3>
				<tr><td class=MainMenu align=center>
					<img src="<?php echo $rootdirectory?>Graphics/forest.gif"></td>
					<td align=center>
					<a href='index.php?action=AdventureLog&page=1'><font color="black">Home</font></a>
					<font color="black">|</font>
					<a href='mailto:askadakia@gmail.com'><font color="black">Contact</font></a>
					<font color="black">|</font>
					<a href='index.php?action=GuestBookList'><font color="black">Guestbook</font></a>
					<font color="black">|</font></font>
					<a href='index.php?action=PreferencesDisplay'><font color="black">Preferences</font></a>
					<font color="black">|</font>
					<a href='index.php?action=RememberPage'><font color="black">Remember Page</font></a></td>
					<td align=center><img src="<?php echo $rootdirectory?>Graphics/forest.gif"></td>
				</tr>
				<tr align="center">
					<td colspan="3">
						<a href="javascript:myPopup1('http://www.thehungersite.com')" title="Since 1999 our supporters have given more than 417 million cups of food to the world's hungry."><img src="<?php echo $rootdirectory?>Graphics/charity_hungersite_grayscale.gif" border="0"></a>
&nbsp;&nbsp;
						<a href="javascript:myPopup2('http://www.thebreastcancersite.com')" title="Fund free mammograms.  Each year, 182,000 women are diagnosed with breast cancer and 43,300 die."><img src="<?php echo $rootdirectory?>Graphics/charity_breastcancersite_grayscale.gif" border="0"></a>
&nbsp;
						<a href="javascript:myPopup3('http://www.thechildhealthsite.com')" title="Help provide basic health services for children around the world."><img src="<?php echo $rootdirectory?>Graphics/charity_childhealthsite_grayscale.gif" border="0"></a>
&nbsp;
						<a href="javascript:myPopup4('http://www.theliteracysite.com')" title="Give a child the freedom to read!  One click gives one book every day this week."><img src="<?php echo $rootdirectory?>Graphics/charity_literacysite_grayscale.gif" border="0"></a>
&nbsp;
						<a href="javascript:myPopup5('http://www.therainforestsite.com')" title="Click today to save the land and the creatures that belong to it!"><img src="<?php echo $rootdirectory?>Graphics/charity_rainforestsite_grayscale.gif" border="0"></a>
&nbsp;
						<a href="javascript:myPopup6('http://www.theanimalrescuesite.com')" title="Help us raise 2.7 million bowls of food for shelter animals in need."><img src="<?php echo $rootdirectory?>Graphics/charity_animalrescuesite_grayscale.gif" border="0"></a>
					</td>
				</tr>
				<tr>
					<td colspan="3"><center><font size="1" color="black">Copyright &copy; 2004-2005 Jeffrey S. Drilling. All Rights Reserved.<br><img src="Graphics/spacer.gif" height="5" width="1"><br><a href="javascript:myPopup10('http://www.mybigadventure.com')">MyBigAdventure&trade;</a></font>
					<br><img src="Graphics/spacer.gif" height="10" width="1"></center></td>
				</tr>
			</table>
		</td>
		<?php
			if ($ads) {
				echo "<td>&nbsp;</td>";
			}
		?>
		</tr>
		<!--<?php include 'Counter/counter.php'; ?>-->
		<tr>
		<td align=center>
			<img src="Graphics/spacer.gif" height="5"><font size="+0" color="black"><b>Visitors</b></font><br>
			<?php
				echo $counter;
				if ($hits >= 10) {
					echo "<br><font color=black><b>Total Hits: $hits</b></font>";
				}
			?>
		</td></tr>
	</table>
	<?php
		if ($sound == 'on') {
			$querystring = $_SERVER['QUERY_STRING'];
			include 'audiomap.php';
			for ($index = 0; $index < count($audiomap); $index++) {
				if ($querystring == $audiomap[$index][2]) {
					$audiofile = $audiomap[$index][4];
					echo "<embed src=Audio/$audiofile autostart=true hidden=true loop=false>";
					break;
				}
			}
		}
	?>
	</body>
</center>
</html>

<?php
	ob_end_flush();
?>