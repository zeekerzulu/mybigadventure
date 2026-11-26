<?php 
	$state = $_REQUEST['state'];
	if ($state != 'USA') {
	  echo '<center>';
	}
	include "States/$state.php";
?>