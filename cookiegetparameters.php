<?php
if (isset($_COOKIE[$cookiename])) {
  parse_str($_COOKIE[$cookiename], $cookie);
} else {
  $cookie['font'] = "font1";
  $cookie['fontsize'] = "medium";
  $cookie['theme'] = "theme1";
  $cookie['colorpalette'] = "palette1";
  $cookie['rememberpageurl'] = "";
  include 'cookiesetparameters.php';
}
?>