<?php
// Text legend under a state map (JD, 2026-11-27): the same pins as the image map, in words, grouped the way the
// state file groups them (<!-- SIGHTS --> etc.), so phones (no hover) can read what each pin is. Reads the state file
// itself, so a pin flipped from Under Construction to live shows up here with no extra edit.
$legendfile = "States/$state.php";
if ($state != 'USA' && is_file($legendfile)) {
  $groups = array(); $order = array(); $group = '';
  foreach (file($legendfile) as $line) {
    if (preg_match('/<!--\s*([A-Z][A-Z ]+?)\s*-->/', $line, $m)) { $group = ucwords(strtolower($m[1])); if ($group == 'Travel Log') $group = 'Travel Log'; continue; }
    if (!preg_match('/<AREA [^>]*HREF="([^"]*)"[^>]*TITLE="([^"]*)"/i', $line, $m)) continue;
    $href = $m[1]; $title = $m[2];
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
