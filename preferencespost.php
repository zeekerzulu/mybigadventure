<?php
  if (isset($_COOKIE[$cookiename])) {
    parse_str($_COOKIE[$cookiename], $current_cookie);
    $cookie['colorpalette'] = $current_cookie['colorpalette'];
    $cookie['rememberpageurl'] = $current_cookie['rememberpageurl'];
  } else {
    $cookie['colorpalette'] = 'palette1';
    $cookie['rememberpageurl'] = '';
  }
	$cookie['font'] = $_POST['font'];
	$cookie['fontsize'] = $_POST['fontsize'];
	$cookie['theme'] = $_POST['theme'];
	if (count($_POST) == 4) {
	  $cookie['colorpalette'] = $_POST['colorpalette'];
	}
	include 'cookiesetparameters.php';
?>