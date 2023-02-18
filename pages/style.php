<section class="style-guide">
	<inner-column>

		
			<h1 class="heyyou-voice style-heading">Style guide</h1>
			
		<div class="style-div">
			<h1 class="heyyou-voice">This is the Hey You! voice</h1>
			<h2 class="attention-voice">This is the Attention voice</h2>
			<h3 class="info-voice">This is the Info voice</h3>
			<p class="reading-voice">This is the reading voice.</p>
		</div>
		
		<div class="style-div">
			<?php include('templates/modules/generic-text/generic-text.php'); ?>
		</div>

		<div class="style-div">
			<?php include('templates/modules/graphic-diptych/graphic-diptych.php'); ?>
		</div>

		<div class="style-div">
			<?php 
				$class = "flipped";
				$diptychCopy = "<h3 class='info-voice'>This is another graphic diptych</h3><p class='reading-voice'>This is what the diptych looks like when it's flipped.</p>";
				include('templates/modules/graphic-diptych/graphic-diptych.php'); ?>
		</div>

		<div class="style-div">
			<?php 
				$header = "<h2 class='attention-voice'>These are some featured things</h2>";
				$json = file_get_contents('data/projects.json');
				$array = json_decode($json, true);

				include('templates/modules/featured-cards/featured-cards.php'); ?>
		</div>

		<div class="style-div">
			<?php 
				$header = "This is a grid of cards";
				$subHeader = "You can put lots of different things here";
				$json = file_get_contents('data/projects.json');
				$array = json_decode($json, true);

				include('templates/modules/card-grid/card-grid.php'); ?>
		</div>

	</inner-column>
</section>