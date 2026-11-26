<?php
		$counter1 = rand(1,10000);
		$counter2 = rand(1,10000);
		$counter3 = rand(1,10000);
		$counter4 = rand(1,10000);
		$counter5 = rand(1,10000);
		$counter6 = rand(1,10000);
		$counter7 = rand(1,10000);
		$counter8 = rand(1,10000);
		$counter9 = rand(1,10000);
		$counter10 = rand(1,10000);
		// Decided post-completion to just pop into the same tab so always return 1; keeping code if I change my mind
		$counter1 = $counter2 = $counter3 = $counter4 = $counter5 = $counter6 = $counter7 = $counter8 = $counter9 = $counter10 = 1;
?>
<script type="text/javascript">
<!--
function myPostTripFunPopup1(URL) {
window.open(URL, "myPostTripFunPopup1", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 875, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPostTripFunPopup2(URL) {
window.open(URL, "myPostTripFunPopup2", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 875, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPostTripFunPopup3(URL) {
window.open(URL, "myPostTripFunPopup3", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 875, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPostTripFunPopup4(URL) {
window.open(URL, "myPostTripFunPopup4", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 875, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPostTripFunPopup5(URL) {
window.open(URL, "myPostTripFunPopup5", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 875, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myCommentPreviewPopup(URL) {
window.open(URL, "myCommentPreviewPopup", "status = 1, toolbar = 0, menubar = 0, left = 100, top = 80, height = 525, width = 730, resizable = 0, scrollbars = 1, directories = 0, location = 0" )
}
function myAlertPopup(URL) {
window.open(URL, "myAlertPopup", 
"status = 1, toolbar = 0, menubar = 0, left = 200, top = 200, height = 400, width = 700, resizable = 1, scrollbars = 1, directories = 0, location = 0" )
}
function myPicPopup1(URL) {
window.open(URL, "myPicPopup1", 
"status = 1, toolbar = 0, menubar = 0, left = 100, top = 100, height = 575, width = 690, resizable = 1, scrollbars = 1, directories = 0, location = 0" )
}
function myPicPopup2(URL) {
window.open(URL, "myPicPopup2", 
"status = 1, toolbar = 0, menubar = 0, left = 100, top = 100, height = 575, width = 690, resizable = 1, scrollbars = 1, directories = 0, location = 0" )
}
function myPicPopup3(URL) {
window.open(URL, "myPicPopup3", 
"status = 1, toolbar = 0, menubar = 0, left = 100, top = 100, height = 575, width = 690, resizable = 1, scrollbars = 1, directories = 0, location = 0" )
}
function myPicPopup4(URL) {
window.open(URL, "myPicPopup4", 
"status = 1, toolbar = 0, menubar = 0, left = 100, top = 100, height = 575, width = 690, resizable = 1, scrollbars = 1, directories = 0, location = 0" )
}
function myPopupComment(URL) {
window.open(URL, "myWindowComment", 
"status = 1, toolbar = 0, menubar = 0, left = 0, top = 0, height = 545, width = 475, resizable = 1, scrollbars = 1, directories = 0, location = 0" )
}
function myPopupCommentator(URL) {
window.open(URL, "myWindowCommentator", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function changeMap(URL) {
if (URL.match('mappoint')) {
  URL='https://maps.google.com?q=' + URL.replace(/.*\&TI=(.*)/,'$1');
}
return URL;
}  
function myPopup1(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter1?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup2(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter2?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup3(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter3?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup4(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter4?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup5(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter5?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup6(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter6?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup7(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter7?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup8(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter8?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup9(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter9?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
function myPopup10(URL) {
URL=changeMap(URL);
window.open(URL, "myWindow<?php echo $counter10?>", 
"status = 1, toolbar = 1, menubar = 1, left = 100, top = 80, height = 600, width = 800, resizable = 1, scrollbars = 1, directories = 1, location = 1" )
}
//-->
</script>