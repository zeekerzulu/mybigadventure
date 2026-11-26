<?php 
		include 'Javascript/StringUtils.php';
		include 'Javascript/ValidateTextArea.php';
		if (stristr($_SERVER['HTTP_REFERER'],'mybigadventure')) {
				$pagelink = str_replace('&reversesortorder=1','',$_SERVER['HTTP_REFERER']);
		} else {
				$pagelink = '';
		}
?>
<script language="javascript">
function ValidateForm() {
 	if (trim(document.form.youremail.value,'both') == '') {
		alert('You must enter your email address.');
		return false;
	}
 	if (trim(document.form.friendemail.value,'both') == '') {
		alert('You must enter your friend\'s email address.');
		return false;
	}
 	if (trim(document.form.subjectline.value,'both') == '') {
		alert('You must enter a subject line.');
		return false;
	}
 	if (trim(document.form.message.value,'both') == '') {
		alert('You must enter a message.');
		return false;
	}
	document.form.submit.disabled = true;
}
</script>
<table class="ContentBanner" width=<?php if ($rootdirectory == '') echo "808"; else echo "802"?> cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>S E N D&nbsp;&nbsp;&nbsp;P A G E&nbsp;&nbsp;&nbsp;T O&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;F R I E N D</b></td></tr></table>
<p>
<center><a href='javascript:history.go(-1)'>Back</a></center>
<p>
Wish to share the current page with one or more friends?  Just fill out the form below and press the Submit Button.  An email containing the following will be sent to all your recipients: 1) your personalized message, 2) a relevent link to the page, 3) general links to various useful website functions.
<p>
You will be carbon-copied automatically on all email sent.  This website will not store, market or sell any information you enter on this form.
<p>
<form name="form" action="index.php?action=SendPageLinkPost" method="post" onsubmit="return ValidateForm()">
<input name="pagelink" type="hidden" value="<?php echo $pagelink?>">
	<table>
		<tr>
			<td width="165">Your Email Address:</td>
			<td><input class="SetFieldColor" name="youremail" type="text" size="50" maxlength="50"></td>
		</tr>
		<tr>
			<td valign="top">Friend's Email Address:</td>
			<td><input class="SetFieldColor" name="friendemail" type="text" size="50" maxlength="1000"><br>
			* Please separate multiple email addresses with a semi-colon.
			</td>
		</tr>
		<tr>
			<td valign="top">Subject Line:</td>
			<td><input class="SetFieldColor" name="subjectline" type="text" size="50" maxlength="100"><br>
			</td>
		</tr>
		<tr>
			<td valign="top">Message:<p>1500 chars max</td>
			<td><textarea class="SetFieldColor" wrap="on" name="message" cols=60 rows=6
				onChange="return ValidateTextArea(this.value,1500,'Message','')"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><br>
				<input class="SetButtonColor" name="submit" type="submit" value="Submit">
				&nbsp;&nbsp;&nbsp;
				<input class="SetButtonColor" name="reset" type="reset" value="Reset">
			</td>
		</tr>
	</table>
</form>	
<script language="javascript">
	document.form.youremail.focus();
</script>