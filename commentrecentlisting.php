<?php
	$query = "SELECT ID, Name, date_format(EntryDateTime,'%m.%d.%y<br>%h:%i%p') AS EntryDateTime, SubjectLine FROM Comments WHERE SourceCode = $sourcecode ORDER BY ID DESC LIMIT 0,6";
  include "dbconnector.php";
  $link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
   	or die("Could not connect : " . mysql_error() . "<P>");
  mysql_select_db("$dbname") or die ("Could not select database<P>");
 	$result = mysql_query($query) or die ("Query failed : " . mysql_error());
  $totalrows = mysql_num_rows($result);
	if ($totalrows != 0) {
		echo "<table class=ContentBanner width=802 cellspacing=0 cellpadding=7>
	<tr><td class=BannerText align=center><b>M O S T&nbsp;&nbsp;&nbsp;R E C E N T&nbsp;&nbsp;&nbsp;W E B S I T E&nbsp;&nbsp;&nbsp;C O M M E N T S</b></td></tr></table>";
		echo "<table width=802><tr><td valign=top>";
		$currow = 0;
		if (isset($nosecurity)) $securityparm = '&nosecurity=1'; else $securityparm = '';
	  while ($row = mysql_fetch_assoc($result)) {
			$currow++;
			$id = $row["ID"];
			$name = $row["Name"];
			$entrydatetime = $row["EntryDateTime"];
			$subjectline = $row["SubjectLine"];
			if ($currow == 4) echo "</table></td><td valign=top>";
			if ($currow == 1 || $currow == 4)
				echo "<table cellspacing=10><tr><td><b>NAME</b></td><td><b>DATE</b></td><td><b>SUBJECT LINE</b></td></tr>";
			echo "<tr><td valign=top>$name</td><td valign=top>$entrydatetime</td><td valign=top><a href=index.php?action=CommentListDisplay&ID=$id&backcount=-1$securityparm>$subjectline</a></td></tr>";
		}
		echo "</table></td></tr></table>";
	}
	mysql_free_result($result);
	mysql_close($link);
?>