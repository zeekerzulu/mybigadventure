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
?>
</h1>
</center>
<p>