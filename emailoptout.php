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
	<tr><td class="BannerText" align="center"><b>O P T - O U T&nbsp;&nbsp;&nbsp;O F&nbsp;&nbsp;&nbsp;N O T I F I C A T I O N&nbsp;&nbsp;&nbsp;E M A I L</b></td></tr></table>
<p>
<?php
	if (isset($_REQUEST['backlink'])) {
		echo "<center><a href=javascript:history.go(-1)>Back</a></center>";
	}
?>
<p>
Are your receiving MyBigAdventure email that you no longer wish to receive?  If so, simply enter your email address in the below field then press the Submit Button.  Within 24 hours, your email address will be removed from the website's emailing list.
<p>
<form name="form" action="index.php?action=EmailOptOutPost" method="post" onsubmit="return ValidateForm()">
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