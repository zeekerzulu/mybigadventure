<?php
// Text legend under a state map (JD, 2026-11-27): the same pins as the image map, in words, grouped the way the
// state file groups them (<!-- SIGHTS --> etc.), so phones (no hover) can read what each pin is. Reads the state file
// itself, so a pin flipped from Under Construction to live shows up here with no extra edit.
function legend_norm($t) { $t = str_replace(array('<br>', "\\'"), array(' ', "'"), $t); $t = html_entity_decode($t, ENT_QUOTES); return strtolower(trim(preg_replace('/\s+/', ' ', $t))); }
function legend_headings($stat) {
  static $cache = array();
  if (isset($cache[$stat])) return $cache[$stat];
  $map = array();
  foreach (glob("Statistics/$stat/page_*.php") as $f) {
    if (!preg_match('/^Statistics\/[A-Za-z]+\/page_(\d+)\.php$/', $f, $pm)) continue;
    $head = file_get_contents($f, false, null, 0, 600);
    if (preg_match("/\\\$heading = '((?:[^'\\\\]|\\\\.)*)'/", $head, $hm) && $hm[1] !== '') $map[legend_norm($hm[1])] = (int)$pm[1];
  }
  return $cache[$stat] = $map;
}
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
  // A pin whose day is already published is judged by that day's state in navshortcutmap.php (exact); other pins
  // fall back to the polygon test above.
  include_once 'navshortcutmap.php';
  $groups = array(); $order = array(); $group = '';
  foreach ($lines as $line) {
    if (preg_match('/<!--\s*([A-Z][A-Z ]+?)\s*-->/', $line, $m)) { $group = ucwords(strtolower($m[1])); if ($group == 'Travel Log') $group = 'Travel Log'; continue; }
    if (!preg_match('/<AREA [^>]*COORDS="([\d,]+)"[^>]*HREF="([^"]*)"[^>]*TITLE="([^"]*)"/i', $line, $m)) continue;
    $coords = array_map('intval', explode(',', $m[1])); $href = $m[2]; $title = $m[3];
    $daystate = '';
    if (preg_match('/date=(\d{8})/', $href, $dd) && isset($navshortcutmap[$dd[1]][4])) $daystate = $navshortcutmap[$dd[1]][4];
    if ($daystate != '') { if ($daystate != $state) continue; }
    elseif (count($coords) >= 4) {
      $xs = array(); $ys = array(); for ($k = 0; $k + 1 < count($coords); $k += 2) { $xs[] = $coords[$k]; $ys[] = $coords[$k + 1]; }
      // sample the pin's centre and corners; a pin is a neighbour's if most of it lies in neighbour polygons
      // (pins can straddle the hairline gap between two neighbour polygons, e.g. Lake Placid on the PA map)
      $cx = array_sum($xs) / count($xs); $cy = array_sum($ys) / count($ys);
      $samples = array(array($cx, $cy), array(min($xs), min($ys)), array(max($xs), min($ys)), array(min($xs), max($ys)), array(max($xs), max($ys)));
      $hits = 0;
      foreach ($samples as $pt) foreach ($neighbours as $poly) if ($inside($pt[0], $pt[1], $poly)) { $hits++; break; }
      if ($hits >= 3) continue;
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
    $uc = strpos($href, 'UnderConstruction') !== false;
    // A pin that names several entries ("Boot of Despair, Pink Duck & Haggard Graves") links only to the first;
    // give each name its own link when every name matches a page heading in that section (JD, 2026-11-27).
    $parts = array();
    if (!$uc && $group != 'Travel Log' && preg_match('/stat=([A-Za-z]+)&/', $href, $sm) && preg_match('/(, | & )/', $title)) {
      $heads = legend_headings($sm[1]);
      if (!isset($heads[legend_norm($title)])) {
        // split on ", ", " & " and ", & "; a name with its own page links there, any other name keeps the pin's link
        $names = preg_split('/, & |, | & /', $title); $matched = 0;
        foreach ($names as $nm) if (isset($heads[legend_norm($nm)])) $matched++;
        if (count($names) > 1 && $matched >= 2) foreach ($names as $nm) $parts[] = array($nm, isset($heads[legend_norm($nm)]) ? preg_replace('/page=\d+/', 'page=' . $heads[legend_norm($nm)], $href) : $href);
      }
    }
    if (count($parts)) {
      $links = array(); foreach ($parts as $pp) $links[] = "<a href=\"" . $pp[1] . "\">" . htmlspecialchars($pp[0], ENT_QUOTES) . "</a>";
      $item = implode(' &middot; ', $links);
    } else {
      $label = htmlspecialchars($label, ENT_QUOTES);
      $item = $uc ? "<span class='MapLegendPlanned' title='Under construction'>$label</span>" : "<a href=\"$href\">$label</a>";
    }
    if (!isset($groups[$group])) { $groups[$group] = array(); $order[] = $group; }
    $groups[$group][] = $item;
  }
  if (count($order)) {
    echo "<div class='MapLegend'>";
    foreach ($order as $g) echo "<div class='MapLegendGroup'><b>$g</b><div class='MapLegendItems'>" . implode(' &middot; ', $groups[$g]) . "</div></div>\n";
    echo "</div>";
  }
}
?>
