<?php

	$header = (isset($header)) ? $header : "";
	$totalShown = 2;
	// $array = $array;
	$array = array_slice($array, 0, $totalShown);
?>

<featured-cards>
	<h2 class="heyyou-voice"><?=$header?></h2>

	<ul>

		<?php 
			foreach ($array as $thing) { ?>

				<li>
					<a href="<?=$thing['url'];?>">
						<div class="card-tile">
							<h3 class="info-voice"><?=$thing['title'];?></h3>
							<p class="reading-voice"><?=$thing['description'];?></p>
						</div>
					</a>
				</li>
			
		<?php }; ?>
		
	</ul>

	<div class="button">
		<a class="button-voice" href="projects.php">Find out more</a>
	</div>
</featured-cards>

