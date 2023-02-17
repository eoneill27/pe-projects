<?php 

	$heading = $heading ?? "This is a generic-text module";
	$text1 = $text1 ?? "This is just some generic text in the generic text module. ";
	$text2 = $text2 ?? "And more generic text, so you can get a feel for what this looks like. Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Qui distinctio saepe temporibus quisquam ullam necessitatibus voluptatum, rerum minima, quod quae inventore, quis eum officia commodi quo, sequi architecto dolores deserunt?";
?>

<generic-text>

	<header class="module-header">
		<h1 class="attention-voice"><?=$heading?></h1>
	</header>

	<p class="reading-voice"><?=$text1?></p>

	<p class="reading-voice"><?=$text2?></p>

	<div class="button">
		<a class="button-voice" href="about.php">Find out more</a>
	</div>

</generic-text>
 