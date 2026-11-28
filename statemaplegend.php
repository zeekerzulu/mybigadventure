<?php
// Text legend under a state map (JD, 2026-11-27): the same pins as the image map, in words, grouped the way the
// state file groups them (<!-- SIGHTS --> etc.), so phones (no hover) can read what each pin is. Reads the state file
// itself, so a pin flipped from Under Construction to live shows up here with no extra edit.
$legendfile = "States/$state.php";
if ($state != 'USA' && is_file($legendfile)) {
  // Neighbouring states are drawn as clickable polygons in the same file; a pin whose centre falls inside one of
  // them was placed in a neighbour's strip of the map and is left out of this state's legend (JD, 2026-11-27).
  $lines = file($legendfile); $neighbours = array();
  foreach ($lines as $line) {
    if (preg_match('/<AREA [^>]*COORDS="([\d,]+)"[^>]*HREF="[^"]*action=Maps&state=/i', $line, $m)) {
      $c = array_map('intval', explode(',', $m[1])); if (count($c) >= 6) $neighbours[] = $c;
    }
  }
  $inside = function ($x, $y, $poly) {
    $n = count($poly) / 2; $in = false;
    for ($i = 0, $j = $n - 1; $i < $n; $j = $i++) {
      $xi = $poly[2 * $i]; $yi = $poly[2 * $i + 1]; $xj = $poly[2 * $j]; $yj = $poly[2 * $j + 1];
      if ((($yi > $y) != ($yj > $y)) && ($x < ($xj - $xi) * ($y - $yi) / (($yj - $yi) ?: 0.0001) + $xi)) $in = !$in;
    }
    return $in;
  };
  $groups = array(); $order = array(); $group = '';
  foreach ($lines as $line) {
    if (preg_match('/<!--\s*([A-Z][A-Z ]+?)\s*-->/', $line, $m)) { $group = ucwords(strtolower($m[1])); if ($group == 'Travel Log') $group = 'Travel Log'; continue; }
    if (!preg_match('/<AREA [^>]*COORDS="([\d,]+)"[^>]*HREF="([^"]*)"[^>]*TITLE="([^"]*)"/i', $line, $m)) continue;
    $coords = array_map('intval', explode(',', $m[1])); $href = $m[2]; $title = $m[3];
    if (count($coords) >= 4) {
      $xs = array(); $ys = array(); for ($k = 0; $k + 1 < count($coords); $k += 2) { $xs[] = $coords[$k]; $ys[] = $coords[$k + 1]; }
      $cx = array_sum($xs) / count($xs); $cy = array_sum($ys) / count($ys); $out = false;
      foreach ($neighbours as $poly) if ($inside($cx, $cy, $poly)) { $out = true; break; }
      if ($out) continue;
    }
    if ($group == '' || $group == 'States' || $group == 'Stats') continue;
    if (strpos($href, 'action=Maps') !== false) continue;
    if ($group == 'Travel Log') {
      if (!preg_match('/date=(\d{8})/', $href, $d)) continue;
      $label = date('M j', mktime(12, 0, 0, (int)substr($d[1], 4, 2), (int)substr($d[1], 6, 2), (int)substr($d[1], 0, 4)));
      if ($title != '' && $title != 'Travel Log') $label .= ' ' . preg_replace('/^Travel Log\s*-\s*/', '', $title);
    } else {
      if ($title == '') continue;
      $label = $title;
    }
    $label = htmlspecialchars($label, ENT_QUOTES);
    $uc = strpos($href, 'UnderConstruction') !== false;
    $item = $uc ? "<span class='MapLegendPlanned' title='Under construction'>$label</span>" : "<a href=\"$href\">$label</a>";
    if (!isset($groups[$group])) { $groups[$group] = array(); $order[] = $group; }
    $groups[$group][] = $item;
  }
  if (count($order)) {
    echo "<div class='MapLegend'>";
    foreach ($order as $g) echo "<b>$g:</b> " . implode(' &middot; ', $groups[$g]) . "<br>\n";
    echo "</div>";
  }
}
?>
