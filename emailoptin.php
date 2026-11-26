<?php 
	include 'Javascript/StringUtils.php';
?>
<script language="javascript">
function ValidateForm() {
 	if (trim(document.form.youremail.value,'both') == '') {
		alert('You must enter your email address.');
		return false;
	}
	document.form.submit.disabled = true;
}
</script>
<table class=ContentBanner width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>O P T - I N&nbsp;&nbsp;&nbsp;F O R&nbsp;&nbsp;&nbsp;N O T I F I C A T I O N&nbsp;&nbsp;&nbsp;E M A I L</b></td></tr></table>
<p>
<?php
	if (isset($_REQUEST['backlink'])) {
		echo "<center><a href=javascript:history.go(-1)>Back</a></center>";
	}
?>
<p>
Interested in receiving periodic email notifications from MyBigAdventure?  Periodically the website distributes email to interested individuals who wish to keep up with my travels.  All I'm selling is the idea that travel is a wonderful thing that should be shared to help inspire others to travel as well.  It's as simple as that!
<p>
To get on the website's email distribution list, simply enter your email address in the below field then press the Submit Button.  Within 24 hours, your email address will be added the website's email distribution list.
<p>
If, in the future, you no longer wish to receive any more emails, you may simply <a href="index.php?action=EmailOptOut">opt-out</a> of the email list.
<p>
<form name="form" action="index.php?action=EmailOptInPost" method="post" onsubmit="return ValidateForm()">
	<table>
		<tr>
			<td width="165">Your Email Address:</td>
			<td><input class="SetFieldColor" name="youremail" type="text" size="50" maxlength="50"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><br>
				<center>
				<input class="SetButtonColor" name="submit" type="submit" value="Submit">
				</center>
			</td>
		</tr>
	</table>
</form>	
<script language="javascript">
	document.form.youremail.focus();
</script>