<?php

	$class = $class ?? "default class";
	$imgClass = $imgClass ?? "default imgClass";
	$img = $img ?? "https://peprojects.dev/images/landscape.jpg";
	$alt = $alt ?? "default alt text";
	$diptychCopy = $section['content'] ?? "<h3 class='info-voice'>This is a graphic diptych</h3><p class='reading-voice'>Check out this super nice photo. This is a place to write something interesting, maybe something about the photo, or maybe not!</p>";
	// $class = "";
	// $img = "https://peprojects.dev/images/landscape.jpg";
	// $alt = "Test alt text.";
	// $heading = "This is a heading";
	// $copy = "This is just some sample text. I'm just testing this out. Just testing, just testing, just testing!"
?>

<graphic-diptych class="<?=$class?>">
	
	<picture class="diptych-pic <?=$imgClass?>">
		<img src="<?=$img?>" alt="<?=$alt?>">
	</picture>

	<section class="diptych-text">

		<?=$diptychCopy?>

	</section>

</graphic-diptych>