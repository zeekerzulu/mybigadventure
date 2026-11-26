<?php
	$querystring = $_SERVER['QUERY_STRING'];
	$querystring = str_replace('&edit','&noedit',$querystring);
	parse_str($querystring);
?>
<script language="javascript">
$canceledit = 0;
function processedit() {
	if ($canceledit) return true;
	alert('Process Edit');
	return true;
}
function canceledit() {
	alert('Cancel Edit');
	$canceledit = 1;
	document.myform.action = 'index.php?action=AdventureLog&page=<?php echo $page; ?>';
}
</script>
<html><head><title>My Big Adventure Page Edit</title></head>
<body>
<form name="myform" action="index.php?<?php echo $querystring ?>" method="post" onsubmit="return processedit();">
<textarea rows="25" cols="120">
<?php
	if ($page == 'gallery')
		include 'AdventureLog/gallery.php';
	else
		include 'AdventureLog/page_' . $page . '.php';
?>
</textarea>
<p>
<center>
<input type="submit" name="submit" value="Submit">
&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" value="Cancel" onclick="return canceledit();">
<input type="hidden" name="querystring" value="<?php echo $querystring ?>">
</center>
</form>
</body>
</html>
