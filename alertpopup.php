<?php
 	if ($cookie->alertnewfeatures = 'on') {
		echo "<script language=javascript>";
		$alerturl = "'http://" . $websiteurl . "/index.php?action=Alert&alert=$alert'";
		echo "myAlertPopup($alerturl)";
		echo "</script>";
	}
?>
