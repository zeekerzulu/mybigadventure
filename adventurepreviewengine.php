<?php
		include 'adventurepreviewmap.php';
		$counter1 = rand(0,115);
		do {
			$counter2 = rand(0,115);
		} while ($counter2 == $counter1);
		do {
			$counter3 = rand(0,115);
		} while ($counter3 == $counter2 || $counter3 == $counter1);
		do {
			$counter4 = rand(0,115);
		} while ($counter4 == $counter3 || $counter4 == $counter2 || $counter4 == $counter1);
		do {
			$counter5 = rand(0,115);
		} while ($counter5 == $counter4 || $counter5 == $counter3 || $counter5 == $counter2 || $counter5 == $counter1);
		do {
			$counter6 = rand(0,115);
		} while ($counter6 == $counter5 || $counter6 == $counter4 || $counter6 == $counter3 || $counter6 == $counter2 || $counter6 == $counter1);
		do {
			$counter7 = rand(0,115);
		} while ($counter7 == $counter6 || $counter7 == $counter5 || $counter7 == $counter4 || $counter7 == $counter3 || $counter7 == $counter2 || $counter7 == $counter1);
		do {
			$counter8 = rand(0,115);
		} while ($counter8 == $counter7 || $counter8 == $counter6 || $counter8 == $counter5 || $counter8 == $counter4 || $counter8 == $counter3 || $counter8 == $counter2 || $counter8 == $counter1);
		do {
			$counter9 = rand(0,115);
		} while ($counter9 == $counter8 || $counter9 == $counter7 || $counter9 == $counter6 || $counter9 == $counter5 || $counter9 == $counter4 || $counter9 == $counter3 || $counter9 == $counter2 || $counter9 == $counter1);
		do {
			$counter10 = rand(0,115);
		} while ($counter10 == $counter9 || $counter10 == $counter8 || $counter10 == $counter7 || $counter10 == $counter6 || $counter10 == $counter5 || $counter10 == $counter4 || $counter10 == $counter3 || $counter10 == $counter2 || $counter10 == $counter1);
	$previewdisplaycnt = 10;
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter1][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter1][1];
		$name = $adventurepreviewmap[$counter1][2];
		$link = $adventurepreviewmap[$counter1][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter2][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter2][1];
		$name = $adventurepreviewmap[$counter2][2];
		$link = $adventurepreviewmap[$counter2][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter3][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter3][1];
		$name = $adventurepreviewmap[$counter3][2];
		$link = $adventurepreviewmap[$counter3][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter4][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter4][1];
		$name = $adventurepreviewmap[$counter4][2];
		$link = $adventurepreviewmap[$counter4][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter5][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter5][1];
		$name = $adventurepreviewmap[$counter5][2];
		$link = $adventurepreviewmap[$counter5][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter6][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter6][1];
		$name = $adventurepreviewmap[$counter6][2];
		$link = $adventurepreviewmap[$counter6][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter7][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter7][1];
		$name = $adventurepreviewmap[$counter7][2];
		$link = $adventurepreviewmap[$counter7][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter8][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter8][1];
		$name = $adventurepreviewmap[$counter8][2];
		$link = $adventurepreviewmap[$counter8][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter9][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter9][1];
		$name = $adventurepreviewmap[$counter9][2];
		$link = $adventurepreviewmap[$counter9][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
	$previewdisplaycnt--;
	if ($previewdisplaycnt >= 0) {
		$category = $adventurepreviewmap[$counter10][0];
		if ($category == 'Sights') $category2 = "Sites"; else $category2 = $category;
		$state = $adventurepreviewmap[$counter10][1];
		$name = $adventurepreviewmap[$counter10][2];
		$link = $adventurepreviewmap[$counter10][3];
		echo "<tr><td><a href=index.php?action=StatsIndex&stat=$category2&page=1 title='Category Index'>$category</a></td><td><a href=index.php?action=Maps&state=$state title='State Map'>$state</a></td><td><a href=index.php?action=$link title='Get the Full Scoop on the Adventure!'>$name</a></td></tr>";
	}
?>