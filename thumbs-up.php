<?php
	$counter = rand(1,4);
	$rating = str_replace('.','_',$rating);
	# <td><img src='Graphics/Thumbs/thumbs-up-$cookie->theme-$rating-ver$counter.GIF'></td>
	echo "<table cellspacing=0 cellpadding=0>
		<tr><td valign=bottom><b>Rating:</b>&nbsp;</td>
			<td><img class='ThumbsUp' src='Graphics/Thumbs/thumbs-up-theme1-$rating-ver$counter.GIF'></td>
			<td valign=bottom>&nbsp;(5 max)</td></tr></table>";
?>