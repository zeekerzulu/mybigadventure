<?php
  $heading_orig = $heading;
  $heading = explode(' ', strtoupper($heading));
  $words = [];
  for ($index = 0; $index < count($heading); $index++) {
    $word = $heading[$index];
    $new_word = '';
    for ($index2 = 0; $index2 < strlen($word); $index2++) {
      $new_word .= $word[$index2];
      if ($index2 < strlen($word)-1) {
        $new_word .= ' ';
      }
    }
    array_push($words, $new_word);
  }
  $heading = "<nobr>" . implode('</nobr>&nbsp;&nbsp; <nobr>', $words) . "</nobr>";
  // Fix broken <br> tag
  $heading = str_replace(' < B R > ', '</nobr><br><nobr>', $heading); 
?>
<center>
<h1 class='Heading' id='Heading'
<?php
  if ($action == 'DailyEvents') {
    echo ' name="' . str_replace('<br>',' ',$heading_orig) . '"';
  }
?>
><b><?php echo $heading ?></b>
<?php 
  if ($headingsecondary) {
    echo "<p class='Heading'></p>$headingsecondary";
  }
  if ($headingdate) {
    echo "<p class='Heading'></p>$headingdate";
  }
  // Daily log only: "Day X of Y" under the date (JD, 2026-11-27). Day 1 = July 8, 2004; Y = the trip's Days Away.
  if ($action == 'DailyEvents' && isset($_REQUEST['date']) && preg_match('/^(\d{4})(\d{2})(\d{2})$/', $_REQUEST['date'], $dm)) {
    $daynum = (int)((mktime(12, 0, 0, (int)$dm[2], (int)$dm[3], (int)$dm[1]) - mktime(12, 0, 0, 7, 8, 2004)) / 86400) + 1;
    if ($daynum >= 1 && $daynum <= 200) echo "<p class='Heading'></p><span class='DayOf'>Day $daynum of 186</span>";
  }
?>
</h1>
</center>
<p>