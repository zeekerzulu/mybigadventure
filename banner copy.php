<?php
   echo '<table id="TopBanner1" cellspacing=0 cellpadding=0 class="TopBanner"><tr><td width="160px"><img class="TopBanner" src="' . $rootdirectory . 'Graphics/top_banner_left.png"></td><td><a href="index.php?action=Home" title="Home"><img class="TopBanner" src="' . $rootdirectory . 'Graphics/top_banner.png"></a></td>';
   if ($picrotator) {
		echo '<td width="127px"><img class="TopBanner" src="' . $rootdirectory . 'Graphics/top_banner_right.png"></td>';
  }
  echo '</table><table id="TopBanner2" cellspacing=0 cellpadding=0 class="TopBanner"><tr><td class="TopBannerMenu"><img src="Graphics/menu.png" onclick="MenuControl(this)"></td><td><a href="index.php?action=Home" title="Home"><img class="TopBanner" src="' . $rootdirectory . 'Graphics/top_banner_narrow.png"></a></td></table>';
?>