<small></small><table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>P E N D I N G&nbsp;&nbsp;&nbsp;C O M M E N T&nbsp;&nbsp;&nbsp;I M A G E S</b></td></tr></table>
<p>
<?php
	$imagename = $_REQUEST['imagename'];
	$homedirectory = $_REQUEST['homedirectory'];

	$db_Table = "Comments";
		
	include "dbconnector.php"; // DB info
		
	$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
     or die("Could not connect : " . mysql_error() . "<P>");

  mysql_select_db("$dbname") or die ("Could not select database<P>");

	$query = "SELECT ID, URLKeyCode, Name, Email, URL, date_format(EntryDateTime,'%m.%d.%y - %h:%i %p') AS EntryDateTime, Comment, SubjectLine, ImageStatus, ImageName, ImageCount FROM Comments WHERE ImageName = $imagename";
  
	$result = mysql_query($query) or die ("Query failed : " . mysql_error());

	$row = mysql_fetch_assoc($result);
	$id = $row["ID"];
	$urlkeycode = $row["URLKeyCode"];
	$name = $row["Name"];
	$email = $row["Email"];
	$datetime = $row["EntryDateTime"];
	$url = $row["URL"];
	$subjectline = $row["SubjectLine"];
	$comment = $row["Comment"];
	$comment = str_replace(chr(10),"<br>",$comment);
	$comment = str_replace(chr(92),"",$comment);
	$imagestatus = $row["ImageStatus"];
	$imagename = $row["ImageName"];
	$imagecount = $row["ImageCount"];

	for ($index = 1; $index <= $imagecount; $index++) {
		echo "<img src=" . $homedirectory . "Uploads/Images/Small/" . $imagename . "_" . $index . ".jpg>&nbsp;&nbsp;&nbsp;";
	}
	echo "<p><b>$subjectline</b><p>$comment<p>Status: $imagestatus | $name";
	if (trim($email) != '') echo " | $email";
	if (trim($url) != '') echo " | $url";
	echo "| $datetime | Comment #$id<p>";

  /* Free resultset */
  mysql_free_result($result);

  /* Closing connection */
  mysql_close($link);

?>
<p>
<form name=form action="index.php?action=AdminCommentImagesApproval&imagename=<?php echo $imagename?>&urlkeycode=<?php echo $urlkeycode?>" method="post">
	<input type="submit" name="submit" value="Approve">
</form>