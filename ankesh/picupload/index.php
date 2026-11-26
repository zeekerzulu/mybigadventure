<?php
	ob_start();
	$sourcecode = 8;
	$websiteurl = "localhost/jeffsadventure";
	$websiteurl = "www.mybigadventure.com";
	$websiteemail = "mybigadventure.com";
	$homedirectory = "TestEnv/smithrock/";
	$homedirectory = "ankesh/picupload/";
	$rootdirectory = "../../";
	$cookiename = "MyBigAdventure";
	include $rootdirectory . 'cookiegetparameters.php';
	$commentprocessing = 1;
	if (isset($_REQUEST['reversesortorder'])) {
		include $rootdirectory . 'cookiecommentsortorder.php';
		$querystring = str_replace('&reversesortorder=1','',$_SERVER['QUERY_STRING']);
		header("Location: http://" . $websiteurl . "/" . $homedirectory . "index.php?" . $querystring);
	}
	$picrotator = false;
	$ads = false;
	include $rootdirectory . 'style.css';
	include $rootdirectory . 'Mgmt/popup.php';
	$action = $_REQUEST['action'];
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
		<title>My Big Adventure - Picture Upload Forum</title>
	</head>
<center>
	<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" alink="black" vlink="black" link="black">
		<table border=0 cellspacing="0" cellpadding="0">
	<?php
		switch ($action) {
			case 'UploadForum':
				$actionInclude = 'uploadforum.php'; 
				break;
			case 'Pics':
				$actionInclude = 'pics.php'; 
				break;
			case 'CommentListEntry':
				$actionInclude = $rootdirectory . 'commentlistentry.php';
				break;
			case 'CommentListDisplay':
				$actionInclude = $rootdirectory . 'commentlistdisplay.php';
				break;
			case 'CommentPost':
				$actionInclude = $rootdirectory . 'commentpost.php';
				break;
			default:
				$actionInclude = 'welcome.php';
				break;
		}
		$width = 802;
		echo "<tr><td colspan=2>";
		include $rootdirectory . 'banner.php';
		echo "</td></tr>
			<tr><td valign=top bgcolor=$backgroundcolor>
				<table width=$width border=0 cellspacing=0 borderwidth=0 cellpadding=15>
				<tr><td class=ContentArea valign=center>";
		include $actionInclude;
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
			echo "<center><p><a href='index.php?action=CommentListEntry&urlkeycode=$urlkeycode&parenturl=$parenturl&backcount=-1&nosecurity=1' title='Share your page comments with the user community!'>Add/View Page Comments ($searchcount)</a></center><p>";
		}
		}
	?>
	</td></tr>
	<tr><td>
	<?php
	if ($commentprocessing == 1 && $action == 'UploadForum') {
		$nosecurity = 1;
		include $rootdirectory . 'commentrecentlisting.php';
	}
	?>
	</td></tr></table></td>
	</td></tr>
	<tr class=Footer height=60>
		<td align=center>
			<table>
				<tr>
					<td><img src="<?php echo $rootdirectory?>Graphics/forest.gif"></td>
					<td><center><font size="1" color="black"><!--Check out my friend's 6 month cross-country travel adventure at <a href="javascript:myPopup1('http://www.mybigadventure.com')">MyBigAdventure&trade;</a><br>-->Copyright &copy; 2004-2005 Jeffrey S. Drilling. All Rights Reserved.</font></center></td>
					<td><img src="<?php echo $rootdirectory?>Graphics/forest.gif"></td>
				</tr>
			</table>
		</td>
		</tr>
	</table>
	</body>
</center>
</html>

<?php
	ob_end_flush();
?>