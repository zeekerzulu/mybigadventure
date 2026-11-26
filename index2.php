<?php
	ob_start();
	if (setcookie('MyTest','a cow jumped over the moon',time()+60*60*24*10000,"/")) {
	  echo 'success';
	} else {
	  echo 'failure';
	}
	ob_end_flush();
?>