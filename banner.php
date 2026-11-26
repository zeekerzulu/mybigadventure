<?php
  if ((int) str_replace('palette','',$colorpalette) >= 13) {
    $banner_main = 'top_banner_main_2.png';
    $banner_main_narrow = 'top_banner_main_narrow_2.png';
    $banner_main_tiny = 'top_banner_main_tiny.png';
  } else {
    $banner_main = 'top_banner_main.png';
    $banner_main_narrow = 'top_banner_main_narrow.png';
    $banner_main_tiny = 'top_banner_main_tiny.png';
  }
  if ($action == 'social-media-gallery') {
    $home_action = 'javascript:void(0)';
  } else {
    $home_action = 'index.php?action=Home';
  }
  echo '<div id="TopBanner1" class="TopBannerWrapper PaletteColor"><span class="TopBannerLeft"><img src="' . $rootdirectory . 'Graphics/top_banner_left.png"></span><span class="TopBannerMain"><a href="' . $home_action . '" title="Home"><img src="' . $rootdirectory . 'Graphics/' . $banner_main . '"></a></span>';
  if ($picrotator) {
		echo '<span class="TopBannerRight"><img src="' . $rootdirectory . 'Graphics/top_banner_right.png"></span>';
  }
  echo '</div><div id="TopBanner2" class="TopBannerWrapper PaletteColor"><span id="TopBannerMenu" class="TopBannerMenu"><img src="Graphics/menu.png" onclick="MenuControl(this)"></span><span class="TopBannerMain"><a href="' . $home_action . '" title="Home"><img src="' . $rootdirectory . 'Graphics/' . $banner_main . '"></a></span><span class="TopBannerMainNarrow"><a href="' . $home_action . '" title="Home"><img src="' . $rootdirectory . 'Graphics/' . $banner_main_narrow . '"></a></span><span class="TopBannerMainTiny"><a href="' . $home_action . '" title="Home"><img src="' . $rootdirectory . 'Graphics/' . $banner_main_tiny . '"></a></span></div>';
?>