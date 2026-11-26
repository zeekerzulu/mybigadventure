<?php
setcookie($cookiename,"font=" . $cookie['font'] . "&fontsize=" . $cookie['fontsize'] . "&theme=" . $cookie['theme'] . "&colorpalette=" . $cookie['colorpalette'] . "&rememberpageurl=" . $cookie['rememberpageurl'],time()+60*60*24*10000,"/");
?>