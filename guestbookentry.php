<?php 
		include $rootdirectory . 'Javascript/StringUtils.php';
		include $rootdirectory . 'Javascript/ValidateTextArea.php';
?>
<script language="javascript">
function ValidateForm() {
	if (trim(document.form.name.value,'both') == '') {
		alert("You must enter your name.");
		return false;
	}
	if (trim(document.form.comments.value,'both') == '') {
		alert("You must enter a comment.");
		return false;
	}
	return true;
}
</script>
<table class="ContentBanner" width=802 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>G U E S T B O O K</b></td></tr></table>
<p>
<center><a href='javascript:history.go(-1)'>Back</a></center>
<p>
Please add your comments to my Guestbook.  I'm curious to learn more about who is visiting my site and what they have to say.  Not to worry, I won't be selling your information so please feel free to tell me as much about youself as you can.
<p>
* The only required fields are name and comments.
<p>
<form name="form" action="index.php?action=GuestBookPost" method="post" onsubmit="return ValidateForm();">
<?php
	$backcount = $_REQUEST['backcount'];
	$backcount--;
	echo "<input name=backcount type=hidden value=$backcount>";
?>
	<table>
		<tr>
			<td width="14%">Name:</td>
			<td><input class="SetFieldColor" name="name" type="text" size="50" maxlength="50"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input class="SetFieldColor" name="email" type="text" size="50" maxlength="100"></td>
		</tr>
		<tr>
			<td>URL:</td>
			<td><input class="SetFieldColor" name="url" type="text" size="50" maxlength="100"></td>
		</tr>
		<tr>
			<td>City:</td>
			<td><input class="SetFieldColor" name="city" type="text" size="50" maxlength="50"></td>
		</tr>
		<tr>
			<td>State:</td>
			<td><input class="SetFieldColor" name="state" type="text" size="2" maxlength="2"></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><input class="SetFieldColor" name="country" type="text" size="25" maxlength="25"></td>
		</tr>
		<tr>
			<td>Favorite<br>Outdoor<br>Activities:</td>
			<td><textarea class="SetFieldColor"  wrap="on" name="activities" cols=60 rows=3
				onChange="return ValidateTextArea(this.value,500,'Favorite Activities','')"></textarea></td>
		</tr>
		<tr>
			<td>Favorite<br>Vacations:</td>
			<td><textarea class="SetFieldColor"  wrap="on" name="vacations" cols=60 rows=3
				onChange="return ValidateTextArea(this.value,500,'Favorite Vacations','')"></textarea></td>
		</tr>
		<tr>
			<td>Comments:</td>
			<td><textarea class="SetFieldColor"  wrap="on" name="comments" cols=60 rows=10
				onChange="return ValidateTextArea(this.value,1500,'Comments','')"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><br>
				<input class="SetButtonColor" name="submit" type="submit" value="Submit">
				&nbsp;&nbsp;&nbsp;
				<input class="SetButtonColor" name="reset" type="reset" value="Reset">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><br>
				PLEASE CLICK THE SUBMIT BUTTON ONCE !!!<br><br>If you are waiting for a response......and it takes a long time......just click "reload" on your browser...
			</td>
		</tr>
	</table>
</form>	