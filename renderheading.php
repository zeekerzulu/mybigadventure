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
  // "Day X of 186" under the date on every heading that carries a trip date (JD, 2026-11-27): day 1 = July 8, 2004.
  // A date range ("... to<br>...", multi-day entries) shows "Days X-Y". Dates are read from $headingdate, which tolerates
  // the stray comma in some entries ("Tuesday, August, 24, 2004"); daily log pages use the URL date instead.
  $tripdays = array();
  if ($action == 'DailyEvents' && isset($_REQUEST['date']) && preg_match('/^(\d{4})(\d{2})(\d{2})$/', $_REQUEST['date'], $dm)) {
    $tripdays[] = mktime(12, 0, 0, (int)$dm[2], (int)$dm[3], (int)$dm[1]);
  } elseif ($headingdate && preg_match_all('/(January|February|March|April|May|June|July|August|September|October|November|December),?\s+(\d{1,2}),?\s+(200[45])/', $headingdate, $mm, PREG_SET_ORDER)) {
    foreach ($mm as $d) $tripdays[] = mktime(12, 0, 0, (int)date('n', strtotime($d[1] . ' 1 2004')), (int)$d[2], (int)$d[3]);
  }
  $daynums = array();
  foreach ($tripdays as $t) { $n = (int)(($t - mktime(12, 0, 0, 7, 8, 2004)) / 86400) + 1; if ($n >= 1 && $n <= 200) $daynums[] = $n; }
  if (count($daynums) == 1) echo "<p class='Heading'></p><span class='DayOf'>Day $daynums[0] of 186</span>";
  elseif (count($daynums) > 1) echo "<p class='Heading'></p><span class='DayOf'>Days " . min($daynums) . "-" . max($daynums) . " of 186</span>";
?>
</h1>
</center>
<p>