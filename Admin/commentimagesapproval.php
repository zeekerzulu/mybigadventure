<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>C O M M E N T&nbsp;&nbsp;&nbsp;I M A G E S&nbsp;&nbsp;&nbsp;A P P R O V A L</b></td></tr></table>
<p>
<?php
	$imagename = trim($_REQUEST['imagename']);
	$urlkeycode = trim($_REQUEST['urlkeycode']);

	$db_Table = "Comments";
		
	include "dbconnector.php"; // DB info
		
	$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
     or die("Could not connect : " . mysql_error() . "<P>");

  mysql_select_db("$dbname") or die ("Could not select database<P>");

	$query = "UPDATE Comments SET ImageStatus = 'A' WHERE ImageName = $imagename";

  $result = mysql_query($query) or die ("Query failed : " . mysql_error());

  /* Free resultset */
  mysql_free_result($result);

  /* Closing connection */
  mysql_close($link);
?>
<center>
The images have been approved and are now on display and available to the user community.
<p>
Click <a href=javascript:myPopup1('index.php?action=CommentListEntry&urlkeycode=<?php echo $urlkeycode?>')>here</a> to view the comments page containing this newly approved comment.
</center>