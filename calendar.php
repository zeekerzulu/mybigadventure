<?php
	if (isset($_REQUEST['date'])) $currdate = $_REQUEST['date']; else $currdate = '';
	$month = $_REQUEST['month'];
?>
<table class="ContentBanner" width=808 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>C A L E N D A R</b><?php include 'sharecontrol.php' ?></td></tr></table>
<br>
<center>
<div class='TripCalendar'>
<div class='MonthsWide'>
<?php
if ($month == 'July') {
  echo '<b>July</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=July">July</a>';
}
if ($month == 'August') {
  echo '<b>August</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=August">August</a>';
}
if ($month == 'September') {
  echo '<b>September</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=September">September</a>';
}
if ($month == 'October') {
  echo '<b>October</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=October">October</a>';
}
if ($month == 'November') {
  echo '<b>November</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=November">November</a>';
}
if ($month == 'December') {
  echo '<b>December</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=December">December</a>';
}
if ($month == 'January') {
  echo '<b>January</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=January">January</a>';
}
?>
<a href="#Help">Help</a>
</div>
<div class='MonthsNarrow'>
<?php
if ($month == 'July') {
  echo '<b>Jul</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=July">Jul</a>';
}
if ($month == 'August') {
  echo '<b>Aug</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=August">Aug</a>';
}
if ($month == 'September') {
  echo '<b>Sep</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=September">Sep</a>';
}
if ($month == 'October') {
  echo '<b>Oct</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=October">Oct</a>';
}
if ($month == 'November') {
  echo '<b>Nov</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=November">Nov</a>';
}
if ($month == 'December') {
  echo '<b>Dec</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=December">Dec</a>';
}
if ($month == 'January') {
  echo '<b>Jan</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=January">Jan</a>';
}
?>
</div>
<p>
<?php
	switch ($month) {
		case 'July':
			include 'calendarjuly.php';
			break;
		case 'August':
			include 'calendaraugust.php';
			break;
		case 'September':
			include 'calendarseptember.php';
			break;
		case 'October':
			include 'calendaroctober.php';
			break;
		case 'November':
			include 'calendarnovember.php';
			break;
		case 'December':
			include 'calendardecember.php';
			break;
		case 'January':
			include 'calendarjanuary.php';
			break;
	}
?>
<div class='MonthsWide'>
<p>
<?php
if ($month == 'July') {
  echo '<b>July</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=July">July</a>';
}
if ($month == 'August') {
  echo '<b>August</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=August">August</a>';
}
if ($month == 'September') {
  echo '<b>September</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=September">September</a>';
}
if ($month == 'October') {
  echo '<b>October</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=October">October</a>';
}
if ($month == 'November') {
  echo '<b>November</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=November">November</a>';
}
if ($month == 'December') {
  echo '<b>December</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=December">December</a>';
}
if ($month == 'January') {
  echo '<b>January</b>';
} else {
  echo '<a href="index.php?action=Calendar&month=January">January</a>';
}
?>
<a href="#Help">Help</a>
</div>
<p>
</div>
</center>
<table cellpadding=7>
<tr><td valign=top>
<center>
<a id="Help"></a><hr class="Journal2"><b>C A L E N D A R&nbsp;&nbsp;&nbsp;G U I D E</b><hr class="Journal2">
</center>
<p>
The site's calendar function is a "one-stop-shop" for all information access, broken down by month and day.  You can browse a particular month to get an overall idea of the places I've visited and the things I've done.  If a particular day piques your interest, you can drill into that day's event information using the various links made available within each day entry.
<p>
<center>
<img class='CalendarKey' src="Graphics/calendarkey.png">
<img class='CalendarKeyMobile' src="Graphics/calendarkeymobile.png">
<p>
<h1><hr class="Journal2">Primary Links<hr class="Journal2"></h1>
</center>
<p>
<b>Daily Activity Detail</b> - Provides access to all of the day's events and activities.  This will be of interest to those folks who want to get a broad picture of what I did for the day.
<!--<p>
The "city" link (City Website) will take you to a website that supports tourism for the day's predominate city and  may be of interest to those who are researching good places to vacation to.-->
<p>
<b>Map</b> - Provides access the state's map and is helpful to those folks who want to see exactly where the day's activities took place.
<p>
<center>
<h1><hr class="Journal2">Activity Detail Links<hr class="Journal2"></h1>
</center>
<p>
The remaining links provide easy access my individual daily activities and sundries.  Some days will have many links, other days will have few.
</td></tr>
</table>