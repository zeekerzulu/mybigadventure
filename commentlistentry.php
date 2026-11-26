<?php
	include 'Javascript/StringUtils.php';
	include 'Javascript/ValidateTextArea.php';
?>
<script language="javascript">
function ValidateForm() {
 	if (trim(document.form.name.value,'both') == '') {
		alert('You must enter a Name/ID.');
		return false;
	}
 	if (trim(document.form.subjectline.value,'both') == '') {
		alert('You must enter a Subject.');
		return false;
	}
 	if (trim(document.form.comment.value,'both') == '') {
		alert('You must enter a Comment.');
		return false;
	}
	return true;
}
function SubmitComment() {
	if (!ValidateForm()) return false;
	//document.form.submit.disabled = true;
	return true;
}
function PreviewComment() {
	if (!ValidateForm()) return false;
	imagecount=0;
	for (index = 12; index >= 9; index--) {
		if (trim(document.form.elements[index].value,'both') != '') imagecount++;
	}
	pagebreak = String.fromCharCode(13,10);
	comment = replace(document.form.comment.value,pagebreak,'<br>');
	comment = replace(comment,'&','~~');
	comment = replace(comment,'"','^^');
	comment = replace(comment,"'","@@");
	destination = "index.php?action=CommentPreview&name=" + document.form.name.value + "&email=" + document.form.email.value + "&url=" + document.form.url.value + "&subjectline=" + document.form.subjectline.value + "&comment=" + comment + "&imagecount=" + imagecount;
	myCommentPreviewPopup(destination);
	return false;
}
</script>
<table class="ContentBanner" width=<?php if ($ads) echo "679"; else echo "802";?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>C O M M E N T S</b></td></tr></table>

<?php
	if (isset($_REQUEST['imageerrors'])) {
		if ($_REQUEST['imageerrors'] != 0) {
			echo "<p><b>WARNING:</b> Your comment has been successfully processed, however, one or more of your submitted images encountered a problem and were ignored.  Sorry for any inconvenience this may have caused you.<p>";
		}
	}

	$backcount = $_REQUEST['backcount'];
	echo "<p><center><a href=javascript:history.go($backcount)>Exit Comments</a></center><p>";
	$backcount--;

	$urlkeycode = $_REQUEST['urlkeycode'];
	$searchurlkeycode = str_replace(stristr($urlkeycode,'~rank='),'',$urlkeycode);
	$searchurlkeycode = str_replace(stristr($searchurlkeycode,'~storylink='),'',$searchurlkeycode);
	$searchurlkeycode = str_replace(stristr($searchurlkeycode,'~nogallery='),'',$searchurlkeycode);
  include "dbconnector.php";
	$commentsperpage = $cookie->commentdisplaynum;

	if (isset($_REQUEST['totalcomments'])) {
		$totalcomments = $_REQUEST['totalcomments'];
	} else {
		$query = "SELECT Count(ID) AS TotalComments FROM Comments WHERE URLKeyCode = '$searchurlkeycode'";
		$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
			or die("Could not connect : " . mysql_error() . "<P>");
		mysql_select_db("$dbname") or die ("Could not select database<P>");
		$result = mysql_query($query) or die ("Query failed : " . mysql_error());
		$row = mysql_fetch_assoc($result);
		$totalcomments = $row["TotalComments"];
 	 	mysql_free_result($result);
 	 	mysql_close($link);
	}
	if (isset($_REQUEST['nosecurity'])) {
		$security = 0;
		$securityparm = "&nosecurity=1";
	} else {
		$security = 1;
		$securityparm = "";
	}
	if (isset($_REQUEST['currentcomment'])) {
		$currentcomment = $_REQUEST['currentcomment'];
	} else {
		$currentcomment = 0;
	}
	if ($totalcomments) {
   	$query = "SELECT ID, Name, Email, URL, date_format(EntryDateTime,'%m.%d.%y - %h:%i %p') AS EntryDateTime, Comment, SubjectLine, ImageStatus, ImageName, ImageCount FROM Comments WHERE SourceCode = $sourcecode AND URLKeyCode = '$searchurlkeycode' ORDER BY ID $cookie->commentsortorder LIMIT $currentcomment, $commentsperpage";
   	$link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
     	or die("Could not connect : " . mysql_error() . "<P>");
    mysql_select_db("$dbname") or die ("Could not select database<P>");
    $result = mysql_query($query) or die ("Query failed : " . mysql_error());
    $totalrows = mysql_num_rows($result);
		$currow = 0;

    // Iteration loop, for each row in rowset
    while ($row = mysql_fetch_assoc($result)) {
			$currow++;
			$id = $row["ID"];
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
			if ($currow == 1) echo "<hr class=Comment>";
			echo "<table cellpadding=0 cellspacing=3><tr><td>&nbsp;<br>";
			if ($imagestatus == 'A') {
				if (!$security) echo "ROOT IMAGE NAME: $imagename<p>";
				for ($index = 1; $index <= $imagecount; $index++) {
					echo "<a href=javascript:myPicPopup" . $index . "('index.php?action=Popup&name=" . $homedirectory . "Uploads/Images/" . $imagename . "_" . $index . ".jpg')><img src=Uploads/Images/Small/" . $imagename . "_" . $index . ".jpg></a>";
					if ($index < $imagecount) echo "&nbsp;";
				}
				echo "<p>";
			} elseif ($imagestatus == 'P') {
				echo "<b>*** Images Pending Approval ***</b><p>";
			} elseif ($imagestatus == 'R') {
				echo "<b>*** Images Removed ***</b><p>";
			}
			if (trim($subjectline) != '') {
				echo "<b>$subjectline</b><p>";
			}
			echo "$comment<p><table width=";
			if ($ads) echo "665"; else echo "790";
			echo "><tr><td><a href='index.php?action=CommentListDisplay&username=$name&backcount=$backcount' title='Display all comments submitted by contributor: $name'>$name</a>";
			if (!empty($email)) echo " | <a href=mailto:$email>Email</a>";
			if (!empty($url)) echo " | <a href=javascript:myPopupCommentator('$url')>URL</a>";
			echo " | $datetime</td><td align=right>Comment #$id</td></tr></table></td></tr></table>";
			if ($currow < $totalrows) echo "<hr class=Comment>";
		}
  	mysql_free_result($result);
  	mysql_close($link);

		echo "<center>";

		if ($totalcomments) {
			if ($currentcomment == 0) {
				$currentpage = 1;
			} else {
				$currentpage = intval($currentcomment/$commentsperpage) + 1;
			}
			$totalpages = ceil($totalcomments/$commentsperpage);
			echo "<hr class=Comment><b>Page</b>";
			for ($index = 1; $index <= $totalpages; $index++) {
				if ($index == $currentpage) {
					echo "<b> $index</b>";
				} else {
					$newcurrentcomment = $currentcomment + ($commentsperpage * ($index - $currentpage));
					echo " <a href=index.php?action=CommentListEntry&urlkeycode=$urlkeycode&parenturl=$parenturl&currentcomment=$newcurrentcomment&totalcomments=$totalcomments&backcount=$backcount$securityparm>$index</a>";
				}
			}
			if ($currow > 1) {
				echo "<hr class=Comment><a href=index.php?action=CommentListEntry&urlkeycode=$urlkeycode&parenturl=$parenturl&currentcomment=0&totalcomments=$totalcomments&backcount=$backcount&reversesortorder=1$securityparm title='Reverse sorting order of the comments listing'>Reverse Order</a>";
			}
		}
		echo "</center>";
	} else {
		echo "There are no comments at this time.<p>Be the first to post a comment!<p>Go for it!!!<p>";
	}
?>
&nbsp;<br>
<table class="ContentBanner" width=<?php if ($ads) echo "679"; else echo "802";?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>A D D&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;N E W&nbsp;&nbsp;&nbsp;C O M M E N T</b></td></tr></table>
<p>
One of the goals of this comment facility is to provide a useful forum for the telling your own adventure stories.  If you wish to backfill anything missing on the webpage associated with this comment listing, please feel free to do so.  For example, while in Yellowstone I didn't see any bears.  Perhaps you did and you have pictures to prove it as well as a story around the experience.  Adding your content will effectively extend the educational utility of this website, as well as give you a voice within the site's user community.
<p>
New comments will be added to the comment listing displayed above.  At the present time, all image uploads are restricted to .jpeg/.jpg formats.  Maximum image size is limited to 100K (sorry, I'm having problems uploading larger files, I'm looking into it).  Depending upon the size of the images you are uploading, the process of posting your comment may take a little while.  Be patient, kick back, and while waiting, why not start planning your next vacation adventure!
<p>
<form name="form" enctype="multipart/form-data" action="index.php?action=CommentPost" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
	<?php
		$parenturl = $_REQUEST['parenturl'];
  	echo "<input type=hidden name=parenturl value='$parenturl'>
				<input name=backcount type=hidden value=$backcount>
				<input name=urlkeycode type=hidden value='$urlkeycode'>
				<input name=security type=hidden value='$security'>";
		if (isset($_REQUEST['PreviewReturn'])) {
			$returnname = $_POST['name'];
			$returnemail = $_POST['email'];
			$returnurl = $_POST['url'];
			$returnsubjectline = $_POST['subjectline'];
			$returncomment = $_POST['comment'];
		}
	?>
	<table cellspacing="0" cellpadding="7" border="0">
		<tr>
			<td class="ContentArea" width="60">Name/ID:*</td>
			<td class="ContentArea"><input class="SetFieldColor" name="name" type="text" size="10" maxlength="20"
				<?php if (isset($returnname)) echo "value='$returnname'"?>></td>
		</tr>
		<tr>
			<td class="ContentArea"valign="top">Email:</td>
			<td class="ContentArea"><input class="SetFieldColor" name="email" type="text" size="20" maxlength="50"
				<?php if (isset($returnemail)) echo "value='$returnemail'"?>><br>
			</td>
		</tr>
		<tr>
			<td class="ContentArea" valign="top">URL:</td>
			<td class="ContentArea"><input class="SetFieldColor" name="url" type="text" size="45" maxlength="100"
				<?php if (isset($returnurl)) echo "value='$returnurl'"?>><br>
			</td>
		</tr>
		<tr>
			<td class="ContentArea" valign="top">Subject:*</td>
			<td class="ContentArea"><input class="SetFieldColor" name="subjectline" type="text" size="45" maxlength="100"
				<?php if (isset($returnsubjectline)) echo "value='$returnsubjectline'"?>><br>
			</td>
		</tr>
		<tr>
			<td class="ContentArea" valign="top">Comment:*<p>(5000 char max)</td>
			<td class="ContentArea">
				<textarea class="SetFieldColor" wrap="on" name="comment" cols=35 rows=8
					onChange="return ValidateTextArea(this.value,5000,'Comments','')"><?php if (isset($returncomment)) echo "$returncomment"?></textarea>
			</td>
		</tr>
		<tr>
			<td class="ContentArea">Image #1:</td>
			<td class="ContentArea">
  		 	<input class="SetFieldColor" name="userfile[]" type="file" />
			</td>
		</tr>
		<tr>
			<td class="ContentArea">Image #2:</td>
			<td class="ContentArea">
  		 	<input class="SetFieldColor" name="userfile[]" type="file" />
			</td>
		</tr>
		<tr>
			<td class="ContentArea">Image #3:</td>
			<td class="ContentArea">
  		 	<input class="SetFieldColor" name="userfile[]" type="file" />
			</td>
		</tr>
		<tr>
			<td class="ContentArea">Image #4:</td>
			<td class="ContentArea">
  		 	<input class="SetFieldColor" name="userfile[]" type="file" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="ContentArea"><br>
				<input class="SetButtonColor" name="submit" type="submit" value="Submit" onClick="return SubmitComment()">
				&nbsp;&nbsp;&nbsp;
				<input class="SetButtonColor" name="preview" type="submit" value="Preview" onClick="return PreviewComment()">
				&nbsp;&nbsp;&nbsp;
				<input class="SetButtonColor" name="reset" type="reset" value="Reset">
			</td>
		</tr>
		<tr><td colspan=2>
			* Required fields.
			<p>
			** Large image uploads may take a while, there is no need to re-press the Submit Button.
		</td></tr>

	</table>
</form>
<script language="javascript">
	document.form.name.focus();
</script>