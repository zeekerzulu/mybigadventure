<?php
// we will do our own error handling
error_reporting(0);

// user defined error handling function
function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars) 
{
   // timestamp for the error entry
   $dt = date("Y-m-d H:i:s (T)");

   // define an assoc array of error string
   // in reality the only entries we should
   // consider are E_WARNING, E_NOTICE, E_USER_ERROR,
   // E_USER_WARNING and E_USER_NOTICE
   $errortype = array (
               E_ERROR          => "Error",
               E_WARNING        => "Warning",
               E_PARSE          => "Parsing Error",
               E_NOTICE          => "Notice",
               E_CORE_ERROR      => "Core Error",
               E_CORE_WARNING    => "Core Warning",
               E_COMPILE_ERROR  => "Compile Error",
               E_COMPILE_WARNING => "Compile Warning",
               E_USER_ERROR      => "User Error",
               E_USER_WARNING    => "User Warning",
               E_USER_NOTICE    => "User Notice",
               E_STRICT          => "Runtime Notice"
               );
   // set of errors for which a var trace will be saved
   $user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);
   
   $err = "<errorentry>\n";
   $err .= "\t<datetime>" . $dt . "</datetime>\n";
   $err .= "\t<errornum>" . $errno . "</errornum>\n";
   $err .= "\t<errortype>" . $errortype[$errno] . "</errortype>\n";
   $err .= "\t<errormsg>" . $errmsg . "</errormsg>\n";
   $err .= "\t<scriptname>" . $filename . "</scriptname>\n";
   $err .= "\t<scriptlinenum>" . $linenum . "</scriptlinenum>\n";

   if (in_array($errno, $user_errors)) {
       $err .= "\t<vartrace>" . wddx_serialize_value($vars, "Variables") . "</vartrace>\n";
   }
   $err .= "</errorentry>\n\n";
   
   // for testing
   echo $err;

   if ($errno == E_USER_ERROR) {
       mail("jeff@mybigadventure.com", "Critical User Error", $err);
   }
   // save to the error log, and e-mail me if there is a critical user error
   //error_log($err, 3, "error.log");
}

$old_error_handler = set_error_handler("userErrorHandler");

//echo '1 ';
	$imageerrors = 0; $imagecnt = 0; $imagename = time();
	$security = $_POST['security'];
	foreach ($_FILES["userfile"]["name"] as $key => $name) {
//echo '2 ';
		if (trim($name) != '') {
//echo '3 ';
			$error = $_FILES["userfile"]["error"][$key];
			if ($error != UPLOAD_ERR_NO_FILE) {
//echo '4 ';
				if ($error == UPLOAD_ERR_OK) {
//echo '5 ';
					$tmp_name = $_FILES["userfile"]["tmp_name"][$key];
					$filesize = filesize($tmp_name);
					list($imw, $imh, $type, $attr) = getimagesize($tmp_name);
					if ($filesize <= 4000000 && $type == 2
						&& (strpos(strtolower($name),'.jpg') || strpos(strtolower($name),'.jpeg'))) {
						$imagecnt++;
//echo '6 ';
//echo 'Memory limit: '. ini_get('memory_limit').'<br>'; 
   //  if(!ini_set('memory_limit','30M')) {            
   //        echo ":( Bad luck\n";          
   // } else { 
   //     echo 'Memory limit set to: '. ini_get('memory_limit').'<br>'; 
   // } 

						$im = @imagecreatefromjpeg($tmp_name);
//echo '7 ';
						if (!$im) {
//echo '8 ';
							echo "No Image....";
							//exit;
						}
//echo '9 ';
						if ($imw > 160 || $imh > 160) {
							$aspectratio = $imw/$imh;
							if ($aspectratio >= (160/120)) {
								$thw = 160;
								$thh = 120 * ((160/120)/$aspectratio);
							} elseif ($aspectratio <= (120/160)) {
								$thw = 120 * ($aspectratio/(120/160));
								$thh = 160;
							} elseif ($aspectratio >= 1) {
								$thw = 160;
								$thh = 160 * (1/$aspectratio);
							} else {
								$thw = 160 * $aspectratio;
								$thh = 160;
							}
							$thumb = @imagecreatetruecolor($thw, $thh);
							if (!imagecopyresampled($thumb, $im, 0,0, 0,0, $thw,$thh, $imw,$imh)) {
								echo "Image Copy Failed...";
								exit;
							}
							$name = $imagename . "_" . $imagecnt . ".jpg";
							$filepath = "Uploads/Images/Small/$name";
							if (!imagejpeg($thumb,$filepath)) {
								echo "Image save failed";
								exit;
							}
							if ($imw > 640 || $imh > 640) {
  							$aspectratio = $imw/$imh;
  							if ($aspectratio >= (160/120)) {
  								$thw = 640;
  								$thh = 480 * ((160/120)/$aspectratio);
  							} elseif ($aspectratio <= (120/160)) {
  								$thw = 480 * ($aspectratio/(120/160));
  								$thh = 640;
  							} elseif ($aspectratio >= 1) {
  								$thw = 640;
  								$thh = 480* (1/$aspectratio);
  							} else {
  								$thw = 640* $aspectratio;
  								$thh = 640;
  							}
  							$thumb = @imagecreatetruecolor($thw, $thh);
  							if (!imagecopyresampled($thumb, $im, 0,0, 0,0, $thw,$thh, $imw,$imh)) {
  								echo "Image Copy Failed...";
  								exit;
  							}
  							$name = $imagename . "_" . $imagecnt . ".jpg";
  							$filepath = "Uploads/Images/$name";
  							if (!imagejpeg($thumb,$filepath)) {
  								echo "Image save failed";
  								exit;
  							}
							} else {
								$name = $imagename . "_" . $imagecnt . ".jpg";
								if (!move_uploaded_file($tmp_name, "Uploads/Images/$name")) {
									echo "File move failed";
									exit;
								}
							}
						} else {
							$thumb = @imagecreatetruecolor($imw, $imh);
							if (!imagecopyresampled($thumb, $im, 0,0, 0,0, $imw,$imh, $imw,$imh)) {
								echo "Image Copy Failed...";
								exit;
							}
							$name = $imagename . "_" . $imagecnt . ".jpg";
  						$filepath = "Uploads/Images/Small/$name";
  						if (!imagejpeg($thumb,$filepath)) {
  							echo "Image save failed";
  							exit;
  						}
							if (!move_uploaded_file($tmp_name, "Uploads/Images/$name")) {
								echo "File move failed";
								exit;
							}
						}
					} else {
						$imageerrors = 1;
					}
				} else {
					$imageerrors = 1;
				}
			}
		}
	}

	$summaryindic = 0;
	$mediaindic = 0;
	$dateseq = 0;
	$pagenum = 0;
	$storylink = '';

	$urlkeycode = trim($_POST['urlkeycode']);
	parse_str('action=' . str_replace('~','&',$urlkeycode),$urlparms);
	$actionkey = $urlparms['action'];
	if (isset($urlparms['page'])) {
		if ($urlparms['page'] == 'gallery') $pagenum = 99; else $pagenum = $urlparms['page'];
	} else {
		$pagenum = 0;
	}
	if (isset($urlparms['date'])) {
		$decimal = stristr($urlparms['date'],'.');
		if ($decimal != '') {
			$datekey = substr($urlparms['date'],0,8);
			$dateseq = substr($urlparms['date'],9,1);
		} else {
			$datekey = $urlparms['date'];
		}
	} else {
		$datekey = stristr($urlkeycode,'/2004');
		if ($datekey != '') {
			$datekey = substr($datekey,1,8);
		} else {
			$datekey = stristr($urlkeycode,'/2005');
			if ($datekey != '') {
				$datekey = substr($datekey,1,8);
			} else {
				$datekey = 0;
			}
		}
	}
	$parenturl = $_POST['parenturl'];
	include 'commentrankingmap.php';
	switch ($actionkey) {
		case 'Calendar':
			if (isset($rankingmap[$urlparms['month']])) {
				$rank = $rankingmap[$urlparms['month']];
			} else {
				$rank = 999;
				$dateseq = 9;
			}
			break;
		case 'Maps':
			if (isset($rankingmap[$urlparms['state']])) {
				$rank = $rankingmap[$urlparms['state']];
			} else {
				$rank = 999;
				$dateseq = 9;
			}
			break;
		case 'Stats':
			$actionkey = $urlparms['stat'];
			switch ($urlparms['stat']) {
				case 'Favorites':
					if (isset($urlparms['subject']))
						$indexkey = 'Fav' . $urlparms['subject'];
					else
						$indexkey = $urlparms['stat'];
					if (isset($rankingmap[$indexkey])) {
						$rank = $rankingmap[$indexkey];
					} else {
						$rank = 999;
						$dateseq = 9;
					}
					break;
				case 'Family':
				case 'Friends':
				case 'People':
				case 'Oddities':
				case 'Mishaps':
				case 'Revelations':
					if (isset($rankingmap[$urlparms['stat']])) {
						$rank = $rankingmap[$urlparms['stat']];
					} else {
						$rank = 999;
						$dateseq = 9;
					}
					break;
				default:
					$indexkey = $urlparms['stat'] . 'Summary';
					if (isset($rankingmap[$indexkey ])) {
						$rank = $rankingmap[$indexkey];
						$summaryindic = 1;
					} else {
						$rank = 999;
						$dateseq = 9;
					}
			}
			break;
		case 'Pics':
		case 'Panoramas':
		case 'Videos':
			$mediaindic = 1;
			parse_str(str_replace('~','&',$parenturl),$parentparms);
			if ($parentparms['parent_action'] == 'CommentListDisplay') {
				$rank = $urlparms['rank'];
				$pagenum = $urlparms['page'];
				// strip out rank & page parameters
				$urlkeycode = str_replace(stristr($urlkeycode,'~rank='),'',$urlkeycode);
			} else {
				if (isset($parentparms['parent_page'])) $pagenum = $parentparms['parent_page'];
				if (isset($parentparms['parent_date'])) {
					$datekey = $parentparms['parent_date'];
					if (strlen($datekey) > 8) {
						$dateseq = substr($datekey,9,1);
						$datekey = substr($datekey,0,8);
					} else {
						$dateseq = 0;
					}
				} else {
					$datekey = 0;
					$dateseq = 0;
				}
				if (isset($parentparms['parent_action'])) {
					$indexkey = $parentparms['parent_action'];
					if ($indexkey == 'Stats') {
						$stat = $parentparms['parent_stat'];
						switch ($stat) {
							case 'Favorites':
								if (isset($parentparms['parent_subject'])) {
									$indexkey = 'Fav' . $parentparms['parent_subject'];
								} else {
									$indexkey = $stat;
								}
								if (isset($rankingmap[$indexkey])) {
									$rank = $rankingmap[$indexkey];
								} else {
									$rank = 999;
									$dateseq = 9;
								}
								break;
							case 'Family':
							case 'Friends':
							case 'People':
							case 'Oddities':
							case 'Mishaps':
							case 'Revelations':
								if (isset($rankingmap[$stat])) {
									$rank = $rankingmap[$stat];
								} else {
									$rank = 999;
									$dateseq = 9;
								}
								break;
							default:
								$indexkey = $stat . 'Summary';
								if (isset($rankingmap[$indexkey])) {
									$rank = $rankingmap[$indexkey];
									$summaryindic = 1;
								} else {
									$rank = 999;
									$dateseq = 9;
								}
							}
					} else {
						if (isset($rankingmap[$indexkey])) {
							$rank = $rankingmap[$indexkey];
						} else {
							$rank = 999;
							$dateseq = 9;
						}
					}
				} else {
					$rank = 999;
					$dateseq = 9;
				}
			}
			$storylink = stristr($urlkeycode,'~storylink');
			if ($storylink != '') {
				$urlkeycode = str_replace($storylink,'',$urlkeycode);
				$storylink = str_replace('~storylink=','',$storylink);
				$storylink = str_replace('~noback=1','',$storylink);
			}
			break;
		default:
			if (isset($rankingmap[$actionkey])) {
				$rank = $rankingmap[$actionkey];
			} else {
				$rank = 999;
				$dateseq = 9;
			}
	}
	$urlkeycode = str_replace(stristr($urlkeycode,'~nogallery='),'',$urlkeycode);
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$url = trim($_POST['url']);
	$subjectline = trim($_POST['subjectline']);
	$comment = trim($_POST['comment']);
	if ($url != '') {
		if (strpos($url,"http://") === FALSE) {
			$url = "http://$url";
		}
	}
	include "dbconnector.php";
	$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
     or die("Could not connect : " . mysql_error() . "<P>");
  mysql_select_db("$dbname") or die ("Could not select database<P>");

	$security = $_POST['security'];
	if ($security) $commentstatus = 'P'; else $commentstatus = 'A';

	if ($imagecnt) {
	  $query = "INSERT INTO Comments (SourceCode, ActionKey, SummaryIndic, Rank, DateKey, DateSeq, MediaIndic, Page, URLKeyCode, StoryLink, EntryDateTime, Name, Email, URL, Comment, SubjectLine, ImageStatus, ImageName, ImageCount) VALUES ($sourcecode, '$actionkey', $summaryindic, $rank, $datekey, $dateseq, $mediaindic, $pagenum, '$urlkeycode', '$storylink', Now(), '$name', '$email', '$url', '$comment', '$subjectline', '$commentstatus', $imagename, $imagecnt)"; 
	} else {
	  $query = "INSERT INTO Comments (SourceCode, ActionKey, SummaryIndic, Rank, DateKey, DateSeq, MediaIndic, Page, URLKeyCode, StoryLink, EntryDateTime, Name, Email, URL, Comment, SubjectLine) VALUES ($sourcecode, '$actionkey', $summaryindic, $rank, $datekey, $dateseq, $mediaindic, $pagenum, '$urlkeycode', '$storylink', Now(), '$name', '$email', '$url', '$comment', '$subjectline')";
	}

  $result = mysql_query($query) or die ("Query failed : " . mysql_error());
  mysql_free_result($result);
  mysql_close($link);

	if ($imagecnt && $security) include 'commentemail.php';

	$backcount = $_POST['backcount'];

	if ($cookie->commentsortorder == "asc") {
		include 'cookiecommentsortorder.php';
	}

	if ($security) $securityparm = ''; else $securityparm = '&nosecurity=1';
	header("Location: http://$websiteurl/" . $homedirectory . "index.php?action=CommentListEntry&urlkeycode=$urlkeycode&parenturl=$parenturl&imageerrors=$imageerrors&backcount=$backcount$securityparm");
?>