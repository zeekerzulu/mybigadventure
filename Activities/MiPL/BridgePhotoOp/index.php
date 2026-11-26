<?php
	ob_start();
	$sourcecode = 2;
	$websiteurl = "www.mybigadventure.com";
	$websiteemail = "mybigadventure.com";
	$homedirectory = "TestEnv/bridgephotoop/";
	$homedirectory = "activities/mipl/bridgephotoop/";
	$rootdirectory = "../";
	$rootdirectory = "../../../";
	$cookiename = "MyBigAdventure";
	include $rootdirectory . 'cookiegetparameters.php';
	$commentprocessing = 1;
	if (isset($_REQUEST['reversesortorder'])) {
		include $rootdirectory . 'cookiecommentsortorder.php';
		$querystring = str_replace('&reversesortorder=1','',$_SERVER['QUERY_STRING']);
		header("Location: http://" . $websiteurl . "/" . $homedirectory . "index.php?" . $querystring);
	}
	include $rootdirectory . 'style.css';
	include $rootdirectory . 'Mgmt/popup.php';
	if (empty($_REQUEST['action'])) {
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
		<title>My Big Adventure - MiPL Bridge Photo Op!</title>
	</head>
<center>
	<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" alink="black" vlink="black" link="black">
		<table border=0 cellspacing="0" cellpadding="0">
	<?php
		$error = false;
		$ads = false;
		if (empty($_REQUEST['action'])) {
			$error = true;
			$action = "Missing";
		} else {
			$action = $_REQUEST['action'];
		}
		$ads = false;
		$picrotator = false;
		switch ($action) {
			case 'AdventureLog':
				$actionInclude = 'adventurelog.php'; 
				if ($_REQUEST['page'] == 'gallery') $ads = false; else $ads = true;
				break;
			case 'Pics':
				$actionInclude = 'pics.php'; 
				$ads = true;
				break;
			case 'SendPageLinkEntry':
				$actionInclude = $rootdirectory . 'sendpagelinkentry.php'; 
				break;
			case 'SendPageLinkPost':
				$actionInclude = $rootdirectory . 'sendpagelinkpost.php'; 
				break;
			case 'CommentListEntry':
				$actionInclude = $rootdirectory . 'commentlistentry.php';
				$ads = true; 
				break;
			case 'CommentListDisplay':
				$actionInclude = $rootdirectory . 'commentlistdisplay.php';
				$ads = true; 
				break;
			case 'CommentPost':
				$actionInclude = $rootdirectory . 'commentpost.php';
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
				!stristr($_SERVER['QUERY_STRING'],'SendPageLinkPost')) {	
			$searchaction = 'FetchPageCount';
			$searchurl = $urlkeycode;
			include $rootdirectory . 'commentsearch.php';
			echo "<center><p><a href='index.php?action=CommentListEntry&urlkeycode=$urlkeycode&backcount=-1' title='Share your page comments with the user community!'>Add/View Page Comments ($searchcount)</a></center><p>";
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
			<table>
				<tr>
					<td><img src="<?php echo $rootdirectory?>Graphics/forest.gif"></td>
					<td><center><font size="1" color="black">Check out my 6 month cross-country travel adventure at <a href="javascript:myPopup1('http://www.mybigadventure.com')">MyBigAdventure&trade;</a><br>Copyright &copy; 2004-2005 Jeffrey S. Drilling. All Rights Reserved.</font></center></td>
					<td><img src="<?php echo $rootdirectory?>Graphics/forest.gif"></td>
				</tr>
			</table>
		</td>
		<?php
			if ($ads) {
				echo "<td>&nbsp;</td>";
			}
		?>
		</tr>
	</table>
	</body>
</center>
</html>

<?php
	ob_end_flush();
?>