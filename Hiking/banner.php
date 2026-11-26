<?php
	if ($picrotator) {
			echo '<img src="' . $rootdirectory . 'Graphics/' . $topbanner2 . '">';
	} elseif ($ads) {
			echo '<img src="' . $rootdirectory . 'Graphics/' . $topbanner3 . '">';
	} else {
			if ($sourcecode == 1)
				echo '<img src="Graphics/' . $topbanner1 . '">';
			else
				echo '<img src="Graphics/Client/' . $topbanner1 . '">';
	}
?>