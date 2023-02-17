<?php

	$class = $class ?? "default class";
	$imgClass = $imgClass ?? "default imgClass";
	$img = $img ?? "https://peprojects.dev/images/landscape.jpg";
	$alt = $alt ?? "default alt text";
	$copy = $copy ?? "<h3 class='info-voice'>This is a graphic diptych</h3><p class='reading-voice'>Check out this super nice photo.</p>";
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

		<?=$copy?>

	</section>

</graphic-diptych>