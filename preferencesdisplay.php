<table class="ContentBanner" width=802 cellspacing=0 cellpadding=7>
	<tr><td class="BannerText" align="center"><b>P R E F E R E N C E S</b><?php include 'sharecontrol.php' ?></td></tr></table>
<form id="form" name="form" action="index.php?action=PreferencesTestPage" method="post">
	<?php
		$colorpaletteselectedarray = array('','','','','','','','','','','','','','','','','','','','','','','','');
		$fontselectedarray = array('','','','','','','','','','','','','','');
		$fontsizeselectedarray = array('','','','','','');
		$themeselectedarray = array('','');
		// Force to first palette color if nighttime theme is set and palette isn't a solid color
		if ($cookie['theme'] == 'theme2' && (int)str_replace('palette','',$cookie['colorpalette']) > 7) {
		  $cookie['colorpalette'] = 'palette1';
		}
		switch ($cookie['colorpalette']) {
			case 'palette1': $colorpaletteselectedarray[0] = 'selected'; break;
			case 'palette2': $colorpaletteselectedarray[1] = 'selected'; break;
			case 'palette3': $colorpaletteselectedarray[2] = 'selected'; break;
			case 'palette4': $colorpaletteselectedarray[3] = 'selected'; break;
			case 'palette5': $colorpaletteselectedarray[4] = 'selected'; break;
			case 'palette6': $colorpaletteselectedarray[5] = 'selected'; break;
			case 'palette7': $colorpaletteselectedarray[6] = 'selected'; break;
			case 'palette8': $colorpaletteselectedarray[7] = 'selected'; break;
			case 'palette9': $colorpaletteselectedarray[8] = 'selected'; break;
			case 'palette10': $colorpaletteselectedarray[9] = 'selected'; break;
			case 'palette11': $colorpaletteselectedarray[10] = 'selected'; break;
			case 'palette12': $colorpaletteselectedarray[11] = 'selected'; break;
			case 'palette13': $colorpaletteselectedarray[12] = 'selected'; break;
			case 'palette14': $colorpaletteselectedarray[13] = 'selected'; break;
			case 'palette15': $colorpaletteselectedarray[14] = 'selected'; break;
			case 'palette16': $colorpaletteselectedarray[15] = 'selected'; break;
			case 'palette17': $colorpaletteselectedarray[16] = 'selected'; break;
		}
		switch ($cookie['font']) {
			case 'font1': $fontselectedarray[0] = 'selected'; break;
			case 'font2': $fontselectedarray[1] = 'selected'; break;
			case 'font3': $fontselectedarray[2] = 'selected'; break;
			case 'font4': $fontselectedarray[3] = 'selected'; break;
			case 'font5': $fontselectedarray[4] = 'selected'; break;
			case 'font6': $fontselectedarray[5] = 'selected'; break;
			case 'font7': $fontselectedarray[6] = 'selected'; break;
			case 'font8': $fontselectedarray[7] = 'selected'; break;
			case 'font9': $fontselectedarray[8] = 'selected'; break;
			case 'font10': $fontselectedarray[9] = 'selected'; break;
			case 'font11': $fontselectedarray[10] = 'selected'; break;
			case 'font12': $fontselectedarray[11] = 'selected'; break;
			case 'font13': $fontselectedarray[12] = 'selected'; break;
			case 'font14': $fontselectedarray[13] = 'selected'; break;
		}
		switch ($cookie['fontsize']) {
			case 'x-small': $fontsizeselectedarray[0] = 'selected'; break;
			case 'small': $fontsizeselectedarray[1] = 'selected'; break;
			case 'medium': $fontsizeselectedarray[2] = 'selected'; break;
			case 'medium-large': $fontsizeselectedarray[3] = 'selected'; break;
			case 'large': $fontsizeselectedarray[4] = 'selected'; break;
			case 'x-large': $fontsizeselectedarray[5] = 'selected'; break;
		}
		switch ($cookie['theme']) {
			case 'theme1': $themeselectedarray[0] = 'selected'; $disabled = ''; break;
			case 'theme2': $themeselectedarray[1] = 'selected'; $disabled = 'disabled'; break;
		}
echo "<p>Use this page to personalize your browsing experience by changing the site's color theme, font, font size, and mode.<p>After submission you will be taken to a test page where you can review your changes then re-edit them if desired.<p>
          <table class='PreferenceControls'><tr><td class='Label'>Theme *</td>
					<td><select id='colorpalette' name='colorpalette'>
					  <option value='palette1' $colorpaletteselectedarray[0]>Green</option>
						<option value='palette2' $colorpaletteselectedarray[1]>Brown</option>
						<option value='palette3' $colorpaletteselectedarray[2]>Orange</option>
						<option value='palette4' $colorpaletteselectedarray[3]>Blue</option>
						<option value='palette5' $colorpaletteselectedarray[4]>Purple</option>
						<option value='palette6' $colorpaletteselectedarray[5]>Pink</option>
						<option value='palette7' $colorpaletteselectedarray[6]>Gray</option>
						<option value='palette8' $colorpaletteselectedarray[7] $disabled>Groovy - Left to Right</option>
						<option value='palette9' $colorpaletteselectedarray[8] $disabled>Groovy - Diagonal</option>
						<option value='palette10' $colorpaletteselectedarray[9] $disabled>Groovy Mix</option>
						<option value='palette11' $colorpaletteselectedarray[10] $disabled>Bricks</option>
						<option value='palette12' $colorpaletteselectedarray[11] $disabled>Marble</option>
						<option value='palette13' $colorpaletteselectedarray[12] $disabled>Clouds</option>
						<option value='palette14' $colorpaletteselectedarray[13] $disabled>Wood</option>
						<option value='palette15' $colorpaletteselectedarray[14] $disabled>Fur</option>
						<option value='palette16' $colorpaletteselectedarray[15] $disabled>Sand</option>
						<option value='palette17' $colorpaletteselectedarray[16] $disabled>Paper</option>						
						<!-- Depricated
  					  <option value='palette9' $colorpaletteselectedarray[8] $disabled>Groovy - Top to Bottom</option>
	  					<option value='palette11' $colorpaletteselectedarray[10] $disabled>Groovy - Radial</option>-->
					</select>
				  </td></tr>
				  <tr><td class='Label'>Font</td>
				  <td><select name='font'>
						<option value='font1' $fontselectedarray[0]> Arial</option>
						<option value='font2' $fontselectedarray[1]> Bookman Old Style</option>
						<option value='font3' $fontselectedarray[2]> Calibri</option>
						<option value='font4' $fontselectedarray[3]> Courier New</option>
						<option value='font5' $fontselectedarray[4]> Garamond</option>
						<option value='font6' $fontselectedarray[5]> Georgia</option>
						<option value='font7' $fontselectedarray[6]> Helvetica</option>
						<option value='font8' $fontselectedarray[7]> Lucida</option>
            <option value='font9' $fontselectedarray[8]> Monaco Monospace</option>
						<option value='font10' $fontselectedarray[9]> Palatino Linotype</option>
						<option value='font11' $fontselectedarray[10]> Roboto</option>
						<option value='font12' $fontselectedarray[11]> Times New Roman</option>
						<option value='font13' $fontselectedarray[12]> Trebuchet MS</option>
						<option value='font14' $fontselectedarray[13]> Verdana</option>
					</select>
					</td></tr>
					<tr><td class='Label'>Font Size</td>
					<td><select name='fontsize'>
						<option value='x-small' $fontsizeselectedarray[0]> X-Small</option>
						<option value='small' $fontsizeselectedarray[1]> Small</option>
						<option value='medium' $fontsizeselectedarray[2]> Medium</option>
						<option value='medium-large' $fontsizeselectedarray[3]> Medium-Large</option>
						<option value='large' $fontsizeselectedarray[4]> Large</option>
						<option value='x-large' $fontsizeselectedarray[5]> X-Large</option>
					</select>
					</td></tr>
					<tr><td class='Label'>Mode</td>
					<td><select name='theme' onchange='AdjustPreferenceForm(this)'>
					<option value='theme1' $themeselectedarray[0]>Day</option>
					<option value='theme2' $themeselectedarray[1]>Night</option>
					</td></tr>
					<tr><td></td><td>
					  <div class='SubmitButton' onclick=\"document.forms['form'].submit()\">Submit</div>
					</tr></tr></table><p>* Only solid color themes are allowed when mode is set to 'Night.'";
	?>
	<hr>
	<p>
	<b>Note:</b> To set your preferences, cookies are required. You can turn cookies on in your browser's preferences function.
</form>