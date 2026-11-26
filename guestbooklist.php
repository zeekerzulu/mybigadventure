<table class="ContentBanner" width=802 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>G U E S T B O O K</b></td></tr></table>
<br>
<?php 
	if (isset($_REQUEST['backcount'])) {
		$backcount = $_REQUEST['backcount'];
	} else {
		$backcount = -1;
	}
	echo "<p><center><a href=javascript:history.go($backcount)>Exit Guestbook</a></center><p>";
	$backcount--;
	echo "Wish to sign my <a href=index.php?action=GuestBookEntry&backcount=$backcount>Guestbook</a>?<p>";
	$entriesperpage = 7;
	if (isset($_REQUEST['totalentries'])) {
		$totalentries = $_REQUEST['totalentries'];
	} else {
		$query = "SELECT Count(ID) AS TotalRecs FROM GuestBook WHERE SourceCode = $sourcecode";
  	include "dbconnector.php";
  	$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
   		or die("Could not connect : " . mysql_error() . "<P>");
  	mysql_select_db("$dbname") or die ("Could not select database<P>");
 		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
		$row = mysql_fetch_assoc($result);
		$totalentries = $row["TotalRecs"];
  	mysql_free_result($result);
  	mysql_close($link);
	}
	if ($totalentries) echo "<p>Here's what past visitors had to say about the site:";
	$totalpages = ceil($totalentries/$entriesperpage);
	if (isset($_REQUEST['currententry'])) {
		$currententry = $_REQUEST['currententry'];
	} else {
		$currententry = 0;
	}
  $query = "SELECT * FROM GuestBook Where SourceCode = $sourcecode ORDER BY ID DESC LIMIT $currententry, $entriesperpage"; 
	include "dbconnector.php"; // DB info
  $link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
    or die("Could not connect : " . mysql_error() . "<P>");
  mysql_select_db("$dbname") or die ("Could not select database<P>");
  $result = mysql_query($query) or die ("Query failed : " . mysql_error());
  $totalrows = mysql_num_rows($result);
	echo "<table width='800' border='0' cellspacing='0' cellpadding='3' bordercolor='bbbbbb'>
		<tr><td colspan='2'><hr class='GuestBook'></td></tr>";
  while ($row = mysql_fetch_assoc($result)) {
		$ID = $row["ID"];
		$Name = $row["Name"];
		$EMail = $row["EMail"];
		$URL = $row["URL"];
		$City = $row["City"];
		$State = $row["State"];
		$Country = $row["Country"];
		$Activities = $row["Activities"];
		$Vacations = $row["Vacations"];
		$Comments = $row["Comments"];
		echo "<tr><td><b>$Comments</b></td>
			<td width='75' align='right' valign='top'><!--Msg #$ID--></td></tr><tr><td>$Name";
		if ($EMail != '') {
			echo " | <a href='mailto:$EMail'>Email</a>";
		}
		if ($URL != '') {
			echo " | <a href=javascript:myPopup1('$URL')>URL</a>";
		} 
		if ($sourcecode != 1) echo " - " . date('d.m.y @ h:ia');
		echo "</td></tr><tr><td>$City $State $Country</td></tr>";
		if ($Activities != '') {
			echo "<tr><td>Activities: $Activities</td></tr>";
		}
		if ($Vacations != '') {
			echo "<tr><td>Vacations: $Vacations</td></tr>";
		}
		echo "<tr><td colspan='2'><hr class='GuestBook'></td></tr>";
	}
	if ($totalentries) {
		echo "<tr><td colspan=2><center><b>Page</b> ";
		if ($currententry == 0) {
			$currentpage = $totalpages;
		} else {
			$currentpage = $totalpages - intval($currententry/$entriesperpage);
		}
		for ($index = $totalpages; $index >= 1; $index--) {
			if ($index == $currentpage) {
				echo "<b> $index</b>";
			} else {
				$newcurrententry = $currententry - ($entriesperpage * ($index - $currentpage));
				echo " <a href=index.php?action=GuestBookList&currententry=$newcurrententry&totalentries=$totalentries&backcount=$backcount>$index</a>";
			}
		}
		echo "<hr class='GuestBook'></td></tr>";
	}
	echo "</table></center>";
  mysql_free_result($result);
  mysql_close($link);
?>