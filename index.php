<?php
  function debug_to_console($data) {
      $output = $data;
      if (is_array($output))
          $output = implode(',', $output);

      echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
  }
  error_reporting(E_ALL);
	if ($_SERVER['REMOTE_ADDR'] == '64.124.85.74' || $_SERVER['REMOTE_ADDR'] == '64.127.124.146') exit;
	$sourcecode = 1;
	//$websiteurl = "http://www.mybigadventure.com";
	$websiteurl = "localhost:8888/mybigadventure" ;
	$websiteemail = "mybigadventure.com";
	$homedirectory = "";
	$rootdirectory = "";
	$commentprocessing = 0;
	$cookiename = "MyBigAdventure";
	$image = "http://mybigadventure.com/Pics/CoverPageSmall2.jpg";
	include 'cookiegetparameters.php';
	//include 'cookiedump.php';
	if (isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
		switch ($action) {
			case 'SiteSearch':
				$searchstring = $_POST['searchstring'];
				$searchstring = str_replace(' ','+',$searchstring);
				$searchURL = "http://www.google.com/search?hl=en&lr=&q=$searchstring+site:www.mybigadventure.com";
				header("Location: $searchURL");
				break;
			case 'PreferencesPost':
				include 'preferencespost.php';
				//header("url: " . $websiteurl . "/index.php?action=PreferencesTestPage");
				exit;
			case 'Alert':
				include 'style.css';
				if ($_REQUEST['alert'] == 'NewFeatures') {
					include 'alertnewfeatures.php';
				}
				exit;
			case 'CommentPreview':
				include 'style.css';
				include 'Mgmt/popup.php';
				include 'commentpreview.php';
				exit;
			case 'AlertUnsubscribe':
				if ($_REQUEST['alert'] == 'NewFeatures') {
					include 'alertunsubscribe.php';
					echo "<script language=javascript>window.close();</script>";
				}
				exit;
		}
	}
	ob_start();
	header('Content-Type: text/html; charset=ISO-8859-1');
	if ($action == 'PreferencesTestPage') {
	  include 'preferencespost.php';
	}
	include 'style.css';
	include 'Mgmt/popup.php';
	include 'Javascript/main.php';
	echo "<link rel='shortcut icon' href='Graphics/thumbnail.ico' type='image/x-icon'>";
	echo "<link rel='apple-touch-icon' href='Graphics/thumbnail.png'>" ;
	if (!isset($action)) {
		if ($cookie['rememberpageurl'] != '') {
			$url = str_replace('~','&',$cookie['rememberpageurl']);
			header("Location: $url"); // Redirect to remembered page
		}
		$action = 'Home';
	}
	switch ($action) {
		case 'Popup':
			$name = $_REQUEST['name'];
			echo "<html><head><title>My Big Adventure Popup</title></head><body bgcolor=$backgroundcolor>
				<table width=650><tr><td align=center><img src=$name><p>
				<a href='javascript:window.close()'>Close</a></td></tr></table></body></html>";
			ob_end_flush();
			exit;
		case 'StatsIndex':
			$stat = $_REQUEST['stat'];
			if ($stat == 'Sites') {
				$title = 'Sights Index';
			} elseif ($stat == 'PostTripFun') {
				$title = 'Post-Trip Fun Index';
			} else {
				$title = "$stat Index";
			}
			if ($_REQUEST['page']) {
			  $title = $title . ' - Page ' . $_REQUEST['page'];
			}
			break;
		case 'Stats':
			$stat = $_REQUEST['stat'];
			switch ($stat) {
				case 'States': $title = 'States Visited'; break;
				case 'Driving': $title = 'Miles Driven'; break;
				case 'Favorites': $subject = $_REQUEST['subject']; $title = "Favorite $subject"; break;
				default: include 'keywordengine.php';
			}
			break;
		case 'TripPreparation': $title = 'Trip Preparation'; break;
		case 'AdventurePreview': $title = 'Adventure Preview'; break;
		case 'DailyEvents': $titledate = $_REQUEST['date']; $title = 'Travel Log for ' . $titledate; break;
		case 'Pics':
			$title = 'Pictures';
			$picname = stristr($_REQUEST['name'],'Favorites/Pictures');
			if ($picname != '' && !isset($_REQUEST['nogallery'])) {
				include 'titlemap.php';
				$picname = substr($picname,19);
				/* picname can be 9999.JPG or 9999_9.JPG */
				if (strlen($picname) == 8) {
					$picnum = substr($picname,0,4);
					$title = $title . " - " . $titlemap[$picnum][2];
				} else {
					$picnum = substr($picname,0,4);
					$title = $title . " - " . $titlemap[substr($picname,0,6)][2];
				}
			}
			break;
		case 'FavoritePics': $title = 'Favorite Pictures'; break;
		case 'FavoritePictures': $title = 'Favorite Pictures'; break;
		case 'TravelLinks': $title = 'Travel Links'; break;
		case 'FavoritePanoramas': $title = 'Panoramas'; break;
		case 'VisitorGallery': $title = 'Visitor Gallery'; break;
		case 'SplashPages': $title = 'Splash Pages'; break;
		case 'SendPageLinkEntry': $title = 'Send Page to a Friend'; break;
		case 'CommentListEntry': $title = 'Comments Display/Entry'; break;
		case 'CommentListDisplay': $title = 'Comments Display'; break;
		case 'PreferencesDisplay': $title = 'Preferences'; break;
		case 'PreferencesTestPage': $title = 'Preferences Test Page'; break;
		case 'RememberPage': $title = 'Remember Page'; break;
		case 'RememberPageCancel': $title = 'Remember Page Cancel'; break;
		case 'LinkToMyBigAdventure': $title = 'Link to MyBigAdventure'; break;
		default: include 'keywordengine.php';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US">
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=4.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta property="fb:app_id" content="507859842598765" />
    <meta property="fb:admins" content="10156750696008050" />
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
    <meta property="og:image" content="<?php echo $image ?>" />
    <meta property="og:description" content="<?php
      if ($description) {
        echo $description;
      } else {
        echo '6 month, 18,000+ mile, 36 state, US road trip... in a van!';
      }
    ?>"/> 
    <meta property="og:site_name" content="My Big Adventure" />
		<?php 
			echo "<title>$title</title>";
			//if (isset($_REQUEST['specialeffects'])) {
				//echo '<META http-equiv="Page-Enter" CONTENT="RevealTrans(Duration=1.5,Transition=3)">';
			//-->
			include 'keywordmeta.php';
			include 'sharethis.php';
		?>
	</head>
	<center>
	<body <?php echo $action == 'social-media-gallery' ? "class='BareBones'" : "";?> onload='AdjustContent()' topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" alink="black" vlink="black" link="black">
		<?php
			$picrotator = false;
			$ads = false;
			$displayClass = '';
			switch ($action) {
				case 'Home':
					$actionInclude = 'home.php'; 
					break;
				case 'Mission':
					$actionInclude = 'mission.php'; 
					break;
				case 'Charity':
					$actionInclude = 'charity.php'; 
					break;
				case 'Bio':
					$actionInclude = 'bio.php'; 
					break;
				case 'TripPreparation':
					$actionInclude = 'trippreparation.php'; 
					break;
				case 'Build-A-Camper':
					$actionInclude = 'buildacamper.php'; 
					$picrotator = true;
					break;
				case 'BuildSeries':
					$actionInclude = 'buildseries.php'; 
					break;
				case 'TripResources':
					$actionInclude = 'tripresources.php'; 
					$picrotator = true;
					break;
				case 'TripJournal':
					$actionInclude = 'tripjournal.php'; 
					$picrotator = true;
					break;
				case 'Calendar':
					$actionInclude = 'calendar.php'; 
					break;
				case 'DailyEvents':
					$actionInclude = 'dailyevents.php'; 
					$picrotator = true;
					break;
				case 'Maps':
					$actionInclude = 'maps.php';
					$displayClass = 'StateMap';
					break;
				case 'AdventurePreview':
					$actionInclude = 'adventurepreview.php'; 
					$ads = true;
					break;
				case 'PostTripFun':
					$actionInclude = 'posttripfun.php'; 
					$ads = true;
					break;
				case 'TravelLinks':
					$actionInclude = 'travellinks.php'; 
					$ads = false;
					break;
				case 'StatsIndex':
					$actionInclude = 'statsindex.php'; 
					break;
				case 'Stats':
					$actionInclude = 'stats.php'; 
					$stat = $_REQUEST['stat']; 
					if ($stat == 'States') $picrotator = false; else $picrotator = true;
					break;
				case 'Biking':
				case 'Hiking':
				case 'Sites':
				case 'Communities':
				case 'Parks':
				case 'Forests':
				case 'Monuments':
				case 'Memorials':
				case 'Landmarks':
				case 'Museums':
					$actionInclude = 'venue.php'; 
					$page = $_REQUEST['page']; 
					if ($page == 'gallery') $picrotator = false; else $picrotator = true; 
					break;
				case 'Pics':
					$name = $_REQUEST['name'];
					if (!stristr($name,"Driving")) $ads = true;
					$actionInclude = 'pics.php'; 
					break;
				case 'Panoramas':
					$actionInclude = 'panoramas.php'; 
					$ads = true;
					break;
				case 'Videos':
					$actionInclude = 'videos.php'; 
					$ads = true;
					break;
				case 'Favorites':
					$actionInclude = 'favorites.php'; 
					break;
				case 'FavoritePictures':
					$actionInclude = 'favoritepictures.php'; 
					break;
				case 'FavoritePanoramas':
					$actionInclude = 'favoritepanoramas.php'; 
					break;
				case 'VisitorGallery':
					$actionInclude = 'visitorgallery.php'; 
					break;
				case 'TopPics':
					$actionInclude = 'toppics.php';
					break;
				case 'Contact':
					$actionInclude = 'contact.php'; 
					break;
				case 'GuestBookList':
					$actionInclude = 'guestbooklist.php'; 
					break;
				case 'zzzzGuestBookEntry':
					$actionInclude = 'guestbookentry.php'; 
					break;
				case 'GuestBookPost':
					$actionInclude = 'guestbookpost.php'; 
					break;
				case 'SiteUsage':
					$actionInclude = 'siteusage.php'; 
					break;
				case 'SiteMap':
					$actionInclude = 'sitemap.php'; 
					break;
				case 'PreferencesDisplay':
					$actionInclude = 'preferencesdisplay.php'; 
					break;
				case 'PreferencesTestPage':
					$actionInclude = 'preferencestestpage.php'; 
					break;
				case 'RememberPage':
					$actionInclude = 'rememberpage.php'; 
					break;
				case 'RememberPageCancel':
					$actionInclude = 'rememberpagecancel.php'; 
					break;
				case 'SplashPages':
					$actionInclude = 'splashpages.php'; 
					break;
				case 'SocialMediaGallery':
  				$page = $_REQUEST['page'];
  				if (!isset($page)) $page = 1;
					$actionInclude = 'socialmediagallery.php'; 
					break;
				case 'social-media-gallery':
   				$page = 0;
					$actionInclude = 'socialmediagallery.php'; 
					break;
				case 'zzzzSendPageLinkEntryzzzzxzz':
					$actionInclude = 'sendpagelinkentry.php'; 
					break;
				case 'SummaryList':
					$actionInclude = 'summarylist.php'; 
					break;
				case 'xxxxxxSendPageLinkPostxxxxcccc':
					$actionInclude = 'sendpagelinkpost.php'; 
					break;
				case 'xxxxxxxxCommentListEntry':
					$actionInclude = 'commentlistentry.php'; 
					$ads = true;
					break;
				case 'CommentPost':
					$actionInclude = 'commentpost.php'; 
					$ads = true;
					break;
				case 'CommentListDisplay':
					$actionInclude = 'commentlistdisplay.php'; 
					$ads = true;
					break;
				case 'AdminCommentImagesDisplay':
					$actionInclude = 'Admin/commentimagesdisplay.php'; 
					break;
				case 'AdminCommentImagesApproval':
					$actionInclude = 'Admin/commentimagesapproval.php'; 
					break;
				case 'EmailOptOut':
					$actionInclude = 'emailoptout.php'; 
					break;
				case 'EmailOptOutPost':
					$actionInclude = 'emailoptoutpost.php'; 
					break;
				case 'EmailOptIn':
					$actionInclude = 'emailoptin.php'; 
					break;
				case 'EmailOptInPost':
					$actionInclude = 'emailoptinpost.php'; 
					break;
				case 'LinkToMyBigAdventure':
					$actionInclude = 'linktomybigadventure.php'; 
					break;
				case 'NewFeatures':
					$nopopup=1;
					$actionInclude = 'alertnewfeatures.php'; 
					break;
				case 'UnderConstruction':
					$actionInclude = 'underconstruction.php'; 
					break;
				case 'Books':
					$actionInclude = 'books.php'; 
          break;
				default:
					$actionInclude = 'underconstruction.php'; 
					break;
			}
			$class = $action == 'social-media-gallery' ? 'Content' : '';
			echo "<table class='" . $class . "' border=0 cellspacing=0 cellpadding=0 width=100%>
						<tr><td colspan=3>";
			$ads = false; /* Short circuit */
			include 'banner.php';
			echo "</td></tr>
						<tr><td id=MainMenu class=MainMenu valign=top>";
  		include 'leftnav.php';
			echo "</td><td valign=top bgcolor=$backgroundcolor>
				<table width=100% border=0 cellspacing=0 borderwidth=0 cellpadding=10>
				<tr><td id='ContentArea' class='ContentArea " . $displayClass . "' colspan=10 valign=top>";
			include $actionInclude;
			echo "<p>";
			
			// Comments facility are active only in the Production Environment
			preg_match('/localhost/', $_SERVER['HTTP_HOST'], $matches);
      if ($action != 'SocialMediaGallery' && $action != 'social-media-gallery' && !$matches) {
        include 'comments.php';
      }
    
			echo "<center>";
/*
			if (!stristr($_SERVER['QUERY_STRING'],'SendPageLinkEntry') &&
					!stristr($_SERVER['QUERY_STRING'],'SendPageLinkPost') &&
					!stristr($_SERVER['QUERY_STRING'],'PreferencesDisplay') &&
					!stristr($_SERVER['QUERY_STRING'],'PreferencesPost') &&
					!stristr($_SERVER['QUERY_STRING'],'AdventurePreview') &&
					!stristr($_SERVER['QUERY_STRING'],'AdminCommentImagesDisplay') &&
					!stristr($_SERVER['QUERY_STRING'],'AdminCommentImagesApproval') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptIn') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptInPost') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptOut') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptOutPost') &&
					!stristr($_SERVER['QUERY_STRING'],'RememberPage') &&
					!stristr($_SERVER['QUERY_STRING'],'RememberPageCancel'))
			{
				echo '<a href="index.php?action=SendPageLinkEntry" title="Share the Adventure!">Send this Page to a Friend</a><p>';
			} */
			if ($commentprocessing && !stristr($_SERVER['QUERY_STRING'],'CommentListEntry') &&
					!stristr($_SERVER['QUERY_STRING'],'CommentListDisplay') &&
					!stristr($_SERVER['QUERY_STRING'],'SendPageLinkEntry') &&
					!stristr($_SERVER['QUERY_STRING'],'SendPageLinkPost') &&
					!stristr($_SERVER['QUERY_STRING'],'GuestBookList') &&
					!stristr($_SERVER['QUERY_STRING'],'GuestBookEntry') &&
					!stristr($_SERVER['QUERY_STRING'],'GuestBookPost') &&
					!stristr($_SERVER['QUERY_STRING'],'StatsIndex') &&
					!stristr($_SERVER['QUERY_STRING'],'Contact') &&
					!stristr($_SERVER['QUERY_STRING'],'GuestBookList') &&
					!stristr($_SERVER['QUERY_STRING'],'GuestBookEntry') &&
					!stristr($_SERVER['QUERY_STRING'],'SiteMap') &&
					!stristr($_SERVER['QUERY_STRING'],'PreferencesDisplay') &&
					!stristr($_SERVER['QUERY_STRING'],'PreferencesTestPage') &&
					!stristr($_SERVER['QUERY_STRING'],'RememberPage') &&
					!stristr($_SERVER['QUERY_STRING'],'RememberPageCancel') &&
					!stristr($_SERVER['QUERY_STRING'],'AdminCommentImagesDisplay') &&
					!stristr($_SERVER['QUERY_STRING'],'AdminCommentImagesApproval') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptIn') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptInPost') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptOut') &&
					!stristr($_SERVER['QUERY_STRING'],'EmailOptOutPost') &&
					!stristr($_SERVER['QUERY_STRING'],'TripJournal') &&
					!isset($_REQUEST['nocomments'])) {
					if (isset($_REQUEST['storylink'])) {
						if ($_REQUEST['storylink'] != '') {
							$parenturl = 'parent_action=' . str_replace('`','~parent_',$_REQUEST['storylink']);
						}
					} else {
						$parenturl = str_replace('http://www.mybigadventure.com/index.php?','parent_',
							str_replace('&','~parent_',$_SERVER['HTTP_REFERER']));
						$parenturl = str_replace('page=gallery','page=99',$parenturl);
					}
					if (isset($parenturl)) {
						if (isset($_SERVER['QUERY_STRING'])) {
							$urlkeycode = str_replace('%20','^^',
								str_replace('&','~',str_replace('action=','',$_SERVER['QUERY_STRING'])));
						} else {
							$urlkeycode = '';
						}
						$searchaction = 'FetchPageCount';
						$searchurl = $urlkeycode;
/*
						include 'commentsearch.php';
						echo "<a href='index.php?action=CommentListEntry&urlkeycode=$urlkeycode&parenturl=$parenturl&backcount=-1' title='Check out what others have to say about this page, or better yet, add your own comments and pictures!'>Add/View Page Comments ($searchcount)</a><p>"; */
					}
				}
				if ($action == "Pics" || $action == "Panoramas" || $action == "Videos" || $action == "Maps") {
					echo "&nbsp;<hr>
MyBigAdventure - Your outdoor adventure travel website for sightseeing, biking, hiking, skiing, snowshoeing, parks, forests, monuments, memorials, landmarks, communities, and much, much more!<hr>
<p>
Here's a sample of what's inside:</center>";
echo "<center><table class='AdventureLinks'><tr><td><b>CATEGORY</b></td><td><b>STATE</b></td><td><b>ADVENTURE LINK</b><td></tr>";
include 'adventurepreviewengine.php';
echo "</table></center>";
				}
				if (false && $action == 'Home') {
					echo "<p><a href=index.php?action=EmailOptIn&backlink=1>Opt-In for Notification Email</a> |
								<a href=index.php?action=EmailOptOut&backlink=1>Opt-Out of Notification Email</a><p>";
				}
		?>
		</center>
		</td></tr>
<tr><td>
<!--
<?php
	if (false && $action == 'Home')
		include 'commentrecentlisting.php';
?>-->
</td></tr>
		</table>
		</td>
		<?php
				$ads = false;
				if ($picrotator || $ads) {
					echo '<td id="PicRotator" class="PicRotator" width="120" valign="top" align="center">
						<table cellspacing="3" cellpadding="2">
							<tr><td valign="center">';
					if ($picrotator) {
							include 'picrotator.php';
					}
					include 'ads.php';
					echo '</td></tr></table>';
				}
		?>
		</td></tr>
		<tr id=Footer class=Footer height=60><td id='FooterSpacerLeft'></td><td align=center>
			<table cellspacing=3 cellpadding=3><tr><td class='FooterGraphic' align=center>
				<img src="Graphics/forest.gif"></td><td align=center>
					<!--<a href='index.php?action=Contact'><font>Contact</font></a>
					<font>|</font>
					<a href='index.php?action=GuestBookList'><font>Guestbook</font></a>
					<font>|</font></font>-->
					<a class='SiteMapLink' href='index.php?action=SiteMap'><font>Site Map</font></a>
					<font class='SiteMapLink'>|</font>
					<a href='index.php?action=PreferencesDisplay'><font>Preferences</font></a>
					<font class='LinkSeparator'>|</font>
					<a href='index.php?action=RememberPage'><font><nobr>Remember Page</nobr></font></a>
			</td><td class='FooterGraphic' align=center><img src="Graphics/forest.gif"></td>
		</tr>
<tr align="center"><td colspan="3">
<a name='valid_link' href="javascript:myPopup1('http://www.thehungersite.com')" title="Since 1999 our supporters have given more than 417 million cups of food to the world's hungry."><img class='CharityLink' src="Graphics/charity_hungersite.png" border="0"></a>
&nbsp;&nbsp;
<a name='valid_link' href="javascript:myPopup2('http://www.thebreastcancersite.com')" title="Fund free mammograms.  Each year, 182,000 women are diagnosed with breast cancer and 43,300 die."><img class='CharityLink' src="Graphics/charity_breastcancersite.png" border="0"></a>
&nbsp;
<a name='valid_link' href="javascript:myPopup4('http://www.theliteracysite.com')" title="Give a child the freedom to read!  One click gives one book every day this week."><img class='CharityLink' src="Graphics/charity_literacysite.png" border="0"></a>
&nbsp;
<a name='valid_link' href="javascript:myPopup5('http://www.therainforestsite.com')" title="Click today to save the land and the creatures that belong to it!"><img class='CharityLink' src="Graphics/charity_rainforestsite.png" border="0"></a>
&nbsp;
<a name='valid_link' href="javascript:myPopup6('http://www.theanimalrescuesite.com')" title="Help us raise 2.7 million bowls of food for shelter animals in need."><img class='CharityLink' src="Graphics/charity_animalrescuesite.png" border="0"></a>
</td></tr>
		<tr><td colspan="3" align="center"><font size="1">Copyright &copy; 2004-2024. All Rights Reserved.  MyBigAdventure</font><br>&nbsp;</td></tr></table></td>
<?php
	if ($picrotator || $ads) echo "<td id='FooterSpacerRight'></td></tr></table>"; else echo "<td></td></tr></table>";
?>
<div id="TopPageControl" class="TopPageControlHover" title="Top of page" onclick="window.scrollTo({ top: 0, behavior: 'smooth'})"><img src="Graphics/page_top_control.png"></div>
<div id="PopUp"></div>
<div id="PopUpCloseControl" onclick="ClosePopUp()" title="Close popup">X</div>
</body>
</html>
<?php
	//include 'trackspider.php';
	ob_end_flush();
?>