<?php
	$querystring = $_SERVER['QUERY_STRING'];
	$querystring = str_replace('&e','&noe',$querystring);
	parse_str($querystring);
?>
<script language="javascript">
function processedit() {
	return true;
}
function canceledit() {
	document.myform.action = 'index.php?action=AdventureLog&page=<?php echo $page; ?>';
}
</script>
<html><head><title>My Big Adventure Page Edit</title></head>
<body>
<form name="myform" action="editprocess.php?<?php echo $querystring ?>" method="post" onsubmit="return processedit();">
<textarea name="htmlcontent" rows="25" cols="120">
<?php
	if ($page == 'gallery') {
		if (isset($area))
			include 'AdventureLog/' . $area . '/gallery.php';
		else
			include 'AdventureLog/gallery.php';
	} else {
		if (isset($area))
			include 'AdventureLog/' . $area .'/page_' . $page . '.php';
		else
			include 'AdventureLog/page_' . $page . '.php';
	}
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
