<table id='BannerWide' class="ContentBanner" width=678 cellspacing=0 cellpadding=7>
	<tr><td width='25%' align=left>
	<?php
		$date = $_REQUEST['date']; 
		$page = $_REQUEST['page'];
		$searchaction = 'FetchDayCount';
		$datekey = $date;
		//include 'commentlinks.php';
	?>
	</td><td class="BannerText" align="center"><b>T R A V E L&nbsp;&nbsp;&nbsp;L O G</b></td><td width="25%" align="right">
	<?php
	  include 'sharecontrol.php';
    include 'navshortcut.php';
  ?>
  </td></tr></table><div id='BannerNarrow'><b>T R A V E L&nbsp;&nbsp;&nbsp;L O G</b>
	<?php include 'sharecontrol.php'?>
	<br>
	<?php include 'navshortcut.php'?>
	</div>
<?php
  if ($cookie['theme'] === 'theme2') {
    echo "<p class='HeadingDarkMode'></p>";
  }
	if (false && $commentprocessing && $page == 1) {
		$searchaction = 'FetchDayCounts';
		$datekey = $date;
		echo "<center>";
		include 'commentlinks.php';
		echo "</center><p>";
	}
	$includefile = "Travel_Log/${date}/page_${page}.php";
	if ($cookie['theme'] == 'theme1') {
	  echo "<div class='LinkSensitive'>" ;
	  include $includefile;
	  echo "</div>";
	} else {
	  include $includefile;
	}
?>